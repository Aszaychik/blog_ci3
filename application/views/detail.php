<?php 
$this->load->view('partials/header');
?>
<!-- Page Header-->
<?php 
if(empty($blog['cover'])){
    $cover = 'https://scontent.fsub8-2.fna.fbcdn.net/v/t39.30808-6/310195025_1496125947476402_6729970876596988792_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGxRrhZhJa7_lo2o-qlrtGJOU9dMVOwtsA5T10xU7C2wMrTmOY80c9rKPKBweDDZ2LVSVEYoOeBKPkb0e1s_4W6&_nc_ohc=O6Vw0h5xrJEAX-ac0a0&tn=og2zDuZcDLaZyeoO&_nc_ht=scontent.fsub8-2.fna&oh=00_AfBRNj-sUTzyo8kz1vx_e0_Dv6Trj6GwBx6c_VSaaIyz3A&oe=637877DD';

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