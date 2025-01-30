<section>
    <section class="mainSection">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Student Information
                                <a href="<?= base_url('Access/Create'); ?>" class="btn float-end">Add Data</a>
                            </h4>
                        </div>
                        <div class="card-body card-body-color">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Date Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr href='<?= base_url('Access/User_crud'); ?>'></tr>
                                    <?php
                                    foreach ($query_run as $task) {
                                    ?>
                                        <tr>
                                            <td><?= $task['id']; ?></td>
                                            <td><?= $task['date']; ?></td>
                                            <td><?= $task['task']; ?></td>
                                            <td><?= $task['status']; ?></td>
                                            <td><?= date('M-d-Y | h:i A', strtotime($task['dateCreated'])) ?></td>
                                            <td>
                                                <div class="btnFunction">
                                                    <form action="<?=base_url('Access/View');?>" id="view_student_form_<?= $task['id']; ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="id" value="<?= $task['id']; ?>">
                                                    </form>
                                                    <button type="button" onclick="confirmButton('view_student_form_<?= $task['id']; ?>', 'view')" class="btn btn-info btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>

                                                    <form action="<?=base_url('Access/Edit');?>" id="edit_student_form_<?= $task['id']; ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="id" value="<?= $task['id']; ?>">
                                                    </form>
                                                    <button type="button" onclick="confirmButton('edit_student_form_<?= $task['id']; ?>', 'edit')" class="btn btn-success btn-sm">
                                                        <i class="bi bi-pen-fill"></i>
                                                    </button>
                                                
                                                    <form action="<?= base_url('Access/Delete'); ?>" id="delete_student_form_<?= $task['id']; ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="id" value="<?= $task['id']; ?>">
                                                    </form>
                                                    <button type="button" onclick="confirmButton('delete_student_form_<?= $task['id']; ?>', 'delete')" class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>