<?php

/*
Compose a function called pluralize that:

Accepts two arguments: a noun and a number.
Returns a string combining the number and the appropriately pluralized form of the noun, such as '5 cats' or '1 dog'.

 */
function pluralize($noun, $number) {
    if ($number !== 0 && $number !== 1) {
        return $number . ' ' . $noun . "s";
    } else {
        return $number . ' ' . $noun;
    }
}

// Sample usage - do not modify
echo('I have ' . pluralize('cat', 0)) . "\n";
echo('I have ' . pluralize('dog', 1)) . "\n";
echo('I have ' . pluralize('parrot', 7));
