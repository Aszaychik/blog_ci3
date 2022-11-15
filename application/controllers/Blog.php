<?php 
class Blog extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

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

      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;
      $config['max_width']            = 2000;
      $config['max_height']           = 1600;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('cover'))
      {
          echo $this->upload->display_errors();
      }
      else
      {
          $data['cover'] = $this->upload->data('file_name');
      }

      $id = $this->BlogModel->insertBlog($data);
      if($id){
        echo 'alert("Data saved")';
        redirect('/');
      }else{
        echo 'alert("Save failed")';
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
        echo 'alert("Data updated")';
        redirect('/');
      }else{
        echo 'alert("Update failed")';
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