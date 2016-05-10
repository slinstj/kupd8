<?php

namespace zayny\other;
use zayny\other\Watchable;

/**
 * Description of Tv
 *
 * @author Sidney Lins <slinstj at gmail.com>
 */
class Tv
{
    public $item;

    public function __construct(Watchable $item)
    {
        $this->item = $item;
    }

    public function showOnScreen()
    {
        $this->item->watch();
    }
}
