<?php
function studentResults(int $m) {
    if ($m >= 75)
        echo "Distinction";
    else if ($m >= 50 && $m < 75)
        echo "Pass";
    else if ($m >= 40 && $m <= 49)
        echo "Supplementary";
    else
        echo "Fail";
}
echo studentResults(25);
echo "<br>";
echo studentResults(40);
echo "<br>";
echo studentResults(45);
echo "<br>";
echo studentResults(50);
echo "<br>";
echo studentResults(74);
echo "<br>";
echo studentResults(95);
echo "<br>";

include 'menu.inc';
?>
<iframe src="task6.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
