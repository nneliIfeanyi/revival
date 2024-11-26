<?php require APPROOT . '/views/inc/header.php'; ?>
<?php if ($data['params'] == 'publish'): ?>
    <div class="row mt-2">
        <div class="col-md-8 mx-auto">
            <div class="card card-body bg-light my-5">
                <?php echo flash('msg'); ?>
                <?php if (!empty($data['error'])): ?>
                    <div class="alert alert-danger text-bg-danger ">
                        <?= $data['error']; ?>
                    </div>
                <?php endif; ?>
                <h2 class="lead m-0">Site Customization</h2>
                <p class="h2">Publish Coming Meetings</p>
                <hr>
                <form action="<?php echo URLROOT; ?>/pages/meetings" method="post">

                    <div class="form-group">
                        <label for="name">Meeting Name</label>
                        <input id="name" name="name" class="form-control form-control-lg" required value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="theme">Theme</label>
                        <input id="theme" type="text" name="theme" required class="form-control form-control-lg" value="<?php echo $data['theme']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <input id="details" type="text" name="details" required class="form-control form-control-lg" value="<?php echo $data['details']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input id="startDate" type="date" name="startDate" required class="form-control form-control-lg" value="<?php echo $data['startDate']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="endDate">End Date</label>
                        <input id="endDate" type="date" name="endDate" required class="form-control form-control-lg" value="<?php echo $data['endDate']; ?>">
                    </div>


                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn btn-success px-5 me-4" value="Publish">
                            <a class="btn btn-secondary px-4" href="<?= URLROOT; ?>/pages/events/view">View</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($data['params'] == 'view'): ?>
    <div class="row mt-2">
        <div class="col-md-8 mx-auto">
            <div class="card card-body bg-light my-5">
                <?php echo flash('msg'); ?>
                <?php if (!empty($data['error'])): ?>
                    <div class="alert alert-danger text-bg-danger ">
                        <?= $data['error']; ?>
                    </div>
                <?php endif; ?>
                <h2 class="lead m-0">Site Customization</h2>
                <p class="h2">Programes | Meetings</p>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Theme</th>
                                <th scope="col">S. Date</th>
                                <th scope="col">E. Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n = 1;
                            foreach ($data['events'] as $meeting): ?>
                                <tr>
                                    <th scope="row"><?= $n; ?></th>
                                    <td><?= $meeting->name; ?></td>
                                    <td><?= $meeting->theme; ?></td>
                                    <td><?= $meeting->startDate; ?></td>
                                    <td><?= $meeting->endDate; ?></td>
                                    <td>

                                    </td>
                                    <td><a class="text-success" href="<?= URLROOT; ?>/pages/events/edit?id=<?= $meeting->id; ?>">Edit</a></td>
                                </tr>
                            <?php $n++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($data['params'] == 'edit'): ?>
    <div class="row mt-2">
        <div class="col-md-8 mx-auto">
            <div class="card card-body bg-light my-5">
                <?php echo flash('msg'); ?>
                <?php if (!empty($data['error'])): ?>
                    <div class="alert alert-danger text-bg-danger ">
                        <?= $data['error']; ?>
                    </div>
                <?php endif; ?>
                <h2 class="lead m-0">Site Customization</h2>
                <p class="h2">Edit Programme Details</p>
                <hr>
                <form action="<?php echo URLROOT; ?>/pages/editMeeting/<?= $_GET['id']; ?>" method="post">

                    <div class="form-group">
                        <label for="name">Meeting Name</label>
                        <input id="name" name="name" class="form-control form-control-lg" required value="<?php echo $data['event']->name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="theme">Theme</label>
                        <input id="theme" type="text" name="theme" required class="form-control form-control-lg" value="<?php echo $data['event']->theme; ?>">
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <input id="details" type="text" name="details" required class="form-control form-control-lg" value="<?php echo $data['event']->details; ?>">
                    </div>
                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input id="startDate" type="date" name="startDate" required class="form-control form-control-lg" value="<?php echo $data['event']->startDate; ?>">
                    </div>
                    <div class="form-group">
                        <label for="endDate">End Date</label>
                        <input id="endDate" type="date" name="endDate" required class="form-control form-control-lg" value="<?php echo $data['event']->endDate; ?>">
                    </div>


                    <div class="form-row">
                        <div class="col">
                            <input type="submit" class="btn btn-success px-5 me-4" value="Publish">
                            <a class="btn btn-secondary px-4" href="<?= URLROOT; ?>/pages/events/view">View</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php require APPROOT . '/views/inc/foot.php'; ?>