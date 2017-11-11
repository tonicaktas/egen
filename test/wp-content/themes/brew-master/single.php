<?php get_header(); ?>



 <?php if(get_field('bild_undersida')): ?>
  <div class="intro-sub animated fadeIn undersida-img" style="background-image: url('<?php the_field('bild_undersida'); ?>'); background-position: center center; background-size:cover;">
 <?php endif; ?>

 <div class="intro-text">
    <h1 class="animated fadeInUp anim-delay-400"><?php the_title(); ?></h1>
  </div>
 </div>

    <div class="container">

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">
								<div class="titlewrap clearfix">
									<h1 class="single-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard">
										by <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> -
										<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
										<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
									</p>
								</div>

							</header> <?php // end article header ?>

							<section class="featured-content featured-img">

							</section>

							<section class="entry-content single-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
								<?php wp_link_pages(
                                	array(

                                        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
                                        'after' => '</div>'
                                	)
                                ); ?>
							</section> <?php // end article section ?>



						</article> <?php // end article ?>


					<?php if ( is_single() ) {?>
					  <div id="single-post-nav">
					    <ul class="pager">

					      <?php $trunc_limit = 30; ?>

					      <?php if( '' != get_previous_post() ) { ?>
					        <li class="previous">
					          <?php previous_post_link( '<span class="previous-page">%link</span>', __( '<i class="fa fa-caret-left"></i>', 'bones' ) . '&nbsp;' . wp_trim_words( get_previous_post()->post_title, 3 ) ); ?>
					        </li>
					      <?php } // end if ?>

					      <?php if( '' != get_next_post() ) { ?>
					        <li class="next">
					          <?php next_post_link( '<span class="no-previous-page-link next-page">%link</span>', '&nbsp;' . wp_trim_words( get_next_post()->post_title, 3 ) . '&nbsp;' . __( '<i class="fa fa-caret-right"></i>', 'bones' ) ); ?>
					        </li>
					      <?php } // end if ?>

					    </ul>
					  </div><!-- /#single-post-nav -->
					<?php } ?>

          <?php // comments_template(); ?>

					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>

				</div>

        <div id="sidebar" class="col-md-4">
  				<?php get_sidebar(); ?>
        </div>

			</div>

    </div>

<?php get_footer(); ?>
