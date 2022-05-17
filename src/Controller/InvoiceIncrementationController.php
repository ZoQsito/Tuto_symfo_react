<?php

namespace App\Controller;

use App\Entity\Invoice;
use Symfony\Component\Routing\Annotation\Route;


class InvoiceIncrementationController{
    
    public function __invoke(Invoice $data){

        dd($data);

    }


}





?>