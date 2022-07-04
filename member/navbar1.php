<!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="" class="" alt=""  style="width:100%;max-height : 15vh !important">
      </a>
      <img src="./../img/ic_logo2.svg" alt="Logo" width="45" height="45" />
      <br>
      <br>
      <div class="list-group list-group-flush" id="navigations">
        <a href="index.php?page=home&title=dashboard" class="list-group-item list-group-item-action nav-home waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="index.php?page=books&title=books" class="list-group-item list-group-item-action nav-books waves-effect">
          <i class="fas fa-book mr-3"></i>Books
        </a>
        <a href="index.php?page=borrowed_books&title=borrowed books" class="list-group-item list-group-item-action  nav-borrowed_books waves-effect">
          <i class="fas fa-books mr-3"></i>Borrowed Books
        </a>
        
      </div>

    </div>
    <!-- Sidebar -->

    <script>
      $('#navigations a.nav-<?php echo $_GET['page'] ?>').addClass('active')
    </script>