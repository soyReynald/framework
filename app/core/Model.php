<?php 

class Model {

    protected $config;

    protected function connect(){

        $this->getConfig();

        $dsn = $this->config->type . ':host=' . $this->config->server . ';dbname=' . $this->config->database;
    
        try {
            
            return new PDO($dsn, $this->config->user, $this->config->password);

        } catch(PDOException $e){

            exit($e->getMessage());
            
        }

    }

    private function getConfig(){
        // This config file can change later, It's better not using JSON to a config file...
        $this->config = json_decode(file_get_contents('app/config/database.json'));
    }
}

?>