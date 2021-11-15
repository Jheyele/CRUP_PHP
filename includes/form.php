<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"> <?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label> Nome </label>
            <input type="text" class="form-control" name="nome" value="<?=$usuario->nome?>">
        </div>

        <div class="form-group">
            <label> Email </label>
            <input type="email" class="form-control" name="email" value="<?=$usuario->email?>">
        </div>

        <div class="form-group">
            <label> Senha </label>
            <input type="password" class="form-control" name="senha" value="<?=$usuario->senha?>">
        </div>

        <div class="form-group">
            <label> Data de nascimento </label>
            <input type="date" class="form-control"  name="data_nascimento" value="<?=$usuario->data_nascimento?>">
        </div>

        <div class="mt-3">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </div>

    </form>

</main>