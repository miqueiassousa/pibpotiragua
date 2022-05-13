<?php

require_once 'models/Evento.php';

ini_set('default_charset', 'utf-8');
/*

-- Esta classe ira fazer toda parte do banco de dados
-- Puxar informações do banco
-- Adicionar, Criar, excluir etc... 

*/
class EventoDaoMysql implements EventoDAO // Existe um padrão de metodos que tera que ser criado na classe
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    
    public function findAll() {
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM eventos");
        
        if ($sql->rowCount() > 0) {
            $lista = $sql->fetchAll();

            foreach($lista as $item) {
                $e = new Evento();
                $e->setId($item['id']);
                $e->setNome($item['nome']);
                $e->setLocal($item['local']);
                $e->setData($item['data']);
                $e->setHorario($item['horario']);

                $array[] = $e;
            }
        }

        return $array;
    }
          
}
