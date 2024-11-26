<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="row">
	<div class="col-12">
		<div style="height: 200px;">
			<img src="<?= URLROOT; ?>/img/rev5.PNG" class="w-100" height="200" alt="revival image">
		</div>
	</div>
</section>
</header>
<main class="">
	<section id="sermon" class="pb-0">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 offset-md-3 text-center heading">
					<h2 class="m-0">Resources</h2>
				</div>
			</div>
			<div class="row animate-box pb-5 sticky-top" style="top: 5px">
				<div class="col-md-6 offset-md-3">
					<div class="btn-group bg-light w-100 shadow-sm">
						<!-- <button type="button" class="btn btn-default active all filter-sermon-btn" data-filter="all">All</button> -->
						<button type="button" class="btn btn-default filter-sermon-btn" data-filter="videos">Videos</button>

						<!-- <button type="button" class="btn btn-default filter-sermon-btn" data-filter="audios">Audios</button> -->

						<button type="button" class="btn btn-default articles-btn">Articles</button>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach($data['uploads'] as $uploads):?>
				  <div class="col-md-4 text-center animate-box">
				    <div class="sermon-entry">
				      <div class="sermon" style="background-image: url(<?= URLROOT.'/'.$uploads->thumbnail; ?>);">
				        <div class="play">
				          <a class="popup-video" href="<?= $uploads->link ;?>"><i class="icon-play3"></i></a>
				        </div>
				      </div>
				      <h3><?= $uploads->title ;?></h3>
				      <span><?= $uploads->preacher ;?></span>
				    </div>
				  </div>
				<?php endforeach;?>
			</div>
		</div>
	</section>

	<section id="articles" class="light-grey">
		<div class="container">
			<div class="row">
				<?php foreach($data['articles'] as $articles):?>
		        <div class="col-md-4 animate-box">
		          <div class="articles">
		            <?php if(!empty($articles->thumbnail)):?>
		              <a href="#" class="img-holder"><img class="img-fluid" src="<?= URLROOT.'/'.$articles->thumbnail; ?>" alt="Article image placeholder"></a>
		            <?php endif;?>
		            <div class="desc">
		              <h3><a href="#"><?= $articles->title; ?></a></h3>
		              <p style="height:80px;word-break: ;">
		                <?= $articles->content; ?>
		              </p>
		              <a href="#">Read More <i class="icon-arrow-right3"></i></a>
		            </div>
		          </div>
		        </div>
		      <?php endforeach;?>
			</div>
		</div>
	</section>

</main>
<?php require APPROOT . '/views/inc/footer.php'; ?>