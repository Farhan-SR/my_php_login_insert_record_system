<?php
$server_name = "localhost:3306";
$user_name = "root";
$password = "";
$database_name = "img";

$connection = mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$connection){
    die("connect faild");
}

else{
    echo "fuck";
}
// $sql = "CREATE TABLE user_details ( 
//     id int(11) NOT NULL AUTO_INCREMENT,
// trn_date datetime NOT NULL,
// name varchar(50) NOT NULL,
// age int(11) NOT NULL,
// submittedby varchar(50) NOT NULL,
// PRIMARY KEY (id)
//     )";
// //run

//creating table 
$sql = "CREATE TABLE users ( 
    id int(10)NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    login_date datetime NOT NULL,
    PRIMARY KEY (id)
    )";
//run

if(mysqli_query($connection,$sql))
{

   
}
else{
    echo "error".mysqli_error($connection);
}

mysqli_close($connection);

?>