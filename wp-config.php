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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ma_base_2' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#oBd,*787(TLIL=7}6~4eI#AOv +0T: Xl5pO/fK+O2tA5e)}GTqk^4;gUg;S! t' );
define( 'SECURE_AUTH_KEY',  'A[<5jKG(~G]dwBj=)XXzu,CJ2?26rmkGoc.dYCusCd0A7-oX0 E$Oxto4xx_n;9v' );
define( 'LOGGED_IN_KEY',    'iQTtEw$i+|hS*Z|V+G^b2/$lDCN/A_wgA/Eupq2qdSS2ST_b[,uT$^Fr]%Hlx]pR' );
define( 'NONCE_KEY',        '%H^;T2Y.1x4d9RHVZ:5ds[g;lQB3[btcdq,P-A+[4~,/C_s1!wF[]?T/AM6vT<)_' );
define( 'AUTH_SALT',        'X#?:08UU<+obs/t4&W[I.&c>sH:!`ae#LWI[iQ*J4^swPN8jt7v@YI(3@x2;;s5!' );
define( 'SECURE_AUTH_SALT', 'pGfJ=/&w(95]vSWsvx;y]$jkEo?Q q~-W)e1{}iZ?4R#I_RX `20q2$+|T1U}07l' );
define( 'LOGGED_IN_SALT',   '@T`iws-~5<Kbnhc;Q-J.{{:j}DJgHzzSIUn6wfsMDd!?wGFC:(/h>rq2X TI&*$I' );
define( 'NONCE_SALT',       'pj+7r1B6: ##:WB)zDn58%lf BfwZ@l<fNUBOo|@FVMDyTbn3Aeqi24JL9r@/MXD' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
