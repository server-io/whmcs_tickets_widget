<?php
namespace Serverio\Modules\Widgets;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

class SmartyRioSupport extends \Smarty {
   function __construct() {
        parent::__construct();
        $this->template_dir = ROOTDIR . '/modules/widgets/RioSupport/templates/';
        $this->compile_dir  = ROOTDIR . '/templates_c/';
        $this->caching = false;
        $this->assign('app_name', 'RioSupport');
   }
}
