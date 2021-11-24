<?php
$_POST = json_decode(file_get_contents('php://input'), true);
include ('db-config.php');
$results = array();

if($_POST['req'] == 'menu') {
    $sql = "SELECT * FROM coffee";
    $conn = mysqli_connect("localhost", "root", "", "yuricafe");;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data = array('id'=>$row['id'], 'name'=>$row['name'],
                'quantity'=>$row['quantity'], 'price'=>$row['price'],'images'=>$row['images']);
            $results[] = $data;
        }
    }
    $conn->close();
    echo json_encode($results);
}

