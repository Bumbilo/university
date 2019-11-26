<?php
    require('./utils/helper.php');
    $user_list = get_charity_users();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap&subset=cyrillic,cyrillic-ext"
            rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>
  <?php require('./partials/header.php') ?>
<main class="main">
    <div class="main-wrapper">
        <section class="main-section">
            <div class="main-section__item">
                <table class="contact__table">
                    <caption>Останні пожетви користувачів</caption>
                    <thead>
                    <tr>
                        <th>Ім'я</th>
                        <th>Сума</th>
                    </tr>
                    </thead>
                    <tbody>
                 <?php foreach($user_list as $user): ?>
                    <tr>
                        <th><?=$user['name'] ?></th>
                        <th><?=$user['summ'] ?>$</th>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <h3 class="contact__title">Форма зворотнього зв'язку</h3>
                <form action="/success.php" class="contact__form" method="POST">
                    <div class="contact__form-field">
                        <label for="first_name">Ім'я</label>
                        <input type="text" name="first_name" id="first_name" placeholder="Ім'я" required/>
                    </div>
                    <div class="contact__form-field">
                        <label for="last_name">Ім'я</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Прізвище" required/>
                    </div>
                    <div class="contact__form-field">
                        <label for="phone">Телефон</label>
                        <input type="phone" name="phone" id="phone" placeholder="Телефон" required/>
                    </div>
                    <div class="contact__form-field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required/>
                    </div>
                    <div class="contact__form-field">
                        <label>Стать</label>
                        <div class="contact__gender">
                        <label>
                            <input type="radio" name="gender" id="gender" value="female" checked /> Жінка
                        </label>
                        <label>
                            <input type="radio" name="gender" id="gender" value="male"/> Чоловік
                        </label>
                        </div>
                    </div>
                    <div class="contact__form-field">
                        <label for="categories">Причина обратного зав'язку</label>
                        <select name="" id="categories">
                            <option value="charity">Благодійність</option>
                            <option value="bad">Висказати невдоволеність</option>
                            <option value="good">Подякувати за роботу</option>
                            <option value="another">Iніші</option>
                        </select>
                    </div>
                    <div class="contact__form-field">
                        <input type="checkbox" name="policy" id="policy" required/>
                        <label for="policy" class="checkbox__label">Погоджуюсь з обробкою персональних даних:</label>
                    </div>
                    <div class="contact__form-field">
                        <label for="message">Повідомлення</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <button type="submit" class="main-section__button">Відправити</button>
                </form>

                <p class="contact__describe">
                    Після того того як ви відправете форму наш менеджер зв'яжеться з вами.
                    Ви можете постевити запитання які вас цікавлять або ви можете пожетвувати кошти на обслуговування сайту.
                </p>
            </div>
        </section>
    <?php require('./partials/sidebar.php') ?>
    </div>
</main>
  <?php require('./partials/footer.php') ?>
</body>
</html>
