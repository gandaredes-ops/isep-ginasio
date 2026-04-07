<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCAP Ginásio</title>
    <!--  favicon  -->
    <link rel="shortcut icon" href="assets/images/gym255_white.png" type="image/png">
    <!--  estilos de página  -->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- Font Awesome (local) -->
    <link rel="stylesheet" href="assets/fontawesome/all.min.css">

</head>

<body>
    <!-- Navegação -->
    <nav class="bng-navbar">
        <div>
            <img src="assets/images/gym255.png" alt="Logo da empresa">
            <h3>ISCAP Ginásio</h3>
        </div>
        <!-- Links centrais -->
        <div class="container-navegacao">
            <nav-links>
                <a href="#quem-somos">Quem somos</a>
                <a href="#nossa-equipa">A Nossa Equipa</a>
                <a href="#servicos">Serviços</a>
                <a href="#aula-grupo">Aulas de grupo</a>
                <a href="#precario">Preçário</a>
                <a href="#contacto">Contacto</a>
            </nav-links>
        </div>
        <!-- Area Cliente -->
        <div class="nav-cliente">
            <a href="login_form.html" target="_blank">Área Restrita</a>
        </div>
    </nav>
    <!-- Seção "Quem Somos" -->
    <section class="container-texto-generico" id="quem-somos">
        <div class="quem-somos-content">
            <h1>Transforme o Seu Corpo e Mente</h1>
            <p>Treino personalizado, aulas de grupo, pilates, fisioterapia e nutrição, tudo num só lugar.</p>
            <img src="assets/img/C_e_o_mundo.jpg" alt="Banner do Ginásio"> <a href="#contacto" class="button">Agende uma
                Consulta</a>
        </div>
    </section>

    <!-- Seção "Conteudo da pagina - Equipa" -->
    <section id="nossa-equipa">
        <h2>A Nossa Equipa</h2>
        <div class="equipa-container">
            <div class="pessoa">
                <img src="https://picsum.photos/150" alt="Treinador 1">
                <h3>João Silva</h3>
                <p>Treinador Personalizado</p>
            </div>
            <div class="pessoa">
                <img src="https://picsum.photos/200" alt="Fisioterapeuta 1">
                <h3>Ana Costa</h3>
                <p>Fisioterapeuta</p>
            </div>
            <div class="pessoa">
                <img src="https://picsum.photos/180" alt="Nutricionista 1">
                <h3>Mariana Santos</h3>
                <p>Nutricionista</p>
            </div>
        </div>
    </section>

    <!-- Secção "Conteudo da pagina - Serviços"  -->
    <section id="servicos">
        <h2>Nossos Serviços</h2>
        <div class="servicos-container">
            <div class="servico">
                <i class="fa-solid fa-dumbbell fa-3x"></i>
                <h3>Treino Personalizado</h3>
                <p>Programas de treino individualizados para atingir seus objetivos.</p>
            </div>
            <div class="servico">
                <i class="fa-solid fa-people-group fa-3x"></i>
                <h3>Aulas de Grupo</h3>
                <p>Diversas modalidades para todos os níveis de condicionamento físico.</p>
            </div>
            <div class="servico">
                <i class="fa-solid fa-person-praying fa-3x"></i>
                <h3>Pilates</h3>
                <p>Fortalecimento do core e melhora da postura.</p>
            </div>
            <div class="servico">
                <i class="fa-solid fa-hand-holding-medical fa-3x"></i>
                <h3>Fisioterapia</h3>
                <p>Recuperação e prevenção de lesões.</p>
            </div>
            <div class="servico">
                <i class="fa-solid fa-apple-whole fa-3x"></i>
                <h3>Nutrição</h3>
                <p>Planos alimentares personalizados para otimizar seus resultados.</p>
            </div>
        </div>
    </section>

    <!-- Secção "Conteudo da pagina - Aulas de Grupo"  -->
    <section id="aula-grupo">
        <h2>Modalidades de Aulas de Grupo</h2>
        <div class="servicos-container">
            <div class="servico">
                <i class="fas fa-child fa-3x"></i>
                <h3>Pilates</h3>
                <p>Programas de treino individualizados para atingir seus objetivos.</p>
            </div>
            <div class="servico">
                <i class="fas fa-running fa-3x"></i>
                <h3>Clube de Corrida</h3>
                <p>Diversas modalidades para todos os níveis de condicionamento físico.</p>
            </div>
            <div class="servico">
                <i class="fas fa-dumbbell fa-3x"></i>
                <h3>CrossFit</h3>
                <p>Fortalecimento do core e melhora da postura.</p>
            </div>
            <div class="servico">
                <i class="fas fa-music fa-3x"></i>
                <h3>Zumba</h3>
                <p>Recuperação e prevenção de lesões.</p>
            </div>
            <div class="servico">
                <i class="fas fa-shoe-prints fa-3x"></i>
                <h3>Step</h3>
                <p>Planos alimentares personalizados para otimizar seus resultados.</p>
            </div>
        </div>
    </section>

    <!-- Secção "Conteudo da pagina - Preciario"  -->
    <section id="precario">
        <h2>Nossos Pacotes de Treino</h2>
        <div class="pacotes-container">
            <div class="pacote">
                <h3>Pacote Essencial</h3>
                <p class="preco">€50/mês</p>
                <ul>
                    <li>2x Treino Personalizado por semana</li>
                    <li>Acesso às Aulas de Grupo</li>
                </ul>
                <a href="#contacto" class="button">Contratar</a>
            </div>
            <div class="pacote">
                <h3>Pacote Premium</h3>
                <p class="preco">€80/mês</p>
                <ul>
                    <li>3x Treino Personalizado por semana</li>
                    <li>Acesso ilimitado às Aulas de Grupo</li>
                    <li>1x Sessão de Pilates por semana</li>
                </ul>
                <a href="#contacto" class="button">Contratar</a>
            </div>
            <div class="pacote">
                <h3>Pacote VIP</h3>
                <p class="preco">€120/mês</p>
                <ul>
                    <li>Treino Personalizado Ilimitado</li>
                    <li>Acesso ilimitado às Aulas de Grupo</li>
                    <li>2x Sessões de Pilates por semana</li>
                    <li>1x Consulta de Nutrição por mês</li>
                </ul>
                <a href="#contacto" class="button">Contratar</a>
            </div>
        </div>
    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <p>Entre em contacto conosco para agendar uma consulta ou tirar suas dúvidas.</p>
        <form id="contactForm">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea> <button type="submit">Enviar
                Mensagem</button>
        </form>
    </section>

    <!-- Rodapé -->
    <footer class="footer-container">
        <div class="footer-section">
            <strong>LOCALIZAÇÃO</strong>
            <p> R. Jaime Lopes Amorim s/n <br> 4465-004 São Mamede de Infesta, Porto <br> Portugal</p>
        </div>
        <div class="footer-section">
            <strong>HORÁRIO</strong>
            <p>2.ª a 6.ª Feira: 07:00h - 23:00h</p>
            <p>Sábado e Feriados: 09:00h - 19:00h</p>
            <p>Domingo: 10:00h - 13:00h</p>
        </div>
        <div class="footer-section">
            <strong>CONTACTOS</strong>
            <p>Email: geral@iscapgym.com</p>
            <p>Telefone: +351 224 908 204</p>
        </div>
    </footer>

</body>

</html>