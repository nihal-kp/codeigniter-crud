<?php
    class queries extends CI_Model{

        public function getUsers(){
            $query = $this->db->get('users');
            if($query -> num_rows() > 0){
                return $query -> result();
            }
        }
        public function addUser($data){
            $this->db->insert('users', $data);                          // Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
        }
        public function getSingleUser($id){
            $query = $this->db->get_where('users', array('id' => $id));
            if($query -> num_rows() > 0){
                return $query -> row();
            }
        }
        public function updateUser($data,$id){
            return $this->db->where('id',$id)->update('users',$data);
        }
        public function deleteUser($id){
            return $this->db->delete('users', array('id' => $id));
        }
    }

?>