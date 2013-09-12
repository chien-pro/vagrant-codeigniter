<html>
<head>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js">
		/*function loadXMLDoc()
		{
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		    }
		  }
		xmlhttp.open("GET","ajax_info.txt",true);
		xmlhttp.send();
		}

		function onChange(str)
			{
			if (str=="")
			  {
			  document.getElementById("txtHint").innerHTML="";
			  return;
			  }
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("txtHint").innerHTML="HEHEHE"//xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","./getSubject.php?q="+str,true);
			xmlhttp.send();
			}
		function onChange*/
$(document).ready(function(){ 
	$("p").click(function(){
		$(this).hide();
	});
});

	</script>
</head>
<body>
	<div id='menu'>
		<?php 
		echo "<a> ようこそ   ".$this->session->all_userdata('session_id')['mail']."</a><";
		echo "<a href='logout'>Log out</a>";

		?>
	</div>
	<?php
	echo "Welcome to Twitter !";


	echo form_open("register/check_register");
	echo form_fieldset("account").'<br>';

	echo form_label('Subject:');
	echo form_input('subject').'<br>';
	echo form_error('subject');

	#echo form_submit('Send', 'Send');
?>
<!--<button type="button" onchange=".ajax">Change Content</button> -->
<p> Click me </p>
<?php
	echo form_fieldset_close();
	echo form_close();
?>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>
</body>
</html>