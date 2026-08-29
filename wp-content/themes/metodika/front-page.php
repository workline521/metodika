<?php get_header(); ?>

<section class="hero">
	<div class="container">
		<div class="hero__text">
			<h1><?php the_field('hero_title'); ?></h1>
			<div class="hero__desc"><?php the_field('hero_description'); ?></div>
			<div class="hero__note"><?php the_field('hero_note'); ?></div>
		</div>
		<div class="hero__img">
			<?php
			$image = get_field('hero_image');
			if ($image) {
				echo wp_get_attachment_image($image, 'full', false, array('alt' => ''));
			} else {
				echo '<img src="' . get_template_directory_uri() . '/assets/img/pic.png" alt="pic">';
			}
			?>
		</div>
		<div class="hero__row">
			<div class="hero__cards">
				<!-- Карточка 1 -->
				<div class="hero__card">
					<div class="hero__card-txt"><?php the_field('card_1_label'); ?></div>
					<div class="hero__card-title"><?php the_field('card_1_title'); ?></div>
					<div class="hero__card-desc"><?php the_field('card_1_desc'); ?></div>
					<div class="hero__card-nav">
						<?php
						$btn1 = get_field('card_1_btn1');
						if ($btn1): ?>
							<a href="<?php echo esc_url($btn1['url']); ?>" class="btn btn--blue"><?php echo esc_html($btn1['title']); ?></a>
						<?php endif; ?>
						<?php
						$btn2 = get_field('card_1_btn2');
						if ($btn2): ?>
							<a href="<?php echo esc_url($btn2['url']); ?>" class="btn btn--outline"><?php echo esc_html($btn2['title']); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<!-- Карточка 2 -->
				<div class="hero__card">
					<div class="hero__card-txt"><?php the_field('card_2_label'); ?></div>
					<div class="hero__card-title"><?php the_field('card_2_title'); ?></div>
					<div class="hero__card-desc"><?php the_field('card_2_desc'); ?></div>
					<div class="hero__card-nav">
						<?php
						$btn1 = get_field('card_2_btn1');
						if ($btn1): ?>
							<a href="<?php echo esc_url($btn1['url']); ?>" class="btn btn--blue btn--svg"><?php echo esc_html($btn1['title']); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="hero__info">
				<div class="hero__info-item"><?php the_field('info_1'); ?></div>
				<div class="hero__info-item"><?php the_field('info_2'); ?></div>
			</div>
		</div>
		<div class="hero__items">
			<?php for( $i = 1; $i <= 4; $i++ ) : 
				$item = get_field( 'item_' . $i );
				if( $item ) :
					$title = $item['title'] ?? '';
					$text  = $item['text'] ?? '';
					$svg   = $item['svg'] ?? '';
					// Если все три поля пусты, можно пропустить вывод
					if( ! empty( $title ) || ! empty( $text ) || ! empty( $svg ) ) :
				?>
				<div class="hero__item">
					<?php if( $svg ) : ?>
						<div class="hero__item-svg"><?php echo $svg; ?></div>
					<?php endif; ?>
					<div class="hero__item-title"><?php echo esc_html( $title ); ?></div>
					<div class="hero__item-txt"><?php echo esc_html( $text ); ?></div>
				</div>
				<?php 
					endif;
				endif;
			endfor; 
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>