<?php 

// Create a function to say hello that, when called, will echo a hello message.
function lar_say_hello() {
	echo "Hello world!";
}

lar_say_hello(); // call the function






// The function lar_last_name(), when called, will echo numerous first names with the last name Faller.
function lar_last_name($lar_first_name) {
	echo "$lar_first_name Faller.<br>";
}

lar_last_name("Pop");// call the function to echo "Pop Faller"
lar_last_name("Doc");// call the function to echo "Doc Faller"
lar_last_name("Mac");// call the function to echo "Mac Faller"
lar_last_name("Bill");// call the function to echo "Bill Faller"
lar_last_name("Sal");// call the function to echo "Sal Faller"






// The function, lar_info() will echo the name and year given when called. 
function lar_info($lar_name,$lar_year) {
	echo "$lar_name Faller. Born in $lar_year <br>";
}

lar_info("Don","1923");// call the function to echo "Don Faller. Born in 1923."
lar_info("Ron","1987");// call the function to echo "Ron Faller. Born in 1987."
lar_info("Tom","1967");// call the function to echo "Tom Faller. Born in 1967."








// Function lar_heigt() will echo "The height is: ___cm." the variable, lar_min_height has a set default of 50. 
// If no value is given to the variable lar_min_height, it will use the default. 
function lar_height($lar_min_height=50) {
	echo "The height is: $lar_min_height cm.<br>";
}

lar_height(100);// call the function to echo "The height is: 100 cm."
lar_height(); // call the function to echo "The height is: 50 cm." 
//There is no value in the function brackets, so it will use the default value of 50

lar_height(234);// call the function to echo "The height is: 234 cm."
lar_height(1000000000);// call the function to echo "The height is: 1000000000 cm."







// Function lar_sum() will return $z, whcih is the sum of variables $x and $y.
function lar_sum($x,$y) {
	$z=$x+$y;
	return $z;
}

echo "5 + 10 = " . lar_sum(5,10) . "<br>"; // Echos the returned value of 15 --> "5 + 10 = 15"
echo "7 + 13 = " . lar_sum(7,13) . "<br>"; // Echos the returned value of 20 --> "7 + 13 = 20"
echo "2 + 4 = " . lar_sum(2,4); // Echos the returned value of 6 --> "2 + 4 = 6"








?>