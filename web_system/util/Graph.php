<?php
require_once('ArrayList.php');

/**
 * Classe Grafo que armazena uma lista de vértices e os conecta através de arestas
 * @author João Victor Oliveira Couto
 */
class Graph
{
    private $allVertex;

    /**
     * Construtor padrão do Grafo que inicia o Grafo de forma vazia
     */
    public function __construct()
    {
        $this->allVertex= new ArrayList();
    }

    /**
     * Construtor do Grafo que permite a construção automatizada de um Grafo Especial
     * @param type    Tipo de Grafo Especial: C- Circular, K- Completo
     * @param quantity    Quantidade de Vertices desse grafo
     */
    public function _construct($type, $quantity)
    {
        $this->allVertex= new ArrayList();
        $this->next = $quantity;
        $previous = 'A';
        for ($position = 0; $position < $quantity; $position += 1) {
            $this->allVertex[$position] = new Vertex("" . $previous);
            $previous += 1;
        }

        if ($type == 'K' || $type == 'k') {
            for ($position = 0; $position < $quantity; $position += 1)
                for ($additing = $position + 1; $additing < $quantity; $additing += 1) {
                    $this->allVertex->get($position)->addEdge($this->allVertex->get($additing), 1);
                    $this->allVertex->get($additing)->addEdge($this->allVertex->get($position), 1);
                }

        } else if ($type == 'C' || $type == 'c') {
            for ($position = 0; $position < $quantity - 1; $position += 1) {
                $this->allVertex->get($position)->addEdge($this->allVertex->get($position + 1), 1);
                $this->allVertex->get($position + 1)->addEdge($this->allVertex->get($position), 1);
            }
            $this->allVertex->get(0)->addEdge($this->allVertex->get($quantity - 1), 1);
            $this->allVertex->get($quantity - 1)->addEdge($this->allVertex->get(0), 1);
        }
    }

    /**
     * Método privado para procurar o vértice que está armazenando determinada informação
     * @param vertexNameSearch    Informação armazenada no vértice que está a procura
     * @return    Retorna o vértice encontrado, caso não tenha sido encontrado retorna null
     */
    private function foundVertex($vertexNameSearch)
    {
        for ($position = 0; $position < $this->next; $position += 1) {
            $search = $this->allVertex->get($position);
            if ($search->getVertexName() == $vertexNameSearch)
                return $search;
        }

        return null;
    }

    /**
     * Adiciona um vértice ao grafo
     * @param newVertexName    Informação contida no vértice
     */
    public function addVertex($newVertexName)
    {
        if ($this->foundVertex(newVertexName) == null) {
            $this->allVertex->add(new Vertex(newVertexName));
        }
    }

    /**
     * Remove um vértice do grafo baseado na informação contida nele
     * @param vertexName    Informação contida no vértice a ser deletado
     * @return    Retorna true caso o vértice tenha sido deletado, e false caso contrário
     */
    public function removeVertex($vertexName)
    {
        $deleted = $this->foundVertex($vertexName);
        if ($deleted == null)
            return false;
        $deleted->removeAllEdges();
        for ($position = 0; $position < $this->allVertex->size(); $position += 1) {
            if ($this->allVertex->get($position) == $deleted) {
                $this->allVertex->set($this->allVertex->get($this->allVertex->size() - 1));
                break;
            }
        }
        return true;
    }

    /**
     * Adiciona uma aresta ao Grafo
     * @param first $   O vértice de origem da aresta a ser adicionada
     * @param second $   O vértice de destino da aresta a ser adicionada
     * @param edgeCost    O peso da Aresta a ser adicionada
     * @return    Retorna se foi possível adicionar a aresta
     */
    public function addEdge($firstVertex, $secondVertex, $edgeCost)
    {
        $first = $this->foundVertex($firstVertex);
        $second = $this->foundVertex($secondVertex);
        if ($first == null || $second == null)
            return false;
        $first->addEdge($second, $edgeCost);
        $second->addEdge($first, $edgeCost);
        return true;
    }

    /**
     * Remove uma aresta existente no Grafo
     * @param first $   O vértice de origem da aresta a ser removida
     * @param second $   O vértice de destino da aresta a ser removida
     * @return
     */
    public function removeEdge($firstVertex, $secondVertex)
    {
        $first = $this->foundVertex($firstVertex);
        $second = $this->foundVertex($secondVertex);
        if ($first == null || $second == null)
            return false;
        $returnBoolean = $first->removeEdge($second);
        $second->removeEdge($first);
        return $returnBoolean;
    }

    /**
     * Método que retorna o peso de uma aresta entre dois vértices
     * @param first $   Vértice de Origem
     * @param second $   Vértice de Destino
     * @return    Peso da Aresta
     */
    public function getEdge($firstVertex, $secondVertex)
    {
        $first = $this->foundVertex(firstVertex);
        $second = $this->foundVertex(secondVertex);
        if ($first == null || $second == null)
            return 0;
        return $first->getEdge($second);
    }

    /**
     * Método que retorna o número de vértices que existem no Grafo
     * @return    O número de vértices existentes no Grafo
     */
    public function getNumOfVertex()
    {
        return $this->next;
    }

    /**
     * Método que retorna o número de arestas que existem no Grafo
     * @return    O número de arestas existentes no Grafo
     */
    public function getNumOfEdges()
    {
        $returnNumber = 0;
        for ($position = 0; $position < $this->next; $position += 1) {
            $counting = $this->allVertex->get($position);
            $returnNumber += $counting->vertexDegree();
        }

        return $returnNumber / 2;
    }

    /**
     * Método que retorna um vetor com todos os vértices do grafo
     * @return Vetor com todos os vértices do grafo
     */
    public function getAllVertex()
    {
        return $this->allVertex;
    }

    /**
     * Método to$do Grafo
     */
}

?>