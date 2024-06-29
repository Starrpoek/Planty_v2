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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'l9qS%{wd/H}qQm:=0lt?w/>]rb7A(Hs8bj?7!R=dTo=EN]oq>v-!ZCz,Wkr]{vof' );
define( 'SECURE_AUTH_KEY',  'BhE1[YMfN jFQx[b&_)e/ !$OWZQ`aNkkEzE6$KH.RRQ<,yMmYq=l!wsXg+zu{sz' );
define( 'LOGGED_IN_KEY',    'u!W455zY$~Y5@||rimmQ^d,OCu,WvCY$5_`N,$fx/DZ_VyO#&Xapi<mP.eSX_;|]' );
define( 'NONCE_KEY',        'LhyvON)DtLiW{jbDfQcg!mLn3a5Dr^7ed$GnP7mLCCLm{[s+gKdC6>fA(-lK,3Br' );
define( 'AUTH_SALT',        'o]yIviwm--a,7H0ZxBdr9a]SuIl=$H*Y8%X4Nl-bnNSH$q7PvHb,HyfB!$%pH+N~' );
define( 'SECURE_AUTH_SALT', '8?J$`v&6Uh<oL?[fho>Y^R/lm;+Xewg;xCokt;,xaVXp5p5T]%@R+V0xbdEuM$8u' );
define( 'LOGGED_IN_SALT',   'i]*PU/< e_L#28f8_~9p.TSf,>{obvJit$pmJ[B|p9Z>7v(`1@4ys0)/JJPO ~?k' );
define( 'NONCE_SALT',       'o]jHRg=GeTq/NhG<>lGp{4RFXN+68iaE6J?fsct_{qo[tC 7L8z[-8ti{82tCJtB' );
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
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
