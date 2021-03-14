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
        
          <li class="nav-item active">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">topic</i>
              <p style="font-size: 22px;">تقارير</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">topic</i>
              <p style="font-size: 22px;">الموظفين الحاليين</p>
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
              <div class="card" >
                <div class="card-header card-header-primary">
                  <h2>تقرير مصرفى</h2>
                 
                </div>
                <div class="card-body">
          
<?php
		// After clicking the Edit link in the found_record.php page, the editing interface appears
		// The code looks for a valid user ID, either through GET or POST #1
		if ( (isset($_GET['Did'])) && (is_numeric($_GET['Did'])) ) { // From view_users.php
		$Did = $_GET['Did'];
		} 
		elseif ( (isset($_POST['Did'])) && (is_numeric($_POST['Did'])) ) { // Form submission
		$Did = $_POST['Did'];
		} 
		else { // If no valid ID, stop the script
		echo '<p class="error">This page has been accessed in error</p>';
		exit();
		}

require ('connect-mysql.php');
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
		$errors = array();


		// Look for the dental codes
        if (empty($_POST['Ddate'])) {
		$errors[] = 'You forgot to enter the date';
		} else {
		$Ddate = mysqli_real_escape_string($dbcon, trim($_POST['Ddate']));
		}





		if (empty($errors)) 
		{ // If everything is OK, make the update query 
		// Check that the email is not already in the users table
		$q = "UPDATE delete_emp SET Ddate='$Ddate' WHERE Did=$Did LIMIT 1";
		$result = @mysqli_query ($dbcon, $q);
		if (mysqli_affected_rows($dbcon) == 1) { // If it ran OK
		// Echo a message if the edit was satisfactory
		echo '<h3>لقد تم تعديل التاريخ بالفعل</h3>';
		} else { // Echo a message if the query failed
		echo '<p class="error">The user could not be edited due to a system error. 
		We apologize for any inconvenience.</p>'; // Error message.
		echo '<p>' . mysqli_error($dbcon) . '<br />Query: ' . $q . '</p>'; // Debugging message.
		} // End of if ($result)
		mysqli_close($dbcon); // Close the database connection.
		// Include the footer and quit the script:
		
		exit();
		} else   { // Display the errors.
		echo '<p class="error">The following error(s) occurred:<br />';
        
		foreach ($errors as $msg) { // Extract the errors from the array and echo them
		echo " - $msg<br>\n";
	    }
		echo '</p><p>Please try again.</p>';
		} // End of if (empty($errors))section
}        // End of the conditionals
         // Select the record 


$q = "SELECT Did,Ddate FROM delete_emp WHERE Did=$Did";
$result = @mysqli_query ($dbcon, $q);
if (mysqli_num_rows($result) == 1) 
{   // Valid user ID, display the form.
	// Get the user's information
	$row = mysqli_fetch_array ($result, MYSQLI_NUM);
	// Create the form
	echo '<form action="map.php" method="post">
	<p><label class=" font_btn" style="margin-left:400px;" for="Ddates">برجاء ادخال التاريخ الذى تريد تعديله</label>
  </br>
  <input class="fl-left" id="Dname" style="margin-left:400px; type="Ddate" name="Ddate" size="30" maxlength="30" 
	value="' . $row[1] . '"></p>

	<p><input class="btn btn-primary pull-right" type="submit" style="height:50px;width: 100px; font-size:22px;"
   name="submit" value="تعديل"></p>
	<br><input type="hidden" name="Did" value="' . $Did . '" /> 
	</form>';
} 
else { // The record could not be validated
	  echo '<p class="error">This page has been accessed in error</p>';
	 }
mysqli_close($dbcon);

?>
        


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