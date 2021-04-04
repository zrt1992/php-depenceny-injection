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
        if ($node->data >= $current->data) {
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

    public function findNode($current, $node, $previous = null)
    {
        if ($node->data == $current->data) {
            return [
                'current_node' => $current,
                'previous' => $previous
            ];
        } else {

            if ($node->data > $current->data) {
                if ($current->right == null) return false;
                return $this->findNode($current->right, $node, $current);
            } else {
                if ($current->left == null) return false;
                return $this->findNode($current->left, $node, $current);
            }
        }
    }

    public function deleteNode($rootNode, $node)
    {
        $node = $this->findNode($rootNode, $node);
        if ($node == false) return false;
        $previousNode = $node['previous'];
        $currentNode = $node['current_node'];
        if ($currentNode->right == null) {
            $previousNode->left = $currentNode->left;
            $currentNode->left == null;
            $currentNode->right = null;
            return;
        }

        $temp = $this->findSmallestNode($currentNode->right, $previousNode);
        $smallestNode = $temp['smallest'];
        $previoussmallestNode = $temp['previous_smallest'];

        $previoussmallestNode->left = null;
        $previoussmallestNode->right = null;

        $previousNode->right = $smallestNode;
        $smallestNode->left = $currentNode->left;
        $smallestNode->right = $currentNode->right;
        $currentNode->left = null;
        $currentNode->right = null;
    }

    public function findSmallestNode($current, $previous = null)
    {
        if ($current == null) return null;
        if ($current->left == null) return [
            'smallest' => $current,
            'previous_smallest' => $previous
        ];
        return $this->findSmallestNode($current->left, $current);

    }


}

$node1 = new Node();
$node1->data = 1;
$node2 = new Node();
$node2->data = 2;
$node7 = new Node();
$node7->data = 7;
$node10 = new Node();
$node10->data = 10;
$node0 = new Node();
$node0->data = 0;
$node6 = new Node();
$node6->data = 6;
$node5 = new Node();
$node5->data = 5;
$node4 = new Node();
$node4->data = 4;
$node11 = new Node();
$node11->data = 1;


$binarytree = new BinaryTree($node1);
$binarytree->addNode($binarytree->root, $node2);
$binarytree->addNode($binarytree->root, $node7);
$binarytree->addNode($binarytree->root, $node10);
$binarytree->addNode($binarytree->root, $node6);
$binarytree->addNode($binarytree->root, $node5);
$binarytree->addNode($binarytree->root, $node0);
$binarytree->inOrderTreversal($binarytree->root);

echo '<br>';
$binarytree->inOrderTreversal($binarytree->root);
echo '<br>';
$binarytree->deleteNode($binarytree->root, $node2);
echo '<br>';
$binarytree->deleteNode($binarytree->root, $node2);


