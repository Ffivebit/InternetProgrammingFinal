<?php
function random_float($start_number = 0,$end_number = 1,$mul = 1000000)
{
if ($start_number > $end_number) return false;

return mt_rand($start_number * $mul,$end_number * $mul)/$mul;
}
echo "<p>Random Float Number</p>";
echo "<br>";
echo random_float(0,100)."<br>";
echo "<br>";
echo "<p>Refresh page to generate a new Random Float number between 0 & 100</p>"

?>