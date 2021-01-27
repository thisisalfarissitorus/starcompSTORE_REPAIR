<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/botnav_bs/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="echo base_url('assets/botnav_bs/css/bootstrap-grid.min.css');?>">
	<link rel="stylesheet" type="text/css" href="echo base_url('assets/botnav_bs/css/bootstrap-reboot.min.css');?>">
	<title>NAVIGATION BAR EXAMPLE</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Profile</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Inbox</a>
                    <a href="#" class="dropdown-item">Sent</a>
                    <a href="#" class="dropdown-item">Drafts</a>
                </div>
            </div>
        </div>
        <form class="form-inline">
            <div class="input-group">                    
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link">Login</a>
        </div>
    </div>
</nav>

<script type="text/javascript" src="<?php echo base_url('assets/botnav_bs/js/bootstrap.min.js');?>"></script>
</body>
</html>