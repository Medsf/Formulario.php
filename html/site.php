<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="../css/site.css" type="text/css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <title>Formulário</title>
</head>

<body>
    <h2>Informações pessoais</h2>
    <br>
 <div class="container">
    <form class="row g-3" method="POST" action="../php/cadastrar.php">
    <div class="col-md-6">
        <label form="text"><b>Nome completo</label></b>
        <input type="text" class="form-control" name="nomeCompleto" placeholder="Digite seu nome" id="nome" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="text"><b>Usuário</label></b>
        <input type="text" class="form-control" name="usuario" placeholder="Digite o nome de usuario" id="usuario" required>
    </div>
    <br>
    <div class="col-md-12">
        <label for="email"><b>Email</label></b>
        <input type="email" class="form-control" name="email" placeholder="Digite seu email" id="email" required>
    </div>
    <br>
    <div class="col-md-12">
        <label for="password"><b>Senha</label></b>
        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" id="senha" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="password"><b>Confirmar senha</label></b>
        <input type="password" class="form-control" name="confimar" placeholder="Confirmar a senha" id="confimar" required>
    </div>
    <br>
    <div class="col-md-6">
    <label for="genero"><b>Genero</label></b>
    <select class="form-select" aria-label="Default select example" name="genero">
        <option value="1">Feminino</option>
        <option value="2">Masculino</option>
        <option value="3">Outros</option>
      </select>
    </div>
      <br>
      <div class="col-md-6">
        <label for="date"><b>Data de nascimento</label></b>
        <input type="date" class="form-control" id="date" name="dataDeNascimento" required>
      </div>
      <br>
      <div class="col-md-6">
        <label form="number"><b>CPF</label></b>
        <input type="number" class="form-control" name="cpf" placeholder="Digite seu cpf" id="cpf" required>
    </div>
    <br>
    <div class="col-md-6">
        <label form="telefone"><b>Telefone</label></b>
        <input type="tel" class="form-control" name="telefone" placeholder="Digite seu telefone" id="tel" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="text"><b>UF</label></b>
        <input type="text" class="form-control" name="uf" placeholder="Digite seu estado" id="uf" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="text"><b>Cidade</label></b>
        <input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade" id="cidade" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="text"><b>Logradouro</label></b>
        <input type="text" class="form-control" name="Logradouro" placeholder="Digite seu Logradouro" id="Logradouro" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="text"><b>N°</label></b>
        <input type="text" class="form-control" name="numero" placeholder="Digite seu número" id="numero" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="text"><b>Complemento</label></b>
        <input type="text" class="form-control" name="complemento" placeholder="Casa,Bloco,Apart,etc..." id="complemento" required>
    </div>
    <br>
    <div class="col-12">
        <button class="btn btn-primary" type="submit" onclick="validar()" >Enviar</button>
      </div>
    </form>
 </div>

 <script src="../Js/site.Js"></script>
</body>

</html>