<section class="accountSection">
    <section class="mainSection">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Student Information
                                <a href="<?=base_url('Access/Crud');?>" class="btn float-end">Return</a>
                            </h4>
                        </div>
                        <div class="card-body card-operation card-body-color">
                            <form action="<?=base_url('Access/User_create');?>" method="POST">
                                <div class="mb-3">
                                    <label for="date">Date</label>
                                    <input type="date" id="date" name="date" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="task">Task</label>
                                    <input type="text" id="task" name="task" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentCourse">Status</label>
                                    <input type="text" id="status" name="status" class="form-control" required>
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