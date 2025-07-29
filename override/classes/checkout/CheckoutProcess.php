<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class CheckoutProcessOverride extends CheckoutProcess
{
    public function addStep(CheckoutStepInterface $step)
    {
        // Hapus langkah Shipping dari checkout
        if ($step instanceof CheckoutDeliveryStep) {
            return $this;
        }

        return parent::addStep($step);
    }
}
