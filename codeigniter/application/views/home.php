<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/frontend/css/home.css">
    <?php
    $subj 	= array(
        'name' 		=> 'subj',
        'rows' 		=> 2,
        'cols' 		=> 52,
        'id' 		=> 'subj'
    );
    $button1 = array(
        'name'		=> 'button',
        'id'		=> 'send',
        'content'	=> 'ツイート'
    );
    $button2 = array(
        'name'		=> 'button',
        'id'		=> 'view_more',
        'content'	=> 'もっと見る'
    );
    ?>
</head>

<body>
    <h2>Twitterへようこそ !</h2>
    <ul class="nav nav-tabs">
    <li class="active">	<a href="<?php echo base_url();?>home"><?php echo $this->session->userdata['name'];?></a></li>
    <li>				<a href="<?php echo base_url();?>home/logout">ログアウト</a></li>
    </ul>

    <label> New Subject:</label>
    <div id = "write_subj">
    <?php 
        echo form_textarea($subj)."<br>";
        echo form_button($button1);
    ?>
    </div>
    <label> Subject Views </label><br>
    <div id = "subj_view">
    <?php
        if ($all_subject != null) {
        foreach ($all_subject as $row)
        {
            echo "...................................................................................<br>";
            echo "<div class = 'user'>".$this->session->userdata['name']."</div>";
            echo "<div class='time'>".$row['time']."</div><br>";
            echo "<div class = 'content'>".nl2br($row['content'])."</div>";
        }
    }?>
    </div>
    <?php echo form_button($button2);?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
    var start = 0;
    $(document).ready(function(){ 

        $("#send").click(function() {
            var subj = $("#subj").val();

            if (subj == "") {
                alert("サブジェクトを入力してください。");
        } else {
            start += 1;
            $.ajax({
            type: "POST",
            url: "home/insert_subj",
            data: {
                'content': subj,
                '<?php echo $this->security->get_csrf_token_name();?>' : 
                '<?php echo $this->security->get_csrf_hash(); ?>'
            }
        }).done (function( msg ) {
            $("#subj_view").prepend(msg);
        }); 
            $("#subj").val("");
        }
        });

        $("#view_more").click(function() {
            var subj = $("#subj").val();
            start += 10;
            $.ajax({
            type: "POST",
            url: "home/view_more",
            data: {
                'start': start,
                '<?php echo $this->security->get_csrf_token_name();?>' : 
                '<?php echo $this->security->get_csrf_hash(); ?>'
            }
          }).done(function( msg ) {
                $("#subj_view").append(msg);
            });
        });
    });

</script> 
</body>
</html>