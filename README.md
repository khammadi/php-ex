# PHP Exercises - Boucles et Fibonacci

This repository contains solutions to two PHP exercises focusing on loops and algorithms.

## Files Included

### 1. `boucles.php` (Exercise 3 - Loops and Iterations)

A comprehensive PHP page with an interactive HTML form that performs multiple calculations based on a user-input integer `n`.

#### Features:

**Input:** An integer `n` via HTML form

**Outputs:**

1. **Multiplication Table** - Displays the multiplication table of n from 1 to 10
   - Format: `5 x 1 = 5`, `5 x 2 = 10`, etc.

2. **Centered Star Triangle** - Creates a centered triangle pattern with height n
   - Example for n=5:
     ```
         *
        **
       ***
      ****
     *****
     ```

3. **Star Square** - Draws a hollow square of size n×n with asterisks
   - Example for n=5:
     ```
     *****
     *   *
     *   *
     *   *
     *****
     ```

4. **Even Numbers** - Lists all even numbers from 1 to n
   - Example for n=10: `2, 4, 6, 8, 10`

5. **Sum Calculation** - Calculates the sum of all integers from 1 to n
   - Formula: `Sum = 1 + 2 + 3 + ... + n`

6. **Odd/Even Check** - Determines whether n is even or odd

#### How to Use:

1. Open `boucles.php` in a web browser
2. Enter a positive integer in the form
3. Click "Calculer" (Calculate)
4. View all the calculations and patterns displayed below

---

### 2. `fibonacci.php` (Exercise 4 - Fibonacci Sequence)

A PHP page that calculates and displays the first 100 terms of the Fibonacci sequence.

#### Features:

**The Fibonacci Sequence is defined as:**
- F₀ = 0
- F₁ = 1
- Fₙ = Fₙ₋₂ + Fₙ₋₁ for n > 1

**Output:**

Displays all 100 terms of the Fibonacci sequence in the format:
```
F0 = 0
F1 = 1
F2 = 1
F3 = 2
F4 = 3
F5 = 5
...
F99 = [very large number]
```

Also includes **Statistics:**
- First term (F₀)
- Second term (F₁)
- 100th term (F₉₉)
- Total number of terms generated

#### How to Use:

1. Open `fibonacci.php` in a web browser
2. The page automatically calculates and displays all 100 Fibonacci terms
3. No user input required

---

## Requirements

- PHP 5.4 or higher
- Web server (Apache, Nginx, etc.) or PHP's built-in server

## Running Locally

### Using PHP's Built-in Server:

```bash
cd /home/khammadi/php-ex  ,(use your directory path)
php -S localhost:8000
```

Then open your browser and navigate to:
- `http://localhost:8000/boucles.php` for Exercise 3
- `http://localhost:8000/fibonacci.php` for Exercise 4

### Using Apache or Nginx:

Place these files in your web server's document root and access them through your configured domain/URL.

---

## File Structure

```
php-ex/
├── README.md           # This file
├── boucles.php         # Exercise 3: Loops and Iterations
├── fibonacci.php       # Exercise 4: Fibonacci Sequence
```

---

## Author

Created as solutions to PHP programming exercises on loops, iterations, and algorithms.

---

## Notes

- Both pages include professional CSS styling for better user experience
- Input validation is included in `boucles.php` to ensure positive numbers
- All calculations are performed server-side using PHP
- The pages are responsive and work on different screen sizes
