<?php


class Node
{
    public $data;
    public $right = null;
    public $left = null;

}


class BinaryTree
{
    public $root;
    public $current;


    function __construct($node)
    {
        $this->root = $node;
    }

    public function addNode($current, $node)
    {
        if ($node->data > $current->data) {
            if ($current->right == null) return $current->right = $node;
            return $this->addNode($current->right, $node);
        } else {
            if ($current->left == null) return $current->left = $node;
            return $this->addNode($current->left, $node);
        }
    }

    public function inOrderTreversal($node)
    {
        if ($node->left != null) $this->inOrderTreversal($node->left);
        print($node->data . " ");
        if ($node->right != null) $this->inOrderTreversal($node->right);
    }

}

$node1 = new Node();
$node1->data = 1;
$node2 = new Node();
$node2->data = 2;
$node3 = new Node();
$node3->data = 10;
$node4 = new Node();
$node4->data = 3;
$node5 = new Node();
$node5->data = 0;
$binarytree = new BinaryTree($node1);
$result = $binarytree->addNode($binarytree->root, $node2);
$result = $binarytree->addNode($binarytree->root, $node3);
$result1 = $binarytree->addNode($binarytree->root, $node4);
$result = $binarytree->addNode($binarytree->root, $node5);
$binarytree->inOrderTreversal($binarytree->root);






