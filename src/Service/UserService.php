<?php

/**
 * Classe responsável pela lógica de negocio da aplicação. 
 */

class UserService {

    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository(); 
    }

    public function createUser(UserDTO $userDto) {
        // Posso fazer a lógica negócial 
        // Depois chamar a repository para fazer seu papel 
        return $this->userRepository->save($userDto);
    }
}