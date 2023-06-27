	<!-- header -->
	<header class="header">
			<div class="container header__container">
		
				<a href="index.html" class="header__logo">
					<img src="<?php the_field("logo", "option")?>" alt="logo">
				</a>

				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>

				<nav class="nav click">
					<ul>
						<li><a href="#hero">Main</a></li>
						<li><a href="#menu">Menu</a></li>
						<li><a href="#ingredients">Ingredients</a></li>
						<li><a href="#order">Reservation</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#contacts">Contacts</a></li>
					</ul>
				</nav>

				<div class="header__soc">
				<?php if( have_rows('social', 'option')): ?>
					<?php while( have_rows('social', 'option')): the_row(); 
						$link = get_sub_field('link');
						$img = get_sub_field('img');
						?>

						<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $img; ?>" alt=""></a>

					<?php endwhile; ?>
				<?php endif; ?>
				
				</div>

			</div>
		</header>