<?php

namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;

use App\Models\TicketModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestInterface;

class CustomerTicket extends ResourceController
{
  

    public function indexcustomer()
    {
        $ticket_Model = new \App\Models\TicketModel();
        $data['tickets']  = $ticket_Model->get_all_ticket();
        $departMentModel = new \App\Models\DepartMentModel();
        $data['departMent']  = $departMentModel->get_department();
        $prorityModel = new \App\Models\ProrityModel();
        $data['prority'] =  $prorityModel->get_prority();
        //$data['tickets']  =  "welcome";
        return view("appcustomers", $data);
    }
    //get All Tickets 
    public function getTicketEmp()
    {
        $ticket_Model = new \App\Models\TicketModel();
        $data['tickets']  =  $ticket_Model->get_all_ticket();
        return $this->response->setJSON($data);
    }


    public function store()
    {


        $request = service('request');

     
        $ticket = new  \App\Models\TicketModel();
        
            $customerName =$request->getpost('customerName');
            $departMentId = $request->getpost('prority');
            $propity_id   = $request->getpost('department');
            $status_id = 1;
            $titleProblem = $request->getpost('title');
            $problemDescription = $request->getvar('desc');
    
        $ticket->storeData( $customerName,$departMentId,$propity_id,$status_id,$titleProblem,$problemDescription);
        $data = ['status' => 'ticket Inserted DataBase'];
        return $this->response->setJSON($data);
    
}
}
