<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected  $table = 'ticket';
    protected $primarykey = 'tid';
    protected $allowedFields = [
        'customerName',
        'departMentId',
        'propity_id',
        'status_id',
        'titleProblem',
        'problemDescription',
        'createdAt'
    ];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $this->db->table("ticket");

    }

    public function ticket_insert($data = array())
  {
     return $this->builder->insert();
  }

    public function get_all_ticket()
    {
      
        $query = $this->db->query("SELECT ticket.tid , customerName,  prority.id ,
        statuss.sid,statuss.name,department.departmentName ,
        prority.prorityName FROM ticket  INNER JOIN statuss ON ticket.status_id= statuss.sid INNER JOIN prority ON ticket.propity_id= prority.id
          INNER JOIN department ON ticket.departMentId= department.id");
        return $query->getResult();
    }
    public function get_by_id($id)
    {
        // $sql = 'select * from ticket where tid ='.$id ;
        $sql = 'SELECT ticket.tid , customerName, prority.id ,
         statuss.sid,statuss.name,department.departmentName , prority.prorityName 
         FROM ticket INNER JOIN statuss ON ticket.status_id= statuss.sid INNER JOIN prority ON 
         ticket.propity_id= prority.id INNER JOIN department ON ticket.departMentId= department.id where ticket.tid=' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }
    public function getStatusId($id)
    {
        $sql = 'select * from statuss where sid =' . $id;
        $query = $this->db->query($sql);
        return json_encode($query);
    }
    public function storeData($customerName,$prority,$department,$status,$title,$description){
        $query="INSERT INTO `ticket`( `customerName`, `departMentId`, `propity_id`, `status_id`,`titleProblem`,problemDescription) 
		VALUES ('$customerName','$department','$prority','$status','$title','$description')";
		$this->db->query($query);
    }
}
