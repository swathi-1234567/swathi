<?php
echo"hi hello"
?>
<?php
echo"<br>"
?>
<?php
echo"hi"
?>
<?php
$txt="hello";
$x =5;
$y=2.3;
echo$txt;
echo"<br>";
echo$x;
echo"<br>";
echo$y;
?>
<?php
echo"<br>"
?>
<?php
$txt="amma";
echo"i love $txt";
?>
<?php
echo"<br>"
?>
<?php
$txt="amma";
echo"i love". $txt."!";
?>
<?php
echo"<br>"
?>
<?php
$x=4;
$y=7;
echo$x+$y;
?>
<?php
echo"<br>"
?>

<?php
echo"<br>"
?>
<?php
function mytext(){
    static$x=5;
    echo$x;
    $x++;
}
mytext();
mytext();
mytext();
?>
<?php
echo"<br>"
?>
<?php
$cars=array("swathi","vishnu","srinath");
echo"beatiful".$cars[0].   "handsom".$cars[1].    "super".$cars[2];
?>
<?php
echo"<br>"
?>
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
      case "green":
        echo "Your favorite color is green!";
        break;
        default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
