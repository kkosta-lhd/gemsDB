<?php 

class gemManager extends Manager{
	
  public function getGem($arg){
    
    if(!is_numeric($arg)) return FALSE;
    
      $db = new Db();
    
      $id = $db -> quote($arg);
      $results = $db -> select("SELECT * from gems where ID = $id limit 1");
      
      foreach($results as $result){
        $gem = new Gem();
        $gem->hydrate($result);
      }
      
      return $gem;
    
  }
  public function getAllGems(){
    
      $db = new Db();
      $gems = array();
          
      $results = $db -> select("SELECT * from gems");
      
    foreach($results as $result){
        $gem = new Gem();
        $gem->hydrate($result);
        $gems[] = $gem;
      }
            
      return $gems;
      
  }
  public function save($gem){
    
    if ($gem->getID()) {
      $this->_update($gem);
    } else {
      $this->_add($gem);
    }
  }
  
  private function _add($gem){
    $db = new Db();
    
    $name = $db -> quote($gem->getName());
    $color = $db -> quote($gem->getColor());
    $mohs = $db -> quote($gem->getMohs());
    $family = $db -> quote($gem->getFamily());
    //echo $name;
    //var_dump($gem);
    //exit;

    $results = $db -> query("INSERT into gems (gemName, gemColor, Mohs, gemFamily) values ($name, $color, $mohs, $family);");

  }
  
  private function _update($gem){
    $db = new Db();

    $id = $db -> quote($gem->getID());
    //var_dump($gem);
    //exit;
    $name = $db -> quote($gem->getName());
    $color = $db -> quote($gem->getColor());
    $mohs = $db -> quote($gem->getMohs());
    $family = $db -> quote($gem->getFamily());
    //echo $name;


    $results = $db -> query("UPDATE gems SET gemName=$name, gemColor=$color, Mohs=$mohs, gemFamily=$family WHERE ID = $id;");

  }
  
  public function delete($arg){
    
    if(!is_numeric($arg)) return FALSE;
    
      $db = new Db();
    
      $id = $db -> quote($arg);
      $results = $db -> query("DELETE from gems where ID = $id");
  }
  
}

