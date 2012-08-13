<?php foreach ($usuarios as $usr): ?>

    <h2><?php echo $usr['birthday'] ?></h2>
    <div id="main">
        <?php echo $usr['surname'] ?>
    </div>
    <p><a href="<?php echo $usr['name'] ?>">Details of this user</a></p>

<?php endforeach ?>