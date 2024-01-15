<?php 

class Conection{

    public $servername = "localhost"; // Your database host or IP address
    public $username = "root"; // Your database username
    public $password = ""; // Your database password
    public $database = "hospedaje"; // Your database name
    public $port = 3308; // Replace with your desired port number

    // Create a connection to the database
    public function conectDB(){
        try {
            return new mysqli($this->servername, $this->username, $this->password, $this->database, $this->port);
        } catch (Exception $e){
            return false;
        }
    }

}

?>