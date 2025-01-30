<section>
    <section class="mainSection">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h4>Edit Information
                            <a href="<?=base_url('Access/Crud');?>" class="btn float-end">Return</a>
                        </h4>
                    </div>
                    <div class="card-body card-operation card-body-color">
                        <div href='<?= base_url('Access/Edit'); ?>'></div>
                            <?php
                                foreach ($query_run as $task) {
                            ?>
                                <form action="<?=base_url('Access/User_edit');?>" id="edit_student_form_<?= $task['id']; ?>" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $task['id']; ?>">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input type="date" name="date" value="<?=$task['date'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Task</label>
                                        <input type="text" name="task" value="<?=$task['task'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <input type="text" name="status" value="<?=$task['status'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="button" onclick="confirmButton('edit_student_form_<?= $task['id']; ?>', 'edit')" class="btn btn-info btn-sm">
                                            Update Data
                                        </button>
                                    </div>
                                </form>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>