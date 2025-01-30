<main>
    <section class="mainSection">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>View Information <a href="<?=base_url('Access/Crud');?>" class="btn float-end">Return</a>
                    </h4>
                </div>
                <div class="card-body card-operation card-body-color">
                    <div href='<?= base_url('Access/View'); ?>'></div>
                        <?php
                            foreach ($query_run as $task) {
                        ?>
                            <div class="mb-3">
                                <label>Date</label>
                                <p class="form-control"> <?=$task['date'];?> </p>
                            </div>
                            <div class="mb-3">
                                <label>Task</label>
                                <p class="form-control"> <?=$task['task'];?> </p>
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <p class="form-control"> <?=$task['status'];?> </p>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</main>