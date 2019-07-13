<?php

class Bowling
{

	protected $rolls = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        // return array_sum($this->rolls);

    	$score = 0;
    	$roll = 0;

    	for ($frame=1; $frame <= 10; $frame++) { 
    		$score += $this->rolls[$roll] + $this->rolls[$roll + 1];
    		$roll += 2;
    	}

    	return $score;
    }
}
