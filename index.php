<?php

ini_set('error_reporting',E_ALLl);
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);

require_once 'app/include/database.php';
require_once 'app/include/functions.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>"Полимер Лидер" Оренбург</title>
    <link rel="stylesheet" href="dist/css/lightbox.css">
    <!-- MDB icon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css2?family=Mate+SC&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
      <link rel="stylesheet" type="text/css" href="css/style.css?<?echo time();?>">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
 <?php
    $posts = get_posts();
   ?>
   <div id="dialog"> 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="app/include/send.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Товар:</label>
            <input type="text" class="form-control" name="title"  id="my_input" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Кол-во:</label>
            <input type="number" class="form-control" name="col_vo"  id="col_vo" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Номер телефона:</label>
            <input type="text" class="form-control" name="phone"  id="phone" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Адресс проживания:</label>
            <textarea class="form-control" name="adress" id="message-text"></textarea>
          </div>
           <button type="submit" class="btn btn-primary" >Отправить заявку</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
       
      </div>
    </div>
  </div>
</div>
</div>


  	<header>
   <!-- Navbar -->
					<nav class="navbar navbar-expand-lg navbar-light bg-white bg-gradient ">
					  <!-- Container wrapper -->
					  <div class="container-fluid  p-3 text-dark">
					    <!-- Toggle button -->
					    <button
					      class="navbar-toggler"
					      type="button"
					      data-toggle="collapse"
					      data-target="#navbarSupportedContent"
					      aria-controls="navbarSupportedContent"
					      aria-expanded="false"
					      aria-label="Toggle navigation"
					    >
					      <i class="fas fa-bars text-dark"></i>
					    </button>

					    <!-- Collapsible wrapper -->
					    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					      <!-- Navbar brand -->
					      <a class="navbar-brand mt-2 mt-lg-0" href="#">
					        <img
					          src="img/logo.png"
					          height="45"
					          alt=""
					          loading="lazy"
					        />
					      </a>
					      <!-- Left links -->
					      <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4 " >
					        <li class="nav-item ">
					          <a class="nav-link text-dark px-4 " href="#sec_one">Информация о компании</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link text-dark px-4" href="#sec_two">Наши работы</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link text-dark px-4 " href="#sec_fre">Список товара</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link text-dark px-4" href="#sec_fo">Связаться с нами</a>
					        </li>
					          
					      </ul>
					      <!-- Left links -->
					    </div>
					    <!-- Collapsible wrapper -->

					    <!-- Right elements -->
					    <div class="d-flex align-items-center">
					      <!-- Icon -->
					      
					          <a class="nav-link text-dark px-4" href="#" id="number">+7 <font id="orange">(3532)</font> 240-230
</a>
					       <a class="text-reset me-3" href="#">
					        <img src="img/wha.ico">
					      </a>
					      <a class="text-reset me-3" href="#">
					        <img src="img/vk4.ico">
					      </a>

					      <!-- Notifications -->
					      <a
					        class="text-reset me-3 dropdown-toggle hidden-arrow"
					        href="#"
					        id="navbarDropdownMenuLink"
					        role="button"
					        data-mdb-toggle="dropdown"
					        aria-expanded="false"
					      >

					       <img src="img/inst.ico">
					        <span class="badge rounded-pill badge-notification bg-danger">1</span>
					      </a>

					      <ul
					        class="dropdown-menu dropdown-menu-end"
					        aria-labelledby="navbarDropdownMenuLink"
					      >
					        <li>
					          <a class="dropdown-item" href="#">Some news</a>
					        </li>
					        <li>
					          <a class="dropdown-item" href="#">Another news</a>
					        </li>
					        <li>
					          <a class="dropdown-item" href="#">Something else here</a>
					        </li>
					      </ul>

					      <!-- Avatar -->
					   
					      <ul
					        class="dropdown-menu dropdown-menu-end"
					        aria-labelledby="navbarDropdownMenuLink"
					      >
					      
					        <li>
					          <a class="dropdown-item" href="#">Settings</a>
					        </li>
					        <li>
					          <a class="dropdown-item" href="#">Logout</a>
					        </li>
					      </ul>
					    </div>
					    <!-- Right elements -->
					  </div>
					  <!-- Container wrapper -->
					</nav>
</header>
<article id="sec_one"></article>
<section>
	
	<div class="container-xxl" id="sec_1">
		<div class="row align-items-center">
			<div class="col-12 col-md-7 text-center text-md-start">
				<h2>Добро пожаловать на сайт <font id="blue">"Полимер - Лидер"</font></h2>
			</div>
			<div class="col-12 col-md-5 mt-4 mt-md-0">
				<img  class="w-100" src="img/1.jpg">
			</div>
			<div class="col-12 fs-6  text-center mt-5 " id="t1">
				
Мы занимаемся утеплением с 2010 года. Реально действующая компания, которая дорожит своей репутацией. Поэтому строго соблюдаем технологии и утепляем для заказчиков, как для себя. Прописываем гарантию в договоре. Мы на 100% уверены в качестве своей работы и смело даем такую гарантию. Но, если вдруг хоть что-то случилось, сразу звоните нам. Мы немедленно отреагируем и все исправим.
			</div>
		</div>
		
	</div>

</section>

<!-- Modal gallery -->
<section class="mt-5">
  <!-- Section: Images -->
  <section class="container-xxl">
  	<h2 class="mb-5 text-center">Наши видео на <font id="blue">Ютуб</font></h2>
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="img/v1.png "
            class="w-100"
          />
          <a href="https://www.youtube.com/watch?v=r6BVnEvxAfM" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
          <p class="mt-2" id="t2">"ПОЛИМЕРЛИДЕР". Теплоизоляция пенополиуретаном.
			</p>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="img/2v.png"
            class="w-100"
          />
          <a href="https://www.youtube.com/watch?v=ftKjPv27gOY" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
           <p class="mt-2" id="t2">ПОЛИМЕРЛИДЕР, Презентация мобильной лаборатории для производства ППУ.
			</p>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="img/v3.png"
            class="w-100"
          />
          <a href="https://www.youtube.com/watch?v=ftKjPv27gOY" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            <article id="sec_two"></article>
          </a>
          <p class="mt-4" id="t2">Заливка ППУ в колодезную кладку

			</p>
        </div>
      </div>

    </div>

  </section>
  <!-- Section: Images -->

<section class="container-xxl " id="sec_gel">
	<h2 class="mb-5 text-center "  id="text">Примеры <font id="blue">наших</font> работ</h2>
	<div class="row" >
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g1.jpg" data-lightbox="2">
        <img src="img/g1.jpg " data-lightbox="1" alt="Lights" style="width:100%" class="i1">
          </a>
        <div class="caption mt-3" id="t2">
          <p>Администрация Газзавода</p>
        </div>
    
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g2.jpg" data-lightbox="2">  <img src="img/g2.jpg"  class="i2"  alt="Nature" style="width:100%"></a>
        <div class="caption mt-3" id="t2">
          <p>АЗС «BrentFueller» 380 кв.м. Срок выполнения 2 дня</p>
        </div>
      
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g3.jpg" data-lightbox="2">
        <img src="img/g3.jpg"  alt="Fjords" style="width:100%">
        </a>
        <div class="caption mt-3" id="t2">
          <p>Ангар для хранения спецтехники 1000 кв.м. Срок выполнения 5 дней</p>
        </div>
      
    </div>
  </div>
  <div class="col-md-4 mt-2 ">
    <div class="thumbnail">
      <a href="img/g4.jpg" data-lightbox="2">
        <img src="img/g4.jpg" alt="Fjords" style="width:100%">
    </a>
        <div class="caption mt-3" id="t2">
          <p>Гостиничный комплекс в г. Сорочинск. 300 кв.м. Срок выполнения 2 дня</p>
        </div>
      
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g5.jpg" data-lightbox="2">
        <img src="img/g5.jpg" alt="Fjords" style="width:100%">
    </a>
        <div class="caption mt-3" id="t2">
          <p>Магазин на ул. Ульянова, 320 кв.м., срок выполнения 2 дня</p>
        </div>
    
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g6.jpg" data-lightbox="2">
        <img src="img/g6.jpg" alt="Fjords" style="width:100%">
    </a>
        <div class="caption mt-3" id="t2">
          <p>Мобильный фургон для геологов Росгеологии, Оренбург, 73 кв.м. Срок выполнения 1 день</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g7.jpg" data-lightbox="2">
        <img src="img/g7.jpg" alt="Fjords" style="width:100%">
    </a>
        <div class="caption mt-3" id="t2">
          <p>Пол поселок Дубки. Площадь 190 кв.м. Срок выполнения 1 день</p>
        </div>
      
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g8.jpg" data-lightbox="2">
        <img src="img/g8.jpg" alt="Fjords" style="width:100%">
    </a>
        <div class="caption mt-3" id="t2">
          <p>Пол технического этажа общежития Оренбургского Государственного Университета, 420 кв.м. Срок выполнения 2 дня</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="thumbnail">
      <a href="img/g9.jpg" data-lightbox="2">
        <img src="img/g9.jpg" alt="Fjords" style="width:100%">
    </a>
        <div class="caption mt-3" id="t2">
          <p>Фундамент 300 кв.м, п. Ростоши, срок выполнения 1 день</p>
        </div>
      <article id="sec_fre"></article>
    </div>
  </div>
</section>

  <!-- Section: Modals -->
  <section class="">
    <!-- Modal 1 -->
    <div
      class="modal fade"
      id="exampleModal1"
      tabindex="-1"
      aria-labelledby="exampleModal1Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/watch?v=r6BVnEvxAfM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div
      class="modal fade"
      id="exampleModal2"
      tabindex="-1"
      aria-labelledby="exampleModal2Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/watch?v=ftKjPv27gOY"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div
      class="modal fade"
      id="exampleModal3"
      tabindex="-1"
      aria-labelledby="exampleModal3Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/watch?v=pOZmJu5lq4A"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Section: Modals -->
</section>


<!-- Modal gallery -->

   

<section>
	<div class="container-xxl " id="sec_2">
		<h2 class="text-center"><font id="blue">Актуальный</font>  список товара</h2>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  

   
        <div class="row  row-cols-4 text-center ">
        	
  			
    	 <?php
         foreach($posts as $post):
         ?>

				      <div class="card col-md-4 col-sm-6 col-8  col-lg-3 mt-2  " id="card">
				  <img  src="uploads/<?=$post['image']?>" class="card-img-top img-fluid " id="img" >
				  <div class="card-body  ">
				    <h5 class="card-title " id="title" style="height: 50px;"><?=$post['title']?></h5>
				    <p class="card-text  " style="height: 150px;" id="t2"><?=$post['content']?></p>
				   <div> 
				   	<p class="card-text float-right mr-2    " id="price"><?=$post['price']?> руб.</p>
				    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onClick="document.getElementById('my_input').value = '<?=$post['title']?>'" id="but">Добавить</button>
					</div>

				  </div>
				</div>
 <?php endforeach; ?>
    
      
			</div>
			
		</div>
		</div>


</section>



<script>
	
$(function(){
  $('#but').click(function(event){
    event.preventDefault();
    var title = $(this).attr('title');
    $('#dialog').dialog().find('#my_input').val(title);
  });
});

</script>


<section class="container-xxl mt-5">
	
	<div class="container ">
	<div class="row">
		 <div class="col-lg-7 col-md-12 text-center ">
		 	<h2 class="text-center"><font id="blue">Наши</font> Клиенты</h2><br><br>
                 <p id="t2"> Нашими клиентами являются крупные нефтегазовые компании
и сельскохозяйственные предприятия. Клиенты выбирают качество. А качество - это мы!<br><br><br>
Станьте нашим клиентом сегодня, позвоните <font color="#D24A43">+7 (3532) 240-230</font></p>
                </div>
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-3 col-lg-5 col-md-12  mt-lg-0 " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/k1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/k2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/k3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>	
</section>

<section class="sixth-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                  
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aba42d71d33362f5d7789f1a45f6c4e49a62ad8bc5e2e358c4a264645c35ca904&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="col-lg-5 col-md-12 mt-2 mt-lg-0" >
                	  <h2 class="title text-center">
                        <span class="bold">Закажите расчет стоимости </span>и получите <font id="blue">ответ</font> через <font color="green">15 минут</font>
                    </h2>
                    <div class="b24-form"><div id="b24-54396202826877162818388493429551" data-styles-apllied="true" class=""><div class="b24-form-wrapper"><div class="b24-form-header-padding"></div> <div class="b24-form-content b24-form-padding-side"><form method="post" novalidate="novalidate"><!----> <div><div class="b24-form-field b24-form-field-name b24-form-control-string"><div><div><div class="b24-form-control-container b24-form-control-icon-after"><input name="name" autocomplete="given-name" type="string" class="b24-form-control"> <div class="b24-form-control-label">
				Имя 
				<span class="b24-form-control-required" style="display: none;">*</span></div> <!----> <!----> <div class="b24-form-control-alert-message" style="display: none;">
			
		</div></div></div> <!----></div> <!----></div><div class="b24-form-field b24-form-field-phone b24-form-control-string"><div><div><div class="b24-form-control-container b24-form-control-icon-after"><input name="phone" autocomplete="tel" type="tel" class="b24-form-control"> <div class="b24-form-control-label">
				Телефон 
				<span class="b24-form-control-required">*</span></div> <!----> <!----> <div class="b24-form-control-alert-message" style="display: none;">
			Поле обязательно для заполнения
		</div></div></div> <!----></div> <!----></div><div class="b24-form-field b24-form-field-list b24-form-control-list"><!----> <div><div><div class="b24-form-control-container b24-form-control-icon-after"><input readonly="readonly" type="text" class="b24-form-control"> <div class="b24-form-control-label">
				Объект для утепления
				<span class="b24-form-control-required" style="display: none;">*</span></div> <!----> <div class="b24-form-control-alert-message" style="display: none;">
			
		</div> <div class="b24-form-dropdown"><!----></div> <!----> <!----></div> <!----> <div class="b24-form-dropdown"><!----></div></div></div></div><div class="b24-form-field b24-form-field-double b24-form-control-string"><div><div><div class="b24-form-control-container b24-form-control-icon-after"><input type="number" class="b24-form-control b24-form-control-not-empty"> <div class="b24-form-control-label">
				Площадь напыления 
				<span class="b24-form-control-required" style="display: none;">*</span></div> <!----> <!----> <div class="b24-form-control-alert-message" style="display: none;">
			
		</div></div></div> <!----></div> <!----></div></div> <div><div class="b24-form-field b24-form-field-agreement b24-form-control-agreement"><!----> <div><label class="b24-form-control-container"><input type="checkbox" onclick="this.blur()"> <span class="b24-form-control-desc"><a href="https://polimerlider.ru/agreement" target="_blank" class="b24-form-field-agreement-link">Нажимая кнопку “Отправить” вы принимаете условия Соглашения о персональных данных.</a></span> <span class="b24-form-control-required">*</span> <div class="b24-form-control-alert-message" style="display: none;">
			Поле обязательно для заполнения
		</div></label></div></div> <div class="b24-window"><div class="b24-window-overlay" style="display: none;"></div> <div class="b24-window-popup b24-window-popup-p-center" style="display: none;"><div class="b24-window-popup-wrapper" style="max-width: 600px;"><button type="button" class="b24-window-close" style="z-index: 200019;"></button> <div><!----> <div class="b24-window-scrollable" style="z-index: 199999;"><div class="b24-window-scroll-anchor"></div> <!----> <div class="b24-window-popup-body"><div style="padding: 0px 12px 12px;"><div></div> <div class="b24-form-btn-container" style="padding: 12px 0px 0px;"><div class="b24-form-btn-block"><button type="button" class="b24-form-btn">
								Принимаю
							</button></div> <div class="b24-form-btn-block"><button type="button" class="b24-form-btn b24-form-btn-white b24-form-btn-border">
								Не принимаю
							</button></div></div></div></div> <div class="b24-window-scroll-anchor"></div></div> <!----></div></div></div></div></div> <!----> <div class="b24-form-btn-container"><!----> <!----> <div class="b24-form-btn-block"><button type="submit" class="b24-form-btn" id="but">
								Отправить
							</button></div></div> <span style="color: red; display: none;">
						Debug: fill fields
					</span></form></div> <div class="b24-form-state-container"><div class="b24-form-loader" style="display: none;"><div class="b24-form-loader-icon"><svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 263 174"><defs><svg width="158px" height="158px" viewBox="0 0 158 158" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path id="bxSunLines" d="M79,0 C80.6568542,0 82,1.34314575 82,3 L82,22 C82,23.6568542 80.6568542,25 79,25 C77.3431458,25 76,23.6568542 76,22 L76,3 C76,1.34314575 77.3431458,0 79,0 Z M134.861,23.139 C136.032146,24.3104996 136.032146,26.2095004 134.861,27.381 L121.426,40.816 C120.248863,41.9529166 118.377746,41.9366571 117.220544,40.7794557 C116.063343,39.6222543 116.047083,37.7511367 117.184,36.574 L130.619,23.139 C131.7905,21.9678542 133.6895,21.9678542 134.861,23.139 L134.861,23.139 Z M158,79 C158,80.6568542 156.656854,82 155,82 L136,82 C134.343146,82 133,80.6568542 133,79 C133,77.3431458 134.343146,76 136,76 L155,76 C156.656854,76 158,77.3431458 158,79 Z M134.861,134.861 C133.6895,136.032146 131.7905,136.032146 130.619,134.861 L117.184,121.426 C116.40413,120.672777 116.091362,119.557366 116.365909,118.508478 C116.640455,117.45959 117.45959,116.640455 118.508478,116.365909 C119.557366,116.091362 120.672777,116.40413 121.426,117.184 L134.861,130.619 C136.032146,131.7905 136.032146,133.6895 134.861,134.861 Z M79,158 C77.3431458,158 76,156.656854 76,155 L76,136 C76,134.343146 77.3431458,133 79,133 C80.6568542,133 82,134.343146 82,136 L82,155 C82,156.656854 80.6568542,158 79,158 Z M23.139,134.861 C21.9678542,133.6895 21.9678542,131.7905 23.139,130.619 L36.574,117.184 C37.3272234,116.40413 38.4426337,116.091362 39.491522,116.365909 C40.5404103,116.640455 41.3595451,117.45959 41.6340915,118.508478 C41.9086378,119.557366 41.5958698,120.672777 40.816,121.426 L27.381,134.861 C26.2095004,136.032146 24.3104996,136.032146 23.139,134.861 Z M0,79 C0,77.3431458 1.34314575,76 3,76 L22,76 C23.6568542,76 25,77.3431458 25,79 C25,80.6568542 23.6568542,82 22,82 L3,82 C1.34314575,82 0,80.6568542 0,79 L0,79 Z M23.139,23.139 C24.3104996,21.9678542 26.2095004,21.9678542 27.381,23.139 L40.816,36.574 C41.5958698,37.3272234 41.9086378,38.4426337 41.6340915,39.491522 C41.3595451,40.5404103 40.5404103,41.3595451 39.491522,41.6340915 C38.4426337,41.9086378 37.3272234,41.5958698 36.574,40.816 L23.139,27.381 C21.9678542,26.2095004 21.9678542,24.3104996 23.139,23.139 Z" fill="#FFD110" class="bx-sun-lines-animate"></path></svg></defs> <g fill="none" fill-rule="evenodd"><path d="M65.745 160.5l.245-.005c13.047-.261 23.51-10.923 23.51-23.995 0-13.255-10.745-24-24-24-3.404 0-6.706.709-9.748 2.062l-.47.21-.196-.477A19.004 19.004 0 0 0 37.5 102.5c-10.493 0-19 8.507-19 19 0 1.154.103 2.295.306 3.413l.108.6-.609-.01A17.856 17.856 0 0 0 18 125.5C8.335 125.5.5 133.335.5 143s7.835 17.5 17.5 17.5h47.745zM166.5 85.5h69v-.316l.422-.066C251.14 82.73 262.5 69.564 262.5 54c0-17.397-14.103-31.5-31.5-31.5-.347 0-.694.006-1.04.017l-.395.013-.103-.382C226.025 9.455 214.63.5 201.5.5c-15.014 0-27.512 11.658-28.877 26.765l-.047.515-.512-.063a29.296 29.296 0 0 0-3.564-.217c-16.016 0-29 12.984-29 29 0 15.101 11.59 27.643 26.542 28.897l.458.039v.064z" stroke-opacity=".05" stroke="#000" fill="#000"></path> <circle stroke="#FFD110" stroke-width="6" cx="131.5" cy="95.5" r="44.5" class="b24-form-loader-icon-sun-ring"></circle></g> <use xlink:href="#bxSunLines" y="16.5" x="52.5" width="158" height="158" class="b24-form-loader-icon-sun-line"></use></svg></div></div> <div class="b24-form-state b24-form-success" style="display: none;"><div class="b24-form-state-inner"><div class="b24-form-state-icon b24-form-success-icon"></div> <div class="b24-form-state-text"><p>Отправлено!</p> <p></p></div> <!----></div> <div class="b24-form-inner-box"></div></div> <div class="b24-form-state b24-form-error" style="display: none;"><div class="b24-form-state-inner"><div class="b24-form-state-icon b24-form-error-icon"></div> <div class="b24-form-state-text"><p></p></div> <button class="b24-form-btn b24-form-btn-border b24-form-btn-tight">
							Отправить еще раз						
						</button></div> <div class="b24-form-inner-box"></div></div> <div class="b24-form-state b24-form-warning" style="display: none;"><div class="b24-form-state-inner"><div class="b24-form-state-icon b24-form-warning-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 169 169"><defs><circle id="a" cx="84.5" cy="84.5" r="65.5"></circle><filter x="-.8%" y="-.8%" width="101.5%" height="101.5%" filterUnits="objectBoundingBox" id="b"><fegaussianblur stdDeviation=".5" in="SourceAlpha" result="shadowBlurInner1"></fegaussianblur><feoffset dx="-1" dy="-1" in="shadowBlurInner1" result="shadowOffsetInner1"></feoffset><fecomposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></fecomposite><fecolormatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.0886691434 0" in="shadowInnerInner1" result="shadowMatrixInner1"></fecolormatrix><fegaussianblur stdDeviation=".5" in="SourceAlpha" result="shadowBlurInner2"></fegaussianblur><feoffset dx="1" dy="1" in="shadowBlurInner2" result="shadowOffsetInner2"></feoffset><fecomposite in="shadowOffsetInner2" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner2"></fecomposite><fecolormatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.292285839 0" in="shadowInnerInner2" result="shadowMatrixInner2"></fecolormatrix><femerge><femergenode in="shadowMatrixInner1"></femergenode><femergenode in="shadowMatrixInner2"></femergenode></femerge></filter></defs><g fill="none" fill-rule="evenodd"><circle stroke-opacity=".05" stroke="#000" fill-opacity=".07" fill="#000" cx="84.5" cy="84.5" r="84"></circle><use fill="#FFF" xlink:href="#a"></use><use fill="#000" filter="url(#b)" xlink:href="#a"></use><path d="M114.29 99.648L89.214 58.376c-1.932-3.168-6.536-3.168-8.427 0L55.709 99.648c-1.974 3.25.41 7.352 4.234 7.352h50.155c3.782 0 6.166-4.103 4.193-7.352zM81.404 72.756c0-1.828 1.48-3.29 3.33-3.29h.452c1.85 0 3.33 1.462 3.33 3.29v12.309c0 1.827-1.48 3.29-3.33 3.29h-.453c-1.85 0-3.33-1.463-3.33-3.29V72.756zm7.77 23.886c0 2.274-1.892 4.143-4.194 4.143s-4.193-1.869-4.193-4.143c0-2.275 1.891-4.144 4.193-4.144 2.302 0 4.193 1.869 4.193 4.144z" fill="#000" opacity=".4"></path></g></svg></div> <div class="b24-form-state-text"><p>Форма не актуальна</p></div></div> <div class="b24-form-inner-box"></div></div></div> <!----> <!----></div></div></div><script data-b24-form="inline/20/vceofc" data-skip-moving="true" data-b24-loaded="true">
                        (function(w,d,u){
                            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                        })(window,document,'https://cdn-ru.bitrix24.ru/b16236868/crm/form/loader_20.js');
                    </script>
                </div>
            </div>
        </div>
    </section>
 <article id="sec_fo"></article>
<footer class="bg-light text-center text-lg-start mt-5">
  <!-- Copyright -->
  <div class="text-center p-3" id="footer" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">Полимер Лидер | Утепление пенополиуретаном в Оренбурге</a>
  </div>
  <!-- Copyright -->
</footer>


<script src="dist/js/lightbox-plus-jquery.js"></script>

 <script>
        $(function(){
  $('.mw-100').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
    $('#magnify').css({
     left: ($(document).width() - $('#magnify').outerWidth())/2,
     // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
            top: ($(window).height() - $('#magnify').outerHeight())/2
   });
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay', function(event) {
    event.preventDefault();
    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});


    </script>

<script>
	
window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('#phone'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});

</script>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
