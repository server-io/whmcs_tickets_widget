<?php
namespace WHMCS\Module\Widget;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

use WHMCS\Carbon;
use WHMCS\Module\AbstractWidget;

require_once __DIR__ . '/RioSupport/load.php';

class RioSupport extends AbstractWidget {
    protected $title = 'Support Tickets';
    protected $description = 'An overview of support.';
    protected $columns = 2;
    protected $weight = 10;
    protected $cache = false;
    protected $cacheExpiry = 20;
    protected $cachePerUser = true;
    protected $requiredPermission = 'List Support Tickets';

    public function getData() {
        $tickets = new \Serverio\Modules\Widgets\Tickets();
        return ['tickets' => $tickets->get()];
    }

    public function generateOutput($data) {
        $smarty = new \Serverio\Modules\Widgets\SmartyRioSupport();
        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }
        return $smarty->fetch('overview.tpl');
    }
}
