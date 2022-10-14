
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo "{$value} " . "</br>";
    unset($value);
}
// $arr is now array(2, 4, 6, 8)
echo "</br>";
// without an unset($value), $value is still a reference to the last item: $arr[3]

foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$value} " . "</br>";
    
}
// ...until ultimately the second-to-last value is copied onto the last value

// output:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
?>
</br>
<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == $arr[2]) {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}
?>
</br>
<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == "stop") {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}
?>