<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <?php if(!empty(session()->getFlashdata('error'))): ?>
          <div class="alert alert-info alert-dismissible fade show" role="alert">
          <?php echo session()->getFlashdata('error');?>
        </div>
        <?php endif; ?>
        <form method="POST" action="/auth/register/process" class="needs-validation" novalidate="">
        <?= csrf_field() ?>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email"  id="email" class="form-control form-control-lg" tabindex="1" required autofocus
                placeholder="Input email address" />
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Input password" />
                <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" name="confirmpassword" id="form3Example4" class="form-control form-control-lg"
                placeholder="Confirm password" />
                <label class="form-label" for="form3Example4">Confirm Password</label>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Sudah Memiliki Akun? <a href="/auth/login/index"
                class="link-danger">Login</a></p>
            </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. Mentors Listing.
    </div>
    <!-- Copyright -->

  </div>
</section>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>