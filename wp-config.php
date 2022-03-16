<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'activitewordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '8T1R:=]+]<Sew#*Uw <`x[<M8uT&-WG#PW#%@Sh]!dKX!Z`}{hms&Z!{%L3_!I#U' );
define( 'SECURE_AUTH_KEY',  '$tax=UT6UWTAXsz9&7u;+<PX0gJ<sN0^F&pDeUQ8#y!/w*&BJBAecNrWbG;x3rbp' );
define( 'LOGGED_IN_KEY',    'vv7l5$}?)2&YTHZO*;T0Z<$PwYH+X[Q6b91.D=om))^,3>yNP#Pea!txj[}x$za:' );
define( 'NONCE_KEY',        '`GP0oKWCK.>(!@skZf}LH/A_];%Q,aHHAMA80c`tqy0Bo$x<w*wSTzO`V0@aGo[k' );
define( 'AUTH_SALT',        'hqSke!W5AL@_|FFl^_3t|D3}ZS]2Q!Fs?rH^[G0~nd*8AnjO6KzD2dUup~nNUJum' );
define( 'SECURE_AUTH_SALT', 'E+A/sS4veG4$Y/nuFwi#P6n8X)Y/3,[BZtfqk-v<hd+y+ni9>o;RrtcHEfz-6YYI' );
define( 'LOGGED_IN_SALT',   ',Ipj?J8B5]*BoTb=uk[64>$jXS@a@q<f*/-$-UY?=?98rg28{YMSb62h*mR !loJ' );
define( 'NONCE_SALT',       'z*JH5&|9H?:Xsqsq>~n;Fu2gIws;vT~EK(SE=I^C?n82xh{^=%v2I|0-HHyzTHa?' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define( 'WP_ALLOW_REPAIR', true );
