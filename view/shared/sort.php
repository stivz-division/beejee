<div class="card mt-3">
  <div class="card-body">
    <form action="<?php
    echo $_SERVER['REQUEST_URI'] ?>" method="get">
      <select class="form-select" name="sort"
              aria-label="Default select example" required>
        <option value="">Выберите сортировку</option>
        <option value="author-asc" <?php
        echo $sort === 'author-asc' ? 'selected' : '' ?>>Имя пользователя asc
        </option>
        <option value="author-desc" <?php
        echo $sort === 'author-desc' ? 'selected' : '' ?>>Имя пользователя desc
        </option>
        <option value="email-asc" <?php
        echo $sort === 'email-asc' ? 'selected' : '' ?>>Email asc
        </option>
        <option value="email-desc" <?php
        echo $sort === 'email-desc' ? 'selected' : '' ?>>Email desc
        </option>
        <option value="status-asc" <?php
        echo $sort === 'status-asc' ? 'selected' : '' ?>>Статус asc
        </option>
        <option value="status-desc" <?php
        echo $sort === 'status-desc' ? 'selected' : '' ?>>Статус desc
        </option>
      </select>
      <input type="submit" class="btn btn-primary mt-2" value="Сортировка">
    </form>
  </div>
</div>