<main>
    <section class="mainSection">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>View Information <a href="<?=base_url('access/crud');?>" class="btn float-end">Return</a>
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
                            <div class="mb-3">
                                <label>Student Name</label>
                                <p class="form-control"> <?=$student['studentName'];?> </p>
                            </div>
                            <div class="mb-3">
                                <label>Email Address</label>
                                <p class="form-control"> <?=$student['studentEmail'];?> </p>
                            </div>
                            <div class="mb-3">
                                <label>Final Grade</label>
                                <p class="form-control"> <?=$student['studentGrade'];?> </p>
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <p class="form-control"> <?=$student['studentCourse'];?> </p>
                            </div>
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
</main>