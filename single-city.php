<?php get_header();
$post_id = $post->ID; //gest ID of current city
$city_name = get_the_title();
?>

<div class="container">
	<div class="row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class('') ?> id="post-<?php the_ID(); ?>">
			<div class="row">
				<div class="col-md-10">
					<ul class="breadcrumb">
						<li><a href="<?php echo get_permalink(icl_object_id(11177,'page')) ?>"><?php _e('Cities','globalrec'); ?></a></li>
						<li><?php echo $city_name; ?></li>
					</ul>
				</div>
				<div class="col-md-1">
					<?php if ( is_user_logged_in() ) { ?><div class="btn btn-xs btn-default pull-right"> <?php edit_post_link(__('Edit This')); ?></div> <?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-10">
					<h1><?php echo $city_name; ?>
					<?php //Country
					$country_id = get_post_meta( $post_id, '_city_countryselect', true );
					$country = get_post($country_id);
					$country_link = get_permalink($country->ID);
					$country_name = $country->post_title;
					echo '<small><a href="'.$country_link.'">'.$country_name.'</a></small>';
					?>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<?php the_post_thumbnail( 'medium',array('class'=> "img-rounded img-responsive",'alt'=> ''.get_the_title().'','title'	=> ''.get_the_title().'') ); ?> <br>
				<?php if ( is_user_logged_in() ) { ?>
					<div class="panel panel-default">
						<div class="panel-heading"><?php _e('Hidden field','globalrec');?></div>
						<div class="panel-body">
							<?php
								echo get_post_meta( $post_id, '_city_hidden', true ); 
								?>
						</div>
					</div>
				<?php } ?>
				<h3 class="groups-dashicon">List of Waste Picker Groups in <?php echo $city_name; ?></h3>
				<?php 
				//List of Waste Picker Groups that belong to the City
				$args = array(
						'post_type' => 'waste-picker-org',
						'meta_key' => '_wpg_cityselect',
						'meta_value' => $post_id,
						'posts_per_page' => -1,
						'order' => 'ASC',
						'orderby' => 'title',
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' => 'wpg-member-occupation',
								'field'    => 'slug',
								'terms'    => 'waste-pickers',
							),
							array(
								'taxonomy' => 'wpg-member-type',
								'field'    => 'slug',
								'terms'    => array('members-are-waste-pickers', 'members-are-waste-picker-organizations'),
								'operator' => 'IN',
							),
						),
					);
				$waste_picker_groups = get_posts( $args );
				$result = count($waste_picker_groups); ?>
				<table class="table table-condensed table-hover ">
					<thead><tr><th>Waste Picker Groups (<?php echo $result; ?>)</th></tr></thead>
					<tbody>
						<?php
						foreach($waste_picker_groups as $waste_picker_group) {
						echo '<tr><td><a href="'.get_permalink($waste_picker_group->ID).'">'.$waste_picker_group->post_title.'</a></td></tr>' ;
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-md-7">
				<?php
					$content = get_the_content(); 
				 	if ($content !='') {?>
						<div class="panel panel-default">
						 <div class="panel-heading">
								<h3><span class="glyphicon glyphicon-user"></span> <span class="glyphicon glyphicon-comment"></span> <?php _e('City Report: Interview with a local Waste Picker','globalrec'); ?></h3>
							</div>
							<div class="panel-body content">
								<?php echo $content;?>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php include("share.php")?>

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

	<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
	</div>
	<?php get_footer(); ?>
	
</div>
