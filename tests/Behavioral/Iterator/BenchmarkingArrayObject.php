<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Growthdev\DesignPatterns\Behavioral\Iterator\Task;

$begin = microtime(true);
$taskObject = new ArrayObject;

for ($i=0; $i < 1000; $i++) {
    $taskObject->append(new Task("Task $i"));
};

$end = microtime(true);
$execution_time = $end - $begin;

printf("\nMemory using ArrayObject: %2.f MB\n", memory_get_usage()/(1024 * 1024));
printf("Execution time using ArrayObject: %2.f seconds\n", $execution_time);
