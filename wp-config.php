<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp2\htdocs\humanmed\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wpdb_human' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpdb_localhost' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'localhost' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4iV`|^9*/X(]I`l$WTxVSdgrhzy{WwS#~cv<r}h4c-aG9;$jzg rp>qqT9|^xZh%' );
define( 'SECURE_AUTH_KEY',  'i^/4^<#9Y]JCfU==+bB[W/Q<kj0~Ywin.^{UVvOD,3l8n&0kPG4b22aC.0xngR.C' );
define( 'LOGGED_IN_KEY',    's3*x?|o2Y-&EdY/|q_@9vA7A{G$oCkGy=C@R3i<x@c,3Bfo21yauq3EDD(4`RrG<' );
define( 'NONCE_KEY',        'uTyy#9D_=s#6B% QXS$z& ;Pnh=vdwFzs|3c+%NF32ma;aF0r{w)MN>=JcK%V^E5' );
define( 'AUTH_SALT',        '}]BfN6W<SKbkK7W:Wcpma23l$[tOeChCz*tY29^lQ`^aC3luq~v-Jh{b~mR=EZ6r' );
define( 'SECURE_AUTH_SALT', '<e;X($22VMG5!^SNFFpo(QsQ$DND8v]?Sv|PD<;FF([6O#d$$F{8rKlX|kOz8P)z' );
define( 'LOGGED_IN_SALT',   'r=%szt+GwY5*csyCO >QDtKLM+zWhiO5*<$3 B=; yM|:+;tpf2T/,% pswB/%DE' );
define( 'NONCE_SALT',       '*oyaG6=-cSn@tv1&5mp{oa}k@ZPd&Q{PN<Ve4i5ab!`L21[;>9R^Q`,%{lp!L<zW' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
