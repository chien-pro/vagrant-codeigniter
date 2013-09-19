<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<link href = "<?php echo base_url().'public/frontend/css/login.css';?>" rel = "stylesheet" type="text/css"/>
<style type="text/css" >
    #infoMessage p {
        padding: .8em;
        margin-bottom: 1em;
        border: 2px solid #ddd;
        background: #FFF6BF;
        color: #817134;
        border-color: #FFD324;
}

<?php
    $email = array(
                        'name'        => 'mail',
                        'id'          => 'mail',
                        'value'       => set_value('mail'),
                        'size'        => '20',
                    );
    $password = array(
                        'name'        => 'pass',
                        'id'          => 'pass',
                        'value'       => set_value('pass'),
                        'size'        => '20',
                    );
    $submit = array(
                        "name"=>"ok",
                        "value"=>"ログイン",
                    );
?>
</style>
</head>

<body>
<?php
    echo "<div id=infoMessage>".validation_errors()."</div>";
    echo form_open(base_url()."verify/check_login");
    echo form_fieldset("account");
    echo form_label("メールアドレス : ").form_input($email)."<br/>";
    echo form_label("パスワード : ").form_password($password)."<br/>";
    echo $this->recaptcha->getHtml()."<br>";
    echo form_label("").form_submit($submit)."<br/>";
    
    echo "<a href='".base_url()."register'>ユーザー登録はこちらから</a><br/>";

    echo form_fieldset_close();
    echo form_close();
?>
</body>
</html>