<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?> assets/css/style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Investing Journal</a>
        </div>
        <ul class="nav navbar-nav">
            <li><?php echo anchor('admin', 'Dashboard', 'title="Dashboard Home"'); ?></li>
            <li><?php echo anchor('admin/pages', 'Pages', 'title="View Pages"'); ?></li>
            <li><?php echo anchor('admin/subjects', 'Subjects', 'title="View Subjects"'); ?></li>
            <li><?php echo anchor('admin/users', 'Users', 'title="View Users"'); ?></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('/', 'View Website', 'target="_blank"'); ?></li>
            <li><?php echo anchor('users/logout', 'Logout', 'title="Logout"'); ?></li>
        </ul>
    </div>
</nav>
<main role="main" class="container">


    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><?php echo anchor('admin/pages/add', 'Add new page'); ?></li>
                <li class="list-group-item"><?php echo anchor('admin/subjects/add', 'Add new subject'); ?></li>
                <li class="list-group-item"><?php echo anchor('admin/users/add', 'Add new user'); ?></li>
            </ul>
        </div>
        <div class="col-md-8">
            <!-- Load main view -->
            <?php $this->load->view($main) ?>
        </div>
    </div>
</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
