<?php

require_once ("../util/Graph.php");
class SearchInSugestions
{
    private $visited;   /*armazena os vértices já visitados*/
    private $inHere;
    private $mainGraph;

    public function __construct()
    {
        $graphItens = json_decode(file_get_contents("../models/graphChoices.json"));
        $this -> inHere = $graphItens -> firstVertex;
        $this -> mainGraph = new Graph();
        foreach($graphItens -> vertex as $storedVertex){
            $this -> mainGraph -> addVertex($storedVertex);
        }

        foreach($graphItens -> edges as $storedEdges) {
            $edges = explode("-", $storedEdges, 2);
            $this->mainGraph->addEdge($edges[0], $edges[1], 0);
        }
        $visited[$this -> inHere] = true;
    }

    public
    function getAdjacent()
    {
        return $this->inHere->getEdges();
    }

    public
    function moveTo($selected)
    {   /*this function will move to selected vertex*/
        if($this -> mainGraph -> getAllVertex() -> contains($selected)){
            $this -> visited[$this -> inHere] = true;
            $this -> $this->inHere = $selected;
        }
    }

}