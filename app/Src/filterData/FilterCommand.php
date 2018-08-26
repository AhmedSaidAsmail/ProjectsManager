<?php


namespace App\Src\FilterData;


class FilterCommand
{
    /**
     * @var DataResolver
     */
    private $output;

    public function __construct(DataResolver $output)
    {
        $this->output = $output;
    }

    private function execute()
    {
        $this->output->execute();
        return $this->output;
    }

    public function render()
    {
        return $this->execute()->getResult();
    }

}