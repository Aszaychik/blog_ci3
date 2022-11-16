<?php 
class Blog extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    $this->load->model("BlogModel");
    $this->load->library('session');
  }
  public function index($offset = 0){
    $this->load->library('pagination');
    $config['base_url']     = site_url('blog/index');
    $config['total_rows']   = $this->BlogModel->getTotalBlog();
    $config['per_page']     = 3;
    $this->pagination->initialize($config);

    $query = $this->BlogModel->getBlog($config['per_page'], $offset);
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
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('url', 'url', 'required|alpha_dash');
    $this->form_validation->set_rules('content', 'content', 'required');

    if($this->form_validation->run() === true){
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
        $this->session->set_flashdata('message', '<div class="alert alert-success">Article Created</div>');
        redirect('/');
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Article Failed to Create</div>');
        redirect('/');
      }
    }
    $this->load->view('formCreate');
  }

  public function updateArticle($id)
  {
    $query = $this->BlogModel->getDetail('id', $id);
    $data['blog'] = $query->row_array();

    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('url', 'url', 'required|alpha_dash');
    $this->form_validation->set_rules('content', 'content', 'required');

    if($this->form_validation->run() === true){
      $post['title'] = $this->input->post('title');
      $post['content'] = $this->input->post('content');
      $post['url'] = $this->input->post('url');

      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;
      $config['max_width']            = 2560;
      $config['max_height']           = 1440;

      $this->load->library('upload', $config);
      $this->upload->do_upload('cover');
      if(!empty($this->upload->data('file_name')))
      {
          $post['cover']= $this->upload->data('file_name');  
      }

      $id = $this->BlogModel->updateBlog($id, $post);

      if($id){
        $this->session->set_flashdata('message', '<div class="alert alert-success">Article Updated</div>');
        redirect('/');
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Article Failed to Update</div>');
        redirect('/');
      }
    }

    $this->load->view('formUpdate', $data);
  }

  public function deleteArticle($id)
  {
    $result = $this->BlogModel->deleteBlog($id);

    if($result){
      $this->session->set_flashdata('message', '<div class="alert alert-success">Article Deleted</div>');
    }
    else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger">Article Failed to Delete</div>');
    }
    redirect('/');
  }

  public function login()
  {
    if($this->input->post()){
      $username = $this->input->post('username');
      $password = $this->input->post('password');



      if($username == 'asz' && $password == 'asz'){
        $_SESSION['username'] = 'admin';

        redirect('/');
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Username or Password Invalid!</div>');

        redirect('blog/login');
      }

    }
    $this->load->view('login');

    
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
} 
?>