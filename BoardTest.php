<?php
require_once('Board.php');

class BoardTest extends PHPUnit_Framework_TestCase {

    protected $statusAfterFirstMovement = array('x','x','x','x','x',' ','x','o','o','o','o','o','o');
    protected $statusAfterSecondMovement = array('x','x','x','x','x','o','x',' ','o','o','o','o','o');
    protected $statusAfterThirdMovement = array('x','x','x','x','x','o','x','o',' ','o','o','o','o');
    protected $statusAfterFourthMovement = array('x','x','x','x','x','o',' ','o','x','o','o','o','o');
    protected $statusAfterFifthMovement = array('x','x','x','x',' ','o','x','o','x','o','o','o','o');
    protected $statusAfterSixthMovement = array('x','x','x',' ','x','o','x','o','x','o','o','o','o');
    protected $statusAfterSeventhMovement = array('x','x','x','o','x',' ','x','o','x','o','o','o','o');

    public function testFirstMovement() {

        $board = new Board();
        $board->moveNumberSteps(1);
        $this->assertEquals($board->getStatus(), $this->statusAfterFirstMovement);
        $board->printStatus();
    }

    public function testSecondMovement() {

        $board = new Board();
        $board->moveNumberSteps(2);
        $this->assertEquals($board->getStatus(), $this->statusAfterSecondMovement);
    }

    public function testThirdMovement() {

        $board = new Board();
        $board->moveNumberSteps(3);
        $this->assertEquals($board->getStatus(), $this->statusAfterThirdMovement);
    }

    public function testFourthMovement() {

        $board = new Board();
        $board->moveNumberSteps(4);
        $this->assertEquals($board->getStatus(), $this->statusAfterFourthMovement);
    }

    public function testFifthMovement() {

        $board = new Board();
        $board->moveNumberSteps(5);
        $this->assertEquals($board->getStatus(), $this->statusAfterFifthMovement);
    }

    public function testSixthMovement() {

        $board = new Board();
        $board->moveNumberSteps(6);
        $this->assertEquals($board->getStatus(), $this->statusAfterSixthMovement);
    }

    public function testSeventhMovement() {

        $board = new Board();
        $board->moveNumberSteps(7);
        $this->assertEquals($board->getStatus(), $this->statusAfterSeventhMovement);
    }
}