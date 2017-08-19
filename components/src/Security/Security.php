<?php

namespace Malu\Security;


class Security
{

    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=db;dbname=symfony', 'root', 'root');
        $this->pdo->exec('CREATE DATABASE testdb');
        $this->connectDb();
        $this->pdo->exec('DROP DATABASE testdb');
    }

    public function connectDb(){
        $this->pdo->exec('USE testdb');
        $this->pdo->exec('CREATE TABLE testtable (name VARCHAR (20))');
        $this->pdo->exec('INSERT INTO testtable (name) VALUES ("hallo1"), ("hallo2")');

        $this->printAll();

        $unsanitizeValue = '"; drop table testtable';

        //$this->pdo->exec('SELECT * FROM testtable WHERE name="' . $unsanitizeValue . '"');

        $this->printAll();

    }

    public function printAll() {
        $statement = $this->pdo->query('SELECT * FROM testtable');
        if ($statement) {
            $row = $statement->fetchAll(\PDO::FETCH_ASSOC);
            dump($row);
        }
    }

}
