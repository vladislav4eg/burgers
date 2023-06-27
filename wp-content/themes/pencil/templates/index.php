<?php /*template name: main*/?>

<?php get_header(); ?>

<section class="hero" id="hero">
			<div class="container hero__container">

				<p class="hero__sub-title">got hungry ???</p>
				<p class="hero__text">do not waste time in vain!</p>
				<h1><?php the_field("hero_title")?></h1>
				<a href="#" class="btn">Order a Franchise</a>

				<div class="hero__down click">
					<a href="#menu"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/down.png" alt=""></a>
				</div>
			</div>
		</section>
	<!-- hero-end -->

	<!-- menu -->
		<section class="menu section" id="menu">
			<div class="container menu__container">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax1.png" alt="" class="parallax parallax--one">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax2.png" alt="" class="parallax parallax--two">


				<div class="gallery__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="gallery__title_after">
					<h2 class="wow fadeInUp" data-wow-duration="1s">Menu</h2>
					<p class="gallery__title_sub-title section__sub-title wow fadeInUp" data-wow-duration="1s">the most delicious</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-sub-title2.svg" alt="" class="gallery__title_before">
				</div>


				<div id="filters" class="menu__nav button-group"> 
					<button class="menu__button button is-checked" data-filter="*">All</button>
					<button class="menu__button button" data-filter=".burger">Burger</button>
					<button class="menu__button button" data-filter=".sandwich">Sandwich</button>
					<button class="menu__button button" data-filter=".hamburgers">Hamburgers</button>
				</div>

				<div class="menu__grid">
					<div class="menu__item burger">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu1.jpg" alt="">
						<div class="menu__item_info">
							<p class="menu__item_info--price">
								<span>16$</span>
								<span>320g</span>
							</p>
							<p class="menu__item_info--name">EL Classico</p>
						</div>
						<div class="menu__item_consist">
							<div class="menu__item_consist--title">consist</div>
							<ul class="menu__item_consist--list">
								<li>Cheese</li>
								<li>Potatoes</li>
								<li>Scull</li>
								<li>Sauce</li>
								<li>Sauce</li>
								<li>Mushrooms sauce scull cheese</li>
							</ul>
						</div>
					</div>
					<div class="menu__item sandwich">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu2.jpg" alt="">
						<div class="menu__item_info">
							<p class="menu__item_info--price">
								<span>16$</span>
								<span>320g</span>
							</p>
							<p class="menu__item_info--name">EL Classico</p>
						</div>
						<div class="menu__item_consist">
							<div class="menu__item_consist--title">consist</div>
							<ul class="menu__item_consist--list">
								<li>Cheese</li>
								<li>Potatoes</li>
								<li>Scull</li>
								<li>Sauce</li>
								<li>Sauce</li>
								<li>Mushrooms sauce scull cheese</li>
							</ul>
						</div>
					</div>
					<div class="menu__item hamburgers">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu3.jpg" alt="">
						<div class="menu__item_info">
							<p class="menu__item_info--price">
								<span>16$</span>
								<span>320g</span>
							</p>
							<p class="menu__item_info--name">EL Classico</p>
						</div>
						<div class="menu__item_consist">
							<div class="menu__item_consist--title">consist</div>
							<ul class="menu__item_consist--list">
								<li>Cheese</li>
								<li>Potatoes</li>
								<li>Scull</li>
								<li>Sauce</li>
								<li>Sauce</li>
								<li>Mushrooms sauce scull cheese</li>
							</ul>
						</div>
					</div>
					<div class="menu__item burger">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu1.jpg" alt="">
						<div class="menu__item_info">
							<p class="menu__item_info--price">
								<span>16$</span>
								<span>320g</span>
							</p>
							<p class="menu__item_info--name">EL Classico</p>
						</div>
						<div class="menu__item_consist">
							<div class="menu__item_consist--title">consist</div>
							<ul class="menu__item_consist--list">
								<li>Cheese</li>
								<li>Potatoes</li>
								<li>Scull</li>
								<li>Sauce</li>
								<li>Sauce</li>
								<li>Mushrooms sauce scull cheese</li>
							</ul>
						</div>
					</div>
					<div class="menu__item sandwich">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu2.jpg" alt="">
						<div class="menu__item_info">
							<p class="menu__item_info--price">
								<span>16$</span>
								<span>320g</span>
							</p>
							<p class="menu__item_info--name">EL Classico</p>
						</div>
						<div class="menu__item_consist">
							<div class="menu__item_consist--title">consist</div>
							<ul class="menu__item_consist--list">
								<li>Cheese</li>
								<li>Potatoes</li>
								<li>Scull</li>
								<li>Sauce</li>
								<li>Sauce</li>
								<li>Mushrooms sauce scull cheese</li>
							</ul>
						</div>
					</div>
					<div class="menu__item hamburgers">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu3.jpg" alt="">
						<div class="menu__item_info">
							<p class="menu__item_info--price">
								<span>16$</span>
								<span>320g</span>
							</p>
							<p class="menu__item_info--name">EL Classico</p>
						</div>
						<div class="menu__item_consist">
							<div class="menu__item_consist--title">consist</div>
							<ul class="menu__item_consist--list">
								<li>Cheese</li>
								<li>Potatoes</li>
								<li>Scull</li>
								<li>Sauce</li>
								<li>Sauce</li>
								<li>Mushrooms sauce scull cheese</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section>
	<!-- menu-end -->

	<!-- ingredients -->
		<section class="ingredients section" id="ingredients">
			<div class="container section__container">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax5.png" alt="" class="parallax parallax--five">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax4.png" alt="" class="parallax parallax--six">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax3.png" alt="" class="parallax parallax--three">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax6.png" alt="" class="parallax parallax--four">
				

				<div class="ingredients__list ingredients__list--one">
					<div class="ingredients__item wow fadeInUp" data-wow-duration="1s">
						<h3>Sauces</h3>
						<ul>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Bourgeois</span>
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Cheese</span>
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Garlic</span> 
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Italian</span> 
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Lorem</span>
							</li>
						</ul>
					</div>
					<div class="ingredients__item wow fadeInUp" data-wow-duration="1s">
						<h3>Supplements</h3>
						<ul>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Bourgeois</span>
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Cheese</span>
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Garlic</span> 
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Italian</span> 
							</li>
							<li>
								<span>50 <sub>g</sub></span>
								<span>Lorem</span>
							</li>
						</ul>
					</div>
				</div>

			<div class="ingredients__list ingredients__list--price ingredients__list--two" style="gap: 150px">
				<?php if (have_rows('menu')): ?>
						<?php while (have_rows('menu')): the_row(); 
							$dish = get_sub_field('dish'); ?>

							<?php if (have_rows('menu_list')): ?>
								<div class="ingredients__item wow fadeInUp" data-wow-duration="1s">
									<h3><?php echo $dish; ?></h3>
								<?php while (have_rows('menu_list')): the_row();
									$dish_name = get_sub_field('dish_name');
									$dish_price = get_sub_field('dish_price');
									$dish_description = get_sub_field('dish_description');
									$dish__weight = get_sub_field('dish__weight');
								?>

									<ul>
										<li>
											<p >
												<span><?php echo $dish_price; ?></span>
												<span><?php echo $dish__weight; ?> <sub>g</sub></span>
											</p>
											<p style= "margin-bottom: 40px">	<span><?php echo $dish_name; ?></span><?php echo $dish_description; ?></p>
										</li>
									</ul>

								<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					
				<?php endif; ?>
			</div>
				
		</section>
	<!-- ingredients-end -->

	<!-- tables -->
		<section class="tables section" id="tables">
			<div class="container">

				<div class="tables__title philosophy__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="philosophy__title_after">
					<h2 class="wow fadeInUp" data-wow-duration="1s">Vacancies</h2>
					<p class="philosophy__title_sub-title section__sub-title wow fadeInUp" data-wow-duration="1s">empty seats in the hall</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-sub-title.svg" alt="" class="philosophy__title_before">
				</div>

				<div class="row">

					<?php if( have_rows('vacancies', 'option')): ?>
							<?php while( have_rows('vacancies', 'option')): the_row(); 
								$vacancies_number = get_sub_field('vacancies_number');
								$vacancies_place = get_sub_field('vacancies_place');
								$vacancies_desc = get_sub_field('vacancies_desc'); ?>

						<div class="col-sm-6 col-lg-3">
							<div class="tables__item">
								<p class= "tables__number"><?php echo $vacancies_number; ?></p>
								<h3><?php echo $vacancies_place; ?></h3>
								<p><?php echo $vacancies_desc; ?></p>
							</div>
						</div>
							<?php endwhile; ?>
						<?php endif; ?>

				</div>
			</div>
		</section>
	<!-- tables-end -->

	<!-- order -->
		<section class="order section" id="order">
			<div class="container order__container">

				<div class="order__bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/order-bg.jpg" alt="">
				</div>

				<div class="order__content">
					<div class="order__title">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="order__title_after">
						<h2 class="wow fadeInUp" data-wow-duration="1s">Reservation</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text2.svg" alt="" class="order__title_before">
					</div>
					<div class="order__tel">
						<a href="tel:">+7 000 123- 24-35</a>
						<br>
						<a href="tel:">+7 000 123- 24-35</a>
					</div>
					<div class="order__place">
						<span>We are located at:</span>
						<p>New York Wall Street 63-83 Broadway</p>
					</div>
				</div>

			</div>
		</section>
	<!-- order-end -->
	
	<!-- reviews -->
		<section class="reviews section" id="reviews">
			<div class="container">
				
				<div class="philosophy__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="philosophy__title_after">
					<h2 class="wow fadeInUp" data-wow-duration="1s">Reviews</h2>
					<p class="philosophy__title_sub-title section__sub-title wow fadeInUp" data-wow-duration="1s">they talk about us</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-sub-title2.svg" alt="" class="philosophy__title_before">
				</div>

				<div class="reviews__slider">
					

						<?php if( have_rows('reviews', 'option')): ?>
							<?php while( have_rows('reviews', 'option')): the_row(); 
								$reviews_name = get_sub_field('reviews_name');
								$reviews_text = get_sub_field('reviews_text'); ?>

							<div class="reviews__item">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews-item.svg" alt="">
								<h3><?php echo $reviews_name; ?></h3>
								<p><?php echo $reviews_text; ?></p>
							</div>

							<?php endwhile; ?>
						<?php endif; ?>

					
				</div>
			</div>
		</section>
	<!-- reviews-end -->

	<!-- gallery -->
		<section class="gallery section" id="gallery">
			<div class="container gallery__container">

				<div class="gallery__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="gallery__title_after">
					<h2 class="wow fadeInUp" data-wow-duration="1s">Gallery</h2>
					<p class="gallery__title_sub-title section__sub-title wow fadeInUp" data-wow-duration="1s">we and our clients</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-decoration.svg" alt="" class="gallery__title_before">
				</div>

				<div class="gallery__slider">

				<?php if( have_rows('gallery', 'option')): ?>
					<?php while( have_rows('gallery', 'option')): the_row(); 
						$gallery_img = get_sub_field('gallery_img'); ?>

					<div class="gallery__slide">
						<div><img src="<?php echo $gallery_img; ?>"></div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>

				</div>
			</div>

		</section>
	<!-- gallery-end -->

	<!-- philosophy -->
		<section class="philosophy section" id="philosophy">
			<div class="container philosophy__container">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax7.png" alt="" class="parallax parallax--seven">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax8.png" alt="" class="parallax parallax--eight">

				<div class="philosophy__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="philosophy__title_after">
					<h2 class="wow fadeInUp" data-wow-duration="1s">Our Philosophy</h2>
					<p class="philosophy__title_sub-title section__sub-title wow fadeInUp" data-wow-duration="1s">the goal and mission of our team</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-sub-title.svg" alt="" class="philosophy__title_before">
				</div>

				<div class="philosophy__list">
					<div class="philosophy__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax1.png" alt="" class="philosophy__item_img">
						<p ><?php the_field("our_philosophy")?>
							
						</p>
					</div>
					<div class="philosophy__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax2.png" alt="" class="philosophy__item_img">
						<p><?php the_field("our_philosophy_2-st_block")?>
							
						</p>
					</div>
					<div class="philosophy__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax5.png" alt="" class="philosophy__item_img">
						<p><?php the_field("our_philosophy_3-st_block")?>
							
					</div>
					<div class="philosophy__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax6.png" alt="" class="philosophy__item_img">
						<p><?php the_field("our_philosophy_4-st_block")?>
							
						</p>
					</div>
					<div class="philosophy__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax3.png" alt="" class="philosophy__item_img">
						<p><?php the_field("our_philosophy_5-st_block")?>
							
						</p>
					</div>
					<div class="philosophy__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax1.png" alt="" class="philosophy__item_img">
						<p><?php the_field("our_philosophy_6-st_block")?>
							
						</p>
					</div>
				</div>

			</div>
		</section>
	<!-- philosophy-end -->

	<!-- contacts -->
		<section class="contacts section" id="contacts">
			<div class="container section__container">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax9.png" alt="" class="parallax--nine">

				<div class="gallery__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/decoration-text.svg" alt="" class="gallery__title_after">
					<h2 class="wow fadeInUp" data-wow-duration="1s">Contact Us</h2>
					<p class="gallery__title_sub-title section__sub-title wow fadeInUp" data-wow-duration="1s">we and our clients</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-sub-title2.svg" alt="" class="gallery__title_before">
				</div>

				<div class="row">
					<div class="order-md-12 col-md-5 col-lg-6">
						<div class="contacts__content">
							<div class="contacts__content_item wow fadeInUp" data-wow-duration="1s">
								<h3>We are located at:</h3>
								<p>New York Wall Street 63-83 Broadway</p>
							</div>
							<div class="contacts__content_item wow fadeInUp" data-wow-duration="1s">
								<h3>Our mail</h3>

								<?php if( have_rows('mail', 'option')): ?>
									<?php while( have_rows('mail', 'option')): the_row(); 
										$email_link = get_sub_field('email_link'); 
										$email_addres = get_sub_field('email_addres');?>

										<a href="mailto:<?php echo $email_link; ?>" target="_blank"><?php echo $email_addres; ?></a> <br>
									<?php endwhile; ?>
								<?php endif; ?>

							</div>
							<div class="contacts__content_item wow fadeInUp" data-wow-duration="1s">
								<h3>Our phone:</h3>

								<?php if( have_rows('contact', 'option')): ?>
									<?php while( have_rows('contact', 'option')): the_row(); 
										$phone = get_sub_field('phone'); 
										$phone_number = get_sub_field('phone_number');?>
										

										<a href="tel:<?php echo $phone; ?>" target="_blank"><?php echo $phone_number; ?></a> <br>


									<?php endwhile; ?>
								<?php endif; ?>

								
								<br>
								
							</div>
						</div>
					</div>

					<div class="order-md-1 col-md-7 col-lg-6">
						<div class="contacts__map" id="map"></div>
					</div>

				</div>

			</div>
		</section>
	<!-- contacts-end -->

<?php get_footer(); ?>