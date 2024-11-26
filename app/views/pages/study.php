<?php require APPROOT . '/views/inc/header.php'; ?>
  <!-- <a href="<?php echo URLROOT; ?>" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br> -->
  <div class="row my-5">
  	<div class="col-md-8 offset-md-2 mt-3 animate-box">
	  <div class="card">
	  	<div class="card-body">
	  		<?php if(!empty($data['article']->thumbnail)):?>
              <a href="javascript:void" class="img-holder"><img class="img-fluid" src="<?= URLROOT.'/'.$data['article']->thumbnail; ?>" alt="Article image placeholder"></a>
            <?php endif;?>
	  		<h1><?php echo $data['article']->title; ?></h1>
	  		<div class="bg-secondary text-white p-2 mb-3">
	  		  Written by <?php echo $data['article']->author; ?> on <?php echo $data['article']->createdAt; ?>
	  		</div>
	  		<p><?php echo $data['article']->content; ?></p>
	  		<a class="btn px-4 btn-outline-dark" href="javascript:void" onclick="history.back()"><i class="icon-arrow-left3"></i> Return</a>
	  	</div>
	  </div>
	</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>