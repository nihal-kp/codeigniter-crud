<?php include_once('header.php') ?>

    <div class="container">
        <h3>Create New User's Details</h3>
        <?php echo form_open('welcome/save',['class'=>'']); ?>                      <!-- Form opening <form method="post" action="http://localhost/codeigniter/index.php/welcome/save"> class=col-md-6 -->
            <div class="form-group">
                <label for="name">Name:</label>
                <div class="col-md-6">
                    <?php echo form_input(['type'=>'text','name'=>'name','placeholder'=>'Enter name','class'=>'form-control']); ?>           <!-- <input type="text" class="form-control" placeholder="Enter name"> -->
                </div>
                <div class="col-md-5">
                    <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>                  <!-- To show error message after sumbit. Validation rule is already set in controller welcome/save -->            
                </div>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <div class="col-md-6">
                    <?php echo form_input(['type'=>'text','name'=>'age','placeholder'=>'Enter age','class'=>'form-control']); ?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('age', '<div class="text-danger">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <div class="col-md-6">
                    <?php echo form_input(['type'=>'email','name'=>'email','placeholder'=>'Enter email','class'=>'form-control']); ?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <div class="col-md-6">
                    <?php echo form_input(['type'=>'text','name'=>'phone','placeholder'=>'Enter phone','class'=>'form-control']); ?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <div class="col-md-6">
                    <?php echo form_textarea(['type'=>'textarea','name'=>'address','placeholder'=>'Enter address','rows'=>'4','class'=>'form-control']); ?>
                </div>
                <div class="col-md-5">
                    <?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
                </div>
            </div>
            <?php echo form_submit(['type'=>'submit','name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
            <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-info']);?>
        <?php echo form_close(); ?>
    </div>

<?php include_once('footer.php') ?>