<?php 
$this->load->view('partials/header');
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1490013708732-dcbed0e5e325?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?= $blog['title'];?></h1>
                    <span class="meta">
                        Posted on <?= $blog['date'];?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
            <p><?= $blog['content'];?></p>
            </div>
        </div>
    </div>
</article>
<?php 
$this->load->view('partials/footer');
?>