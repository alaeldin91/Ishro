<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TicketModel;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use Psr\Log\LoggerInterface;

class TicketController extends ResourceController
{
    // home Page User Index

    public function indexUser()   //function indexUser  
    {
        $ticket_Model = new \App\Models\TicketModel();
        $data['tickets']  = $ticket_Model->get_all_ticket();
        //$data['tickets']  =  "welcome";
        return view("appadmin",$data);
    }
    //get All Tickets 
    public function getTicketEmp()
    {
        $ticket_Model = new \App\Models\TicketModel();
        $data['tickets']  =  $ticket_Model->get_all_ticket();


        return $this->response->setJSON($data);
    }
    public function editTicket($id)       //Replay And Edit Ticket
    {

        $this->TicketModel = new TicketModel();
        $data = $this->TicketModel->get_by_id($id);
        echo json_encode($data);
    }
    function get_status()             //function get Status(answer/progree/not Answer)
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->TicketModel->get_status($id)->result();
        echo json_encode($data);
    }
    public function ticketAdd()          //function Add Ticket 
    {
        if ($this->input->post()) {
            $this->TicketModel = new TicketModel();
            $datenow = date('y-m-d H:i:s');
            $customerName = $this->input->post('customerName');
            $status_prority = $this->input->post('status_prority');
            $status_department = $this->input->post('status_department');
            $title = $this->input->post('title');
            $description = $this->input->post('textarea');

            $data = array(
                'customerName' => $customerName,
                'departMentId' => $status_department,
                'propity_id'  => $status_prority,
                'status_id'    => 1,
                'titleProblem' => $title,
                'problemDescription' => $description,
                'createdAt'      => $datenow


            );

            $insert = $this->TicketModel->saverecords($data);
            echo json_encode(array("status" => TRUE));
        }
    }
}
