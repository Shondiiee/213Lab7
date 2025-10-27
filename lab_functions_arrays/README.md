# 213Lab7
Function Practice


- **greet.php**: function that prints "Hello, World!".
- **greetName.php**: function that greets a user by their name. Function return "Alice" & "Bob" when called with "Alice" & "Bob" as parameter
- **add.php**: function that return the sum of two numbers.
- **convertCtoF**: function that takes in Celcius and convert it to Fahrenheit.
- **safeDivide**: function handles division by zero and return safe division

Practicing Arrays




Part 2:

1.Indexed Array

We discovered built-in functions like max() and min() to easily find the largest and smallest values in an array without manually looping through it.
This step taught us the importance of using echo to output results, and how to format strings with variables for clear display.

2.Associative Array

We learnt to create associative arrays using key-value pairs, such as $students = ["Alice" => 85, "Bob" => 92, "Charlie" => 78];, where keys are strings and values can be numbers or other types.
We practiced using a foreach loop to iterate over the array, accessing both the key ($name) and value ($grade) to print them dynamically. This helped us understand how associative arrays are useful for storing related data.

3.Array Modification

We learnt about array_push() to add elements to the end of an array, which modifies the original array in place and increases its size.
Also explored array_pop() to remove and return the last element, showing how arrays can be dynamically altered.
Then we used array_merge() to combine two arrays into one, creating a new array without changing the originals, and used implode() to display the array contents as a string.

4.Counting Values

We learnt to use array_count_values() to count the frequency of each unique value in an array, returning an associative array where keys are the values and values are their counts.
This step taught us how to iterate over the resulting count array with a foreach loop to display occurrences, like "90 appears 2 time(s)".
We understood that this function is efficient for analyzing data distributions without needing custom loops.
