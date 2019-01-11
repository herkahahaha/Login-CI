<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Simple_login Class
* class ini untuk fitur login, proteksi halaman dan logout
* @author Herkahahaha
* @url github.com/herkahahaha
*/
    
class Simple_login{
//set super global
    var $CI = NULL;
    
    /*
    *Class constructor

    *@return void
    */
   
    public function __construct() {
        $this->CI =& get_instance();
    }


    /*
    *cek username dan password pada table users, jika ada data set session berdasarkan
    *data users dari
    *table users.
    *@param string username dari input form
    *@param string password dari input form   
    */
    public function login ($username, $password){
        //cek username dan password
        $query = $this->CI->db->get_where('users', array('username'=>$username,'password'=>md5($password)));
        if($query->num_rows()==1){
            //ambil data user berdasarkan username perhatikan titik! pada $username
            $row = $this->CI->db->query('SELECT id_user FROM users where username = "'.$username.'"');
            $admin = $row->row();
            $id = $admin->id_user;
            //set session
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('id_login', uniqid(rand()));
            $this->CI->session->set_userdata('id',$id);

            //redirect ke halaman dashboard
            redirect(site_url('dashboard'));
        }else{
            //jika tidak ada, set notif dalam flashdata.
            $this->CI->session->set_flashdata('suksess','username atau password anda salah, silahkan coba menehh...');
            
            //redirect kehalaman login
            redirect(site_url('login'));
        }
        return false;
    }

    public function cek_login(){
        if($this->CI->session->userdata('username')=='') {
            //set notif
            $this->CI->session->set_flashdata('sukses', 'anda belum login');

            //alihkan kehalaman login
            redirect(site_url('login')); 
        }
    }

    public function logout() {
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('id_login');
        $this->CI->session->unset_userdata('id');
        $this->CI->session->set_flashdata('sukses', 'anda berhasil logout');
            //alihkan kehalaman login
            redirect (site_url('login')); 
    }
    
}