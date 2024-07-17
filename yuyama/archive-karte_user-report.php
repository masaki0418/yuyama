<?php get_header(); ?>
<main>
	<article class="doctor">
		<ul class="bread">
			<li><a href="/">トップページ</a></li>
			<li><a href="/doctor/">医師の方へ</a></li>
			<li>電子カルテドクターリポート</li>
		</ul>
		<header class="subPageHeader">
			<h1>電子カルテドクターリポート</h1>
		</header>
		<div class="doctorBody">
			<div class="ms-container">
				<p class="description">
					<?php the_field('doctor-description'); ?>
				</p>
				<div class="btn-long">
					<a href="/doctor/inquiry/" class="btn-main is-center">資料請求はこちら</a>
				</div>
				<div class="doctorBlock">
					<ul class="cards-3col">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<li>
							<div class="cards-image">
								<img src="https://placehold.jp/500x350.png" alt="">
								<i>7</i>
							</div>
							<div class="cards-text">
								<h2><?php the_title(); ?></h2>
								<p><em><?php the_field('doctor-medical'); ?>　<?php the_field('doctor-name'); ?></em><br><?php the_field('dcotor-place-department'); ?></p>
								<div class="cards-logo">
									<img src="<?php the_field('doctor-logo'); ?>" alt="">
								</div>
								<div class="btn-center">
									<a href="<?php the_permalink(); ?>" class="btn-main is-arrow">詳細を見る</a>
								</div>
							</div>
						</li>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</article>
</main>
<?php get_footer(); ?>