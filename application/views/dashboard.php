<?php include("include/header.php"); ?>
    <div class="container">
        <h3>ADMIN DASHBOARD</h3>
        <h4> WELCOME <?php echo $username = $this->session->userdata('username'); ?> </h4>
    </div>
    <?php echo anchor("admin/addCollege", "ADD COLLEGE", ['class'=>'btn btn-primary']); ?>
    <?php echo anchor("admin/addCoadmin", "ADD CO-ADMIN", ['class'=>'btn btn-primary']); ?>
    <?php echo anchor("admin/addStudent", "ADD STUDENT", ['class'=>'btn btn-primary']); ?>
    <hr>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> College Name </th>
                    <th scope="col"> Username </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Role </th>
                    <th scope="col"> Gender </th>
                    <th scope="col"> Branch </th>
                    <th scope="col"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($users)): ?>
                    <?php foreach($users as $user): ?>
                <tr class="table-active">
                    <td> <?php echo $user->college_id; ?> </td>
                    <td> <?php echo $user->collegename; ?> </td>
                    <td> <?php echo $user->username; ?> </td>
                    <td> <?php echo $user->email; ?> </td>
                    <td> <?php echo $user->rolename; ?> </td>
                    <td> <?php echo $user->gender; ?> </td>
                    <td> <?php echo $user->branch; ?> </td>
                    <td>
                        <?php echo anchor("admin/viewStudents/{$user->college_id}", "View Students", ['class'=>'buttons']); ?> 
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td> NO RECORD FOUND </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php include("include/footer.php"); ?>