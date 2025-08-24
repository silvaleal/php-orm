<?php

########################################################################################
#                                                                                      #
#       Arquivo para praticar o ORM, sinta-se livre para fazer seus testes aqui.       #
#                                                                                      #                
########################################################################################
require "autoloader.php";

use App\Models\User;
use App\Database\Database;

$database = new Database(); # Classe que fica salvo o método de conectar com o seu banco de dados.

$model = new User($database);

// $model->select()
//         ->innerJoin('guilds', 'users.id = guilds.owner_id')
//         ->where('id', 1);

// print_r($model->first());

// $model->delete()->where('email', 'email@email.com');

$model->update([
        "name"=>'123',
        "email"=>'email@email.com'
])->where('email', 'email@email.com');

print($model->query);