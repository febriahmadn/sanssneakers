<?php
if (!defined('_PS_VERSION_')) {
    exit;
}


class OrderControllerOverride extends OrderController
{
    public function initContent()
    {
        parent::initContent();

        // Langsung melewati langkah Shipping untuk semua produk
        $this->context->cart->setDeliveryOption(array()); // Set pilihan pengiriman kosong
        $this->context->cart->save();

        // Redirect langsung ke langkah pembayaran (step 3)
        $this->redirect('index.php?controller=order&step=3');
    }
}
