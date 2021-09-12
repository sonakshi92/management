<?php include("include/header.php"); ?>
    <div class="container">
        <div class="jumbotron">
            <h2 class="display-3" style="text-align: center;"> Admin & Co Admin Login</h2>
            <hr>
            <div class="my-4">
                <div class="row">
                    <?php if($chkAdminExist == 0): ?>
                        <div class="col-lg-4">
                    <?php echo anchor("welcome/adminRegister", "Admin Register", ['class'=>'btn btn-primary']); ?>
                    </div>
                    
                    <?php else: ?>
                    <?php endif; ?>
                    <div class="col-lg-4">
                        <?php echo anchor("welcome/login", "Admin Login", ['class'=>'btn btn-primary']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("include/footer.php");?>