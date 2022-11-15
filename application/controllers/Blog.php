<?php 
class Blog extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->helper('url');
    $this->load->model("BlogModel");
  }
  public function index(){
    $query = $this->BlogModel->getBlog();
    $data['blogs'] = $query->result_array();

    $this->load->view('blog', $data);
  }

  public function detail($url){
    $query = $this->BlogModel->getDetail('url',$url);
    $data['blog'] = $query->row_array();

    $this->load->view('detail', $data);
  }

  public function createArticle()
  {
    if($this->input->post()){
      $data['title'] = $this->input->post('title');
      $data['content'] = $this->input->post('content');
      $data['url'] = $this->input->post('url');

      $id = $this->BlogModel->insertBlog($data);
      if($id){
        echo "Data saved";
      }else{
          echo "Save failed";
        }
    }
    $this->load->view('formCreate');
  }

  public function updateArticle($id)
  {
    $query = $this->BlogModel->getDetail('id', $id);
    $data['blog'] = $query->row_array();

    if($this->input->post()){
      $post['title'] = $this->input->post('title');
      $post['content'] = $this->input->post('content');
      $post['url'] = $this->input->post('url');

      $id = $this->BlogModel->updateBlog($id, $post);
      if($id){
        echo "Data updated";
      }else{
          echo "Update failed";
        }
    }

    $this->load->view('formUpdate', $data);
  }

  public function deleteArticle($id)
  {
    $this->BlogModel->deleteBlog($id);
    redirect('/');
  }
} 
?>