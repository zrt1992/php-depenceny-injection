<?php
class Node
{
    public $data;
    public $right = null;
    public $left = null;
}


$node6 = new Node();
$node6->data=6;
$node5 = new Node();
$node5->data = 5;
$node5->left =$node6;

$root = $node5;
$root = $root->left;

//var_dump(unset($root));
unset($root);
var_dump($node5);die;


