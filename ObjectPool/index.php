<?php

// function __autoload($classname) {
//     include $classname.'.php';
// }

$pool = new SupplierPool();

$worker1 = $pool->getSupplier();
$worker2 = $pool->getSupplier();

echo $worker1->getnamaSupplier();
echo $worker2->getalamatSupplier();

$pool->release($worker1);
$pool->release($worker2);