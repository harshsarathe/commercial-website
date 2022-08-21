<?php
$connection = mysqli_connect('localhost','root');





if($connection){
    echo "connection is ESTABLISH";

}
else{
    echo "connection error ";

    
}

mysqli_select_db($connection, 'authentication');
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$GSTIN = $_POST['GSTIN'];
$password = $_POST['password'];




$data = "INSERT INTO credentials (first_name, last_name, email, GSTIN, password) value ('$firstname','$lastname', '$email', '$GSTIN', '$password')";

mysqli_query($connection, $data);
header('location:signupsuccessful.php');
?>