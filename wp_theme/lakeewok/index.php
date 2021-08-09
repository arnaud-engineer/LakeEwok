<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head profile="http://gmpg.org/xfn/11">

		<title>
			<?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
		</title>


		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> 
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php
			wp_head();
			wp_get_archives('type=monthly&format=link');
			//comments_popup_script(); <?php wp_head();
			wp_footer();//espace admin
		?>

	</head>

	<body>

		<!--HEADER-->
		<?php get_header(); ?>

		<!--CONTENT-->
		<div id='body'>
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div id='article'>
					<h2><?php the_time('j M Y') ?> - <?php the_author() ?></h2>
					<hr/><h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1><hr/>
            		<?php the_post_thumbnail( array(700,200) ) ;?>

            		<div id='content'>
            			<p><?php the_content(); ?></p>
            		</div>

            		<div id="comment">
            			<hr/><span id='ajouter'><?php the_category(', ') ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php comments_popup_link('Pas de Commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' - ', ''); ?></span><hr/>
            			<br/>
            		</div>

				</div>
			<?php endwhile; ?>

			<div id="navigation">
				<hr/>
				<?php posts_nav_link(' - ','Précédant','Suivant'); ?>
				<hr/>
			</div>


		<?php else : ?> <div id='body'><div id='article'><h1>La Seule, la Vraie : l'Erreur 404</h1> <div id='content'><p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici.
			Enfin, il semblerait parce que si vous vouliez une page 404 c'est carrement gagné, je dirai même félicitation. <?php include (TEMPLATEPATH . "/searchform.php"); ?></p></div></div></div>
		<?php endif; ?>
		</div>

		<!--SIDEBAR-->
		<?php get_sidebar(); ?>

		<!--FOOTER-->
		<?php get_footer(); ?>

	</body>
</html>