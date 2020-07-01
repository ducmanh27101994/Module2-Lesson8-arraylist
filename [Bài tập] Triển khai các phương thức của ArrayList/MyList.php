<?php

class MyList
{
    private $size;
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    function isEmpty()
    {
        if (!empty($this->elements)) {
            return true;
        } else {
            return "Khong co gtri trong mang";
        }
    }

    function add($obj)
    {
        array_push($this->elements, $obj);
    }

    function getElements()
    {
        return $this->elements;
    }

    function size()
    {
        return count($this->elements);
    }

    function remove($index)
    {
        if ($this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index == $i) {
                    array_splice($this->elements, $i, 1);
                }
            }
        } else {
            return "Khong co gia tri de xoa";
        }
    }
    function get($index){
        if ($this->isEmpty()){
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index === $i){
                    return $this->elements[$i];
                }
            }
        }
    }
    function clear(){
        $this->elements=array();
    }
    function addAll($arr){
        $this->elements = array_merge($this->elements,$arr);
    }
    function indexOf($obj){
        if ($this->isEmpty()){
            for ($i = 0; $i < $this->size(); $i++) {
                if ($obj === $this->elements[$i]){
                    $arr[] = $i;
                }
            }
            return $arr;
        } else {
            return "Ko co gia tri trong mang";
        }
    }
    function sort(){
        if ($this->isEmpty()){
            sort($this->elements);
        }
    }
    function insert($index,$obj){
        if($this->isEmpty()){
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index === $i){
                    array_splice($this->elements,$i,1,$obj);
                }
            }

        }


    }


}

$myList = new MyList();
echo $myList->isEmpty();
$myList->add(5);
$myList->add(10);
$myList->add(-6);
$myList->add(7);
$myList->add(-9);
$myList->add(3);
echo "<br>";
echo $myList->isEmpty();
echo "<br>";
echo $myList->size();
echo "<br>";
$myList->remove(2);
echo "<br>";
echo $myList->get(3);
$myList->addAll([4,7,10]);
echo "<br>";
print_r($myList->indexOf(10));
$myList->sort();
$myList->insert(4,6);


echo "<pre>";
print_r($myList->getElements());
echo "</pre>";
