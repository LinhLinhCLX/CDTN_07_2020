<!-- lay slide -->
<script src="<?php echo public_url();?>/site/royalslider/jquery.royalslider.min.js"></script>
<link type="text/css" href="<?php echo public_url();?>/site/royalslider/royalslider.css" rel="stylesheet">
<link type="text/css" href="<?php echo public_url();?>/site/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		$("#HomeSlide").royalSlider({
			autoScaleSliderWidth:580,//chiều rộng slide
			autoScaleSliderHeight:205,//chiều cao slide
			autoPlay:{enabled:true, stopAtAction:false, pauseOnHover:true, delay:2000},
			slideshowDelay:2000,
			slideshowPauseOnHover:true,
		});
	});
})(jQuery);
</script>


<style>
#HomeSlide.royalSlider {
	width: 580px;	
	height: 205px;
    overflow:hidden;
}
</style>
<div id='slide'>
	<div id="img-slide" class="sliderContainer" style='width:580px;'>
		<div id="HomeSlide" class="royalSlider rsMinW" style=" border-radius: 15px;">
			<?php foreach ($slide_list as $row):?>
               <a href="<?php echo $row->link?>" target='_blank'>
                    <img src="<?php echo base_url('upload/slide/'.$row->image_link)?>" alt="<?php echo $row->name?>"/> 
               </a>
        	<?php endforeach;?>	
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="clear pb20"></div>  