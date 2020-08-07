<?php
$password= $_POST['password'];
$email = $_POST['email'];
if(isset($_POST['myForm'])){
   if(!preg_match("/^[a-zA-Z0-9\s[` ! ? $ ? % ^ & * ( ) _ - + = { [ } ] : ; @  ' ~ # | \\ < , > . ? ]]*$/",$password) && strlen($password)< 15 ){
     // header('Location: formValid.php?passWordError');
     echo 'Password must include lower $ upper case and must have special a characters';
   }else if(strlen($password)<15){
     echo 'Password must be atleast 15 characters';
   }
   else if(!preg_match ("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/" ,$email )){
     // header('location: formValid.php?emailerror');
     echo 'Check Your email filled';
   }
   else{
     header('Location: successpage.php');
   }
}
?>
