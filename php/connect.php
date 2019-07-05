<?php

//Tworzenie tabeli w db
//$db = new PDO("sqlite:dataBase.sqlite");
// $db->query("CREATE TABLE recips (
//                 id INTEGER PRIMARY KEY, 
//                 name TEXT, 
//                 text TEXT )"
//         );

function insertData($name,$text) {
    try {
        $db = new PDO("sqlite:dataBase.sqlite");
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    $query=$db->prepare('INSERT INTO recips VALUES (NULL, :name, :text)');
    $query->bindValue(':name',$name,PDO::PARAM_STR);
    $query->bindValue(':text',$text,PDO::PARAM_STR);
    $query->execute();
}

function readData($name){
    try {
        $db = new PDO("sqlite:dataBase.sqlite");
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    $query = $db->prepare('SELECT * FROM recips WHERE name = :name');
    $query->bindValue(':name',$name,PDO::PARAM_STR);
    $query->execute();
    return ($query->fetchAll());
}




?>