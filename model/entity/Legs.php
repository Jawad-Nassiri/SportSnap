<?php

namespace model\entity;

class Legs extends BaseEntity {
    private $workout_date;
    private $exercise;
    private $set_number;
    private $weight;
    private $reps;


    public function getWorkoutDate() {
        return $this->workout_date;
    }

    public function setWorkoutDate($workout_date) {
        $this->workout_date = $workout_date;
    }

    public function getExercise() {
        return $this->exercise;
    }

    public function setExercise($exercise) {
        $this->exercise = $exercise;
    }

    public function getSetNumber() {
        return $this->set_number;
    }

    public function setSetNumber($set_number) {
        $this->set_number = $set_number;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getReps() {
        return $this->reps;
    }

    public function setReps($reps) {
        $this->reps = $reps;
    }
    
}

