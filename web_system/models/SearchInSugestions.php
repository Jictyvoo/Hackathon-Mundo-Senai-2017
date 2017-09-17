<?php
require_once ("../util/Graph.php");
require_once ("../util/ArrayList.php");
class SearchInSugestions {
	private $visited;
	/* armazena os vértices já visitados */
	private $inHere;
	private $mainGraph;
	private $history;
	private $results;
	public function __construct() {
		$graphItens = json_decode ( file_get_contents ( "../models/graphChoices.json" ) );
		$this->mainGraph = new Graph ();
		foreach ( $graphItens->vertex as $storedVertex ) {
			$this->mainGraph->addVertex ( $storedVertex );
		}
		
		foreach ( $graphItens->edges as $storedEdges ) {
			$edges = explode ( "-", $storedEdges, 2 );
			$this->mainGraph->addEdge ( $edges [0], $edges [1], 0 );
			$this->mainGraph->addEdge ( $edges [1], $edges [0], 0 );
		}
		
		for($position = 0; $position < $this->mainGraph->getAllVertex ()->size (); $position += 1) {
			if ($this->mainGraph->getAllVertex ()->get ( $position )->getVertexName () == $graphItens->firstVertex) {
				$this->inHere = $this->mainGraph->getAllVertex ()->get ( $position );
				break;
			}
		}
		
		$this->history = "*";
		$this->results = $graphItens->results;
		$rhis->visited [$this->inHere->getVertexName ()] = true;
	}
	public function getAdjacent() {
		$returnArray = new ArrayList ();
		for($position = 0; $position < $this->inHere->getEdges ()->size (); $position += 1) {
			if (! isset ( $this->visited [$this->inHere->getEdges ()->get ( $position )->getVertex ()->getVertexName ()] ))
				$returnArray->add ( $this->inHere->getEdges ()->get ( $position ) );
		}
		
		return $returnArray;
	}
	public function moveTo($selected) { /* this function will move to selected vertex */
		for($position = 0; $position < $this->mainGraph->getAllVertex ()->size (); $position += 1) {
			if ($this->mainGraph->getAllVertex ()->get ( $position )->getVertexName () == $selected) {
				$this->visited [$this->inHere->getVertexName ()] = true;
				$this->inHere = $this->mainGraph->getAllVertex ()->get ( $position );
				$this->history = $this->history . "." . $position;
			}
		}
	}
	public function results() {
		/* do something wih history */
		$printItem = null;
		foreach ( $this->results as $found ) {
			foreach ( $found->associed_Code as $keyFound ) {
				if ($keyFound == $this->history) {
					$printItem = $found;
					break;
				}
			}
			if ($printItem != null)
				break;
		}
		return $printItem;
	}
}