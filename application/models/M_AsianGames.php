<?php
class M_AsianGames extends CI_Model
{
  public function Minsert($table, $data)
  {
    $insert = $this->db->insert($table, $data);
    if ($insert) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

}