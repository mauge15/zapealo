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
		
		$( "#video_window" ).dialog({
			autoOpen: false,
			modal: true,
			height: 406,
			width: 600,
			show: "blind",
			close: function(ev, ui) { $(this).html("<iframe width='560' height='315' src='http://www.youtube.com/embed/g8evyE9TuYk?rel=0' frameborder='0' allowfullscreen></iframe>"); },
		});
	});
	
$(".ui-widget-overlay").live("click", function() {  $("#register_window").dialog("close"); } );
$(".ui-widget-overlay").live("click", function() {  $("#video_window").dialog("close"); } );

</script>

<div id="video_window" title ="Zapealo!">
<iframe width="560" height="315" src="http://www.youtube.com/embed/g8evyE9TuYk?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
<div id="register_window" title ="<?php echo $register_title;?>">
	<div class="title">Registrate gratis y empieza a compartir!</div><br>
	
	<?php echo form_open('pages/register_step1','',$hidden);?>
	<label>Nombre:</label>
	<?php echo form_input($name); ?>
	<br/>
	<label>Apellido:</label>
	<?php echo form_input($surname); ?>
	<br/>
	<label>Nick:</label>
	<?php echo form_input($nick); ?>
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
<!--wrap starts here -->

	<!-- content -->

<div id="content-outer" class="clear">
<div id="content-wrap">
<div id="content">
<div id="left">			
	
	<div class="post">
			<!--	<h1>Onlinecenter</h1>	 -->
		<div class="nm_post">
		  <h2 class="nm_post_title">
			<a href="javascript:;" onclick="$('#video_window').dialog('open');">Enterate que es Zapealo!<br/><img src="resources/images/video.png" width="220"/></a>
		  </h2>
		</div>
		<!-- post-->
		<div class="nm_post">
			<h2 class="nm_post_title">
				elem 1
			</h2>
			<p class="nm_post_date">Cambiado</p>
			<div class="nm_post_content">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing faucibus arcu vitae mattis. Vestibulum ante ipsum primis i
			</p>
			</div>
		</div>
		
		<p class="postmeta">		
			Lorem ipsum <span>2012-01-24</span>
		</p>
		<!-- end post-->
		
		<!-- post-->
		<div class="nm_post">
			<h2 class="nm_post_title">
				elem 1
			</h2>
			<p class="nm_post_date">Publicerad jan 24, 2012</p>
			<div class="nm_post_content">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing faucibus arcu vitae mattis. Vestibulum ante ipsum primis i
			</p>
			</div>
		</div>
		
		<p class="postmeta">		
			<span>2012-01-24</span>
		</p>
		<!-- end post-->
	</div>
		
</div>

		

<div id="right">
	<div class="sidemenu">	
		<span>Entra para compartir!</span>
		<ul> 
		
		</ul>	
		<div id="login" class=""> 
		
			<label>Email:</label>
			<?php echo form_input($email_login); ?>
			<br/>
			<label>Contraseña:</label>
			<?php echo form_password($password_login); ?>
			<br/>
			<button class="button_red">Entrar</button>
			<hr/>
			Aún no tienes cuenta? <br/>
			<button onclick="$('#register_window').dialog('open');" class="button_green">Registrate aqui</button>
		</div>
	</div>
</div>		
</div>	
	<!-- content end -->	

</div>
</div>
<!-- wrap ends here -->