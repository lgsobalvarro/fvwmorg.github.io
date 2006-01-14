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
$title          = "FVWM - Man page - focus-link";
$heading        = "FVWM - Man page - focus-link";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_focus-link";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for focus-link in unstable branch (2.5.15)"); ?>

<H1>focus-link.pl</H1>
Section: User Commands  (1)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

focus-link.pl - perl FvwmCommand script
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

focus-link.pl [-v]
<A NAME="lbAD">&nbsp;</A>
<H2>OPTION</H2>

-v  show version number and exit.
<A NAME="lbAE">&nbsp;</A>
<H2>DESCRIPTION</H2>

This is a user programmable window focus script.
It requires FvwmCommand version 1.5 or later.
FvwmCommandS must be invoked from fvwm prior to this command.
<P>
This script can be invoked from a shell or from .fvwm2rc. For example.
<P>
<BR>&nbsp;&nbsp;&nbsp;AddToFunc&nbsp;&quot;InitFunction&quot;
<BR>&nbsp;&nbsp;&nbsp;+&nbsp;&quot;I&quot;&nbsp;Exec&nbsp;exec&nbsp;xcb&nbsp;-n&nbsp;4&nbsp;-l&nbsp;vertical&nbsp;-g&nbsp;240x180-0+530
<BR>&nbsp;&nbsp;&nbsp;+&nbsp;&quot;I&quot;&nbsp;Exec&nbsp;sleep&nbsp;2;&nbsp;$HOME/scripts/focus-link.pl
<P>
Sleep is used in order to avoid un-necessary reaction during initial
window creation. Note, fvwm itself continues to run during these 2 seconds.
<P>
Default behavior is listed below.
In order to change the behavior, modify user_function using user
functions.
<DL COMPACT>
<DT>1.<DD>
When a window is opened up, focus the window and move the pointer
to it. The parent window regains focus when a window is closed.
Parenthood is determined when a window is opened. It is the last
focused window with the same X class.
<DT>2.<DD>
#1 would not occur to AcroRead opening window.
<DT>3.<DD>
#1 would not occur when SkipMapping is set and the window is the
only window of its class.
<DT>4.<DD>
For Netscape find dialog window, addition to #1, resize the window
to 300x150 pixels and move it to East edge of the screen.
Download/upload windows will not be focused nor be in focus link
list.
<DT>5.<DD>
Move appletviewer to NorthWest corner.
<DT>6.<DD>
Xterm won't focus back to its parent after closed.
<DT>7.<DD>
When a window is de-iconified, focus it and move the pointer.
<P>
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>USER FUNCTIONS</H2>

These are collection of functions a user can call from programmable
section.
<A NAME="lbAG">&nbsp;</A>
<H3>move_window [&lt;id&gt;] &lt;direction&gt;</H3>

<BR>&nbsp;&nbsp;or
<A NAME="lbAH">&nbsp;</A>
<H3>move_window [&lt;id&gt;] &lt;x&gt; &lt;y&gt;</H3>

<P>
If &lt;id&gt; is prensent in hex format, then move &lt;id&gt; window.
Otherwise, move the window in question.
<P>
If &lt;y&gt; is present, move window to &lt;x&gt; &lt;y&gt; in percentage of screen.
<P>
If 'p' is appended to &lt;width&gt; or &lt;height&gt;, it specifies in
pixel count. And, if &lt;width'p'&gt; or &lt;height'p'&gt; is lead with '-',
it signifies that pixel count from right or bottom edge.
<P>
If &lt;y&gt; does not exist, &lt;dir&gt; must be one of North Northeast East
Southeast South Southwest West Northwest to move window to edge.
<A NAME="lbAI">&nbsp;</A>
<H3>resize_window [&lt;id&gt;] &lt;width&gt; &lt;height&gt;</H3>

<P>
Resize window to &lt;width&gt; and &lt;height&gt; in percentage of screen size.
<P>
If &lt;id&gt; is not null, resize &lt;id&gt;. Otherwise resize the
window in question.
<P>
Letter 'p' can be appended to &lt;width&gt; and &lt;height&gt; to specify in
pixel count.
<A NAME="lbAJ">&nbsp;</A>
<H3>focus_window [&lt;id&gt;]</H3>

<P>
If &lt;id&gt; is not null, focus on &lt;id&gt;.
Otherwise, focus on the window in question.
<A NAME="lbAK">&nbsp;</A>
<H3>warp_to_window [&lt;id&gt;] [&lt;x&gt; &lt;y&gt;]</H3>

<P>
Move pointer to window.
<P>
If &lt;id&gt; is a window id, warp to &lt;id&gt;.
Otherwise, warp to the window in question.
<P>
If &lt;x&gt; and &lt;y&gt; are present, warp to &lt;x&gt; and &lt;y&gt; percentage of window
size down and in from the upper left hand corner.
<P>
Letter 'p' can be appended to &lt;width&gt; and &lt;height&gt; to specify in pixel
count.
<A NAME="lbAL">&nbsp;</A>
<H3>class_matches &lt;class&gt; [&lt;resource&gt;]</H3>

<P>
Check if window class and optional resource match.
<P>
If arg1 is present, and if class matches with &lt;class&gt; and resource
matches with &lt;resource&gt;, then return 1.
<P>
If arg1 is not present, and if class matches with &lt;class&gt; then
return 1.
Otherwise, return null.
<A NAME="lbAM">&nbsp;</A>
<H3>window_flag [&lt;id&gt;] &lt;flag&gt;</H3>

<P>
Return 1 if &lt;flag&gt; is true in the window in question.
If &lt;id&gt; is not null, check on &lt;id&gt;. Otherwise check on the
window in question.
&lt;flag&gt; must be a exact match to one of these:
<P>
<BR>&nbsp;&nbsp;StartIconic
<BR>&nbsp;&nbsp;OnTop
<BR>&nbsp;&nbsp;Sticky
<BR>&nbsp;&nbsp;WindowListSkip
<BR>&nbsp;&nbsp;SuppressIcon
<BR>&nbsp;&nbsp;NoiconTitle
<BR>&nbsp;&nbsp;Lenience
<BR>&nbsp;&nbsp;StickyIcon
<BR>&nbsp;&nbsp;CirculateSkipIcon
<BR>&nbsp;&nbsp;CirculateSkip
<BR>&nbsp;&nbsp;ClickToFocus
<BR>&nbsp;&nbsp;SloppyFocus
<BR>&nbsp;&nbsp;SkipMapping
<BR>&nbsp;&nbsp;Handles
<BR>&nbsp;&nbsp;Title
<BR>&nbsp;&nbsp;Mapped
<BR>&nbsp;&nbsp;Iconified
<BR>&nbsp;&nbsp;Transient
<BR>&nbsp;&nbsp;Visible
<BR>&nbsp;&nbsp;IconOurs
<BR>&nbsp;&nbsp;PixmapOurs
<BR>&nbsp;&nbsp;ShapedIcon
<BR>&nbsp;&nbsp;Maximized
<BR>&nbsp;&nbsp;WmTakeFocus
<BR>&nbsp;&nbsp;WmDeleteWindow
<BR>&nbsp;&nbsp;IconMoved
<BR>&nbsp;&nbsp;IconUnmapped
<BR>&nbsp;&nbsp;MapPending
<BR>&nbsp;&nbsp;HintOverride
<BR>&nbsp;&nbsp;MWMButtons
<BR>&nbsp;&nbsp;MWMBorders
<A NAME="lbAN">&nbsp;</A>
<H3>resource_matches &lt;resource&gt;</H3>

Check if window resource matches pattern &lt;resource&gt;.
If it matches, return 1.
Otherwise return null.
<A NAME="lbAO">&nbsp;</A>
<H3>action_was &lt;action&gt;</H3>

Check if &lt;action&gt; was taken place.
<P>
&lt;action&gt; must be a exact match to one of these:
<P>
<BR>&nbsp;&nbsp;new&nbsp;page
<BR>&nbsp;&nbsp;new&nbsp;desk
<BR>&nbsp;&nbsp;add
<BR>&nbsp;&nbsp;raise
<BR>&nbsp;&nbsp;lower
<BR>&nbsp;&nbsp;focus&nbsp;change
<BR>&nbsp;&nbsp;destroy
<BR>&nbsp;&nbsp;iconify
<BR>&nbsp;&nbsp;deiconify
<BR>&nbsp;&nbsp;windowshade
<BR>&nbsp;&nbsp;dewindowshade
<BR>&nbsp;&nbsp;end&nbsp;windowlist
<BR>&nbsp;&nbsp;icon&nbsp;location
<BR>&nbsp;&nbsp;end&nbsp;configinfo
<BR>&nbsp;&nbsp;string
<A NAME="lbAP">&nbsp;</A>
<H3>get_parent_window [&lt;id&gt;]</H3>

<P>
Return parent window id.
<P>
If &lt;id&gt; is not null, check on &lt;id&gt;. Otherwise check on the
window in question.
<A NAME="lbAQ">&nbsp;</A>
<H3>no_parent_window [&lt;id&gt;]</H3>

<P>
Return 1 if no parent window exits.
<P>
If &lt;id&gt; is not null, check on &lt;id&gt;. Otherwise check on the
window in question.
<A NAME="lbAR">&nbsp;</A>
<H3>delete_from_list</H3>

<P>
Delete the window from link list
<A NAME="lbAS">&nbsp;</A>
<H2>SEE ALSO</H2>

<a href="<?php echo conv_link_target('./FvwmCommand.php');?>">FvwmCommand</a>
<A NAME="lbAT">&nbsp;</A>
<H2>AUTHOR</H2>

Toshi Isogai  <A HREF="mailto:isogai@ucsub.colorado.edu">isogai@ucsub.colorado.edu</A>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">OPTION</A><DD>
<DT><A HREF="#lbAE">DESCRIPTION</A><DD>
<DT><A HREF="#lbAF">USER FUNCTIONS</A><DD>
<DL>
<DT><A HREF="#lbAG">move_window [&lt;id&gt;] &lt;direction&gt;</A><DD>
<DT><A HREF="#lbAH">move_window [&lt;id&gt;] &lt;x&gt; &lt;y&gt;</A><DD>
<DT><A HREF="#lbAI">resize_window [&lt;id&gt;] &lt;width&gt; &lt;height&gt;</A><DD>
<DT><A HREF="#lbAJ">focus_window [&lt;id&gt;]</A><DD>
<DT><A HREF="#lbAK">warp_to_window [&lt;id&gt;] [&lt;x&gt; &lt;y&gt;]</A><DD>
<DT><A HREF="#lbAL">class_matches &lt;class&gt; [&lt;resource&gt;]</A><DD>
<DT><A HREF="#lbAM">window_flag [&lt;id&gt;] &lt;flag&gt;</A><DD>
<DT><A HREF="#lbAN">resource_matches &lt;resource&gt;</A><DD>
<DT><A HREF="#lbAO">action_was &lt;action&gt;</A><DD>
<DT><A HREF="#lbAP">get_parent_window [&lt;id&gt;]</A><DD>
<DT><A HREF="#lbAQ">no_parent_window [&lt;id&gt;]</A><DD>
<DT><A HREF="#lbAR">delete_from_list</A><DD>
</DL>
<DT><A HREF="#lbAS">SEE ALSO</A><DD>
<DT><A HREF="#lbAT">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 20:43:07 GMT, January 14, 2006


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 14-Jan-2006 -->
