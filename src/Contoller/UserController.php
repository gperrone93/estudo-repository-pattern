<?php 
/**
 * Classe que orquestra a entrada e saída dos dados 
 */

class UserController {

    private $userService; 

    public function __construct() {
        $this->userService = new UserService;
    }

    public function store(array $requestDados): array {
        
        // Valida a requisição 
        $request = new UserRequest($requestDados); 
        $userDTO = UserDTO::makeFromRequest($request);

        // Padroniza a resposta com um resouces
        // Resouces devolve o Retorno da service onde terá a lógica negocial 
        return (new UserResource($this->userService->createUser($userDTO)))->toArray();
        
    }

}