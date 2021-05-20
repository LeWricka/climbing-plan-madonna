<?php

namespace App\Models;

use DateTime;

class Routine
{
    private string $name;
    private DateTime $start;
    private DateTime $end;
    private string $color;

    public function __construct(string $name, DateTime $start, DateTime $end, string $color)
    {
        $this->name = $name;
        $this->start = $start;
        $this->end = $end;
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

    public function getEnd(): DateTime
    {
        return $this->end;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function routineToJson()
    {
        return ["title" => $this->getName(), "start" => $this->getStart()->format('Y-m-d'), "end" => $this->getEnd()->format('Y-m-d'), "color" => $this->getColor()];
    }
}
