<?php
use App\AppKernel;
include __DIR__ . '/../config/bootstrap.php';

$kernel = new AppKernel(true);
$kernel->run();