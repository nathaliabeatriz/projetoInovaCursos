<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="visao/styles/style-index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <main>
        <aside>
            <h1><img src="visao/img/index/innovation.png" alt="lampada" id="lampada"> Inova Cursos</h1>
            <div id="subtitulos">
                <div>
                    <img src="visao/img/index/check.png" alt="check mark" class="check">
                    <h2>Autonomia</h2>
                </div>
                <div>
                    <img src="visao/img/index/check.png" alt="check mark" class="check">
                    <h2>Flexibilidade</h2>
                </div>
                <div>
                    <img src="visao/img/index/check.png" alt="check mark" class="check">
                    <h2>Economia</h2>
                </div>
                <div>
                    <img src="visao/img/index/check.png" alt="check mark" class="check">
                    <h2>Variedade</h2>
                </div>
            </div>
        </aside>

        <article>
            <div id="div-img-principal">
                <img src="visao/img/index/homem.png" alt="" id="homem">
                <img src="visao/img/index/fundo.png" alt="" id="fundo">
            </div>
            <div id="login">
                <img class="img-menu" src="visao/img/iconesMenu/user.png" alt="Ícone usuário">
                <a href="curso.php?fun=listar">login</a>
            </div>
        </article>
    </main>

    <div id="topicos">
        <h2 id="subAumente">Aumente seu conhecimento aprendendo com:</h2>
        <div id="aprendaCom">
            <div class="topico">
                <div>
                    <img src="visao/img/index/trilha.png" alt="trilha">
                    <p>Trilha personalizada</p>
                </div>
            </div>
            <div class="topico">
                <div><img src="visao/img/index/conteudo.png" alt="conteudo">
                    <p>Conteúdo de qualidade</p>
                </div>
            </div>
            <div class="topico">
                <div><img src="visao/img/index/ferramentas.png" alt="ferramentas">
                    <p>Ferramentas tecnológicas</p>
                </div>
            </div>
            <div class="topico">
                <div><img src="visao/img/index/comunidade.png" alt="comunidade">
                    <p>Comunidade online</p>
                </div>
            </div>
        </div>
    </div>

    <div class="inscreva">
        <h2>Matricule-se em nossos cursos agora mesmo!</h2>
       <a href="usuario.php?fun=cadastrar"><button id="btn-matr">Quero me matricular!</button></a> 
    </div>
</body>

</html>