<div class="container mt-5">
  <h1 class="heading text-primary mb-4">Login</h1>

  <form action="./server/requests.php" method="post">
    <!-- Responsive margin and column size -->
    <div class="col-12 col-sm-8 col-md-6 mx-auto mb-3">
      <label for="email" class="form-label">User Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter user email">
    </div>

    <div class="col-12 col-sm-8 col-md-6 mx-auto mb-3">
      <label for="password" class="form-label">User Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
    </div>

    <div class="col-12 col-sm-8 col-md-6 mx-auto mb-3">
      <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </div>
  </form>
</div>
