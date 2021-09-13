<?php include("include/header.php"); ?>
        <?php echo form_open("admin/createStudent", ['class' => 'form-horizontal']); ?>
    <div class="container">
        <?php if($error = $this->session->flashdata('message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-dismissible alert-success"> <?php echo $error; ?> </div>
                </div>
            </div>
            <?php endif; ?>
        <h1> ADD STUDENT </h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Student Name </label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'studentname', 'class' => 'form-control', 'placeholder' => 'STUDENT NAME', 'value' => set_value('studentname')]); ?>
            </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('studentname', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label"> College Name </label>
                <select class="col-lg-9" name="college_id">
                    <option value=""> Select </option>
                    <?php if(count($colleges)): ?>
                        <?php foreach($colleges as $college): ?>
                    <option value="<?php echo $college->college_id ?>"> <?php echo $college->collegename ?> </option>
                    <?php endforeach; endif; ?>
                </select>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('college_id', '<div class="text-danger">', '</div>'); ?>
            </div>
    </div>

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
                <label class="col-md-3 control-label">Gender </label>
                <select class="col-lg-9" name="gender">
                <option value=""> Select </option>
                <option value="Male"> Male </option>
                    <option value="Female"> Female </option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
                <?php echo form_error('gender', '<div class="text-danger">', '</div>'); ?>
            </div>
    </div>
    
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label"> Course </label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'course', 'class' => 'form-control', 'placeholder' => 'COURSE', 'value' => set_value('course')]); ?>
            </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('studentname', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary"> ADD STUDENT </button>
    <?php echo anchor("admin/dashboard", "BACK", ['class'=>'btn btn-primary']); ?>

        </div>
    </div>
    
        <?php echo form_close(); ?>
    </div>
<?php include("include/footer.php"); ?>
