<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Byebyebots extends Module
{
    public function __construct()
    {
        $this->name = 'byebyebots';
        $this->tab = 'others';
        $this->version = '1.0.0';
        $this->author = 'Mickaël Andrieu';
        $this->bootstrap = true;
        $this->ps_versions_compliancy = [
            'min' => '1.6.0.0',
            'max' => _PS_VERSION_,
        ];

        parent::__construct();

        $this->displayName = $this->l("Bye Bye Bots");
        $this->description = $this->l('With this module, PrestaShop will stop to log bots visits.');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }
}