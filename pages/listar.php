<h1>Listar</h1>

<hr/>

<table class="table table-hover table-striped">
    <thead class="table-dark">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($contatos as $posicao => $contato) {
        $partial = explode(';', $contato);

        echo '
                    <tr>
                        <td> ' . $partial[0] . '</td>
                        <td> ' . $partial[1] . '</td>
                        <td> ' . $partial[2] . '</td>
                        <td>   <a href="/excluir?id=' . $posicao . '" class="btn btn-danger btn-sm">Excluir</a> </td>
                    </tr>
                ';

    }
    ?>
    </tbody>
</table>