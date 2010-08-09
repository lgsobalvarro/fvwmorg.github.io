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
$title          = "FVWM - Man page - FvwmSaveDesk";
$heading        = "FVWM - Man page - FvwmSaveDesk";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmSaveDesk";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmSaveDesk in unstable branch (2.5.32)"); ?>

<H1>FvwmSaveDesk</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.5.32)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmSaveDesk - another fvwm desktop-layout saving module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmSaveDesk is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

When called, this module will attempt to save your current desktop
layout as a definition of extra lines for the function InitFunction
into the file
<I>.fvwm2desk</I>

in your home directory. As explain in the other documentation, this
function is called at startup of fvwm.
You have to include this file in
<I>.fvwm2rc</I>

after the definition of the Function Initfunction.
You can do this by using the module
<I>FvwmM4</I>

or
<I>FvwmCpp.</I>

<P>
Your applications must supply certain hints to the X window system.
<I>Emacs</I>

and <I>Netscape</I>, for example, does not, so FvwmSaveDesk can't get any
information from it.
<P>
Also, FvwmSaveDesk assumes that certain command line options are
globally accepted by applications, which may not be the case.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>SETUP USING FVWMM4 MODULE</H2>

The M4 Macro processor substitutes its macros even in the middle of a
word. Because of that you may have problems with predefined macros
such as include or define. To avoid this the GNU M4 has an extra
option to prefix all builtins with 'm4_'. FvwmM4 can be called with
option -m4-prefix and then will provide the option -P to M4.
I personally use the FvwmM4 module this way.
<PRE>

fvwm -cmd &quot;FvwmM4 -m4-prefix -m4opt -I$HOME $HOME/.fvwm2rc&quot;

</PRE>

Simply add the following line to the end of .fvwm2rc:
<PRE>

m4_include(`.fvwm2desk') .

</PRE>

<A NAME="lbAF">&nbsp;</A>
<H2>SETUP USING FVWMCPP MODULE</H2>

With the FvwmCpp you may have the problem that the preprocessor
directives starts with the comment character '#' and will
complain about unknown directives, if you have comments in your .fvwm2rc.
<PRE>

fvwm -cmd &quot;FvwmCpp -C-I$HOME $HOME/.fvwm2rc&quot;

</PRE>

Simply add the following line to the end of .fvwm2rc:
<PRE>

#include &quot;.fvwm2desk&quot;

</PRE>

<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmSaveDesk can be invoked by adding it to a menu or binding it to a
mouse button or key stroke in
the
<I>.fvwm2rc</I>

file.
Fvwm will search directory specified in the ModulePath
configuration option to locate FvwmSaveDesk.
<P>
To insert it to a menu, add the line
<PRE>

+       &quot;Save Desktop&quot; Module FvwmSaveDesk

</PRE>

to the menu definition.
I thing binding it to a mouse button is not very useful, but you can
do that, by adding for example this line.
<PRE>

Mouse 3         R       CS      Module FvwmSaveDesk

</PRE>

Than FvwmSaveDesk will be called if you hit the right mouse button
on the root window while holding the shift and control button down.
<P>
You can bind FvwmSaveDesk to a function key F10 for example you have
to insert the following line:
<PRE>

Key     F10     A       Module FvwmSaveDesk

</PRE>

I personally add it as a Button to the module FvwmButtons:
<PRE>

*FvwmButtons SaveDesc desk.xpm   Module FvwmSaveDesk

</PRE>

<A NAME="lbAH">&nbsp;</A>
<H2>AUTHOR</H2>

Carsten Paeth (<A HREF="mailto:calle@calle.in-berlin.de">calle@calle.in-berlin.de</A>)
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">SETUP USING FVWMM4 MODULE</A><DD>
<DT><A HREF="#lbAF">SETUP USING FVWMCPP MODULE</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 12:55:24 GMT, August 09, 2010


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 09-Aug-2010 -->
