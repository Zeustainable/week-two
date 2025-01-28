<section>
    <section class="mainSection">
        <div class="container mt-5">
            <?php include('Satsatin_Message.php'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Edit Information
                                <a href="<?=base_url('access/crud');?>" class="btn float-end">Return</a>
                            </h4>
                        </div>
                        <div class="card-body card-operation card-body-color">
                            <?php
                            if(isset($_GET['id'])) {
                                $student_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM studentgrade WHERE id='$student_id' ";
                                $query_run = mysqli_query($con, $query);
    
                                if(mysqli_num_rows($query_run) > 0) {
                                    $student = mysqli_fetch_array($query_run);
                                    ?>
                                        <form action="/week-one/Satsatin_Code.php" method="POST">
                                            <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                                            <div class="mb-3">
                                                <label>Student Name</label>
                                                <input type="text" name="studentName" value="<?=$student['studentName'];?>" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Email Address</label>
                                                <input type="email" name="studentEmail" value="<?=$student['studentEmail'];?>" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Final Grade</label>
                                                <input type="number" min="60" max="100" step="any" name="studentGrade" value="<?=$student['studentGrade'];?>" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Course</label>
                                                <input type="text" name="studentCourse" value="<?=$student['studentCourse'];?>" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" name="update_student" class="btn btn-primary">
                                                    Update Data
                                                </button>
                                            </div>
                                        </form>
                                    <?php
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
    </section>
</section>