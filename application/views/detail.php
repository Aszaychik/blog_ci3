<?php 
$this->load->view('partials/header');
?>
<h1><?= $blog['title'];?></h1>
<p><?= $blog['content'];?></p>
  <?php 
$this->load->view('partials/footer');
?>