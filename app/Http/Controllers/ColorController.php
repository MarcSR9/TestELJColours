<?php

namespace App\Http\Controllers;

use ColorThief\ColorThief;

class ColorController extends Controller
{
    public function getColor($sourceImage, $quality = 10, $area = null)
    {
        var $color = ColorPalette::getColor(/*Imagen cargada*/);

        echo $color;
        echo $color->rgbString;
        echo $color->rgbaString;
        echo $color->int;
        print_r($color->rgb);
        print_r($color->rgba);
    }

    public function calculateColor()
    {
        $colors = array(/*Array de colores, valor en rgba*/);
        $largestDiff = 0;
        $closestColor = "";
        foreach ($colors as $name => $rgbColor)
        {
            if (colorDiff($rgbColor,$rgb) > $largestDiff)
            {
                $largestDiff = colorDiff($rgbColor,$rgb);
                $closestColor = $name;
            }
        }
        return $closestColor;
    }
}
