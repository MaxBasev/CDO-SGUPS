<?php
    /*
    Template Name: User Page
    */
?>

<?php
    get_header();
?>

<?php

$field = get_field_object('user_class');
$value = $field['value'];
$label = $field['choices'][ $value ];
$personal_rec = get_field('personal_recomendation');
$hideprofilez = get_field('profile_hidden');

?>

<!-- BreadCrumb -->

<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="https://cdosgups.ru/">Главная</a></li>
		<li class="breadcrumb-item"><a href="https://cdosgups.ru/<?php the_field('user_class'); ?>"><?php echo $label; ?></a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php the_field('first_name');?>  <?php the_field('last_name'); ?></li>
	</ol>
</nav>


<div class="container-fluid containerMiniHeader ">
	<div class="row">    
		<div class="col-md-3 col-lg-4">
        	<h2 class="portfolioHeaderText">Портфолио ученика</h2>
        </div>
        
		<div class="col-md-9 col-lg-8">
        	<ul class="nav justify-content-end ">
            	<li class="nav-item ">
                	<a class="nav-link active" data-toggle="tab" href="#personalInfo">Главная страница</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" data-toggle="tab" href="#aboutMyself">О себе</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" data-toggle="tab" href="#Study">Учеба</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" data-toggle="tab" href="#Achivments">Достижения</a>
                </li>                    
			</ul>
		</div>
		
	</div>
</div>

<!-- If profile visible -->

<?php if ($hideprofilez == 'Yes') {?>

<div class="container-fluid fon_Rectangle">		
	<div class="container ">			
		<div class="tab-content">

			<div class="tab-pane fade show active" id="personalInfo">
				<div class="row ">			
					<div class="col-md-6 col-lg-4">
						<?php echo get_avatar( get_the_author_meta('user_email'), 362, '', '', array('class'=>'studentAva')); ?>
						<div class="studentSocialCard">
							<hr>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/facebookfacebook.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('facebook');?>">Мой Facebook</a>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/mailemail.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="mailto: <?php echo get_the_author_meta('user_email');?>">Мой e-mail</a>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/twtwitter.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('twitter');?>">Мой Twitter</a>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/vkvkontakte.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('vkontakte');?>">Мой ВКонтакте</a>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/instagraminstagram.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('instagram');?>">Мой Instagram</a>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/telegramholy_telegram.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('telegram');?>">Мой Telegram</a>
						</div>
						<div class="studentSocialCard">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/whatsappwhatsapp.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('whatsapp');?>">Мой WhatsApp</a>
						</div>
						<hr>
					</div>
					<div class="col-md-6 col-lg-8">
						<h3 class="studentName"><?php the_field('first_name');?>  <?php the_field('last_name'); ?></h3>
						<p class="studentClass">Ученик <?php echo $label; ?> класса</p>
						<hr>
						<div class="pb-5">
						  <a href="http://moodle2.stu.ru/course/view.php?id=2039" target="_blank" class="btn btnForClass btn-primary">Курс "Молодежная и социальная политика РЖД"</a>
						</div>
						<p class="ml-5">
							Рекомендции по выбору профессии:
						</p>					
						<p class="ml-5"><?php echo  $personal_rec; ?></p>
					</div>
					<div class="row ">

						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/facebookfacebook.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('facebook');?>">Мой Facebook</a>
						</div>
						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/mailemail.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="mailto: <?php echo get_the_author_meta('user_email');?>">Мой e-mail</a>
						</div>
						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/twtwitter.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('twitter');?>">Мой Twitter</a>
						</div>
						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/vkvkontakte.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('vkontakte');?>">Мой ВКонтакте</a>
						</div>
						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/instagraminstagram.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('instagram');?>">Мой Instagram</a>
						</div>
						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/telegramholy_telegram.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('telegram');?>">Мой Telegram</a>
						</div>
						<div class="col-md-12 col-lg-12 studentSocialCardMobile">
						  <img  src="<?php echo bloginfo('template_url');?>/assets/images/whatsappwhatsapp.png" target="_blank" class="rounded float-end">
							<a class="studentSocialLinks" href="<?php echo the_field('whatsapp');?>">Мой WhatsApp</a>
						</div>


					</div>
				</div>
			</div>
		
		<div class="tab-pane fade" id="aboutMyself">
			<div class="row">	
				<div class="col-md-3 col-lg-4">
					<h4 class="smallTitlePortfolio">Автобиография</h4>					
				</div>
				<div class="col-md-9 col-lg-8 studentBIO">					
					<div class="text-justify"><?php the_field('autobio'); ?></div>					
				</div>				
			</div>
			<hr>
			<div class="row">	
				<div class="col-md-3 col-lg-4">
					<h4  class="smallTitlePortfolio">Интересы</h4>					
				</div>
				<div class="col-md-9 col-lg-8 studentBIO">					
					<div class="text-justify"><?php the_field('auto_interesting'); ?></div>					
				</div>
				
			</div>
			<hr>
			<div class="row">	
				<div class="col-md-3 col-lg-4">
				<h4  class="smallTitlePortfolio">Свои фотографии</h4>					
				</div>
				<div class="col-md-9 col-lg-8 studentBIO">					
					<?php 
						if( have_rows('my_photo_gallery') ):
							while( have_rows('my_photo_gallery') ) : the_row();								
								$my_photo_gallery_proof = get_sub_field('my_photo_gallery_item');
					?>			
					
						<a href="<?php echo $my_photo_gallery_proof;?>" target="_blank"><img src="<?php echo  $my_photo_gallery_proof; ?>" class="highslide img-thumbnail img-width-100 "></img></a>	
													
					<?php
							endwhile;
						endif;
					?>														
				</div>				
			</div>
			
		</div>
		<hr>

	<div class="tab-pane fade" id="Study">	
		<div class="row">	
			<div class="col-md-10 col-lg-12">
				<h4  class="smallTitlePortfolio">Основное образование</h4>					
			</div>

			<div class="col-md-10 col-lg-12">
				<table class="table table-responsive-md">
				  <thead class="thead-score-head">
					<tr>
						<th scope="col">Изучаемые предметы</th>
						<th scope="col">Оценка за год</th>
						<th scope="col">Результаты ОГЭ</th>
						<th scope="col">Результаты ЕГЭ</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
						<th scope="row">Русский язык</th>
						<td><?php the_field('year_russ'); ?></td>
						<td><?php the_field('oge_russ'); ?></td>
						<td><?php the_field('ege_russ'); ?></td>
					</tr>
					<tr>
					    <th scope="row">Математика</th>
						<td><?php the_field('year_math'); ?></td>
						<td><?php the_field('oge_math'); ?></td>
						<td><?php the_field('ege_math'); ?></td>
					</tr>
					<tr>
						<th scope="row">Информатика</th>
						<td><?php the_field('year_informatika'); ?></td>
						<td><?php the_field('oge_informatika'); ?></td>
						<td><?php the_field('ege_informatika'); ?></td>
					</tr>
					<tr>
						<th scope="row">Физика</th>
						<td><?php the_field('year_fizika'); ?></td>
						<td><?php the_field('oge_fizika'); ?></td>
						<td><?php the_field('ege_fizika'); ?></td>
					</tr>
					<tr>
						<th scope="row">Литература</th>
						<td><?php the_field('year_lit'); ?></td>
						<td><?php the_field('oge_lit'); ?></td>
						<td><?php the_field('ege_lit'); ?></td>
					</tr>
					<tr>
						<th scope="row">Обществознание</th>
						<td><?php the_field('year_obsh'); ?></td>
						<td><?php the_field('oge_obsh'); ?></td>
						<td><?php the_field('ege_obsh'); ?></td>
					</tr>
					<tr>
						<th scope="row">Иностранный язык</th>
						<td><?php the_field('year_inyaz'); ?></td>
						<td><?php the_field('oge_inyaz'); ?></td>
						<td><?php the_field('ege_inyaz'); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<hr>
 			
	<div class="row">	
		<div class="col-12">
			<h4 class="smallTitlePortfolio">Дополнительное образование</h4>					
		</div>
		<div class="col-12">
			<table class="table table-responsive-md">
				<thead class="thead-score-head">
					<tr>
						<th scope="col">Название курсов, факультативов</th>
						<th scope="col">Подтверждающий документ</th>
					</tr>
				</thead>
	<?php 
		if( have_rows('dop_edu') ):
			while( have_rows('dop_edu') ) : the_row();
				$dop_edu_value = get_sub_field('dop_edu_main');
				$dop_edu_proof = get_sub_field('dop_edu_doc');
	?>			
				<tbody>
					<tr>
						<th scope="row"><?php echo  $dop_edu_value; ?></th>
						<td><a href="<?php echo  $dop_edu_proof; ?>" target="_blank">Посмотреть документ</a></td>
					</tr>
				</tbody>


	<?php
			endwhile;
		endif;
	?>	
			</table>
		</div>							
	</div>

</div> 	 


<div class="tab-pane fade" id="Achivments">	
	

	
	<div class="row">	
		<div class="col-12">
			<h4  class="smallTitlePortfolio">Наука</h4>					
		</div>
		<div class="col-12">
			<table class="table table-responsive-md">
				<thead class="thead-score-head">
					<tr>
						<th scope="col">Название</th>
						<th scope="col">Подтверждающий документ</th>
					</tr>
				</thead>
	<?php 
		if( have_rows('part_in') ):
			while( have_rows('part_in') ) : the_row();
				$part_in_value = get_sub_field('part_in_text');
				$part_in_proof = get_sub_field('part_in_doc');
	?>			
				<tbody>
					<tr>
						<th scope="row"><?php echo  $part_in_value; ?></th>
						<td><a href="<?php echo  $part_in_proof; ?>" target="_blank">Посмотреть документ</a></td>
					</tr>
				</tbody>


	<?php
			endwhile;
		endif;
	?>	
			</table>
		</div>							
	</div>

	<hr>

	
	<div class="row">	
		<div class="col-12">
			<h4  class="smallTitlePortfolio">Проектная работа</h4>					
		</div>
		<div class="col-12">
			<table class="table table-responsive-md">
				<thead class="thead-score-head">
					<tr>
						<th scope="col">Название проекта</th>
						<th scope="col">Результат</th>
					</tr>
				</thead>
	<?php 
		if( have_rows('project_what') ):
			while( have_rows('project_what') ) : the_row();
				$project_what_value = get_sub_field('project_what_name');
				$project_what_proof = get_sub_field('project_what_result');
	?>			
				<tbody>
					<tr>
						<th scope="row"><?php echo  $project_what_value; ?></th>
						<td><a href="<?php echo  $project_what_proof; ?>" target="_blank">Посмотреть документ</a></td>
					</tr>
				</tbody>


	<?php
			endwhile;
		endif;
	?>	
			</table>
		</div>							
	</div>
	
	<hr>


	<div class="row">	
		<div class="col-12">
			<h4  class="smallTitlePortfolio">Общественная деятельность</h4>					
		</div>
		<div class="col-12">
			<table class="table table-responsive-md">
				<thead class="thead-score-head">
					<tr>
						<th scope="col">Название</th>
						<th scope="col">Результат</th>
					</tr>
				</thead>
	<?php 
		if( have_rows('i_do_it') ):
			while( have_rows('i_do_it') ) : the_row();
				$i_do_it_value = get_sub_field('i_do_it_name');
				$i_do_it_proof = get_sub_field('i_do_it_result');
	?>			
				<tbody>
					<tr>
						<th scope="row"><?php echo  $i_do_it_value; ?></th>
						<td><?php echo  $i_do_it_proof; ?></td>
					</tr>
				</tbody>


	<?php
			endwhile;
		endif;
	?>	
			</table>
		</div>							
	</div>
	

	<hr>

	
	<div class="row">	
		<div class="col-12">
			<h4 class="smallTitlePortfolio">Спортивные достижения</h4>					
		</div>
		<div class="col-12">
			<table class="table table-responsive-md">
				<thead class="thead-score-head">
					<tr>
						<th scope="col">Вид спорта</th>
						<th scope="col">Результат</th>
					</tr>
				</thead>
	<?php 
		if( have_rows('my_sport') ):
			while( have_rows('my_sport') ) : the_row();
				$my_sport_value = get_sub_field('my_sport_name');
				$my_sport_proof = get_sub_field('my_sport_result');
	?>			
				<tbody>
					<tr>
						<th scope="row"><?php echo  $my_sport_value; ?></th>
						<td><a href="<?php echo  $my_sport_proof; ?>" target="_blank">Результат</a></td>
					</tr>
				</tbody>


	<?php
			endwhile;
		endif;
	?>	
			</table>
		</div>							
	</div>
	
	<hr>
	
	<div class="row">	
		<div class="col-12">
			<h4 class="smallTitlePortfolio">Творчество</h4>					
		</div>
		<div class="col-12">
			<table class="table table-responsive-md">
				<thead class="thead-score-head">
					<tr>
						<th scope="col">Название</th>
						<th scope="col">Ссылка на работу</th>
					</tr>
				</thead>
	<?php 
		if( have_rows('my_art') ):
			while( have_rows('my_art') ) : the_row();
				$my_art_value = get_sub_field('my_art_name');
				$my_art_proof = get_sub_field('my_art_result');
	?>			
				<tbody>
					<tr>
						<th scope="row"><?php echo  $my_art_value; ?></th>
						<td><a href="<?php echo  $my_art_proof; ?>" target="_blank">Посмотреть работу</a></td>
					</tr>
				</tbody>


	<?php
			endwhile;
		endif;
	?>	
			</table>
		</div>							
	</div>
	
	
	<hr>
	
</div>
		









		
		    
		</div>       
	</div>
</div>

<!-- if profile hidden -->

<?php }
else {?>
	<div class="container-fluid fon_Rectangle">		
		<div class="container ">		
			<div class="row ">			
				<div class="col-12">
					<p>Профиль скрыт</p>
				</div>
			</div>
		</div>
	</div>
<?php }?>


<?php 
    get_footer();
?>