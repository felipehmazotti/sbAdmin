<?php

require_once './models/ConexaoBanco.php';

class Pessoa extends ConexaoBanco {
    function __construct(){
        parent::__construct();
    }

    function selectAll(){
        $sql = $this->conBD->prepare("SELECT * FROM pessoa ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll();
    }

    function insert($data) {
        $sql = $this->conBD->prepare("INSERT INTO pessoa (nome, cpf, idade, telefone, email, endereco, observacao) VALUES (:nome, :cpf, :idade, :telefone, :email, :endereco, :observacao)");
        $sql->bindParam(':nome', $data['nome']);
        $sql->bindParam(':cpf', $data['cpf']);
        $sql->bindParam(':idade', $data['idade']);
        $sql->bindParam(':telefone', $data['telefone']);
        $sql->bindParam(':email', $data['email']);
        $sql->bindParam(':endereco', $data['endereco']);
        $sql->bindParam(':observacao', $data['observacao']);
        $sql->execute();
        return $sql->rowCount();
    }

    function delete($id) {
        $sql = $this->conBD->prepare("DELETE FROM pessoa WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        return $sql->rowCount();
    }

    function update($data) {
        $sql = $this->conBD->prepare("UPDATE pessoa SET nome=:nome, cpf=:cpf, idade=:idade, telefone=:telefone, email=:email, endereco=:endereco, observacao=:observacao WHERE id=:id");
        $sql->bindParam(':id', $data['id']);
        $sql->bindParam(':nome', $data['nome']);
        $sql->bindParam(':cpf', $data['cpf']);
        $sql->bindParam(':idade', $data['idade']);
        $sql->bindParam(':telefone', $data['telefone']);
        $sql->bindParam(':email', $data['email']);
        $sql->bindParam(':endereco', $data['endereco']);
        $sql->bindParam(':observacao', $data['observacao']);
        $sql->execute();
        return $sql->rowCount();
    }
}