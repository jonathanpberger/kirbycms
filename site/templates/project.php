<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">
	
	<section class="content">

	  <article>
	    <?php echo kirbytext($page->text()) ?>
	  </article>

	</section>

	<div id="carousel" class="carousel">

	  <div class="carousel-inner">
	    <?php $n=0; foreach($page->images() as $image): $n++; ?>
	    <div class="item<?php if($n==1) echo ' active' ?>">
	      <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>"   />
	      <div class="carousel-caption">
	        <?php echo kirbytext($image->caption()) ?>
	      </div>
	    </div>
	    <?php endforeach ?>
	  </div>

	  <a class="carousel-control left" href="#carousel" data-slide="prev">&larr;</a>
	  <a class="carousel-control right" href="#carousel" data-slide="next">&rarr;</a>

	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		$('#carousel').carousel()
	});
	</script>

</section>

<?php snippet('footer') ?>

