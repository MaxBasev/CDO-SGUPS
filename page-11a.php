<?php
    /*
    Template Name: 11A Page
    */

?>

<?php
    get_header();
?>

	<nav>
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="https://cdosgups.ru/">Главная</a></li>
		<li class="breadcrumb-item active" aria-current="page">11 А</li>
	  </ol>
	</nav>

<div class="container-fluid contHeader">	

	<div class="row flex-nowrap justify-content-between align-items-center classHeaderDouble">	  
		<div class="col-12 classHeaderText">11 А</div>					
	</div>
	
	
</div>

<div class="container">

<?php	
	$blogusers = get_users('blog_id=1&role=11a');
	foreach ($blogusers as $user) {
		$hideprofile = get_the_author_meta('profile_hidden', $user->ID);
		if ($hideprofile == 'Yes') { 
?>
			<div class="card card-student" >
			  <div class="row">
				<div class="col-md-6 col-lg-2 align-self-center">
					<div><?php echo get_avatar( $user->ID, 96, '', '', array('class'=>'studentAva')); ?></div>
				</div>
				<div class="col-md-6 col-lg-6 align-self-center">
				  <div class="card-body">
						<h5 class="card-title ">  
                    		<?php echo get_the_author_meta('display_name', $user->ID);?>  
						</h5>
				  </div>
				</div>
				<div class="col-md-12 col-lg-4 align-self-center">
					<a href="<?php echo get_author_posts_url($user->ID);?>" class="btn btnForStudent btn-primary text-center">Просмотреть профиль</a>	
				</div>
			  </div>
			</div>
<?php
		}
	}
?>

	
	

	<hr>
	
	
	
</div>






<?php 
    get_footer();
?>