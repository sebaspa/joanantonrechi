<?php
/**
 * Plugin Name: Joan Anton Rechi Plugin
 * Plugin URI: https://github.com/sebaspastudio
 * Description: Joan Anton Rechi plugin.
 * Version: 1.0
 * Author: Sebaspa
 * Author URI: https://github.com/sebaspastudio
 * Domain Path: /languages
 * Text Domain: joanantonrechi
 */

defined('ABSPATH') || die('No script kites please.');

/**
 * Import CMB2
 */

require_once WP_PLUGIN_DIR . '/' . dirname(plugin_basename(__FILE__)) . '/libs/cmb2/init.php';


/**
 * Custom Post Types.
 */

require_once dirname(__FILE__) . '/post-types/index.php';


/**
 * Custom taxonomies.
 */

require_once dirname(__FILE__) . '/taxonomies/index.php';

/**
 * Custom Fields.
 */

require_once dirname(__FILE__) . '/fields/index.php';

/**
 * Custom Widgets.
 */

require_once dirname(__FILE__) . '/widgets/index.php';
