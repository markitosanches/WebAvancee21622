<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');

class ControllerClient{

    public function index(){
        $client = new ModelClient;
        $select = $client->select();
        //print_r($select);
        $view = new View('client-index');
        $view->output('clients', $select);
    }

    public function create(){
        $view = new View('client-create');
    }

    public function store(){
       // echo 'Salut';
    }
}
?>