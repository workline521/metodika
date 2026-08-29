<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Metodika
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<div class="container">
	<div class="header__top">
		<a href="/" class="header__logo">
		<img
			src="/assets/img/logo.png"
			alt="pic"
		/></a>
		<div class="header__wrapper">
		<div class="header__info">
			<div class="header__social">
			<a
				href="https://wa.com"
				target="_blank"
				rel="noopener"
				class="header__social-link social-wa"
			>
				<svg width="34" height="34" viewBox="0 0 34 34" fill="none">
				<path
					d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z"
					fill="white"
				></path>
				<path
					d="M17.0273 5H16.9727C10.3603 5 5 10.3603 5 16.9727V17.0273C5 23.6397 10.3603 29 16.9727 29H17.0273C23.6397 29 29 23.6397 29 17.0273V16.9727C29 10.3603 23.6397 5 17.0273 5Z"
					fill="#40CD4A"
				></path>
				<path
					d="M19.3387 20.5101C16.2671 20.5101 13.7682 18.0103 13.7673 14.9387C13.7682 14.1601 14.4022 13.5269 15.1791 13.5269C15.259 13.5269 15.338 13.5336 15.4137 13.5471C15.5802 13.5748 15.7382 13.6312 15.8837 13.7161C15.9047 13.7287 15.919 13.7489 15.9224 13.7724L16.2469 15.8182C16.2511 15.8426 16.2436 15.8661 16.2276 15.8838C16.0485 16.0822 15.8198 16.2252 15.565 16.2966L15.4423 16.3311L15.4885 16.4497C15.9072 17.5158 16.7599 18.3676 17.8269 18.788L17.9454 18.8351L17.9799 18.7124C18.0514 18.4576 18.1943 18.2289 18.3928 18.0498C18.4071 18.0363 18.4264 18.0296 18.4457 18.0296C18.4499 18.0296 18.4541 18.0296 18.4592 18.0304L20.5049 18.355C20.5293 18.3592 20.5495 18.3727 20.5621 18.3937C20.6462 18.5391 20.7025 18.6981 20.7311 18.8645C20.7446 18.9385 20.7505 19.0167 20.7505 19.0983C20.7505 19.8761 20.1173 20.5092 19.3387 20.5101Z"
					fill="#FDFDFD"
				></path>
				<path
					d="M24.7858 16.3261C24.6202 14.4544 23.7625 12.718 22.3709 11.4374C20.9709 10.1493 19.1547 9.43961 17.2553 9.43961C13.0864 9.43961 9.69447 12.8315 9.69447 17.0004C9.69447 18.3996 10.0804 19.7626 10.8111 20.9498L9.18155 24.557L14.3989 24.0012C15.3062 24.3729 16.2664 24.5612 17.2544 24.5612C17.5142 24.5612 17.7808 24.5478 18.0482 24.52C18.2836 24.4948 18.5216 24.4578 18.7553 24.4107C22.2465 23.7052 24.795 20.6068 24.8152 17.0408V17.0004C24.8152 16.7734 24.8051 16.5464 24.785 16.3261H24.7858ZM14.5999 22.4179L11.7133 22.7257L12.5752 20.8161L12.4028 20.5849C12.3902 20.5681 12.3776 20.5513 12.3633 20.5319C11.6149 19.4985 11.2197 18.2776 11.2197 17.0012C11.2197 13.6732 13.9272 10.9657 17.2553 10.9657C20.3731 10.9657 23.0158 13.3983 23.2706 16.5035C23.2841 16.67 23.2916 16.8373 23.2916 17.0021C23.2916 17.0492 23.2908 17.0954 23.2899 17.145C23.226 19.929 21.2812 22.2935 18.5602 22.8955C18.3526 22.9418 18.1398 22.9771 17.9279 22.9998C17.7076 23.025 17.4815 23.0376 17.2569 23.0376C16.4573 23.0376 15.6804 22.8829 14.9463 22.5768C14.8648 22.544 14.7849 22.5087 14.71 22.4726L14.6007 22.4196L14.5999 22.4179Z"
					fill="#FDFDFD"
				></path>
				</svg>
			</a>
			<a
				href="https://tg.com"
				target="_blank"
				rel="noopener"
				class="header__social-link social-tg"
			>
				<svg width="34" height="34" viewBox="0 0 34 34" fill="none">
				<path
					d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z"
					fill="white"
				></path>
				<path
					d="M17.0273 5H16.9727C10.3603 5 5 10.3603 5 16.9727V17.0273C5 23.6397 10.3603 29 16.9727 29H17.0273C23.6397 29 29 23.6397 29 17.0273V16.9727C29 10.3603 23.6397 5 17.0273 5Z"
					fill="#00B0F2"
				></path>
				<path
					d="M9.54537 16.591C9.57901 16.5741 9.61266 16.5582 9.64545 16.543C10.2155 16.279 10.7932 16.0318 11.37 15.7846C11.4011 15.7846 11.4532 15.7484 11.4827 15.7367C11.5272 15.7173 11.5718 15.6988 11.6164 15.6795L11.8728 15.5693C12.0444 15.4962 12.215 15.423 12.3866 15.3499C12.7288 15.2036 13.071 15.0573 13.4132 14.9101C14.0977 14.6175 14.783 14.3241 15.4674 14.0315C16.1518 13.7388 16.8371 13.4454 17.5216 13.1528C18.206 12.8602 18.8913 12.5667 19.5757 12.2741C20.2602 11.9815 20.9455 11.688 21.6299 11.3954C21.7821 11.3298 21.9469 11.2323 22.11 11.2037C22.2471 11.1793 22.3807 11.1323 22.5186 11.1062C22.7801 11.0566 23.0686 11.0364 23.3191 11.1449C23.4057 11.1827 23.4856 11.2357 23.552 11.3021C23.8699 11.6166 23.8253 12.1328 23.758 12.5751C23.2897 15.6576 22.8213 18.741 22.3522 21.8235C22.2883 22.2464 22.2008 22.7106 21.867 22.978C21.5845 23.2041 21.1826 23.2294 20.8336 23.1335C20.4847 23.0368 20.1769 22.8342 19.8751 22.6349C18.6231 21.8058 17.3702 20.9768 16.1182 20.1477C15.8206 19.9509 15.4893 19.6936 15.4926 19.3363C15.4943 19.121 15.6229 18.9293 15.7541 18.7586C16.8422 17.3393 18.412 16.3639 19.5799 15.0102C19.7447 14.8193 19.8742 14.4746 19.648 14.3644C19.5135 14.2988 19.3588 14.388 19.236 14.4729C17.6922 15.545 16.1493 16.6179 14.6055 17.6899C14.1019 18.0397 13.5738 18.3996 12.9668 18.4854C12.4236 18.5627 11.877 18.4114 11.3515 18.2567C10.9109 18.1272 10.4711 17.9943 10.0331 17.8573C9.80015 17.785 9.55967 17.7068 9.37973 17.5428C9.19979 17.3788 9.09638 17.103 9.20485 16.8844C9.27296 16.7474 9.40497 16.6608 9.54371 16.5901L9.54537 16.591Z"
					fill="#FEFFFC"
				></path>
				</svg>
			</a>
			</div>
			<div class="header__contacts">
			<div class="header__phone">
				<a href="tel:+74958590051">
				+7 (495) 859-00-51
				<svg width="23" height="23" viewBox="0 0 23 23" fill="none">
					<path
					d="M21.8591 17.4434L16.7778 12.8234C16.5377 12.605 16.2221 12.4886 15.8976 12.4986C15.5732 12.5086 15.2653 12.6444 15.0391 12.8771L12.0478 15.9534C11.3278 15.8159 9.8803 15.3646 8.39035 13.8784C6.90035 12.3871 6.4491 10.9359 6.31535 10.2209L9.38905 7.22838C9.62218 7.00228 9.75805 6.6944 9.76805 6.36988C9.77805 6.04536 9.66143 5.72968 9.4428 5.48961L4.8241 0.409614C4.6054 0.168814 4.30145 0.022751 3.97679 0.00243854C3.65213 -0.0178615 3.33235 0.0891888 3.08535 0.300864L0.372852 2.62711C0.15674 2.84401 0.0277525 3.13269 0.0103525 3.43836C-0.00839755 3.75086 -0.365897 11.1534 5.3741 16.8959C10.3816 21.9021 16.6541 22.2684 18.3816 22.2684C18.6341 22.2684 18.7891 22.2609 18.8303 22.2584C19.1361 22.2413 19.4246 22.1118 19.6403 21.8946L21.9653 19.1809C22.1779 18.9346 22.2857 18.6151 22.2658 18.2905C22.2461 17.9659 22.1001 17.6619 21.8591 17.4434Z"
					fill="#EAF1F6"
					></path>
				</svg>
				</a>
			</div>
			<div class="header__hours">Пн–Пт: 09:00–18:00</div>
			</div>
		</div>
		<div class="header__consult-btn">
			<button class="btn btn--red" data-modal="consult">
			Бесплатная консультация
			</button>
		</div>
		<button
			class="header__burger"
			aria-controls="primary-menu"
			aria-expanded="false"
		>
			<svg
			class="burger-icon"
			xmlns="http://www.w3.org/2000/svg"
			width="26"
			height="18"
			viewBox="0 0 26 18"
			fill="none"
			>
			<path
				class="burger-line line-1"
				d="M1.5 1.5H24"
				stroke="#EAF1F6"
				stroke-width="3"
				stroke-linecap="round"
				stroke-linejoin="round"
			></path>
			<path
				class="burger-line line-2"
				d="M1.5 9.00003H24"
				stroke="#EAF1F6"
				stroke-width="3"
				stroke-linecap="round"
				stroke-linejoin="round"
			></path>
			<path
				class="burger-line line-3"
				d="M1.5 16.5H24"
				stroke="#EAF1F6"
				stroke-width="3"
				stroke-linecap="round"
				stroke-linejoin="round"
			></path>
			</svg>
			<span class="screen-reader-text">Меню</span>
		</button>
		</div>
	</div>
	<div class="header__bottom">
		<ul id="primary-menu" class="menu">
		<li
			id="menu-item-52"
			class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52"
		>
			<a href="#">Услуги</a>
			<ul class="sub-menu">
			<li
				id="menu-item-39"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"
			>
				<a href="https://dev24.free.nf/rvp/"
				>РВП
				<span class="menu-item-description"
					>Разрешение на временное проживание</span
				></a
				>
			</li>
			<li
				id="menu-item-40"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"
			>
				<a href="https://dev24.free.nf/vnzh/"
				>ВНЖ
				<span class="menu-item-description"
					>Вид на жительство, бессрочный</span
				></a
				>
			</li>
			<li
				id="menu-item-41"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"
			>
				<a href="https://dev24.free.nf/citizen/"
				>Гражданство РФ
				<span class="menu-item-description"
					>Общий и упрощенный порядок</span
				></a
				>
			</li>
			<li
				id="menu-item-42"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"
			>
				<a href="https://dev24.free.nf/repatriation/"
				>Репатриация
				<span class="menu-item-description"
					>Программа возвращения соотечественников</span
				></a
				>
			</li>
			<li
				id="menu-item-43"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"
			>
				<a href="https://dev24.free.nf/deport/"
				>Запрет на въезд и депортация
				<span class="menu-item-description"
					>Обжалование и снятие ограничений</span
				></a
				>
			</li>
			<li
				id="menu-item-44"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"
			>
				<a href="https://dev24.free.nf/consult/"
				>Консультация миграционного юриста
				<span class="menu-item-description"
					>Разбор ситуации и план действий</span
				></a
				>
			</li>
			<li
				id="menu-item-51"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"
			>
				<a href="https://dev24.free.nf/service/">Все услуги и цены</a>
			</li>
			</ul>
		</li>
		<li
			id="menu-item-45"
			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"
		>
			<a href="https://dev24.free.nf/employers/">Работодателям</a>
		</li>
		<li
			id="menu-item-46"
			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"
		>
			<a href="https://dev24.free.nf/about/">О нас</a>
		</li>
		<li
			id="menu-item-47"
			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"
		>
			<a href="https://dev24.free.nf/base/">База знаний</a>
		</li>
		<li
			id="menu-item-48"
			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"
		>
			<a href="https://dev24.free.nf/reviews/">Отзывы</a>
		</li>
		<li
			id="menu-item-49"
			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"
		>
			<a href="https://dev24.free.nf/contact/">Контакты</a>
		</li>
		</ul>
		<div class="header__rating">
		<span class="stars">
			<span class="star full">★</span><span class="star full">★</span
			><span class="star full">★</span><span class="star full">★</span
			><span class="star full">★</span>
		</span>
		<span class="rating-value">4.8</span>
		<span class="rating-text">на Яндекс.Картах и 2ГИС </span>
		</div>
	</div>
	</div>
</header>
<main>