<?php

if ($_POST['payload']) {
    $output = shell_exec('cd ~/public_html/domains/moodeebee/dev/ && git reset --hard HEAD && git pull');
    echo $output;
}

?>