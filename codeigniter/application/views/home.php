<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		var num = 3;
		$(document).ready(function(){ 
			$("#button1").click(function() {
				var subj = $("#subj").val();
				$.ajax({
					type: "POST",
					url: "home/insert_subj",
					data: {content: subj}
				}).done(function( msg ) {
					$("#subj_view").html(msg);
				});				
			});

			$("#button2").click(function() {
				var subj = $("#subj").val();
				num += 3;
				$.ajax({
					type: "POST",
					url: "home/view_more",
					data: {'num': num}
				}).done(function( msg ) {
					$("#subj_view").html(msg);
				});				
			});
		});
	</script>
</head>
<body>
	<ul class="nav nav-tabs">
		<li class="active">	<a href="home"><?php echo $this->session->userdata['name'];?></a></li>
		<li>				<a href="logout">Log out</a></li>
	</ul>
	<h2>Welcome to Twitter !</h2>
	<label> New Subject:</label>
	<input type="text" id="subj">
	<button id="button1"> Send </button>
	<p> Subject Views </p>
	<div id="subj_view">
		<?php
		if($all_subject != null) {
			foreach($all_subject as $row)
			{
				echo "----------- <br>";
				echo "Content:".$row['content']."<br>";
				echo "Time   :".$row['time']."<br>";
			}
		} else {};
		?>
	</div>
	<button id="button2"> More ... </button>
</body>
</html>