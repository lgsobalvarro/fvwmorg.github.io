<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use perllib2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

$rel_path = "./../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Perl library - FVWM::Tracker::GlobalConfig";
$heading        = "FVWM - Perl library - FVWM::Tracker::GlobalConfig";
$link_name      = "Perl library";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FVWM::Tracker::GlobalConfig in unstable branch (2.5.8)"); ?>

<H1>FVWM::Tracker::GlobalConfig</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-06-10<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Tracker/GlobalConfig.pm">FVWM/Tracker/GlobalConfig.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAC"></A>
This is a subclass of <B><a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a></B> that enables to read the global
<FONT>FVWM</FONT> configuration.
<P>

<blockquote><pre>    &quot;value updated&quot;</pre></blockquote>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSYS</H2>

<A NAME="ixAAD"></A>
Using <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> <TT>$module</TT> object:
<P>

<blockquote><pre>    my $configTracker = $module-&gt;track(&quot;GlobalConfig&quot;);
    my $configHash = $configTracker-&gt;data;
    my $xineramaInfo = $configHash-&gt;{'ImagePath'};</pre></blockquote>
<P>

or:
<P>

<blockquote><pre>    my $configTracker = $module-&gt;track(&quot;GlobalConfig&quot;);
    my $xineramaInfo = $configTracker-&gt;data('XineramaConfig');
    my $desktop2Name = $configTracker-&gt;data('DesktopName 2');</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>OVERRIDDEN METHODS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>data</B> [<I>key</I>]<DD>
<A NAME="ixAAF"></A>
Returns either hash ref of all global configuration values, or one value if
<I>key</I> is given.
<DT><B>dump</B> [<I>key</I>]<DD>
<A NAME="ixAAG"></A>
Works similarly to <B>data</B>, but returns debug lines for one or all global
configuration values.
</DL>
<A NAME="lbAE">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAH"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAF">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAI"></A>
For more information, see <a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a> and <a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">DESCRIPTION</A><DD>
<DT><A HREF="#lbAC">SYNOPSYS</A><DD>
<DT><A HREF="#lbAD">OVERRIDDEN METHODS</A><DD>
<DT><A HREF="#lbAE">AUTHOR</A><DD>
<DT><A HREF="#lbAF">SEE ALSO</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 02:17:16 GMT, June 10, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 10-Jun-2003 -->
