<?php
//--------------------------------------------------------------------
//-  File          : @FILENAME@
//-  Project       : FVWM Home page
//-  Programmer    : Logo Competitor
//--------------------------------------------------------------------

$rel_path = "..";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Logo Competition - New logos";
$heading        = "FVWM - Logo Competition - New logos";
$link_name      = "Logo Competition";
$link_picture   = "pictures/icons/logo_competition";
$parent_site    = "news";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "logo_competition";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen("$site_has_been_loaded") == 0) {
	$site_has_been_loaded = "true";
	include(sec_filename($layout_file));
	exit();
}
if( file_exists("./logos/color_select.inc") ) include("./logos/color_select.inc");
?>

<!-- ============================================================= -->

<?php decoration_window_start("By Michael Gorniak (7 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Michael_Gorniak/index.php'); ?>">

<p class="centered"><img src="logos/Michael_Gorniak/fvwm-logos-overview.png"
width="213" height="358" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By David Drummond (1 image)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/David_Drummond/index.php'); ?>">

<p class="centered"><img src="logos/David_Drummond/yellow_flower_fvwm_logo.png"
width="300" height="180" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Ian Remmler (5 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Ian_Remmler/index.php');?>">

<p class="centered"><img src="logos/Ian_Remmler/3d.png"
width="184" height="213" border="0" vspace="0" hspace="0">

<p class="centered"><img src="logos/Ian_Remmler/contrast.png"
width="269" height="89" border="0" vspace="0" hspace="0">

<p class="centered"><img src="logos/Ian_Remmler/future.png"
width="297" height="98" border="0" vspace="0" hspace="0">

<p class="centered"><img src="logos/Ian_Remmler/groovy-3d.png"
width="262" height="121" border="0" vspace="0" hspace="0">

<p class="centered"><img src="logos/Ian_Remmler/block.png"
width="130" height="161" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Tian (5 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Tian/index.php'); ?>">

<p class="centered"><img src="logos/Tian/logo_sunny.png"
width="266" height="143" border="0" vspace="0" hspace="0">

<p class="centered"><img src="logos/Tian/logo_float_bg.png"
width="251" height="102" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Phil Harper (9 images + 4 bg)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Phil_Harper/index.php'); ?>">

<p class="centered"><img src="logos/Phil_Harper/feeble.png"
width="199" height="191" border="0" vspace="0" hspace="0" align="middle">

<img src="logos/Phil_Harper/tiger2.png"
width="270" height="246" border="0" vspace="0" hspace="0" align="middle">

<p class="centered"><img src="logos/Phil_Harper/fvwmpower2-overview.png"
width="146" height="91" border="0" vspace="0" hspace="0" align="middle">

<img src="logos/Phil_Harper/tigerskin6.png"
width="239" height="67" border="0" vspace="0" hspace="0" align="middle">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Anna MacLachlan (7 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Anna_MacLachlan/index.php'); ?>">

<p class="centered"><img src="logos/Anna_MacLachlan/jungle-overview.png"
width="290" height="250" border="0" vspace="0" hspace="0">

<p class="centered"><img src="logos/Anna_MacLachlan/clearly-fvwm-small.png"
width="183" height="71" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Coji Morishita (8 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Coji_Morishita/index.php'); ?>">

<p class="centered"><img src="logos/Coji_Morishita/fvwm_sbanner_blue.png"
width="335" height="48" border="0" hspace="0" vspace="0">

<p class="centered"><img src="logos/Coji_Morishita/fvwm_sym_logo.png"
width="240" height="200" border="0" hspace="0" vspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Scott Smedley (6 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Scott_Smedley/index.php'); ?>">

<p class="centered"><img src="logos/Scott_Smedley/fvwm-overview.png"
width="300" height="400" border="0" hspace="0" vspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Felix E. Klee (8 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Felix_E_Klee/index.php'); ?>">

<p class="centered"><img src="logos/Felix_E_Klee/logos-overview.png"
width="255" height="564" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Stefan Bergmeier (2 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Stefan_Bergmeier/index.php'); ?>">

<p class="centered"><img src="logos/Stefan_Bergmeier/logos-overview.png"
width="300" height="150" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Aric Campling (4 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Aric_Campling/index.php'); ?>">

<p class="centered"><img src="logos/Aric_Campling/logos-overview.png"
width="300" height="180" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Ludovic Recourchines (3 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Ludovic_Recourchines/index.php'); ?>">

<p class="centered"><img src="logos/Ludovic_Recourchines/logos-overview.png"
width="200" height="240" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Tadashi Hikone (1 image)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Tadashi_Hikone/index.php'); ?>">

<p class="centered"><img src="logos/Tadashi_Hikone/logo.png"
width="197" height="99" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Colin May (8 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Colin_May/index.php'); ?>">

<p class="centered"><img src="logos/Colin_May/Colin1.png"
width="200" height="120" border="0" vspace="0" hspace="0">
<p class="centered"><img src="logos/Colin_May/Colin3.png"
width="200" height="120" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<?php decoration_window_start("By Wolf Bergenheim (6 images)", "", "", 0); ?>

<a href="<?php echo conv_link_target('logos/Wolf_Bergenheim/index.php'); ?>">

<p class="centered"><img src="logos/Wolf_Bergenheim/overview.png"
width="388" height="301" border="0" vspace="0" hspace="0">

<p>More...
</a>

<?php decoration_window_end(); ?>

<!-- ============================================================= -->

<p>Return to <a href="<?php echo conv_link_target('./');?>">index</a>.</p>
