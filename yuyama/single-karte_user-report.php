<?php get_header(); ?>
<main>
	<article class="doctor">
		<ul class="bread">
			<li><a href="/">トップページ</a></li>
			<li><a href="/doctor/">医師の方へ</a></li>
			<li><a href="/karte_user-report/">電子カルテドクターリポート</a></li>
			<li><?php the_title(); ?></li>
		</ul>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="doctorBody doctor-single">
			<div class="m-container">
				<h1><?php the_title(); ?></h1>
				<div class="doctor-prof">
					<div class="prof-col">
						<div class="prof-text">
							<div class="prof-logo"><img src="/assets/img/logo-brainbox.png" alt=""></div>
							<h2 class="prof-name">
								<?php the_field('doctor-medical'); ?>
							</h2>
							<p class="prof-doctor">
								<em>応対者：<?php the_field('doctor-name'); ?></em><?php the_field('dcotor-place-department'); ?>
							</p>
						</div>
						<div class="prof-image">
							<?php the_post_thumbnail( 'large', array( 'class' => 'object-fit-img' ) ); ?>
						</div>
					</div>
				</div>
				<p class="description"><?php the_field('doctor-description'); ?></p>
				<div class="single-text">
					<?php the_content(); // Dynamic Content ?>
				</div>
			</div>
		</div>
		<div class="doctor-people">
			<div class="m-container">
				<h3>Clinic Profile</h3>
				<p><?php the_field('doctor-information'); ?></p>
				<ul class="people-list list-3col">
					<li><img src="<?php the_field('clinic-photo01'); ?>" alt=""></li>
					<li><img src="<?php the_field('clinic-photo02'); ?>" alt=""></li>
					<li><img src="<?php the_field('clinic-photo03'); ?>" alt=""></li>
				</ul>
			</div>
		</div>
		<footer class="single-pager is-noMargin">
<?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
?>
			<?php if ($prev_post): ?><a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="btn-white is-icon-r"><i><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.svg" width="15" height="10" alt=""></i>前のリポート</a><?php endif; ?>
			<a href="#" class="btn-white is-icon-r"><i><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.svg" width="15" height="10" alt=""></i>リポート一覧に<br>戻る</a>
			<?php if ($next_post): ?><a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="btn-white is-icon">次のリポート<i><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-blue.svg" width="15" height="10" alt=""></i></a><?php endif; ?>
		</footer>
<?php endwhile; ?>
<?php else: ?>

<?php endif; ?>
	</article>
</main>
<?php get_footer(); ?>

