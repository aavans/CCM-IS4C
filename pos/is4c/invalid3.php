<?php
/*******************************************************************************

    Copyright 2001, 2004 Wedge Community Co-op

    This file is part of IS4C.

    IS4C is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    IS4C is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    in the file license.txt along with IS4C; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*********************************************************************************/
 // session_start(); ?>
<BODY>
<HEAD></HEAD>

<FORM name='form1' method='post' autocomplete='off' action='authenticate3.php'>
<INPUT Type='hidden' name='input' size='20' tabindex='0'>
</FORM>

<?
if (!function_exists("printheaderb")) include("drawscreen.php");

printheaderb();
?>

<TR>
<TD height='300' width='640' align='center' valign='center'>
	<TABLE border='0' cellpadding='0' cellspacing='0'>
		<TR>
		<TD bgcolor='#800000' height='150' width='260' valign='center' align='center'>
			<CENTER>

			<IMG src='graphics/redkey4.gif'>

			<P><FONT face='arial' color='white'>
			password invalid, please re-enter</FONT>


			</FONT></CENTER>
		</TD>
		</TR>
	</TABLE>
</TD></TR>
<TR><TD width='640' colspan='2' align='right'>

</TD></TR>
<!--
</TABLE>
<FORM name='hidden'>
<INPUT Type='hidden' name='alert' value='noScan'>
</FORM></BODY>
-->
<?
$_SESSION["runningTotal"] = $_SESSION["amtdue"];
errorBeep();
$_SESSION["scan"] = "noScan";
printfooter();
?>
