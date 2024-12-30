# PHP Type Juggling Bug

This repository demonstrates a common, yet subtle, bug in PHP related to type juggling and loose comparisons. The code compares a string value ('1') with an integer (1) using the loose comparison operator (`==`). This leads to unexpected results because PHP implicitly converts the string to an integer for the comparison, resulting in a true evaluation even though the types are different.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the output (it will show "Value is 1").

## Solution

The solution involves using strict comparison (`===`) which checks for both value and type equality. The file `bugSolution.php` demonstrates the correct approach.