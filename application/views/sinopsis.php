<div class="col-md-4">
	<img src="<?php echo $movie['cover']; ?>" class="cover">
</div>
<div class="col-md-5">
	<p class="movie">
		MOVIE REVIEW
	</p>
	<?php //var_dump($artist);?>
	<p class="big"><?php echo $movie['synopsis'];?></p>
	<p class="director">Director :  <?php 
			$p = 0;
			$q = count($director);
			foreach ($director as $r) {
				echo  "<a href='".base_url()."Welcome/director/".$r['director_id']."'>".$r['director_name']."</a>";
				if ($p < $q-1) {
					echo ',';
				}
				$q++;
			}
		?> </p>
	<p class="director">Writers : <?php $x = 0;
			$d = count($writter);
			foreach ($writter as $c) {
				echo  "<a href='".base_url()."Welcome/writter/".$c['writter_id']."'>".$c['writter_name']."</a>";
				if ($x < $d-1) {
					echo ',';
				}
				$x++;
			}?> </p>
	<p class="director">Stars : <?php 
			$x = 0;
			$d = count($artist);
			foreach ($artist as $c) {
				echo  "<a href='".base_url()."Welcome/artist/".$c['artist_id']."'>".$c['artist_name']."</a>";
				if ($x < $d-1) {
					echo ',';
				}
				$x++;
			}
		?> </p>
	<p class="director">Genre : <?php 
			$y = 0;
			$m = count($genre);
			foreach ($genre as $n) {
				echo $n['genre_name'];
				if ($y < $m-1) {
					echo ',';
				}
				$y++;
			}
		?> </p>
	<p class="rating">RATING MOVIE :
		<?php
			for ($i=0; $i < $movie['rating_movie'] ; $i++) { 
				echo ' <i class="fa fa-star" aria-hidden="true" style="margin-right: 10px"></i>';
			}
			for ($i=$movie['rating_movie']; $i <=4 ; $i++) { 
				echo ' <i class="far fa-star" aria-hidden="true" style="margin-right: 10px"></i>';
			}
		?>
	</p>
	<p class="avg">AVG READERS RATING :
		
		<?php
			$star1 = floor($movie['rating_avg']);
			$star2 = $movie['rating_avg'] - $star1;
			$star3 = $star1 + $star2;

			for ($i=0; $i < $star1; $i++) { 
				echo ' <i class="fa fa-star star" aria-hidden="true" ></i>';
			}
			if ($star2 >= 0.5) {
				echo ' <i class="fas fa-star-half" style="margin-right:-16.6px;"></i><i class="far fa-star-half" style="transform:scaleX(-1);margin-right:10px;"></i>';
				for ($o=$star3; $o <= 4 ; $o++) { 
					echo ' <i class="fa fa-star star" aria-hidden="true" style="margin-right: 10px"></i>';
				}
			}
			else if($star3 < 5) {
				for ($o=$star1; $o <= 4 ; $o++) { 
					echo ' <i class="fa fa-star star" aria-hidden="true" style="margin-right: 10px"></i>';
				}
			}

			// for ($i=$movie['rating_avg']; $i <=4 ; $i++) { 
			// echo ' <i class="far fa-star" aria-hidden="true" style="margin-right: 10px"></i>';
			//  }

		?>
	</p>
	<div class="col-md-5 review" >
		REVIEW THIS MOVIE
	</div>
	<div class="col-md-5 trailer" >
		WATCH THIS TRAILER
	</div>
</div>
<div class="col-md-3">
	<div class="side"></div>
	<div class="feature"> Feature Today In Movie Review 
		<div>
		<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/c1.jpg" class="pic"></div>
		<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/c2.jpg" class="pic"></div>
		<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/c3.jpg" class="pic"></div>
		<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/c4.jpg" class="pic"></div>
		<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/c5.jpg" class="pic"></div>
		<div class="col-md-4"> <img src="<?php echo base_url(); ?>assets/img/c6.jpg" class="pic"></div>
		</div>
	</div>
	<div class="buttom"></div>
	<div  class="you">You Migh Also Like
		<div class="col-md-4 offset-8">
			<img src="<?php echo base_url(); ?>assets/img/c7.jpg" class="picbuttom">
		</div>
		<div class="col-md-4 offset-8">
			<img src="<?php echo base_url(); ?>assets/img/c8.jpg" class="picbuttom">
		</div>
		<div class="col-md-4 offset-8">
			<img src="<?php echo base_url(); ?>assets/img/cm1.jpg" class="picbuttom">
		</div>
	</div>
</div>