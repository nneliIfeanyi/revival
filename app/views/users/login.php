<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row mt-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light my-5">
      <?php flash('register_success'); ?>
      <h2>Login</h2>
      <p>Please fill in your credentials to login.</p>
      <form action="<?php echo URLROOT; ?>/users/auth" method="post">
        <div class="form-group">
          <label>Username:</label>
          <input type="text" name="username" required class="form-control form-control-lg <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['username']; ?>">
          <span class="invalid-feedback"><?php echo $data['username_err']; ?></span>
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" name="password" required class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-success btn-block" value="Login">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>