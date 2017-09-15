<?php

require_once("../../util/Graph.php");

class SearchInSugestions
{
    private $visited;   /*armazena os vértices já visitados*/
    private $inHere;
    private $mainGraph;

    public function __construct()
    {
        $graphItens = json_decode(file_get_contents("../../models/graphChoices.json"));
        $this->mainGraph = new Graph();
        foreach ($graphItens->vertex as $storedVertex) {
            $this->mainGraph->addVertex($storedVertex);
        }

        foreach ($graphItens->edges as $storedEdges) {
            $edges = explode("-", $storedEdges, 2);
            $this->mainGraph->addEdge($edges[0], $edges[1], 0);
        }

        for ($position = 0; $position < $this->mainGraph->getAllVertex()->size(); $position += 1) {
            if ($this->mainGraph->getAllVertex()->get($position)->getVertexName() == $graphItens->firstVertex) {
                $this->inHere = $this->mainGraph->getAllVertex()->get($position);
                break;
            }
        }

        $visited[$this->inHere->getVertexName()] = true;
    }

    public
    function getAdjacent()
    {
        return $this->inHere->getEdges();
    }

    public
    function moveTo($selected)
    {   /*this function will move to selected vertex*/
        if ($this->mainGraph->getAllVertex()->contains($selected)) {
            $this->visited[$this->inHere->getVertexName()] = true;
            $this->$this->inHere = $selected;
        }
    }

}