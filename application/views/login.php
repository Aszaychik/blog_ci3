<?php $this->load->view('partials/header');  ?>

<header class="masthead" style="background-image: url('https://scontent.fsub8-2.fna.fbcdn.net/v/t39.30808-6/310195025_1496125947476402_6729970876596988792_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGxRrhZhJa7_lo2o-qlrtGJOU9dMVOwtsA5T10xU7C2wMrTmOY80c9rKPKBweDDZ2LVSVEYoOeBKPkb0e1s_4W6&_nc_ohc=O6Vw0h5xrJEAX-ac0a0&tn=og2zDuZcDLaZyeoO&_nc_ht=scontent.fsub8-2.fna&oh=00_AfBRNj-sUTzyo8kz1vx_e0_Dv6Trj6GwBx6c_VSaaIyz3A&oe=637877DD')">
        <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="site-heading">
                <h1 class="">Login Page</h1>
              </div>
            </div>
          </div>
    </div>
    </header>   
    <!-- MAIN CONTENT -->
    <div class="container text-capitalize">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <?= $this->session->flashdata('message');?>
          <?= form_open();?>
          <fieldset class="form-group">
            <label class="mb-2" for="username">username</label>
            <input class="form-control mb-3" type="text" name="username" id="username">
          </fieldset>
          <fieldset class="form-group">
            <label class="mb-2" for="password">password</label>
            <input class="form-control mb-3" type="password" name="password" id="password">
          </fieldset>
          <fieldset class="text-center">
            <button type="submit" class="btn btn-dark mb-4">Login</button>
          </fieldset>
        
        </div>
      </div>
    </div>
<?php $this->load->view('partials/footer');  ?>