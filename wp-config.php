<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'linabiotec');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FOEO(>7xyTu.l!7*EOM-UphB}o|/U{qn|hO-X?5S84.esx=VUGUMKIs3oD|1~&=;');
define('SECURE_AUTH_KEY',  '@,c)%>i}h>~+[ *Ul^?SpL# J7Kq5G{^9(jDxV1sn9UUa:5jQrl5c@S*@JjE>#>#');
define('LOGGED_IN_KEY',    '5J>JO(%~JkB#</5%(pvZ-mmHPd TFG<n#t!KWB0Fq|/pEiJl9=Cu[-FHm]@O;I]#');
define('NONCE_KEY',        'rRE-FZ(x$h0|r2#Zk0O+N!N#A;Y6<A;2;Bh6h+b.6wJu[vwri&PVT2lQ-3C`n>^g');
define('AUTH_SALT',        'o4#|FXSCf;L@)C5Un bO6v^zi-,s5_$yaFkt=~L.E4bKx;IG0b<p]QXj(LCtR[bV');
define('SECURE_AUTH_SALT', 'x!|:s_{;7?^AceoAbb>2)JSQzcO9y3zV|zczGK(%`%_K[ x@3bl;A?ggU?<IWx}:');
define('LOGGED_IN_SALT',   'HJ-$L!4n4)-%8U5NyB2o,|oH_}!LXdm!;p A&G(prX?Q3{l$8IS)J>kdOJ8N6m&r');
define('NONCE_SALT',       'IC/ufb4i;=C#mREumf)GIsdOw]/E=GXyJNaUpiU[LyB kw{ZyWzHWX.;2BXMSEC/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
