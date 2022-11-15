<?php 
$this->load->view('partials/header');
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1512413294297-496b8ce65ed7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Update Article</h1>
                </div>
            </div>
        </div>
    </div>
</header>
  <main class="container text-capitalize">
    <section class="row">
      <article class="col-md-8">
        <h1>Update <?= $blog['title'];?></h1>
        <?= form_open();?>
          <fieldset class="form-group">
            <label for="title">title</label>
            <?= form_input('title',$blog['title'], 'class="form-control mb-3"');?>
          </fieldset>
          <fieldset class="form-group">
          
            <label for="url">url</label>
            <?= form_input('url',$blog['url'], 'class="form-control mb-3"');?>
          </fieldset>
          <fieldset class="form-group">
            <label for="content">content</label>
            <?= form_textarea('content',$blog['content'], 'class="form-control mb-3"');?>
          </fieldset>
          <button type="submit" class="btn btn-dark mb-3">Save Article</button>
        <?= form_close();?>
      </article>
    </section>
  </main>
<?php 
$this->load->view('partials/footer');
?>