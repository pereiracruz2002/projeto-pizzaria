<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'word_press');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'senha');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?>[7q=VI|5A<pG[p FdwCICX5!{qo?9.cHZW-gS:&`,W,#QYGBVfUz25pAa;]g_[');
define('SECURE_AUTH_KEY',  '2O(`7H[pzo|H!f9d6r<vn=W$DG!vm!6:#)+NH9V[1O>:HUgl<&.zmf03+62U=Ud)');
define('LOGGED_IN_KEY',    '?%]`$LN.MK*8SLzJ9*anMr+e5@qLnoLFy0svUuj nzJdgady)m#o?5`Ak>Oc:2*T');
define('NONCE_KEY',        '#jIX@Q`GlYM*<G)P:w?aH6>i`mn[uR20 -^_]v$h,^wgpVei${(&UCiW>^mE-s&c');
define('AUTH_SALT',        '`D`1+!8<PtaQ[??b~q)Y_OR2P^lVqt}_pfMQ_e(!KwHpo:M9!XhBL1g8MZ<pr%4a');
define('SECURE_AUTH_SALT', '3=BF93p=f_G08Gg?0u~9hks]:__bo;C>=`bKrqC<Imt07&FfF3#uAk]FVG8NH(7c');
define('LOGGED_IN_SALT',   '`4,W^XzWST(-^r??rE!E#B;<wiCR<MXEmF!X0/BF~H@4#f**J&lN&Qx7o|V!Uk2U');
define('NONCE_SALT',       '3j7B;T*h-~s/+E@j5hW74hvvp+[bmVyXs/PVp./uqu?WjFNCYysA-/*_wZ^Zo(}+');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
