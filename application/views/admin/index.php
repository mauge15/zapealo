<?php echo $content;?>
<hr/>
<h1>Login</h1><br>
<?php echo "<span class='advice'>".$msg."</span>";?>
<?php echo form_open('admin/login','',$hidden);?>
<label>Username:</label>
<?php echo form_input($username); ?>
<br/>
<label>Password:</label>
<?php echo form_password($password); ?>
<br/>
<?php echo form_submit('mysubmit', 'Login');
echo form_close();

?>

