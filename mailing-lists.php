<?php
require_once 'prepend.inc';
require_once 'email-validation.inc';

commonHeader("Mailing Lists");
?>

<?php
if (isset($maillist)) {
	# should really grab some email validating routine and use it here.
	if (empty($email) || $email == 'user@example.com' || $email == 'fake@from.net' || !is_emailable_address($email)) {
		echo "You forgot to specify an email address to be added to the list, or specified an invalid address. ";
		echo "Go back and try again.";
	} else {
		$request = strtolower($action);
                if ($request != "subscribe" && $request != "unsubscribe") {
                    $request = "subscribe";
                }
		$sub = str_replace("@", "=", $email);
		switch ($maillist) {
		    case "phplib":
		    case "phplib-dev":
			mail("$maillist-$request-$sub@lists.netuse.de", $request, $request, 
				"From: $email\r\n");
			break;
		    default:
                        $remote_addr = $HTTP_X_FORWARDED_FOR ? $HTTP_X_FORWARDED_FOR : $REMOTE_ADDR;
			mail("$maillist-$request-$sub@lists.php.net", "Website Subscription", 
			"This was a request generated from the form at http://php.net/mailing-lists.php by $remote_addr.", "From: $email\r\n");
			break;
		}
?>
<p>
A request has been entered into the mailing list processing queue. You
should receive an email at <?php echo $email;?> shortly describing how to
complete your request.
</p>
<?php
	}
} else {

?>
<p>
There are many PHP-related mailing lists available. Most of them
have archives are available, and many are also available as newsgroups
on our <a href="news://news.php.net">news server</a>. The archives
are searchable. There is an experimental web interface for the news
server at <a href="http://news.php.net/">http://news.php.net/</a>.
</p>
<p>
<b>Note:</b> When posting to mailing lists or newsgroups, please keep the following in mind:
<ul>
<li> Use a valid email address. Every new poster's email address is checked for validity through confirmation.</li>
<li> Send plain ASCII messages, no HTML-formatted emails please.</li>
<li> Turn on wordwrapping so your entire message doesn't show up on a single line.</li>
<li> No attachments please, just post a URL if you want someone to look at something.</li>
<li> Don't GPG/PGP sign your messages.  If you want people to be able to send you encrypted email, stick your key-locator in your .sig</li>
<li> Don't hijack other peoples' threads.  To post on a new topic, start a new message, don't reply and just change the subject.</li>
<li> Check the archives before posting a question, chances are it has already been asked and answered a few times.</li>
<li> When asking a question, don't just tell us, &quot;it doesn't work&quot;.  Tell us what you are trying to
accomplish, a <b>short</b> code snippet showing how you tried to solve it, what you expected to get and what you got instead.</li>
</ul>
</p>
<?php

  // array of lists (list, name, short desc., moderated, archive, digest, newsgroup)
  $general_mailing_lists = Array(

    'General mailing lists for PHP users',
    Array (
      'php-announce', 'Announcements',
      'Announcements of new PHP releases are sent to this very low-volume list',
      true, false, false, "php.announce"
    ),
    Array (
      'php-general', 'General user list',
      'This is a really high volume general list for PHP users',
      false, true, true, "php.general"
    ),
    Array (
      'php-windows', 'Windows PHP users list',
      'Using PHP on Microsoft Windows',
      false, true, true, "php.windows"
    ),

    'Subject specific lists for PHP users',
    Array (
      'php-install', 'Installation issues and problems',
      'How to install PHP with partiucular configurations, and servers',
      false, true, true, "php.install"
    ),
    Array (
      'php-db', 'Databases and PHP',
      'This list is for the discussion of PHP database topics',
      false, true, true, "php.db"
    ),
    Array (
      'php-i18n', 'Internationalization',
      'Internationalization (i18n) and localization (l10n) issues and features',
      false, true, true, "php.i18n"
    ),
    Array (
      'php-evangelism', 'PHP evangelism mailing list',
      'A list for people interested in promoting PHP and learning good reasons to support PHP in the enterprise',
      true, true, true, "php.evangelism"
    ),	
    Array (
      'soap', 'PHP SOAP list',
      'List for the SOAP developers',
      false, false, false, 'php.soap'
    ),

    'PEAR mailing lists',
    Array (
      'pear-general', 'PEAR general list',
      'A list for users of PEAR, an open-source common code library for PHP',
      false, true, true, "php.pear.general"
    ),
    Array (
      'pear-dev', 'PEAR developers list',
      'A list for developers of PEAR, an open-source common code library for PHP',
      false, true, true, "php.pear.dev"
    ),
    Array (
      'pear-doc', 'PEAR documentation list',
      'A list involving the documentation of PEAR, an open-source common code library for PHP',
      false, true, true, "php.pear.doc"
    ),
    Array (
      'pear-cvs', 'PEAR CVS list',
      'All the commits of the cvs PEAR code repository are posted to this list automatically',
      false, true, true, "php.pear.cvs"
    ),

    'PHP-GTK mailing lists',
    Array (
      'php-gtk-general', 'PHP-GTK general list',
      'A list for users of PHP-GTK, An extension for PHP making it possible to write client-side GUI applications' ,
      false, true, true, "php.gtk.general"
    ),
    Array (
      'php-gtk-doc', 'PHP-GTK documentation list',
      'List for the authors of the PHP-GTK documentation with CVS commits',
      false, true, false, "php.gtk.doc"
    ),
    Array (
      'php-gtk-dev', 'PHP-GTK developers list',
      'A list for the developers of PHP-GTK, An extension for PHP making it possible to write client-side GUI applications' ,
      false, true, true, "php.gtk.dev"
    ),
    Array (
      'php-gtk-cvs', 'PHP-GTK CVS list',
      'All the commits to the cvs PHP-GTK code repository are posted to this list automatically' ,
      false, true, true, "php.gtk.cvs"
    ),

    'Smarty template engine project mailing lists',
    Array (
      'smarty-general', 'General user list',
      'This is a medium volume general list for Smarty users',
      false, true, true, "php.smarty.general"
    ),
    Array (
      'smarty-dev', 'Smarty developers list',
      'A list for Smarty developers' ,
      false, true, true, "php.smarty.dev"
    ),
    Array (
      'smarty-cvs', 'Smarty CVS commit list',
      'All the commits of the cvs Smarty code repository are posted to this list automatically',
      true, true, false, "php.smarty.cvs"
    ),
  );

  // array of lists (list, name, short desc., moderated, archive, digest, newsgroup)
  $internals_mailing_lists = Array(

    'PHP and Zend Engine internals lists',
    Array (
      'internals', 'Internals list',
      'A medium volume list for those who want to help out with the development of PHP',
      false, true, true, "internals"
    ),
    Array (
      'php-cvs', 'CVS commit list',
      'All the commits of the cvs PHP code repository are posted to this list automatically',
      true, true, false, "php.cvs"
    ),
    Array (
      'php-cvs-daily', 'Daily CVS commit summary',
      'Daily changelog and NEWS file updates',
      true, false, false
    ),
    Array (
      'zend-engine-cvs', 'Zend Engine CVS commit list',
      'All the commits of the Zend Engine CVS modules are posted to this list automatically',
      false, true, true, "php.zend-engine.cvs"
    ),
    Array (
      'php-qa', 'Quality Assurance list',
      'List for the members of the PHP-QA Team',
      false, true, false, "php.qa"
    ),

    'PHP documentation mailing lists',
    Array (
      'phpdoc', 'PHP documentation list',
      'List for the authors of the PHP documentation with CVS commits',
      false, true, false, "php.doc"
    ),
    Array (
      'php-doc-chm', 'PHP CHM documentation list',
      'List for developers of the Windows Help-format PHP documentation',
      false, false, true, "php.doc.chm"
    ),
  );

function output_lists_table($mailing_lists)
{
	echo '<table cellpadding="5" cellspacing="1" border="0">', "\n";
	while ( list(, $listinfo) = each($mailing_lists)) {
		if (!is_array($listinfo)) {
			echo '<tr bgcolor="#cccccc">';
			echo "<th>{$listinfo}</th>";
			echo '<th>Moderated</th>';
			echo '<th>Archive</th>';
			echo '<th>Newsgroup</th>';
			echo '<th>Normal</th>';
			echo '<th>Digest</th>';
			echo "</tr>\n";
		} else {
			echo '<tr align="center" bgcolor="#e0e0e0">';
			echo '<td align="left"><b>' . $listinfo[1] . '</b><br><small>'. $listinfo[2] . '</small></td>';
			echo '<td>' . ($listinfo[3] ? 'yes' : 'no') . '</td>';
			echo '<td>' . ($listinfo[4] ? make_link("http://marc.theaimsgroup.com/?l=".$listinfo[0], 'yes') : 'n/a') . '</td>';
			echo '<td>' . ($listinfo[6] ? make_link("news://news.php.net/".$listinfo[6], 'yes') : 'n/a') . '</td>';
			echo '<td><input name="maillist" type="radio" value="' . $listinfo[0] . '"></td>';
			echo '<td>' . ($listinfo[5] ? '<input name="maillist" type="radio" value="'.$listinfo[0].'-digest">' : 'n/a' ) . '</td>';
			echo "</tr>\n";
		}
	}
	echo "</table>\n";
}

?>

<form method="post" action="http://www.php.net/mailing-lists.php">
<p>
<h1><a name="local">General Mailing Lists</a></h1>
<?php

	/* General lists */
	output_lists_table($general_mailing_lists);

?>
</p>

<p>
<h1><a name="local">Internals Mailing Lists</a></h1>
<?php

	/* General lists */
	output_lists_table($internals_mailing_lists);

?>
</p>

<p align="center">
<b>Email:</b>
<input type="text" name="email" width="40" value="user@example.com">
<input type="submit" name="action" value="Subscribe">
<input type="submit" name="action" value="Unsubscribe">
</p>

</form>

<p>
You will be sent a confirmation mail at the address you wish to
be subscribed or unsubscribed, and only added to the list after
following the directions in that mail.
</p>

<p>
There are a variety of commands you can use to modify your subscription.
Either send a message to php-whatever-help@lists.php.net (as in,
php-general-help@lists.php.net) or you can view the commands for
ezmlm <a href="http://www.ezmlm.org/ezman-0.32/ezman1.html">here.</a>
</p>

<p>
Archives for some of these mailing lists are also available at
<a href="http://www.phpbuilder.com/mail/">http://www.phpbuilder.com/mail/</a>.
</p>

<p>
<b>Warning:</b> The PHP users mailing list gets close to 2500 messages
per month currently. Do the math. That translates to about 80 messages
per day. If your mailbox can't handle this sort of traffic you might
want to consider subscribing to the digest list instead (two messages
per day), using the news server, or reading the mailing list using the
archives. 
</p>

<p>
You can search the main mailing lists right from this website from <A
HREF="/search.php">the search page</A> or by using the search input box
selecting the appropriate option on the top-right of every page.
</p>

<?php echo hdelim(); ?>

<h1><a name="local">Local Mailing Lists</a></h1>

<p>
There are also some mailing lists and newsgroups for PHP users
that have been set up by others in the community to host local
(particularly non-English) discussions.
</p>

<ul>
  <li><a href="news:dk.edb.internet.webdesign.serverside.php">Danish Newsgroup</a></li>
  <li><a href="http://www.ilovephp.com/mailinglist/">French Mailing List</a></li>
  <li><a href="news:fr.comp.infosystemes.www.auteurs.php">French Newsgroup</a></li>
  <li><a href="http://www.php-center.de/">German Mailing List</a></li>
  <li><a href="news:de.comp.lang.php.misc">German Newsgroup</a> (also other topics under de.comp.lang.php)</li>
  <li><a href="http://weblabor.hu/wl-phplista/etikett">Hungarian Mailing List</a></li>
  <li><a href="http://groups.yahoo.com/group/php_greek">Greek Mailing List</a></li>
  <li><a href="http://www.ziobudda.net/mailman/listinfo/php-it/">Italian Mailing List</a></li>
  <li><a href="http://cortesi.com/php/">Italian Mailing List (coordinating the translation of the PHP manual)</a></li>
  <li><a href="http://groups.yahoo.com/group/php-pt">Portuguese Mailing List</a></li>
  <li><a href="mailto:lista-subscribe@phpes.com">Spanish Mailing List</a></li>
  <li><a href="http://phptr.baslangic.net/">Turkish Mailing List</a></li>
  <li><a href="http://ns1.php.gr.jp/ml.html">The Japanese PHP User Group's Mailing lists</a></li>
</ul>

<?php
}

commonFooter();
?>
