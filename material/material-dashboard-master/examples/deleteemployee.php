<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet"  href="dahab_style.css">
  <link rel="stylesheet"  href="newstyle.css">

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
          <li class="nav-item ">
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
        <li class="nav-item ">
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
         
         
        
        </div>
      </nav>
       <!-- End Navbar -->
       <!--Start of content for delete page-->


<div class="content">
        <div class="container-fluid">
          <div class="row" style="align-self:right;">
            <div class="col-md-8" style="align-self:right;">
              <div class="card" style="margin-top:35px;  margin-left:140px;margin-right:160px">
                <div class="card-header card-header-primary"style="text-align-last: right;">
</div>
                <div class="card-body">
                   
<?php
// Check for a valid user ID, through GET or POST
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { //Details from view_users.php
$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission #1
$id = $_POST['id'];
} else { // If no valid ID, stop the script
echo '<p class="error">This page has been accessed in error.</p>';

exit();
}
require ('connect-mysql.php');
// Has the form been submitted? #2
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($_POST['sure'] == 'Yes') { // Delete the record
// Make the query
$selecttrash="INSERT INTO trash(Tid, Tdate, Tname,Tsalary,Tdata,Tnotes)
SELECT id, date, name ,salary,data,notes FROM add_payment WHERE id = $id";
$trashres = @mysqli_query ($dbcon , $selecttrash);
$q = "DELETE FROM add_payment WHERE id=$id LIMIT 1";
$result = @mysqli_query ($dbcon , $q);

if (mysqli_affected_rows($dbcon ) == 1) { // If there was no problem
// Display a message
echo '<h3>تم المسح بالفعل</h3>';
} else { // If the query failed to run
echo '<p class="error">The record could not be deleted.<br>Probably 
because it does not exist or due to a system error.</p>'; // Display error message
echo '<p>' . mysqli_error($dbcon ) . '<br />Query: ' . $q . '</p>';
// Debugging message
}
} else { // Confirmation that the record was not deleted
echo '<h3>لم يتم المسح.</h3>';
}
} else { // Display the form
// Retrieve the member's data #3
$q = "SELECT name FROM add_payment WHERE id=$id";
$result = @mysqli_query ($dbcon , $q);
if (mysqli_num_rows($result) == 1) { // Valid user ID, show the form
// Get the member's data
$row = mysqli_fetch_array ($result, MYSQLI_NUM);
// Display the name of the member being deleted
echo "<h2>  هل انت تريد مسح $row[0] ؟</h2>";
// Display the delete page
echo '<form action="deleteemployee.php" style="text-allign:center ;padding-left:145px" method="post"> 
<input id="button1" type="submit" name="sure" value="Yes" class="alert alert-success">
<input id="button2" type="submit" name="sure" value="No"class="alert alert-danger" >
<input type="hidden" name="id" value="' . $id . '">
</form>';
} else { // Not a valid member’s ID
echo '<p class="error">This page has been accessed in error.</p>';

}
} // End of the main conditional section
mysqli_close($dbcon );

?>
</div>
</div>
</div></div></div></div>
<?php
include 'includes/footer.php';


?>