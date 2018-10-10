<?php
if(isset($_POST['submit']))
{
	mail('tripti12shukla1280@gmail.com','Someone submitted my form','Their email was'.$_POST['email']);
}
?>