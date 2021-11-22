<?php


$_POST = json_decode(file_get_contents('php://input'), true);

$result = array();

if($_POST['req'] == 'get-data') {
    //Read the data from the database
    //Convert into JSON array
    //Send to the client
    $data = array(
        array("id"=>"5", "name"=>"coffee", "price"=>"100"),
        array("id"=>"10", "name"=>"tea", "price"=>"150")
    );
    echo json_encode($data);
} elseif($_POST['req'] == 'update-data') {
    $data = $_POST['data'];
    //Have to update database here
    $data = array(
        array("id"=>"5", "name"=>"coffee", "price"=>$data['price']),
        array("id"=>"10", "name"=>"tea", "price"=>"150")
    );
    echo json_encode($data);
}

