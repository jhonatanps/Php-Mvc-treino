<?php

namespace SON\Db;

abstract class Table{
    protected $db;
    protected $table;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function listaTudo(){
        $query = "select * from {$this->table}";
        return $this->db->query($query);
    }

    public function ultimos10(){
        $query = "select * from {$this->table} where novo = 1 order by id_jogador desc limit 10";
    }
}