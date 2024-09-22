<!DOCTYPE html>

<html>

<head>
        <meta charset="UFT-8">
</head>

<body>

<?php

    $a = 8;
    $b = 3;
    $c = 5;

    print "(\$a==\$b)&&(\$c>\$b)".(($a==$b)&&($c>$b)?'true':'false')."\n";
    print "(\$a == \$b) || (\$b == \$c)".(($a == $b) || ($b == $c)?'true':'false')."\n";
    print "(\$b <= \$c)".(($b <= $c)?'true':'false')."\n";



?>
</body>
</html>