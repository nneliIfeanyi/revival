<?php require APPROOT . '/views/inc/header.php'; ?>
<?php if($data['params'] == 'edit'):?>
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
      <p class="h2">Update Bible Verse</p><hr>
      <form action="<?php echo URLROOT; ?>/users/verseUpload/<?= $_GET['id'];?>" method="post">
       
        <div class="form-group">
          <label for="content">Bible Verse</label>
          <textarea id="content" name="content" cols="33" rows="4" class="form-control"><?php echo $data['content']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="verse">Quoting From</label>
          <input id="verse" type="text" name="verse" required class="form-control form-control-lg" value="<?php echo $data['verse']; ?>">
        </div>


        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-success px-5 me-4" value="Save">
            <a class="btn btn-secondary px-4" href="<?= URLROOT;?>/users/verses/view">Back</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endif;?>
<?php if($data['params'] == 'view'):?>
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