<html>
<head>
<title><?php echo $title ?></title>
</head>
<body>

login<br>
<?php echo $content;?>
<hr/>
<?php foreach($users as $u): ?>

<div id="user">
	<a href="edit_users/<?php echo $u['idUser']?>"><?php echo $u['name']." ".$u['surname'];?></a>
</div>
<?php endforeach?>

</body>

</html>