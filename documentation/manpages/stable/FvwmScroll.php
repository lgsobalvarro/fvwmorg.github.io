<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmScroll";
$heading        = "FVWM - Man page - FvwmScroll";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmScroll";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmScroll in stable branch (2.6.5)"); ?>

<H1>FvwmScroll</H1>
Section: Fvwm Modules (1)<BR>Updated: 20 April 2012 (2.6.5)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmScroll - the fvwm scroll-bar module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmScroll is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmScroll module prompts the user to select a target window, if
the module was not launched from within a window context in Fvwm.
After that, it adds scroll bars to the selected window, to reduce the
total desktop space consumed by the window.
<P>
FvwmScroll should not be used with windows which move or resize
themselves, nor should it be used with windows which set the
WM_COLORMAP_WINDOWS property. Operation is fine with windows that have
a private colormap.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmScroll program, and the concept for
interfacing this module to the Window Manager, are all original work
by Robert Nation.
<P>
Copyright 1994, Robert Nation. No guarantees or
warranties or anything
are provided or implied in any way whatsoever. Use this program at your
own risk. Permission to use this program for any purpose is given,
as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmScroll</I> gets config info from <B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s
module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>)

to determine which colors to use.
<P>
If the FvwmScroll executable is linked to another name, ie ln -s
FvwmScroll MoreScroll, then another module called MoreScroll can be
started, with a completely different configuration than FvwmScroll,
simply by changing the keyword  FvwmScroll to MoreScroll.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmScroll can be invoked by binding the action 'Module
FvwmScroll x y' to a menu or key-stroke in the .fvwm2rc file.
The parameter x and y are either integers or integers immediately followed by
a p, which describe the horizontal and vertical size modification of the
window.  An integer describe a size reduction. An integer followed by a
p describe a size as a percentage of the height or the width of a full screen
but the size is never larger than the original window size (0p will do
nothing). Fvwm will search directory specified in the ModulePath
configuration option to attempt to locate FvwmScroll. Although nothing
keeps you from launching FvwmScroll at start-up time, you probably don't
want to.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<DL COMPACT>
<DT>*FvwmScroll: Colorset <I>n</I><DD>
Tells the module to use colorset <I>n</I>. See FvwmTheme.
<P>
<DT>*FvwmScroll: Back <I>color</I><DD>
Tells the module to use <I>color</I> instead of black for the window
background. Switches off the Colorset option.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>BUGS</H2>

When the scroll bars are removed by clicking on the button in the
lower right corner, the window does not restore its location
correctly.
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

Robert Nation
<P>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">BUGS</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 11:20:43 GMT, April 20, 2012


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 20-Apr-2012 -->
