<?php

function PrePrint($dat = "") {
    if (isset($dat)) {
        echo "<pre>";

        print_r($dat);

        echo "</pre>";
    };
}

;
?>