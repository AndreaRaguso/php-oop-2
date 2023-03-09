<?php

// Definizione della classe Prodotto
class Prodotto {
  protected $nome;
  protected $categoria;
  protected $prezzo;
  protected $immagine;
  
  public function __construct($nome, $categoria, $prezzo, $immagine) {
    $this->nome = $nome;
    $this->categoria = $categoria;
    $this->prezzo = $prezzo;
    $this->immagine = $immagine;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getCategoria() {
    return $this->categoria;
  }

  public function getPrezzo() {
    return $this->prezzo;
  }

  public function getImmagine() {
    return $this->immagine;
  }
}

// Definizione della classe Cibo che estende la classe Prodotto
class Cibo extends Prodotto {
  private $tipo;

  public function __construct($nome, $categoria, $prezzo, $immagine, $tipo) {
    parent::__construct($nome, $categoria, $prezzo, $immagine);
    $this->tipo = $tipo;
  }

  public function getTipo() {
    return $this->tipo;
  }
}

// Definizione della classe Gioco che estende la classe Prodotto
class Gioco extends Prodotto {
  private $tipo;

  public function __construct($nome, $categoria, $prezzo, $immagine, $tipo) {
    parent::__construct($nome, $categoria, $prezzo, $immagine);
    $this->tipo = $tipo;
  }

  public function getTipo() {
    return $this->tipo;
  }
}

// Definizione della classe Cuccia che estende la classe Prodotto
class Cuccia extends Prodotto {
  private $tipo;

  public function __construct($nome, $categoria, $prezzo, $immagine, $tipo) {
    parent::__construct($nome, $categoria, $prezzo, $immagine);
    $this->tipo = $tipo;
  }

  public function getTipo() {
    return $this->tipo;
  }
}

// Definizione della classe Negozio
class Negozio {
  private $prodotti = array();

  public function aggiungiProdotto($prodotto) {
    $this->prodotti[] = $prodotto;
  }

  public function getProdotti() {
    return $this->prodotti;
  }
}

$croccantini = new Cibo("Croccantini per cani", "Cani", 10.99, "https://picsum.photos/600/210", "Prodotto");
$palla = new Gioco("Palla per cani", "Cani", 5.99, "https://picsum.photos/610/210", "Gioco");
$cucciaMorbida = new Cuccia("Cuccia morbida per cani", "Cani", 30.99, "https://picsum.photos/620/210", "Cuccia");

$negozio = new Negozio();
$negozio->aggiungiProdotto($croccantini);
$negozio->aggiungiProdotto($palla);
$negozio->aggiungiProdotto($cucciaMorbida);


?>