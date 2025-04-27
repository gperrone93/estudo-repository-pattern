<?php 
/**
 * Classe responsável por validar uma requisição e devolver um DTO 
 */
class UserRequest 
{
    private $nome; 
    private $email; 

    public function __construct(array $dadosRequisicao) {
        if(empty($dadosRequisicao['nome'])) {
            throw new Exception("Nome Inválido");
            
        }

        if(empty($dadosRequisicao['email'])) {
            throw new Exception("Email inválido");
            
        }

        $this->nome = $dadosRequisicao['nome']; 
        $this->email = $dadosRequisicao['email']; 
    }

    public function toDTO(): UserDTO {
        return new UserDTO($this->nome, $this->email);
    }


}