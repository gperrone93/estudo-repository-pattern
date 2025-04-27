<?php
/**
 * Classe responsável por padronizar a resposta da aplicação. 
 */
class UserResource
{
    private $user; 

    public function __construct(UserModel $userModel) {
        $this->user = $userModel;
    }

    public function toArray() {
        return [
            'nome_usuario' => $this->user->nome,
            'email_usuario' => $this->user->email
        ];
    }
}