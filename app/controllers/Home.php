<?php
require 'app/models/Task.php';

class Home extends Controller {
    
    public function index(){
        // This is just sample purposes:
        /* 
            $data = array(
                        'company'=>'Cientificos Del Software',
                        'web'=>'cientificosdelsoftware.com',
                        'address'=>'Los Rios, Santo Domingo'
                    );

            $this->view('default', $data);

        */


        /* This is just learning purposes: */
        $task = new Task;

        $allTask = $task->allTask();

        Messages::setMsg('This is a new message', Messages::SUCCESS);

        $this->view('default', ['tasks'=>$allTask]);
        
    }

}

?>