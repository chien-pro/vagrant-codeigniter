<?php 
<html>
<head>
<?php
    $email = array(
                        'name'        => 'mail',
                        'id'          => 'mail',
                        'size'        => '20',
                    );
    $password = array(
                        'name'        => 'pass',
                        'id'          => 'pass',
                        'size'        => '20',
                    );
    $submit = array(
                        "name"=>"ok",
                        "value"=>"ログイン",
                    );
?>

</head>
<body>
<?php
    echo form_open(base_url()."verify/check_login");
    echo form_fieldset("");
    echo form_label("メールアドレス : ").form_input($email)."<br/>";
    echo form_label("パスワード : ").form_password($password)."<br/>";
    echo form_label("").form_submit($submit)."<br/>";
    
    echo "<a href='".base_url()."register'>ユーザー登録はこちらから</a><br/>";
    //--------------- ERROR
    /*echo "<span class=error>";
        echo validation_errors();
        if($error!="")
         echo $error;
    echo "</span>";*/
    //-----------------------
    echo form_fieldset_close();
    echo form_close();
    
?>
</body>
</html>