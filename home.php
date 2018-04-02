<?php
  session_start();
  if(isset($_POST["loginbtn"])){
  $_SESSION["name"] = $_POST["username"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "author" content = "Dennis Yang, Jessica Xu">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style/main.css">

</head>

<body>

<div class = "navbar" >
  <a href = "myrides.html">My Rides</a>
  <a href = "rider.html">Find Rides</a>
  <a href = "driver.html">Give Rides</a>
  <a href = "aboutus.html">About Pool@UVA</a>
  <a href = "logout.php"  onclick="return confirm('Do you really want to Logout?');">Logout</a>

</div>



<div class = "rightnav container" style = "overflow-x:auto">
  <h2 class = "moved">  <?php echo "Welcome, "; echo $_SESSION["name"];?>
  </h2>
  <h2 class = "moved"> Current Rides </h2>
  <table id = "rideTable" class = "table">
    <thead>
      <tr>
        <th>Date</th>
        <th>Time</th>
        <th>To</th>
        <th>From</th>
        <th>Driver</th>
        <th>Request</th>
      </tr>
      <tr>
        <td>3/10/2018</td>
        <td>5:00 PM</td>
        <td>Fairfax, VA</td>
        <td>UVA</td>
        <td>Jessica Xu</td>
        <td id = "check" ><input type=button value=' X ' onClick='request()'></button></td>
      </tr>
      <tr>
        <td>3/15/2018</td>
        <td>5:00 PM</td>
        <td>Fairfax, VA</td>
        <td>UVA</td>
        <td>Jessica Xu</td>
          <td id = "check" ><input type=button value=' X ' onClick='request()'></button></td>
      </tr>
      <tr>
        <td>3/15s/2018</td>
        <td>5:00 PM</td>
        <td>Fairfax, VA</td>
        <td>UVA</td>
        <td>Jessica Xu</td>
          <td id = "check" ><input type=button value=' X ' onClick='request()'></button></td>
      </tr>
    </thead>
</div>


</body>



<script>
<?php
  include "login.php";
  if(isset($_POST['loginbtn'])){
      $_SESSION["name"] = $_POST["username"];


  }


?>
</script>


</html>
