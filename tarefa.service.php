<?php

//CRUD
class TarefaService(){

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa){ //tipagem do parâmetro que esta sendo recebido.
        $this->conexao = $conexao;
        $this->tarefa = $tarefa;
    }

    public function inserir(){ //creat

    }

    public function recuperar(){ //read

    }

    public function atualizar(){ //update

    }

    public function remover(){ //delete

    }
}

?>