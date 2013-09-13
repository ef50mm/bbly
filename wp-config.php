<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL数据库用户名 */
define('DB_USER', $db["user"]);

/** MySQL数据库密码 */
define('DB_PASSWORD', $db["pass"]);

/** MySQL主机 */
define('DB_HOST', $db["host"]);

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&>EAnny7|DFd9;SrWp}x$U[-}FW|.u[oNS!eq,}y4Sha%(.||Kq|||pXDutyK0aC');
define('SECURE_AUTH_KEY',  '=a|W9/mUs}]ZcWVS1-^Tb`h#]Xhi~ V0rMZx=+>MRY||Jj@Ag(G4cP!bQK*4IuD#');
define('LOGGED_IN_KEY',    '(K>[)+S|-]T6zJ8[s$>>F}g5pAaj--ey|gGsAC*!a9tz}4~x}`mI?F@_es&qK[_9');
define('NONCE_KEY',        '{p)jjmiE+*%-F`GG|LDMde6Vy=E5cq}Gs6FX4#$z*tKM@<{j.b3G.K}:ku]DWS-A');
define('AUTH_SALT',        'b>H+Q}+y0J_=qx)Lt9c#q1gJ-6_/h<v4u|-kZ{f9gP|d>Mm*FP|tG+IWV:rvN-H_');
define('SECURE_AUTH_SALT', '|-C<~v$-5NBL6L}b,3NcYjq*[acA`=)],0 $^~Hr63lxE6O(9=Lmb3>7iO_eQ+N$');
define('LOGGED_IN_SALT',   'j}VNRdBo)VjU8i*=j=Lyh3[/+SB({KsQzWRTmF2w!Z~kcI^MHWhg9bUf2E6fjeWt');
define('NONCE_SALT',       'ar1.yOAC[K+of<{x8o./@tNz6o^;C3=CH;Cj3<kl3WQusq=j+Paqk%bx!;M$E/1l');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * WordPress语言设置，中文版本默认为中文。
 *
 * 本项设定能够让WordPress显示您需要的语言。
 * wp-content/languages内应放置同名的.mo语言文件。
 * 例如，要使用WordPress简体中文界面，请在wp-content/languages
 * 放入zh_CN.mo，并将WPLANG设为'zh_CN'。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
