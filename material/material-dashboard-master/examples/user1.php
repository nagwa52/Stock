<?php
// The link to the database is moved to the top of the PHP code.
require ('connect-mysql.php'); // Connect to the db.
// This query INSERTs a record in the users table.
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$errors = array(); // Initialize an error array.
// Check for a name:
if (empty($_POST['name'])) {
$errors[] = 'You forgot to enter the Name.';
} else {

$name = mysqli_real_escape_string($dbcon, trim($_POST['name']));
$duplicate=mysqli_query($dbcon,"SELECT name FROM employee WHERE name='$name'");
if (mysqli_num_rows($duplicate)>0)
{
  
  $errors[] = 'هذا الاسم  موجود من قبل برجاء ادخال اسم اخر واعد المحاوله';
}
}

if (empty($errors)) { // If it runs
// Register the user in the database...
// Make the query:
$q = "INSERT INTO employee (id,name,date)
VALUES (' ', '$name', NOW() )";
$result = @mysqli_query ($dbcon, $q); // Run the query.
if ($result) { // If it runs
 header ("location: typography.php");

exit();
} else { // If it did not run
// Message:
echo '<h2>System Error</h2>
<p class="error">You could not be registered due to a system error. We apologize 
for any inconvenience.</p>';
// Debugging message:
echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if ($result)
mysqli_close($dbcon); // Close the database connection.
// Include the footer and quit the script:
 include ('footer.php');
exit();
} else { // Report the errors.
	echo '<h2 class="error">Error!</h2>
<p class="error">The following error(s) occurred:<br>';
foreach ($errors as $msg) { // Extract the errors from the array and echo them
echo "<p class='error'> - $msg<br></p>\n";
}
echo '</p><h3 class="error">Please try again.</h3><p><br></p>';
}// End of if (empty($errors))
} // End of the main Submit conditional.
?>