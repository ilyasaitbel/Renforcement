<?php

require_once 'Project.php';
require_once 'Task.php';

$project = new Project("Refonte site web", 600);

$t1 = new Task(1, "Design", 12);
$t2 = new Task(2, "Dev front", 30);
$t3 = new Task(3, "Dev back", 45);

$project->addTask($t1);
$project->addTask($t2);
$project->addTask($t3);

echo "Total heures: " . $project->calculateTotalHours() . "\n";

echo "Total avec buffer: " . $project->calculateTotalWithBuffer() . "\n";

echo "Budget: " . $project->calculateBudget() . " €\n";

echo "Tâches > 20h:\n";

foreach ($project->getBigTasks(20) as $task) {
    echo "- " . $task->getDescription() . "\n";
}

echo $project->getSummary();

$task = $project->getMostExpensiveTask();

echo "\n taskhour: " . $task->getEstimatedHours();