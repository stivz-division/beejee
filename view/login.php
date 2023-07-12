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

  <div class="card mx-auto">


    <div class="card-header">Вход</div>
    <div class="card-body">
        <?php
        if (isset($_SESSION['login_error'])): ?>
          <div class="alert alert-danger my-2" role="alert">
              <?php
              echo $_SESSION['login_error']; ?>
          </div>
        <?php
        endif; ?>
      <form action="/login" method="post">
        <div class="mb-3">
          <label for="author" class="form-label">Логин</label>
          <input type="text" class="form-control" name="login" id="author"
                 placeholder="admin">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Пароль
          </label>
          <input type="password" name="password" class="form-control"
                 id="exampleFormControlInput1" placeholder="1234"
                 required>
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Войти">
      </form>
    </div>
  </div>

</div>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>
</body>
</html>