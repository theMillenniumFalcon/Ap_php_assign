<?php

$con = mysqli_connect('localhost', 'root');

if($con) {
    echo "Connection successful ";
} else {
    echo "Connection failed ";
}

mysqli_select_db($con, 'ap_assign');

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfodata (email, mobile, comment) values ('$email', '$mobile', '$comments')";

echo "$query";

mysqli_query($con, $query);

header("Location:index.php");

?>