# bmi-calculator

### About

A simple bmi calculator built with modern PHP.

### Features

- Simple form accepting weight and height.

- Converts height from centimeters to meters before calculating.

- Evaluates calculated BMI against standard WHO tresholds.

- Rejects direct `GET` requests, redirecting unauthenticated or empty requests back to the form.

### How does it work?

Firstly the user enters the weight and height they wish to calculate.

Then the data gets send to the PHP script where the BMI Is calculated via a `POST` form.

The inputs get cast to `float` and height gets converted from cm to m.

Then after the BMI is calculated the script assigns it to a category.


### Plans for the future.

- Add CSS Styling.

- Add XSS Protection.

