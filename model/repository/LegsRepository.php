<?php

namespace model\repository;
use model\entity\legs;
use PDOException;

class LegsRepository extends BaseRepository {

    public function setLegesData(Legs $legs) {
        try {
            $sql = "INSERT INTO legs (workout_date, exercise, set_number, weight, reps) VALUES(:workout_date,	:exercise, :set_number, :weight, :reps)";
            $stmt = $this->connection->prepare($sql);

            $workoutDate = 	$legs->getWorkoutDate();
            $exercise = 	$legs->getExercise();
            $setNumber = 	$legs->getSetNumber();
            $weight = 	$legs->getWeight();
            $reps = 	$legs->getReps();
            
            
            $stmt->bind(":workout_date", $workoutDate);
            $stmt->bind(":exercise", $exercise);
            $stmt->bind(":set_number", $setNumber);
            $stmt->bind(":weight", $weight);
            $stmt->bind(":reps", $reps);


            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            $this->connection->rollBack();

            error_log("Database error: " . $e->getMessage());
            echo "Something went wrong. Please try again.";
            return false;
        }
    }



    public function getLegesData () {
        try {
            $sql = "SELECT * FROM legs";
            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            $legsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $legsData;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }
 }