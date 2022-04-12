<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('titulo')</title>

    <style type="text/css">
    
    body{
        background-color: #1F2326;
    }

    h1{
        color: white;
    }
    .texto{
        align-self: flex;
        width: 75%;
        float: right;
        text-align: center;
        margin-bottom: 15px;
        
    }

    .enviar{
        align-self: center;
        width: 100px;
        height: 50px;
        background-color: white;
    }

    
    .labels{
        margin-bottom: 25px;
        font-family: Arial;
        font-size: 20px;
        text-align: right;
        color: white;
    }

    
    </style>



  </head>
  <body>
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Prog-Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <!--
                        <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('clientes_novo')}}">Novo Cliente</a></li>
                        <li><a class="dropdown-item" href="{{route('clientes_listar')}}">Listar Clientes</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                    </ul>
                    </li>

<!--  ______________________________________________________________________________________________________________________________-->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fornecedores
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('fornecedores_novo')}}">Novo Fornecedor</a></li>
                        <li><a class="dropdown-item" href="{{ route('fornecedores_listar') }}">Listar Fornecedores</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                    </ul>
                    </li>
<!--___________________________________________________________________________________________________________________________________________________-->
                       <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('produtos_novo')}}">Novo Produto</a></li>
                        <li><a class="dropdown-item" href="{{ route('produtos_listar') }}">Listar Produto</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                    </ul>
                    </li>

                    <!--
                        <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>

                
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            -->


                </div>
            </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-2" style="background-color: #1F2326; text-align: center;"></div>
            <div class="col-8">
            @yield('conteudo')
            </div>
            <div class="col-2" style="background-color: #1F2326; text-align: center; margin: 0%" ></div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>