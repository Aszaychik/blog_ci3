<?php 
$this->load->view('partials/header');
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('https://scontent.fsub8-2.fna.fbcdn.net/v/t39.30808-6/310195025_1496125947476402_6729970876596988792_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGxRrhZhJa7_lo2o-qlrtGJOU9dMVOwtsA5T10xU7C2wMrTmOY80c9rKPKBweDDZ2LVSVEYoOeBKPkb0e1s_4W6&_nc_ohc=O6Vw0h5xrJEAX-ac0a0&tn=og2zDuZcDLaZyeoO&_nc_ht=scontent.fsub8-2.fna&oh=00_AfBRNj-sUTzyo8kz1vx_e0_Dv6Trj6GwBx6c_VSaaIyz3A&oe=637877DD')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Create Article</h1>
                </div>
            </div>
        </div>
    </div>
</header>
  <main class="container text-capitalize">
    <section class="row">
      <article class="col-md-8">
        <h1>Create a New Article</h1>
        <?= form_open_multipart();?>
          <fieldset class="form-group">
            <label class="mb-2" for="title">title</label>
            <?= form_input('title',null, 'class="form-control mb-3"');?>
          </fieldset>
          <fieldset class="form-group">
            <label class="mb-2" for="url">url</label>
            <?= form_input('url',null, 'class="form-control mb-3"');?>
          </fieldset>
          <fieldset class="form-group">
            <label class="mb-2" for="content">content</label>
            <?= form_textarea('content', 'Lorem Ipsum...', 'class="form-control mb-3"');?>
          </fieldset>
          <fieldset class="form-group">
            <label class="mb-2" for="cover">cover</label>
            <?= form_upload('cover', null, 'class="form-control mb-5"');?>
          </fieldset>
          <button type="submit" class="btn btn-dark mb-5">Save Article</button>
        <?= form_close();?>
      </article>
    </section>
    <?php 
$this->load->view('partials/footer');
?>