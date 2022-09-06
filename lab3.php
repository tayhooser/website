<?php
$param = $_GET['param'];
echo "param is: " . $param . "<br>";
if ($param == "hello") {
    echo "Hello student!<br>";
} else {
    $num = $param*2+3;
    echo "number:" . $num . "<br>";
}
echo "<br>";
echo "<img src=\"my_diagram3.gif\"  style="width:800px;height:auto;"/>";
?> 
