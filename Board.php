<?php
class Board {

	protected $status;
	protected $initialStatus = array(
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		' ',
		'o',
		'o',
		'o',
		'o',
		'o',
		'o'
	);

	public function __construct() {

		$this->status = $this->initialStatus;

	}

	public function getEmptyPosition() {

		$position = array_search(' ', $this->status);
		return $position;

	}

	public function getStatus() {
		return $this->status;
	}

	/** MOVEMENTS **/
	public function moveNumberSteps($numberSteps) {

		for ($i=0; $i<$numberSteps; $i++) {
			$this->move();
		}
	}

	public function move() {

		if ($this->initialStatus === $this->status) {
			$this->moveFirstMovement();
		} else {
			$this->moveNextStep();
		}

	}

	public function moveNextStep() {

		if ($this->canIMoveFromLeftToRight()) {
			$this->moveLeftToRight();
		} else {
			$this->moveRightToLeft();
		}

	}

	public function moveLeftToRight() {

		$emptyPosition = $this->getEmptyPosition();
		if ($this->status[$emptyPosition-1] === 'o') {
			$this->status[$emptyPosition] = 'x';
			$this->status[$emptyPosition-2] = ' ';
		} else {
			$this->status[$emptyPosition] = 'x';
			$this->status[$emptyPosition-1] = ' ';
		}
	}

	public function moveRightToLeft() {

		$emptyPosition = $this->getEmptyPosition();
		if ($this->status[$emptyPosition+1] === 'x') {
			$this->status[$emptyPosition] = 'o';
			$this->status[$emptyPosition+2] = ' ';
		} else {
			$this->status[$emptyPosition] = 'o';
			$this->status[$emptyPosition+1] = ' ';
		}
	}

	public function canIMoveFromLeftToRight() {

		$emptyPosition = $this->getEmptyPosition();
		if ($this->status[$emptyPosition+1] === 'x' && $this->status[$emptyPosition+2] === 'o') {
			return false;
		}

		if ($this->status[$emptyPosition-1] === 'x'
		&& $this->status[$emptyPosition+1] === 'o'
		&& $this->status[$emptyPosition+2] === 'o') {
			return false;
		}

		return true;
	}

	public function moveFirstMovement() {

		$emptyPosition = $this->getEmptyPosition();
		$this->status[$emptyPosition] = 'x';
		$this->status[$emptyPosition - 1] = ' ';
	}

	public function printStatus() {
		echo PHP_EOL;
		foreach ($this->status as $position) {
			echo $position;
		}
		echo PHP_EOL;
	}

}
