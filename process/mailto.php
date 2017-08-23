<?php

if(isset($_POST["name"]) && isset($_POST["email"])  && isset($_POST["mobile"])  && isset($_POST["subject"])  && isset($_POST["message"]) )
{
$subject=$_POST["subject"];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$message=$_POST["message"];
$pattern="Name\t:\t$name\nMobile\t:\t$message\nEmail ID\t:\t$email\nSubject\t:\t$subject\nMessage\t:\t$message";
mail("padmesh96@gmail.com","Message from your website",$pattern);
echo 'success';
}
else
{
echo "some data missing,please try agin later";
}
