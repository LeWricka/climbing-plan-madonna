<?php

namespace Core\Routines\Domain;

use DateTime;

class Routine
{
    private string $id;
    private string $name;
    private DateTime $start;
    private string $color;
    private string $pdf;

    public function __construct(string $id, string $name, DateTime $start, string $color, string $pdf)
    {
        $this->id = $id;
        $this->name = $name;
        $this->start = $start;
        $this->color = $color;
        $this->pdf = $pdf;
    }

    public function getId(): string
    {
        return $this->id;
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

    public function getPdf(): string
    {
        return $this->pdf;
    }

    public function routineToKeyValue()
    {
        return ["title" => $this->getName(), "start" => $this->getStart()->format('Y-m-d'), "color" => $this->getColor()];
    }
}
