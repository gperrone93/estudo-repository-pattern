<?php
/**
 * Classe responsável por transportar os dados entre as camadas
 */
class UserDTO 
{
    public $nome, $email; 

    public function __construct($nome, $email) {
        $this->nome = $nome; 
        $this->email = $email;
    }
}