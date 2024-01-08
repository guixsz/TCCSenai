<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventura Ancestral</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Montserrat:wght@300;500;700&family=Oswald:wght@300;500;700&family=Vina+Sans&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="Style/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    
    <header>
        <div id="header">
            <a href="">Aventura Ancestral</a>

            <div class="fa-solid fa-bars" id="navbar-icon"></div>
            <ul class="navbar-header">
                <li><a href="#content-section">SOBRE O PROJETO</a></li>
                <li><a href="#games">JOGOS</a></li>
                <li><a href="#about-us">SOBRE NÓS</a></li>
                <li><a href="#join-us">JUNTE-SE A NÓS</a></li>
            </ul>

            <div>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>                
        </div>
    </header>

    <section class="content-section" id="content-section">
        <div class="about-project">
            <div class="project-text">
                <h2>Sobre o projeto</h2>
                <p>O projeto propõe o desenvolvimento de um sistema inovador de aprendizagem voltado para crianças de 6 a 10 anos, utilizando jogos para explorar e ensinar sobre a rica história e cultura indígena. Com o intuito de atender à Lei nº 11645/08, que estabelece a obrigatoriedade do ensino sobre a história e cultura afro-brasileira e indígena nas escolas, a iniciativa busca diversificar as formas de aprendizado em sala de aula e promover a representatividade da cultura indígena no contexto educacional.
</p>
            </div>
            <div class="project-img">
                <h2>Imagem do projeto</h2>
            </div>
        </div>
    </section>

    <section id="games">
        <div class="games-text">
            <h1>Conheça nossos jogos</h1>
        </div>
        
        <div class="games-items">
            <div class="game-item">
                <div class="game-item-img">
                    <img src="" alt="">
                </div>
                <h3>Jogo 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium quis fuga dignissimos mollitia optio facilis consequatur, obcaecati iste deleniti voluptatibus, impedit ea, dolor dicta sequi. Cum sed magnam animi?</p>
            </div>

            <div class="game-item">
                <div class="game-item-img">
                    <img src="" alt="">
                </div>
                <h3>Jogo 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium quis fuga dignissimos mollitia optio facilis consequatur, obcaecati iste deleniti voluptatibus, impedit ea, dolor dicta sequi. Cum sed magnam animi?</p>
            </div>

            <div class="game-item">
                <div class="game-item-img">
                    <img src="" alt="">
                </div>
                <h3>Jogo 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium quis fuga dignissimos mollitia optio facilis consequatur, obcaecati iste deleniti voluptatibus, impedit ea, dolor dicta sequi. Cum sed magnam animi?</p>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="about">
            <div class="about-us-text">
                <h3>Sobre nós</h3>
                <p>Somos uma equipe de desenvolvedores de software. Nosso compromisso é criar soluções inovadoras que não apenas atendam às exigências legais, mas também inspirem uma mudança significativa na forma como as crianças aprendem sobre a rica diversidade cultural do Brasil. Acreditamos que a educação é a chave para construir sociedades mais inclusivas, e nosso projeto visa contribuir ativamente para essa transformação, proporcionando uma abordagem envolvente e respeitosa para o ensino da história e cultura indígena.<ut class="lorem"></ut></p>
            </div>
        </div>
    </section>

    <section id="join-us">
            <div class="join-us-text">
                <h2>Junte-se a nós</h2>
                <h3>Faça parte do nosso time e venha conhecer e desbravar a rica e brilhante história e cultura indígena de uma forma didática e  divertida ao lado do Aventura Ancestral</h3>
            </div>
            <div class="join-us-button">
                <p id="signup-btn">Sou professor</p>
                <p id="signup-btn-aluno">Sou aluno</p>
            </div>
    </section>

    <div id="signup-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="signup-form" method="post" action="PHP/processaProfessor.php">
                <div>
                    <label for="fullname">Nome completo:</label>
                    <input type="text" id="fullname" name="fullname" required><br><br>
                </div>
                <div>
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required><br><br>
                </div>
                <div>
                    <label for="birthdate">Data de nascimento:</label>
                    <input type="date" id="birthdate" name="birthdate" required><br><br>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>
                </div>
                <div>
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required><br><br>
                </div>
                <div class="btn-crud">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>

    <div id="signup-modal-aluno" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="signup-form" method="post" action="PHP/processaAluno.php">
                <div>
                    <label for="fullname">Nome completo:</label>
                    <input type="text" id="fullname" name="fullname" required><br><br>
                </div>
                <div>
                    <label for="ra">RA:</label>
                    <input type="text" id="ra" name="ra" required><br><br>
                </div>
                <div>
                    <label for="birthdate">Data de nascimento:</label>
                    <input type="date" id="birthdate" name="birthdate" required><br><br>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>
                </div>
                <div>
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required><br><br>
                </div>
                <div class="btn-crud">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>

    <script src="JS/script.js"></script>
</body>
</html>