<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .hidden {
            display: none;
        }
    </style>

</head>
  <body>
  <?php
    include "navbar.php";
    ?>
    <br><br><br>
    
    <div id="form">
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    </div>
    <div class="container mt-5">
        <h2>Mark Attendance</h2>
        <button class="btn btn-primary" id="attendanceBtn" onclick="markAttendance()">Mark Attendance</button>
       <p class="mt-3 hidden text-white" id="message">Attendance is marked</p>
    </div>
    <script>
       function markAttendance() {
        document.getElementById('message').classList.remove('hidden');
       }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>