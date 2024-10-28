<div class="container mt-5">
    <h1 class="heading text-center text-primary mb-4">Signup</h1>

    <form method="post" action="./server/requests.php">
        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name">
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6">
                <label for="email" class="form-label">User Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter user email">
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6">
                <label for="password" class="form-label">User Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-6">
                <label for="address" class="form-label">User Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter user address">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <button type="submit" name="signup" class="btn btn-primary w-100">Signup</button>
            </div>
        </div>
    </form>
</div>
