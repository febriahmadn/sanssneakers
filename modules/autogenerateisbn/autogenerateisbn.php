<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

$file = __DIR__ . '/vendor/autoload.php';
if (!file_exists($file)) {
    die("Error: Autoload file not found at $file");
}
require $file;

class AutoGenerateIsbn extends Module
{
    public function __construct()
    {
        $this->name = 'autogenerateisbn';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Febri Ahmad';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = ['min' => '1.7.0.0', 'max' => _PS_VERSION_];
        $this->bootstrap = true;

        // Pastikan folder vendor aman sebelum memuatnya
        $vendorPath = __DIR__ . '/vendor/autoload.php';
        if (file_exists($vendorPath)) {
            require_once $vendorPath;
        } else {
            PrestaShopLogger::addLog('AutoGenerateIsbn: Vendor folder not found', 3);
        }

        parent::__construct();

        $this->displayName = $this->l('Auto Generate ISBN');
        $this->description = $this->l('Automatically generates ISBN for products when saved.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        PrestaShopLogger::addLog('AutoGenerateIsbn Install');
        return parent::install() && $this->registerHook('actionProductSave');
    }
    
    public function uninstall()
    {
        return parent::uninstall();
    }
    
    public function hookActionProductSave($params)
    {
        PrestaShopLogger::addLog('AutoGenerateIsbn generate save');
        if (!isset($params['id_product']) || empty($params['id_product'])) {
            return;
        }
    
        $product = new Product((int)$params['id_product']);
    
        if (!empty($product->isbn)) {
            return;
        }

        if (!empty($product->reference)) {
            return;
        }
        $isbn_code = $this->generateIsbn();
    
        $product->isbn = $isbn_code;
        $product->reference = $this->generateReference();
        PrestaShopLogger::addLog('AutoGenerateIsbn code '.$isbn_code);
        $product->update();
    }

    private function generateReference()
    {
        $timestamp = date('dmYHi'); // Format tanggal, bulan, tahun, jam, dan menit
        $randomString = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3); // 3 huruf acak
        return $timestamp . $randomString;
    }

    private function generateIsbn()
    {
        // $prefix = Configuration::get(self::CONFIG_PREFIX_ISBN, '978'); // Default to '978'
        $prefix = '978'; // Default to '978'
        $randomNumber = mt_rand(100000000, 999999999); // Random 9-digit number
        $isbnWithoutChecksum = $prefix . $randomNumber;
    
        // Calculate checksum
        $checksum = $this->calculateIsbnChecksum($isbnWithoutChecksum);
    
        return $isbnWithoutChecksum . $checksum;
    }

    private function calculateIsbnChecksum($isbnWithoutChecksum)
    {
        $digits = str_split($isbnWithoutChecksum);
        $sum = 0;
        foreach ($digits as $i => $digit) {
            $sum += ($i % 2 === 0 ? 1 : 3) * $digit;
        }
        $checksum = 10 - ($sum % 10);
        return $checksum === 10 ? 0 : $checksum;
    }
}


