    <div class="container footer">
      <hr>
      <footer>
        <h5 align="center">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php"><h3 style="color:black">Staff Login</h3></a>
                  </li>';
                }
        ?>
      </h5>
        <h4 align="center">
      ❄ NewLife Care & Cure Society ❄ -<?php echo date('Y'); ?>
      </h4>
      </footer>
    </div>
  </body>
</html>
