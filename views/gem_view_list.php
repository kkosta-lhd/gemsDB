<table>
  <tr>
    <td style="border-bottom: solid 1px #000;"></td>
    <td style="border-bottom: solid 1px #000;">Gem Name</td>
    <td style="border-bottom: solid 1px #000;">Gem Color</td>
    <td style="border-bottom: solid 1px #000;">Mohs</td>
    <td style="border-bottom: solid 1px #000;">Gem Family</td>
    <td style="border-bottom: solid 1px #000;"></td>
  </tr>
  <?php foreach ($gems/*gem object*/ as $gem) {?>

    <tr>
      <td><?php echo $gem->getID();?></td>
      <td><?php echo $gem->getName();?></td>
      <td><?php echo $gem->getColor();?></td>
      <td><?php echo $gem->getMohs();?></td>
      <td><?php echo $gem->getFamily();?></td>
    <td><a href='gem.php?action=view_gem&target=<?= $gem->getID() ?>' class='button'>view</a></td></td>
  </tr>
  <?php } ?>
</table>   
<br><br>
<a href='gem.php?action=add_gem' class='button'>Add New Gem</a>
 
    
    
    
    
