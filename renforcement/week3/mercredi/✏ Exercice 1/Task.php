<?php

class Task{
    public function __construct(private $id, private $description, private $estimatedHours) {}

    public function getId(){
        return $this->id;
    }
    public function getDescription(){
        return $this->description;        
    }
    public function getEstimatedHours(){
        return $this->estimatedHours;
    }
    public function isBig($threshold){
        return $this->estimatedHours > $threshold;
    }
}