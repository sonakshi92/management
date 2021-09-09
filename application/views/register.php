<?php include("include/header.php"); ?>
        <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <div class="container">
        <h1> ADMIN REGISTRATION </h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Username </label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username']); ?>
            </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Email </label>
                <div class="col-md-9">
                    <?php echo form_input(['email' => 'email', 'class' => 'form-control', 'placeholder' => 'Username']); ?>
            </div>
            </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Gender </label>
                <select class="col-lg-9" name="gender">
                    <option value=""> Select </option>
                    <option value=""> Male </option>
                    <option value=""> Female </option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label"> Role </label>
                <select class="col-lg-9" name="role_id">
                    <option value=""> Select </option>
                    <option value=""> Admin </option>
                    <option value=""> Co Admin </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Password </label>
                <div class="col-md-9">
                    <?php echo form_input(['password' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
            </div>
            </div>
            </div>
        </div>

    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label"> Confirm Password </label>
            <div class="col-md-9">
                <?php echo form_input(['name' => 'confpwd', 'class' => 'form-control', 'placeholder' => 'Confirm Password']); ?>
        </div>
        </div>
        <button type="submit" class="btn btn-primary"> REGISTER </button>
    <?php echo anchor("welcome", "BACK", ['class'=>'btn btn-primary']); ?>

        </div>
    </div>
    
        <?php echo form_close(); ?>
    </div>
<?php include("include/footer.php"); ?>
