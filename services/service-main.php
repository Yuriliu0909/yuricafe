<?php
$_POST = json_decode(file_get_contents('php://input'), true);
include ('db-config.php');
$results = array();

//union two tables to show whole menu
if($_POST['req'] == 'menu') {
    $sql = "SELECT * FROM coffee UNION ALL SELECT * FROM pastry";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data = array('id'=>$row['id'], 'name'=>$row['name'], 'quantity'=>$row['quantity'], 'price'=>$row['price'],'images' => $row['images']);
            $results[] = $data;
        }
    }
    $conn->close();
    echo json_encode($results);

    //only show coffee menu
}if($_POST['req'] == 'coffee_menu') {
    $sql = "SELECT * FROM coffee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = array('id' => $row['id'], 'name' => $row['name'], 'quantity' => $row['quantity'], 'price' => $row['price'], 'images' => $row['images']);
            $results[] = $data;
        }
    }
    $conn->close();
    echo json_encode($results);

    //only show pastry menu
}if($_POST['req'] == 'pastry_menu') {
    $sql = "SELECT * FROM pastry";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = array('id' => $row['id'], 'name' => $row['name'], 'quantity' => $row['quantity'], 'price' => $row['price'], 'images' => $row['images']);
            $results[] = $data;
        }
    }
    $conn->close();
    echo json_encode($results);

    //pass data back to database
}else if($_POST['req'] == 'order') {
    $sql = "INSERT INTO shoppingcart (order_id, item_id, quantity,price) VALUES (1, " . $_POST['item_id'] . ",".$_POST['quantity'].",".$_POST['price'].")";
    if($conn->query($sql) === TRUE) {
        $msg = array('status'=>'order_added_successfully');
        echo json_encode($msg);
    } else {
        $msg = array('status'=>$conn->error);
        echo json_encode($msg);
    }
}


