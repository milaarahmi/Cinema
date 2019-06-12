<div style="padding: 10px; font-size: 30px;">
	LATEST COLLECTION OF VIDEO 
</div>
<?php 
	foreach ($movie as $a) {

?>
	<div class="col-md-3">
		<img src="<?php echo $a['cover']; ?>" style="height: 350px; width: 
		100%; object-position: center top;">
		<div class="col-md-12" style="height: 100px; border: 1px solid #d9d9d9;">
			<p class="col-md-12" style="text-align: center;color: #b3b3b3; font-size: 11px;padding-bottom: 0px;padding-top: 10px">
				<?php
					echo substr_replace($a['synopsis'], '...', 100);
				?>
			</p>
			<div class="col-md-12">
				<i class="fa fa-thumbs-up" aria-hidden="true" style="color: #b3b3b3; font-size: 12px; padding-left: 60px; padding-top: 0px"></i>
				<i class="fa fa-eye" aria-hidden="true" style="color: #b3b3b3; font-size: 12px; padding-left: 10px; padding-top: 0px"></i>
				<i class="fa fa-link" aria-hidden="true" style="color: #b3b3b3; font-size: 12px; padding-left: 10px; padding-top: 0px"></i>

			</div>
		</div>
		<div class="col-md-12" style="height: 40px; background-color: black;padding: 10px; padding-left: 20px;padding-bottom: 10px; padding-left: 20px;text-align: center;margin-bottom: 50px">
			<a href="<?php echo base_url();?>Welcome/sinopsis/<?php echo $a['movie_id'];?>" class="watch">WATCH NOW</a>
		</div>
	</div>
	<?php 
		};
	?>