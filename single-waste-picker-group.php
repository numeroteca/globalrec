<?php get_header(); 
$post_id = $post->ID;
$website = get_post_meta( $post_id, '_wpg_website', true );
$city_id = get_post_meta( $post_id, '_wpg_cityselect', true );
?>

<div class="container">
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class("col-md-10") ?> id="post-<?php the_ID(); ?>">
			<ul class="breadcrumb">
			  <li><a href="<?php echo get_permalink(icl_object_id(10909,'page')) ?>"><?php _e('Waste Picker Groups','globalrec'); ?></a></li>
			  <li><?php the_title(); ?> </li>
			</ul>
			<div class="row">
				<div class="col-md-3">
					<?php the_post_thumbnail( 'medium', array('class' => 'img-responsive'));?>
						<?php
						echo "<a href='".get_post_meta( $post_id, '_wpg_facebook', true ). "'>Facebook</a> ";
						echo "<a href='http://twitter.com/".get_post_meta( $post_id, '_wpg_twitter', true )."' title='Twitter user @".get_post_meta( $post_id, '_wpg_twitter', true )."'>Twitter</a><br>";
						echo get_post_meta( $post_id, '_wpg_other-social-networks', true ). "<br>"; ?>
						<?php if ( is_user_logged_in() ) { //Only display this information if user is logged in ?>
						<div class="panel panel-default">
						 <div class="panel-heading">
								<h4><span class="glyphicon glyphicon-lock"></span> <span class="glyphicon glyphicon-envelope"></span> <?php _e('Contact information','globalrec'); ?></h4>
							</div>
							<div class="panel-body">
								<dl>
								<?php 
									echo "<dt>Skype</dt><dd>".get_post_meta( $post_id, '_wpg_skype', true ). "</dd>";
									echo "<dt>Email</dt><dd>".get_post_meta( $post_id, '_wpg_email', true ). "</dd>";
									echo "<dt>Physical Adress</dt><dd>".get_post_meta( $post_id, '_wpg_physical_address', true ). "</dd>";
									echo "<dt>Postal Adress</dt><dd>".get_post_meta( $post_id, '_wpg_postal_address', true ). "</dd>";
									// echo get_post_meta( $post_id, '_wpg_country-code-telephone', true ). "</dd>";
									echo "<dt>Phone 1</dt><dd>". get_post_meta( $post_id, '_wpg_phone1', true ). "</dd>";
									echo "<dt>Phone 2</dt><dd>".get_post_meta( $post_id, '_wpg_phone2', true ). "</dd>";
									echo "<dt>Cellphone</dt><dd>".get_post_meta( $post_id, '_wpg_cell_phone', true ). "</dd>";
									echo "<dt>Fax</dt><dd>".get_post_meta( $post_id, '_wpg_fax', true ). "</dd>";
									echo "<dt>Primary contact</dt><dd>".get_post_meta( $post_id, '_wpg_primary_contact_name', true ). "</dd>";
									echo "<dt>position</dt><dd>".get_post_meta( $post_id, '_wpg_primary_contact_position', true ). "</dd>";
									echo "<dt>phone</dt><dd>".get_post_meta( $post_id, '_wpg_primary_contact_phone', true ). "</dd>";
									echo "<dt>email</dt><dd>".get_post_meta( $post_id, '_wpg_primary_contact_email', true ). "</dd>";
									echo "<dt>Secondary contact</dt><dd>".get_post_meta( $post_id, '_wpg_secondary_contact_name', true ). "</dd>";
									echo "<dt>phone </dt><dd>".get_post_meta( $post_id, '_wpg_secondary_contact_phone', true ). "</dd>";
									echo "<dt>email</dt><dd>".get_post_meta( $post_id, '_wpg_secondary_contact_email', true ). "</dd>";
								?>
									</dl>
							</div>
						</div>

						<?php	} ?>
				</div>
				<div class="col-md-9">
					<h1> 
						<a href="<?php echo $website; ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => 'Go to ', 'after' => ' Website' ) ); ?>">
							<?php the_title_attribute(); ?>
						</a>	
					</h1>
					<?php if ( is_user_logged_in() ) { 
						echo '<div class="btn btn-sm btn-default pull-right">';
						edit_post_link(__('Edit This')); 
						echo "</div>";
						} ?>
					<h4>
						<?php	//location
						//City
						$city = get_post($city_id);
						$city2 = get_post_meta( $post->ID, 'city', true );
						$city_link = get_permalink($city->ID);
						$city_name = $city->post_title;
						if ($city != '') { //displays the city from the selection list '_wpg_cityselect', if it exists, if not displays the city from the open field 'city'
							if ($city_name == 'Not specified' ) {
								echo $city2. ", ";
							} else {
								echo '<a href="'.$city_link.'">'.$city2.'</a>, ';
							}
						} else {
							echo get_post_meta( $post->ID, 'city', true ). ", ";
						}
						//Region
						echo get_post_meta( $post_id, '_wpg_region', true ). ", ";
						
						//Country
						$country_id = get_post_meta( $post->ID, '_wpg_countryselect', true );
						$country = get_post($country_id);
						$country2 = get_post_meta( $post->ID, 'country', true );
						$country_link = get_permalink($country->ID);
						$country_name = $country->post_title;
						if ($country != '') { //displays the country from the selection list '_wpg_countryselect', if it has been selected, if not it displays the country from the open field 'city'
							if ($country_name == 'Not specified') {//if the "not specified" option is selected
								echo $country2;
							} else {//if a country has been selected
								echo '<a href="'.$country_link.'">'.$country2.'</a>';
							}
						} else {
						echo get_post_meta( $post->ID, 'country', true );
						} ?>
					</h4>	
						<?php echo ($website != '') ? "<a href='".$website. "'>Website <span class='glyphicon glyphicon-new-window'></span></a>" : ''; ?>
					<div class="row">
						<div class="col-md-7">
							<h4><span class="glyphicon glyphicon-list-alt"></span> <?php _e('Primary information','globalrec'); ?></h4>
							<dl class="dl-horizontal">
								<?php //Primary information
								echo "<dt>Year formed (registered)</dt><dd>".get_post_meta( $post_id, '_wpg_year_formed', true )
								. " (registered in: ".get_post_meta( $post_id, '_wpg_registration_year', true ).")";
								echo "<dt>Formally registered</dt><dd> "; echo get_post_meta( $post_id, '_wpg_formally_registered', true )."</dd>";
								echo "<dt>Language</dt>"; echo list_of_items($post_id,'_wpg_language');
								echo "<dt>Type of members</dt><dd>".get_post_meta( $post_id, '_wpg_members_type', true ). "</dd>";
								echo "<dt>Members' occupation</dt>"; echo list_of_items($post_id,'_wpg_members_occupation');
								echo "<dt>Organization type</dt><dd>". get_post_meta( $post_id, '_wpg_organization_type', true ). "</dd>";
								echo "<dt>Organization scope</dt><dd>". ucfirst(get_post_meta( $post_id, '_wpg_organization_scope', true )). "</dd>";
								echo "<dt>Workplace of members</dt>"; echo list_of_items($post_id,'_wpg_workplace_members');
								echo "<dt>Membership</dt><dd>".ucfirst(get_post_meta( $post_id, '_wpg_membership', true ))."</dd>";
								echo "<dt>Organization Structure</dt><dd>".get_post_meta( $post_id, '_wpg_structure', true )."</dd>";
								echo "<dt>Objectives</dt>"; echo list_of_items($post_id,'_wpg_objectives');
								echo "<dt>Education and training</dt>"; echo list_of_items($post_id,'_wpg_education_training');
								echo "<dt>Partnering organizations</dt>"; echo list_of_items($post_id,'_wpg_partnering_organizations');
								echo "<dt>Affiliations</dt><dd>".ucfirst(get_post_meta( $post_id, '_wpg_affiliations', true )). "</dd>";
								echo "<dt>Funding</dt><dd>".ucfirst(get_post_meta( $post_id, '_wpg_funding', true )). "</dd>";
								echo "<dt>Internal elections</dt><dd>".get_post_meta( $post_id, '_wpg_elections', true ). "</dd>";
								echo "<dt>Number of groups</dt><dd>".get_post_meta( $post_id, '_wpg_number_groups', true ). "</dd>";
								echo "<dt>Number of members</dt><dd>".get_post_meta( $post_id, '_wpg_number_individuals', true ). "</dd>";
								echo "<dt>Women composition</dt><dd>".get_post_meta( $post_id, '_wpg_gender_women_composition', true )."% <small>"
										.get_post_meta( $post_id, '_wpg_gender_women_comment', true ). "</small></dd>"; //used when no % data are available
									
									?> 
							</dl>
						</div>
						<div class="col-md-5">
							<h4><span class="glyphicon glyphicon-heart"></span> <?php _e('Benefits','globalrec'); ?></h4>
							<dl>
								<?php //Benefits 
								echo "<dt>Member benefits</dt>"; echo list_of_items($post_id,'_wpg_member-benefits');
								echo "<dt>Number of credit / saving members?</dt><dd>".get_post_meta( $post_id, '_wpg_credit_members', true ). "</dd>";
								echo "<dt><dt>Safety & Technology</dt><dd>".ucfirst(get_post_meta( $post_id, '_wpg_safety_technology', true )). "</dd>";
								?> 
							</dl>
							<h4><span class="glyphicon glyphicon-wrench"></span> <?php _e('Services','globalrec'); ?></h4>
							<dl>
								<?php	//Services
								echo "<dt>Relationship with the Municipality</dt><dd>".ucfirst(get_post_meta( $post_id, '_wpg_relationship_municipality', true )). "</dd>";
								echo "<dt>Types of materials</dt>"; echo list_of_items($post_id,'_wpg_types_of_materials');
								echo "<dt>Are they selling to middlemen</dt><dd>".ucfirst(get_post_meta( $post_id, '_wpg_middlemen', true )). "</dd>";
								echo "<dt>Activities</dt>"; echo list_of_items($post_id,'_wpg_activities');
								echo "<dt>Sorting Spaces</dt>"; echo list_of_items($post_id,'_wpg_sorting_spaces');
								echo "<dt>Treatmet of orgnanic materials</dt>"; echo list_of_items($post_id,'_wpg_treatment_organic_materials');
								echo "<dt>Challenges to access waste</dt>"; echo list_of_items($post_id,'_wpg_challenges_access_waste');
								?> 
							</dl>
						</div>
					</div>				
					<hr>
					<h4><span class="glyphicon glyphicon-file"></span> <?php _e('Complementary Information','globalrec'); ?></h4>
						<dl>
							<?php	//Complementary information
							echo "<dt>Other publications</dt><dd>".get_post_meta( $post_id, '_wpg_publications', true ). "</dd>";
							echo "<dt>Information Source</dt><dd>".get_post_meta( $post_id, '_wpg_information_source', true ). "</dd>";
							//echo "<dt>Date of data entry</dt><dd>". get_post_meta( $post_id, '_wpg_date_data-entry', true ). "</dd>";
							//echo "<dt>Date of data update</dt><dd>". get_post_meta( $post_id, '_wpg_date_data_updated', true ). "</dd>";
							echo "<dt>Active</dt><dd>".get_post_meta( $post_id, '_wpg_status', true );
							?>
						</dl>
					<h4>Comments / Narrative</h4>
					<?php the_content(__('(more...)')); ?>
				</div>
			</div>		
		</div>
		<!--right column -->
		<div class="col-md-2"> 
			<h4><?php _e('News related to','globalrec'); ?> <?php the_title_attribute(); ?></h4>
			<?php if (get_post_meta($post_id, 'gm_tag', true)) { echo '<h4>Related posts</h4>';} ?>
			<?php 
			//includes the loop with the related post according to the custom field gm-tag
			echo  get_template_part( 'related', 'postbytag'); //includes the file related-postbytag.php ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12"> 
			<?php include("share.php")?>
		</div>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
 		</div>
	</div>	
		
	
	<?php get_footer(); ?>
</div><!-- #container -->
