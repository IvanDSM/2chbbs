<?php
require "h.php";
$con = mysql_connect("localhost", $dbuser, $dbpass);
mysql_select_db($dbname);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="s.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta http-equiv="pragma" content="no-cache">
<title><?php echo $websitename; ?></title>
</head>
<body>
<center>
<table style="width: 75%; padding: 50px;"><tr><td>Welcome <font color="green"><?php echo substr(gen_id(), 0, 10) ?></font>,<br/><br/><br/><i><?php echo $websitename; ?></i> is a <a href="http://www2.2ch.net/2ch.html">2channel</a>-like text board, also similar to <a href="http://wakaba.c3.cx/shii/">Shiichan's Anonymous BBS</a> or <a href="https://www.4chan.org/">4chan's textboards</a>, made with a number of requirements in mind:<ol><li>Low client requirements - <i><?php echo $websitename; ?></i> does not use Javascript or HTML5.</li><li>Little clutter - user information like IP addresses is not stored, traffic analysis is not performed, there is no moderation or complex post ranking.</li><li>Prevent anonymity abuse - in fashion with anonymous boards, the users are not identified. However, to prevent abuse by people pretending to be who they aren't, or pretending to not be who they were, a unique identifier is generated for each diferent client in a secure way.</li></ol></td><td style="width: 40%; padding-left: 100px;"><b>Navigation</b><br/> <?php $rs = mysql_query("select id, name from boards order by id"); while(($row = mysql_fetch_row($rs))) echo "<br/><a style='line-height: 130%;' href='b.php?b=" . $row[0] . "'>" . $row[1] . "</a>"; ?> </td></tr><tr><td colspan="2"><h3>Text formatting</h3><br/>You can use [<u>command</u>]text[/<u>command</u>] to apply a transformation to a piece of text. The possible commands are:<ul><li>emph - Apply emphasis to a piece of text by coloring its background.</li><li>spoiler - Hides a piece of text until the user hovers over.</li><li>code - Applies no transformations to the input, shows it exactly how it was inputted, with indentation.</li><li>url - Makes the associated text an hyperlink.</li></ul>And the usual b, u and i.</td></tr><tr><td><h3>Contact</h3><a href="mailto:admin@<?php echo $websitename; ?>">admin@<?php echo $websitename; ?></a></td></tr></table>
</center>
</body>
</html>
<?php
mysql_close($con);
?>