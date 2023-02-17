<?php
session_start();
require_once("dbcon.php");
require_once("includes/header.php");

?>

<div class="container mt-5">
    <?php require_once("message.php"); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Edit</h4>
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $student_id = mysqli_real_escape_string($mysqli, $_GET['id']);
                        $query = "SELECT * FROM students_crud WHERE id='$student_id'";
                        $query_run = mysqli_query($mysqli, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);

                    ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                                <div class="mb-3">
                                    <label for="">Student Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $student['name'] ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="">Student Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $student['email'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Phone</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $student['phone'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Student Course</label>
                                    <input type="text" name="course" class="form-control" value="<?php echo $student['course'] ?>" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="update_student_btn" class="btn btn-primary">Update Student</button>
                                </div>

                            </form>
                    <?php

                            // echo "<pre>";
                            // print_r($student);
                            //   Array
                            // (
                            //     [0] => 1
                            //     [id] => 1
                            //     [1] => Nemanja
                            //     [name] => Nemanja
                            //     [2] => merca@gmail.com
                            //     [email] => merca@gmail.com
                            //     [3] => 0645522111
                            //     [phone] => 0645522111
                            //     [4] => IT
                            //     [course] => IT
                            // )

                        } else {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>





<?php require_once("includes/footer.php") ?>