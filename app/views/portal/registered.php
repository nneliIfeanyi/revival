<?php require APPROOT . '/views/inc/header.php'; ?>
<?php if ($data['param'] == 'success'): ?>
    <div class="row">
        <div class="col-lg-4 col-md-6 mx-auto">

            <div class="card p-4 mt-5">
                <div class="row">
                    <div class="col-12 border-bottom">
                        <h1 class="h2 text-center fw-bold text-success m-0"><?= SITENAME; ?></h1>
                        <p class="lead text-center m-0">ONLINE REGISTRATION</p>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-6 px-4 py-3">
                            <img src="<?= URLROOT; ?>/img/user.png" height="138px" width="100%" alt="Avater image">
                        </div>
                        <div class="col-6 fst-italic fw-bold lead py-4 mt-3">
                            <?= strtoupper($data['title']) ?> <br><?= strtoupper($data['surname']); ?> <br><?= strtoupper($data['othernames']); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="lead text-center py-2 m-0 fw-bold text-success">Your registration was successfull!</p>
                        <p class="lead text-center m-0"><span class="fs-6">RL-Code</span> | <span class="fw-bold fst-italic"><?= $data['id2'] ?></span></p>


                        <p id="para" style="font-size: small;text-align:center;padding-top:6px;">Pls kindly note that you are to present this document at the registration stand for authentication purposes.</p>
                        <div class="d-grid mx-4">
                            <a href="#" id="printBtn" class="btn btn-outline-secondary">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php elseif ($data['param'] == 'rlcode'): ?>
    <div class="mt-5"></div>
    <div class="row">
        <div class="col-lg-6 col-md-9 mx-auto">
            <div class="card card-body bg-light my-5 pb-5">
                <?php echo flash('msg'); ?>
                <h2 class="m-0"><?= SITENAME; ?></h2>
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