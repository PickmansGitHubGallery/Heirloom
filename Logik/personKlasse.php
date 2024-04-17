<?php

class Person{

  // Properties
  private $id;
  private $forNavn;
  private $efterNavn;
  //private $alder;
  private $fDag;
  private $fSted;
  private $køn;
  private $dDag;
  private $dSted;

  // Constructor
  function __construct($forNavn, $efterNavn, $fDag, $fSted, $køn, $dDag, $dSted) {
    $this->forNavn = $forNavn;
    $this->efterNavn = $efterNavn;
    //$this->alder = $alder;
    $this->fDag = $fDag;
    $this->fSted = $fSted;
    $this->køn = $køn;
    $this->dDag = $dDag;
    $this->dSted = $dSted;
  }

  // Methods
  

  // Setters
  function setId($id) {
    $this->id = $id;
  }
  function setForNavn($forNavn) {
    $this->forNavn = $forNavn;
  }
  function setEfterNavn($efterNavn) {
    $this->efterNavn = $efterNavn;
  }
  /*function setAlder($alder) {
    $this->alder = $alder;
  }
  */
  function setFdag($fDag) {
    $this->fDag = $fDag;
  }
  function setFsted($fSted) {
    $this->fSted = $fSted;
  }
  function setKøn($køn) {
    $this->køn = $køn;
  }
  function setDdag($dDag) {
    $this->dDag = $dDag;
  }
  function setdSted($dSted) {
    $this->dSted = $dSted;
  }
  // Getters
  function getId() {
    return $this->id;
  }
  function getForNavn() {
    return $this->forNavn;
  }
  function getEfterNavn() {
    return $this->efterNavn;
  }
  /*
  function getAlder() {
    return $this->alder;
  }
  */
  function getFdag() {
    return $this->fDag;
  }
  function getFsted() {
    return $this->fSted;
  }
  function getKøn() {
    return $this->køn;
  }
  function getDdag() {
    return $this->dDag;
  }
  function getDsted() {
    return $this->dSted;
  }
}

?>