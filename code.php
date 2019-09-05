<?php $title= "Le Titre"; ?>
<?php require('debut_code_html.php');?>

<?php $mois = [
  "janvier"   => 31,
 "février"   => 28,
 "mars"      => 31,
 "avril"     => 30,
 "mai"       => 31,
 "juin"      => 30,
 "juillet"   => 31,
 "août"      => 31,
 "septembre" => 30,
 "octobre"   => 31,
 "novembre"  => 30,
 "décembre"  => 31
]; ?>

<?php echo "<ol>";
foreach ($mois as $c => $v)
  echo "<li> $c => $v </li>";
  echo "</ol>"; ?>

<?php require('fin_code_html.php');?>
