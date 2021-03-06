<?php

    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
            
        }

        public function inserir(){
            $query = 'INSERT INTO tb_tarefas(tarefa)values(:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar(){
            $query = 
                'SELECT 
                    t.id, s.status, t.tarefa 
                FROM tb_tarefas as t
                    left join tb_status as s on (t.id_Status = s.id)'
            ;
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizar(){

            $query = "UPDATE tb_tarefas set tarefa = :tarefa where id = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            return $stmt->execute();

        }

        public function remover(){

            $query = 'DELETE FROM tb_tarefas WHERE id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();

        }

        public function Realizar(){

            $query = "UPDATE tb_tarefas set id_status = :id_status where id = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            return $stmt->execute();

        }

    }

?>