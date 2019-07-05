
<?php

require_once 'connect.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8"); // aby został zwrócony json zamiast html


// prześlij dane, których dotyczyło zapytanie
$readData = isset($_GET['name']) ? $_GET['name'] : FALSE;
if($readData){
    $data = readData($readData);
    $ArrayData = Array();
    foreach($data as $row) { 
        array_push($ArrayData,Array("id"=> $row['id'],"name"=> $row['name'], "text" => $row["text"]));
    } 
    echo json_encode($ArrayData); // odpowiedz na json
}
// zapisz dane, do bazy danych
//przykład json
// {
//     "name": "pizza",
//     "text": "ser,mąka"
// }
//json

$writeData = json_decode( file_get_contents( 'php://input' ), true);

if($writeData){
    insertData($writeData["name"],$writeData["text"]);
    echo json_encode($writeData);
}

?>
