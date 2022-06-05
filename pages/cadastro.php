<h1>Cadastro</h1>
<hr/>

<form method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="number" class="form-control" id="telefone" name="telefone" min="0">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>