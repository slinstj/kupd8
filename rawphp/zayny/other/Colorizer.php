<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace zayny\other;

/**
 * Description of Colorizer
 *
 * @author Sidney Lins <slinstj at gmail.com>
 */
class Colorizer implements Colorizable
{
    public function applyColor(Watchable $item, string $color)
    {
        return "Colorizing " . get_class($item) . " to $color ...";
    }
}
