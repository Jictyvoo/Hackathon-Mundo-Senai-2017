<?php

/**
 * Classe Edge que contém um vértice de destino e o peso da aresta
 * @author Joao Victor & Resemblinck Freitas
 */
class Edge {
	private $vertex;
	private $weight;
	
	/**
	 * Construtor da Aresta
	 * 
	 * @param Vertex $newVertex
	 *        	Vértice de Destino
	 * @param float $edgeWeight
	 *        	Peso da Aresta
	 */
	public function __construct($newVertex, $edgeWeight) {
		$this->vertex = $newVertex;
		$this->weight = $edgeWeight;
	}
	
	/**
	 * Método que retorna o vértice de Destino
	 * 
	 * @return Vertex Vértice de destino da aresta
	 */
	public function getVertex() {
		return $this->vertex;
	}
	
	/**
	 * Método que define um vértice de destino para a aresta
	 * 
	 * @param Vertex $vertex
	 *        	Novo vértice de destino da aresta
	 */
	public function setVertex($vertex) {
		$this->vertex = $vertex;
	}
	
	/**
	 * Método que retorna o peso da aresta
	 * 
	 * @return float Peso da Aresta
	 */
	public function getWeight() {
		return $this->weight;
	}
	
	/**
	 * Método que define um novo valor para o peso da aresta
	 * 
	 * @param float $weight
	 *        	Novo valor do peso da aresta
	 */
	public function setWeight($weight) {
		$this->weight = $weight;
	}
}

?>