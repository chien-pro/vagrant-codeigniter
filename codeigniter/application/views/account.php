<?php
echo form_open(base_url()."register/check_register");
echo form_fieldset("account").'<br>';
echo form_label('Name:');
echo form_input('name').'<br>';
echo form_error('name');
echo form_label('Email address: ');
echo form_input('mail').'<br>';
echo form_error('mail');
echo form_label('Password: ');
echo form_password('pass').'<br>';
echo form_error('pass');

echo form_submit('Ok', 'Save');
echo form_fieldset_close();
echo form_close();

?>