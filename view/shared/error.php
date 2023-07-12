<?php

if (isset($_SESSION['error'])): ?>
  <div class="alert alert-danger mt-3" role="alert">
      <?php
      echo $_SESSION['error']; ?>
  </div>
<?php
endif; ?>