<?php

namespace Minetro\Wordcha\DataSource;

class NumericDataSource implements DataSource
{

    /**
     * @return Pair
     */
    public function get()
    {
        $numberA = $this->generateNumber();
        $numberB = $this->generateNumber();

        $question = sprintf('%s + %s', $numberA, $numberB);
        $answer = $numberA + $numberB;

        $pair = new Pair($question, $answer);

        return $pair;
    }

    private function generateNumber()
    {
        return rand(0, 10);
    }
}