<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$user = 'root';
$password = 'root';
$db_name = 'mini_blog';
$host = 'localhost';

$db = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
   echo 'Error connect to DB ('.mysqli_connect_errno().'): '.mysqli_connect_error();
   exit();
}

function get_articles() {
   global $db;
   $sql = "SELECT * FROM `articles`";
   $result = mysqli_query($db, $sql);
   return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$article_list = get_articles();

function active_page($pageName) {
   if ($_SERVER['REQUEST_URI'] == $pageName) {
      echo "class='active'";
   }
   else {
      echo "";
   }
}

function get_article_by_id($id) {
   global $db;
   $sql = "SELECT * FROM `articles` where `id`= $id";
   $result = mysqli_query($db, $sql);
   return mysqli_fetch_assoc($result);
}

function get_charity_users() {
   global $db;
   $sql = "SELECT * FROM `charity_users`";
   $result = mysqli_query($db, $sql);
   return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function submit_form() {
   global $db;
   $all_values = "";
   $all_keys = "";

   foreach ($_POST as $key => $value) {
      $value = mysqli_real_escape_string($db, $_POST["$key"]);
      if ($value !== end($_POST)) {
         $all_values .= ("'$value'".", ");
         $all_keys .=  ("`".$key."`".", ");
      }else{
         $all_values .= ("'$value'");
         $all_keys .=  ("`".$key."`");
      }
   }

   $sql = "INSERT INTO `feadback_form` ($all_keys) VALUES ($all_values)";

   $result = mysqli_query($db, $sql);

     if ($result == true) {
      echo ('<h1 class="thanks">'."Дякуємо за звернення!".'</h1>');
   } else {
      echo ('<h1 class="thanks">'."Нажаль щось трапилось :-(".'</h1>');
   }


}