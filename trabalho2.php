<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="dash.css" rel="stylesheet">
</head>

<body>

<div class="dashboard-container">

    <!-- Menu lateral -->
    <nav>
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">Projetos</a></li>
            <li><a href="#">Relatórios</a></li>
            <li><a href="#">Configurações</a></li>
        </ul>

        <div class="perfil-usuario">
            <img src="https://ui-avatars.com/api/?name=Mario+Antonio&background=008080&color=fff" alt="avatar">
            <span>Mario Antonio</span>
        </div>
    </nav>


    <!-- Conteúdo principal -->
    <main>

        <section class="container-cards">

            <article>
                <h2>Módulo de Usuários</h2>
                <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                <a href="#" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Relatórios de Vendas</h2>
                <p>Acompanhe os gráficos de desempenho deste mês.</p>
                <a href="#" class="btn">Acessar</a>
            </article>

            <article>
                <h2>Configurações do Servidor</h2>
                <p>Ajuste as portas do Apache e o banco de dados.</p>
                <a href="#" class="btn">Acessar</a>
            </article>

        </section>

    </main>

</div>

<!-- Rodapé -->
<footer>
    <p>&copy; <?php echo date('Y'); ?> - desenvolvido na aula de web I</p>
</footer>

</body>
</html>