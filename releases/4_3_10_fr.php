<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'releases/4_3_10.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("PHP 4.3.10 Release Announcement");
?>

<h1>Annonce de publication de PHP 4.3.10</h1>
<p>[ <a href="/releases/4_3_10.php">English Version</a> ]</p>
<p>
L'&eacute;quipe de d&eacute;veloppement PHP a le plaisir de vous annoncer 
la publication de <a href="/downloads.php">PHP 4.3.10</a>. C'est une version 
de maintenance, destin&eacute;e &agrave; corriger une trentaine de bogues 
non-critiques et ainsi que plusieurs probl�mes de s�curit� s�rieux.
</p>
<p />
Cela inclut notamment : 
<p />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1018">CAN-2004-1018</a> - shmop_write() �crit hors des limites de la m�moire.<br />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1018">CAN-2004-1018</a> - d�passement de capacit� avec pack() et unpack().<br />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1019">CAN-2004-1019</a> - publication possible d'informations, d�passement de capacit� dans les index n�gatif lors de d�lin�arisation de donn�es.<br />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1020">CAN-2004-1020</a> - addslashes() ne prot�ge pas correctement \0.<br />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1063">CAN-2004-1063</a> - contournement de la directive de dossier d'ex�cution.<br />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1064">CAN-2004-1064</a> - acc�s arbitraire � un fichier via une troncature.<br />
<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2004-1065">CAN-2004-1065</a> - d�passement de capacit� avec exif_read_data()  sur un long nom de section.<br />
magic_quotes_gpc peut mener � la lecture d'un dossier via le t�l�chargement de fichiers.
<p />
Tous les utilisateurs sont encourag�s � utiliser cette version.<p /> 

<h2>Version de correction de bogues</h2>

<p>
En plus des fonctionnalit�s ci-dessus, PHP 4.3.9 contient notamment les corrections, ajouts et am&eacute;liorations suivantes : 
</p>

<ul>
<li> Crash possible dans ftp_get().</li>
<li> get_current_user() crashe sur Windows.</li>
<li> Crash possible avec ctype_digit() pour les grands nombres.</li>
<li> Crash lors de l'analyse de <i>?getvariable[][</i>.</li>
<li> Crash possible avec curl_getinfo().</li>
<li> Double d�sallocation lorsque openssl_csr_new() �choue.</li>
<li> Crash lors de l'utilisation d'un session.save_handler et/ou session.serialize_handler non support�.</li>
<li> Evite les r�cursions infinies lors des redirections URL.</li>
<li> S'assure que les fichiers temporaires de GD sont bien supprim�s.</li>
<li> Crash avec fgetcsv() et une taille n�gative.</li>
<li> Performances am�lior�s pour foreach().</li>
<li> Am�lioration du support des configurations locales non-anglaises.</li>
</ul>

<p>
 Pour une liste exhaustive des modifications de PHP 4.3.10, voyez
 <a href="/ChangeLog-4.php#4.3.10">le ChangeLog</a>, en anglais.
 </p>

<?php site_footer(); ?>
