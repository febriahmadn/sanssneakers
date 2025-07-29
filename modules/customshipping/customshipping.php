<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomShipping extends Module
{
    public function __construct()
    {
        $this->name = 'customshipping';
        $this->version = '1.0.0';
        $this->author = 'Febri Ahmad';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom Shipping Cost per Country');
        $this->description = $this->l('Menambahkan biaya pengiriman berdasarkan negara tanpa metode pengiriman.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('actionCartSave') &&
            $this->registerHook('displayBackOfficeHeader') &&
            Configuration::updateValue('CUSTOM_SHIPPING_COSTS', json_encode([]));
    }

    public function uninstall()
    {
        return parent::uninstall() &&
            Configuration::deleteByName('CUSTOM_SHIPPING_COSTS');
    }

    public function hookActionCartSave($params)
    {
        $cart = $params['cart'];
    
        // Dapatkan ID negara berdasarkan alamat pengiriman
        $id_country = 0;
        if ($cart->id_address_delivery) {
            $address = new Address($cart->id_address_delivery);
            $id_country = (int) $address->id_country;
        }
    
        // Dapatkan ID Carrier (pengiriman) yang sedang digunakan
        $id_carrier = (int) $cart->id_carrier;
        if (!$id_carrier) {
            return;
        }
    
        // Ambil biaya pengiriman berdasarkan harga (bisa juga pakai berat)
        $base_shipping_cost = Carrier::getDeliveryPriceByPrice(0, $id_carrier, $id_country);
        
        if (!$base_shipping_cost) {
            $base_shipping_cost = 0; // Default jika tidak ada biaya ditemukan
        }
    
        // Hitung total biaya pengiriman berdasarkan jumlah produk dalam cart
        $total_additional_shipping_cost = 0;
        foreach ($cart->getProducts() as $product) {
            $qty = (int) $product['cart_quantity'];
            $total_additional_shipping_cost += $base_shipping_cost * $qty;
        }
    
        // Tambahkan biaya pengiriman ke cart
        $cart->additional_shipping_cost = $total_additional_shipping_cost;
        $cart->update();
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitCustomShipping')) {
            $costs = [];
            foreach (Country::getCountries((int)Context::getContext()->language->id) as $country) {
                $country_id = (int)$country['id_country'];
                $costs[$country_id] = Tools::getValue('CUSTOM_SHIPPING_COST_' . $country_id, 0);
            }
            Configuration::updateValue('CUSTOM_SHIPPING_COSTS', json_encode($costs));
        }

        return $this->renderForm();
    }

    private function renderForm()
    {
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->submit_action = 'submitCustomShipping';
        $helper->fields_value = [];

        $custom_shipping_costs = json_decode(Configuration::get('CUSTOM_SHIPPING_COSTS'), true);

        foreach (Country::getCountries((int)Context::getContext()->language->id) as $country) {
            $country_id = (int)$country['id_country'];
            $helper->fields_value['CUSTOM_SHIPPING_COST_' . $country_id] = isset($custom_shipping_costs[$country_id]) ? $custom_shipping_costs[$country_id] : 0;
        }

        $fields = [];
        foreach (Country::getCountries((int)Context::getContext()->language->id) as $country) {
            $fields[] = [
                'type' => 'text',
                'label' => $country['name'],
                'name' => 'CUSTOM_SHIPPING_COST_' . (int)$country['id_country'],
                'size' => 10,
                'required' => false,
            ];
        }

        return $helper->generateForm([[
            'form' => [
                'legend' => ['title' => 'Custom Shipping Costs'],
                'input' => $fields,
                'submit' => ['title' => 'Save'],
            ],
        ]]);
    }
}
