<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'bdtrump');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'adrian');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'trump@2017');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '55#pjNW5;gkO_S/xR<Cj Su^1}@N8CGu|4+_OBgi:ob{W0F2[:z2~*VsDg<:%L4{');
define('SECURE_AUTH_KEY',  '[.6:>FBC.}fl(cWf3K,9RQG~O6QF*8!;WRKGxY6pcuK y+r,uqI%/(!]6E4ZyE0X');
define('LOGGED_IN_KEY',    'p/RHWBGO-ae1-a0FwKR]uoLM7hlgpM1-|/g!|MIy9Id<z)t`sj-sbo}:ffBJ&.2a');
define('NONCE_KEY',        'xf`>(aL=(U^QlYJ#iWY;K.nzKV{]vpxr)QFJ4)Sz+,3<%oVLQ2wcLIgp4Gfjt&u%');
define('AUTH_SALT',        '&B6=Bxc*}Tz$+I&X{)+qvva4 RTHAc(5jkbWL`IfK]7`_J4J+>7Ili%g(vdhnc}G');
define('SECURE_AUTH_SALT', ',Qh^qPR;Lk$`$A5=Hu29%$X9p!gsLbRHxL.z-)n^<FTNE_Sm)e8`<T]bD?pi~?Gg');
define('LOGGED_IN_SALT',   '=#gA-DjU@Ab.ffY]o)|`HTTs{Ig0)>l!n&}ZZa6I34q q+~8#>2LjgI<C[Pb8whQ');
define('NONCE_SALT',       'gFCKM[>m6d8g;Dxr;u}{9O]iij?-?<&hWXy8wu[R`vb2gU*#ZdgL:Dn:}>Vwlr~`');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
