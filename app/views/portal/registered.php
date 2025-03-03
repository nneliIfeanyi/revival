<?php require APPROOT . '/views/inc/header.php'; ?>
<?php if ($data['param'] == 'success') : ?>
    <div class="row">
        <div class="col-lg-4 col-md-6 mx-auto">

            <div class="card p-4 mt-5">
                <div class="row">
                    <div class="text-center col-12 border-bottom">
                        <!-- <h1 class="h2 text-center fw-bold text-success m-0"><?= SITENAME; ?></h1> -->
                        <img src="<?php echo URLROOT; ?>/images/rev2.jpg" alt="logo img" class="mb-2" style="width:140px; height: 140px;">
                        <h5 class="fst-italic fw-bold">ONLINE REGISTRATION</h5>
                    </div>
                    <div class="text-center col-12 border-bottom">
                        <div class=" py-3">
                            <img src="<?= URLROOT; ?>/images/outreach.jpeg" style="height: 200px;width:350px" alt="banner image">
                        </div>
                        <div class="form-group mb-2">
                            <label>Full Name</label><br>
                            <span class="fw-bold"><?= strtoupper($data['title']) ?> <?= strtoupper($data['surname']); ?> <?= strtoupper($data['othernames']); ?></span>
                        </div>
                        <div class="form-group mb-2">
                            <label>Phone Number</label><br>
                            <span class="fw-bold"><?= $data['phone'] ?></span>
                        </div>
                        <?php if (!empty($data['email'])) : ?>
                            <div class="form-group mb-2">
                                <label>Email</label><br>
                                <span class="fw-bold"><?= strtoupper($data['email']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="text-center col-12">
                        <p class="lead py-2 m-0 fw-bold text-success text-uppercase">Your registration was successfull!</p>
                        <p class="lead m-0"><span class="fs-6">RL-Code</span> | <span class="fw-bold fst-italic"><?= $data['id2'] ?></span></p>


                        <p id="para" style="font-size: small;padding-top:6px;">Pls kindly note that you are to present this document at the registration stand for authentication purposes.</p>
                        <div class="d-grid mx-4">
                            <a href="#" id="printBtn" class="btn btn-outline-secondary">Download</a>
                            <a id="reglink" class="btn btn-secondary mt-2 text-light" href="<?= URLROOT; ?>/portal/register"><i class="bi bi-plus-circle"></i> New Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($data['param'] == 'rlcode') : ?>
    <div class="mt-5"></div>
    <div class="row">
        <div class="col-lg-6 col-md-9 mx-auto">
            <div class="card card-body bg-light my-5 pb-5">
                <?php echo flash('msg'); ?>
                <p class="text-muted lead">
                    If you have registered online previously for any of our programmes, kindly enter your <span class="text-success">RL-Code</span> to print or download registration tag.
                </p>
                <hr />
                <form action="<?php echo URLROOT; ?>/process/rlcode" method="post">
                    <div class="form-group">
                        <label>RL-Code:</label>
                        <input type="text" name="rl_code" class="form-control form-control-lg <?php echo (!empty($data['err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['rl_code'] ?>">
                        <span class="invalid-feedback"><?php echo $data['err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" class="btn btn-success px-4" value="Continue">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>