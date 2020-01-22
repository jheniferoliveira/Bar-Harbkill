<?php
class Produtos{

    /*atibutos*/
public $id;
public $nome;
public $preco;
public $quantidade;
public $categoria;

    /*metodos*/
public function listar(){
        $query = "SELECT id, nome, preco, quantidade, categoria FROM tb_produtos";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
}

public function inserir($nome, $preco, $quantidade, $categoria){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

    $query="INSERT INTO tb_produtos(nome, preco, quantidade, categoria) VALUES('".$nome."', '".$preco."', '".$quantidade."', '".$categoria."')";

    $conexao->exec($query);
}

public function alterar($id, $nome, $preco, $quantidade, $categoria){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

    $query = "UPDATE tb_produtos SET nome = '".$nome."' , preco = '".$preco."' , quantidade = '".$quantidade."' , categoria = '".$categoria."' WHERE id = " .$id;
    
    $conexao->exec($query);

}
public function excluir($id){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=barharbkill","root","");

    $query = "DELETE FROM tb_produtos WHERE id = " .$id;

    $conexao->exec($query);
}
}
