<?php

/**
 * User Object
 */
class Gem{
  
  private $_id;
  private $_name;
  private $_color;
  private $_mohs;
  private $_family;

  public function getID(){return $this->_id;}
  public function setID($arg){$this->_id = $arg;}
  
  public function getName(){return $this->_name;}
  public function setName($arg){$this->_name = $arg;}
  
  public function getColor(){return $this->_color;}
  public function setColor($arg){$this->_color = $arg;}
  
  public function getMohs(){return $this->_mohs;}
  public function setMohs($arg){$this->_mohs = $arg;}
  
  public function getFamily(){return $this->_family;}
  public function setFamily($arg){$this->_family = $arg;}
  
  public function hydrate($arr) {
    $this->setID(isset($arr["ID"])?$arr["ID"]:'');
    $this->setName(isset($arr["gemName"])?$arr["gemName"]:'');
    $this->setColor(isset($arr["gemColor"])?$arr["gemColor"]:'');
    $this->setMohs(isset($arr["Mohs"])?$arr["Mohs"]:'');
    $this->setFamily(isset($arr["gemFamily"])?$arr["gemFamily"]:'');
  }
  
}

