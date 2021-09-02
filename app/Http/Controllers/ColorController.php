<?php

namespace App\Http\Controllers;

use ColorThief\ColorThief;

class ColorController extends Controller
{
    public function getColor($sourceImage, $quality = 10, $area = null)
    {
        return new Color(ColorThief::getColor($sourceImage, $quality, $area));
    }

    public function calculateColor()
    {

    }
}
