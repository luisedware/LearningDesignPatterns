<?php
namespace StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\FirstExample;

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}