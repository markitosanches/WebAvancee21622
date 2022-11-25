<?php

class ModelUser extends Crud {

    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom', 'username', 'password', 'privilege_id'];

    
}

?>