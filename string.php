<!DOCTYPE html>
<html>
<body>


<?php
echo "-------------------------";
echo "<h1>Welcome to IS218</h1>";
echo "-------------------------";

echo "<h1>There are four ways to define a string varible!</h1>";

echo "<h2>1. Use single quotes to improve PHP efficiency</h2>";

$f_name = 'Bong';
$l_name = 'Zhao';
echo $f_name;
echo " ";
echo $l_name;
echo "<br>";

$f_name = "Bong";
$l_name = "Zhao";

echo "<h2>2. Use doule quotes for variable substitution</h2>";
$name = "Name: $f_name";
$full_name = "Full Name: $f_name $l_name";
echo $name;
echo "<br>";

echo $full_name;
echo "<br>";

$apple_name = "peach";

echo "I have four {$apple_name}es.<br>";

echo "<h3>--difference between single and double quotes--</h3>";

echo "Variables and most escape sequences will not be interpreted in single quotes. Double quotes is the oppsite<br>";

echo "<h4>escape sequences</h4>";
echo "\"";
echo "<br>";
echo '\"';
echo "<br>";

echo "<h4>Variables</h4>";
$place = "NJIT";
echo "$place";
echo "<br>";
echo '$place';
echo "<br>";

echo "<h2>3. Use Heredoc</h2>";

echo <<<MSG
there are two reasons we choose heredoc sometimes:<br> 
1. multiple line<br> 
2. avoid escaping double quotes<br><br>
MSG;

echo "<h3>multiple lines</h3>";
$tablename = "haha";
$order_ids_list = "1 2 3";
$sql = <<<SQL
select *
  from $tablename
 where id in [$order_ids_list]
   and product_name = "widgets"
SQL;
echo $sql;
echo "<br>";
echo "<h3>avoid escaping double quotes</h3>";
$x = "The point of the \"argument\" was to illustrate the use of here documents";
echo $x;
echo "<br>";
$x = <<<EOF
The point of the "argument" was to illustrate the use of here documents
EOF;
echo $x;

echo "<h2>4. Use Newdoc for multiple lines</h2>";

$foo = 'bar';

$here = <<<HERE
    I'm here, \$ $foo!
HERE;

$now = <<<'NOW'
    I'm now, \$ $foo!
NOW;
echo $here;
echo "<br>";
echo $now;
echo "<br>";

echo "<h1>Concise Summary</h1>";
$ss= <<<EOF
1. mutiple lines -- heredoc and newdoc <br>
2. avoiding escaping characters -- double quotes <br>
3. show string as it is -- single quotes and nowdoc <br>
EOF;
echo $ss;
echo "<br>";
echo "<h1>Summary</h1>";
?>
<a href="https://web.njit.edu/~yz746/2017SP/mat/str_dis.html">PHP string definition summary</a></br>
<a href="https://stackoverflow.com/questions/5673269/what-is-the-advantage-of-using-heredoc-in-php">What is the advantage of using Heredoc in PHP ?</a>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
</body>
</html>

