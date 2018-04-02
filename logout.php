<?php
  session_destroy();
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

<body onload = change()>
  <script>
  function change(){
    location.href = "login.html";
  }
  </script>

</body>






</html>
