<?php
include 'conn.php';
if(isset($_GET['a']) && $_GET['b'] && $_GET['c'])
{
$p1 = $_GET['a'];
$p2 = $_GET['b'];
$win =$_GET['c'];
}
else{
    die("Insufficient args");
}

$sql = "INSERT INTO score (P1, P2,Winner) VALUES ('$p1', '$p2','$win')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//http://localhost/add.php?p1=shubham&p2=sushant&time=60&winner=shubham
?>