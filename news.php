<?php
//--------------------------------------------------------------------
//-  File          : news.php
//-  Project       : FVWM Home Page
//-  Date          : Fri Mar 14 21:32:08 2003
//-  Programmer    : Uwe Pross
//-  Last modified : <20.03.2003 17:58:30 uwe>
//--------------------------------------------------------------------

$rel_path = ".";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include($rel_path.'/definitions.inc'); 

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - NEWS";
$link_name      = "News";
$link_picture   = "pictures/icons/news";
$parent_site    = "top";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "news";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if( strlen("$navigation_check") > 0 ) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if( strlen("$site_has_been_loaded") == 0 ) {
  $site_has_been_loaded = "true";
  if( strlen($layout) > 0 ) {
    $file = $rel_path."/layout_".$layout.".inc";
    if( file_exists($file) ) $layout_file = $file;
  }
  include(sec_filename("$layout_file"));
  exit();
}
?>

<pre>

Note, the changes for the last STABLE release start with release
<A HREF="#2.4.15">2.4.15</A>.

<hr>
<b>Changes in development release 2.5.7 (not released yet)</b>

<hr>
<b>Changes in development release 2.5.6 (28-Feb-2003)</b>

* Fix button 3 drag in FvwmPager so that drag follows the mouse.

* Fix for gmplayer launched by fvwm.  Close stdin on Exec so the
  exec'd process knows its not running interactively.

* Improvement in MultiPixmap.  In particular Colorset and Solid
  color can be specified.

* New ButtonStyle and TitleStyle style options AdjustedPixmap,
  StretchedPixmap and ShrunkPixmap.

* Use the MIT Shared Memory Extension for XImage.

* The TitleStyle decor of a vertical window Title is rotated.
  This is controllable using a new style option:

    !UseTitleDecorRotation / UseTitleDecorRotation

* New style options IconBackgroundColorset, IconTitleColorset,
  HilightIconTitleColorset, IconTitleRelief, IconBackgroundRelief
  and IconBackgroundPadding.

* Minor incompatible improvements to the Perl library API.

* Renamed FvwmWindowLister to FvwmWindowMenu.

* New option to IconSize style: Adjusted, Stretched, Shrunk.

* New shortcuts for button states: AllActiveUp, AllActiveDown,
  AllInactiveUp, AllInactiveDown.

* New Style options:

    Closable, Iconifiable, Maximizable, AllowMaximizeFixedSize

* New conditions for matching windows:

    Closable, Iconifiable, Maximizable, FixedSize and HasHandles

* New conditional command On for non-window related conditions.

* Removed --disable-gnome-hints and --disable-ewmh configure
  options.

* All single letter variables are deprecated now; new variables:

    $[w.id], $[w.name], $[w.iconname], $[w.class], $[w.resource],
    $[desk.n], $[version.num], $[version.info], $[version.line],
    $[desk.pagesx], $[desk.pagesy]

<hr>
<b>Changes in development release 2.5.5 (2-Dec-2002)</b>

* Added support for joining and shaping in bi-directional
  languages that need this.

* ButtonStyle and TitleStyle new style type Colorset.

* New experimental module FvwmProxy.

* New command RestackTransients.

* Added a pixel offset to vector button definitions.

* New command FocusStyle as a shorthand for setting the FP...
  styles with the Style command.

* New option Locale to PrintInfo command.

* The Next and Prev commands start looking for a matching window at
  the context window if there is any.

* The MoveToPage command does nothing with sticky windows.

* New module FvwmWindowLister, a WindowList substitute.

* Sticky windows can be sticky across pages, across desks or both.
  Related to this are:
   - New commands StickAcrossPages and StickAcrossDesks.
   - New Style options StickyAcrossPages and StickyAcrossDesks.
   - New conditional command options StickyAcrossPages and
     StickyAcrossDesks.
   - New WindowList options NoStickyAcrossPages,
     NoStickyAcrossDesks, StickyAcrossPages, StickyAcrossDesks,
     OnlyStickyAcrossPages, OnlyStickyAcrossDesks.
   - New FvwmRearrange options -sp and -sd.

* Key bindings can operate on the release of a key too.  Prefix the
  key name with a '-' in the Key command.  Please read about the
  caveats in the man page.

* Fixed flickering in FvwmTaskBar, FvwmWinList, FvwmIconBox, FvwmForm,
  FvwmScript and FvwmScroll when xft fonts or icons with an alpha
  channel is used.

* New Colorset option RootTransparent

* The Transparent Colorset option can be tinted under certain
  conditions

* New MinHeight option to TitleStyle

<hr>
<b>Changes in alpha release 2.5.4 (20-Oct-2002)</b>

* FvwmTaskBar may now include mini launch buttons using the Button
  command.  Also has new options for spacing the buttons:
  WindowButtonsLeftMargin, WindowButtonsRightMargin, and
  StartButtonRightMargin.  See man page for details.

* Style switches can be prefixed with '!' to inverse their meaning.
  For example, "Style * Sticky" is the same as "Style * !Slippery".
  This works *only* for pairs of styles that take no arguments and
  for the Button and NoButton styles.

* New button property Id in FvwmButtons.  FvwmButtons now accepts
  dynamical actions using SendToModule, see the man page:

    ChangeButton &lt;button-id&gt; &lt;properties-to-change&gt;
    ExpandButtonVars &lt;button-id&gt; &lt;command-to-expand&gt;

* New Colorset options bgTint, fgTint (which complete Tint), Alpha,
  IconTint and IconAlpha.

* Alpha blending rendering is supported even without XRender
  support.

* Enhanced commands [Add]ButtonStyle, [Add]TitleStyle. ButtonState.
  Titles and buttons now have 4 main states instead of 3: ActiveUp,
  ActiveDown, InactiveUp and InactiveDown, plus 4 Toggled variants.
  Several shortcuts added: Active means ActiveUp + ActiveDown,
  Inactive means InactiveUp + InactiveDown, similarly for shortcuts
  ToggledActive and ToggledInactive.

* More shortcuts for button states added: AllNormal, AllToggled,
  AllActive, AllInactive, AllUp, AllDown.  These six shortcuts are
  actually different masks for 4 individual states (from 8 total).

* FPClickToFocus and FPClickToRaise work with any modifier by
  default.

* Perl library API regarding event handlers is changed, so personal
  modules in Perl should be adjusted.

* Allow the use of mouse buttons other than the first in
  FvwmWinList when invoked transient.

* ImagePath now supports directories in form "/some/directory;.png"
  (where semicolon delimits a file extension that files in
  /some/directory have.  This file extension replaces the original
  image extension (if any) or it is added if there is no extension.
  For example with: Style XTerm MiniIcon mini/xterm.xpm
  the file /some/directory/mini/xterm.png is searched.

* New graphical debugger module FvwmGtkDebug.

* New command NoWindow for removing the window context.

* New FvwmIconMan option ShowTransient.

* All conditions have a negation.

* New FvwmBacker option RetainPixmap.

* Fixed flickering in menus, icon title, FvwmButtons, FvwmIconMan
  and FvwmPager when xft fonts or icons with an alpha channel is used.

* FvwmButtons redrawing improvement: colorsets are now usable with
  containers.

* FvwmIconMan options PlainColorset, IconColorset, FocusColorset
  and SelectColorset are now strictly respected.

* The HilightBack and ActiveFore menu styles are independent of
  each other.  HilightBack without using ActiveFore does no longer
  hilight the item text.

* New WindowList option SortByResource; the previously added
  SortClassName option is renamed to SortByClass.

* New command PrintInfo for debugging.

<hr>
<b>Changes in alpha release 2.5.3 (25-Aug-2002)</b>

* TitleStyle MultiPixmap now works once again.

* Removed the old module interface for ConfigureWindow
  packets. External modules relying on this interface no longer
  work.

* Fixed interaction bug between CascadePlacement and StartsOnPage
  - if the target page was at a negative x or y page displacement
  from the current view port, the window would be placed on the
  wrong page.

* New Style option IconSize for restricting icon sizes.

* New WindowList options SortClassName, MaxLabelWidth, NoLayer,
  ShowScreen, ShowPage, ShowPageX and ShowPageY.

* Restored old way of handling clicks in windows with ClickToFocus
  and ClickToFocusPassesClickOff.  This fixes a problem with
  click+drag in an unfocused rxvt or aterm window.

* Fixed wrong warp coordinates when WarpToWindow was used with two
  arguments on an unmanaged window.

* Vastly improved FvwmEvent performance.

* FvwmAuto can operate on Enter and Leave events too.  This makes
  it possible to have auto raising with ClickToFocus and
  NeverFocus. See -menter and -menterleave options and examples in
  the FvwmAuto man page.

* The "hangon" strings in FvwmButtons support wild cards.

* New option "Icon" to PlaceAgain command.

* New option "FromPointer" and direction "Center" to the Direction
  command.

* The styles ClickToFocusRaises(Off) and
  MouseFocusClickRaises(Off) are now different names for the same
  style.  Configurations that used

    Style * ClickToFocus, ClickToFocusRaises
    Style * MouseFocusClickRaisesOff

  or vice versa no longer work as like before.  Remove the second
  line to fix the problem.  ClickToFocusRaises now works only on
  the client part of a window, not on the decorations as it did
  before.

* New color limit method for screens that only display 256 colors
  (or less).

* In depth less or equal to 16 image and gradient can be
  dithered. This can be enabled/disabled by using the new
  dither/nodither options to the Colorset command.

* Removed the styles MouseFocusClickIgnoreMotion and
  MouseFocusClickIgnoreMotionOff again.

* Many new focus policy styles "FP..." and "!FP...".

<hr>
<b>Changes in alpha release 2.5.2 (24-Jun-2002)</b>

* Fonts can have shadow effects, see the FONT SHADOW EFFECTS
  section of fvwm manual page.

* New Colorset options: fgsh for shadow text and fg_alpha for
  merging text with the background.

* New module FvwmPerl adds perl scripting ability to fvwm
  commands.

* Provided powerful perl library for creating FVWM modules in
  perl.

* New WindowList option IconifiedtAtEnd.

* Always display the current desk number in the FvwmPager window
  title.

* Allow to bind a function to the focus click and pass it to the
  application at the same time.

* New styles !Borders and Borders to enable or disable window
  borders.

* Removed the --enable-multibyte configure option.  Multibyte
  support is now compiled in unconditionally.

* New FvwmButtons option ActionOnPress enables execution of action
  on press rather than on release for any specific button.

* Improved CascadePlacement, the last used position is reused if
  the last placed window does not exist any more.

* FvwmIconMan may now change the resolution dynamically, just
  issue "*FvwmIconMan: resolution page" while FvwmIconMan is
  running.

* New command XineramaSlsScreens.

* MoveToPage and MoveToDesk no longer unstick windows.

* It is possible to specify a string encoding in a font name, see
  the "FONT AND STRING ENCODINGS" section of fvwm manual page.

<hr>
<b>Changes in alpha release 2.5.1 (26-Apr-2002)</b>

* Changed the executable and the man page names from fvwm2 to
  fvwm. The old names are still supported by symlinking.

* All fvwm utilities are renamed to conform to the "fvwm-"
  scheme. fvwm-bug, fvwm-root (was xpmroot), fvwm-config,
  fvwm-convert-2.4.

* Added a full support for the side window titles. New Style
  options TitleAtLeft and TitleAtRight added to TitleAtTop and
  TitleAtBottom.

* A title text may now be optionally rotated for both vertical and
  horizontal title directions, search for "Rotated" in the man
  page.

* Added support for loading images in PNG (including alpha
  blending) and XBM formats anywhere.

* New commands Schedule and Deschedule.

* New command State.  New conditions State and !State.

* New commands XSync and XSynchronize for debugging purposes.

* In interactive move/placement when Alt/Meta modifier is pressed,
  snap attraction (SnapAttraction, SnapGrid and EdgeResistance) is
  ignored.

* New flags (No)FvwmModule to FvwmButtons Swallow option

* The I18N_MB patch (--enable-multibyte) has been
  rewritten. MULTIBYTE is used to identify what is was I18N_MB. A
  set of locale functions (locale initialization, font loading,
  text drawing, ...etc.) is created in libs/Flocale.{c,h} and used
  in the entire fvwm code (but FvwmWharf).  Font loading and
  memory management is improved in the multibyte case.

* Better support of non ISO-8859-1 window and icon titles. See the
  --disable-compound-text option in INSTALL.fvwm for more
  details.

* Added anti-aliased text rendering support using Xft (use
  --enable-xft to enable it). Recent versions of XFree and
  freetype2 are needed (see the FONT NAMES AND FONT LOADING
  section of the fvwm manual page).

* Conditional commands now have a return code (Match, NoMatch or
  Error).  This return code can be checked and tied to an action
  with the new commands Cond and CondCase.

* Bindings can be made to the separate parts of the window border
  with the new contexts '[', ']', '-', '_', '&lt;', '^', '&gt;' and
  'v'.

* New parameters for FvwmRearange: -maximize and -animate.

* New option StartCommand for FvwmTaskBar to allow placing the
  StartMenu correctly.

    *FvwmTaskBar: StartCommand Popup RootMenu \
	rectangle $widthx$height+$left+$top 0 -100m

  Please refer to the FvwmTaskBar man page for details.

* New extended variables pointer.x, pointer.y, pointer.wx,
  pointer.wy, pointer.cx and pointer.cy.

* The Current command does not select a random window when no
  window has the focus.

* New color '@4' (transparent) in button vectors.

* New option "Frame" for the Resize and ResizeMove commands.

* Added direction options to WindowShade command.  Windows can be
  shaded in any of the eight compass directions.

* Styles WindowShadeLazy (default), WindowShadeBusy and
  WindowShadeAlwaysLazy to optimize performance of the WindowShade
  command.

* The DO_START_ICONIC flag is no longer supported in the module
  interface.

* Added bi-directional text support for Asian charsets.

* New option MinimalLayer for FvwmIdent to control window layer.

* New FvwmIconMan configuration syntax now conforms to the syntax
  of other modules, see the man page.

* FvwmForm can automatically run commands after a timeout
  interval.

* Fvwm commands can be invoked when the edge of the screen is hit
  with the mouse.

* New commands Colorset, ReadWriteColors and CleanupColorsets
  allow the colorset functionality previously available using
  FvwmTheme.

* FvwmTheme is obsolete now, but still supported for some time.

* New options Tint, TintMask and NoTint to colorsets.

* New WindowList option CurrentAtEnd.

* New weighted sorting in FvwmIconMan.

<hr>
<b>Changes in alpha release 2.5.0 (27-Jan-2002)</b>

* New commands ResizeMaximize and ResizeMoveMaximize that modify
  the maximized geometry of windows and maximize them as
  necessary.  Very useful to make a window larger manually and
  then get back the old geometry with a click.

* New command ResizeMoveMaximize similarly.

* New styles FixedPPosition, FixedUSPosition, FixedSize,
  FixedUSSize, FixedPSize, VariablePPosition, VariableUSPosition,
  VariableSize, VariableUSSize, and VariablePSize.

* Actions can be bound to windows swallowed in FvwmButtons.  To
  disable this feature for a specific button, the new option
  ActionIgnoresClientWindow can be used.

* Fvwm respect the extended window manager hints
  specification. This allows fvwm to work with KDE version &gt;= 2
  and GNOME version 2. This support is configurable using a bunch
  of new commands and style options, search for "EWMH" in the man
  page.

* New DateFormat option in FvwmTaskBar to change the date format
  in the clock's popup tip.

* Window titlebars may now be designed using a new powerful
  TitleStyle option MultiPixmap, that enables to specify separate
  pixmaps for different parts of the titlebar: Main, LeftEnd,
  LeftOfText, UnderText, RightOfText, RightEnd and more.

* New styles MinOverlapPlacementPenalties and
  MinOverlapPercentPlacementPenalties.

* New styles IndexedWindowName / ExactWindowName and
  IndexedIconName / ExactIconName.

* New command "DesktopName desk name" to define the name of a
  desktop for the FvwmPager, the WindowList and EWMH compliant
  pagers. New expanding variables $[desk.name&lt;n&gt;] for the desktop
  names.

* New window list options NoDeskNum, NoCurrentDeskTitle,
  TitleForAllDesks, NoNumInDeskTitle.

* New emacs style bindings in menus.

* New Maximize global flag "layer" which causes the various grow
  methods to ignore the windows with a layer less than or equal to
  the layer on the window which is maximized.

* Better support of the Transparent colorset in the modules and in
  animated menus.

* Amelioration of the WindowShade animation.

* New ButtonStyle and TitleStyle option MwmDecorLayer.

* New style BackingStoreWindowDefault which is the default
  now. Fvwm no longer disables backing store on windows by
  default.

* New styles MouseFocusClickIgnoreMotion and
  MouseFocusClickIgnoreMotionOff.

* The module interface now supports up to 62 message types.

* New module messages MX_ENTER_WINDOW and MX_LEAVE_WINDOW.

* New events "enter_window" and "leave_window" in FvwmEvent.

* New MenuStyle PopupActiveArea.

* New command line option -passid to FvwmAuto.

* New conditional commands Any and PointerWindow.

* New conditions Focused, !Focused, HasPointer and !HasPointer.

<hr>
<A NAME="2.4.15">
<b>Changes in stable release 2.4.15 (24-Jan-2003)</b>
</A>

* Fix for gmplayer launched by fvwm.  Close stdin on Exec so the
  exec'd process knows its not running interactively.

* Windows using the WindowListSkip style do not appear in the
  FvwmTaskBar at random.

* Fixed a memory leak in ChangeIcon, ChangeForeColor and
  ChangeBackColor FvwmScript Instruction.

* Fixed a core dump in the parsing of FvwmAuto arguments.

* Fixed screwed calculation of icon picture size when application
  specifies it explicitly.

* The option ShowOnlyIcons now works as described in the
  FvwmIconMan man page.  It was accidentally named ShowOnlyIconic
  before.

<hr>
<b>Changes in stable release 2.4.14 (29-Nov-2002)</b>

* Modules do not crash anymore when more than 126 windows are on
  the desktop.

* FvwmIconMan displays windows correctly that were iconified and
  then moved to another page.

* Application provided icon windows no longer appear at 0 0 when
  restarting.

* The built-in session management can handle window names, classes
  etc. beginning with whitespace (textedit).

* Removed the flawed "A"ny context key binding patch from 2.4.13.

* The default EdgeScroll (if not specified) was incorrectly
  assumed to be 100 pixels instead of 100 percents.

* Icons no longer appear on top of all other windows after a
  restart.

<hr>
<b>Changes in stable release 2.4.13 (1-Nov-2002)</b>

* Icon titles for windows with an icon position hint no longer
  appear at random places.

* Fvwm no longer displays two icon pictures when switching from
  NoIconOverride to IconOverride with windows that provide their
  own icon window.

* The Current, All, Pick, ThisWindow and PointerWindow commands
  work on shaded windows too.

* Fixed a problem stacking iconified transients.

* No more flickering when raising transients.

* Fixed a number of problems with window stacking, some new in
  2.4.10 or later, some older problems that have been around for a
  long time.

* Windows starting lowered or on any layer other than the default
  layer are displayed at the right place in FvwmPager.

* Bindings with the "A"ny context can not be overridden by Gnome
  panel or OpenOffice.

<hr>
<b>Changes in stable release 2.4.12 (10-Oct-2002)</b>

* Fixed drawing problems with TiledPixmap and Solid MenuFaces which
  appeared in 2.4.10, replacing the same problem with ?Gradient
  MenuFaces in 2.4.9.

* Fixed accidental menu animation with certain menu position hints.

* Increased maximum allowed key symbol name length to 200
  characters.

* Allow quotes in conditional command conditions.

* Fixed starting Move at random position when pointer is on a
  different screen.

* Transient windows do not appear in FvwmWinList after they have
  been moved on the desktop.

<hr>
<b>Changes in stable release 2.4.11 (20-Sep-2002)</b>

* Allow the use of mouse buttons other than the first in
  FvwmWinList when invoked transient.

* Fixed a crash with ssh-askpass introduced in 2.4.10.

<hr>
<b>Changes in stable release 2.4.10 (15-Sep-2002)</b>

* The commands Maximize, Resize and ResizeMove can be used on icons
  as it was in 2.2.x.

* Fixed hilighting of menu items with HGradient and VGradient
  MenuFace.  Reduced flickering with these options.

* Fixed a minor problem with entering submenus via keyboard.

* Fixed race conditions in FvwmTaskBar with AutoStick that caused
  it to hang.

* Fixed drawing of pager balloons with BalloonBack option.

* Fixed drawing of SidePic menu background with B/D gradients.

* Fixed drawing of menu item reliefs with gradient menu faces.

* Fixed key bindings on window corners.

* Fixed FvwmTaskBar i18n font loading

* Fixed StackTransientParent style without RaiseTransient or
  LowerTransient on the parent window.

* StackTransientParent works only on parent window if it is on the
  same layer.

* Fixed handling of window group hint with the (De)Iconify
  command.

* No more flickering when a transient overlapping its parent window
  is lowered.

* Fixed hilighting of unfocused windows.

<hr>
<b>Changes in stable release 2.4.9 (11-Aug-2002)</b>

* Fixed interaction bug between CascadePlacement and StartsOnPage -
  if the target page was at a negative x or y page displacement
  from the current viewport, the window would be placed on the
  wrong page.

* Fixed a problem with colormap transition when a transient window
  died.

* Fixed a FvwmScript crash with Swallow widget and very long window
  names.

* Restored old way of handling clicks in windows with ClickToFocus
  and ClickToFocusPassesClickOff.  This fixes a problem with
  click+drag in an unfocused rxvt or aterm window.

* Fixed problems with $fg and $bg variables in FvwmButtons when the
  UseOld option was used.

* Fixed wrong warp coordinates when WarpToWindow was used with two
  arguments on an unmanaged window.

* Added a workaround for popup menus in TK applications that appear
  on some random position.

* Fixed problems with wish scripts creating windows that start
  iconic.

* Fixed the NoClose option with unmapped panels in FvwmButtons.

* A number of drawing fixes in FvwmPager.

* Fixed a slight bug when waiting until all buttons are released,
  for example after executing a complex function.

* Fixed potentially harmful change in module interface.

* Fixed displaying menu items with icons when using the MenuStyle
  SubmmenusLeft.

* Fixed problems with the pointer moving off screen in a multi
  head setup.

* Fixed a potential crash with windows being destroyed during a
  recapture operation.

* Fixed a memory leak in some modules when not using glibc.

* Applications using Mwm hints can now enforce that a window can
  not be moved.

* Fixed negative arguments of WarpToWindow when used on an
  unmanaged window.

* DESTDIR may be fully used again (only useful for distributors).

* Fixed a key binding problem with key symbols that are generated
  by several keys.

* Fixed a possible crash when a window was recaptured and the
  focus could not be transfered to another window.

* Fixed a minor problem with clicks on focused windows being
  ignored.

* fvwm-menu-headlines: added support for CNN and BBC headlines.

* Fixed a performance problem with large numbers of mouse binding
  commands.

<hr>
<b>Changes in stable release 2.4.8 (11-Jun-2002)</b>

* A fix for switching between czech and us keyboard layout.

* Remember the icon position when an icon is moved
  non-interactively.

* Setup "fvwm" and "fvwm-root" name symlinks for the executable and
  the man page when installing, see INSTALL.fvwm.

* Fixed another problem with the DeskOnly option and sticky icons
  in FvwmTaskBar.

* New FvwmIconMan configuration syntax now conforms to the syntax of
  other modules, see the man page.

* New WindowList option CurrentAtEnd.

* Fixed maximal length of a named module packet

* Fixed a crash on a config with a new 2.5.x Colorset command.

* Always display the current desk number in the FvwmPager window
  title.

* Allow to bind a function to the focus click and pass it to the
  application at the same time.

* Fixed a problem with fvwm not accepting keyboard input when the
  application with the focus vanished at the start of a session.

* A small security patch regarding TMPDIR.

* Fixed a problem with colormap transition when a transient window
  died.

* Fixed calculation of average bg colour in colour sets with large
  pictures.

* Fixed some minor problems regarding the multibyte patch.

* Fixed selection in FvwmScript List widget.

* fvwm-menu-headlines: updated the site data, added a configurable
  timeout on socket reading (20 sec) to avoid fvwm hanging, new
  --icon-error option.

* Fixed a problem with ClickToFocus + ClickToFocusRaisesOff and
  windows that are below others.

* Fixed the ClickToFocusPassesClick style.

* Fixed CascadePlacement for huge windows, so that the top-left
  corner is always visible.

* Fixed parsing of SendToModule with the first parameter quoted.

* Fonts in double quotes now should work in module configurations.

* Fixed copying PopupOffset values in CopyMenuStyle.

<hr>
<b>Changes in stable release 2.4.7 (11-Apr-2002)</b>

* Fixed parsing of WindowList with conditions and a position at
  the same time that was broken in 2.4.6.

* Fixed some problems with the DeskOnly option of FvwmTaskBar
  (windows were duplicated when moving to a different Desk; the
  StickyIcon style was ignored).

* Fixed config.h warnings with some compilers introduced in 2.4.6.

* Fixed icon titles being raised when they should not be.

* Fixed initial drawing of the internals of the FvwmPager window.

* Fixed the FvwmAudio compatible mode in FvwmEvent when external
  audio player is used.

* Fixed execution on QNX.

<hr>
<b>Changes in stable release 2.4.6 (10-Mar-2002)</b>

* Better support of non ISO-8859-1 window and icon titles. See the
  --disable-compound-text option in INSTALL.fvwm for more details.

* Improved speed of opaque window movement/resizing.

* Fixed a bug that caused windows not being raised and lowered
  properly.

* Suppress error message when using XBM icons.

* Fixed a read descriptor problem in FvwmTaskBar

* Fixed a minor colour update bug in the pager.

* Fixed an fvwm crash when a module died at the wrong moment;
  specifically a transient FvwmPager or FvwmIconMan.

* Fixed placement of WindowList on wrong Xinerama screen when
  called without any options on a screen other than the primary
  screen.

* Fixed a problem with root bindings and xfishtank.

* Fixed moving windows with the keyboard over the edge of the
  screen when the pointer remained of the previous page.

* Do not hilight windows after ResizeMove.

* New conditional command ThisWindow.

* Some fixes in the configure script that caused some rare
  problems detecting gnome and ncurses.

* Fixed a memory leak in the Pick command.

* Allow to choose windows with CirculateSkip with the Pick command.

* Fixed an FvwmScript compile problem on dec-osf5.

* The window handles are now resizes as they should when the
  HandleWidth style changes.

* The Current command does not select a random window when no
  window has the focus.

* Fixed a rare menu placement problem with Xinerama.

<hr>
<b>Changes in stable release 2.4.5 (27-Jan-2002)</b>

* Fixed minor problems in popping sub menus up and down.

* Fixed moving windows between pages with the keyboard.

* Fixed the size of the geometry window that was broken sometimes.

* Fixed problem with pointer warping to another screen on a dual
  head setup.

* Fixed a problem with the focus in internal Ddd and Netscape
  windows.

* Reduced the time in which fvwm attempts to grab the pointer.

* Fixed unmanaged window when window was mapped/unmapped/mapped too
  fast.

* Fixed MiniScroll's auto repeating in FvwmScript.

* Fixed a crash with the UseStyle style in combination with
  HilightBack.

* Fixed excessive redraws of the windows under a window being shaded.

* Fixed a minor memory leak in the Style command.

* Fixed pixmap background of FvwmButtons behind buttons with only
  text.

* Fixed a crash in FvwmIconBox when the application provided an
  illegal icon.

* Fixed a configure problem with libstroke-0.5.1.

* New style BackingStoreWindowDefault which is the default
  now. Fvwm no longer disables backing store on windows by
  default.

* Fixed bug that sometimes caused unnecessary redraws when a style
  was changed.

* Fixed crash when something like "$[$v]" appeared in a command.

* Fixed parsing of conditions with more than one comma.

<hr>
<b>Changes in stable release 2.4.4 (16-Dec-2001)</b>

* Minor title drawing fixes.

* Fixed manual placement with Xinerama.

* Minor button 3 handling fix in FvwmPager.

* Fixed *FvwmIconMan*shaped option with empty managers.

* Fixed ClickToFocusClickRaises style.

* FvwmForm: Customize pointers, support ISO_Tab key, buttons can activate
  on press or release, special pointer during grab, arrow keys useful in form
  with one input field.

* New OpaqueMoveSize argument "unlimited".

* Fixed binding keys with and without "Shift" modifier under some
  circumstances.

* Fixed binding actions to the client window with ClickToFocus.

* Mouse bindings are activated without a recapture.

* FvwmScript: new keyboard bindings. New flags NoFocus and Left, Center,
  and Right for text position. Amelioration of the Menu and PopupMenu
  Widgets. New functions GetPid, Parse, SendMsgAndGet and LastString.
  New instruction Key for key bindings. New command SendToModule ScriptName
  SendString.

* Command "Silent" when precedes "Key", "Mouse" and "PointerKey"
  disables warning messages.

* Restored the default Alt-Tab behaviour from 2.4.0.

<hr>
<b>Changes in stable release 2.4.3 (08-Oct-2001)</b>

* Fixed activation of shape extension.

* Fixed problems with overriding key bindings.

* Single letter key names are allowed in upper and lower case in
  key bindings as before 2.4.0.

* Fixed WindowList placement with Xinerama.

* Fixed flickering icon titles.

* New X resource fvwmscreen to select the Xinerama screen on which to
  place new windows.

* Coordinates of a window during motion are show relative to the
  Xinerama screen.

* Some icon placement improvements with Xinerama.

<hr>
<b>Changes in stable release 2.4.2 (16-Sep-2001)</b>

* Desk and page can be given as X resources in .Xdefaults, for example:
    xterm.desk: 1
    xterm.page: 1 2 3

* Several Shape compilation problems fixed.

<hr>
<b>Changes in stable release 2.4.1 (15-Sep-2001)</b>

* Added Xinerama and SingleLogicalScreen support.

* New commands Xinerama, XineramaPrimaryScreen, XineramaSls,
  XineramaSlsSize and MoveToScreen.

* New context rectangle option XineramaRoot for the menu commands.

* New conditions CurrentGlobalPage, CurrentGlobalPageAnyDesk and
  AcceptsFocus for conditional commands.

* The DestroyStyle command takes effect immediately.

* New style option StartsOnScreen.

* New style options NoUSPosition, UseUSPosition,
  NoTransientPPosition, UseTransientPPosition,
  NoTransientUSPosition, and UseTransientUSPosition.  These work
  similar to the old styles NoPPosition and UsePPosition.

* New option "screen" for Maximize command.

* New option ReverseOrder for WindowList command.

* The default Alt-Tab binding works more intuitive.

* New condition "PlacedByFvwm"

* New Geometry option for FvwmForm.

* New Screen resolution and ShowOnlyIcons options for FvwmIconMan.

* FvwmIconMan can be closed with Delete or Close too.

* New options PageOnly and ScreenOnly for FvwmTaskBar.

* FvwmIconBox, FvwmTaskBar and FvwmWinList support aliases.

* Enhancements in fvwm-menu-headlines and support for 10 more sites.

* Color enhancements in button vectors: @2 is bg color, @3 is fg color.

* Improved detection of the Shape library.

* Fixed FvwmButtons button titles not being erased for swallowed
  windows that showed up on certain setups.

* Fixed bug that caused transient windows to be buried below their
  parents with the "BugOpts RaiseOverUnmanaged on".  This occured
  with the system.fvwm2rc-sample-95 configuration.

* The modules FvwmPager, FvwmIconMan, FvwmWinList and FvwmButtos
  set the transient_for hint when started with the "transient" option.

* Fixed FvwmIconMan with the transient option when mapped off screen.

* Fixed ClickToFocus focus policy when iconifying the focused window.

* Fixed some focus problems in conjunction with unclutter vs xv/xmms
  and Open Look applications.

* Fixed a problem that could cause windows to be lost off screen
  with interactive window motion.

* Fixed some FvwmTaskBar autohide problem.

* Fixed a display string problem in FvwmForm.

* Fixed a problem with FvwmTheme shadow colours.

* Fixed the CirculateSkipIcon and CirculateSkipShaded options in
  conditional commands.

* Fixed a formatting problem of the man page on AIX, Solaris, and
  some other UNIX variants.

* Fixed a problems with FvwmIconBox exiting on 64 bit platforms.

* Fixed FvwmIconBox crashes with MaxIconSize dimensions 0.

* Fixed parameters of fvwm24_convert.

* Fixed a number of building problems related to old vendor unices,
  libstroke-0.5, autoconf-2.50, bogus gnome-config and imlib-config.

* Fixed drawing of title bar buttons with MWMDecorStick.

* Fixed missing button or key events over the pan frames.

* Fixed placement of the FvwmDragWell, FvwmButtons and FvwmForm modules.

* Fixed parsing double quotes in FvwmPager's Font and SmallFont options.
  Fixed FvwmPager crash with certain font strings.

* Fixed drawing of the grid lines in an iconified FvwmPager window.

* Fixed button grabbing problem for buttons &gt; 3 in FvwmTaskBar.

* Fixed some exotic problems with window gravity and resizing windows.

* Fixed a problem with maximizing windows with the vieport not starting
  on a page boundary.

* Fixed handling of parentheses in FvwmButtons button actions.

* Work around a key binding problem with keys that generate the same
  symbol with more than one key code (e.g. Shift-F1 = F11).

* The Desk option of FvwmBacker is compatible to earlier version.
  Desk or Page coordinates can be omitted to indicate that desk
  or page changes trigger no action at all.

* Fixed double updating of background with FvwmBacker sometimes leading
  to the wrong background.

* Fixed several escaping errors in fvwm-menu-directory, so files and
  directories containing special chars and spaces should work.

* Fixed PlacedByButton3 condition.

* Fixed vanishing windows when mapping/unmapping too fast.

* Fixed prev option of the GotoDeskAndPage command.

* Fixed calculations of X_RESOLUTION and Y_RESOLUTION for screen
  dimmensions larger than 2147.

* Fixed compatibility of the FvwmM4 modules on platforms that have
  a System V implementation of m4 (Solaris 2.6).

* The SetEnv command without a value for a variable is the same as
  UnsetEnv.

* Fixed shading/unshading shaped windows and windows without title
  and border.

<hr>
<b>Changes in stable release 2.4.0 (03-Jul-2001)</b>

* Finally released. :)

<hr>
<b>Changes in beta release 2.3.33 (22-Jun-2001)</b>

* Module configuration commands are now partially expanded similarly to
  any other commands, except that single alphabetic-letter parameters are
  not expanded for backward compatibility.

<hr>
<b>Changes in beta release 2.3.32 (4-May-2001)</b>

* Fixed several focus problems and several core dumps.

* Again allow full words "Click", "Hold" as function specifiers
  for backward compatibility.  Please don't use them.

* New configure --enable-command-log option.

* Fixed gdk-imlib configure detection for FvwmGtk.

<hr>
<b>Changes in beta release 2.3.31 (7-Apr-2001)</b>

* New option "recreate" to DestroyDecor command.

<hr>
<b>Changes in beta release 2.3.30 (29-Mar-2001)</b>

* The configure option --disable-modality was removed.

* New FvwmCommand -c option to read multiple commands from standard input.

<hr>
<b>Changes in beta release 2.3.29 (2-Mar-2001)</b>

* New temporary option -debug_stack_ring.

* New styles IconifyWindowGroupsTogether and IconifyWindowGroupsOff.

* New styles KeepWindowGroupsOnDesk and ScatterWindowGroups to cope with
  applications using the window group hint incorrectly (mozilla).

* New BugOpts option FlickeringQtDialogsWorkaround.

* New configure option --disable-package-subdirs, see INSTALL.fvwm for info.

* New option "None" to the IconBox style.

<hr>
<b>Changes in beta release 2.3.28 (25-Jan-2001)</b>

* Renamed configure option --enable-kanji to --enable-multibyte.

* Security fix related to .fvwm2rc being searched in the current directory
  when $HOME is not set.

* New menu styles PopdownImmediately, PopdownDelayed and PopdownDelay.

* New command CopyMenuStyle.

* Replaced Dumb/SmartPlacement, Active/RandomPlacement, SmartPlacement/Off
  style by ManualPlacement / CascadePlacement / MinOverlapPlacement /
  MinOverlapPercentPlacement / TileManualPlacement /TileCascadePlacement
  (old style still supported).

* Replaced ActivePlacementHonorsStartsOnPage with
  ManualPlacementHonorsStartsOnPage and
  ActivePlacementHonorsStartsOnPageOff with
  ManualPlacementHonorsStartsOnPageOff.

* We have two "clever" placement algorithms: MinOverlapPlacement (the old one)
  and MinOverlapPercentPlacement.

<hr>
<b>Changes in beta release 2.3.27 (3-Jan-2001)</b>

<hr>
<b>Changes in beta release 2.3.26 (26-Dec-2000)</b>

<hr>
<b>Changes in beta release 2.3.25 (5-Dec-2000)</b>

* Removed the now obsolete 'Recapture' option of the BusyCursor command.

<hr>
<b>Changes in beta release 2.3.24 (28-Nov-2000)</b>

* WindowId and WarpToFunction have been enhanced to handle windows on
  different screens and unmanaged windows.

* New command FakeClick.

<hr>
<b>Changes in beta release 2.3.23 (25-Nov-2000)</b>

* New styles UseIconPosition (default) and NoIconPosition.

* Better focus handling on multi head displays.

<hr>
<b>Changes in beta release 2.3.22 (10-Nov-2000)</b>

* Configuration samples of FvwmForm and FvwmScript installed with fvwm are
  converted to the scheme: "FvwmForm-RootCursor", "FvwmScript-FileBrowser".

* New expanding variables: $., $[page.nx], $[page.ny].

* New command UnsetEnv unsets environment variables, compliments SetEnv.

* Pressing mouse button 2 in an FvwmIdent window restarts FvwmIdent
  and asks for a new window.

* New window styles GNOMEIgnoreHints and GNOMEUseHints to disable
  GNOME hints for specific windows even if GNOME compliance is
  compiled in.

* DestroyModuleConfig supports a non-conflicting syntax.

* Speed up command execution and startup.

* Improved handling of windows that set the "input focus" hint to "false".

<hr>
<b>Changes in beta release 2.3.21 (September 2000)</b>

* Module configuration syntax now accepts a delimiter - colon and optional
  spaces; the old syntax is supported as usual (but it allows conflicts):
    *FvwmIconBoxMaxIconSize 48x48
    *FvwmIconBox: MaxIconSize 48x48

* SendToModule can accept aliases too.

* New option StrokeWidth for StrokeFunc.

* GNOME support is now "on" by default.

<hr>
<b>Changes in beta release 2.3.20 (July 2000)</b>

* KillModule supports an optional alias parameter as given in Module.
    Module FvwmModule Alias
    KillModule FvwmModule Alias

<hr>
<b>Changes in beta release 2.3.19 (June 2000)</b>

* New command UpdateStyles forces an immediate style update, even
  within a complex function.

* Implemented '$*' in complex functions.  This works like in a
  shell and is replaced by all arguments of a function.

* Implemented several new parameters:
    $[desk.width], $[desk.height], $[vp.x], $[vp.y], $[vp.width], $[vp.height],
    $[w.x], $[w.y], $[w.width], $[w.height], $[screen], $[&lt;env-var&gt;]

<hr>
<b>Changes in beta release 2.3.18 (May 2000)</b>

* Renamed the MovedButton3 contition to PlacedByButton3.

* Removed FlipTransient and DontFlipTransient styles (they never
  worked anyway).

* Conditions can be separated by commas.

* Removed MoveSmoothness command.

<hr>
<b>Changes in beta release 2.3.17 (May 2000)</b>

* The commands Refresh and RefreshWindow apply all outstanding visual
  changes of a window.

* New options GrowUp, GrowDown, GrowLeft, GrowRight to the Maximize
  command.

* New command ResizeMove combines Move and Resize commands.

* New options "keep" to Move command to leave either coordinate unchanged.

* New options "bottomright" and "br" to Resize command.

* Resize command can take negative arguments.  A "keep" argument leaves
  the corresponding dimension untouched.

* New condition "MovedButton3" that is true if the last interactive
  Move command was finished by pressing mouse button 3.

* Mouse button 3 can no longer be used to cancel interactive window
  movement.

* $FVWM_USERHOME used to set the fvwm user directory renamed to $FVWM_USERDIR.

* The default fvwm user directory is now $HOME/.fvwm, not $HOME,
  the fvwm user directory is now created if needed.

* It is suggested to put all personal fvwm files to $HOME/.fvwm; to simulate
  the old fvwm behaviour, export FVWM_USERDIR=$HOME.

* Instalating fvwm goodies is now to share/fvwm (FVWM_DATADIR), not etc/fvwm.

* fvwm-config utility can be used for querying fvwm instalation.

<hr>
<b>Changes in beta release 2.3.16 (April 2000)</b>

* Wait command supports quoted window names.

* Fixed the annoying rxvt text selection problem that was present
  since 2.3.10.

* New style option BorderColorset and HilightBorderColorset.

<hr>
<b>Changes in beta release 2.3.15 (February 2000)</b>

* Reduced memory usage of multiple window styles.

* Documented previously undocumented GotoDeskAndPage command.

* New parameter 'prev' for GotoDesk, GotoDeskAndPage and MoveToDesk
  commands.

<hr>
<b>Changes in beta release 2.3.14 (February 2000)</b>

* New style option ParentalRelativity to enable Fvwm modules to use
  'Transparent' colorsets from FvwmTheme.  'Opacity' turns it off.

* The GlobalOpts command was removed in favour of individual
  window styles.  Please look for GlobalOpts in the man page to
  find out how to get the old functionality.

* The WindowshadeAnimate command was replaced with the
  WindowshadeSteps window style.

* New MenuStyle option SelectOnRelease to better emulate Alt-Tab.
  Same option for WindowList command.

<hr>
<b>Changes in beta release 2.3.13 (January 2000)</b>

* New FvwmTheme option 'Transparent'.

* New style option 'IconFont'.

* New style option 'Font' replaces the old WindowFont command.

<hr>
<b>Changes in beta release 2.3.12 (December 1999)</b>

* New command PointerKey.  Similar to 'Key' command but binds
  keystrokes to the window under the pointer instead of the window
  that has the keyboard focus.

* New WindowList options NoOnBottom, OnBottom and OnlyOnBottom.

* New FvwmTheme colorset options 'Plain' and 'NoShape'.

* New window styles HilightFore, HilightBack and HilightColorset
  replace the old commands HilightColor and HilightColorset.

* The ButtonStyle, TitleStyle and BorderStyle commands take effect
  immediately, without a Recapture.

* The WindowList menu uses the WindowList menu style if it is
  defined.

* The CursorStyle command accepts two new cursors: 'None' for no
  cursor and 'Tiny' for a single pixel cursor.

* A new configurable script fvwm-menu-headlines to show headlines
  of some popular web sites in your fvwm menus. Supported sites:
  FreshMeat, LinuxToday, Slashdot, Segfault and more to come.

<hr>
<b>Changes in beta release 2.3.11 (December 1999)</b>

* Sticky icon titles are drawn similar to sticky window titles.

* New option NoHotkeys to WindowList command.

* The CursorStyle command has been improved.  It is now possible
  to restore the default cursors.  Xpm images without a hot spot
  can be used as cursors.

* New styles BackingStore/BackingStoreOff and SaveUnder/SaveUnderOff.

* Any changes in your configuration file are applied during a restart now.
  (This obsoletes the contrary entry for 2.3.6.)

* New FvwmIconMan options: IconButton and IconColorset to control colors for
  iconified windows.

<hr>
<b>Changes in beta release 2.3.10 (December 1999)</b>

* Fixed build problem without shape extension.

* New FvwmIconBox option: FvwmIconBoxUseSkipList.

* New 'flat' and 'sunk' options to BorderStyle command.

* New commands DefaultColorset and HilightColorset.

* FvwmBacker is now page-aware, using a new configuration syntax.

* New styles TitleAtBottom and TitleAtTop.

* FvwmIconBox, FvwmIconMan, FvwmTaskBar and FvwmWinList support animatation via
  FvwmAnimate.

* New command StrokeFunc to handle mouse stroke.

* The default root cursor, unless specified otherwise, is now left pointer.

* New command BusyCursor to control a busy cursor during execution of
  certain commands.

* CursorStyle can set the root cursor and use X11 cursor name.

* New command EscapeFunc to configure an aborting key sequence
  (default is Ctrl-Alt-Escape).

* New command HideGeometryWindow to hide the size/position when moving or
  resizing windows.

* New options for the WindowList command: UseListSkip and OnlySkipList.

* New FvwmPager options SolidSeparators and NoSeparators.

<hr>
<b>Changes in beta release 2.3.9 (October 1999)</b>

* Color names from colorsets can be used in fvwm command ($[fg.cs&lt;n&gt;],
  $[bg.cs&lt;n&gt;], $[hilite.cs&lt;n&gt;] and $[shadow.cs&lt;n&gt;]).

* FvwmScript supports colorsets.

* FvwmTaskBar supports colorsets with the options Colorset, IconColorset and
  TipsColorset.

* New function variable $v.

* Menus can use colorsets with the new MenuStyle options MenuColorset,
  ActiveColorset and GreyedColorset.

<hr>
<b>Changes in beta release 2.3.8 (September 1999)</b>

* New Style options ResizeOpaque and ResizeOutline.

* A long-awaited new default FvwmBanner logo.

* RaiseTransient no longer flips main above/below already raised transients.
  New style FlipTransient turns flipping back on, and additionally does a
  similar job for LowerTransient at the bottom of the layer.
  New style StackTransientParent augments Raise/LowerTransient.

* Icons have been removed from the fvwm package and are available at
  the fvwm web site.  (Temporarily only at "xxx.fvwm.org" instead of
  "www.fvwm.org".)

* New command BugOpts enables various former bug fixing compile
  time options to be changed at run time.

* FvwmWharf and FvwmBacker support colorsets.

* A new special fvwm function StartFunction is introduced. It is supposed to
  be used to start modules and for other start commands. This function is
  executed before InitFunction and RestartFunction.  Any commands currently
  in both the InitFunction and RestartFuction can be moved to the new
  StartFunction.

<hr>
<b>Changes in beta release 2.3.7 (August 1999)</b>

* FvwmButtons and FvwmIconBox support colorsets.

* The old Panels feature of FvwmButtons has been removed. A
  re-implementation has been written.

* The *FvwmButtonsButtonGeometry option makes sizing the
  individual buttons very easy.

* FvwmAnimate accepts "animate" commands from other modules or
  other sources of commands thru "sendtomodule".

* More menu Shortcut keys: Tab moves down, Shift Tab moves up,
  Space executes.  You can now reasonably operate the built-in
  windowlist with one hand.

* Six new color gradients can be used in TitleStyle, BorderStyle,
  ButtonStyle and MenuStyle commands (BGradient, DGradient,
  SGradient, CGradient, RGradient and YGradient).

* MoveSmoothness command allows to tune smoothness of window
  moves. Use lower values on fast machines, higher values on
  slow machines.

* Subwindows can have a private colormap too.

* FvwmButtons uses variables in actions and when swallowing
  applications ($left, $right, $top, $bottom, $width, $height,
  $fg, $bg). See man page for details.

* New menu generating scripts fvwm-menu-directory,
  fvwm-menu-desktop and fvwm-menu-xlock (was BuildXLockMenu).
  There are man pages and --help option for all fvwm-menu scripts.

* Geometry (-g) command line option to FvwmButtons.

* *FvwmPagerSloppyFocus option: To focus a window, simply move the
  pointer over the window's mini window in the pager.

<hr>
<b>Changes in beta release 2.3.6 (August 1999)</b>

* New function variables $c, $r, $n.

* The new commands QuitSession, SaveSession, SaveQuitSession allow
  to manage the session from the window manager.

* If you use xsm session manager, which has buggy discard command
  implementation, set environment $SESSION_MANAGER_NAME to "xsm".
  If you use another SM, unset this variable or set to something
  else.

* New module FvwmTheme for creating Colorsets that can be shared
  with fvwm and other modules when they have been modified.

* If you never define an iconbox, or you fill all the iconboxes,
  fvwm has a default icon box that covers the screen, it filled
  top to bottom, then left to right, and has an 80x80 pixel grid.

* The new styles LowerTransient and DontLowerTransient allow to control if the
  transients of a window are lowered when the window itself is lowered
  (default) or not.

* The Restart function has been partially rewritten. If you were using
  'Restart' without any parameters and wonder why changes in your configuration
  file are not used during a restart you should use
  'Restart --dont-preserve-state' instead.

* New menu styles VerticalItemSpacing and VerticalTitleSpacing allow control
  over the height of menu items and titles.

<hr>
<b>Changes in alpha release 2.3.5 (July 1999)</b>

* New special functions Session{Init|Restart|Exit}Function are called instead
  of {Init|Restart|Exit}Function when running under a session manager.

* New form for setting root cursor: FvwmForm FormFvwmRootCursor. .

* Fvwm web files are now in a separate CVS tree.

* All modules except FvwmScript and FvwmGTK share fvwm's visual.

* The behaviour of the Raised and Visible flags for Next, Circulate, ...
  commands has been changed. They now do what their names suggest, i.e.
  visible = partially visible and raised = fully visible.

* The new styles RaiseTransient and DontRaiseTransient allow to control if the
  transients of a window are raised when the window itself is raised (default)
  or not.

* A new action type 'H' for 'Hold' can be assigned to complex fvwm functions.
  It is triggered when the button is pressed and held longer than ClickTime
  milliseconds.

* The activedow-button and inactive-button configure options have been replaced
  with the ButtonState built in command.

* Most of the configure options have been removed.

* The cursors used for resizing and selecting windows and handling menus have
  changed.

<hr>
<b>Changes in alpha release 2.3.4 (June 1999)</b>

* Fvwm is GNOME compliant.

* Dynamic menus enhancement: The special menu item name 'MissingSubmenuFunc'
  alows to create submenus on the fly. See manpage on 'AddToMenu' for details.

* The Restart command accepts simple shell-like syntax now.

* Added support for mouse strokes recognition, uses LibStroke 0.3
  by Mark Willey(willey@etla.net).
  (http://www.etla.net/~willey/projects/libstroke/)

<hr>
<b>Changes in alpha release 2.3.3 (June 1999)</b>

* There can be two mini icons per menu label instead of one now.

* Menu enhancements: the layout of the menu items can be controlled in detail
  with the ItemFormat option for the MenuStyle command. The width of the
  borders around menus and hilighted items can be controlled with the
  options BorderWidth and Hilight3DThickness (MenuStyle). Menu behavior can
  be mirrored with the SumbenusLeft option (hard to describe, it's best to
  try it out). A menu item can get up to three different labels. The first
  two are left aligned, the third is right aligned by default.

* Colour gradients may use up to 1000 colours. The old limit was 128 colours.

* New command MaxWindowSize limits the initial dimensions of a window.

* Include fvwmbug script for reporting bugs.

* New button states ToggledActiveUp, ToggledActiveDown, ToggledInactive
  for customizing, as an example, the "maximized" appearance of the
  maximize button.

* New button style flag MWMDecorStick to support toggle buttons for the
  Stick function.

* New condition [!]shaded for Current and other commands taking conditions.

* New menu styles HoldSubmenus/DeleteSubmenus. HoldSubmenus is the new default
  for mwm and fvwm menus. When you move back from a submenu to its parent menu
  the submenu remains visible.

* Menus can be visible multiple times at once.

* Restarting fvwm no longer moves the viewport to (0,0).

* New style DepressableBorder/FirmBorder to influence the appearance
  of the window border under button presses.

<hr>
<b>Changes in alpha release 2.3.2 (May 1999)</b>

* The Alt-Tab binding to invoke the window list as described in the FAQ
  is  now built-in.  You can remove it as described in the fvwm man page.

* The MoveThreshold command lets the user fine tune the threshold when a click
  becomes a move. It works in FvwmPager too.

* New style IconOverride/NoIconOverride/NoActiveIconOverride to
  influence the overriding behaviour of the Icon style.

* The FvwmCommand module is now much faster and can thus comfortably be used in
  shell scripts. The tradeoff is that it does not report errors any more. To
  get the old behaviour run FvwmCommand with the '-i 1' option.

* Dynamic menus are provided by the special menu items 'DynamicPopupAction' and
  'DynamicPopdownAction'. See the man page on 'AddToMenu' for details.

* System-wide config files are now in ${sysconfdir}/fvwm
  (i.e. /usr/local/etc/fvwm by default) as many files are now installed there.

<hr>
<b>Changes in alpha release 2.3.1 (April 1999)</b>

* New button style flag MWMDecorShade to support toggle buttons for shaded
  windows.

* Daily snapshots of the development sources available on our web page.

* FixedPosition style: disables moving the window.

* IgnoreRestack style: forbids clients to change their own stacking
  order position.

* The NoWarp option to the Focus command for focusing window on a different
  page without switching to that page.

* Fvwm raises icon titles when the pointer is over the icon.

* The cursors used for the pan frames at the edge of the screen can be changed.

* StaysOnBottom style.

* ResizeHintOverride style: a window with this style can be resized beyond the
  program supplied minimum and maximum size. This is a hack to make fvwm
  cooperate with broken applications.

* NeverFocus style: windows with this style never receive the focus.

* New command: DefaultIcon to set the default icon.

* New command line arguments -visual and -visualId.

* GrabFocusTransient is a new style that does the same as GrabFocus, but only
  for transient windows.

<hr>
<b>Changes in alpha release 2.3.0 (February 1999)</b>

* FvwmPipe and FvwmConfig modules have been removed.

* New command: RecaptureWindow captures a single window.

* 'GotoDesk' command replaces former command 'Desk' (the old name is still
  supported.

* 'Restart fvwm2' preserves almost all per-window using the file
  $FVWM_USERHOME/.fvwm_restart.

* #define PICK_TRUECOLOR will make fvwm use the best TrueColor Visual.  This is
  for those poor unfortunates with legacy apps that crash if the default visual
  is not an 8 bit PseudoColor (but fortunate enough to have a 24 bit server
  that supports both 8 bit and 24 bit TrueColor)

* New command line argument -replace. fvwm will try to "take over"
  from a running wm only if it is given.

* ImagePath and ModulePath commands now expand '+' to be the
  previous value of the path.

* Key and mouse bindings take effect immediately. A 'Recapture' was necessary
  before this change.

* Unmaximizing keeps windows on the same page.

* Maximize can now expand until some other window is found to fully utilize
  available screen space.

* Use the 'GrabFocusOff' style to prevent ClickToFocus windows taking the focus
  from other ClickToFocus windows when they are mapped the first time. The
  opposite option is called 'GrabFocus' and can be used in conjunction with
  MouseFocus and SloppyFocus too.

* New command IgnoreModifiers for ignoring the pesky num-lock key with
  key and mouse bindings.  Hint: try this command with XFree86:

    IgnoreModifiers L25

  If you encounter performance problems please consult the manpage and the FAQ.

* Enhancements to MoveToPage and GotoPage: 'prev' option to refer to the last
  visited page, negative numbers refer to lower/right page, suffix 'p'
  indicates page number relative to current page.

* Mailcheck interval option for FvwmTaskBar.

* Colorlimit command does nothing if display depth is greater than 20.
  This helps if you want to use the same configuration on more than one
  display depth.  ColorLimit defaults to ON if display depth is 8 bits
  or less.  This should help new users.

* Maximize can now expand until some other window is found to fully utilize
  available screen space.

* FvwmWinList option *FvwmWinListFollowWindowList to display the order that
  fvwm keeps windows in. You can now see the order that Next/Prev will take,
  Prev goes down the list, Next goes up (from the bottom).

* WindowID command now takes conditions like Current.

* Improved cursor support: CursorStyle now supports changing
  cursor colors and creating cursors from xpm files.

* New style options: StartsLowered, StartsRaised.

* New function PlaceAgain: moves a window to where it would be placed.

* New module FvwmGtk. It implements menus, dialogs and window-lists
  using the GTK toolkit.

* NoInset is independent from HiddenHandles, it now works on NoHandles style
  windows.

* Made FvwmPager a bit simpler. Added -transient options to bind a transient
  pager to mouse buttons (see FvwmPager man page for an example).

* VMS port; see vms/README for details.

* New MenuStyle options: PopupAsRootmenu, PopupAsSubmenu

* The 'extras' directory has been merged into 'modules'; the
  --enable-extras configure flag is obsolete.

* New command: Silent. Suppresses user interaction when a window is needed but
  none is selected.

* New utility xselection which can be used with PipeRead to feed the
  content of the X Selection as commands to fvwm.

* Fvwm can now "take over" from a running (ICCCM 2 compliant) wm.

* FvwmPager can now handle pixmaps as desk backgrounds.

* Layer information is displayed in WindowList.

* Animated window shading.

* Shaded windows can be resized.

* Windows can be shaded and maximized.

* Fonts and colors are no longer hard-coded on the FvwmAnimate customization
  form.  FvwmForm can set defaults that the FvwmAnimate form will use.

* New commands All and Pick.

* New command XORPixmap for increased visibility of the rubber band lines and
  general spangly-ness.

* New start up sequence: all start up scripts etc. are read before the initial
  capture so windows styles will be correct, no need for a recapture.

* EdgeThickness can resize/hide/show panframes in mid function.

* Support for transparent Eterms etc. during opaque/animated moves.

* FvwmPager tracks windows during opaque/animated moves.

* Session management. Fvwm talks to a session manager
  and saves and restores its state.

* Layers. New commands Layer, DefaultLayers; new Style
  option, WindowList option and condition Layer.

* Lots of changes to FvwmForm:
  No limits of form size.
  Fonts and colors can change anywhere in the form.
  Form appearance can be configured globaly:
    Form defaults are read from .FvwmForm.
    There is a built in Default setting/saving dialogue.
  Forms can be read in directly from a file.
  Some forms are installed automatically.
  Tab to previous field.
  You can control vertical spacing on text so spacing is OK for help panels.
  A button can execute a synchronous shell command.
  You can paste into a form
  Forms can read configuration data.

* IconPath and PixmapPath are replaced by single ImagePath.  All
  images, no matter what their format are searched for along the
  ImagePath.

<hr>
<A NAME="2.2.5">
<b>Changes in official release 2.2.5 (February 2001)</b>
</A>

* When fvwm is run remotely, startup is noticably faster.

* Fixed the description of Focus in the man page.

* Fixed a compile problem with Slackware 7.1.

* Security fix related to .fvwm2rc being searched in the current directory
  when $HOME is not set.

* A small fix in the code for SmartPlacement.

* Core dump fix in pixmap code.

<hr>
<b>Changes in official release 2.2.4 (November 1999)</b>

* Fixed HP-UX 10.20 build problems.

* Fixed build problems without shape extension.

<hr>
<b>Changes in official release 2.2.3 (October 1999)</b>

* Several minor bugfixes.

* Fixed dragging windows out of the pager.

* Added support for StartFunction &amp; ImagePath not to break new configurations.

* Fixed long-window-name-hangs-X bug.

<hr>
<b>Changes in official release 2.2.2 (May 1999)</b>

* New "Emulate"  command  for independent  control of the  move/resize
  feedback window.

* EdgeThickness command can be issued at any time.

* Pan frames not created when not needed.

* Pan frames reach corners.

* Fixed window wandering on restart, recapture.

* International characters are accepted as input in FvwmForm.

* Fix bug in window shading that left one row of pixels visible.

* Fix to FvwmTaskbar so that  it won't loop  when  there are too  many
  buttons.

* Fix positioning bug on overlapping menus.

* Fix M4 command problem, Problem Reports 201 and 246.

* Fixed bug when calling a function without all args supplied.

* Miscellaneous bug fixes,  see ChangeLog for details.

<hr>
<b>Changes in official release 2.2 (February 1999)</b>
</pre>