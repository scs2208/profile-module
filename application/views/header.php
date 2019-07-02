<!DOCTYPE html>
<html lang="en">
<head>

<title>Bootstrap Tutorial Sample Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		 body {
padding: 0;
margin: 0;
background: lightblue;
}
/*--- navigation bar ---*/
.navbar {
background:#000000;
}
.nav-link,
.navbar-brand {
color: #fff;
cursor: pointer;
}
.nav-link {
margin-right: 1em !important;
}
.nav-link:hover {
color: #000;
}
.navbar-collapse {
justify-content: flex-end;
}

	</style>

</head>

<body>
	<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="#">Logo</a>
<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
data-target="#main-navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<li class="nav-item">                          
<a class="nav-link" href="<?php echo base_url('index.php/CTRL_Registration/');?>">Home</a> 
</li>
<li class="nav-item">                          
<a class="nav-link" href="<?php echo base_url('index.php/CTRL_Registration/login');?>">Login</a>   <!-- link login menu to function -->
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo base_url('index.php/CTRL_Registration/savedata'); ?>">Register</a>  <!-- link register menu to function -->
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo base_url('index.php/CTRL_Registration/displaydata'); ?>">Staff</a>  <!-- link staff menu to function -->
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact</a>
</li>
</ul>
</div>
</nav>