<?php

namespace App\Models;

use DateTime;

class Routine
{
    private string $name;
    private String $start;
    private String $end;
    private string $color;

    public function __construct(string $name, string $start, string $end, string $color)
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


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getStart(): String
    {
        return $this->start;
    }

    public function setStart(String $start): void
    {
        $this->start = $start;
    }

    public function getEnd(): String
    {
        return $this->end;
    }

    public function setEnd(String $end): void
    {
        $this->end = $end;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function routineToJson(){
        return ["title" => $this->getName(), "start" => $this->getStart(), "end" => $this->getEnd(), "color" => $this->getColor()];
    }

}
