<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<title>
			<?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?>
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=0.85, shrink-to-fit=no">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> 
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>
	

	<!--<script type="text/javascript">
	function changeDeadLine()
	{
		var r = Math.floor(Math.random() * 45);
		var phrase = "";
		
		switch(r)
		{
			case 0:
				phrase = "UN BLOG QU'IL EST BIEN";
			break;
			case 1:
				phrase = "RECOMMANDÉ PAR LES PLUS GRANDES MARQUES DE LAVE-VAISSELLES !";
			break;
			case 2:
				phrase = "UN SITE AVEC DES SOUS-TITRES FAÇON FUTURAMA QUAND TU RECHARGES !";
			break;
			case 3:
				phrase = "\"RAWRGWAWGRR GWWWRGHH\" - CHEWBACCA";
			break;
			case 4:
				phrase = "JE M'APPELLE FUNNY BEAR !!!";
			break;
			case 5:
				phrase = "NE PAS UTILISER DE CSS PERMET D'AVOIR UN SITE EN FLAT DESIGN (MOCHE)";
			break;
			case 6:
				phrase = "EVERYBODY, ROCK YOUR BODY RIGHT, BACKSTREET'S BACK, ALRIGHT";
			break;
			case 7:
				phrase = "JE M'APPELLE INIGO MONTOYA, TU AS TUÉ MON PÈRE, PRÉPARE TOI À MOURIR";
			break;
			case 8:
				phrase = "#BLOG #TECH #GEEK #CINEMA #CHEWBACCA #TROPDEHASHTAGSTUENTLEHASHTAG";
			break;
			case 9:
				phrase = "LA RÉPONSE EST 42, MAIS  QU'ELLE EST LA QUESTION ?";
			break;
			case 10:
				phrase = "ALIMENTAIRE MON CHER WATSON !";
			break;
			case 11:
				phrase = "PLUTÔT QUE DE RECHARGER LA PAGE POUR VOIR LES PHRASES, ALLEZ VOIR LE CODE";
			break;
			case 12:
				phrase = "SATISFAIT OU REMBOURSÉ (MAIS VU QUE C'EST GRATUIT ...)";
			break;
			case 13:
				phrase = "MAISON DE TRADITION DEPUIS 1994";
			break;
			case 14:
				phrase = "OOPS I DID IT AGAIN !";
			break;
			case 15:
				phrase = "TOTO, I'VE A FEELING WE'RE NOT IN KANSAS ANYMORE";
			break;
			case 16:
				phrase = "LA FORCE EST AVEC CE BLOG";
			break;
			case 17:
				phrase = "UN SITE \"AWARE\" SELON JEAN CLAUDE VAN DAMME !";
			break;
			case 18:
				phrase = "DÉCLARÉ SOURCE DE JEUNESSE PAR VOTRE CORPS";
			break;
			case 19:
				phrase = "AUSSI DISPONIBLE SUR LE MINITEL 3615 NANAUD";
			break;
			case 20:
				phrase = "LE BLOG DE L'INTERNET INFORMATIQUE DES ORDINATEURS";
			break;
			case 21:
				phrase = "NOW IN TECHNICOLOR !!!";
			break;
			case 22:
				phrase = "VOTRE DEVICE VA S'AUTO-DÉTRUIRE À LA FIN DE CE MESSAGE";
			break;
			case 23:
				phrase = "PARCE QUE STAR WARS C'EST MIEUX QUE STAR TREK";
			break;
			case 24:
				phrase = "N°1 SUR LE PROTOCOLE TCP/IP ET SES USAGES !";
			break;
			case 25:
				phrase = "MERCI DE NE PAS FUIR EN COURANT";
			break;
			case 26:
				phrase = "AVEC DE VRAI MORCEAUX DE NANAUD DEDANS !";
			break;
			case 27:
				phrase = "TAPEZ CECI DANS UN TERMINAL \":(){ :|:& };:\" (OU PAS)";
			break;
			case 28:
				phrase = "SUDO APT-GET INSTALL NANAUD";
			break;
			case 29:
				phrase = "TU VEUX ÊTRE MON AMI ?";
			break;
			case 30:
				phrase = "ON THE INTERNET, THE NSA KNOWS YOU ARE A DOG !";
			break;
			case 31:
				phrase = "LOREM IPSUM DOLOR SIT AMET";
			break;
			case 32:
				phrase = "INCLUDE NANAUD.H";
			break;
			case 33:
				phrase = "LES WOOKIES VAINCRONT !";
			break;
			case 34:
				phrase = "PLUS FORT QUE ZOMBO.COM !";
			break;
			case 35:
				phrase = "EN ATTENTE D'UNE OFFRE DE RACHAT À 3 MILLIARDS DE DOLLARS";
			break;
			case 36:
				phrase = "UN BLOG PLUTÔT CHAT QUE CHIEN";
			break;
			case 37:
				phrase = "SUPERCALIFRAGILISTICEXPIALIDOCIOUS !!!";
			break;
			case 38:
				phrase = "OU ARNAUD DUPONT DANS LA VRAI VIE";
			break;
			case 39:
				phrase = "N°1 EN BIELORUSSIE";
			break;
			case 40:
				phrase = "LE PLUS BEAU SELON SA MAMAN";
			break;
			case 41:
				phrase = "I DON'T FEEL LIKE DANCIN'";
			break;
			case 42:
				phrase = "IS IN THE PLACE !";
			break;
			case 43:
				phrase = "NE LIS PAS CE BLOG, SINON VOILÀ CE QUI VA SE PASSER ! ...";
			break;
			case 44:
				phrase = "NOS AUTEURS NE SONT PAS DES BOTS";
			break;
		}
		document.getElementById(id='deadline').innerHTML = phrase;
	}
	
	function adaptWidth()
	{
		if(document.body.clientWidth <= 600)
		{
			document.getElementById(id='annot').innerHTML = "<a href='http://nanaud.fr/' style='font-size:80px;'>+</a>";
		}
	}
	</script>-->



	</head>

	<body>

		<!--HEADER-->
		<?php get_header(); ?>

		<!--CONTENT-->
		<div id='body'>
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div id='article'>
					<h2><?php the_time('j M Y') ?> - par <?php the_author() ?></h2>
					<hr/><h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1><hr/>
            		<?php the_post_thumbnail( array(700,200) ) ;?>

            		<div id='content'>
            			<p><?php the_excerpt(); ?></p>
            		</div>

            		<div id="comment">
            			<hr/><span id='ajouter'><?php the_category(', ') ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php comments_popup_link('Pas de Commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' - ', ''); ?></span><hr/>
            			<br/>
            		</div>

				</div>
			<?php endwhile; ?>
			<?php else : ?> <div id='body'><div id='article'><h1>Il faudrait Arrêter de chercher n'importe quoi !</h1> <div id='content'><p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici. A moins que vous ne veniez du futur et soyez en train de chercher un article pas encore publié. Dans ce cas, il vous suffira de recharger la page un peu plus tard, elle finira bien par être publiée.<?php include (TEMPLATEPATH . "/searchform.php"); ?></p></div></div></div>
		<?php endif; ?>
		</div>

		<!--SIDEBAR-->
		<?php get_sidebar(); ?>

		<!--FOOTER-->
		<?php get_footer(); ?>

	</body>
</html>