<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartMentModel extends Model
{
    protected $table = 'department';
    protected $primarykey = 'id'; 
    protected $allowedFields = ['id', 'departmentName'];
    function get_department()
    {
        $sql = 'select * from department';
        $query = $this->db->query($sql);
       

      
        return $query->getResult();
    }
}
