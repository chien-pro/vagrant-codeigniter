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
<?php
    $name       = array(
                        'name'        => 'name',
                        'id'          => 'name',
                        'value'       => 'name',
                        'size'        => '20',
                        );
    $email      = array(
                        'name'        => 'mail',
                        'id'          => 'mail',
                        'value'       => 'mail',
                        'size'        => '20',
                    );
    $password   = array(
                        'name'        => 'pass',
                        'id'          => 'pass',
                        'value'       => 'pass',
                        'size'        => '20',
                    );
    $submit     = array(
                        "name"=>"ok",
                        "value"=>"登録",
                    );
?>
</head>
<body>
<?php
    echo form_open("register/check_register");
    echo form_fieldset("account").'<br>';

    echo form_label("名前 : ").form_input($name)."<br/>";
    echo "<div id=infoMessage>".form_error('name')."</div>";
    echo form_label("メールアドレス : ").form_input($email)."<br/>";
    echo "<div id=infoMessage>".form_error('mail')."</div>";
    echo form_label("パスワード : ").form_password($password)."<br/>";
    echo "<div id=infoMessage>".form_error('pass')."</div>";
    echo form_label("").form_submit($submit)."<br/>";

    echo form_fieldset_close();
    echo form_close();
?>
</body>