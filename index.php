<?php 
/**
 * Arquivo inicial da aplicação
 * Aqui alguns dados foram mockados apenas para didática. 
 */

include 'src/Contoller/UserController.php';
include 'src/Service/UserService.php';
include 'src/Repository/UserRepository.php';
include 'src/Request/UserRequest.php';
include 'src/DTO/UserDTO.php';
include 'src/Resouce/UserResource.php';
include 'src/Model/UserModel.php';

$userController = new UserController();

// Se algum dado faltar na requisição o userRequest irá barrar
$userFake = [
    'nome' => 'gabriel',
    'email' => 'gabriel.perrone93@gmail.com'
];

// Tenta a inserção ou lança a excessão gerada pelo UserRequest
try {
    $newUser = $userController->store($userFake);

    echo 'Usuario Cadastrado '; 
    
    print_r($newUser);

} catch(Exception $e) {
    echo "Erro ao processar Requisição " . $e->getMessage(); 
}



