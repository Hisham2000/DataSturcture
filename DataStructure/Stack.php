<?php
namespace App\DataStructure;

use Exception;

class Stack{
    private $stack;
    private $limit;
    private $top = -1;

    public function __construct($limit = 5)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item){
        $this->stack[] = $item;
        $this->top++;
    }

    public function pop(){
        $this->top--;
        return array_pop($this->stack);
    }

    public function isEmpty(){
        if(empty($this->stack) ) return true;
        else return false;
    }

    public function isFull(){
        if($this->limit <= count($this->stack)) return true;
        else return false;
    }

    public function current(){
        return $this->stack[$this->top];
    }
}