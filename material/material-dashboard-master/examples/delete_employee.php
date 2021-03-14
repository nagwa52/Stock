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
        <li class="nav-item active ">
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
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " style="padding-left:360px">
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
            <ul class="navbar-nav" >
            <div class="editsize" style="width:350px; height:30px ">
            
            <input type="text"  id="myInput"      onkeyup="myFunction()"
               placeholder="   بحث">
               
            
                          
</ul>
            </ul>
          
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card"  style="width:800px;margin-top:10px;  margin-left:745px;">
                <div class="card-header card-header-primary">
                  <h2  style="text-allign:center">بيانات الموظفين </h2>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">

<style>
table {
border-collapse: collapse;
width: 100%;
color: #333333;
font-family: monospace;
font-size: 18px;
text-align:right;
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 22px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>


<table id="myTable" class="table">
    <tbody>
<tr class="header" class="heading">
<th>الرقم التسلسلى</th>
<th>التاريخ</th>
<th>المبلغ</th>
<th>البيان</th>
<th>الملاحظات</th>
<th>التوجيه المحاسبى</th>
<th>مسح</th>
</tr>
</tbody>
<?php
$conn = mysqli_connect("localhost", "root", "", "stock");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id AS id , date AS date ,name AS name,salary AS salary,data AS data,notes AS notes ,E_id AS E_id FROM add_payment";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr><td >'.  $row['id'] . '</td>
<td>'.  $row['date'] . '</td>
<td>'.  $row['salary'] . '</td>
<td>'.  $row['data'] . '</td>
<td>' . $row['notes'] . '</td>
<td>'.  $row['name'] . '</td>
<td><a href="deleteemployee.php?id=' . $row['id'] . '">مسح</a></td>




</tr>';
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
include 'includes/footer.php';


?>