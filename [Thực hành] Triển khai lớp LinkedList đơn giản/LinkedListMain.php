<?php

include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(10);
$linkedList->insertFirst(12);
$linkedList->insertLast(15);
$linkedList->insertLast(14);

print_r($linkedList->totalNodes());
echo "<br>";
print_r($linkedList->readList());

echo "<br>";

echo implode('-', $linkedList->readList());




