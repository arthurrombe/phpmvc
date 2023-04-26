<?php
class Pekerja_model {
       private $table = 'pekerja';
       private $db;

       public function __construct()
       {
        $this->db = new Database;
       
       }


   

        public function getAllPekerja(){
           $this->db->query('SELECT * FROM ' . $this->table);
           return $this->db->resultSet();
        }

        public function getPekerjaById($id)
        {
            $this->db->query('SELECT * FROM' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
}