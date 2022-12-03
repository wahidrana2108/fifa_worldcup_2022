<!-- Customer Login area start -->
<div class="container pt-4 d-flex justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 ms-auto bg-secondary">
        <h1 class="text-center">Login</h1>
        <form action="customer_register.php" method="post">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="Enter Your Password">
            <label for="floatingInput">Enter Your Password</label>
          </div>
          <div class="text-center mt-2 d-flex justify-content-around">
            <small class="text-light"><i>Forgot Password? <a href="#">Click here</a></i></small>
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
          </div>
          <small class="text-light d-flex justify-content-center"><i>Don't have an account? <a href="#">Login</a></i></small>
        </form>
      </div>
    </div>
</div>
<!-- Customer Login area end -->