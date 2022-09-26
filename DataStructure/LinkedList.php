<?php 

namespace App\DataStructure;

class LinkedList{

    private $list;
    private $head;
    private $tail;
    private $limit;
    private $size;


    public function __construct($limit = 5)
    {
        $this->list = array();
        $this->head = null;
        $this->tail = null;
        $this->limit = $limit;
        $this->size = 0;
    }

    public function insert($item)
    {
            $this->list[] = $item;
            $this->size++;
    }

    public function delete($item)
    {
        $key = array_keys($this->list,$item);
        $value = $this->list[$key[0]];
        unset($this->list[$key[0]]);
        $keys = array();
        for($i=0; $i<count($this->list); $i++){$keys[] = $i;}
        for($i = $key[0]; $i < count($this->list) ; $i++)
        {
            $this->list = array_combine($keys,$this->list);
        }
        $this->size--;
        return $value;
    }

    public function isFull()
    {
        if($this->size >= $this->limit) return true;
        else return false;
    }

    public function isEmpty()
    {
        if($this->size == 0 ) return true;
        else return false;
    }

    public function search($item)
    {
        $key = array_keys($this->list,$item);
        $value = $this->list[$key[0]];
        return $value;
    }
}