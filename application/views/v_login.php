<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="card mt-4">
      <div class="card-header">
        Login
      </div>
      <div class="card-body">
        <?php if ( $this->session->flashdata('pesan') ) : ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('pesan'); ?>
          </div>
        <?php endif; ?>

        <form action="<?php echo site_url('C_login/prosesLogin'); ?>" method="post">
          <div class="mb-3 mt-lg-4">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username" name="t_uname">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="t_password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  </body>
  </html>
