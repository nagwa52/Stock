<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet"  href="dahab_style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   dahab company
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
 
    <div class="sidebar" data-color="purple" data-background-color="white"  >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
     
          <!-- <li class="nav-item "> -->
          

          <img src="dahab.png" style="margin-right:66px;    background-color: transparent;
            width: 210px; height:80px ;
           padding-right:-px; padding-left:63px ;padding-bottom:10px;
           margin-top: 0; ">
 
          
<!-- </li> -->

      <div class="sidebar-wrapper">
      <ul class="nav">
      <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">home</i>
              <p style="font-size: 22px;">الصفحه الرئيسيه</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">table_rows</i>
              <p style="font-size: 22px;">الخزينه</p>
            </a>
          </li>
          <li class="nav-item active ">
          <a class="nav-link" href="./user.php">
            <i class="material-icons">add</i>
            <p style="font-size: 22px;">اضافه توجيه محاسبى</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./typography.php">
            <i class="material-icons">person_add</i>
            <p style="font-size: 22px;">اضافه شغل</p>
          </a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link" href="./delete_employee.php">
            <i class="material-icons">person_remove</i>
            <p style="font-size: 22px;">مسح شغل</p>
          </a>
        </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">topic</i>
              <p style="font-size: 22px;">تقارير</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="./upgrade.php">
              <i class="material-icons">unarchive</i>
              <p style="font-size: 22px;">الارشيف</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
           
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
              <!-- <input type="text" value="" class="form-control" placeholder="Search..."> -->
              
                
              </div>
            </form>
      
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h2  style="text-allign:center">التوجيه المحاسبى  </h2>
                 
                </div>
                <div class="card-body">
                <form action="user1.php" method="post" class="form">
                <div class="col-md-12" >
                        <div class="form-group"style="text-align-last: right;">
                <label class="lablebtn"
                 style="position: initial;!important ;color:black ; font-weight:600;font-size: 20px" >ادخل التوجيه الحسابى: </label>
                <input type="text"  name="name" class="form-control" style="font-size: 20px;">  
                   </div>
                  </div>
                <br />  
                <input type="submit" name="add" class="btn btn-primary pull-right"
                 style="font-size:22px;" value="اضافه" /> 
                <br />
           
             </form>


</head>
<body>



</div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
include 'includes/footer.php';


?>