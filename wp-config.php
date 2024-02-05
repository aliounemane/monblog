<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'monblog_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SfN=W7>!:TOgtA7rmxywKKM@Nh|[yrY(qM`2ggoN}V0Pr67n/<BU:&I!m(]ji(Or' );
define( 'SECURE_AUTH_KEY',  '~&: ZWAjBXjijq=CKN-]{D/5A]W}!W:=( ]L[NJ,I3~3>-mhl!2lJV0TwG#dsDO&' );
define( 'LOGGED_IN_KEY',    'PAEOI6D&8XxqN:SO*SV*%b6H7|0>o|#4F^(f,4/H0hJHbp*8CI14B;aGwD[N >XM' );
define( 'NONCE_KEY',        'Y7y#I|j_m_+d#d@1fg ?Zk^?3!z!5aeMU(gw2v<&]QFpuHi^Z&(=V&~rw)3f_RZ~' );
define( 'AUTH_SALT',        '9Hm6m?USL0Uo.MxC:7JZC<t:VLkaE:huW&Y4[`gm/3c,U5ZR+S#qj>)oW>TtS|k7' );
define( 'SECURE_AUTH_SALT', '+St*:eXm8a*t}5{,Oyb3%Zpj#Gcx*r5WJOZ=IT~T_/K|f*Ch-Aqv`QOdq-+Pb|yt' );
define( 'LOGGED_IN_SALT',   'Oi?F@;mVO23^si-|T(-r.{vlE7t?q)Dy>7+hw6jjS{(}u6_FaxkQBL^k*{DqEGxN' );
define( 'NONCE_SALT',       ' S+TXITYuIV=prrDy>x>s`vBVeJL@bE5kkw_3>FL)a*7noevb<9:R^LYfieL!mhU' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
