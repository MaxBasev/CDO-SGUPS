<?php
    /*
    Template Name: Main Page
    */

?>

<?php
    get_header();
?>

<body>



<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="carouselIndicators"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('<?php echo bloginfo('template_url');?>/assets/images/cover1.png')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('<?php echo bloginfo('template_url');?>/assets/images/cover_2.png')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('<?php echo bloginfo('template_url');?>/assets/images/cover_3.png">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>


<div class="container">
  <h1 class="my-4">Классы ЦДО</h1>
  	<div class="row">
		<div class="col-lg-4 mb-4">
		  <div class="card h-100">
			<h4 class="card-header">10 А</h4>
			<div class="card-body">
			  <p class="card-text">"Мы такие-то такие-то"</p>
			</div>
			<div class="card-footer">
			  <a href="https://cdosgups.ru/10a/" class="btn btnForClass btn-primary">Посмотреть список учеников</a>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 mb-4">
		  <div class="card h-100">
			<h4 class="card-header">10 Б</h4>
			<div class="card-body">
			  <p class="card-text">"А мы не такие"</p>
			</div>
			<div class="card-footer">
			  <a href="https://cdosgups.ru/10b/" class="btn btnForClass btn-primary">Посмотреть список учеников</a>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 mb-4">
		  <div class="card h-100">
			<h4 class="card-header">10 В</h4>
			<div class="card-body">
			  <p class="card-text">Какой-то текст</p>
			</div>
			<div class="card-footer">
			  <a href="https://cdosgups.ru/10v/" class="btn btnForClass btn-primary">Посмотреть список учеников</a>
			</div>
		  </div>
		</div>
  </div>

  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">11 А</h4>
        <div class="card-body">
          <p class="card-text">"Мы такие-то такие-то"</p>
        </div>
        <div class="card-footer">
          <a href="https://cdosgups.ru/11a/" class="btn btnForClass btn-primary">Посмотреть список учеников</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">11 Б</h4>
        <div class="card-body">
          <p class="card-text">"А мы не такие"</p>
        </div>
        <div class="card-footer">
          <a href="https://cdosgups.ru/11b/" class="btn btnForClass btn-primary">Посмотреть список учеников</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">11 В</h4>
        <div class="card-body">
          <p class="card-text">Еще какой-то текст</p>
        </div>
        <div class="card-footer">
          <a href="https://cdosgups.ru/11v/" class="btn btnForClass btn-primary">Посмотреть список учеников</a>
        </div>
      </div>
    </div>
  </div>
		
  <hr>
	
</div>
	
	
<div class="container">
	<h2 class="my-5">Работы наших учеников</h2>
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
	 <div class="row justify-content-center align-items-center ">		 
		 	<a href="https://cdosgups.ru/projects" class="btn btnForProjects btn-primary text-center">Все работы</a>		 
	</div>


  <hr>


    <div class="row">
       <div class="col-lg-8 mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2284.6620863605567!2d82.92562785159855!3d55.06665505207074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe50ac6635fd3%3A0xf8a50581295efc8d!2z0YPQuy4g0JfQsNC70LXRgdGB0LrQvtCz0L4sIDEsINCd0L7QstC-0YHQuNCx0LjRgNGB0LosINCd0L7QstC-0YHQuNCx0LjRgNGB0LrQsNGPINC-0LHQuy4sIDYzMDA3NQ!5e0!3m2!1sru!2sru!4v1619443586529!5m2!1sru!2sru" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 mb-4">
        <h3>Контакты</h3>
        <p>
          г. Новосибирск, ул. Залесского,1 (аудитория Л-116)         
          <br>
        </p>
        <p>
          Телефон: 328-05-50, 328-04-25
        </p>
        <p>
          Email: <a href="mailto:fdp@stu.ru">fdp@stu.ru</a>
        </p>
        <p>
          Часы работы: Понедельник - Суббота: с 8:00 до 17:00
        </p>
      </div>
    </div>

</div>

<?php 
    get_footer();
?>