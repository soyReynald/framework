<?php

class Task extends Model {
    
    public function allTask(){
        
        $pdo = $this->connect();

        $query = "SELECT * FROM tasks";

        $stmt = $pdo->prepare($query);

        $stmt->execute() or die(implode(" >> ", $stmt->errorInfo()));

        if($stmt->rowCount() > 0){

            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } else {
            
            return false;

        }
        
    }
}

?>