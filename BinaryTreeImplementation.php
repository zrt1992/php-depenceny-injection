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
    public $previousNode;

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

    public function findNode($current, $node)
    {
        if ($node->data == $current->data) {
            return $current;
        } else {

            if ($node->data > $current->data) {
                if ($current->right == null) return false;
                return [
                    'current_node' => $this->findNode($current->right, $node),
                    'previous' => $current
                ];
            } else {
                if ($current->left == null) return false;
                return [
                    'current_node' => $this->findNode($current->left, $node),
                    'previous' => $current
                ];
            }
        }
    }

    public function deleteNode($rootNode,$node){
        $node = $this->findNode($rootNode,$node);
        $previousNode = $node['previous'];
        $currentNode = $node['current_node'];
        $smallestNode = $this->findSmallestNode($currentNode->right);
        $previousNode->right = $smallestNode;
        $smallestNode->left = $currentNode->left;
        $smallestNode->right = $currentNode->right;
    }

    public function findSmallestNode($current)
    {
        if ($current->left == null) return $current;
        return $this->findSmallestNode($current->left);

    }


}

$node1 = new Node();
$node1->data = 1;
$node2 = new Node();
$node2->data = 2;
$node3 = new Node();
$node3->data = 7;
$node4 = new Node();
$node4->data = 10;
$node5 = new Node();
$node5->data = 0;
$node6 = new Node();
$node6->data = 6;
$node7 = new Node();
$node7->data = 5;
$node11 = new Node();
$node11->data = -5;

$deleteNode = new Node();
$deleteNode->data = 2;

$binarytree = new BinaryTree($node1);
$result2 = $binarytree->addNode($binarytree->root, $node2);
$result3 = $binarytree->addNode($binarytree->root, $node3);
$result1 = $binarytree->addNode($binarytree->root, $node4);
$result = $binarytree->addNode($binarytree->root, $node5);
$result6 = $binarytree->addNode($binarytree->root, $node6);
$result = $binarytree->addNode($binarytree->root, $node7);
$node11 = $binarytree->addNode($binarytree->root, $node11);
$binarytree->deleteNode($binarytree->root,$deleteNode);
