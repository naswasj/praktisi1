<?php
require 'vendor/autoload.php';

$loop = React\EventLoop\Factory::create();
$loop->addTimer(2, function () {
    echo "This is executed after 2 seconds\n";
});

echo "Waiting...\n";
$loop->run();