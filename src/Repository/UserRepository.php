<?php 

/**
 * Classe que lida exclusivamente com banco de dados e sql
 * Aqui poderia ter consultas complexas
 */

class UserRepository 
{
    public function save(UserDTO $userDTO){

        $user = new UserModel();
        $user->nome = $userDTO->nome; 
        $user->email = $userDTO->email; 

        // Aqui viria um método para salvar no banco de dados

        return $user; 
    }
}