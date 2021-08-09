<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*ln_eH]Z8}6?2ldpZlaE+wz>+%0a2@KD+q9~8Fyr4MKjI),I+&#&nznw>%^p0O@=');
define('SECURE_AUTH_KEY',  'P8rD s5Zr_s|&ypsr{-S@Akx1R_mUPEiNf4VOS*`0s`v/=XF[5gUl0^su;dF|zuJ');
define('LOGGED_IN_KEY',    'W;Qi4YM#y-{8$|c-a4&,,>fS9U~goaJ:b[9HcE!@}/z`D1EP+k2bhd3Ix>5nw~IL');
define('NONCE_KEY',        '@P-PQeL[a4D$|DLuWJ2 5nc)?^03kjC=QDxJdCDyoq75%7O :>~2NQwIliSr%|8w');
define('AUTH_SALT',        '6||Do=+b.!3m#oWzEzIB!ao+9GbDRsd3uM;2v0+/?-|3sqA~P=lrzo)(S hEf6/3');
define('SECURE_AUTH_SALT', 'sciN|o$aY@oc-6u8jYHTke2kFq)8|H6@wj.gKm#S&P&@wp1A)j:EuxM>]UVYn(yN');
define('LOGGED_IN_SALT',   'H@cK1}Sy&v b1*f#P;_:vcaSra^ctMAg`~{u+Bn,GdV)7QmTC`B8.-eo}0f#=8,k');
define('NONCE_SALT',       'cO/8[lVx+M6V}mdl?tAoya%;4HfNcXKhVO_w:vizSlw2!8aUnuDQd.IK7HER)B{6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');