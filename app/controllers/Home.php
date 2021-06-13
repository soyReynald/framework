<?php

class Home extends Controller {
    public function index(){
        
        $data = array(
                        'company'=>'Cientificos Del Software',
                        'web'=>'cientificosdelsoftware.com',
                        'address'=>'Los Rios, Santo Domingo'
                    );

        $this->view('default', $data);
    }
}

?>