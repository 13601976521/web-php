<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'release_4_3_9.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("PHP 4.3.9 Release Announcement");
?>

<h1>Annonce de publication de PHP 4.3.9</h1>
<p>[ <a href="/release_4_3_9.php">English Version</a> ]</p>
<p>
L'&eacute;quipe de d&eacute;veloppement PHP a le plaisir de vous annoncer 
la publication de <a href="/downloads.php">PHP 4.3.9</a>. C'est une version 
de maintenance, destin&eacute;e &agrave; corriger une cinquantaine de bogues non-critiques,
et corriger le traitement des valeurs GPC. Cette version inclut aussi la possibilit�
d'�crire des images GIF via la biblioth�que GD interne. Tous les utilisateurs
sont encourag�s � utiliser cette version.
</p>

<h2>Version de correction de bogues</h2>

<p>
En plus des fonctionnalit�s ci-dessus, PHP 4.3.7 contient notamment les corrections, 
ajouts et am&eacute;liorations suivantes : 
</p>

<ul>
 <li>Implementatoin d'un nettoyage p�riodique du cache de regex PCRE, pour �viter les probl�mes de m�moire.</li>
 <li>Correction de strip_tags() pour g�rer correctement le caract�re '\0'.</li>
 <li>R��criture des fichiers d'installation sous UNIX et Windows.</li>
 <li>Correction d'une fuite m�moire avec phpinfo() et d'autres URL sp�ciales.</li>
 <li>Correction d'un crash possible avec php_shutdown_config().</li>
 <li>Correction d'un crash avec isset() sur les tableaux.</li>
 <li>Correction d'un crash avec imagecreatefromstring() et la biblioth�que interne GD.</li>
 <li>Correction de fgetcsv(), lors de l'analyse de cha�nes avec des s�quences prot�g�es.</li>
 <li>Correction d'un d�passement de capacit� avec array_slice(), array_splice(), substr(), substr_replace(), strspn(), strcspn().</li>
 <li>Correction de '\0' dans l'ent�te Authenticate, pass� via le safe_mode.</li>
 <li>Compilation de la GD interne avec freetype 2.1.2.</li>

  <li>Cette version corrige environ 50 bogues qui ont &eacute;t&eacute; d&eacute;couverts depuis
 la version 4.3.8.</li>
</ul>

<p>
 Pour une liste exhaustive des modifications de PHP 4.3.7, voyez
 <a href="/ChangeLog-4.php#4.3.9">le changeLog</a>, en anglais.
 </p>

<?php site_footer(); ?>
