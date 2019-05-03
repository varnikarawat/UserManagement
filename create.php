
<?php
$servername='localhost';
$userrname='root';
$password='';
$conn=new mysqli($servername,$userrname,$password);
if($conn->connect_error){
    echo("connection failed:" .$conn->connect_error);

}
$sql="create database demo";
if($conn->query($sql) == TRUE){
    echo("database created successfully");

} else {
    echo "Error creating database: " .$conn ->error;
}
$conn->close();
?>
