<?php
//--------------------------------------------------------------------
//-  File          : index.php
//-  Project       : FVWM Home Page
//-  Date          : Fri Mar 14 21:32:08 2003
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

if (strlen($rel_path) == 0) $rel_path = ".";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "The Official FVWM Home Page";
$heading        = 'The Official <img src="pictures/fvwm-logo-steelblue.gif" width="150" height="100" border="0" alt="FVWM" align="middle"> Home Page';
$link_name      = "Home";
$link_picture   = "pictures/icons/home";
$parent_site    = "top";
$child_sites    = array("authors", "history", "fvwm_cats");
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "home";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen("$site_has_been_loaded") == 0) {
  $site_has_been_loaded = "true";
  include(sec_filename($layout_file));
  exit();
}
?>

<?php 
decoration_window_start("Welcome to FVWM"); 
?> 

<p>
FVWM is an extremely powerful ICCCM-compliant multiple virtual desktop
window manager for the X&nbsp;Window system.  Development is active,
and support is excellent.  Check it out!
</p>

<table border=0 cellpadding=0 cellspacing=0 summary="versions">
<tr>
        <td class="windowcontents">Latest Stable Release: &nbsp; </td>
        <td class="windowcontents"><b><?php mylink("download", $latest_stable_release); ?> </b></td>
	<td class="windowcontents">&nbsp; <!img src="pictures/new.gif" width=28 height=12></td>
</tr>
<tr>
        <td class="windowcontents">Latest Unstable Release: &nbsp; </td>
        <td class="windowcontents"><b><?php mylink("download", $latest_unstable_release); ?> </b></td>
	<td class="windowcontents">&nbsp; <!img src="pictures/new.gif" width=28 height=12></td>
</tr>
</table>

<hr>
<b>News:</b> The submission period of the 
<?php mylink("logo-competition", "FVWM Logo Competition"); ?> is over.
Due the large amount of contributed logos voting will be delayed. Please check this site for updates. 
<hr>

<div align="center">
<h2>Quick jumps</h2>

<?php
        insert_quick_jump_list(
                array(
                      "features",
                      "download",

                      "faq",
                      "windowdecors",

                      array("Bug Reporting",
			                "http://www.fvwm.org/cgi-bin/fvwm-bug",
			                "fvwm_bug_reporting"),
                      "screenshots_desks",

                      "mailing_lists",
                      "menus",

                      array("Mailing List Archive",
                            "http://www.hpc.uh.edu/fvwm/archive/",
                            "mail_archive"),
                      array("FVWM Themes",
                            "http://fvwm-themes.sf.net/",
                            "fvwm_themes"),

                      "manpages",
                      "icons",

                      "authors",
                      "links",

                      "developers",
                      "fvwm_cats",

                      array("FVWM Wiki Pages",
                            "http://rvb.dyndns.org/FvwmWiki/",
                            "fvwm_wiki"),
), 2);
?>
</div>


<?php
decoration_window_end();
?>

<!--
  Please don't modify the rest of the page. Reserved for mirrors.
-->
<!--
  This is the original source. Mirrors should replace this comment.
-->

<!-- LocalWords: FVWM
-->
