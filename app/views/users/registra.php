<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row mt-2">
    <div class="col-md-8 mx-auto">
        <div class="card card-body bg-light my-5">
            <?php echo flash('msg'); ?>
            <?php if (!empty($data['error'])): ?>
                <div class="alert alert-danger text-bg-danger ">
                    <?= $data['error']; ?>
                </div>
            <?php endif; ?>
            <h2 class="lead m-0"><?= SITENAME; ?> Database</h2>
            <p class="h5"><a href="<?= URLROOT; ?>/portal/register"><i class="bi bi-plus-circle"></i> New Registration</a></p>
            <hr>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">RL-Code</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1;
                        foreach ($data['users'] as $user): ?>
                            <tr>
                                <th scope="row"><?= $n; ?></th>
                                <td><?= $user->title; ?> <?= $user->surname; ?> <?= $user->othernames; ?></td>
                                <td><?= $user->id2; ?></td>
                                <td><?= $user->phone; ?></td>
                                <td>
                                    <a class="text-success me-2" href="<?= URLROOT; ?>/portal/edit/<?= $user->id2; ?>">View</a>
                                </td>
                            </tr>
                        <?php $n++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/foot.php'; ?>