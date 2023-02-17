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
                    <h4>Student Add</h4>
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="">Student Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Student Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require_once("includes/footer.php") ?>