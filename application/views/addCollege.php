<?php include("include/header.php"); ?>
        <?php echo form_open("admin/createCollege", ['class' => 'form-horizontal']); ?>
    <div class="container">
        <?php if($error = $this->session->flashdata('message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-dismissible alert-success"> <?php echo $error; ?> </div>
                </div>
            </div>
            <?php endif; ?>
        <h1> ADD COLLEGE </h1>
        <hr>
        
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label"> College Name </label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'collegename', 'class' => 'form-control', 'placeholder' => 'College Name', 'value' => set_value('collegename')]); ?>
            </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('collegename', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>
        
        
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label"> BRANCH </label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'branch', 'class' => 'form-control', 'placeholder' => 'Branch', 'value' => set_value('branch')]); ?>
            </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php echo form_error('branch', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>
 
        <button type="submit" class="btn btn-primary"> ADD </button>
    <?php echo anchor("welcome", "BACK", ['class'=>'btn btn-primary']); ?>

        </div>
    </div>
    
        <?php echo form_close(); ?>
    </div>
<?php include("include/footer.php"); ?>
