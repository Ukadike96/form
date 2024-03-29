<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Interner member</title>

<link rel="stylesheet" href="css/bootstrap.css" />
<link href="https://fonts.googleapis.com/css?family=Lobster|Rokkitt|Source+Sans+Pro|Ubuntu" rel="stylesheet">

<script type="text/javascript" src="js/jquery-3.1.1.min.js">
</script>

<script src="js/bootstrap.js" type="text/javascript"></script>
<style>
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: inherit;
  background-image: none;
  border-left:0px;
  border-right:0px;
  border-top:0px;
  border-bottom: 1px solid #333;
  border-radius: 4px;
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-transition: none;
       -o-transition: none;
          transition: none;
}

.btn { border-radius:0px; }

.btn-default { background-color:inherit;
 color:#9d9d9d;
 border:0px;
 }

body{
    font-family: 'Ubuntu', sans-serif;
	}

h1, h2, h3, h4 {
    font-family: 'Lobster', cursive;
	}

.btn-black{
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
}

.btn-black:hover, .btn-black:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
}

.jumbotron {
  padding-top: 5px;
  padding-bottom: 5px;
  color: inherit;
  background-color: #eee;
}
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
	padding-left: 70px;
    padding-right: 70px;
	}
.contain{
   padding-left:30px;
   padding-right:30px;
   margin-right: auto;
   margin-left: auto;
   }

.contain> .navbar-header,
.contain> .navbar-collapse {
  margin-right: 5px;
  margin-left: -25px;
}

.bg-1 {
       background-color: #1abc9c; /* Green */
        color: #ffffff;
    }

.bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }

 .bg-grey {
    background-color: #eee;
}

.bg-red { background-color:#d9534f; }

.bg-lavendar{ background-color:#9099A2; }

.bg-info { background-color:#d9edf7; }

.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: #080808;
}

.list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
}

.list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.nav-tabs li a {
    color: #777;
}

.panel{ border-radius: 0px; }

.modal-header, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
}

.modal-header, .modal-body, .modal-footer {
    padding: 40px 50px;
}

.modal-content{ border-radius: 0px; }

.navbar-toggle {
  border: 0px;
  border-radius: 0px;
}
.carousel-control.right, .carousel-control.left {
    background-image: none;
}
a{ color:#777; }
footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 20px;
	bottom:0px;
	width:100%;
}

footer a {
    color: #f5f5f5;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}

    @media screen and (max-width: 767px) {
.container-fluid {
  padding-right: 30px;
  padding-left: 30px;
  margin-right: auto;
  margin-left: auto;
}
    }

</style>

</head>

<body id="myPage">

<div class="navbar-fixed-top">

<div class="jumbotron">
<div class="contain">

<div class="row">

<div class="col-xs-4">

<h4>Interner</h4>

</div>

<div class="col-xs-8" align="right">

<a href="signin.html" class="btn btn-sm btn-black" style="margin-right:5px">Sign out</a>

</div>

</div>

</div>
</div>

<div style="margin-top:-30px;">


<nav class="nav navbar-inverse">

<div class="contain">

<div class="navbar-header">

     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

<div class="collapse navbar-collapse" id="myNavbar">

<ul class="nav navbar-nav navbar-right ">
<li><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
<li><a href="forum.html"><span class="glyphicon glyphicon-comment"></span> Forum</a></li>
<li><a href="message.html"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
<li><a href="resource.html"><span class="glyphicon glyphicon-cog"></span> Resources</a></li>
</ul>
</div>

</div>

</nav>

</div>

</div>



<div class="container" style="margin-top:150px;">
<div class="row">

<div class="col-md-4">

<div class="panel panel-default">

<div class="panel-heading">
<h4 style="color:#1abc9c;">Personal information</h4>
</div>

<div class="panel-body">

<center>
<img src="images/signin.jpg" class="img-circle img-responsive" width="96" height="96" />
</center>
<button class="btn btn-black btn-sm pull-right" type="button">Upload photo</button><br />
<hr />

    <ul class="list-group">
      <li class="list-group-item">Name: <?php echo $_SESSION['name']?></li >
      <li class="list-group-item">E-mail: <?php echo $_SESSION['email']?></li >
      <li class="list-group-item">Phone number: <?php echo $_SESSION['phone']?></li >
	  <li class="list-group-item">Date of Birth: <?php echo $_SESSION['dob']?></li >
    </ul >

</div>

</div>

</div>
<div class="col-md-1"></div>

<div class="col-md-7">

<div class="panel panel-default">

<div class="panel-body">

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#academic" style="color:#1abc9c;"><b>Academic information</b></a ></li >
  <li ><a data-toggle="tab" href="#documents" style="color:#1abc9c;"><b>Documents</b></a ></li >
  <li ><a data-toggle="tab" href="#notification" style="color:#1abc9c;"><b>Notifications</b></a ></li >
</ul >

<div class="tab-content">
  <div id="academic" class="tab-pane fade in active">
  <br />
  <h5>School:<?php echo $_SESSION['school']?></h5>
  <br />
  <h5>City: <?php echo $_SESSION['city']?></h5>
  <br />
  <h5>Course of Study:<?php echo $_SESSION['course']?></h5>

  </div >
  <div id="documents" class="tab-pane fade"><br />
  <a href="" class="pull-right">Add <span class="glyphicon glyphicon-plus"></span></a>
  </div>
  <div id="notification" class="tab-pane fade">
  <br /><p class="pull-right">No notifications</p>
  </div >

</div ></div>


</div>

<div class="pull-right">
<a href=""><span class="glyphicon glyphicon-pencil"></span> Edit profile</a><br /><br />
<a href="" class="btn btn-sm btn-black">Generate CV</a>
</div>

</div>


</div>
</div>




<div class="modal info" id="termMod" data-backdrop="static"  tabindex="-1"  >

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<button class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Terms and Conditions</h4>

</div>
<div class="modal-body">

<p class="text-justify">

Please, be sure to read carefully through this agreement before accessing the information and services provided by this site. By accessing our website http://www.interner.com, you agree to be bound by these terms and conditions. These terms and conditons may be reviewed and updated in subsequent times with/without prior notice. </p>

<h4>Copyright</h4>
<p class="text-justify">
Materials available on this site are properties of Interner.com unless indicated otherwise and you therefore agree not to infringe on any intellectual property rights hence no unlicensed reproduction, modification and distribution (unless link to website is provided upon distribution) and you may not use this site or provide a link on this in any defamatory platform.</p>

<h4>Use Policy</h4>
<p class="text-justify">
visitors are permitted to access information provided on this site, download materials for personal use only and subscribe to newsletter notifications. Members have expanded priviledges to generate CV(not to be reproduced) and use the auto-apply features.
</p>
<h4>Privacy Policy</h4>
<p class="text-justify">
Interner respects your privacy regarding any information collected whilst carrying out our operations and accordingly, we have developed this privacy policy to guarantee the safety of your personal informations. Our privacy policy are outlined thus:<br />

Information collected upon signup and profile completion shall not be shared to anyone.<br />
We will collect information by lawful and fair means and where appropriate, with knowledge of the individual concerned.<br />
Personal information would be retained for as long as is needed for the fulfillment of the purpose for which it was collected.

</p>

</div>
<div class="modal-footer">

<p class="text-justify">We wish to reiterate at this point that the terms and conditions above would be updated subsequently, thank you and be sure to comply to the above listed terms. Enjoy your access to <a href="index.html">Interner</a>.</p>

</div>

</div>

</div>

</div><br />

<footer class="text-center">
  <p >Copyright Interner 2017, <a href="#termMod" data-toggle="modal">Terms and Conditions</a ></p >
</footer >

</body>
</html>
