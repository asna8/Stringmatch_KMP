<!-- Conventional string matching algo would give a complexity of O(mn) and therefore I have used he KMP alogorithm -->
<?php
$pattern = (string)$_POST['pattern'];
$text=(string)$_POST['text1'];
function preprocessMorrisPratt($pattern, &$nextTable)
{
  $i = 0;
  $j = $nextTable[0] = -1;
  $len = strlen($pattern);
 
  while ($i < $len) {
    while ($j > -1 && $pattern[$i] != $pattern[$j]) {
      $j = $nextTable[$j];
    }
 
    $nextTable[++$i] = ++$j;
  }
}
 

function MorrisPratt($text, $pattern)
{
  $n = strlen($text);
  $m = strlen($pattern);
  $nextTable = array();
  preprocessMorrisPratt($pattern, $nextTable);
 
  $i = $j = 0;
  while ($j < $n) {
    while ($i > -1 && $pattern[$i] != $text[$j]) {
      $i = $nextTable[$i];
    }
    $i++;
    $j++;
    if ($i >= $m) {
      return $j - $i;
    }
  }
  return -1;
}
$flag=MorrisPratt($text,$pattern);
if($flag>=0)
  echo '<br><br><h1 style="text-align:center">'."True";
else
  echo '<br><br><h1 style="text-align:center">'."False"; 
?>