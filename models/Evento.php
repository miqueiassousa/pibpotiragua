<?php

ini_set('default_charset', 'utf-8');
/* 

-- Esta classe ira contemplar nos elementos do usuario
-- Tudo que for relacionado a manipulação dos dados
-- Nome em maiusculo, quantidade caractere, primeira letra maisculo etc 

*/

class Evento {
    private $id;
    private $nome;
    private $local;

    public function getId() {
        return $this->id;
    }

    public function setId($i) {
        $this->id = trim($i);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = ucwords(trim($n));
    }

    public function getlocal() {
        return $this->local;
    }

    public function setlocal($l) {
        $this->local = $l;
    }

    public function getData() {
        return $this->data;
    }

    public function setdata($d) {
        $this->data = $d;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function sethorario($h) {
        $this->horario = $h;
    }

}

// Não é obrigatorio a criação da interface, mas é uma forma de padronização
interface EventoDAO {
    
    public function findAll();
   
   
}
