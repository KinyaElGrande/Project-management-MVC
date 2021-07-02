<?php

class m1001_initial
{
    public function up()
    {
        $db = \app\src\Application::$app->database;
        $SQL = "CREATE TABLE projects (
            id INT AUTO_INCREMENT PRIMARY KEY ,
            name VARCHAR(255) NOT NULL ,
            priority VARCHAR(255) NOT NULL,
            department VARCHAR(255),
            created_at TIMESTAMP DEFAULT  CURRENT_TIMESTAMP
            ) ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\src\Application::$app->database;
        $SQL = "DROP TABLE projects;";
        $db->pdo->exec($SQL);
    }
}