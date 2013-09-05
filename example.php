<?
ob_start();
include("language_class.php");
//  The default language of the site
$lang = new language('EN');
?>
<!DOCTYPE html>

<html>

<head>
  <title>simple multilingualism</title>
</head>

<body>
    <div>
          <a href="?language=FR">Français</a> -
          <a href="?language=EN">English</a>
    </div>
    <div>
        <? // Print Language  ?>
         <?= $lang->view('hello') ?>  <br>

         <?= $lang->view('emploi') ?>
    </div>
</body>
</html>
