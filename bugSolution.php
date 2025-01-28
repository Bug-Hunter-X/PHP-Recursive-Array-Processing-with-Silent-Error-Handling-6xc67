```php
function processData(array $data): array
{
    $result = [];
    $invalidElements = []; // Array to store invalid elements
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, processData($item));
        } elseif (is_numeric($item)) {
            $result[] = $item * 2;
        } else {
            // Handle non-numeric and non-array elements
            $invalidElements[] = $item;
        }
    }

    if (!empty($invalidElements)) {
        // Log the invalid elements or throw an exception
        error_log('Invalid elements encountered: ' . json_encode($invalidElements)); // log them
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
// Check error logs to see the invalid elements
```