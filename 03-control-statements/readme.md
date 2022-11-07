# Conditionals

> if ... else if ... else
> switch

# Loops

> while
> do ... while
> for 
> foreach

# Logical operators

```php
!true; 

$a and $b;
$a && $b;

$a or $b;
$a || $b;

$a xor $b; // one is true but both
```

# Short circuit evaluation
The value of the second will only be evaluated if the first is truthy.

```php
function php() {
	return true;
}

$a = false && php();
$b = false and php();
```

```php
if ($todayIsSunday && $isNotRaining) {
	echo "Let's have a BBQ at mine!";
}