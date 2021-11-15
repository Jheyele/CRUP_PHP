<?php
    $result = '';
    foreach($usuarios as $usuario){
        $result .= '<tr>
                        <td>'.$usuario->nome.'</td>
                        <td>'.$usuario->email.'</td>
                        <td>'.$usuario->data_nascimento.'</td>
                        <td>'.$usuario->data_de_emissao.'</td>
                        <td>'.$usuario->hora_emissao.'</td>
                        <td>
                            <a href="update.php?id='.$usuario->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="delete.php?id='.$usuario->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
    };

    $result = strlen($result) ? $result : '<tr>
                                                <td colspan=6 class="text-center">
                                                    Nenhum usuário encontrado
                                                </td>
                                            </tr>';
    $paginationN = '';
    $pages = $pagination->getPages();
    
    foreach($pages as $key=>$page){
        $class = $page['current'] ? 'btn-primary' : 'btn-light';
        $paginationN .='<a href="?page='.$page['page'].'">
                                <button type="button" class="btn '.$class.'">'.$page['page'].'</button>
                             </a>';
    }
?>


<main>
    <section>
        <a href="create.php">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </section>
    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                    <th>Data de Emissão</th>
                    <th>Hora de Emissão</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?=$result?>
            </tbody>
        </table>
    </section>

    <section>
        <?=$paginationN?>
    </section>

   
</main>