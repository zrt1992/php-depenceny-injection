<?php
$designation = $_POST['designation'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];

if($designation=="Reactor" || $designation=="Director") {
    echo "<a href='index.html'>Welcome Worthy $designation: $fname $lname</a>";
}
else{
    echo "<a href='index.html'>Welcome $designation: $fname $lname</a>";
}

