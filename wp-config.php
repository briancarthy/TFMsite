<?php
/**
 *  * The base configurations of the WordPress.
 *   *
 *    * This file has the following configurations: MySQL settings, Table Prefix,
 *     * Secret Keys, and ABSPATH. You can find more information by visiting
 *      * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *       * Codex page. You can get the MySQL settings from your web host.
 *        *
 *         * This file is used by the wp-config.php creation script during the
 *          * installation. You don't have to use the web site, you can just copy this file
 *           * to "wp-config.php" and fill in the values.
 *            *
 *             * @package WordPress
 *              */

// ** MySQL settings - You can get this info from your web host ** //
 /** The name of the database for WordPress */
 define('DB_NAME', 'wordpress');

 /** MySQL database username */
 define('DB_USER', 'blog');

 /** MySQL database password */
 define('DB_PASSWORD', 'meeting09');

 /** MySQL hostname */
 define('DB_HOST', 'localhost');

 /** Database Charset to use in creating database tables. */
 define('DB_CHARSET', 'utf8mb4');

 /** The Database Collate type. Don't change this if in doubt. */
 define('DB_COLLATE', '');

 /**#@+
  * Authentication Unique Keys and Salts.
   *
    * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
      * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
       *
        * @since 2.6.0
         */
         define('AUTH_KEY',         '&jq@vy4qA^dV.TK~8OV`yLET$FX/|]l4V0-awy6<*nz*P|1O{|v)JJuLc-zAe52!');
         define('SECURE_AUTH_KEY',  '9+ kDxb[4+s**|]u-bU-nS{MsMv{-qA$pL2-6;asNHYL5v+Zi/k;a) vDp;3h=b|');
         define('LOGGED_IN_KEY',    '&%SV}r,;32){u:]mkd!6$9z3sjZ3Y.6[#AxOO8`?q*:D;?)-:~g#P& z3-eFYpq^');
         define('NONCE_KEY',        '/T]kODSM:-Ld>~w@++ds|+($->]%e1Y5-[V*5y1I9DKOZ3rm/uPrU|#pPbNwv/{2');
         define('AUTH_SALT',        'V~t-J7z$U[<n-]wHG9,[,!T>|P!SDmL.K,5t@{%-[/ jb O4}8EzY|^Rd&{J%sjT');
         define('SECURE_AUTH_SALT', '_Av}!$nKc1I~FPUKG84yUI $<h3z3!ij/f*T%gy[ d%kBZ9u1;x+mV,DF-OYbAZx');
         define('LOGGED_IN_SALT',   'rb6SRP( gUF5ug-hB7eR^E?VMv`+<sfy6qR+ig0qhCKb!<iW|iN+T?ti|=Zg`D{r');
         define('NONCE_SALT',       'nE+5vc]GEhe1X8?nJCONfJf|=^qe-2(m]RXn4xoU=sTe~RL +sA!Z+56+RU{vxi|');

         /**#@-*/

         /**
          * WordPress Database Table prefix.
           *
            * You can have multiple installations in one database if you give each a unique
             * prefix. Only numbers, letters, and underscores please!
              */
              $table_prefix  = 'wp_';

              /**
               * For developers: WordPress debugging mode.
                *
                 * Change this to true to enable the display of notices during development.
                  * It is strongly recommended that plugin and theme developers use WP_DEBUG
                   * in their development environments.
                    */
                    define('WP_DEBUG', false);

                    /* That's all, stop editing! Happy blogging. */

                    /** Absolute path to the WordPress directory. */
                    if ( !defined('ABSPATH') )
                    	define('ABSPATH', dirname(__FILE__) . '/');

                    	/** Sets up WordPress vars and included files. */
                    	require_once(ABSPATH . 'wp-settings.php');


