```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, processData($item)); // Recursive call
        } elseif (is_numeric($item)) {
            $result[] = $item * 2; // Process numeric values
        } else {
            // Handle non-numeric and non-array elements appropriately
            // You might choose to ignore them, throw an exception or add them to a separate array for logging
            // The current implementation silently ignores non-numeric, non-array elements.
        }
    }
    return $result;
}

$data = [
    1, 2, 3,
    [4, 5, [6, 7]],
    8, 'a', 9
];

$processedData = processData($data);
print_r($processedData); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 [5] => 12 [6] => 14 [7] => 16 )
```