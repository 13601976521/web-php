<?php
require_once 'prepend.inc';
commonHeader("PHP Books");

// Languages used in the book listing
$langs = array(
  'en'  => 'English',
  'de'  => 'German',
  'nl'  => 'Dutch',
  'es'  => 'Spanish',
  'fr'  => 'French',
  'cz'  => 'Czech',
  'kr'  => 'Korean',
  'jp'  => 'Japanese',
  'cn'  => 'Traditional Chinese',
  'pt'  => 'Portugese',
  'se'  => 'Swedish',
  'hu'  => 'Hungarian',
  'dk'  => 'Danish',
  'it'  => 'Italian'
);

// Book types
$book_types = array(
  'PHP'     => "Books about PHP",
  'Related' => "Related Reading"
);

// The array of books (two types)
$books = array (

  "PHP" => array (


array(
    /* title[s]     */ "PHP - Der erfolgreiche Einstieg",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827262992/wwwphpnet07",
    /* author[s]    */ array("Christine Peyton", "Andre M�ller"),
    /* auth link[s] */ "",
    /* image        */ "einstieg.jpg",
    /* information  */ "Markt & Technik, 2002, ISBN 3-8272-6299-2, 384 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

array(
    /* title[s]     */ "Das LAMP Buch. Webserver mit Linux, Apache, MySQL und PHP",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3935922094/wwwphpnet07",
    /* author[s]    */ "Heiko Goller",
    /* auth link[s] */ "",
    /* image        */ "lamp.jpg",
    /* information  */ "SuSE Press, 2002, ISBN 3-9359-2209-4, 478 pages",
    /* inform. link */ "http://www.susepress.de/de/katalog/3_935922_09_4/index.html",
    /* language     */ "de"
  ),

array(
    /* title[s]     */ "PHP de Luxe - fortgeschrittene PHP-Programmierung",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3826607996/wwwphpnet07",
    /* author[s]    */ array("Richard Samar", "Christian Stoker"),
    /* auth link[s] */ array("http://www.php-de-luxe.ch/team/", "http://www.php-de-luxe.ch/team/"),
    /* image        */ "phpdeluxe.jpg",
    /* information  */ "mitp, May 2002, ISBN 3-8266-0799-6, 750 pages",
    /* inform. link */ "http://www.php-de-luxe.de/",
    /* language     */ "de"
  ),

array(
    /* title[s]     */ "PHP 4.x. After Work. F�r Einsteiger",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/381557322X/wwwphpnet07",
    /* author[s]    */ array("Mark Kronsbein", "Thomas Weinert", "Clemens Gutweiler"),
    /* auth link[s] */ array("http://www.zend.com/comm_person.php?id=36", "http://www.zend.com/comm_person.php?id=61", false),
    /* image        */ "afterworkphp.jpg",
    /* information  */ "Sybex, June 2002, ISBN 3-8155-7322-X, 352 pages",
    /* inform. link */ "http://www.phpbuch.de/",
    /* language     */ "de"
  ),

array(
    /* title[s]     */ "Praktikum PHP",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3831137412/wwwphpnet07",
    /* author[s]    */ "Dennis M�ller",
    /* auth link[s] */ "http://www.praktikum-php.de/autor.php",
    /* image        */ "praktikum.gif",
    /* information  */ "BoD, April 2002, ISBN 3-8311-3741-2, 296 pages",
    /* inform. link */ "http://www.praktikum-php.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4.x Webbook",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3815573238/wwwphpnet07",
    /* author[s]    */ array("Mark Kronsbein", "Thomas Weinert"),
    /* auth link[s] */ array("http://www.zend.com/comm_person.php?id=36", "http://www.zend.com/comm_person.php?id=61"),
    /* image        */ "webbook4x.jpg",
    /* information  */ "Sybex, May 2002, ISBN 3-8155-7323-8, 456 pages",
    /* inform. link */ "http://www.phpbuch.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Dynamische Webseiten mit PHP 4",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3772378420/wwwphpnet07",
    /* author[s]    */ "Jochen Franke",
    /* auth link[s] */ "",
    /* image        */ "dynwebseitenfranke.jpg",
    /* information  */ "Franzis, November 2001, ISBN 3-7723-7842-0",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Jetzt lerne ich MySQL & PHP . Dynamische Webseiten mit Open Source-Software programmieren",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/382726202X/wwwphpnet07",
    /* author[s]    */ array("Sven Letzel", "Robert Gacki"),
    /* auth link[s] */ "",
    /* image        */ "jetztlernenichphpmysql.jpg",
    /* information  */ "Markt+Technik, October 2001, ISBN 3-8272-6202-X, 384 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 IT-Tutorial",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3826608194/wwwphpnet07",
    /* author[s]    */ "Bill McCarty",
    /* auth link[s] */ "",
    /* image        */ "it-tutorial.jpg",
    /* information  */ "mitp, January 2002, ISBN 3-8266-0819-4, 571 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "MySQL/PHP- Datenbankanwendungen",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3826608054/wwwphpnet07",
    /* author[s]    */ array("Jay Greenspan", "Brad Bulger"),
    /* auth link[s] */ "",
    /* image        */ "mysqlphpdatenbankanwendungen.jpg",
    /* information  */ "mitp, 2001, ISBN 3-8266-0805-4, 504 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Go to PHP 4",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827317592/wwwphpnet07",
    /* author[s]    */ "Dirk Ammelburger",
    /* auth link[s] */ "",
    /* image        */ "gotophp4.jpg",
    /* information  */ "Addison-Wesley, 2002, ISBN 3-8273-1759-2, 591 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP4. Dynamische Web-Seiten mit Apache, PHP und MySQL",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3423502428/wwwphpnet07",
    /* author[s]    */ "Dirk Taggesell",
    /* auth link[s] */ "",
    /* image        */ "dynwebseitenapachephpmysql.jpg",
    /* information  */ "DTV-Beck, 2002, ISBN 3-4235-0242-8, 266 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 3/4 Befehlsreferenz",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3772371841/wwwphpnet07",
    /* author[s]    */ "Damir Enseleit",
    /* auth link[s] */ "",
    /* image        */ "phpbefehlsreferenz.jpg",
    /* information  */ "Franzis, 2001, ISBN 3-7723-7184-1, 750 pages",
    /* inform. link */ "http://www.selfphp.info/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Taschenbuch PHP Referenz",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3815816661/wwwphpnet07",
    /* author[s]    */ "Jens Ferner",
    /* auth link[s] */ "",
    /* image        */ "phpreferenz.jpg",
    /* information  */ "Data Becker, March 2002, ISBN 3-8158-1666-1, 320 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP f�rs World Wide Web - Digital Studio One",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827260701/wwwphpnet07",
    /* author[s]    */ "Larry E. Ullman",
    /* auth link[s] */ "",
    /* image        */ "phpwww.jpg",
    /* information  */ "Markt+Technik, July 2001, ISBN 3-8272-6070-1, 296 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Programmieren lernen in PHP 4. Ein kompakter Einstieg in die Webserverprogrammierung",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3446217541/wwwphpnet07",
    /* author[s]    */ "J�rg Krause",
    /* auth link[s] */ "",
    /* image        */ "programmierenlernenphp4.jpg",
    /* information  */ "Hanser, 2001, ISBN 3-4462-1754-1, 394 pages",
    /* inform. link */ "http://www.php.comzept.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 - M+T Easy . leicht, klar, sofort",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/382726247X/wwwphpnet07",
    /* author[s]    */ "Giesbert Damaschke",
    /* auth link[s] */ "",
    /* image        */ "php4easy.jpg",
    /* information  */ "Markt+Technik, December 2001, ISBN 3-8272-6247-X, 320 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 f�r Dummies",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3826629825/wwwphpnet07",
    /* author[s]    */ "Christian Baun",
    /* auth link[s] */ "",
    /* image        */ "php4dummies.jpg",
    /* information  */ "mitp, December 2001, ISBN 3-8266-2982-5, 336 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Best Friend PHP. Das Praxishandbuch",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3815822254/wwwphpnet07",
    /* author[s]    */ array("Bernhard Bauder", "Titus Hochgreve", "Alexander Marquarth"),
    /* auth link[s] */ "",
    /* image        */ "bestfriendphp.jpg",
    /* information  */ "Data Becker, 2001, ISBN 3-8158-2225-4, 350 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

array (
    /* title[s]     */ "Programming PHP",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1565926102/wwwphpnet",
    /* author[s]    */ array("Rasmus Lerdorf","Kevin Tatroe"),
    /* auth link[s] */ array("http://lerdorf.com/bio.php",false),
    /* image        */ "opphp.jpg",
    /* information  */ "O'Reilly & Associates, Mar 2002, ISBN 1-56592-610-2, 500 pages",
    /* inform. link */ "http://www.oreilly.com/catalog/progphp/",
    /* language     */ "en"
   ),

array (
    /* title[s]     */ "PHP Pocket Reference",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1565927699/wwwphpnet",
    /* author[s]    */ "Rasmus Lerdorf",
    /* auth link[s] */ "http://lerdorf.com/bio.php",
    /* image        */ "phppr.s.gif",
    /* information  */ "O'Reilly & Associates, Jan 2000, ISBN 1-56592-769-9, 114 pages",
    /* inform. link */ "http://www.oreilly.com/catalog/phppr/",
    /* language     */ "en"
   ),

  array(
    /* title[s]     */ "Professional PHP Programming",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1861002963/wwwphpnet",
    /* author[s]    */ array("Jesus Castagnetto", "Harish Rawat", "Sascha Schumann", "Chris Scollo", "Deepak Veliath"),
    /* auth link[s] */ array("http://zend.com/comm_person.php?id=9", false, "http://zend.com/zend/hof/sascha.php", false, false),
    /* image        */ "2963.gif",
    /* information  */ "Wrox Press Inc, Dec 1999, ISBN 1-86100-296-3, 909 pages",
    /* inform. link */ "http://www.amazon.com/exec/obidos/ASIN/1861002963/wwwphpnet",
    /* language     */ "en"
   ),

  array(
    /* title[s]     */ array("Core PHP Programming", "Using PHP to Build Dynamic Web Sites"),
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0130893986/wwwphpnet",
    /* author[s]    */ "Leon Atkinson",
    /* auth link[s] */ "http://zend.com/comm_person.php?id=30",
    /* image        */ "core-book.jpg",
    /* information  */ "Foreword by ".make_link("http://www.zend.com/zend/hof/andi.php", "Andi Gutmans")."<br>".
                       "Prentice Hall, Second Edition, August 2000, ISBN 0-13-089398-6, 769 pages",
    /* inform. link */ "http://www.leonatkinson.com/index.php3?screen=eng_book",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP3: Programming Browser-Based Applications",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0071353429/wwwphpnet",
    /* author[s]    */ "David Medinets",
    /* auth link[s] */ "",
    /* image        */ "medinets.gif",
    /* information  */ "MacGraw-Hill, 2000, ISBN 0-07-135342-9, 552 pages",
    /* inform. link */ "http://www.mtolive.com/phpbook",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Building Database Applications on the Web Using PHP3",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0201657716/wwwphpnet",
    /* author[s]    */ array("Craig Hilton", "Jeff Willis"),
    /* auth link[s] */ "",
    /* image        */ "hilton-willis.jpg",
    /* information  */ "Addison-Wesley, Dec 1999, ISBN 0-2016-5771-6, 624 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ array("PHP Essentials","A Better Way to Learn PHP - Includes Version 4"),
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/076152729X/wwwphpnet",
    /* author[s]    */ "Julie C. Meloni",
    /* auth link[s] */ "http://zend.com/comm_person.php?id=10",
    /* image        */ "php_essentials.jpg",
    /* information  */ "Prima-Tech, March 2000, ISBN 0-7615-2729-X, 363 pages",
    /* inform. link */ "http://www.thickbook.com/",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP Fast & Easy Web Development",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/076153055X/wwwphpnet",
    /* author[s]    */ "Julie C. Meloni",
    /* auth link[s] */ "http://zend.com/comm_person.php?id=10",
    /* image        */ "php_fe.jpg",
    /* information  */ "Prima-Tech, July 2000, ISBN 0-7615-3055-X, 436 pages",
    /* inform. link */ "http://www.thickbook.com/",
    /* language     */ "en"
   ),

  array(
    /* title[s]     */ "SAMS Teach Yourself PHP4 in 24 Hours",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0672318040/wwwphpnet",
    /* author[s]    */ "Matt Zandstra",
    /* auth link[s] */ "",
    /* image        */ "zandstra.jpg",
    /* information  */ "Sams, June 2000, ISBN 0-6723-1804-0, 481 pages<br>" .
                       "Also available in " .
                       make_link("http://www.kiskapu.hu/kiskapu/search.phtml?detailed=120449801", "Hungarian"),
    /* inform. link */ "http://www.corrosive.co.uk/",
    /* language     */ "en"
   ),

  array(
    /* title[s]     */ "Web Application Development with PHP 4.0",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0735709971/wwwphpnet",
    /* author[s]    */ array("Tobias Ratschiller", "Till Gerken"),
    /* auth link[s] */ array("http://zend.com/comm_person.php?id=7","http://zend.com/comm_person.php?id=11"),
    /* image        */ "ratschiller_gerken.jpg",
    /* information  */ "Contains Official Zend API Documentation<br>" .
                       "With contributions by Zend Technologies' " .
                       make_link("http://zend.com/comm_person.php?id=12", "Zeev Suraski") . " and " .
                       make_link("http://zend.com/zend/hof/andi.php", "Andi Gutmans") . "<br>\n" .
                       "New Riders Publishing, July 2000, ISBN 0-7357-0997-1, 384 pages",
    /* inform. link */ "http://www.phpwizard.net/book/",
    /* language     */ "en"
   ),

  array(
    /* title[s]     */ "PHP 4 Bible",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/076454716X/wwwphpnet",
    /* author[s]    */ array("Tim Converse", "Joyce Park"),
    /* auth link[s] */ "",
    /* image        */ "bible.jpg",
    /* information  */ "IDG Books Worldwide, August 2000, ISBN 0-7645-4716-X",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP and MySQL Web Development",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0672317842/wwwphpnet",
    /* author[s]    */ array("Luke Welling","Laura Thomson"),
    /* auth link[s] */ "",
    /* image        */ "welling.jpg",
    /* information  */ "Sams, March 2001, ISBN 0-6723-1784-2",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Essential PHP for Web Professionals",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0130889032/wwwphpnet",
    /* author[s]    */ "Christopher Cosentino",
    /* auth link[s] */ "",
    /* image        */ "cosentino.jpg",
    /* information  */ "Prentice Hall, October 2000, ISBN 0-1308-8903-2, 168 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "MySQL and PHP from Scratch",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0789724405/wwwphpnet",
    /* author[s]    */ "Wade Maxfield",
    /* auth link[s] */ "",
    /* image        */ "maxfield.jpg",
    /* information  */ "Que, November 2000, ISBN 0-7897-2440-5, 372 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "A Programmer's Introduction to PHP 4.0",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1893115852/wwwphpnet",
    /* author[s]    */ "W.J. Gilmore",
    /* auth link[s] */ "",
    /* image        */ "wjgilmore.jpg",
    /* information  */ "APress, December 2000, ISBN 1-8931-1585-2, 450 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP Developer's Cookbook",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0672319241/wwwphpnet",
    /* author[s]    */ array("Sterling Hughes","Andrei Zmievski"),
    /* auth link[s] */ array("http://zend.com/zend/hof/sterling.php","http://zend.com/comm_person.php?id=24"),
    /* image        */ "zmievski.jpg",
    /* information  */ "Foreword by " . make_link("http://lerdorf.com/bio.php", "Rasmus Lerdorf") . "<br>\n" .
                       "Sams, November 2000, ISBN 0-6723-1924-1, 505 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Beginning PHP 4",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1861003730/wwwphpnet",
    /* author[s]    */ array("Jon Blan", "Wankyu Choi", "Allan Kent", "Ganesh Prasad", "Chris Ullmann"),
    /* auth link[s] */ "",
    /* image        */ "beginning_php4.jpg",
    /* information  */ "Wrox Press Inc, October 2000, ISBN 1-8610-0373-0, 800 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP Developer's Dictionary",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0672320290/wwwphpnet/",
    /* author[s]    */ array("R. Allen Wyke", "Michael J. Walker", "Robert M. Cox"),
    /* auth link[s] */ "",
    /* image        */ "allen_wyke.jpg",
    /* information  */ "Sams, Dec 2000, ISBN 0-6723-2029-0, 500 pages<br>" .
                       "Also available in " .
                       make_link("http://php.adatnet.hu/Kossuth.ShowIssue/Kossuth.showIssueEvent/415", "Hungarian"),
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP 4 Developer's Guide",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0072127317/wwwphpnet",
    /* author[s]    */ "Blake Schwendiman",
    /* auth link[s] */ "",
    /* image        */ "schwendiman.jpg",
    /* information  */ "Osborne McGraw-Hill, January 2001, ISBN 0-0721-2731-7, 775 pages<br>" .
                       "Also available in " .
                       make_link("http://cyberspace.mht.bme.hu/~cakes/panem_vasarlas_cgi/kiadvanyok.cgi?katid=6&lap=9635453094", "Hungarian"),
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "MySQL/PHP Database Application",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0764535374/wwwphpnet",
    /* author[s]    */ array("Jay Greenspan", "Brad Bulger"),
    /* auth link[s] */ "",
    /* image        */ "greenspan.jpg",
    /* information  */ "Hungry Minds, January 2001, ISBN 0-7645-3537-4, 500 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP Functions Essential Reference",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/073570970X/wwwphpnet",
    /* author[s]    */ array("Zak Greant","Graeme Merrall","Lars Torben Wilson","Brett Michlitsch"),
    /* auth link[s] */ array("http://zend.com/comm_person.php?id=56","http://zend.com/comm_person.php?id=32","http://zend.com/comm_person.php?id=28",false),
    /* image        */ "till_gerken.jpg",
    /* information  */ "New Riders Publishing, September 2001, ISBN 0-7357-0970-X, 768 pages",
    /* inform. link */ "http://www.newriders.com/books/title.cfm?isbn=073570970X",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP For the World Wide Web: A Visual QuickStart Guide",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0201727870/wwwphpnet",
    /* author[s]    */ "Larry Ullman",
    /* auth link[s] */ "",
    /* image        */ "larry_php.jpg",
    /* information  */ "Peachpit Press, April 2001, ISBN 0-201-72787-0, 278 pages",
    /* inform. link */ "http://www.DMCinsights.com/php",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Build Your Own Database Driven Website Using PHP & MySQL",
    /* title_link   */ "http://sitepoint.com/books/?bookid=BookInfoSP",
    /* author[s]    */ "Kevin Yank",
    /* auth link[s] */ "",
    /* image        */ "sitepoint.gif",
    /* information  */ "SitePoint, August 2001, ISBN 0-9579218-0-2, 242 pages",
    /* inform. link */ "http://sitepoint.com/books/?bookid=BookInfoSP",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Php : Your Visual Blueprint for Creating Open Source, Server-Side Content",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0764535617/wwwphpnet",
    /* author[s]    */ array("Paul Whitehead", "Joel Desamero"),
    /* auth link[s] */ "",
    /* image        */ "phpvisual.jpg",
    /* information  */ "Hungry Minds, June 2001, ISBN 0-7645-3561-7, 350 pages",
    /* inform. link */ "http://catalog.hungryminds.com/product.asp?isbn=0764535617",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Php Black Book",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1588800539/wwwphpnet",
    /* author[s]    */ "Peter Moulding",
    /* auth link[s] */ "",
    /* image        */ "moulding.jpg",
    /* information  */ "The Coriolis Group, October 2001, ISBN 0-7645-3561-7, 880 pages<br>" .
                       "Also available in " .
                       make_link("http://www.interbook.hu/index.php?op=ShowProduct&id=2213", "Hungarian"),
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP by Example",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0789725681/wwwphpnet",
    /* author[s]    */ "Toby Butzon",
    /* auth link[s] */ "",
    /* image        */ "phpexample.jpg",
    /* information  */ "Que Publishing, November 2001, ISBN 0-7897-2568-1, 450 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Dreamweaver MX: PHP Web Development",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1904151116/wwwphpnet",
    /* author[s]    */ array("Bruno Mairlot","Gareth Downes-Powell","Tim Green"),
    /* auth link[s] */ "",
    /* image        */ "dwmx.gif",
    /* information  */ "glasshaus, July 2002, ISBN 1-9041-5111-6, 320 pages",
    /* inform. link */ "http://www.glasshaus.com/bookInfo.asp?bookId=61",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PHP kurz & gut",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3897212250/wwwphpnet07",
    /* author[s]    */ array("Rasmus Lerdorf", "Ingo Marks (Deutsche &Uuml;bersetzung)"),
    /* auth link[s] */ array("http://lerdorf.com/bio.php", "http://www.oreilly.de/catalog/phptbger/translator.html"),
    /* image        */ "rasmus-kug.gif",
    /* information  */ "O'Reilly, June 2000, ISBN 3-89721-255-0, 111 pages",
    /* inform. link */ "http://www.oreilly.de/catalog/phptbger/index.html",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4. Dynamische Webauftritte professionell realisieren",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827258774/wwwphpnet07",
    /* author[s]    */ array("Egon Schmid", "Christian Cartus"),
    /* auth link[s] */ array("http://zend.com/zend/hof/schmid.php", false),
    /* image        */ "schmid_cartus.jpg",
    /* information  */ "Mit einem Vorwort von ".make_link("http://www.zend.com/zend/hof/andi.php", "Andi Gutmans") .
                       " und " . make_link("http://www.zend.com/comm_person.php?id=12", "Zeev Suraski") . "<br>\n" .
                       "Unter Mitarbeit von " .
                       make_link("http://www.zend.com/comm_person.php?id=38", "Wolfgang Drews, ") .
                       make_link("http://www.zend.com/comm_person.php?id=33", "Hartmut Holzgraefe, ") .
                       make_link("http://www.zend.com/comm_person.php?id=37", "Uwe Steinmann") .
                       " und Christian Wenz<br>\n" .
                       "Markt+Technik Verlag, New Technology, December 2000, ISBN 3-8272-5877-4, 639 pages",
    /* inform. link */ "http://www.php-buch.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP - Dynamische websites professioneel ondersteunen",
    /* title_link   */ "http://www.pearsoneducation.nl/php3/boek1test.html?isbn=9043001406",
    /* author[s]    */ array("Egon Schmid", "Christian Cartus", "Richard Blume"),
    /* auth link[s] */ array("http://zend.com/zend/hof/schmid.php", false, false),
    /* image        */ "book-php-dutch.gif",
    /* information  */ "Addison Wesley Longman, April 2000, ISBN 90-430-0140-6, 477 pages",
    /* inform. link */ "",
    /* language     */ "nl"
  ),

  array(
    /* title[s]     */ array("PHP 4: Grundlagen und Profiwissen","Webserver-Programmierung unter Windows und Linux"),
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3446215468/wwwphpnet07",
    /* author[s]    */ "J&ouml;rg Krause",
    /* auth link[s] */ "",
    /* image        */ "joerg_krause.jpg",
    /* information  */ "Hanser, Nov 2000, ISBN 3-446-21546-8, 1168 pages",
    /* inform. link */ "http://www.php.comzept.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ array("PHP 4","Webserver-Programmierung f&uuml;r Um- und Einsteiger"),
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3934358632/wwwphpnet07",
    /* author[s]    */ "Thomas Theis",
    /* auth link[s] */ "",
    /* image        */ "theis.gif",
    /* information  */ "Galileo Press, May 2000, ISBN 3-934358-63-2, 354 pages",
    /* inform. link */ "http://www.galileo-press.de/katalog/einzel.asp?ID=202",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3826690044/wwwphpnet07",
    /* author[s]    */ "Dr. Susanne Wigard",
    /* auth link[s] */ "",
    /* image        */ "susanne_wigard.jpg",
    /* information  */ "BHV, December 2000, ISBN 3-8266-9004-4, 448 pages",
    /* inform. link */ "http://www.bhv.net/bhv/buchreihen/deinst_1110_3.html",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 und MySQL",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3815822033/wwwphpnet07",
    /* author[s]    */ array("Rolf D. Stoll", "Gudrun Anna Leierer"),
    /* auth link[s] */ "",
    /* image        */ "databecker.gif",
    /* information  */ "Data Becker, July 2001, ISBN 3-8158-2203-3, 414 pages",
    /* inform. link */ "http://www.databecker.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 - Tutorial & Referenz",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3932311795/wwwphpnet07",
    /* author[s]    */ "Klaus Schmidt",
    /* auth link[s] */ "",
    /* image        */ "klaus_schmidt.jpg",
    /* information  */ "Computer & Literatur Verlag GmbH, November 2000, ISBN 3-932-1179-5, 832 pages",
    /* inform. link */ "http://www.ksweb.de/index.php?page=buch",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Jetzt lerne ich PHP 4",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827258839/wwwphpnet07",
    /* author[s]    */ "Matt Zandstra",
    /* auth link[s] */ "",
    /* image        */ "matt_zandstra.jpg",
    /* information  */ "Markt+Technik Verlag, December 2000, ISBN 3-8272-5883-9, 515 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "Webanwendungen mit PHP 4.0 entwickeln",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827317304/wwwphpnet07",
    /* author[s]    */ array("Tobias Ratschiller","Till Gerken"),
    /* auth link[s] */ array("http://zend.com/comm_person.php?id=7","http://zend.com/comm_person.php?id=11"),
    /* image        */ "tobias_and_till.jpg",
    /* information  */ "Addison-Wesley, Jan 2001, ISBN 3-8273-1730-4, 400 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3826680022/wwwphpnet07",
    /* author[s]    */ array("Uwe Hess", "G&uuml;nther Karl"),
    /* auth link[s] */ "",
    /* image        */ "uwe_and_gunther.jpg",
    /* information  */ "bhv, Dec 2000, ISBN 3-8266-8002-2, 764 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),


  array(
    /* title[s]     */ "PHP 4 f&uuml;r Profis. Werkzeugkiste und Kochbuch",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3898421163/wwwphpnet07",
    /* author[s]    */ array("Helmut Dittrich","J&uuml;rgen Mellenthin"),
    /* auth link[s] */ "",
    /* image        */ "dittrich.jpg",
    /* information  */ "Galileo Press, January 2001, ISBN 3-8984-2116-3, 500 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 Webbook",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/381550502X/wwwphpnet07",
    /* author[s]    */ array("Mark Kronsbein", "Thomas Weinert"),
    /* auth link[s] */ array("http://www.zend.com/comm_person.php?id=36", "http://www.zend.com/comm_person.php?id=61"),
    /* image        */ "mark_thomas.jpg",
    /* information  */ "Sybex, March 2001, ISBN 3-8984-2116-3, 500 pages",
    /* inform. link */ "http://www.phpbuch.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PC Spicker PHP",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3815500613/wwwphpnet07",
    /* author[s]    */ array("Mark Kronsbein", "Thomas Weinert"),
    /* auth link[s] */ array("http://www.zend.com/comm_person.php?id=36", "http://www.zend.com/comm_person.php?id=61"),
    /* image        */ "phpspicker.jpg",
    /* information  */ "Sybex, May 2001, ISBN 3-8155-0061-3 , 120 pages",
    /* inform. link */ "http://www.phpbuch.de/",
    /* language     */ "de"
  ),

 array(
    /* title[s]     */ "PHP Afterwork",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3815505178/wwwphpnet07",
    /* author[s]    */ array("Mark Kronsbein", "Clemens Gutweiler", "Thomas Weinert", "Peter Petermann"),
    /* auth link[s] */ array("http://www.zend.com/comm_person.php?id=36", false, "http://www.zend.com/comm_person.php?id=61", "http://www.zend.com/comm_person.php?id=60"),
    /* image        */ "afterworkphp.jpg",
    /* information  */ "Sybex, July 2001, ISBN 3-8155-0517-8, 352 pages",
    /* inform. link */ "http://www.phpbuch.de/",
    /* language     */ "de"
   ),

 array(
    /* title[s]     */ "PHP Ge-Packt",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/382660685X/wwwphpnet07",
    /* author[s]    */ array("Christoph Aigner", "Thomas Strohmaier"),
    /* auth link[s] */ "",
    /* image        */ "aigner.jpg",
    /* information  */ "MITP, 2001, ISBN 3-8266-0685-X, 512 pages",
    /* inform. link */ "",
    /* language     */ "de"
   ),

  array(
    /* title[s]     */ "PHP 4 Developer's Guide - Anleitungen und L�sungen f�r einen professionellen Einsatz",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827261740/wwwphpnet07",
    /* author[s]    */ array("Sterling Hughes", "Andrei Zmievski"),
    /* auth link[s] */ array("http://zend.com/zend/hof/sterling.php", "http://zend.com/zend/hof/andrei.php"),
    /* image        */ "sterling.jpg",
    /* information  */ "October 2001, ISBN 3-8272-6174-0, 538 pages",
    /* inform. link */ "",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PHP 4 Programmering",
    /* title_link   */ "http://pagina.se/bok.html?20660",
    /* author[s]    */ array("Jesper Ek", "Ulrika Eriksson"),
    /* auth link[s] */ "",
    /* image        */ "ek-eriksson.gif",
    /* information  */ "February 2001, ISBN 9-1636-0660-7, 220 pages",
    /* inform. link */ "",
    /* language     */ "se"
  ),

  array(
    /* title[s]     */ "Webbprogrammering met PHP",
    /* title_link   */ "http://www.studentlitteratur.se/shop/default.html?artnr=7844-01",
    /* author[s]    */ "Viktor Jonsson",
    /* auth link[s] */ "",
    /* image        */ "jonsson.gif",
    /* information  */ "September, 2001, ISBN 91-44-01941-6, 390 pages",
    /* inform. link */ "",
    /* language     */ "se"
  ),

  array(
    /* title[s]     */ "Gu&iacute;a Pr&aacute;cticas PHP 4",
    /* title_link   */ "http://www.AnayaMultimedia.es/",
    /* author[s]    */ "Esteban Trigos",
    /* auth link[s] */ "",
    /* image        */ "esteban_trigo.gif",
    /* information  */ "Anaya Multimedia, December 2000, ISBN 8-4415-1079-2, 288 pages",
    /* inform. link */ "http://www.en-linea.net/",
    /* language     */ "es"
  ),

  array(
    /* title[s]     */ "Creation de sitios web con PHP 4",
    /* title_link   */ "http://www.mcgraw-hill.es/",
    /* author[s]    */ array ("Javier Gil", "Jorge Tejedore", "Augustin Yag�e"),
    /* auth link[s] */ "",
    /* image        */ "gil.jpg",
    /* information  */ "McGraw Hill, October 2001, ISBN 84-481-3209-2, 568 pages",
    /* inform. link */ "http://www.mcgraw-hill.es/",
    /* language     */ "es"
  ),

  array(
    /* title[s]     */ "Guide officiel PHP",
    /* title_link   */ "http://www.nexen.net/manuelphp/bdc.php.pdf",
    /* author[s]    */ array("PHP documentation Team","Damien Seguy"),
    /* auth link[s] */ "",
    /* image        */ "docfr.jpg",
    /* information  */ "MicroApplication, Decembre 2001, ISBN 2-7429-2320-9, 904 pages",
    /* inform. link */ "http://www.nexen.net/manuelphp/",
    /* language     */ "fr"
  ),

  array(
    /* title[s]     */ "Pages Web dynamiques avec ASP, PHP, SQL",
    /* title_link   */ "http://www.amazon.fr/exec/obidos/ASIN/2744007099/wwwphpnet0f",
    /* author[s]    */ array("Jean-Marc Herellier","Philippe Merigod"),
    /* auth link[s] */ "",
    /* image        */ "herellier.gif",
    /* information  */ "",
    /* inform. link */ "",
    /* language     */ "fr"
  ),

  array(
    /* title[s]     */ "Programmation PHP",
    /* title_link   */ "http://www.amazon.fr/exec/obidos/ASIN/2744009237/wwwphpnet0f",
    /* author[s]    */ "Leon Atkinson",
    /* auth link[s] */ "http://zend.com/comm_person.php?id=30",
    /* image        */ "atkinson_fr.gif",
    /* information  */ "Translation of Leon Atkinson's book",
    /* inform. link */ "",
    /* language     */ "fr"
  ),

  array(
    /* title[s]     */ "Programmation Web avec PHP",
    /* title_link   */ "http://www.amazon.fr/exec/obidos/ASIN/2212091133/wwwphpnet0f",
    /* author[s]    */ array("Laurent Lacroix","Christophe Lauer","Nicolas Leprince","Christophe Boggero"),
    /* auth link[s] */ "",
    /* image        */ "lacroix.gif",
    /* information  */ "April 2000, ISBN 2-212-09113-3, 364 pages",
    /* inform. link */ "",
    /* language     */ "fr"
  ),

  array(
    /* title[s]     */ "PHP et MySQL D�veloppement Web",
    /* title_link   */ "http://www.amazon.fr/exec/obidos/ASIN/2744011746/wwwphpnet0f",
    /* author[s]    */ array("Luke Welling", "Laura Thomson"),
    /* auth link[s] */ "",
    /* image        */ "welling_fr.gif",
    /* information  */ "Campus Press, ISBN 2-7440-1174-6, July 24 2001, 930 pages",
    /* inform. link */ "http://www.campuspress.net/store/book_info.asp?ref=4&nav=&maincat=&id=1174",
    /* language     */ "fr"
  ),

  array(
    /* title[s]     */ array("PHP tvorba interaktivnich internetovych aplikaci", "(PHP developing interactive internet applications)"),
    /* title_link   */ "http://www.kosek.cz/php/",
    /* author[s]    */ "Jiri Kosek",
    /* auth link[s] */ "http://www.kosek.cz",
    /* image        */ "czech-book.jpg",
    /* information  */ "Grada Publishing, April 20 1999, ISBN 80-7169-373-1, 492 pages",
    /* inform. link */ "http://www.kosek.cz/php/",
    /* language     */ "cz"
  ),

  array(
    /* title[s]     */ "PHP Web-DB Programming Guide",
    /* title_link   */ "http://www.wowbook.com/wow/book_info/book-info.asp?isbn=ISBN89%2D381%2D0239%2D4",
    /* author[s]    */ "Jung Jinho",
    /* auth link[s] */ "",
    /* image        */ "korean-book.jpg",
    /* information  */ "",
    /* inform. link */ "",
    /* language     */ "kr"
  ),

  array(
    /* title[s]     */ "PHP Web Programming with ORACLE Database",
    /* title_link   */ "http://www.wowbook.com/book/info/book_detail.asp?isbn=ISBN89-87939-26-X",
    /* author[s]    */ "Kim Sung-Sik",
    /* auth link[s] */ "",
    /* image        */ "korean_book.gif",
    /* information  */ "",
    /* inform. link */ "",
    /* language     */ "kr"
  ),

  array(
    /* title[s]     */ "CGI & PHP",
    /* title_link   */ "http://ychat.pe.kr/",
    /* author[s]    */ "Youn Sukbum",
    /* auth link[s] */ "",
    /* image        */ "cgiphp.jpg",
    /* information  */ "",
    /* inform. link */ "",
    /* language     */ "kr"
  ),

  array(
    /* title[s]     */ "PHP Bible",
    /* title_link   */ "http://php.wilson.gs/bible",
    /* author[s]    */ "Wilson Peng",
    /* auth link[s] */ "",
    /* image        */ "wilson.jpg",
    /* information  */ "",
    /* inform. link */ "",
    /* language     */ "cn"
  ),

  array(
    /* title[s]     */ array("Using PHP and MySQL", "With FreeBSD and Apache"),
    /* title_link   */ "http://www.drmaster.com.tw/information.asp?�Ѹ�=DB20023",
    /* author[s]    */ "C.C.J.",
    /* auth link[s] */ "",
    /* image        */ "db20023.gif",
    /* information  */ "July 1999, ISBN 957-527-168-8", 
    /* inform. link */ "http://www.dw.com.tw/book.html",
    /* language     */ "cn"
  ),

  array(
    /* title[s]     */ "Examples of PHP and MySQL",
    /* title_link   */ "http://www.drmaster.com.tw/information.asp?�Ѹ�=DB20029",
    /* author[s]    */ "C.C.J.",
    /* auth link[s] */ "",
    /* image        */ "db20029.gif",
    /* information  */ "February 2000, ISBN 957-527-224-2",
    /* inform. link */ "http://www.dw.com.tw/book.html",
    /* language     */ "cn"
  ),

  array(
    /* title[s]     */ "PHP tettei kouryaku",
    /* title_link   */ "http://books.softbank.co.jp/bookweb.nsf/7218069992c69510492566350001471a/5ab16e3b3dcf4ef7492566ff0048baac?OpenDocument",
    /* author[s]    */ array("Michihide Hotta","Tatsuo Ishii","Rui Hirokawa"),
    /* auth link[s] */ array(false,false,"http://www.cityfujisawa.ne.jp/%7Elouis/"),
    /* image        */ "japanese-book.gif",
    /* information  */ "Sep 1999, ISBN 4-7973-0865-6",
    /* inform. link */ "",
    /* language     */ "jp"
  ),

  array(
    /* title[s]     */ "Tanuljuk meg a PHP4 haszn�lat�t 24 �ra alatt",
    /* title_link   */ "http://www.kiskapu.hu/kiskapu/search.phtml?detailed=120449801",
    /* author[s]    */ "Matt Zandstra",
    /* auth link[s] */ "",
    /* image        */ "zandstra_hu.jpg",
    /* information  */ "Kiskapu, Aug 2001, ISBN 963-9301-30-2, 560 pages",
    /* inform. link */ "http://www.kiskapu.hu/kiskapu/search.phtml?detailed=120449801",
    /* language     */ "hu"
  ),

  array(
    /* title[s]     */ "PHP Halad�knak",
    /* title_link   */ "http://www.interbook.hu/index.php?op=ShowProduct&id=2213",
    /* author[s]    */ "Peter Moulding",
    /* auth link[s] */ "",
    /* image        */ "phpblack_hu.jpg",
    /* information  */ "Perfact-Pro, March 2002, ISBN 963-0095-58-0, 768 pages + CD",
    /* inform. link */ "http://www.interbook.hu/index.php?op=ShowProduct&id=2213",
    /* language     */ "hu"
  ),

  array(
    /* title[s]     */ "Webvil�g PHP4 Fejleszt�k k�zik�nyve 1. k�tet",
    /* title_link   */ "http://cyberspace.mht.bme.hu/~cakes/panem_vasarlas_cgi/kiadvanyok.cgi?katid=6&lap=9635453094",
    /* author[s]    */ "Blake Schwendiman",
    /* auth link[s] */ "",
    /* image        */ "blake_hu.jpg",
    /* information  */ "Panem, Dec 2001, ISBN 963-5453-09-4, 422 pages",
    /* inform. link */ "http://cyberspace.mht.bme.hu/~cakes/panem_vasarlas_cgi/kiadvanyok.cgi?katid=6&lap=9635453094",
    /* language     */ "hu"
  ),

  array(
    /* title[s]     */ "Webvil�g PHP4 Referenciak�nyv 2. k�tet",
    /* title_link   */ "http://cyberspace.mht.bme.hu/~cakes/panem_vasarlas_cgi/kiadvanyok.cgi?katid=6&lap=9635453108",
    /* author[s]    */ "Blake Schwendiman",
    /* auth link[s] */ "",
    /* image        */ "blake_hu.jpg",
    /* information  */ "Panem, Feb 2002, ISBN 963-5453-10-8, 508 pages",
    /* inform. link */ "http://cyberspace.mht.bme.hu/~cakes/panem_vasarlas_cgi/kiadvanyok.cgi?katid=6&lap=9635453108",
    /* language     */ "hu"
  ),

  array(
    /* title[s]     */ "PHP Fejleszt�k K�zik�nyve",
    /* title_link   */ "http://php.adatnet.hu/Kossuth.ShowIssue/Kossuth.showIssueEvent/415",
    /* author[s]    */ array("R. Allen Wyke", "Michael J. Walker", "Robert M. Cox"),
    /* auth link[s] */ "",
    /* image        */ "devdict_hu.jpg",
    /* information  */ "Kossuth, May 2002, ISBN 963-0943-36-0, 573 pages + CD",
    /* inform. link */ "http://php.adatnet.hu/Kossuth.ShowIssue/Kossuth.showIssueEvent/415",
    /* language     */ "hu"
  ),

  array(
    /* title[s]     */ "PHP Guia de Consulta R&aacute;pida",
    /* title_link   */ "http://www.livcultura.com.br/scripts/cultura/resenha/resenha.asp?nitem=320216",
    /* author[s]    */ "Herbert G. Fischer",
    /* auth link[s] */ "",
    /* image        */ "fischer.jpg",
    /* information  */ "Jan 2000, ISBN 8-5851-8469-8",
    /* inform. link */ "http://phpclasses.UpperDesign.com/products.html/id/8585184698",
    /* language     */ "pt"
  ),

  array(
    /* title[s]     */ "Desenvolvendo Websites com PHP 4",
    /* title_link   */ "http://www.temporeal.com.br/mod_perl/livraria.pl?acao=ver_detalhes&isbn=8575220039&volume=1&ano_publ=2001&rnd=16354996126232",
    /* author[s]    */ "Juliano Niederauer",
    /* auth link[s] */ "",
    /* image        */ "niederauer.jpg",
    /* information  */ "2001, ISBN 85-7522-003-9, 256 pages",
    /* inform. link */ "http://www.cursophp.net/livro/",
    /* language     */ "pt"
  ),

  array(
    /* title[s]     */ "PHP Guia Do Desenvolvedor",
    /* title_link   */ "http://www.siciliano.com.br/livro.asp?orn=LSE&Tipo=2&ID=241501",
    /* author[s]    */ "Sterling Hughes",
    /* auth link[s] */ "",
    /* image        */ "phpguida_pt.gif",
    /* information  */ "2001, ISBN 85-7251-584-4, 528 pages",
    /* inform. link */ "http://www.siciliano.com.br/livro.asp?orn=LSE&Tipo=2&ID=241501",
    /* language     */ "pt"
  ),

  array(
    /* title[s]     */ "PHP e MySQL - Desenvolvimento Web",
    /* title_link   */ "http://www.campus.com.br/catalogo/livro.cfm?id=20821",
    /* author[s]    */ array("Luke Welling", "Laura Thomson"),
    /* auth link[s] */ "",
    /* image        */ "welling_br.gif",
    /* information  */ "Editora Campus, July 2001, ISBN 8-5352-0821-6",
    /* inform. link */ "http://http://www.livcultura.com.br/scripts/cultura/resenha/resenha.asp?589959",
    /* language     */ "pt"
  ),

  array(
    /* title[s]     */ "PHP com XML - Guia de Consulta R&aacute;pida",
    /* title_link   */ "http://www.niederauer.com.br/livros/phpxml/",
    /* author[s]    */ "Juliano Niederauer",
    /* auth link[s] */ "",
    /* image        */ "phpxml_br.gif",
    /* information  */ "Novatec Editora, ISBN 8-5752-2025-X, 96 pages",
    /* inform. link */ "http://www.niederauer.com.br/livros/phpxml/",
    /* language     */ "pt"
  ),

  array(
    /* title[s]     */ "Start p� PHP",
    /* title_link   */ "http://www.ibooks.dk/default.asp?mode=show_item&vare_id=106131",
    /* author[s]    */ "Thomas G. Kristensen",
    /* auth link[s] */ "",
    /* image        */ "startphpdk.gif",
    /* information  */ "ISBN 87-7843-408-4",
    /* inform. link */ "http://www.ibooks.dk/default.asp?mode=show_item&vare_id=106131",
    /* language     */ "dk"
  ),
  
  array(
    /* title[s]     */ "PHP. Web scripting",
    /* title_link   */ "http://www.internetbookshop.it/ser/serdsp.asp?shop=1415&isbn=8883780132",
    /* author[s]    */ "Rasmus Lerdorf",
    /* auth link[s] */ "http://lerdorf.com/bio.php",
    /* image        */ "8883780132.jpg",
    /* information  */ "Hops Libri, 2000, ISBN 8883780132, 148 pages",
    /* inform. link */ "http://www.internetbookshop.it/ser/serdsp.asp?shop=1415&isbn=8883780132",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP - I compatti",
    /* title_link   */ "http://212.90.7.34/mgh/catLibro.asp?item_id=1289",
    /* author[s]    */ "Giovanni Branca",
    /* auth link[s] */ "",
    /* image        */ "8838642605.gif",
    /* information  */ "McGraw-Hill, April 2002, ISBN 88 386 4260-5, 232 pages",
    /* inform. link */ "http://www.mcgraw-hill.it/main.html",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Introduzione a PHP 4.0",
    /* title_link   */ "http://education.mondadori.it/Libri/SchedaLibro.asp?IdLibro=88-8331-294-5",
    /* author[s]    */ "W. J. Gilmore",
    /* auth link[s] */ "http://education.mondadori.it/Libri/SchedaAutore.asp?IdAutore=521",
    /* image        */ "8883312945.gif",
    /* information  */ "Mondadori Informatica Education, 02 October 2001, ISBN 88-8331-294-5, 464 pages",
    /* inform. link */ "http://education.mondadori.it/libri",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP Per il World Wide Web",
    /* title_link   */ "http://hpe.pearsoned.it/html/libri/PHPwww.htm",
    /* author[s]    */ "Larry Ullman",
    /* auth link[s] */ "",
    /* image        */ "8871921216.gif",
    /* information  */ "Addison-Wesley, September 2001, ISBN 88-7192-121-6, 300 pages",
    /* inform. link */ "http://hpe.pearsoned.it/home2/home.htm",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP4 Guida per lo Sviluppatore",
    /* title_link   */ "",
    /* author[s]    */ array("Choi","Kent","Lea","Prasad","Ullman"),
    /* auth link[s] */ "",
    /* image        */ "8800000000.gif",
    /* information  */ "Hoeply-Wrox, July 2001, 678 pages",
    /* inform. link */ "",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Sviluppare applicazioni per database con MySQL/PHP",
    /* title_link   */ "http://www.apogeonline.com/libri/00866/scheda",
    /* author[s]    */ array("Greenspan","Bulger"),
    /* auth link[s] */ "",
    /* image        */ "8873038662.gif",
    /* information  */ "Apogeo, July 2001, ISBN 88-7303-866-2, 576 pages",
    /* inform. link */ "http://www.apogeonline.com/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP Soluzioni professionali per lo sviluppatore",
    /* title_link   */ "http://www.apogeonline.com/libri/00852/scheda",
    /* author[s]    */ array("S. Hughes","A. Zmievski"),
    /* auth link[s] */ "",
    /* image        */ "8873038522.gif",
    /* information  */ "Apogeo, May 2001, ISBN 88-7303-852-2, 448 pages",
    /* inform. link */ "http://www.apogeonline.com/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Guida a PHP 4",
    /* title_link   */ "http://212.90.7.34/mgh/catLibro.asp?item_id=572",
    /* author[s]    */ array("Tim Converse","Joyce Park"),
    /* auth link[s] */ "",
    /* image        */ "8838641714.gif",
    /* information  */ "McGraw-Hill, March 2001, ISBN 88 386 4171-4, 704 pages",
    /* inform. link */ "http://www.mcgraw-hill.it/main.html",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Imparare PHP 4 in 6 ore",
    /* title_link   */ "http://www.tecnichenuove.com/cgi-bin/tecnichenuove.storefront/3d7c9eea00f18c06273fc3787a0a06c4/Product/View/1251X",
    /* author[s]    */ "Luca Cattaneo",
    /* auth link[s] */ "",
    /* image        */ "884811251X.gif",
    /* information  */ "Tecniche Nuove, March 2001, ISBN 88-481-1251X, 192 pages",
    /* inform. link */ "http://www.tecnichenuove.com/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP",
    /* title_link   */ "http://www.tecnichenuove.com/cgi-bin/tecnichenuove.storefront/3d7c9eea00f18c06273fc3787a0a06c4/Product/View/12579",
    /* author[s]    */ "Christopher Cosentino",
    /* auth link[s] */ "http://www.tecnichenuove.com/cgi-bin/tecnichenuove.storefront/3d7c9eea00f18c06273fc3787a0a06c4/Product/View/12579#biografia",
    /* image        */ "8848112579.gif",
    /* information  */ "Tecniche Nuove, March 2001, ISBN 88-481-12579, 160 pages",
    /* inform. link */ "http://www.tecnichenuove.com/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP 4.0 - Applicazioni Web",
    /* title_link   */ "http://hpe.pearsoned.it/html/libri/php4.htm",
    /* author[s]    */ array("Tobias Ratschiller","Till Gerken"),
    /* auth link[s] */ "",
    /* image        */ "8871921054.gif",
    /* information  */ "Addison-Wesley, March 2001, ISBN 88-7192-105-4, 600 pages",
    /* inform. link */ "http://hpe.pearsoned.it/home2/home.htm",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Programmare con PHP 4",
    /* title_link   */ "http://www.apogeonline.com/libri/00778/scheda",
    /* author[s]    */ "Thomas Theis",
    /* auth link[s] */ "",
    /* image        */ "887303778X.gif",
    /* information  */ "Apogeo, February 2001, ISBN 88-7303-778-X, 312 pages",
    /* inform. link */ "http://www.apogeonline.com/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Imparare PHP 4 in 24 ore",
    /* title_link   */ "http://www.tecnichenuove.com/cgi-bin/tecnichenuove.storefront/3d7c9eea00f18c06273fc3787a0a06c4/Product/View/11726",
    /* author[s]    */ "Matt Zandstra",
    /* auth link[s] */ "http://www.tecnichenuove.com/cgi-bin/tecnichenuove.storefront/3d7c9eea00f18c06273fc3787a0a06c4/Product/View/11726#biografia",
    /* image        */ "8848111726.gif",
    /* information  */ "Tecniche Nuove, November 2000, ISBN 88-481-11726, 432 pages",
    /* inform. link */ "http://www.tecnichenuove.com/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "PHP PER ESEMPI",
    /* title_link   */ "http://www.jacksonlibri.it/servizi/Libri/schede/2590/",
    /* author[s]    */ "Meloni Julie",
    /* auth link[s] */ "",
    /* image        */ "8825618778.gif",
    /* information  */ "Jackson Libri, ISBN 8825618778, 416 pages",
    /* inform. link */ "http://www.jacksonlibri.it/servizi/libri/",
    /* language     */ "it"
  ),

  array(
    /* title[s]     */ "Php Pocket Reference",
    /* title_link   */ "http://www.hopslibri.com/store/hopm0013.shtml",
    /* author[s]    */ "Rasmus Lerdorf",
    /* auth link[s] */ "",
    /* image        */ "8883780132.gif",
    /* information  */ "O' Reilly, ISBN 88-8378-013-2, 128 pages",
    /* inform. link */ "http://www.hopslibri.com/",
    /* language     */ "it"
  ),
  ),


  "Related" => array(

  array(
    /* title[s]     */ "PostgreSQL: Grundlagen - Praxis - Anwendungsentwicklung mit PHP",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3898641759/wwwphpnet07",
    /* author[s]    */ "Cornelia Boenigk",
    /* auth link[s] */ "",
    /* image        */ "pgsql.jpg",
    /* information  */ "dpunkt.verlag, Sept 2002, ISBN 3-89864-175-9, 426 pages",
    /* inform. link */ "http://www.pgsql.info/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ array("Scriptsprachen f&uuml;r dynamische Webauftritte", "JavaScript, VBScript, ASP, Perl, PHP, XML"),
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3446214135/wwwphpnet07",
    /* author[s]    */ "Prof. Dr. Wolfgang Dehnhardt",
    /* auth link[s] */ "",
    /* image        */ "dehnhardt.jpg",
    /* information  */ "Hanser Verlag, Dec 2000, ISBN 3-446-21413-5, 452 pages",
    /* inform. link */ "http://www.wsite.de/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "PostgreSQL: Introduction and Concepts",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0201703319/wwwphpnet",
    /* author[s]    */ "Bruce Momjian",
    /* auth link[s] */ "",
    /* image        */ "postgresql.jpg",
    /* information  */ "Addison-Wesley Pub Co, Dec 2000, ISBN 0-2017-0331-9, 462 pages",
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "PostgreSQL - Guia de Consulta Rapida",
    /* title_link   */ "http://www.niederauer.com.br/livros.php#postgres",
    /* author[s]    */ "Juliano Niederauer",
    /* auth link[s] */ "",
    /* image        */ "guiapg.gif",
    /* information  */ "novatec, ISBN 85-7522-012-8, 128 pages",
    /* inform. link */ "",
    /* language     */ "pt"
  ),

  array(
    /* title[s]     */ "MySQL and mSQL (Nutshell Series)",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1565924347/wwwphpnet",
    /* author[s]    */ array("Randy Jay Yarger","George Reese","Tim King"),
    /* auth link[s] */ "",
    /* image        */ "mysql-book.gif",
    /* information  */ "O'Reilly & Associates, July 1999, ISBN 1-56592-434-7, 487 pages<br>\n" .
                       "Also available in " .
                       make_link("http://www.books.ru/cgi-bin/v3/book_inf_code.cgi?5872","Russian"),
    /* inform. link */ "",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "MySQL. Einf&uuml;hrung, Programmierung, Referenz",
    /* title_link   */ "http://www.amazon.de/exec/obidos/ASIN/3827317622/wwwphpnet07",
    /* author[s]    */ "Michael Kofler",
    /* auth link[s] */ "",
    /* image        */ "mysqlkofler.jpg",
    /* information  */ "Addison-Wesley - Pearson Education Deutschland, March 2001, ISBN 3-82731-762-2, 624 pages<br>\n",
    /* inform. link */ "http://www.kofler.cc/mysql/",
    /* language     */ "de"
  ),

  array(
    /* title[s]     */ "MySQL",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0735709211/wwwphpnet",
    /* author[s]    */ "Paul DuBois",
    /* auth link[s] */ "",
    /* image        */ "dubois.jpg",
    /* information  */ "Foreword by " . make_link("http://zend.com/zend/hof/widenius.php", "Michael \"Monty\" Widenius") .
                       "<br>New Riders, December 1999, ISBN 0-7357-0921-1, 756 pages" .
                       "<br>Also available in " .
                       make_link("http://www.amazon.fr/exec/obidos/ASIN/2744008826/wwwphpnet0f", "French") .
                       " and " . make_link("http://www.amazon.de/exec/obidos/ASIN/382725793X/wwwphpnet07", "German"),
    /* inform. link */ "http://www.newriders.com/books/title.cfm?isbn=0735709211",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Webmaster in a Nutshell (Nutshell Series)",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1565923251/wwwphpnet",
    /* author[s]    */ array("Stephen Spainhour","Robert Eckstein"),
    /* auth link[s] */ "",
    /* image        */ "webmaster-book.gif",
    /* information  */ "Includes a large chapter on PHP written by " .
                       make_link("http://lerdorf.com/bio.php", "Rasmus Lerdorf") . "<br>\n" .
                       "O'Reilly & Associates, June 1999, 2nd edition, ISBN 1-5659-2325-1, 523 pages",
    /* inform. link */ "http://www.oreilly.com/catalog/webmaster2/",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ array("Open Source Development with CVS","Learn how to work with Open Source Software"),
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1576104907/wwwphpnet",
    /* author[s]    */ "Karl Franz Fogel",
    /* auth link[s] */ "",
    /* image        */ "cvsbook.gif",
    /* information  */ "Coriolis, 1999, ISBN 1-57610-490-7, 316 pages",
    /* inform. link */ "http://cvsbook.red-bean.com/",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "CVS Pocket Reference",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/0596000030/wwwphpnet",
    /* author[s]    */ "Gregor N. Purdy",
    /* auth link[s] */ "",
    /* image        */ "cvspr.gif",
    /* information  */ "O'Reilly, August 2000, ISBN 0-5960-0003-0, 79 pages",
    /* inform. link */ "http://www.oreilly.com/catalog/cvspr/",
    /* language     */ "en"
  ),

  array(
    /* title[s]     */ "Mastering Regular Expressions",
    /* title_link   */ "http://www.amazon.com/exec/obidos/ASIN/1565922573/wwwphpnet",
    /* author[s]    */ array("Jeffrey E. Friedl","Andy Oram"),
    /* auth link[s] */ "",
    /* image        */ "regex.s.gif",
    /* information  */ "O'Reilly, January 1997, ISBN 1-5659-2257-3, 368 pages",
    /* inform. link */ "http://www.oreilly.com/catalog/regex/",
    /* language     */ "en"
  )
  )
);

// Show a table row for one book
function showBook($one_book) {

  global $langs;
  list($title, $title_link, $author, $author_link, $image, $info, $info_link, $lang) = $one_book;

  // Default to english
  if (!$lang || !isset($langs[$lang]) ) { $lang = 'en'; }

  // Min. one title, max two titles
  if (is_array($title)) {
    $img_title = $title[0];
    $title = '<h2 class="condensed">' . make_link ($title_link, $title[0]) . '</h2>' . $title[1];
  } else {
    $img_title = $title;
    $title = '<h2 class="condensed">' .  make_link ($title_link, $title) . '</h2>';
  }

  // More than one author for this book
  if (is_array($author)) {
    // No link for the authors, simple author list
    if (!$author_link) {
      $temp = $author;
    }
    // Build links to the authors pages
    else {
      for ($i=0; $i < count ($author); $i++) {
        if ($author_link[$i]) {
          $temp[] = make_link ($author_link[$i],$author[$i]);
        } else {
          $temp[] = $author[$i];
        }
      }
    }
    $last = array_pop($temp);
    $author = join(', ', $temp) . ' &amp; ' . $last;
  }

  echo '<tr><td colspan="2">' . hdelim() . "</td></tr>\n";

  echo '<tr valign="top">' . "\n";
  echo "<td>\n";
  print_link ($title_link, make_image ("books/".$image, $img_title, false, false, false, 0) );
  echo "<br>\n</td><td><p>\n";
  echo "$title\nby ";

  if ($author_link) {
    print_link ($author_link, $author);
  } else {
    echo $author;
  }
  echo "</p>\n<small>\n";

  if ($info || $lang != "en") {
    echo "<p>\n";
    if ($lang != "en") {
      echo "in " . $langs[$lang] . "<br>\n";
    }
    echo $info . "</p>\n";
  }
  echo "<p>" . make_link ($info_link ? $info_link : $title_link, make_image ("caret-rg.gif",">") . "more info" );
  echo "<br>\n</p>\n</small>\n</td>\n</tr>\n\n";

} // end of showBook() function

// Generate book statistics (book numbers by languages)
function bookStats ($books, $btype) {

  $stats = array();
  foreach ($books[$btype] as $number => $book) {
    $stats[$book[7]]++;
  }
  arsort($stats, SORT_NUMERIC);
  return $stats;

} // end of bookStats() function

echo '<h1>PHP Books</h1>';

// If invalid type || lang specified, unset it
list($type, $lang) = explode("_", $type_lang);
if (!isset($book_types[$type])) { unset($type); }
if (!isset($langs[$lang])) { unset($lang); }

// If type is set, we are printing books
if (isset($type)) { ?>
<p>
Click on a book for more information or (in most cases) to purchase it.
If you would like to jump to another category, choose one from the
list below. Remember, if you buy the book using the links on this page,
you are helping to support PHP development!
</p>

<?php } else { ?>
<p>
Choose one category and/or a language from the ones below to go to
a listing of books about that subject.
</p>
<?php } ?>

<form method="get" action="<?php echo $PHP_SELF; ?>">
Browse our listing:
<select name="type_lang">

<?php
// Jumplist with types and languages
foreach ($books as $btype => $book_list) {
  echo "  <option value=\"${btype}_all\">+&nbsp;" . $book_types[$btype] . " [" . count($book_list) . " total]" . "</option>\n";
  $book_stat = bookStats($books, $btype);
  foreach ($book_stat as $blang => $number) {
    if ($number == 1) { $suff = ""; } else { $suff = "s"; }
    echo "    <option value=\"${btype}_${blang}\">" . "&nbsp;&nbsp; - $number book$suff in " . $langs[$blang] . "</option>\n";
  }
}
?>

</select>
<input type="submit" value="Show">
</form>

<p>
There may be more books available that we don't know of yet! You can search
<a href="http://www.amazon.com/exec/obidos/redirect-home/wwwphpnet">Amazon.com</a>
for PHP related stuff by using this form (or go directly to
<a href="http://www.amazon.de/exec/obidos/redirect-home/wwwphpnet07">Amazon.de</a>
or <a href="http://www.amazon.fr/exec/obidos/redirect-home/wwwphpnet0f">Amazon.fr</a>
and search there):
</p>

<p>
<form method="get" action="http://www.amazon.com/exec/obidos/external-search">
<input type="hidden" name="tag" value="wwwphpnet">
Search Amazon for
<select name="mode">
<option value="blended">All Products
<option value="books" selected>Books
<option value="music">Popular Music
<option value="classical-music">Classical Music
<option value="video">Video
<option value="toys">Toys
<option value="electronics">Electronics
</select>
about
<select name="keyword">
<option selected>PHP
<option>Apache
<option>Linux
<option>MySQL
<option>PostgreSQL
<option>mSQL
<option>Oracle
<option>IMAP
<option>LDAP
<option>XML
<option>Adabas
<option>Sybase
<option>Microsoft SQL
<option>Microsoft NT
<option>ODBC
</select>
<input type="submit" border="0" value="Search" name="Search">
</form>
</p>

<?php

// If the type is set, print out the books
if (isset($type)) {

  if (!isset($lang)) { $suffix = ' in all languages'; }
  else { $suffix = ' in ' . $langs[$lang]; }

  echo '<h1>' . $book_types[$type] . $suffix . '</h1>';
  echo '<table border="0" cellpadding="5">';
  shuffle($books[$type]);
  foreach ($books[$type] as $one_book) {
    if (isset($lang) && $lang != $one_book[7]) { continue; }
    showBook($one_book);
  }
  echo '</table>';
}

echo "</p>";

commonFooter();
?>
