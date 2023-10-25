<?php 
$a = $_SERVER['HTTP_REFERER'];
if (strpos($a, 'https://www.okeylisans.com/') !== false) {
  $_SESSION['sitekontrol'] = 'ok';
}
function izinkontrol()
{
  if (empty($_SESSION['sitekontrol'])) {
	  echo "Lisanssız erişim.";
	  exit;
  }
}
izinkontrol();

// header('Content-Type: text/html; charset=ISO-8859-9');
include_once('baglanti.php');
include_once('ayar.php');
$turnuvabaglan->exec("SET NAMES utf8");

?>
