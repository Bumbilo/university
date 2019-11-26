<?php
    require('./utils/helper.php');
    $user_list = get_charity_users();
    submit_form();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap&subset=cyrillic,cyrillic-ext"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
<div>
  <h1>Ваш запит обробляеться, наші спеціалісти зв'яжуться за вам !</h1>


  <div class="button__wrapper">
    <a href="/index.php"  class="main-section__button">Повернутись на головну</a>
  </div>

</div>
</body>