<?php
include_once 'prepend.inc';
commonHeader("Mirroring The PHP Website");
?>

<p>
 If you would like to become an official PHP mirror, please be sure to
 read and follow these instructions carefully. You should have the
 consent of your hosting company (if you aren't a hosting company
 yourself), and be prepared for some reasonably significant bandwidth
 usage (a reasonable estimate as of 2/2002 is 150MB/day). The PHP
 website requires PHP 4 with the settings <a href="#settings">outlined
 below</a>. The size of the full website is approximately 3/4 gigabytes.
</p>

<a name="rule"></a>
<p>
 <strong>
  Please note that we are currently only accepting new official
  mirrors in countries where we don't already have two active official
  mirrors. For a list of official mirrors have a look at
  <a href="/mirrors.php">mirrors.php</a>. Before you start to set up
  an official mirror site, it is advisable to contact <a
  href="mailto:mirrors@php.net">mirrors@php.net</a>, and ask if you
  have chance to get your mirror site accepted. We would not like
  to put too much pressure on our rsync server, so we need to limit
  the number of mirror sites.
 </strong>
</p>

<p>
 If you are not an official mirror (eg. mirror the site for your company's
 internal use), you should not rsync from <tt>rsync.php.net</tt> more frequently
 than every three hours, or you may find your IP blocked. Also, please make
 an effort to only mirror those parts of the site that you actually need.
 (For example, <a href="#exclude">exclude the manual in all languages that you
 will not be using and exclude the distributions directory</a>.)
</p>

<h1>How To Mirror The PHP Website</h1>

<h2>Get Files With Rsync</h2>

<p>
 First, you need to have a <a href="http://rsync.samba.org/">rsync</a> installed.
 As you have rsync, fetch the web files with the following:
</p>

<pre>
    rsync -avzC --timeout=600 --delete --delete-after \
      rsync.php.net::phpweb /your/local/path 
</pre>

<a name="exclude"></a>
<p>
 Setting up an unofficial mirror, and want to only mirror one
 language of the manual? Add:
</p>

<pre>
    --include='manual/en/' --include='manual/en/**' --exclude='manual/**'
</pre>

<p>
 after <tt>"--delete-after"</tt> in the command line above (substituting your
 prefered language code in place of <tt>'en'</tt>). You can also exclude the
 distributions directory by adding <tt>"--exclude='distributions/'"</tt>
</p>

<p>
 If <tt>/your/local/path</tt> isn't in your web document tree (why isn't it?), 
 then symlink the <tt>phpweb/</tt> directory to the correct place on your server.
</p>

<h2>Setup Apache VirtualHost</h2>

<p>
 Make sure your web server is set up to serve up <tt>.php</tt> files
 as PHP parsed files. If it isn't, add the mime-type to your config.
</p>

<p>
 Create a virtualhost which looks something like:
</p>

<a name="settings"></a>
<pre>
   &lt;VirtualHost *-or-your-hostname-here&gt;

     ServerName *-or-your-hostname-here
     ServerAlias xx.php.net www.xx.php.net
     ServerAdmin yourname@yourdomain.com
     
     # Webroot of PHP mirror site
     DocumentRoot /www/htdocs/phpweb
     
     # These PHP settings are necessary to run a mirror
     php_value include_path .:/www/htdocs/phpweb/include
     php_flag register_globals on
     
     # Log server activity
     ErrorLog logs/error_log
     TransferLog logs/access_log
     
     # Set directory index
     DirectoryIndex index.php
     
     # Handle errors with local error handler script
     ErrorDocument 401 /error/index.php
     ErrorDocument 403 /error/index.php
     ErrorDocument 404 /error/index.php
     
     # Add types not specified by Apache by default
     AddType application/octet-stream .chm .bz2 .tgz
     AddType application/x-pilot .prc .pdb 

     # Set mirror's preferred language here
     SetEnv MIRROR_LANGUAGE "en"

     # The next lines are only necessary if 
     # generating stats (see below)
     Alias /stats/ /path/to/local/stats/
     SetEnv MIRROR_STATS 1

     # The next lines are only necessary if you would
     # like to provide local search support (see below)
     SetEnv HTSEARCH_PROG /usr/local/htdig/bin/htphp.sh
     SetEnv HTSEARCH_EXCLUDE "/print/ /printwn/ /manual/howto/ /cal.php"

   &lt;/VirtualHost&gt;
</pre>
   
<p>
 Provide an asterisk or a hostname in the VirtualHost container's
 header and in the ServerName directive. Consult
 <a href="http://httpd.apache.org/docs/vhosts/index.html">the Apache
 documentation</a> for differences of the two methods. Change the
 DocumentRoot and include_path settings as appropriate, specify
 the mirror's preferred language, and provide settings according to
 your local search and stats setup, if your mirror is going to
 provide these. For the preferred language setting, choose one from
 those avilable as manual translations. If you provide something else,
 your default language will default to English. After you restart
 Apache, your mirror site should start working.
</p>

<p>
 The official names for PHP mirrors are in the convention:
 <tt>"xx.php.net"</tt>, where <tt>"xx"</tt> is replaced by the
 2-letter country code of your mirror's location. If there already
 is a <tt>"xx.php.net"</tt>, then you will probably get
 <tt>"xx2.php.net"</tt>. <a href="#rule">Please read the note in
 bold above</a>.
</p>

<h2>Setup Search Or Stats</h2>

<p>
 To provide better service to your visitors, you may definitely
 consider setting up local search support. The instruction on
 setting this up are <a href="/mirroring-search.php">detailed
 here</a>. Setting up local stats can also be a plus on your
 mirror. We also provide <a href="/mirroring-stats.php">some
 setup instructions for that</a>.
</p>

<h2>Setup Regular Updates</h2>

<p>
 You must also set up a cron job that periodically does an rsync
 to refresh your web directory. This will ensure that your web site
 is up to date. Something like:
</p>

<pre>
   23 * * * * /usr/local/bin/rsync -avzC --timeout=600 --delete --delete-after rsync.php.net::phpweb /your/local/path
</pre>

<p>
 Remember to specify the same rsync parameters you used to get
 the phpweb files. You should try to stagger your times a bit from the
 example to help spread the load on the <tt>rsync.php.net</tt> server.
</p>

<h2>Sponsor Logo</h2>

<p>
 We would like to thank you for providing a mirror, so
 if you would like to display a logo on the mirror site promoting your
 company, you are able to do so by following these steps:
</p>

<ul>
 <li>Create a 120 x 60 pixel sized logo button.</li>
 <li>Copy it to your <tt>/www/htdocs/phpweb/backend</tt> folder as <tt>mirror.gif</tt>, <tt>mirror.jpg</tt> or <tt>mirror.png</tt>.</li>
 <li>Go visit your mirror URL and check if it's there.</li>
</ul>

<p>
 The PHP Group do reserve the right to refuse images based on content, but
 most things should be fine.
</p>

<p>
 We have chosen a banner size which conforms with the
 <a href="http://www.iab.net/standards/adunits.asp">Internet
 Advertising Bureau standards</a>.
</p>

<p>
 And finally, don't forget to put a nice little PHP logo somewhere
 on your hosting company's site if possible. Grab one of the logos
 from the <a href="/download-logos.php">Download logos</a> page, and
 link it to your mirror.
</p>

<h2>Mirror Setup Troubleshooting</h2>

<p>
 Don't be afraid if you cannot find several pieces of the site in your
 local copy, like the tutorial PHP page or the printed pages' directories.
 These are handled automatically on the fly and are not real files.
</p>

<p>
 If you find that the manuals are listed on the documentation page, but
 all of the links open up a search page, you probably have an Apache /manual/
 alias in effect. Remove that alias, restart Apache, and the manuals will
 be showing up.
</p>

<p>
 If the shortcut features [eg. xx.php.net/echo] are not working, check that
 the manual files are really under DOCUMENT_ROOT, you have register_globals on,
 and that at least the English manual is present. If the xx.php.net/include
 shortcut works, but xx.php.net/echo does not, then you have an improper
 ErrorDocument setting.
</p>

<p>
 If you have an offical mirror site but it is not listed on
 <a href="/mirrors.php">mirrors.php</a>, then your mirror is probably detected
 to be disfunctional for our users. Mirror sites inaccessible for more then
 three days or not updated for more then seven days are removed automatically
 from the listing for our user's convinience. We send out a notification to
 all automatically disabled mirror site owners every week.
</p>

<h1>Data Registered About Official Mirrors</h1>

<p>
 Once you have done the above and your site appears to work, send
 a message to <a href="mailto:mirrors@php.net">mirrors@php.net</a>
 with the following information, and appropriate steps will be taken
 to integrate your mirror site:
</p>

<ul>
 <li>
  Your country.
 </li>
 <li>
  The xx.php.net address you used to set up the mirror site.
 </li>
 <li>
  Your name and email address to be registered as the admin of the mirror.
 </li>
 <li>
  A hostname that we can use as a CNAME for the country-code-based
  name of the mirror. Please do not provide an IP address. Using a name
  means you can move the mirror to another IP address without
  coordinating with us at all.
 </li>
 <li>
  Whether or not you've installed local searching support on your mirror.
 </li>
 <li>
  Whether or not you've installed local stats support on your mirror.
 </li>
 <li>
  The name of the hosting company.
 </li>
 <li>
  The URL of the hosting company. This link is provided with the
  companies name at the bottom of pages, and in the mirror listing.
 </li>
</ul>

<p>
 There is a mailing list named <tt>"php-mirrors"</tt> at
 <tt>lists.php.net</tt>. It is not required to sign up to
 this mailing list. Besides the name, the traffic on this
 list is mainly interesting for the webmasters of php.net,
 and we are able to keep in touch with you using your given
 email address. Anyway if you would like to follow what's
 happening, you can subscribe, by sending an empty message
 to: <a href="mailto:php-mirrors-subscribe@lists.php.net">php-mirrors-subscribe@lists.php.net</a>
</p>

<p>
 <em>
  Thank you for being a mirror!
 </em>
</p>

<?php commonFooter(); ?>
