<?php

class ArrayList
{
    public $arrayList;

    public function ArrayList($arr = '')
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    function size()
    {
        return count($this->arrayList);
    }

    function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    function remove()
    {
        $this->arrayList = array();
    }


    function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    function delete($index)
    {
        if ($this->isInteger($index)) {

            for ($i = $this->size(); $i >= 0; $i--) {
                if ($index === $this->arrayList[$i]) {
                    $newArr = array_splice($this->arrayList, $i,1);
                }
            }

        }

        return $newArr;
    }

}

$arrayList = new ArrayList();
$arrayList->add(5);
$arrayList->add(1);
$arrayList->add(-5);
$arrayList->add(8);
$arrayList->add(15);
echo $arrayList->get(3);

echo "<pre>";
print_r($arrayList);
echo "</pre>";

$arrayList->delete(1);
echo "<pre>";
print_r($arrayList);
echo "</pre>";
