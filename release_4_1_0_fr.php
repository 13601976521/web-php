<?php
/* if you're reading this, it isn't because you've found a security hole.
   this is an open source website. read and learn! */

header("Cache-Control: public, max-age=600");

require_once 'prepend.inc';

$SIDEBAR_DATA = '
<h3>What is PHP?</h3>

<p>
<acronym title="recursive acronym for PHP: Hypertext Preprocessor">PHP</acronym>
is a server-side, cross-platform, HTML embedded scripting
language. If you are new to PHP and want to get some idea
of how it works, try the ' . make_link("/tut.php", "introductory tutorial") . '.
After that, check out the online ' . make_link("/docs.php", "manual") . ',
and the example archive sites and some of the other resources
available in the ' . make_link("/links.php", "links section") . '.
</p>

<p>
PHP is a project of the ' . 
make_link("http://www.apache.org/","Apache Software Foundation") . '.
</p>

<h3>' . make_link("/thanks.php", "Thanks To") . '</h3>
&nbsp; ' . make_link("http://www.easydns.com/?V=698570efeb62a6e2", "easyDNS") . '<br>
&nbsp; ' . make_link("http://www.pair.com/", "pair Networks") . '<br>
&nbsp; ' . make_link("http://www.rackspace.com/?supbid=php.net", "Rackspace") . '<br>
&nbsp; ' . make_link("http://www.synacor.com/", "Synacor") . '<br>
&nbsp; ' . make_link("http://valinux.com/", "VA Linux Systems") . '<br>
<h3>Related sites</h3>
&nbsp; ' . make_link("http://www.apache.org/", "Apache") . '<br>
&nbsp; ' . make_link("http://www.mysql.com/", "MySQL") . '<br>
&nbsp; ' . make_link("http://www.postgresql.org/", "PostgreSQL") . '<br>
&nbsp; ' . make_link("http://www.zend.com/", "Zend Technologies") . '<br>
<h3>Community</h3>
&nbsp; ' . make_link("http://www.linuxfund.org/", "LinuxFund.org") . '<br>
&nbsp; ' . make_link("http://www.osdn.org/", "OSDN") . '<br>

<h3>Contact</h3>

<p>
Please
submit website bugs in the ' .
make_link('http://bugs.php.net/', 'bug system') . '.
</p>
<p>
You can contact the webmaster at ' . 
make_link('mailto:webmaster@php.net', 'webmaster@php.net') . '.
</p>
';

$fp = @fopen("backend/events.csv",'r');
if($fp) {
	$cm=0;
	while(!feof($fp)) {
		list($d,$m,$y,$url,$desc) = fgetcsv($fp,4096);
		if($cm!=(int)$m) { 
			if($cm) $RSIDEBAR_DATA.= "<br>\n"; 
			else $RSIDEBAR_DATA.='<h3>Upcoming Events<br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.php.net/cal.php?a=1">[add event]</a></h3>';
			$cm = (int)$m;  
			$RSIDEBAR_DATA .= "<h4>".strftime('%B',mktime(12,0,0,$cm,$d,$y))."</h4>\n"; 
			unset($seen);
		}
		if(!$seen[$desc]) {
			$RSIDEBAR_DATA .= "$d. <a href=\"$url\">$desc</a><br>\n";
			$seen[$desc] = true;
		}
	}
	fclose($fp);
}

commonHeader("Hypertext Preprocessor");
echo "\n<!--$MYSITE-->\n";
?>

<h1>
PHP 4.1.0 Release Announcement
</h1>

<pre>

Apr�s un long processus "QA", PHP 4.1.0 est enfin sorti.
T�l�charger-le sur:  http://www.php.net/downloads.php !

PHP 4.1.0 inclut beaucoup d'am�liorations importantes:
- Une nouvelle interface d'entr�e en g�n�ral (voir plus bas)
- Perfomance grandement accrue en g�n�ral
- Sous Windows une stabilit� et une performance r�volutionnaire. Les
  modules serveur multi-thread sous windows (ISAPI, Apache, etc...)
  s'ex�cute jusqu'� 30 fois plus rapidement sous la charge! Nous
  voulons remercier Brett Brewer et son �quipe chez Microsoft pour
  son travail avec nous pour am�liorer PHP pour Windows.
- Gestion des versions pour les extensions. A l'heure actuelle, ceci
  est tr�s peu utilis�, l'infrastructure �tait mise en place pour le
  support s�par� des num�ros de versions pour diff�rentes extensions.
  L'effet de bord n�gatif est que le faite de charger des extensions
  avec une ancienne version de PHP r�sultait d'un crash, � la place
  d'un message correct et claire. Soyez s�re que vous utilisez
  seulement des extensions int�gr�es � PHP 4.1.0.
- Support "Turn-Key" de la compression des sorties
- *ENORMEMENT* de corrections et de nouvelles fonctions

Comme certains l'ont not�, cette version est quelque peu historique,
comme c'est la premi�re fois dans l'histoire que nous incr�mentons
le num�ro du milieu :).
Les deux principales raisons � cela d'un c�t� les changements sans
pr�c�dent de la nouvelle interface d'entr�e, et de l'autre l'incompatibilit�
des modules dus au support des versions.

Ce qui suit concerne une description du nouveau m�canisme d'entr�e.
Pour une liste compl�te des changements voir plus bas � la fin de
cette section (Changelog).

-----------------------------------

SECURITE:  NOUVEAU MECANISME D'ENTREE

Avant tout, il est important de signaler que, sans tenir compte de ce
que vous pourriez lire dans les lignes qui suivent, PHP 4.1.0 *g�re*
les anciens m�canisme d'entr�e des anciennes versions. D'anciennes
applications devraient bien fonctionner sans modification.

Maintenant que nous avons �� derri�re nous, Let's move on :)


Pour diff�rentes raisons, PHP qui se repose sur register_globals ON
(ex. sur les formulaires, les variables serveur et d'environnement
deviennent partie de la port�e globale d'un script [namespace], et
ce automatiquement) sont tr�s souvent exploitable � des degr�s
divers. Par exemple le code suivant:

<?php
if (authenticate_user()) {
   $authenticated = true;
}
...
?>

Peut �tre exploitable de la mani�re suivante, des utilisateurs
distants peuvent simplement passer 'authenticated' comme variable
d'un formulaire et m�me si authenticate_user() retourne false,
$authentiticated va actuellement contenir true. Paraissant comme
un exemple simple, en r�alit�, bien des applications termin�es
sont exploitable par ce dysfonctionnement (NDR:je dirais plut�t
que c'est une erreur de conception et de programmation).

Tandis qu'il est parfaitement possible d'�crire du code PHP
s�curis�, nous sentions le fait que PHP permet, de mani�re beaucoup
trop facile, d'�crire du code php non s�curis� n'�tait pas
acceptable, et nous avons d�cid� de tenter un changement tr�s grand
et de rendre caduque REGISTER_GLOBALS.

�videmment, la grande majorit� du code PHP dans le monde se repose
sur l'existence de cette fonctionnalit�, cependant nous n'avons pas
de plans pour la retirer de PHP ni maintenant ni � moyen terme, mais
nous avons d�cid�s d'encourager les utilisateurs de ne plus
l'utiliser tant que faire se peut.

Afin d'aider les utilisateurs � construire des applications PHP avec
REGISTER_GLOBALS sur off, nous avons ajout� quelques nouvelles
variables sp�ciales, variables qui peuvent �tre utilis� � la place
des anciennes variables globales. Il y a 7 nouveaux tableaux sp�ciaux:

$_GET - contient les variables passer par la m�thode GET
$_POST - contient les variables passer par la m�thode POST
$_COOKIE - contient les variables HTTP cookie
$_SERVER - contient les variables serveur (par ex. REMOTE_ADDR)
$_ENV - contient les variables d'environnement
$_REQUEST - Une fusion des variables GET. POST, COOKIE. En d'autres
            mots toutes les informations qui arrive de l'utilisateur.
            Et d'un point de vue purement s�curit�, ne sont pas s�re.
$_SESSION - contient toutes les variables HTTP enregistr�es par le
            module de gestion de session

Maintenant, entre autre le fait que ces variables contienne ces
informations sp�ciales, elles sont aussi automatiquement globales
dans toutes les port�es. Cela signifie que vous pouvez y acc�der
de n'importe o�, sans avoir to de les d�clarer en global. Par exemple:

function example1()
{
    print $_GET["name"]; // fonctionne, 'global $_GET' n'est pas n�cessaire!!
}

va fonctionner tr�s bien! Nous esp�rons que cela va faciliter la t�che
durant la migration de vieux code vers le nouveau, et nous sommes s�re
que cela vous simplifiera l'�criture de nouveaux codes.

Une autre astuce est que le faite de cr�er de nouvelles entr�es dans
$_SESSION va automatiquement les enregistrer comme variables de session,
comme si vous auriez appel� session_register(). Cet astuce est limit�e
uniquement au module de gestion de session - par exemple, cr�er de
nouvelles entr�s dans $_ENV ne va pas executer un put_env() implicite.

PHP 4.1.0 doit toujours avoir REGISTER_GLOBALS mis a ON par d�faut.
C'est une version de transition, et nous encourageons les auteurs
d'applications, sp�cialement les applications publics qui sont utilis�s
par une large audience, de changer leurs applications pour fonctionner
avec un environnement o� REGISTER_GLOBALS est � OFF. Il est clair
qu'ils devraient profiter des nouvelles fonctionnalit�s fournies
avec PHP 4.1.0 qui font cette transition plus ais�e.

Dans la prochaine version "demi majeur" de PHP, de nouvelles installations
de PHP devrait avoir REGISTER_GLOBALS mis � OFF par d�faut. Ne vous en
faites pas! Les installations existantes, qui ont d�j� un fichier php.ini
qui a REGISTER_GLOBALS ON, ne vont pas �tre affect�es. Cela vous
affectera seulement si vous installez PHP sur une nouvelle machine
(typiquement si vous �tes un nouvel utilisateur), et si vous le d�sirez
toujours le mettre � ON.

Note: Certains de ces tableaux ont d'anciens noms, p.e. $HTTP_GET_VARS.
Ces noms fonctionnent toujours, mais nous encourageons les utilisateurs
de changer vers le nouveaux noms, plus court et automatiquement globales.

Remerciement � Shaun Clowes (shaun@securereality.com.au) de mettre � jour
ce probl�me et de l'avoir analys�.

-----------------------------------

Zeev
</pre>

French translation is available courtesy of <a href="mailto:pierre-alain.joye@wanadoo.fr">Pierre-Alain Joye</a>

<?php commonFooter(); ?>
