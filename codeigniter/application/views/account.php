<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<link rel="stylesheet" href="public/frontend/css/home.css">
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
                        'value'       => set_value('name'),
                        'size'        => '20',
                    );
    $email      = array(
                        'name'        => 'mail',
                        'id'          => 'mail',
                        'value'       => set_value('mail'),
                        'size'        => '20',
                    );
    $password   = array(
                        'name'        => 'pass',
                        'id'          => 'pass',
                        'value'       => set_value('pass'),
                        'size'        => '20',
                    );
    $submit     = array(
                        "name"=>"ok",
                        "value"=>"登録"
                        );
?>
</head>
<body>
<?php
    echo form_open(base_url()."register/check_register");
    echo form_fieldset("account").'<br>';
    echo "<table>";
    echo "<tr><td>".form_label("名前: ")."</td><td>".form_input($name)."</td></tr>";
    echo "<div id=infoMessage>".form_error('name')."</div>";
    echo "<tr><td>".form_label("メールアドレス : ")."</td><td>".form_input($email)."</td></tr>";
    echo "<div id=infoMessage>".form_error('mail')."</div>";
    echo "<tr><td>".form_label("パスワード    : ")."</td><td>".form_password($password)."</td></tr>";
    echo "<table>";
    echo "<div id=infoMessage>".form_error('pass')."</div>";
    echo form_label("").form_submit($submit)."<br/>";

    echo form_fieldset_close();
    echo form_close();
?>
</body>