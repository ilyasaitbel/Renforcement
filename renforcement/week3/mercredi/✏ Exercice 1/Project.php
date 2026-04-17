<?php

class Project{
    public function __construct(private $title, private $dailyRate, private $tasks = []) {}

    public function addTask(Task $task){
        $this->tasks[] =  $task;
    }
    public function getTasks(){
        return $this->tasks; 
    }
    public function calculateTotalHours(){
        $totalhours = 0;

            foreach($this->tasks as $task) {
            $totalhours += $task->getEstimatedHours();
        }
        return $totalhours;
    }
    public function calculateTotalWithBuffer($bufferPercent = 10)
    {
        $totalWithBuffer = $this->calculateTotalHours() * (1 + $bufferPercent/100);
        
        return $totalWithBuffer;
    }
    public function calculateBudget(){
        $Budget = $this->calculateTotalWithBuffer() * $this->dailyRate / 8;
        return $Budget;
    }
    public function getBigTasks($threshold) {
        $bigTasks = [];
        foreach($this->tasks as $task){
            if($task->isBig($threshold))
                $bigTasks[] = $task;
        }
        return $bigTasks;
    }
    public function getSummary(){
        return "Projet: $this->title \nTotal heure: {$this->calculateTotalHours()} \nTotal avec buffer: {$this->calculateTotalWithBuffer()} \nBudjet: {$this->calculateBudget()}";
    }
    public function getMostExpensiveTask(){
        $maxtask = $this->tasks[0];

        foreach($this->tasks as $task){
            if($maxtask->getEstimatedHours() < $task->getEstimatedHours())
                $maxtask = $task;
        }
        return $maxtask;
    }
}