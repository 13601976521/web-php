<?php
// Sitewide functions
include_once 'prepend.inc';

// Define the posttohost() function
include_once 'posttohost.inc';

// Defines the makeEntry() function, which we use
include_once 'shared-manual.inc';

// Print out common header
commonHeader("Manual Notes");

// We have a submitted form to process
if (isset($note) && isset($user) && isset($lang) &&
    isset($sect) && isset($redirect) && isset($action)) {

    // Clean off leading and trailing whitespace 
    $user = trim($user);
    $note = trim($note);
    
    // Convert all line-endings to unix format,
    // and don't allow out-of-control blank lines
    $note = str_replace("\r\n", "\n", $note);
    $note = str_replace("\r", "\n", $note);
    $note = preg_replace("/\n{2,}/", "\n\n", $note);
    
    // Don't pass through example username
    if ($user == "user@example.com") {
        $user = "";
    }
    
    // We don't know of any error now
    $error = FALSE;

    // No note specified
    if (strlen($note) == 0) {
        $error = "You have not specified the note text.";
    }
    
    // The user name contains a malicious character
    elseif (stristr($user, "|")) {
        $error = "You have included bad characters within your username. We appreciate you may want to obfusicate your email further, but we have a system in place to do this for you.";
    }

    // Check if the note is not too long
    elseif (strlen($note) >= 4096) {
        $error = "Your note is too long. You'll have to make it shorter before you can post it. Keep in mind that this is not the place for long code examples!";
    }

    // Check if the note is not too short
    elseif (strlen($note) < 32) {
        $error = "Your note is too short. Trying to test the notes system? Save us the trouble of deleting your test, and don't. It works.";
    }

    // Chek if any line is too long
    else {
    
        // Split the note by whitespace, and check length
        foreach (preg_split("/\\s+/", $note) as $chunk) {
            if (strlen($chunk) > 70) {
                $error = "Your note contains a bit of text that will result in a line that is too long, even after using wordwrap().";
            }
        }
    }

    // No error was found, and the submit action is required
    if (!$error && strtolower($action) != "preview") {

        // Post the variables to the central user note script
        // ($MQ is defined in prepend.inc)
        $result = posttohost(
            "http://master.php.net/entry/user-note.php",
            array(
                "user" => ($MQ ? stripslashes($user) : $user),
                "note" => ($MQ ? stripslashes($note) : $note),
                "lang" => ($MQ ? stripslashes($lang) : $lang),
                "sect" => ($MQ ? stripslashes($sect) : $sect)
            )
        );

        // If there is any non-header result, then it is an error
        if ($result) {
            echo "<!-- $result -->";
            echo "<p class=\"error\">There was an error processing your submission. It has been automatically e-mailed to the developers, who will process the note manually.</p>";
        }

        // There was no error returned
        else { 
            echo '<p>Your submission was successful -- thanks for contributing! Note ',
                 'that it will not show up for up to a few hours on some of the <a ',
                 'href="/mirrors.php">mirrors</a>, but it will find its way to all of ',
                 'our mirrors in due time.</p>';
        }
        
        // Provide a backlink for the page the user is coming from
        echo '<p>You can <a href="' . $redirect . '">go back</a> from whence you came.</p>';
        
        // Print out common footer, and end page
        commonFooter();
        exit();
    }
    
    // There was an error, or a preview is needed
    else {

        // If there was an error, print out
        if ($error) { echo "<p class=\"error\">$error</p>\n"; }
        
        // Print out preview of note
        echo '<p>This is what your entry will look like, roughly:</p>';
        echo '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
        makeEntry(time(),stripslashes($user),stripslashes($note));
        echo '</table>';
    }
}

// Any needed variable was missing => display instructions
else { ?>
<p>
 You can contribute your notes to the PHP  manual from the comfort of your
 browser! Just add your comment in the  big field below, and, optionally,
 your email address or name in the little one.  After submission, your note
 will appear under the documentation as a part of the manual.
</p>

<p>
 There is no need to obsfuscate your email address, as we have a simple
 conversion in place to convert the @ signs and dots in your address. You
 may still want to include a part in the email address only understandable
 by humans, to make it spam protected, as our conversion can be performed
 the other way too. You may submit your email address as
 <tt>user@NOSPAM.example.com</tt> for example (which will be displayed
 as <tt>user at NOSPAM dot example dot com</tt>. Although note that we can
 only inform you of the removal of your note, if you use your real email
 address.
</p>

<p>
 Note that HTML tags are not allowed in the posts, but the note is presented
 inside a &lt;pre&gt; element so formatting is preserved. URLs will be turned
 into clickable links automatically. <i>(Double-check that your note appears
 as you want during the preview. That's why it is there!)</i>
</p>

<p>
 Please read the following points carefully before submitting your comment. 
 If your post falls into one of the categories mentioned there, it will be 
 rejected by one of the editors.
</p>

<ul>
 <li>
  If you are trying to <a href="http://bugs.php.net/">report a
  bug</a>, or <a href="http://bugs.php.net/">request a new feature
  or language change</a> you're in the wrong place.
 </li>
 
 <li>
  If you are just commenting on the fact that something is not documented, 
  save your breath. This is where <b>you</b> add to the documentation, not
  where you ask <b>us</b> to add the documentation. You may choose to email
  the <a href="mailto:phpdoc@lists.php.net">PHP Documentation Team</a> to
  discuss the change.
 </li>
 
 <li>
  This is also not the correct place to <a href="/support.php">ask questions</a> 
  (even if you see others have done that before, we are editing the notes slowly 
  but surely). If you need support send email to the
  <a href="mailto:php-general@lists.php.net">php-general list</a>, or see what
  <a href="/support.php">other support options are available</a>.
 </li>
</ul>

<h3>If you post a note in any of the categories above, it will edited and/or removed.</h3>

<p>
 Just to make the point once more. The notes are being edited and support
 questions/bug reports/feature request/comments on lack of documentation, are
 being <b>deleted</b> from them (and you may get a <b>rejection</b> email), so
 if you post a question/bug/feature/complaint, it will be removed. (But once you
 get an answer/bug solution/function documentation, feel free to come back
 and add it here!)
</p>
<p>
 (And if you're posting an example of validating email addresses, please
 don't bother. Your example is almost certainly wrong for some small subset of
 cases. See <a href="http://examples.oreilly.com/regex/">this information from
 O'Reilly Mastering Regular Expressions book</a> for the gory details.)
</p>
<p>
  Please note that periodically, the developers may go through the notes and
  incorporate the information in them into the documentation. This means
  that any note submitted here becomes the property of the PHP Documentation
  Group.
</p>
<?php
}

// If the user name was not specified, provide a default
if (!isset($user) || !strlen($user)) { $user = "user@example.com"; }

// There is no section to add note to
if (!isset($sect)) {
    echo '<p><b>To add a note, you must click on the "Add Note" button (the plus sign)  ',
         'on the bottom of a manual page so we know where to add the note!</b></p>';
}

// Everything is in place, so we can display the form
else {?>
<form method="post" action="<?php echo $PHP_SELF; ?>">
 <input type="hidden" name="sect" value="<?php echo clean($sect); ?>" />
 <input type="hidden" name="redirect" value="<?php echo clean($redirect); ?>" />
 <input type="hidden" name="lang" value="<?php echo clean($lang); ?>" />
 <table border="0" cellpadding="5" cellspacing="0" bgcolor="#d0d0d0">
  <tr>
   <td colspan="2">
    <b>
     <a href="/support.php">Click here to go to the support pages.</a><br />
     <a href="http://bugs.php.net/">Click here to submit a bug report.</a><br />
     <a href="http://bugs.php.net/">Click here to request a feature.</a>
    </b>
   </td>
  </tr>
  <tr valign="top">
   <td><b>Your email address (or name):</b></td>
   <td><input type="text" name="user" size="60" maxlength="40" value="<?php echo clean($user); ?>" /></td>
  </tr>
  <tr valign="top">
   <td><b>Your notes:</b></td>
   <td><textarea name="note" rows="20" cols="60" wrap="virtual"><?php echo clean($note); ?></textarea><br>
  </td>
  </tr>
  <tr>
   <td colspan="2" align="right">
    <input type="submit" name="action" value="Preview" />
    <input type="submit" name="action" value="Add Note" />
   </td>
  </tr>
 </table>
</form>
<?php
}

// Print out common footer
commonFooter();
?>
