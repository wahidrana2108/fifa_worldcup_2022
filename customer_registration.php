<!-- Customer Registration area start -->
<div class="container pt-4 d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 ms-auto bg-secondary">
        <h1 class="text-center">Register a new account</h1>
        <form action="customer_register.php" method="post">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Enter Your Full Name">
            <label for="floatingInput">Enter Your Full Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="Enter Your Password">
            <label for="floatingInput">Enter Your Password</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Your Password">
            <label for="floatingPassword">Confirm Your Password</label>
          </div>
          <div class="text-center mt-2">
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
          </div>
          <small class="text-light"><i>Already have an account? <a href="#">Login</a></i></small>
        </form>
      </div>
    </div>
</div>
<!-- Customer Registration area end -->