<script>


	$(function() {
	 
		$( "#register_window" ).dialog({
			autoOpen: false,
			modal: true,
			height: 500,
			width: 500,
			show: "blind"
		});
		
		$( "#datepicker" ).datepicker();
	});
	
$(".ui-widget-overlay").live("click", function() {  $("#register_window").dialog("close"); } );

</script>
	
<div id="register_window" title ="<?php echo $register_title;?>">
	<div class="title">Registrate gratis y empieza a compartir!</div><br>
	
	<?php echo form_open('pages/register_step1','',$hidden);?>
	<label>Nombre:</label>
	<?php echo form_input($name); ?>
	<br/>
	<label>Apellido:</label>
	<?php echo form_input($surname); ?>
	<br/>
	<label>Password:</label>
	<?php echo form_password($password1); ?>
	<br/>
	<?php echo form_password($password2); ?>
	<br/>
	<label>Correo electronico:</label>
	<?php echo form_input($email); ?>
	<br/>
	<label>Ciudad:</label>
	<?php echo form_input($city); ?>
	<br/>
	<label>Fecha nacimiento:</label>
	<?php echo form_input($birthday); ?>
	<br/>
	<label>Sexo:</label>
	Hombre:
	<?php echo form_radio($sex1); ?><br/>
	Mujer: <?php echo form_radio($sex2); ?>
	<br/>
	<?php echo form_submit('mysubmit', 'Login');
	echo form_close();
	?>
</div>

<div id="content1" onclick="$('#register_window').dialog('open');"><button>Registrate aqui</button></div>