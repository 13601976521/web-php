<?php
include_once "prepend.inc";
commonHeader("PHP Usage Stats");
?>

<h1>Usage Stats for December 2002</h1>

<p>
PHP: 10,197,643 Domains, 1,222,949 IP Addresses<br>
Source: <a href="http://www.netcraft.com/Survey/">Netcraft</a><br>
</p>

<p>
<?php echo print_image("stats/phpstats-200212.png", "Graph"); ?>
</p>

<p>
You can also see how popular PHP is relative to other Apache modules
at <?php print_link("http://www.securityspace.com/s_survey/", "SecuritySpace's Web Survey"); ?>.
Spoiler: PHP is the most popular. There is also a
<a href="http://www.tiobe.com/tpci.htm">Programming Community Index</a>
provided by TIOBE.
</p>

<?php include_once "langchooser.inc"; echo "<!-- $LANG -->"; ?>

<?php commonFooter(); ?>
