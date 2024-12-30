<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-lg-6 col-md-9 mx-auto">
        <div class="card card-body bg-light my-5 py-5">
            <!-- Ajax form submit response -->
            <!-- <div id="ajaxRes"></div> -->
            <h2 class="fw-semibold h3">Update Info | <span class="text-muted"><?= $data['user']->title; ?> <?= $data['user']->surname; ?> <?= $data['user']->othernames; ?></span></h2>
            <hr />
            <form id="edit">
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-4">
                            <label>Title &nbsp;<span style="font-size: xx-small;">mr | mrs | etc</span></label>
                            <input type="text" value="<?= $data['user']->title; ?>" name="title" class="form-control form-control-lg">
                        </div>
                        <div class="col-8">
                            <label>Surname</label>
                            <input type="text" name="surname" value="<?= $data['user']->surname; ?>" required class="form-control form-control-lg">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label>Others Names</label>
                    <input type="text" value="<?= $data['user']->othernames; ?>" name="othernames" required class="form-control form-control-lg">
                </div>
                <div class="form-group mb-4">
                    <label>Gender</label>
                    <div class=" border  p-2">
                        <input type="radio" <?php echo ($data['user']->gender == 'Male') ? 'checked' : ''; ?> name="gender" value="Male" class="form-check-input fs-5" id="Male">
                        <label for="Male" class="form-check-label me-2">Male</label>

                        <input type="radio" <?php echo ($data['user']->gender == 'Female') ? 'checked' : ''; ?> name="gender" value="Female" class="form-check-input fs-5" id="Female">
                        <label for="Female" class="form-check-label me-2">Female</label>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label>Email Address</label>
                    <input type="email" value="<?= $data['user']->email; ?>" name="email" data-parsley-type="email" data-parsley-trigger="keyup" class="form-control form-control-lg">
                </div>
                <div class="form-group mb-3">
                    <label>Phone Number</label>
                    <input type="number" value="<?= $data['user']->phone; ?>" name="phone" required required data-parsley-type='number' maxlength="11" data-parsley-length="[11, 11]" data-parsley-trigger="keyup" pattern="\d{11}" class=" form-control form-control-lg">
                </div>
                <div class="form-group mb-4">
                    <label>Age Bracket</label>
                    <select class="form-control form-control-lg" name="age" required>
                        <option value="<?= $data['user']->age; ?>"><?= $data['user']->age; ?></option>
                        <option value="13-18">13 - 18 years</option>
                        <option value="19-25">19 - 25 years</option>
                        <option value="26-35">26 - 35 years</option>
                        <option value="36-45">36 - 45 years</option>
                        <option value="46-69">46 - 59 years</option>
                        <option value="60upwards">60 and Above</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label>Marital Status</label>
                    <select class="form-control form-control-lg" name="m_status" required>
                        <option value="<?= $data['user']->m_status; ?>"><?= $data['user']->m_status; ?></option>
                        <option value="Single">Single</option>
                        <option value="Engaged">Engaged</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widow">Widow(er)</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Residential Address</label>
                    <input type="text" name="residence" value="<?= $data['user']->residence; ?>" required class="form-control form-control-lg">
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>L.G.A of Residence</label>
                        <input type="text" name="lga" value="<?= $data['user']->lga; ?>" required class="form-control form-control-lg">
                    </div>
                    <div class="col-6">
                        <label>State of Residence</label>
                        <input type="text" name="r_state" value="<?= $data['user']->r_state; ?>" required class="form-control form-control-lg">
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label>Occupation</label>
                    <input type="text" value="<?= $data['user']->work; ?>" name="work" required class="form-control form-control-lg">
                </div>
                <div class="form-group mb-2">
                    <label>Trained As&nbsp;&nbsp;<span style="font-size: x-small;">(optional)</span></label>
                    <input type="text" value="<?= $data['user']->trainedAs; ?>" name="trainedAs" class="form-control form-control-lg">
                </div>
                <div class="form-group mb-2">
                    <label>Church Name And Address</label>
                    <input type="text" value="<?= $data['user']->l_assembly; ?>" name="l_assembly" required class="form-control form-control-lg">
                </div>
                <div id="ajaxRes"></div>
                <div class="d-flex justify-content-around mt-4">
                    <input type="submit" id="submit" class="btn btn-success" value="Save changes">
                    <a href="<?php echo URLROOT; ?>/portal/delete/<?= $data['user']->id2; ?>" class="btn btn-danger">Delete</a>
                    <a href="<?php echo URLROOT; ?>/users/registration" class="btn btn-outline-dark"><i class="bi bi-chevron-left"></i> Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
<script>
    $('#edit').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?= URLROOT; ?>/process/edit/<?= $data['user']->id2; ?>",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('#submit').attr('disabled', 'disabled');
                $('#submit').val('Processing, Pls Wait ....');

            },
            success: function(data) {
                $('#submit').attr('disabled', false);
                $('#submit').val('Save Changes');
                $('#ajaxRes').html(data);
            }
        });

    });
</script>