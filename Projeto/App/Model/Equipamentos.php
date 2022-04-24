<?php

class Equipamentos {
    private $id;
    private $numeroEq;
    private $pontoEq;
    private $ipEq;
    private $disponibilidadeEq;
    private $saldoAtual;
    private $saqueAnterior;
    private $totalSaques;
    private $descricao;

    //Funcoes SET
    public function setId($id){
        $this->id = $id;
    }
    public function setNumeroEq($numeroEq){
        $this->numeroEq = $numeroEq;
    }
    public function setPontoEq($pontoEq){
        $this->pontoEq = $pontoEq;
    }
    public function setIpEq($ipEq){
        $this->ipEq = $ipEq;
    }
    public function setDisponibilidadeEq($disponibilidadeEq){
        $this->disponibilidadeEq = $disponibilidadeEq;
    }
    public function setSaldoAtual($saldoAtual){
        $this->saldoAtual = $saldoAtual;
    }
    public function setTotalSaques($totalSaques){
        $this->totalSaques = $totalSaques;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    //Funcoes GET
    public function getId(){
        return $this->id;
    }
    public function getNumeroEq(){
        return $this->numeroEq;
    }
    public function getPontoEq(){
        return $this->pontoEq;
    }
    public function getIpEq(){
        return $this->ipEq;
    }
    public function getDisponibilidadeEq(){
        return $this->disponibilidadeEq;
    }
    public function getSaldoAtual(){
        return $this->saldoAtual;
    }
    public function getTotalSaques(){
        return $this->totalSaques;
    }
    public function getDescricao(){
        return $this->descricao;
    }
}