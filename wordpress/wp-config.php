<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'my_wedding' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%P(sAP::o<=%tW[O>sf6lbf:|_w^:v-`..w9Yf &(qN9*sJ*36i<p9MJc1Z!#t_L' );
define( 'SECURE_AUTH_KEY',  'g;6n-MDj~>uWWW[1haU#A*lo_xw_dn_ ]%A)<cesU/lB9JmjB%aBHjM#I)&#5Kj>' );
define( 'LOGGED_IN_KEY',    'b0al&YbO$cxM@xA?Mg|5.[ggoHM}!=U`bc:G+L-m(V`+)Oe8g#m0+>-:RP,Ar1Rn' );
define( 'NONCE_KEY',        'eD>kLBiDDQYDB0_VlW$S(= 9F8bTU$U^AMEr28_hPMD<[tQ@R(%Q_?>hvL#xSO:Q' );
define( 'AUTH_SALT',        'WwK~wt5b:nQw6kKZwn>3 !KAZQW~_g$sTHD /O=Qg,i9#,<Lq<l;HQ20Sdkw4x;z' );
define( 'SECURE_AUTH_SALT', '/e@HSdXol`I5gK9&2!FsXcP9!lg_7Q[AOGmBz#f`NQQy2d9&qAvA9kl,KDs37C28' );
define( 'LOGGED_IN_SALT',   'G_t:wG2siNp&(}i-|J~eQdo>4 AzD$2.JJng[,$N~4~`t5Si)(3hHT=Tt1uxnvod' );
define( 'NONCE_SALT',       ' ~cHGo0Ms8^B9vUzZ@*}SD5U#7+/>8BDu +/$o<GxG!wYJfTXT&xB{4;vKGuO}_c' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
