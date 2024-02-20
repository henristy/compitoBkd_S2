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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'localBoost' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!fz[:P7nqb23ZUP0O810l$A2[W#C+IcV$s[lPGZ(3E#ZncYlNk6k?cs|&DSIkUj;' );
define( 'SECURE_AUTH_KEY',  '4[>nT2TX>zz4=4t}Ln96bfFSib->?bU(-tVUfXv6vIbUg<cva~`3IM:,f~Oovj{ ' );
define( 'LOGGED_IN_KEY',    '#e5F?TKlDS,k!l_2~gz^yY(2vbM*n#7tmnRgmoaFeF3EC==,ffNTu=CGOA$F)X)S' );
define( 'NONCE_KEY',        'y^[-lkL03Rf9HpQ1^1%;v%i(,^YNQ1V0$,%M0IwMgWUFdx5=mV2{ /z(Xsq:79m5' );
define( 'AUTH_SALT',        '%}O&gj#K=RF~dAq>h0JTMlJeovsgc}vyyp&${_KWmpPX9ciAJ<F.01|~I+hFYZYP' );
define( 'SECURE_AUTH_SALT', '_v2N<e/HN^DJK*.!5&{Da+sRO^Tq@haS7gX;0S_q{9HIN;TIgIwdx.2CT-S*Q+P`' );
define( 'LOGGED_IN_SALT',   '#n6k{=a`qO:A/$@vuP}_!gbf WA?$6A&k=I]4 |;xdm0==KA166SbGYSy!H8_:u_' );
define( 'NONCE_SALT',       'HcFK;5-1GCr$eW[{{KL3ZoIsRaa=!YRmbMob *Ol/auB~}#oPQBn}?CMu[ 36)2f' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
