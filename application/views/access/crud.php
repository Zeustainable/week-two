<section>
    <section class="mainSection">
        <div class="container mt-4">
            <?php include('Satsatin_Message.php'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Student Information
                                <a href="<?=base_url('access/create');?>" class="btn float-end">Add Data</a>
                            </h4>
                        </div>
                        <div class="card-body card-body-color">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student Name</th>
                                        <th>Email Address</th>
                                        <th>Final Grade</th>
                                        <th>Course</th>
                                        <th>Date Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM studentgrade WHERE isArchived = 0";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0) {
                                            foreach($query_run as $student) {
                                                ?>
                                                <tr>
                                                    <td><?= $student['id']; ?></td>
                                                    <td><?= $student['studentName']; ?></td>
                                                    <td><?= $student['studentEmail']; ?></td>
                                                    <td><?= number_format($student['studentGrade'], 2, '.', ',') ?></td>
                                                    <td><?= $student['studentCourse']; ?></td>
                                                    <td><?= date('M-d-Y | h:i A', strtotime($student['dateAdded']))?></td>
                                                    <td>
                                                        <div class="btnFunction">
                                                            <a href="/week-one/Satsatin_View.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>
                                                            <a href="/week-one/Satsatin_Edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm"><i class="bi bi-pen-fill"></i></a>
                                                            <form action="/week-one/Satsatin_Code.php" id="delete_student_form_<?= $student['id']; ?>" method="POST" class="d-inline">
                                                                <input type="hidden" name="delete_student" value="<?= $student['id']; ?>">
                                                            </form>
                                                            <button type="button" onclick="confirmDelete('delete_student_form_<?= $student['id']; ?>')" class="btn btn-danger btn-sm">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "<h5> No Record Found </h5>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>