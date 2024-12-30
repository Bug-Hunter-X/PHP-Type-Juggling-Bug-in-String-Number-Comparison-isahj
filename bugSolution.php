To fix this, use the strict comparison operator (`===`) instead of the loose comparison operator (`==`). The strict comparison operator checks for both value and type equality, preventing unintended type coercion.

```php
<?php
$value = "1";
if ($value === 1) {
    echo "Value is 1";
} else {
    echo "Value is not 1";
}
?>
```
This revised code will correctly identify that the string '1' is not strictly equal to the integer 1, producing the expected output.