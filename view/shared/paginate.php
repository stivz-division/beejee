<div class="mt-3 d-flex justify-content-between align-items-center mb-4">
  <form action="<?php
  echo $_SERVER['REQUEST_URI'] ?>">
    <input type="hidden" name="page" value="<?php
    echo (int)$page > 0 ? (int)$page - 1 : 0 ?>">
      <?php
      if (isset($sort)): ?>
        <input type="hidden" name="sort" value="<?php
        echo $sort ?>">
      <?php
      endif; ?>
    <input class="btn btn-primary" type="submit" value="Назад" <?php
    echo (int)$page === 1 ? 'disabled' : '' ?>>
  </form>

  <div class="px-2">
      <?php

      $startPage = 1;
      $allPages  = (int)ceil($total / $pageLimit);

      ?>


    <div class="row row-cols-auto">
        <?php
        while ($startPage <= $allPages): ?>


          <form class="col" action="<?php
          echo $_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="page" value="<?php
            echo $startPage ?>">
              <?php
              if (isset($sort)): ?>
                <input type="hidden" name="sort" value="<?php
                echo $sort ?>">
              <?php
              endif; ?>
            <input class="btn btn-primary" type="submit" value="<?php
            echo $startPage ?>">
          </form>


            <?php
            $startPage++;
            ?>
        <?php

        endwhile; ?>
    </div>
  </div>

  <form action="<?php
  echo $_SERVER['REQUEST_URI'] ?>">
    <input type="hidden" name="page" value="<?php
    echo (int)$page + 1 ?>">

      <?php
      if (isset($sort)): ?>
        <input type="hidden" name="sort" value="<?php
        echo $sort ?>">
      <?php
      endif; ?>

    <input class="btn btn-primary" type="submit" value="Вперед">
  </form>
</div>
