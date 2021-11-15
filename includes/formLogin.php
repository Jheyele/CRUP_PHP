<?php
    $alertLogin = strlen($alertLogin) ? '<div class="alert alert-danger" style="width:50%;">'.$alertLogin.'</div>' : '';
?>
<div>
        <div style="margin: 200px;">
            <form method="post">
                <h2>Login</h2>
                <?=$alertLogin?>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required style="width:50%;">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required style="width:50%;">
                </div>
                <div class="form-group">
                    <button type="submit" name="login" value="Logar" class="btn btn-primary" required>Login</button>
                </div>
            </form>
        </div>
</div>