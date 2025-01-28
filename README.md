# PHP Recursive Array Processing with Silent Error Handling

This repository demonstrates a subtle bug in a PHP function designed to recursively process an array. The function correctly handles numeric values and nested arrays but silently ignores non-numeric, non-array elements.  This can lead to unexpected behavior or data loss if these elements are crucial.

The `bug.php` file shows the problematic code. The `bugSolution.php` provides a solution that addresses this issue.

## Bug Description
The `processData` function in `bug.php` recursively processes an array. It doubles numeric values and merges the results. However, it lacks explicit error handling or logging for non-numeric, non-array elements, effectively ignoring them.

## Solution
The solution in `bugSolution.php` modifies the function to either throw an exception when it encounters unexpected data types or logs those elements for review and debugging.