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
$title          = "FVWM - Man page - fvwm-bug";
$heading        = "FVWM - Man page - fvwm-bug";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_fvwm-bug";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-bug in unstable branch (2.5.32)"); ?>

<H1>fvwm-bug</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.5.32)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-bug - report a bug in fvwm
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>fvwm-bug</u></B>
[<I>--help</I>]
[<I>--version</I>]
[<I>address</I>]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B><u>fvwm-bug</u></B>

is a shell script to help the user compose and mail bug reports
concerning fvwm in a standard format.
<B><u>fvwm-bug</u></B>

invokes the editor specified by the environment variable
<FONT><B>EDITOR</B>

</FONT>
on a temporary copy of the bug report format outline. The user must
fill in the appropriate fields and exit the editor.
<B><u>fvwm-bug</u></B>

then mails the completed report to the local fvwm maintainer, the fvwm workers list
<I><A HREF="mailto:fvwm-workers@fvwm.org">fvwm-workers@fvwm.org</A></I>, or
<I>address</I>.  If the report cannot be mailed, it is saved in the
file <I>dead.fvwm-bug</I> in the invoking user's home directory.
<P>

The bug report format outline consists of several sections.  The first
section provides information about the machine, operating system, the
fvwm version, and the compilation environment.  The second section
should be filled in with a description of the bug.  The third section
should be a description of how to reproduce the bug.  The optional
fourth section is for a proposed fix.  Fixes are encouraged.
<A NAME="lbAE">&nbsp;</A>
<H2>ENVIRONMENT</H2>

<B><u>fvwm-bug</u></B>

will utilize the following environment variables if they exist:
<DL COMPACT>
<DT><B>EDITOR</B>

<DD>
Specifies the preferred editor. If
<FONT><B>EDITOR</B>

</FONT>
is not set,
<B><u>fvwm-bug</u></B>

defaults to
<B>emacs</B>.

<DT><B>HOME</B>

<DD>
Directory in which the failed bug report is saved if the mail fails.
<P>
</DL>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">ENVIRONMENT</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 12:55:24 GMT, August 09, 2010


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 09-Aug-2010 -->
