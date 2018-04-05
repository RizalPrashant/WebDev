<?php
class Dao {
private $host = "us-cdbr-iron-east-05.cleardb.net";
private $db = "heroku_89d03e637463650";
private $user = "ba97471f656d10";
private $pass = "37e90f86";
public function getConnection () {
return new PDO("mysql:host={$this->host};dbname={$this->db}",$this->user,$this->pwd;);
}
}
