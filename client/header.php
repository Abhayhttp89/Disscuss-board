<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="./">
      <img src="./public/logo.png" />
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-dark fw-bolder" href="./">Home</a>
        </li>
        
        <?php
        // Check if 'user' key exists in $_SESSION and has a non-null 'username' value
        if (isset($_SESSION['user']) && isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link"
              href="./server/requests.php?logout=true">Logout(<?php echo ucfirst(htmlspecialchars($_SESSION['user']['username'])) ?>)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo intval($_SESSION['user']['user_id']) ?>">My Questions</a>
          </li>
        
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link text-dark" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="?signup=true">SignUp</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link text-dark" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" action="">
      <input class="form-control me-2" name="search" type="search" placeholder="Search questions">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
