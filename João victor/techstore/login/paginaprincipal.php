<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Inicio</title>
     
    <style>
        .login {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110vh;
            margin: 10;
        }
        .login-container {
            width: 500px;
            padding: 20px;
            background-image: linear-gradient(180deg, black, #2d0059);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-top: 10px;
            display: none;
        }
        .hero.is-primary {
          
          background-color: #2d0059;

}
.button{

  background-color: black  ;
}
.controle{

  background-color: black;

}
.color-text{
  background-color:black ;
}
.title{
  text-align: center;
}
.numeros{
  display: flex; /* Ativa o Flexbox */
    justify-content: center; /* Centraliza horizontalmente */
    align-items: center;
}
.card {
    margin: 20px;
  }
  .card-image img {
    width: 100%;
    height: auto;
  }









  .carousel {
    position: relative;
    width: 80%;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;
}

.carousel-images {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-images img {
    width: 100%;
    height: auto;
}

button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    z-index: 2;
}

button.prev {
    left: 10px;
}

button.next {
    right: 10px;
}

button:hover {
    background: rgba(0, 0, 0, 0.8);
}


.pic-ctn {
  width: 100vw;
  height: 200px;
}

@keyframes display {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  10% {
    transform: translateX(0);
    opacity: 1;
  }
  20% {
    transform: translateX(0);
    opacity: 1;
  }
  30% {
    transform: translateX(-200px);
    opacity: 0;
  }
  100% {
    transform: translateX(-200px);
    opacity: 0;
  }
}

.pic-ctn {
  position: relative;
  width: 100vw;
  height: 300px;
  margin-top: 15vh;
}

.pic-ctn > img {
  position: absolute;
  top: 0;
  left: calc(50% - 100px);
  opacity: 0;
  animation: display 10s infinite;
}

img:nth-child(2) {
  animation-delay: 2s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 6s;
}
img:nth-child(5) {
  animation-delay: 8s;
}
    </style>

</head>
<body class="controle">



<section class="hero is-primary is-small">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      

    </a>

    
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    <a class="navbar-item has-text-white" href="paginaprincipal.php">
        Inicio
      </a>

      <a class="navbar-item has-text-white" href="produtos.php">
        Produtos
      </a>

      <a class="navbar-item has-text-white" href="novo-login.php">
        Cadastrar-se
      </a>

      
         
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<!-- Hero content: will be in the middle -->
<div class="hero-body">
    <div class="container has-text-centered">
      <p class="title has-text-white">TechStore</p>
    
    </div>
</div>
</section>




<article class="message is-dark">
  <div class="message-header">
    <p>Introdução ao site:</p>
  </div>
  <div class="message-body">
  TechStore é um sistema de gerenciamento de loja projetado para facilitar as operações de compra, venda e organização de produtos. Localizada na Avenida Principal, nº 100, na cidade Z, estado de SP, a loja oferece uma plataforma eficiente para gerenciar seus negócios de forma integrada.
  </div>
</article>
</div>




<div class="columns">
  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="data:image/jpeg;base64,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"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img
            src="https://bulma.io/assets/images/placeholders/96x96.png"
            alt="Placeholder image"
          />
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Eletronicos</p>
        
      </div>
    </div>

    <div class="content">
    Diversos produtos eletronicos com um  preço justo e com alta qualidade
      <br />
      
    </div>
  </div>
</div>
</div>


  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://th.bing.com/th/id/OIP.06Tj9zrYfHp_m4CAOZgEwQHaEK?w=328&h=184&c=7&r=0&o=5&pid=1.7"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img
            src="https://bulma.io/assets/images/placeholders/96x96.png"
            alt="Placeholder image"
          />
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Móveis</p>
      </div>
    </div>

    <div class="content">
    varios móveis com alta qualidade e garantia estendida
      <br />

    </div>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://th.bing.com/th/id/OIP.XtbGjX8tPN9KIey9i2dmWQHaEK?w=301&h=180&c=7&r=0&o=5&pid=1.7"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img
            src="https://bulma.io/assets/images/placeholders/96x96.png"
            alt="Placeholder image"
          />
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Eletrodomésticos</p>

      </div>
    </div>

    <div class="content">
    Eletrodomésticos multifuncionais e com alta qualidade
      <br />
      
    </div>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="data:image/jpeg;base64,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"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img
            src="https://bulma.io/assets/images/placeholders/96x96.png"
            alt="Placeholder image"
          />
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Produto de beleza</p>
      
      </div>
    </div>

    <div class="content">
    Produtos de qualidade e com resultados surpriendentes
      <br />

    </div>
  </div>
</div>
</div>
</div>







<?php require __DIR__."/footer.php"; ?>