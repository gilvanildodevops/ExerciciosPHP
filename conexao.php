<?php
/**
 * Undocumented function
 *
 * @return \PDO
 */

function getConnection(){

    $dsn = 'mysql:host=localhost;dbname=login';
    $user = 'root';
    $pass = '';

    try {

        $pdo = new PDO($dsn, $user, $pass);

        return $pdo;

    } catch (PDOException $exe) {
        //exibindo erro
        echo 'ERRO: ' .$exe->getMessage();

    }
}
