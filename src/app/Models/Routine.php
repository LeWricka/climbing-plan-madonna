<?php

namespace App\Models;

use DateTime;

class Routine
{
    private string $name;
    private DateTime $start;
    private string $color;

    public function __construct(string $name, DateTime $start, string $color)
    {
        $this->name = $name;
        $this->start = $start;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStart(): DateTime
    {
        return $this->start;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function routineToKeyValue()
    {
        return ["title" => $this->getName(), "start" => $this->getStart()->format('Y-m-d'), "color" => $this->getColor()];
    }
}
