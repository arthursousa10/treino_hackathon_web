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
    <style>
        .check-icon {
            color: green;
            margin-right: 10px;
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

<!-- Título e ícone estilizado -->
<h1 class="titulo">
    Quero doar medicamentos
</h1>

<div class="titulo2">
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
        <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path>
    </svg>
Informe abaixo quais medicamentos dentro da validade você irá doar.
</div>

<div class="titulo2">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
        <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path>
    </svg>
    Aguarde o nosso contato com detalhes sobre como entregar sua doação em nossos postos de coleta, em São Paulo - SP.
</div>

<!-- Conteúdo do Formulário de Doação -->
<div class="container">
    <h2>Formulário de Doação de Medicamentos</h2>

    <!-- Informações Pessoais -->
    <div class="divider">
        <h3>Informações Pessoais</h3>
        <form action="processa_doacao.php" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo*</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone*</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço*</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
    </div>

    <!-- Seleção de Medicamento -->
    <div class="divider">
        <h3>Seleção de Medicamento</h3>
        <div class="form-group">
            <label for="tipo_medicamento">Forma farmacêutica*</label>
            <select class="form-control" id="tipo_medicamento" name="tipo_medicamento" required>
                <option value="">Selecione o forma farmacêutica</option>
                <option value="capsula">Cápsula</option>
                <option value="comprimido">Comprimido</option>
                <option value="creme">Creme</option>
                <option value="pomada">Pomada</option>
                <option value="liquido">Líquido</option>
                <option value="outro">Outro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="medicamento">Nome do Medicamento*</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" required>
        </div>

        <div class="form-group">
    <label for="concentracao">Concentração do medicamento*</label>
    <input type="text" class="form-control" id="concentracao" name="concentracao" placeholder="Ex: 10 ml/g" required>
</div>

<div class="form-group">
    <label for="concentracao">Prazo de validade*</label>
    <input type="text" class="form-control" id="validade" name="validade" placeholder="mm/aa" required>
    <small id="validadeHelp" class="form-text text-danger">Por favor, insira uma data válida no formato mm/aa.</small>
</div>

        <div class="form-group">
            <label for="quantidade">Quantidade*</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem (opcional)</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar Doação</button>
        </form>
    </div>
</div>
<br>

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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="assets/js/app.js"></script>
<script>
    AOS.init();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var validadeInput = document.getElementById('validade');
        var validadeHelp = document.getElementById('validadeHelp');
        
        validadeInput.addEventListener('blur', function() {
            var inputValue = this.value.trim();
            if (!inputValue.match(/^(0[1-9]|1[0-2])\/[0-9]{2}$/)) {
                validadeHelp.textContent = "Formato inválido, por favor insira no formato mm/aa.";
                this.setCustomValidity("invalid");
            } else {
                validadeHelp.textContent = "";
                this.setCustomValidity("");
            }
        });
        
        // Limpar mensagem de erro ao focar novamente no input
        validadeInput.addEventListener('focus', function() {
            validadeHelp.textContent = "Por favor, insira uma data válida no formato mm/aa.";
            this.setCustomValidity("");
        });
        
        // Limpar mensagem de erro ao submeter o formulário
        validadeInput.closest('form').addEventListener('submit', function() {
            validadeInput.setCustomValidity("");
        });
    });
</script>

</body>
</html>
