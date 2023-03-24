<?php

class Garden
{
    private $treesInGarden = ['Apple', 'Pear'];
    private $StartIdTree = 1;
    private $registeredTrees = [];

    public function __construct($typeTrees)
    {
        $this->registeredTrees = $this->registrationTrees($typeTrees);
    }

    public function registrationTrees($type): array
    {
        foreach ($type as $key => $value) {
            if (in_array($key, $this->treesInGarden)) {
                for ($i = 1; $i <= $value; $i++) {
                    $tree = new $key();
                    $tree->setId($this->StartIdTree++);
                    $resultArray[] = $tree;
                }
            }
        }
        return $resultArray;
    }

    public function getFruit(): array
    {
        $appleAmount = 0;
        $appleWeight = 0;
        $pearAmount = 0;
        $pearWeight = 0;

        foreach ($this->registeredTrees as $value) {
            if ($value->typeFruit == 'яблоки') {
                $amount = $value->harvest();
                for ($i = 0; $i < $amount; $i++) {
                    $appleWeight += $value->weight();
                }
                $appleAmount += $amount;
            }
            if ($value->typeFruit == 'груши') {
                $amount = $value->harvest();
                for ($i = 0; $i < $amount; $i++) {
                    $pearWeight += $value->weight();
                }
                $pearAmount += $amount;
            }
        }

        $fruits = [
            'appleAmount' => $appleAmount,
            'pearAmount' => $pearAmount,
            'appleWeight' => $appleWeight,
            'pearWeight' => $pearWeight
        ];

        return $fruits;
    }
}