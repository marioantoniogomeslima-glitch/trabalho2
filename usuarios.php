<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Gestão de Usuários</title>
<link href="dash.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

<div class="header-content"> 
<h2>Gestão de usuários</h2>
<p>Visualize e gerencia as permissões dos usuários do sistema.</p>
</div>

<div class="table-responsive">
<table>

<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>E-mail</th>
<th>Acesso</th>
<th>Status</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<tr>
<td>01</td>
<td>Eric Freitas</td>
<td>eric@unifev.edu.br</td>
<td>Administrador</td>
<td><span class="badge ativo">Ativo</span></td>

<td>

<button class="btn-icon">
<i class="fa-solid fa-eye"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-pen"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-trash"></i>
</button>

</td>
</tr>

<tr>
<td>02</td>
<td>Ana Souza</td>
<td>ana.souza@email.com</td>
<td>Editor</td>
<td>Ativo</td>

<td>

<button class="btn-icon">
<i class="fa-solid fa-eye"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-pen"></i>
</button>

<button class="btn-icon">
<i class="fa-solid fa-trash"></i>
</button>

</td>

</tr>

</tbody>
</table>
</div>

</main>

</div>

<!-- Rodapé -->
<footer>
<p>&copy; <?php echo date('Y'); ?> - desenvolvido na aula de web I</p>
</footer>

</body>
</html>