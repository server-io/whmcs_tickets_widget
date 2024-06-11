<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

add_hook('AdminAreaFooterOutput', 1, function($vars) {
    return <<<HTML
    <script type="text/javascript">
        setInterval(function() {
            $('#panelRioSupport .widget-refresh').click();
        }, 10000);
    </script>
HTML;
});
