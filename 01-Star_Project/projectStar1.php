<?php 

echo "star1";
echo "<br>";
echo "<br>";

for ($i=1; $i<=5; $i++) {

    for ($j=1; $j<=$i; $j++) {
        echo "*";
        
    }

    echo "<br>";
    
}

echo "<br>";
echo "<br>";

echo "star2";
echo "<br>";
echo "<br>";

for ($i=1; $i<=5; $i++) {

    for ($j=1; $j<=5-$i; $j++) {
        echo "&nbsp;&nbsp;";
        
    }
 for ($j=1; $j<=$i; $j++) {
        echo "*";
        
    }
    echo "<br>";
    
}



echo "<br>";
echo "<br>";

echo "star3";
echo "<br>";
echo "<br>";

for ($i=5; $i>=1; $i--) {

    for ($j=1; $j<=$i; $j++) {
        echo "*";
        
    }

    echo "<br>";
    
}





echo "star4";
echo "<br>";
echo "<br>";

for ($i=5; $i>=1; $i--) {

    for ($j=1; $j<=5-$i; $j++) {
        echo "&nbsp;&nbsp;";
        
    }
 for ($j=1; $j<=$i; $j++) {
        echo "*";
        
    }
    echo "<br>";
    
}



echo "star 5";
echo "<br>";
echo "<br>";




for ($i = 1; $i <= 5; $i++) {


    for ($j = 1; $j <= 5 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "<br>";
}


for ($i = 5 - 1; $i >= 1; $i--) {


    for ($j = 1; $j <= 5 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

 
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "<br>";
}

?>