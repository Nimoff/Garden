<?php

abstract class Trees
{
    protected $id;
    protected $minFruit;
    protected $maxFruit;
    protected $minWeight;
    protected $maxWeight;
    protected $typeFruit;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function harvest(): int
    {
        $fruitAmount = rand($this->minFruit, $this->maxFruit);
        return $fruitAmount;
    }

    public function weight(): int
    {
        $fruitWeight = rand($this->minWeight, $this->maxWeight);
        return $fruitWeight;
    }
}