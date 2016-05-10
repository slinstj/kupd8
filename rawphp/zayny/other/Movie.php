<?php

namespace zayny\other;
use zayny\other\Watchable;

/**
 * Description of Movie
 *
 * @author Sidney Lins <slinstj at gmail.com>
 */
class Movie implements Watchable
{
    public $colorizer;

    public function __construct(Colorizable $colorizer)
    {
        $this->colorizer = $colorizer;
    }
    public function putColor($color)
    {
        return $this->colorizer->applyColor($this, $color);
        return $this;
    }

    public function watch()
    {
        echo "Watching something.<br>";
        echo $this->putColor('BLUE');
        return $this;
    }
}
