<?php
class Dao {
    private $host = "us-cdbr-iron-east-01.cleardb.net";
    private $db = "heroku_e7a01c19c54ad2a";
    private $user = "bb25452e90f759";
    private $pass = "fd33378f";

    public function getConnection () {
        return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
    }

    public function saveSuggestion ($sugg) {
        $conn = $this->getConnection();
        $saveQuery =
            " INSERT INTO suggestions
            (suggestion)
            VALUES
            (:suggestion) ";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":suggestion", $sugg);
        $q->execute();
    }
}