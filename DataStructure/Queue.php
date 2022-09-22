<?php
namespace App\DataStructure;

//this is circular queue

class Queue{

    private $head;
    private $tail;
    private $limit;
    private $size;
    private $queue;

    public function __construct($limit = 5)
    {
        $this->limit = $limit;
        $this->queue = array();
        $this->head = -1;
        $this->tail = -1;
        $this->size = 0;
    }

    public function enqueue($item){
        $this->tail = ($this->tail + 1) % $this->limit;
        $this->queue[$this->tail] = $item;
        $this->size++;
    }

    public function dequeue(){
        $this->head = ($this->head + 1) % $this->limit;
        $value = $this->queue[$this->head];
        unset($this->queue[$this->head]);
        $this->size--;
        return $value;
    }

    public function isEmpty(){
        if($this->size == 0) return true;
        else return false;
    }

    public function isFull(){
        
        if($this->size == $this->limit) return true;
        return false;
    }


}