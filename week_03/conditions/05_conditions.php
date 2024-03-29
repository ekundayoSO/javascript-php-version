<?php

/**
Develop a function named assignGrade that:

Accepts a single argument, a numerical score.
Returns a letter grade for the score based on these criteria:
- 'A' for scores 90 and above.
- 'B' for scores 80 to 89.
- 'C' for scores 70 to 79.
- 'D' for scores 60 to 69.
- 'F' for scores below 60. 

*/

function assignGrade($score) {
    if ($score >= 90) {
        return "A";
    } elseif ($score >= 80 && $score <= 89) {
        return "B";
    } elseif ($score >= 70 && $score <= 79) {
        return "C";
    } elseif ($score >= 60 && $score <= 69) {
        return "D";
    } elseif ($score < 60) {
        return "F";
    }
}

// Sample usage - do not modify
echo('You got a ' . assignGrade(95)) . "\n"; // You got a A
echo('You got a ' . assignGrade(81)) . "\n"; // You got a B
echo('You got a ' . assignGrade(72)) . "\n"; // You got a C
echo('You got a ' . assignGrade(64)) . "\n"; // You got a D
echo('You got a ' . assignGrade(42)); // You got a F
