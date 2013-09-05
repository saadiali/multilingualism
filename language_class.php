<?php
/* Class name       : simple multilingualism
 * Inherited from   :
 * Created by       : Saadi Ali (email : alito181@gmail.com)
 * Created On       : 2-September-2013
 * Description      : multilingualism in the site by array language in a separate folder
                    - Allows this class to choose a default language of the site
                    - Cookies store language allows viewing the default language on all pages of the site and on every visit
 *
 * Change Logs      :
 *
 */
class language{

      var $def;

  public function __construct($def){
      $this->def = $def;
  }

public function view($word){

   $language = $this->getlang();

$lang_path = 'lang/'.$language.'.php';
if (file_exists($lang_path)) {
    require($lang_path);

   setcookie("language", $language);
   return $lang[$word];

 }

}
public function getlang()
{

    if(!empty($_GET['language']))
    {
      $getlang = preg_replace('#[^a-z0-9]#i', '', $_GET['language']);
        return $getlang;

    }
    elseif(!empty($_COOKIE['language']))
    {
        return $_COOKIE['language'];
    }
	
    return $this->def;

}

}
?>
