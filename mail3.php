<?php
 //echo print_r($_POST);
//name=ad&email=adx%40dds&Message=sadsa

if(isset($_POST['submit']))
{
    $to="pranavpps406@gmail.com";
    $from=$_POST['email'];
    $name=$_POST['name'];
    $subject="form submission";
    $subject2="coppy from submission";
    $message=$_POST['Message'] ;
    $header="form:".$from;
    $header2="form:".$to;
	echo "mail send  to <b>".$name. " </b>  i will contact you soon";
}
    ?>
    