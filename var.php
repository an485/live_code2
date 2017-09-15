<!DOCTYPE html>
<html>
<head>
	<title>Demo for definition of variables</title>
</head>
<body>
<h1>Welcome to IS218</h1>
<?php
echo "<h1>define an integer</h1>";
$int_var = 123456;
echo $int_var;
echo "<h1>define a double number</h1>";
$dou_var = 123.456;
echo $dou_var;
echo "<h1>define a boolean value</h1>";
$b_var = True;
if ($b_var) {
	echo "This will always print";
}else{
	echo "This will never print";
}
echo "<h1>define a constant varible</h1>";
define("MAX",100);
echo MAX;
echo "<h1>There are four ways to define a string varible</h1>";
echo "<h2>1. use single quotes to imporve PHP efficiency</h2>";
$f_name = 'Bongo';
$l_name = 'Zhao';
echo $f_name." ".$l_name;
echo "<h2>2. use double quotes for varible substitution</h2>";
$f_name = "Bongo";
$l_name = "Zhao";
echo "Full name: $f_name $l_name";
echo "<br>";
echo 'Full name: $f_name $l_name';
echo "<br>";
$apple_name="peach";
echo "I have four {$apple_name}es.";

echo "<h3>difference between single and double quotes</h3>";

echo "1. varible susstitution<br>2. escape sequences<br>";
echo "\"\\";
echo "<br>";
echo '\"$';
echo "<br>";

echo "<h2>3. Heredoc</h2>";

echo "<h3> example of multiple line</h3>";
$diff= <<<MSG
there are two reasons we choose heredoc<br>
1. mutiple line<br>
2. avoid escaping double quotes<br>
MSG;
echo $diff;

echo "<h3>example of avoiding escaping sequences</h3>";
$x = <<<MSG
heredoc: <br>
the point of the "argument" was to illustrate something<br>
MSG;
echo $x;
$x = "double quotes: <br>the point of the \"argument\" was to illustrate something<br>";
echo $x;

echo "<h2>4. Newdoc</h2>";
$newdoc_str=<<<'MSG'
newdoc string syntax essentially like single quoted strings.<br>
The difference is that not even single quotes or backslashes have to be escaped.<br>
MSG;
echo $newdoc_str;





















?>
<a href="https://web.njit.edu/~yz746/2017SP/mat/str_dis.html">PHP string definition summary</a></br>
<a href="https://stackoverflow.com/questions/5673269/what-is-the-advantage-of-using-heredoc-in-php">What is the advantage of using Heredoc in PHP ?</a>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>