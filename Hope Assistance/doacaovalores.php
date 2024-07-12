<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Doação de Medicamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100;400;700&family=IM+Fell+Double+Pica+SC&display=swap" rel="stylesheet">
    
    <style>
        .pix-info {
            display: none;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="banner">
        <div class="container2">
            <div class="navbar">
                <div class="logo">
                    <img src="assets/img/hopeassistence_logo_sf.png" alt="CraftSales" width="200px">
                </div>
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="#">Início</a></li>
                        <li><a href="produtos.php" title="#">Medicamentos</a></li>
                        <li><a href="doacaovalores.php" title="#">Doações</a></li>
                        <li><a href="empresa.php" title="#">Sobre Nós</a></li>
                        <li><a href="carrinho.php" class="btn" title="#">Doe Qualquer Valor</a></li>
                    </ul>
                </nav>
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
        </div>
    </div>

    <!-- Título -->
    <h1 class="titulo">
        Doe agora mesmo!
    </h1>

    <!-- Cards de Doação -->
    <div class="container">
        <h2>Doe um Valor</h2>

        <!-- Cards de doação com valores fixos -->
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">R$ 15</h5>
                        <p class="card-text">Doe este valor para ajudar a nossa causa.</p>
                        <a href="#" class="btn btn-primary btn-block" onclick="">Doar R$ 15</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">R$ 30</h5>
                        <p class="card-text">Doe este valor para ajudar a nossa causa.</p>
                        <a href="#" class="btn btn-primary btn-block" onclick="">Doar R$ 30</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">R$ 50</h5>
                        <p class="card-text">Doe este valor para ajudar a nossa causa.</p>
                        <a href="#" class="btn btn-primary btn-block" onclick="">Doar R$ 50</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">R$ 100</h5>
                        <p class="card-text">Doe este valor para ajudar a nossa causa.</p>
                        <a href="#" class="btn btn-primary btn-block" onclick="">Doar R$ 100</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">R$ 200</h5>
                        <p class="card-text">Doe este valor para ajudar a nossa causa.</p>
                        <a href="#" class="btn btn-primary btn-block" onclick="">Doar R$ 200</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instruções para doação via PIX -->
        <div class="titulo">
            <div class="titulo">
                
                <h1 class="titulo">Para ajudar com qualquer valor, siga os passos abaixo:</h1>
                <ul>
                    <li>Abra a seção de PIX/QR Code no app do seu banco;</li>
                    <li>Confirme o valor.</li>
                </ul>
                <p>Utilize a chave PIX abaixo para qualquer valor:</p>
                <strong>Chave PIX: hopeassistance@gmail.com</strong>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="rodape">
        <div class="container">
            <div class="linha">
                <div class="rodape-col-1">
                    <h3>Baixe o nosso aplicativo</h3>
                    <p>Nas melhores plataformas</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>
                <div class="rodape-col-2">
                    <img src="assets/img/hopeassistence_logo_sf.png" alt="">
                    <p></p>
                </div>
                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>
                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">&#169; Todos os Direitos Reservados Hope Assistance</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();

        function mostrarPix(id) {
            // Esconder todas as informações de PIX
            var pixInfos = document.querySelectorAll('.pix-info');
            pixInfos.forEach(info => {
                info.style.display = 'none';
            });

            // Mostrar apenas a informação do ID específico
            var pixInfo = document.getElementById(id);
            if (pixInfo) {
                pixInfo.style.display = 'block';
            }
        }
    </script>
</body>

</html>
