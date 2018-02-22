<?php

namespace App\Src\CollectData;

class CollectFactory
{

    private $details;
    private $type;

    public function __construct(array $details, $type)
    {
        $this->details = $details;
        $this->type = $type;
    }

    public function build()
    {
        switch ($this->type) {
            case "multiple":
                return new Multiple($this->details);
            case "flatten":
                return new Flatten($this->details);
        }
    }

}
