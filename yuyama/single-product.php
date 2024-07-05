<?php get_header(); ?>
<main>
	<article class="product">
		<ul class="bread">
			<li><a href="/">トップページ</a></li>
			<li><a href="#">製品情報</a></li>
			<li><a href="#">自動薬剤ピッキング装置</a></li>
			<li><?php the_title(); ?></li>
		</ul>
		<header class="productHeader">
			<div class="header-text">
				<h1><?php the_field('product-name'); ?></h1>
				<p><?php the_field('product-catch'); ?></p>
			</div>
			<div class="header-image">
				<div class="productheader__slider">
					<?php if(get_field('product-image01')): ?><div><img src="<?php the_field('product-image01'); ?>" alt=""></div><?php endif; ?>
					<?php if(get_field('product-image02')): ?><div><img src="<?php the_field('product-image02'); ?>" alt=""></div><?php endif; ?>
					<?php if(get_field('product-image03')): ?><div><img src="<?php the_field('product-image03'); ?>" alt=""></div><?php endif; ?>
				</div>
			</div>
		</header>
		<section class="productBody">
			<div class="m-container">
				<div class="product__catalog">
					<?php if(get_field('product-pdf')): ?><a href="<?php the_field('product-pdf'); ?>" target="_blank" class="btn-white is-icon">カタログダウンロード<i><img src="<?php echo get_template_directory_uri(); ?>/img/icon-pdf.svg" width="15" height="20" alt=""></i></a><?php endif; ?>
					<?php if(get_field('product-webcatalog')): ?><a href="<?php the_field('product-webcatalog'); ?>" target="_blank" class="btn-white is-icon">Webカタログを見る<i><img src="<?php echo get_template_directory_uri(); ?>/img/icon-window.svg" width="15" height="13" alt=""></i></a><?php endif; ?>
				</div>
				<?php if(get_field('product-movie01')): ?>
				<div class="product__movie">
					<div class="movie-item">
						<div class="movie-image">
							<img src="http://img.youtube.com/vi/<?php the_field('product-movie01'); ?>/sddefault.jpg" alt="">
						</div>
						<button class="js-modal-btn" data-video-id="<?php the_field('product-movie01'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-play.svg" width="55" height="55" alt=""><br>動画を再生する</button>
					</div>
					<?php if(get_field('product-movie02')): ?>
					<div class="movie-item">
						<div class="movie-image">
							<img src="http://img.youtube.com/vi/<?php the_field('product-movie02'); ?>/sddefault.jpg" alt="">
						</div>
						<button class="js-modal-btn" data-video-id="<?php the_field('product-movie02'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-play.svg" width="55" height="55" alt=""><br>動画を再生する</button>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<div class="product__logo">
					<a href="#" target="_blank"><img src="<?php the_field('product-logo'); ?>" alt=""></a>
				</div>
				<nav class="product__nav">
					<ul>
						<li><a href="#feature">製品の特徴</a></li>
						<li><a href="#spec">製品の仕様</a></li>
						<li><a href="#report">ユーザーリポート</a></li>
					</ul>
				</nav>
				<section id="feature" class="product__info">
					<h2>製品の特徴</h2>
					<?php if(get_field('product-feature')): ?>
					<?php while(the_repeater_field('product-feature')): ?>
					<div class="product-col">
						<h3><?php the_sub_field('feature-title'); ?></h3>
						<div class="col-text">
							<?php the_sub_field('feature-text'); ?>
						</div>
						<div class="col-image">
							<img src="<?php the_sub_field('feature-image'); ?>" alt="">
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</section>
				<section id="spec" class="product__info">
					<h2>製品の仕様</h2>
					<table class="spec-table">
					<?php if(get_field('product-spec')): ?>
					<?php while(the_repeater_field('product-spec')): ?>
						<tr>
							<th><?php the_sub_field('spec-title'); ?></th>
							<td><?php the_sub_field('spec-info'); ?></td>
						</tr>
					<?php endwhile; ?>
					<?php endif; ?>
					</table>
				</section>
				<section id="report" class="product__info">
					<h2>ユーザーリポート</h2>
					<p class="description">こちらの製品をご活⽤いただいているお客様の事例をご紹介します。<br>製品の魅⼒や可能性についての⽣の声を、ぜひご覧ください。</p>
					<div class="report__col">
						<div class="report-box">
							<a href="#">
								<div class="box-image">
									<img src="<?php echo get_template_directory_uri(); ?>/img/report-dummy.jpg" alt="">
								</div>
								<div class="box-text">
									<h3>計数調剤の負担<br>大幅削減-安全・<br>スピーディに集薬</h3>
									<p class="name">クオール薬局恵比寿店様</p>
								</div>
							</a>
						</div>
					</div>
				</section>
			</div>
		</section>
		<footer class="product__showroom">
			<div class="m-container">
				<h2>ショールームのお申込み</h2>
				<p class="description">実際に製品を操作しながら特徴などをご説明いたします。</p>
				<div class="showroom-col">
					<div class="showroom-box">
						<h3>完全予約制<br>平⽇<strong>9:00-18:00</strong></h3>
						<p>※上記時間帯以外をご希望の⽅は<br>別途担当営業よりご連絡させていただきます。</p>
					</div>
					<div class="showroom-box">
						<a href="#" class="btn-main is-icon">ショールームを申し込む<i><img src="<?php echo get_template_directory_uri(); ?>/img/icon-mail-white.svg" width="20" height="13" alt=""></i></a>
					</div>
				</div>
			</div>
		</footer>
	</article>
</main>
<?php get_footer(); ?>

