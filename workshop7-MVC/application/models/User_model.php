<?php

class User_model extends CI_Model {


  public function authenticate($username, $password) {
    $this->db->where('correo', $username);
    $this->db->where('contraseña', $password);
    $query = $this->db->get('usuarios');
    return $query->result();
  }

  public function getAll() {
    $query = $this->db->get('usuarios');
    return $query->result_array();
  }

}