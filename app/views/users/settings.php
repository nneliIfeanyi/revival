<?php require APPROOT . '/views/inc/header.php'; ?>
<?php if ($data['params'] == 'core'): ?>
  <div class="row mt-2">
    <div class="col-md-8 mx-auto">
      <div class="card card-body bg-light my-5">
        <?php echo flash('msg'); ?>
        <h2>Site Customization</h2>
        <p>Please use this form to reset site core data</p>
        <form action="<?php echo URLROOT; ?>/users/coreUpdate/1" method="post">
          <div class="form-group">
            <label for="h1">Heading<sup style="font-size: small;">1</sup></label>
            <input id="h1" type="text" name="h1" required class="form-control form-control-lg" value="<?php echo $data['h1']; ?>">
          </div>
          <div class="form-group">
            <label for="h1b">Heading<sup style="font-size: small;">2</sup></label>
            <input id="h1b" type="text" name="h1b" required class="form-control form-control-lg" value="<?php echo $data['h1b']; ?>">
          </div>
          <div class="form-group">
            <label for="para">Paragraph</label>
            <textarea type="text" id="para" name="para" cols="20" rows="2" required class="form-control"><?php echo $data['para']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="WWA">Whom We Are <span style="font-size: x-small;">(use new lines for paragraphs)</span></label>
            <textarea id="WWA" name="WWA" required cols="50" rows="15" class="form-control"><?php echo $data['WWA']; ?></textarea>
          </div>

          <div class="form-group">
            <label for="WWB">What We Believe <span style="font-size: x-small;">(use new lines for paragraphs)</span></label>
            <textarea id="WWB" name="WWB" required cols="50" rows="15" class="form-control form-control-lg"><?php echo $data['WWB']; ?></textarea>
          </div>
          <div class="d-flex">
            <div class="col">
              <input type="submit" class="btn btn-success px-5 me-4" value="Save Changes">
              <a class="btn btn-secondary px-4" href="<?= URLROOT; ?>/users/settings/more">More</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($data['params'] == 'more'): ?>
  <div class="row mt-2">
    <div class="col-md-8 mx-auto">
      <div class="card card-body bg-light my-5">
        <?php echo flash('msg'); ?>
        <h2>Site Customization</h2>
        <p>Please use this form to reset site core data</p>
        <form action="<?php echo URLROOT; ?>/users/more/1" method="post">
          <div class="form-group">
            <label for="address">Address</label>
            <input id="address" name="address" required class="form-control form-control-lg" value="<?php echo $data['address']; ?>">
          </div>
          <div class="form-group">
            <label for="phone1">Phone</label>
            <input id="phone1" type="number" name="phone1" required class="form-control form-control-lg" value="<?php echo $data['phone1']; ?>">
          </div>
          <div class="form-group">
            <label for="phone2">Whatsapp</label>
            <input id="phone2" type="number" name="phone2" required class="form-control form-control-lg" value="<?php echo $data['phone2']; ?>">
          </div>
          <div class="form-group">
            <label for="WAG">Whatsapp group invite link</label>
            <input id="WAG" type="text" name="WAG" class="form-control form-control-lg" value="<?php echo $data['core']->WAG; ?>">
          </div>
          <div class="form-group">
            <label for="email">Official email</label>
            <input id="email" type="email" name="email" class="form-control form-control-lg" value="<?php echo $data['core']->email; ?>">
          </div>
          <div class="form-group">
            <label for="website">Website Address</label>
            <input id="website" name="website" class="form-control form-control-lg" value="<?php echo $data['core']->website; ?>">
          </div>
          <div class="d-flex">
            <div class="col">
              <input type="submit" class="btn btn-success px-5 me-4" value="Save Changes">
              <a class="btn btn-secondary px-4" href="<?= URLROOT; ?>/users/settings/core">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php require APPROOT . '/views/inc/foot.php'; ?>