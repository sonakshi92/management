<?php include("include/header.php"); ?>
        <?php echo form_open("welcome/signin", ['class' => 'form-horizontal']); ?>
    <div class="container">
        <?php if($error = $this->session->flashdata('message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-dismissible alert-danger"> <?php echo $error; ?> </div>
                </div>
            </div>
            <?php endif; ?>
        <h1> ADMIN LOGIN </h1>
        <hr>
        
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Email </label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'value' => set_value('email')]); ?>
            </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>
        
        
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Password </label>
                <div class="col-md-9">
                    <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
            </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>
 
        <button type="submit" class="btn btn-primary"> LOGIN </button>
    <?php echo anchor("welcome", "BACK", ['class'=>'btn btn-primary']); ?>

        </div>
    </div>
    
        <?php echo form_close(); ?>
    </div>
<?php include("include/footer.php"); ?>
