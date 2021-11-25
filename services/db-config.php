<?php

$conn = mysqli_connect("localhost", "root", "", "yuricafe");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}