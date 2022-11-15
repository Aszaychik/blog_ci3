<?php 
$this->load->view('partials/header');
?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= base_url();?>assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>AszBlog</h1>
                            <span class="subheading">A Blog using CI3 by <a class="" href="https://github.com/Aszaychik">AsZaychik</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="" method="get" class="text-center mb-5">
                    <input type="text" name="search">
                    <button type="submit">Search</button>
                </form>
                    <!-- Post preview-->
                    <h1 class="text-center">
                    Newest Article
                    </h1>
                    <hr class="my-4">
                    <?php foreach ($blogs as $key => $blog){?>
                    <div class="post-preview">
                        <a href="<?= site_url("blog/detail/{$blog['url']}")?>">
                            <h2 class="post-title"><?= $blog['title'];?></h2>
                        </a>
                        <p class="post-meta">Posted on <?= $blog['date'];?>
                            <span>
                                <a href="<?php echo site_url('blog/updateArticle/'.$blog['id']);?>"> Edit</a>
                                <a href="<?php echo site_url('blog/deleteArticle/'.$blog['id']);?>"> Delete</a>
                            </span>
                        </p>
                        <p><?= $blog['content'];?></p>
                    </div>
                    <?php } ?>
                    <!-- Divider-->
                    <hr class="my-4" />
                </div>
            </div>
        </div>
<?php 
$this->load->view('partials/footer');
?>