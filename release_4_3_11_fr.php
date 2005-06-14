<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'release_4_3_10.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("Annonce de PHP 4.3.11");
?>

<h1>Annonce de publication de PHP 4.3.11</h1>
<p>[ <a href="/release_4_3_11.php">English Version</a> ]</p>
<p>
L'&eacute;quipe de d&eacute;veloppement PHP a le plaisir de vous annoncer la publication de <a href="/downloads.php">PHP 4.3.11</a>. C'est une version de maintenance, destin&eacute;e &agrave; corriger environ 70 bogues non-critiques, plusieurs probl�mes avec les extensions exif et fbsql ainsi que les fonctions unserialize(), swf_definepoly() et getimagesize().
</p>
<p>
Tous les utilisateurs sont encourag�s � utiliser cette version.
</p> 

<h2>Version de correction de bogues</h2>
<ul>
<li> Crash avec la fonction bzopen() si le chemin fourni conduit � un fichier inexistant.</li>
<li> Crash de DOM lorsqu'un attribut est ajout� � un objet Document.</li>
<li> Probl�me d'unserialize() avec les nombres d�cimaux pour les configurations non-anglaises.</li>
<li> Crash avec msg_send() lorsqu'une variable autre qu'une cha�ne est envoy�e sans lin�arisation.</li>
<li> Boucle infinie potentielle dans imap_mail_compose().</li>
<li> Crash dans chunk_split(), lorsque chunklen est sup�rieur � la taille de la ligne.</li>
<li> session_set_save_handler fait crasher PHP lorsqu'elle re�oit une r�f�rence inexistante sur un objet.</li>
<li> Fuite de m�moire dans zend_language_scanner.c.</li>
<li> Probl�mes de compilation dans zend_strtod.c.</li>
<li> Crash dans un objet surcharg� avec la fonction overload().</li>
<li> Les fonctions cURL outrepassaient open_basedir.</li>
</ul>

<p>
 Pour une liste exhaustive des modifications de PHP 4.3.11, voyez
 <a href="/ChangeLog-4.php#4.3.11">le ChangeLog</a>, en anglais.
 </p>

<?php site_footer(); ?>
