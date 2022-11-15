<?php 
class BlogModel extends CI_Model{
  public function getBlog()
  {
    $filter = $this->input->get("search");
    $this->db->like('title', $filter);
    $this->db->order_by("id", "desc");
    return $this->db->get("blog");
  }

  public function getDetail($field, $value)
  {
    $this->db->where($field, $value);
    return $this->db->get("blog");
  }

  public function insertBlog($data)
  {
    $this->db->insert('blog', $data);
    return $this->db->insert_id();
  }

  public function updateBlog($id, $post)
  {
    $this->db->where('id', $id);
    $this->db->update('blog', $post);
    return $this->db->affected_rows();
  }

  public function deleteBlog($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('blog');
    return $this->db->affected_rows();
  }
  
}

?>