<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Growthdev\DesignPatterns\Behavioral\Iterator\Task;

$begin = microtime(true);
$taskArray = array();

for ($i=0; $i < 1000; $i++) {
    $taskArray[] = new Task("Task $i");
};

$end = microtime(true);
$execution_time = $end - $begin;

printf("\nMemory using array: %2.f MB\n", memory_get_usage()/(1024 * 1024));
printf("Execution time using array: %2.f seconds\n", $execution_time);
