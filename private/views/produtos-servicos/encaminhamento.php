<?php
// --------------------------------------------------------------------
// SEGURANÇA: Proteção de acesso à página de edição
// Este ficheiro deve ser acedido apenas por utilizadores autenticados.
// Caso não exista sessão iniciada, o utilizador será redirecionado para o login.
// --------------------------------------------------------------------
require_once __DIR__ . '/../../includes/funcoes.php';
redirect_if_not_logged(); // Inicia a sessão (se necessário) e verifica se o utilizador está autenticado
include '../../includes/header.php';
include '../../includes/nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include '../../includes/sidebar.php'; ?>

        <!-- Conteúdo Principal -->
        <main class="content">
            <section>
                <h2>Avaliação de Condições de Saúde</h2>
                <p>Utilize este formulário para selecionar as condições de saúde relevantes do
                    cliente. As informações escolhidas irão gerar uma recomendação personalizada para o
                    plano de treino.</p>
            </section>
        </main>
        <div class="form-wrapper">
            <h2><strong><i class="fa-solid fa-dumbbell"></i> Avaliação de Condições de Saúde</strong></h2>
            <hr>
            <form oninput="avaliarCondicoes()">
                <div>
                    <input type="checkbox" id="temProblemasCostas" name="condicao">
                    <label>Problemas de costas</label><br>
                    <label><input type="checkbox" id="estaGravida" name="condicao"> Grávida</label><br>
                    <label><input type="checkbox" id="temDiabetes" name="condicao"> Diabético/a</label>
                </div>
                <div class="form-group">
                    <label>Recomendação:</label>
                    <div id="mensagem" class="alert text-center"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>