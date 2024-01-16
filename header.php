<?php
require("includes/config.php");
require("includes/functions.php");
?>

<!DOCTYPE html>
<html lang="sv" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CinemaPark</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar wrap-menu" role="navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="img/logo.png" width="500%" height="500%">
      </a>
      <div class="navbar-burger burger menu-mob">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </div>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <a href="index.php" class="navbar-item">
          Главная
        </a>
        <?php if (!isset($_SESSION['loggedin'])) { ?>
          <a href="login.php" class="navbar-item ">
            Вход
          </a>
        <?php } else { ?>
          <a href="tickets.php" class="navbar-item">
            Билеты
          </a>
        <?php } ?>
        <a href="movies.php" class="navbar-item">
          Фильмы
        </a>
        <?php if (isset($_SESSION['loggedin'])) { ?>
          <a href="profile.php" class="navbar-item">
            Мой профиль
          </a>
        <?php } ?>
      </div>
      <div class="navbar-end">
        <?php if (!isset($_SESSION['loggedin'])) { ?>
          <a href="register.php" class="navbar-item">
            Зарегестрироваться <i class="fas fa-user-plus log-icon"></i>
          </a>
          <a href="login.php" class="navbar-item">
            Войти <i class="fas fa-user log-icon"></i>
          </a>
        <?php } else { ?>
          <a href="logout.php" class="navbar-item">
            Выйти <i class="fas fa-sign-out-alt log-icon"></i>
          </a>
        <?php } ?>
      </div>
    </div>
  </nav>