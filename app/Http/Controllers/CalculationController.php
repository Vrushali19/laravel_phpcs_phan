<?php

namespace App\Http\Controllers;

class CalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $numberOne, int $numberTwo): string
    {
        $sum = $numberOne + $numberTwo;
        $test = 7;
        return "Sum of number " . $numberOne . " and " . $numberTwo . " is " . $sum;
    }
}
