<?php

namespace App\Entity;
use \App\Db\Database;
use \PDO;

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $data_nascimento;
    public $data_de_emissao;
    public $hora_emissao;


    public function create(){

        $this->data_de_emissao = date('Y-m-d');
        $this->hora_emissao = date('H:i:s');
        $database = new Database('usuarios');

        $this->id = $database->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha,
            'data_nascimento' => $this->data_nascimento,
            'data_de_emissao' => $this->data_de_emissao,
            'hora_emissao' => $this->hora_emissao
        ]);

        return true;
    }
    

    public function getUsuarios($where = null, $order = null, $limit = null){
        return (new Database('usuarios'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public function getUsuario($id){
        return (new Database('usuarios'))->select('id = '.$id)->fetchObject(self::class);
    }

    public function update(){
        return (new Database('usuarios'))->update('id = '.$this->id,[
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha,
            'data_nascimento' => $this->data_nascimento
        ]);
    }

    public function delete(){
        return (new Database('usuarios'))->delete('id = '.$this->id);
    }

    public function countUsuarios($where = null){
        return (new Database('usuarios'))->select($where, null, null, 'COUNT(*) as qtd')->fetchObject();
        
    }

    public function getUsuarioPorEmail($email){
        return (new Database('usuarios'))->select('email = "'.$email.'"')->fetchObject(self::class);
    }
}
