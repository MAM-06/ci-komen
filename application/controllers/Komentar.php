<?php
class Komentar extends CI_Controller {

    public function index() {
        $data['content'] = $this->db->query("SELECT * FROM table_content");
        $this->load->view('view_home',$data);
    }

    public function detail() {
        $id                     = $this->uri->segment('3');
        $content                = $this->db->query("SELECT * FROM table_content WHERE content_id='$id'")->row_array();
        $data['content_title']  = $content['content_title'];
        $data['content_body']   = $content['content_body'];
        $data['content_id']     = $content['content_id'];
        $data['harga']          = $content['harga'];
        $data['waktu']          = $content['waktu'];
        $this->load->view('view_content',$data);
    }

    public function kirim() {
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $isi_komentar   = $this->input->post('isi');
        $this->db->query("INSERT INTO table_comment VALUES('','0','$nama','$email','$isi_komentar','$id')");
        redirect('komentar/detail/'.$id); 
    } 

    public function balas() {
        $comment_id = $this->input->post('comment_id');
        $content_id = $this->input->post('content_id');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $isi        = $this->input->post('isi');
        $this->db->query("INSERT INTO table_comment VALUES('','$comment_id','Admin','khotib.bul@gmail.com','$isi','$content_id')");
        redirect('komentar/detail/'.$content_id); 
    }
    
}