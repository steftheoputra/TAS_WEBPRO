<?php
session_start();
Class Action {
    private $db;

	public function __construct() {
   	include './db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	}

    function save_borrower(){
        extract($_POST);
        $data = ' name = "'.$name.'" ';
        $data .= ', contact = "'.$contact.'" ';
        $data .= ', address = "'.$address.'" ';
        $data .= ', student_id_no = "'.$student_id_no.'" ';
        if(empty($id)){
            $save = $this->db->query("INSERT INTO borrowers set".$data);
        }else{
            $save = $this->db->query("UPDATE borrowers set".$data." where id =".$id);
        }
        if($save){
           return 1;
        }
    }

    function save_borrow(){
        extract($_POST);
        $data = ' book_id = "'.$book_id.'" ';
        $data .= ', book_number = "'.$book_number.'" ';
        $data .= ', borrower_id = "'.$borrower_id.'" ';
        $data .= ',date_borrowed = "'.$date_borrowed.'" ';
        $data .= ',date_return = "'.$date_return.'" ';
        $data .= ',user_id = "'.$_SESSION['login_id'].'" ';
        if(empty($id)){
            $save = $this->db->query("INSERT INTO borrowed_books set".$data);
        }else{
        $data .= ',status = "'.$status.'" ';
        if($status == 1)
            $data .= ',date_received = "'.date('Y-m-d').'" ';
            $save = $this->db->query("UPDATE borrowed_books set".$data." where id =".$id);
        }
        if($save){
           return 1;
        }
    }
    function login(){
        extract($_POST);
        $data = " where username = '".$username."' ";
        $data .= " and password = '".$password."' ";

        $query = $this->db->query("SELECT * FROM users ".$data);
         // echo "<pre>";
         //    var_dump($query->fetch_array());
         //    echo "</pre>";
        if($query->num_rows > 0){

            foreach($query->fetch_array() as $k => $v){
                if($k != 'password' && !is_numeric($k))
                $_SESSION['login_'.$k] = $v;
            }
            echo 1;
        }
    }
    function logout(){
        session_destroy();
        header('location:./../index.php');
    }

}