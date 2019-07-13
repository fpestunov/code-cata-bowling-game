<?php

class Bowling
{

	// REFACTOR

	// protected $score = 0;

 //    public function roll($roll)
 //    {
 //        $this->score += $roll;
 //    }

 //    public function score()
 //    {
 //        return $this->score;
 //    }

	protected $rolls = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        return array_sum($this->rolls);
    }
}
