<main>

    <h2 class="mt-3"> Excluir Usuário </h2>

    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir o usuário <strong><?=$usuario->nome?></strong>?</p>
        </div>

        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success">Voltar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
       

        

    </form>

</main>