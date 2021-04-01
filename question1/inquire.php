<?php
$activity_id=$_POST['price_check'];
$mysqli = new mysqli("localhost","root","root","reception");


if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
$query= "select activity, cost from activity where id='".$activity_id."'";
$result = $mysqli -> query($query);
$result =  $result->fetch_assoc();

echo 'The cost for '.$result['activity']. " is ". $result['cost']."<br>";
echo "<a href='index.html'>go back to search</a>";


