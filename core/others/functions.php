<?php


function connectToDb()
{
    try {
        return new PDO('mysql:host=192.168.1.110:3306;dbname=erpcorp_admin', 'jliang', '7zpm9528');
        echo "connect to database successfully!";
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllSIMcards($pdo){
    $statement = $pdo->prepare('select * from SIMList');

    $statement->execute();
//$results = $statement->fetchAll();
//$results = $statement->fetchAll(PDO::FETCH_OBJ);
    return $statement->fetchAll(PDO::FETCH_CLASS, 'SIMcard');
}

function dd($data){
    echo'<pre>';
    die(var_dump($data));
    echo'</pre>';
}