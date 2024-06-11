<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

if (!class_exists('\Serverio\Modules\Widgets\SmartyRioSupport')) {
    require __DIR__ . '/lib/Smarty.php';
}

if (!class_exists('\Serverio\Modules\Widgets\Tickets')) {
    require __DIR__ . '/lib/Tickets.php';
}
