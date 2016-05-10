<?php

namespace zayny\other;

/**
 *
 * @author Sidney Lins <slinstj at gmail.com>
 */
interface Colorizable
{
    public function applyColor(Watchable $itemToColorize, string $color);
}
