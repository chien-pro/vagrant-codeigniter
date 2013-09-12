<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<style type="text/css">
#infoMessage p{
	padding: .8em;
	margin-bottom: 1em;
	border: 2px solid #ddd;
	background: #FFF6BF;
	color: #817134;
	border-color: #FFD324;
}
</style>
</head>
<?php

echo form_open("register/check_register");
echo form_fieldset("account").'<br>';

echo form_label('Name:');
echo form_input('name').'<br>';
echo "<div id=infoMessage>".form_error('name')."</div>";

echo form_label('Email address: ');
echo form_input('mail').'<br>';
echo "<div id=infoMessage>".form_error('mail')."</div>";

echo form_label('Password: ');
echo form_password('pass').'<br>';
echo "<div id=infoMessage>".form_error('pass')."</div>";

echo form_submit('Ok', 'Save');
echo form_fieldset_close();
echo form_close();

?>