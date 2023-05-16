<?php
$hostname = "localhost";
$db = "sms_db";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
$sql = "SELECT subject FROM subjects";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo ($ex->getMessage());
}
session_start();
// include "teacher.php";
// include "subject.php";

if (
    isset($_SESSION['admin_id']) &&
    isset($_SESSION['role'])
) {

    if ($_SESSION['role'] == 'Admin') {
        include "../DB_connection.php";
        include "data/teacher.php";
        include "data/subject.php";
        include "data/grade.php";
        include "data/class.php";
        include "data/section.php";
        $teachers = getAllTeachers($conn);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin - Teachers</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/style.css">
            <link rel="icon" href="../reshh.png">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                /* CSS styling for the table */
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th,
                td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: center;
                }

                th {
                    background-color: lightgray;
                }

                /* End of CSS styling for the table */
                /* CSS styling for the select element */
                .form-select {
                    width: 300px;
                }


                /* End of CSS styling for the select element */
            </style>
        </head>

        <body>
            <?php
            include "inc/navbar.php";
            ?>
            <div class="mx-5 my-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Choose your class</option>
                    <?php foreach ($results as $output) { ?>
                        <option><?php echo $output['subject']; ?></option>
                    <?php } ?>
                </select>
            </div>
            </div>

            <div class="mx-3 px-3 " style="border-radius: 5px;">
                <div class=" table mt-3 pt-3 ">
                    <center>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Lecture 1</th>
                                    <th>Lecture 2</th>
                                    <th>Lecture 3</th>
                                    <th>Lecture 4</th>
                                    <th>Lecture 5</th>
                                    <th style="width: 215px;">op</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sat</td>
                                    <td style="max-width: 120px;">
                                        <select class="form-select-lg mb-2" aria-label=".form-select" style="height: 47px;">
                                            <option selected>teacher</option>
                                            <option selected>teacher</option>
                                            <?php foreach ($results as $output) { ?>

                                                <option><?php echo $output['username']; ?></option>
                                            <?php } ?>
                                        </select>

                                        <select class="form-select-lg mb-2" aria-label=".form-select" style="height: 47px;">
                                            <option selected>subject</option>
                                            <option selected>Subject</option>
                                            <?php foreach ($results as $output) { ?>
                                                <option><?php echo $output['subject']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Sun</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Mon</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Tue</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Wed</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
        </body>

        </html>
        <!-- <table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif; border: 1px solid black;">
                            <thead>
                                <tr style="background-color: #f2f2f2;">
                                    <th style="border: 1px solid black; padding: 10px;"> #</th>
                                    <th style="border: 1px solid black; padding: 10px; text-align: center;">Lecture 1</th>
                                    <th style="border: 1px solid black; padding: 10px; text-align: center;">Lecture 2</th>
                                    <th style="border: 1px solid black; padding: 10px; text-align: center;">Lecture 3</th>
                                    <th style="border: 1px solid black; padding: 10px; text-align: center;">Lecture 4</th>
                                    <th style="border: 1px solid black; padding: 10px; text-align: center;">Lecture 5</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black; padding: 10px; text-align: center;">Saturday</td>
                                    <td style="border: 1px solid black; padding: 10px;"><select class="form-select mb-1" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <select class="form-select px-4" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                    <td style="border: 1px solid black; padding: 10px;"><select class="form-select mb-1" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <select class="form-select px-4" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </td>
                                    <td style="border: 1px solid black; padding: 10px;"><select class="form-select px-4" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></td>
                                    <td style="border: 1px solid black; padding: 10px;"><select class="form-select px-4" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></td>
                                    <td style="border: 1px solid black; padding: 10px;"><select class="form-select px-4" aria-label="Default select example">
                                            <option selected>Open</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 10px; text-align: center;">Sunday</td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="timetable-edit.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="timetable-delete.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-danger">Delete</a>
                                        <a href="timetable-save.php?timetable_id=<?= $timetable['timetable_id'] ?>" class="btn btn-success">Save</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 10px; text-align: center;">Monday</td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;">

                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 10px; text-align: center;">Tuesday</td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;">
                                        <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black; padding: 10px; text-align: center;">Wednesday</td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"></td>
                                    <td style="border: 1px solid black; padding: 10px;"> <a href="teacher-edit.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="teacher-delete.php?teacher_id=<?= $teacher['teacher_id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
        </center>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#navLinks li:nth-child(9 ) a").addClass('active');
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