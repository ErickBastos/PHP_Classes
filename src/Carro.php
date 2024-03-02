<?php

namespace Carro;

// Classe carro
class Carro{

    // Declarações de VARs (O que a classe TEM).
    private string $marca;
    private string $modelo;
    private string $ano;

    protected string $nome;

    // Declaração do método construtor.
    public function __construct($nome, $marca, $modelo, $ano) {

        $this->nome = $nome;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;

    }

    // Função para exibir informações dos carros (O que a classe FAZ).
    public function exibirInformacoes(){

        return "Nome: " . $this->nome . "<br> Marca: " . $this->marca . "<br> Modelo: " . $this->modelo . "<br> Ano: " . $this->ano . "<br>";
    }


    /**
     * Get the value of marca
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno(): string
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(string $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}


// Importante declarar os dados que serão enviados na mesma ordem declarada na classe contructor.
// $meucarro = new Carro("Volkswagen", "Gol", "2005");

// Não é possível alterar caso a VAR esteja declarada como private, PORÉM, com os Getters and Setters é possível alterar as variáveis privadas.
// $meucarro->setMarca("Fiat");
// $meucarro->setModelo("Uno");
// $meucarro->setAno("2013");

// echo $meucarro->exibirInformacoes();

// Retorno de uma única coisa
// echo $meucarro->getMarca();

?>