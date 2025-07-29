<?php
/*
 * Since 2007 PayPal
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 *  versions in the future. If you wish to customize PrestaShop for your
 *  needs please refer to http://www.prestashop.com for more information.
 *
 *  @author Since 2007 PayPal
 *  @author 202 ecommerce <tech@202-ecommerce.com>
 *  @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 *  @copyright PayPal
 *
 */

use PaypalAddons\classes\AbstractMethodPaypal;
use PaypalAddons\services\PaymentData;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Validate PPP payment
 */
class PaypalMbValidationModuleFrontController extends PaypalAbstarctModuleFrontController
{
    /* @var $method MethodMB*/
    protected $method;

    public function init()
    {
        parent::init();

        $this->method = AbstractMethodPaypal::load('MB');
    }

    /**
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        $paypal = Module::getInstanceByName($this->name);
        $paymentData = $this->parsePaymentData(Tools::getAllValues());
        $this->method->setPaymentId($paymentData->getPaymentID());
        $this->method->setPayerId($paymentData->getPaymentID());
        $this->method->setRememberedCards($paymentData->getRememberedCards());

        try {
            $this->method->validation();
            $cart = Context::getContext()->cart;
            $customer = new Customer($cart->id_customer);
            $this->redirectUrl = 'index.php?controller=order-confirmation&id_cart=' . $cart->id . '&id_module=' . $paypal->id . '&id_order=' . $paypal->currentOrder . '&key=' . $customer->secure_key;
        } catch (Exception $e) {
            $this->_errors['error_code'] = $e->getCode();
            $this->_errors['error_msg'] = $e->getMessage();
        } finally {
            $this->transaction_detail = $this->method->getDetailsTransaction();
        }

        if (!empty($this->_errors)) {
            $this->redirectUrl = Context::getContext()->link->getModuleLink($this->name, 'error', $this->_errors);
        }
    }

    public function displayAjaxGetPaymentInfo()
    {
        $paymentInfo = $this->method->getPaymentInfo();
        $responseContent = [
            'success' => true,
            'paymentInfo' => $paymentInfo,
        ];
        $this->jsonValues = $responseContent;
    }

    protected function parsePaymentData($data)
    {
        $paymentDataObj = new PaymentData();

        if (!empty($data['token'])) {
            $paymentDataObj->setPaymentID($data['token']);
        }
        if (!empty($data['PayerID'])) {
            $paymentDataObj->setPayerID($data['PayerID']);
        }

        if (!empty($data['paymentData'])) {
            $paymentData = json_decode($data['paymentData'], true);

            if (!empty($paymentData['paymentId'])) {
                $paymentDataObj->setPaymentID($paymentData['paymentId']);
            }
            if (!empty($paymentData['paymentID'])) {
                $paymentDataObj->setPaymentID($paymentData['paymentID']);
            }
            if (!empty($paymentData['result']['payer']['payer_info']['payer_id'])) {
                $paymentDataObj->setPayerID($paymentData['result']['payer']['payer_info']['payer_id']);
            }
            if (!empty($paymentData['payerID'])) {
                $paymentDataObj->setPayerID($paymentData['payerID']);
            }
            if (!empty($paymentData['result']['rememberedCards'])) {
                $paymentDataObj->setRememberedCards($paymentData['result']['rememberedCards']);
            }
        }

        return $paymentDataObj;
    }
}
