<?php
class Funcionario{

//atributos 
    public $id;
    public $nome;
    public $email;
    public $endereco;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;
    public $cpf;
    public $rg;
    public $celular;
    public $telefone;
    

    //métodos
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

        $query = "SELECT id, nome, rg, cpf, celular, email FROM tb_funcionarios";

        $resultado = $conexao->query($query);

        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function inserir($nome,$email, $endereco, $numero, $bairro, $cidade, $estado, $cpf, $rg, $celular, $telefone){
        $conexao=new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

        $query="INSERT INTO tb_funcionarios(nome, email, endereco, numero, bairro, cidade, estado, cpf, rg, celular, telefone) VALUES('".$nome."','".$email."','".$endereco."','".$numero."','".$bairro."','".$cidade."','".$estado."','".$cpf."', '".$rg."', '".$celular."','".$telefone."')";

        $conexao->exec($query);
        
    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

        $query = "DELETE FROM tb_funcionarios WHERE id = ".$id;

        $conexao->exec($query);
    }

    public function alterar($id,$nome,$email, $endereco, $numero, $bairro, $cidade, $estado, $cpf, $rg, $celular, $telefone){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

        $query = "UPDATE tb_funcionarios SET nome = '".$nome."' ,email = '".$email."' ,endereco = '".$endereco."' ,numero = '".$numero."', bairro = '".$bairro."',cidade = '".$cidade."' , estado = '".$estado."' , nome = '".$nome."'   cpf = '".$cpf."' , rg = '".$rg."', celular = '".$celular."', telefone = '".$telefone."'   WHERE id = " .$id;
        
        $conexao->exec($query);

    }

}