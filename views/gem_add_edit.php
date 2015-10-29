<form action="gem.php" method="GET">
  <input type="hidden" name ="id" value="<?= $gem->getID() ?>">
  <input type="hidden" name ="action" value="save_gem">

  <label>Gem Name</label><input type="text" name="name" value="<?= $gem->getName() ?>"><br>
  <label>Gem Color</label><input type="text" name="color" value="<?= $gem->getColor() ?>"><br>
  <label>Mohs Hardness</label><input type="text" name="mohs" value="<?= $gem->getMohs() ?>"><br>
  <label>Gem Family</label><input type="text" name="family" value="<?= $gem->getFamily() ?>"><br>
  </label><input type="submit" value="Save" class='button'></form>


