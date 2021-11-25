<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$conn = mysqli_connect("localhost", "root", "", "yuricafe");;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$results = array();

if($_POST['req'] == 'menu') {
    $sql = "SELECT * FROM coffee";

//    $sql = "SELECT * FROM pastry";
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
} else if($_POST['req'] == 'order') {
    $sql = "INSERT INTO shoppingcart (order_id, item_id, quantity,price) VALUES (1, " . $_POST['item_id'] . ",".$_POST['quantity'].",".$_POST['price'].")";
    if($conn->query($sql) === TRUE) {
        $msg = array('status'=>'order_added_successfully');
        echo json_encode($msg);
    } else {
        $msg = array('status'=>$conn->error);
        echo json_encode($msg);
    }

}


