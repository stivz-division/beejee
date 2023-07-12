<div class="text-end">
    <?php
    if (isset($_SESSION['is_admin'])): ?>
      <form action="/logout" method="post">
        <input type="submit" class="btn btn-danger btn-lg" value="Выйти">
      </form>
    <?php
    else: ?>
      <a href="/login" class="btn btn-primary btn-lg">Вход</a>
    <?php
    endif; ?>
</div>