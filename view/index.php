<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">

    <?php
    require_once ROOT_DIR . '/view/shared/login.php' ?>


    <?php
    require_once ROOT_DIR . '/view/shared/sort.php' ?>


    <?php
    require_once ROOT_DIR . '/view/shared/error.php' ?>

    <?php
    require_once ROOT_DIR . '/view/shared/store-task.php' ?>


  <div class="row row-cols-3 g-2 mt-3">
      <?php
      foreach ($tasks as $task): ?>

          <?php
          if (isset($_SESSION['is_admin'])): ?>
              <?php
              require ROOT_DIR . '/view/shared/admin-task.php' ?>
          <?php
          else: ?>
              <?php
              require ROOT_DIR . '/view/shared/task.php' ?>
          <?php
          endif; ?>


      <?php
      endforeach; ?>
  </div>


    <?php
    require_once ROOT_DIR . '/view/shared/paginate.php' ?>


</div>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>
</body>
</html>