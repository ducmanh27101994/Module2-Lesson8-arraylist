<?php

class MyList
{
    private $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    function size()
    {
        return count($this->elements);
    }

    function isEmpty()
    {
        if (!empty($this->elements)) {
            return true;
        } else {
            return "Khong co gia tri trong mang";
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

    function clear()
    {
        $this->elements = array();
    }

    function sort()
    {
        if ($this->isEmpty()) {
            sort($this->elements);
        }
    }

    function remove($index)
    {
        if ($this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index === $i) {
                    array_splice($this->elements, $i, 1);
                }
            }
        }
    }

    function reset()
    {
        $this->elements = array();
    }

    function addAll($arr)
    {
        $this->elements = array_merge($this->elements, $arr);
    }

    function insert($index, $obj)
    {
        if ($this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index === $i) {
                    array_splice($this->elements, $i, 1, $obj);
                }
            }
        }
    }

    function indexOf($obj)
    {
        if ($this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($obj === $this->elements[$i]) {
                    return $this->elements[$i];
                }
            }
            return "Khong ton tai gia tri";
        }
    }

}

$mylist = new MyList();

echo $mylist->isEmpty();

$mylist->add(10);
$mylist->add(-4);
$mylist->add(3);
$mylist->add(-7);
$mylist->add(8);
echo "<br>";
echo $mylist->size();
echo "<br>";
echo $mylist->sort();
echo "<br>";
echo $mylist->remove(2);
echo "<br>";
$mylist->addAll([2, 4, -10, 5]);
$mylist->insert(4, 20);
echo "<br>";
echo $mylist->indexOf(30);

echo "<pre>";
print_r($mylist->getElements());
echo "</pre>";