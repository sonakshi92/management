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
    <style type="text/css">
        .buttons{
            color: #2196f3;
            border: 1px solid #cabdbd;
            border-radius: 5px;
            padding: 2px 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-dark bg-warning">
        <div class="container-fluid">
            <div class="navbar-header col-lg-10">
                <a href="" class="navbar-brand" style="color: blue;"> MANAGEMENT SYSTEM </a>
            </div>
            <div class="col-lg-2" style="margin-top:15px;" id="bs-example-navbar-collapse-2">
                <div class="btn-group">
                    <a href="#" class="btn btn-default"> Settings </a>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="carnet"></span></a>
                    <ul class="dropdown-menu">
                        <li> <?php echo anchor("admin/dashboard", 'Dashboard'); ?> </li>
                        <li> <?php echo anchor("welcome/logout", 'Logout'); ?> </li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
