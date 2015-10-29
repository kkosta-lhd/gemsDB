<!DOCTYPE html>
<html>
  <head>
    <title>Gems ORM/MVC</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body>
    <h2>List of Popular Gems</h2>
    <?php
      require_once('../lib/db.interface.php');
      require_once('../lib/db.class.php');
      require_once('../models/gem.class.php');
      require_once('../models/manager.abstract.php');
      require_once('../models/gem_manager.class.php');
      

      $action = isset($_GET["action"])?$_GET["action"]:'';
      $target = isset($_GET["target"])?$_GET["target"]:'';
      
      
      switch ($action) {
        case 'view_gem':
          $gemManager = new gemManager();
          $gem = $gemManager->getGem($target);
          include('../views/gem_view.php');
          break;    
         
        case 'delete_gem':
          $gemManager = new gemManager();
          $gemManager->delete($target);
          header('Location: gem.php');
          break;
          
        case 'add_gem':
          $gemManager = new gemManager();
          $gem = new Gem();
          include('../views/gem_add_edit.php');
          break;         
          
        case 'edit_gem':
          $gemManager = new gemManager();
          $gem = $gemManager->getGem($target);
          include('../views/gem_add_edit.php');
          break;          
          
        case 'save_gem':
          $gemManager = new gemManager();
          $arr = array();
          $arr["ID"] = isset($_GET["id"])?$_GET["id"]:'';
          $arr["gemName"] = isset($_GET["name"])?$_GET["name"]:'';
          $arr["gemColor"] = isset($_GET["color"])?$_GET["color"]:'';
          $arr["Mohs"] = isset($_GET["mohs"])?$_GET["mohs"]:'';
          $arr["gemFamily"] = isset($_GET["family"])?$_GET["family"]:'';
          $gem = new Gem();
          $gem->hydrate($arr);
          $gemManager->save($gem);
          header('Location: gem.php');
          break;                 
            
        default:
          $gemManager = new gemManager();
          $gems = $gemManager->getAllGems();
          include('../views/gem_view_list.php');
          break;
      }
    ?>
  
</body>
</html>


