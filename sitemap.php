<?php
include_once "prepend.inc";
include_once "ip-to-country.inc";
commonHeader("Sitemap");
?>

<!-- <?php echo $_COOKIE["COUNTRY"]; ?> -->

<h1>PHP.net Sitemap</h1>

<h2>News</h2>

<ul>
 <li><a href="/index.php">Home Page</a></li>
 <li><a href="/news.php">News Archives</a></li>
 <li><a href="/news.rss">RSS newsfeed</a></li>
</ul>

<h2>Getting PHP</h2>

<ul>
 <li><a href="/downloads.php">Downloads</a></li>
 <li><a href="/anoncvs.php">Getting PHP from CVS</a></li>
</ul>

<h2>PHP Support</h2>

<ul>
 <li><a href="/support.php">Getting Help</a>
  <ul>
   <li>Documentation
    <ul>
     <li><a href="/docs.php">Online Documentation</a></li>
     <li><a href="/faq.php">Frequently Asked Questions</a></li>
     <li><a href="/download-docs.php">Download documentation</a></li>
    </ul>
   </li>
   <li>Other support pages
    <ul>
     <li><a href="/books.php">Books</a></li>
     <li><a href="/mailing-lists.php">Mailing Lists</a></li>
     <li><a href="/cal.php">Events</a></li>
     <li><a href="/links.php">Links</a></li>
    </ul>
   </li>
  </ul>
 </li>
</ul>

<h2>Navigation</h2>

<ul>
 <li><a href="/my.php">My PHP.net</a></li>
 <li><a href="/search.php">Search</a></li>
 <li><a href="/sidebars.php">SearchBars</a></li>
 <li><a href="/urlhowto.php">URL Shortcuts</a></li>
 <li><a href="/quickref.php">Quick Function Reference</a></li>
 <li><a href="/tips.php">Function Reference Tips</a></li>
 <li><a href="/sites.php">PHP.net Sites List</a></li>
</ul>

<h2>Mirror sites</h2>

<ul>
 <li>Mirror site information
  <ul>
   <li><a href="/mirrors.php">List of Mirror Sites</a></li>
   <li><a href="/mirror.php">Information About this Mirror Site</a></li>
  </ul>
 </li>
 <li>Mirroring
  <ul>
   <li><a href="/mirroring.php">Mirroring PHP.net</a></li>
   <li><a href="/mirroring-search.php">Mirroring - search service</a></li>
   <li><a href="/mirroring-stats.php">Mirroring - stats service</a></li>
   <li><a href="/cvsup.php">Maintaining a Local CVS Repository</a></li>
  </ul>
 </li>
</ul>

<?php commonFooter(); ?>
