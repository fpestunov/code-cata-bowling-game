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

    		if ($this->rolls[$roll] + $this->rolls[$roll + 1] == 10) {
    			// then we got a spare!
	    		$score += 10 + $this->rolls[$roll + 2];
	    		$roll += 2;
    		} else {
	    		$score += $this->rolls[$roll] + $this->rolls[$roll + 1];
	    		$roll += 2;
    		}
    		
    	}

    	return $score;
    }
}
