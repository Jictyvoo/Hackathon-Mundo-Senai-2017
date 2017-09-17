<?php
require_once ('ArrayList.php');

/**
 * Classe vértice que armazena dados e um vetor de arestas adjacentes ao vértice
 * 
 * @author JoÃ£o Victor Oliveira Couto & Resemblinck Freitas
 */
class Vertex {
	private $edges; /* Arestas do grafo */
	private $vertexName; /* nome dos vertices do grafo */
	
	/**
	 * Construtor do vertice.
	 *
	 * @param	string $nameOfVertex
	 */
	public function __construct($nameOfVertex) {
		$this->edges = new ArrayList ();
		$this->vertexName = $nameOfVertex;
	}
	
	/**
	 * Método que adiciona um vértice adjacente e uma aresta de ligação.
	 *
	 * @param Vertex $newLigation
	 *        	- novo vértice adjacente ao vertice atual.
	 * @param float $ligationCost
	 *        	- Peso da aresta de ligação.
	 */
	public function addEdge($newLigation, $ligationCost) {
		$canAdd = true;
		for($position = 0; $position < $this->edges->size (); $position += 1) {
			$search = $this->edges->get ( $position );
			if ($search->getVertex () == $newLigation) { /* verifica se já foi adicionado aquele vértice */
				$canAdd = false;
			}
		}
		if ($canAdd)
			$this->edges->add ( new Edge ( $newLigation, $ligationCost ) ); /* adiciona a aresta */
	}
	
	/**
	 * Método que remove um vértice adjacente e sua aresta de ligação.
	 *
	 * @param Vertex $edgeThis
	 *        	- Vértice adjacente que será removido.
	 * @return bool - True se remover, False caso contrário.
	 */
	public function removeEdge($edgeThis) {
		$foundEdge = null;
		for($position = 0; $position < $this->vertexDegree (); $position += 1) {
			$search = $this->edges->get ( $position );
			if ($search->getVertex () == $edgeThis) { /* verifica se o vertice existe no conjunto de arestas */
				$foundEdge = $search;
				break;
			}
		}
		if ($foundEdge == null)
			return false;
		$this->edges->get ( $position )->setVertex ( null ); /* limpa referencia para o garbage collector */
		$this->edges->set ( $this->edges->get ( $this->edges->size () - 1 ) );
		return true;
	}
	
	/**
	 * Método que remove todos os vértices adjacentes e as arestas de ligação.
	 */
	public function removeAllEdges() {
		while ( $this->edges->size () > 0 ) {
			$this->edges->get ( 0 )->getVertex ()->removeEdge ( $this );
			$this->removeEdge ( $this->edges [0]->getVertex () );
		}
	}
	
	/**
	 * Método que retorna o peso de uma aresta de ligação entre o vértice atual e
	 * outro vértice requisitado.
	 *
	 * @param Vertex $destiny
	 *        	- Vértice adjacente.
	 * @return float - Peso da aresta de ligação.
	 */
	public function getEdge($destiny) {
		for($position = 0; $position < $this->vertexDegree (); $position += 1) {
			if ($this->edges [$position]->getVertex () == $destiny) {
				return $this->edges [$position]->getWeight ();
			}
		}
		return - 1;
	}
	
	/**
	 * Método que retorna o grau do vértice.
	 *
	 * @return int - Grau do vértice.
	 */
	public function vertexDegree() {
		return $this->edges->size ();
	}
	
	/**
	 * Método que retorna o nome do vértice.
	 *
	 * @return string - Nome do vértice.
	 */
	public function getVertexName() {
		return $this->vertexName;
	}
	
	/**
	 * Método que retorna todas as arestas ligadas ao vértice.
	 *
	 * @return ArrayList<Edge> - Vetor contendo todas as arestas do vértice.
	 */
	public function getEdges() {
		return $this->edges;
	}

}

?>