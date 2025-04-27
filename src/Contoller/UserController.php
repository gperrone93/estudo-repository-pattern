<?php 
/**
 * Classe que orquestra a entrada e saída dos dados 
 */

class UserController {

    private $userService; 

    public function __construct() {
        $this->userService = new UserService;
    }

    public function store(array $requestDados) {
        
        // Valida a requisição 
        $request = new UserRequest($requestDados); 
        $userDTO = $request->toDTO();

        // Chama a service onde terá a lógica negocial 
        $user = $this->userService->createUser($userDTO);   

        // Padroniza a resposta com um resouces
        $retorno = new UserResource($user);
        return $retorno->toArray();
    }

}