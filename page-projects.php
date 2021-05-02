<?php
    /*
    Template Name: Projects Page
    */
?>

<?php
    get_header();
?>

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="https://cdosgups.ru/">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page">Работы наших учеников</li>
  </ol>
</nav>

<div class="container">
  <h1 class="my-4">Работы наших учеников</h1>
	  <div class="row justify-content-center align-items-center">
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card">
			  <a href="https://cdosgups.ru/wp-content/uploads/2021/04/Повышение_производительности_компьютера.pdf"><img src="<?php echo bloginfo('template_url');?>/assets/images/project_1.jpg" class="card-img-top" alt="Project_1">
			  <div class="card-body">
				<p class="card-text">Повышение производительности ПК</p>
			  </div>
			  </a>
			</div>		
		</div>
		<div class="col-lg-4 col-sm-6 portfolio-item">
		  <div class="card">
			  <a href="https://cdosgups.ru/wp-content/uploads/2021/04/Проект-цепи-постоянного-тока.pdf"><img src="<?php echo bloginfo('template_url');?>/assets/images/project_2.jpg" class="card-img-top" alt="Project_1">
			  <div class="card-body">
				<p class="card-text">Проект цепи постоянного тока</p>
			  </div>
			  </a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6 portfolio-item">
		  <div class="card">
			  <img src="<?php echo bloginfo('template_url');?>/assets/images/Rectangle.png" class="card-img-top" alt="Project_1">
			  <div class="card-body">
				<p class="card-text">Скоро</p>
			  </div>
			</div>
		</div>            
	  </div>

	
<div class="row justify-content-center align-items-center">
    <div class="col-lg-4 col-sm-6 portfolio-item">
		<div class="card">
		  <img src="<?php echo bloginfo('template_url');?>/assets/images/Rectangle.png" class="card-img-top" alt="Project_1">
		  <div class="card-body">
			<p class="card-text">Скоро</p>
		  </div>
		</div>		
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card">
		  <img src="<?php echo bloginfo('template_url');?>/assets/images/Rectangle.png" class="card-img-top" alt="Project_1">
		  <div class="card-body">
			<p class="card-text">Скоро</p>
		  </div>
		</div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card">
		  <img src="<?php echo bloginfo('template_url');?>/assets/images/Rectangle.png" class="card-img-top" alt="Project_1">
		  <div class="card-body">
			<p class="card-text">Скоро</p>
		  </div>
		</div>
    </div>            
  </div>
  	

</div>


<?php 
    get_footer();
?>