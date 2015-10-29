<ul>
  <li><?= $gem->getID(); ?></li>
  <li>The name of the gemstone is <?= $gem->getName(); ?>.</li>
  <li>The color is <?= $gem->getColor(); ?>.</li>
  <li>The Mohs index number is <?= $gem->getMohs(); ?>.</li>
  <li>The gemstone family is <?= $gem->getFamily(); ?>.</li>
</ul>

<a href='gem.php' class='button'>View All Gems</a>
<a href='gem.php?action=delete_gem&target=<?= $gem->getID() ?>' class='button'>Delete Gem</a>
<a href='gem.php?action=edit_gem&target=<?= $gem->getID() ?>' class='button'>Edit Gem</a>


