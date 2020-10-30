<?php

require 'Config.php';

class Database extends Config {
    public $dbh;
    private $stmt;
    private $error;
    public function __construct()
    {
        $config = new Config();
        $dsn = "mysql:host=" . $config->host . ";dbname=" . $config->dbname;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->dbh = new PDO($dsn, $config->user, $config->password, $options);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}