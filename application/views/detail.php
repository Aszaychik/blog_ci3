<?php 
$this->load->view('partials/header');
?>
<!-- Page Header-->
<?php 
if(empty($blog['cover'])){
    $cover = 'https://source.unsplash.com/random';

}else{
    $cover = base_url() . 'uploads/' . $blog['cover'];
}
?>
<header class="masthead" style="background-image: url('<?= $cover;?>')">
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
