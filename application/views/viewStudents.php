<?php include("include/header.php"); ?>
    <div class="container">
        <h3>ADMIN DASHBOARD</h3>
        <h4> WELCOME <?php echo $username = $this->session->userdata('username'); ?> </h4>
    </div>
    <?php echo anchor("admin/dashboard", "BACK", ['class'=>'btn btn-primary']); ?>
    <hr>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Student Name </th>
                    <th scope="col"> College Name </th>
                    <th scope="col"> Course </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Gender </th>
                    <th scope="col"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($students)): ?>
                    <?php foreach($students as $student): ?>
                <tr class="table-active">
                    <td> <?php echo $student->id; ?> </td>
                    <td> <?php echo $student->studentname; ?> </td>
                    <td> <?php echo $student->collegename; ?> </td>
                    <td> <?php echo $student->course; ?> </td>
                    <td> <?php echo $student->email; ?> </td>
                    <td> <?php echo $student->gender; ?> </td>
                    <td>
                        <?php echo anchor("admin/editStudent/{$student->id}", "Edit", ['class'=>'buttons']); ?> 
                        <?php echo anchor("admin/deleteStudent/{$student->id}", "Delete", ['class'=>'buttons']); ?> 
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