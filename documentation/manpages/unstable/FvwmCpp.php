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
if (strlen("$navigation_check") > 0) return;


$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmCpp";
$heading        = "Man page - FvwmCpp";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

// Since manpages shall not apear in the navigation structure this
// page must identify itself with another name. It says here that
// it's name is manpages which belongs actually to the table of
// content page for all man pages. The layout file will therefore
// mark the navigation entry for the toc file as choosen althought
// it is actually not choosen.
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

<?php decoration_window_start("Manual page for FvwmCpp"); ?>

<H1>FvwmCpp</H1>
Section: FVWM Modules (1)<BR>Updated: 13 September 2002<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmCpp - the FVWM  Cpp pre-processor
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

Module FvwmCpp [options] filename
<P>
The FvwmCpp module can only be invoked by fvwm.
Command line invocation of the FvwmCpp module will not work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

When fvwm executes the FvwmCpp module,
FvwmCpp invokes the cpp pre-processor on the file
specified in its invocation, then FvwmCpp causes fvwm to
execute the commands in the resulting file.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmCpp can be invoked as a module using an fvwm command,
from the .fvwm2rc file, a menu,
mousebinding, or any of the many other ways fvwm commands
can be issued.
<P>
If the user wants his entire .fvwm2rc file pre-processed with FvwmCpp,
then fvwm should be invoked as:
<P>


<P>


<blockquote><PRE>fvwm -cmd &quot;Module FvwmCpp .fvwm2rc&quot;</PRE></blockquote>
<P>



<P>
Note that the argument to the option &quot;-cmd&quot; should be enclosed
in quotes, and no other quoting should be used.
<P>
When FvwmCpp runs as a module, it runs asynchronously
from fvwm.
If FvwmCpp is invoked from the .fvwm2rc,
the commands 
generated by FvwmCpp
may or may not be executed by the time
fvwm processes the next command in the .fvwm2rc.
Invoke FvwmCpp this way for synchronous execution:
<P>


<P>


<blockquote><PRE>ModuleSynchronous FvwmCpp -lock filename</PRE></blockquote>
<P>



<P>
<A NAME="lbAF">&nbsp;</A>
<H2>OPTIONS</H2>

Some options can be specified following the modulename:
<DL COMPACT>
<DT>-cppopt <I>option</I><DD>
Lets you pass an option to the cpp program.  Not really needed as any unknown
options will be passed on automatically.
<P>
<DT>-cppprog <I>name</I><DD>
Instead of invoking &quot;/usr/lib/cpp&quot;, fvwm will invoke <I>name</I>.
<P>
<DT>-outfile <I>filename</I><DD>
Instead of creating a random unique name for the temporary file for
the preprocessed rc file, this option will let you specify the name of
the temporary file it will create.  Please note that FvwmCpp will attempt
to remove this file before writing to it, so don't point it at anything
important even if it has read-only protection.
<P>
<DT>-debug<DD>
Causes the temporary file create by Cpp to
be retained. This file is usually called &quot;/tmp/fvwmrcXXXXXX&quot;
<P>
<DT>-lock<DD>
If you want to use this option you need to start FvwmCpp with
ModuleSynchronous. This option causes fvwm to wait that the pre-process
finish and that FvwmCpp asks fvwm to Read the pre-processed file before
continuing. This may be useful at startup if you use a session manager
as Gnome. Also, this is useful if you want to process and run a Form in
a fvwm function.
<P>
<DT>-noread<DD>
Causes the pre-processed file to be not read by fvwm. Useful to
pre-process a FvwmScript script with FvwmCpp.
<P>
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmCpp defines some values for use in the pre-processor file:
<P>
<DL COMPACT>
<DT>TWM_TYPE<DD>
Always set to &quot;fvwm&quot;.
<DT>SERVERHOST<DD>
The name of the machine running the X Server.
<DT>CLIENTHOST<DD>
The name of the machine running fvwm.
<DT>HOSTNAME<DD>
The host name of the machine running fvwm. Generally the same as CLIENTHOST.
<DT>OSTYPE<DD>
The operating system for CLIENTHOST.
<DT>USER<DD>
The name of the person running fvwm.
<DT>HOME<DD>
The home directory of the person running fvwm.
<DT>VERSION<DD>
The X11 version.
<DT>REVISION<DD>
The X11 revision number.
<DT>VENDOR<DD>
The X server vendor.
<DT>RELEASE<DD>
The X server release number.
<DT>SCREEN<DD>
The screen number.
<DT>WIDTH<DD>
The screen width in pixels.
<DT>HEIGHT<DD>
The screen height in pixels.
<DT>X_RESOLUTION<DD>
Some distance/pixel measurement for the horizontal direction, I think.
<DT>Y_RESOLUTION<DD>
Some distance/pixel measurement for the vertical direction, I think.
<DT>PLANES<DD>
Number of color planes for the X server display
<DT>BITS_PER_RGB<DD>
Number of bits in each rgb triplet.
<DT>CLASS<DD>
The X11 default visual class, e.g. PseudoColor.
<DT>COLOR<DD>
Yes or No, Yes if the default visual class is neither StaticGrey or GreyScale.
<DT>FVWM_CLASS<DD>
The visual class that fvwm is using, e.g. TrueColor.
<DT>FVWM_COLOR<DD>
Yes or No, Yes if the FVWM_CLASS is neither StaticGrey or GreyScale.
<DT>FVWM_VERSION<DD>
The fvwm version number, ie 2.0
<DT>OPTIONS<DD>
Some combination of SHAPE, XPM, NO_SAVEUNDERS, and Cpp, as defined in
configure.h at compile time.
<DT>FVWM_MODULEDIR<DD>
The directory where fvwm looks for .fvwm2rc and modules by default, as
determined at compile time.
<DT>FVWM_USERDIR<DD>
The value of $FVWM_USERDIR.
<DT>SESSION_MANAGER<DD>
The value of $SESSION_MANAGER. Undefined if this variable is not set.
<P>
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>EXAMPLE PROLOG</H2>

<P>


<P>


<blockquote><PRE>#define TWM_TYPE fvwm
#define SERVERHOST spx20
#define CLIENTHOST grumpy
#define HOSTNAME grumpy
#define OSTYPE SunOS
#define USER nation
#define HOME /local/homes/dsp/nation
#define VERSION 11
#define REVISION 0
#define VENDOR HDS human designed systems, inc. (2.1.2-D)
#define RELEASE 4
#define SCREEN 0
#define WIDTH 1280
#define HEIGHT 1024
#define X_RESOLUTION 3938
#define Y_RESOLUTION 3938
#define PLANES 8
#define BITS_PER_RGB 8
#define CLASS PseudoColor
#define COLOR Yes
#define FVWM_VERSION 2.0 pl 1
#define OPTIONS SHAPE XPM Cpp
#define FVWM_MODULEDIR /local/homes/dsp/nation/modules
#define FVWM_USERDIR /local/homes/dsp/nation/.fvwm
#define SESSION_MANAGER local/grumpy:/tmp/.ICE-unix/440,tcp/spx20:1025</PRE></blockquote>
<P>



<P>
<A NAME="lbAI">&nbsp;</A>
<H2>BUGS</H2>

Module configurations do not become active until fvwm has restarted
if you use FvwmCpp on startup. FvwmCpp creates a temporary file
and passes this to fvwm, so you would have to edit this file too.
There are some problems with comments in your .fvwm2rc file.
The comment sign # is misinterpreted by the preprocessor.
This has usually no impact on functionality but generates
annoying warning messages.
The sequence /* is interpreted as the start of a C comment what
is probably not what you want in a filename. You might want to try
/?* (for filenames only) or /\* or &quot;/*&quot; instead. Depending on
your preprocessor you may have the same problem with &quot;//&quot;.
Macros are not replaced within single (') or double quotes (back quotes (`) to circumvent this. Fvwm accepts back quotes for
quoting and at least FvwmButtons does too.
The preprocessor may place a space after a macro substitution, so
with


<P>


<blockquote><PRE>#define MYCOMMAND ls
&quot;Exec &quot;MYCOMMAND&quot; -l&quot;</PRE></blockquote>
<P>



you might get


<P>


<blockquote><PRE>&quot;Exec &quot;ls &quot; -l&quot; (two words)</PRE></blockquote>
<P>



and not


<P>


<blockquote><PRE>&quot;Exec &quot;ls&quot; -l&quot; (one word).</PRE></blockquote>
<P>



<P>
If you use gcc you can use this invocation to turn off '//'
comments:
<P>


<P>


<blockquote><PRE>FvwmCpp -Cppprog '/your/path/to/gcc -C -E -' &lt;filename&gt;</PRE></blockquote>
<P>



<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

FvwmCpp is the result of a random bit mutation on a hard disk,
presumably a result of a  cosmic-ray or some such thing.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">OPTIONS</A><DD>
<DT><A HREF="#lbAG">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAH">EXAMPLE PROLOG</A><DD>
<DT><A HREF="#lbAI">BUGS</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:51 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:47 -->