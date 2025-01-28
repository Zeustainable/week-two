<section>
    <section class="mainSection">
        <div class="container mt-5">
            <?php include('Satsatin_Message.php'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Student Information
                                <a href="<?=base_url('access/crud');?>" class="btn float-end">Return</a>
                            </h4>
                        </div>
                        <div class="card-body card-operation card-body-color">
                            <form action="Satsatin_Code.php" method="POST">
                                <div class="mb-3">
                                    <label for="studentName">Student Name</label>
                                    <input type="text" name="studentName" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentEmail">Email Address</label>
                                    <input type="email" id="studentEmail" name="studentEmail" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentGrade">Final Grade</label>
                                    <input type="number" min="60" max="100" step="any" id="studentGrade" name="studentGrade" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentCourse">Course</label>
                                    <input type="text" id="studentCourse" name="studentCourse" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-primary">Add Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>