<?php require APPROOT . '/views/inc/header.php';
?>
<?php if ($data['params'] == 'add'): ?>
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
        <p class="h2">Article Writing</p>
        <hr>
        <form action="<?php echo URLROOT; ?>/users/articleUpload" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="author">Author</label>
            <input id="author" type="text" name="author" required class="form-control form-control-lg" value="<?php echo $data['author']; ?>">
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" required class="form-control form-control-lg" value="<?php echo $data['title']; ?>">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" placeholder="Write here" cols="50" rows="15" class="form-control"><?php echo $data['content']; ?></textarea>
          </div>

          <div class="form-group">
            <label for="thumbnail">Thumbnail Image <span style="font-size:x-small;">optional</span></label>
            <input id="thumbnail" type="file" accept="image/*" name="thumbnail" class="form-control form-control-lg <?php echo (!empty($data['error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['thumbnail']; ?>">
            <span class="invalid-feedback"><?php echo $data['error']; ?></span>
          </div>

          <div class="form-row">
            <div class="col">
              <input type="submit" class="btn btn-success px-5 me-4" value="Submit">
              <a class="btn btn-secondary px-4" href="<?= URLROOT; ?>/users/articles/added">View</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($data['params'] == 'added'): ?>
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
        <p class="h2">View Addded Articles</p>
        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $n = 1;
              foreach ($data['articles'] as $article): ?>
                <tr style="overflow-y: hidden;height:200px;">
                  <th scope="row"><?= $n; ?></th>
                  <td><?= $article->author; ?></td>
                  <td><?= $article->title; ?></td>
                  <td>
                    <?= $article->content; ?>
                  </td>
                  <td>
                    <a class="text-success me-2" href="<?= URLROOT; ?>/pages/study/<?= $article->id; ?>">View</a>
                    <a class="text-success" href="<?= URLROOT; ?>/users/articles/edit?id=<?= $article->id; ?>">Edit</a>
                    <a class="text-danger" href="<?= URLROOT; ?>/pages/del/<?= $article->id; ?>">Trash</a>
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
        <p class="h2">Edit | Update Article</p>
        <hr>
        <form action="<?php echo URLROOT; ?>/users/articleEdit/<?= $_GET['id']; ?>" method="post">
          <div class="form-group">
            <label for="author">Author</label>
            <input id="author" type="text" name="author" required class="form-control form-control-lg" value="<?php echo $data['article']->author; ?>">
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" required class="form-control form-control-lg" value="<?php echo $data['article']->title; ?>">
          </div>
          <div class="form-group">
            <label for="content">Content <span style="font-size: x-small;">(use new lines for paragraphs)</span></label>
            <textarea id="content" autocomplete="on" name="content" placeholder="Write here" cols="50" rows="15" class="form-control"><?php echo $data['article']->content; ?></textarea>
          </div>

          <!-- <div class="form-group">
          <label for="thumbnail">Thumbnail Image <span style="font-size:x-small;">optional</span></label>
          <input id="thumbnail" type="file" accept="image/*" name="thumbnail" class="form-control form-control-lg <?php echo (!empty($data['error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['thumbnail']; ?>">
          <span class="invalid-feedback"><?php echo $data['error']; ?></span>
        </div> -->

          <div class="form-row">
            <div class="col">
              <input type="submit" class="btn btn-success px-5 me-4" value="Submit">
              <a class="btn btn-secondary px-4" href="<?= URLROOT; ?>/users/articles/added">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php require APPROOT . '/views/inc/foot.php'; ?>
<script src="<?= URLROOT; ?>/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    height: 600,
    plugins: 'charmap emoticon wordcount table pagebreak codesample',
    menubar: 'edit insert format tools',
    toolbar: 'undo redo | superscript subscript bold underline strikethrough | lineheight outdent indent | charmap',
    newline_behavior: 'linebreak',
    statusbar: false,
    promotion: false,
    setup: (editor) => {

      editor.ui.registry.addButton('dash', {
        text: '__________',
        onAction: (_) => editor.insertContent(`__________`)
      });

    },
  });
</script>
</body>

</html>