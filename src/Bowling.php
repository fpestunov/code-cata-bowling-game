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

    		if ($this->rolls[$roll] == 10) {
	    		$score += 10 + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
	    		$roll += 1;
    		} elseif ($this->isSpare($roll)) {
	    		$score += 10 + $this->rolls[$roll + 2];
	    		$roll += 2;
    		} else {
	    		$score += $this->getDefaultFrameScore($roll);
	    		$roll += 2;
    		}
    		
    	}

    	return $score;
    }

    public function isSpare($roll)
    {
    	return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    public function getDefaultFrameScore($roll)
    {
    	return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }
}
