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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gcons_homolog');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V`Vhzs%9J3Cc=F  412HUpZUx%XoQ1&RU-FJqE.;ts*gBi],t`^Uj3d;Zu^rezq*');
define('SECURE_AUTH_KEY',  'l!9vw*zNzNvy)EM+;OC-lW|!f*`3!QE lKTpZ.P5MIg_;.J][7g-tH0WXXAr_^7B');
define('LOGGED_IN_KEY',    'E=F7);8Cd,aG/6>2n?J02K+66>~]<-ckNjQd(kfD.s_s|aq7$h`AP`9Xuv38st{C');
define('NONCE_KEY',        '?(CF~7u&`mZG1#Jdh9<oEoht)g%yG(mSpx%(pB5kQ:ckwz6zkN+`$:XaIQTwub7j');
define('AUTH_SALT',        '`:+Qv|7&>xf_3X&Mq_7* ^D`8Ig<_XAKBUKxE7h>$,JVP}^k0m)wVd^aGk[|{6wZ');
define('SECURE_AUTH_SALT', 'tMA>* L@vyVm[$IkpL1t1@?}[}@K]2BW`~c6.YNDfVXTdfO=w/m$7dNjZ4v,bB;n');
define('LOGGED_IN_SALT',   'o(Pil-%x7GSS/w5- C5e/xzyDHUuRue7BFTzUL_^E@I,<eLZ$&e#Ku|8VFhC2}l7');
define('NONCE_SALT',       'fub&g0q$d5&$xk5i&m>osF_R:6r>lfD3r@4Y|h7Ai%fU$)Xjg/F6HVRxIAlUdTfH');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'gc_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
