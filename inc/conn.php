<?php
$conn= mysqli_connect('localhost','root','root','win',);


$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];

$errors = [
    'firstNameError'=>'',
    'lastNameError'=>'',
    'emailError'=>'',
];

if (isset($_POST['submit'])){

    $firsName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);


    $sql= "INSERT INTO users(firstName,lastName,email)VALUES ('$firstName','$lastName','$email')";
mysqli_query($conn,$sql);

}





echo $firstName .' '.$lastName .' '.$email;

$sql= "INSERT INTO users(firstName,lastName,email)VALUES ('$firstName','$lastName','$email')";

if(empty($firstName)){
    $errors['firstNameError']= 'first name empty';}
   if(empty($lastName)){
      $errors['lastNameError']= 'last name empty';}
  
   if(empty($email)){
    $errors['emailError']= 'email empty';}
    elseif (!filter_var ($email , FILTER_VALIDATE_EMAIL)){
         $errors['emailError']= 'email empty';
    }  else

 
 
  
  

{
    
mysqli_query($conn,$sql);

}