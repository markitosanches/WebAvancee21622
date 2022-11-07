<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');

class ControllerClient{

    public function index(){
        $client = new ModelClient;
        $select = $client->select();
        twig::render("client-index.php", ['clients' => $select, 
                                        'client_list' => "Liste de Client"]);
    }

    public function create(){
       twig::render('client-create.php');
    }

    public function store(){
     // print_r($_POST);
     $client = new ModelClient;
     $insert = $client->insert($_POST);
    requirePage::redirectPage('../client');
    }
}
?>


http://localhost:7080/wevAvancee21622/seance13/client/show/1