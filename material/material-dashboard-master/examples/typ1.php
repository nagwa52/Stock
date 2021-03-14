<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','stock');


$dbcon=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if(!$dbcon){
	die('error connecting to database');
}

echo '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
           
      
     $empname = trim($_POST['empname']);
 

      // Check for salary
      if (empty($_POST['salary'])) {
      $errors[] = 'You forgot to enter salary.';
      } else {
      $salary = mysqli_real_escape_string($dbcon, trim($_POST['salary']));
      }
      
      
      
      // Check for data
      if (empty($_POST['data']) ) {
      $errors[] = 'You forgot to enter your age.';
      }
       else {
      $data = mysqli_real_escape_string($dbcon, trim($_POST['data']));
      }
      // Check for an notes
      if (empty($_POST['notes'])) {
      $errors[] = 'You forgot to enter your notes.';
      } else {
      $notes = mysqli_real_escape_string($dbcon, trim($_POST['notes']));
      }
     
      if (empty($errors)) { // If it runs
      // Register the user in the database...
      // Make the query:

      $q = "INSERT INTO add_payment (id,date,name,salary,data,notes,E_id)
       VALUES ('', NOW(),'$empname','$salary','$data','$notes',(SELECT id from employee where name = '$empname'))";
        $dq = "INSERT INTO delete_emp (Did,Ddate,Dname,Dsalary,Ddata,Dnotes)
        VALUES ('', NOW(),'$empname','$salary','$data','$notes')";
        
      $result = @mysqli_query ($dbcon, $q); 
      $dresult = @mysqli_query ($dbcon, $dq);
      // Run the query
      if ($result && $dresult) 
      { // If it runs
      header ("location: dashboard.php");
      exit();
      } 
      else 
      { // If it did not run
      // Message:
      echo '<h2>System Error</h2>
      <p class="error">You could not be registered due to a system error. We apologize 
      for any inconvenience.</p>';
      // Debugging message:
      echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
      } // End of if ($result)

mysqli_close($dbcon); // Close the database connection.
// Include the footer and quit the script:
    }
exit();
} 

?>
     