<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME','http://182.75.120.10:8558/irthomas');
define('WP_SITEURL','http://182.75.120.10:8558/irthomas');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'irthomas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
/*define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/
define('AUTH_KEY',         '%D[,XbRNGV%Z7RH+ lW|DlBa#sa#Z~`9;V)bTL}VSp^u$+Sv&#@OW|=U.CZ@iP@g');
define('SECURE_AUTH_KEY',  'm|ZOC|:;#d[UY!{ t=lY$?BYMX~W}m>(k#4FYwTZ2-++TrvL@ds{/o?v8~ex/$nB');
define('LOGGED_IN_KEY',    'J1:E1p+EuPWX|m0+<#50i`Mgmx@RuB_D-!/}r5/PFn;WuFo-%:~<Y$7$PX~d<baf');
define('NONCE_KEY',        '9|Kl+1mB_-PcP.!MiGd;a8GP_<AU> i12VH,xgL_P*eI<Iz`L(;Nr_=Aj-w/eyTK');
define('AUTH_SALT',        '4jUK|9^Rf^%8loHp|*v(-^139I<xQH(u>_seQ_%oLZ}?^d$Ty-Ql437F|.feL*Wv');
define('SECURE_AUTH_SALT', ':8~df1ZumXgJ+Km|$SQZAEaYl7_M&jf}_K@-s;F*pa!3gb7-6# e0`oMEXl2nVUC');
define('LOGGED_IN_SALT',   'px^ECW<<1bmX`+<?y{9Qs:1oux6&ddR}pSu!oZ;szNU`Vw2_a-a.p+8-URG-D`:|');
define('NONCE_SALT',       'JM}.d5F;ha(+kfNw]tr9dBQ3P_Qn-#]C/ERX]d18$oJvgK{7N~w,pfkRs*$2M&+X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



Salient style.css



/*
	Theme Name: Salient
	Theme URI: http://www.themenectar.com
	Author: ThemeNectar
	Author URI: http://themenectar.com
	Description: An Ultra Responsive Multi-Purpose Theme.
	Version: 7.6
	License: GNU General Public License version 3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html

-------------------------------------------------------------------------

	1.	Browser Reset + Font Face
	2.	Globally Applied Styles
	3.	Header + Search Bar Styles
	4.	Plugin Related Styles
	5.	Page + Custom Page Layout Styles
	6.	Nectar Shortcode Styles
	7.  Footer Styles
	8.	Sidebar Styles
	9.  Blog + Pagination Styles
	10.	Comment Styles
	11.	General Form Styles

-------------------------------------------------------------------------*/

#cookie-law-info-bar {
z-index: 999999;
}

/*-------------------------------------------------------------------------*/
/*	1.	Browser Reset + Font Face
/*-------------------------------------------------------------------------*/
html, body, div, span, applet, object, iframe, table, caption, tbody, tfoot, thead, tr, th, td, 
del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, 
h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, 
dl, dt, dd, ol, ul, li, fieldset, form, label, legend {
		vertical-align: baseline;
		font-family: inherit;
		font-weight: inherit;
		font-style: inherit;
		font-size: 100%;
		outline: 0;
		padding: 0;
		margin: 0;
		border: 0;
}


:focus {
		outline: 0;
}

input[type=submit] {
   -webkit-appearance: none;
}

html {
	overflow-x: hidden;
	overflow-y: scroll;
	max-width:   100%;
}

body {
	max-width:   100%;
	overflow-x: hidden;
	background: white;
	font-family: 'Open Sans', sans-serif;
	color: #676767;
	position: relative;
}

ol, ul {
		list-style: none;
}

input[type=text]::-ms-clear {
    display: none;
}

sup {
	font-size: 10px;
	vertical-align: super;
}

sub {
	font-size: 10px;
	vertical-align: sub;
}

p:empty {
	display: none;
}


article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { 
    display:block;
}



@font-face {
    font-family: 'Open Sans';
    src: url('css/fonts/OpenSans-Light-webfont.eot');
    src: url('css/fonts/OpenSans-Light-webfont.eot?#iefix') format('embedded-opentype'),
         url('css/fonts/OpenSans-Light-webfont.woff') format('woff'),
         url('css/fonts/OpenSans-Light-webfont.ttf') format('truetype'),
         url('css/fonts/OpenSans-Light-webfont.svg#OpenSansLight') format('svg');
    font-weight: 300;
    font-style: normal;

}

@font-face {
    font-family: 'Open Sans';
    src: url('css/fonts/OpenSans-Regular-webfont.eot');
    src: url('css/fonts/OpenSans-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('css/fonts/OpenSans-Regular-webfont.woff') format('woff'),
         url('css/fonts/OpenSans-Regular-webfont.ttf') format('truetype'),
         url('css/fonts/OpenSans-Regular-webfont.svg#OpenSansRegular') format('svg');
    font-weight: 400;
    font-style: normal;

}

@font-face {
    font-family: 'Open Sans';
    src: url('css/fonts/OpenSans-Semibold-webfont.eot');
    src: url('css/fonts/OpenSans-Semibold-webfont.eot?#iefix') format('embedded-opentype'),
         url('css/fonts/OpenSans-Semibold-webfont.woff') format('woff'),
         url('css/fonts/OpenSans-Semibold-webfont.ttf') format('truetype'),
         url('css/fonts/OpenSans-Semibold-webfont.svg#OpenSansSemibold') format('svg');
    font-weight: 600;
    font-style: normal;

}

@font-face {
    font-family: 'Open Sans';
    src: url('css/fonts/OpenSansBold-webfont.eot');
    src: url('css/fonts/OpenSansBold-webfont.eot?#iefix') format('embedded-opentype'),
         url('css/fonts/OpenSansBold-webfont.woff') format('woff'),
         url('css/fonts/OpenSansBold-webfont.ttf') format('truetype'),
         url('css/fonts/OpenSansBold-webfont.svg#OpenSansBold') format('svg');
    font-weight: 700;
    font-style: normal;

}



/*-------------------------------------------------------------------------*/
/*	2. Globally Applied Styles
/*-------------------------------------------------------------------------*/


body {
	font-size: 12px;	
	-webkit-font-smoothing: antialiased;
	font-family: 'Open Sans';
	font-weight: 400;	
	background-color: #1C1C1C;
	line-height: 22px;
}

p {
 -webkit-font-smoothing: subpixel-antialiased;
}

body .ui-widget {
	font-family: 'Open Sans';
	font-weight: 400;	
}

.overflow-x-hidden {
	overflow-x: hidden;
}

.alignleft {
  float: left;
  margin-right: 15px;
}

.alignright {
  float: right;
  margin-left: 15px;
}

.aligncenter {
	display: block;
	margin:15px auto;
}

.no-bottom-padding {
	padding-bottom: 0px;
}

.col.center {
	text-align: center;
}

.col.right {
	text-align: right;
}

.wp-smiley {
	margin-bottom: 0px!important;
}

dt {
	font-family: 'Open Sans';
	font-weight: 600;
	color: #333;
}
dd {
	padding-left: 20px;
}

.gallery-caption { 
    margin-left: 0; 
    margin-bottom: 10px;
    padding: 0px 10px;
}

.bypostauthor {}

#wpstats {  display: none; }

.sticky {
	margin-bottom: 50px;
}

.sticky .content-inner {
	margin-bottom: 0px!important;
	padding-bottom: 0px!important;
	border-bottom: 0px!important;
	-o-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-color: #fff;
	padding: 25px!important;
	position: relative;
}

.side-box {
  padding: 10px 0;
  margin-bottom: 10px;
  border: 1px solid #CCC;
  background-color: #E6E6E6;
  text-align: center;
}

.side-box a:link,
.side-box a:visited {
  font-weight: normal;
  color: #06c55b;
  font-size: 12px;
}

#wpadminbar {
	z-index: 1000000!important;	
}

table {
  font-size: 12px;
  margin-bottom: 20px;
}

.wp-caption { max-width: 100%; border:1px solid #ccc; background:#eee; padding:5px; }
.wp-caption .wp-caption-text { text-align:center; margin-top:5px; margin-bottom: 5px; }
.wp-caption img { margin-bottom: 10px!important; display: block; }

em {font-style: italic;}

caption, th, td {
		font-weight: normal;
		text-align: left;
}

.container-wrap, .project-title {
	background-color: #f8f8f8;
	position: relative;
	z-index: 10;
	margin-top: -55px;
	padding-top: 93px;
	padding-bottom: 40px;
}

body[data-header-resize="0"] .container-wrap, body[data-header-resize="0"] .project-title {
	margin-top: 0px;
	padding-top: 40px;
}

body[data-smooth-scrolling="0"] {
	overflow: hidden;
}

#ajax-loading-screen {
	background-color: #fff;
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	display: none;
	z-index: 1000000000;
}

body[data-ajax-transitions="true"] #ajax-loading-screen[data-method="standard"], body[data-ajax-transitions="true"] #ajax-loading-screen[data-method="standard"] .loading-icon {
	display: block;
	opacity: 1;
}

#ajax-loading-screen .loading-icon {
	background-repeat:no-repeat;
	background-position: center center;
	display: block;
	position: absolute;
	opacity: 0;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.default-loading-icon {
    top: 50%;
    border-radius: 100%;
    height: 40px;
    width: 40px;
    margin: 0 auto;
    display: block;
    position: relative;  
    border: 3px solid #e5e5e5; 
    margin-top: -20px;
}

.loading-icon .material-icon .spinner {
  width: 60px;
  height: 60px;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}
.loading-icon .material-icon .spinner {
	-webkit-animation: material-rotate-all 1s linear infinite;
	animation: material-rotate-all 1s linear infinite;
}

.loading-icon .material-icon .spinner .right-side,
.loading-icon .material-icon .spinner .left-side {
	-webkit-animation: material-fade-in-first 1.2s linear infinite alternate;
	animation: material-fade-in-first 1.2s linear infinite alternate;
}
.loading-icon .material-icon .spinner.color-2 .right-side,
.loading-icon .material-icon .spinner.color-2 .left-side {
	-webkit-animation: material-fade-in-second 1.2s linear infinite alternate;
	animation: material-fade-in-second 1.2s linear infinite alternate;
}

.loading-icon .material-icon .right-side, .loading-icon .material-icon .left-side {
  width: 50%;
  height: 100%;
  position: absolute;
  top: 0;
  overflow: hidden;
}

.loading-icon .material-icon .left-side { left: 0; }
.loading-icon .material-icon .right-side { right: 0; }

.loading-icon .material-icon .bar {
  width: 100%;
  height: 100%;
  -moz-border-radius: 200px 0 0 200px;
  -webkit-border-radius: 200px;
  border-radius: 200px 0 0 200px;
  border: 6px solid #666;
  position: relative;
}
.loading-icon .material-icon .bar:after {
  content: "";
  width: 6px;
  height: 6px;
  display: block;
  background: #666;
  position: absolute;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
}
.loading-icon .material-icon .right-side .bar {
  -moz-border-radius: 0 200px 200px 0;
  -webkit-border-radius: 0;
  border-radius: 0 200px 200px 0;
  border-left: none;
  -webkit-transform: rotate(-10deg);
  -webkit-transform-origin: left center;
  transform: rotate(-10deg);
  transform-origin: left center;
  -webkit-animation: material-rotate-right 0.75s linear infinite alternate;
  animation: material-rotate-right 0.75s linear infinite alternate;
}
.loading-icon .material-icon .right-side .bar:after {
  bottom: -6px;
  left: -3px;
}
.loading-icon .material-icon .left-side .bar {
  border-right: none;
  -webkit-transform: rotate(10deg);
  transform: rotate(10deg);
  -webkit-transform-origin: right center;
  transform-origin: right center;
  -webkit-animation: material-rotate-left 0.75s linear infinite alternate;
  animation: material-rotate-left 0.75s linear infinite alternate;
}
.loading-icon .material-icon .left-side .bar:after {
  bottom: -6px;
  right: -3px;
}

@keyframes material-rotate-left {
  to {
    transform: rotate(30deg);
  }
  from {
    transform: rotate(175deg);
  }
}
@keyframes material-rotate-right {
  from {
    transform: rotate(-175deg);
  }
  to {
    transform: rotate(-30deg);
  }
}
@keyframes material-rotate-all {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(-360deg);
  }
}
@keyframes material-fade-in-first {
  from {
  	opacity: 1;
  }
  to {
  	opacity: 0;
  }
}
@keyframes material-fade-in-second {
  from {
  	opacity: 0;
  }
  to {
  	opacity: 1;
  }
}
.loading-icon .material-icon {
	top: 50%;
	height: 65px;
    width: 65px;
    position: relative;
    margin: -32px auto 0 auto;
    display: block;
}

.default-loading-icon:before {
	position: absolute;
	content: "";
	border-color: rgba(0, 0, 0, 1) transparent transparent;
    border-radius: 100%;
    border-style: solid;
    border-width: 3px;
    display: block;
    height: 100%;
    width: 100%;
    top: -3px;
    left: -3px;
}

.loading-icon.spin, .portfolio-loading.spin, .pp_loaderIcon.spin, .default-loading-icon.spin {
	animation: 2s cubic-bezier(0.63, 0.045, 0.34, 1) 0s normal none infinite spinning_animation;
	-webkit-animation: 2s cubic-bezier(0.63, 0.045, 0.34, 1) 0s normal none infinite spinning_animation;
}

.default-skin-loading-icon {
	width: 100%;
	height: 100%;
	background-position: center;
	display: block;
	background-repeat: no-repeat;
	background-image: url("img/icons/loading-white-bg.gif");
}

@keyframes spinning_animation {
	0% {
	    transform: scale(1) rotate(0deg);
	    -o-transform: scale(1) rotate(0deg);
	}
	50% {
	    transform: scale(0.8) rotate(360deg);
	    -o-transform: scale(0.8) rotate(360deg);
	}
	100% {
	    transform: scale(1) rotate(720deg);
	    -o-transform: scale(1) rotate(720deg);
	}
}

@-webkit-keyframes spinning_animation {
	0% {
	    -webkit-transform: scale(1) rotate(0deg);
	}
	50% {
	    -webkit-transform: scale(0.8) rotate(360deg);
	}
	100% {
	   -webkit-transform: scale(1) rotate(720deg);
	}

}

@keyframes bounce_in_animation {
	0% {
	    transform: scale(0, 0);
	    -o-transform: scale(0, 0);
	}
	20% {
	    transform: scale(1.4, 1.4);
	    -o-transform: scale(1.4, 1.4);
	}
	50% {
	    transform: scale(0.8, 0.8);
	    -o-transform: scale(0.8, 0.8);
	}
	85% {
	    transform: scale(1.1, 1.1);
	    -o-transform: scale(1.1, 1.1);
	}
	100% {
	    transform: scale(1, 1);
	    -o-transform: scale(1, 1);
	}
}

@-webkit-keyframes bounce_in_animation {
	0% {
	     -webkit-transform: scale(0, 0);
	}
	20% {
	     -webkit-transform: scale(1.4, 1.4);
	}
	50% {
	     -webkit-transform: scale(0.8, 0.8);
	}
	85% {
	     -webkit-transform: scale(1.1, 1.1);
	}
	100% {
	     -webkit-transform: scale(1, 1);
	}
}


@keyframes grow_in_animation {
	0% {
	    transform: scale(0, 0);
	    -o-transform: scale(0, 0);
	}
	100% {
	    transform: scale(1, 1);
	    -o-transform: scale(1, 1);
	}
}

@-webkit-keyframes grow_in_animation {
	0% {
	    -webkit-transform: scale(0, 0);
	}
	100% {
	    -webkit-transform: scale(1, 1);
	}
}

#ajax-loading-screen[data-effect="center_mask_reveal"] {
	background-color: transparent!important;
}

body[data-ajax-transitions="true"] #ajax-loading-screen[data-effect="center_mask_reveal"].hidden {
	display: none;
}

#ajax-loading-screen[data-effect="center_mask_reveal"] span {
    position: absolute;
    background: #fff;
    z-index: 100;
    -webkit-transition: 0.8s cubic-bezier(0.12, 0.75, 0.4, 1) !important;
    transition: 0.8s cubic-bezier(0.12, 0.75, 0.4, 1) !important;
}

#ajax-loading-screen[data-effect="center_mask_reveal"].set-to-fade span {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	transform: none!important;
	-webkit-transform: none!important;
}

#ajax-loading-screen .mask-top {
    top: 0%;
    left: 0;
    height: 50%;
    width: 100%;
}

#ajax-loading-screen.loaded .mask-top {
    -webkit-transform: translateY(-100%) translateZ(0);
    -ms-transform: translateY(-100%) translateZ(0);
    transform: translateY(-100%) translateZ(0);
}

#ajax-loading-screen .mask-right {
    top: 0;
    right: 0;
    height: 100%;
    width: 50%;
}

#ajax-loading-screen.loaded .mask-right {
     -webkit-transform: translateX(100%) translateZ(0);
    -ms-transform: translateX(100%) translateZ(0);
    transform: translateX(100%) translateZ(0);
}

#ajax-loading-screen .mask-bottom {
    bottom: 0%;
    right: 0;
    height: 50%;
    width: 100%;
}

#ajax-loading-screen.loaded .mask-bottom {
    -webkit-transform: translateY(100%) translateZ(0);
    -ms-transform: translateY(100%) translateZ(0);
    transform: translateY(100%) translateZ(0);
}


#ajax-loading-screen .mask-left {
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
}

#ajax-loading-screen.loaded .mask-left {
    -webkit-transform: translateX(-100%) translateZ(0);
    -ms-transform: translateX(-100%) translateZ(0);
    transform: translateX(-100%) translateZ(0);
}


body[data-bg-header="true"] .container-wrap, html.fp-enabled .container-wrap { margin-top: 0!important; padding-top: 0!important; }

body.page-template-page-sidebar-php .main-content > .row > #post-area, 
body.page-template-page-sidebar-php .main-content > .row > #sidebar,
body.page-template-page-left-sidebar-php .main-content > .row > #post-area, 
body.page-template-page-left-sidebar-php .main-content > .row > #sidebar {
  margin-top: 30px;
}

.project-title {
	padding-top: 85px;
	padding-bottom: 36px;
}

.single-portfolio .row .col.section-title {
	padding-bottom: 30px;
	border: none!important;
}

.single-portfolio .row.project-title .container .title-wrap {
	border-bottom: 1px solid #DDDDDD;
	position: relative;
	padding-bottom: 30px;
}

.single-portfolio .row.project-title .title-wrap:after {
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0;
}

.container-wrap .row > .wpb_row:last-child, .home-wrap .row > .wpb_row:last-child,  #portfolio-extra > .wpb_row:last-child  {
	margin-bottom: 0px!important;
}

body[data-bg-header="true"] .container-wrap, body.single-portfolio .container-wrap, body.page-template-template-portfolio-php .container-wrap,
body.tax-project-type .container-wrap {
	padding-top: 25px;
	margin-top: 0px!important;
	padding-bottom: 40px;
}

body.single-portfolio .container-wrap {
	padding-top: 0px!important;
}

body.single-post[data-bg-header="true"] .container-wrap {
	padding-top: 40px!important;
}

body.single-portfolio div[data-project-header-bg="true"] .container-wrap {
	padding-top: 40px!important;
}

body.single-portfolio #full-width-portfolio div[data-project-header-bg="true"] .container-wrap {
	padding-top: 0!important;
}

body.search-results .container-wrap {
	margin-top: -55px!important;
	padding-top: 80px!important;
}

.clear {
	clear:both;	
}

.subheader {
    color: #6F6F6F;
 	margin-bottom:15px;
}


a {
	color: #27CFC3;
	text-decoration: none;
	transition: color 0.2s linear;
	-moz-transition: color 0.2s linear;
	-webkit-transition: color 0.2s linear;
}

a:hover {
	color: inherit;
}

h1 { font-size: 30px; line-height: 42px; margin-bottom: 7px; }

h2 { font-size: 22px; line-height: 36px; margin-bottom: 10px;}

h3 { font-size: 19px; line-height: 34px; margin-bottom: 7px; }

h4 { font-size: 18px; line-height: 32px; margin-bottom: 7px; }

h5 { font-size: 16px; line-height: 26px; margin-bottom: 7px; }

h6 { font-size: 14px; line-height: 24px; margin-bottom: 7px;  }

h1,h2,h3,h4,h5,h6 {
	color: #444;	
	letter-spacing: -0.5px;
	font-weight: normal;
	-webkit-font-smoothing: antialiased;
	font-family: 'Open Sans';
	font-weight: 600;	
}

.bold, strong, b {
	font-family: 'Open Sans';
	font-weight: 600;
}

.uppercase {
	-webkit-font-smoothing: antialiased;
    font-family: 'Open Sans';
	font-weight: 700;
    text-transform: uppercase;
}

.tiny {
	font-size: 14px!important;
	line-height: 22px!important;
}

body h1.light, body h2.light, body h3.light, body h4.light, body h5.light, body h6.light, p.light {
	text-transform: none;
	-webkit-font-smoothing: antialiased;
	font-family: 'Open Sans';
	font-weight: 300;
}

body h1.jumbo, body h2.jumbo, body h3.jumbo, body h4.jumbo, body h5.jumbo, body h6.jumbo, p.jumbo {
     font-size: 100px!important;
     line-height: 110px!important;
}

h1.light { font-size: 34px; margin-bottom: 30px; }

h2.light { font-size: 28px; margin-bottom: 30px; letter-spacing: 0.5px;}

h3.light { font-size: 24px; margin-bottom: 15px; letter-spacing: 0.5px;}

h4.light { font-size: 18px; margin-bottom: 7px; letter-spacing: 0.5px;}

h5.light { font-size: 16px; margin-bottom: 7px; letter-spacing: 0.5px;}

h6.light { font-size: 14px; margin-bottom: 7px;  letter-spacing: 0.5px;}

body h1 em, body h2 em, body h3 em, body h4 em { font-size: inherit; }

h1.uppercase { letter-spacing: 3px; }

h2.uppercase { letter-spacing: 2.5px; }

h3.uppercase { letter-spacing: 2px; }

h4.uppercase { letter-spacing: 2px; }

h5.uppercase { letter-spacing: 1.3px; }

h6.uppercase { letter-spacing: 1.3px; }

h1 .nectar-button, h2 .nectar-button, h3 .nectar-button, h4 .nectar-button {
	margin-left: 13px;
}

.text-align-center {
	text-align: center;
}

p {
	padding-bottom: 27px;
}
    
.row .col p:last-child {
	padding-bottom: 0px;	
}

.container .row:last-child, .wpb_wrapper .clear {
	padding-bottom: 0px;
}

.wpb_wrapper > div {
	margin-bottom: 24px;
}

.wpb_wrapper > div:last-child, .row .wpb_wrapper > img:last-child, .row .wpb_wrapper > .img-with-aniamtion-wrap:last-child img {
	margin-bottom: 0px;
}

blockquote {
	font-family: 'Open Sans';
	font-weight: 300;
	line-height: 40px;
	font-size: 22px;
	padding-left: 0px;
	letter-spacing: 0.5px;
	margin-bottom: 30px;
}

.main-content ul, .main-content ol {
	margin-left: 30px;
	margin-bottom: 30px;
}


.main-content ul li {
	list-style: disc;
	list-style-position: outside;
}

.main-content ol li {
	list-style: decimal;
	list-style-position: outside;
}

.main-content img {
	max-width: 100%;	
	height: auto;
}

.main-content .col.span_4 .col.span_2 img, .main-content .col.span_3 .col.span_2 img, .main-content .col.span_2 .col.span_2 img, .main-content .col.span_6 .col.span_2 img,
.main-content .col.span_4 .col.span_2 i, .main-content .col.span_3 .col.span_2 i, .main-content .col.span_2 .col.span_2 i, .main-content .col.span_6 .col.span_2 i {
	top: -4px;
}

/*
object, object embed {
	display: block;
	height: auto;
	max-width: 100%!important;	
}*/

code {
	display: block;
	clear: both;
    overflow: auto;
    padding: 10px 20px 20px 20px;
    white-space: pre;
    background-color: #f0f0f0;
    font: 12px "Andale Mono",Courier,"Courier New",monospace;
}

#error-404 {
	text-align: center;
	margin-bottom: 45px;
}

body #error-404 h1 {
	font-size: 250px!important;
	line-height: 250px!important;
	font-family: 'Open Sans';
	font-weight: 700;
}

body #error-404 h2 {
	text-transform: uppercase;
	font-size: 70px;
	font-family: 'Open Sans';
	font-weight: 700;
}

#boxed {
	margin: 0 auto;
	width: 1200px;
	position: relative;
	padding: 0px;	
	z-index: 10000;
	background-color: #f8f8f8;	
	box-shadow: 0px 0px 15px rgba(0,0,0,0.15);
}

#boxed .home-wrap, #boxed .container-wrap {
	overflow: hidden;
}

#boxed .page-header-no-bg + div {
	margin-top: 0;
	padding-top: 40px;
}

body[data-footer-reveal="1"][data-footer-reveal-shadow="large_2"] #boxed .container-wrap  {
	box-shadow: none!important;
}

#boxed #header-outer {
	box-shadow: none!important;
	-webkit-box-shadow: none!important;
	-o-box-shadow: none!important;
	-moz-box-shadow: none!important;
	padding-right: 0px!important;
}

/*body[data-header-color="dark"] #boxed #header-outer {
	border-bottom: 1px solid #333;
}*/

#boxed #footer-outer #footer-widgets, #boxed #footer-outer #copyright {
	padding-left: 50px;
	padding-right: 50px;
}

#boxed #header-outer, #boxed #header-secondary-outer, #boxed #page-header-bg, #boxed #slide-out-widget-area-bg.fullscreen {
	width: auto!important;
	min-width: 1200px;
	left: auto!important;
	right: auto!important;
}
#boxed #page-header-bg {
 	background-color: #000;
 	overflow: hidden!important;
}
#boxed #header-secondary-outer {
	padding-right: 0px!important;	
}

#boxed #header-secondary-outer ul#social > li:first-child a {
	border-left: 0px!important;
	padding-left: 0px!important;
}

#boxed #header-secondary-outer ul.sf-menu > li:last-child a, #boxed #header-secondary-outer ul.sf-menu > li:last-child  {
	border-right: 0px!important;
	padding-right: 0px!important;
}

#boxed #header-outer .cart-menu-wrap {
	position: fixed;
}
#header-outer[data-format="centered-logo-between-menu"] .cart-menu-wrap {
	z-index: 10000;
}

@media only screen and (min-width: 1000px) {
#header-outer[data-format="centered-logo-between-menu"] nav  {
	visibility: hidden;
}
}

body:not(.ascend) #boxed #header-outer .widget_shopping_cart, body:not(.ascend).woocommerce #boxed .cart-notification {
	position: fixed!important;
	right: 0px!important;
	top: 77px!important;
}

body:not(.ascend).admin-bar #boxed #header-outer .widget_shopping_cart, body:not(.ascend).woocommerce.admin-bar #boxed .cart-notification  {
	top: 103px!important;
}

#boxed #featured, #boxed .orbit > div, #boxed #featured article {
	width: auto!important;
	left: auto!important;
	min-width: 1200px;
}
@media only screen and (max-width: 1300px) and (min-width: 1000px) {
 body[data-ext-responsive="false"] #boxed #featured,  body[data-ext-responsive="false"] #boxed .orbit > div,  body[data-ext-responsive="false"] #boxed #featured article {
		min-width: 980px;
	}
}

#boxed #featured article .post-title > a {
	left: 0px;
}

#boxed #featured article .post-title h2 {
	left: 0px;
}

#boxed #featured .orbit-slide.has-video .post-title > a {
	left: 22px;
}

.admin-bar #boxed .cart-menu-wrap {
	top: 38px!important;
}

#boxed .cart-menu-wrap {
	top: 11px!important;
}
#boxed .cart-menu {
	border-radius: 2px 0px 0px 2px!important;
    box-shadow: 0px 0px 6px rgba(0,0,0,0.15);
}

body:not(.ascend) #boxed .cart-menu {
	padding-bottom: 22px!important;
    padding-top: 22px!important;
    padding-left: 11px!important;
    padding-right: 10px!important;
}

.span_10.iwt h2 { line-height: 20px; }
.span_10.iwt h3 { line-height: 18px; }

.body-border-bottom {
	height: 20px;
	width: 100%;
	bottom: 0;
	left: 0;
	position: fixed;
	z-index: 10000;
	background-color: #fff;
}
.body-border-top {
	height: 20px;
	width: 100%;
	top: 0;
	left: 0;
	z-index: 10000;
	position: fixed;
	background-color: #fff;
}
.admin-bar .body-border-top {
	top: 32px;
}
.body-border-right {
	height: 100%;
	width: 20px;
	top: 0;
	right: 0;
	z-index: 10000;
	position: fixed;
	background-color: #fff;
}
.body-border-left {
	height: 100%;
	width: 20px;
	top: 0;
	left: 0;
	z-index: 10000;
	position: fixed;
	background-color: #fff;
}

/*-------------------------------------------------------------------------*/
/*	3.	Header + Search Bar Styles
/*-------------------------------------------------------------------------*/

#header-space {
	height: 90px;	
}

#header-outer {
	width: 100%;
	top: 0px;
	left: 0px;
	position: fixed;
	padding: 28px 0px 0px 0px;
	background-color:#fff;
	z-index: 9999;
	box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);
	-webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);
}

body[data-slide-out-widget-area-style="slide-out-from-right-hover"] #header-outer {
	z-index: 9995;
}

#header-outer[data-permanent-transparent="false"] {
	overflow: visible!important;
}

body[data-transparent-nav="1"][data-header-color="light"] #header-outer {
	background-color: rgba(255,255,255,0.965);
}

body[data-header-color="dark"] #header-outer, body[data-header-color="dark"] #search-outer {
	background-color: #1F1F1F;
	box-shadow: none!important;
	-moz-box-shadow: none!important;
	-webkit-box-shadow: none!important;
	-o-box-shadow: none!important;
}

html body[data-header-color="dark"] header#top nav ul #search-btn > div,
html body[data-header-color="dark"].ascend #header-outer[data-full-width="true"][data-remove-border="true"] header#top nav ul #search-btn a:after, 
html body[data-header-color="dark"].ascend #header-outer[data-full-width="true"][data-remove-border="true"] header#top nav ul .slide-out-widget-area-toggle a:after, 
html body[data-header-color="dark"].ascend #header-outer[data-remove-border="true"] .cart-menu:after,
html body[data-header-color="dark"].ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] .cart-menu:after {
	border-left: 1px solid rgba(255,255,255,0.15);
}

.ascend[data-header-search="false"] #header-outer[data-full-width="true"][data-format="centered-logo-between-menu"][data-cart="false"] header#top nav ul .slide-out-widget-area-toggle a {
	border: none;
}

body[data-header-color="dark"] #header-secondary-outer {
	background-color: #111;
	border-bottom: 1px solid #444;
}

body[data-header-color="dark"] #header-outer .cart-menu {
	background-color: #111;
}

body[data-header-color="dark"] #header-secondary-outer nav > ul > li > a {
	border-left: 1px solid #222;
}

body[data-header-color="dark"] #header-secondary-outer nav > ul > li:last-child {
	border-right: 1px solid #272727;
}

body[data-header-color="dark"] header#top nav ul li a, body[data-header-color="dark"] #search-outer input, body[data-header-color="dark"] #header-secondary-outer nav > ul > li > a,
body[data-header-color="dark"] #header-secondary-outer nav > ul > li > a span.sf-sub-indicator i, body[data-header-color="dark"] header#top #logo, 
body[data-header-color="dark"] header#top nav ul #search-btn a span, .ascend[data-header-color="dark"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart  {
	color: #A0A0A0;
}

body[data-header-color="dark"] header#top nav ul .slide-out-widget-area-toggle a i.lines, body[data-header-color="dark"] header#top nav ul .slide-out-widget-area-toggle a i.lines:after,
body[data-header-color="dark"] header#top nav ul .slide-out-widget-area-toggle a i.lines:before,
body[data-header-color="dark"] header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	background-color: #A0A0A0;
}

body[data-header-color="dark"] #header-secondary-outer nav > ul > li > a span.sf-sub-indicator i, .ascend[data-header-color="dark"] #boxed #header-outer .cart-menu .cart-icon-wrap i {
	color: #A0A0A0!important;
}

body[data-header-color="dark"] #header-secondary-outer nav > ul > li a:hover,
body[data-header-color="dark"] #header-secondary-outer nav > ul > li a:hover span.sf-sub-indicator i {
	color: #fff!important;
}

#header-secondary-outer ul ul li a {
	font-size: 11px;
	transition: none!important;
	-moz-transition: none!important;
	-webkit-transition: none!important;
	-o-transition: none!important;
}

body[data-header-color="dark"] #header-secondary-outer ul ul li a {
	background-color: #111;
	font-size: 11px;
	color: #A0A0A0;
}

body[data-header-color="dark"] #header-secondary-outer #social .vimeo, body[data-header-color="dark"]  #header-secondary-outer #social .vimeo span {
	 background-image: url("img/icons/social/vimeo-header-black.png")!important;
}

body[data-header-color="dark"] #header-secondary-outer #social .behance, body[data-header-color="dark"]  #header-secondary-outer #social .behance span {
	 background-image: url("img/icons/social/behance-header-black.png")!important;
}

body[data-header-color="dark"] #header-secondary-outer li.current-menu-ancestor > a, body[data-header-color="dark"] #header-secondary-outer li.current-menu-item > a,
body[data-header-color="dark"] #header-secondary-outer li.sfHover > a, body[data-header-color="dark"] #header-secondary-outer li.sfHover > a i {
	color: #fff!important;
}

.admin-bar #header-outer, .logged-in.buddypress #header-outer {
	top: 32px;
}

.admin-bar #header-outer[data-permanent-transparent="1"], .logged-in.buddypress #header-outer[data-permanent-transparent="1"] {
	top: 32px;
}

#header-outer[data-using-secondary="1"] {
	top: 33px;
}
body #header-outer[data-using-secondary="1"][data-permanent-transparent="1"] {
	top: 33px;
}

.admin-bar #header-outer[data-using-secondary="1"], .logged-in.buddypress #header-outer[data-using-secondary="1"] {
	top: 64px;
}

html .admin-bar #header-outer[data-using-secondary="1"][data-permanent-transparent="1"], .logged-in.buddypress #header-outer[data-using-secondary="1"][data-permanent-transparent="1"] {
	top: 64px;
}

header#top #logo {
	width: auto;
	max-width: none;
	display: block;
	line-height: 22px;	
	font-size: 22px;	
	letter-spacing: -1.5px;
	color: #444444;
	font-family: 'Open Sans';
	font-weight: 600;
}

header#top #logo.no-image { margin-top: 4px; }

header#top #logo .retina-logo { display: none!important; }

header#top #logo .starting-logo {
	position: absolute;
	top: 0;
	opacity: 0;
	left: 0;
}

/* retina logo */
@media only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5),
only screen and (min-resolution: 144dpi) {
   header#top #logo .retina-logo { display: block!important; }
   header#top #logo .default-logo { display: none!important; }
   #header-outer.transparent.directional-nav-effect header#top #logo img.retina-logo {
    	display: inline!important;
    }
}

@media only screen and (min-device-width : 320px) and (max-device-width : 1024px) {
	header#top #logo .retina-logo { display: block!important; }
    header#top #logo .default-logo { display: none!important; }
    #header-outer.transparent.directional-nav-effect header#top #logo img.retina-logo {
    	display: inline!important;
    }
}

@media only screen and (-o-min-device-pixel-ratio: 3/2) and (max-width: 1000px),
only screen and (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 1000px),
only screen and (min-device-pixel-ratio: 1.5) and (max-width: 1000px),
only screen and (min-resolution: 144dpi) and (max-width: 1000px) { 
 .midnightHeader.light header#top #logo .retina-logo:not(.starting-logo) {
 	display: none!important;
 }
 .midnightHeader.dark header#top #logo .retina-logo:not(.starting-logo) {
 	display: none!important;
 }

 .midnightHeader.default header#top #logo .retina-logo:not(.starting-logo) {
 	display: none!important;
 }

}

header#top #logo:hover {
	color: #27CFC3;
}

header#top #logo img {
	/*max-height: 30px;*/
	text-indent: -9999px;
	max-width: none;
	width: auto;
	margin-bottom: 0px;
	display: block;
	transition: opacity 0.4s ease;
}

header#top {
	position: relative;
	z-index: 9998;
	width: 100%;
}


header#top .container .row {
	padding-bottom: 0px;	
}

header#top nav > ul {
	float: right;
	overflow: visible!important;
	transition: padding 0.8s ease, margin 0.25s ease;
	min-height: 1px;
	line-height: 1px;
}

header#top nav .no-menu-assigned {
	visibility: hidden;
}

body:not(.ascend) header#top nav > ul.buttons,
body.ascend #header-outer[data-full-width="false"] header#top nav > ul.buttons,
#header-outer[data-format="centered-menu-under-logo"] header#top nav > ul.buttons { 
	margin-left: 15px;
}

body.ascend #header-outer[data-full-width="true"] header#top nav > ul.buttons { 
	margin-left: 0px;
}

header#top nav > ul.buttons {
	transition: padding 0.8s ease;
}

header#top nav > ul .slide-out-widget-area-toggle {
	transition: margin 0.25s ease;
}

.side-widget-open header#top nav > ul .slide-out-widget-area-toggle {
	transition: margin 0.75s ease;
}

#header-outer[data-transparency-option="1"][data-full-width="true"].side-widget-open {
	box-shadow: none;
}

#header-outer[data-format="centered-menu"] header#top nav > ul.sf-menu li,
#header-outer.side-widget-open.hidden-menu header#top nav > ul.sf-menu li,
#header-outer.hidden-menu-items header#top nav > ul.sf-menu li:not(#social-in-menu) {
	transition: opacity 0.75s ease;
}

#header-outer[data-format="centered-menu"].side-widget-open header#top nav > ul.sf-menu li, 
#header-outer.side-widget-open.hidden-menu header#top nav > ul.sf-menu li,
#header-outer.side-widget-open.hidden-menu-items header#top nav > ul.sf-menu li:not(#social-in-menu) {
	opacity: 0;
}

.side-widget-open.no-bg-color {
	border-color: transparent!important;
}


/*centered menu */
#header-outer[data-format="centered-menu"] header#top .span_9, #header-outer[data-format="centered-menu"] header#top .span_9 .sf-menu {
    left: 0;
    position: relative;
    text-align: center!important;
    width: 100%;
    z-index: 1;
}

#header-outer[data-format="centered-menu"][data-full-width="false"] header#top .span_9 #search-btn > div,
body:not(.ascend) #header-outer[data-format="centered-menu"] header#top .span_9 #search-btn > div {
	border: none;
}

#header-outer[data-format="centered-menu"] header#top nav > ul.sf-menu > li {
	float: none;
	display: inline-block;
}

#header-outer[data-format="centered-menu"] header#top nav > ul.sf-menu > li.megamenu {
	position: static!important;
}

#header-outer[data-format="centered-menu"] header#top nav > ul.sf-menu > li ul {
	text-align: left;
}

#header-outer[data-format="centered-menu"] header#top nav > ul.buttons, #header-outer[data-format="centered-menu"] header#top .span_3 {
	z-index: 10;
	position: absolute;
}

#header-outer header#top nav > ul.buttons {
	right: 0;
	height: 100%;
	overflow: hidden!important;
}

body[data-header-search="false"] #header-outer[data-full-width="false"][data-cart="false"] header#top nav > ul.buttons[data-user-set-ocm="off"] {
	display: none;
}

#header-outer[data-format="centered-menu"] header#top .span_3 {
	left: 0;
}

/*left aligned menu*/
#header-outer[data-format="menu-left-aligned"] .row .col.span_3 {
	margin-right: 25px;
}
#header-outer[data-format="menu-left-aligned"] .row .col.span_9 {
	float: left;
}
#header-outer[data-format="menu-left-aligned"] .row .right-aligned-menu-items {
	float: right;
}

/*left header*/
@media only screen and (min-width: 1001px) {

	#header-outer[data-format="left-header"] {
		width: 275px; left: 0; height: 100%; box-shadow: none; -webkit-box-shadow: none; border-right: 1px solid rgba(0,0,0,0.07);
	}

	#header-outer[data-format="left-header"] .sf-menu li {
		float: none; display: block!important;
		padding: 0!important;
		width: 100%!important;
	}

	#header-outer[data-format="left-header"] header#top .span_9 { width: 100%; }

	#header-outer[data-format="left-header"] header#top nav > ul { float: none; width: 100%;}


	body[data-header-format="left-header"]  #header-space {
		display: none;
	}

	body[data-footer-reveal="1"][data-header-format="left-header"] #footer-outer {
		left: 0;
		padding-left: 275px;
	}

	body[data-header-format="left-header"] #ajax-content-wrap { margin-left: 275px;}
	body[data-header-format="left-header"] .page-submenu.stuck { left: 275px; }
	body[data-header-format="left-header"] #search-outer { padding-left: 275px!important;}
	body[data-header-format="left-header"].ascend #search-outer { height: 100%!important;}

	body[data-header-format="left-header"] .parallax_slider_outer.first-section .nectar-slider-wrap { right: 0!important; left: auto!important;}
	#header-outer[data-full-width="true"] header#top nav > ul.buttons { margin-left: 0!important;}
	body[data-header-format="left-header"] #header-outer .cart-menu { padding-top: 25px; padding-bottom: 25px; }
	body[data-header-format="left-header"] #header-outer .cart-menu-wrap,
	html body[data-header-format="left-header"].ascend[data-slide-out-widget-area="true"] #header-outer[data-full-width="true"] .cart-menu-wrap,
	html body[data-header-format="left-header"].ascend #header-outer .cart-menu-wrap { right: 0!important; }
	html body[data-header-format="left-header"].ascend #header-outer .cart-outer, html body[data-header-format="left-header"] #header-outer .cart-outer { position: fixed; right: 0!important; top: 0; width: 90px; height: 75px;}
	html body[data-header-format="left-header"].ascend.admin-bar #header-outer .cart-outer, html body[data-header-format="left-header"].admin-bar #header-outer .cart-outer { height: 107px; }
	html body[data-header-format="left-header"] #header-outer .cart-menu, 
	html body[data-header-format="left-header"].ascend #header-outer .cart-menu { top: 0px; border-bottom: 1px solid rgba(0,0,0,0.07); background-color: #fff!important; }

	html body[data-header-format="left-header"].admin-bar #header-outer .cart-menu, 
	html body[data-header-format="left-header"].admin-bar.ascend #header-outer .cart-menu {
		top: 32px;
	}

	body[data-is="minimal"][data-header-format="left-header"].ascend[data-header-color="light"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart, 
	body[data-is="minimal"][data-header-format="left-header"][data-header-color="light"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart,
	body[data-header-format="left-header"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart {
		font-size: 20px!important;
	}
	html body[data-header-format="left-header"] #header-outer .cart-menu-wrap { overflow: visible;}
	body[data-header-format="left-header"][data-is="minimal"].ascend #header-outer .cart-wrap,
	body[data-header-format="left-header"] #header-outer .cart-wrap {
	    top: -14px!important;
	    margin-right: 15px!important;
	}
	body[data-header-format="left-header"]:not(.ascend):not([data-is="minimal"]) #header-outer .cart-menu .cart-icon-wrap i {
	    top: 1px;
	    width: 24px;
	}
	body[data-header-format="left-header"]:not(.ascend) #header-outer .cart-menu .cart-wrap { margin-right: 25px!important; }
	body[data-header-format="left-header"]:not(.ascend) #header-outer .cart-menu .cart-wrap span { border-radius: 100px; height: 20px; width: 20px; text-align: center; line-height: 20px;}
	body[data-header-format="left-header"]:not(.ascend) #header-outer .cart-menu .cart-wrap span:before {
		display: none!important;
	}
	html body[data-header-format="left-header"] #header-outer .cart-menu-wrap .cart-menu {
		border-radius: 100px;
		height: 50px!important;
		width: 50px!important;
		right: 25px;
		margin-top: 25px;
		padding-top: 15px;
		padding-left: 14px!important;
		box-shadow: 0 4px 9px 0 rgba(43,43,49,.06),0 7px 14px 0 rgba(43,43,49,.08);
	}

	html body[data-header-format="left-header"] #header-outer .cart-outer .cart-notification {
		margin-top: 25px!important;
		margin-right: 25px!important;
		border-radius: 6px;
		background-color: #fff;
		color: #999;
		box-shadow: 0 1px 5px rgba(0,0,0,0.09);
   	   -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.09);
	}
	html body[data-header-format="left-header"].woocommerce #header-outer .cart-notification .item-name,
	html body[data-header-format="left-header"] #header-outer .woocommerce-page .cart-notification .item-name,
	html body[data-dropdown-style="minimal"].woocommerce #header-outer .cart-notification .item-name,
	html body[data-dropdown-style="minimal"] #header-outer .woocommerce-page .cart-notification .item-name { color: #999; }
	html body[data-header-format="left-header"] #header-outer .cart-outer .cart-notification:after {
      content: "";
      position: absolute;
      width: 0;
      height: 0;
      border-width: 10px;
      border-style: solid;
      border-color: transparent transparent #FFFFFF transparent;
      top: -17px;
      right: 15px;
	}

	body[data-header-format="left-header"] #header-outer .widget_shopping_cart_content {
		margin-top: 25px;
	}
	body[data-header-format="left-header"] #header-outer .widget_shopping_cart, body[data-header-format="left-header"].woocommerce .cart-notification, body[data-header-format="left-header"] #header-outer .cart-notification {
		top: 75px;
	}
	body[data-header-format="left-header"].admin-bar #header-outer .widget_shopping_cart, body[data-header-format="left-header"].woocommerce.admin-bar .cart-notification, body[data-header-format="left-header"].admin-bar #header-outer .cart-notification {
		top: 107px;
	}

	body[data-header-format="left-header"] header#top .sf-menu li ul li a { color: #999;}
	body[data-header-color="dark"][data-header-format="left-header"] header#top .sf-menu li ul li a { color: #A0A0A0;}
	body[data-header-format="left-header"] #header-outer nav #search-btn { visibility: visible!important;}
	body[data-header-format="left-header"] #header-outer nav { padding: 30px;}
	body[data-header-format="left-header"] #header-outer nav ul li a { padding: 7px 0px!important; display: inline-block;}
	body[data-header-format="left-header"] #header-outer nav ul li.button_solid_color a, body[data-header-format="left-header"] #header-outer nav ul li.button_bordered a { padding: 5px 15px!important;} 
	body[data-header-format="left-header"] #header-outer nav ul li ul li a { padding: 3px 0px!important; }
	body[data-header-format="left-header"] .cart-menu-wrap:not(.has_products) { opacity: 0; pointer-events: none;}
	html body[data-header-format="left-header"]:not(.ascend) #header-outer .cart-menu { border-bottom: 0; }
	body[data-header-format="left-header"]  #header-outer .button_social_group { position: absolute; bottom: 45px; left: 30px; max-width: 240px;}

	body[data-header-format="left-header"] #header-outer .row .col.span_9 { position: absolute!important; top: 80px; bottom: 110px; overflow: auto; left: 0; }
	body[data-header-format="left-header"]  #header-outer .span_3 { margin-top: 30px;}
	body[data-header-format="left-header"] #header-outer { padding-top: 0;} 
	body[data-header-format="left-header"] #header-outer nav ul #search-btn a,
	body[data-header-format="left-header"].ascend #header-outer[data-full-width="true"] header#top nav ul #search-btn a,
	body[data-header-format="left-header"] header#top nav ul #search-btn > div { padding-left: 0!important; border-left: 0!important; margin-left: 0!important;}
	body[data-header-format="left-header"] header#top { height: 100%; }
	body[data-header-format="left-header"] header#top .container .row, body[data-header-format="left-header"] header#top .container { position: static; }
	body[data-header-format="left-header"] header#top .container { padding: 0px 30px;}
	body[data-header-format="left-header"] #header-outer .nav-outer {
		display: table; height: 100%;
	}
	body[data-header-format="left-header"] #header-outer nav {
	    display: table-cell; vertical-align: middle;
	}

	body[data-header-format="left-header"] #header-outer nav .buttons { height: auto!important;}

	body[data-header-format="left-header"] header#top nav > ul > li > a { margin: 0!important;}
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]) > a {
		-ms-transition: color .2s cubic-bezier(0.12, 0.75, 0.4, 1);
		-webkit-transition: color .2s cubic-bezier(0.12, 0.75, 0.4, 1);
   		transition: color .2s cubic-bezier(0.12, 0.75, 0.4, 1);
	}
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]) > a > span { position: relative; display: block; padding: 4px 10px;}
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]) > a > span:after {
		height: 100%;
		border: none;
		background-color: #000;
		left: 0;
		position: absolute;
		top: 0;
		content: ' ';
		z-index: -1;
		width: 100%;
		display: block;
		-ms-transition: transform .35s cubic-bezier(0.12, 0.75, 0.4, 1)!important;
		-webkit-transition: -webkit-transform .35s cubic-bezier(0.12, 0.75, 0.4, 1)!important;
   		transition: transform .35s cubic-bezier(0.12, 0.75, 0.4, 1)!important;
   		-ms-transform: scale(0,1);
		transform: scale(0,1);
		-webkit-transform: scale(0,1);
		-webkit-transform-origin: left;
		transform-origin: left;
	}
	body[data-header-format="left-header"] header#top nav > ul > li[class*="button_"] { margin: 10px 0; }
	body[data-header-format="left-header"][data-dropdown-style="minimal"] #header-outer header#top nav > ul > li:not(.megamenu) ul a:hover,
	body[data-header-format="left-header"] #header-outer header#top nav > ul > li:not(.megamenu) ul a:hover,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] #header-outer header#top nav > ul > li:not(.megamenu) li.sfHover > a, 
	body[data-header-format="left-header"][data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul ul li a:hover {
		background-color: transparent!important;
	}

	body[data-header-format="left-header"][data-header-resize="0"] .container-wrap { padding-top: 80px; padding-bottom: 60px; }

	body[data-header-format="left-header"].woocommerce .container-wrap { padding-top: 80px!important; }

	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]) > a:hover > span:after,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).open-submenu > a > span:after,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).current_page_item > a > span:after,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).current-menu-item > a > span:after,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).current-menu-ancestor > a > span:after {
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);
	}

	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav ul li:not([class*="button_"]) > a:after {
		display: none;
	}

	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]) > a:hover,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).open-submenu > a,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).current_page_item > a,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).current-menu-item > a,
	body[data-header-format="left-header"] #header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]).current-menu-ancestor > a {
		color: #fff!important;
	}

	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu > li > ul,
	body[data-header-format="left-header"] .sf-menu li > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu > li.sfHover > ul,
	body[data-header-format="left-header"] .sf-menu li.sfHover > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu li li ul {
		position: relative!important;
		max-height: 0;
		top: 0!important;
		box-sizing: content-box;
		margin-left: 25px;
		padding-top: 0!important;
		padding-bottom: 0!important;
		left: 0!important;
		pointer-events: auto!important;
		width: auto!important;
		-webkit-box-shadow: none!important;
		box-shadow: none!important;
		-webkit-transition: max-height 0.5s cubic-bezier(0.215, 0.61, 0.355, 1), padding 0.25s cubic-bezier(0.215, 0.61, 0.355, 1)!important;
		transition: max-height 0.5s cubic-bezier(0.215, 0.61, 0.355, 1), padding 0.25s cubic-bezier(0.215, 0.61, 0.355, 1)!important;
		-ms-transform: none!important;
		-webkit-transform: none!important;
		transform: none!important;
		border: none!important;
		overflow: hidden;
		opacity: 1!important;
	}

	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu > li > ul,
	body[data-header-format="left-header"] .sf-menu li > ul {
		position: relative;
	}

	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu > li.sfHover > ul,
	body[data-header-format="left-header"] .sf-menu li.sfHover > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu li li ul {
		position: relative!important;
	}

	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu > li.current-menu-ancestor > ul,
	body[data-header-format="left-header"] .sf-menu li.current-menu-ancestor > ul,
	body[data-header-format="left-header"] .sf-menu li.current-menu-ancestor > ul li.current-menu-ancestor > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu > li.current-menu-ancestor.sfHover > ul,
	body[data-header-format="left-header"] .sf-menu li.sfHover.current-menu-ancestor > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu li.current-menu-ancestor > li li.current-menu-ancestor > ul {
		max-height: none;
	}

	body[data-header-format="left-header"] header#top .sf-menu li ul li a { 
		-webkit-transition: color .25s cubic-bezier(0.12, 0.75, 0.4, 1);
   		transition: color .25s cubic-bezier(0.12, 0.75, 0.4, 1);
	}

	body[data-header-format="left-header"] .sf-menu li > ul.no-trans {
		transition: none!important;
		-webkit-transition: none!important;

	}

	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu li.open-submenu > ul {
		padding: 5px 0px;
	}

	body[data-header-format="left-header"] .sf-menu li.open-submenu > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu li.open-submenu > ul,
	body[data-header-format="left-header"] .sf-menu li.open-submenu.sfHover > ul,
	body[data-header-format="left-header"][data-dropdown-style="minimal"] .sf-menu li.open-submenu.sfHover > ul {
		opacity: 1!important;
	}

	body[data-header-format="left-header"] #social-in-menu a {
		color: #888;
	}

	body[data-header-format="left-header"][data-dropdown-style="minimal"] header#top .sf-menu li ul li a, 
	body[data-header-format="left-header"][data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul.sub-menu,
	body[data-header-format="left-header"] header#top .sf-menu li ul li a, 
	body[data-header-format="left-header"] header#top nav > ul > li.megamenu > ul.sub-menu {
		background-color: transparent!important;
	}

	body[data-header-format="left-header"] #header-outer #social-in-menu i {
		height: 26px;
		font-size: 18px!important;
		margin-right: 10px;
		width: 30px;
		line-height: 28px;
	}
	body[data-header-format="left-header"] #header-outer #social-in-menu i.icon-facebook {
		width: 20px;
	}


}

@media only screen and (min-width: 1001px) and (max-width: 1300px) {
	body[data-header-format="left-header"] #post-area.span_9.col_last {
		padding-left: 35px;
	}
	body[data-header-format="left-header"] #post-area.span_9:not(.col_last) {
		padding-right: 35px;
	}
}

@media only screen and (max-width: 1450px) and (min-width: 1001px) {
	body[data-header-format="left-header"].single .blog-title .meta-comment-count {
		display: none!important;
	}
}
@media only screen and (max-width: 1150px) and (min-width: 1001px) {
	body[data-header-format="left-header"].single .section-title h1 {
		 max-width: 400px!important;
	}
}

@media only screen and (max-width: 1001px) {
	body[data-header-format="left-header"] #header-outer #social-in-menu { display: none; }
}


body[data-header-format="left-header"] #search-outer {
	background-color: rgba(255,255,255,0.96)!important; height: 100%!important; position: fixed; transform: rotateX(90deg); padding: 0; z-index: 1010!important;
}

body[data-header-format="left-header"] #search-outer .container {
	height: auto!important; float: none!important; width: 100%!important; padding: 0 40px; position: static;
}

body[data-header-format="left-header"] #header-outer #search {
	position: static!important;
}

body[data-header-format="left-header"] #search-outer #search input[type="text"] {
	color: #000!important; height: auto!important; font-size: 80px!important; text-align: center!important;
}

body[data-header-format="left-header"] #search-outer > #search form {
	width: 100%!important; float: none!important;
}

body[data-header-format="left-header"] #search-outer > #search form, body[data-header-format="left-header"] #search-outer #search .span_12 span {
	opacity: 0; position: relative;
}

body[data-header-format="left-header"] #search-outer #search #close {
	position: absolute; top: 25px; right: 25px;
}

body[data-header-format="left-header"] #search-outer #search #close a {
	right: 0!important; top: 0!important;
	transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s;  -webkit-transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s; 
}
body[data-header-format="left-header"] #search-outer #search #close a:hover {
	transform: rotate(90deg) translateZ(0); -webkit-transform: rotate(90deg) translateZ(0);
}

body[data-header-format="left-header"] #search-outer #search .span_12 span {
	text-align: center; display: block; color: rgba(0,0,0,0.4); margin-top: 15px;
}

body[data-header-format="left-header"] #search-outer #search #close a span { color: #000; }
body[data-header-format="left-header"] #search-outer .ui-widget-content { top: 90px!important; }




/*centered menu under logo */
#header-outer[data-format="centered-menu-under-logo"] header#top nav {
  display: inline-block;
}

#header-outer[data-format="centered-menu-under-logo"] .span_9 {
	text-align: center;
	line-height: 1px;
}

#header-outer[data-format="centered-menu-under-logo"] .span_9, body #header-outer[data-format="centered-menu-under-logo"] .span_3  {
  display: block!important;
  float: none!important;
  width: 100%!important;
}
body #header-outer[data-format="centered-menu-under-logo"] .span_3 {
    text-align: center;
}

#header-outer[data-format="centered-menu-under-logo"] header#top nav > ul.sf-menu > li ul {
	text-align: left;
}

#header-outer[data-format="centered-menu-under-logo"] header#top .span_9 {
    position: relative !important;
}

#header-outer[data-format="centered-menu-under-logo"] .cart-menu {
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	top: 50%;
}

#header-outer[data-format="centered-menu-under-logo"] header#top .span_9 nav > ul > li:not(#social-in-menu):not(#search-btn):not(.slide-out-widget-area-toggle) > a {
	padding-top: 0px!important;
	padding-bottom: 20px!important;
}
#header-outer[data-format="centered-menu-under-logo"] header#top .span_9 ul li#search-btn, 
#header-outer[data-format="centered-menu-under-logo"] header#top nav > ul li.slide-out-widget-area-toggle {
	padding-top: 0!important;
	padding-bottom: 0!important;
}
#header-outer[data-format="centered-menu-under-logo"] header#top .span_9 ul li#social-in-menu a {
	margin-top: 0px!important;
	margin-bottom: 20px!important;
}

#header-outer[data-format="centered-menu-under-logo"] header#top #logo img {
    margin: 0 auto 0px auto;
}

#header-outer[data-format="centered-menu-under-logo"]  header#top #logo {
	text-align: center;
	position: relative;
}

#header-outer[data-format="centered-menu-under-logo"]  header#top #logo .starting-logo {
	position: absolute;
	margin-bottom: 0;
	top: 0;
	left: 50%;
	transform: translateX(-50%);
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
}


/* centered logo between menu */
#header-outer[data-format="centered-logo-between-menu"] .span_3 {
	position: absolute;
	left: 50%;
	margin-right: 0;
}

#header-outer[data-format="centered-logo-between-menu"] .span_3 #logo.no-image {
	-ms-transform: translateX(-50%);
	transform: translateX(-50%);
	-webkit-transform: translateX(-50%);
}

#header-outer[data-format="centered-logo-between-menu"] .span_3 #logo:not(.no-image) img {
	-ms-transform: translateX(-50%);
	transform: translateX(-50%);
	-webkit-transform: translateX(-50%);
}

#header-outer[data-format="centered-logo-between-menu"] .row .col.span_9, #header-outer[data-format="centered-logo-between-menu"] .row .col.span_9 .sf-menu {
    left: 0;
    position: relative;
    text-align: center!important;
    width: 100%;
    z-index: 1;
}

body #header-outer[data-format="centered-logo-between-menu"] .row .col.span_9 .sf-menu {
	position: static;
}

#header-outer[data-format="centered-logo-between-menu"] header#top nav > ul.buttons, #header-outer[data-format="centered-logo-between-menu"] header#top .span_3 {
	z-index: 10;
	position: absolute;
}
#header-outer[data-format="centered-logo-between-menu"] header#top nav > ul.sf-menu > li ul {
	text-align: left;
}

#header-outer[data-format="centered-logo-between-menu"] nav > ul.sf-menu > li {
	float: none;
	display: inline-block;
}

#header-outer[data-format="centered-logo-between-menu"]  header#top nav > ul.sf-menu > li.megamenu {
	position: static!important;
}

#header-outer[data-format="centered-logo-between-menu"] nav #social-in-menu {
	position: absolute;
	left: 0;
}


header#top nav ul li {
	float: right;
}

header#top nav > ul > li {
	float: left; 
}

header#top nav > ul > li > a {
	padding: 0px 10px 0px 10px;
	display: block;
	color: #676767;
	font-size: 12px;
	line-height: 20px;
	-webkit-transition: color 0.1s linear;
    -moz-transition: color 0.1s linear;
    -o-transition: color 0.1s linear;
    transition: color 0.1s linear;
}

#header-outer[data-lhe="animated_underline"] header#top nav > ul > li > a  {
	-webkit-transition: color 0.2s linear;
    -moz-transition: color 0.2s linear;
    -o-transition: color 0.2s linear;
    transition: color 0.2s linear;
}

html:not(.js) header#top nav > ul > li > a {
	padding-bottom: 46px;
}

header#top nav > ul > li.button_solid_color > a:before,
#header-outer.transparent header#top nav > ul > li.button_solid_color > a:before {
	background-color: #27CFC3;
	display: block;
	position: absolute;
	left: 0;
	padding-bottom: 10px;
	transform: translateY(-7px);
	-webkit-transform: translateY(-7px);
	-ms-transform: translateY(-7px);
	width: 100%;
	height: 24px;
	content: ' ';
	z-index: -1;
	-webkit-transition: opacity 0.2s linear;
    -moz-transition: opacity 0.2s linear;
    -o-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear;
}

header#top nav > ul > li.button_solid_color > a:hover:before,
#header-outer.transparent header#top nav > ul > li.button_solid_color > a:hover:before {
	opacity: 0.85!important;
}

header#top nav > ul > li.button_bordered > a:before, #header-outer.transparent header#top nav > ul > li.button_bordered > a:before {
	border: 2px solid #fff;
	display: block;
	position: absolute;
	left: 0;
	padding-bottom: 10px;
	transform: translateY(-7px);
	-webkit-transform: translateY(-7px);
	-ms-transform: translateY(-7px);
	width: 100%;
	height: 34px;
	content: ' ';
	z-index: -1;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	transition: border-color 0.2s linear;
	-webkit-transition: border-color 0.2s linear;
	-moz-transition: border-color 0.2s linear;
}

header#top nav > ul > li.button_bordered > a:before {
	border-color: rgba(0,0,0,0.4);
}

.light-text header#top nav > ul > li.button_bordered > a:before {
	border-color: #fff;
}

.dark-slide.transparent header#top nav > ul > li.button_bordered > a:before {
	border-color: #000!important;
}

header#top nav > ul > li.button_solid_color > a,
body #header-outer.transparent header#top nav > ul > li.button_solid_color > a,
#header-outer[data-lhe="animated_underline"] header#top nav > ul > li.button_solid_color > a,
#header-outer[data-lhe="animated_underline"].transparent.dark-slide header#top nav > ul > li.button_solid_color > a:hover,
#header-outer:not([data-lhe="animated_underline"]).transparent.dark-slide header#top nav > ul > li.button_solid_color > a:hover,
#header-outer:not([data-lhe="animated_underline"]) header#top nav ul li.button_solid_color a:hover,
#header-outer.dark-text header#top nav > ul > li.button_solid_color > a,
#header-outer:not([data-lhe="animated_underline"]) header#top nav .sf-menu li.current_page_item.button_solid_color > a,
#header-outer.transparent.dark-slide > header#top nav > ul > li.button_solid_color > a:hover {
	color: #fff!important;
	opacity: 1!important;
	padding-left: 20px;
    padding-right: 20px;
    margin-right: 10px;
    margin-left: 10px;
}
#header-outer:not([data-lhe="animated_underline"]) header#top nav ul li.button_solid_color a,
#header-outer:not([data-lhe="animated_underline"]) header#top nav ul li.button_bordered a {
	padding-left: 20px;
    padding-right: 20px;
}

header#top nav > ul > li.button_bordered > a,
body #header-outer.transparent header#top nav > ul > li.button_bordered > a,
#header-outer[data-lhe="animated_underline"] header#top nav > ul > li.button_bordered > a,
#header-outer:not([data-lhe="animated_underline"]) header#top nav ul li.button_bordered a:hover {
	padding-left: 20px;
    padding-right: 20px;
    margin-right: 10px;
    margin-left: 10px;
}

body[data-header-search="false"][data-full-width-header="false"] #header-outer[data-lhe="animated_underline"][data-format="default"][data-cart="false"] header#top nav > ul > li:last-child > a {
	margin-right: 0!important;
}

#header-outer:not([data-lhe="animated_underline"]) header#top nav ul li a:hover, #header-outer:not([data-lhe="animated_underline"]) header#top nav .sf-menu li.sfHover > a, #header-outer:not([data-lhe="animated_underline"]) header#top nav .sf-menu li.current_page_ancestor > a, #header-outer:not([data-lhe="animated_underline"]) header#top nav .sf-menu li.current-menu-item > a, #header-outer:not([data-lhe="animated_underline"]) header#top nav .sf-menu li.current-menu-ancestor > a, #header-outer:not([data-lhe="animated_underline"]) header#top nav .sf-menu li.current_page_item > a {
	color: #27CFC3;
}

#header-outer[data-lhe="animated_underline"] header#top nav > ul > li:not([class*="button_"]) > a:after {
    -webkit-transition: width .3s ease-out, left .3s ease-out, border-color .3s ease-out;
    transition: width .3s ease-out, left .3s ease-out, border-color .3s ease-out;
    position: absolute;
    display: block;
    bottom: -6px;
    left: 50%;
    width: 0;
    border-top: 2px solid #000;
    content: '';
    padding-bottom: inherit;
}

#header-outer[data-lhe="animated_underline"] header#top nav > ul > li > a:hover:after,
#header-outer[data-lhe="animated_underline"] header#top nav > ul > li.sfHover > a:after,
#header-outer[data-lhe="animated_underline"] header#top nav .sf-menu li.current_page_ancestor > a:after, 
#header-outer[data-lhe="animated_underline"] header#top nav .sf-menu li.current-menu-item > a:after, 
#header-outer[data-lhe="animated_underline"] header#top nav .sf-menu li.current-menu-ancestor > a:after, 
#header-outer[data-lhe="animated_underline"] header#top nav .sf-menu li.current_page_item > a:after  {
    width: 100%;
    left: 0;
}

#header-outer[data-lhe="animated_underline"] header#top nav > ul > li > a {
	padding-left: 0;
	padding-right: 0;
	margin-right: 10px;
	margin-left: 10px;
}

header#top nav .sf-menu li.current_page_item > a .sf-sub-indicator [class^="icon-"], header#top nav .sf-menu li.current_page_ancestor > a .sf-sub-indicator [class^="icon-"] {
    color: #27CFC3;
}

header#top nav ul li a {
	color: #888;
}

.sf-menu > li.current_page_ancestor > a > .sf-sub-indicator [class^="icon-"], .sf-menu > li.current-menu-ancestor > a > .sf-sub-indicator [class^="icon-"], .sf-menu > li.current_page_item > a > .sf-sub-indicator [class^="icon-"] {
	 color: #27CFC3;
}


.sf-menu ul li.current_page_item > a , .sf-menu ul li.current-menu-ancestor > a, .sf-menu ul li.current_page_ancestor > a  {
	color: #27CFC3;
}

body header#top nav > ul > li > ul.temp-hidden-display, body #header-secondary-outer nav > ul > li > ul.temp-hidden-display {
	display: block!important;
	opacity: 0;
	left: 0!important;
	right: auto!important;
}

body header#top nav > ul > li.edge > ul, body #header-secondary-outer nav > ul > li.edge > ul {
	left: auto;
	right: 0;
}

body header#top nav > ul > li li.edge > ul, body #header-secondary-outer nav > ul > li li.edge > ul {
	left: auto;
	right: 0;
}


header#top .span_9 {
	position: static!important;
}

header#top nav > ul > li.megamenu {
	position: inherit!important;	
}

header#top nav > ul > li.megamenu > ul.sub-menu {
	width: 100%;	
	left: 0px;
	padding: 15px 0px;
	background-color: #1C1C1C;
}

body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul.sub-menu {
	padding: 20px 0;
}
body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul > li {
	padding: 0 20px;
}

body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul > li > ul {
	margin: 0;
	padding: 0;
}

header#top nav > ul > li.megamenu > ul > li {
	display: table-cell!important;
    float: none!important;
	padding: 0px 15px;
	width: 33.33%;
}

header#top nav > ul > li.megamenu > ul > li:last-child {
	border-right: none!important;
}

header#top nav > ul > li.megamenu.columns-3 > ul > li { width: 33.33%; }
header#top nav > ul > li.megamenu.columns-4 > ul > li { width: 25%; }
header#top nav > ul > li.megamenu.columns-5 > ul > li { width: 20%; }
header#top nav > ul > li.megamenu.columns-6 > ul > li { width: 16.66%; }

header#top nav > ul > li.megamenu > ul > li ul {
	display: block!important;
	top: 0px!important;
	width: 100%;
	opacity: 1!Important;
	left: 0px!important;
	position: relative!important;
}

header#top nav > ul > li.megamenu > ul > li {
	border-right: 1px solid rgba(255, 255, 255, 0.08);
}

header#top nav > ul > li.megamenu ul li a {
	border-bottom: none!important;
	padding: 9px 15px;
}

body:not([data-header-format="left-header"]) header#top nav > ul > li.megamenu > ul > li > a {
	font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
    text-transform: uppercase;
    margin-bottom: 5px;
    letter-spacing: 2px;
}

body:not([data-header-format="left-header"]) header#top nav > ul > li.megamenu > ul ul li a:hover, body:not([data-header-format="left-header"]) header#top nav > ul > li.megamenu > ul ul li.current-menu-item a {
	color: #CCCCCC!important;
	background-color: #272727!important;
}

header#top nav > ul > li.megamenu > ul > li > a:hover, header#top nav > ul > li.megamenu > ul > li.sfHover > a {
	background-color: transparent!important;
}

header#top .menu-item-language .iclflag, #header-secondary-outer .menu-item-language .iclflag {
	top: 1px;
	position: relative;
	margin-right: 4px;
}

#header-secondary-outer .menu-item-language .iclflag {
	top: 2px;
}

body[data-dropdown-style="minimal"] .sf-menu > li > ul {
	opacity: 0!important;
	pointer-events: none;
	-ms-transform: translateY(25px);
	-webkit-transform: translateY(25px);
	transform: translateY(25px);
	-ms-transition: transform 0.25s, opacity 0.25s;
	-webkit-transition: transform 0.25s, opacity 0.25s;
	transition: transform 0.25s, opacity 0.25s;
	display: block!important;
	width: 20em;
	box-shadow: 0 3px 20px rgba(0,0,0,0.09);
	-webkit-box-shadow: 0 3px 20px rgba(0,0,0,0.09);
}
body[data-dropdown-style="minimal"] .sf-menu > li ul {
	padding: 20px;
	width: 20em;
}
body[data-dropdown-style="minimal"] .sf-menu > li ul a, body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu ul li a {
	padding: 7px 10px;
}
body[data-dropdown-style="minimal"] .sf-menu li ul li .sf-sub-indicator {
	top: 7px;
	right: 7px;
}
body[data-dropdown-style="minimal"][data-header-color="light"] #header-outer:not(.transparent) .sf-menu > li ul {
	border-top: 1px solid #e9e9e9;
}

body[data-dropdown-style="minimal"] #header-outer .open.widget_shopping_cart {
	-ms-transform: translateY(0px);
	-webkit-transform: translateY(0px);
	transform: translateY(0px);
	opacity: 1!important;
	pointer-events: auto;
}
body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart {
	-ms-transform: translateY(25px);
	-webkit-transform: translateY(25px);
	transform: translateY(25px);
	-ms-transition: transform 0.25s, opacity 0.25s;
	-webkit-transition: transform 0.25s, opacity 0.25s;
	transition: transform 0.25s, opacity 0.25s;
	display: block!important;
	opacity: 0!important;
	pointer-events: none;
}
body[data-dropdown-style="minimal"] .sf-men {
	z-index: auto;
}
body[data-dropdown-style="minimal"] .sf-menu > li.sfHover {
	z-index: 500;
}

body[data-dropdown-style="minimal"] header#top .sf-menu li ul li a, body[data-dropdown-style="minimal"]:not([data-header-format="left-header"]) header#top .sf-menu li ul, body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul.sub-menu,
body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart .cart_list li, body[data-dropdown-style="minimal"] #header-outer .cart-notification,
body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart_content,
body[data-dropdown-style="minimal"] #header-secondary-outer ul ul li a {
	background-color: #fff;
}

body[data-dropdown-style="minimal"] #header-outer header#top nav ul li li.sfHover > a .sf-sub-indicator [class^="icon-"],
body[data-dropdown-style="minimal"] #header-outer header#top nav ul li li:hover > a .sf-sub-indicator [class^="icon-"],
body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li:not(.megamenu) ul li.current-menu-ancestor > a .sf-sub-indicator [class^="icon-"] {
	color: #fff!important;
}

body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart, body[data-dropdown-style="minimal"] .woocommerce .cart-notification, body[data-dropdown-style="minimal"] #header-outer .cart-notification {
	box-shadow: 0 3px 20px rgba(0,0,0,0.09);
	-webkit-box-shadow: 0 3px 20px rgba(0,0,0,0.09);
}

body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart a.button:hover, .nectar-slide-in-cart .widget_shopping_cart a.button:hover { background-color: #333!important;}

body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li:not(.megamenu) ul a:hover,
body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li:not(.megamenu) li.sfHover > a,
body[data-dropdown-style="minimal"] #header-secondary-outer ul > li:not(.megamenu) li.sfHover > a,
body[data-dropdown-style="minimal"] #header-secondary-outer ul > li:not(.megamenu) ul a:hover,
body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li:not(.megamenu) ul li.current-menu-item > a,
body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li:not(.megamenu) ul li.current-menu-ancestor > a {
	color: #fff!important;
	background-color: #27CCC0!important;
}
body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li.megamenu ul ul li.current-menu-item > a,
body[data-dropdown-style="minimal"] #header-outer:not([data-format="left-header"]) header#top nav > ul > li.megamenu ul ul li.current-menu-ancestor > a,
body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul ul li.sfHover > a {
	color: #fff!important;
}

body[data-dropdown-style="minimal"] header#top .sf-menu li ul li a,
body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart .quantity,
body[data-dropdown-style="minimal"] #header-outer .widget_shopping_cart .cart_list li, body[data-dropdown-style="minimal"] #header-outer .cart-notification,
body[data-dropdown-style="minimal"] #header-outer .total, body[data-dropdown-style="minimal"] #header-outer .total strong,
body[data-dropdown-style="minimal"] #header-outer ul.product_list_widget li dl dd {
	color: #999;
}

body[data-dropdown-style="minimal"] header#top nav > ul > li.megamenu > ul ul li a:hover,
body[data-dropdown-style="minimal"]:not([data-header-format="left-header"]) header#top nav > ul > li.megamenu > ul ul li.current-menu-item a {
	color: #fff!important;
}

body[data-dropdown-style="minimal"] #header-outer header#top nav > ul > li.megamenu:hover ul li {
	pointer-events: auto!important;
}

body[data-dropdown-style="minimal"] .sf-menu li.megamenu li ul,
body[data-dropdown-style="minimal"] header#top .sf-menu li.megamenu ul .sub-menu {
	background-color: transparent!important;
}
body[data-dropdown-style="minimal"] .sf-menu li.megamenu li ul {
	-ms-transform: none!important;
	-webkit-transform: none!important;
	transform: none!important;
	border-top: 0!important;
	-webkit-box-shadow: none;
	box-shadow: none;
}

body[data-dropdown-style="minimal"] .sf-menu li li ul { 
	display: block!important;
	visibility: visible!important;
	top: 0!important;
	z-index: auto;
	left: 20em!important;
	margin-left: -20px;
    margin-top: -20px;
	-ms-transition: transform 0.25s, opacity 0.25s;
	-webkit-transition: transform 0.25s, opacity 0.25s;
	transition: transform 0.25s, opacity 0.25s; 
	box-shadow: 0 3px 20px rgba(0,0,0,0.09);
	-webkit-box-shadow:0 3px 20px rgba(0,0,0,0.09);
	opacity: 0!important; pointer-events: none; -ms-transform: translateX(25px); transform: translateX(25px); -webkit-transform: translateX(25px);
}

body[data-dropdown-style="minimal"][data-header-color="light"] .sf-menu li li ul {
	margin-top: -21px;
}

body[data-dropdown-style="minimal"] .sf-menu ul li a {
	border-bottom: 0!important;
}

body[data-dropdown-style="minimal"] .sf-menu li.sfHover > ul { 
	pointer-events: auto;
	opacity: 1!important;
	-ms-transform: translateY(0px) translateX(0px);
	-webkit-transform: translateY(0px) translateC(0px);
	transform: translateY(0px) translateX(0px);
}


/*header#top nav ul #search-btn {
	margin-left: 15px!important;
}*/

header#top nav ul.buttons li {
	line-height: 12px;
	position: relative;
}

header#top nav ul .slide-out-widget-area-toggle {
	margin-left: 15px;
	margin-right: 5px;
}

header#top nav ul #search-btn > div {
	border-left: 1px solid #e7e7e7;
	padding-left: 19px;
}

.ascend #header-outer[data-remove-border="true"][data-full-width="true"] header#top nav ul #search-btn > div {
	padding-left: 0;
}

body:not([data-is="minimal"]) #header-outer[data-remove-border="true"][data-full-width="true"] header#top nav .lines-button {
	top: -2px;
}

body[data-header-color="custom"] header#top nav ul #search-btn > div {
	border-left: 1px solid rgba(0,0,0,0.15);
}

header#top nav ul #search-btn a, header#top nav ul .slide-out-widget-area-toggle a { 
	padding-left: 23px;
	padding: 0px 0px 0px 0px;
	width: 24px;
	height: 24px;
	display: block;
	background-position: right top;
	background-repeat: no-repeat;
    box-sizing: content-box!important;
    -moz-box-sizing: content-box!important;
}

header#top nav ul .slide-out-widget-area-toggle a {
	width: 22px;
}

header#top nav ul[data-user-set-ocm="off"] .slide-out-widget-area-toggle {
	display: none;
}

header#top nav ul #search-btn a span {
	color: rgba(0,0,0,0.4);
	font-size: 16px;
	line-height: 24px!important;
	height: 24px!important;
	background-color: transparent!important;
	-webkit-transition: color 0.2s linear;
    -moz-transition: color 0.2s linear;
    -o-transition: color 0.2s linear;
    transition: color 0.2s linear;
}

header#top nav ul #search-btn a span:hover {
	color: #27CCC0!important;
}

#header-secondary-outer {
	position: fixed;
	top: 0px;
	left: 0px;
	width: 100%;
	z-index: 10000;
	background-color: #F8F8F8;
	border-bottom: 1px solid #ddd;
}

body[data-header-color="custom"] #header-secondary-outer {
	border-bottom: 1px solid rgba(0,0,0,0.1);
}

.admin-bar #header-secondary-outer, .logged-in.buddypress #header-secondary-outer {
	top: 31px;
}

#header-secondary-outer #social {
	float: left;
}

#header-secondary-outer #social li {
	float: left;
}

#header-secondary-outer #social a {
	line-height: 20px!important;
}

#header-secondary-outer #social i {
	height: 14px!important;
	line-height: 14px!important;
	font-size: 14px!important;
	color: #a6a6a6!important;
}

#header-outer[data-format="centered-menu"] header#top nav > ul.sf-menu > li#social-in-menu {
	position: absolute;
	right: 0;
}
body[data-header-search="true"][data-user-set-ocm="off"] #header-outer[data-format="centered-menu"][data-cart="false"] header#top nav > ul.sf-menu > li#social-in-menu,
body[data-header-search="false"][data-user-set-ocm="1"] #header-outer[data-format="centered-menu"][data-cart="false"] header#top nav > ul.sf-menu > li#social-in-menu { 
	right: 65px;
}
body[data-header-search="false"][data-user-set-ocm="off"] #header-outer[data-format="centered-menu"][data-cart="true"] header#top nav > ul.sf-menu > li#social-in-menu {
	right: 75px;
}

body[data-header-search="false"][data-user-set-ocm="1"] #header-outer[data-format="centered-menu"][data-cart="true"] header#top nav > ul.sf-menu > li#social-in-menu,
body[data-header-search="true"][data-user-set-ocm="off"] #header-outer[data-format="centered-menu"][data-cart="true"] header#top nav > ul.sf-menu > li#social-in-menu { 
	right: 152px;
}
body[data-header-search="true"][data-user-set-ocm="1"] #header-outer[data-format="centered-menu"][data-cart="false"] header#top nav > ul.sf-menu > li#social-in-menu { 
	right: 145px;
}
body[data-header-search="true"][data-user-set-ocm="1"] #header-outer[data-format="centered-menu"][data-cart="true"] header#top nav > ul.sf-menu > li#social-in-menu { 
	right: 226px;
}

#header-outer #social-in-menu i {
	font-size: 16px!important;
	color: inherit!important;
	background-color: transparent;
	transition: transform 0.25s ease, opacity 0.2s linear;
	-webkit-transition: -webkit-transform 0.25s ease , opacity 0.2s linear;
	text-align: center;
	line-height: 24px;
	height: 22px;
	width: 34px;
}

body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] #social-in-menu i {
	font-size: 20px!important;
	width: 38px;
	line-height: 26px;
	height: 26px;
	margin-bottom: -3px;
}

#header-outer #social-in-menu a {
	display: inline-block;
	margin-right: 0;
	margin-left: 0;
	overflow: hidden;
}

#header-outer #social-in-menu a:hover i {
	-webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    transform: translateY(-100%);
}

#header-outer #social-in-menu a i:after {
    position: absolute;
    top: 100%;
    left: 0;
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    width: 100%;
}
#header-outer #social-in-menu a i:before {
	width: 100%;
}

#header-outer #social-in-menu [class^="fa-"]:after, #header-outer #social-in-menu [class*=" fa-"]:after, #header-outer #social-in-menu .fa-vine:before, #header-outer #social-in-menu .fa-vine:after {
	text-decoration: inherit;
    display: block;
    speak: none;
}
#header-outer #social-in-menu .fa-vine {
	display: block;
	text-align: center;
}
#header-outer #social-in-menu i.fa-facebook {
	width: 28px;
}
#header-outer #social-in-menu .fa-instagram:after { content: "\f16d"; }
#header-outer #social-in-menu .fa-behance:after { content: "\f1b4" }
#header-outer #social-in-menu .fa-vine:after { content: "\f1ca" }
#header-outer #social-in-menu .fa-vk:after { content: "\f189" }
#header-outer #social-in-menu .icon-salient-spotify:after { content: "\f1bc" }
#header-outer #social-in-menu .fa-flickr:after { content: "\f16e" }
#header-outer #social-in-menu .fa-soundcloud:after { content: "\f1be" }
#header-outer #social-in-menu .fa-stackexchange:after { content: "\f16c" }
#header-outer #social-in-menu .fa-google-plus:after { content: "\f0d5" }
#header-outer #social-in-menu .fa-github-alt:after { content: "\f113" }
#header-outer #social-in-menu .fa-dribbble:after { content: "\f17d" }
#header-outer #social-in-menu .fa-tumblr:after { content: "\f173" }
#header-outer #social-in-menu .fa-youtube-play:after { content: "\f16a" }
#header-outer #social-in-menu .fa-linkedin:after { content: "\f0e1" }
#header-outer #social-in-menu .fa-pinterest:after { content: "\f0d2" }
#header-outer #social-in-menu .fa-vimeo:after { content: "\f27d" }
#header-outer #social-in-menu .fa-facebook:after { content: "\f09a" }
#header-outer #social-in-menu .fa-twitter:after { content: "\f099" }

#header-outer[data-format="default"] #social-in-menu {
	margin: 0 0 0 30px;
}

#header-outer[data-lhe="animated_underline"] header#top nav > ul > li#social-in-menu > a,
#header-outer[data-lhe="default"] header#top nav > ul > li#social-in-menu > a {
	margin-left: 0!important;
	margin-right: 0!important;
	padding-right: 0!important;
	padding-left: 0!important;
}

#header-secondary-outer #social i.icon-soundcloud { font-size: 18px!important; }

#header-secondary-outer #social li a {
	position: relative;
	padding: 8px 10px 8px 10px!important;
	height: 16px!important;
	box-sizing: content-box!important;
	-moz-box-sizing: content-box!important;
	-webkit-box-sizing: content-box!important;
	-o-box-sizing: content-box!important;
}

#header-secondary-outer #social a:hover i {
	color: #27CCC0!important;
}

#header-secondary-outer ul {
	height: 32px;	
	z-index: 1000;
}

#header-secondary-outer nav > ul > li > a {
	color: rgba(0,0,0,0.55);
	border-left: 1px solid #ddd;
	line-height: 13px!important;
	font-size: 11px!important;
	padding: 10px!Important;
}

body[data-header-color="custom"] #header-secondary-outer nav > ul > li > a {
	border-left: 1px solid rgba(0,0,0,0.1);
}

#header-secondary-outer nav > ul > li > a:hover, #header-secondary-outer nav > ul > li.current-menu-item > a, #header-secondary-outer nav > ul > li.current-menu-ancestor > a {
	color: rgba(0,0,0,0.8);
}

#header-secondary-outer nav > ul > li > a .sf-sub-indicator {
	margin-right: 5px;
	height: 11px!important;
}

#header-secondary-outer nav > ul > li:last-child {
	border-right: 1px solid #ddd;
}

body[data-header-color="custom"] #header-secondary-outer nav > ul > li:last-child {
	border-right: 1px solid rgba(0,0,0,0.1);
}

#header-secondary-outer nav > ul > li > a span.sf-sub-indicator [class^="icon-"], #header-secondary-outer nav > ul > li > a span.sf-sub-indicator [class*=" icon-"] {
	color: rgba(0,0,0,0.45)!important;
}

#header-secondary-outer ul ul li a {
	background-color: #1F1F1F;
	color: #CCCCCC;
}

#header-secondary-outer ul > li.menu-item-language-current > a {
	height: 32px!important;
	padding-top: 8px!important;
}


#header-secondary-outer #social li a.behance, #header-secondary-outer #social li a.vimeo {
	background-color: #a6a6a6!important;
	background-position: center;
	background-repeat: no-repeat;
	text-indent: -9999px;
}

#header-secondary-outer #social li a.behance:hover, #header-secondary-outer #social li a.vimeo:hover {
	background-color: #27CCC0!important;
}

#header-secondary-outer #social li a.vimeo {
	width: 15px;
}

#header-secondary-outer #social li a.behance {
	width: 17px;
}

header#top nav ul #search-btn a:hover, header#top nav ul li.sfHover #search-btn a:focus {
	
}

header#top nav ul #search-btn:hover span, header#top nav ul li.sfHover #search-btn:focus span {
	opacity: 1;
}

header#top #toggle-nav {
	position: relative;
	right: 0;
}

body[data-slide-out-widget-area="true"] #header-outer[data-has-menu="true"] header#top #toggle-nav {
	right: auto;
}

header#top #mobile-cart-link {
	position: absolute;
	right: 32px;
	top: 4px;
	display: none;
	width: 36px;
	height: 28px;
	text-align: right;
	margin-bottom: 10px;
	z-index: 10000;
}

header#top .span_9 > .slide-out-widget-area-toggle {
	display: none;
	position: absolute;
	right: 0px;
	top: 50%;
    margin-bottom: 10px;
    margin-top: -5px;
    z-index: 10000;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
}



header#top #toggle-nav i, header#top #mobile-cart-link i {
	background-color: transparent!important;
	color: #a9a9a9;
	line-height: 34px;
	font-size: 18px;
	width: 18px;
	transition: color 0.3s linear;
	-webkit-transition: color 0.3s linear;
}

header#top #toggle-nav i {
	font-size: 16px;
}

@media only screen and (min-width: 1001px) {
	
	body #header-outer[data-transparent-header="true"], body #header-outer[data-transparent-header="true"] .cart-menu {
		transition: background-color 0.40s ease, box-shadow 0.40s ease, margin 0.25s ease;	
		-moz-transition: background-color 0.40s ease, box-shadow 0.40s ease, margin 0.25s ease;
		-webkit-transition: background-color 0.40s ease, box-shadow 0.40s ease, margin 0.25s ease;
	}

	body #header-outer[data-transparent-header="true"].transparent, body #header-outer[data-transparent-header="true"].transparent .cart-menu,
	.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"] header#top nav ul #search-btn a,
	.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"] header#top nav ul .slide-out-widget-area-toggle a {
		transition: border-color 0.40s ease;	
		-moz-transition: border-color 0.40s ease;
		-webkit-transition: border-color 0.40s ease;
	}
	
	body #header-outer[data-transparent-header="true"].transparent .cart-menu,
	body #header-outer[data-transparent-header="true"].transparent.light-text .cart-menu,
	body #header-outer[data-transparent-header="true"].transparent.dark-text .cart-menu {
		background-color: transparent;
		border-left: 1px solid rgba(255,255,255,0.25);
	}
	
	body:not(.ascend) #boxed #header-outer[data-transparent-header="true"].transparent .cart-menu {
		border: none!important;
	}
	
	body #header-outer[data-transparent-header="true"] .cart-outer .cart-notification, body #header-outer[data-transparent-header="true"] .cart-outer .widget_shopping_cart {
		margin-top: 1px;
	}
	
	html body #header-outer[data-transparent-header="true"].transparent {
		background-color: transparent!important;
		box-shadow: none!important;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		-o-box-shadow: none;
		border-bottom: 1px solid rgba(255,255,255,0.25)!important;
	}
	
	#boxed #header-outer[data-transparent-header="true"].transparent {
		border-bottom: 1px solid rgba(255,255,255,0.25)!important;
	}

	body #header-outer[data-transparent-header="true"].transparent.side-widget-open {
		border: rgba(255,255,255,0);
	}
	body #header-outer[data-transparent-header="true"].side-widget-closed {
		border: rgba(255,255,255,0)!important;
	}
	
	body #header-outer[data-transparent-header="true"].transparent nav > ul > li > a { margin-bottom: -1px; }
	body #header-outer[data-transparent-header="true"][data-format="centered-menu"].transparent.side-widget-open.small-nav nav > ul > li > a { margin-bottom: 0px; }
	
	body #header-outer[data-transparent-header="true"] header#top nav ul #search-btn > div {
		border-left: 1px solid rgba(0,0,0,0.1);
	}
	
	body #header-outer[data-transparent-header="true"].transparent header#top nav ul #search-btn > div {
		border-left: 1px solid rgba(255,255,255,0.25);
	}
	
	body #header-outer[data-transparent-header="true"] .ns-loading-cover {
		background-color: #393939;
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		display: none;
	}
	
	#header-outer[data-transparent-header="true"].transparent #logo img, 
	#header-outer[data-transparent-header="true"] #logo .starting-logo,
	#header-outer[data-transparent-header="true"].light-text #logo img {
		opacity: 0;
		-ms-filter: 'alpha(opacity=0)';
	}
	
	#header-outer[data-transparent-header="true"].transparent #logo .starting-logo,
	#header-outer[data-transparent-header="true"].light-text #logo .starting-logo  {
		opacity: 1;
		-ms-filter: 'alpha(opacity=100)';
	}

	html body #header-outer[data-transparent-header="true"][data-remove-border="true"],
	.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul #search-btn a,
	.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul .slide-out-widget-area-toggle a,
	#header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] .cart-menu,
	#header-outer[data-transparent-header="true"][data-full-width="false"][data-remove-border="true"].transparent .cart-menu,
	html body #boxed #header-outer[data-transparent-header="true"][data-remove-border="true"] {
		border: none!important;
	}

	.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul #search-btn a:after,
	.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul .slide-out-widget-area-toggle a:after,
	.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] .cart-menu:after {
		border-left: 1px solid rgba(255, 255, 255, 0.25)!important;
		display: inline-block;
		content: "";
		width: 11px;
		height: 20px;
		position: absolute;
		left: -1px;
		opacity: 1;
		top: 50%;
		margin-top:-10px;
		transition: top 0.3s ease-out, margin-top 0.3s ease-out, height 0.3s ease-out, color 0.15s linear;
	}

	.ascend[data-header-search="false"] #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"][data-cart="false"] header#top nav ul .slide-out-widget-area-toggle a:after {
		display: none;
	}

	.ascend[data-header-search="false"] #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"][data-cart="false"][data-has-menu="false"] header#top nav ul .slide-out-widget-area-toggle a:after {
		border: none!important;
	}

	#header-outer.transparent[data-remove-border="true"] .ns-loading-cover {
		display: none!important;
	}

	body #header-outer.transparent[data-transparent-header="true"][data-remove-border="true"] {
		transition: background-color 0.4s ease 0s, box-shadow 0.4s ease 0s, margin 0.25s ease;
		-webkit-transition: background-color 0.4s ease 0s, box-shadow 0.4s ease 0s, margin 0.25s ease;
		-o-transition: background-color 0.4s ease 0s, box-shadow 0.4s ease 0s, margin 0.25s ease;
	}

	.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul #search-btn a:after,
	.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul .slide-out-widget-area-toggle a:after,
	.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] .cart-menu:after {
		height: 100%;
		color: #000;
		top: 0;
		border-left: 1px solid rgba(0, 0, 0, 0.07);
		display: inline-block;
		content: "";
		width: 11px;
		position: absolute;
		left: -1px;
		transition: top 0.3s ease, margin-top 0.3s ease, height 0.3s ease, color 0.15s linear;
	}
	
	body:not(.ascend) #header-outer[data-transparent-header="true"][data-remove-border="true"]:not(.transparent) .cart-menu:after {
		border-left: 1px solid rgba(0, 0, 0, 0);
	}

	.ascend[data-header-search="false"] #header-outer[data-full-width="true"][data-format="centered-logo-between-menu"][data-cart="false"] header#top nav ul .slide-out-widget-area-toggle a:after {
		border: none;
	}

	
}

body .no-transition,
body #slide-out-widget-area-bg.fullscreen-alt.open.no-transition,
body #slide-out-widget-area-bg.fullscreen-alt.no-transition {
	transition: none!important;
	-webkit-transition: none!important;
}
body #header-outer.no-bg-color {
	box-shadow: none!important;
	background-color: transparent!important;
}


html body #header-outer[data-transparent-header="true"][data-remove-border="true"].transparent.pseudo-data-transparent,
.ascend #header-outer[data-remove-border="true"].transparent[data-transparent-header="true"][data-full-width="true"].transparent.pseudo-data-transparent header#top nav ul #search-btn a, 
.ascend #header-outer[data-remove-border="true"].transparent[data-transparent-header="true"][data-full-width="true"].transparent.pseudo-data-transparent .cart-menu, 
.ascend #header-outer[data-remove-border="true"].transparent[data-transparent-header="true"][data-full-width="true"].transparent.pseudo-data-transparent header#top nav ul .slide-out-widget-area-toggle a {
	border-color: transparent!important;
}

#header-outer.slide-out-hover {
	-webkit-transition: background-color .4s ease;
    -moz-transition: background-color  .4s ease;
    -ms-transition: background-color  .4s ease;
    transition: background-color .4s ease;
}
#header-outer.slide-out-hover header, #header-outer.slide-out-hover > .cart-outer {
	 -webkit-transition: opacity .4s ease;
    -moz-transition: opacity  .4s ease;
    -ms-transition: opacity  .4s ease;
    transition: opacity .4s ease;
}

#header-outer.pseudo-data-transparent.transparent header#top nav > ul > li > a, 
#header-outer.pseudo-data-transparent.transparent header#top nav ul #search-btn a span.icon-salient-search, 
#header-outer.pseudo-data-transparent.transparent nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.pseudo-data-transparent.transparent nav > ul > li > a > .sf-sub-indicator [class*=" icon-"], 
#header-outer.pseudo-data-transparent.transparent .cart-menu .cart-icon-wrap .icon-salient-cart, 
.ascend #boxed #header-outer.pseudo-data-transparent.transparent .cart-menu .cart-icon-wrap .icon-salient-cart {
    color: #ffffff!important;
    opacity: 0.75!important;
    transition: opacity 0.2s linear,color 0.2s linear;
}
#header-outer.pseudo-data-transparent.transparent:not(.directional-nav-effect) > header#top nav ul .slide-out-widget-area-toggle a i.lines:before,
#header-outer.pseudo-data-transparent.transparent:not(.directional-nav-effect) > header#top nav ul .slide-out-widget-area-toggle a i.lines:after {
	background-color: #ffffff!important;
}
#header-outer.pseudo-data-transparent.transparent header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a:hover i.lines-button:after, 
#header-outer.pseudo-data-transparent.transparent header#top nav ul .slide-out-widget-area-toggle a:hover i.lines, 
#header-outer.pseudo-data-transparent.transparent header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:before,
#header-outer.pseudo-data-transparent.transparent header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:after {
	opacity: 1!important;
}

#header-outer.slide-out-hover header#top.all-hidden, #header-outer > .cart-outer.all-hidden  {
	opacity: 0;
}


body #header-outer-bg-only {
	display: block;
	width: 100%;
	height: 100%;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 1000;
	content: ' ';
	box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);
    -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.22);
    -webkit-transition: opacity .7s cubic-bezier(0.2,1,.2,1), transform .7s cubic-bezier(0.2,1,.2,1);
    -moz-transition: opacity  .7s cubic-bezier(0.2,1,.2,1), transform .7s cubic-bezier(0.2,1,.2,1);
    -ms-transition: opacity  .7s cubic-bezier(0.2,1,.2,1), transform .7s cubic-bezier(0.2,1,.2,1);
    transition: opacity .7s cubic-bezier(0.2,1,.2,1), transform .7s cubic-bezier(0.2,1,.2,1);
}


body.admin-bar #header-outer-bg-only {
	top: 32px;
}


/*light/dark text color */
#header-outer.light-text header#top nav > ul > li > a, 
#header-outer.light-text header#top nav ul #search-btn a span, 
#header-outer.light-text nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.light-text .cart-menu .cart-icon-wrap .icon-salient-cart, 
.ascend #boxed #header-outer.light-text .cart-menu .cart-icon-wrap .icon-salient-cart,
#header-outer:not([data-lhe="animated_underline"]).light-text header#top nav .sf-menu li.current-menu-item > a, 
#header-outer:not([data-lhe="animated_underline"]).light-text header#top nav > ul > li > a:hover, 
#header-outer:not([data-lhe="animated_underline"]).light-text header#top nav .sf-menu > li.sfHover > a {
	color: #fff!important;
	opacity: 0.7;
}
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a i.lines:after,
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
    background-color: #ffffff !important;
}

#header-outer.dark-text header#top nav > ul > li > a, 
#header-outer.dark-text header#top nav ul #search-btn a span, 
#header-outer.dark-text nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.dark-text .cart-menu .cart-icon-wrap .icon-salient-cart, 
.ascend #boxed #header-outer.dark-text .cart-menu .cart-icon-wrap .icon-salient-cart,
#header-outer:not([data-lhe="animated_underline"]).dark-text header#top nav .sf-menu li.current-menu-item > a {
	color: #444!important;
	opacity: 0.7;
}
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a i.lines:after {
    background-color: #444 !important;
}

#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a i.lines,
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a i.lines,
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a i.lines-button:after {
	opacity: 0.7;
}

#header-outer.light-text header#top nav > ul > li > a:hover, #header-outer.light-text header#top nav .sf-menu > li.sfHover > a, #header-outer.light-text header#top nav .sf-menu > li.current_page_ancestor > a, 
#header-outer.light-text header#top nav .sf-menu > li.current-menu-item > a, #header-outer.light-text header#top nav .sf-menu > li.current-menu-ancestor > a, #header-outer.light-text header#top nav .sf-menu > li.current_page_item > a,
#header-outer.light-text header#top nav > ul > li > a:hover > .sf-sub-indicator > i, #header-outer.light-text header#top nav > ul > li.sfHover > a > span > i, #header-outer.light-text header#top nav ul #search-btn a:hover span, #header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a:hover span,
#header-outer.light-text header#top nav .sf-menu > li.current-menu-item > a i, #header-outer.light-text header#top nav .sf-menu > li.current-menu-ancestor > a i,
#header-outer.light-text .cart-outer:hover .icon-salient-cart, .ascend #boxed #header-outer.light-text .cart-outer:hover .cart-menu .cart-icon-wrap .icon-salient-cart,
#header-outer.dark-text header#top nav > ul > li > a:hover, #header-outer.dark-text header#top nav .sf-menu > li.sfHover > a, #header-outer.dark-text header#top nav .sf-menu > li.current_page_ancestor > a, 
#header-outer.dark-text header#top nav .sf-menu > li.current-menu-item > a, #header-outer.dark-text header#top nav .sf-menu > li.current-menu-ancestor > a, #header-outer.dark-text header#top nav .sf-menu > li.current_page_item > a,
#header-outer.dark-text header#top nav > ul > li > a:hover > .sf-sub-indicator > i, #header-outer.dark-text header#top nav > ul > li.sfHover > a > span > i, #header-outer.dark-text header#top nav ul #search-btn a:hover span, #header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a:hover span,
#header-outer.dark-text header#top nav .sf-menu > li.current-menu-item > a i, #header-outer.dark-text header#top nav .sf-menu > li.current-menu-ancestor > a i,
#header-outer.dark-text .cart-outer:hover .icon-salient-cart, .ascend #boxed #header-outer.dark-text .cart-outer:hover .cart-menu .cart-icon-wrap .icon-salient-cart {
	opacity: 1!important;
}

#header-outer.light-text.side-widget-open header#top nav ul .slide-out-widget-area-toggle a i.lines,
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a:hover i.lines, 
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a:hover i.lines-button:after, 
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:before,
#header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:after,
#header-outer.dark-text.side-widget-open header#top nav ul .slide-out-widget-area-toggle a i.lines,
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a:hover i.lines, 
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:before,
#header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:after {
	opacity: 1!important;
}

#header-outer.light-text header#top nav > ul > li > a, 
#header-outer.light-text header#top nav > ul > li *,
body.ascend #header-outer.light-text .cart-menu,
#header-outer.dark-text header#top nav > ul > li > a, 
#header-outer.dark-text header#top nav > ul > li *,
.ascend #header-outer[data-full-width="true"].dark-text header#top nav ul #search-btn a, 
.ascend #header-outer[data-full-width="true"].dark-text header#top nav ul .slide-out-widget-area-toggle a,
.ascend #header-outer[data-full-width="true"].light-text header#top nav ul #search-btn a, 
.ascend #header-outer[data-full-width="true"].light-text header#top nav ul .slide-out-widget-area-toggle a,
body.ascend #header-outer.dark-text .cart-menu {
	border-color: rgba(0,0,0,0.1);
}

#header-outer[data-full-width="true"][data-cart="true"] header#top nav ul .slide-out-widget-area-toggle {
	position: relative;
}




#search-outer {
	top:0px;
	left:0px;
	width:100%;
	height:75px;
	position:absolute;
	z-index:10000;
	overflow: visible!important;
	display:none;
	background-color:#fff;
}

#boxed #search-outer, #boxed #header-outer, #boxed #header-secondary-outer {
	padding-right: 0!important;
}

#search-box {
	position: relative;
}

#search-outer .container {
	overflow: visible!important;
}

#search-outer  #search input[type=text] {
	width: 100%;
	color: #888;
	font-size: 43px;
	line-height: 43px;
	position: relative;
	padding: 0px!important;
	background-color: transparent;
	border: 0px;
	transition: none;
	-moz-transition: none;
	-webkit-transition: none;
	-o-transition: none;
	box-shadow: none!important;
	-moz-box-shadow: none!important;
	-webkit-box-shadow: none!important;
	-o-box-shadow: none!important;
	font-family: 'Open Sans';
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1px;
}

#search-outer .ui-widget-content {
	background-color: #1F1F1F;
	border: none!important;
	border-radius: 0px!important;
	-moz-border-radius: 0px!important;
	-webkit-border-radius: 0px!important;
	-o-border-radius: 0px!important;
	background-image: none!important;
}

#search-outer .ui-widget-content li:hover, .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
	background-color: #272727;
	cursor: pointer;
}

#search-outer .ui-widget-content li:hover a {
	background-image: none!important;	
}

#search-outer .ui-widget-content li:last-child a {
	border: none!Important;
}

#search-outer .ui-widget-content li a {
	border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.ui-helper-hidden-accessible { 
	display: none;
}

#search-outer .ui-helper-hidden-accessible {
	display: none!important;
}

#search-outer .ui-widget-content img, #search-outer .ui-widget-content i {
	width: 40px!important;
	height: auto!important;
	float: left;
	margin-right: 15px;
}

#search-outer .ui-widget-content i {
	height: 40px;
	line-height: 40px;
	font-size: 22px;
	background-color: rgba(255,255,255,0.1);
	border-radius: 0!important;
}

.ui-widget {
    font-family: Verdana,Arial,sans-serif;
    font-size: 1.1em;
}
.ui-menu {
    display: block;
    float: left;
    list-style: none outside none;
    margin: 0;
    padding: 2px;
}
.ui-autocomplete {
    cursor: default;
    position: absolute;
}

.ui-menu .ui-menu-item a {
    display: block;
    line-height: 1.5;
    padding: 0.2em 0.4em;
    text-decoration: none;
}

#search-outer .ui-widget-content {
	width: 100%!important;
	left: 0!important;
}

#search-outer .ui-widget-content li {
	line-height: 14px;
	clear: left;
	width: 100%;
	display: block;
	float: left;
	margin: 0px!important;
}

#search-outer .ui-widget-content li span.desc {
	position: relative;
	line-height: 14px;
	font-size: 11px;
}

#search-outer .ui-widget-content li a {
	color: #CCCCCC;	
	line-height: 1.4em!important;
	transition: none!important;
	-moz-transition: none!important;
	-webkit-transition: none!important;
	-o-transition: none!important;
	padding: 15px 15px;
} 

#search-outer > #search form {
	width: 92%;
	float: left;
}

#search-outer #search #close {
	list-style: none;
}

#search-outer  #search #close a {
	position: absolute;
	right: 0px;
	top: 24px;
	display: block;
	width: 24px;
	height: 17px;
	line-height: 22px;
	z-index: 10;
}

#search-outer  #search #close a span {
	color: #a0a0a0;
	font-size: 18px!important;
	height: 20px!important;
	line-height: 19px!important;
	background-color: transparent!important;
	-webkit-transition: color 0.2s linear;
    -moz-transition: color 0.2s linear;
    -o-transition: color 0.2s linear;
    transition: color 0.2s linear;
}


#search-outer > #search #close a:hover span {
	color: #27CFC3;
}

#header-outer #search { 
	position: relative;
}

#header-outer .row .col.span_3, #header-outer .row .col.span_9 {
	width: auto;
}

#header-outer .row .col.span_9 {
	float: right;
}

#header-outer[data-full-width="true"] header > .container, 
#header-secondary-outer[data-full-width="true"] > .container {
	width: 100%;
	max-width: 100%;
	padding: 0 28px;
}

body .container .portfolio-filters-inline.full-width-content .container,
body .container .portfolio-filters-inline.full-width-content .container:not(.tab-container):not(.recent-post-container) {
	width: 100%;
	max-width: 100%;
	padding: 0 31px!important;
}

#header-secondary-outer[data-full-width="true"] > .container nav > ul > li:last-child, #header-secondary-outer[data-full-width="true"] nav > ul#social > li:first-child > a {
	border: none;
}



.row .col h3, .row .col h4 {
	margin-bottom: 8px;
}


.row .col img {
	margin-bottom: 15px;
	max-width: 100%;
	width: auto;
	height: auto;
}


#mobile-menu {
	position: relative;
	top: 0px;
	display: none;
	background-color: #1F1F1F;
 	padding: 0px;
    z-index: 100000;
}

#mobile-menu .container > ul > li:first-child {
	padding-top: 10px;	
}

#mobile-menu .container > ul > li:last-child {
	padding-bottom: 10px;
}

#mobile-menu .container > ul > li:last-child a {
	border-bottom: 0px;
}

#mobile-menu ul li a {
	border-bottom: 1px dotted rgba(255, 255, 255, 0.2);
    color: rgba(255, 255, 255, 0.6);
    font-size: 12px;
    display: block;
    position: relative;
    padding: 16px 0 !important;
}

#mobile-menu ul li a .sf-sub-indicator i {
	color: #888!important;
}

#mobile-menu ul li ul {
	display: none;
	margin-left: 20px;
}

#mobile-menu ul li a:hover, #mobile-menu ul li a:hover [class^="icon-"], #mobile-menu li.open > a, #mobile-menu ul li.current-menu-item > a, #mobile-menu ul li.current-menu-ancestor > a {
	color: #fff;
}

body #mobile-menu li.open > a [class^="icon-"] {
	color: #27CFC3; 
}

#mobile-menu #mobile-search {
	margin: 10px 0px 0px 0px;
}


#mobile-menu input[type=text] {
	margin-top: 15px;
	margin-bottom: 15px;
	background-color: #171717;
	color: rgba(255, 255, 255, 0.7);
	padding: 15px 15px 15px 40px!important;
	border: 0px!important;
	border-bottom: 1px solid #2e2e2e!important;
	border-radius: 2px 2px 2px 2px;
	-moz-border-radius: 2px 2px 2px 2px;
	-o-border-radius: 2px 2px 2px 2px;
	-webkit-border-radius: 2px 2px 2px 2px;
	box-shadow: 0px 1px 3px rgba(0,0,0,0.7) inset;
	-moz-box-shadow: 0px 1px 3px rgba(0,0,0,0.7) inset;
	-webkit-box-shadow: 0px 1px 3px rgba(0,0,0,0.7) inset;
	-o-box-shadow: 0px 1px 3px rgba(0,0,0,0.7) inset;
	background-image: url(img/icons/mag-glass-mobile.png);
	background-repeat: no-repeat;
	background-position: 15px center;
}

@media only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5),
only screen and (min-resolution: 144dpi) {
   #mobile-menu input[type=text] {
   		background-size: 14px 14px;
      	background-image: url(img/icons/mag-glass-mobile@2x.png)!important;
   }
}

#header-outer.highzI {
	z-index: 9999;
}

/*hhun*/

body[data-hhun="1"] #header-outer:not(.parallax-contained) {
	position: absolute;
}

@media only screen and (min-width: 1000px) {
	body[data-hhun="1"]:not(.no-scroll) #header-outer[data-permanent-transparent="false"]:not(.detached):not(.parallax-contained):not(.at-top-before-box),
	body[data-hhun="1"]:not(.no-scroll) #header-outer[data-permanent-transparent="false"][data-using-secondary="1"].detached:not(.parallax-contained):not(.at-top-before-box) {
		top: 0!important;
	}
	body[data-hhun="1"].admin-bar:not(.no-scroll) #header-outer[data-permanent-transparent="false"][data-using-secondary="1"].detached:not(.parallax-contained):not(.at-top-before-box) {
		top: 32px!important;
	}

	body[data-hhun="1"]:not(.no-scroll) #header-outer[data-permanent-transparent="false"][data-using-secondary="1"]:not(.detached):not(.parallax-contained):not(.at-top-before-box) {
		top:33px!important;
	}
}

body[data-hhun="1"] #header-secondary-outer {
	position: absolute;
	top: 0;
}


body[data-hhun="1"] #header-outer.detached:not(.side-widget-open) {
  -webkit-transform: translateY(0)!important;
  -moz-transform: translateY(0)!important;
  -o-transform: translateY(0)!important;
  transform: translateY(0)!important;
   border-color: rgba(255,255,255,0);
}

/* when hidden it goes up */
body[data-hhun="1"]  #header-outer.invisible:not(.side-widget-open) {
  -webkit-transform: translateY(-100%)!important;
  -moz-transform: translateY(-100%)!important;
  -o-transform: translateY(-100%)!important;
  transform: translateY(-100%)!important;
  -webkit-transition: -webkit-transform .2s!important;
  -moz-transition: -moz-transform .2s!important;
  -o-transition: -o-transform .2s!important;
  transition: transform .2s!important;
  z-index: 9998!important;
  pointer-events: none!important;
}




/* when shown & detached position is fixed */
body[data-hhun="1"] #header-outer.transparent[data-transparent-header="true"][data-remove-border="true"][data-permanent-transparent="1"].detached,
body[data-hhun="1"] #header-outer.detached {
  position: fixed!important;
  z-index: 9998!important;
  -webkit-transition: -webkit-transform .3s, height .3s, background .4s, opacity .3s, border-color 0.4s;
  -moz-transition: -moz-transform .3s, height .3s, background .4s, opacity .3s, border-color 0.4s;
  -o-transition: -o-transform .3s, height .3s, background .4s, opacity .3s, border-color 0.4s;
  transition: transform .3s, height .3s, background .4s, opacity .3s, border-color 0.4s;
}

body[data-hhun="1"] #header-outer.transparent.at-top {
	transition: background-color 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
}

/*-------------------------------------------------------------------------*/
/*	3.	Main Content
/*-------------------------------------------------------------------------*/

.row .col.section-title {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 36px 0px;
	border-bottom: 1px solid #ddd;	
}

#full_width_portfolio .row .col.section-title {
	border-bottom: 0px;
	padding-bottom: 0px;
}

.row .col.section-title.project-title, .row .col.section-title.blog-title {
	margin-bottom: 14px;
}

.project-additional {
	margin-left: 0px!important;
	color: #999999;
	font-size: 11px;
	margin-top: 6px;
	margin-bottom: 0px!important;
}

.project-additional li {
	list-style: none!important;
}

.home .row .col.section-title {
	padding: 0px 0px 3em 0px;
}

.row .col.section-title h1, .row .col.section-title h2 {
	margin-bottom: 0px;
	font-family: 'Open Sans';
	font-weight: 600;
	letter-spacing: -1px;
	position: relative;
}

.row .col.section-title h2 {
	margin-bottom: 5px;
}

.page-template-template-portfolio-php .row .col.section-title h1 {
	margin-bottom: 0px!important;
}

.row .col.section-title h1 {
	top: 3px;
}

.row .col.section-title span {
	font-size: 20px;
	line-height: 20px;
	color: #888;
	top: 0px;
	position: relative;
	text-transform: none;
	font-family: 'Open Sans';
	font-weight: 300;
	padding-left: 10px;
}

.archive.author .row .col.section-title span,
.archive.category .row .col.section-title span,
.archive.tag .row .col.section-title span,
.archive.date .row .col.section-title span {
	padding-left: 0;
}

.row .col.section-title h1 { 
	font-size: 28px; 
	margin-bottom: 0px;
}

.row .col.section-title p {
	font-size: 20px;
	line-height: 28px;
	padding-bottom: 0px;
	font-family: 'Open Sans';
	font-weight: 300;
}

.wpb_wrapper > .divider, .wpb_wrapper > .divider-border , .wpb_wrapper > .divider-small-border, .wpb_text_column > .wpb_wrapper > *:last-child, .wpb_wrapper > .divider-wrap {
	margin-bottom: 0px;
}

.divider {
	height: 20px;
}

.divider-border {
	margin: 35px auto 35px auto;
	background-color: #ddd;
	height: 1px;
}

.span_12.light .divider-border {
	background-color: rgba(255,255,255,0.3);
}

.centered-text .divider-small-border {
	margin: 25px auto;
}

.divider-small-border {
	margin: 25px 0;
	width: 20%;
	height: 1px;
	background-color: #ddd;
}

.divider-border[data-animate="yes"], .divider-small-border[data-animate="yes"] {
	visibility: hidden;
	transform-origin: left;
	-webkit-transform-origin: left;
}

.centered-text .divider-border[data-animate="yes"], .centered-text .divider-small-border[data-animate="yes"] {
	transform-origin: center;
	-webkit-transform-origin: center;
}

body .wpb_separator, body .vc_text_separator {
	border-color: rgba(0,0,0,0.06);
}

body .vc_text_separator div {
	background-color: #f8f8f8;
	font-family: 'Open Sans';
	font-weight: 300;
	font-size: 22px;
	line-height: 32px;
    letter-spacing: 0.5px;
	top: -20px;
}

.light .divider-small-border {
	background-color: rgba(255,255,255,0.6);
}

.nectar-dropcap {
	font-size: 4em;
	display: block;
	float: left;
	padding: 5px 10px 0px 0;
}

.nectar-dropcap span {
	display: block;
}

.col.boxed, .wpb_column.boxed {
	-o-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-color: #fff;
	padding: 25px 15px 15px 15px;
	position: relative;
	-webkit-transition: top 0.2s linear,-webkit-box-shadow 0.2s linear;
    -moz-transition: top 0.2s linear,-moz-box-shadow 0.2s linear;
    -o-transition: top 0.2s linear,-o-box-shadow 0.2s linear;
    transition: top 0.2s linear,box-shadow 0.2s linear;
}

.col.boxed span.bottom-line, .wpb_column.boxed span.bottom-line {
	height: 1px;
	width: 100%;
	display: block;
	position: absolute;
	bottom: 2px;
	left: 0px;
	background-color: #E8E8E8;
}

.col.boxed img, .wpb_column.boxed img {
	padding: 0px 15px;
}

.col.boxed:hover, .wpb_column.boxed:hover {
	top: -4px;
	-moz-box-shadow: 0 2px 3px rgba(0,0,0,0.3);
	-webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.3);
    box-shadow: 0 2px 3px rgba(0,0,0,0.3);
}

.col.centered-text, .wpb_column.centered-text {
	text-align: center;
}

.col.centered-text ul, .wpb_column.centered-text ul {
	display: inline-block;
	text-align: center;	
	margin-left: 0!important;
}

.col.centered-text ul, .wpb_column.centered-text ul {
	text-align: left;
}

.wpb_column {
	background-position: center;
}

.wpb_column[data-has-bg-color="true"] .wpb_wrapper, .wpb_column[data-hover-bg^="#"] .wpb_wrapper {
	position: relative;
	z-index: 2;
}

.wpb_column[data-has-bg-color="true"]:before, .wpb_column[data-hover-bg^="#"]:before, 
.wpb_column[data-has-bg-color="true"] .column-inner-wrap .column-inner:before, 
.wpb_column[data-hover-bg^="#"] .column-inner-wrap .column-inner:before  {
	position: absolute;
	z-index: 1;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	content: ' ';
	display: block;
	opacity: 0;
	transition: background-color 0.35s ease, opacity 0.35s ease;
	-webkit-transition: background-color 0.35s ease, opacity 0.35s ease;
	-o-transition: background-color 0.35s ease, opacity 0.35s ease;
	-moz-transition: background-color 0.35s ease, opacity 0.35s ease;
}

.wpb_column[data-has-bg-color="true"]:before, .wpb_column[data-hover-bg^="#"]:before {
	will-change: opacity, background-color;
}

.col.centered-text img, .wpb_column.centered-text img, .col.center img {
	margin: 0 auto!important;
}

.col.span_3 .col.span_12 i, .col.span_4 .col.span_12 i {
	margin-bottom: 0px;
}

body .wpb_text_column {
	margin-bottom: 0px;
}

body .wpb_text_column h2:last-child, body .wpb_text_column h3:last-child {
	margin-bottom: 10px;
}


/* Full width content solumn sizing*/

.wpb_row .span_12 > .col.padding-1-percent, .column-inner.padding-1-percent { padding: 1%; }
.wpb_row .span_12 > .col.padding-2-percent, .column-inner.padding-2-percent { padding: 2%; }
.wpb_row .span_12 > .col.padding-3-percent, .column-inner.padding-3-percent { padding: 3%; }
.wpb_row .span_12 > .col.padding-4-percent, .column-inner.padding-4-percent { padding: 4%; }
.wpb_row .span_12 > .col.padding-5-percent, .column-inner.padding-5-percent { padding: 5%; }
.wpb_row .span_12 > .col.padding-6-percent, .column-inner.padding-6-percent { padding: 6%; }
.wpb_row .span_12 > .col.padding-7-percent, .column-inner.padding-7-percent { padding: 7%; }
.wpb_row .span_12 > .col.padding-8-percent, .column-inner.padding-8-percent { padding: 8%; }
.wpb_row .span_12 > .col.padding-9-percent, .column-inner.padding-9-percent { padding: 9%; }
.wpb_row .span_12 > .col.padding-10-percent, .column-inner.padding-10-percent { padding: 10%; }
.wpb_row .span_12 > .col.padding-11-percent, .column-inner.padding-11-percent { padding: 11%; }
.wpb_row .span_12 > .col.padding-12-percent, .column-inner.padding-12-percent { padding: 12%; }
.wpb_row .span_12 > .col.padding-13-percent, .column-inner.padding-13-percent { padding: 13%; }
.wpb_row .span_12 > .col.padding-14-percent, .column-inner.padding-14-percent { padding: 14%; }
.wpb_row .span_12 > .col.padding-15-percent, .column-inner.padding-15-percent { padding: 15%; }

.col[data-padding-pos="right"], .column-inner[data-padding-pos="right"],
body .wpb_row .span_12 > .col[data-padding-pos="right"], body .wpb_row .span_12 > .column-inner[data-padding-pos="right"] {
	padding-left: 0!important;
	padding-top: 0!important;
	padding-bottom: 0!important;
}
.col[data-padding-pos="left"], .column-inner[data-padding-pos="left"],
body .wpb_row .span_12 > .col[data-padding-pos="left"], body .wpb_row .span_12 > .column-inner[data-padding-pos="left"] {
	padding-right: 0!important;
	padding-top: 0!important;
	padding-bottom: 0!important;
}
.col[data-padding-pos="bottom"], .column-inner[data-padding-pos="bottom"],
body .wpb_row .span_12 > .col[data-padding-pos="bottom"], body .wpb_row .span_12 > .column-inner[data-padding-pos="bottom"] {
	padding-right: 0!important;
	padding-top: 0!important;
	padding-left: 0!important;
}

.col[data-padding-pos="top"], .column-inner[data-padding-pos="top"] {
	padding-right: 0!important;
	padding-bottom: 0!important;
	padding-left: 0!important;
}

.col[data-padding-pos="top-right"], .column-inner[data-padding-pos="top-right"] {
	padding-bottom: 0!important;
	padding-left: 0!important;
}
.col[data-padding-pos="top-left"], .column-inner[data-padding-pos="top-left"] {
	padding-bottom: 0!important;
	padding-right: 0!important;
}
.col[data-padding-pos="top-bottom"], .column-inner[data-padding-pos="top-bottom"] {
	padding-left: 0!important;
	padding-right: 0!important;
}
.col[data-padding-pos="bottom-right"], .column-inner[data-padding-pos="bottom-right"] {
	padding-left: 0!important;
	padding-top: 0!important;
}
.col[data-padding-pos="bottom-left"], .column-inner[data-padding-pos="bottom-left"] {
	padding-right: 0!important;
	padding-top: 0!important;
}
.col[data-padding-pos="left-right"], .column-inner[data-padding-pos="bottom-right"],
body .wpb_row .span_12 > .col[data-padding-pos="left-right"], body .wpb_row .span_12 > .column-inner[data-padding-pos="bottom-right"] {
	padding-top: 0!important;
	padding-bottom: 0!important;
}
/*****************Nectar Button ******************/

.btn {
	padding: 8px 16px;
}

.nectar-button {
	border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
	-webkit-border-radius: 5px 5px 5px 5px;
	-o-border-radius: 5px 5px 5px 5px;
    box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1);
    -moz-transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1);
    -webkit-transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1);
    -o-transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1);
    color: #FFFFFF;
    font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
    letter-spacing: 2px;
    padding: 13px 18px;
    position: relative;
    text-transform: uppercase;
    top: -3px;
    margin-bottom: 10px;
    opacity: 1;
    line-height: 20px;
    background-color: #27CFC3;
    display: inline-block;
}
.nectar-3d-transparent-button {
	text-transform: uppercase;
	font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
	line-height: 20px;
	visibility: hidden;
}
.nectar-button.small {
    border-radius: 2px 2px 2px 2px;
    font-size: 11px;
    padding: 8px 14px;
    letter-spacing: 2px;
    color: #FFFFFF;
    box-shadow: 0 -1px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -1px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -1px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -1px rgba(0, 0, 0, 0.1) inset;
}

.nectar-button.medium {
    border-radius: 3px 3px 3px 3px;
    padding: 10px 15px;
    font-size: 12px;
    letter-spacing: 2px;
    color: #FFFFFF;
    box-shadow: 0 -2px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -2px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -2px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -2px rgba(0, 0, 0, 0.1) inset;
}

.nectar-button.large {
    font-size: 14px;
    padding: 15px 22px;
    box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
}

.nectar-button.jumbo {
    font-size: 18px;
    padding: 25px 40px;
    box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
}

.nectar-button.extra_jumbo {
    font-size: 60px;
    line-height: 60px;
    padding: 60px 90px;
    box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
}
.nectar-button.small.see-through, .nectar-button.small.see-through-2, .nectar-button.small.see-through-3 {
	padding-top: 6px;
	padding-bottom: 6px;
}
.nectar-button.medium.see-through, .nectar-button.medium.see-through-2, .nectar-button.medium.see-through-3 {
	padding-top: 9px;
	padding-bottom: 9px;
}
.nectar-button.large.see-through, .nectar-button.large.see-through-2, .nectar-button.large.see-through-3 {
	border-width: 2px!important;
	padding-top: 13px;
	padding-bottom: 13px;
}
.nectar-button.jumbo.see-through, .nectar-button.jumbo.see-through-2, .nectar-button.jumbo.see-through-3 {
	border-width: 4px!important;
	padding-top: 21px;
	padding-bottom: 21px;
}
.nectar-button.extra_jumbo.see-through, .nectar-button.extra_jumbo.see-through-2, .nectar-button.extra_jumbo.see-through-3 {
	border-width: 10px!important;
}

.nectar-button.extra_jumbo.has-icon, .nectar-button.tilt.extra_jumbo.has-icon {
	padding-left: 80px;
	padding-right: 80px;
}

.nectar-button.extra_jumbo i, .nectar-button.tilt.extra_jumbo i {
	right: 75px;
}
.nectar-button.has-icon.extra_jumbo:hover i, .nectar-button.tilt.extra_jumbo.has-icon i {
	-ms-transform: translateX(13px);
    -webkit-transform: translateX(13px);
    transform: translateX(13px);
}
.nectar-button.has-icon.extra_jumbo:hover span, .nectar-button.tilt.extra_jumbo.has-icon span {
	-ms-transform: translateX(-30px);
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px);
}

.nectar-button.extra_jumbo i {
	font-size: 40px!important;
	margin-top: -20px!important;
	line-height: 40px!important;
}

body .nectar-button em {
	font-size: inherit;
	line-height: inherit;
}

.nectar-button i {
	font-size: 18px;	
	line-height: 18px;
	width: 18px;
	position: absolute;
    top: 50%;
    right: 30px;
    margin-top: -9px;
    opacity: 0;
    -ms-filter: "alpha(opacity=0)";
    transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
    -webkit-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
}

 .portfolio-items .col .work-info .vert-center .custom-content .nectar-button i {
 	opacity: 0;
 }

.portfolio-items .nectar-love i, .post-meta .nectar-love i, #project-meta .nectar-love i {
	width: 23px!important;
	font-size: 14px!important;
	top: 0px!important;
}


.nectar-button.small i {
	font-size: 16px;
	line-height: 16px;
	right: 26px;
}

.nectar-button i.icon-button-arrow { font-size: 20px; }
.nectar-button.medium i.icon-button-arrow, .nectar-button.small i.icon-button-arrow  { font-size: 16px; }

.nectar-button span {
	left: 0px;
	display: inline-block;
	-webkit-transform: translateX(0);
	transform: translateX(0);
	transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1), transform .45s cubic-bezier(0.25, 1, 0.33, 1);
	-webkit-transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1), -webkit-transform .45s cubic-bezier(0.25, 1, 0.33, 1);
	position: relative;
}

.nectar-button.has-icon, .nectar-button.tilt.has-icon {
	padding-left: 42px;
	padding-right: 42px;
}

body[data-button-style="rounded"] .nectar-button.medium:not(.see-through):not(.see-through-2):not(.see-through-3).has-icon, body[data-button-style="rounded"] .nectar-button.medium:not(.see-through):not(.see-through-2):not(.see-through-3).tilt.has-icon {
	padding-left: 42px;
	padding-right: 42px;
}

.nectar-button.extra-color-gradient-1, .nectar-button.extra-color-gradient-2,
.nectar-button.see-through-extra-color-gradient-1, .nectar-button.see-through-extra-color-gradient-2 {
	background-color: transparent!important;
	opacity: 1!important;
	box-shadow: none!important;
}
.nectar-button.extra-color-gradient-1:after, .nectar-button.extra-color-gradient-2:after,
.nectar-button.see-through-extra-color-gradient-1:after, .nectar-button.see-through-extra-color-gradient-2:after {
	position: absolute;
	content: ' ';
	top: -2%;
	left: -1%;
	width: 101.5%;
	height: 104%;
	transform-origin: right;
	-webkit-transform-origin: right;
	-ms-transform-origin: right;
	transform: scale(0,1);
	-webkit-transform: scale(0,1);
	-ms-transform: scale(0,1);
	-ms-transition: transform 0.38s cubic-bezier(.2,0.95,.4,0.95), background-size 0.38s ease;
	transition: transform 0.38s cubic-bezier(.2,0.95,.4,0.95), background-size 0.38s ease;
	-webkit-transition: transform 0.38s cubic-bezier(.2,0.95,.4,0.95), background-size 0.38s ease;
	z-index: -1;
}

.nectar-button.see-through-extra-color-gradient-1:after, .nectar-button.see-through-extra-color-gradient-2:after {
	background-size: 225% 100%!important;
	background-position: right!important;
}

.nectar-button.see-through-extra-color-gradient-1:hover:after, .nectar-button.see-through-extra-color-gradient-2:hover:after {
	transform: scale(1,1);
	-webkit-transform: scale(1,1);
	-ms-transform: scale(1,1);
	transform-origin: left;
	-webkit-transform-origin: left;
	-ms-transform-origin: left;
	background-position: left!important;
	background-size: 100% 100%!important;
}

.nectar-button.extra-color-gradient-1:after, .nectar-button.extra-color-gradient-2:after {
	transform: scale(1,1);
	-webkit-transform: scale(1,1);
	-ms-transform: scale(1,1);
	transform-origin: left;
	-webkit-transform-origin: left;
	-ms-transform-origin: left;
	background-size: 100% 100%!important;
	background-position: left!important;
}

.nectar-button.extra-color-gradient-1:hover:after, .nectar-button.extra-color-gradient-2:hover:after {
	transform: scale(0,1);
	-webkit-transform: scale(0,1);
	-ms-transform: scale(0,1);
	transform-origin: right;
	-webkit-transform-origin: right;
	-ms-transform-origin: right;
	background-size: 225% 100%!important;
	background-position: right!important;
}

.nectar-button.extra-color-gradient-1 .start, .nectar-button.extra-color-gradient-2 .start,
.nectar-button.extra-color-gradient-1 .hover, .nectar-button.extra-color-gradient-2 .hover,
.nectar-button.see-through-extra-color-gradient-1 .start, .nectar-button.see-through-extra-color-gradient-2 .start,
.nectar-button.see-through-extra-color-gradient-1 .hover, .nectar-button.see-through-extra-color-gradient-2 .hover {
	-ms-transition: transform 0.38s cubic-bezier(.2,0.95,.4,0.95), opacity 0.38s cubic-bezier(.2,0.95,.4,0.95);
	transition: transform 0.38s cubic-bezier(.2,0.95,.4,0.95), opacity 0.38s cubic-bezier(.2,0.95,.4,0.95);
	-webkit-transition: transform 0.38s cubic-bezier(.2,0.95,.4,0.95), opacity 0.38s cubic-bezier(.2,0.95,.4,0.95);
}

.nectar-button.extra-color-gradient-1 .start, .nectar-button.extra-color-gradient-2 .start,
.nectar-button.see-through-extra-color-gradient-1 .start, .nectar-button.see-through-extra-color-gradient-2 .start {
	animation: gradientTextHoverHover 0.38s;
	animation-timing-function: cubic-bezier(.2,0.9,.4,0.9);
	animation-fill-mode:forwards;
	display: inline-block!important;
}
.nectar-button.extra-color-gradient-1 .hover, .nectar-button.extra-color-gradient-2 .hover,
.nectar-button.see-through-extra-color-gradient-1 .hover, .nectar-button.see-through-extra-color-gradient-2 .hover {
	position: absolute;
	display: inline;
	left: 0;
	animation: gradientTextHoverOff 0.38s;
	animation-timing-function: cubic-bezier(.2,0.9,.4,0.9);
	animation-fill-mode:forwards;
	text-align: center;
	width: 100%;
	opacity: 0;
	z-index: 0;
}
.nectar-button.extra-color-gradient-1:hover .hover, .nectar-button.extra-color-gradient-2:hover .hover,
.nectar-button.see-through-extra-color-gradient-1:hover .hover, .nectar-button.see-through-extra-color-gradient-2:hover .hover {
	animation: gradientTextHoverHover 0.38s;
	animation-timing-function: cubic-bezier(.2,0.9,.4,0.9);
	animation-fill-mode:forwards;
}

.nectar-button.extra-color-gradient-1:hover .start, .nectar-button.extra-color-gradient-2:hover .start,
.nectar-button.see-through-extra-color-gradient-1:hover .start, .nectar-button.see-through-extra-color-gradient-2:hover .start {
	animation: gradientTextHoverOff 0.38s;
	animation-timing-function: cubic-bezier(.2,0.9,.4,0.9);
	animation-fill-mode:forwards;
}


.nectar-button.see-through-extra-color-gradient-1 .hover, .nectar-button.see-through-extra-color-gradient-2 .hover {
	position: absolute;
	display: inline;
	left: 0;
	text-align: center;
	width: 100%;
	opacity: 0;
	z-index: 100;
}

.nectar-button.extra-color-gradient-1 .start.loading, .nectar-button.extra-color-gradient-2 .start.loading, .nectar-button.see-through-extra-color-gradient-1 .start.loading, .nectar-button.see-through-extra-color-gradient-2 .start.loading {
	animation: gradientTextHoverHover 0s;
}


.light .nectar-button.extra-color-gradient-1:hover .hover, .light .nectar-button.extra-color-gradient-2:hover .hover,
.light .nectar-button.see-through-extra-color-gradient-1:hover .start, .light .nectar-button.see-through-extra-color-gradient-2:hover .start,
.light .nectar-button.see-through-extra-color-gradient-1 .start, .light .nectar-button.see-through-extra-color-gradient-2 .start,
div[data-text-color="light"] .nectar-button.extra-color-gradient-1:hover .hover, div[data-text-color="light"] .nectar-button.extra-color-gradient-2:hover .hover,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-1:hover .start, div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-2:hover .start,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-1 .start, div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-2 .start {
	background: none!important;
    -webkit-background-clip: border-box;
    -webkit-text-fill-color: #fff;
    background-clip: border-box;
    text-fill-color: #fff;
}
.light .nectar-button.see-through-extra-color-gradient-1.no-text-grad .start,
.light .nectar-button.see-through-extra-color-gradient-2.no-text-grad .start,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-1.no-text-grad .start,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-2.no-text-grad .start {
	color: #fff!important;
}

.light .nectar-button.see-through-extra-color-gradient-1:hover .start, .light .nectar-button.see-through-extra-color-gradient-2:hover .start,
.light .nectar-button.see-through-extra-color-gradient-1 .start, .light .nectar-button.see-through-extra-color-gradient-2 .start,
.light .nectar-button.extra-color-gradient-1 .start, .light .nectar-button.extra-color-gradient-2 .start,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-1:hover .start, div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-2:hover .start,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-1 .start, div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-2 .start,
div[data-text-color="light"] .nectar-button.extra-color-gradient-1 .start, div[data-text-color="light"] .nectar-button.extra-color-gradient-2 .start {
	opacity: 1!important;
	animation: none!important;
}
.light .nectar-button.see-through-extra-color-gradient-1 .hover, .light .nectar-button.see-through-extra-color-gradient-2 .hover,
.light .nectar-button.extra-color-gradient-1 .hover, .light .nectar-button.extra-color-gradient-2 .hover,
div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-1 .hover, div[data-text-color="light"] .nectar-button.see-through-extra-color-gradient-2 .hover,
div[data-text-color="light"] .nectar-button.extra-color-gradient-1 .hover, div[data-text-color="light"] .nectar-button.extra-color-gradient-2 .hover {
	opacity: 0!important;
	animation: none!important;
}
@keyframes gradientTextHoverHover {
  0% {
    transform: translateX(0px);
    opacity: 0;
  }
  70% {
  	opacity: 1;
  }
  100% {
    transform: translateX(0px)!important;
	opacity: 1;
  }
}

@keyframes gradientTextHoverOff {
  0% {
    transform: translateX(0px);
    opacity: 1;
  }
  70% {
  	opacity: 0;
  }
  100% {
    transform: translateX(0px)!important;
    opacity: 0;
  }
}

.nectar-button.see-through-extra-color-gradient-1.medium.has-icon, .nectar-button.see-through-extra-color-gradient-2.medium.has-icon, .nectar-button.extra-color-gradient-1.medium.has-icon, .nectar-button.extra-color-gradient-2.medium.has-icon {
	padding: 7px 30px;
}
.nectar-button.see-through-extra-color-gradient-1.large.has-icon, .nectar-button.see-through-extra-color-gradient-2.large.has-icon, .nectar-button.extra-color-gradient-1.large.has-icon, .nectar-button.extra-color-gradient-2.large.has-icon {
	padding: 12px 35px;
}
.nectar-button.extra-color-gradient-1 i, .nectar-button.extra-color-gradient-2 i, .nectar-button.see-through-extra-color-gradient-1 i, .nectar-button.see-through-extra-color-gradient-2 i {
	opacity: 1;
	right: 24px;
	background: inherit;
	background-size: 500% 100%;
	background-position: right;
}
.nectar-button.extra-color-gradient-1.has-icon span, .nectar-button.extra-color-gradient-2.has-icon span, .nectar-button.see-through-extra-color-gradient-1.has-icon span, .nectar-button.see-through-extra-color-gradient-2.has-icon span {
	left: -18px;
}

.nectar-button.extra-color-gradient-1.has-icon:hover span, 
.nectar-button.extra-color-gradient-2.has-icon:hover span,
.nectar-button.see-through-extra-color-gradient-1.has-icon:hover span,
.nectar-button.see-through-extra-color-gradient-2.has-icon:hover span,
.nectar-button.extra-color-gradient-1.has-icon:hover i, 
.nectar-button.extra-color-gradient-2.has-icon:hover i,
.nectar-button.see-through-extra-color-gradient-1.has-icon:hover i,
.nectar-button.see-through-extra-color-gradient-2.has-icon:hover i {
	-ms-transform: none;
	transform: none;
	-webkit-transform: none;
}

.nectar-button.extra-color-gradient-1.jumbo i, .nectar-button.extra-color-gradient-2.jumbo i, .nectar-button.see-through-extra-color-gradient-1.jumbo i, .nectar-button.see-through-extra-color-gradient-2.jumbo i {
	opacity: 1;
	right: 20px!important;
	font-size: 20px;
	line-height: 20px;
	width: 20px;
	text-align: center;
	margin-top: -10px;
}

.nectar-button.extra-color-gradient-1.extra_jumbo i, .nectar-button.extra-color-gradient-2.extra_jumbo i, .nectar-button.see-through-extra-color-gradient-1.extra_jumbo i, .nectar-button.see-through-extra-color-gradient-2.extra_jumbo i {
	right: 67px!important;
	width: 40px;
}
.nectar-button.extra-color-gradient-1.has-icon.extra_jumbo span, .nectar-button.extra-color-gradient-2.has-icon.extra_jumbo span, .nectar-button.see-through-extra-color-gradient-1.has-icon.extra_jumbo span, .nectar-button.see-through-extra-color-gradient-2.has-icon.extra_jumbo span {
	left: -35px;
}
.nectar-button.extra-color-gradient-1.has-icon.jumbo span, .nectar-button.extra-color-gradient-2.has-icon.jumbo span, .nectar-button.see-through-extra-color-gradient-1.has-icon.jumbo span, .nectar-button.see-through-extra-color-gradient-2.has-icon.jumbo span {
	left: -16px;
}

.nectar-button.extra-color-gradient-1.has-icon.large span, .nectar-button.extra-color-gradient-2.has-icon.large span, .nectar-button.see-through-extra-color-gradient-1.has-icon.large span, .nectar-button.see-through-extra-color-gradient-2.has-icon.large span {
	left: -14px;
}
.nectar-button.extra-color-gradient-1.has-icon.medium span, .nectar-button.extra-color-gradient-2.has-icon.medium  span, .nectar-button.see-through-extra-color-gradient-1.has-icon.medium  span, .nectar-button.see-through-extra-color-gradient-2.has-icon.medium  span {
	left: -13px;
}
.nectar-button.extra-color-gradient-1.has-icon.small span, .nectar-button.extra-color-gradient-2.has-icon.small span, .nectar-button.see-through-extra-color-gradient-1.has-icon.small  span, .nectar-button.see-through-extra-color-gradient-2.has-icon.small span {
	left: -11px!important;
}



.nectar-button.extra-color-gradient-1.jumbo .hover i, .nectar-button.extra-color-gradient-2.jumbo .hover i, .nectar-button.see-through-extra-color-gradient-1.jumbo .hover i, .nectar-button.see-through-extra-color-gradient-2.jumbo .hover i { right: 8px!important; }
.nectar-button.extra-color-gradient-1.extra_jumbo .hover i, .nectar-button.extra-color-gradient-2.extra_jumbo .hover i, .nectar-button.see-through-extra-color-gradient-1.extra_jumbo .hover i, .nectar-button.see-through-extra-color-gradient-2.extra_jumbo .hover i { right: 19px!important; }
.nectar-button.extra-color-gradient-1.large .hover i, .nectar-button.extra-color-gradient-2.large .hover i, .nectar-button.see-through-extra-color-gradient-1.large .hover i,  .nectar-button.see-through-extra-color-gradient-2.large .hover i { right: 5px!important; }
.nectar-button.extra-color-gradient-1.medium .hover i, .nectar-button.extra-color-gradient-2.medium .hover i,  .nectar-button.see-through-extra-color-gradient-1.medium .hover i, .nectar-button.see-through-extra-color-gradient-2.medium .hover i { right: 3px!important; }
.nectar-button.extra-color-gradient-1.small .hover i,  .nectar-button.extra-color-gradient-2.small .hover i, .nectar-button.see-through-extra-color-gradient-1.small .hover i, .nectar-button.see-through-extra-color-gradient-2.small .hover i { right: 7px!important; }

.nectar-button.extra-color-gradient-1.jumbo .start i, .nectar-button.extra-color-gradient-2.jumbo .start i, .nectar-button.see-through-extra-color-gradient-1.jumbo .start i, .nectar-button.see-through-extra-color-gradient-2.jumbo .start i { right: -32px!important; }
.nectar-button.extra-color-gradient-1.extra_jumbo .start i, .nectar-button.extra-color-gradient-2.extra_jumbo .start i,  .nectar-button.see-through-extra-color-gradient-1.extra_jumbo .start i, .nectar-button.see-through-extra-color-gradient-2.extra_jumbo .start i { right: -75px!important; }
.nectar-button.extra-color-gradient-1.large .start i, .nectar-button.extra-color-gradient-2.large .start i,  .nectar-button.see-through-extra-color-gradient-1.large .start i, .nectar-button.see-through-extra-color-gradient-2.large .start i { right: -32px!important; }
.nectar-button.extra-color-gradient-1.medium .start i, .nectar-button.extra-color-gradient-2.medium .start i,  .nectar-button.see-through-extra-color-gradient-1.medium .start i, .nectar-button.see-through-extra-color-gradient-2.medium .start i { right: -30px!important; }
.nectar-button.extra-color-gradient-1.small .start i, .nectar-button.extra-color-gradient-2.small .start i,  .nectar-button.see-through-extra-color-gradient-1.small .start i, .nectar-button.see-through-extra-color-gradient-2.small .start i { right: -30px!important; }

.nectar-button.see-through-extra-color-gradient-1.small, .nectar-button.see-through-extra-color-gradient-2.small, .nectar-button.extra-color-gradient-1.small, .nectar-button.extra-color-gradient-2.small { padding: 5px 14px; }
.nectar-button.see-through-extra-color-gradient-1.medium, .nectar-button.see-through-extra-color-gradient-2.medium, .nectar-button.extra-color-gradient-1.medium, .nectar-button.extra-color-gradient-2.medium { border-width: 3px; padding: 7px 15px; }
.nectar-button.see-through-extra-color-gradient-1.large, .nectar-button.see-through-extra-color-gradient-2.large, .nectar-button.extra-color-gradient-1.large, .nectar-button.extra-color-gradient-2.large { border-width: 3px; padding: 12px 22px; }
.nectar-button.see-through-extra-color-gradient-1.jumbo, .nectar-button.see-through-extra-color-gradient-2.jumbo, .nectar-button.extra-color-gradient-1.jumbo, .nectar-button.extra-color-gradient-2.jumbo { border-width: 4px; padding: 21px 40px; }
.nectar-button.see-through-extra-color-gradient-1.extra_jumbo, .nectar-button.see-through-extra-color-gradient-2.extra_jumbo, .nectar-button.extra-color-gradient-1.extra_jumbo, .nectar-button.extra-color-gradient-2.extra_jumbo { border-width: 10px; padding: 56px 90px; }


.nectar-button.extra-color-gradient-1 span,
.nectar-button.extra-color-gradient-2 span,
.nectar-button.see-through-extra-color-gradient-1 span,
.nectar-button.see-through-extra-color-gradient-2 span {
	z-index: 100;
}

.nectar-button.has-icon.small, .nectar-button.tilt.has-icon.small {
	padding-left: 33px;
	padding-right: 33px;
}

.nectar-button.has-icon:hover span, .nectar-button.tilt.has-icon span {
	-ms-transform: translateX(-18px);
	-webkit-transform: translateX(-18px);
	transform: translateX(-18px);
}

.nectar-button.has-icon.small:hover span, .nectar-button.tilt.small.has-icon span {
	-ms-transform: translateX(-14px);
	-webkit-transform: translateX(-14px);
	transform: translateX(-14px);
}

.nectar-button.has-icon:hover i, .nectar-button.tilt.has-icon i {
	opacity: 1!important;
	-ms-filter: "alpha(opacity=100)";
	-ms-transform: translateX(6px);
	-webkit-transform: translateX(6px);
	transform: translateX(6px);
}

.nectar-button.small.has-icon:hover i, .nectar-button.small.tilt.has-icon i {
	-ms-transform: translateX(10px);
	-webkit-transform: translateX(10px);
	transform: translateX(10px);
}

.nectar-button:hover, .full-width-section .light .nectar-button:hover {
	 opacity: 0.75;
	 color: #fff;
}

.full-width-section .light .nectar-button:not(.see-through):not(.see-through-2):not(.see-through-3) {
	opacity: 0.9;
}

.text_on_hover.product .add_to_cart_button, .text_on_hover.product a.added_to_cart {
	font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
    line-height: 14px;
    letter-spacing: 1px!important;
    position: relative;
    text-transform: uppercase;
}

.text_on_hover.product a.added_to_cart {
	border-radius: 2px;
}

.nectar-button.see-through, body .nectar-button.see-through, .text_on_hover.product .add_to_cart_button  {
	background-color: transparent!important;
	box-shadow: none!important;
	-webkit-box-shadow: none!important;
	-moz-box-shadow: none!important;
	-o-box-shadow: none!important;
	opacity: 1!important;
	transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	-moz-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	-webkit-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	-o-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	border-radius: 2px!important;
	-webkit-border-radius: 2px!important;
	-o-border-radius: 2px!important;
	border: 2px solid rgba(255,255,255,0.75);
}


.nectar-button.see-through-2, .nectar-button.see-through-3 {
	background-color: transparent;
	box-shadow: none!important;
	-webkit-box-shadow: none!important;
	-moz-box-shadow: none!important;
	-o-box-shadow: none!important;
	opacity: 1;
	transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	-moz-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	-webkit-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	-o-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)!important;
	border-radius: 2px!important;
	-webkit-border-radius: 2px!important;
	-o-border-radius: 2px!important;
	border: 2px solid rgba(255,255,255,0.75);
}

.nectar-button.see-through-2:hover, .nectar-button.see-through-3:hover {
	background-color: transparent;
}

.nectar-button.see-through-3  {
	border: 2px solid rgba(255,255,255,1);
}

/* rounded buttons */
body[data-button-style="rounded"] .nectar-button.see-through, body[data-button-style="rounded"].ascend .nectar-button.see-through,
body[data-button-style="rounded"] .nectar-button.see-through-2, body[data-button-style="rounded"].ascend .nectar-button.see-through-2,
body[data-button-style="rounded"] .nectar-button.see-through-3, body[data-button-style="rounded"].ascend .nectar-button.see-through-3,
body[data-button-style="rounded"] .portfolio-filters-inline .container ul li a,
body[data-button-style="rounded"] #to-top, body[data-button-style="rounded"] .flex-direction-nav a, body[data-button-style="rounded"] #pagination span, 
body[data-button-style="rounded"] #pagination a, body[data-button-style="rounded"] #pagination .next.inactive, body[data-button-style="rounded"] #pagination .prev.inactive, 
body[data-button-style="rounded"].woocommerce nav.woocommerce-pagination ul li a, 
body[data-button-style="rounded"].woocommerce .container-wrap nav.woocommerce-pagination ul li span,
body[data-button-style="rounded"].woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
body[data-button-style="rounded"] input[type=submit], body[data-button-style="rounded"] button[type=submit], body[data-button-style="rounded"] input[type="button"],
body[data-button-style="rounded"] button, body[data-button-style="rounded"].ascend .container-wrap input[type="submit"], body[data-button-style="rounded"].ascend .container-wrap button[type="submit"],
body[data-button-style="rounded"] .nectar-button, body[data-button-style="rounded"] .swiper-slide .button a,
body[data-button-style="rounded"]  header#top nav > ul > li.button_solid_color > a:before,
body[data-button-style="rounded"]  header#top nav > ul > li.button_bordered > a:before {
	border-radius: 200px!important;
	-webkit-border-radius: 200px!important;
	-o-border-radius: 200px!important;
}

body[data-button-style="rounded"] .nectar-button.medium:not(.see-through):not(.see-through-2):not(.see-through-3) {
	padding: 12px 18px;
}
body .nectar-button.see-through:hover {
	border: 2px solid rgba(255,255,255,1);
}

.col.light .nectar-button.see-through-2, .col.light .nectar-button.see-through-3 {
	color: #fff;
}

.col.light .nectar-button.see-through {
	border: 2px solid rgba(255,255,255,0.75);
	color: #fff;
}

.col.light .nectar-button.see-through:hover {
	border: 2px solid rgba(255,255,255,1);
}

.col.dark .nectar-button.see-through, .col.dark .nectar-button.see-through-2 {
	border: 2px solid rgba(0,0,0,0.75);
	color: #444444;
}

.col.dark .nectar-button.see-through:hover {
	border: 2px solid rgba(0,0,0,1);
}

body .nectar-button.see-through-2:hover,
body .col.dark .nectar-button.see-through-2:hover,
body .nectar-button.see-through-3:hover,
body .col.dark .nectar-button.see-through-3:hover {
	border-color: #27CFC3;
	background-color: #27CFC3;
	color:	#fff;
	opacity: 1!important;
}

h2 .nectar-button {
	top: -6px;
}

.nectar-button:not([data-color-override="false"]), .nectar-button:not([data-hover-color-override="false"]) {
	visibility: hidden;
}



/*-------------------------------------------------------------------------*/
/*	4.	Plugin Related Styles
/*-------------------------------------------------------------------------*/


/***************** Superfish ******************/

.sf-menu {
    line-height: 1;
}
.sf-menu ul {
    position: absolute;
    top: -999em;
    width: 10em;
}
.sf-menu ul li {
    width: 100%;
}
.sf-menu li:hover {
    visibility: inherit;
}
.sf-menu li {
    float: left;
    position: relative;
}

.sf-menu li:hover ul, .sf-menu li.sfHover ul {
    left: 0;
    top: 2.5em;
    z-index: 99;
}

header#top .sf-menu > li:hover > ul, header#top .sf-menu > li.sfHover > ul {
	 top: 60px;
}

ul.sf-menu li:hover li ul, ul.sf-menu li.sfHover li ul {
    top: -999em;
}
ul.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul {
    left: 10.8em;
    top: -10px;
}
ul.sf-menu li li:hover li ul, ul.sf-menu li li.sfHover li ul {
    top: -999em;
}
ul.sf-menu li li li:hover ul, ul.sf-menu li li li.sfHover ul {
    left: 10em;
    top: 0;
}
.sub-menu {
    z-index: 3;
}

.sf-menu {
    float: left;
    margin-bottom: 30px;
}

.sf-menu li li a, .sf-menu li li a:visited {
    padding-left: 1.25em;
}

.sf-menu li:hover, .sf-menu li.sfHover, .sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active {
    outline: 0 none;
}

.sf-menu ul li a {
    margin: 0;
    padding: 14px;
    border-bottom: 1px solid rgba(255,255,255,0.08); 
}

.sf-sub-indicator {
	display: inline-block;
	width: 10px;
	position: relative;
	left: 8px;
	height: 10px;
}

.sf-sub-indicator i {
	width: 8px;
}


.sf-sub-indicator [class^="icon-"], .sf-sub-indicator [class*=" icon-"] {
	color: #888;
	font-size: 12px;
	line-height: 16px;
	height: auto;
	background-color: transparent!important;
}

.sf-menu ul a:focus ,
.sf-menu ul a:hover ,
.sf-menu ul a:active ,
.sf-menu ul li:hover > a ,
.sf-menu ul li.sfHover > a  {
	color: #27CFC3;	
}

.sf-shadow ul.sf-shadow-off {
    background: none repeat scroll 0 0 transparent;
}
.sf-vertical, .sf-vertical li {
    width: 100%;
}
.sf-vertical li:hover ul, .sf-vertical li.sfHover ul {
    left: 100%;
    top: 0;
}

.sf-menu, .sf-menu * {
    list-style: none outside none;
    margin: 0;
    padding: 0;
    z-index: 10;
}
.sf-menu {
    line-height: 1;
}
.sf-menu ul {
    position: absolute;
    top: -999em;
    width: 16em;
}
.sf-menu ul li, .sf-menu ul li li {
    font-size: 12px;
    width: 100%;
}
.sf-menu ul li:last-child a {
    border-bottom: medium none;
}
.sf-menu li:hover {
    visibility: inherit;
}
.sf-menu li {
    float: left;
    line-height: 0px!important;
    font-size: 12px!important;
    position: relative;
}
.sf-menu a {
    display: block;
    position: relative;
}
.sf-menu li:hover ul, .sf-menu li.sfHover ul {
    left: 0;
    top: 33px;
    z-index: 999;
}
ul.sf-menu li:hover li ul, ul.sf-menu li.sfHover li ul {
    top: -999em;
}
ul.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul {
    left: 15em;
    top: 0px;
}
ul.sf-menu li li:hover li ul, ul.sf-menu li li.sfHover li ul {
    top: -999em;
}
ul.sf-menu li li li:hover ul, ul.sf-menu li li li.sfHover ul {
    left: 15em;
    top: 0;
}
.sf-menu .sf-with-ul a {
    min-width: 1px;
    padding-right: 16px!important;
}

header#top .sf-menu li ul li a {
	font-size: 12px;
	line-height: 13px;
	color: #ccc;
	transition: none;
	letter-spacing: 0;
	background-color: #1C1C1C;	
}

.sf-menu li ul li a:hover, .sf-menu li ul li.sfHover > a { 
	color: #27CFC3;
	background-color: #272727!important;	
}

.sf-menu li ul li.sfHover > a .sf-sub-indicator [class^="icon-"] {
	color: #27CFC3;
}

.sf-menu li ul li .sf-sub-indicator {
	right: 14px;
	left: auto;
	top: 14px;
	display: block;
	position: absolute;
}

.sf-menu li ul, .sf-menu li li ul {
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}

.sf-menu li li ul {
	left: 16em!important;
}

.sf-menu {
    float: right;
}
.sf-menu a {
    margin: 0 1px;
    padding: 0.75em 1em 32px;
    text-decoration: none;
}
.sf-menu ul li {
    font-weight: normal;
}
.sf-menu .sfHover ul li a, .sf-menu .sfHover ul li li a {
    box-shadow: none;
}
.sf-menu ul li a:focus, .sf-menu ul li a:hover, .sf-menu ul li a:active, .sf-menu ul li li a:focus, .sf-menu ul li li a:hover, .sf-menu ul li li a:active {
    border-radius: 0 0 0 0;
    box-shadow: none;
    text-shadow: none;
}


.mejs-overlay-button, .mejs-overlay-loading {
	display: none!Important;
}

.home-wrap {
	padding-top: 3em;
	margin-bottom: 0px;
	padding-bottom: 0px;
	position: relative;
	z-index: 100;
	background-color: #f8f8f8;
}

html:not(.js) .home-wrap {
	padding-top: 0px;
}

html.no-overflow-y {
	overflow-y: hidden!important;
} 


/***************** Nectar Slider ******************/

.mobile-video-image {
	position: absolute;
	z-index: 10;
	top: 0px;
	left: 0px;
	display: none;
	height: 100%;
	width: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	-moz-background-size: cover;
	-webkit-background-size: cover;
	-o-background-size: cover;	
}


.no-transform {
  transform: inherit!important; 
  -webkit-transform: inherit!important;     
}


.pp_loaderIcon span {
	border: 3px solid #666;
}


body #header-outer.transparent[data-transparent-header="true"].dark-slide, 
.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"].dark-slide > header#top nav ul #search-btn a,
.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"].dark-slide > header#top nav ul .slide-out-widget-area-toggle a,
html body #header-outer.transparent[data-transparent-header="true"].dark-slide .cart-menu,
html .ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].dark-slide .cart-menu:after,
body #header-outer.transparent[data-transparent-header="true"].dark-slide > header#top nav ul #search-btn > div,
body #header-outer.transparent[data-transparent-header="true"].dark-slide > header#top nav ul .slide-out-widget-area-toggle > div,
#boxed #header-outer.transparent[data-transparent-header="true"].dark-slide,
html body.ascend #boxed #header-outer.transparent.dark-slide .cart-menu .cart-icon-wrap i,
html body.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].dark-slide header#top nav ul #search-btn a:after, 
.ascend #header-outer.transparent[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].dark-slide header#top nav ul .slide-out-widget-area-toggle a:after, 
html body #header-outer.transparent[data-transparent-header="true"][data-remove-border="true"].dark-slide .cart-menu:after {
	border-color: rgba(0, 0, 0, 0.08) !important;
}

#header-outer[data-lhe="animated_underline"].transparent.dark-slide header#top nav > ul > li > a:after,
#header-outer.transparent .midnightHeader.dark header#top nav>ul>li.button_bordered>a:before,
#header-outer.transparent .midnightHeader.default header#top nav>ul>li.button_bordered>a:before,
#header-outer.transparent.dark-slide header#top nav > ul > li.button_bordered > a:before,
#header-outer[data-lhe="animated_underline"].transparent:not(.side-widget-open) .midnightHeader.dark header#top nav > ul > li > a:after,
#header-outer[data-lhe="animated_underline"].transparent:not(.side-widget-open) .midnightHeader.default header#top nav > ul > li > a:after {
	border-color: #000!important;
}


/*perma transparent*/
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] {
	background-color: transparent!important;
	box-shadow: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
}

#header-outer[data-transparent-header="true"].transparent .midnightHeader .midnightInner {
	overflow: hidden!important;
}

#header-outer[data-transparent-header="true"].transparent .midnightHeader.no-pointer-events, #header-outer[data-transparent-header="true"].no-pointer-events, .col.boxed.no-pointer-events {
	pointer-events: none;
}

#header-outer[data-transparent-header="true"].transparent.side-widget-open.style-slide-out-from-right .midnightHeader.no-pointer-events, 
#header-outer[data-transparent-header="true"].transparent.side-widget-open.style-slide-out-from-right-hover .midnightHeader.no-pointer-events, 
#header-outer[data-transparent-header="true"].no-pointer-events.side-widget-open.style-slide-out-from-right,
#header-outer[data-transparent-header="true"].no-pointer-events.side-widget-open.style-slide-out-from-right-alt {
	pointer-events: auto;
}

#header-outer[data-transparent-header="true"].transparent .midnightHeader.overflow .midnightInner,
#header-outer[data-transparent-header="true"].transparent .midnightHeader.overflow {
	overflow: visible!important;
}

/*
#header-outer[data-has-menu="false"][data-format="centered-menu"] header#top nav > ul.buttons, #header-outer[data-has-menu="false"][data-format="centered-menu"] header#top .span_3 {
	position:relative;
}

body #header-outer[data-has-menu="false"][data-format="centered-menu"] header#top .span_9 {
	width: auto;
}*/

body[data-bg-header="true"][data-header-search="true"] #header-outer[data-has-menu="false"] nav ul #search-btn a:after {
	border: none!important;
	display: none!important;
}
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] #header-outer.light-text header#top nav ul .slide-out-widget-area-toggle a i.lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] #header-outer.dark-text header#top nav ul .slide-out-widget-area-toggle a i.lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] #header-outer.dark-text header#top nav > ul > li > a, #header-outer.dark-text header#top nav ul #search-btn a span, 
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] #header-outer.dark-text nav > ul > li > a > .sf-sub-indicator [class^="icon-"], #header-outer.dark-text .cart-menu .cart-icon-wrap .icon-salient-cart, 
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"].ascend #boxed #header-outer.dark-text .cart-menu .cart-icon-wrap .icon-salient-cart {
	opacity: 1;
}

body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"].transparent header#top nav ul .slide-out-widget-area-toggle a i.lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"].transparent header#top nav ul #search-btn a span.icon-salient-search,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .has_products .cart-menu .cart-icon-wrap .icon-salient-cart,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .cart-menu .cart-icon-wrap .icon-salient-cart,
#header-outer[data-permanent-transparent="1"] .midnightHeader header#top ul.sf-menu > li > a {
	opacity: 1!important;
}

body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"].transparent header#top nav ul .slide-out-widget-area-toggle a:hover i.lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"].transparent header#top nav ul #search-btn a:hover span.icon-salient-search,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .has_products .cart-menu:hover .cart-icon-wrap .icon-salient-cart,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .cart-menu:hover .cart-icon-wrap .icon-salient-cart,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .midnightHeader header#top ul.sf-menu > li:hover > a,
#header-outer[data-permanent-transparent="1"].transparent .midnightHeader  header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a:hover .lines-button:after {
	opacity: 0.8!important;
}

body[data-bg-header="true"].ascend #header-outer[data-permanent-transparent="1"][data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul #search-btn a:after, 
body[data-bg-header="true"].ascend #header-outer[data-permanent-transparent="1"][data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] header#top nav ul .slide-out-widget-area-toggle a:after, 
body[data-bg-header="true"].ascend #header-outer[data-permanent-transparent="1"][data-transparent-header="true"][data-full-width="true"][data-remove-border="true"] .cart-menu:after {
	border: none!important;
}

body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2 .lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2 .lines:before, 
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2 .lines:after,
#header-outer[data-permanent-transparent="1"].transparent .midnightHeader  header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	 /* -webkit-transition: top 0.4s 0.45s ease, -webkit-transform 0.3s ease, background-color 0.13s ease, opacity 0.13s linear!important;
  	  transition: top 0.4s 0.45s ease, transform 0.3s ease, background-color 0.13s ease, opacity 0.13s linear!important;*/
	   opacity: 1!important;
}
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2 .lines:before, 
body #header-outer[data-permanent-transparent="1"] .lines-button.x2 .lines:after {
  /*transition: top 0.4s 0.45s ease, -webkit-transform 0.3s ease, background-color 0.13s ease, opacity 0.13s linear;
  transition: top 0.4s 0.45s ease, transform 0.3s ease, background-color 0.13s ease, opacity 0.13s linear;*/
   opacity: 1;
}

body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2.close .lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2.close .lines:before, 
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .lines-button.x2.close .lines:after {
	-webkit-transition: top 0.5s ease, -webkit-transform 0.3s 0.4s ease, background-color 0.2s ease, opacity 0.2s linear!important;
	transition: top 0.5s ease, transform 0.3s 0.4s ease, background-color 0.2s ease, opacity 0.2s linear!important;
}

body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"]  .lines-button.x2.close .lines,
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"]  .lines-button.x2.close .lines:before, 
body[data-bg-header="true"] #header-outer[data-permanent-transparent="1"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"]  .lines-button.x2.close .lines:after {
	-webkit-transition: top 0.5s ease, -webkit-transform 0.3s ease, background-color 0.2s ease, opacity 0.2s linear!important;
	transition: top 0.5s ease, transform 0.3s ease, background-color 0.2s ease, opacity 0.2s linear!important;
}

#header-outer.transparent .midnightHeader.dark header#top nav > ul > li:not(.button_solid_color) > a, 
#header-outer.transparent .midnightHeader.dark header#top #logo,
#header-outer.transparent .midnightHeader.dark header#top nav ul #search-btn a span.icon-salient-search, 
#header-outer.transparent .midnightHeader.dark nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.transparent .midnightHeader.dark nav > ul > li > a > .sf-sub-indicator [class*=" icon-"], 
#header-outer.transparent .midnightHeader.dark .cart-menu .cart-icon-wrap .icon-salient-cart, 
.ascend #boxed #header-outer.transparent .midnightHeader.dark .cart-menu .cart-icon-wrap .icon-salient-cart,
#header-outer.transparent .midnightHeader.default header#top nav > ul > li:not(.button_solid_color) > a, 
#header-outer.transparent .midnightHeader.default header#top #logo, 
#header-outer.transparent .midnightHeader.default header#top nav ul #search-btn a span.icon-salient-search, 
#header-outer.transparent .midnightHeader.default nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.transparent .midnightHeader.default nav > ul > li > a > .sf-sub-indicator [class*=" icon-"], 
#header-outer.transparent .midnightHeader.default .cart-menu .cart-icon-wrap .icon-salient-cart, 
.ascend #boxed #header-outer.transparent .midnightHeader.default .cart-menu .cart-icon-wrap .icon-salient-cart {
  color: #000!important;
}


#header-outer.transparent .midnightHeader.dark header#top nav > ul > li.button_bordered > a:before, 
#header-outer.transparent .midnightHeader.default header#top nav > ul > li.button_bordered > a:before {
	border-color: rgba(0,0,0,1);
}
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top nav > ul > li.button_bordered > a:before,
#header-outer.transparent.side-widget-open .midnightHeader.default header#top nav > ul > li.button_bordered > a:before {
	border-color: rgba(255,255,255,1);
}

#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a i.lines:after, 
#header-outer.transparent.directional-nav-effect .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i, 
#header-outer.transparent.directional-nav-effect .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:after, 
#header-outer.transparent.directional-nav-effect .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:before,
#header-outer.transparent .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.transparent .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.transparent .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a i.lines:after, 
#header-outer.transparent.directional-nav-effect .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i, 
#header-outer.transparent.directional-nav-effect .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:after, 
#header-outer.transparent.directional-nav-effect .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:before,
#header-outer.transparent .midnightHeader.dark .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after,
#header-outer.transparent .midnightHeader.default .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	background-color: #000!important;
}

/*slide out widget open*/
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top nav > ul > li > a, 
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top #logo, 
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top nav ul #search-btn a span.icon-salient-search, 
#header-outer.transparent.side-widget-open .midnightHeader.dark nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.transparent.side-widget-open .midnightHeader.dark nav > ul > li > a > .sf-sub-indicator [class*=" icon-"], 
#header-outer.transparent.side-widget-open .midnightHeader.dark .cart-menu .cart-icon-wrap .icon-salient-cart, 
#header-outer.transparent.side-widget-open .midnightHeader.default header#top nav > ul > li > a, 
#header-outer.transparent.side-widget-open .midnightHeader.default header#top #logo, 
#header-outer.transparent.side-widget-open .midnightHeader.default header#top nav ul #search-btn a span.icon-salient-search, 
#header-outer.transparent.side-widget-open .midnightHeader.default nav > ul > li > a > .sf-sub-indicator [class^="icon-"], 
#header-outer.transparent.side-widget-open .midnightHeader.default nav > ul > li > a > .sf-sub-indicator [class*=" icon-"], 
#header-outer.transparent.side-widget-open .midnightHeader.default .cart-menu .cart-icon-wrap .icon-salient-cart, 
.ascend #boxed #header-outer.transparent.side-widget-open .midnightHeader.dark .cart-menu .cart-icon-wrap .icon-salient-cart,
#header-outer.transparent.side-widget-open .midnightHeader.dark #toggle-nav i,
#header-outer.transparent .midnightHeader.default #toggle-nav i,
#header-outer.transparent .midnightHeader.light #toggle-nav i {
  color: #fff!important;
}
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.transparent.side-widget-open .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a i.lines:after, 
#header-outer.transparent.directional-nav-effect.side-widget-open .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i, 
#header-outer.transparent.directional-nav-effect.side-widget-open .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:after, 
#header-outer.transparent.directional-nav-effect.side-widget-open .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:before,
#header-outer.transparent.side-widget-open .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.transparent.side-widget-open .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.transparent.side-widget-open .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a i.lines:after, 
#header-outer.transparent.directional-nav-effect.side-widget-open .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i, 
#header-outer.transparent.directional-nav-effect.side-widget-open .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:after, 
#header-outer.transparent.directional-nav-effect.side-widget-open .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:before,
#header-outer.transparent .midnightHeader.light header#top nav ul .slide-out-widget-area-toggle a i.lines, 
#header-outer.transparent .midnightHeader.light header#top nav ul .slide-out-widget-area-toggle a i.lines:before, 
#header-outer.transparent .midnightHeader.light header#top nav ul .slide-out-widget-area-toggle a i.lines:after,
#header-outer.transparent .midnightHeader.light .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after  {
	background-color: #fff!important;
}


.lines-button.x2.close .lines, 
#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a .lines-button.x2.close .lines, 
#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a:hover .x2.close i.lines, 
#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle a .x2.close i.lines,
#header-outer.transparent .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle a .x2.close i.lines,
#header-outer.transparent .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a .x2.close i.lines {
	background-color: transparent!important;
}

#header-outer[data-transparent-header="true"].transparent .midnightHeader.dark #logo img.dark-version,
body #header-outer[data-transparent-header="true"].transparent.side-widget-open .midnightHeader.dark #logo img.starting-logo:not(.dark-version),
body #header-outer[data-transparent-header="true"].transparent .midnightHeader.default #logo img.dark-version,
body #header-outer[data-transparent-header="true"].transparent.side-widget-open .midnightHeader.default #logo img.starting-logo:not(.dark-version) {
	opacity: 1!important;
}

#header-outer[data-transparent-header="true"].transparent .midnightHeader.dark #logo img.starting-logo:not(.dark-version),
#header-outer[data-transparent-header="true"].transparent .midnightHeader.light #logo img.starting-logo.dark-version,
#header-outer[data-transparent-header="true"].transparent.side-widget-open .midnightHeader.dark #logo img.dark-version,
#header-outer[data-transparent-header="true"].transparent .midnightHeader.default #logo img.starting-logo,
#header-outer[data-transparent-header="true"].transparent.side-widget-open .midnightHeader.default #logo img.dark-version  {
	opacity: 0!important;
}

.ascend #header-outer[data-transparent-header="true"].transparent .midnightHeader .buttons {
	margin-top: 0!important;
}
#header-outer[data-transparent-header="true"] #logo .dark-version, #header-outer[data-transparent-header="true"][data-format="centered-menu-under-logo"][data-permanent-transparent="1"] #logo .dark-version {
	position: absolute;
}
#header-outer[data-transparent-header="true"][data-format="centered-menu-under-logo"] #logo .dark-version {
	position: relative;
}

#header-outer[data-format="centered-menu-under-logo"][data-permanent-transparent="1"] header#top #logo img.dark-version {
	left: 50%;
	transform: translateX(-50%);
	-webkit-transform: translateX(-50%);
}

/*bigger icons*/
body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .lines,
body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .lines:before,
body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .lines:after {
	height: 4px;
	width: 2.1rem;
	border-radius: 1px;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
}


body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .lines-button, .slide-out-hover-icon-effect:not(.small) .lines-button, body[data-is="minimal"] [data-icon-animation="simple-transform"].slide-out-hover-icon-effect:not(.small) .lines-button {
	line-height: 0px;
	font-size: 0px;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .lines-button.close {
	transform: none;
	-webkit-transform: none;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] header#top nav ul .slide-out-widget-area-toggle a, .slide-out-hover-icon-effect a {
	width: 34px;
}
.slide-out-hover-icon-effect.small a {
	width: auto;
}
body[data-header-search="false"].ascend #header-outer[data-has-menu="false"][data-cart="false"][data-full-width="true"] header#top nav ul .slide-out-widget-area-toggle a {
	padding-right: 32px!important;
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .lines:before {
	top: 9px;
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .lines:after {
	top: -9px;
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:before, body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:after {
	top: -1px;
}



/* directional nav effect */
#header-outer.directional-nav-effect:not(.transparent) > header#top nav > ul > li > a span.light, #header-outer.directional-nav-effect:not(.transparent) .midnightHeader.nectar-slider header#top nav > ul > li > a span.light,
#header-outer.directional-nav-effect:not(.transparent) > header#top nav > ul > li > a span.dark, #header-outer.directional-nav-effect:not(.transparent) .midnightHeader.nectar-slider header#top nav > ul > li > a span.dark,
#header-outer.directional-nav-effect:not(.transparent) > header#top nav > ul.buttons > li a span.light, #header-outer.directional-nav-effect:not(.transparent) .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.light,
#header-outer.directional-nav-effect:not(.transparent) > header#top nav > ul.buttons > li a span.dark, #header-outer.directional-nav-effect:not(.transparent) .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.dark,
#header-outer.directional-nav-effect:not(.transparent) > .cart-outer .cart-menu .cart-icon-wrap span.light, #header-outer.directional-nav-effect:not(.transparent) .midnightHeader.nectar-slider .cart-menu .cart-icon-wrap span.light,
#header-outer.directional-nav-effect:not(.transparent) > .cart-outer .cart-menu .cart-icon-wrap span.dark, #header-outer.directional-nav-effect:not(.transparent) .midnightHeader.nectar-slider .cart-menu .cart-icon-wrap span.dark,
#header-outer:not(.directional-nav-effect) > .cart-outer .cart-menu .cart-icon-wrap span.light, #header-outer:not(.directional-nav-effect) .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.light,
#header-outer:not(.directional-nav-effect) > .cart-outer .cart-menu .cart-icon-wrap span.dark, #header-outer:not(.directional-nav-effect) .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.dark,
#header-outer.directional-nav-effect:not(.transparent) #logo span.light, 
#header-outer.directional-nav-effect:not(.transparent) #logo span.dark {
	display: none!important;
}

#header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a span, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span,
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-icon-wrap > span, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-icon-wrap > span,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-icon-wrap > span span, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-icon-wrap > span span  {
	display: inline-block;
}

#header-outer.directional-nav-effect > header#top nav > ul > li > a span.original, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.original,
#header-outer.directional-nav-effect > header#top nav > ul.buttons span.original, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons span.original,
#header-outer.directional-nav-effect > header#top nav ul #search-btn a span.original span.icon-salient-search, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.original span.icon-salient-search,
#header-outer.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.original, #header-outer.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.original,
#header-outer.directional-nav-effect > header#top nav > ul > li > a span.original span, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.original span, 
#header-outer.directional-nav-effect > header#top nav > ul.buttons span.original span, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons span.original span,
#header-outer.directional-nav-effect > header#top nav ul #search-btn a span.original span.icon-salient-search, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.original span.icon-salient-search,
#header-outer.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.original span, #header-outer.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.original span,
#header-outer.directional-nav-effect .slide-out-widget-area-toggle span.original {
	opacity: 1;
	display: inline;
}

#header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a span.original, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.original, 
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons span.original, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons span.original,
#header-outer.transparent.directional-nav-effect > header#top nav ul #search-btn a span.original span.icon-salient-search, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.original span.icon-salient-search,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.original, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.original,
#header-outer.transparent.directional-nav-effect > header#top #logo span.original, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.original {
	opacity: 0!important;
	display: block;
}

#header-outer.directional-nav-effect > header#top nav ul #search-btn a span.original span.icon-salient-search, #header-outer.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.original span.icon-salient-search {
	margin-left: 4px;
}
#header-outer.directional-nav-effect[data-format="centered-menu"] > header#top nav ul #search-btn a span.original span.icon-salient-search, #header-outer.directional-nav-effect[data-format="centered-menu"] .midnightHeader.nectar-slider header#top nav ul #search-btn a span.original span.icon-salient-search {
	margin-left: 0px;
}

#header-outer.transparent.directional-nav-effect .sf-sub-indicator {
	display: inline!important;
}

/*dark*/
#header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a span.dark,
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.dark,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.dark .icon-salient-cart, 
#header-outer.transparent.directional-nav-effect > header#top nav ul #search-btn a span.dark span.icon-salient-search,
#header-outer.transparent.directional-nav-effect > header#top nav ul span.dark .sf-sub-indicator i,
#header-outer.transparent.directional-nav-effect > header#top #logo span.dark { color: #000!important; }
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.dark,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.dark,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.dark .icon-salient-cart, 
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.dark span.icon-salient-search,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul span.dark .sf-sub-indicator i,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.dark { color: #000!important; }
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle a span.dark .lines-button i,
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a span.dark .lines-button:after,
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle a span.dark .lines-button i:after, #header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle a span.dark .lines-button i:before,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a span.dark .lines-button i,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a span.dark .lines-button i:after, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a span.dark .lines-button i:before {
 background-color: #000!important;
}

#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top nav > ul > li > a span.dark,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.dark,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top #logo span.dark,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.dark .icon-salient-cart,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.dark,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.dark,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.dark,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.dark .icon-salient-cart {
	opacity: 0!important;
}
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top nav > ul > li > a span.light,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top nav > ul > li > a span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.light,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.light,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top #logo span.light, 
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect > header#top #logo span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.light,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.light,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.light,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.light span,
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.light, 
#header-outer.temp-removed-dark-slide.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.light span
 {
	margin-left: 0!important;
	width: auto!important;
}

/*light*/
#header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a span.light,
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.light,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.light .icon-salient-cart, 
#header-outer.transparent.directional-nav-effect > header#top nav ul #search-btn a span.light span.icon-salient-search,
#header-outer.transparent.directional-nav-effect > header#top nav ul span.light .sf-sub-indicator i,
#header-outer.transparent.directional-nav-effect > header#top #logo span.light { color: #fff!important; }
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.light,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.light,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.light .icon-salient-cart, 
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.light span.icon-salient-search,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul span.light .sf-sub-indicator i,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.light { color: #fff!important; }
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i,
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a span.light .lines-button:after,
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:after, #header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:before,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:after, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle a span.light .lines-button i:before { background-color: #fff!important;}

/* rules for both*/
#header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a span.light,
#header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a span.dark,
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.light,
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons > li a span.dark,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.dark,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.light,
#header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap span.original,
#header-outer.transparent.directional-nav-effect > header#top #logo span.light, #header-outer.transparent.directional-nav-effect > header#top #logo span.dark,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.light,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a span.dark,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.light,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul.buttons > li a span.dark,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.dark,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.light,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-outer .cart-menu .cart-icon-wrap span.original,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.light, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.dark {
	position: absolute;
	overflow: hidden;
	text-align: left;
}

#header-outer.transparent.directional-nav-effect[data-format="centered-menu-under-logo"] > header#top #logo span.light,
#header-outer.transparent.directional-nav-effect[data-format="centered-menu-under-logo"] > header#top #logo span.dark,
#header-outer.transparent.directional-nav-effect[data-format="centered-menu-under-logo"] .midnightHeader.nectar-slider header#top #logo span.light,
#header-outer.transparent.directional-nav-effect[data-format="centered-menu-under-logo"] .midnightHeader.nectar-slider header#top #logo span.dark {
	position: relative!important;
}

#header-outer.transparent.directional-nav-effect[data-format="centered-menu-under-logo"] > header#top #logo span.original,
#header-outer.transparent.directional-nav-effect[data-format="centered-menu-under-logo"] .midnightHeader.nectar-slider header#top #logo span.original {
	display: none!important;
}
#header-outer.directional-nav-effect[data-format="centered-menu-under-logo"] > header#top #logo span.original img,
#header-outer.directional-nav-effect[data-format="centered-menu-under-logo"] .midnightHeader.nectar-slider header#top #logo span.original img { 
	margin-bottom: 0!important;
}

#header-outer.transparent.directional-nav-effect > header#top .span_9 .buttons, #header-outer.transparent.directional-nav-effect > header#top nav > ul > li > a,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top .span_9 .buttons, #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav > ul > li > a {
	text-align: left;
}

#header-outer.transparent.directional-nav-effect > header#top nav ul #search-btn a span.dark span,
#header-outer.transparent.directional-nav-effect > header#top nav ul #search-btn a span.light span,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.dark span,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul #search-btn a span.light span  {
	width: 24px!important;
}

.ascend #header-outer.transparent.directional-nav-effect > .cart-outer .cart-menu .cart-icon-wrap i,
#header-outer.transparent.directional-nav-effect > header#top #logo span.original, 
#header-outer.transparent.directional-nav-effect > header#top #logo img,
.ascend #header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider .cart-menu .cart-icon-wrap i,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo span.original, 
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo img {
	position: relative!important;
}

#header-outer.transparent.directional-nav-effect > header#top #logo img,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top #logo img {
	opacity: 1!important;
	display: inline;
	transition: none!important;
	-webkit-transition: none!important;
}

.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].directional-nav-effect > header#top nav ul #search-btn .light a:after, 
.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].directional-nav-effect > header#top nav ul #search-btn .dark a:after, 
.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle .dark a:after, 
.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle .light a:after, 
.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].directional-nav-effect .dark .cart-menu:after,
.ascend #header-outer[data-transparent-header="true"][data-full-width="true"][data-remove-border="true"].directional-nav-effect .light .cart-menu:after {
	border: none!important;
}


@media only screen and (min-width: 1001px) {

	#header-outer[data-transparent-header="true"].transparent > header #logo img.dark-version,
	#header-outer[data-transparent-header="true"].light-text > header #logo img.dark-version {
		opacity: 0!important;
	}

	#header-outer[data-transparent-header="true"].transparent.dark-slide > header #logo img,
	#header-outer[data-transparent-header="true"].dark-text > header #logo img,
	#header-outer[data-transparent-header="true"].dark-text.side-widget-open > header #logo img.dark-version {
		opacity: 0!important;
	}

	#header-outer[data-transparent-header="true"].transparent.dark-slide > header #logo img.dark-version, 
	#header-outer[data-transparent-header="true"].dark-text > header #logo img.dark-version,
	#header-outer[data-transparent-header="true"].dark-text.side-widget-open > header #logo img.starting-logo {
		opacity: 1!important;
	}

}

#header-outer[data-transparent-header="true"].transparent .midnightHeader.nectar-slider #logo img.dark-version,
#header-outer[data-transparent-header="true"].light-text .midnightHeader.nectar-slider #logo img.dark-version {
	opacity: 0!important;
}

#header-outer[data-transparent-header="true"].transparent.dark-slide .midnightHeader.nectar-slider #logo img,
#header-outer[data-transparent-header="true"].dark-text .midnightHeader.nectar-slider #logo img,
#header-outer[data-transparent-header="true"].dark-text.side-widget-open .midnightHeader.nectar-slider #logo img.dark-version {
	opacity: 0!important;
}

#header-outer[data-transparent-header="true"].transparent.dark-slide .midnightHeader.nectar-slider #logo img.dark-version, 
#header-outer[data-transparent-header="true"].dark-text .midnightHeader.nectar-slider #logo img.dark-version,
#header-outer[data-transparent-header="true"].dark-text.side-widget-open .midnightHeader.nectar-slider #logo img.starting-logo {
	opacity: 1!important;
}



.swiper-slide .button.solid_color_2,
.tilt-button-wrap {
	-webkit-perspective: 800px;
	-moz-perspective: 800px;
	perspective: 800px;
	display: inline-block;
}

.swiper-slide .button.solid_color_2:before {
	-webkit-font-smoothing: antialiased;
}

.swiper-slide .button.solid_color_2 a:hover,
.nectar-button.tilt:hover,
.swiper-slide .button.solid_color_2 a:hover:after,
.nectar-button.tilt:hover:after,
.swiper-slide .button.solid_color_2 a:hover:before,
.nectar-button.tilt:hover:before {
	-webkit-transition: all 0.45s cubic-bezier(0.68, 0, 0.265, 3);
	-moz-transition: all 0.45s cubic-bezier(0.68, 0, 0.265, 3);
	transition: all 0.45s cubic-bezier(0.68, 0, 0.265, 3);
}

.swiper-slide .button.solid_color_2 a,
.nectar-button.tilt {
	display: block;
	background: #5cbcf6;
	outline: 1px solid transparent; /* FF jagged edges fix */
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
	outline: none;
	padding-left: 22px;
	padding-right: 22px;
	position: relative;
	border-bottom: none!important;
	border-radius: 0!important;
	opacity: 1!important;
	-webkit-transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	-moz-transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
}

body[data-button-style="rounded"] .nectar-button.tilt, body[data-button-style="rounded"] .swiper-slide  .button-wrap a {
	border-radius: 0!important;
	-webkit-border-radius: 0!important;
}


.swiper-slide .button.solid_color_2 a:after,
.nectar-button.tilt:after {
	width: 100%;
	height: 37%; 
	left: 0;
	top: -35%;
	-webkit-transform-origin: 0% 100%;
	-webkit-transform: rotateX(90deg);
	-moz-transform-origin: 0% 100%;
	-moz-transform: rotateX(90deg);
	transform-origin: 0% 100%;
	transform: rotateX(90deg);
	content: '';
	position: absolute;
	z-index: -1;
	-webkit-transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	-moz-transition: all 0.55s cubic-bezier(0.68,0, 0.265, 1);
	transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	-webkit-font-smoothing: antialiased;
}

.swiper-slide .button.solid_color_2 a:before,
.nectar-button.tilt:before {
	width: 100%;
	height: 30%;
	left: 0;
	top: 99%;
	background: #49a7df;
	-webkit-transform-origin: 0% 0%;
	-webkit-transform: rotateX(-90deg);
	-moz-transform-origin: 0% 0%;
	-moz-transform: rotateX(-90deg);
	-ms-transform-origin: 0% 0%;
	-ms-transform: rotateX(-90deg);
	transform-origin: 0% 0%;
	transform: rotateX(-90deg);
	-webkit-transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	-moz-transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	transition: all 0.55s cubic-bezier(0.68, 0, 0.265, 1);
	-webkit-font-smoothing: antialiased;
	content: '';
	position: absolute;
	z-index: -1;
}

.swiper-slide .button.solid_color_2 a:hover,
.nectar-button.tilt:hover {
	-webkit-transform: rotateX(20deg);
	-moz-transform: rotateX(20deg);
	-ms-transform: rotateX(20deg);
	transform: rotateX(20deg);
}

.swiper-slide .button.solid_color_2 .button-wrap,
.tilt-button-inner {
	overflow: hidden;
	padding: 3px 0px;
	display: inline;
}


/*3d transparent button */
.nectar-3d-transparent-button {
    display: inline-block;
}

 .nectar-3d-transparent-button a {
 	display: block;
 }


.nectar-3d-transparent-button .hidden-text {
    height: 1em;
    line-height: 1.5; 
    overflow: hidden; 
}
.nectar-3d-transparent-button .hidden-text {
    display: block; 
    height: 0; 
    position: absolute; 
}

body .nectar-3d-transparent-button {

    position: relative;
    margin-bottom: 0;
}

.nectar-3d-transparent-button .inner-wrap  {
   -webkit-perspective: 2000px;
    perspective: 2000px;
	position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
}
 .nectar-3d-transparent-button .front-3d {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
}

 .nectar-3d-transparent-button .back-3d {
	position: relative;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
 }
/*
.nectar-3d-transparent-button:hover .inner-wrap  {
    -webkit-transform: rotateX(0deg) translateZ(0);
    transform: rotateX(0deg) translateZ(0);
}*/

.nectar-3d-transparent-button .back-3d {
	-webkit-transform-origin: 50% 50% -2.3em;
    transform-origin: 50% 50% -2.3em;
}
.nectar-3d-transparent-button .front-3d {
	-webkit-transform-origin: 50% 50% -2.3em;
    transform-origin: 50% 50% -2.3em;
	-webkit-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
}

.nectar-3d-transparent-button:hover .front-3d {
	-webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
}
.nectar-3d-transparent-button:hover .back-3d {
	-webkit-transform: rotateX(90deg);
    transform: rotateX(90deg);
}

.nectar-3d-transparent-button .back-3d,
.nectar-3d-transparent-button .front-3d {
    transition: -webkit-transform .25s cubic-bezier(.2,.65,.4,1);
    transition: transform .25s cubic-bezier(.2,.65,.4,1);
    transition: transform .25s cubic-bezier(.2,.65,.4,1),-webkit-transform .25s cubic-bezier(.2,.65,.4,1);
}

.nectar-3d-transparent-button .back-3d, .nectar-3d-transparent-button .front-3d {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.nectar-3d-transparent-button .back-3d svg, .nectar-3d-transparent-button .front-3d svg {
    display: block;
}



@media only screen and (min-width: 1000px)  {
	body[data-transparent-header="false"][data-bg-header="true"] .wpb_row.first-section {
		margin-top: -43px!important;
	}
}

body[data-transparent-header="false"][data-header-resize="0"] .nectar-slider-wrap[data-full-width="true"].first-section,
body[data-transparent-header="false"][data-header-resize="0"] .nectar-slider-wrap[data-full-width="true"].first-section .swiper-slide .content  {
	margin-top: 0px!important;
}


.no-left-margin.first-section {
	height: auto!important;
}

@keyframes fadebottom {
	0% {
	    opacity: 1;
	    transform: translateY(0px);
	    -moz-transform: translateY(0px);
	    -o-transform: translateY(0px);
	}
	25% {
	    opacity: 0;
	    transform: translateY(20px);
	    -moz-transform: translateY(20px);
	    -o-transform: translateY(20px);
	}
	30% {
	    opacity: 0;
	    transform: translateY(0px);
	    -moz-transform: translateY(0px);
	    -o-transform: translateY(0px);
	}
	45% {
	    opacity: 1;
	    transform: translateY(0px);
	    -moz-transform: translateY(0px);
	    -o-transform: translateY(0px);
	}
	100% {
	    opacity: 1;
	    transform: translateY(0px);
	    -moz-transform: translateY(0px);
	    -o-transform: translateY(0px);
	}
}

@-webkit-keyframes fadebottom {
	0% {
	    opacity: 1;
	    transform: translateY(0px);
	    -webkit-transform: translateY(0px);
	}
	25% {
	    opacity: 0;
	    transform: translateY(20px);
	     -webkit-transform: translateY(20px);
	}
	30% {
	    opacity: 0;
	    transform: translateY(0px);
	     -webkit-transform: translateY(0px);
	}
	45% {
	    opacity: 1;
	    transform: translateY(0px);
	     -webkit-transform: translateY(0px);
	}
	100% {
	    opacity: 1;
	    transform: translateY(0px);
	     -webkit-transform: translateY(0px);
	}
}



.flickity-enabled {
  position: relative;
}

.flickity-enabled:focus { outline: none; }

.classic_enhanced article .flickity-viewport {
	transform: scale(1.01);
	-webkit-transform: scale(1.01);
}


.nectar-flickity:not(.masonry) .flickity-viewport {
  overflow: hidden;
  position: relative;
  height: 100%;
  margin: 60px 0;
}

.flickity-slider {
  position: absolute;
  width: 100%;
  height: 100%;
}

.nectar-flickity:not(.masonry) .flickity-slider .cell {
	width: 66%;
	margin-right: 3%;
	counter-increment: gallery-cell;

}


.nectar-flickity:not(.masonry) .flickity-slider .cell img {
	margin: 0;
	vertical-align: middle;
	max-width: none;
	width: 100%;
}

.flickity-slider .cell {
	width: 100%;
	height: auto;
	overflow: hidden;
}

.flickity-slider .cell a {
	position: absolute;
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.classic_enhanced  .flickity-slider .cell img {
	display: block;
	margin: 0;
	width: 100%;
	height: auto;
}
/* draggable */

.flickity-enabled.is-draggable {
  -webkit-tap-highlight-color: transparent;
          tap-highlight-color: transparent;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.flickity-enabled.is-draggable .flickity-viewport {
  cursor: move;
  cursor: -webkit-grab;
  cursor: grab;
}

.flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}

/* ---- previous/next buttons ---- */

.flickity-prev-next-button {
  width: 40px;
  height: 40px;
  border: none;
  cursor: pointer;
  z-index: 1000;
  background-color: transparent!important;
  /* vertically center */
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-size: 25px!important;
    transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
}
.classic_enhanced .flickity-prev-next-button svg {
	 transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
}
.classic_enhanced article .flickity-prev-next-button,
.classic_enhanced article .item-count {
	top: 0;
	transform: none;
	-webkit-transform: none;
	right: 0;
	position: relative!important;
	display: block;
	float: left;
	border-radius: 0!important;
	color: #fff;
	line-height: 26px;
	height: 26px;
}
.classic_enhanced article .item-count {
	display: inline-block;
	font-size: 12px;
	letter-spacing: 2px;
	z-index: 1001;
	transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
	-webkit-transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
}
.nectar-flickity .control-wrap, .classic_enhanced  .wide_tall .control-wrap  {
	position: absolute;
	top: 27px;
	right: 15px;
	z-index: 1000;
	cursor: pointer;
}

.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.next,
.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.previous {
	top: 50%;
	width: 46px;
	height: 26px;
	position: absolute;
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}
.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.hidden {
	opacity: 0;
}

.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button {
	transition: opacity 1s;
    -webkit-transition: opacity 1s;
}
.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.hidden {
	transition: all 0.2s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.2s cubic-bezier(0.12, 0.75, 0.4, 1);
}
.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.next { right: 21.6%; }
.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.previous { left: 21.6%; }
.full-width-content .vc_col-sm-12 .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.next { right: 22.3%; }
.full-width-content .vc_col-sm-12 .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.previous { left: 22.3%; }
@media only screen and (max-width: 1500px) and (min-width: 1000px) { 
	.full-width-content .vc_col-sm-12 .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.next { right: 21.8%; }
	.full-width-content .vc_col-sm-12 .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.previous { left: 21.8%; }
}
.dark .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button .arrow { fill: #000;}

.nectar-flickity[data-controls="next_prev_arrows"]:not(.masonry) .flickity-slider .cell {
	width: 44.2%;
    margin-right: 9%;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
}

.dark .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.next:after,
.dark .nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.previous:after {
	background-color: #000!important;
}

.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button svg {
	width: 30%;
	right: 0;
	left: auto;
}

.nectar-flickity[data-controls="next_prev_arrows"] .flickity-prev-next-button.previous svg {
	width: 30%;
	left: 0;
	right: auto;
}

 .full-width-content .vc_col-sm-12 .nectar-flickity:not(.masonry) .flickity-viewport {
 	overflow: visible;
 }

.nectar-flickity[data-controls="next_prev_arrows"]:not(.masonry) .flickity-prev-next-button.next:after, 
.nectar-flickity[data-controls="next_prev_arrows"]:not(.masonry) .flickity-prev-next-button.previous:after {
    display: block;
    content: ' ';
    position: absolute;
    width: 28px;
    height: 2px;
    background-color: #fff;
    top: 12px;
    opacity: 1;
    left: 30px;
    cursor: pointer;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
}
.nectar-flickity[data-controls="next_prev_arrows"]:not(.masonry) .flickity-prev-next-button.previous:after {
	 left: auto;
	 right: -11px;
}

.classic_enhanced .flickity-prev-next-button.next:after, 
.classic_enhanced .flickity-prev-next-button.previous:after {
    display: block;
    content: ' ';
    position: absolute;
    width: 24px;
    height: 2px;
    background-color: #fff;
    top: 12px;
    opacity: 0;
    left: -4px;
    cursor: pointer;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
}

.classic_enhanced .flickity-prev-next-button.next:after {
    left: 5px;
}

.classic_enhanced .flickity-prev-next-button.next:hover:after {
	opacity: 1;
	transform: translateX(-6px);
	-webkit-transform: translateX(-6px);
}


.classic_enhanced .flickity-prev-next-button.previous:after {
	transform: translateX(20px);
	-webkit-transform: translateX(20px);
}

.classic_enhanced .flickity-prev-next-button.previous:hover:after {
	opacity: 1;
	transform: translateX(0px);
	-webkit-transform: translateX(0px);
}

.classic_enhanced .flickity-prev-next-button.previous:hover svg {
	transform: translateX(-18px);
	-webkit-transform: translateX(-18px);
}

.classic_enhanced .flickity-prev-next-button.previous.next-hovered, .classic_enhanced .item-count.next-hovered {
	transform: translateX(-18px);
	-webkit-transform: translateX(-18px);
}


/* big buttons, no circle */
.flickity-prev-next-button {
  background: transparent;
}
.flickity-prev-next-button:hover {
  background: transparent;
}

.flickity-prev-next-button.no-svg {
  color: white;
}
/* hide disabled button */
.flickity-prev-next-button:disabled {
  display: none;
}


.flickity-prev-next-button:hover { background: white; }



.flickity-prev-next-button:active {
  filter: alpha(opacity=60); /* IE8 */
  opacity: 0.6;
}


/* right to left */
.flickity-rtl .flickity-prev-next-button.previous {
  left: auto;
  right: 10px;
}
.flickity-rtl .flickity-prev-next-button.next {
  right: auto;
  left: 10px;
}

.flickity-prev-next-button:disabled {
  filter: alpha(opacity=30); /* IE8 */
  opacity: 0.3;
  cursor: auto;
}

.flickity-prev-next-button svg {
  position: absolute;
  left: 20%;
  top: 20%;
  width: 60%;
  height: 60%;
}

.flickity-prev-next-button .arrow {
  fill: #fff;
}

/* color & size if no SVG - IE8 and Android 2.3 */
.flickity-prev-next-button.no-svg {
  color: #333;
  font-size: 26px;
}

/* ---- page dots ---- */

.flickity-page-dots {
  position: absolute;
  width: 100%;
  bottom: -25px;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
  line-height: 1;
}

.flickity-rtl .flickity-page-dots { direction: rtl; }

.flickity-page-dots .dot {
  display: inline-block;
  width: 10px;
  height: 20px;
  margin: 0 8px;
  filter: alpha(opacity=25); /* IE8 */
  opacity: 0.25;
  cursor: pointer;
  transition: all 0.1s linear;
}

.flickity-page-dots .dot.is-selected {
  filter: alpha(opacity=100); /* IE8 */
  opacity: 1;
}


.flickity-page-dots {
  bottom: -45px;
  margin: 0!important;
}
/* dots are lines */
.flickity-page-dots .dot {
  height: 30px;
  width: 30px;
  position: relative;
  margin: 0 5px;
}

.flickity-page-dots .dot:before {
	background: #333;
	width: 100%;
	height: 4px;
	display: block;
	content: '';
	position: absolute;
	top: 13px;
	left: 0;
}


/***************** Sticky Submenu ********************/

.page-submenu:not(.stuck) {
	transform: translateY(0px)!important;
	-webkit-transform: translateY(0px)!important;
}
.page-submenu.no-trans {
	transition: none!important;
	-webkit-transition: none!important;
}
.page-submenu.stuck {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 1000;
	transition: all 0.3s;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
}

#boxed .page-submenu.stuck {
	left: auto!important;
}

@media only screen and (min-width: 1000px){
	#boxed .page-submenu.stuck {
		overflow: hidden;
	}
}

.page-submenu.stuck.header-not-visible {
	transition: all 0.2s;
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
}


.page-submenu.stuck .full-width-content {
	margin-left: 0px!important;
}
@media only screen and (min-width: 1600px) {
.page-submenu.stuck .full-width-content {
	margin-left: -2px!important;
}
}
.page-submenu .full-width-section,
.page-submenu .full-width-content {
	height: auto!important;
}

.page-submenu .full-width-section.first-section {
	margin-top: 0!important;
}

.full-width-content > .span_12 > .vc_col-sm-12 > .vc_column-inner > .wpb_wrapper .page-submenu:not(.stuck) > .full-width-content {
	margin-left: 0!important;
}
.page-submenu ul {
	margin: 0;
	color: inherit;
}
@media only screen and (min-width: 1000px) {.page-submenu ul{display:block!important; height:auto!important;}}
.page-submenu[data-alignment="left"] { text-align: left; }
.page-submenu[data-alignment="center"] { text-align: center; }
.page-submenu[data-alignment="right"] { text-align: right; }

.page-submenu[data-alignment="right"] .full-width-section ul li:last-child {
	margin-right: 0;
}
.page-submenu[data-alignment="left"] .full-width-section ul li:first-child {
	margin-left: 0;
}

.page-submenu[data-alignment="left"] .full-width-content ul li:first-child {
	margin-left: 25px;
}

.page-submenu[data-alignment="right"] .full-width-content ul li:last-child {
	margin-right: 33px;
}

.page-submenu li {
	display: inline-block;
	margin: 0 25px 0 0;
	color: inherit;
}

.page-submenu li a {
	color: inherit!important;
	transition: all 0.1s linear;
	-webkit-transition: all 0.1s linear;
    padding-top: 20px!important;
	padding-bottom: 20px!important;
	display: block;
	opacity: 0.7;
}

.page-submenu li a:hover, .page-submenu.stuck li.current-menu-item a {
	opacity: 1;
	color: inherit!important;
}

.page-submenu .mobile-menu-link {
	padding: 16px 20px;
	border-left: 1px solid rgba(255,255,255,0.2);
	border-right: 1px solid rgba(255,255,255,0.2);
	color: inherit!important;
	display: none;
	line-height: 17px;
}
.page-submenu[data-bg-color="#ffffff"] .mobile-menu-link {
	border-left: 1px solid rgba(0,0,0,0.08);
	border-right: 1px solid rgba(0,0,0,0.08);
}
 .salient-page-submenu-icon {
 	font-size: 16px;
 	float: left;
 	margin-right: 8px;
 }
 .salient-page-submenu-icon:before {
 	content: '\e067';
 }


/***************** Nectar Video Lightbox ******************/

.nectar_video_lightbox.play_button {
	position: relative;
	width: 90px;
	height: 90px;
	margin: 0 30px;
	display: inline-block;
}

.nectar_video_lightbox svg {
	display: block;
	width: 20px;
	height: 20px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: 2px;
	-ms-transform: translateY(-50%) translateX(-50%);
	transform: translateY(-50%) translateX(-50%);
	-webkit-transform: translateY(-50%) translateX(-50%);
}
 .nectar_video_lightbox.play_button:before {
 	display: block;
 	position: absolute;
 	content: ' ';
 	top: 0;
 	left: 0;
 	width: 100%;
 	height: 100%;
 	border: 6px solid #fff;
 	z-index: 10;
 	border-radius: 200px;
 	box-sizing: border-box;
 	-webkit-box-sizing: border-box;
 	transition: all 0.4s cubic-bezier(0.19, 1, 0.22, 1) 0s;
 	-webkit-transition: all 0.4s cubic-bezier(0.19, 1, 0.22, 1) 0s;
 } 

 .nectar_video_lightbox span {
 	display: block;
 	height: 100%;
 	width: 100%;
 	transition: all 0.4s cubic-bezier(0.19, 1, 0.22, 1) 0s;
 	-webkit-transition: all 0.4s cubic-bezier(0.19, 1, 0.22, 1) 0s;
 }

 .nectar_video_lightbox path {
       fill: #fff;
 }

 .span_12.dark .nectar_video_lightbox path {
       fill: #000;
 }
  .span_12.dark .nectar_video_lightbox:before {
  	 border: 5px solid #000;
 }


 .nectar_video_lightbox:hover:before {
 	transform: scale(1.1);
 	-webkit-transform: scale(1.1);
 	opacity: 0.4;
 }

 .nectar_video_lightbox:hover span {
 	transform: scale(1.3);
 	-webkit-transform: scale(1.3);
 }

 
  .span_12.dark .nectar_video_lightbox.nectar-button[data-color*="transparent"] {
  	border: 2px solid #000;
  	color: #000;
  }
 .nectar_video_lightbox.nectar-button[data-color*="transparent"] {
 	background-color: transparent!important;
 	border: 2px solid #fff;
 	opacity: 1;
 	transition: all 0.2s linear;
 	-webkit-transition: all 0.2s linear;
 }

  .nectar_video_lightbox.nectar-button[data-color*="transparent"]:hover {
  	color: #fff!important;
  	border-color: transparent!important;
  }

.nectar-video-box { overflow: hidden; line-height: 0; position: relative; margin-bottom: 35px;  }
.nectar-video-box img {
	transition: all .7s cubic-bezier(.2,1,.22,1);
    -webkit-transition: all .7s cubic-bezier(.2,1,.22,1);
	margin-bottom: 0!important;
	transform: translateZ(0) scale(1.05); -webkit-transform: translateZ(0) scale(1.05);
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
}
.nectar-video-box a.nectar_video_lightbox {
	position: absolute;
	left: 50%;
	top: 50%;
	z-index: 10;
	width: 70px;
    height: 70px;
    margin-top: -35px;
    margin-left: -35px;
    color: #fff;
    display: inline-block;
    border-radius: 200px;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
 }
.nectar-video-box > a.full-link {
	position: absolute;
	display: block;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 100;
}
.nectar-video-box:hover img {
    transform: scale(1.14);
    -webkit-transform: scale(1.14);
}
.nectar-video-box .nectar_video_lightbox path {
    fill: #fff!important;
}

/***************** Nectar Image With Hotspot ******************/

.nectar_image_with_hotspots.no-img {
	background-color: #333; width: 75%; height: 400px;
}
.row .nectar_image_with_hotspots img {
	max-width: none; width: 100%; margin-bottom: 0;
}
.nectar_image_with_hotspots { position: relative; line-height: 0;}
.nectar_image_with_hotspots .nectar_hotspot_wrap { position: absolute!important; width: 30px; height: 30px;}
.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip { position: relative; display: block; opacity: 0; z-index: 900; cursor: default; background-color: #fff; padding: 23px; max-width: 250px; transition: opacity 0.3s; -webkit-transition: opacity 0.3s; line-height: 22px; font-size: 14px; color: #666666; border-radius: 10px; pointer-events: none;}

.nectar_image_with_hotspots[data-tooltip-func="click"] .nectar_hotspot_wrap .nttip {transition: opacity 0.2s; -webkit-transition: opacity 0.2s;}


.nectar_image_with_hotspots[data-tooltip_shadow="small_depth"] .nectar_hotspot_wrap .nttip { box-shadow: 0px 1px 4px rgba(0,0,0,0.15);}
.nectar_image_with_hotspots[data-tooltip_shadow="medium_depth"] .nectar_hotspot_wrap .nttip { box-shadow: 0 20px 40px rgba(0,0,0,0.16), 0 10px 25px rgba(0,0,0,0.1); }
.nectar_image_with_hotspots[data-tooltip_shadow="large_depth"] .nectar_hotspot_wrap .nttip { box-shadow: 0 30px 102px rgba(0,0,0,0.33), 0 20px 51px rgba(0,0,0,0.18); }

.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip h4, .nectar_image_with_hotspots .nectar_hotspot_wrap .nttip h3 {
	margin-bottom: 4px;
}

.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip[data-tooltip-position="bottom"] { 
	 margin-top: 42px;
	 margin-left: 6px;
	-ms-transform: translateX(-50%); transform: translateX(-50%); -webkit-transform: translateX(-50%);
}
.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip[data-tooltip-position="top"] { 
	 margin-top: -20px;
	 margin-left: 6px;
	-ms-transform: translateX(-50%) translateY(-100%); transform: translateX(-50%) translateY(-100%); -webkit-transform: translateX(-50%) translateY(-100%);
}
.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip.force-top {
	 margin-top: -20px!important;
	 margin-left: 6px!important;
	-ms-transform: translateX(-50%) translateY(-100%); transform: translateX(-50%) translateY(-100%); -webkit-transform: translateX(-50%) translateY(-100%)!important;
}

.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip[data-tooltip-position="left"] { 
	 margin-left: -20px;
	 margin-top: 6px;
	-ms-transform: translateX(-100%) translateY(-50%); transform: translateX(-100%) translateY(-50%); -webkit-transform: translateX(-100%) translateY(-50%);
}

.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip.force-left { 
	 margin-left: -20px!important;
	 margin-top: 6px!important;
	-ms-transform: translateX(-100%) translateY(-50%); transform: translateX(-100%) translateY(-50%); -webkit-transform: translateX(-100%) translateY(-50%)!important;
}

.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip[data-tooltip-position="right"] { 
	 margin-left: 42px;
	 margin-top: 6px;
	-ms-transform: translateY(-50%); transform: translateY(-50%); -webkit-transform: translateY(-50%);
}
.nectar_image_with_hotspots .nectar_hotspot_wrap .nttip.force-right { 
	 margin-left: 42px!important;
	 margin-top: 6px!important;
	-ms-transform: translateY(-50%); transform: translateY(-50%); -webkit-transform: translateY(-50%)!important;
}

.nttip.empty-tip {
	display: none!important;
}

@media only screen and (min-width: 690px) {
	.nectar_image_with_hotspots[data-tooltip-func="hover"] .nectar_hotspot:hover + .nttip { 
		opacity: 1;
	}
	.nectar_image_with_hotspots[data-tooltip-func="hover"] .nectar_hotspot:hover span {
		transform: rotate(90deg);
		-webkit-transform: rotate(90deg);
	}

	.nectar_image_with_hotspots[data-tooltip-func="click"] .nectar_hotspot.open span {
		transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
	}

	.nectar_image_with_hotspots[data-animation="true"] .nectar_hotspot_wrap { opacity: 0; transform: translateY(80px); -webkit-transform: translateY(80px); }
	.nectar_image_with_hotspots[data-animation="true"] .nectar_hotspot_wrap.animated-in { 
		-webkit-animation: nectarBounceIn .8s ease-out forwards;
	    animation: nectarBounceIn .8s ease-out forwards;
	}

	.nectar_image_with_hotspots[data-tooltip-func="always_show"] .nectar_hotspot_wrap .nttip { opacity: 1;}
}

.nectar_image_with_hotspots .nttip.open { 
	opacity: 1!important;
}
	
.nectar_image_with_hotspots[data-hotspot-icon="plus_sign"] .nectar_hotspot span { display: block; pointer-events: none; transition: transform 0.3s; -webkit-transition: -webkit-transform 0.3s; width: 22px; height: 22px;}

.nectar_image_with_hotspots[data-hotspot-icon="plus_sign"][data-tooltip-func="click"] .nectar_hotspot span {
	transition: transform 0.2s; -webkit-transition: -webkit-transform 0.2s; 
}

.nectar_image_with_hotspots[data-hotspot-icon="plus_sign"] .nectar_hotspot span:before {
	position: absolute;
	display: block;
	height: 2px;
	width: 10px;
	left: 6px;
	top: 10px;
	content: ' ';
	background-color: #fff;
}
.nectar_image_with_hotspots[data-hotspot-icon="plus_sign"] .nectar_hotspot span:after {
	position: absolute;
	display: block;
	height: 10px;
	width: 2px;
	left: 10px;
	top: 6px;
	content: ' ';
	background-color: #fff;
}
.nectar_image_with_hotspots .nectar_hotspot {
    height: 22px;
    width: 22px;
    border-radius: 100px;
    position: absolute;
    z-index: 100;
    cursor: pointer;
    line-height: 22px;
    text-align: center;
    color: #fff;
    font-size: 11px;
    display: block;
}


.nectar_image_with_hotspots[data-stlye="color_pulse"] .nectar_hotspot {
	background-color: #27CFC3;
}

.nectar_image_with_hotspots[data-stlye="color_pulse"] .nectar_hotspot:before {
    display:block;
    position:absolute;
    top:50%;
    left:50%;
    content: '';
    width: 22px;
    height: 22px;
    margin: -11px auto auto -11px;
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    border-radius:50%;
    background-color: inherit;
    opacity:1;
    z-index: -1;
    pointer-events: none;
}

.nectar_image_with_hotspots[data-stlye="color_pulse"][data-hotspot-icon="numerical"] .nectar_hotspot.pulse:before, .nectar_image_with_hotspots[data-stlye="color_pulse"][data-hotspot-icon="plus_sign"] .nectar_hotspot:before {
	-webkit-animation: pulsate 3s cubic-bezier(0.2, 1, 0.2, 1) infinite;
    animation: pulsate 3s cubic-bezier(0.2, 1, 0.2, 1) infinite;
}


@-webkit-keyframes pulsate {
  from {
  	opacity: 1;
    transform: scale(1); }
  to {
  	opacity: 0;
   transform: scale(3); } }

@keyframes pulsate {
   from {
  	opacity: 1;
    transform: scale(1); }
  to {
  	opacity: 0;
   transform: scale(3); } }


@keyframes nectarBounceIn {
        0%{ transform: translateY(80px); opacity: 0;}
        33%{ transform: translateY(-13px); opacity: 1; }
        66%{ transform: translateY(4px); opacity: 1; }
        100%{ transform: translateY(0px); opacity: 1; }
}

@-webkit-keyframes nectarBounceIn {
        0%{ transform: translateY(80px); opacity: 0; }
        33%{ transform: translateY(-13px); opacity: 1;}
        66%{ transform: translateY(4px); opacity: 1; }
        100%{ transform: translateY(0px); opacity: 1; }
}

@media only screen and (min-width: 690px) {
	.nectar_image_with_hotspots[data-size="medium"] .nectar_hotspot {
		height: 30px;
    	width: 30px;
    	line-height: 30px;
    	font-size: 14px;
	}
	.nectar_image_with_hotspots[data-size="medium"][data-hotspot-icon="plus_sign"] .nectar_hotspot span {
		height: 30px;
    	width: 30px;
	}
	.nectar_image_with_hotspots[data-size="medium"][data-hotspot-icon="plus_sign"] .nectar_hotspot span:before {
	    height: 2px;
	    width: 12px;
	    left: 9px;
	    top: 14px;
	}
	.nectar_image_with_hotspots[data-size="medium"][data-hotspot-icon="plus_sign"] .nectar_hotspot span:after {
	    height: 12px;
	    width: 2px;
	    left: 14px;
	    top: 9px;
	}
	.nectar_image_with_hotspots[data-size="medium"] .nectar_hotspot_wrap .nttip[data-tooltip-position="bottom"] { 
		 margin-top: 60px;
		 margin-left: 15px;
	}
	.nectar_image_with_hotspots[data-size="medium"] .nectar_hotspot_wrap .nttip[data-tooltip-position="top"] { 
		 margin-top: -30px;
		 margin-left: 15px;
	}

	.nectar_image_with_hotspots[data-size="medium"] .nectar_hotspot_wrap .nttip[data-tooltip-position="left"] { 
		 margin-left: -30px;
		 margin-top: 15px;
	}

	.nectar_image_with_hotspots[data-size="medium"] .nectar_hotspot_wrap .nttip[data-tooltip-position="right"] { 
		 margin-left: 60px;
		 margin-top: 15px;
	}
}

/***************** Nectar Video BG ******************/

.wpb_row .nectar-video-wrap, #page-header-bg .nectar-video-wrap {
	position: absolute!important;
    top: 0;
    left: 0;
    padding-bottom: 0px!important;
    overflow: hidden;
    opacity: 0;
    z-index: 1;
}

#page-header-bg .nectar-video-wrap {
	opacity: 1;
	background-color: #393939;
	background-position: center;
    background-repeat: repeat;
    background-image: url('img/textures/diagonal_line.png');
}

#page-header-bg .nectar-video-wrap video {
	opacity: 0;
}

body[data-ajax-transitions="true"][data-apte="center_mask_reveal"] #page-header-bg[data-animate-in-effect="zoom-out"] .nectar-video-wrap video {
	opacity: 1;
}

.video-color-overlay {
	width: 100%;
	height: 100%;
	opacity: 0;
	position: absolute!important;
	-webkit-backface-visibility: hidden;
    top: 0;
    left: 0;
    padding-bottom: 0px!important;
    z-index: 3;
}

.wpb_row .nectar-video-wrap .mejs-container .mejs-controls {
	display: none!important;
}

.wpb_row > .span_12 {
	z-index: 10;
	margin-bottom: 0px!Important;
}

.wpb_row > .span_12 > .column_container:last-child {
	margin-bottom: 0px!Important;
}

#page-header-bg .container {
	z-index: 100;
}

/***************** Nectar mouse parallax ******************/

.nectar-slider-loading {
	background-color: #393939;
	background-position: center;
	background-repeat: repeat;
	background-image: url('img/textures/diagonal_line.png');
	position: absolute;
	z-index: 1000;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
}


.wpb_row .nectar-parallax-scene {
    position: absolute!important;
    top: 0;
    left: 0;
    margin: 0!important;
    padding-bottom: 0px!important;
    overflow: hidden;
    width: 100%;
    height: 100%;
    z-index: 1;
     -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translate3d(0px, 0px, 0px);
    transform: translate3d(0px, 0px, 0px);
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.wpb_row .nectar-parallax-scene li {
	height: 100%;
	width: 100%;
}

.wpb_row .nectar-parallax-scene div {
	margin-left: -10%;
	top: -10%;
    min-height: 100%;
    width: 120%;
    height: 120%;
    background-size: cover;
    margin-bottom: 0!important;
    max-width: none;
    position: relative;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translate3d(0px, 0px, 0px);
    transform: translate3d(0px, 0px, 0px);
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
}



.wpb_row .nectar-parallax-scene[data-scene-position="center"] div { background-position: center;}
.wpb_row .nectar-parallax-scene[data-scene-position="bottom"] div { background-position: center bottom;}
.wpb_row .nectar-parallax-scene[data-scene-position="top"] div { background-position: center top;}

/***************** Flexslider ******************/
.flex-gallery  {margin: 0; padding: 0;}
.flex-gallery .slides > li {display: none; -webkit-backface-visibility: hidden;} 
.flex-gallery .slides img {width: 99.8%; display: block;} 
.flex-pauseplay span {text-transform: capitalize;}
 

.slides:after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;} 
html[xmlns] .slides {display: block;} 
* html .slides {height: 1%;}

.no-js .slides > li:first-child {display: block;}


.flex-gallery  {margin: 0 0 15px; position: relative; zoom: 1; background-color: transparent;}
.flex-viewport {max-height: 2000px; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; transition: all 1s ease;}
.loading .flex-viewport {max-height: 300px;}
.flex-gallery .slides {zoom: 1;}

.flex-gallery ul {
	position: relative;
	z-index: 1000;
	margin: 0px;
}

.flex-gallery ul.flex-direction-nav {
	margin: 0 !important;
    position: absolute !important;
    top: 8px;	
}

.flex-gallery ul li {
	list-style: none;
}

.flex-gallery ul li img {
	margin-bottom: 0px!important;
}

.carousel li {margin-right: 0px;  margin-left: 0px;}


.flex-control-nav {
	display: none;	
}

.flex-direction-nav {*height: 0;}
.flex-direction-nav a {
	display: block;
	line-height: 22px;
	position: relative;
	background-color: #27CFC3;
    height: 25px;
    width: 25px;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
    border-radius: 1px 1px 1px 1px;
    -moz-border-radius: 1px 1px 1px 1px;
    -webkit-border-radius: 1px 1px 1px 1px;
    -o-border-radius: 1px 1px 1px 1px;
}

.flex-direction-nav a i {
	line-height: 29px;
	color: #fff;
	background-color: transparent!important;
}

.flex-direction-nav a.flex-next {
	padding-left: 2px;
}

.flex-direction-nav a.flex-prev {
	padding-right: 2px;
}

.flex-direction-nav li{
	float: left;
	margin-left: 7px!important;
}

.flex-direction-nav {
	margin: -32px 0px 0px 0px!important;
}

.flex-direction-nav a:hover {
	background-color: #333333!important;
}

.flex-direction-nav .flex-next span {background-image: url("img/icons/slider-arrows-small.png")!important; background-position: right top; top: 9px; right: 9px; position: absolute; display: block; height:15px; width:15px; z-index: 100;}
.flex-direction-nav .flex-prev span {background-image: url("img/icons/slider-arrows-small.png")!important; background-position: left top; top: 9px; left: 9px;  position: absolute; display: block; height:15px; width:15px; z-index: 100;}



.iframe-embed {
	position: relative;
	margin-bottom: 15px;
	line-height: 0;
}

.iframe-embed iframe, iframe {
	max-width: 100%;
}

.main-content iframe[src] {
	opacity: 0;
}

html:not(.js) .main-content  iframe[src], .main-content #sidebar iframe[src], .wc-braintree-hosted-field iframe {
	opacity: 1;
}

.iframe-embed-standard iframe {
	width: 100%!important;
}

body .wpb_video_widget .wpb_wrapper .wpb_video_wrapper {
	padding-top: 0px;	
}

body .wpb_video_widget .wpb_wrapper iframe {
    height: inherit;
    position: relative;
    width: inherit;
}

/* 3.6 Media Element Styles */

body .mejs-container .mejs-controls > div.mejs-horizontal-volume-slider {
    height: 26px;
    width: 56px;
    position: relative;
    display: block;
    float: left;
    vertical-align: middle;
}

.mejs-controls .mejs-time-rail .mejs-time-total, .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
    background: rgba(255, 255, 255, .33);
}

.mejs-controls .mejs-button button:focus {
	outline: none!important;
}

video, audio {
	visibility: hidden;
}

.mejs-controls .mejs-time-rail .mejs-time-loaded {
	background-color: rgba(255, 255, 255, 0.3)!important;
}

.mejs-video .mejs-controls div.mejs-time-rail {
	padding-top: 8px;
}
.mejs-audio .mejs-controls div.mejs-time-rail {
	padding-top: 7px;
}
.mejs-video .mejs-controls .mejs-time-rail .mejs-time-current, 
.mejs-video .mejs-controls .mejs-time-rail span, 
.mejs-video .mejs-controls .mejs-time-rail a,
.mejs-video  .mejs-controls .mejs-time-rail .mejs-time-loaded {
	height: 6px;
}

.mejs-audio .mejs-controls .mejs-time-rail .mejs-time-current, 
.mejs-audio .mejs-controls .mejs-time-rail span, 
.mejs-audio .mejs-controls .mejs-time-rail a,
.mejs-audio  .mejs-controls .mejs-time-rail .mejs-time-loaded {
	height: 8px;
}
.mejs-container {
	background-color: transparent!important;
	background-image: none!important;
}

.wp-video { width: 100%!important; margin-bottom: 20px; }

video.wp-video-shortcode, .wp-video-shortcode video {
	width: auto!important;
}

.mejs-container .mejs-poster img {
	max-width: none!important;
	width: 100%!important;
}

.mejs-container-fullscreen .mejs-poster img  {
	height: 100%!important;
}

body .mejs-poster {
	background-size: cover;
}

body .mejs-container .mejs-controls .mejs-time {
	opacity : 0.8;
	padding-top: 11px;
}
body  .mejs-controls button {
	transition: opacity 0.15s ease;
}

body  .mejs-controls button:hover, .mejs-controls .mejs-fullscreen-button:hover button { opacity: 0.8!important;}

.mejs-controls .mejs-mute button { background: transparent url(img/icons/jplayer.png) -102px -76px no-repeat!important; }
.mejs-controls .mejs-unmute button { background: url(img/icons/jplayer.png) -145px -76px no-repeat!important; }

.mejs-controls .mejs-play button { background: url(img/icons/jplayer.png) -24px -75px no-repeat!important; }
.mejs-controls .mejs-pause button { background: url(img/icons/jplayer.png) -60px -75px no-repeat!important; }

.mejs-controls .mejs-fullscreen-button button { background: url(img/icons/jplayer.png) -187px -76px no-repeat!important;  }


.mejs-controls .mejs-time-rail .mejs-time-total {
	background-color: rgba(255, 255, 255, 0.25)!important;
}

.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
	background: transparent!important;
}

body .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-handle {
	top: 5px;
}

body  .mejs-controls .mejs-button button {
	font-size: 18px;
	color: #fff;
	width: auto;
	position: relative;
	display: inline-block;
	background-image:none!important;
}
body  .mejs-controls button:before {
	text-decoration: inherit;
    display: inline-block;
    speak: none;
}
body .mejs-container .mejs-controls div {
	width: 34px;
	height: auto;
	text-align: center;
}
body .mejs-controls .mejs-play button:before {
	content: "\e052";
}
body .mejs-controls .mejs-mute button:before {
	content: "\e098";
}
body .mejs-controls .mejs-unmute button:before {
	content: "\e099";
}
body .mejs-controls .mejs-fullscreen-button button:before {
	content: "\e110";
	font-size: 17px;
}
body .mejs-controls .mejs-fullscreen-button.mejs-unfullscreen button:before {
	content: "\e111";
}
body .mejs-button.mejs-volume-button {
	margin-left: 5px!important;
}
body .mejs-controls a.mejs-horizontal-volume-slider {
    margin-right: 15px;
}

body .mejs-controls .mejs-pause {
	top: 2px;
	left: 2px;
	position: relative;
	border-radius: 0!important;
}

body[data-button-style="rounded"] .mejs-controls .mejs-pause button {
	border-radius: 0!important;
}
body .mejs-controls .mejs-pause button {
	border-left: 3px solid #fff;
	border-right: 3px solid #fff;
	width: 9px;
	height: 12px;
	right: 3px;
	top: 2px;
}
body .mejs-container.mejs-audio {
	height: 50px!important;
	background-color: rgba(0,0,0,1)!important;
}
body .mejs-container.mejs-audio .mejs-controls,
body .masonry-blog-item .mejs-container.mejs-video .mejs-controls {
	height: 42px;
}
body .mejs-container.mejs-audio .mejs-playpause-button, 
body .masonry-blog-item  .mejs-container.mejs-video .mejs-controls .mejs-playpause-button{
	margin-left: 10px!important;
}
body .masonry-blog-item  .mejs-container .mejs-fullscreen-button {
	margin-right: 10px!important;
}
body .masonry-blog-item  .mejs-container:not(.mejs-audio) .mejs-controls:before {
	 height: 250%;
}
body .mejs-container:not(.mejs-audio) .mejs-controls:before {
    background: -webkit-linear-gradient(top , rgba(255, 255, 255, 0) -2%, rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 0.04) 44%, rgba(0, 0, 0, 0.8) 100%, rgba(0, 0, 0, 0.6) 100%);
    background: linear-gradient(rgba(255, 255, 255, 0) -2%, rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 0.04) 44%, rgba(0, 0, 0, 0.8) 100%, rgba(0, 0, 0, 0.6) 100%);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 400%;
    z-index: 11;
    border-radius: 4px;
    content: ' ';
}
body .mejs-container .mejs-controls > * {
	z-index: 100;
	position: relative;
}
body .mejs-container .mejs-controls {
	background: none!important;
	height: 50px;
}
body .mejs-playpause-button {
	margin-left: 20px!important;
}
body .mejs-fullscreen-button {
	margin-right: 20px!important;
}

body .mejs-video .mejs-controls .mejs-time-rail .mejs-time-float {
	color: #fff!important;
	border: none;
	background-color: transparent;
}
body .mejs-controls .mejs-time-rail .mejs-time-float-corner {
	border-color: transparent transparent;
}

body .mejs-audio .mejs-controls .mejs-time-rail .mejs-time-float {
	border: none;
	background-color: #fff;
	height: 15px;
	box-shadow: 0px 2px 12px rgba(0,0,0,0.25);
}

/***************** Isotope ******************/

.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

.isotope {
  -webkit-transition-property: height;
     -moz-transition-property: height;
      -ms-transition-property: height;
       -o-transition-property: height;
          transition-property: height;
}

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
      -ms-transition-property:     -ms-transform, opacity;
       -o-transition-property:      -o-transform, opacity;
          transition-property:         transform, opacity;
}

.portfolio-items .col.no-transition {
  -webkit-transition-duration: 0s!important;
     -moz-transition-duration: 0s!important;
      -ms-transition-duration: 0s!important;
       -o-transition-duration: 0s!important;
          transition-duration: 0s!important;
}



/***************** carouFredSel ******************/

.carousel-outer {
	overflow: hidden;
	margin-right: 2px;
}


body[data-ajax-transitions="true"] .carousel {
    opacity: 1;
}

.carousel-heading {
	z-index: 100;
	position: relative;
	margin-bottom: 7px;
	min-height: 23px;
}

.carousel-heading h2 {
	font-family: 'Open Sans';
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px!important;
	font-size: 12px;
	margin-left: 10px;
	margin-bottom: 7px!important;
}

.carousel-wrap .item-count {
	font-size: 12px;
}

.carousel-wrap[data-full-width="false"] .carousel-heading h2 {
	font-size: 12px!important;
}

html:not(.js) .carousel-heading {
	display: none;
}

.carousel-wrap[data-ctc="light"] .carousel-heading h2, 
.ascend .carousel-wrap[data-ctc="light"] .carousel-next i, 
.ascend .carousel-wrap[data-ctc="light"] .carousel-prev i,
.carousel-wrap[data-ctc="light"] .item-count,
.carousel-wrap[data-full-width="true"][data-ctc="light"] .carousel-heading i {
	color: #fff;
}

.recent-work-carousel[data-ctc="light"][data-full-width="true"] .carousel-heading {
	background-color: #252525;
}


.caroufredsel_wrapper {
	cursor: grab!important;
	cursor: -moz-grab!important;
	cursor: -webkit-grab!important;
	margin: 0px!important;	
}

.caroufredsel_wrapper.active {
	cursor: grabbing!important;
	cursor: -moz-grabbing!important;
	cursor: -webkit-grabbing!important;
}

body .carousel-wrap {
	position: relative;
	overflow: hidden;
	margin: 0px -10px 0em -10px;
}

.full-width-section .carousel-wrap {
	margin-bottom: 0px!important;
}

#full_width_portfolio .full-width-section.first-section, #full_width_portfolio .full-width-content.first-section {
	margin-top: 0px!important;
}

.carousel-wrap[data-full-width="true"] {
	padding: 0px 18px;
	margin-bottom: 0px!important;
}

.carousel-wrap[data-full-width="true"] .carousel-heading {
	background-color: #f8f8f8;
	padding: 43px 0px 40px 0px;
	margin-bottom: 0px;
	text-align: center;
}

body .carousel-wrap[data-full-width="true"] .carousel-heading h2 {
	font-size: 24px;
	line-height: 36px;
    letter-spacing: 0.5px!important;
    margin: 0 auto!important;
    max-width: 900px;
    text-transform: none!important;
    font-family: 'Open Sans';
	font-weight: 300;
}

.carousel-wrap[data-full-width="true"] .carousel-heading a.portfolio-page-link {
	position: absolute;
	left: 0px;
}

.carousel-wrap[data-full-width="true"] .carousel-heading a.portfolio-page-link, .carousel-wrap[data-full-width="true"] .carousel-heading a.carousel-prev, 
.carousel-wrap[data-full-width="true"] .carousel-heading a.carousel-next  {
	top: 8px!important;
}

.carousel-wrap[data-full-width="true"] .carousel-heading a {
	background-color: transparent!important;
}

.carousel-wrap[data-full-width="true"] .carousel-heading i {
	background-color: transparent!important;
    color: #888888;
    font-size: 30px;
    line-height: 28px;
    transition: color 0.2s linear 0s;
}

body .carousel-wrap[data-full-width="true"] .carousel-heading .container {
	min-height: 40px;
}
	

#boxed .carousel-wrap[data-full-width="true"] {
	padding: 0px;
}

body[data-smooth-scrolling="0"] .carousel-wrap[data-full-width="true"] {
	padding: 0px;
}

.carousel-wrap .work-item.style-2 {
	margin-bottom: 0px!important;
}


.carousel-wrap[data-full-width="true"] .portfolio-items .col .work-item.style-2 .work-info a,
.woocommerce .products-carousel ul.products li.product a {
	cursor: grab!important;
	cursor: -moz-grab!important;
	cursor: -webkit-grab!important;
	margin: 0px!important;	
}


.carousel-wrap[data-full-width="true"] .portfolio-items .col .work-item.style-2 .work-info > a, .portfolio-items .col .work-item.style-2 .work-info > a, .portfolio-items .col .work-item.style-3 .work-info > a, .portfolio-items .col .work-item.style-4 .work-info > a,
.portfolio-items .col .work-item.style-3-alt .work-info > a, .portfolio-items .col .work-item.style-1 .work-info > a {
	display: block!important;
	margin: 0px!important;
	background-color: transparent!important;
	position: absolute!important;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 40;
}

.carousel-wrap[data-full-width="true"] .portfolio-items .col .work-item .work-info a.active,
.woocommerce .products-carousel ul.products li.product a.active  {
	cursor: -moz-grabbing!important;
	cursor: -webkit-grabbing!important;
}

.full-width-content .vc_span12 .carousel-wrap.products-carousel,
.full-width-content .vc_col-sm-12 .carousel-wrap.products-carousel {
	padding: 0 30px;
	overflow: visible;
}

.full-width-content .vc_span9 .carousel-wrap.products-carousel,
.full-width-content .vc_span8 .carousel-wrap.products-carousel,
.full-width-content .vc_span6 .carousel-wrap.products-carousel,
.full-width-content .vc_span4 .carousel-wrap.products-carousel,
.full-width-content .vc_span3 .carousel-wrap.products-carousel,
.full-width-content .vc_span9 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_span8 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_span6 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_span4 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_span3 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_col-sm-9 .carousel-wrap.products-carousel,
.full-width-content .vc_col-sm-8 .carousel-wrap.products-carousel,
.full-width-content .vc_col-sm-6 .carousel-wrap.products-carousel,
.full-width-content .vc_col-sm-4 .carousel-wrap.products-carousel,
.full-width-content .vc_col-sm-3 .carousel-wrap.products-carousel,
.full-width-content .vc_col-sm-9 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_col-sm-8 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_col-sm-6 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_col-sm-4 .carousel-wrap.products-carousel .caroufredsel_wrapper,
.full-width-content .vc_col-sm-3 .carousel-wrap.products-carousel .caroufredsel_wrapper {
	overflow: hidden!important;
}

.full-width-content .caroufredsel_wrapper {
	overflow: visible!important;
}

.carousel-wrap[data-full-width="true"] .portfolio-items .col .work-item h3, .portfolio-items .col .work-item.style-2 h3 {
	margin-bottom: 0px;	
}

body .carousel-wrap[data-full-width="true"] .portfolio-items .col .work-item.style-2 .work-info > i, .portfolio-items .col .work-item.style-2 .work-info > i {
	position: absolute!important;
	top: auto!important;
	bottom: 0px!important;
	color: #fff!Important;
	left: 0px!important;
	line-height: 40px!important;
	height: 40px!important;
	width: 40px!Important;
	padding: 0px!important;
	background-color: #252525!Important;
	border-radius: 0px!important;
	padding: 0px!important;
}

.carousel-wrap .carousel-heading {
	padding: 0px;
}


html:not(.js) .carousel-wrap  {
	display: none;
}

.carousel-wrap span.left-border, .carousel-wrap span.right-border {
	width: 10px;
	display: block;
	height: 100%;
	position: absolute;
	top: 0px;
	z-index: 100;
	background-color: #f8f8f8;
}

.carousel-wrap span.left-border { left: 0px; }
.carousel-wrap span.right-border { right: 0px; }

.carousel-next, .carousel-prev {
    background-color: #dadada;
    cursor: pointer;
    display: block;
    height: 17px;
    margin-left: 5px;
    line-height: 22px;
    transition: all 0.2s linear 0s;
    -webkit-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    background-repeat: no-repeat!important;
    position: absolute;
    top: 0px;
    height: 20px;
    width: 20px;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -o-border-radius: 1px;
    -moz-border-radius: 1px;
    text-align: center;
}


.carousel-wrap[data-full-width="true"] .carousel-next, .carousel-wrap[data-full-width="true"] .carousel-prev {
	height: 28px;
    width: 44px;
}
.carousel-wrap[data-full-width="true"] .carousel-next {
	text-align: right;
}
.carousel-wrap[data-full-width="true"] .carousel-prev {
	text-align: left;
}

.carousel-next {
	right: 0px;
	padding-left: 1px;
}

.carousel-prev {
	right: 25px;
	padding-right: 1px;
}

.carousel-wrap[data-full-width="false"] .control-wrap {
	position: absolute;
	right: 0px;
	top: 0;
}


.carousel-next i, .carousel-prev i {
	background-color: transparent!important;
	line-height: 24px;
	font-size: 14px;
}

.carousel-prev:hover, .carousel-next:hover  {
	background-color: #27CFC3;	
}

.carousel {
	opacity: 0;
}

.carousel-wrap[data-full-width="true"] li.span_4.no-margin  {
	margin: 0px!important;
}

.carousel-wrap[data-full-width="true"] {
	padding: 0px 0px 0px 0px!important;
}

.carousel-wrap[data-full-width="true"].default-style {
	padding: 0px 20px!important;
}

.carousel-wrap[data-full-width="true"] .work-meta {
	padding: 0px 15px;
}

.carousel-wrap[data-full-width="true"].default-style .work-meta  {
	padding: 0px!important;
}

body .carousel li.span_4, body .portfolio-items.carousel li.span_4  {
	margin: 0px 10px 0px 10px;
}

.carousel-wrap[data-full-width="true"].default-style li.span_4 {
	margin: 0px 15px 0px 15px;
}

.carousel li.span_4 .clear {
	padding-bottom: 0px;
	margin-bottom: 0px;
}


.home .blog-recent .col .post-header {
    color: #999;
    font-size: 11px;
    margin-bottom: 12px;
}

.home .blog-recent .col .post-header h3 a {
	color: #27CFC3;
}

.blog-recent .mejs-container {
	margin-bottom: 15px;
}

.home .blog-recent .col .post-header h3, .blog-recent[data-style="default"] .col .post-header h3 {
	margin-bottom: 3px;
	letter-spacing: -0.2px;
	font-size: 16px;
	line-height: 23px;
}

.home .blog-recent .col .post-header a, .home .blog-recent .col .post-header h3 a:hover {
	color: inherit!important;	
}

.home .blog-recent .col .post-header a:hover {
	color: #27CFC3;
}

.blog-recent .col {
	margin-bottom: 40px;
}

.blog-recent .col .video-wrap {
	position: relative;
	padding-bottom: 54.25%;
	padding-top: 5px;
	height: 0;
	margin-bottom: 15px;
}

.blog-recent .col .video-wrap iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.blog-recent div:last-of-type {
	margin-right: 0;
}

.blog-recent.columns-4 div:nth-child(4n+4) { margin-right: 0!important; }
.blog-recent.columns-3 div:nth-child(3n+3) {  margin-right: 0!important; }
.blog-recent.columns-2 div:nth-child(2n+2) {  margin-right: 0!important; }
.blog-recent.columns-1 div:nth-child(1n+1) { margin-right: 0!important; }

.blog-recent.columns-4 div:nth-child(4n+5) { clear: both; }
.blog-recent.columns-3 div:nth-child(3n+4) { clear: both; }
.blog-recent.columns-2 div:nth-child(2n+3) { clear: both; }

.video-wrap iframe {
	opacity: 0;
	visibility: hidden;
}

.blog-recent .col .audio-wrap {
	margin-bottom: 15px;
}

.blog-recent[data-style="minimal"] .col {
	margin-bottom: 2%;
	padding: 20px;
}

.blog-recent[data-style="minimal"] .meta{
	margin-bottom: 13px;
	display: block;
}
.blog-recent[data-style="title_only"] .meta {
	margin-bottom: 6px;
	display: block;
}

.blog-recent[data-style="minimal"] .col > a,
.blog-recent[data-style="title_only"] .col > a {
	position: absolute;
	z-index: 100;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: block;
}

.blog-recent[data-style="minimal"] .col a {
	color: inherit!important;
}

.blog-recent[data-style="minimal"] .col > span {
	color: #27CFC3;
	display: block;
}

.blog-recent[data-style="minimal"] .col i {
	background-color: transparent!important;
	color: inherit;
	height: auto;
	font-size: 15px;
	width: 23px;
	top: 0px;
	transition: transform .33s cubic-bezier(.75,0,.18,1);
	-webkit-transition: transform .33s cubic-bezier(.75,0,.18,1);
	-moz--webkit-transition: transform .33s cubic-bezier(.75,0,.18,1);
}
.blog-recent[data-style="minimal"] .col:hover i {
	transform: translateX(7px);
	-webkit-transform: translateX(7px);
	-moz-transform: translateX(7px);
}

.blog-recent[data-style="minimal"] .col > span {
	font-family: 'Open Sans';
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 12px;
}

.blog-recent[data-style="title_only"] .col {
	background-color: rgba(0,0,0,0.03);
	margin-bottom: 2%;
	padding: 50px 25px;
}

.blog-recent[data-style="title_only"] {
	text-align: center;
}

.blog-recent[data-style="title_only"] .post-header {
	width: 70%;
	left: 15%;
	margin-bottom: 0;
	word-break: break-word;
	position: relative;
}

.blog-recent[data-style="title_only"] .post-header .title, .blog-recent[data-style="title_only"] .col .post-header .meta {
	transition: transform .33s cubic-bezier(.75,0,.18,1), opacity .33s cubic-bezier(.75,0,.18,1), color .33s cubic-bezier(.75,0,.18,1);
	-webkit-transition: transform .33s cubic-bezier(.75,0,.18,1), opacity .33s cubic-bezier(.75,0,.18,1), color .33s cubic-bezier(.75,0,.18,1);
	-moz--webkit-transition: transform .33s cubic-bezier(.75,0,.18,1), opacity .33s cubic-bezier(.75,0,.18,1), color .33s cubic-bezier(.75,0,.18,1);
}

.blog-recent[data-style="title_only"] .col:hover .post-header .title {
	transform: scale(1.1) translateY(-10px);
	-webkit-transform: scale(1.1) translateY(-10px);
	color: #27CFC3;
}
.blog-recent[data-style="title_only"] .col:hover .post-header .meta {
	transform: translateY(20px);
	-webkit-transform: translateY(20px);
	opacity: 0;
}

.span_9 .carousel-heading {
	padding-right: 10px;
}

.nectar-recent-posts-slider {
	overflow: hidden;
}


.nectar-recent-posts-slider .nectar-recent-post-slide {
	width: 101%;
	position: relative;
	line-height: 0px;
	min-height: 250px;
	overflow: hidden;
}

.nectar-recent-posts-slider .flickity-enabled.is-draggable .flickity-viewport {
	overflow: hidden;
}

.nectar-recent-post-slide .nectar-recent-post-bg {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background-size: cover;
	background-position: center;
	background-color: #222;
}

.nectar-recent-post-slide .nectar-recent-post-bg:after, .single [data-post-hs="default_minimal"] .page-header-bg-image:after, .archive .page-header-bg-image:after {
	background-color: rgba(45,45,45,0.3);
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	content: ' ';
	z-index: 1;
	display: block;
}

.nectar-recent-posts-slider .container .strong {
	font-size: 12px!important;
    font-family: 'Open Sans';
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: #fff;
    position: relative;
    display: block;
    line-height: 12px;
}

.nectar-recent-posts-slider .container .strong a {
	color: #fff;
	margin-left: 15px;
}

.nectar-recent-posts-slider .container .strong a:hover span:before {
	width: 100%;
	height: 20px;
	top: -4px;
}

.nectar-recent-posts-slider .container .strong a:first-child {
	margin-left: 0;
}

.nectar-recent-posts-slider .container .strong span {
	display: inline-block!important;
	position: relative;
	padding-left: 13px;
	padding-right: 10px;
	z-index: 10;
}

.flickity-viewport.is-moving a {
	pointer-events: none;
}

.nectar-recent-posts-slider .container .strong span:before {
	display: block;
	content: ' ';
	height: 11px;
	margin-right: 4px;
	position: absolute;
	left: 0;
	top: 0px;
	width: 3px;
	transition: all .3s cubic-bezier(.175,.885,.32,1.1);
	-webkit-transition: all .3s cubic-bezier(.175,.885,.32,1.1);
	z-index: -1;
}

.nectar-recent-post-content {
	position: absolute;
	color: #fff;
	z-index: 20;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	pointer-events: none;
}


.wpb_row:not(.full-width-content) .wpb_column:not(.vc_col-sm-12) .nectar-recent-posts-slider .container {
	padding: 0!important;
}
.wpb_row:not(.full-width-content) .wpb_column:not(.vc_col-sm-12) .nectar-recent-posts-slider .inner-wrap {
	max-width: none!important;
	padding: 10px 15%!important;
	left: 0;
} 
.wpb_row:not(.full-width-content) .wpb_column:not(.vc_col-sm-12)  .nectar-recent-posts-slider .flickity-page-dots {
	padding: 0 15%!important;
}

.nectar-recent-posts-slider .container {
	height: 100%;
	pointer-events: none;
}

.nectar-recent-posts-slider .inner-wrap {
	top: 50%;
	position: absolute;
	left: auto;
	max-width: 50%;
	width: auto;
	pointer-events: all;
	transform: translateY(-50%) ;
	-webkit-transform: translateY(-50%);
	transition: all 0.3s linear;
	display: inline-block;
	z-index: 100;

}
.nectar-recent-posts-slider .flickity-page-dots {
	text-align: left;
}

.nectar-recent-posts-slider h2 a {
	transition: color 0.16s ease;
	-webkit-transition: color 0.16s ease;
}
.nectar-recent-posts-slider h2 a:hover {
	color: rgba(255,255,255,0.8)!important;
}

.nectar-recent-posts-slider h2 a {
	color: #fff!important;
}


.nectar-recent-posts-slider .flickity-page-dots {
	bottom: 8%;
	z-index: 100;
	max-width: 1100px;
	margin: 0 auto!important;
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	-webkit-transform: translateX(-50%);
}

.nectar-recent-posts-slider .flickity-page-dots .dot:before {
	background-color: #fff;
}


.owl-carousel {
  display: none;
  width: 100%;
  -webkit-tap-highlight-color: transparent;
  /* position relative and z-index fix webkit rendering fonts issue */
  position: relative;
  z-index: 1; }
  .owl-carousel .owl-stage {
    position: relative;
    padding: 25px 0;
    cursor: -webkit-grab; cursor: -moz-grab;
    -ms-touch-action: pan-Y; }
  .owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0; }
  .owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    /* fix for flashing background */
    -webkit-transform: translate3d(0px, 0px, 0px); }
  .owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none; }
  .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    -webkit-transform-style: preserve-3d; }
  .owl-carousel .owl-nav.disabled,
  .owl-carousel .owl-dots.disabled {
    display: none; }
  .owl-carousel .owl-nav .owl-prev,
  .owl-carousel .owl-nav .owl-next,
  .owl-carousel .owl-dot {
    cursor: pointer;
    cursor: hand;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel.owl-loaded {
    display: block; }
  .owl-carousel.owl-loading {
    opacity: 0;
    display: block; }
  .owl-carousel.owl-hidden {
    opacity: 0; }
  .owl-carousel.owl-refresh .owl-item {
    display: none; }
  .owl-carousel.owl-drag .owl-item {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel.owl-grab, .owl-stage.owl-grab {
    cursor: -webkit-grabbing; cursor: -moz-grabbing; }
  .owl-carousel.owl-rtl {
    direction: rtl; }
  .owl-carousel.owl-rtl .owl-item {
    float: right; }

/* No Js */
.no-js .owl-carousel {
  display: block; }

/*
 *  Owl Carousel - Animate Plugin
 */
.owl-carousel .animated {
  animation-duration: 1000ms;
  animation-fill-mode: both; }

.owl-carousel .owl-animated-in {
  z-index: 0; }

.owl-carousel .owl-animated-out {
  z-index: 1; }

.owl-carousel .fadeOut {
  animation-name: fadeOut; }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

/*
 * 	Owl Carousel - Auto Height Plugin
 */
.owl-height {
  transition: height 500ms ease-in-out; }

/*
 * 	Owl Carousel - Lazy Load Plugin
 */
.owl-carousel .owl-item .owl-lazy {
  opacity: 0;
  transition: opacity 400ms ease; }

.owl-carousel .owl-item img.owl-lazy {
  transform-style: preserve-3d; }

.owl-theme .owl-nav {
  margin-top: 10px;
  text-align: center;
  -webkit-tap-highlight-color: transparent; }
  .owl-theme .owl-nav [class*='owl-'] {
    color: #FFF;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: #D6D6D6;
    display: inline-block;
    cursor: pointer;
    border-radius: 3px; }
    .owl-theme .owl-nav [class*='owl-']:hover {
      background: #869791;
      color: #FFF;
      text-decoration: none; }
  .owl-theme .owl-nav .disabled {
    opacity: 0.5;
    cursor: default; }

.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 10px; }

.owl-theme .owl-dots {
  text-align: center;
  -webkit-tap-highlight-color: transparent; }
  .owl-theme .owl-dots .owl-dot {
    display: inline-block;
    zoom: 1;
    *display: inline; }
    .owl-theme .owl-dots .owl-dot span {
      width: 6px;
      height: 6px;
      margin: 5px 7px;
      background: rgba(0,0,0,0.25);
      display: block;
      -webkit-backface-visibility: visible;
      transition: opacity 200ms ease;
      border-radius: 30px; 
          transition: all 0.13s ease;
    -moz-transition: all 0.13s ease;
    -webkit-transition: all 0.13s ease;
    -o-transition: all 0.13s ease;
    transform: scale(0.9);
    -moz-transform: scale(0.9);
    -webkit-transform: scale(0.9);
  }
    .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
      background: #869791; }
     .span_12.light  .owl-theme .owl-dots .owl-dot span {
      	background: rgba(255,255,255,0.5);
      }
          .span_12.light .owl-theme .owl-dots .owl-dot.active span, .span_12.light .owl-theme .owl-dots .owl-dot:hover span {
      background: #fff; }
   .owl-theme .owl-dots .owl-dot.active span {
   	    transform: scale(1.5);
    -moz-transform: scale(1.5);
    -webkit-transform: scale(1.5);
   }
.owl-carousel[data-column-padding="5px"] .carousel-item { padding: 6px; }
.owl-carousel[data-column-padding="10px"] .carousel-item { padding: 11px; }
.owl-carousel[data-column-padding="15px"] .carousel-item { padding: 16px; }
.owl-carousel[data-column-padding="20px"] .carousel-item { padding: 21px; }
.owl-carousel[data-column-padding="30px"] .carousel-item { padding: 31px; }
.owl-carousel[data-column-padding="40px"] .carousel-item { padding: 41px; }
.owl-carousel[data-column-padding="50px"] .carousel-item { padding: 51px; }

  .owl-carousel.moving a {
  	pointer-events: none;
  }

.owl-carousel[data-enable-animation="true"] .owl-stage > .owl-item {
	opacity: 0;
	-ms-transform: translateY(70px);
	-webkit-transform: translateY(70px);
	transform: translateY(70px);
}
.owl-carousel[data-enable-animation="true"] .owl-controls {
	opacity: 0;
}

.owl-carousel[data-enable-animation="true"].animated-in .owl-controls {
	opacity: 1;
	-ms-transition: opacity 0.5s;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
}

/***************** Scrollbar ******************/

#ascrail2000 {
	background-color: #555;
	width: 16px!important;
	z-index: 10000000!important;
}
#ascrail2000.z-index-adj { z-index: 100000000!important; }


/* BBPress */

.bbp-author-avatar img {
	margin-bottom: -3px!important;
}

body #bbpress-forums fieldset.bbp-form {
	border: 1px solid #D9D9D9;
}

#bbpress-forums fieldset.bbp-form p {
	padding-bottom: 10px;
}

#bbpress-forums li.bbp-header, #bbpress-forums li.bbp-footer {
	font-weight: normal!important;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
	padding-left: 15px;
}

#bbpress-forums div.bbp-forum-header, #bbpress-forums div.bbp-topic-header, #bbpress-forums div.bbp-reply-header {
	background-color: #f4f4f4!important;
}

.bbp-topic-meta {
	margin-top: 1px!important;
}

#bbpress-forums li.bbp-header {
	background-color: #f1f1f1!important;	
}

#bbpress-forums .wp-editor-container, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-topics, #bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-search-results {
	border: 1px solid #DDD!important;	
}

.bbp-topic-permalink {
	font-size: 14px;
}

.topic .bbp-topic-title {
	margin-top: 2px!important;
}

.bbp-template-notice p {
	padding: 4px!important;	
}

#bbp_search_submit, #members_search_submit {
	padding: 10px 11px!important;
}

#bbpress-forums #subscription-toggle {
	color: #ccc;
}

body #bbpress-forums fieldset.bbp-form {
	padding-bottom: 20px;
}


/* BuddyPress */
#buddypress button, #buddypress a.button, #buddypress input[type="submit"], #buddypress input[type="button"], #buddypress input[type="reset"], #buddypress ul.button-nav li a, #buddypress div.generic-button a, #buddypress .comment-reply-link, a.bp-title-button {
	background-color: #333333;
    border: medium none!important;
    border-radius: 2px;
    color: #FFFFFF!important;
    cursor: pointer;
    font-size: 12px;
    padding: 7px 11px;
    transition: all 0.2s linear 0s;
    width: auto;
}

#buddypress form#whats-new-form textarea {
	width: 100%!important;
}

#buddypress #members_search {
	width: auto!important;
}

#buddypress #activity-stream p {
	padding-bottom: 0px;
	margin-top: 0px;
}

#buddypress form#whats-new-form #whats-new-submit {
	margin-top: 0px;	
}

#buddypress .avatar-50 {
	width: 50px!important;
	height: 50px!important;
}

#buddypress .activity-list li.mini .activity-avatar img.avatar, #buddypress .activity-list li.mini .activity-avatar img.FB_profile_pic {
	width: 20px!important;
	height: 20px!important;
}

#buddypress ul.item-list li, #buddypress ul.item-list {
	border-color: #e3e3e3;
}
#buddypress .standard-form textarea, body #buddypress div.activity-comments form textarea, #buddypress .standard-form input[type="text"], #buddypress .standard-form input[type="text"], #buddypress .standard-form input[type="color"], #buddypress .standard-form input[type="date"], #buddypress .standard-form input[type="datetime"], #buddypress .standard-form input[type="datetime-local"], #buddypress .standard-form input[type="email"], #buddypress .standard-form input[type="month"], #buddypress .standard-form input[type="number"], #buddypress .standard-form input[type="range"], #buddypress .standard-form input[type="search"], #buddypress .standard-form input[type="tel"], #buddypress .standard-form input[type="time"], #buddypress .standard-form input[type="url"], #buddypress .standard-form input[type="week"], #buddypress .standard-form select, #buddypress .standard-form input[type="password"], #buddypress .dir-search input[type="search"], #buddypress .dir-search input[type="text"] {
	padding: 10px!important;
	width: 100%;
	border: 0px;
	border-bottom: 1px solid #fff;
	font-family: 'Open Sans';
	font-weight: 400;
    font-size: 12px;
    line-height: 22px;
    color: #555;
    background-color: #ededed; 
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
    transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
}

#buddypress div.activity-comments form .ac-textarea {
	background-color: transparent;
	padding: 0px;
	border: none;
}

#buddypress a.bp-primary-action span, #buddypress #reply-title small a span {
	background-color: #555;
}

#buddypress form#whats-new-form p.activity-greeting {
	padding-bottom: 0px!important;
	line-height: 14px;
}

#buddypress .standard-form textarea:focus, #buddypress .standard-form input[type="text"]:focus, #buddypress div.activity-comments form .ac-textarea textarea:focus {
	background-color: #e8e8e8;
}

#buddypress div.activity-comments ul li {
	padding: 20px 0 0!important;
}

#buddypress .acomment-options {
	margin-bottom: 15px;
	margin-left: 60px;
}

#buddypress #groups_search {
	width: 200px;	
}

#buddypress .standard-form label, #buddypress .standard-form span.label, #buddypress div.item-list-tabs ul li.selected a, #buddypress div.item-list-tabs ul li.current a {
	font-weight: normal!important;
}

#buddypress form#whats-new-form #whats-new-options select {
	margin-top: 0px;
}

#buddypress div#subnav.item-list-tabs {
	margin: 20px 0px;
}

#buddypress #whats-new-options {
	margin-top: 10px;
}

#buddypress #whats-new-post-in, #buddypress select {
	padding: 9px!important;
}

.buddypress h1 {
	margin-bottom: 30px;
}

/*-------------------------------------------------------------------------*/
/*	5.	Page + Custom Page Layout Styles
/*-------------------------------------------------------------------------*/

#page-header-wrap {
	height: 59px;	
	margin-top: -60px;
	overflow: hidden;
	position: relative;
	background-color: #f8f8f8;
	-webkit-font-smoothing: antialiased;
}

#page-header-wrap[data-animate-in-effect="slide-down"], #page-header-wrap[data-animate-in-effect="slide-down"] #page-header-bg {
	transition: height 0.85s cubic-bezier(0.725, 0.000, 0.000, 0.995);
	-moz-transition: height 0.85s cubic-bezier(0.725, 0.000, 0.000, 0.995);
	-webkit-transition: height 0.85s cubic-bezier(0.725, 0.000, 0.000, 0.995);
	-o-transition: height 0.85s cubic-bezier(0.725, 0.000, 0.000, 0.995);
}

body[data-ajax-transitions="true"] #page-header-wrap[data-animate-in-effect="slide-down"] {
	transition: height 0.85s 0.2s cubic-bezier(0.725, 0.000, 0.000, 0.995);
	-moz-transition: height 0.85s 0.2s cubic-bezier(0.725, 0.000, 0.000, 0.995);
	-webkit-transition: height 0.85s 0.2s cubic-bezier(0.725, 0.000, 0.000, 0.995);
	-o-transition: height 0.85s 0.2s cubic-bezier(0.725, 0.000, 0.000, 0.995);
}

#page-header-wrap #page-header-bg[data-animate-in-effect="zoom-out"] .page-header-bg-image, 
#page-header-wrap #page-header-bg[data-animate-in-effect="zoom-out"] .nectar-video-wrap,
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="zoom-out"] .image-bg, 
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="zoom-out"] .video-wrap,
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="zoom-out"] .image-bg, 
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="zoom-out"] .video-wrap,
.nectar-recent-posts-slider[data-animate-in-effect="zoom-out"] .nectar-recent-posts-slider-inner:not(.loaded) .nectar-recent-post-bg {
    -webkit-transform: scale(1.11) translateZ(0);
    -ms-transform: scale(1.11) translateZ(0);
    transform: scale(1.11) translateZ(0);
    -webkit-transition: 0.95s 0s cubic-bezier(0.3, 0.58, 0.42, 0.9);
    transition: 0.95s 0s cubic-bezier(0.3, 0.58, 0.42, 0.9);
}

body[data-ajax-transitions="true"] #page-header-wrap #page-header-bg[data-animate-in-effect="zoom-out"] .nectar-video-wrap {
	-webkit-transition: transform 0.95s 0s cubic-bezier(0.3, 0.58, 0.42, 0.9);
    transition: transform 0.95s 0s cubic-bezier(0.3, 0.58, 0.42, 0.9);
}

#page-header-wrap #page-header-bg[data-animate-in-effect="zoom-out"].loaded .page-header-bg-image,
#page-header-wrap #page-header-bg[data-animate-in-effect="zoom-out"].loaded .nectar-video-wrap,
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="zoom-out"].loaded .image-bg, 
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="zoom-out"].loaded .video-wrap,
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="zoom-out"].loaded .image-bg, 
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="zoom-out"].loaded .video-wrap,
.nectar-recent-posts-slider[data-animate-in-effect="zoom-out"].loaded .nectar-recent-post-bg,
#page-header-wrap #page-header-bg[data-animate-in-effect="long-zoom-out"].loaded .page-header-bg-image,
#page-header-wrap #page-header-bg[data-animate-in-effect="long-zoom-out"].loaded .nectar-video-wrap,
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="long-zoom-out"].loaded .image-bg, 
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="long-zoom-out"].loaded .video-wrap,
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="long-zoom-out"].loaded .image-bg, 
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="long-zoom-out"].loaded .video-wrap,
.nectar-recent-posts-slider[data-animate-in-effect="long-zoom-out"].loaded .nectar-recent-post-bg {
	-webkit-transform: scale(1) translateZ(0);
    -ms-transform: scale(1) translateZ(0);
    transform: scale(1) translateZ(0);
}

body[data-aie="zoom-out"] .first-section .row-bg.using-image {
	-webkit-transform: scale(1.11) translateZ(0);
    -ms-transform: scale(1.11) translateZ(0);
    transform: scale(1.11) translateZ(0);
}
body[data-aie="zoom-out"] .first-section.loaded .row-bg.using-image {
	-webkit-transform: scale(1) translateZ(0);
    -ms-transform: scale(1) translateZ(0);
    transform: scale(1) translateZ(0);
    -webkit-transition: transform 0.95s 0s cubic-bezier(0.3, 0.58, 0.42, 0.9);
    transition: transform 0.95s 0s cubic-bezier(0.3, 0.58, 0.42, 0.9);
}

body[data-aie="zoom-out"] .first-section .row-bg-wrap,
body[data-aie="long-zoom-out"] .first-section .row-bg-wrap {
	overflow: hidden;
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
}

#page-header-wrap #page-header-bg[data-animate-in-effect="long-zoom-out"] .page-header-bg-image, 
#page-header-wrap #page-header-bg[data-animate-in-effect="long-zoom-out"] .nectar-video-wrap,
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="long-zoom-out"] .image-bg, 
.first-nectar-slider.nectar-slider-wrap[data-animate-in-effect="long-zoom-out"] .video-wrap,
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="long-zoom-out"] .image-bg, 
.parallax_slider_outer .nectar-slider-wrap[data-animate-in-effect="long-zoom-out"] .video-wrap,
.nectar-recent-posts-slider[data-animate-in-effect="long-zoom-out"] .nectar-recent-posts-slider-inner:not(.loaded) .nectar-recent-post-bg {
    -webkit-transform: scale(1.14) translateZ(0);
    -ms-transform: scale(1.14) translateZ(0);
    transform: scale(1.14) translateZ(0);
    -webkit-transition: 3.5s 0s cubic-bezier(0.4, 0.58, 0.5, 1);
    transition: 3.5s 0s cubic-bezier(0.4, 0.58, 0.5, 1);
}

body[data-aie="long-zoom-out"] .first-section .row-bg.using-image,
body[data-aie="long-zoom-out"] .first-section .nectar-video-wrap video {
	-webkit-transform: scale(1.14) translateZ(0);
    -ms-transform: scale(1.14) translateZ(0);
    transform: scale(1.14) translateZ(0);
}
body[data-aie="long-zoom-out"] .first-section.loaded .row-bg.using-image,
body[data-aie="long-zoom-out"] .first-section.loaded .nectar-video-wrap video {
	-webkit-transform: scale(1) translateZ(0);
    -ms-transform: scale(1) translateZ(0);
    transform: scale(1) translateZ(0);
    -webkit-transition: transform 3.5s 0s cubic-bezier(0.4, 0.58, 0.5, 1);
    transition: transform 3.5s 0s cubic-bezier(0.4, 0.58, 0.5,1);
}

#page-header-bg {
	width: 100%;
	height: 60px;
	overflow: hidden;
	color: #fff;
	display: block!important;
	-webkit-font-smoothing: antialiased;
	position: relative;
	z-index: 2;
}

.page-header-bg-image {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 9;
	background-repeat: no-repeat;
	background-position: top center;
	background-size: cover;
}

#page-header-bg[data-bg-pos="bottom"] .page-header-bg-image { background-position: bottom center; }
#page-header-bg[data-bg-pos="top"] .page-header-bg-image { background-position: top center; }
#page-header-bg[data-bg-pos="center"] .page-header-bg-image { background-position: center center; }

body[data-header-resize="0"] #page-header-bg {
	margin-top: 0;
}

.page-header-no-bg {
	padding-bottom: 0px;
	padding-top: 80px;	
	margin-top: -45px;
	background-color: #f8f8f8;
}

.page-header-no-bg {
	z-index: 1000;
}

#page-header-bg[data-parallax="1"] {
	opacity: 0;
	overflow: hidden;
	margin: 0px!important;
	position: fixed;
	z-index: 2;
}

body[data-footer-reveal="1"] #page-header-bg[data-parallax="1"] {
	opacity: 1;
}

#page-header-bg[data-parallax="1"] .span_6 {
	z-index: 0;
}

#page-header-bg[data-parallax="1"]:not(.out-of-sight) {
	will-change: transform;
}

body[data-apte="center_mask_reveal"][data-ajax-transitions="true"] #page-header-bg[data-parallax="1"]:not(.out-of-sight) {
	opacity: 1;
}

#page-header-bg[data-parallax="1"]:not(.out-of-sight) .span_6 {
	will-change: transform, opacity;
}

#page-header-bg[data-parallax="1"].out-of-sight {
	pointer-events: none;
}

#page-header-bg[data-parallax="1"].out-of-sight .nectar-video-wrap {
    display: none;
}

#page-header-bg[data-alignment="center"], .page-header-no-bg[data-alignment="center"], .nectar-box-roll .overlaid-content[data-text-alignment="center"] {
	text-align: center;
}

#page-header-bg[data-alignment="right"], .page-header-no-bg[data-alignment="right"], .nectar-box-roll .overlaid-content[data-text-alignment="right"] {
	text-align: right;
}

#page-header-bg[data-alignment-v="bottom"] .row, #page-header-bg[data-alignment-v="bottom"] .container,
#page-header-bg[data-alignment-v="top"] .row, #page-header-bg[data-alignment-v="top"] .container,
#page-header-bg[data-alignment-v="middle"] .row, #page-header-bg[data-alignment-v="middle"] .container,
.nectar-box-roll .overlaid-content[data-alignment-v="middle"] .row, .nectar-box-roll .overlaid-content[data-alignment-v="middle"] .container,
.nectar-box-roll .overlaid-content[data-alignment-v="top"] .row, .nectar-box-roll .overlaid-content[data-alignment-v="top"] .container,
.nectar-box-roll .overlaid-content[data-alignment-v="bottom"] .row, .nectar-box-roll .overlaid-content[data-alignment-v="bottom"] .container {
	height: 100%;
}

#page-header-bg[data-alignment-v="bottom"] .span_6,
#page-header-bg[data-parallax="1"][data-alignment-v="bottom"] .span_6, 
#page-header-bg[data-alignment-v="bottom"] .nectar-particles .inner-wrap,
.nectar-box-roll .overlaid-content[data-alignment-v="bottom"] .span_6,
.nectar-box-roll .overlaid-content[data-alignment-v="bottom"] .inner-wrap {
	bottom: 26%;
	top: auto!important;
	left: 0;
	margin-bottom: 0!important;
	position: absolute!important;
}

.nectar-box-roll .overlaid-content[data-alignment="center"] .span_6 {
	text-align: center;
}
.nectar-box-roll .overlaid-content[data-alignment="right"] .span_6 {
	text-align: right;
}

#page-header-bg[data-alignment-v="top"].fullscreen-header .nectar-particles .span_6,
#page-header-bg[data-alignment-v="middle"].fullscreen-header .nectar-particles .span_6,
.nectar-box-roll .overlaid-content[data-alignment-v="top"] .span_6,
.nectar-box-roll .overlaid-content[data-alignment-v="middle"]  .span_6 {
	top: auto!important;
	transform: none!important;
	-webkit-transform: none!important;
}

#page-header-bg[data-alignment-v="top"] .span_6,
#page-header-bg[data-alignment-v="top"] .nectar-particles .inner-wrap, 
.nectar-box-roll .overlaid-content[data-alignment-v="top"] .inner-wrap {
	top: 25%!important;
	left: 0;
	position: absolute;
}
#page-header-bg[data-alignment-v="top"].fullscreen-header .span_6 { top: 25%!important; }


#page-header-bg[data-alignment-v="bottom"] .span_6 > .inner-wrap,
.nectar-box-roll .overlaid-content[data-alignment-v="bottom"] .span_6 > .inner-wrap {
	transform: translateY(50%)!important;
	-webkit-transform: translateY(50%)!important;
}

#page-header-bg .span_6,
.nectar-box-roll .overlaid-content .span_6 {
	width: 100%;
}

.nectar-box-roll #page-header-bg {
	margin-top: 0!important;
}

body[data-bg-header="true"].archive .container-wrap, body[data-bg-header="true"].category .container-wrap, body[data-bg-header="true"].blog .container-wrap {
	padding-top: 3.1em!important;
}

#page-header-bg .row {
	visibility: hidden;
	z-index: 100;
	position: relative;
}

html:not(.js) #page-header-bg .row {
	visibility: visible;	
}

html:not(.js) #page-header-bg .span_6 {
	margin-top: 120px;
}

#page-header-bg h1,
.nectar-box-roll .overlaid-content h1 {
	font-family: 'Open Sans';
	font-weight: 600;
	font-size: 44px;
	line-height: 44px;
	margin-bottom: 8px;
	display: block;
	color: #fff;
	z-index: 101;
}

.single #page-header-bg #single-below-header span {
	color: rgba(255,255,255,0.8);
}

#page-header-bg #portfolio-nav a i, #page-header-bg span,
#page-header-bg a.pinterest-share i, #page-header-bg a.facebook-share i, #page-header-bg a.linkedin-share i, #page-header-bg .twitter-share i, #page-header-bg .google-plus-share i, 
#page-header-bg .icon-salient-heart, #page-header-bg .icon-salient-heart-2 { color: #fff; }

.single #page-header-bg #single-below-header > span, .single #page-header-bg #single-meta ul li , #page-header-bg .nectar-social > *{ border-color: rgba(255,255,255,0.25); }



.single #page-header-bg #single-meta ul li,
.single .blog-title #single-meta ul li,
#project-meta ul li {
	margin: 5px!important;
}

.single #single-meta ul li > a, .single #single-meta ul .n-shortcode a,
#project-meta ul li > a, #project-meta ul .n-shortcode a, #project-meta ul li.project-date {
	display: block;
	border-radius: 100px;
	padding: 8px 16px!important;
	-webkit-transition: border-color .45s cubic-bezier(0.25, 1, 0.33, 1);
	transition: border-color .45s cubic-bezier(0.25, 1, 0.33, 1);
	height: auto;
	line-height: 20px;
}
.single #single-meta ul li span, .single #single-meta ul .n-shortcode span,
#project-meta ul li span, #project-meta ul .n-shortcode span  {
	transition: color 0.2s linear;
	line-height: 20px!important;
	font-family: inherit!important;
}
.single #page-header-bg .blog-title  #single-meta ul li > a, .single #page-header-bg .blog-title  #single-meta ul .n-shortcode a {
	border: 2px solid rgba(255,255,255,0.4)!important;
}
.single #page-header-bg .blog-title  #single-meta ul li:not(.meta-share-count):hover > a, .single #page-header-bg .blog-title  #single-meta ul .n-shortcode:hover a {
	border: 2px solid rgba(255,255,255,1)!important;
}

.single .blog-title  #single-meta ul li > a, .single .blog-title  #single-meta ul .n-shortcode a, .single-product #single-meta ul li > a, 
#project-meta ul li > a, #project-meta ul .n-shortcode a,
#project-meta ul li.project-date,
.ascend #sidebar #project-meta ul li.project-date {
	border: 2px solid rgba(0,0,0,0.1)!important;
}

body.single #single-meta ul li:first-child {
	border: none!important;
}


.single .blog-title #single-meta ul li i, .single #single-meta li.meta-comment-count a, .single #single-meta ul li.meta-share-count .nectar-social a, .single-product #single-meta ul li i,
#project-meta ul li i, #project-meta li.meta-comment-count a, #project-meta ul li.meta-share-count .nectar-social a, #project-meta ul li span, #project-meta ul .n-shortcode span, #project-meta ul li.project-date  {
	color: #999!important;
}
.single #page-header-bg #single-meta ul li {
	border: none;
	margin: 0;
}

.single #single-meta ul li.meta-share-count,
#project-meta ul li.meta-share-count  {
	position: relative;
	z-index: 100;
}

.single #single-meta ul li.meta-share-count span,
.single #project-meta ul li.meta-share-count span {
	font-size: inherit;
	padding-left: 0;
	color: #888;
}

body.single-portfolio #sidebar #project-meta ul li:first-child {
	margin-left: 0!important;
}

.single #single-meta ul li.meta-share-count .nectar-social a,
#sidebar #project-meta ul li.meta-share-count .nectar-social a {
	display: inline-block!important;
	border: none;
	margin: 0!important;
	padding: 0px 9px!important;
	border: none!important;
	box-sizing: content-box;
	opacity: 0;
	left: 20px;
}

#sidebar #project-meta ul li.meta-share-count .nectar-social a, 
.single [data-tab-pos="fullwidth"] #single-meta ul li.meta-share-count .nectar-social a {
	left: -20px;
}
.single #single-meta ul li.meta-share-count .nectar-social a span,
#project-meta ul li.meta-share-count .nectar-social a span {
	display: none!important;
}

.single #single-meta ul li.meta-share-count .nectar-social {
	position: absolute;
	top: 0px;
	right: 0;
}

#project-meta ul li.meta-share-count .nectar-social {
	position: absolute;
	top: 0px;
	left: 0;
}

.single #single-meta.social-hovered ul li.meta-share-count,
#project-meta.social-hovered ul li.meta-share-count {
	cursor: pointer;
}

.single #single-meta.social-hovered ul li.meta-share-count .nectar-social,
#project-meta.social-hovered ul li.meta-share-count .nectar-social {
	top: 0;
}

.single #single-meta .n-shortcode a, .single #single-meta .meta-share-count > a, .single #single-meta .meta-comment-count a, .single #single-meta .meta-comment-count i:before,
#project-meta .n-shortcode a, #project-meta .meta-share-count > a, #project-meta .meta-comment-count a {
	-webkit-transition: border-color .45s cubic-bezier(0.25, 1, 0.33, 1), color.45s cubic-bezier(0.25, 1, 0.33, 1);
	transition: border-color .45s cubic-bezier(0.25, 1, 0.33, 1), color.45s cubic-bezier(0.25, 1, 0.33, 1);
}


.single #single-meta ul li.meta-share-count .nectar-social,
#project-meta ul li.meta-share-count .nectar-social {
	width: 188px;
	text-align: right;
    border-radius: 5px;
    padding: 10px 0;
    display: none;
}

#project-meta ul li.meta-share-count .nectar-social,
div[data-tab-pos="fullwidth"] ul li.meta-share-count .nectar-social {
	text-align: left!important;
}
.single #single-meta ul li.meta-share-count .nectar-social i,
#project-meta ul li.meta-share-count .nectar-social i {
	margin: 0!important;
	font-size: 18px!important;
}
.single #single-meta ul li.meta-share-count span.plural,
.single #single-meta ul li.meta-share-count span.singular {
	padding-left: 3px!important;
}
ul li.meta-share-count span.singular {
	opacity: 1;
}
.meta-share-count a span {
	opacity: 0;
}
.single #single-meta ul li i,
#project-meta ul li i  {
	font-size: 16px!important;
	width: 16px;
    line-height: 22px!important;
    margin-right: 7px;
    height: 20px;
}
.single #single-meta ul li i.icon-salient-heart-2 ,
#project-meta ul li i.icon-salient-heart-2  {
	line-height: 20px!important;
}
 html .single-post #single-meta {
 	top: 50%;
 	margin-top: -13px;
 	float: none;
 	z-index: 102;
 	position: absolute;
}

.single #page-header-bg #single-meta ul li i {
	color: #fff!important;
}
.single #single-meta ul li.meta-comment-count i {
	margin-right: 3px;
}
.single #page-header-bg #single-meta li span,
.single #page-header-bg #single-meta li.meta-comment-count a  {
	color: #fff!important;
}
.single #page-header-bg #single-meta ul li.meta-share-count .nectar-social a i  {
	color: rgba(255,255,255,0.7)!important;
}
.single #page-header-bg #single-meta ul li.meta-share-count .nectar-social a:hover i {
	color: rgba(255,255,255,1)!important;
}

.single #page-header-bg #single-below-header a:hover {
	color: rgba(255,255,255,1)!important;
}


#page-header-bg .subheader,
.nectar-box-roll .overlaid-content .subheader {
	font-size: 28px;
	line-height: 28px;
	color: #fff!important;
	font-family: 'Open Sans';
	font-weight: 300;
}

#page-header-bg[data-text-alignment="center"], .page-header-no-bg[data-text-alignment="center"], .nectar-box-roll .overlaid-content[data-text-alignment="center"] {
	text-align: center;
}

#page-header-bg[data-text-alignment="right"], .page-header-no-bg[data-text-alignment="right"], .nectar-box-roll .overlaid-content[data-text-alignment="right"] {
	text-align: right;
}

#page-header-bg[data-text-alignment="center"] .span_6, .page-header-no-bg[data-text-alignment="center"] .span_6, .nectar-box-roll .overlaid-content[data-text-alignment="center"] .span_6  {
	left: 0px;
	width: 100%!important;
}

#page-header-bg[data-text-alignment="center"] h1, .nectar-box-roll .overlaid-content[data-text-alignment="center"] h1 {
	margin-bottom: 12px!important;	
}

#page-header-bg[data-text-alignment="center"] h1, .page-header-bg[data-text-alignment="center"] .subheader, .nectar-box-roll .overlaid-content[data-text-alignment="center"] .subheader {
	max-width: 900px;
	margin: 0 auto;
	display: block;
}

/* particle styles */

#page-header-bg .canvas-bg {
	transition: background-color 0.7s ease;
	-webkit-transition: background-color 0.7s ease;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

#page-header-bg .nectar-particles .span_6,
.nectar-box-roll .overlaid-content .span_6 { 
	backface-visibility: visible;
	transform-style: preserve-3d;
	webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    top: auto!important;
    bottom: auto!important;
    width: 100%;
	height: 100%;
}

#page-header-bg .nectar-particles {
	width: 100%;
	height: 100%;
}

#page-header-bg .nectar-particles .inner-wrap  {
	 top: 0;
	 left: 0;
 	 position: absolute;
 	 width: 100%;
}

#page-header-bg .nectar-particles .span_6 .inner-wrap,
.nectar-box-roll .overlaid-content .span_6 .inner-wrap,
#page-header-bg[data-alignment-v="top"] .span_6 .inner-wrap  {
	 top: 50%;
	 transform: translateY(-50%);
	 -moz-transform: translateY(-50%);
	 -webkit-transform: translateY(-50%);
	 left: 0;
 	 position: absolute;
 	 width: 100%;
}

#page-header-wrap .nectar-particles .fade-out {
	display: block;
	content: '';
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1000;
	opacity: 0;
	background-color: #000;
	pointer-events: none;
}

.pagination-navigation {
  text-align: center;
  font-size: 0;
  position: absolute;
	right: 20px;
	top: 50%;
	width: 33px;
	transform: translateY(-50%) translateZ(0);
	-webkit-transform: translateY(-50%) translateZ(0);
	-moz-webkit-transform: translateY(-50%) translateZ(0);
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
	opacity: 0.5;
	line-height: 1px;
	z-index: 1000;
}

@media only screen and (max-width: 690px) {
	.pagination-navigation {
		display: none!important;
	}
	.overlaid-content svg {
		display: none;
	}
}


.pagination-current {
  position: absolute!important;
  left: 1px;
  top: 0;
  z-index: 100;
}

.pagination-dot, .pagination-current {
  position: relative;
  display: inline-block;
  width: 17px;
  height: 17px;
  padding: 0;
  line-height: 17px;
  background: #fff;
  border-radius: 50%;
  margin: 12px 7px;
  border: none;
  outline: none;
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  cursor: pointer;
  transform: translateY(20px);
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  opacity: 0;
}

/*header text effects*/
#page-header-bg[data-text-effect="rotate_in"] .wraped, .overlaid-content[data-text-effect="rotate_in"] .wraped {
	display: inline-block;
}

#page-header-bg[data-text-effect="rotate_in"] .wraped span, .overlaid-content[data-text-effect="rotate_in"] .wraped span,
#page-header-bg[data-text-effect="rotate_in"] .inner-wrap > *:not(.top-heading), .overlaid-content[data-text-effect="rotate_in"] .inner-wrap > *:not(.top-heading) {
	opacity: 0;
	transform-origin: center center; 
	-webkit-transform-origin: center center; 
	transform: translateY(30px);
	-webkit-transform: translateY(30px);
	transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
}

#page-header-bg .nectar-particles .inner-wrap > *:not(.top-heading), 
.overlaid-content .inner-wrap > *:not(.top-heading) {
	opacity: 0;
	transform: translateY(35px);
	-webkit-transform: translateY(35px);
}

#page-header-bg[data-text-effect="rotate_in"] .wraped span,
#page-header-bg[data-text-effect="rotate_in"] .inner-wrap.shape-1 > *:not(.top-heading),
#page-header-bg[data-text-effect="rotate_in"] > div:not(.nectar-particles) .span_6 .inner-wrap > *:not(.top-heading),
.overlaid-content[data-text-effect="rotate_in"] .wraped span,
.overlaid-content[data-text-effect="rotate_in"] .inner-wrap.shape-1 > *:not(.top-heading),
.overlaid-content[data-text-effect="rotate_in"] .inner-wrap > *:not(.top-heading) {
	transform: rotateX(90deg) translateY(35px);
	-webkit-transform: rotateX(90deg) translateY(35px)
}	

#page-header-bg[data-text-effect="rotate_in"] .wraped,
#page-header-bg[data-text-effect="rotate_in"] .wraped span,
.overlaid-content[data-text-effect="rotate_in"] .wraped,
.overlaid-content[data-text-effect="rotate_in"] .wraped span {
	display: inline-block;
}

#page-header-bg[data-text-effect="rotate_in"] .wraped span,
.overlaid-content[data-text-effect="rotate_in"] .wraped span {
	transform-origin: initial; 
	-webkit-transform-origin: initial; 
}

.scroll-down-wrap.hidden {
     transform: translateY(55px);
 	 -webkit-transform: translateY(55px);
 	 opacity: 0;
}	
.scroll-down-wrap {
	transition: opacity 0.4s ease, transform 0.8s cubic-bezier(0.175, 0.985, 0.2, 1.275);
 	 -webkit-transition: opacity 0.4s ease, -webkit-transform 0.8s cubic-bezier(0.175, 0.985, 0.32, 1.275);
 	 -moz-transition: opacity 0.4s ease, transform 0.8s cubic-bezier(0.175, 0.985, 0.32, 1.275);
}
/* fullscreen header */
#page-header-bg.fullscreen-header, #page-header-wrap.fullscreen-header {
	width: 100%;
	position: relative;
	transition: none!important;
	-webkit-transition: none!important;
	z-index: 2;
}

#page-header-bg[data-parallax="1"].fullscreen-header {
	position: fixed;
}

html .single-post #page-header-bg.fullscreen-header, html .single-post #page-header-wrap.fullscreen-header {
	height: 1250px;
}

#page-header-wrap.fullscreen-header {
	background-color:#2b2b2b;
}

#page-header-bg.fullscreen-header .span_6 {
	opacity: 1;
}
#page-header-bg.fullscreen-header[data-alignment-v="middle"] .span_6 {
	top: 50%!important;
}
#page-header-bg.fullscreen-header[data-alignment-v="middle"] .span_6 .inner-wrap {
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
}

.single #page-header-bg.fullscreen-header h1 {
	font-size: 5.5vw !important;
	line-height: 5.9vw !important;
}

.single-post #page-header-bg.fullscreen-header, .single-post #single-below-header.fullscreen-header {
	background-color: #f8f8f8; 
}

.single-post #single-below-header.fullscreen-header {
	position: relative;
    z-index: 10;
}

.single-post #single-below-header.fullscreen-header {
	border-bottom: 1px solid #DDDDDD;
}

.single-post #single-below-header.fullscreen-header > span {
	width: 33.33%;
	text-align: center;
	display: block;
	float: left;
	transition: color 0.2s linear;
	-webkit-transition: color 0.2s linear;
	font-size: 14px!important;
	position: relative;
	height: 95px;
	overflow: hidden;
	color: #afafaf;
	line-height: 95px;
}

.single-post #single-below-header.fullscreen-header .icon-default-style {
	font-size: 18px!important;
	position: relative;
	top: -1px;
	margin-right: 8px;
	display: inline;
}

.single-post #single-below-header.fullscreen-header > span span {
	float: none!important;
	display: inline;
	color: #afafaf;
	font-size: 14px!important;
}

.single-post #single-below-header.fullscreen-header {
	margin-top: 0!important;
}

.single-post #single-below-header.fullscreen-header .meta-share-count > a span.plural,
.single-post #single-below-header.fullscreen-header .meta-share-count > a span.singular {
	opacity: 0;
}

.single-post #single-below-header.fullscreen-header .meta-share-count > a span.singular {
	opacity: 1;
}


.single.single-post .fullscreen-header .blog-title {
	text-align: center;
}
.single.single-post .fullscreen-header .blog-title h1 {
	max-width: none!important;
}

.single-post #single-below-header.fullscreen-header .nectar-social {
	position: absolute;
	width: 100%;
	top: 0;
}

.single-post #single-below-header.fullscreen-header  .nectar-social.hide-share-count > * {
	border: none!important;
	padding: 0 7px!important;
	opacity: 0;
	top: 10px;
}

.default-blog-title.fullscreen-header {
	background-color: #333!important;
}

.single-post.ascend .container-wrap.fullscreen-blog-header, body.single-post[data-bg-header="true"].ascend .container-wrap {
	padding-top: 70px!important;
	margin-top: 0!important;
}

.single-post #page-header-bg.fullscreen-header.bottom-shadow:before {
	background: -moz-linear-gradient(center top , rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.06) 16%, rgba(0, 0, 0, 0.4) 75%, rgba(0, 0, 0, 0.6) 100%);
	background: -webkit-linear-gradient(top , rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.06) 16%, rgba(0, 0, 0, 0.4) 75%, rgba(0, 0, 0, 0.6) 100%);
	bottom: 0;
    content: " ";
    display: block;
    height: 351px;
    left: 0;
    position: absolute;
    transition: all 100ms cubic-bezier(0.42, 0, 0.58, 1) 0s;
    width: 100%;
    z-index: 10;
}

.single-post #page-header-bg.fullscreen-header.bg-overlay:after {
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.4);
	content: " ";
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transition: all 100ms cubic-bezier(0.42, 0, 0.58, 1) 0s;
    width: 100%;
    z-index: 10;
}

.single-post .container-wrap.fullscreen-blog-header {
	margin-top: 0!important;
}

.hidden-social-img {
	position: absolute;
	width: 1px;
	height: 1px;
	visibility: hidden;
	opacity: 0;
}

.default-blog-title.fullscreen-header {
	position: relative;
}

#page-header-bg[data-post-hs="default_minimal"] .inner-wrap {
	text-align: center;
}

#page-header-bg[data-post-hs="default_minimal"] .inner-wrap > a {
	color: #fff;
	border: 2px solid rgba(255,255,255,0.4);
	padding: 4px 10px;
	margin: 5px 6px 15px 5px;
	display: inline-block;
	transition: all 0.2s ease;
	-webkit-transition: all 0.2s ease;
	font-size: 12px;
    text-transform: uppercase;
    line-height: 18px;
}

body[data-button-style="rounded"] #page-header-bg[data-post-hs="default_minimal"] .inner-wrap > a { border-radius: 100px; }

#page-header-bg[data-post-hs="default_minimal"] #single-below-header {
	text-align: center;
	position: relative;
	z-index: 100;
}

#page-header-bg[data-post-hs="default_minimal"] #single-below-header span {
	float: none;
	display: inline-block;
}

#page-header-bg[data-post-hs="default_minimal"] .inner-wrap > a:hover {
	border-color: transparent;
}

#page-header-bg.fullscreen-header .avatar,
#page-header-bg[data-post-hs="default_minimal"] .avatar {
	border-radius: 100%; 
}

#page-header-bg.fullscreen-header .meta-author span,
#page-header-bg[data-post-hs="default_minimal"] .meta-author span {
	display: block;
}

#page-header-bg.fullscreen-header .meta-author img {
	margin-bottom: 0px;
	height: 50px;
	width: auto;
}
#page-header-bg[data-post-hs="default_minimal"] .meta-author img {
	margin-bottom: 0px;
	height: 40px;
	width: auto;
}

#page-header-bg[data-post-hs="default_minimal"]  .author-section {
	position: absolute;
	bottom: 30px;
}

#page-header-bg.fullscreen-header  .meta-author,
#page-header-bg[data-post-hs="default_minimal"]   .meta-author {
	font-size: 18px;
}

#page-header-bg.fullscreen-header .author-section .meta-date,
#page-header-bg[data-post-hs="default_minimal"]  .author-section .meta-date {
	font-size: 12px;
	color: rgba(255,255,255,0.8);
}

#page-header-bg.fullscreen-header .author-section .meta-date i {
	font-size: 12px!important;
}
#page-header-bg[data-post-hs="default_minimal"] .author-section .meta-date i {
	font-size: 11px!important;
	line-height: 14px;
}

#page-header-bg[data-post-hs="default_minimal"] .author-section .avatar-post-info {
	position: relative;
	top: -5px!important;
}

#page-header-bg.fullscreen-header .author-section a,
#page-header-bg[data-post-hs="default_minimal"] .author-section a {
	color: #fff!important;
	display: block;
	margin-bottom: -2px;
}

#page-header-bg[data-post-hs="default_minimal"] .author-section a {
	font-size: 14px;
	line-height: 14px;
}	

#page-header-bg.fullscreen-header .author-section a:hover,
#page-header-bg[data-post-hs="default_minimal"] .author-section a:hover {
	color: rgba(255,255,255,0.85)!important;
}

#page-header-bg.fullscreen-header .author-section,
#page-header-bg[data-post-hs="default_minimal"] .author-section {
	width: 100%;
	z-index: 10;
	text-align: center;
}

#page-header-bg.fullscreen-header .author-section span,
#page-header-bg[data-post-hs="default_minimal"] .author-section span {
	padding-left: 0;
	line-height: 20px!important;
	font-size: 20px;
}

#page-header-bg.fullscreen-header .author-section .avatar-post-info,
#page-header-bg[data-post-hs="default_minimal"] .author-section .avatar-post-info {
	margin-left: 10px;
}

#page-header-bg.fullscreen-header .author-section .avatar-post-info, #page-header-bg.fullscreen-header .author-section .meta-author,
#page-header-bg[data-post-hs="default_minimal"]  .author-section .avatar-post-info, #page-header-bg[data-post-hs="default_minimal"] .author-section .meta-author  {
	text-align: left;
	display: inline-block;
	top: 9px;
}

.nectar-social .social-text {
	display: none;
}

.sharing-default-minimal .nectar-social .social-text {
	display: inline;
	opacity: 1;
}


.sharing-default-minimal .nectar-social .facebook-share { border-color: #6a75c8!important; color: #6a75c8; transition: all 0.2s ease;}
.sharing-default-minimal .nectar-social .twitter-share { border-color: #6abaf7!important; color: #6abaf7; transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .google-plus-share { border-color: #f05660!important; color: #f05660; transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .linkedin-share { border-color: #2e82d9!important; color: #2e82d9; transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .pinterest-share { border-color: #ff0000!important;  color: #ff0000; transition: all 0.2s ease; }

.sharing-default-minimal .nectar-social .facebook-share i {  height: 15px!important; font-size: 15px!important; line-height: 19px!important; color: #6a75c8;  transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .twitter-share i { height: 15px!important; font-size: 16px!important; line-height: 18px!important; color: #6abaf7;  transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .google-plus-share i { height: 15px!important; font-size: 14px!important; line-height: 19px!important; color: #f05660;  transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .linkedin-share i { height: 15px!important; font-size: 14px!important; color: #2e82d9; line-height: 16px!important; transition: all 0.2s ease; }
.sharing-default-minimal .nectar-social .pinterest-share i { height: 15px!important; font-size: 16px!important; color: #ff0000; line-height: 18px!important; transition: all 0.2s ease; }

.sharing-default-minimal .nectar-social .facebook-share:hover { background-color: #6a75c8; color: #fff; }
.sharing-default-minimal .nectar-social .twitter-share:hover { background-color: #6abaf7; color: #fff; }
.sharing-default-minimal .nectar-social .google-plus-share:hover { background-color: #f05660; color: #fff; }
.sharing-default-minimal .nectar-social .linkedin-share:hover { background-color: #2e82d9; color: #fff; }
.sharing-default-minimal .nectar-social .pinterest-share:hover { background-color: #ff0000; color: #fff; }

.sharing-default-minimal .nectar-social .facebook-share:hover i {  color: #fff!important; }
.sharing-default-minimal .nectar-social .twitter-share:hover i { color: #fff!important; }
.sharing-default-minimal .nectar-social .google-plus-share:hover i { color: #fff!important; }
.sharing-default-minimal .nectar-social .linkedin-share:hover i { color: #fff!important; }
.sharing-default-minimal .nectar-social .pinterest-share:hover i { color: #fff!important; }

body .sharing-default-minimal .n-shortcode {
	border-right: none!important;
	top: -1px;
	position: relative;
}
body .sharing-default-minimal .nectar-love {
	border: 2px solid rgba(0,0,0,0.2);
	padding: 7px 9px 7px 30px!important;
	color: #000!important;
	margin-top: 50px;
	height: auto!important;
	font-size: 12px;
	margin-right: 10px;
	line-height: 20px;
	position: relative;
	transition: all 0.2s ease;
}

body .sharing-default-minimal .nectar-love.loved {
	border-color: transparent;
}

body .sharing-default-minimal .nectar-love i {
 	font-size: 14px!important;
 	margin-right: 8px!important;
 	line-height: 20px!important;
 	transition: all 0.2s ease;
}

.sharing-default-minimal .nectar-love i, body .sharing-default-minimal .hovered .nectar-love i {
	color: rgba(0,0,0,0.2)!important;
	transform: scale(1)!important;
	opacity: 1!important;
	position: relative!important;
}

.sharing-default-minimal .total_loves {
	background-color: rgba(0,0,0,0.2);
    border-radius: 100px;
    padding: 2px 8px!important;
    margin-left: 28px;
    float: right;
    line-height: 12px;
    transition: all 0.2s ease;
}

.sharing-default-minimal .nectar-love .total_loves .nectar-love-count {
	font-size: 10px!important;
	opacity: 1;
}

.sharing-default-minimal .nectar-love:hover {
	background-color: #000!important;
}

.sharing-default-minimal .nectar-love:hover .total_loves, .sharing-default-minimal .nectar-love.loved .total_loves {
	background-color: rgba(255,255,255,0.25);
}

.sharing-default-minimal .nectar-love .icon-salient-heart-2:before {
	content: "\e00e"!important;
}

.sharing-default-minimal .nectar-love:hover i, .sharing-default-minimal .nectar-love:hover, .sharing-default-minimal .nectar-love.loved i, .sharing-default-minimal .nectar-love.loved,
body .sharing-default-minimal .hovered .nectar-love.loved i {
	color: #fff!important;
}

.sharing-default-minimal .total_loves {
	display: block;
}

.sharing-default-minimal .total_loves {
	color: #fff;
}

.ascend .container-wrap .bottom-meta #author-bio #author-info {
	float: left;
	text-align: left;
	padding-top: 10px;
	padding-left: 20px!important;
}


.single-post .bottom-meta a {
	color: inherit;
}


.single-post .container-wrap .bottom-meta #author-bio #author-info {
	width: auto!important;
	float: none;
	display: inline-block!important;
}	

#page-header-bg[data-post-hs="default_minimal"] h1, 
body.single-post .heading-title[data-header-style="default_minimal"] .entry-title {
	text-align: center;
	margin: 0 auto;
}



.sharing-default-minimal {
	text-align: left;
}

.single-post  .bottom-meta .sharing-default-minimal .nectar-love {
	margin-top: 0!important;
	font-size: 14px!important;
	line-height: 1px;
}

.single-post .bottom-meta .sharing-default-minimal {
	padding-top: 0px;
}

.single-post .bottom-meta > div:last-child {
	margin-bottom: 60px;
}


.sharing-default-minimal .nectar-social > a .count {
	display: none!important;
}

.sharing-default-minimal .nectar-social > a {
	border: 2px solid #000!important;
	padding: 9px 30px!important;
	margin-right: 10px;
}

body[data-button-style="rounded"] .sharing-default-minimal .nectar-social > a, body[data-button-style="rounded"] .sharing-default-minimal .nectar-love {
	border-radius: 100px;
	line-height: 1px;
	margin: 10px 13px 10px 0;
	height: auto;
	display: inline-block;
}
.sharing-default-minimal .nectar-social > a, .sharing-default-minimal .nectar-love {
	line-height: 1px;
	margin: 10px 13px 10px 0;
	height: auto;
	display: inline-block;
}

.section-down-arrow, body[data-button-style="rounded"] .scroll-down-wrap {
	position: absolute;
	bottom: 15px;
	left: 50%;
	width: 60px;
	margin-left: -30px;
	z-index: 101;
}

body[data-button-style="rounded"] .scroll-down-wrap { margin-left:-22px;} 
body[data-button-style="default"] .section-down-arrow i.icon-default-style[class^="icon-"] {
	height: 60px!important;
	width: 60px;
	font-size: 20px!important;
	color: #fff!important;
	line-height: 60px!important;
	z-index: 10;
	animation: 3.4s ease-in-out infinite fadebottom;
	-webkit-animation: 3.4s ease-in-out infinite fadebottom;
}

body[data-button-style="rounded"] .section-down-arrow {
	 display: inline-block;
	 width: 45px;
	 height: 45px;
 	 color: #fff!important;
 	 border: 2px solid #fff;
 	 text-align: center;
 	 line-height: 45px;
 	 border-radius: 100px;
 	 font-size: 25px;
 	 -webkit-border-radius:100px;
 	 transition: opacity 0.4s ease;
 	 -webkit-transition: opacity 0.4s ease;
 	 -moz-transition: opacity 0.4s ease;
 	 overflow: hidden;
 	 margin-left: 0px;
 	 left: 0;
 	 bottom: 50px;
 	 opacity: 0.6;
}



body[data-button-style="rounded"] .section-down-arrow.hidden {
     transform: translateY(55px);
 	 -webkit-transform: translateY(55px);
 	 opacity: 0;
}	

body[data-button-style="rounded"] .section-down-arrow i {
	transition: transform 0.2s ease;
 	 -webkit-transition: transform 0.2s ease;
 	 -moz-transition: transform 0.2s ease;
 	 display: block;
 	 color: #fff!important;
 	 width: 42px;
	 height: 43px;
	 line-height: 43px;
}

body[data-button-style="rounded"] .nectar-box-roll .section-down-arrow i {
	transition: none;
	-webkit-transition: none;
}

body[data-button-style="rounded"] .section-down-arrow:hover, body[data-button-style="rounded"] .section-down-arrow.hovered {
	opacity: 1;
}


body[data-button-style="rounded"] .section-down-arrow i.fa-angle-down.top,
body[data-button-style="rounded"] .section-down-arrow i.fa-angle-down {
	-webkit-transform:translate(0, -43px);
	-ms-transform:translate(0, -43px);
	transform:translate(0, -43px);
}


body[data-button-style="rounded"] .section-down-arrow:hover i.fa-angle-down.top,
body[data-button-style="rounded"] .section-down-arrow:hover i.fa-angle-down,
body[data-button-style="rounded"] .section-down-arrow.hovered i.fa-angle-down.top,
body[data-button-style="rounded"] .section-down-arrow.hovered i.fa-angle-down {
	-webkit-transform:translate(0, 0px)!important;
	-ms-transform:translate(0, 0px)!important;
	transform:translate(0, 0px)!important;
}

@media only screen and (max-height: 750px){
	body[data-button-style="rounded"] .section-down-arrow {
 		bottom: 33px;
	}
}

@media only screen and (max-height: 650px) {
	body[data-button-style="rounded"] .section-down-arrow {
		width: 30px;
 		height: 30px;
 		line-height: 34px;
 		bottom: 25px;
 		margin-left: -15px;
	}
	body[data-button-style="rounded"] .scroll-down-wrap {
		margin-left: 0;
	}
	body[data-button-style="rounded"] .section-down-arrow i {
		width: 26px;
		height: 26px;
		line-height: 28px;
	}
	body[data-button-style="rounded"] .section-down-arrow i.fa-angle-down.top, body[data-button-style="rounded"] .section-down-arrow i.fa-angle-down {
	  -webkit-transform: translate(0, -26px);
	  -ms-transform: translate(0, -26px);
	  transform: translate(0, -26px);
	  font-size: 18px;
	}
}

@media only screen and (max-height: 450px) { 
	body[data-button-style="rounded"] .section-down-arrow {
		display: none;
	}
}

.scroll-down-wrap.no-border .section-down-arrow,
.slider-down-arrow.no-border {
	border: none!important;
	overflow: visible;
	text-align: center;
	opacity: 1;
	height: auto;
	bottom: 50px;
	-webkit-animation: nudgeMouse 2.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite;
	animation: nudgeMouse 2.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) infinite;
}
.nectar-scroll-icon-path {
	fill:transparent;
	stroke-width:2px;
	stroke-dashoffset:120;
	stroke-dasharray:120;
	-webkit-animation:carousel-scroll-btn-roll-out .55s cubic-bezier(.5,.1,.07,1);
	animation:carousel-scroll-btn-roll-out .55s cubic-bezier(.5,.1,.07,1);
}
.nectar-scroll-icon {
    width: 30px;
    height: 45px;
    text-align: center;
    cursor: pointer;
	position: relative;
	z-index: 100;
}
.scroll-down-wrap.no-border .section-down-arrow:after,
.slider-down-arrow.no-border:after {
    content: " ";
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 30px;
    height: 45px;
    margin-left: -15px;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    z-index: 62;
}
.scroll-down-wrap.no-border:hover .section-down-arrow:before,
.slider-down-arrow.no-border:hover:before {
	 background-color: rgba(255,255,255,1);
}
.scroll-down-wrap.no-border:hover .nectar-scroll-icon-path,
.slider-down-arrow.no-border:hover .nectar-scroll-icon-path {
    stroke-dashoffset: 0;
    -webkit-animation: carousel-scroll-btn-roll-over .55s cubic-bezier(.5,.1,.07,1);
    animation: carousel-scroll-btn-roll-over .55s cubic-bezier(.5,.1,.07,1);
}
@-webkit-keyframes carousel-scroll-btn-roll-over{
	0%{stroke-dashoffset:120}
	100%{stroke-dashoffset:0}
}
@keyframes carousel-scroll-btn-roll-over{
	0%{stroke-dashoffset:120}
	100%{stroke-dashoffset:0}
}
@-webkit-keyframes carousel-scroll-btn-roll-out{
	0%{stroke-dashoffset:0}
	100%{stroke-dashoffset:-120}
}
@keyframes carousel-scroll-btn-roll-out{
	0%{stroke-dashoffset:0}
	100%{stroke-dashoffset:-120}
}
.scroll-down-wrap.no-border .section-down-arrow:before,
.slider-down-arrow.no-border:before {
	position: absolute;
	content: '';
	display: block;
	left: 50%;
	margin-left: -1px;
	top: 22px;
    background-color: rgba(255,255,255,0.5);
    width: 2px;
    height: 6px;
    border-radius: 10px;
    transition: background-color .55s cubic-bezier(.5,.1,.07,1);
    -webkit-animation: trackBallSlide 2.4s cubic-bezier(0.000, 0.000, 0.725, 1.000) infinite;
    animation: trackBallSlide 2.4s cubic-bezier(0.000, 0.000, 0.725, 1.000) infinite;
}
@-webkit-keyframes trackBallSlide {
  0% {
  	 opacity: 1;
    -webkit-transform: scaleY(1) translateY(-10px);
            transform: scaleY(1) translateY(-10px);
  
  }
 
  45% {
   opacity: 0;
    -webkit-transform: scaleY(0.5) translateY(13px);
            transform: scaleY(0.5) translateY(13px);
  }
  46% {
  	 opacity: 0;
  	 -webkit-transform: scaleY(1) translateY(-10px);
            transform: scaleY(1) translateY(-10px);
  }
  65%,100% {
  	 opacity: 1;
    -webkit-transform: scaleY(1) translateY(-10px);
            transform: scaleY(1) translateY(-10px);
  
  }
}
@keyframes trackBallSlide {
   0% {
  	 opacity: 1;
    -webkit-transform: scaleY(1) translateY(-10px);
            transform: scaleY(1) translateY(-10px);
  
  }
 
  45% {
   opacity: 0;
    -webkit-transform: scaleY(0.5) translateY(13px);
            transform: scaleY(0.5) translateY(13px);
  }
  46% {
  	 opacity: 0;
  	 -webkit-transform: scaleY(1) translateY(-10px);
            transform: scaleY(1) translateY(-10px);
  }
  65%,100% {
  	 opacity: 1;
    -webkit-transform: scaleY(1) translateY(-10px);
            transform: scaleY(1) translateY(-10px);
  
  }
}

@keyframes nudgeMouse {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }

  45% {
    -webkit-transform: translateY(8px);
            transform: translateY(8px);
  }
  65%,100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@-webkit-keyframes nudgeMouse {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }

  45% {
    -webkit-transform: translateY(8px);
            transform: translateY(8px);
  }
  65%,100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

.blog_next_prev_buttons img {
	position: absolute;
	left: 0;
	top: -50%;
	width: 100%;
	opacity: 0;
	max-width: none!important;
	will-change: transform;
}


.blog_next_prev_buttons .inner {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	text-align: center;
	opacity: 0;
}

.blog_next_prev_buttons {
	text-align: center;
	overflow: hidden;
	position: relative;
	background-color: #333;
}

.blog_next_prev_buttons span.full-link a, .blog_next_prev_buttons span.full-link,  .blog_next_prev_buttons span.bg-overlay {
	display: block;
	position: absolute;
	text-indent: -9999px;
	top: 0;
	z-index: 10;
	margin-bottom: 0!important;
	left: 0;
	width: 100%;
	height: 100%;
}

.blog_next_prev_buttons span.bg-overlay {
	background-color: #282b30;
	z-index: 2;
	opacity: 0.3;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
}

.blog_next_prev_buttons:hover span.bg-overlay {
	opacity: 0;
}

.blog_next_prev_buttons.bg-color-only  span.bg-overlay {
	opacity: 0!important;
}

.blog_next_prev_buttons.bg-color-only:hover span.bg-overlay {
	opacity: 0.08!important;
}

.blog_next_prev_buttons span {
	display: block;
	color: #fff;
	margin-bottom: 5px;
}

.blog_next_prev_buttons .col {
	height: 250px;
	border-left: 1px solid #dddddd;
}

.blog_next_prev_buttons[data-post-header-style="default_minimal"] .col {
	height: 350px;
}
@media only screen and (max-width: 1000px) {
	.blog_next_prev_buttons[data-post-header-style="default_minimal"] .col {
		height: 200px;
	}
}

.blog_next_prev_buttons .col h3 {
	transition: opacity 0.2s linear;
	-webkit-transition: opacity 0.2s linear;
	padding: 0 15%;
	color: #fff;
	margin: 0;
}


/* to top */

#to-top {
	display: block;
	position: fixed;
	text-align: center;
	line-height: 12px!important;
	right: 17px;
	bottom: -30px;
	color: #fff;
	cursor: pointer;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
    z-index: 9994;
    height: 29px;
    width: 29px;
    background-color: rgba(0,0,0,0.25);
    background-repeat: no-repeat;
    background-position: center;
    transition: background-color 0.1s linear;
    -moz-transition: background-color 0.1s linear;
    -webkit-transition: background-color 0.1s linear;
    -o-transition: background-color 0.1s linear;

}

body[data-button-style="rounded"] #to-top {
	transition: box-shadow 0.3s cubic-bezier(.55,0,.1,1), background-color 0.1s linear;
	-webkit-transition: -webkit-box-shadow 0.3s cubic-bezier(.55,0,.1,1), background-color 0.1s linear;
	-moz-transition: -moz-box-shadow 0.3s cubic-bezier(.55,0,.1,1), background-color 0.1s linear;
	background-color: rgba(0,0,0,0.25)!important;
}
 body[data-button-style="rounded"] #to-top:hover,
  body[data-button-style="rounded"] #to-top.dark:hover {
  	transition: box-shadow 0.3s cubic-bezier(.55,0,.1,1), background-color 0.05s linear 0.25s;
	-webkit-transition: -webkit-box-shadow 0.3s cubic-bezier(.55,0,.1,1), background-color 0.05s linear 0.25s;
	-moz-transition: -moz-box-shadow 0.3s cubic-bezier(.55,0,.1,1), background-color 0.05s linear 0.25s;
 	box-shadow: 1px 2px 3px rgba(0,0,0,0.16)!important;
 	background-color: transparent!important;
 }
body[data-button-style="rounded"] #to-top:after, body[data-button-style="rounded"] #to-top:before {
	display: block;
	content: ' ';
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	background-color: #000;
	transform: scale(0);
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	transition: all 0.3s cubic-bezier(.55,0,.1,1);
	-webkit-transition: all 0.3s cubic-bezier(.55,0,.1,1);
	-moz-transition: all 0.3s cubic-bezier(.55,0,.1,1);
	border-radius: 100px;
	-webkit-border-radius: 100px;
}

body[data-button-style="rounded"] #to-top:before {
	background-color: rgba(255,255,255,0.25);
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
	-webkit-transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
	-moz-transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
	opacity: 0;
	z-index: 2;
}

body[data-button-style="rounded"] #to-top:hover:after {
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
}


body[data-button-style="rounded"] #to-top {
	overflow: hidden;
}
body[data-button-style="rounded"] #to-top i.fa-angle-up.top-icon,
body[data-button-style="rounded"] #to-top i.fa-angle-up {
	-webkit-transform:translate(0, 0px);
	-ms-transform:translate(0, 0px);
	transform:translate(0, 0px);
	transition: transform 0.2s ease;
	-webkit-transition: transform 0.2s ease;
    -moz-transition: transform 0.2s ease;
}


body[data-button-style="rounded"] #to-top:hover i.fa-angle-up.top-icon,
body[data-button-style="rounded"] #to-top:hover i.fa-angle-up,
body[data-button-style="rounded"] #to-top.hovered i.fa-angle-up.top-icon,
body[data-button-style="rounded"] #to-top.hovered i.fa-angle-up {
	-webkit-transform:translate(0, -29px)!important;
	-ms-transform:translate(0, -29px)!important;
	transform:translate(0, -29px)!important;
}

body[data-button-style="rounded"] #to-top:active:before { opacity: 1; }

#to-top i {
	line-height: 29px!important;
	width: 29px!important;
	height: 29px!important;
	font-size: 14px!important;
	top: 0px!important;
	left: 0px!important;
	text-align: center!important;
	position: relative;
	z-index: 10;
	background-color: transparent!important;	
}


#to-top:hover, #to-top.dark:hover  { background-color: #27CFC3; }

#to-top.dark { background-color: rgba(0,0,0,0.87); }

body[data-smooth-scrolling="1"] #to-top { right: 33px; }

.gallery a img {
	width: 90%;
	max-width: 90%;
	height: auto;
	max-height: 90%;
	padding: 5px;
	background-color: #fff;
	border: 1px solid #e5e5e5!important;
	transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
}

.gallery a:hover img {
	border-color: #27CFC3!important;
}


/***************** Social Sharing ******************/
a.pinterest-share i, a.facebook-share i, .twitter-share i, .google-plus-share i, [class^="icon-"].icon-salient-heart, [class^="icon-"].icon-salient-heart-2, .linkedin-share i {
	background-color: transparent!important;
	border-radius:  0px!important;
	font-weight: normal!important;
	font-size: 20px!Important;
	height: 20px!important;
	width: auto!important;
	line-height: 19px!important;
	color: #ddd;
	transition: color 0.2s linear;
	-moz-transition: color 0.2s linear;
	-webkit-transition: color 0.2s linear;
	-o-transition: color 0.2s linear;
}

.icon-salient-heart, .icon-salient-heart-2 {
	font-size: 19px!important;
}

.heart-wrap {
	display: inline-block;
	line-height: 0;
	position: relative;
}
.icon-salient-heart.loved {
	position: absolute;
	top: 0;
	left: 0;
	transform: scale(0);
	-webkit-transform: scale(0);
	display: none;
}

.nectar-sharing, .n-shortcode .nectar-love, .nectar-sharing-alt  {
	padding-right: 13px;	
	padding-left: 13px;	
}
body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social .n-shortcode i {
	display: inline;
	margin-right: 0!important;
}
body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social { text-align: center; line-height: 1px;}
body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social > * { border-color: #fff!important; }
html body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social > *:before { background-color: #fff!important; border-color: #fff!important;}
body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social > *:hover i { color: #000!important; }
body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social > * i { color: #fff!important; }

body .portfolio-items .col .work-item .work-info .custom-content a {
	opacity: 1!important;
	text-indent: 0!important;
	width: auto;
	display: inline-block;
	position: relative!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social > * {
	border: 2px solid #e9e9e9!important;
	border-radius: 50%;
	margin: 10px;
	position: relative!important;
	height: 45px!important;
	line-height: 45px;
    width: 45px!important;
    padding: 0!important;
    display: inline-block!important;
    transition: all 0.18s cubic-bezier(.55,0,.1,1)!important;
    -webkit-transition: all 0.18s cubic-bezier(.55,0,.1,1)!important;
}

body[data-button-style="rounded"] .wpb_row > .span_12.light .wpb_wrapper .nectar-social * {
 border-color: #fff!important;
 color: #fff!important;
}

body[data-button-style="rounded"] .wpb_wrapper .custom-content .nectar-social > * {
	margin: 10px!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social > * i {
	transition: all 0.18s cubic-bezier(.55,0,.1,1)!important;
    -webkit-transition: all 0.18s cubic-bezier(.55,0,.1,1)!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social > *:before {
	 transition: all 0.18s cubic-bezier(.55,0,.1,1)!important;
    -webkit-transition: all 0.18s cubic-bezier(.55,0,.1,1)!important;
     display: block;
    content: ' ';
    height: 100%;
    width: 100%;
    position: absolute;
    top: -2px;
    left: -2px;
    z-index: 1;
    border: 2px solid #e9e9e9;
    background-color: #e9e9e9;
    border-radius: 50%;
    opacity: 0;
    transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social > *:hover {
	transform: scale(1.15);
	-webkit-transform: scale(1.15);
	-moz-transform: scale(1.15);
}

body[data-button-style="rounded"] .wpb_wrapper .nectar-social > *:hover:before, body[data-button-style="rounded"] .wpb_wrapper .nectar-social > *.hovered:before {
	opacity: 1;
	transform: scale(1.03);
	-webkit-transform: scale(1.03);
	-moz-transform: scale(1.03);
}


body[data-button-style="rounded"] .wpb_wrapper .nectar-social i {
	width: 45px!important;
	height: 45px!important;
	text-align: center;
	padding: 0;
	font-size: 16px!important;
	line-height: 42px!important;
	position: relative;
	z-index: 10;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social i {
	color: #bbb;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social > * .count, body[data-button-style="rounded"] .wpb_wrapper .nectar-social .nectar-love .nectar-love-count {
	display: none!important;
}

.single #single-meta li .n-shortcode, .single #single-meta li .nectar-love {
	padding-left: 0px!important;
}

.single #single-meta .nectar-love i, body #project-meta .nectar-love i, .nectar-social .nectar-love i {
	font-size: 17px!important;
	top: 0px!important;
}

.n-shortcode {
	line-height: 20px;
}

.n-shortcode .nectar-love {
	padding-right: 15px;
}

.n-shortcode .nectar-love .icon-salient-heart, .n-shortcode .nectar-love .icon-salient-heart-2 {
	margin-right: 5px;	
	top: -1px;
}

.nectar-sharing i, .nectar-sharing-alt i {
	padding-right: 4px;
}

a.facebook-share i {
	padding-right: 3px;
}

a.twitter-share i {
	margin-top: 2px;
	padding-right: 2px;
	font-size: 24px!Important;
}

a.google-plus-share i {
	padding-right: 2px!important;
}

a.twitter-share {
	padding-right: 8px;	
}

a.facebook-share {
	padding-right: 10px;	
}

a.facebook-share {
	padding-right: 10px;	
}

a.pinterest-share {
	padding-right: 7px;	
}


a.pinterest-share i {
	font-size: 24px!Important;
}

.n-shortcode {
	display: inline!important;
	font-size: 12px!important;
	height: auto!important;
}

.nectar-social .nectar-love .nectar-love-count {
	opacity: 0;
	line-height: 16px!important;
	padding-left: 0px!important;
	font-family: 'Open Sans'!important;
	font-weight: 400;
	font-size: 12px!important;
	display: none;
}

.nectar-social > *:last-child {
	padding-right: 0px!important;	
}

.nectar-social > *:first-child, .nectar-social .nectar-love  {
	padding-left: 0px!important;	
}

.nectar-social > * {
	border-right: 1px solid #ddd;
}

.nectar-social > *:last-child {
	border-right: 0px!important;
}

.nectar-social.hide-share-count span.count, .nectar-social.hide-share-count .nectar-love-count {
	width: 1px!important;
	visibility: hidden;
}

.nectar-social.hide-share-count a i {
	padding-right: 0!important;
}

 .nectar-social.hide-share-count.full-width .nectar-love .icon-salient-heart {
     top: 5px!important;
 }

 .nectar-social.hide-share-count .n-shortcode .nectar-love { padding-right: 0!important; }

 .nectar-social.hide-share-count > * {
    padding: 0 10px !important;
}



body.single-portfolio #sidebar #project-meta ul li:first-child, body.single #single-meta ul li:first-child, body.single-portfolio #sidebar div ul .facebook-share, body.single-portfolio #sidebar div ul .twitter-share , body.single-portfolio #sidebar div ul .pinterest-share,
body.single-post .blog-title #single-meta ul .facebook-share, body.single-post .blog-title #single-meta ul .twitter-share , body.single-post .blog-title #single-meta ul .pinterest-share,
body.single-product #single-meta ul .facebook-share, body.single-product #single-meta ul .twitter-share, body.single-product #single-meta ul .pinterest-share {
	margin-top: 2px;
	margin: 0px 16px 0px 0px;
	padding: 0px 0px 0px 0px!Important;
	display: block;
	border-right: 1px solid #DDDDDD;
}
body.single-portfolio #sidebar #project-meta ul li:first-child {
	border: none!important;
}
.single-portfolio .facebook-share a, .single-portfolio .twitter-share a, .single-portfolio .pinterest-share a, 
.single-post .facebook-share a, .single-post .twitter-share a, .single-post .pinterest-share a,
body.single-product .facebook-share a, body.single-product .twitter-share a, body.single-product .pinterest-share a,
a.pinterest-share, .facebook-share, .twitter-share, .google-plus-share, .linkedin-share  {
	color: inherit;
	height: 20px;
	transition: width 0.2s linear;
	background-repeat: no-repeat;
	position: relative;
}

.single-portfolio .facebook-share span, .single-portfolio .twitter-share span, .single-portfolio .pinterest-share span, .single-portfolio .google-plus-share span, .single-portfolio .linkedin-share span, 
.single-post .col.section-title .facebook-share span, .single-post .col.section-title .twitter-share span, .single-post .col.section-title .pinterest-share span, .single-post .col.section-title .google-plus-share span, 
.single-post .col.section-title .linkedin-share span, 
.pinterest-share span, .facebook-share span, .twitter-share span, .google-plus-share span, .linkedin-share span {
	display: inline-block;
	opacity: 0;
	top: auto;
	line-height: 16px!important;
	padding-left: 0px;
	font-family: 'Open Sans';
	font-weight: 400;
    font-size: 14px!important;
    height: 13px;
    line-height: 16px;
}

/*full width social*/

.nectar-social.full-width > * {
	text-align: center;
	display: block!important;
	float: left;
	transition: color 0.2s linear!important;
	-webkit-transition: color 0.2s linear!important;
	position: relative;
}

.span_12.light .nectar-social.full-width > * {
	border-color: rgba(255,255,255,0.1);
}

.span_12.dark .nectar-social.full-width > * {
	border-color: rgba(0,0,0,0.07);
}

.nectar-social.full-width a.nectar-love {position: absolute; width: 100%!important; height: 100%!important; top: 0; left: 0; padding-right: 0!Important; text-align: center!Important;}

.nectar-social.full-width i { margin-top: -20px;} 

body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width i {
	-webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    height: 100px!important;
    margin-left: 0!important;
    width: 40px!important;
    position: absolute;
    top: 50%!important;
    left: 50%;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width {
	text-align: center;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width > * {
	float: none;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width a.nectar-love {
	padding-top: 0!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width .heart-wrap {
	height: 100%;
	width: 100%;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width > * i {
	margin-left: -23px;
}

.nectar-social.full-width.items_6 > * {
	width: 16.6%!important;
	padding: 2%!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width.items_6 > * {
	padding: 5%!important;
	margin: 3%;
	width: 10.1%!important;
}
.full-width-content .nectar-social.full-width.items_6 > * {
	padding: 4%!important;
}

.nectar-social.full-width.items_6 i {
	font-size: 26px!important;
}

.nectar-social.full-width.items_6 a > span {
	position: relative;
	margin-left: 3px;
	top: -10px;
}

.full-width-content .nectar-social.full-width.items_6 > *  { padding: 5%!important; }
.full-width-content .nectar-social.full-width.items_6 i { font-size: 40px!important;}
.full-width-content .nectar-social.full-width.items_6 a span { margin-left: 5px; }

.nectar-social.full-width.items_5 > * {
	width: 20%!important;
	padding: 3%!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width.items_5 > * {
	padding: 6.5%!important;
	margin: 3%;
	width: 10%!important;
}

.full-width-content .nectar-social.full-width.items_5 > * {
	padding: 5%!important;
}

.nectar-social.full-width.items_5 i {
	font-size: 36px!important;
}

.nectar-social.full-width.items_5 a > span {
	position: relative;
	margin-left: 5px;
	top: -10px;
}

.nectar-social.full-width.items_4 > * {
	width: 25%!important;
	padding: 5%!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width.items_4 > * {
	padding: 7%!important;
	margin: 5%;
	width: 10%!important;
}

.nectar-social.full-width.items_4 i {
	font-size: 45px!important;
}

.nectar-social.full-width.items_4 a > span {
	position: relative;
	margin-left: 5px;
	top: -10px;
}

.nectar-social.full-width.items_3 > * {
	width: 33.3%!important;
	padding: 5%!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width.items_3 > * {
	padding: 7%!important;
	margin: 5%;
	width: 10%!important;
}
.nectar-social.full-width.items_3 i {
	font-size: 50px!important;
}

.nectar-social.full-width.items_3 a > span {
	position: relative;
	margin-left: 5px;
	top: -10px;
}

.nectar-social.full-width.items_2 > * {
	width: 50%!important;
	padding: 5%!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width.items_2 > * {
	padding: 7%!important;
	margin: 5%;
	width: 10%!important;
}
.nectar-social.full-width.items_2 i {
	font-size: 60px!important;
}

.nectar-social.full-width.items_2 a > span {
	position: relative;
	margin-left: 5px;
	top: -10px;
}

.nectar-social.full-width.items_1 > * {
	width: 100%!important;
	padding: 5%!important;
}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social.full-width.items_1 > * {
	padding: 7%!important;
	margin: 5%;
	width: 10%!important;
}
.nectar-social.full-width.items_1 i {
	font-size: 80px!important;
}

.nectar-social.full-width.items_1 a > span {
	position: relative;
	margin-left: 5px;
	top: -10px;
}

.nectar-social.full-width:after {
	clear: both;
    content: "";
    display: block;
    height: 0;
    visibility: hidden;
}


 .facebook-share:hover i, body .facebook-share.hovered i { color: #5c80ca!important; }
 .twitter-share:hover i, body .twitter-share.hovered i { color: #08c7ff!important; }
 .pinterest-share:hover i, body .pinterest-share.hovered i { color: #dc2329!important; }
 .google-plus-share:hover i, body .google-plus-share.hovered i { color :#de4b39!important; }
 .linkedin-share:hover i, body .linkedin-share.hovered i { color :#409ecd!important; }

body[data-button-style="rounded"] .wpb_wrapper .facebook-share:before, body[data-button-style="rounded"] .wpb_wrapper .facebook-share.hovered:before { background-color: #5c80ca!important; border-color: #5c80ca!important; }
body[data-button-style="rounded"] .wpb_wrapper .twitter-share:before, body[data-button-style="rounded"] .wpb_wrapper .twitter-share.hovered:before  { background-color: #08c7ff!important;border-color: #08c7ff!important; }
body[data-button-style="rounded"] .wpb_wrapper .pinterest-share:before, body[data-button-style="rounded"] .wpb_wrapper .pinterest-share.hovered:before  { background-color: #dc2329!important; border-color: #dc2329!important;}
body[data-button-style="rounded"] .wpb_wrapper .google-plus-share:before, body[data-button-style="rounded"] .wpb_wrapper .google-plus-share.hovered:before  { background-color :#de4b39!important;border-color: #de4b39!important;}
body[data-button-style="rounded"] .wpb_wrapper .linkedin-share:before, body[data-button-style="rounded"] .wpb_wrapper .linkedin-share.hovered:before  { background-color :#409ecd!important; border-color: #409ecd!important;}
body[data-button-style="rounded"] .wpb_wrapper .nectar-social .hovered:before { opacity: 1; }
body[data-button-style="rounded"] .wpb_wrapper .nectar-social .hovered i, body[data-button-style="rounded"] .wpb_wrapper .nectar-social > *:hover i { color: #ffffff!important; }
.single-product #single-meta {
	top: 10px!important;
}

.single-portfolio #project-meta .sharing li:last-child, body.single-post .blog-title #single-meta ul li:last-child, body.single-product #single-meta ul li:last-child {
	margin-right: 0px!important;
	padding-right: 0px!important;
	border-right: 0px!important;
}

.single-portfolio .row .col.section-title h1 {
	width: 900px;
	margin-bottom: 0!important;
}

.single-portfolio .row .col.section-title h1,
.single-portfolio .row .col.section-title .subheader {
	display: inline-block;
	top: 0;
	text-align: center;
	width: 100%;
}

.single-portfolio #full_width_portfolio #portfolio-nav {
	margin-right: 0px;
}

.single-portfolio #full_width_portfolio .span_12 {
	padding-right: 0px;
	margin-top: 0px;
}

.single-portfolio #boxed #full_width_portfolio .parallax_slider_outer.first-section, .single-portfolio #boxed #full_width_portfolio .nectar-slider-wrap[data-full-width="boxed-full-width"] {
	margin-top: 1px!important;
}

#full_width_portfolio .project-title.parallax-effect {
	background-color: #f8f8f8;
	z-index: 9;
	position: fixed;
	padding-top: 88px;
	padding-bottom: 28px;
	width: 100%;
}

body[data-header-format="left-header"] #full_width_portfolio .project-title.parallax-effect {
	padding-top: 40px;
}

#page-header-bg .project-title {
	padding-top: 0!important;
	margin: 0!important;
	background-color: transparent!important;
}

#boxed #full_width_portfolio .project-title.parallax-effect {
	position: relative!important;
	top: 0px!important;
	padding-right: 0px;
}

body[data-smooth-scrolling="1"] #full_width_portfolio .project-title.parallax-effect, body[data-smooth-scrolling="1"] #page-header-bg[data-parallax="1"] {
	padding-right: 16px;
}

.project-title .hidden-title {
	opacity: 0;
}

#full_width_portfolio .project-title.parallax-effect .section-title, #full_width_portfolio .project-title {
	padding-bottom: 0px!important;
}

#full_width_portfolio .project-title.parallax-effect .section-title, #page-header-bg .section-title, .single .row .section-title, #full_width_portfolio .project-title .container .title-wrap {
	border-bottom: none;
}

.single .heading-title { padding-bottom: 35px; border-bottom: 1px solid #DDDDDD; margin-bottom: 35px;}

#full_width_portfolio .project-title.parallax-effect .container {
	border: none!important;
}

#page-header-bg .project-title .container, #page-header-bg .heading-title {
	border: none!important;
	padding: 0!Important;
}

.project-title .section-title {
	padding: 0px 70px 0px 70px!important;
}

.single .row .section-title {
	padding: 0;
	margin: 0!important;
}


#page-header-bg .section-title {
	padding-bottom: 0;
	margin-bottom: 0;
}

#full_width_portfolio .project-title {
	padding-bottom: 30px;
}

.project-additional.clear {
	clear: both!important;
	display: block;
}

.project-additional.clear li {
	float: none!important;
}

.single-portfolio #project-meta .clear {
	padding-bottom: 0px!important;
}

.single-portfolio #project-meta .sharing li a > span.count {
	opacity: 0;
}

.single #single-meta ul li .nectar-love-wrap span {
	opacity: 1;
}


/***************** Portfolio ******************/


.portfolio-items[data-col-num="elastic"] .col img,
body .masonry.meta_overlaid .post-featured-img img,
body .masonry.meta_overlaid .content-inner .whole-link  {
	width: 100%!important;
	max-width: 100%!important;
}

/*moved to external*/

/***************** About ******************/

.team-member {
	margin-top: 7px;	
	padding-bottom: 7px;
	
}

.team-member h4 {
	font-size: 22px;
	margin-bottom: 0px!important;
}

.team-member h4 a {
	color: #444444;
}

.team-member p.description, .row .col .team-member p.description {
	padding: 15px 0px;
	margin: 15px 0px;
	border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
}

.team-member ul.social {
	margin: 0px;	
}

.team-member ul.social:after {
	content: ""; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden; 	
}

.team-member ul.social li {
	float: left;
	list-style: none;
}

.team-member ul.social li a {
	font-size: 11px;
	margin: 0px 8px;
}

.team-member ul.social li:first-child a {
	margin-left: 0px;
}

.team-member ul.social li:after {
	content: ' / ';
	font-size: 11px!important;
}

.team-member ul.social li:last-child:after {
	content: ' '!important;
}

.full-width-section .team-member img {
	margin-bottom: 15px!important;
}

 .team-member[data-style="bio_fullscreen"] {
 	cursor: pointer;
 }
.team-member[data-style="meta_overlaid"], .team-member[data-style="meta_overlaid_alt"], .team-member[data-style="bio_fullscreen"] {
	margin-top: 0;
	margin-bottom: 0;
	padding-bottom: 0;
	line-height: 0;	
	position: relative;
}

.team-member[data-style="meta_overlaid"] a, .team-member[data-style="meta_overlaid_alt"] a, .team-member[data-style="bio_fullscreen"] a {
	display: block;	
	position: absolute;
	background: transparent url('img/transparent.png') repeat 0 0;	
	top: 0;
	left: 0;
	z-index: 20;
	width: 100%;
	height: 100%;
}

.team-member[data-style="meta_overlaid"] img,  .team-member[data-style="meta_overlaid_alt"] img, .team-member[data-style="bio_fullscreen"] img {
	line-height: 0;
	max-width: none;
	max-height: none;
	width: 100%;
	margin-bottom: 0!important;
}

.team-member[data-style="meta_overlaid"] .team-member-overlay, .team-member[data-style="bio_fullscreen"] .team-member-overlay {
	background-color: #282B30;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2;
	width: 100%;
	height: 100%;
	opacity: 0.45;
    transition: opacity 0.3s ease 0s;
}

.team-member[data-style="meta_overlaid"] .team-member-image,  .team-member[data-style="meta_overlaid_alt"] .team-member-image {
	z-index: 2;
	height: 300px;
	width: 100%;
	background-position: center;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
.team-member[data-style="bio_fullscreen"] .team-member-image {
	z-index: 2;
	width: 100%;
}
.team-member[data-style="meta_overlaid_alt"] .team-member-image {
	background-color: #444;
}
.team-member .nectar_team_bio_img, .team-member .nectar_team_bio {
	display: none;
}

.full-width-content .vc_span3 .team-member[data-style="meta_overlaid"] .team-member-image,
.full-width-content .vc_col-sm-3 .team-member[data-style="meta_overlaid"] .team-member-image,
.full-width-content .vc_span3 .team-member[data-style="meta_overlaid_alt"] .team-member-image,
.full-width-content .vc_col-sm-3 .team-member[data-style="meta_overlaid_alt"] .team-member-image {
	height: 350px;
}

.full-width-content .vc_span4 .team-member[data-style="meta_overlaid"] .team-member-image,
.full-width-content .vc_col-sm-4 .team-member[data-style="meta_overlaid"] .team-member-image,
.full-width-content .vc_span4 .team-member[data-style="meta_overlaid_alt"] .team-member-image,
.full-width-content .vc_col-sm-4 .team-member[data-style="meta_overlaid_alt"] .team-member-image {
	height: 400px;
}

.wpb_row:not(.full-width-content) .vc_span3 .team-member[data-style="meta_overlaid"] .team-member-image,
.wpb_row:not(.full-width-content) .vc_col-sm-3 .team-member[data-style="meta_overlaid"] .team-member-image,
.wpb_row:not(.full-width-content) .vc_span3 .team-member[data-style="meta_overlaid_alt"] .team-member-image,
.wpb_row:not(.full-width-content) .vc_col-sm-3 .team-member[data-style="meta_overlaid_alt"] .team-member-image  {
	height: 275px;
}

.team-member[data-style="meta_overlaid"]:hover .team-member-overlay, .team-member[data-style="bio_fullscreen"] .team-member-overlay {
	opacity: 0;
}
.team-member[data-style="bio_fullscreen"] .team-member-overlay {
	transition: opacity .8s cubic-bezier(.2,1,.2,1);
	-webkit-transition: opacity .8s cubic-bezier(.2,1,.2,1);
	backface-visibility: hidden;
	transform: translateZ(0);
}
.team-member[data-style="bio_fullscreen"]:hover .team-member-overlay {
	opacity: 0.4;
}
.team-member[data-style="meta_overlaid"] .team-meta,
.team-member[data-style="meta_overlaid_alt"] .team-meta, .team-member[data-style="bio_fullscreen"] .team-meta {
	position: absolute;
	z-index: 10;
	bottom: 40px;
	width: 100%;
	text-align: center;
}

.team-member[data-style="meta_overlaid_alt"] .team-meta{
	
	text-align: left;
	left: 25px;
	bottom: 40px;
}
.team-member[data-style="bio_fullscreen"] .team-meta  {
	padding-left: 25px;
	margin-bottom: 25px;
	left: 0;
	bottom: 0;
	text-align: left;
}
 body .team-member[data-style="bio_fullscreen"] .team-meta p {
 	display: block;
 	line-height: 16px;
 	padding-top: 0!important;
 }

 body .team-member[data-style="bio_fullscreen"] .team-meta .arrow-end {
 	color: #fff;
 	right: 25px;
 	opacity: 0;
 	width: auto;
 }
 body .team-member[data-style="bio_fullscreen"] .team-meta .arrow-line {
 	background-color: #fff;
 	right: 27px;
 }

  body .team-member[data-style="bio_fullscreen"] .team-meta .arrow-end {
  	-ms-transform: translateX(-8px) translateY(-50%);
 	-webkit-transform: translateX(-8px) translateY(-50%);
 	transform: translateX(-8px) translateY(-50%);
  }

 .team-member[data-style="bio_fullscreen"]:hover .team-meta .arrow-line,
  .team-member[data-style="bio_fullscreen"]:hover .team-meta .arrow-end {
 	opacity: 1;
 	-ms-transform: translateX(0) translateY(-50%);
 	-webkit-transform: translateX(0) translateY(-50%);
 	transform: translateX(0) translateY(-50%);
 }

 .team-member[data-style="bio_fullscreen"] .team-meta h3 {
 	transform: translateY(10px);
 	-webkit-transform: translateY(10px);
 	transition: opacity .95s cubic-bezier(.2,1,.2,1), transform .95s cubic-bezier(.2,1,.2,1);
	-webkit-transition: opacity .95s cubic-bezier(.2,1,.2,1), -webkit-transform .95s cubic-bezier(.2,1,.2,1);
 	opacity: 0;
 }
 .team-member[data-style="bio_fullscreen"] .team-meta p {
 	transform: translateY(20px);
 	-webkit-transform: translateY(20px);
 	transition: opacity .95s cubic-bezier(.2,1,.2,1), transform .95s cubic-bezier(.2,1,.2,1);
	-webkit-transition: opacity .95s cubic-bezier(.2,1,.2,1), -webkit-transform .95s cubic-bezier(.2,1,.2,1);
 	opacity: 0;
 }
 .team-member[data-style="bio_fullscreen"]:hover .team-meta h3,  .team-member[data-style="bio_fullscreen"]:hover .team-meta p {
 	transform: translateY(0px);
 	-webkit-transform: translateY(0px);
 	opacity: 1;
 }
.team-member[data-style="meta_overlaid"] .team-meta h3,
.team-member[data-style="meta_overlaid_alt"] .team-meta h3,
.team-member[data-style="bio_fullscreen"] .team-meta h3 {
	color: #fff;
}

.team-member[data-style="meta_overlaid"] .team-meta p,
.team-member[data-style="meta_overlaid_alt"] .team-meta p,
.team-member[data-style="bio_fullscreen"] .team-meta p {
	color: rgba(255, 255, 255, 0.8);
	padding: 7px 0 0 0!important;
}

.wpb_row:not(.full-width-content) .vc_span3 .team-member[data-style="meta_overlaid"] .team-meta h3,
.wpb_row:not(.full-width-content) .col.span_3 .team-member[data-style="meta_overlaid"] .team-meta h3,
.wpb_row:not(.full-width-content) .vc_span3 .team-member[data-style="meta_overlaid_alt"] .team-meta h3,
.wpb_row:not(.full-width-content) .col.span_3 .team-member[data-style="meta_overlaid_alt"] .team-meta h3,
.wpb_row:not(.full-width-content) .vc_span3 .team-member[data-style="bio_fullscreen"] .team-meta h3,
.wpb_row:not(.full-width-content) .col.span_3 .team-member[data-style="bio_fullscreen"] .team-meta h3 {
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 2px;
}

.wpb_row:not(.full-width-content) .vc_span4 .team-member[data-style="meta_overlaid"] .team-meta h3,
.wpb_row:not(.full-width-content) .col.span_4 .team-member[data-style="meta_overlaid"] .team-meta h3,
.wpb_row:not(.full-width-content) .vc_span4 .team-member[data-style="meta_overlaid_alt"] .team-meta h3,
.wpb_row:not(.full-width-content) .col.span_4 .team-member[data-style="meta_overlaid_alt"] .team-meta h3,
.wpb_row:not(.full-width-content) .vc_span4 .team-member[data-style="bio_fullscreen"] .team-meta h3,
.wpb_row:not(.full-width-content) .col.span_4 .team-member[data-style="bio_fullscreen"] .team-meta h3 {
	margin-bottom: 2px;
}

.team-member[data-style="meta_overlaid_alt"] {
	overflow: hidden;
}

.team-member[data-style="meta_overlaid_alt"]:after { 
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	content: ' ';
	opacity: 0;
	display: block;
	transition: all 0.3s;
	-webkit-transition: all 0.3s;
	background: linear-gradient(to top, rgba(51,51,51, 1) 0%, rgba(51,51, 51, 0.8) 20%, rgba(51,51,51,0) 100%);
	background: -webkit-linear-gradient(to top, rgba(51,51,51, 1) 0%, rgba(51,51, 51, 0.8) 20%, rgba(51,51,51,0) 100%);
}

.team-member[data-style="meta_overlaid_alt"] .team-meta {
	transition: all 0.2s ease-out;
	-webkit-transition: all 0.2s ease-out;
	opacity: 0;
	transform: translateY(40px);
	-webkit-transform: translateY(40px);
}

.team-member[data-style="meta_overlaid_alt"]:hover:after {
	opacity: 1;
}
 
 .team-member[data-style="meta_overlaid_alt"]:hover .team-meta {
 	transform: translateY(0px);
	-webkit-transform: translateY(0px);
 	opacity: 1;
 }

.nectar_team_member_overlay {
	height: 100%;
	width: 100%;
	background-color: #f2f2f2;
	color: #555;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1000;
	-webkit-transform: translateX(100%);
	transform: translateX(100%);
	-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.2,1,.2,1);
	transition: transform 0.8s cubic-bezier(0.2,1,.2,1);
}


.nectar_team_member_overlay .inner-wrap {
	position: relative;
	width: 100%;
	height: 100%;
}

.nectar_team_member_overlay.open {
	-webkit-transform: translateX(0%);
	transform: translateX(0%);
}

.nectar_team_member_overlay .team_member_picture {
	height: 100%;
	width: 50%;
	position: absolute;
	right: 0;
	top: 0;
	background-color: rgba(0,0,0,0.1);
}
.nectar_team_member_overlay .team_member_image {
	height: 100%;
	width: 100%;
	position: absolute;
	left: 0;
	top: 0;
	background-size: cover;
	-webkit-transition: -webkit-transform 15s cubic-bezier(.15,0,.7,1), opacity 0.3s;
    transition: transform 15s cubic-bezier(.15,0,.7,1), opacity 0.3s;
    -webkit-transform: scale(1.11);
	transform: scale(1.11);
	opacity: 0;
	background-position: center top;
}
.nectar_team_member_overlay.open:not(.animating) .team_member_image  {
	 -webkit-transform: scale(1);
	transform: scale(1);
}

.team_member_picture_wrap {
	overflow: hidden;
	width: 100%;
	top: 0;
	left: 0;
	height: 100%;
	position: absolute;
}

.nectar_team_member_overlay .team_member_details {
	width: 50%;
	left: 0;
	position: absolute;
	top: 50%;
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	padding: 10%;
}

.nectar_team_member_overlay .team_member_details .title { line-height: 20px; margin-bottom: 30px; }

.nectar_team_member_overlay .team_member_details h2,
.nectar_team_member_overlay .team_member_details .title,
.nectar_team_member_overlay .team_member_details .team-desc {
	opacity: 0;
	-ms-transform: translateY(40px);
	-webkit-transform: translateY(40px);
	transform: translateY(40px);
	-ms-transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.4s;
	-webkit-transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.4s;
	transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.4s;
}
.nectar_team_member_overlay .team_member_details .title {
	-ms-transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.55s;
	-webkit-transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.55s;
	transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.55s;
}
.nectar_team_member_overlay .team_member_details .team-desc {
	-ms-transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.7s;
	-webkit-transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.7s;
	transition: all 1.1s cubic-bezier(0.2,1,.2,1) 0.7s;
}
.nectar_team_member_overlay.open .team_member_details h2,
.nectar_team_member_overlay.open .team_member_details .title,
.nectar_team_member_overlay.open .team_member_details .team-desc {
	opacity: 1;
	-ms-transform: translateY(0px);
	-webkit-transform: translateY(0px);
	transform: translateY(0px);
}

.nectar_team_member_overlay .team_member_picture .team_member_image_bg_cover {
	width: 100%;
	height: 100%;
	position: absolute;
	z-index: 1001;
	left: -2px;
	top: 0;
	-webkit-transform: scaleX(1);
	-ms-transform: scaleX(1);
	transform: scaleX(1);
	-ms-transform-origin: left;
	-webkit-transform-origin: left;
	transform-origin: left;
	background-color: #f2f2f2;
	-webkit-transition: -webkit-transform 1s cubic-bezier(0.25,1,.2,1);
	transition: transform 1s cubic-bezier(0.25,1,.2,1);
}

.nectar_team_member_overlay.open .team_member_picture .team_member_image_bg_cover {
	-webkit-transform: scaleX(0);
	-ms-transform: scaleX(0);
	transform: scaleX(0);
}

.nectar_team_member_close {
	left: 0;
	position: fixed;
	top: 0;
	pointer-events: none;
	display: block;
	height: 52px;
	width: 52px;
	text-align: center;
	line-height: 48px;
	font-size: 24px;
	z-index: 10000;
	opacity: 0;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.nectar_team_member_close .inner {
	border: 2px solid #fff;
	height: 52px;
	width: 52px;
	line-height: 48px;
	opacity: 0;
	font-size: 24px;
	border-radius: 100px;
	-webkit-transition: opacity 0.2s;
	transition: opacity 0.2s;
}

.nectar_team_member_close.visible, .nectar_team_member_close .inner.visible {
	opacity: 1;
}

.nectar_team_member_close .inner:before {
	font-family: 'icomoon'!important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    content: "\e117";
    color: #fff;
    font-size: 24px;
    display: block;
}

/***************** Fancy Box ******************/

.nectar-fancy-box {
	overflow: hidden;
	position: relative;
	padding: 13%;
}

.full-width-content > .span_12 > .vc_col-sm-12 > .wpb_wrapper > .nectar-fancy-box,
.full-width-content .vc_col-sm-12 .vc_col-sm-12 > .wpb_wrapper > .nectar-fancy-box {
	padding: 5%;
}
.full-width-content > .span_12 > .vc_col-sm-12 > .wpb_wrapper > .nectar-fancy-box .inner,
.full-width-content .vc_col-sm-12 .vc_col-sm-12 > .wpb_wrapper > .nectar-fancy-box .inner {
	padding-bottom: 8%;
}

.nectar-fancy-box:after {
	display: block;
    position: absolute;
    content: ' ';
    width: 100%;
    height: 6px;
    left: 0;
    bottom: 0;
    background: #fff;
    z-index: 5;
    transform: scaleX(0) translateZ(0);
    -webkit-transform: scaleX(0) translateZ(0);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    -webkit-transition: 0.45s cubic-bezier(0.24, 1, 0.30, 1);
    transition: 0.45s cubic-bezier(0.24, 1, 0.30, 1);
}

.nectar-fancy-box:hover:after {
	-webkit-transform: scaleX(1) translateZ(0);
    transform: scaleX(1) translateZ(0);
}

.nectar-fancy-box .inner * {
	color: #fff;
}

.nectar-fancy-box .inner {
	position: relative;
	text-align: left;
	color: #fff;
	z-index: 10;
	padding-bottom: 15%;
}

.nectar-fancy-box .box-link {
	position: absolute;
	z-index: 10;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	display: block;
}

.nectar-fancy-box .box-bg {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background-size: cover;
	z-index: 1;
	background-position: center;
	 backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    transition: all .6s cubic-bezier(0.24, 1, 0.30, 1);
    -webkit-transition: all .6s cubic-bezier(0.24, 1, 0.30, 1);
}
.nectar-fancy-box .box-bg:after {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	content: ' ';
	background-color: rgba(51,51,51,0.5);
	transition: all .6s cubic-bezier(0.24, 1, 0.30, 1);
    -webkit-transition: all .6s cubic-bezier(0.24, 1, 0.30, 1);
}
.nectar-fancy-box:hover .box-bg:after {
	background-color: rgba(51,51,51,0.2);
}
.nectar-fancy-box:hover .box-bg {
	transform: scale(1.13);
	-webkit-transform: scale(1.13);
}
.nectar-fancy-box .link-text {
	font-size: 12px!important;
    font-family: 'Open Sans';
    line-height: 14px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    position: relative;
    z-index: 5;
    color: #fff;
	text-align: left;
}

.nectar-fancy-box .link-text .arrow {
    line-height: 26px!important;
    font-size: 14px!important;
    font-family: FontAwesome!important;
    opacity: 1;
    position: relative;
    display: inline-block;
    margin-left: 16px;
    top: 2px;
    transition: all 0.35s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.35s cubic-bezier(0.12, 0.75, 0.4, 1);
    overflow: visible;
    height: 26px;
    width: 26px;
    border-radius: 100px;
    text-align: center;
    border: 2px solid rgba(255,255,255,0.4);
}
.nectar-fancy-box .link-text .arrow:before {
    content: "\f105";
    color: #fff;
     top: -2px;
    right: -1px;
    display: block;
    transition: all 0.35s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.35s cubic-bezier(0.12, 0.75, 0.4, 1);
    position: relative;
}
.nectar-fancy-box .link-text .arrow:after {
	display: block;
    content: ' ';
    position: absolute;
    width: 26px;
    height: 1px;
    background-color: #fff;
    opacity: 0;
    left: -6px;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.35s cubic-bezier(0.12, 0.75, 0.4, 1);
    pointer-events: none;
    top: 11px;
    transform: translateX(-27px);
    -webkit-transform: translateX(-27px);
}

.nectar-fancy-box:hover .link-text .arrow {
	border-color: transparent;
}

.nectar-fancy-box:hover .link-text .arrow:after {
    opacity: 1;
    transform: translateX(2px);
    -webkit-transform: translateX(2px);
}

.nectar-fancy-box:hover .link-text .arrow:before {
    transform: translateX(9px);
    -webkit-transform: translateX(9px);
}

/***************** Flip Box ******************/

.nectar-flip-box {
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
	perspective: 1000px;
	-webkit-perspective: 1000px;
}
.nectar-flip-box .flip-box-front[data-text-color="dark"], .nectar-flip-box .flip-box-back[data-text-color="dark"] {
	color: #676767;
}
.nectar-flip-box .flip-box-front[data-text-color="light"], .nectar-flip-box .flip-box-back[data-text-color="light"],
.nectar-flip-box .flip-box-front[data-text-color="light"] h1, .nectar-flip-box .flip-box-back[data-text-color="light"] h1,
.nectar-flip-box .flip-box-front[data-text-color="light"] h2, .nectar-flip-box .flip-box-back[data-text-color="light"] h2,
.nectar-flip-box .flip-box-front[data-text-color="light"] h3, .nectar-flip-box .flip-box-back[data-text-color="light"] h3, 
.nectar-flip-box .flip-box-front[data-text-color="light"] h4, .nectar-flip-box .flip-box-back[data-text-color="light"] h4, 
.nectar-flip-box .flip-box-front[data-text-color="light"] h5, .nectar-flip-box .flip-box-back[data-text-color="light"] h5, 
.nectar-flip-box .flip-box-front[data-text-color="light"] h6, .nectar-flip-box .flip-box-back[data-text-color="light"] h6 {
	color: #fff;
}
.nectar-flip-box .flip-box-front, .nectar-flip-box .flip-box-back {
	background-size: cover;
	background-position:center;
	-ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
	transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
	-webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
	-webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
.nectar-flip-box[data-shadow="light_visibility"] .flip-box-back,
.nectar-flip-box[data-shadow="light_visibility"] .flip-box-front {
	box-shadow: 0px 30px 60px rgba(0,0,0,0.2);
}
.nectar-flip-box[data-shadow="heavy_visibility"] .flip-box-back,
.nectar-flip-box[data-shadow="heavy_visibility"] .flip-box-front {
	box-shadow: 0px 30px 75px rgba(0,0,0,0.4);
}
.nectar-flip-box .flip-box-back[data-bg-overlay="true"]:after,
.nectar-flip-box .flip-box-front[data-bg-overlay="true"]:after {
	position: absolute;
	z-index: 1;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	content: ' ';
	display: block;
	opacity: 0.6;
	background-color: inherit;
	backface-visibility: hidden;
}
.nectar-flip-box:hover .flip-box-front, .nectar-flip-box:hover .flip-box-back {
	-ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
	transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
	-webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
}
 .nectar-flip-box .flip-box-back {
 	position: absolute;
 	top: 0;
 	left: 0;
 	width: 100%;
 }

 .nectar-flip-box .nectar-button {
 	-webkit-transform: translateZ(0);
 	transform: translateZ(0);
 }
  .nectar-flip-box[data-h_text_align="center"] .flip-box-back, .nectar-flip-box[data-h_text_align="center"] .flip-box-front { text-align: center; }
  .nectar-flip-box[data-h_text_align="right"] .flip-box-back, .nectar-flip-box[data-h_text_align="right"] .flip-box-front { text-align: right; }

   .nectar-flip-box[data-v_text_align="center"] .flip-box-back .inner,
  .nectar-flip-box[data-v_text_align="center"] .flip-box-front .inner {
  	  transform: translateY(-50%) translateZ(60px) scale(.94);
  	  -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
  	  -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
  	  top: 50%;
  }
  .nectar-flip-box[data-v_text_align="bottom"] .flip-box-back .inner,
  .nectar-flip-box[data-v_text_align="bottom"] .flip-box-front .inner {
  	 -ms-transform: translateZ(60px) scale(.94);
  	  transform: translateZ(60px) scale(.94);
  	  -webkit-transform: translateZ(60px) scale(.94);
  	  bottom: 0;
  }
  .nectar-flip-box[data-v_text_align="top"] .flip-box-back .inner,
  .nectar-flip-box[data-v_text_align="top"] .flip-box-front .inner {
  	  -ms-transform: translateZ(60px) scale(.94);
  	  transform: translateZ(60px) scale(.94);
  	  -webkit-transform: translateZ(60px) scale(.94);
  	  top: 0;
  }
  .nectar-flip-box[data-flip-direction="vertical-to-top"] .flip-box-back .inner,
  .nectar-flip-box[data-flip-direction="vertical-to-top"] .flip-box-front .inner,
  .nectar-flip-box[data-flip-direction="vertical-to-bottom"] .flip-box-back .inner,
  .nectar-flip-box[data-flip-direction="vertical-to-bottom"] .flip-box-front .inner {
  	  -ms-transform: translateZ(50px) scale(.95);
  	  transform: translateZ(50px) scale(.95);
  	  -webkit-transform: translateZ(50px) scale(.95);
  }
  .nectar-flip-box[data-v_text_align="center"][data-flip-direction="vertical-to-bottom"] .flip-box-back .inner,
  .nectar-flip-box[data-v_text_align="center"][data-flip-direction="vertical-to-bottom"] .flip-box-front .inner,
  .nectar-flip-box[data-v_text_align="center"][data-flip-direction="vertical-to-top"] .flip-box-back .inner,
  .nectar-flip-box[data-v_text_align="center"][data-flip-direction="vertical-to-top"] .flip-box-front .inner {
  	-ms-transform: translateY(-50%) translateZ(50px) scale(.95);
  	transform: translateY(-50%) translateZ(50px) scale(.95);
  	  -webkit-transform: translateY(-50%) translateZ(50px) scale(.95);
  }
  .nectar-flip-box .flip-box-back .inner,
  .nectar-flip-box .flip-box-front .inner {
  	  position: absolute;
  	  left: 0;
  	  width: 100%;
  	  padding: 60px;
      outline: 1px solid transparent;
      -webkit-perspective: inherit;
      perspective: inherit;
      z-index: 2;
  }

.nectar-flip-box[data-flip-direction="horizontal-to-left"] .flip-box-back, 
body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="horizontal-to-right"]:hover .flip-box-front,
.owl-carousel.moving .nectar-flip-box[data-flip-direction="horizontal-to-left"] .flip-box-back {
	-ms-transform: rotateY(180deg);
	-webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
    -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.nectar-flip-box[data-flip-direction="horizontal-to-right"].flipped .flip-box-front {
	-ms-transform: rotateY(180deg)!important;
	-webkit-transform: rotateY(180deg)!important;
    transform: rotateY(180deg)!important;
}

.nectar-flip-box[data-flip-direction="horizontal-to-left"] .flip-box-front, body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="horizontal-to-left"]:hover .flip-box-back,
.nectar-flip-box[data-flip-direction="horizontal-to-right"] .flip-box-front, body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="horizontal-to-right"]:hover .flip-box-back,
.owl-carousel.moving .nectar-flip-box[data-flip-direction="horizontal-to-left"] .flip-box-front, .owl-carousel.moving .nectar-flip-box[data-flip-direction="horizontal-to-right"] .flip-box-front  {
	-ms-transform: rotateY(0deg);
	-webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
     -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
 .nectar-flip-box[data-flip-direction="horizontal-to-left"].flipped .flip-box-back, .nectar-flip-box[data-flip-direction="horizontal-to-right"].flipped .flip-box-back {
 	-ms-transform: rotateY(0deg)!important;
	-webkit-transform: rotateY(0deg)!important;
    transform: rotateY(0deg)!important;
 }

body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="horizontal-to-left"]:hover .flip-box-front, .nectar-flip-box[data-flip-direction="horizontal-to-right"] .flip-box-back,
.owl-carousel.moving .nectar-flip-box[data-flip-direction="horizontal-to-right"] .flip-box-back {
	-ms-transform: rotateY(-180deg);
	-webkit-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
     -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.nectar-flip-box[data-flip-direction="horizontal-to-left"].flipped .flip-box-front {
	-ms-transform: rotateY(-180deg)!important;
	-webkit-transform: rotateY(-180deg)!important;
    transform: rotateY(-180deg)!important;
}


.nectar-flip-box[data-flip-direction="vertical-to-top"] .flip-box-back, body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="vertical-to-bottom"]:hover .flip-box-front {
	-ms-transform: rotateX(180deg);
	-webkit-transform: rotateX(180deg);
    transform: rotateX(180deg);
     -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.nectar-flip-box[data-flip-direction="vertical-to-bottom"].flipped .flip-box-front {
	-ms-transform: rotateX(180deg)!important;
	-webkit-transform: rotateX(180deg)!important;
    transform: rotateX(180deg)!important;
}

.nectar-flip-box[data-flip-direction="vertical-to-top"] .flip-box-front, body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="vertical-to-top"]:hover .flip-box-back, 
.nectar-flip-box[data-flip-direction="vertical-to-bottom"] .flip-box-front, body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="vertical-to-bottom"]:hover .flip-box-back {
	-ms-transform: rotateX(0deg);
	-webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
     -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.nectar-flip-box[data-flip-direction="vertical-to-top"].flipped .flip-box-back, .nectar-flip-box[data-flip-direction="vertical-to-bottom"].flipped .flip-box-back {
	-ms-transform: rotateX(0deg)!important;
	-webkit-transform: rotateX(0deg)!important;
    transform: rotateX(0deg)!important;
}

body:not(.using-mobile-browser) .nectar-flip-box[data-flip-direction="vertical-to-top"]:hover .flip-box-front, .nectar-flip-box[data-flip-direction="vertical-to-bottom"] .flip-box-back {
	-ms-transform: rotateX(-180deg);
	-webkit-transform: rotateX(-180deg);
    transform: rotateX(-180deg);
    -webkit-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.nectar-flip-box[data-flip-direction="vertical-to-top"].flipped .flip-box-front {
	-ms-transform: rotateX(-180deg)!important;
	-webkit-transform: rotateX(-180deg)!important;
    transform: rotateX(-180deg)!important;
}

.nectar-flip-box .flip-box-front i {
	margin-bottom: 20px;
	height: auto!important;
	display: block;
	width: auto!important;
}


/***************** Contact ******************/

html:not(.js) #contact-map, html:not(.js) .nectar-google-map {
	display: none;	
}

#contact-map {
	width: 100%;
	height: 370px;
	margin-top: -65px;
	margin-bottom: 30px;
}

.gm-style-iw {
	color: #777;
}

#contact-map div, .nectar-google-map div {
	box-sizing: content-box!important;
	-moz-box-sizing: content-box!important;
	-webkit-box-sizing: content-box!important;
}

.nectar-google-map {
	margin-bottom: 0!important;
}

.nectar-google-map img {
   max-width: none!important;	
}

body[data-bg-header="true"] #contact-map {
	margin-top: -30px!important;
}

.contact-info {
	padding-left: 20px;
}

body.page-template-template-contact-php .page-header-no-bg .col.section-title {
	border-bottom: 0px;
}

body.page-template-template-contact-php #page-header-bg {
	margin-bottom: 0px;
}

.wpcf7-form p span {
	color: #27CFC3;
}

div.wpcf7-validation-errors, .light .wpcf7 div.wpcf7-response-output {
	color: #666666!important;
}
div.wpcf7 img.ajax-loader {
	margin-top: 10px;
	display: inline-block;
}

span.wpcf7-not-valid-tip {
    background: none repeat scroll 0 0 #fff;
}
.minimal-form-input span.wpcf7-not-valid-tip {
	position: absolute;
    top: 100%!important;
}

.wpcf7-form-control-wrap { display: block!important; }

.wpcf7-form .wpcf7-not-valid-tip {
	top: -3px;
	padding: 2px 6px;
	border: 0px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}


.wpcf7 .wpcf7-response-output {
	background-color: #fff;
	margin-left: 0px;
	margin-top: 10px;
}

.widget_text textarea {
	max-height: 100px;
}

body .gform_wrapper .description, body .gform_wrapper .gfield_description, body .gform_wrapper .gsection_description, body .gform_wrapper .instruction {
	font-size: 12px;
}

body .gform_wrapper div.charleft {
	font-size: 10px;
}

body .gform_wrapper .top_label .gfield_label {
	font-weight: normal!important;
	margin-top: 20px;
	margin-bottom: 6px;
	font-family: 'Open Sans';
	font-weight: 700;
}

.gm-style .gm-style-iw, .gm-style .gm-style-iw a, .gm-style .gm-style-iw span, .gm-style .gm-style-iw label, .gm-style .gm-style-iw div {
	font-family: arial;
	letter-spacing: 0;
	line-height: 20px;
}

/***************** Masonry Items / Search results ******************/

#post-area.masonry {
	width: 1125px;
	margin-bottom: 80px;
	margin-top: 0;
	transition: none!important;
	overflow: visible!important;
}

.vc_col-sm-4 #post-area.masonry, .vc_col-sm-3 #post-area.masonry {
	width: 100%;
}

#post-area.masonry.meta_overlaid {
	margin-bottom: 0;
}

#post-area.masonry.meta_overlaid .posts-container {
	overflow: hidden;
}

body[data-ext-responsive="true"] #post-area.masonry {
	width: 102.2%;
}

body[data-ext-responsive="true"] #post-area.masonry.meta_overlaid {
	width: 100%;
}

#post-area.masonry.span_9 {
	width: 834px;
	margin-right: 5px;
}

body[data-ext-responsive="true"] #post-area.masonry.span_9 {
	width: 76.5%;
	margin-right: 0;
}

#post-area.masonry #pagination {
	position: absolute;
	bottom: -75px;
	padding-left: 0px;
}

.blog-fullwidth-wrap #post-area.masonry:not(.meta_overlaid) {
	margin-top: 0!important;
}
#post-area.masonry.span_12.meta_overlaid #pagination,
.blog-fullwidth-wrap #post-area.masonry.meta_overlaid #pagination {
    bottom: 0 !important;
    height: 32px;
    margin-top: 45px;
    position: relative !important;
    text-align: center !important;
    width: 100%;
    margin-bottom: 40px;
}

#post-area.masonry.span_12.meta_overlaid #pagination > div,
.blog-fullwidth-wrap #post-area.masonry.meta_overlaid #pagination > div {
    display: inline;
    float: none;
    margin: 0 5px 0 0;
}

body.blog .meta_overlaid_blog.container-wrap { padding-top: 0!important; }
body.blog .meta_overlaid_blog.container-wrap #post-area { margin-top: 0!important; }

body.blog #post-area.masonry.meta_overlaid #pagination {
	margin-bottom: 0px;
}

#post-area.masonry  article.post .post-meta.no-img {
	top: 0px!important;
}

#post-area.masonry > article:last-child .content-inner {
	 border-bottom: 1px solid #DDDDDD!important;
}

#post-area.masonry article.post .post-content {
	padding-left: 0px!important;
}

#post-area.masonry article.post .quote-inner, #post-area.masonry article.post .link-inner, #post-area.masonry article.post .status-inner, #post-area.masonry article.post .aside-inner {
	margin-bottom: 8px;
}

#search-results {
	margin-bottom: 30px;
	overflow: visible!important;
	visibility: hidden;
}

#search-results .result img {
	margin-bottom: 10px;
}

#post-area.masonry article.post .post-meta {
	display: block!important;
	margin-bottom: 0;
}

#post-area.infinite_scroll video.wp-video-shortcode, #post-area.infinite_scroll .wp-video-shortcode video {
    visibility: visible;
}

.search .row .col.section-title h1 {
	font-size: 28px!important;
	line-height: 42px!important;
	margin-bottom: 0px!important;
	text-transform: none!important;
	font-family: 'Open Sans'!important;
	font-weight: 600;
    letter-spacing: -1px!important;
}

body .masonry.meta_overlaid .masonry-blog-item .article-content-wrap {
	padding: 20px!important;
}

body .masonry.meta_overlaid .masonry-blog-item .article-content-wrap > *:not(.post-header) {
	display: none;
}

#post-area.masonry.meta_overlaid article.post .post-meta {
	margin: -4px 0 3px!important;
	padding-bottom: 0!important;
	line-height: 26px;
}

#post-area.masonry.meta_overlaid article.post.wide_tall .post-meta,
#post-area.masonry.meta_overlaid article.post.large_featured .post-meta {
	margin: 6px 0 6px!important;
}

#post-area.masonry.meta_overlaid article.post .post-meta .date,
#post-area.masonry.meta_overlaid article.post.quote .quote-inner .author,
#post-area.masonry.meta_overlaid  article.post.link .post-content .destination {
	float: none!important;
	font-size: 12px!important;
}

#post-area.masonry.meta_overlaid article .post-header {
	font-size: 12px;
}

.meta_overlaid .masonry-blog-item h2.title {
	font-size: 18px!important;
	margin-bottom: 6px;
}

body .masonry.meta_overlaid .masonry-blog-item .article-content-wrap .meta-category, 
body .masonry.meta_overlaid .masonry-blog-item .article-content-wrap .meta-comment-count {
	display: none;
}

body .masonry.meta_overlaid .masonry-blog-item {
	margin-bottom: 0!important;
}

body .masonry.meta_overlaid .masonry-blog-item .post-featured-img:before {
    background: -moz-linear-gradient(center top , rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.06) 16%, rgba(0, 0, 0, 0.4) 75%, rgba(0, 0, 0, 0.6) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    background: -webkit-linear-gradient(top , rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, 0.06) 16%, rgba(0, 0, 0, 0.4) 75%, rgba(0, 0, 0, 0.6) 100%);
    bottom: 0;
    content: " ";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1) 0s;
    width: 100%;
    opacity: 1;
    z-index: 1;
}


body .masonry.meta_overlaid .masonry-blog-item:hover .post-featured-img:before {
    opacity: 1;
}

body .masonry.meta_overlaid .masonry-blog-item .post-featured-img img {
	transition: opacity 300ms cubic-bezier(0.42, 0, 0.58, 1) 0s;
	opacity: 0.85;
}

body .masonry.meta_overlaid .masonry-blog-item:hover .post-featured-img:hover img {
	opacity: 1;
}
body .masonry.meta_overlaid .content-inner > a {
	height: 100%;
}
body .masonry.meta_overlaid .content-inner > a > span.post-featured-img {
	background-color: #000;
}


.masonry.meta_overlaid .masonry-blog-item span.bottom-line, .masonry.meta_overlaid .masonry-blog-item .more-link {
	display: none;
}

.masonry.meta_overlaid .masonry-blog-item, .masonry.meta_overlaid .masonry-blog-item .mejs-container .mejs-controls {
	box-shadow: none!important;
}

.masonry.meta_overlaid .masonry-blog-item .post-meta {
	padding: 0 18px 18px 18px!important;
}

.masonry.meta_overlaid .post .nectar-love-wrap {
	line-height: 20px;
}

.masonry.meta_overlaid .masonry-blog-item {
	padding: 0;
}

.masonry.meta_overlaid .masonry-blog-item .content-inner .post-featured-img img, .masonry.meta_overlaid .masonry-blog-item .more-link,
.masonry.meta_overlaid article.post .quote-inner, .masonry.meta_overlaid article.post .link-inner, .masonry.meta_overlaid article.post .status-inner, 
.masonry.meta_overlaid article.post .aside-inner {
	margin-bottom: 0!important;
}

.masonry.meta_overlaid .masonry-blog-item .content-inner {
	padding-bottom: 0!important;
	border: 0!important;
	margin-bottom: 0!important;
}

.masonry.meta_overlaid .masonry-blog-item .article-content-wrap {
	padding: 16px 18px 18px 18px!important;
}

.masonry.meta_overlaid article.post.quote .post-content .post-meta, .masonry.meta_overlaid article.post.link .post-content .post-meta, 
.masonry.meta_overlaid article.format-status .post-content .post-meta, .masonry.meta_overlaid article.post.format-aside  .post-meta {
   display: none!important;
}



.masonry.meta_overlaid  article.post .post-header h2 a, .masonry.meta_overlaid  article.post .post-header  {
	color: #fff!important;
}

.masonry.meta_overlaid  article.post .post-header h2 a {
	display: block;
}

body .masonry.meta_overlaid .content-inner > a, body .masonry.meta_overlaid .content-inner > a > span {
	display: block;
	line-height: 1px;
}

body .masonry.meta_overlaid article.post .post-header .meta-author span {
	font-size: 13px!important;
}

body .masonry.meta_overlaid article.post .post-header .meta-author a {
	margin-left: 4px;
	color: #fff!important;
	transition: opacity 0.2s linear;
	-webkit-transition: opacity 0.2s linear;
	-moz-transition: opacity 0.2s linear;
}

body .masonry.meta_overlaid article.post .post-header .meta-author a:hover {
	opacity: 0.85;
}

body .masonry.meta_overlaid .masonry-blog-item .article-content-wrap {
	position: absolute;
	bottom: 10px;
	width: 100%;
	z-index: 10;
	text-align: center;
}

body #post-area.masonry.meta_overlaid article.masonry-blog-item.wide_tall .post-meta .date,
body #post-area.masonry.meta_overlaid article.masonry-blog-item.large_featured .post-meta .date {
	font-size: 16px!important;
}

body .masonry.meta_overlaid .masonry-blog-item.wide_tall h2.title,
body .masonry.meta_overlaid .masonry-blog-item.large_featured h2.title {
	font-size: 30px!important;
	margin-bottom: 12px;
}

body .masonry.meta_overlaid article.post .content-inner,
body .masonry.meta_overlaid article.post .post-content,
body .masonry.meta_overlaid article.post.quote .post-content .quote-inner,
body .masonry.meta_overlaid article.post .post-content .link-inner,
body .masonry.meta_overlaid article.post.format-link .content-inner a {
	height: 100%!important;
	width: 100%!important;
}

body .masonry.meta_overlaid .link-inner .link-wrap,
body .masonry.meta_overlaid .quote-inner .quote-wrap  {
	position: relative;
	top: 50%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    display: block;
    z-index: 100000!important;
    padding: 0 12%;
}

body .masonry.meta_overlaid .post-content{
	min-height: 40px;
}

body #post-area.masonry.meta_overlaid.span_9 {
	padding-right: 40px;
}

#post-area.masonry.meta_overlaid article.post .quote-inner, #post-area.masonry.meta_overlaid article.post .link-inner, #post-area.masonry.meta_overlaid article.post .status-inner, #post-area.masonry.meta_overlaid article.post .aside-inner {
	text-align: center;
	overflow: hidden;
}

.masonry-blog-item .post-meta {
	position: relative!important;
}

.masonry-blog-item .post-meta .date {
	border-bottom: 0px!important;
	line-height: 22px;
	padding-bottom: 0px!important;
	float: left;
	margin-bottom: 0px!important;
}

.light .masonry-blog-item p {
	color: #676767;
}

.masonry-blog-item .post-meta .nectar-love-wrap {
	float: right;
}

.masonry-blog-item .content-inner {
	padding-bottom: 15px!important;
	margin-bottom: 15px!important;
}

.masonry-blog-item  h2.title {
	font-size: 20px!important;
    line-height: 26px!important;	
}

.masonry-blog-item .post-meta .date span {
	float: left;
	display: inline!important;
	text-transform: capitalize!important;
	font-family: 'Open Sans'!important;
	font-weight: 400;
	font-size: 12px!important;
	line-height: 12px!important;
	color: #676767!important;
}

.masonry-blog-item .more-link {
	margin-bottom: 10px;	
}

.masonry-blog-item .post-meta .nectar-love-wrap {
	width: auto!important;
}

.masonry-blog-item .post-meta:after {
	content: " ";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}

#search-results .result, .masonry-blog-item {
	width: 31%;
	display: inline-block;
	margin-bottom: 2.5%;
	position: relative;
	color: #676767;
}

.masonry-blog-item .inner-wrap, #search-results .result .inner-wrap {
	-o-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	background-color: #fff;
	padding: 18px;
}

.masonry-blog-item {
	margin-bottom: 0;
}

.masonry-blog-item .jp-jplayer-video {
	height: 179px!important;
}

#post-area.span_9 .masonry-blog-item .jp-jplayer-video {
	height: 200px!important;
}

.masonry-blog-item {
	width: 31.1%;
}
#post-area.full-width-article {
	margin-bottom: 0!important;
}
#post-area.full-width-article .masonry-blog-item {
	width: 100%!important;
}


#post-area.masonry.span_9 .masonry-blog-item {
	width: 46.8%;
}

#search-results .result {
	font-size: 11px;
}

#search-results .result span.bottom-line, .masonry-blog-item span.bottom-line {
	height: 1px;
	width: 100%;
	display: block;
	position: absolute;
	bottom: 2px;
	left: 0px;
	background-color: #eaeaea;
}

#search-results .result .title span {
	display: block;
	font-size: 12px;
	letter-spacing: 0px;
	font-family: 'Open Sans';
	font-weight: 400;
	color: #999;
	margin-top: 3px;
}

#search-results .result h2 {
	margin-bottom: 1px;
	font-size: 17px;
	line-height: 22px;
}

#search-results .result p {
	padding-bottom: 0px;	
}

article.result .title a {
	color: #27CFC3;
}

article.result .title a:hover {
	color: inherit!important;
}

.masonry.classic_enhanced  article.post .post-header h2 a {
	color: inherit!important;
}
.masonry.classic_enhanced  article.post .post-meta a, 
.masonry.classic_enhanced  article.post .post-meta i:not(.icon-salient-heart) {
	transition: color 0.1s linear;
	-webkit-transition: color 0.1s linear;
}
.masonry.classic_enhanced  article.post .post-meta a, .masonry.classic_enhanced .post-header, .masonry.classic_enhanced  article.post .excerpt  {
	color: #888;
}
.masonry.classic_enhanced  article.post .post-meta a, .masonry.classic_enhanced .post-header {
	font-size: 12px!important;
}
.masonry.classic_enhanced  article.post .post-meta i, .masonry.classic_enhanced  article.post .post-header .icon-salient-m-clock {
	color: #b9b9b9!important;
}
.masonry.classic_enhanced  article.post.wide_tall .post-meta i {
	color: rgba(255,255,255,0.5)!important;
}

.masonry.classic_enhanced  article.post .post-meta a {
	display: inline-block;
}

.portfolio-items .col .inner-wrap[data-animation="fade_in"], .portfolio-items:not(.carousel) .col .inner-wrap.animated, 
.posts-container article .inner-wrap.animated, .posts-container[data-load-animation="fade_in"] article .inner-wrap.animated {
	opacity: 0;
	transition: opacity 0.5s ease-out;
	-webkit-transition: opacity 0.5s ease-out;
}
.portfolio-items:not(.carousel) .col .inner-wrap[data-animation="fade_in_from_bottom"], .posts-container[data-load-animation="fade_in_from_bottom"] article .inner-wrap {
	transition: opacity 0.5s ease, transform 0.5s ease!important;
	-webkit-transition: opacity 0.5s ease, -webkit-transform 0.5s ease!important;
	transform: translateY(200px);
	-webkit-transform: translateY(200px);
	-moz-transform: translateY(200px);
}

.posts-container article.ajax-loaded {
	transition: none!important;
	-webkit-transition: none!important;
}
 .posts-container article .inner-wrap {
	height: 100%;
 }

.posts-container article.animated-in .inner-wrap,
 .posts-container[data-load-animation="fade_in"] article.animated-in .inner-wrap.animated  {
	opacity: 1;
	transform: translateY(0);
	-webkit-transform: translateY(0);
	-moz-transform: translateY(0);
	height: 100%;
}

.masonry.classic_enhanced  article.post .post-meta .meta-comment-count i {
	width: 14px!important;
}
.masonry.classic_enhanced  article.post .post-meta i {
	width: 15px!important;
	margin-right: 3px;
    font-size: 14px!important;
    top: 0px!important;
}
.masonry.classic_enhanced  article.post .post-header .icon-salient-m-clock {
	width: 14px!important;
	margin-right: 5px;
    font-size: 14px!important;
    top: 0px!important;
}
.masonry.classic_enhanced .posts-container article:not(.has-post-thumbnail) .meta-category a,
.masonry.classic_enhanced .posts-container article.large_featured .meta-category a  {
	color: #000;
	border: 2px solid rgba(0,0,0,0.2);
}
body[data-button-style="rounded"] .masonry.classic_enhanced .posts-container article .meta-category a {
	border-radius: 100px;
}
.masonry.classic_enhanced .posts-container article .meta-category a,
.masonry.classic_enhanced .posts-container article.wide_tall .meta-category a {
    padding: 0px 10px;
    display: inline-block;
    line-height: 20px;
    font-size: 12px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #fff;
    border: 2px solid rgba(255,255,255,0.5);
    transition: all 0.2s ease;
}

.masonry.classic_enhanced .posts-container article .meta-category a:hover {
	border: 2px solid transparent;
	color: #fff;
}

.masonry.classic_enhanced .posts-container article.has-post-thumbnail .meta-category a {
	position: absolute;
	top: 20px;
	left: 20px;
	z-index: 101;
}
.masonry.classic_enhanced .posts-container article .meta-category a {
	z-index: 101;
	position: relative;
}
.masonry.classic_enhanced .posts-container article .meta-category a:not(:first-child) {
	display: none;
}
.masonry.classic_enhanced .posts-container article:not(.has-post-thumbnail) .meta-category a {
	margin-top: 20px;
	margin-left: 20px;
	margin-bottom: 0;
}

.masonry.classic_enhanced .masonry-blog-item .post-meta .nectar-love-wrap {
    float: none;
    display: inline-block;
}

.masonry.classic_enhanced .masonry-blog-item .post-meta .nectar-love-wrap .nectar-love i,
.masonry.classic_enhanced .masonry-blog-item .post-meta .nectar-love-wrap .nectar-love .heart-wrap,
.masonry.classic_enhanced .masonry-blog-item .post-meta .nectar-love-wrap .nectar-love .nectar-love-count {
	display: block!important;
	line-height: 18px;
	float: left;
}

#post-area.masonry.classic_enhanced article.post .post-meta {
	padding: 6px 21px!important;
	z-index: 101;
	position: relative;
	border-top: 1px solid rgba(0,0,0,0.06);
}

#post-area.masonry.classic_enhanced article.post .post-featured-img {
	transition: all .7s cubic-bezier(.2,1,.22,1);
	-webkit-transition: all .7s cubic-bezier(.2,1,.22,1);
	line-height: 0;
	display: block;
	position: relative;
}
#post-area.masonry.classic_enhanced article.post .post-featured-img img,
#post-area.masonry.classic_enhanced article.post.format-gallery .inner-wrap .flickity-slider .cell img,
#post-area.masonry.classic_enhanced article.post.format-gallery.wide_tall .inner-wrap .flickity-viewport,
#post-area.masonry.classic_enhanced article.post.format-gallery.large_featured .inner-wrap .flickity-viewport {
	margin-bottom: 0;
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
	transition: all .7s cubic-bezier(.2,1,.22,1);
	-webkit-transition: all .7s cubic-bezier(.2,1,.22,1);
}

#post-area.masonry.classic_enhanced article.post .inner-wrap:hover .post-featured-img img,
#post-area.masonry.classic_enhanced article.post.large_featured .inner-wrap:hover .post-featured-img,
#post-area.masonry.classic_enhanced article.post.wide_tall .inner-wrap:hover .post-featured-img,
#post-area.masonry.classic_enhanced article.post.format-gallery .inner-wrap:hover .flickity-slider .cell img,
#post-area.masonry.classic_enhanced article.post.format-gallery.wide_tall .inner-wrap:hover .flickity-viewport,
#post-area.masonry.classic_enhanced article.post.format-gallery.large_featured .inner-wrap:hover .flickity-viewport {
	transform: scale(1.07);
	-webkit-transform: scale(1.07);
}

#post-area.masonry.classic_enhanced article.post .post-meta > * {
	margin-right: 13px;
	margin-left: 0!important;
}
#post-area.masonry.classic_enhanced article.post .content-inner {
	position: static;
}
#post-area.masonry.classic_enhanced article.post .post-meta > *:last-child {
	margin-right: 0;
}
#post-area.masonry.classic_enhanced article.post .post-meta .nectar-love {
	margin-left: 0!important;
}
#post-area.standard-minimal article.post .nectar-love .icon-salient-heart, 
#post-area.masonry.classic_enhanced article.post .post-meta .nectar-love .icon-salient-heart, 
#post-area.masonry.classic_enhanced article.post.large_featured .post-featured-img img,
#post-area.masonry.classic_enhanced article.post.wide_tall .post-featured-img img,
#post-area.masonry.classic_enhanced article.post.wide_tall .nectar-flickity .cell img,
#post-area.masonry.classic_enhanced article.post.large_featured .nectar-flickity .cell img
{
	display: none;
}
.masonry.classic_enhanced .masonry-blog-item .article-content-wrap {
    padding: 17%!important;
    position: relative;
    z-index: 100;
    background-color: #fff;
}
.masonry.classic_enhanced .masonry-blog-item h3.title {
	margin-bottom: 0;
}

.span_12.light .masonry.classic_enhanced .masonry-blog-item h3.title {
	color: #444;
}

.masonry.classic_enhanced .masonry-blog-item .inner-wrap {
	border-radius: 4px;
	overflow: hidden;
	perspective: 1000px;
	-webkit-perspective: 1000px;
	box-shadow: 0px 1px 3px rgba(0,0,0,.08)!important;
}

body:not(.ascend) .masonry.classic_enhanced .masonry-blog-item .inner-wrap {
    padding: 0px;
}
body:not(.ascend) .masonry.classic_enhanced article.post .content-inner {
	border: none;
	padding-bottom: 0!important;
	margin-bottom: 0!important;
}

#post-area.masonry.classic_enhanced article.post.large_featured .content-inner {
	position: relative;
	width: 50%;
	height: 100%;
	z-index: 100;
	background-color: #fff;
}
.masonry.classic_enhanced .masonry-blog-item.post.large_featured .article-content-wrap {
	width: 100%;
	top: 50%;
	left: 0;
	position: absolute;
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
}
#post-area.masonry.classic_enhanced article.post:not(.wide_tall) .img-link {
	position: relative;
	display: block;
}
#post-area.masonry.classic_enhanced  article.post.large_featured .post-content {
	height: 100%;
}

#post-area.masonry.classic_enhanced article.post.large_featured .img-link,
#post-area.masonry.classic_enhanced article.post.large_featured .nectar-flickity {
	position: absolute;
	top: 0;
	right: 0;
	width: 50%;
	height: 100%;
	z-index: 100;
}
#post-area.masonry.classic_enhanced article.post.large_featured .post-featured-img,
#post-area.masonry.classic_enhanced article.post.wide_tall .nectar-flickity .cell,
#post-area.masonry.classic_enhanced article.post.large_featured .nectar-flickity .cell {
	background-size: cover;
	width: 100%;
	height: 100%;
	z-index: 100;
	background-color: #333;
	background-position: center;
}
#post-area.masonry.classic_enhanced article.post.wide_tall .post-featured-img,
#post-area.masonry.classic_enhanced article.post.wide_tall .nectar-flickity {
	position: absolute;
	background-size: cover;
	top: 0;
	right: 0;
	width: 100%;
	height: 100%;
	z-index: 10;
	background-position: center;
	background-color: #777;
}

#post-area.masonry.classic_enhanced  article.post.wide_tall.format-quote .post-featured-img,
#post-area.masonry.classic_enhanced  article.post.wide_tall.format-link .post-featured-img {
	opacity: 0.1;
}

#post-area.masonry.classic_enhanced article.post.wide_tall  .flickity-slider .cell,
#post-area.masonry.classic_enhanced article.post.wide_tall  .flickity-viewport,
#post-area.masonry.classic_enhanced article.post.large_featured  .flickity-slider .cell,
#post-area.masonry.classic_enhanced article.post.large_featured  .flickity-viewport {
	height: 100%!important;
}

#post-area.masonry.classic_enhanced  article.post.wide_tall .meta-category {
	z-index: 1000;
	position: relative;
}
#post-area.masonry.classic_enhanced  article.post.wide_tall h3,
.span_12.light #post-area.masonry.classic_enhanced  article.post.wide_tall h3 {
	color: #fff;
}
#post-area.masonry.classic_enhanced  article h3:hover a {
	color: inherit!important;
}

#post-area.masonry.classic_enhanced  article.post.wide_tall .inner-wrap:after {
    background: -webkit-linear-gradient(top , rgba(255, 255, 255, 0) -2%, rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 0.04) 44%, rgba(0, 0, 0, 0.25) 100%, rgba(0, 0, 0, 0.5) 100%);
    background: linear-gradient(top , rgba(255, 255, 255, 0) -2%, rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 0.04) 44%, rgba(0, 0, 0, 0.25) 100%, rgba(0, 0, 0, 0.5) 100%);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 45%;
    z-index: 11;
    border-radius: 4px;
    content: ' ';
} 
#post-area.masonry.classic_enhanced  article.post.wide_tall:not(.format-quote):not(.format-link) .inner-wrap:before {
	background-color: rgba(0,0,0,0.43);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 11;
    content: ' ';
    border-radius: 4px;
}

.masonry.classic_enhanced .nectar-love span,
.masonry .masonry-blog-item .nectar-love span,
[data-ps="1"] .nectar-love span {
	font-size: 12px!important;
}

.masonry.classic_enhanced article.post.wide_tall .post-meta a, .masonry.classic_enhanced .wide_tall .post-header, .masonry.classic_enhanced article.post.wide_tall .excerpt,
.masonry.classic_enhanced article.post.wide_tall  .nectar-love span {
	color: rgba(255,255,255,0.9);
}
#post-area.masonry.classic_enhanced article.post.wide_tall .post-meta {
	border-color: rgba(255,255,255,0.15);
}
#post-area.masonry.classic_enhanced article.post.wide_tall .article-content-wrap {
	position: absolute;
	z-index: 100;
	top: 50%;
	background-color: transparent;
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	left: 0;
	width: 100%;
	padding: 20%!important;
}

#post-area.masonry.classic_enhanced article.post.large_featured .post-meta {
	bottom: 0!important;
	top: auto!important;
	left: 0;
	z-index: 1000;
	width: 50%;
	position: absolute!important;
}

.masonry.classic_enhanced .masonry-blog-item.post.large_featured .article-content-wrap {
    padding: 21%!important;
}

.masonry.classic_enhanced .masonry-blog-item h3.title {
	line-height: 26px;
}

.masonry.classic_enhanced .masonry-blog-item .entire-meta-link {
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	z-index: 101;
	height: 100%;
}

#post-area.masonry.classic_enhanced article.post.quote .post-content,
#post-area.masonry.classic_enhanced article.post.quote .content-inner,
#post-area.masonry.classic_enhanced article.post.quote .quote-inner,
#post-area.masonry.classic_enhanced article.post.link .post-content,
#post-area.masonry.classic_enhanced article.post.link .content-inner,
#post-area.masonry.classic_enhanced article.post.link .link-inner,
#post-area.masonry.classic_enhanced article.post.wide_tall .post-content,
#post-area.masonry.classic_enhanced article.post.wide_tall .content-inner,
#post-area.masonry.classic_enhanced article.post.wide_tall .conent-inner a {
	height: 100%;
}
#post-area.masonry.classic_enhanced .quote-wrap,
#post-area.masonry.classic_enhanced .link-wrap,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-standard .article-content-wrap,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-video .article-content-wrap,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-audio .article-content-wrap  {
	padding: 17%!important;
	display: block;
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	top: 50%;
	z-index: 10;
	left: 0;
	position: absolute;
}
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-standard .content-inner,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-standard .post-content,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-video .content-inner,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-video .post-content,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-audio .post-content,
.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-audio .content-inner {
	height: 100%;
}

.masonry.classic_enhanced .posts-container article .video-play-button:before {
	content: '\e052';
	width: 80px;
	display: block;
}
.masonry.classic_enhanced .posts-container article .video-play-button {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translateY(-50%) translateX(-50%);
	-webkit-transform: translateY(-50%) translateX(-50%);
	-webkit-transition: all .21s cubic-bezier(.5,.5,.4,.88);
	transition: all .21s cubic-bezier(.5,.5,.4,.88);
	color: #fff;
	font-size: 40px;
	z-index: 1000;
	height: 70px;
	width: 70px;
	line-height: 70px;
	text-align: center;
	border-radius: 100px;
}
.masonry.classic_enhanced .posts-container article.format-video:hover .video-play-button {
	transform: translateY(-50%) translateX(-50%) scale(1.18);
	-webkit-transform: translateY(-50%) translateX(-50%) scale(1.18);
	box-shadow: 0 5px 8px 0 rgba(0,0,0,.17);
}

.masonry.classic_enhanced .posts-container article:not(.has-post-thumbnail) .video-play-button,
.masonry.classic_enhanced .posts-container article.wide_tall .video-play-button {
	position: relative;
	top: 0;
	left: 0;
	margin-bottom: 20px;
	transform: none;
	-webkit-transform: none;
}
.masonry.classic_enhanced .posts-container article:not(.has-post-thumbnail):hover .video-play-button,
.masonry.classic_enhanced .posts-container article.wide_tall:hover .video-play-button {
	transform: scale(1.1);
	-webkit-transform: scale(1.1);
}

.masonry.classic_enhanced .posts-container article.large_featured .video-play-button { 
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translateY(-50%) translateX(-50%);
	-webkit-transform: translateY(-50%) translateX(-50%);
}

#post-area.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-audio .post-meta.no-img,
#post-area.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-video .post-meta.no-img,
#post-area.masonry.classic_enhanced .masonry-blog-item:not(.has-post-thumbnail).regular.format-standard .post-meta.no-img,
#post-area.masonry.classic_enhanced article.post.wide_tall .post-meta {
	position: absolute!important;
	bottom: 0;
	top: auto!important;
	left: 0;
	z-index: 101;
	width: 100%;
}

@media only screen and (min-width: 1000px) {

		.masonry.classic_enhanced .masonry-blog-item.large_featured h3.title {
			font-size: 30px;
			line-height: 36px;
		}
}

/*-------------------------------------------------------------------------*/
/*	6.	Nectar Shortcode Styles
/*-------------------------------------------------------------------------*/

/***************** Icons ******************/
[class*="fa-"] {
	display: inline-block;
    font-size: 16px;
    width: 32px;
    height: 32px;
    line-height: 32px;
    top: -2px;
    word-spacing: 1px;
    position: relative;
    text-align: center;
    vertical-align: middle;
    max-width: 100%;
}
[class^="icon-"], [class*=" icon-"] {
	background-color: #27CFC3;
    border-radius: 999px 999px 999px 999px;
    -moz-border-radius: 999px 999px 999px 999px;
    -webkit-border-radius: 999px 999px 999px 999px;
    -o-border-radius: 999px 999px 999px 999px;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    height: 32px;
    line-height: 32px;
    max-width: 100%;
    position: relative;
    text-align: center;
    vertical-align: middle;
    width: 32px;
    top: -2px;
    word-spacing: 1px;
}

[class^="icon-"].icon-3x,[class*=" icon-"].icon-3x {
	background-color: #eeedec!Important;
}

body [class^="icon-"].icon-3x.alt-style, body [class*=" icon-"].icon-3x.alt-style {
	background-color: #27CFC3!important;
	color: #fff!important;
}

.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.alt-style.hovered, .col:not(#post-area):not(.span_12):not(#sidebar):hover [class*=" icon-"].icon-3x.alt-style.hovered {
	background-color: rgba(0,0,0,0.035)!important;
}

.light .col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.alt-style.hovered, .light .col:not(#post-area):not(.span_12):not(#sidebar):hover [class*=" icon-"].icon-3x.alt-style.hovered {
	background-color: rgba(0,0,0,0.1)!important;
}

#sidebar .widget:hover [class^="icon-"].icon-3x.alt-style {
	background-color: rgba(0,0,0,0.035)!important;
}


.full-width-section [class^="icon-"].icon-3x, .full-width-section [class*=" icon-"].icon-3x  {
	background-color: rgba(0,0,0,0.021)!important;
}

[class^="icon-"].icon-3x,[class*=" icon-"].icon-3x, .circle-border {
    background-color: #eeedec;
    border-radius: 999px 999px 999px 999px;
    -moz-border-radius: 999px 999px 999px 999px;
    -webkit-border-radius: 999px 999px 999px 999px;
    -o-border-radius: 999px 999px 999px 999px;
    color: #27CFC3;
    display: inline-block;
    font-size: 30px;
    height: 90px;
    line-height: 90px;
    max-width: 100%;
    position: relative;
    text-align: center;
    vertical-align: middle;
    width: 90px;
    word-spacing: 1px;
    transition: all 0.1s linear;
    -webkit-transition: all 0.1s linear;
    -o-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
}

[class^="icon-"].icon-3x, [class*=" icon-"].icon-3x {
	margin-bottom: 27px;
}

body [class^="icon-"].icon-tiny {
	line-height: 15px!important;
	height: 13px; 
	width: 15px;
	margin-right: 5px;
	font-size: 13px!important;
	color: #888;
	background-color: transparent!important;
}

body [class^="icon-"].icon-default-style {
	line-height: 34px!important;
	height: 34px; 
	width: 34px;
	margin-right: 0px;
	font-size: 34px!important;
	color: #27CFC3;
	background-color: transparent!important;
}

body .nectar-button i {
	background-color: transparent!important;
}

h3 [class^="icon-"], h2 [class^="icon-"], h4 [class^="icon-"], h5 [class^="icon-"] {
	margin-right: 5px;
}

.col:not(#post-area):not(.span_12):not(#sidebar):hover .hovered .circle-border, #sidebar .widget:hover .circle-border {
	border: 1px solid #27CFC3;
    transform: scale(1.18);
    -moz-transform: scale(1.18);
    -o-transform: scale(1.18);
    transition-timing-function: cubic-bezier(0.4, 0.25, 0.14, 1.73);
    -moz-transition-timing-function: cubic-bezier(0.4, 0.25, 0.14, 1.73);
    -webkit-transition-timing-function: cubic-bezier(0.4, 0.25, 0.14, 1.73);
    -o-transition-timing-function: cubic-bezier(0.4, 0.25, 0.14, 1.73);
}

.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.hovered, .col:not(#post-area):not(.span_12):not(#sidebar):hover [class*=" icon-"].icon-3x.hovered, #sidebar .widget:hover [class^="icon-"].icon-3x {
	color: #fff!important;
	background-color: #27CFC3;
}

/*#post-area .span_12:hover [class^="icon-"].icon-3x {
	color: #fff!important;
}*/

.circle-border {
	background: none repeat scroll 0 0 transparent;
    border: 1px solid #eeedec;
    height: 88px;
    left: 1px;
    position: absolute;
    z-index: 1;
    top: 1px;
    transition-duration: 225ms;
    -moz-transition-duration: 225ms;
    -webkit-duration: 225ms;
    -o-transition-duration: 225ms;
    transition-property: all;
    -moz-transition-property: all; 
    -o-transition-property: all;
    -webkit-transition-property: all;
    transition-timing-function: cubic-bezier(0.5, -0.7, 0.67, 0.7);
    -moz-transition-timing-function: cubic-bezier(0.5, -0.7, 0.67, 0.7);
    -o-transition-timing-function: cubic-bezier(0.5, -0.7, 0.67, 0.7);
    -webkit-transition-timing-function: cubic-bezier(0.5, -0.7, 0.67, 0.7);
    width: 88px;
}

.extra-color-gradient-1 .circle-border,
.extra-color-gradient-2 .circle-border {
	transform: none!important;
	-webkit-transform: none!important;
	border: 2px solid rgba(0,0,0,0.065)!important;
}
.light .extra-color-gradient-1 .circle-border,
.light .extra-color-gradient-2 .circle-border{
	border: 2px solid rgba(255,255,255,0.085)!important;
}

[class^="icon-"].icon-3x.extra-color-gradient-2:not(.alt-style), [class*=" icon-"].icon-3x.extra-color-gradient-2:not(.alt-style),
[class^="icon-"].icon-3x.extra-color-gradient-1:not(.alt-style), [class*=" icon-"].icon-3x.extra-color-gradient-1:not(.alt-style) {
	background-color: transparent!important;
}

[class^="icon-"].extra-color-gradient-1.alt-style:not(.icon-normal):before, [class*=" icon-"].extra-color-gradient-1.alt-style:not(.icon-normal):before,
[class^="icon-"].extra-color-gradient-2.alt-style:not(.icon-normal):before, [class*=" icon-"].extra-color-gradient-2.alt-style:not(.icon-normal):before {
	background: #fff;
	-webkit-background-clip: text;
	background-clip: text;
}
[class^="icon-"].extra-color-gradient-1.alt-style:not(.icon-normal).no-grad:before, [class*=" icon-"].extra-color-gradient-1.alt-style:not(.icon-normal).no-grad:before,
[class^="icon-"].extra-color-gradient-2.alt-style:not(.icon-normal).no-grad:before, [class*=" icon-"].extra-color-gradient-2.alt-style:not(.icon-normal).no-grad:before,
[class^="icon-"][data-color="extra-color-gradient-1"].no-grad:before, [class*=" icon-"][data-color="extra-color-gradient-1"].no-grad:before,
[class^="icon-"].extra-color-gradient-1:not(.icon-normal).no-grad:before, [class*="icon-"].extra-color-gradient-1:not(.icon-normal).no-grad:before,
[class^="icon-"][data-color="extra-color-gradient-2"].no-grad:before, [class*="icon-"][data-color="extra-color-gradient-2"].no-grad:before, .extra-color-gradient-2[class^="icon-"]:not(.icon-normal).no-grad:before, 
.extra-color-gradient-2[class*=" icon-"]:not(.icon-normal).no-grad:before,
.nectar-gradient-text.no-grad *, .nectar_icon_wrap[data-color="extra-color-gradient-1"] .nectar_icon.no-grad i, .nectar_icon_wrap[data-color="extra-color-gradient-2"] .nectar_icon.no-grad i {
	background-color: transparent!important;
	background: none!important;
}
body .nectar-gradient-text[data-color="extra-color-gradient-1"].no-grad *,
body .nectar-gradient-text[data-color="extra-color-gradient-2"].no-grad *,
.nectar-button.see-through-extra-color-gradient-2.no-text-grad .start,
.nectar-button.see-through-extra-color-gradient-1.no-text-grad .start,
.nectar-button.extra-color-gradient-1.no-text-grad .hover,
.nectar-button.extra-color-gradient-2.no-text-grad .hover {
	-webkit-text-fill-color: initial;
}

[class^="icon-"].extra-color-gradient-1.icon-3x.alt-style:before, [class*=" icon-"].extra-color-gradient-1.icon-3x.alt-style:before,
[class^="icon-"].extra-color-gradient-2.icon-3x.alt-style:before, [class*=" icon-"].extra-color-gradient-2.icon-3x.alt-style:before {
	color: #fff!important;
}
.full-width-section .circle-border  {
	background-color: rgba(0,0,0,0.021);
	border-color: rgba(0,0,0,0.05);
}

.full-width-section .light .circle-border  {
	background-color: rgba(0,0,0,0.021);
	border-color: rgba(0,0,0,0.2);
}

.iwithtext { position: relative; }

.iwithtext .iwt-icon {
	position: absolute;
	left: 0;
	top: 0px;
}

.iwithtext .iwt-icon img {
	width: 35px;
	height: auto;
	padding: 0;
}

.iwithtext .iwt-text { padding-left: 55px; }

.main-content .vc_span2 .iwithtext .iwt-icon, .main-content .vc_col-sm-2 .iwithtext .iwt-icon { top: -2px; }
.main-content .vc_span2 .iwithtext .iwt-icon i, .main-content .vc_col-sm-2 .iwithtext .iwt-icon i { font-size: 26px!important; line-height: 26px!important; width: 26px!important; height: 26px!important;}
.main-content .vc_span2 .iwithtext .iwt-icon img, .main-content .vc_col-sm-2 .iwithtext .iwt-icon img  { width: 26px; }
.main-content .vc_span2  .iwithtext .iwt-text, .main-content .vc_col-sm-2  .iwithtext .iwt-text { padding-left: 45px; }

.main-content .svg-icon-holder {
	height: 64px;
	overflow: hidden;
	min-width: 1px;
	margin-bottom: 20px;
	display: inline-block;
	opacity: 0;
}

.svg-icon-holder span {
	display: none;
}

.nectar_icon_wrap {  display: inline-block; position: relative; }

.nectar_icon_wrap .nectar_icon .svg-icon-holder {
	margin-bottom: 0;
}

.nectar_icon_wrap[data-padding="10px"] .nectar_icon { padding: 10px; }
.nectar_icon_wrap[data-padding="15px"] .nectar_icon { padding: 15px; }
.nectar_icon_wrap[data-padding="20px"] .nectar_icon { padding: 20px; }
.nectar_icon_wrap[data-padding="25px"] .nectar_icon { padding: 25px; }
.nectar_icon_wrap[data-padding="30px"] .nectar_icon { padding: 30px; }
.nectar_icon_wrap[data-padding="35px"] .nectar_icon { padding: 35px; }
.nectar_icon_wrap[data-padding="40px"] .nectar_icon { padding: 40px; }
.nectar_icon_wrap[data-padding="45px"] .nectar_icon { padding: 45px; }
.nectar_icon_wrap[data-padding="50px"] .nectar_icon { padding: 50px; }


.span_12.light .nectar_icon_wrap[data-style="border-basic"] .nectar_icon,
.span_12.light .nectar_icon_wrap[data-style="border-animation"] .nectar_icon {
	border: 2px solid rgba(255,255,255,0.15);
}
.nectar_icon_wrap[data-style="border-basic"] .nectar_icon,
.nectar_icon_wrap[data-style="border-animation"] .nectar_icon {
	line-height: 0;
	border: 2px solid rgba(0,0,0,0.065);
	border-radius: 100px;
	position: relative;
	-webkit-transition: background-color .45s cubic-bezier(0.25, 1, 0.33, 1), border-color .45s cubic-bezier(0.25, 1, 0.33, 1);
	transition: background-color .45s cubic-bezier(0.25, 1, 0.33, 1), border-color .45s cubic-bezier(0.25, 1, 0.33, 1);
}   

.nectar_icon_wrap[data-style="border-animation"] .nectar_icon i {
	-webkit-transition: color .45s cubic-bezier(0.25, 1, 0.33, 1);
	transition: color .45s cubic-bezier(0.25, 1, 0.33, 1);
}

.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"]:hover .nectar_icon,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"]:hover .nectar_icon {
	border-color: transparent;
}
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"]:hover:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"]:hover:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"]:hover .nectar_icon:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"]:hover .nectar_icon:before {
	opacity: 1;
}
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"]:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"]:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"] .nectar_icon:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"] .nectar_icon:before {
	position: absolute;
	z-index: -1;
	content: ' ';
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	border-radius: 100px;
	-webkit-transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1);
	transition: opacity .45s cubic-bezier(0.25, 1, 0.33, 1);
}

.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"] .nectar_icon:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"] .nectar_icon:before {
	opacity: 1;
}

.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-1"] .nectar_icon:before,
.nectar_icon_wrap[data-style="border-animation"][data-color="extra-color-gradient-2"] .nectar_icon:before {
	background-color: #f6f6f6;
}

.nectar_icon_wrap[data-style="border-animation"] .nectar_icon:not(.no-grad):hover i {
	color: #fff!important;
}

.nectar_icon_wrap[data-border-thickness="1px"] .nectar_icon { border-width: 1px;}
.nectar_icon_wrap[data-border-thickness="2px"] .nectar_icon { border-width: 2px;}
.nectar_icon_wrap[data-border-thickness="3px"] .nectar_icon { border-width: 3px;}
.nectar_icon_wrap[data-border-thickness="4px"] .nectar_icon { border-width: 4px;}
.nectar_icon_wrap[data-border-thickness="5px"] .nectar_icon { border-width: 5px;}


.nectar_icon_wrap[data-style="border-basic"] .nectar_icon i {
	display: block;
	text-align: center;
}

.nectar_icon_wrap a {
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
}
/***************** Animated Title ******************/


.nectar-animated-title {
	margin-bottom: 0!important;
}
.nectar-animated-title-inner {
	display: inline-block;
	overflow: hidden;
	position: relative;
	margin-bottom: 10px;
}

.nectar-animated-title h6 {	padding: 5px 10px; }
.nectar-animated-title h5 {	padding: 6px 12px; }
.nectar-animated-title h4 {	padding: 7px 14px; }
.nectar-animated-title h3 {	padding: 8px 16px; }
.nectar-animated-title h2 {	padding: 10px 20px; }
.nectar-animated-title h1 {	padding: 15px 30px; }

.nectar-animated-title .nectar-animated-title-inner .wrap > * {
	margin-bottom: 0!important;
	position: relative;
	z-index: 100;
	color: #fff;
}

.nectar-animated-title .nectar-animated-title-inner:after {
	display: block;
	background-color: #27CFC3;
	content: ' ';
	position: absolute;
	z-index: 10;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.nectar-animated-title .nectar-animated-title-outer {
	display: inline-block;
}

.nectar-animated-title[data-style="hinge-drop"] .nectar-animated-title-outer {
	perspective: 1000px;
}
.nectar-animated-title[data-style="hinge-drop"] .nectar-animated-title-inner {
	-ms-transform: rotateX(-90deg) translateZ(0);
	-webkit-transform: rotateX(-90deg) translateZ(0);
	transform: rotateX(-90deg) translateZ(0);
	-ms-transform-origin: 0px 0px 0px;
	-webkit-transform-origin: 0px 0px 0px;
	transform-origin: 0px 0px 0px;
	opacity: 0;
	box-shadow: rgba(0, 0, 0, 0.13) 0px 6px 20px;
}

.nectar-animated-title[data-style="hinge-drop"].completed .nectar-animated-title-inner {
	-ms-transform: rotateX(0deg) translateZ(0);
	-webkit-transform: rotateX(0deg) translateZ(0);
	transform: rotateX(0deg) translateZ(0);
	opacity: 1;
	-ms-transition: transform 1.3s cubic-bezier(0.2, 1, 0.2, 1), opacity 1.3s cubic-bezier(0.2, 1, 0.2, 1);
	transition: transform 1.3s cubic-bezier(0.2, 1, 0.2, 1), opacity 1.3s cubic-bezier(0.2, 1, 0.2, 1);
	-webkit-transition: -webkit-transform 1.3s cubic-bezier(0.2, 1, 0.2, 1), opacity 1.3s cubic-bezier(0.2, 1, 0.2, 1);
}

.nectar-animated-title[data-style="color-strip-reveal"] .nectar-animated-title-inner:after {
	-ms-transform-origin: left;
    -ms-transform: scale(0,1);
	transform-origin: left;
    transform: scale(0,1);
}
.nectar-animated-title[data-style="color-strip-reveal"] .nectar-animated-title-inner .wrap {
	overflow: hidden;
	-ms-transform: translateX(-100%) translateZ(0);
	-webkit-transform: translateX(-100%) translateZ(0);
	transform: translateX(-100%) translateZ(0);
	position: relative;
	z-index: 100;
}
.nectar-animated-title[data-style="color-strip-reveal"] .nectar-animated-title-inner .wrap * {
	-ms-transform: translateX(100%) translateZ(0);
	-webkit-transform: translateX(100%) translateZ(0);
	transform: translateX(100%) translateZ(0);
	display: block;
}

.nectar-animated-title[data-style="color-strip-reveal"].completed .nectar-animated-title-inner .wrap, .nectar-animated-title[data-style="color-strip-reveal"].completed .nectar-animated-title-inner .wrap * {
	-ms-transform: translateX(0%) translateZ(0);
	-webkit-transform: translateX(0%) translateZ(0);
	transform: translateX(0%) translateZ(0);
	-ms-transition: transform 0.7s cubic-bezier(0.85, 0, 0.12, 1);
	-webkit-transition: -webkit-transform 0.7s cubic-bezier(0.85, 0, 0.12, 1);
	transition: transform 0.7s cubic-bezier(0.85, 0, 0.12, 1);
}


.nectar-animated-title[data-style="color-strip-reveal"].completed .nectar-animated-title-inner:after {
	-webkit-animation: colorStripReveal 0.7s cubic-bezier(0.85, 0, 0.12, 1) forwards;
	animation: colorStripReveal 0.7s cubic-bezier(0.85, 0, 0.12, 1) forwards;
}

@keyframes colorStripReveal {
	0% { transform: scale(0,1) translateZ(0);}
	100% { transform: scale(1,1) translateZ(0);}
}

/***************** Milestone ******************/

.nectar-milestone {
	text-align: center;
}

.nectar-milestone:not(.animated-in) {
	opacity: 0;
}

.span_12.right .nectar-milestone {
	text-align: right;
}
.span_12.right .nectar-milestone[data-symbol-alignment="superscript"] {
	padding-right: 40px;
}

.nectar-milestone .number {
	font-size: 62px;
	line-height: 62px;
	font-family: 'Open Sans';
	font-weight: 600;
	margin-bottom: 5px;	
	position:relative;
	display: inline-block;
}

.nectar-milestone.motion_blur .number span:not(.in-sight) {
	transform: translateY(-100%);
	-wenkit-transform: translateY(-100%);
	opacity: 0;
}
.nectar-milestone.motion_blur .number span {
	display: inline-block;
}

.nectar-milestone .subject {
	letter-spacing: 0.5px;
    font-family: 'Open Sans';
	font-weight: 300;
    font-size: 16px!important;
}

.nectar-milestone .number .symbol-wrap {
	display: inline-block;
}

.nectar-milestone[data-symbol-alignment="superscript"] .number .symbol-wrap {
	transform: translateX(103%);
	-webkit-transform: translateX(103%);
	-moz-transform: translateX(103%);
	top: 0;
	right: 0;
	position: absolute;
	display: inline;
	font-size: 30px;
	line-height: 34px;
}

.nectar-milestone[data-symbol-alignment="superscript"][data-symbol-pos="before"] .number .symbol-wrap {
	transform: translateX(-103%);
	-webkit-transform: translateX(-103%);
	-moz-transform: translateX(-103%);
	right: auto;
	left: 0;
}

.milestone-wrap {
	text-align: center;
}

/***************** Fancy UL ******************/

.nectar-fancy-ul ul li {
	list-style: none;
	position: relative;
	padding-left: 38px;
}

.nectar-fancy-ul ul {
	margin-left: 0!important;
}

.nectar-fancy-ul ul li i {
	position: absolute;
	left: 0;
	top: 0;
	width: 20px!important;
}

.nectar-fancy-ul ul li .icon-default-style[class^="icon-"] {
	font-size: 16px!important;
	height: 100%!important;
    line-height: 22px!important;
}

.nectar-fancy-ul ul li i.icon-default-style[class^="icon-"].icon-salient-thin-line {
	font-size: 27px!important;
	height: 27px!important;
    line-height: 27px !important;
}

.nectar-fancy-ul[data-animation="true"] ul li {
	opacity: 0;
	left: -20px;
	margin-bottom: 5px;
}

/***************** Icon List ******************/

.nectar-icon-list { position: relative;}

.nectar-icon-list:after {
	display: block;
	position: absolute;
	content: ' ';
	z-index: 1;
	width: 1px;
	background-color: rgba(0,0,0,0.1);
	height: 100%;
	top: 15px;
	left: 15px;
}

.nectar-icon-list > div:last-child {
	margin-bottom: 15px;
}

.row .nectar-icon-list .nectar-icon-list-item h4 { line-height: 30px; margin-bottom: 4px; }

.nectar-icon-list-item {
	position: relative;
	margin-bottom: 80px;
	padding-left: 60px;
}

.nectar-icon-list[data-icon-size="medium"] .nectar-icon-list-item  {
	padding-left: 100px;
}
.nectar-icon-list[data-icon-size="medium"][data-icon-style="no-border"] .nectar-icon-list-item  {
	padding-left: 80px;
}
.nectar-icon-list[data-icon-size="large"] .nectar-icon-list-item  {
	padding-left: 120px;
}
.nectar-icon-list[data-icon-size="large"][data-icon-style="no-border"] .nectar-icon-list-item  {
	padding-left: 100px;
}


.nectar-icon-list-item .content { color: rgba(0,0,0,0.5); }
.span_12.light .nectar-icon-list-item .content { color: rgba(255,255,255,0.65); }
.span_12.light .nectar-icon-list:after { background-color: rgba(255,255,255,0.15); }


.nectar-icon-list-item .list-icon-holder {
	border-radius: 100px;
	background-color: #f7f7f7;
	text-align: center;
	position: absolute;
	left: 0;
	top: 0;
	color: rgba(0,0,0,0.5);
	z-index: 10;
}

.nectar-icon-list[data-icon-style="border"] .list-icon-holder {
	border: 2px solid rgba(0,0,0,0.1);
}
.span_12.light .nectar-icon-list[data-icon-style="border"] .nectar-icon-list-item .list-icon-holder {
	border: 2px solid rgba(255,255,255,0.3);
}

.nectar-icon-list[data-icon-style="no-border"] .list-icon-holder {
	border: none!important;
	background-color: transparent!important;
}
.nectar-icon-list[data-icon-style="no-border"]:after {
	display: none;
}

.nectar-icon-list .nectar-icon-list-item .list-icon-holder i:before {
	line-height: inherit;
}
.nectar-icon-list[data-icon-size="small"] .nectar-icon-list-item .list-icon-holder,
.nectar-icon-list[data-icon-size="small"] .nectar-icon-list-item .list-icon-holder span,
.nectar-icon-list[data-icon-size="small"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 30px!important;
	font-size: 16px!important;
	width: 30px;
	height: 30px;
}
.nectar-icon-list[data-icon-size="small"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 26px!important;
}
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="small"] .nectar-icon-list-item .list-icon-holder,
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="small"] .nectar-icon-list-item .list-icon-holder span,
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="small"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 30px!important;
	font-size: 30px!important;
}

.nectar-icon-list[data-icon-size="medium"] .nectar-icon-list-item .list-icon-holder,
.nectar-icon-list[data-icon-size="medium"] .nectar-icon-list-item .list-icon-holder span,
.nectar-icon-list[data-icon-size="medium"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 60px!important;
	font-size: 26px!important;
	width: 60px;
	height: 60px;
}
.nectar-icon-list[data-icon-size="medium"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 56px!important;
}
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="medium"] .nectar-icon-list-item .list-icon-holder,
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="medium"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 45px!important;
	font-size: 45px!important;
	width: 45px;
	height: 45px;
}
.nectar-icon-list[data-icon-size="large"] .nectar-icon-list-item .list-icon-holder,
.nectar-icon-list[data-icon-size="large"] .nectar-icon-list-item .list-icon-holder span,
.nectar-icon-list[data-icon-size="large"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 80px!important;
	font-size: 36px!important;
	width: 80px;
	height: 80px;
}
.nectar-icon-list[data-icon-size="large"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 76px!important;
}
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="large"] .nectar-icon-list-item .list-icon-holder,
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="large"] .nectar-icon-list-item .list-icon-holder span,
.nectar-icon-list[data-icon-style="no-border"][data-icon-size="large"] .nectar-icon-list-item .list-icon-holder i {
	line-height: 60px!important;
	font-size: 60px!important;
	width: 60px;
	height: 60px;
}

.nectar-icon-list[data-icon-size="medium"]:after {
	top: 30px;
	left: 30px;
}
.nectar-icon-list[data-icon-size="large"]:after {
	top: 40px;
	left: 40px;
}

body .nectar-icon-list-item .list-icon-holder > span {
	display: block;
	letter-spacing: 0!important;
	margin-top: -2px;
	margin-left: -2px;
}

.nectar-icon-list[data-icon-color="default"] .list-icon-holder {
	background-color: #f7f7f7;
}

.span_12.light .nectar-icon-list[data-icon-color="default"] .list-icon-holder {
	background-color: #222;
	color: rgba(255,255,255,0.8);
}
.span_12.dark .nectar-icon-list[data-icon-color="default"] .list-icon-holder i {
	color: inherit!important;
}
.span_12.light .nectar-icon-list[data-icon-color="default"] .list-icon-holder i {
	color: rgba(255,255,255,0.7)!important;
}

.nectar-icon-list[data-animate="true"] .list-icon-holder { transform: scale(0.3); -webkit-transform: scale(0); -ms-transform: scale(0); opacity: 0; -webkit-backface-visibility: hidden; }
.nectar-icon-list[data-animate="true"] .nectar-icon-list-item.animated .list-icon-holder { transform: scale(1); -webkit-transform: scale(1); -ms-transform: scale(1); opacity: 1; transition: transform 0.6s, opacity 0.2s; -webkit-transition: -webkit-transform 0.6s, opacity 0.2s; }
.nectar-icon-list[data-animate="true"]:after { transform: scale(1,0) translateZ(0); -webkit-transform: scale(1,0) translateZ(0); -ms-transform: scale(1,0) translateZ(0); transform-origin: top; -webkit-transform-origin: top; -webkit-backface-visibility: hidden; }
.nectar-icon-list[data-animate="true"].completed:after { transform: scale(1,1) translateZ(0); -webkit-transform: scale(1,1) translateZ(0); -ms-transform: scale(1,1) translateZ(0); transition: transform 1.9s cubic-bezier(0.18, 1, 0.32, 1); -webkit-transition: -webkit-transform 1.9s cubic-bezier(0.18, 1, 0.32, 1); }
.nectar-icon-list[data-animate="true"] .content { opacity: 0; transform: translateX(60px) translateZ(0); -webkit-transform: translateX(60px) translateZ(0); -ms-transform: translateX(60px) translateZ(0); -webkit-backface-visibility: hidden; }
.nectar-icon-list[data-animate="true"] .nectar-icon-list-item.animated .content { opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0); -webkit-transform: translateX(0px) translateY(0px) translateZ(0); -ms-transform: translateX(0px) translateY(0px) translateZ(0); transition: transform .7s cubic-bezier(0.165, 0.84, 0.44, 1) 0.2s, opacity .7s cubic-bezier(0.165, 0.84, 0.44, 1) 0.2s; -webkit-transition: -webkit-transform .7s cubic-bezier(0.165, 0.84, 0.44, 1) 0.2s, opacity .7s cubic-bezier(0.165, 0.84, 0.44, 1) 0.2s; }


/***************** Morphing outline ****************/

.morphing-outline {
	visibility: visible;
	padding: 90px 50px;
	text-align: center;
}

.morphing-outline .inner {
  -webkit-transition: color .35s cubic-bezier(.65,0,.35,1);
  -moz-transition: color .35s cubic-bezier(.65,0,.35,1);
  -o-transition: color .35s cubic-bezier(.65,0,.35,1);
  transition: color .35s cubic-bezier(.65,0,.35,1);
  position: relative;
  display: inline-block;
  line-height: 1;
  z-index: 1;
  -webkit-perspective: 1000;
  text-align: center;
}

.morphing-outline .inner p {
	padding-bottom: 10px;
}

body .wpb_column:hover > .wpb_wrapper > .morphing-outline .inner > * {
	transform: scale(1.11);
	-webkit-transform: scale(1.11);
	-moz-transform: scale(1.11);
	will-change: transform;
}

body .wpb_column > .wpb_wrapper > .morphing-outline .inner > h5 {
	transform: scale(0.68);
	-webkit-transform: scale(0.68);
	-moz-transform: scale(0.68);
}

body .wpb_column:hover > .wpb_wrapper > .morphing-outline .inner > h5 {
	transform: scale(0.77);
	-webkit-transform: scale(0.77);
	-moz-transform: scale(0.77);
}
.morphing-outline .inner > * {
	color: #27CFC3;
	-webkit-transition: color .35s cubic-bezier(.65,0,.35,1), transform .35s cubic-bezier(.65,0,.35,1);
   -moz-transition: color .35s cubic-bezier(.65,0,.35,1), transform .35s cubic-bezier(.65,0,.35,1);
   -o-transition: color .35s cubic-bezier(.65,0,.35,1), transform .35s cubic-bezier(.65,0,.35,1);
   transition: color .35s cubic-bezier(.65,0,.35,1), transform .35s cubic-bezier(.65,0,.35,1);
}

.morphing-outline .inner > *:last-child {
	margin-bottom: 0;
	padding-bottom: 0;
}

.morphing-outline .inner:after {
  -webkit-transition: all .35s cubic-bezier(.65,0,.35,1);
  -moz-transition: all .35s cubic-bezier(.65,0,.35,1);
  -o-transition: all .35s cubic-bezier(.65,0,.35,1);
  transition: all .35s cubic-bezier(.65,0,.35,1);
  height: 100%;
  width: 100%;
  position: absolute;
  left: -62px;
  top: -92px;
  padding: 80px 50px;
  z-index: -1;
  border-width: 12px;
  border-style: solid;
  border-color: #27CFC3;
  display: block;
  content: '';
  border-radius: 50%;
}

body[data-button-style="default"] .wpb_column > .wpb_wrapper > .morphing-outline .inner:after,
body[data-button-style="default"] .wpb_column > .vc_column-inner > .wpb_wrapper > .morphing-outline .inner:after {
	border-radius: 0%;
}

body[data-button-style="default"] .wpb_column:hover > .wpb_wrapper > .morphing-outline .inner:after,
body[data-button-style="default"] .wpb_column:hover > .vc_column-inner > .wpb_wrapper > .morphing-outline .inner:after {
	border-radius: 50%;
}

.wpb_column:hover > .wpb_wrapper > .morphing-outline .inner:after,
.wpb_column:hover > .vc_column-inner > .wpb_wrapper > .morphing-outline .inner:after  {
  border-radius: 0%;
  border-color: #fff;
  will-change: border-radius;
}

.wpb_column:hover > .wpb_wrapper > .morphing-outline .inner > *,
.wpb_column:hover  > .vc_column-inner > .wpb_wrapper > .morphing-outline .inner > * {
	color: #ffffff;
}


/***************** Split Heading ****************/
.nectar-split-heading .heading-line {
	display: block;
	overflow: hidden;
	position: relative;
}
.nectar-split-heading .heading-line > div {
	display: block;
	transform: translateY(200%);
	-webkit-transform: translateY(200%);
}

@media only screen and (max-width: 1000px) {
	.nectar-split-heading .heading-line > div {
		transform: none!important;
		-webkit-transform: none!important;
	}
}


/***************** Bar graph ******************/

.nectar-progress-bar { margin-bottom: 0px!important; }

.nectar-progress-bar .bar-wrap {
	margin-bottom: 13px;
	background-color: #e4e4e4;
	border-radius: 300px 300px 300px 300px;
	-webkit-border-radius: 300px 300px 300px 300px;
	-o-border-radius: 300px 300px 300px 300px;
	-moz-border-radius: 300px 300px 300px 300px;
	background-color: #ebebeb;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
}

.nectar-progress-bar span { 
	height: 14px;
	width: 0px;
	display: block;
	background-color: #27CFC3;
	border-radius: 300px 300px 300px 300px;
	-webkit-border-radius: 300px 300px 300px 300px;
	-o-border-radius: 300px 300px 300px 300px;
	-moz-border-radius: 300px 300px 300px 300px;
}

.nectar-progress-bar p {
	padding-bottom: 2px;
}

.nectar-progress-bar span {
	overflow: visible!important;
	position: relative;
}

.nectar-progress-bar span strong {
	position: absolute;
	right: -0px;
	top: -23px;
	line-height: 12px!important;
	font-size: 11px!important;
	opacity: 0;
	display: block;
	font-weight: normal!important;
	font-family: 'Open Sans';
	font-weight: 600;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
}

.nectar-progress-bar span strong i {
	font-style:normal!important;
	font-family: 'Open Sans';
	font-weight: 600;
	letter-spacing: 0!important;
	text-transform: none!important;
}

.nectar-progress-bar .bar-wrap span strong i,
.nectar-progress-bar .bar-wrap span strong {
	font-size: 11px!important;
	line-height: 12px!important;
}



.nectar-progress-bar span strong.full:after {
	left: 15px;
}

.nectar-progress-bar span strong.full {
	width: 43px;
	text-align: right;
}


body .vc_pie_chart .vc_pie_chart_value {
	font-size: 42px;
	font-family: 'Open Sans';
	font-weight: 300;
}

body .vc_pie_chart .wpb_pie_chart_heading {
	font-family: 'Open Sans';
	font-weight: 700;
	text-transform: uppercase;
	font-size: 12px;
	margin-top: 12px;
	margin-bottom: 0px;
    letter-spacing: 2px;
}

body .vc_pie_chart_back {
	border-width: 7px;
	opacity: 0;
}

/***************** Testimonial Slider ******************/

.col.testimonial_slider { float: none; }
.testimonial_slider {
	float: none;
	opacity: 0;
	margin-bottom: 21px;
}

html:not(.js) .testimonial_slider {
	opacity: 1;
	height: auto;
}

.testimonial_slider:not([data-style="multiple_visible"]) blockquote {
	padding-left: 0px;
	text-align: center;
	color: rgba(0,0,0,1);
	background-image: none;
	font-size: 22px;
	width: 100%;
	margin: 0 auto;
	opacity: 0;
	position: absolute;
}

.testimonial_slider[data-style="multiple_visible"] blockquote {
	float: left;
}

.testimonial_slider blockquote p {
	padding-bottom: 30px;
}

.testimonial_slider .controls ul {
	margin: 0px!important;
	display: block;
	text-align: center;
	width: 100%;
}

.testimonial_slider .controls ul li {
	list-style: none!important;
	cursor: pointer;
	display: inline;
}

.testimonial_slider .controls ul li span.pagination-switch {
	background-color: rgba(0, 0, 0, 0);
    border: 1px solid #333;
    border-radius: 10px 10px 10px 10px;
    cursor: pointer;
    display: inline-block;
    height: 10px;
    margin: 0 4px;
    transition: background-color 0.2s linear 0s, border-color 0.2s linear 0s;
    width: 10px;
}

.testimonial_slider .controls ul li span.pagination-switch:hover, .testimonial_slider .controls ul li span.pagination-switch.active {
	background-color: #333;
}

.testimonial_slider .controls {
	position: absolute;
	bottom: -22px;
	z-index: 30;
	width: 100%;
	text-align: center;
}

.testimonial_slider .slides {
	overflow: hidden;
	position: relative;
}

body .testimonial_slider blockquote span {
	font-size: 16px;
	display: block;
	line-height: 22px;
}

.testimonial_slider blockquote span.title {
	color: rgba(0,0,0,.5);
}

.testimonial_slider:not([data-style="minimal"]) blockquote span.title {
	font-size: 12px!important;
}
.testimonial_slider[data-style="minimal"] blockquote span.title {
	font-size: 12px;
	font-style: italic;
}

.testimonial_slider[data-style="minimal"] blockquote span:not(.title) {
	-webkit-transform: scale(0.8);
	transform: scale(0.8);
	margin-bottom: -4px;
}

.testimonial_slider[data-style="multiple_visible"] blockquote span.title {
	font-size: 14px!important;
}

.light .testimonial_slider blockquote {
	color: rgba(255,255,255,0.95);
}

.light .testimonial_slider blockquote span.title,
.testimonial_slider[data-style="multiple_visible"][data-color*="-light"] blockquote span.title {
	color: rgba(255,255,255,0.45);
}

.flickity-page-dots .dot:before {
	transition: all 0.1s linear;
}

.light h1, .light h2, .light h3, .light h4, .light h5, .light h6, .light p {
	color: #fff;
}

.testimonial_slider .controls ul li i {
	color: #444444;
}
.light .testimonial_slider .controls ul li span {
	border-color: #fff;
}

.light .testimonial_slider .controls ul li span:hover, .light .testimonial_slider .controls ul li span.pagination-switch.active {
	background-color: #fff!important;
}

.testimonial_slider .image-icon {
    font-family: Georgia,serif!important;
    font-size: 50px;
    text-align: center;
    display: inline-block;
    border-radius: 100px;
    width: 50px;
    height: 50px;
    margin-bottom: 33px;
    line-height: 70px;
    background-size: cover;
    border: 2px solid rgba(0,0,0,0.13);
}

.light .testimonial_slider .image-icon {
	border-color: rgba(255,255,255,0.4);
}

.testimonial_slider .image-icon.has-bg {
	width: 50px;
    height: 50px;
    border: none;
    text-indent: -9999px;
}

.full-width-content .testimonial_slider[data-style="multiple_visible"] .slides {
	overflow: visible;
}

.testimonial_slider[data-style="multiple_visible"] blockquote {
	text-align: center;
	padding: 15px;
	width: 33%;
	opacity: 0.3;
	transition: opacity 0.2s ease;
}

@media only screen and (min-width: 1300px) {
	.testimonial_slider[data-style="multiple_visible"] blockquote {
		width: 33%;
	}
}
@media only screen and (min-width: 1000px) and (max-width: 1300px) {
	.testimonial_slider[data-style="multiple_visible"] blockquote {
		width: 50%;
	}
}
@media only screen and (min-width: 690px) and (max-width: 1000px) {
	.testimonial_slider[data-style="multiple_visible"] blockquote {
		width: 60%;
	}
}
@media only screen and (max-width: 690px) {
	.testimonial_slider[data-style="multiple_visible"] blockquote {
		width: 85%;
	}
}

.testimonial_slider[data-style="multiple_visible"] blockquote p {
	text-align: left;
	padding: 50px 50px 50px 100px;
	border-radius: 10px;
	margin-bottom: 40px;
	transition: background-color 0.2s ease;
	-webkit-transition: background-color 0.2s ease;
	quotes: "\201C" "\201D";
	position: relative;
}

.testimonial_slider blockquote p .bottom-arrow {
	display: none;
}

.testimonial_slider[data-style="multiple_visible"] blockquote p .bottom-arrow {
	position: absolute;
    width:28px;
    height:28px;
    display: block;
    border-radius: 5px;
    overflow:hidden;
    transform:rotate(-135deg);
    -ms-transform:rotate(-135deg);
    -webkit-transform:rotate(-135deg);
    top: 100%;
    left: 50%;
    margin-left: -20px;
    margin-top: -19px;
    opacity: 0;
    transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
}

.testimonial_slider[data-style="multiple_visible"] blockquote p .bottom-arrow:after {
    content:"";
    position:absolute;
    top:0;
    left:0;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 22px 22px 0 0;
    border-right-color: transparent!important;
    border-bottom-color: transparent!important;
    border-left-color: transparent!important;
    border-color: rgba(255,255,255,0.4) transparent transparent transparent;
}

.light .testimonial_slider[data-style="multiple_visible"] blockquote p .bottom-arrow:after {
	border-color: rgba(0,0,0,0.2) transparent transparent transparent;
}

.testimonial_slider[data-style="multiple_visible"] blockquote p:before {
	font-family: sans-serif;
    content: open-quote;
    font-size: 130px;
    position: absolute;
    left: 29px;
    top: 50px;
    opacity: 0.4;
    line-height: 115px;
}

.span_12.light .flickity-page-dots .dot:before,
.testimonial_slider[data-style="multiple_visible"][data-color*="-light"] .flickity-page-dots .dot:before  {
	background-color: #fff;
}

.testimonial_slider[data-style="multiple_visible"][data-color*="-light"] blockquote {
	color: #fff;
}

.testimonial_slider[data-style="multiple_visible"] blockquote.is-selected p {
	background-color: rgba(0,0,0,0.2);
}

.dark .testimonial_slider[data-style="multiple_visible"] blockquote.is-selected p {
	background-color: rgba(255,255,255,0.4);
}

.testimonial_slider[data-style="multiple_visible"][data-color*="-color"] blockquote.is-selected p {
	color: #fff;
}

.testimonial_slider[data-style="multiple_visible"][data-color*="-color"] blockquote.is-selected p:before {
	color: rgba(0,0,0,0.27);
}
.testimonial_slider[data-style="multiple_visible"][data-color*="-color"] blockquote p:after,
.dark .testimonial_slider[data-style="multiple_visible"] blockquote.is-selected p:after {
	border-color: rgba(255,255,255,0.4);
}

.testimonial_slider[data-style="multiple_visible"] blockquote.is-selected,
.testimonial_slider[data-style="multiple_visible"] blockquote.is-selected p .bottom-arrow {
	opacity: 1;
}

.testimonial_slider[data-style="multiple_visible"] .image-icon:not(.has-bg) {
	display: none;
}

.testimonial_slider[data-style="multiple_visible"] .image-icon {
	width: 70px;
    height: 70px;
    margin-bottom: 17px;
    position: relative;
}


.toggles .testimonial_slider, .full-width-content .testimonial_slider {
    padding-bottom: 20px!important;
}

.toggles .testimonial_slider .controls, .full-width-content .testimonial_slider .controls {
   bottom: 2px!important;
}

.testimonial_slider[data-style="minimal"] .slides {
	max-width: 70%;
	margin: 0 auto;
}

.testimonial_slider[data-style="minimal"] blockquote {
	padding: 0 25px;
	-ms-transition: transform 0.5s, opacity 0.5s;
	transition: transform 0.5s, opacity 0.5s;
	-webkit-transition: transform 0.5s, opacity 0.5s;
}
.testimonial_slider[data-style="default"] blockquote {
	-ms-transition: transform 0.5s, opacity 0.5s;
	transition: transform 0.5s, opacity 0.5s;
	-webkit-transition: transform 0.5s, opacity 0.5s;
}

.testimonial_slider[data-style="minimal"] blockquote.no-trans,
.testimonial_slider[data-style="default"] blockquote.no-trans {
	-ms-transition: none;
	transition: none;
	-webkit-transition: none;
}

.testimonial_slider[data-style="minimal"] .control-wrap {
	width: 20px;
	line-height: 20px;
	overflow: hidden;
	display: inline-block;
	vertical-align: top;
}

.testimonial_slider[data-style="minimal"] .controls .out-of, .testimonial_slider[data-style="minimal"] .controls .total {
	display: inline-block;
	font-size: 16px;
    line-height: 20px;
	color: #000;
	vertical-align: top;
}
.testimonial_slider[data-style="minimal"] .control-wrap { font-size: 16px;}
.testimonial_slider[data-style="minimal"] .controls .out-of, .testimonial_slider[data-style="minimal"] .controls .total {
	width: 20px;
	text-align:center;
}
.testimonial_slider[data-style="minimal"] .controls .out-of {
	width: 13px;
	top: -1px;
	position: relative;
}

.testimonial_slider[data-style="minimal"] .control-wrap ul {
	width: auto;
	-ms-transition: transform 0.33s;
	-webkit-transition: transform 0.33s;
	transition: transform 0.33s;
}
.testimonial_slider[data-style="minimal"] .control-wrap ul li {
	color: #000;
    display: block;
    float: left;
    width: 20px;
    font-size: 16px;
    line-height: 20px;
    cursor: auto;
}

.testimonial_slider[data-style="minimal"] .controls {
	vertical-align:top;
}

.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev {
	position: absolute;
	top: 50%;
	height: 40px;
	width: 40px;
	font-size: 28px;
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	margin-top: -40px;
	left: 7.5%;
	margin-left: -8px;
}
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next {
	position: absolute;
	top: 50%;
	height: 40px;
	margin-top: -40px;
	font-size: 28px;
	width: 40px;
	margin-right: -8px;
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	right: 7.5%;
}

.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:before,
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:before {
	display: block;
	position: absolute;
	left: 0;
	top:0;
}

.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:after,
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:after {
	backface-visibility: hidden;
    display: block;
    content: ' ';
    z-index: 100;
    position: absolute;
    width: 22px;
    height: 2px;
    background-color: #000;
    top: 48%;
    opacity: 0;
    right: 11px;
    cursor: pointer;
    -ms-transform: translateY(-50%) scaleX(0) translateZ(0);
    transform: translateY(-50%) scaleX(0) translateZ(0);
    -webkit-transform: translateY(-50%) scaleX(0) translateZ(0);
    transition: opacity .5s cubic-bezier(.2,1,.2,1), transform .5s cubic-bezier(.2,1,.2,1));
    -webkit-transition: opacity .5s cubic-bezier(.2,1,.2,1), -webkit-transform .5s cubic-bezier(.2,1,.2,1);
}


.span_12.light .testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:after,
.span_12.light .testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:after {
	background-color: #fff;
}
.span_12.light .testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:before,
.span_12.light .testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:before,
.span_12.light .testimonial_slider[data-style="minimal"] .controls .out-of,
.span_12.light .testimonial_slider[data-style="minimal"] .controls .total,
.span_12.light .testimonial_slider[data-style="minimal"] .controls .control-wrap ul li {
	color: #fff;
}

.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:after { right: 8px; }

.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:hover:after,
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:hover:after {
	opacity: 1;
	-ms-transform: translateY(-50%) scaleX(1) translateZ(0);
	 transform: translateY(-50%) scaleX(1) translateZ(0);
    -webkit-transform: translateY(-50%) scaleX(1) translateZ(0);
}
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:hover:before {
	-ms-transform:  translateX(10px);
	-webkit-transform: translateX(10px);
	transform:  translateX(10px);
}
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:hover:before {
	-ms-transform: translateX(-10px);
	-webkit-transform: translateX(-10px);
	transform: translateX(-10px);
}

.testimonial_slider[data-style="minimal"] .testimonial-next-prev svg { position: absolute; left: -2px; top: -2px; }
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:before { left: -1px; position: relative; }
.testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:before { right: -1px; position: relative; }

.testimonial_slider[data-style="minimal"] .testimonial-next-prev .prev:before, .testimonial_slider[data-style="minimal"] .testimonial-next-prev .next:before {
	line-height: 36px;
	color: #000;
	-ms--webkit-transition: -webkit-transform .5s cubic-bezier(.2,1,.2,1);
	transition: transform .5s cubic-bezier(.2,1,.2,1);
    -webkit-transition: -webkit-transform .5s cubic-bezier(.2,1,.2,1);
}


/***************** Tabbed ******************/

.tabbed > ul {
	margin-left: 0px;
	margin-bottom: 17px!important; 
}

.tabbed > ul li {
	float: left;
	position: relative;
	list-style: none; 
	margin: 0px!important;
}

.tabbed > ul:after {
	content: ""; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden; 
}

.tabbed > ul li a {
	display: block;
	color: #888;
	position: relative;
	background-color: rgba(0,0,0,0.045);
	padding: 8px 15px;
	transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	border-left: 0px!Important;
	border-right: 1px solid rgba(0,0,0,0.06)!important;
}

.tabbed > ul li:hover, .wpb_content_element .wpb_tabs_nav li {
	background-color: transparent!important;
}

.tabbed .clear {
	display: block!important;
	padding-bottom: 0px;
}

.tabbed > ul li a:hover {
	background-color: rgba(0,0,0,0.035);
}

.tabbed > ul li:last-child a {
	border-color: transparent!important;
}

.tabbed > ul li a.active-tab {
	color: #fff;
	border-color: #27CFC3!important;
	background-color: #27CFC3;
}

.light .tabbed > ul li:last-child a, .light  .tabbed > ul li a {
	border-color: rgba(0,0,0,0.2)!important;
}

.light .tabbed > ul li a {
	background-color: rgba(0,0,0,0.15)!important;
}

.tabbed .wpb_tab {
	opacity: 0;
}

body .tabbed div {
	padding: 0px;
	margin-bottom: 0px;
	background-color: transparent;
}
body .wpb_content_element .wpb_tour_tabs_wrapper .wpb_tab {
	padding: 0px;
	background-color: transparent!important;
}

.tabbed .wpb_tab {
	position: absolute;
}
.tabbed > div:first-of-type {
	position: relative;
}

.tabbed div.wp-video .mejs-mediaelement {
	position: absolute;
}

.tabbed div.wp-video .mejs-inner {
	position: static;
}

.wpb_tabs_nav li.cta-button {
	position: absolute;
	right: 0;
	top: 0;
}
.tabbed[data-alignment="right"] .wpb_tabs_nav li.cta-button {
	left: 0;
	right: auto;
}
.wpb_tabs_nav li.cta-button a {
	visibility: visible;
	margin-bottom: 0!important;
}

.wpb_tabs_nav li.cta-button a:after {
	display: none!important;
}

.tabbed[data-alignment="center"] .wpb_tabs_nav li,
.tabbed[data-alignment="right"] .wpb_tabs_nav li {
	float: none;
	display: inline-block;
}
.tabbed[data-alignment="center"] .wpb_tabs_nav {
	text-align: center;
}
.tabbed[data-alignment="right"] .wpb_tabs_nav {
	text-align: right;
}

.tabbed[data-style="minimal"] .wpb_tabs_nav {
	border-bottom: 1px solid #e1e1e1;
	line-height: 0px;
	margin-bottom: 65px!important;
	position: relative;
}

.tabbed[data-style="minimal"] > ul li:not(.cta-button) a, .tabbed[data-style="minimal"] > ul li:not(.cta-button) a.active-tab{
	background-color: transparent!important;
	border-right: none!important;
	position: relative;
	color: inherit!important;
	z-index: 10;
	padding: 18px 17px;
	line-height: 32px;
	margin-bottom: -1px;
	overflow-y: hidden;
	 transition: all 0.3s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.3s cubic-bezier(0.12, 0.75, 0.4, 1);
}

.tabbed[data-style="minimal"] > ul li a:hover {
	opacity: 0.7;
}

.tabbed[data-style="minimal"] > ul li a:after {
    height: 4px;
    width: 100%;
    content: ' ';
    background-color: #000;
    display: block;
    position: absolute;
   	bottom: -4px;
    left: 0;
    z-index: 10;
    transition: transform 0.3s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: -webkit-transform 0.3s cubic-bezier(0.12, 0.75, 0.4, 1);
}

.tabbed[data-style="minimal"] > ul li a.active-tab {
	opacity: 1;
}
.tabbed[data-style="minimal"] > ul li a.active-tab:after {
	transform: translateY(-3px);
}

.tabbed[data-style="vertical"] .wpb_tabs_nav {
	width: 20%;
	float: left;
}
.tabbed[data-style="vertical"] > div {
	float: left;
	width: 80%;
	padding-left: 40px;
}
.tabbed[data-style="vertical"] .wpb_tabs_nav li {
	float: none;
}
.tabbed[data-style="vertical"] .wpb_tabs_nav li a {
	border-right: none!important;
}

/***************** Image with animation / Col animation ******************/

img.img-with-animation, .col.has-animation, .wpb_column.has-animation, .nectar_cascading_images .cascading-image .inner-wrap  {
	opacity: 0;
	position: relative;
}

.wpb_column.has-animation[data-animation*="reveal"] {
	opacity: 1;
}

img.img-with-animation[data-animation="grow-in"].full-opacity {
	opacity: 1;
}

html:not(.js) img.img-with-animation, html:not(.js) .col.has-animation, html:not(.js) .wpb_column.has-animation  {
	opacity: 1;
}

img.img-with-animation[data-animation="none"], .nectar_cascading_images .cascading-image[data-animation="none"] .inner-wrap  {
	opacity: 1;
}

img.img-with-animation[data-animation="grow-in"], .col.has-animation[data-animation="grow-in"], .wpb_column.has-animation[data-animation="grow-in"] {
	opacity: 0;
    transform: scale(0.75);
    -webkit-transform: scale(0.75);
    -o-transform: scale(0.75);
    -moz-transform: scale(0.75);
    transition: opacity 0.6s cubic-bezier(0.15, 0.84, 0.35, 1.25), background-color 0.35s cubic-bezier(.65,0,.35,1);
    -webkit-transition: opacity 0.6s cubic-bezier(0.15, 0.84, 0.35, 1.25), background-color 0.35s cubic-bezier(.65,0,.35,1);
    -moz-transition: opacity 0.6s cubic-bezier(0.15, 0.84, 0.35, 1.25), background-color 0.35s cubic-bezier(.65,0,.35,1);
    -o-transition: opacity 0.6s cubic-bezier(0.15, 0.84, 0.35, 1.25), background-color 0.35s cubic-bezier(.65,0,.35,1);
    -webkit-backface-visibility: hidden;
}
.nectar_cascading_images .cascading-image[data-animation="grow-in"] .inner-wrap {
	 transform: scale(0.75);
    -webkit-transform: scale(0.75);
    -o-transform: scale(0.75);
    -moz-transform: scale(0.75);
}

img.img-with-animation[data-animation="flip-in"], .col.has-animation[data-animation="flip-in"], .wpb_column.has-animation[data-animation="flip-in"] {
	opacity: 0;
    transform:  rotateY(25deg);
    -webkit-transform: rotateY(25deg);
    -o-webkit-transform: rotateY(25deg);
    -moz-webkit-transform: rotateY(25deg);
    transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
    -webkit-transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
    -moz-transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
    -o-transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
}
 .nectar_cascading_images .cascading-image[data-animation="flip-in"] .inner-wrap {
 	transform:  rotateY(25deg);
    -webkit-transform: rotateY(25deg);
    -o-webkit-transform: rotateY(25deg);
    -moz-webkit-transform: rotateY(25deg);
 }

.flip-in-vertical-wrap {
    -webkit-perspective: 2000px;
    perspective: 2000px;
}

 img.img-with-animation[data-animation="flip-in-vertical"], .col.has-animation[data-animation="flip-in-vertical"], .wpb_column.has-animation[data-animation="flip-in-vertical"] {
	opacity: 0;
    transform:  rotateX(-45deg) translateY(120px);
    -webkit-transform: rotateX(-45deg) translateY(120px);
    -o-webkit-transform: rotateX(-45deg) translateY(120px);
    -moz-webkit-transform: rotateX(-45deg) translateY(120px);
    transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
    -webkit-transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
    -moz-transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
    -o-transition: opacity 1s ease, background-color 0.35s cubic-bezier(.65,0,.35,1);
}


img.img-with-animation[data-shadow="small_depth"], .nectar_cascading_images .cascading-image[data-shadow="small_depth"] .img-wrap, .nectar_cascading_images .cascading-image[data-shadow="small_depth"] .bg-color, .nectar-video-box[data-shadow="small_depth"], .nectar-flickity[data-shadow="small_depth"] div.cell {
	box-shadow: 0 10px 50px rgba(0,0,0,0.08), 0 13px 45px rgba(0,0,0,0.08);
}
img.img-with-animation[data-shadow="medium_depth"], .nectar_cascading_images .cascading-image[data-shadow="medium_depth"] .img-wrap, .nectar_cascading_images .cascading-image[data-shadow="medium_depth"] .bg-color, .nectar-video-box[data-shadow="medium_depth"], .nectar-flickity[data-shadow="medium_depth"] div.cell {
	box-shadow: 0 30px 80px rgba(0,0,0,0.14), 0 20px 70px rgba(0,0,0,0.12);
}
img.img-with-animation[data-shadow="large_depth"], .nectar_cascading_images .cascading-image[data-shadow="large_depth"] .img-wrap, .nectar_cascading_images .cascading-image[data-shadow="large_depth"] .bg-color, .nectar-video-box[data-shadow="large_depth"] {
	box-shadow: 0 40px 100px rgba(0,0,0,0.15), 0 25px 80px rgba(0,0,0,0.1);
}

.nectar-flickity[data-shadow="large_depth"] div.cell {
	box-shadow: 0 35px 55px rgba(0,0,0,0.08), 0 25px 63px rgba(0,0,0,0.08);
}

img.img-with-animation[data-shadow="x_large_depth"], .nectar_cascading_images .cascading-image[data-shadow="x_large_depth"] .img-wrap, 
.nectar_cascading_images .cascading-image[data-shadow="x_large_depth"] .bg-color, .nectar-video-box[data-shadow="x_large_depth"], .nectar-flickity[data-shadow="x_large_depth"] div.cell {
	box-shadow: 0 60px 135px rgba(0,0,0,0.16), 0 15px 75px rgba(0,0,0,0.18);
}

img.img-with-animation[data-animation="fade-in-from-left"] {
	transform: translateX(-75px);
	-webkit-transform: translateX(-75px);
	-moz-transform: translateX(-75px);
	padding-right: 30px;
}

.col.has-animation[data-animation="fade-in-from-left"], .wpb_column.has-animation[data-animation="fade-in-from-left"]  {
	transform: translateX(-45px);
	-webkit-transform: translateX(-45px);
	-moz-transform: translateX(-45px);
}
.nectar_cascading_images .cascading-image[data-animation="fade-in-from-left"] .inner-wrap {
	transform: translateX(-60px);
	-webkit-transform: translateX(-60px);
	-moz-transform: translateX(-60px);
}

img.img-with-animation[data-animation="fade-in-from-right"] {
	transform: translateX(75px);
	-webkit-transform: translateX(75px);
	-moz-transform: translateX(75px);
	padding-left: 30px;
}

.col.has-animation[data-animation="fade-in-from-right"], .wpb_column.has-animation[data-animation="fade-in-from-right"]  {
	transform: translateX(45px);
	-webkit-transform: translateX(45px);
	-moz-transform: translateX(45px);
}
.nectar_cascading_images .cascading-image[data-animation="fade-in-from-right"] .inner-wrap  {
	transform: translateX(60px);
	-webkit-transform: translateX(60px);
	-moz-transform: translateX(60px);
}

img.img-with-animation[data-animation="fade-in-from-bottom"] {
	transform: translateY(100px);
	-webkit-transform: translateY(100px);
	-moz-transform: translateY(100px);
}

.col.has-animation[data-animation="fade-in-from-bottom"], .wpb_column.has-animation[data-animation="fade-in-from-bottom"] {
 	transform: translateY(50px);
 	-webkit-transform: translateY(50px);
 	-moz-transform: translateY(50px);
}
.nectar_cascading_images .cascading-image[data-animation="fade-in-from-bottom"] .inner-wrap  {
 	transform: translateY(60px);
 	-webkit-transform: translateY(60px);
 	-moz-transform: translateY(60px);
}
img.img-with-animation[data-animation="fade-in-from-left"], img.img-with-animation[data-animation="fade-in-from-right"] {
	margin: 0 auto;
}

.img-with-aniamtion-wrap {
	line-height: 0;
	margin-bottom: 0!important;
}

.center img.img-with-animation {
	margin: 0 auto;
	display: block;
}

.right.img-with-aniamtion-wrap {
	text-align: right;
}

.right.img-with-aniamtion-wrap img {
	display: inline-block;
}

.right.img-with-aniamtion-wrap[data-max-width="125%"] img, .right.img-with-aniamtion-wrap[data-max-width="150%"] img, .right.img-with-aniamtion-wrap[data-max-width="175%"] img,
.right.img-with-aniamtion-wrap[data-max-width="200%"] img, .right.img-with-aniamtion-wrap[data-max-width="225%"] img, .right.img-with-aniamtion-wrap[data-max-width="250%"] img {
	display: block;
}

.wpb_column.has-animation[data-animation*="reveal"] {
	overflow: hidden;
}

.wpb_column.has-animation[data-animation*="reveal"] .column-inner-wrap {
	overflow: hidden;
	height: 100%;
	width: 100%;
}

.img-with-aniamtion-wrap[data-max-width="125%"] .inner { width: 125%; display: block; }
.img-with-aniamtion-wrap[data-max-width="150%"] .inner { width: 150%; display: block;}
.img-with-aniamtion-wrap[data-max-width="165%"] .inner { width: 165%; display: block;}
.img-with-aniamtion-wrap[data-max-width="175%"] .inner { width: 175%; display: block;}
.img-with-aniamtion-wrap[data-max-width="200%"] .inner { width: 200%; display: block;}
.img-with-aniamtion-wrap[data-max-width="225%"] .inner { width: 225%; display: block;}
.img-with-aniamtion-wrap[data-max-width="250%"] .inner { width: 250%; display: block;}

.img-with-aniamtion-wrap[data-max-width="125%"].center .inner { margin-left: -12.5%; }
.img-with-aniamtion-wrap[data-max-width="150%"].center .inner { margin-left: -25%; }
.img-with-aniamtion-wrap[data-max-width="165%"].center .inner { margin-left: -32.5%; }
.img-with-aniamtion-wrap[data-max-width="175%"].center .inner { margin-left: -37.5%; }
.img-with-aniamtion-wrap[data-max-width="200%"].center .inner { margin-left: -50%; }
.img-with-aniamtion-wrap[data-max-width="225%"].center .inner { margin-left: -62.5%; }
.img-with-aniamtion-wrap[data-max-width="250%"].center .inner { margin-left: -75%; }

.img-with-aniamtion-wrap.right[data-max-width="125%"] .inner {  margin-left: -25%; }
.img-with-aniamtion-wrap.right[data-max-width="150%"] .inner { margin-left: -50%; }
.img-with-aniamtion-wrap.right[data-max-width="165%"] .inner { margin-left: -65%; }
.img-with-aniamtion-wrap.right[data-max-width="175%"] .inner { margin-left: -75%; }
.img-with-aniamtion-wrap.right[data-max-width="200%"] .inner {  margin-left: -100%; }
.img-with-aniamtion-wrap.right[data-max-width="225%"] .inner { margin-left: -125%; }
.img-with-aniamtion-wrap.right[data-max-width="250%"] .inner { margin-left: -150%; }

.img-with-aniamtion-wrap[data-max-width="125%"] img, .img-with-aniamtion-wrap[data-max-width="150%"] img, .img-with-aniamtion-wrap[data-max-width="175%"] img,
.img-with-aniamtion-wrap[data-max-width="200%"] img, .img-with-aniamtion-wrap[data-max-width="225%"] img, .img-with-aniamtion-wrap[data-max-width="250%"] img {
	max-width: 100%;
}

.wpb_column.has-animation[data-animation*="reveal"] .column-inner-wrap.no-transform,
.wpb_column.has-animation[data-animation*="reveal"] .column-inner-wrap.no-transform .column-inner {
	transform: none;
	-webkit-transform: none;
}

.wpb_column .column-inner[data-bg-cover="true"], .wpb_column[data-bg-cover="true"] {
	background-size: cover;
	background-position: center;
}

@media only screen and (min-width: 1000px) {
.wpb_column.has-animation[data-animation="reveal-from-bottom"] .column-inner-wrap {
	transform: translateY(100%);
	-webkit-transform: translateY(100%);
}

.wpb_column.has-animation[data-animation="reveal-from-bottom"] .column-inner {
	transform: translateY(-90%);
	-webkit-transform: translateY(-90%);
}

.wpb_column.has-animation[data-animation="reveal-from-top"] .column-inner-wrap {
	transform: translateY(-100%);
	-webkit-transform: translateY(-100%);
}

.wpb_column.has-animation[data-animation="reveal-from-top"] .column-inner {
	transform: translateY(90%);
	-webkit-transform: translateY(90%);
}

.wpb_column.has-animation[data-animation="reveal-from-left"] .column-inner-wrap {
	transform: translateX(-100%);
	-webkit-transform: translateX(-100%);
}

.wpb_column.has-animation[data-animation="reveal-from-left"] .column-inner {
	transform: translateX(90%);
	-webkit-transform: translateX(90%);
}

.wpb_column.has-animation[data-animation="reveal-from-right"] .column-inner-wrap {
	transform: translateX(100%);
	-webkit-transform: translateX(100%);
}

.wpb_column.has-animation[data-animation="reveal-from-right"] .column-inner {
	transform: translateX(-90%);
	-webkit-transform: translateX(-90%);
}
}


#nectar_fullscreen_rows #footer-outer img.img-with-animation, 
#nectar_fullscreen_rows #footer-outer .col.has-animation, 
#nectar_fullscreen_rows #footer-outer .wpb_column.has-animation,
#nectar_fullscreen_rows #footer-outer .nectar-milestone:not(.animated-in),
#nectar_fullscreen_rows #footer-outer .clients.fade-in-animation > div {
	opacity: 1!important;
	transform: none!important;
	-webkit-transform: none!important;
}

/***************** Cascading images ******************/
.nectar_cascading_images {
	position: relative;
	display: block;
}
.nectar_cascading_images .cascading-image img, .nectar_cascading_images .cascading-image .img-wrap {
	display: block;
	margin-bottom: 0;
	line-height: 0;
}

.nectar_cascading_images .cascading-image img {
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
}

.nectar_cascading_images .cascading-image .img-wrap {
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
	display: inline-block;
}
.nectar_cascading_images .cascading-image, .nectar_cascading_images .cascading-image .inner-wrap {
	display: inline-block;
	width: 100%;
	text-align: center;
}
.nectar_cascading_images .cascading-image:not(:first-child) {
	position: absolute;
	top: 50%;
	left: 50%;
	-ms-transform: translateY(-50%) translateX(-50%);
	-webkit-transform: translateY(-50%) translateX(-50%);
	transform: translateY(-50%) translateX(-50%);
}

.nectar_cascading_images.animated-in .cascading-image .inner-wrap {
	-ms-transition: transform 0.6s cubic-bezier(.3,0.95,.3,0.95), opacity 0.3s ease;
    -webkit-transition: -webkit-transform 0.6s cubic-bezier(.3,0.95,.3,0.95), opacity 0.3s ease;
    transition: transform 0.6s cubic-bezier(.3,0.95,.3,0.95), opacity 0.3s ease;
}


/***************** Toggle ******************/

.toggle {
	margin-bottom: 15px!important;	
}

.toggle.open h3 a {
	color: #fff!important;
	background-color: #27CFC3;
}

.toggle h3 {
	position: relative;
	z-index: 10;
	font-size: 12px;
	margin-bottom: 0px!important;	
}

div[data-style="default"] .toggle h3 a, div[data-style="default"] .toggle h3 {
	font-size: 12px!important;
	line-height: 14px!important;
}
.toggle h3 a {
	display: block;
	color: #888888;
	letter-spacing: 0px;
	font-size: 12px;
	line-height: 14px;
	padding: 14px 14px 16px 43px;
	font-family: 'Open Sans';
	font-weight: 400;
	background-color: rgba(0,0,0,0.045);
	transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
}

.toggle h3 a i {
	position: absolute;
	left: 13px;
	background-color: transparent;
	color: #888888;
	top: 13px;
	width: 18px;
	height: 16px!important;
	line-height: 18px!important;
	font-size: 15px;
	transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
}

.toggle.open h3 a i {
	color: #fff;
}

.toggle h3 a:hover {
	background-color: rgba(0,0,0,0.035);
}

body .toggle > div {
	padding: 10px 14px;
	border-top: 0px;
	display: none;
	background-color: #fff!important;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.toggle > div .wpb_wrapper {
	margin: 0!important;
}

.toggle > div > div:last-child {
	margin-bottom: 0px!important;
}

.light .toggle > div {
	color: #676767!important;
}

body div[data-style="minimal"] .toggle.open h3 a, body div[data-style="minimal"] .toggle h3 a {
	background-color: transparent!important;
}
div[data-style="minimal"] .toggle > div {
	box-shadow: none;
	-webkit-box-shadow: none;
	padding: 0 0 30px 0;
	background-color: transparent!important;
}
div[data-style="minimal"] .toggle i {
	width: 30px;
	height: 30px!important;
	position: absolute;
    right: 0;
    left: auto;
    top: 50%;
    margin-top: -15px;
    border: 2px solid #888888;
    border-radius: 30px 30px;
    -ms-transition: border-color 0.15s ease;
    transition: border-color 0.15s ease;
    -webkit-transition: border-color 0.15s ease;
}

div[data-style="minimal"] .toggle h3 a {
	padding: 30px 70px 30px 0px;
	-ms-transition: color 0.15s ease;
    transition: color 0.15s ease;
    -webkit-transition: color 0.15s ease;
}

div[data-style="minimal"] .toggle {
	border-bottom: 2px solid rgba(0,0,0,0.08);
	-ms-transition: border-color 0.15s ease;
    transition: border-color 0.15s ease;
    -webkit-transition: border-color 0.15s ease;
    margin-bottom: 0!important;
}

div[data-style="minimal"] .toggle i:before {
	content: ' ';
	top: 14px;
    left: 6px;
    margin-top: -2px;
    width: 14px;
    height: 2px;	
    position: absolute;
    background-color: #888888;
    -ms-transition: background-color 0.15s ease;
    transition: background-color 0.15s ease;
    -webkit-transition: background-color 0.15s ease;
}

div[data-style="minimal"] .toggle i:after {
	content: ' ';
	top: 6px;
    left: 14px;
    width: 2px;
    margin-left: -2px;
    height: 14px;	
    position: absolute;
    background-color: #888888;
    -ms-transition: transform 0.45s cubic-bezier(.3,.4,.2,1), background-color 0.15s ease;
    transition: transform 0.45s cubic-bezier(.3,.4,.2,1), background-color 0.15s ease;
    -webkit-transition: -webkit-transform 0.45s cubic-bezier(.3,.4,.2,1), background-color 0.15s ease;
}

.light div[data-style="minimal"] .toggle {
	border-color: rgba(255,255,255,0.2);
}
.light div[data-style="minimal"] .toggle i {
	border-color: #fff;
}
.light div[data-style="minimal"] .toggle i:before,
.light div[data-style="minimal"] .toggle i:after {
	background-color: #fff;
}
.light div[data-style="minimal"] .toggle h3 a {
	color: #fff;
}

div[data-style="minimal"] .toggle.open i:after {
	-ms-transform: scale(1,0);
	transform: scale(1,0);
	-webkit-transform: scale(1,0);
}

/***************** Full Width Section ******************/

.full-width-section {
	background-size: cover;
	-moz-background-size: cover;
	-webkit-background-size: cover;
	box-sizing: content-box!important;
	-moz-box-sizing: content-box!important;
	-webkit-box-sizing: content-box!important;
	margin-left: -50%;
    padding-left: 50%;
    padding-right: 50%;
    width: 100%;
    position: relative;
    z-index: 0;
    visibility: hidden;
}

.full-width-content.parallax_section {
	background-size: cover;
	-moz-background-size: cover;
	-webkit-background-size: cover;
}

.full-width-content.vc_row-fluid .wpb_column {
	background-position: center;
	background-size: cover;
	-moz-background-size: cover;
	-webkit-background-size: cover;
}

.wpb_row {
	position: relative;	
}

.wpb_row .row-bg, .full-width-section .row-bg {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-size: cover;
	-moz-background-size: cover;
	-webkit-background-size: cover;
}

.wpb_row .row-bg-wrap:after {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	content: ' ';
	z-index: 2;
}

.row.right-align-text {
	text-align: right;
}

.wpb_row[data-using-ctc="true"] h1, 
.wpb_row[data-using-ctc="true"] h2,
.wpb_row[data-using-ctc="true"] h3,
.wpb_row[data-using-ctc="true"] h4,
.wpb_row[data-using-ctc="true"] h5,
.wpb_row[data-using-ctc="true"] h6 {
	color: inherit;
}

.wpb_row.full-width-section, .wpb_row.full-width-content {
	margin-bottom: 0px;
}

.wpb_row.full-width-content img, .wpb_row.full-width-content .img-with-aniamtion-wrap {
	margin-bottom: 0;
}

.full-width-content {
	visibility: hidden;
}

.full-width-section.standard_section {
	/*
	-webkit-perspective: 1000;
	-webkit-backface-visibility: hidden;
	*/
}

.full-width-section > .span_12 > div:last-child, .full-width-section > .span_12 .col > div:not(.boxed):last-child {
	padding-bottom: 0px;
}

.full-width-section > .span_12 > div.boxed:not(.padding-2-percent):not(.padding-3-percent):not(.padding-4-percent):not(.padding-5-percent):not(.padding-6-percent):last-child, 
.full-width-section > .span_12 .col > div.boxed:not(.padding-2-percent):not(.padding-3-percent):not(.padding-4-percent):not(.padding-5-percent):not(.padding-6-percent):last-child {
	padding-bottom: 15px!important;
}	

.full-width-section img {
	display: block;
	margin-bottom: 0px!important;
}

html:not(.js) .full-width-section, html:not(.js) .full-width-content {
	visibility: visible;
}

.full-width-section.parallax_section .row-bg, .full-width-content.parallax_section .row-bg {
	background-attachment: fixed;
}

body .full-width-section.parallax_section .row-bg.translate, body .full-width-content.parallax_section .row-bg.translate {
	background-attachment: scroll;
	top: auto;
	bottom: 0;
}

body .full-width-content.parallax_section .row-bg, body .full-width-section.parallax_section .row-bg {
	background-attachment: fixed;
}

.full-width-section.parallax_section .row-bg-wrap, .full-width-content.parallax_section .row-bg-wrap {
	overflow: hidden;
	width: 100.1%;
	height: 100.1%;
	position: absolute;
	z-index: 1;
	top: 0;
	left: 0;
}

.full-width-section.parallax_section .row-bg, .full-width-content.parallax_section .row-bg {
	position: absolute;
	z-index: 1;
	top: 0;
	left: 0;
	background-size: cover;
	-moz-background-size: cover;
	-webkit-background-size: cover;
}

.full-width-section.no-cover .row-bg, .wpb_row .row-bg.no-cover, .full-width-section .row-bg.no-cover { 
	background-size: auto!important;
	-moz-background-size: auto!important;
	-webkit-background-size: auto!important;
}

.full-width-section > .col.span_12 {
	float: none!important;
}

.full-width-section > .col.span_12.light, .full-width-content > .col.span_12.light, .col.span_12.light .wpb_text_column > .wpb_wrapper > ul {
	color: #fff;	
}

.home-wrap .full-width-section.first-section {
	margin-top: -37px!important;
}

.column-link {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: block;
	z-index: 10;
}

.vc_row.vc_row-o-equal-height>.span_12>.vc_column_container>.vc_column-inner {
    width: 100%;
}
.vc_row.vc_row-o-equal-height>.span_12>.wpb_column >.vc_column-inner >.wpb_wrapper {
	min-height: 1px;
}


/***************** Clients ******************/

.clients.two-cols > div { width: 49.4%; }
.clients.two.no-carousel > div { width: 48.4%; }
.clients.two-cols > div:nth-child(2n+2) { margin-right: 0px;}
.clients.carousel.two-cols > div { margin: 0px 10px;}

.clients.three-cols > div { width: 32.6%; }
.clients.three-cols.no-carousel > div { width: 31.6%; }
.clients.three-cols > div:nth-child(3n+3) { margin-right: 0px;}
.clients.carousel.three-cols > div { margin: 0px 10px;}

.clients.four-cols > div { width: 24.2%; }
.clients.four-cols.no-carousel > div { width: 23.2%; }
.clients.four-cols > div:nth-child(4n+4) { margin-right: 0px;}
.clients.carousel.four-cols > div {margin: 0px 10px;}

.clients.five-cols > div { width: 19.2%; }
.clients.five-cols.no-carousel > div { width: 18.2%; }
.clients.five-cols > div:nth-child(5n+5) { margin-right: 0px;}
.clients.carousel.five-cols > div { margin: 0px 10px;}

.clients.six-cols > div { width: 15.8%; }
.clients.six-cols.no-carousel > div { width: 14.8%; }
.clients.six-cols > div:nth-child(6n+6) { margin-right: 0px;}
.clients.carousel.six-cols > div { margin: 0px 10px;}


.clients > div {
	float: left;
	transition: opacity 0.2s linear;
	-moz-transition: opacity 0.2s linear;
	-webkit-transition: opacity 0.2s linear;
	-o-transition: opacity 0.2s linear;
	margin-right: 2%;
	margin-bottom: 2%;
	opacity: 1;
}

.clients.fade-in-animation > div {
	opacity: 0;
	transition: none;
	-moz-transition: none;
	-webkit-transition: none;
	-o-transition: none;
}

.clients.fade-in-animation.completed > div {
	transition: opacity 0.2s linear;
	-moz-transition: opacity 0.2s linear;
	-webkit-transition: opacity 0.2s linear;
	-o-transition: opacity 0.2s linear;
	 -webkit-backface-visibility: hidden;
}

.clients:not(.fade-in-animation) > div.no-link:hover,
.clients.fade-in-animation.completed > div.no-link:hover {
	opacity: 1!important;
}

.clients:not(.fade-in-animation) > div:hover {
	opacity: 0.7!important;
}
.clients.fade-in-animation.completed > div:hover {
	opacity: 0.7!important;
}

.clients > div img {
	display: block;
	max-width: 100%;
	margin: 0 auto;
}

.clients.no-carousel:after {
	content: ""; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}
/***************** Pricing Tables ******************/

.pricing-table {
	margin-top: 60px;	
	margin-bottom: 30px;
}

.pricing-table:after {
	content: ""; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}

.pricing-table > div:first-child .pricing-column-content, .pricing-table > div:first-child h3 {
	border-left: 1px solid #e4e4e4!important;
}

.pricing-column {
	float: left;
	overflow: hidden;
	text-align: center;
	padding: 0px;
	background-color: #fff;
	transition: box-shadow 0.2s linear;
	-moz-transition: box-shadow 0.2s linear;
	-webkit-transition: box-shadow 0.2s linear;
	-o-transition: box-shadow 0.2s linear;
}

.pricing-column .pricing-column-content {
	border-right: 1px solid #e4e4e4;
	border-bottom: 1px solid #e4e4e4;
	padding: 0px 0px 20px 0px;
}

.pricing-column.highlight {
	position: relative;
	z-index: 100;
	margin: -20px -1px 0px -1px;
	background-color: #FFF;
	box-shadow: 0px 0px 13px rgba(0,0,0,.09);
	-moz-box-shadow: 0px 0px 13px rgba(0,0,0,.09);
	-webkit-box-shadow: 0px 0px 13px rgba(0,0,0,.09);
	-o-box-shadow: 0px 0px 13px rgba(0,0,0,.09);
}

.pricing-table[data-style="default"] .pricing-column.highlight .nectar-button {
	margin: 10px 0px 20px 0px;
}

.pricing-column.highlight .pricing-column-content, .pricing-column.highlight h3  {
	border: none;
}

.pricing-column.highlight h3 .highlight-reason {
	display: block;
	font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: rgba(0,0,0,0.4);
}

.pricing-column.highlight .pricing-column-content {
	border-right: 1px solid #e4e4e4;
	border-left: 1px solid #e4e4e4;
	border-bottom: 1px solid #e4e4e4;
}


.pricing-column.highlight:hover {
	box-shadow: 0px 0px 13px rgba(0,0,0,.15);
	-moz-box-shadow: 0px 0px 13px rgba(0,0,0,.15);
	-webkit-box-shadow: 0px 0px 13px rgba(0,0,0,.15);
	-o-box-shadow: 0px 0px 13px rgba(0,0,0,.15);
}

.pricing-column ul li {
	color: #888!important;
	padding: 10px 25px;
	list-style: none;
	line-height: 18px;
	border-bottom: 1px solid #efefef;
}

.pricing-column ul li:first-child {
	border-top: 1px solid #efefef;
}

.pricing-column ul li:nth-child(2n+1) {
	background-color: #fbfbfb;
}

.pricing-table[data-style="default"] .pricing-column.highlight h3 {
	color: #fff!important;
	background-color:#27CFC3;
	padding: 15px 0px;
	margin-bottom: 0px!important;
}

.toggle .pricing-column h3 {
	font-size: 26px!important;
}

.pricing-column h3 {
	background-color: #fff;
	color: #27CFC3;
	margin-bottom: 0px;
	font-size: 26px;
	line-height: 28px!important;
	border-right: 1px solid #e4e4e4;
	border-bottom: 1px solid #EFEFEF;
	border-top: 1px solid #e4e4e4;
	padding: 18px 0px 18px 0px;
}

.pricing-column h4 {
	margin-left: -22px;
	padding: 20px 30px 6px 30px;
	font-size: 54px!important;
	line-height: 42px!important;	
	color: #333;
	margin-bottom: 0px;
}

.pricing-table[data-style="default"] .pricing-column h4 .dollar-sign {
	font-size: 22px;
	line-height: 22px;
	top: -14px;
	right: -6px;
	font-family: 'Open Sans';
	font-weight: 300;
	position: relative;
}

.pricing-column .interval {
	display: block;
	color: #999;
	min-height: 38px;
	display: block;
	padding-bottom: 17px;
}

.pricing-column ul {
	margin-left: 0px;
}

.pricing-table.six-cols > div { width: 16.5%; }
.pricing-table.five-cols > div { width: 20%; }
.pricing-table.four-cols > div { width: 25%; }
.pricing-table.three-cols > div { width: 33.2%; }
.pricing-table.two-cols > div { width: 50%; }

.pricing-table .col {
	padding: 0px 20px;
}

.col .pricing-table h3 {
	margin-bottom: 0px;
}

.pricing-table[data-style="flat-alternative"] .pricing-column.highlight {
   box-shadow: 0px 15px 30px rgba(0,0,0,.06);
  -moz-box-shadow: 0px 15px 30px rgba(0,0,0,.06);
  -webkit-box-shadow: 0px 15px 30px rgba(0,0,0,.06);
  -o-box-shadow: 0px 15px 30px rgba(0,0,0,.06);
}
.pricing-table[data-style="flat-alternative"] .pricing-column.highlight:hover {
	box-shadow: 0px 15px 30px rgba(0,0,0,.09);
  -moz-box-shadow: 0px 15px 30px rgba(0,0,0,.09);
  -webkit-box-shadow: 0px 15px 30px rgba(0,0,0,.09);
  -o-box-shadow: 0px 15px 30px rgba(0,0,0,.09);
}

.pricing-table[data-style="flat-alternative"]  .pricing-column.highlight h3 {
	background-color: transparent!important;
}

.pricing-table[data-style="flat-alternative"].two-cols { text-align: center;}
.pricing-table[data-style="flat-alternative"].two-cols > div { width: 31%; display: inline-block; float:none; overflow: visible;}
.pricing-table[data-style="flat-alternative"].three-cols > div { width: 31%; }
.pricing-table[data-style="flat-alternative"].four-cols > div { width: 22%; }
.pricing-table[data-style="flat-alternative"].five-cols > div {  width: 18% }
.pricing-table[data-style="flat-alternative"].six-cols > div { width: 14%; }

body .pricing-table[data-style="flat-alternative"] .pricing-column,
body .pricing-table[data-style="flat-alternative"] .pricing-column.highlight {
	margin-right: 3.5%;
	position: relative;
	text-align: left;
}

body .pricing-table[data-style="flat-alternative"] .pricing-column ul {
	padding: 20px 0;
	margin: 0 0 38px 0;
}

.pricing-table[data-style="flat-alternative"].four-cols .pricing-column,
body .pricing-table[data-style="flat-alternative"].four-cols .pricing-column.highlight {
  margin-right: 3%;
  padding: 35px;
}
.pricing-table[data-style="flat-alternative"].four-cols .pricing-column.highlight h3 .highlight-reason { padding-left: 35px; }
.pricing-table[data-style="flat-alternative"].five-cols .pricing-column,
body .pricing-table[data-style="flat-alternative"].five-cols .pricing-column.highlight {
  margin-right: 2%;
  padding: 25px;
}
.pricing-table[data-style="flat-alternative"].five-cols .pricing-column.highlight h3 .highlight-reason { padding-left: 30px; }
.pricing-table[data-style="flat-alternative"].six-cols .pricing-column {
  margin-right: 2%;
  padding: 23px;
}
.pricing-table[data-style="flat-alternative"].six-cols .pricing-column.highlight h3 .highlight-reason { padding-left: 23px; }
.pricing-table[data-style="flat-alternative"] .pricing-column.highlight { overflow: visible; }

.pricing-table[data-style="flat-alternative"] .pricing-column.highlight h3 .highlight-reason {
	position: absolute;
	top: -31px;
	left: 0;
	padding: 5px;
	width: 100%;
	color: #fff;
}

.pricing-table[data-style="flat-alternative"] .pricing-column li del, 
.pricing-table[data-style="flat-alternative"] .pricing-column li del * {
	color: #bbb!important;
	 text-decoration: none;

}

.pricing-table[data-style="flat-alternative"] .pricing-column:before {
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 7px;
	content: ' ';
	position: absolute;
}

.pricing-table[data-style="flat-alternative"] .pricing-column li i {
	margin-right: 10px;
}

.pricing-table[data-style="flat-alternative"] > div:last-child {
	margin-right: 0!important;
}

.pricing-table[data-style="flat-alternative"] .pricing-column h4 {
	margin-left: 0;
	letter-spacing: 0;
	padding: 0px 0 13px 0;
	font-size: 30px!important;
	display: inline-block;
}
.pricing-table[data-style="flat-alternative"] .pricing-column h3 {
	font-size: 36px!important;
}
.pricing-table[data-style="flat-alternative"] .pricing-column .interval {
	display: inline-block;
}

.pricing-table[data-style="flat-alternative"] .pricing-column .interval:before {
	content:'/';
	display: inline-block;
	padding-right: 6px;
}

.pricing-table[data-style="flat-alternative"] .nectar-button { font-size: 15px; }

.pricing-table[data-style="flat-alternative"] .pricing-column.highlight { margin: 0; }

.pricing-table[data-style="flat-alternative"] .pricing-column .pricing-column-content, .pricing-table[data-style="flat-alternative"] .pricing-column h3 { border: none!important; }

.pricing-table[data-style="flat-alternative"] .pricing-column .pricing-column-content { padding-bottom: 0;}

.pricing-table[data-style="flat-alternative"] .pricing-column { padding: 50px; }
.pricing-table[data-style="flat-alternative"] .pricing-column.highlight h3 .highlight-reason { padding-left: 50px; }

.pricing-table[data-style="flat-alternative"] ul li {
	border: none;
	padding: 8px 0px;
	color: #444!important;
	background-color: transparent;
}

/*-------------------------------------------------------------------------*/
/*	7. Footer Styles
/*-------------------------------------------------------------------------*/

#footer-outer, #nectar_fullscreen_rows > #footer-outer.wpb_row .full-page-inner-wrap {
	color: #ccc;
	position: relative; 
	z-index: 10;
	background-color: #252525;
}

#footer-outer .row {
	padding: 55px 0px;
	margin-bottom: 0px;
}

#footer-outer .widget h4, .text-on-hover-wrap .categories a {
	color: #777;
	font-size: 12px;
	font-family: 'Open Sans';
	font-weight: 700;
    letter-spacing: 2px; 
    text-transform: uppercase;
	margin-bottom: 20px;
}

#footer-outer .widget {
	margin-bottom: 30px;
}

#footer-outer .widget.widget_categories ul ul, #footer-outer .widget.widget_pages ul ul, #footer-outer .widget.widget_nav_menu ul ul, #slide-out-widget-area .widget.widget_nav_menu ul ul {
	margin: 0px 0px 0px 0px!important;
	padding: 0px 0px 0px 20px;
}

#footer-outer .widget.widget_categories li, #footer-outer .widget.widget_pages li, #footer-outer .widget.widget_nav_menu li, #slide-out-widget-area .widget.widget_nav_menu li {
	border-bottom: 0px!important;
	padding: 0px!important;
}

#footer-outer .widget.widget_categories li a, #footer-outer .widget.widget_pages li a, #footer-outer .widget.widget_nav_menu li a {
	padding: 8px 0px;
	display: block;
	border-bottom: 1px solid #444444;	
}

#slide-out-widget-area .widget.widget_nav_menu li a {
	padding: 6px 20px;
	display: block;
}

#footer-outer .widget.widget_categories > ul > li:first-child > a, #footer-outer .widget.widget_pages > ul > li:first-child > a, #footer-outer .widget.widget_nav_menu > ul > li:first-child > a,
#slide-out-widget-area .widget.widget_categories > ul > li:first-child > a, #slide-out-widget-area .widget.widget_pages > ul > li:first-child > a {
	padding-top: 0px;
}

#footer-outer .span_3 .widget:last-child {
	margin-bottom: 0px;
}

#footer-outer a {
	color: #ccc;
}

#footer-outer a:hover {
	color: #27CFC3;
}

#footer-outer .nectar-button:hover {
	color: #fff!important;
}

#footer-outer .widget ul li {
	margin-bottom: 7px;
}

#footer-outer #copyright {
	padding: 20px 0px;
	font-size: 12px;
	background-color: #1c1c1c;
	color: #777;
}

#footer-outer #copyright li {
	float: left;
	margin-left: 20px;
}

#footer-outer #copyright .container div:last-child {
	margin-bottom: 0px;
}

#footer-outer #copyright li a, #header-secondary-outer #social li a {
	display: block;
	line-height: 22px;
	height: 24px; 
	position: relative;
	transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
	background-position: center top;
}

#footer-outer #copyright li a i, #header-secondary-outer #social li a i {
	color: #777;
	transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
}

#footer-outer .icon-be, #footer-outer .icon-vimeo, #footer-outer .icon-salient-spotify  {
  line-height: 32px!important;
}

#footer-outer .fa-vine {
 	font-size: 16px!important;
}

#footer-outer[data-full-width="1"] .container {
	width: 100%;
	padding: 0 28px;
	max-width: none;
}

#footer-outer #copyright li a i:hover {
	color: #27CFC3;
}

#footer-outer #copyright li a.vimeo, #footer-outer #copyright li a.behance, #header-secondary-outer #social li a.behance, #header-secondary-outer #social li a.vimeo {
	background-color: #666;
}

#footer-outer #copyright li a.vimeo:hover, #footer-outer #copyright li a.behance:hover, #header-secondary-outer #social li a.behance:hover, #header-secondary-outer #social li a.vimeo:hover {
	background-color: #27CFC3;
}

#footer-outer #copyright p {
	line-height: 22px;
	margin-top: 3px;	
}

#footer-outer #copyright .col ul {
	float: right;
}

#footer-outer #copyright li a.facebook { width: 12px;}
#footer-outer #copyright li a.twitter { width: 20px;}
#footer-outer #copyright li a.dribbble { width: 24px;}
#footer-outer #copyright li a.google-plus { width: 20px;}
#footer-outer #copyright li a.pinterest { width: 17px;}
#footer-outer #copyright li a.rss { width: 18px;}
#footer-outer #copyright li a.vimeo { width: 20px; text-indent: -9999px;}
#footer-outer #copyright li a.tumblr { width: 21px;}
#footer-outer #copyright li a.youtube { width: 21px;}
#footer-outer #copyright li a.linkedin { width: 19px;}
#footer-outer #copyright li a.behance { width: 27px; text-indent: -9999px;}
#footer-outer #copyright li a.instagram { width: 20px;}


#footer-outer #copyright #social .icon-soundcloud { font-size: 26px; }

#footer-outer i, #header-secondary-outer #social i {
	font-size: 20px;
	width: auto;
	background-color: transparent!important;
}

#footer-outer #copyright i.icon-be {
	font-size: 24px;
}

#header-secondary-outer #social li .icon-be {
	font-size: 18px!important;
}


/*fixed effect*/
body[data-footer-reveal="1"] #footer-outer {
	position: fixed;
	bottom: 0;
	width: 100%;
	z-index: 1;
	will-change: opacity;
}

body[data-footer-reveal="1"] .container-wrap {
	margin-bottom: 280px;
}

body[data-footer-reveal="1"] {
	background-color: #f8f8f8!important;
}

body[data-footer-reveal="1"].ascend {
	background-color: #f6f6f6!important;
}

body[data-footer-reveal="1"][data-footer-reveal-shadow="small"] .container-wrap {
	box-shadow: 0 5px 8px -3px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 5px 8px -3px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 5px 8px -3px rgba(0,0,0,0.2);
}

body[data-footer-reveal="1"][data-footer-reveal-shadow="large"] .container-wrap {
	box-shadow: 0 27px 25px -2px rgba(0,0,0,0.3);
	-webkit-box-shadow:  0 27px 25px -2px rgba(0,0,0,0.3);
	-moz-box-shadow:  0 27px 25px -2px rgba(0,0,0,0.3);
}

body[data-footer-reveal="1"][data-footer-reveal-shadow="large_2"] .container-wrap {
	box-shadow:  0 70px 110px -30px rgba(0,0,0,1);
	-webkit-box-shadow:   0 70px 110px -30px rgba(0,0,0,1);
	-moz-box-shadow:   0 70px 110px -30px rgba(0,0,0,1);
}

body[data-footer-reveal="1"][data-footer-reveal-shadow="large_2"] #footer-outer .row {
	  padding: 80px 0px;
}

body .container-wrap.no-shadow { box-shadow: none!important; }

body[data-footer-reveal="1"] #call-to-action .triangle { display: none; }

@media only screen and (min-width: 1000px) {
#footer-widgets[data-cols="5"] .container .row > div {
	width: 19.5%;
}
#footer-widgets[data-cols="5"] .container .row > div:first-child {
	width: 35%;
}
}
#footer-widgets[data-cols="5"] .container .row .widget {
	font-size: 14px;
	line-height: 24px;
}

/***************** Slide Out Widget Are ******************/

#slide-out-widget-area.slide-out-from-right {
	position: fixed;
	transform: translate(301px, 0px);
	-webkit-transform: translate(301px, 0px);
	-o-transform: translate(301px, 0px);
	-ms-transform: translate(301px, 0px);
	top: 0;
	right: 0;
	width: 300px;
	height: 100%;
	z-index: 10000;
	background-color: #27cfc3;
	padding: 33px;
    overflow: hidden;
}

#slide-out-widget-area.slide-out-from-right-hover {
	position: fixed;
	transform: translate3d(341px, 0,0);
	-webkit-transform: translate3d(341px, 0,0);
	-o-transform: translate3d(341px, 0,0);
	-ms-transform: translate3d(341px, 0,0);
	top: 0;
	right: 0;
	width: 340px;
	height: 100%;
	z-index: 9995;
	background-color: #27cfc3;
	padding: 62px;
	padding-top: 80px;
    overflow: hidden;
    -webkit-transition: all .7s cubic-bezier(0.25,1,.2,1);
    -moz-transition: all .7s cubic-bezier(0.25,1,.2,1);
    -ms-transition: all .7s cubic-bezier(0.25,1,.2,1);
    transition: all .7s cubic-bezier(0.25,1,.2,1);
}
/* text fade in */
#slide-out-widget-area.slide-out-from-right-hover .inner {
	opacity: 0;
	margin-bottom: 30px;
	transform: translateX(50px);
	-webkit-transition: -webkit-transform .45s cubic-bezier(.2,.75,.3,1) 0.22s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.22s;
    -moz-transition: transform .45s cubic-bezier(.2,.75,.3,1) 0.22s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.22s;
    -ms-transition: transform .45s cubic-bezier(.2,.75,.3,1) 0.22s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.22s;
    transition: transform .45s cubic-bezier(.2,.75,.3,1) 0.22s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.22s;
}

#slide-out-widget-area.slide-out-from-right-hover.open .inner {
	opacity: 1;
	transform: translateX(0px);
}

#slide-out-widget-area.slide-out-from-right-hover .bottom-meta-wrap {
	opacity: 0;
	transform: translateX(50px);
	-webkit-transition: -webkit-transform .45s cubic-bezier(.2,.75,.3,1) 0.35s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.35s;
    -moz-transition: transform .45s cubic-bezier(.2,.75,.3,1) 0.35s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.35s;
    -ms-transition: transform .45s cubic-bezier(.2,.75,.3,1) 0.35s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.35s;
    transition: transform .45s cubic-bezier(.2,.75,.3,1) 0.35s, opacity .45s cubic-bezier(.2,.75,.3,1) 0.35s;
    margin-top: 50px;
}

#slide-out-widget-area.slide-out-from-right-hover.open .bottom-meta-wrap {
	opacity: 1;
	transform: translateX(0px);
}


#slide-out-widget-area.slide-out-from-right-hover .inner {
	position: relative;
}

#slide-out-widget-area.slide-out-from-right-hover .bottom-text {
	margin-top: 30px;
}

#slide-out-widget-area.slide-out-from-right-hover .off-canvas-menu-container {
	position: absolute;
	top: 50%;
	width:100%;
}

#slide-out-widget-area.slide-out-from-right-hover .off-canvas-social-links  {
	margin-top: 30px;
}

.admin-bar .slide-out-hover-icon-effect {
	top: 32px;
}

.slide-out-hover-icon-effect .lines {
	background-color: transparent;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
    top: 0px;
    -ms-transform: scale(0,1);
    transform: scale(0,1);
    -webkit-transform: scale(0,1);
    -ms-transform-origin: left;
    transform-origin: left;
    -webkit-transform-origin: left;
    border-radius: 2px;
    background-color: #fff;
    opacity: 1;
    transition: transform .4s cubic-bezier(.2,.01,.16,1) 0.07s, opacity .4s cubic-bezier(.2,.01,.16,1) 0.07s!important;
    -webkit-transition: -webkit-transform .4s cubic-bezier(.2,.01,.16,1) 0.07s, opacity .4s cubic-bezier(.2,.01,.16,1) 0.07s!important;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle:not(.small) .lines-button:after {
	top: 0px;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines {
	width: 2em;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before {
   -ms-transform: scale(0,1);
    transform: scale(0,1);
    -webkit-transform: scale(0,1);
    -ms-transform-origin: left;
    transform-origin: left;
    -webkit-transform-origin: left;
    border-radius: 2px;
    transition: transform .4s cubic-bezier(.2,.01,.16,1) 0.12s, opacity .4s cubic-bezier(.2,.01,.16,1) 0.12s!important;
    -webkit-transition: -webkit-transform .4s cubic-bezier(.2,.01,.16,1) 0.12s, opacity .4s cubic-bezier(.2,.01,.16,1) 0.12s!important;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:after {
   -ms-transform: scale(0,1);
    transform: scale(0,1);
    -webkit-transform: scale(0,1);
    -ms-transform-origin: left;
    transform-origin: left;
    -webkit-transform-origin: left;
    border-radius: 2px;
	transition: transform .4s cubic-bezier(.2,.01,.16,1) 0.02s, opacity .4s cubic-bezier(.2,.01,.16,1) 0.02s!important;
	-webkit-transition: -webkit-transform .4s cubic-bezier(.2,.01,.16,1) 0.02s, opacity .4s cubic-bezier(.2,.01,.16,1) 0.02s!important;
}

body[data-is="minimal"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines:after,
body[data-is="minimal"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines:before,
body[data-is="minimal"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines-button:after {
	height: 2px!important;
}


/*non minimal style*/
@media only screen and (min-width: 1000px) {
	body[data-is="inherit"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after,
	body[data-is="inherit"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before,
	body[data-is="inherit"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:after,
	body[data-is="inherit"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after,
	body[data-is="minimal"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"]:not(.small) .lines-button:after,
	body[data-is="minimal"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"]:not(.small) .lines:before,
	body[data-is="minimal"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"]:not(.small) .lines:after {
		height: 3px!important;
	}

	body[data-is="inherit"][data-slide-out-widget-area-style="slide-out-from-right-hover"][data-has-menu="false"][data-header-search="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
		top: 13px;
	}


	body[data-is="inherit"] .slide-out-hover-icon-effect.slide-out-widget-area-toggle:not(.small) .lines:before {
		top: 9px;
	}
	body[data-is="inherit"] .slide-out-hover-icon-effect:not(.small) .lines:after {
		top: -9px;
	}
}

body[data-is="inherit"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	top: 0px;
}


.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .no-delay.lines-button:after {
	transition: transform .4s cubic-bezier(.2,.01,.16,1) 0.05s!important;
	-webkit-transition: -webkit-transform .4s cubic-bezier(.2,.01,.16,1) 0.05s!important;
}
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .no-delay .lines:before {
	transition: transform .4s cubic-bezier(.2,.01,.16,1)!important;
	-webkit-transition: -webkit-transform .4s cubic-bezier(.2,.01,.16,1)!important;
}
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .no-delay .lines:after {
	transition: transform .4s cubic-bezier(.2,.01,.16,1) 0.1s !important;
	-webkit-transition: -webkit-transform .4s cubic-bezier(.2,.01,.16,1) 0.1s !important;
}
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before, 
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:after,
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	width: 2rem;
	background-color: #fff;
}
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .unhidden-line .lines:before, 
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .unhidden-line .lines:after,
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .unhidden-line.lines-button:after {
	-ms-transform: scale(1,1);
	transform: scale(1,1);
	-webkit-transform: scale(1,1);
	background-color: #fff;
}

.slide-out-hover-icon-effect .lines:after {
    top: -8px;
}

.slide-out-hover-icon-effect:not(.small) .lines:after {
    top: -9px;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before {
    top: 8px;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle:not(.small) .lines:before {
    top: 9px;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines:before, 
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines:after,
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines-button:after {
	width: 1.4rem;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .unhidden-line .lines:before, 
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .unhidden-line .lines:after,
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .unhidden-line.lines-button:after {
	width: 1.4rem;
	height: 2px;
	-ms-transform: scale(1,1);
	transform: scale(1,1);
	-webkit-transform: scale(1,1);
}
.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines {
	width: 1.4rem;
}


.slide-out-hover-icon-effect.small .lines:after {
    top: -6px;
}

.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].small .lines:before {
    top: 6px;
}

body[data-is="inherit"] .slide-out-hover-icon-effect.small {
	top: 0px;
	right: 27px;
}

.admin-bar .slide-out-hover-icon-effect.small {
	top: 32px;
}

body[data-is="inherit"].admin-bar .slide-out-hover-icon-effect.small {
	top: 32px;
}

@media only screen and (max-width: 1000px) {
	.slide-out-hover-icon-effect a {
		width: auto;
	}
	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before, 
	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:after,
	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
		width: 1.4rem;
	}
	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .unhidden-line .lines:before, 
	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .unhidden-line .lines:after,
	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .unhidden-line.lines-button:after {
		width: 1.4rem;
		height: 2px;
		-ms-transform: scale(1,1);
		transform: scale(1,1);
		-webkit-transform: scale(1,1);
	}

	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
		top: 0px;
	}

	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines {
		width: 1.4rem;
	}

	.slide-out-hover-icon-effect .lines:after, .slide-out-hover-icon-effect.small .lines:after,
	.slide-out-hover-icon-effect:not(.small) .lines:after {
	    top: -6px;
	}

	.slide-out-hover-icon-effect.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before {
	    top: 6px;
	}

	.admin-bar .slide-out-hover-icon-effect {
		top: 32px;
	}
	.slide-out-hover-icon-effect {
		top: 0px;
		right: 28px;
	}

	body[data-is="inherit"] .lines, body[data-is="inherit"] .lines:before, body[data-is="inherit"] .lines:after {
		height: 2px;
	}
}

.slide-out-hover-icon-effect {
	position: fixed;
	right: 30px;
	top: 0px;
	z-index: 10000;
	pointer-events: none;
}
.slide-out-hover-icon-effect.small {
	right: 27px;
}

.slide-out-hover-icon-effect a {
	display: block;
	pointer-events: none;
}

#slide-out-widget-area.fullscreen,
#slide-out-widget-area.fullscreen-alt {
	position: fixed;
	width: 100%;
	height: 100%;
	right: auto;
	left: 0;
	top: 0;
	z-index: 9997;
	background-color: transparent!important;
	text-align: center;
	display: none;
	overflow-y: scroll;
	overflow-x: hidden;
	padding-right: 20px;
	box-sizing: content-box;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
}

#slide-out-widget-area.fullscreen .inner,
#slide-out-widget-area.fullscreen-alt .inner {
	width: 100%;
	position: relative;
	top: 50%;
	left: 0;
	height: auto;
}

#slide-out-widget-area.fullscreen .inner.overflow-state,
#slide-out-widget-area.fullscreen-alt .inner.overflow-state {
	top: 0;
	transform: none!important;
	-webkit-transform: none!important;
	-moz-transform: none!important;
	margin: 50px 0 120px 0;
}

#slide-out-widget-area.fullscreen .inner-wrap,
#slide-out-widget-area.fullscreen-alt .inner-wrap {
	 height: 100%;
	 margin-right: -20px;
}

.using-mobile-browser #slide-out-widget-area.fullscreen .inner-wrap,
.using-mobile-browser #slide-out-widget-area.fullscreen-alt .inner-wrap {
	margin-right: 0;
}

/*
#slide-out-widget-area.fullscreen .widget_nav_menu .sub-menu {
	display: none;
}*/

#slide-out-widget-area.fullscreen .inner .widget,
#slide-out-widget-area.fullscreen-alt .inner .widget {
	opacity: 0;
	transform: translateY(110px);
	-webkit-transform: translateY(110px);
	-moz-transform: translateY(110px);
}

#slide-out-widget-area.fullscreen .inner .off-canvas-menu-container,
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container  {
	transform: translateY(0px)!important;
	-webkit-transform: translateY(0px)!important;
	-moz-transform: translateY(0px)!important;
	opacity: 1!important;
	margin: 0;
}

#slide-out-widget-area.fullscreen .inner .off-canvas-menu-container .menu > li {
	opacity: 0;
	transform: translateY(110px);
	-webkit-transform: translateY(110px);
	-moz-transform: translateY(110px);
}
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container .menu > li {
	opacity: 0;
	transform: translateY(40px);
	-webkit-transform: translateY(40px);
	-moz-transform: translateY(40px);
}

#slide-out-widget-area.fullscreen .inner .off-canvas-menu-container .menu li,
#slide-out-widget-area.fullscreen .menuwrapper li,
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container .menu li,
#slide-out-widget-area.fullscreen-alt .menuwrapper li  {
	margin: 0 0 8px 0!important;
}

#slide-out-widget-area .inner .off-canvas-menu-container li a {
	font-size: 36px;
	line-height: 36px;
	font-family: 'Open Sans';
	font-weight: 700;
	letter-spacing: -1px;
}

#slide-out-widget-area.fullscreen .inner .widget.widget_nav_menu li a,
#slide-out-widget-area.fullscreen .inner .off-canvas-menu-container li a,
#slide-out-widget-area.fullscreen-alt .inner .widget.widget_nav_menu li a,
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container li a {
	font-size: 60px;
	line-height: 60px;
	font-family: 'Open Sans';
	font-weight: 700;
	letter-spacing: -1px;
}

#slide-out-widget-area.fullscreen-alt .inner .widget.widget_nav_menu li a,
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container li a,
body #slide-out-widget-area.slide-out-from-right-hover .inner .widget.widget_nav_menu li a,
body #slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a {
	display: inline-block;
	position: relative;
	color: rgba(255,255,255,0.7);
	opacity: 1;
	padding-left: 0;
	padding-right: 0;
}

body #slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a {
	word-break: break-word;
}

#slide-out-widget-area.fullscreen-alt .inner .widget.widget_nav_menu li.no-pointer-events,
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container li.no-pointer-events,
#slide-out-widget-area.slide-out-from-right-hover .inner .widget.widget_nav_menu li.no-pointer-events,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li.no-pointer-events {
	pointer-events: none;
}

#slide-out-widget-area.fullscreen-alt .inner .widget.widget_nav_menu li a .clip-wrap,
#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container li a .clip-wrap,
#slide-out-widget-area.slide-out-from-right-hover .inner .widget.widget_nav_menu li a .clip-wrap,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a .clip-wrap {
    left: 0;
    position: absolute;
    top: 0;
    color: #FFF;
    display: block;
    zoom: 1;
    -webkit-transition: width .45s cubic-bezier(0.2,.7,.3,1), -webkit-transform .45s cubic-bezier(0.2,.7,.3,1);
    transition: width .45s cubic-bezier(0.2,.7,.3,1), transform .45s cubic-bezier(0.2,.7,.3,1);
    width: 0%;
    padding: 6px 0px;
    opacity: 1;
    overflow: hidden;
    pointer-events: none;
    backface-visibility: hidden;
}

#slide-out-widget-area.slide-out-from-right-hover .inner .widget.widget_nav_menu li a .clip-wrap,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a .clip-wrap {
	padding: 0;
	-webkit-transition: width .42s cubic-bezier(.52,.01,.16,1);
    transition: width .42s cubic-bezier(.52,.01,.16,1);
}

#slide-out-widget-area.slide-out-from-right-hover .inner .widget.widget_nav_menu li a:hover .clip-wrap,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a:hover .clip-wrap {
	width: 101%;
}

#slide-out-widget-area.fullscreen-alt .inner .off-canvas-menu-container li a .clip-wrap span,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a .clip-wrap span {
	transition: transform .45s cubic-bezier(0.2,.7,.3,1);
	display: block;
	position: relative;
	word-break: normal;
	backface-visibility: hidden;
}



#slide-out-widget-area.fullscreen .inner li a, #slide-out-widget-area .off-canvas-social-links li a, #slide-out-widget-area.slide-out-from-right .inner .off-canvas-menu-container li a,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a,
#slide-out-widget-area .menuwrapper li small {
	opacity: 0.7;
	transition: opacity 0.2s ease;
	-webkit-transition: opacity 0.2s ease;
	-moz-transition: opacity 0.2s ease;
}

#slide-out-widget-area.fullscreen .inner li a:hover, #slide-out-widget-area .off-canvas-social-links li a:hover,
#slide-out-widget-area .off-canvas-social-links li a:hover,
#slide-out-widget-area .inner li.current_page_ancestor > a, #slide-out-widget-area .inner li.current-menu-item > a,
#slide-out-widget-area .inner li.current-menu-ancestor > a, #slide-out-widget-area .inner li.current_page_item > a,
#slide-out-widget-area.slide-out-from-right .inner .off-canvas-menu-container li a:hover,
#slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li a:hover,
#slide-out-widget-area .inner .off-canvas-menu-container .menuwrapper li > a.hovered  {
	opacity: 1;
}

#slide-out-widget-area.fullscreen .inner .widget,
#slide-out-widget-area.fullscreen-alt .inner .widget {
	max-width: 1425px;
    width: 100%;
    margin: 0 auto 60px auto;
    padding: 0 90px;
}

@media only screen and (min-width: 690px) {
    #slide-out-widget-area.fullscreen .recent_projects_widget div a
    #slide-out-widget-area.fullscreen-alt .recent_projects_widget div a {
		width: 10.5%!important;
	}
	#slide-out-widget-area.fullscreen .recent_projects_widget div a:nth-child(3n+3),
	#slide-out-widget-area.fullscreen-alt .recent_projects_widget div a:nth-child(3n+3)  {
		  margin: 2% 2% 0 0!important;
	}
	#slide-out-widget-area.fullscreen .recent_projects_widget div a:nth-child(8n+8),
	#slide-out-widget-area.fullscreen-alt .recent_projects_widget div a:nth-child(8n+8) {
		  margin-right: 0!important;
	}
}

#slide-out-widget-area.fullscreen .widget_recent_comments ul li,
#slide-out-widget-area.fullscreen-alt .widget_recent_comments ul li {
    background: transparent;
    margin-bottom: 0px;
    padding: 0px !important;
}

#slide-out-widget-area.fullscreen .tagcloud a,
#slide-out-widget-area.fullscreen-alt .tagcloud a {
	float: none;
	display: inline-block;
}

#slide-out-widget-area.fullscreen  .widget_calendar table tbody td,
#slide-out-widget-area.fullscreen-alt  .widget_calendar table tbody td {
    padding: 20px;
}

#boxed #slide-out-widget-area.fullscreen .off-canvas-social-links,
.admin-bar #boxed  #slide-out-widget-area.fullscreen .off-canvas-social-links,
#boxed #slide-out-widget-area.fullscreen-alt .off-canvas-social-links,
.admin-bar #boxed  #slide-out-widget-area.fullscreen-alt .off-canvas-social-links {
  position: relative;
  bottom: 0!important;
  right: 0;
  margin-top: 70px;
}

#boxed #slide-out-widget-area.fullscreen .off-canvas-social-links:after,
#boxed #slide-out-widget-area.fullscreen-alt .off-canvas-social-links:after {
  display: block;
  height: 1px;
  width: 0px;
  background-color: rgba(255,255,255,0.6);
  content: ' ';
  margin: 0 auto;
  position: absolute;
  top: -40px;
  left: 50%;
  transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
  -webkit-transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
  -moz-transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
}

#boxed #slide-out-widget-area .mobile-only {
	display: block;
}

#boxed #slide-out-widget-area.fullscreen .off-canvas-social-links.line-shown:after,
#boxed #slide-out-widget-area.fullscreen-alt .off-canvas-social-links.line-shown:after {
	width: 100px;
}

#boxed #slide-out-widget-area.fullscreen .bottom-text,
.admin-bar #boxed #slide-out-widget-area.fullscreen .bottom-text,
#boxed #slide-out-widget-area.fullscreen-alt .bottom-text,
.admin-bar #boxed #slide-out-widget-area.fullscreen-alt .bottom-text {
  position: relative;
  bottom: 0!important;
  left: 0;
  margin-bottom: 30px;
  margin-top: 15px;
}

.admin-bar #slide-out-widget-area {
	padding-top: 33px;
}

.admin-bar #slide-out-widget-area.slide-out-from-right  {
	padding-top: 53px;
}
.admin-bar #slide-out-widget-area.slide-out-from-right-hover {
	padding-top: 100px;
}

#slide-out-widget-area.mobile {
	overflow-y: scroll;
	overflow-x: hidden;
}

#slide-out-widget-area-bg {
	-webkit-backface-visibility: hidden;
	background-color: rgba(0,0,0,0.8);
	position: fixed;
	height: 1px;
	width: 1px;
	opacity: 0;
	left: 0;
	top: 0;
	z-index: 9996;
}

#slide-out-widget-area-bg.fullscreen-alt {
	padding: 20px;
	background-color: transparent;
	transform: none!important;
	-webkit-transform: none!important;
	will-change: opacity, padding;
}

body[data-slide-out-widget-area-style="fullscreen-alt"] #header-outer {
	border-bottom-color: transparent;
}

body #slide-out-widget-area-bg.fullscreen-alt {
	transition: padding 0.3s cubic-bezier(0.215,0.61,0.355,1), opacity 0.25s ease!important;
	-webkit-transition: padding 0.3s cubic-bezier(0.215,0.61,0.355,1), opacity 0.25s ease!important;
}

body #slide-out-widget-area-bg.fullscreen-alt.open {
	transition: padding 0.3s cubic-bezier(0.215,0.61,0.355,1), opacity 0.25s ease!important;
	-webkit-transition: padding 0.3s cubic-bezier(0.215,0.61,0.355,1), opacity 0.25s ease!important;
}


html body #slide-out-widget-area-bg.fullscreen-alt.solid,
html body #slide-out-widget-area-bg.fullscreen-alt.dark,
html body #slide-out-widget-area-bg.fullscreen-alt.medium,
html body #slide-out-widget-area-bg.fullscreen-alt.light {
	opacity: 0;
}

#slide-out-widget-area-bg.fullscreen-alt.padding-removed {
	padding: 0!important;
}
.admin-bar #slide-out-widget-area-bg.fullscreen-alt.padding-removed {
	padding-top: 32px!important;
}

.admin-bar #slide-out-widget-area-bg.fullscreen-alt {
	padding-top: 52px;
}
#slide-out-widget-area-bg .bg-inner {
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.8);
}

#boxed #slide-out-widget-area-bg.fullscreen,
#boxed #slide-out-widget-area-bg.fullscreen-alt {
	left: auto;
	will-change: transform, opacity;
}
#slide-out-widget-area-bg.fullscreen,
#slide-out-widget-area-bg.fullscreen-alt {
	transform: translateY(-100%);
	-webkit-transform: translateY(-100%);
	-moz-transform: translateY(-100%);
	opacity: 1;
	display: none;
}

#slide-out-widget-area-bg.fullscreen-alt {
	display: block;
	left: -100%;
}

#slide-out-widget-area-bg.fullscreen.solid,#slide-out-widget-area-bg.fullscreen-alt.solid  { opacity: 1; }
#slide-out-widget-area-bg.fullscreen.dark,#slide-out-widget-area-bg.fullscreen-alt.dark  { opacity: 0.93; }
#slide-out-widget-area-bg.fullscreen.medium,#slide-out-widget-area-bg.fullscreen-alt.medium  { opacity: 0.6; }
#slide-out-widget-area-bg.fullscreen.light,#slide-out-widget-area-bg.fullscreen-alt.light { opacity: 0.4; }



#slide-out-widget-area.fullscreen .off-canvas-social-links, #slide-out-widget-area.fullscreen-alt .off-canvas-social-links {
	position: fixed;
	bottom: 18px;
	right: 18px;
}

#slide-out-widget-area.fullscreen .bottom-text, #slide-out-widget-area.fullscreen-alt .bottom-text {
	position: fixed;
	bottom: 28px;
	left: 28px;
	opacity: 0;
	padding-bottom: 0;
}

#slide-out-widget-area.fullscreen-alt .bottom-text {
	color: #fff!important;
}

@media only screen and (min-width: 1000px) {
	#slide-out-widget-area.fullscreen .bottom-text[data-has-desktop-social="false"], #slide-out-widget-area.fullscreen-alt .bottom-text[data-has-desktop-social="false"] {
		left: 50%;
		transform: translateX(-50%);
		-webkit-transform: translateX(-50%);
	}

}

#slide-out-widget-area .bottom-text { padding-bottom: 0; font-size: 12px; }

#slide-out-widget-area:not(.fullscreen) .off-canvas-social-links li {
	display: inline-block;
	padding: 0 6px 6px 0;
}


#slide-out-widget-area.fullscreen .off-canvas-social-links li {
	display: inline-block;
	margin: 0 8px;
	transform: scale(0);
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
}
#slide-out-widget-area.fullscreen-alt .off-canvas-social-links li {
	display: inline-block;
	transform: scale(0);
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
}
#slide-out-widget-area .off-canvas-social-links li i {
	background-color: transparent!important;
	font-size: 18px;
	line-height: 22px;
}

.blurred-wrap {
	transition: filter 0.45s linear;
	-webkit-transition: -webkit-filter 0.45s linear;
	-moz-transition: filter 0.45s cubic-bezier(.32,0,1,1);
}

.blurred-wrap.blurred {
  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
}

.msie .blurred-wrap.blurred {
  -ms-filter: none;
  filter: none;
}

#slide-out-widget-area .widget h4 {
	margin-bottom: 8px;
}

#slide-out-widget-area .inner > div {
	margin-bottom: 25px;
}

#slide-out-widget-area.fullscreen .inner > div,
#slide-out-widget-area.fullscreen-alt .inner > div {
	margin: 13px 0px;
}

#slide-out-widget-area .inner > div:first-of-type {
	margin-top: -7px;
}

#slide-out-widget-area .inner {
    width: 100%;
    height: 100%;
}

#slide-out-widget-area a, #slide-out-widget-area, #slide-out-widget-area h4, #slide-out-widget-area h3 {
	color: #fff;
}

body[data-full-width-header="false"] #slide-out-widget-area a.slide_out_area_close {
	position: absolute;
	right: 22px;
	top: 22px;
}

body[data-full-width-header="false"].admin-bar #slide-out-widget-area a.slide_out_area_close {
	top: 47px;
}

body[data-full-width-header="false"] #slide-out-widget-area a.slide_out_area_close {
	display:block;
transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s; 
-webkit-transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s; 
font-family: 'Open Sans';
	font-weight: 400;
}
body[data-full-width-header="false"] #slide-out-widget-area a.slide_out_area_close  { 
	backface-visibility: hidden; 
	-moz-backface-visibility: hidden; 
	-webkit-backface-visibility: hidden; 
	width: 34px!important;
	height: 34px!important;
	transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s; 
	-webkit-transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s; 
	color: #ddd!Important; font-size: 18px!important; max-width: none!important; line-height: 32px!important;}
body[data-full-width-header="false"] #slide-out-widget-area a.slide_out_area_close:hover .icon-default-style[class^="icon-"] { transform: rotate(90deg); -webkit-transform: rotate(90deg);}
body[data-full-width-header="false"] #slide-out-widget-area a.slide_out_area_close:hover { border-color: rgba(255, 255, 255, 0.7); }



body #slide-out-widget-area a.slide_out_area_close .icon-default-style[class^="icon-"] {
    -webkit-backface-visibility: hidden;
    color: #fff !important;
    font-size: 18px !important;
    height: 34px !important;
    left: -2px;
    line-height: 32px !important;
    max-width: none !important;
    transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s;
    -webkit-transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s;
    -moz-transition: all 0.47s cubic-bezier(0.3, 1, 0.3, 0.95) 0s;
    width: 34px !important;
}

body[data-full-width-header="true"] .slide_out_area_close {
	display: none;
}

body #slide-out-widget-area.fullscreen .slide_out_area_close,
body #slide-out-widget-area.fullscreen-alt .slide_out_area_close {
	display: none!important;
}

#boxed  #slide-out-widget-area:not(.slide-out-from-right-hover) .slide_out_area_close {
	display: block!important;
}

#boxed .slide_out_area_close {
	position: absolute;
	right: 20px;
	z-index: 100;
}

header#top nav ul .slide-out-widget-area-toggle a i.lines, header#top nav ul .slide-out-widget-area-toggle a i.lines:before, header#top nav ul .slide-out-widget-area-toggle a i.lines:after {
    background-color: rgba(0,0,0,0.4);
}


.lines-button {
  transition: .3s;
  cursor: pointer;
  line-height: 0px!important;
  top: 9px;
  position: relative;
  font-size: 0px!important;
  user-select: none;
  display: block;
}

.lines-button:hover {
  opacity: 1;
}
.lines-button:active {
  transition: 0;
}

.lines {
  display: block;
  width: 1.4rem;
  height: 3px;
  background-color: #ecf0f1;
  transition: 0.3s;
  position: relative;
  
}
.lines:before, .lines:after {
  display: block;
  width: 1.4rem;
  height: 3px;
  background: #ecf0f1;
  transition: 0.3s;
  position: absolute;
  left: 0;
  content: '';
  -webkit-transform-origin: 0.142rem center;
  transform-origin: 0.142rem center;
}
.lines:before {
  top: 6px;
}
.lines:after {
  top: -6px;
}

.lines-button.close {
  -webkit-transform: scale3d(0.8, 0.8, 0.8);
  transform: scale3d(0.8, 0.8, 0.8);
}

.lines-button.arrow.close .lines:before, .lines-button.arrow.close .lines:after {
  top: 0;
  width: 1.11111rem;
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.arrow.close .lines:before {
  -webkit-transform: rotate3d(0, 0, 1, 40deg);
  transform: rotate3d(0, 0, 1, 40deg);
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.arrow.close .lines:after {
  -webkit-transform: rotate3d(0, 0, 1, -40deg);
  transform: rotate3d(0, 0, 1, -40deg);
}

#header-outer.transparent header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"]  a .lines-button .lines,
#header-outer header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"]  a .lines-button .lines,
#header-outer.transparent.dark-slide:not(.directional-nav-effect) > header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a .lines-button i,
#header-outer.transparent .midnightHeader.light header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a i.lines, 
#header-outer.transparent .midnightHeader.default header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a i.lines,
#header-outer.transparent .midnightHeader.dark header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a i.lines,
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a span.light .lines-button i,
#header-outer.transparent.directional-nav-effect > header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] a span.dark .lines-button i {
	background-color: transparent!important;
}

.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.close .lines:before {
	-webkit-transform: translateY(-6px) rotateZ(-45deg);
   -moz-transform: translateY(-6px) rotateZ(-45deg);
   -ms-transform: translateY(-6px) rotateZ(-45deg);
   -o-transform: translateY(-6px) rotateZ(-45deg);
   transform: translateY(-6px) rotateZ(-45deg);
}
.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.close .lines:after {
	-webkit-transform: translateY(6px) rotateZ(45deg);
   -moz-transform: translateY(6px) rotateZ(45deg);
   -ms-transform: translateY(6px) rotateZ(45deg);
   -o-transform: translateY(6px) rotateZ(45deg);
   transform: translateY(6px) rotateZ(45deg);
}
.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	height: 2px;
	background-color: rgba(0,0,0,0.4);
	display: inline-block;
    width: 1.4rem;
    height: 2px;
    transition: transform 0.45s ease, opacity 0.2s ease, background-color 0.2s linear;
    -webkit-transition: -webkit-transform 0.45s ease, opacity 0.2s ease, background-color 0.2s linear;
    position: absolute;
    left: 0;
    top: 0px;
    content: '';
    transform: scale(1,1);
	-webkit-transform: scale(1,1);
}




/*mobile icon*/
.slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after,
.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button:after, header#top .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2 .lines {
	background-color: #999999;
}

.midnightHeader.light header#top .slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, 
.midnightHeader.light header#top .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after,
.midnightHeader.light header#top .slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button:after, 
.midnightHeader.light header#top .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2 .lines,
.side-widget-open.transparent .midnightHeader header#top .slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, 
.side-widget-open.transparent .midnightHeader header#top .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after,
.side-widget-open.transparent .midnightHeader header#top .slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button:after, 
.side-widget-open.transparent .midnightHeader header#top .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2 .lines {
	background-color: #fff!important;
}


#header-outer.side-widget-open.transparent .midnightHeader.default .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	background-color: #fff!important;
}

.midnightHeader.dark .slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, 
.midnightHeader.dark .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after,
.midnightHeader.dark .slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button:after, 
.midnightHeader.dark header#top .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2 .lines,
.midnightHeader.default .slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, 
.midnightHeader.default .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after,
.midnightHeader.default .slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button:after, 
.midnightHeader.default header#top .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2 .lines {
	background-color: #000;
}

.midnightHeader.dark header#top .slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, 
.midnightHeader.dark header#top .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after,
.midnightHeader.default header#top .slide-out-widget-area-toggle.mobile-icon .lines-button.x2 .lines:before, 
.midnightHeader.default header#top .slide-out-widget-area-toggle.mobile-icon  .lines-button.x2 .lines:after {
	background-color: #000!important;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines:before {
	top: 6px;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines:before {
	top: 6px;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines:after {
	top: -6px;
}
body #header-outer .lines-button {
	top: 9px!important;
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon a > span {
	height: 31px;
	line-height: 28px;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2.close .lines:before {
	top: 0px;
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2.close .lines:after {
	top: 0px;
}

.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button:after {
	top: 0px!important;
}

.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon  .lines-button.close .lines:before {
	-webkit-transform: translateY(-6px) rotateZ(-45deg)!important;
   -moz-transform: translateY(-6px) rotateZ(-45deg)!important;
   -ms-transform: translateY(-6px) rotateZ(-45deg)!important;
   -o-transform: translateY(-6px) rotateZ(-45deg)!important;
   transform: translateY(-6px) rotateZ(-45deg)!important;
}
.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines-button.close .lines:after {
	-webkit-transform: translateY(6px) rotateZ(45deg)!important;
   -moz-transform: translateY(6px) rotateZ(45deg)!important;
   -ms-transform: translateY(6px) rotateZ(45deg)!important;
   -o-transform: translateY(6px) rotateZ(45deg)!important;
   transform: translateY(6px) rotateZ(45deg)!important;
}

.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.x2 .lines:before, 
.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.x2 .lines:after {
    transition: -webkit-transform 0.45s ease, background-color 0.2s linear, opacity 0.2s linear;
    transition: transform 0.45s ease, background-color 0.2s linear, opacity 0.2s linear;
}

.slide-out-widget-area-toggle[data-icon-animation="simple-transform"].mobile-icon .lines {
	background-color: transparent!important;
}

.slide-out-widget-area-toggle.mobile-icon .lines-button:after,  .slide-out-widget-area-toggle.mobile-icon .lines:before, .slide-out-widget-area-toggle.mobile-icon .lines:after,
header#top .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"].mobile-icon .lines-button.x2 .lines {
	height: 2px!important;
	width: 22px!important;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button:after {
	height: 3px;
	top: 0px;
    width: 2rem;
    border-radius: 2px;
}

body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines, body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before, body[data-header-search="false"]:not(.mobile) #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:after {
	height: 3px;
	width: 2rem;
	border-radius: 2px;
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines:before {
	top: 9px;
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .close .lines:before {
	top: 10px;
}

body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"]  .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.close .lines:before {
	-webkit-transform: translateY(-9px) rotateZ(-45deg);
   -moz-transform: translateY(-9px) rotateZ(-45deg);
   -ms-transform: translateY(-9px) rotateZ(-45deg);
   -o-transform: translateY(-9px) rotateZ(-45deg);
   transform: translateY(-9px) rotateZ(-45deg);
}
body[data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"]  .slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.close .lines:after {
	-webkit-transform: translateY(10px) rotateZ(45deg);
   -moz-transform: translateY(10px) rotateZ(45deg);
   -ms-transform: translateY(10px) rotateZ(45deg);
   -o-transform: translateY(10px) rotateZ(45deg);
   transform: translateY(10px) rotateZ(45deg);
}

.slide-out-widget-area-toggle[data-icon-animation="simple-transform"] .lines-button.close:after {
	transform: scale(0,1);
	-webkit-transform: scale(0,1);
}


.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.arrow-up.close {
  -webkit-transform: scale3d(0.8, 0.8, 0.8) rotate3d(0, 0, 1, 90deg);
  transform: scale3d(0.8, 0.8, 0.8) rotate3d(0, 0, 1, 90deg);
}

.lines-button.minus.close .lines:before, .lines-button.minus.close .lines:after {
  -webkit-transform: none;
  transform: none;
  top: 0;
  width: 1.4rem;
}

.lines-button.x.close .lines {
  background: transparent!important;
}
.lines-button.x.close .lines:before, .lines-button.x.close .lines:after {
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  top: 0;
  width: 1.4rem;
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x.close .lines:before {
  -webkit-transform: rotate3d(0, 0, 1, 45deg);
  transform: rotate3d(0, 0, 1, 45deg);
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x.close .lines:after {
  -webkit-transform: rotate3d(0, 0, 1, -45deg);
  transform: rotate3d(0, 0, 1, -45deg);
}

.lines-button.x2 .lines {
  transition: background 0.2s linear, opacity 0.2s linear;
}
.lines-button.x2 .lines:before, .lines-button.x2 .lines:after {
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  transition: top 0.4s 0.45s ease, -webkit-transform 0.3s ease, background-color 0.2s linear, opacity 0.2s linear;
  transition: top 0.4s 0.45s ease, transform 0.3s ease, background-color 0.2s linear, opacity 0.2s linear;
}

.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines,
#header-outer.transparent header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] a .lines-button.x2.close .lines,
#header-outer header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] a:hover .x2.close i.lines, 
#header-outer header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] a .x2.close i.lines,
#header-outer.transparent.directional-nav-effect .midnightHeader.nectar-slider header#top nav ul .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] a span.light .lines-button.close i {
  transition: background 0.3s 0s ease, opacity 0.9s linear;
  background: transparent!important;
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:before, .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:after {
  transition: top 0.5s ease, -webkit-transform 0.3s 0.4s ease, background-color 0.2s ease, opacity 0.2s linear;
  transition: top 0.5s ease, transform 0.3s 0.4s ease, background-color 0.2s ease, opacity 0.2s linear;
  top: 0;
  width: 1.4rem;
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:before {
  -webkit-transform: rotate3d(0, 0, 1, 45deg);
  transform: rotate3d(0, 0, 1, 45deg);
}
.slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:after {
  -webkit-transform: rotate3d(0, 0, 1, -45deg);
  transform: rotate3d(0, 0, 1, -45deg);
}

.slide-out-widget-area-toggle a > span {
	transition: -webkit-transform 0.33s 0.3s ease-in;
	transition: transform 0.33s 0.3s ease-in;
	-webkit-transform-origin: center;
    transform-origin: center;
    display: block;
    height: 21px;
}
.slide-out-widget-area-toggle.mobile-icon a > span  {
	height: 20px;
}
#header-outer.transparent.directional-nav-effect > header#top nav > ul.buttons .slide-out-widget-area-toggle a > span > span > span {
    height: 21px;
}
#header-outer .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"]  .open > span {
   -webkit-transform: rotate3d(0, 0, 1, -180deg);
   transform: rotate3d(0, 0, 1, -180deg);
}

#boxed #header-outer[data-full-width="true"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"]  .open > span,
body[data-slide-out-widget-area-style="slide-out-from-right"] #header-outer:not([data-full-width="true"]) .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"]  .open > span {
   -webkit-transform: rotate3d(0, 0, 1, 0deg);
   transform: rotate3d(0, 0, 1, 0deg);
}

.slide-out-widget-area-toggle .closed > span {
	transition: -webkit-transform 0.33s 0s ease;
	transition: transform 0.33s 0s ease;
}

#slide-out-widget-area .menuwrapper {
	position: relative;
	-webkit-perspective: 1000px;
	perspective: 1000px;
	-webkit-perspective-origin: center;
	perspective-origin: center;
	margin-right: 0!important;
	display: block;
}

#slide-out-widget-area .menuwrapper:first-child {
	margin-right: 100px;
}

#slide-out-widget-area .menuwrapper button {
	background: #ccc;
	border: none;
	width: 48px;
	height: 45px;
	text-indent: -900em;
	overflow: hidden;
	position: relative;
	cursor: pointer;
	outline: none;
}



#slide-out-widget-area .menuwrapper button:after {
	content: '';
	position: absolute;
	width: 68%;
	height: 5px;
	background: #fff;
	top: 10px;
	left: 16%;
	box-shadow: 
		0 10px 0 #fff, 
		0 20px 0 #fff;
}

#slide-out-widget-area .menuwrapper ul {
	padding: 0;
	list-style: none;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

#slide-out-widget-area .menuwrapper li {
	position: relative;
}

#slide-out-widget-area.fullscreen .menuwrapper li a,
#slide-out-widget-area.fullscreen-alt .menuwrapper li a {
	display: block;
	position: relative;
	padding: 6px 20px;
	color: #fff;
	outline: none;
}

#slide-out-widget-area.fullscreen-alt .menuwrapper li a {
	overflow: hidden;
}

#slide-out-widget-area .menuwrapper li small {
	display: inline-block;
	text-transform: uppercase;
	font-size: 15px;
	font-family: 'Open Sans';
	font-weight: 600;
	letter-spacing: 2px;
	position: relative;
	top: -4px;
	opacity: 0.6;
}

#slide-out-widget-area:not(.fullscreen):not(.fullscreen-alt) .menuwrapper li small {
	font-size: 10px;
	display: block;
	font-family: 'Open Sans';
	font-weight: 700;
}
#slide-out-widget-area.fullscreen-alt .menuwrapper li small {
	display: block;
}

#slide-out-widget-area .no-touch .menuwrapper li a:hover {
	background: rgba(255,248,213,0.1);
}

#slide-out-widget-area .menuwrapper li.back > a {
	background: rgba(0,0,0,0.13);
}

#slide-out-widget-area:not(.fullscreen) .menuwrapper li.back > a {
	padding-left: 10px;
	padding-right: 10px;
	margin-left: -10px;
}

#slide-out-widget-area.fullscreen-alt .menuwrapper li.back > a {
	padding: 6px 0;
	transform: scale(0.7);
	-webkit-transform: scale(0.7);
	background-color: transparent!important;
}


#slide-out-widget-area .menuwrapper li.back,
#slide-out-widget-area .menu.subview li.subviewopen > .sub-menu > li.back {
	display: inline-block;
	margin-bottom: 20px!important;
}

#slide-out-widget-area .menuwrapper .menu {
	margin: 0;
	position: relative;
	width: 100%;
	opacity: 0;
	pointer-events: none;
	-webkit-transform: translateY(10px);
	transform: translateY(10px);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;

}

#slide-out-widget-area .menuwrapper .menu.menu-toggle {
	transition: all 0.25s ease;
}

#slide-out-widget-area .menuwrapper .menu.menuopen {
	opacity: 1;
	pointer-events: auto;
	-webkit-transform: translateY(0px);
	transform: translateY(0px);
}

/* Hide the inner submenus */
#slide-out-widget-area .menuwrapper li .sub-menu {
	display: none;
	margin: 0!important;
	padding: 0!important;
}

/* 
When a submenu is openend, we will hide all li siblings.
For that we give a class to the parent menu called "dl-subview".
We also hide the submenu link. 
The opened submenu will get the class "dl-subviewopen".
All this is done for any sub-level being entered.
*/
#slide-out-widget-area .menu.subview li,
#slide-out-widget-area .menu.subview li.subviewopen > a,
#slide-out-widget-area .menu.subview li.subview > a,
#slide-out-widget-area .menu.subview li.subviewopen > small,
#slide-out-widget-area .menu.subview li.subview > small,
#slide-out-widget-area .mobile-only,
body #slide-out-widget-area.slide-out-from-right-hover .inner .off-canvas-menu-container li.subviewopen > a {
	display: none;
}

#slide-out-widget-area .menu.subview li.subview,
#slide-out-widget-area .menu.subview li.subview .sub-menu,
#slide-out-widget-area .menu.subview li.subviewopen,
#slide-out-widget-area .menu.subview li.subviewopen > .sub-menu,
#slide-out-widget-area .menu.subview li.subviewopen > .sub-menu > li {
	display: block;
}

/* Dynamically added submenu outside of the menu context */
#slide-out-widget-area .menuwrapper > .sub-menu {
	position: absolute;
	width: 100%;
	top: 0;
	left: 0;
	margin: 0!important;
	padding: 0!important;
}


.menu.dl-animate-out-5 {
	-webkit-animation: MenuAnimOut5 0.4s ease-in-out;
	animation: MenuAnimOut5 0.4s ease-in-out;
}

.menu.dl-animate-in-5 {
	-webkit-animation: MenuAnimIn5 0.4s ease-in-out;
	animation: MenuAnimIn5 0.4s ease-in-out;
}

.menuwrapper > .sub-menu.dl-animate-in-5 {
	-webkit-animation: SubMenuAnimIn5 0.4s ease-in-out;
	animation: SubMenuAnimIn5 0.4s ease-in-out;
}

.menuwrapper > .sub-menu.dl-animate-out-5 {
	-webkit-animation: SubMenuAnimOut5 0.4s ease-in-out;
	animation: SubMenuAnimOut5 0.4s ease-in-out;
}

@-webkit-keyframes MenuAnimOut5 {
	0% { }
	100% {
		-webkit-transform: rotateY(-25deg) translateX(-300px);
		opacity: 0;
	}
}

@keyframes MenuAnimOut5 {
	0% { }
	100% {
		-webkit-transform: rotateY(-25deg) translateX(-300px);
		transform: rotateY(-25deg) translateX(-300px);
		opacity: 0;
	}
}


@-webkit-keyframes MenuAnimIn5 {
	0% {
		-webkit-transform: rotateY(-25deg) translateX(-300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: rotateY(0deg) translateX(0px);
		opacity: 1;
	}
}

@keyframes MenuAnimIn5 {
	0% {
		-webkit-transform: rotateY(-25deg) translateX(-300px);
		transform: rotateY(-25deg) translateX(-300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: rotateY(0deg) translateX(0px);
		transform: rotateY(0deg) translateX(0px);
		opacity: 1;
	}
}

@-webkit-keyframes SubMenuAnimIn5 {
	0% {
		-webkit-transform: rotateY(25deg) translateX(300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: rotateY(0deg) translateX(0px);
		opacity: 1;
	}
}

@keyframes SubMenuAnimIn5 {
	0% {
		-webkit-transform: rotateY(25deg) translateX(300px);
		transform: rotateY(25deg) translateX(300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: rotateY(0deg) translateX(0px);
		transform: rotateY(0deg) translateX(0px);
		opacity: 1;
	}
}

@-webkit-keyframes SubMenuAnimOut5 {
	0% {
		-webkit-transform: rotateY(0deg) translateX(0px);
		opacity: 1;
	}
	100% {
		-webkit-transform: rotateY(25deg) translateX(300px);
		opacity: 0;
	}
}

@keyframes SubMenuAnimOut5 {
	0% {
		-webkit-transform: rotateY(0deg) translateX(0px);
		transform: rotateY(0deg) translateX(0px);
		opacity: 1;
	}
	100% {
		-webkit-transform: rotateY(25deg) translateX(300px);
		transform: rotateY(25deg) translateX(300px);
		opacity: 0;
	}
}



.menu.dl-animate-out-4 {
	-webkit-animation: MenuAnimOut4 0.4s ease-in-out;
	animation: MenuAnimOut4 0.4s ease-in-out;
}

.menu.dl-animate-in-4 {
	-webkit-animation: MenuAnimIn4 0.4s ease-in-out;
	animation: MenuAnimIn4 0.4s ease-in-out;
}

.menuwrapper > .sub-menu.dl-animate-in-4 {
	-webkit-animation: SubMenuAnimIn4 0.4s ease;
	animation: SubMenuAnimIn4 0.4s ease;
}

.menuwrapper > .sub-menu.dl-animate-out-4 {
	-webkit-animation: SubMenuAnimOut4 0.4s ease;
	animation: SubMenuAnimOut4 0.4s ease;
}

@-webkit-keyframes MenuAnimOut4 {
	0% { }
	100% {
		-webkit-transform: scale(1.2);
		opacity: 0;
	}
}

@keyframes MenuAnimOut4 {
	0% { }
	100% {
		-webkit-transform: scale(1.2);
		transform: scale(1.2);
		opacity: 0;
	}
}


@-webkit-keyframes MenuAnimIn4 {
	0% {
		-webkit-transform:  scale(1.2);
		opacity: 0;
	}
	100% {
		-webkit-transform: scale(1);
		opacity: 1;
	}
}

@keyframes MenuAnimIn4 {
	0% {
		-webkit-transform: scale(1.2);
		transform: scale(1.2);
		opacity: 0;
	}
	100% {
		-webkit-transform:  scale(1);
		transform:  scale(1);
		opacity: 1;
	}
}

@-webkit-keyframes SubMenuAnimIn4 {
	0% {
		-webkit-transform: scale(0.8);
		opacity: 0;
	}
	100% {
		-webkit-transform: scale(1);
		opacity: 1;
	}
}

@keyframes SubMenuAnimIn4 {
	0% {
		-webkit-transform: scale(0.8);
		transform: scale(0.8);
		opacity: 0;
	}
	100% {
		-webkit-transform: scale(1);
		transform: scale(1);
		opacity: 1;
	}
}

@-webkit-keyframes SubMenuAnimOut4 {
	0% {
		-webkit-transform: scale(1);
		opacity: 1;
	}
	100% {
		-webkit-transform: scale(0.8);
		opacity: 0;
	}
}

@keyframes SubMenuAnimOut4 {
	0% {
		-webkit-transform: scale(1);
		transform: scale(1);
		opacity: 1;
	}
	100% {
		-webkit-transform: scale(0.8);
		transform: scale(0.8);
		opacity: 0;
	}
}


/***************** Flickr widget ******************/

#footer-outer .col #flickr > div img {
	background-color: #444;
	border-color: #4d4d4d;
}

#footer-outer .col #flickr > div a:hover img {
	border-color: #616161;
	background-color: #616161;
}


#footer-outer .col .widget_recent_entries span, #footer-outer .col .recent_posts_extra_widget .post-widget-text span,
#slide-out-widget-area .widget_recent_entries span, #slide-out-widget-area .recent_posts_extra_widget .post-widget-text span {
	display: block;
	line-height: 17px;
	color: #999;
	font-size: 11px;
	margin-bottom: 6px;
}

#slide-out-widget-area .widget_recent_entries span, #slide-out-widget-area .recent_posts_extra_widget .post-widget-text span {
	color: inherit;
}

#slide-out-widget-area .widget_recent_entries span {
	opacity: 0.8;
}

#footer-outer #footer-widgets .col ul li {
	padding: 8px 0px;
	list-style: none;
	margin-bottom: 0px;
	border-bottom: 1px solid #444;
}

#footer-outer #footer-widgets .col ul li:first-child {
	padding-top: 0px!important;
}

#footer-outer #footer-widgets .col ul li:last-child {
	margin-bottom: 0px;
}

#footer-outer #footer-widgets .col ul ul li:last-child { 
	border-bottom: 0px!important;
}

#footer-outer #footer-widgets .col p {
	padding-bottom: 20px;
}

#footer-outer #footer-widgets .col p:last-child {
	padding-bottom: 0px;
} 



/***************** Calendar Widget ******************/

.widget_calendar {
	position: relative;	
}

.widget_calendar table {
	width: 100%;
	border-collapse:collapse;
}

.widget_calendar table td, #footer-outer #footer-widgets .col .widget_calendar table th {
	text-align: center;
	
}

.widget_calendar table tbody td {
	border: 0px;
	padding: 4px;
	font-size: 11px;
	color: #666;
}

.widget_calendar table tbody tr td:first-child {
	border-left: 0px;
}

.widget_calendar table tbody tr:nth-child(2n+1) {
	background-color: #f0f0f0;
}

.widget_calendar table th {
	font-family: 'Open Sans';
	font-weight: 700;
	border-bottom: 0px;
	text-align: center!important;
	padding-bottom: 10px;
	color: #999999;
}


.widget_calendar table #prev {
	text-align: left;
	position: relative; 
	padding: 10px 0px 0px 0px;
	z-index: 2;
}

.widget_calendar table #next {
	text-align: right;
	position: relative; 
	padding: 10px 0px 0px 0px;
	z-index: 2;
}

.widget_calendar caption {
	position: absolute;
	bottom: 0px;
	z-index: 1;
	width: 100%;
	text-align: center;
}

#footer-outer #footer-widgets .col .widget_calendar table tbody td {
	border: 0px;
	color: #666666;
	padding: 4px;
	font-size: 11px;
}

#footer-outer #footer-widgets .col .widget_calendar table {
	border-collapse:collapse;
}

#footer-outer #footer-widgets .col .widget_calendar table tbody tr td:first-child {
	border-left: 0px;
}

#footer-outer #footer-widgets .col .widget_calendar table tbody tr:nth-child(2n+1) {
	background-color: #343739;
}

#footer-outer #footer-widgets .col .widget_calendar table th {
	border-bottom: 0px;
	padding-bottom: 10px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #666666;
}

#footer-outer #footer-widgets .col .widget_calendar table tfoot tr {
	margin-top: 20px;
}

.widget_search .search-form, .newsletter-widget form {
	position: relative;  
	overflow: hidden;
}

body[data-button-style="rounded"].ascend .container-wrap .search-form input[type="submit"] {
	 border-radius: 0px!important;
    -webkit-border-radius: 0px!important;
    -o-border-radius: 0px!important;
}

.widget_search .search-form input[type=text], .newsletter-widget form input[type=email] {
	padding-right: 75px!important;
	border-radius: 0px 2px 2px 0px;
	margin: 0!important;
}

.widget_search .search-form input[type=submit], .newsletter-widget form input[type=submit], body[data-form-style="minimal"]  .main-content .post-password-form input[type=submit] { 
	position: absolute;
	right: 0px;
	top: 0px;
	margin: 0!important;
	line-height: 22px;
	padding: 10px 11px;
}

body[data-form-style="minimal"]  .main-content .post-password-form input[type=submit] {
	top: auto;
	bottom: 35px;
}

#footer-outer .widget_search .search-form input[type=submit], #footer-outer .newsletter-widget form input[type=submit] { 
	padding: 10px 11px 11px 10px;
}

#footer-outer #footer-widgets .col .tagcloud a {
	background-color: #1B1B1B;
    color: #A0A0A0 !important;
    cursor: pointer;
    display: inline-block;
    float: left;
    margin: 3px 3px 0px 0px;
    padding: 5px 7px;
    position: relative;
    font-size: 8pt !important;
    text-transform: capitalize;
    transition: all 0.2s linear;
    border-radius: 2px;
    line-height: 22px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
}

#footer-outer #footer-widgets .col .widget_tag_cloud:after {
	display: block; 
	height: 0; 
	clear: both; 
	content: ""; 
	visibility: hidden;
}

#slide-out-widget-area .tagcloud a {
	padding: 2px 11px;
	border: 1px solid #fff;
	margin: 0px 8px 8px 0px;
	font-size: 12px;
	display: block;
	float: left;
	text-transform: uppercase;
	transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
}

#slide-out-widget-area .tagcloud a:last-child:after, #slide-out-widget-area .tagcloud:after {
	display: block;
	content: ' ';
	clear: both;
	height: 1px;
}

#footer-outer #footer-widgets .col .tagcloud a:hover {
	background-color: #27CFC3;
	color: #fff!important;
}

#footer-outer #footer-widgets .col .widget_recent_comments ul li, #slide-out-widget-area .widget_recent_comments ul li {
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.15);
    border: medium none;
    display: block;
    margin-bottom: 18px;
    padding: 19px !important;
    position: relative;
}

#slide-out-widget-area .widget_recent_comments ul li {
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.05);
}

#footer-outer #footer-widgets .col .widget_recent_comments ul li:last-child, #slide-out-widget-area .widget_recent_comments ul li:last-child {
	margin-bottom: 0px;	
}

#footer-outer #footer-widgets .col input[type=text], #footer-outer #footer-widgets .col input[type=email] {
	padding: 10px;
	width: 100%;
}

body[data-form-style="minimal"] #footer-outer #footer-widgets .col input[type=text] {
	color: #fff;
}

body:not([data-form-style="minimal"]) #footer-outer #footer-widgets .col input[type=text]:focus, body:not([data-form-style="minimal"]) #footer-outer #footer-widgets .col input[type=email]:focus {
	background-color: #fff;
}


#footer-outer #footer-widgets .col input[type=submit] {
	background-color: #27CFC3;
	opacity: 0.9;
	transition: opacity 0.2s linear 0s;
	-moz-transition: opacity 0.2s linear 0s;
	-webkit-transition: opacity 0.2s linear 0s;
	-o-transition: opacity 0.2s linear 0s;
}

#footer-outer #footer-widgets .col input[type=submit]:hover {
	opacity: 1;
}

#footer-outer #footer-widgets .col .search-form form, #footer-outer #footer-widgets .col .search-form label, 
#footer-outer #footer-widgets .col .newsletter-widget form, #footer-outer #footer-widgets .col .search-form {
	line-height: 12px!important;
}

#footer-outer .recent_projects_widget img {
	background-color: #444;
	border-color: #4d4d4d;
}

#footer-outer .recent_projects_widget a:hover img {
	border-color: #616161;
	background-color: #616161;
}

#footer-outer .widget.widget_nav_menu li a {
  border-bottom: 0px!important;
}

#footer-outer #footer-widgets .col ul li:first-child > a {
  padding-top: 0px!important;
}

#footer-outer #footer-widgets .rsswidget img {
	margin-bottom: -2px!important;
	margin-right: 2px;
}

/***************** Call to action ******************/

#call-to-action {
	font-family: 'Open Sans';
	font-weight: 300;
	position: relative; 
	z-index: 10;
	background-color: #eeedec;
	text-align: center;
	vertical-align: bottom;
	font-size: 22px;
}

#call-to-action .container {
	padding: 42px 0px 36px 0px!important;	
}

#call-to-action .container span {
	letter-spacing: -1px;
	display: inline-block;
}

#call-to-action .container a {
	background: none repeat scroll 0 0 #27CFC3;
	position: relative;
	top: -3px;
    color: #FFFFFF;
    margin-bottom: 0px!important;
    font-size: 12px;
    box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -moz-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -webkit-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    -o-box-shadow: 0 -3px rgba(0, 0, 0, 0.1) inset;
    text-transform: uppercase;
    font-family: 'Open Sans';
	font-weight: 700;
    letter-spacing: 2px;
    margin-left: 20px;
    line-height: 24px;
    display: inline-block;
    border-radius: 5px 5px 5px 5px;
    padding: 16px 21px;
}

#call-to-action .triangle {
	border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #f8f8f8;
    height: 10px;
    width: 10px;
    left: 440px;
    margin: -42px auto 33px auto;
}

#call-to-action a {
	color: #45484a;
	opacity: 1;
	transition: opacity 0.3s linear;
	-moz-transition: opacity 0.3s linear;
	-webkit-transition: opacity 0.3s linear;
	-o-transition: opacity 0.3s linear;
}

#call-to-action a:hover {
	opacity: 0.75;
}

#call-to-action span {
	color: #4b4f52;
	font-family: 'Open Sans';
	font-weight: 600;
}


/*-------------------------------------------------------------------------*/
/*	8. Sidebar Styles
/*-------------------------------------------------------------------------*/

#sidebar div ul {
	margin-left: 0px;	
}

#sidebar div ul li {
	padding: 8px 0px;
	list-style: none;
	border-bottom: 1px solid #e6e6e6;
}

#sidebar > div {
	margin-bottom: 50px;	
}

#sidebar > div:last-child {
	margin-bottom: 0px;
}

#sidebar #sidebar-inner {
	margin-bottom: 0px!important;
}

#sidebar .widget_recent_entries span, .recent_posts_extra_widget span {
	display: block;
	line-height: 13px;
	font-size: 11px;
	margin-bottom: 6px;
}

#sidebar .widget_recent_entries span {
	color: #999;
}

#sidebar h4 {
    margin-bottom: 10px;
    color: #999;
    font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
    letter-spacing: 2px;
    margin-bottom: 15px;
    text-transform: uppercase;
}

#sidebar .widget_recent_comments h4, #sidebar .Simple_Flickr_Photos h4 {
	margin-bottom: 16px;
}

#sidebar .widget li.recentcomments {
	padding: 15px!important;
	margin-bottom: 22px;
	border: none;
	position: relative;
	display: block;
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.02);
}

#sidebar .widget li:first-child {
	padding-top: 0px;
}


#sidebar .widget .tagcloud a, .post-tags a  {
	background-color: #333333;
    color: #FFFFFF !important;
    cursor: pointer;
    display: inline-block;
    float: left;
    line-height: 22px;
    margin: 3px 3px 0px 0px;
    font-size: 8pt!important;
    padding: 5px 7px;
    position: relative;
    text-transform: capitalize;
    transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
}

#sidebar .widget_tag_cloud:after {
	display: block; 
	height: 0; 
	clear: both; 
	content: ""; 
	visibility: hidden;
}

#sidebar .widget .tagcloud a:hover, .post-tags a:hover {
	background-color: #27CFC3;
}

#sidebar .widget input[type=text], #sidebar .widget input[type=email] {
    padding: 10px;
    width: 100%;
}

#sidebar .widget form p {
	padding-bottom: 15px;
}


#sidebar .widget.widget_categories ul ul, #sidebar .widget.widget_pages ul ul, #sidebar .widget.widget_nav_menu ul ul {
	margin: 0px 0px 0px 0px!important;
	padding: 0px 0px 0px 20px;
}

#sidebar .widget.widget_categories li, #sidebar .widget.widget_pages li, #sidebar .widget.widget_nav_menu li {
	border-bottom: 0px!important;
	padding: 0px!important;
}

#sidebar .widget.widget_categories li a, #sidebar .widget.widget_pages li a, #sidebar .widget.widget_nav_menu li a {
	padding: 8px 0px;
	display: block;
	border-bottom: 1px solid #E6E6E6;	
}

#sidebar .widget.widget_categories > ul > li:first-child > a, #sidebar .widget.widget_pages > ul > li:first-child > a, #sidebar .widget.widget_nav_menu > ul > li:first-child > a {
	padding-top: 0px;
}


#sidebar.left-sidebar {
	float: left;	
}

#post-area.col_last {
	float: right;
}

body[data-ext-responsive="true"].single-post .container-wrap.no-sidebar #post-area, body[data-ext-responsive="true"].single-post .container-wrap.no-sidebar .comment-list > li,
body[data-ext-responsive="true"].single-post #page-header-bg[data-post-hs="default_minimal"] h1,
body[data-ext-responsive="true"].single-post .heading-title[data-header-style="default_minimal"] .entry-title {
	max-width: 1000px;
	margin: 0 auto!important;
}

.recent_projects_widget img, #sidebar #flickr img, #footer-outer #flickr img {
	margin-bottom: 0px!important;
	display: block;
	padding: 5px;
	background-color: #fff;
	margin-top: 0px;
	margin-left: 0px;
	border: 1px solid #e5e5e5;
	transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
}


.recent_projects_widget a:hover img, #sidebar #flickr a:hover img, #footer-outer #flickr a:hover img {
	border-color: #27CFC3;
}

.recent_projects_widget div a, #sidebar #flickr div a, #footer-outer #flickr div a {
	float: left;
	margin: 2% 2% 0 0;
	width: 32%!important;
}

.recent_projects_widget div a:nth-child(3n+3), #sidebar #flickr div:nth-child(3n+3) a, #footer-outer #flickr div:nth-child(3n+3) a {
	margin-right: 0px!important;
}

#slide-out-widget-area .recent_projects_widget img {
	height: auto;
	width: 100%;
}

.recent_posts_extra_widget ul li:first-child {
	padding-top: 0px!important;
}

.recent_posts_extra_widget .post-widget-image {
	float: left;
	position: relative;
	z-index: 50;
	margin-right: 10px;
}

.recent_posts_extra_widget .post-widget-image img {
	margin: 3px 0px;
	display: block;
}

.recent_posts_extra_widget .clear {
	padding-bottom: 0px;
}

.recent_posts_extra_widget .post-widget-text {
	line-height: 17px;
}

.recent_posts_extra_widget .post-widget-text span {
	margin-top: 2px;
	margin-bottom: 4px;
}

#sidebar select {
	max-width: 100%;
}

#footer-outer #flickr:after, #sidebar #flickr:after, .recent_projects_widget > div:after {
	clear: both;
	content: '';
	display: block;
}

.widget_pages ul ul {
	margin-top: 20px;
	margin-bottom: 30px;
	margin-left: 20px!important;
}

/*-------------------------------------------------------------------------*/
/*	9.  Blog + Pagination Styles
/*-------------------------------------------------------------------------*/

#post-area #pagination {
	padding-left: 95px;
}

#post-area.infinite_scroll #pagination {
	display: none;
}

#infscr-loading {
    position: relative;
    z-index: 10000000;
    background-image: url("img/icons/loading-white-bg.gif");
    background-repeat: no-repeat;
    background-position: center;
    height: 60px;
    border-radius: 2px;
    color: #555;
    font-size: 12px;
    display: inline-block;
    margin: 0px auto;
    text-align: center;
    width: 60px;
    font-family: 'Open Sans';
	font-weight: 700;
    font-size: 12px;
    letter-spacing: 2px;
    border-color: #555;
    border-style: solid;
    border-width: 0;
    box-sizing: content-box!important;
    -webkit-box-sizing: content-box!important;
    -o-box-sizing: content-box!important;
    -moz-box-sizing: content-box!important;
}

#infscr-loading.default_loader {
	background-image: none;
}

.infscr-loading-wrap {
	margin: 20px auto;
	clear: both;
	padding: 0;
	text-align: center;
	height: 0;
	opacity: 0;
    transform: scale(0.5);
    -moz-transform: scale(0.5);
    -o-transform: scale(0.5);
    box-sizing: content-box!important;
    -webkit-box-sizing: content-box!important;
    -o-box-sizing: content-box!important;
    -moz-box-sizing: content-box!important;
}

#infscr-loading div { 
	opacity: 0;
	color: #555;
	font-size: 12px;
	font-family: 'Open Sans';
	font-weight: 700;
    letter-spacing: 2px; 
    text-transform: uppercase;
}

#infscr-loading img { margin-bottom: 0; display: none!important; }

#post-area {
	padding-right: 20px;	
	margin-top: 4px;
}
 
#post-area.col_last {
	padding-left: 20px;	
	padding-right: 0px!important;	
}

#post-area.col_last.span_12 {
	padding-left: 0px;	
	float: none!important;
}

#post-area > article .content-inner {
	margin-bottom: 0px;	
	border-bottom: 0px;
}

article.post .more-link, .blog-recent .more-link  {
	display: block;
	margin-top: 25px;
	cursor: default;
	color: #fff;
}

article.post .content-inner {
	border-bottom: 1px solid #DDDDDD;
	padding-bottom: 50px;
	margin-bottom: 50px;
}

article.post .more-link span, .blog-recent .more-link span {
	background-color: #333;
	transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    -moz-transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    -webkit-transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    -o-transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
	width: auto;
	cursor: pointer;
	padding: 6px 10px;
	font-size: 11px;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
}

article.post .more-link span:hover, .blog-recent .more-link span:hover {
	background-color: #27CFC3;
}

article.post .post-meta {
	position: absolute;
	left: 0px;
	top: 0px;	
}

article.post.masonry-blog-item  .post-meta {
	border-right: 0!important;
}

.recent-posts article.post .post-header a {
	color: #999;
}

.recent-posts-title {
	font-size: 12px!important;
	letter-spacing: 1.5px!important;
	margin-bottom: 7px!important;
}

.post-header, #single-below-header {
	margin-bottom: 12px;
	font-size: 11px;
	color: #888;
}

.recent-posts .post-header a {
	color: #888;
}

.recent-posts .post-header a:hover {
	color: #27CFC3;
}

.recent-posts .post-header .title {
	margin-bottom: 1px;	
}

.recent-posts .post-header .title a {
	color: #27CFC3;
}

.recent-posts .post-header .title a:hover {
	color: inherit;
}

article.post .post-header h1, article.post .post-header h2 {
	font-size: 26px;
    line-height: 30px;
}

article.post .post-header h2 a {
	color: #27CFC3;
}

article.post .post-header h2 a:hover {
	color: inherit!important;
}

article.post .post-header a, article.result a, #single-below-header a {
	color: inherit!important;
}

#single-below-header a:hover {
	color: #27CFC3;
}

article.post .post-content {
	position: relative;
	min-height: 98px;
}

.post-tags h4 {
	float: left;
	margin-top: 8px;
	margin-bottom: 15px;
	margin-right: 25px;
}

.post-tags .clear {
	padding-bottom: 0px;
}

.single .post-content {
	padding-left: 0px;
}

.single #single-meta {
	right: 0px;
	height: 21px;
}

.single #single-meta ul {
	margin-bottom: 0px;
}

.single #single-meta {
	margin-top: 4px;
}

.single #single-meta ul li {
	float: left;
	list-style: none;
	padding: 0px!important;
	border-bottom: 0px!important;
}

.single #single-meta ul li .nectar-love-wrap {
	border-right: 1px solid #ddd;	
	margin-right: 20px;
	padding-right: 20px;
	width: auto!important;
}

.single #single-meta ul li .nectar-love-wrap span {
	font-size: 12px;
    height: 13px;
    display: block;
    width: auto;
    padding-left: 0px; 
    font-family: 'Open Sans';
	font-weight: 400;
    line-height: 11px;
}

.single #single-below-header {
	margin-top: 8px;
	margin-bottom: 0px;
}

.single #single-below-header span {
	font-family: inherit!important;
	font-size: 12px;
	line-height: 16px;
	color:  #888;
	padding-left: 0;
	display: block;
    float: left;
}
.single [data-post-hs="default_minimal"] #single-below-header span,
.single .heading-title[data-header-style="default_minimal"] #single-below-header span {
	font-size: 14px;
}
.single #single-below-header > span {
	padding: 0 10px 0 10px;	
	border-left: 1px solid #DDDDDD;
}

.single #single-below-header span:first-child {
	padding-left: 0;
	border: none;
}

.single #single-below-header:after {
	content: ".";
	display: block;
	height: 0px;
	clear: both;
	visibility: hidden;
}

.single.single-post .section-title h1 {
	max-width: 800px;
}

.single.single-post [data-post-hs="default_minimal"] .section-title h1 {
	max-width: none;
}

.single .heading-title[data-header-style="default_minimal"] h1,
 body[data-ext-responsive="true"].single-post #page-header-bg[data-post-hs="default_minimal"] h1 {
	padding: 16px 0 16px 0;
}

.single .heading-title[data-header-style="default_minimal"] .meta-category a {
	border: 2px solid #000;
    padding: 4px 8px;
    margin: 5px 6px 15px 5px;
    display: inline-block;
    transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    font-size: 12px;
    color: #000;
    text-transform: uppercase;
}

body[data-button-style="rounded"].single .heading-title[data-header-style="default_minimal"] .meta-category a {
	border-radius: 100px;
}

.single .heading-title[data-header-style="default_minimal"] .meta-category a:hover {
	border-color: transparent;
	color: #fff;
}

.single .heading-title[data-header-style="default_minimal"] {
	border-bottom: 0;
	text-align: center;
	padding-top: 60px;
}
.single .heading-title[data-header-style="default_minimal"] #single-below-header span {
	float: none;
	display: inline-block;
}
.post-content {
	padding-left: 95px;
}

article.post .content-inner {
	position: relative;	
}

article.post.quote .post-content .quote-inner, article.post.link .post-content .link-inner, article.format-status .post-content .status-inner, article.post.format-aside .aside-inner {
	background-color: #27CFC3;
	position: relative;
	padding: 15px;
	color: #fff;
	transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
	-moz-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
	-o-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
	-webkit-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
}

.single-post article.post.quote .post-content .quote-inner {
	padding: 45px;
}

article.post.quote .content-inner .quote-inner .whole-link {
	transition: all .45s cubic-bezier(0.25, 1, 0.33, 1)s;
	-moz-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
	-o-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
	-webkit-transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
}

.single-post .quote-below-content {
	margin-top: 70px;
}


article.post.format-aside .aside-inner p {
	margin-bottom: 15px;
}

article.post.format-aside .aside-inner .post-header {
	margin-bottom: 0px;
}

article.post.format-chat .content-inner dt {
	margin-top: 15px;
}

article.post.quote .quote-inner a, article.post.format-aside .aside-inner a, article.post.format-aside .aside-inner a:hover {
	color: #fff!important;
}

article.post.format-aside .aside-inner p, article.post.format-aside .aside-inner .post-header {
	color: #fff!important;
}

article.post.quote .quote-inner .title, article.post.quote .quote-inner .author, article.post.quote .quote-inner .title, article.post.quote .quote-inner .icon  {
	position: relative;
	z-index: 100;
}

article.post.quote .content-inner .whole-link {
	position: absolute;
	z-index: 10;
	display: block;
	background-color: #27CFC3;
	height: 100%;
	width: 100%;
	top: 0px;
	left: 0px;	
}

article.post.quote .content-inner .quote-inner:hover .whole-link {
	background-color: #333333!important;
}

article.post.quote figure {
	margin: 0 auto!important;
}

article.post.quote blockquote {
	background-image: none!important;
	padding: 0px!important;
	color: #fff!important;
	font-family: inherit!important;
	margin: 0 auto!important;
}

article.post.quote .post-content .quote-inner span.icon {
 	bottom: 17px;
	height: 17px;
	width: 19px;
	display: block;
	background-image: url(img/icons/quote.png);
	position: absolute;
	right: 20px;
}

article.post.link .post-content .link-inner span.icon {
	bottom: 17px;
	height: 20px;
	width: 18px;
	display: block;
	background-image: url(img/icons/link.png);
	position: absolute;
	right: 20px;
}

article.post.link .post-content .destination {
	word-wrap:break-word;
}

article.post.format-status .post-content .status-inner span.icon {
	bottom: 17px;
	height: 16px;
	width: 18px;
	display: block;
	background-image: url(img/icons/status.png);
	position: absolute;
	right: 20px;
}

article.post.format-aside .post-content .aside-inner span.icon {
	bottom: 17px;
	height: 16px;
	width: 18px;
	display: block;
	background-image: url(img/icons/aside.png);
	position: absolute;
	right: 20px;
}

@media only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5),
only screen and (min-resolution: 144dpi) {
	article.post.quote .post-content .quote-inner span.icon {
		background-size: 19px 17px;
		background-image: url(img/icons/quote@2x.png)!important;
	}
	
	article.post.link .post-content .link-inner span.icon {
		background-size: 18px 20px;
		background-image: url(img/icons/link@2x.png)!important;
	}
	
	article.post.format-status .post-content .status-inner span.icon {
		background-size: 19px 17px;
		background-image: url(img/icons/status@2x.png)!important;
	}
	
	article.post.format-aside .post-content .aside-inner span.icon {
		background-size: 19px 17px;
		background-image: url(img/icons/aside@2x.png)!important;
	}
}



article.post .post-content.quote a, article.post .post-content.link a {
    display: block;
    z-index: 10;
}

article.post.quote .post-content h2, article.post.link .post-content h2, article.post.format-status .post-content h2,
.masonry.classic_enhanced article.post.quote.masonry-blog-item h3.title, .masonry.classic_enhanced article.post.link.masonry-blog-item h3.title {
	color: #fff;
	font-size: 26px;
    line-height: 30px;
    display: block;
    margin-bottom: 15px;
}

article.format-status .post-content h2 a {
	color: #fff!important;
}

article.post.quote .post-content a:hover .quote-inner, article.post.link .post-content a:hover .link-inner, article.format-status .post-content:hover .status-inner {
	background-color: #333333!important;
}

article.post .nectar-love-wrap {
	visibility: hidden;	
}


article.post .post-meta a {
	color: #888888;
}

#post-area:not(.masonry) article.post .post-content .post-meta a.nectar-love {
	left: -2px;
	position: relative;
}

article.post .post-meta a:hover {
	color: #27CFC3;
}

article.post h2.title {
	margin-bottom: 2px;
}


article.post .post-meta {
	display: block;
	margin-bottom: 20px;
	border-right: 1px solid #E6E6E6;
}

article.post .post-meta.no-img {
	top: 6px;
}

article.post .content-inner .post-featured-img img {
	max-width: none;
	margin-bottom: 15px!important;
	width: 100%;
}

.single article.post .content-inner .post-featured-img img {
	margin-bottom: 25px!important;
}

article.post .post-meta .date {
	font-size: 12px;
    padding-bottom: 2px;
    margin-bottom: 12px;
    position: relative;
    transition: all 0.2s linear 0s;
}

article.post .post-meta .month, article.post .post-meta .year {
	display: block;
	font-size: 17px;
	line-height: 10px;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 4px;
	padding: 0px;
	font-family: 'Open Sans';
	font-weight: 600;
}

article.post .post-meta .year {
	margin-top: 5px;
}

article.post .post-meta .day {
	display: block;
	font-size: 30px;
	line-height: 29px;
	text-align: center;
	padding: 0px 12px 0px 12px;
	font-family: 'Open Sans';
	font-weight: 700;
	text-transform: uppercase;
}

article.post .post-meta .date {
	padding-bottom: 17px;
	border-bottom: 1px solid #E6E6E6;
}

article.post.video .video-wrap, .single-portfolio .video-wrap {
	position: relative;
	padding-bottom: 56.25%;
	height: 0;
	margin-bottom: 15px;
}

article.post.video .video-wrap iframe, .single-portfolio .video-wrap iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

article.post.video .mejs-container {
	margin-bottom: 15px;	
}

.single article.post.video .mejs-container {
	margin-bottom: 25px;
}

article.post.audio .audio-wrap, .main-content .audio-wrap {
	margin-bottom: 15px;
}

article.post .gallery-slider .gallery,  article.post .gallery-slider .jetpack-slideshow {
	display: none;
}

article.post table {
	width: 100%;
}

article.post table td, article.post table th {
	text-align: center;
}

article.post table tbody td {
	padding: 5px;
	border-right: 1px solid #E6E6E6;
	border-bottom: 1px solid #E6E6E6;
	color: #676767;
}

article.post table tbody tr td:first-child {
	border-left: 1px solid #E6E6E6;
}

article.post table th {
	border-bottom: 1px solid #E6E6E6;
	color: #676767;
}


article.post table #prev {
	text-align: left;
	position: relative; 
	z-index: 2;
}

article.post table #next {
	text-align: right;
	position: relative; 
	z-index: 2;
}

.article.post caption {
	position: absolute;
	bottom: 0px;
	z-index: 1;
	width: 100%;
	text-align: center;
}

p > a > i.icon-3x {
	margin-bottom: 0px!important;
}

#post-area.standard-minimal .post-author {
	position: absolute;
	left: 0;
	top: 0;
	text-align: center;
	width: 100px;
	font-size: 12px;
	line-height: 22px;
}

#post-area.standard-minimal.full-width-content article.post { border-bottom: 1px solid #e6e6e6; padding-top: 70px;}
#post-area.standard-minimal.full-width-content .posts-container > article:last-child { border: none;}
#post-area.standard-minimal.full-width-content article.post .content-inner { padding-bottom: 0; margin-bottom: 70px;}
#post-area.standard-minimal.full-width-content article.post .more-link { margin-top: 25px; }
#post-area.standard-minimal.full-width-content #pagination { text-align: center;}
#post-area.standard-minimal.full-width-content #pagination > div { float: none; display: inline-block;}
#post-area.standard-minimal article.post .more-link span { background-color: transparent!important; padding: 0; color: #333!important;}
 #post-area.standard-minimal article.post .post-header,  #post-area.standard-minimal article.post .content-inner .post-featured-img img,
 #post-area.standard-minimal article.post .content-inner .article-content-wrap > .video > .wp-video,
 #post-area.standard-minimal article.post .content-inner .article-content-wrap > .video > .iframe-embed,
 #post-area.standard-minimal article.post .content-inner .article-content-wrap .audio-wrap,
 #post-area.standard-minimal article.post .content-inner .quote-inner {
 	margin-bottom: 30px!important;
 }
  #post-area.standard-minimal article.post .content-inner .quote-inner h4 { color: #fff; margin-bottom: 20px;}
  #post-area.standard-minimal article.post .content-inner .quote-inner, #post-area.standard-minimal article.post .content-inner .link-inner {
  	padding: 10%;
  }
  #post-area.standard-minimal article.post.quote .post-content .quote-inner span.icon,
  #post-area.standard-minimal article.post.link .post-content .link-inner span.icon { right: 30px; bottom: 30px;}
  #post-area.standard-minimal article.post .content-inner .quote-inner .author { position: relative; padding-left: 30px;}
    #post-area.standard-minimal article.post .content-inner .quote-inner .author:before { 
    	position: absolute;
	  	display: block;
	  	top: 50%;
	  	left: 0;
	  	width: 20px;
	  	height: 2px;
	  	content: ' ';
	  	-ms-transform: translateY(-50%);
	  	-webkit-transform: translateY(-50%);
	  	transform: translateY(-50%);
	  	background-color: #fff;
    }
  #post-area.standard-minimal article.post.has-post-thumbnail .content-inner .quote-inner:after {
  	position: absolute;
  	display: block;
  	top: 0;
  	left: 0;
  	width: 100%;
  	height: 100%;
  	content: ' ';
  	background-color: rgba(0,0,0,0.6);
  }
  #post-area.standard-minimal article.post .more-link {
  	display: inline-block;
  	cursor: pointer;
  	height: 50px;
  	position: relative;
  	line-height: 50px;
  	padding-right: 25px;
  }
  #post-area.standard-minimal article.post .more-link span {
   	transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: all 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
  }
 #post-area.standard-minimal article.post .more-link span:after,
 .team-member[data-style="bio_fullscreen"] .team-meta .arrow-end {
 	display: inline-block;
 	font-family: 'FontAwesome'!important;  speak: none; font-style: normal;  font-weight: normal; font-variant: normal; text-transform: none; line-height: 50px; height: 50px;
    -webkit-font-smoothing: antialiased;
    letter-spacing: 0;
 	content: "\f105"; margin-left: 15px; position: absolute; right: 0; top: 53%;
 	-ms-transform: translateY(-50%);
 	-webkit-transform: translateY(-50%) translateZ(0);
    transform: translateY(-50%) translateZ(0);
    font-size: 25px;
    transition: opacity 0.25s cubic-bezier(0.12, 0.75, 0.4, 1), transform 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: opacity 0.25s cubic-bezier(0.12, 0.75, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
 }
  #post-area.standard-minimal article.post .more-link:hover span:after {
  	transform: translateX(12px) translateY(-50%);
    -webkit-transform: translateX(12px) translateY(-50%);
  }
  #post-area.standard-minimal article.post .more-link:hover span:before { opacity: 1;  transform: translateY(-50%) translateX(0px);
    -webkit-transform: translateY(-50%) translateX(0px); }
  #post-area.standard-minimal article.post .more-link span:before,
  .team-member[data-style="bio_fullscreen"] .team-meta .arrow-line {
  	backface-visibility: hidden;
  	letter-spacing: 0;
  	 display: block; content: ' '; z-index: 100;  position: absolute;
    width: 22px; height: 2px;  background-color: #000; top: 53%; opacity: 0; right: -10px; cursor: pointer;
    transform: translateY(-50%) translateX(-20px) translateZ(0);
    -webkit-transform: translateY(-50%) translateX(-20px) translateZ(0);
    transition: opacity 0.25s cubic-bezier(0.12, 0.75, 0.4, 1), transform 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
    -webkit-transition: opacity 0.25s cubic-bezier(0.12, 0.75, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.12, 0.75, 0.4, 1);
  }
   .team-member[data-style="bio_fullscreen"] .team-meta .arrow-line {
   	top: 53%;
   }
 #post-area.standard-minimal article.post .post-meta .date, #post-area.standard-minimal article.post .more-link span {
	font-family: 'Open Sans'; font-weight: 700; margin-bottom: 5px; font-size: 14px;
}
 #post-area.standard-minimal article.post .post-meta .date a { display: block;}
#post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count a, #post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count a span,
#post-area.standard-minimal  article.post .article-content-wrap .nectar-love, #post-area.standard-minimal  article.post .article-content-wrap .nectar-love > span,
#post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count i, #post-area.standard-minimal  article.post .article-content-wrap .nectar-love i,
#post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count, #post-area.standard-minimal  article.post .article-content-wrap .nectar-love-wrap,
#post-area.standard-minimal  article.post .article-content-wrap .nectar-love-wrap > span, #post-area.standard-minimal  article.post .article-content-wrap .meta-category i {
	line-height: 34px!important; height: 34px!important; width: auto; display: inline-block;
}
#post-area.standard-minimal  article.post .more-link { margin-top: 15px; }
#post-area.standard-minimal  article.post .article-content-wrap .meta-category i { font-size: 20px!important;  }
#post-area.standard-minimal  article.post .article-content-wrap .nectar-love > span { font-size: 14px; color: #aaa; }
#post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count { margin-left: 15px;}
#post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count a, #post-area.standard-minimal  article.post .article-content-wrap .meta-category a { font-size: 14px;  }
#post-area.standard-minimal  article.post .article-content-wrap .meta-comment-count a:not(:hover), #post-area.standard-minimal  article.post .article-content-wrap .meta-category a:not(:hover) { color: #aaa; }
#post-area.standard-minimal  article.post .article-content-wrap a i, #post-area.standard-minimal  article.post .article-content-wrap .meta-category i { font-size: 20px!important; width: 22px; margin-right: 5px; transition: color 0.2s linear; -webkit-transition: color 0.2s linear; }

#post-area.standard-minimal  article.post .article-content-wrap a:not(:hover) i:not(.loved), #post-area.standard-minimal  article.post .article-content-wrap .meta-category:not(:hover) i { color: #c1c1c1!important; }

#post-area.standard-minimal article.post .post-meta { margin-bottom: 0; }
#post-area.standard-minimal #pagination { padding-left: 0;}
#post-area.standard-minimal article.post .post-meta, #post-area.standard-minimal article.post .post-meta .date {
	position: relative;
	padding-bottom: 0;
	border: none;
}

#post-area.standard-minimal .post-content {
	padding-left: 175px;
}

.single #post-area.standard-minimal .post-content { padding-left: 0;}

#post-area.standard-minimal .post-author .grav-wrap {
	border-radius: 100px; overflow: hidden; margin-bottom: 10px; width: 90px; height: 90px; margin: 0 auto 25px auto;
}

#pagination {
	position: relative;
	margin-bottom: 10px;
	height: 32px;	
	width: 100%;
}

#post-area.standard-minimal article.post .post-meta.no-img {
	top: 0;
}

#pagination.fw-pagination {
	text-align: center;
	height: auto;
	padding: 10px 0px 50px 0px;
	margin-bottom: 0px!important;
}

#pagination.fw-pagination.alt-style-padding {
	padding: 50px 0px;
}

#pagination.fw-pagination > div {
	float: none;
	display: inline-block;
}

.page-template-template-portfolio-php #pagination {
	margin-bottom: 30px;
}

#pagination.infinite_scroll {
	display: none;
}

#pagination span:not(.page-numbers), #pagination a:not(.page-numbers) {
	background-color: #333;
}

#pagination span, #pagination a, #pagination .next.inactive, #pagination .prev.inactive, 
.woocommerce nav.woocommerce-pagination ul li a, .woocommerce .container-wrap nav.woocommerce-pagination ul li span {
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline-block;
    padding: 11px 13px 10px 13px!important;
    background-position: -21px center;
    position: relative;
    text-transform: capitalize;
    color: #FFFFFF !important;
    transition: all .45s cubic-bezier(0.25, 1, 0.33, 1);
    border-radius: 2px 2px 2px 2px;
    font-family: 'Open Sans';
	font-weight: 700;
}

 .woocommerce nav.woocommerce-pagination ul li {
	overflow: visible;
}
html body #pagination span.page-numbers.dots,
html body #pagination > a,
html .woocommerce nav.woocommerce-pagination ul li a,
html body nav.woocommerce-pagination ul li span.page-numbers.dots {
	background-color: transparent!important;
	color: inherit!important;
	font-size: 12px!important;
	line-height: 14px;
}
html body #pagination > span.page-numbers.current,
html body nav.woocommerce-pagination span.page-numbers.current {
	-webkit-box-shadow: 0px 6px 15px rgba(0,0,0,0.16);
	box-shadow: 0px 6px 15px rgba(0,0,0,0.16);
	margin: 0 8px;
	height: 35px;
	width: 35px;
	text-align: center;
	line-height: 14px;
	font-size: 12px!important;
}
html body #pagination .page-numbers.prev, 
html body #pagination .page-numbers.next,
html body nav.woocommerce-pagination .page-numbers.prev, 
html body nav.woocommerce-pagination .page-numbers.next {
	width: auto;
	background-color: transparent!important;
	color: inherit!important;
	background-image: none;
	text-indent: 0!important;
	border: 0;
}
html body nav.woocommerce-pagination .page-numbers.prev, 
html body nav.woocommerce-pagination .page-numbers.next {
	width: auto!important;
}

html body #pagination > span:first-child.page-numbers {
	margin-left: 0!important;
}
html body #pagination > a:first-child.page-numbers {
	padding-left: 0!important;
}

html body #pagination > a:hover,
html body #pagination > a.page-numbers:hover,
html body nav.woocommerce-pagination li a:hover {
	background-color: transparent!important;
}

 .woocommerce nav.woocommerce-pagination ul li a, .woocommerce .container-wrap nav.woocommerce-pagination ul li span {
 	line-height: 11px!important;
 }

#pagination > div {
	float: left;
	margin: 0px 5px 0px 0px;
}

#pagination > div:first-child {
	margin-left: 0px;
}

#pagination .next a:hover, #pagination .prev a:hover, #pagination a.page-numbers:hover, #pagination span.page-numbers.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce .container-wrap nav.woocommerce-pagination ul li:hover span,
.woocommerce nav.woocommerce-pagination ul li a:active {
	background-color: #27CFC3;
}

.woocommerce nav.woocommerce-pagination ul {
	border-bottom: 0px!important;	
}

#pagination span {
	cursor: default;
}

#pagination a, #pagination span {
	display: inline-block;
}

#pagination .next a, #pagination .next.inactive, #pagination .page-numbers.next, .woocommerce nav.woocommerce-pagination ul li .page-numbers.next {
	text-indent: -9999px;
	height: 32px;
	width: 32px;
	background-repeat: no-repeat!important;
}

#pagination .prev a, #pagination .prev.inactive, #pagination .page-numbers.prev, .woocommerce nav.woocommerce-pagination ul li .page-numbers.prev  {
	text-indent: -9999px;
	height: 32px;
	width: 32px;
	background-repeat: no-repeat!important;
}

#pagination a.page-numbers, #pagination span.page-numbers {
	font-size: 12px;
	line-height: 11px;
}

#pagination .next.inactive, #pagination .prev.inactive  {
	background-color: #eae8e5;
	cursor: default!important;
	height: 32px;
	width: 32px;
	margin: 0px 5px 0px 0px;
}

#pagination .next a, #pagination .next.inactive, #pagination .page-numbers.next, .woocommerce nav.woocommerce-pagination ul li .page-numbers.next {
	background-image: url("img/icons/portfolio-arrows.png");
	background-position: -20px 12px;
}

#pagination .prev a, #pagination .prev.inactive, #pagination .page-numbers.prev, .woocommerce nav.woocommerce-pagination ul li .page-numbers.prev {
    background-image: url("img/icons/portfolio-arrows.png");
	background-position: 13px 12px;
}

@media only screen and (-o-min-device-pixel-ratio: 3/2),
only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min-device-pixel-ratio: 1.5),
only screen and (min-resolution: 144dpi) {
	#pagination .next a, #pagination .next.inactive, #pagination .page-numbers.next, .woocommerce nav.woocommerce-pagination ul li .page-numbers.next {
		background-image: url("img/icons/portfolio-arrows@2x.png")!important;
		background-size: 40px 9px!important;
	}
	
	#pagination .prev a, #pagination .prev.inactive, #pagination .page-numbers.prev, .woocommerce nav.woocommerce-pagination ul li .page-numbers.prev {
	    background-image: url("img/icons/portfolio-arrows@2x.png")!important;
	    background-size: 40px 9px!important;
	}
}

#author-bio {
	padding-bottom: 50px;
	margin-bottom: 50px;
	min-height: 80px;
	box-sizing: content-box!important;
	-moz-box-sizing: content-box!important;
	-o-box-sizing: content-box!important;
	-webkit-box-sizing: content-box!important;
	border-bottom: 1px solid #DDDDDD;
	position: relative;	
}

#author-bio #author-info {
  	width: 100%;
  	padding-left: 105px;
}

#author-bio img {
	width: 80px;
	height: 80px;
	margin-bottom: 0px;
	position: absolute;
	left: 0;
	top: 0;
}

#author-bio .clear {
	padding-bottom: 0px;
}

.single #post-area.span_12 #author-info {
	width: 992px;
}



/****************************** NECTAR LOVE **************************/

.nectar-love-wrap {
	width: 72px;	
	line-height: 19px;
}

.nectar-love {
	-moz-transition: background-color 0.2s linear;
	-webkit-transition: background-color 0.2s linear;
	-o-transition: background-color 0.2s linear;
	transition: background-color 0.2s linear;
	height: 13px;
	width: auto;
	color: inherit!Important;
	line-height: 11px;
	font-size: 14px;
	display: inline-block;
}

.nectar-love span {
	font-family: 'Open Sans'!important;
	font-weight: 400;
	color: inherit;
	font-size: 12px;
	line-height: 12px;
	padding-left: 0px!important;
	display: inline-block!important;
}
html body .nectar-love span {
	font-size: 12px;
	line-height: 12px;
}

.row .col.section-title .nectar-love span {
	font-size: 12px;
}

.nectar-love:hover i, .nectar-love.loved i {
	color: #27CFC3;
}


/*-------------------------------------------------------------------------*/
/*	10.	Comment Styles
/*-------------------------------------------------------------------------*/

#respond {
	background-color: transparent!important;
	box-shadow: none!important;
	padding: 0px!important;
}
	
#respond > p, #respond p.comment-notes, p.logged-in-as {
	margin-bottom: 10px;
}

p.logged-in-as {
	padding-bottom: 0px;	
}

body .comment-list {
	margin-bottom: 40px!important;
	margin-left: 0px;	
}

.comment-list li {
	list-style: none!important;
}

.comment-list li.comment > div, .comment-list li.pingback > div {
	background-color: #ffffff;
    margin: 0;
    overflow: hidden;
    padding: 25px;
    margin-top: 2em;
    position: relative;
    padding-left: 116px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17);
}

.comment-list .children {
	margin-left: 0px!important;
	padding-left: 40px;
	border-left: 1px solid #ddd;
	background-repeat: no-repeat;
	background-position: left 20px;
	background-image: url(img/icons/comment-children-line.jpg);
}

.comment-list li.comment > div img.avatar, .comment-list li.pingback > div img.avatar {
	position: absolute;
	left: 29px;
	top: 29px;
	width: 60px;
	height: 60px;
}

.comment-list .reply {
	position: absolute;
	top: 29px; 
	right: 29px;	
}

.comment-list .reply a {
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
    color: #FFFFFF;
    cursor: pointer;
    padding: 3px 7px;
    font-size: 11px;
    transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -webkit-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
    width: auto;
    border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
	background-color: #333333;
}

.comment-list .comment-author {
	color: #333;
	font-family: 'Open Sans';
	font-weight: 600;
}
.comment-list .comment-meta {
	font-size: 11px;
	line-height: 15px;
}

.comment-list .comment-meta a {
	color: #888;
}

.comment-list .comment-meta a:hover {
	color: #27CFC3;
}

.comment-list .reply a:hover {
	background-color: #27CFC3;
}

.comment-list li.comment > div p, .comment-list li.pingback > div p  {
	padding-bottom: 0px;
	margin-top: 10px;
}

#respond h3 .cancel-comment-reply, #respond #cancel-comment-reply-link {
	display: inline-block;	
	margin-left: 10px;
	padding-left: 10px;
	position: relative;
	border-left: 1px solid #dddddd;
}

#respond h3, h3#comments {
	font-family: 'Open Sans';
	font-weight: 600;
	text-transform: none;
	letter-spacing: -0.5px;
}

.comment-author a {
	color: inherit;
}

/*-------------------------------------------------------------------------*/
/*	11.	General Form Styles
/*-------------------------------------------------------------------------*/

input[type=text], textarea, input[type=email], input[type=password], input[type=tel], input[type=url], input[type=search], input[type=date]  {
	padding: 10px!important;
	width: 100%;
	border: 0px;
	border-bottom: 1px solid #fff;
	font-family: 'Open Sans';
	font-weight: 400;
    font-size: 12px;
    line-height: 22px;
    color: #555;
    background-color: #efefef; 
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
}

input[type=text]:focus, textarea:focus, input[type=email]:focus, input[type=search]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=url]:focus, input[type=date]:focus {
	background-color: #ebebeb;
}

input[type=submit], button[type=submit], input[type="button"] {
	background-color: #333333;
    padding: 7px 11px;
    border: none;
    color: #fff;
    cursor: pointer;
    transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    -moz-transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    -webkit-transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    -o-transition: all 0.45s cubic-bezier(0.25, 1, 0.33, 1);
    width: auto;
    font-size: 12px; 
    border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	-o-border-radius: 2px;
}

input[type=submit]:hover, button[type=submit]:hover, input[type="button"]:hover {
	background-color: #27CFC3;
}

body[data-form-submit="regular"] .container-wrap input[type=submit], body[data-form-submit="regular"] .container-wrap button[type=submit],
body[data-form-submit="see-through"] .container-wrap input[type=submit], body[data-form-submit="see-through"] .container-wrap button[type=submit] {
	padding: 15px 22px!important;
}

body[data-form-submit="regular"] input[type=submit]:hover, body[data-form-submit="regular"] button[type=submit]:hover {
	opacity: 0.85;
}
body[data-form-submit="see-through"] input[type=submit], body[data-form-submit="see-through"] button[type=submit] { 
	background-color: transparent!important;
	border: 2px solid #000;
}
body[data-form-submit="see-through"] input[type=submit]:hover, body[data-form-submit="see-through"] button[type=submit]:hover {
	color: #fff!important;
}

select {
	padding: 10px!important;
	width: 100%;
	border: 0px!important;
	border: none!Important; 
	font-family: 'Open Sans';
	font-weight: 400;
    font-size: 12px;
    line-height: 22px;
    color: #555;
    background-color: #fff;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.16)!important;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.16)!Important;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.16)!Important;
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.16)!Important;
    transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
}

textarea {
	max-width: 100%;	
}

label span {
	color: #27CFC3;
}

/*minimal style*/

body[data-form-style="minimal"] input[type="text"], body[data-form-style="minimal"] textarea, body[data-form-style="minimal"] input[type="email"], body[data-form-style="minimal"] .container-wrap .span_12.light input[type="email"], 
body[data-form-style="minimal"] input[type=password], body[data-form-style="minimal"] input[type=tel], body[data-form-style="minimal"] input[type=url], 
body[data-form-style="minimal"] input[type=search], body[data-form-style="minimal"] input[type=date] {
	background-color: transparent;
	box-shadow: none;
	-webkit-box-shadow: none;
	border: none!important;
	position: relative;
	margin: 0;
	font-size: 14px;
	padding-top: 13px!important;
	padding-bottom: 13px!important;
	padding-left: 0!important;
	padding-right: 0!important;
}

body[data-form-style="minimal"] .container-wrap .span_12.light input[type="text"], body[data-form-style="minimal"] .container-wrap .span_12.light textarea, 
body[data-form-style="minimal"] .container-wrap .span_12.light input[type="email"], body[data-form-style="minimal"] .container-wrap .span_12.light input[type="email"], 
body[data-form-style="minimal"] .container-wrap .span_12.light input[type=password], body[data-form-style="minimal"] .container-wrap .span_12.light input[type=tel], body[data-form-style="minimal"] .container-wrap .span_12.light input[type=url], 
body[data-form-style="minimal"] .container-wrap .span_12.light input[type=search], body[data-form-style="minimal"] .container-wrap .span_12.light input[type=date] {
	border: none!important;
	color: #fff;
}

body[data-form-style="minimal"] textarea, body[data-form-style="minimal"].woocommerce #review_form #respond textarea {
    resize: none;
    min-height: 45px;
    height: 45px;
    box-sizing: content-box!important;
	-webkit-box-sizing: content-box!important;
	-moz-box-sizing: content-box!important;
	overflow-y: hidden;
	padding-top: 26px!important;
	padding-bottom: 26px!important;
}

body[data-form-style="minimal"] .textareahiddendiv {
    display: none;
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-wrap: break-word;
    padding-top: 1.2rem;
}

body[data-form-style="minimal"] .minimal-form-input label:before, body[data-form-style="minimal"] .minimal-form-input label:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    display: block;
    height: 3px;
    border-bottom: 1px solid #e0e0e0;
}

body[data-form-style="minimal"] .span_12.light .minimal-form-input label:before, body[data-form-style="minimal"] .span_12.light .minimal-form-input label:after {
	border-bottom: 1px solid rgba(255,255,255,0.3);
}
body[data-form-style="minimal"] .span_12.light .minimal-form-input label span.text .text-inner {
	color: rgba(255,255,255,0.6)!important;
}

 body[data-form-style="minimal"] .minimal-form-input label:after {
    display: block;
    border-bottom: 2px solid #27CFC3;
    -webkit-transform: translate3d(-101%, 0, 0);
    transform: translate3d(-101%, 0, 0);
    -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.24, 1, 0.30, 1), border-color 0.2s cubic-bezier(.39,.71,.56,.98);
    transition: transform 0.4s cubic-bezier(0.24, 1, 0.30, 1), border-color 0.2s cubic-bezier(.39,.71,.56,.98);
    bottom: 0px;
}

 body[data-form-style="minimal"] .minimal-form-input.filled label:after {
 	-webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
 }

  body[data-form-style="minimal"] .woocommerce-invalid-required-field:not(.woocommerce-validated) .minimal-form-input label:after {
  	-webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    border-color: #ff2929!important;
  }

 body[data-form-style="minimal"].woocommerce form .form-row.woocommerce-invalid-required-field:not(.woocommerce-validated) label:not([for*="_state"]) .required, 
 body[data-form-style="minimal"].woocommerce-page form .form-row.woocommerce-invalid-required-field:not(.woocommerce-validated) label:not([for*="_state"]) .required {
 	color: #ff2929!important;
 }
  body[data-form-style="minimal"].woocommerce form .required {
  	-webkit-transition: color 0.2s cubic-bezier(.39,.71,.56,.98);
    transition: color 0.2s cubic-bezier(.39,.71,.56,.98);
  }

 body[data-form-style="minimal"] .minimal-form-input label .text-inner {
  	-webkit-transition: all 0.25s cubic-bezier(.39,.71,.56,.98);
    transition: all 0.25s cubic-bezier(.39,.71,.56,.98);
 }

 body[data-form-style="minimal"] .minimal-form-input.filled label .text-inner,
 body[data-form-style="minimal"] .minimal-form-input.has-text label .text-inner {
  	-webkit-animation: text-in-from-left 0.25s cubic-bezier(.39,.71,.56,.98) forwards;
    animation: text-in-from-left 0.25s cubic-bezier(.39,.71,.56,.98) forwards;
  }

 body[data-form-style="minimal"] .minimal-form-input.no-text label .text-inner {
  	-webkit-animation: text-out-from-left 0.25s cubic-bezier(.39,.71,.56,.98) forwards;
    animation: text-out-from-left 0.25s cubic-bezier(.39,.71,.56,.98) forwards;
  }

body[data-form-style="minimal"] .minimal-form-input {
	position: relative;
	padding-top: 35px;
	box-sizing: content-box;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	display: inline-block;
	width: 100%;
}

 body[data-form-style="minimal"] .minimal-form-input.filled input,  body[data-form-style="minimal"] .minimal-form-input.has-text input,
  body[data-form-style="minimal"] .minimal-form-input.filled textarea,  body[data-form-style="minimal"] .minimal-form-input.has-text textarea {
 	color: #000;
 }

body[data-form-style="minimal"] .minimal-form-input label, body[data-form-style="minimal"].woocommerce table.cart td.actions .coupon label,  body[data-form-style="minimal"].woocommerce-page table.cart td.actions .coupon label {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	display: inline-block;
	margin: 0!important;
}

body[data-form-style="minimal"] .minimal-form-input label span.text {
	position: absolute;
	top: 50%;
	left: 0;
	font-size: 14px;
	margin-top: 17px;
	transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	color: #acacac!important;
}

body[data-form-style="minimal"] .minimal-form-input label span.text .text-inner {
	color: #acacac!important;
	display: inline-block;
}

body[data-form-style="minimal"] .minimal-form-input.textarea label span.text {
	top: 40px;
	transform: none;
	-webkit-transform: none;
}

body[data-form-style="minimal"] .minimal-form-input br {
	display: none;
}

body[data-form-style="minimal"] .widget_search .search-form .search-submit {
	top: 30px;
}

@-webkit-keyframes text-in-from-left {
	50% {
		opacity: 0;
		-webkit-transform: translateX(15px) translateY(0px);
		font-size: 14px;
	}
	51% {
		opacity: 0;
		-webkit-transform: translateX(-10px) translateY(-26px);
		font-size: 12px;
		line-height: 12px;
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0px) translateY(-26px);
		font-size: 12px;
		line-height: 12px;
	}
}

@keyframes text-in-from-left {
	50% {
		opacity: 0;
		transform: translateX(15px) translateY(0px);
		font-size: 14px;
	}
	51% {
		opacity: 0;
		transform: translateX(-10px) translateY(-26px);
		font-size: 12px;
		line-height: 12px;
	}
	100% {
		opacity: 1;
		transform: translateX(0px) translateY(-26px);
		font-size: 12px;
		line-height: 12px;
	}
}


@-webkit-keyframes text-out-from-left {
	0% {
		-webkit-transform: translateY(-26px) translateX(0px);
		font-size: 12px;
		line-height: 12px;
	}
	50% {
		opacity: 0;
		-webkit-transform: translateX(-10px) translateY(-26px);
		font-size: 12px;
		line-height: 12px;
	}
	51% {
		opacity: 0;
		-webkit-transform: translateX(15px) translateY(0px);
		font-size: 14px;
	}
	100% {
		opacity: 1;
		-webkit-transform: translateX(0px) translateY(0px);
	}
}

@keyframes text-out-from-left {
	0% {
		transform: translateY(-27px) translateX(0px);
		font-size: 12px;
		line-height: 12px;
	}
	50% {
		opacity: 0;
		transform: translateX(-10px) translateY(-27px);
		font-size: 12px;
		line-height: 12px;
	}
	51% {
		opacity: 0;
		transform: translateX(15px) translateY(0px);
		font-size: 14px;
	}
	100% {
		opacity: 1;
		transform: translateX(0px) translateY(0px);
	}
}

/* hide default placeholders */

body[data-form-style="minimal"] input::-webkit-input-placeholder {
	color: transparent;
}
body[data-form-style="minimal"] input::-moz-placeholder {
	color: transparent;
}
body[data-form-style="minimal"] input:-moz-placeholder {   /* Older versions of Firefox */
	color: transparent;
}
body[data-form-style="minimal"] input:-ms-input-placeholder { 
	color: transparent;
}


/*checkboxes & radios */

body[data-fancy-form-rcs="1"] [type="radio"]:not(:checked) + label,  body[data-fancy-form-rcs="1"] [type="radio"]:checked + label {
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    display: inline-block;
    height: 20px;
    line-height: 20px;
    font-size: 14px;
    -webkit-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -moz-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -o-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -ms-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none;
    margin-right: 15px;
    color: #acacac!important;
}

body[data-fancy-form-rcs="1"] [type="radio"]:checked + label {
	color: #000!important;
}

body[data-fancy-form-rcs="1"] [type="radio"]:not(:checked), body[data-fancy-form-rcs="1"]  [type="radio"]:checked {
    position: absolute; 
    left: -9999px; 
    visibility: hidden; 
}

body[data-fancy-form-rcs="1"] [type="radio"] + label:before, body[data-fancy-form-rcs="1"] [type="radio"] + label:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 16px;
    height: 16px;
    z-index: 0;
    -webkit-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -moz-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -o-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    -ms-transition: 0.25s cubic-bezier(.39,.71,.56,.98);
    transition: 0.25s cubic-bezier(.39,.71,.56,.98);
}
body[data-fancy-form-rcs="1"] .woocommerce-checkout-payment .payment_method_paypal [type="radio"] + label:before, body[data-fancy-form-rcs="1"] .woocommerce-checkout-payment .payment_method_paypal [type="radio"] + label:after {
	top: 13px;
}

body[data-fancy-form-rcs="1"] [type="radio"]:not(:checked) + label:before {
    border-radius: 50%;
    border: 2px solid #d6d6d6;
}

body[data-fancy-form-rcs="1"] [type="radio"]:not(:checked) + label:after {
    border-radius: 50%;
    border: 2px solid #d6d6d6;
    z-index: -1;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
}

body[data-fancy-form-rcs="1"] [type="radio"]:checked + label:before {
    border-radius: 50%;
    border: 2px solid #27CFC3;
}

body[data-fancy-form-rcs="1"] [type="radio"]:checked + label:after {
    border-radius: 50%;
    border: 2px solid #27CFC3;
    background-color: #27CFC3;
    z-index: 0;
    -webkit-transform: scale(.53);
    -moz-transform: scale(.53);
    -ms-transform: scale(.53);
    -o-transform: scale(.53);
    transform: scale(.53);
}



body[data-fancy-form-rcs="1"] input[type='checkbox'] { height: 0; width: 0; position: absolute; left: -9999px; }

body[data-fancy-form-rcs="1"] input[type='checkbox'] + label {
  position: relative;
  align-items: center;
  color: #acacac!important;
  font-size: 14px;
  height: 20px;
  line-height: 20px;
  padding-left: 30px;
  margin-right: 15px;
  cursor: pointer; 
  display: inline-block;
  transition: color 250ms cubic-bezier(.4,.0,.23,1);
}

body[data-fancy-form-rcs="1"] input[type='checkbox']:checked + label {
	color: #000!important;
}

body[data-fancy-form-rcs="1"] input[type='checkbox'] + label:after, body[data-fancy-form-rcs="1"] input[type='checkbox'] + label:before {
	display: none;
}

body[data-fancy-form-rcs="1"] input[type='checkbox'] + label > span{
  justify-content: center;
  align-items: center;
  display: inline-block;
  position: absolute;
  left: 0;
  top: 0;
  margin-right: 12px;
  width: 20px;
  height: 20px;
  background: transparent;
  border: 2px solid #d6d6d6;
  cursor: pointer;  
  transition: all 200ms cubic-bezier(.4,.0,.23,1);
}

body[data-fancy-form-rcs="1"] input[type='checkbox'] + label:hover, body[data-fancy-form-rcs="1"] input[type='checkbox']:focus + label{
  color: #fff;
}
body[data-fancy-form-rcs="1"] input[type='checkbox'] + label:hover > span, body[data-fancy-form-rcs="1"] input[type='checkbox']:focus + label > span{
  background: rgba(255,255,255,.1);
}

body[data-fancy-form-rcs="1"] input[type='checkbox']:checked + label > span {
  border: 10px solid #27CFC3;
  animation: shrink-bounce 200ms cubic-bezier(.4,.0,.23,1);
}
body[data-fancy-form-rcs="1"] input[type='checkbox']:checked + label > span:before {
  content: "";
  position: absolute;
  left: -6px;
  top: -2px;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  transform: rotate(45deg);
  transform-origin: 0% 100%;
  animation: checkbox-check 125ms 220ms cubic-bezier(.4,.0,.23,1) forwards;
}

@keyframes shrink-bounce{
  0%{
    transform: scale(1);
  }
  33%{    
    transform: scale(.85);
  }
  100%{
    transform: scale(1);    
  }
}
@keyframes checkbox-check{
  0%{
    width: 0;
    height: 0;
    border-color: #fff;
    transform: translate3d(0,0,0) rotate(45deg);
  }
  33%{
    width: .2em;
    height: 0;
    transform: translate3d(0,0,0) rotate(45deg);
  }
  100%{    
    width: .2em;
    height: .6em;    
    border-color: #fff;
    transform: translate3d(0,-.6em,0) rotate(45deg);
  }
}


/*selects*/

body[data-fancy-form-rcs="1"] .select2-container .select2-choice {
	background-color: transparent;
	border-color: #e0e0e0;
	padding-top: 5px;
	padding-bottom: 5px;
	webkit-transition: background-color 0.15s cubic-bezier(.39,.71,.56,.98), color 0.15s cubic-bezier(.39,.71,.56,.98);
    transition: background-color 0.15s cubic-bezier(.39,.71,.56,.98), color 0.15s cubic-bezier(.39,.71,.56,.98);
}

body[data-fancy-form-rcs="1"] .select2-container .select2-choice:hover .select2-arrow b:after {
	webkit-transition: border-color 0.15s cubic-bezier(.39,.71,.56,.98);
    transition: border-color 0.15s cubic-bezier(.39,.71,.56,.98);
}

body[data-fancy-form-rcs="1"] .select2-drop {
	border: none;
	background-color: #fff;
	box-shadow: 0px 0px 6px rgba(0,0,0,0.2);
}

body[data-fancy-form-rcs="1"] .select2-container, body[data-fancy-form-rcs="1"] .select2-drop, body[data-fancy-form-rcs="1"] .select2-search, .select2-search input {
	font-size: 14px;
}

body[data-fancy-form-rcs="1"] .select2-container:not(.select2-dropdown-open) .select2-choice:hover .select2-arrow b:after {
	border-top-color: #fff;
}
body[data-fancy-form-rcs="1"] .select2-dropdown-open .select2-choice .select2-arrow b:after {
 	border-bottom-color: #fff;
 }


body[data-fancy-form-rcs="1"] .select2-drop.select2-drop-above .select2-search input,
body[data-fancy-form-rcs="1"] .select2-drop.select2-drop-below .select2-search input,
body[data-fancy-form-rcs="1"] .select2-drop .select2-search input[type="text"] {
	padding: 0 4px!important;
	margin-top: 7px!important;
}

body[data-fancy-form-rcs="1"] .select2-container .select2-choice:hover, body[data-fancy-form-rcs="1"] .select2-container .select2-choice:hover >.select2-chosen, 
body[data-fancy-form-rcs="1"] .select2-dropdown-open .select2-choice, body[data-fancy-form-rcs="1"] .select2-dropdown-open .select2-choice >.select2-chosen {
	color: #fff!important;
	box-shadow: none;
	-webkit-box-shadow: none;
}

body[data-fancy-form-rcs="1"].admin-bar .select2-drop.select2-drop-above.select2-drop-active {
	margin-top: -33px;
}

.select2-container .select2-choice>.select2-chosen {
	color: #000!important;
	line-height: 30px;
	padding-left: 3px;
}

body[data-fancy-form-rcs="1"] .fancy-select-wrap {
	padding-top: 12px;
}

body[data-fancy-form-rcs="1"] .fancy-select-wrap label {
	padding-bottom: 0px;
	font-size: 12px;
	display: inline-block;
	color: #acacac!important;
}


/* table styling */
body:not(.woocommerce-cart) .main-content table {
    margin: 0 0 20px;
    padding: 0;
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    background-color: #fff;
    border-top: 1px solid #ececec;
}

body:not(.woocommerce-cart) .main-content tr th:first-child, body:not(.woocommerce-cart) .main-content tr td:first-child {
    border-left-style: solid;
    border-left-width: 1px;
    border-color: #ececec;
}

body:not(.woocommerce-cart) .main-content tr th:first-child, body:not(.woocommerce-cart) .main-content tr td:first-child {
    border-left-style: solid;
    border-left-width: 1px;
}

body:not(.woocommerce-cart) .main-content th {
    border-left: medium none;
    border-style: none solid solid none;
    border-top: medium none;
    border-width: medium 1px 1px medium;
    font-weight: bold;
    padding: 10px;
    text-align: left;
    border-color: #ececec;
}

body:not(.woocommerce-cart) .main-content td {
	border-color: #ececec;
    border-left: none;
    border-style: none solid solid none;
    border-top: medium none;
    border-width: medium 1px 1px medium;
    font-size: 13px;
    padding: 10px;
}

body:not(.woocommerce-cart) .main-content table tr:nth-child(2n+1) {
    background-color: #fcfcfc;
}



/******** CUSTOM ICONS ********/
@font-face {
	font-family: 'icomoon';
	src:url('css/fonts/icomoon.eot');
	src:url('css/fonts/icomoon.eot?#iefix') format('embedded-opentype'),
		url('css/fonts/icomoon.woff') format('woff'),
		url('css/fonts/icomoon.ttf') format('truetype'),
		url('css/fonts/icomoon.svg#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}


[data-icon]:before {
	font-family: 'icomoon'!important;
	content: attr(data-icon);
	speak: none;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.icon-salient-x, .icon-salient-search, .icon-salient-right-arrow, .icon-salient-left-arrow, .icon-salient-right-line, .icon-salient-back-to-all,
.icon-salient-left-arrow-thin, .icon-salient-right-arrow-thin, .icon-salient-down-arrow-thin, .icon-salient-down-arrow, .icon-salient-google-plus, .ascend .mfp-image-holder .mfp-close, .ascend .mfp-iframe-holder .mfp-close, .mfp-iframe-holder .mfp-close, .mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close, .mfp-iframe-holder .mfp-close, 
.icon-salient-facebook, .icon-salient-twitter, .icon-salient-pinterest, .icon-salient-heart, .icon-salient-heart-2, .icon-salient-plus, .icon-salient-cart, body[data-is="minimal"] [class^="icon-"].icon-reorder,
.icon-salient-pencil, .icon-be, .icon-vimeo, .icon-soundcloud, .icon-button-arrow, .icon-salient-thin-line, .icon-salient-spotify, .icon-salient-m-user, .salient-page-submenu-icon, .icon-salient-m-clock, .video-play-button, .mejs-controls .mejs-button button { 
	font-family: 'icomoon'!important;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
}
.icon-salient-m-bag:before {
	content: "\e900";
}
.icon-salient-m-eye:before {
	content: "\e015";
}
.icon-salient-m-clock:before {
	content: "\e016";
}
.icon-salient-m-gear:before {
	content: "\e023";
}
.icon-salient-m-heart:before {
	content: "\e024";
}
.icon-salient-m-search:before {
	content: "\e036";
}
.icon-salient-m-prev:before {
	content: "\e050";
}
.icon-salient-m-rewind:before {
	content: "\e051";
}
.icon-salient-m-play:before {
	content: "\e052";
}

.icon-salient-m-pause:before {
	content: "\e053";
}
.icon-salient-m-stop:before {
	content: "\e054";
}
.icon-salient-m-ff:before {
	content: "\e055";
}
.icon-salient-m-next:before {
	content: "\e056";
}
.icon-salient-m-user:before {
	content: "\e074";
}
.icon-salient-m-chat:before {
	content: "\e076";
}
.icon-salient-m-social:before {
	content: "\e081";
}
.icon-salient-m-left-arrow:before {
	content: "\e094";
}
.icon-salient-m-right-arrow:before {
	content: "\e095";
}
.icon-salient-m-sound:before {
	content: "\e098";
}
.icon-salient-m-mute:before {
	content: "\e099";
}
.icon-salient-m-close:before {
	content: "\e117";
}
.icon-salient-m-menu:before {
	content: "\e120";
}

.icon-salient-x:before {
	content: "\e003";
}
.icon-salient-search:before {
	content: "\e002";
}
.icon-salient-right-arrow:before {
	content: "\e000";
}
.icon-salient-left-arrow:before { 
	content: "\e001";
}
.icon-salient-right-line:before {
	content: "\e004";
}
.icon-salient-back-to-all:before {
	content: "\e005";
}
.icon-salient-right-arrow-thin:before {
	content: "\e006";
}
.icon-salient-left-arrow-thin:before {
	content: "\e007";
}
.icon-salient-down-arrow-thin:before {
	content: "\e00c";
}
.icon-salient-down-arrow:before {
	content: "\e008";
}
.icon-salient-google-plus:before {
	content: "\e009";
}
.icon-salient-facebook:before {
	content: "\e00a";
}
.icon-salient-twitter:before {
	content: "\e00b";
}
.icon-salient-pinterest:before {
	content: "\e00d";
}
.icon-salient-heart:before {
	content: "\e00e";
}
.icon-salient-heart-2:before {
	content: "\e00f";
}
.icon-salient-plus:before {
	content: "\e010";
}
.icon-salient-cart:before {
	content: "\e012";
}
.icon-salient-pencil:before {
	content: "\e011";
}
.icon-be:before {
	content: "\e013";
}
.icon-vimeo:before {
	content: "\e014";
}
.icon-soundcloud:before {
	content: "\e600";
}
.icon-button-arrow:before {
	content: "\e601";
}
.icon-salient-thin-line:before {
	content: "\e602";
}
.icon-salient-spotify:before {
	content: "\f1bc";
}
.social-icons{font-family: Arial narrow !important; font-weight: 500; letter-spacing: 0.35pt;}
.social-li{line-height: 29px;}
.social-link{color:#084d9a !important;}

/*minimal style*/
body[data-is="minimal"] .icon-reorder {
	width: 22px!important;
}
body[data-is="minimal"] #slide-out-widget-area a.slide_out_area_close .icon-default-style[class^="icon-"] {
	font-size: 24px!important;
}
body[data-is="minimal"] .icon-reorder:before {
	content: '\e120'!important;
	font-size: 24px!important;
}
body[data-is="minimal"] .icon-salient-search:before { content: "\e036"; }
body[data-is="minimal"] .icon-salient-x:before {  content: "\e117"; }
body[data-is="minimal"].ascend .icon-salient-cart:before, body[data-is="minimal"] .icon-salient-cart:before {  content: "\e106"; }
body[data-is="minimal"].ascend #header-outer .cart-wrap { top: -5px!important; margin-right: 22px; }
body[data-is="minimal"].ascend #header-outer a.cart-contents .cart-wrap span { width: 17px!important; line-height: 17px!important; font-size: 10px; font-family: 'Open Sans', sans-serif; font-weight: 600;} 
.icon-salient-heart-2:before { content: "\e024"!important; }

body[data-is="minimal"] #single-below-header.fullscreen-header .steadysets-icon-chat-3, body[data-is="minimal"] #single-below-header.fullscreen-header .steadysets-icon-book2,
body[data-is="minimal"] .steadysets-icon-chat-3 { font-family: 'icomoon'!important; font-size: 20px!important;}
body[data-is="minimal"] .steadysets-icon-chat-3:before { content: "\e076"; }
body[data-is="minimal"] .steadysets-icon-book2:before { font-family: 'icomoon'!important; content: "\e034"; }

body[data-is="minimal"][data-header-color="light"] header#top nav ul #search-btn a span, body[data-is="minimal"].ascend[data-header-color="light"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart,
 body[data-is="minimal"][data-header-color="light"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart {
	font-size: 18px!important;
	color: rgba(0,0,0,0.48);
}
body[data-is="minimal"][data-header-color="dark"] header#top nav ul #search-btn a span, body[data-is="minimal"][data-header-color="custom"] header#top nav ul #search-btn a span, body[data-is="minimal"].ascend[data-header-color="dark"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart,
 body[data-is="minimal"][data-header-color="dark"] #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart {
	font-size: 18px!important;
}
body[data-is="minimal"] .portfolio-items .nectar-love i, body[data-is="minimal"] .post-meta .nectar-love i { color: #c5c5c5;}
body[data-is="minimal"] #search-outer #search #close a span {
	font-size: 20px!important;
}

body[data-is="minimal"][data-header-search="false"] #header-outer[data-has-menu="false"][data-cart="false"] .lines-button { top: -3px; }
body[data-is="minimal"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:before, body[data-is="minimal"] .slide-out-widget-area-toggle[data-icon-animation="spin-and-transform"] .lines-button.x2.close .lines:after { top: 1px; }
body[data-is="minimal"] .lines, body[data-is="minimal"] .lines:before, body[data-is="minimal"] .lines:after {
	height: 2px;
}

/* linecons */
@font-face{font-family:linecons;src:url(css/fonts/linecons.eot);src:url(css/fonts/linecons.eot?#iefix) format('embedded-opentype'),url(css/fonts/linecons.ttf) format('truetype'),url(css/fonts/linecons.woff) format('woff'),url(css/fonts/linecons.svg#linecons) format('svg');font-weight:400;font-style:normal}[class*=" linecon-icon-"],[class^=linecon-icon-]{font-family:linecons!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.linecon-icon-heart:before{content:"\e600"}.linecon-icon-cloud:before{content:"\e601"}.linecon-icon-star:before{content:"\e602"}.linecon-icon-tv:before{content:"\e603"}.linecon-icon-sound:before{content:"\e604"}.linecon-icon-video:before{content:"\e605"}.linecon-icon-trash:before{content:"\e606"}.linecon-icon-user:before{content:"\e607"}.linecon-icon-key:before{content:"\e608"}.linecon-icon-search:before{content:"\e609"}.linecon-icon-eye:before{content:"\e60a"}.linecon-icon-bubble:before{content:"\e60b"}.linecon-icon-stack:before{content:"\e60c"}.linecon-icon-cup:before{content:"\e60d"}.linecon-icon-phone:before{content:"\e60e"}.linecon-icon-news:before{content:"\e60f"}.linecon-icon-mail:before{content:"\e610"}.linecon-icon-like:before{content:"\e611"}.linecon-icon-photo:before{content:"\e612"}.linecon-icon-note:before{content:"\e613"}.linecon-icon-food:before{content:"\e614"}.linecon-icon-t-shirt:before{content:"\e615"}.linecon-icon-fire:before{content:"\e616"}.linecon-icon-clip:before{content:"\e617"}.linecon-icon-shop:before{content:"\e618"}.linecon-icon-calendar:before{content:"\e619"}.linecon-icon-wallet:before{content:"\e61a"}.linecon-icon-vynil:before{content:"\e61b"}.linecon-icon-truck:before{content:"\e61c"}.linecon-icon-world:before{content:"\e61d"}.linecon-icon-clock:before{content:"\e61e"}.linecon-icon-paperplane:before{content:"\e61f"}.linecon-icon-params:before{content:"\e620"}.linecon-icon-banknote:before{content:"\e621"}.linecon-icon-data:before{content:"\e622"}.linecon-icon-music:before{content:"\e623"}.linecon-icon-megaphone:before{content:"\e624"}.linecon-icon-study:before{content:"\e625"}.linecon-icon-lab:before{content:"\e626"}.linecon-icon-location:before{content:"\e627"}.linecon-icon-display:before{content:"\e628"}.linecon-icon-diamond:before{content:"\e629"}.linecon-icon-pen:before{content:"\e62a"}.linecon-icon-bulb:before{content:"\e62b"}.linecon-icon-lock:before{content:"\e62c"}.linecon-icon-tag:before{content:"\e62d"}.linecon-icon-camera:before{content:"\e62e"}.linecon-icon-settings:before{content:"\e62f"}

/* steadysets */
@font-face{font-family:steadysets;src:url(css/fonts/steadysets.eot);src:url(css/fonts/steadysets.eot?#iefix) format('embedded-opentype'),url(css/fonts/steadysets.ttf) format('truetype'),url(css/fonts/steadysets.woff) format('woff'),url(css/fonts/steadysets.svg#icomoon) format('svg');font-weight:400;font-style:normal}[class*=" steadysets-icon-"],[class^=steadysets-icon-]{font-family:steadysets!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.steadysets-icon-type:before{content:"\e600"}.steadysets-icon-box:before{content:"\e601"}.steadysets-icon-archive:before{content:"\e602"}.steadysets-icon-envelope:before{content:"\e603"}.steadysets-icon-email:before{content:"\e604"}.steadysets-icon-files:before{content:"\e605"}.steadysets-icon-uniE606:before{content:"\e606"}.steadysets-icon-connection-empty:before{content:"\e607"}.steadysets-icon-connection-25:before{content:"\e608"}.steadysets-icon-connection-50:before{content:"\e609"}.steadysets-icon-connection-75:before{content:"\e60a"}.steadysets-icon-connection-full:before{content:"\e60b"}.steadysets-icon-microphone:before{content:"\e60c"}.steadysets-icon-microphone-off:before{content:"\e60d"}.steadysets-icon-book:before{content:"\e60e"}.steadysets-icon-cloud:before{content:"\e60f"}.steadysets-icon-book2:before{content:"\e610"}.steadysets-icon-star:before{content:"\e611"}.steadysets-icon-phone-portrait:before{content:"\e612"}.steadysets-icon-phone-landscape:before{content:"\e613"}.steadysets-icon-tablet:before{content:"\e614"}.steadysets-icon-tablet-landscape:before{content:"\e615"}.steadysets-icon-laptop:before{content:"\e616"}.steadysets-icon-uniE617:before{content:"\e617"}.steadysets-icon-barbell:before{content:"\e618"}.steadysets-icon-stopwatch:before{content:"\e619"}.steadysets-icon-atom:before{content:"\e61a"}.steadysets-icon-syringe:before{content:"\e61b"}.steadysets-icon-pencil:before{content:"\e61c"}.steadysets-icon-chart:before{content:"\e61d"}.steadysets-icon-bars:before{content:"\e61e"}.steadysets-icon-cube:before{content:"\e61f"}.steadysets-icon-image:before{content:"\e620"}.steadysets-icon-crop:before{content:"\e621"}.steadysets-icon-graph:before{content:"\e622"}.steadysets-icon-select:before{content:"\e623"}.steadysets-icon-bucket:before{content:"\e624"}.steadysets-icon-mug:before{content:"\e625"}.steadysets-icon-clipboard:before{content:"\e626"}.steadysets-icon-lab:before{content:"\e627"}.steadysets-icon-bones:before{content:"\e628"}.steadysets-icon-pill:before{content:"\e629"}.steadysets-icon-bolt:before{content:"\e62a"}.steadysets-icon-health:before{content:"\e62b"}.steadysets-icon-map-marker:before{content:"\e62c"}.steadysets-icon-stack:before{content:"\e62d"}.steadysets-icon-newspaper:before{content:"\e62e"}.steadysets-icon-uniE62F:before{content:"\e62f"}.steadysets-icon-coffee:before{content:"\e630"}.steadysets-icon-bill:before{content:"\e631"}.steadysets-icon-sun:before{content:"\e632"}.steadysets-icon-vcard:before{content:"\e633"}.steadysets-icon-shorts:before{content:"\e634"}.steadysets-icon-drink:before{content:"\e635"}.steadysets-icon-diamond:before{content:"\e636"}.steadysets-icon-bag:before{content:"\e637"}.steadysets-icon-calculator:before{content:"\e638"}.steadysets-icon-credit-cards:before{content:"\e639"}.steadysets-icon-microwave-oven:before{content:"\e63a"}.steadysets-icon-camera:before{content:"\e63b"}.steadysets-icon-share:before{content:"\e63c"}.steadysets-icon-bullhorn:before{content:"\e63d"}.steadysets-icon-user:before{content:"\e63e"}.steadysets-icon-users:before{content:"\e63f"}.steadysets-icon-user2:before{content:"\e640"}.steadysets-icon-users2:before{content:"\e641"}.steadysets-icon-unlocked:before{content:"\e642"}.steadysets-icon-unlocked2:before{content:"\e643"}.steadysets-icon-lock:before{content:"\e644"}.steadysets-icon-forbidden:before{content:"\e645"}.steadysets-icon-switch:before{content:"\e646"}.steadysets-icon-meter:before{content:"\e647"}.steadysets-icon-flag:before{content:"\e648"}.steadysets-icon-home:before{content:"\e649"}.steadysets-icon-printer:before{content:"\e64a"}.steadysets-icon-clock:before{content:"\e64b"}.steadysets-icon-calendar:before{content:"\e64c"}.steadysets-icon-comment:before{content:"\e64d"}.steadysets-icon-chat-3:before{content:"\e64e"}.steadysets-icon-chat-2:before{content:"\e64f"}.steadysets-icon-chat-1:before{content:"\e650"}.steadysets-icon-chat:before{content:"\e651"}.steadysets-icon-zoom-out:before{content:"\e652"}.steadysets-icon-zoom-in:before{content:"\e653"}.steadysets-icon-search:before{content:"\e654"}.steadysets-icon-trashcan:before{content:"\e655"}.steadysets-icon-tag:before{content:"\e656"}.steadysets-icon-download:before{content:"\e657"}.steadysets-icon-paperclip:before{content:"\e658"}.steadysets-icon-checkbox:before{content:"\e659"}.steadysets-icon-checkbox-checked:before{content:"\e65a"}.steadysets-icon-checkmark:before{content:"\e65b"}.steadysets-icon-refresh:before{content:"\e65c"}.steadysets-icon-reload:before{content:"\e65d"}.steadysets-icon-arrow-right:before{content:"\e65e"}.steadysets-icon-arrow-down:before{content:"\e65f"}.steadysets-icon-arrow-up:before{content:"\e660"}.steadysets-icon-arrow-left:before{content:"\e661"}.steadysets-icon-settings:before{content:"\e662"}.steadysets-icon-battery-full:before{content:"\e663"}.steadysets-icon-battery-75:before{content:"\e664"}.steadysets-icon-battery-50:before{content:"\e665"}.steadysets-icon-battery-25:before{content:"\e666"}.steadysets-icon-battery-empty:before{content:"\e667"}.steadysets-icon-battery-charging:before{content:"\e668"}.steadysets-icon-uniE669:before{content:"\e669"}.steadysets-icon-grid:before{content:"\e66a"}.steadysets-icon-list:before{content:"\e66b"}.steadysets-icon-wifi-low:before{content:"\e66c"}.steadysets-icon-folder-check:before{content:"\e66d"}.steadysets-icon-folder-settings:before{content:"\e66e"}.steadysets-icon-folder-add:before{content:"\e66f"}.steadysets-icon-folder:before{content:"\e670"}.steadysets-icon-window:before{content:"\e671"}.steadysets-icon-windows:before{content:"\e672"}.steadysets-icon-browser:before{content:"\e673"}.steadysets-icon-file-broken:before{content:"\e674"}.steadysets-icon-align-justify:before{content:"\e675"}.steadysets-icon-align-center:before{content:"\e676"}.steadysets-icon-align-right:before{content:"\e677"}.steadysets-icon-align-left:before{content:"\e678"}.steadysets-icon-file:before{content:"\e679"}.steadysets-icon-file-add:before{content:"\e67a"}.steadysets-icon-file-settings:before{content:"\e67b"}.steadysets-icon-mute:before{content:"\e67c"}.steadysets-icon-heart:before{content:"\e67d"}.steadysets-icon-enter:before{content:"\e67e"}.steadysets-icon-volume-decrease:before{content:"\e67f"}.steadysets-icon-wifi-mid:before{content:"\e680"}.steadysets-icon-volume:before{content:"\e681"}.steadysets-icon-bookmark:before{content:"\e682"}.steadysets-icon-screen:before{content:"\e683"}.steadysets-icon-map:before{content:"\e684"}.steadysets-icon-measure:before{content:"\e685"}.steadysets-icon-eyedropper:before{content:"\e686"}.steadysets-icon-support:before{content:"\e687"}.steadysets-icon-phone:before{content:"\e688"}.steadysets-icon-email2:before{content:"\e689"}.steadysets-icon-volume-increase:before{content:"\e68a"}.steadysets-icon-wifi-full:before{content:"\e68b"}



