<?php
	/*
	 Template Name: Page with Content Frame
	 *
	*/

	get_header();

?>
test test 
<div class="purple-border" id="avb-menubar">
	<div class="container">

	    <a class="homebutton" href= "<?php echo get_site_url(); ?>" >
	      <div style="font-size:42px;line-height:60px; display:inline-block; color: rgb(31, 119, 180)">Open Maine</div>
	   </a>


	</div>
</div>
<div class="container" id="avb-body">
	<div class="row-fluid" id="avb-wrap" style="width:auto;">
		<div style="position:relative; padding-left:5px;">
			<?php
				if ( have_posts() ) {
				    while ( have_posts() ) {
				        the_post();
				 		the_content();
				    }
				}
			?>
		</div>
	</div>
</div>

<?php
	get_footer();
?>
