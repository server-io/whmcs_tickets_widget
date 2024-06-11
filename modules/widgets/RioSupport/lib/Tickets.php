<?php
namespace Serverio\Modules\Widgets;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

class Tickets {

    private function api(string $action, array $data) {
        return \localApi($action, $data);
    }

    public function get() {
        $tickets = $this->api('GetTickets', ['status' => 'Awaiting Reply']);
        if ($tickets['totalresults'] > 0) {
            return $tickets['tickets']['ticket'];
        }
        return [];
    }

}
