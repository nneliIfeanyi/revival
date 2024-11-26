<?php require APPROOT . '/views/inc/header.php'; ?>
<?php if($data['params'] == 'add'):?>
<div class="row mt-2">
  <div class="col-md-8 mx-auto">
    <div class="card card-body bg-light my-5">
      <?php echo flash('msg'); ?>
      <?php if(!empty($data['error'])):?>
        <div class="alert alert-danger text-bg-danger ">
        <?= $data['error'];?>
      </div>
    <?php endif;?>
      <h2 class="lead m-0">Site Customization</h2>
      <p class="h2">Video Uploads</p><hr>
      <form action="<?php echo URLROOT; ?>/users/videoUpload" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="link">Youtube Link</label>
          <input id="link" type="text" name="link" required class="form-control form-control-lg" value="<?php echo $data['link']; ?>">
        </div>
        <div class="form-group">
          <label for="title">Sermon Title</label>
          <input id="title" type="text" name="title" required class="form-control form-control-lg" value="<?php echo $data['title']; ?>">
        </div>
        <div class="form-group">
          <label for="preacher">Preached By</label>
          <input id="preacher" type="text" name="preacher" required class="form-control form-control-lg" value="<?php echo $data['preacher']; ?>">
        </div>
        <div class="form-group">
          <label for="details">Preached At</label>
          <textarea id="details" name="details" placeholder="Enter meeting name and year" cols="20" rows="3" class="form-control"><?php echo $data['details']; ?></textarea>
        </div>

        <div class="form-group">
          <label for="thumbnail">Thumbnail Image</label>
          <input id="thumbnail" type="file" accept="image/*" name="thumbnail"  required class="form-control form-control-lg <?php echo (!empty($data['error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['thumbnail']; ?>">
          <span class="invalid-feedback"><?php echo $data['error']; ?></span>
        </div>

        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-success btn-block" value="Upload">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endif;?>
<?php if($data['params'] == 'added'):?>
  <div class="row mt-2">
  <div class="col-md-8 mx-auto">
    <div class="card card-body bg-light my-5">
      <?php echo flash('msg'); ?>
      <?php if(!empty($data['error'])):?>
        <div class="alert alert-danger text-bg-danger ">
        <?= $data['error'];?>
      </div>
    <?php endif;?>
      <h2 class="lead m-0">Site Customization</h2>
      <p class="h2">For Bible Verses</p><hr>
  <div class="table-responsive">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bible verse</th>
      <th scope="col">Quoted from</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php $n = 1; foreach($data['verses'] as $verse):?>
    <tr>
      <th scope="row"><?= $n;?></th>
      <td><?= $verse->content; ?></td>
      <td><?= $verse->verse; ?></td>
      <td><a class="text-success" href="<?= URLROOT;?>/users/verses/edit?id=<?= $verse->id;?>">Edit</a></td>
    </tr>
  <?php $n++; endforeach;?>
  </tbody>
</table>
</div>
</div>
</div>
</div>

<?php endif;?>

<?php require APPROOT . '/views/inc/foot.php'; ?>