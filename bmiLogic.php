<?php

declare(strict_types=1);


if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['height']) || empty($_POST['weight'])) {
    header('Location: index.html');
    exit;
}

function calculateBmi(float $weight, float $height): float
{
    return ($weight / ($height * $height));
}

function categorizeBmi(float $bmi): string
{
    if ($bmi < 18.5) {
        return "Underweight.";
    } elseif ($bmi < 25) {
        return "Normal weight.";
    } elseif ($bmi < 30) {
        return "Overweight.";
    } else {
        return "Obese.";
    }
}


$height = (float) $_POST['height'] / 100;
$weight = (float) $_POST['weight'];

$bmi = calculateBmi($weight, $height);

$category = categorizeBmi($bmi);

echo "Your bmi is:" . round($bmi, 1) . "<br>";
echo "Your category is: {$category}";
