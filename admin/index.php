<?php
session_start();
if (
  isset($_SESSION['admin_id']) &&
  isset($_SESSION['role'])
) {

  if ($_SESSION['role'] == 'Admin') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Home</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="icon" href="../resh.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
      <?php
      include "inc/navbar.php";
      ?>
      <div class="container mt-5">
        <div class="container text-center">
          <div class="row   ">
            <div class="col-6">
              <a href="teacher.php" class="w-100 btn btn-dark  py-3">
                <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                Teachers
              </a>
            </div>
            <div class="col-6">
              <a href="student.php" class="w-100 btn btn-dark  py-3">
                <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                students
              </a>
            </div>
            <div class="col-6">
              <a href="registrar-office.php" class="w-100 mt-2 btn btn-dark  py-3">
                <i class="fa fa-pencil-square fs-1" aria-hidden="true"></i><br>
                Registrar Office
              </a>
            </div>
            <div class="col-6">
              <a href="class.php" class="w-100 mt-2 btn btn-dark  py-3">
                <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                Class
              </a>
            </div>
            <div class="col-6">
              <a href="section.php" class="w-100 mt-2 btn btn-dark  py-3">
                <i class="fa fa-columns fs-1" aria-hidden="true"></i><br>
                Section
              </a>
            </div>
            <div class="col-6">
              <a href="grade.php" class="w-100 mt-2 btn btn-dark  py-3">
                <i class="fa fa-level-up fs-1" aria-hidden="true"></i><br>
                Grade
              </a>
            </div>
            <div class="col-6">
              <a href="course.php" class="w-100 mt-2 btn btn-dark  py-3">
                <i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                Course
              </a>
            </div>
            <div class="col-6">
              <a href="timetable.php" class="w-100 mt-2 btn btn-dark  py-3">
                <i class="fa fa-calendar fs-1" aria-hidden="true"></i><br>
                timetable
              </a>
            </div>

            <div class="col-6 ">
              <a href="../logout.php" class="w-100 mt-2 btn btn-danger  py-3 col-4">
                <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                Logout
              </a>
            </div>



            <!-- <a href="message.php" class="col-6 btn btn-dark  py-3">
                 <i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                  Message
               </a> 
               <a href="settings.php" class="col-6 btn btn-primary  py-3 col-6-5">
                 <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                  Settings
               </a>  -->

          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#navLinks li:nth-child(1) a").addClass('active');
        });
      </script>

    </body>

    </html>
<?php

  } else {
    header("Location: ../login.php");
    exit;
  }
} else {
  header("Location: ../login.php");
  exit;
}

?>