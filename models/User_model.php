<?php 

class User_model extends CI_model {
    function create($formArray) {
        $this->db->insert('items',$formArray);
    }

    function all() {
        return $users = $this->db->get('items')->result_array();
    } 
    function getuser($userId) {
        $this->db->where('users_id',$userId);
        return $users = $this->db->get('items')->row_array();//select * from items swhere users_id=?
    }
    function updateuser($userId,$formArray) {
        $this->db->where('users_id',$userId);
        $this->db->update('items',$formArray);//update items set name=?,email=? where users_id=?
    }
    function deleteuser($userId) {
        $this->db->where('users_id',$userId);
        $this->db->delete('items');//delete from items where users_id=?
    }
}

?>