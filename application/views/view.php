<?php include_once('header.php') ?>

    <div class="container">
        <h3><?php echo $user->name; ?>'s Details</h3>
        <p>Name: <?php echo $user->name; ?></p>
        <p>Age: <?php echo $user->age; ?></p>
        <p>Email: <?php echo $user->email; ?></p>
        <p>Phone: <?php echo $user->phone; ?></p>
        <p>Address: <?php echo $user->address; ?></p>
        <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-info']);?>
    </div>

<?php include_once('footer.php') ?>