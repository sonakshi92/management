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
        <table>
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
                <tr class="table-active">
                    <td>vsddsfsd</td>

                </tr>
            </tbody>
        </table>
    </div>

<?php include("include/footer.php"); ?>