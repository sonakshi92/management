<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> hhhhh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-dark bg-warning">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> User Event</a>
            </div>
                <ul class="nav navbar-nav">
                    <li class="active"> <?php  ?> </li>
                   
                 </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><?php echo anchor('admin/asignup', 'Admin Sign Up')?></li>
                    <li><?php echo anchor('admin/usignup', 'User Sign Up')?></li>
                    <li><?php echo anchor('admin/logout', 'admin Logout')?></li>

                    <li><?php echo anchor('user/logout', ' user Logout')?></li>


                    <li><?php echo anchor('admin/asignin', 'Admin Login')?></li>
                    <li><?php echo anchor('user/usignin', 'User Login')?></li>

                </ul>
         </div>
           
         

</nav>