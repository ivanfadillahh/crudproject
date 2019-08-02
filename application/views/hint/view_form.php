<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Submit</title>
	<link rel="stylesheet" href="">
	<style type="text/css">	
		body {
			font-family: 'Raleway', sans-serif;
		}
		.main
		{
			width: 1015px;
			position: absolute;
			top: 10%;
			left: 20%;
		}
		#form_head
		{
			text-align: center;
			background-color: #FEFFED;
			height: 66px;
			margin: 0 0 -29px 0;
			padding-top: 35px;
			border-radius: 8px 8px 0 0;
			color: rgb(97, 94, 94);
		}
		#content {
			position: absolute;
			width: 450px;
			height: 356px;
			border: 2px solid gray;
			border-radius: 10px;
		}
		#content_result{
			position: absolute;
			width: 450px;
			height: 192px;
			border: 2px solid gray;
			border-radius: 10px;
			margin-left: 559px;
			margin-top: -262px;
		}
		#form_input
		{
			margin-left: 50px;
			margin-top: 36px;
		}
		label
		{
			margin-right: 6px;
			font-weight: bold;
		}

		#form_button{
			padding: 0 21px 15px 15px;
			position: absolute;
			bottom: 0px;
			width: 414px;
			background-color: #FEFFED;
			border-radius: 0px 0px 8px 8px;
			border-top: 1px solid #9A9A9A;
		}
		.submit{
			font-size: 16px;
			background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
			border: 1px solid #e5a900;
			color: #4E4D4B;
			font-weight: bold;
			cursor: pointer;
			width: 300px;
			border-radius: 5px;
			padding: 10px 0;
			outline: none;
			margin-top: 20px;
			margin-left: 15%;
		}
		.submit:hover{
			
		}
		.label_output
		{
			color:#4A85AB;
			margin-left: 10px;
		}
		#result_id
		{
			text-align: center;
			background-color: #FCD6F4;
			height: 47px;
			margin: 0 0 -29px 0;
			padding-top: 12px;
			border-radius: 8px 8px 0 0;
			color: rgb(97, 94, 94);
		}
		#result_show
		{
			margin-top: 35px;
			margin-left: 45px;
		}
		.input_box{
			height:40px;
			width:240px;
			padding:20px;
			border-radius:3px;
			background-color:#FEFFED;
		}
	</style>
</head>
<body>
<div class="main">
	<div id="content">
		<h3 id="form_head">Submit Data</h3>
		<div id="form_input">
			<?php
				
				echo form_open('enter/submit_data');

				echo form_label('User Name : ', 'u_name');

				$data = array(
					'name' => 'u_name',
					'placeholder' => 'Enter your name',
					'class' => 'input_box'
				);

				echo form_label('User Email : ', 'u_mail');
				$data = array(
					'type' => 'email' ,
					'name' => 'u_mail',
					'placeholder' => 'Enter your email',
					'class' => 'input_box' 
				);

				echo form_input($data);
			?>
			
		</div>

		<div id="form_button">
			<?php
				$data = array(
					'type' => 'submit',
					'value' => 'Submit',
					'class' => 'submit' 
				);
				echo form_submit($data);
			?>
		</div>
		
		<?php echo form_close();?>

		<?php 

		if(isset($user_name) && isset($user_email_id)){
			echo "<div id='content_result'>";
			echo "<h3 id='result_id'>Your have submitted these values</h3><br/><hr>";
			echo "<div id='result_show'>";
			echo "<label class='label_output'> Entered User Name : </label>".$user_name;
			echo "<label class='label_output'> Entered User Email : </label>".$user_email_id;
			echo "<div>";
			echo "</div>";
		}
		?>
	</div>
	
</div>
	
</body>
</html>