<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        

    </head>
    
    <body>
    
        <div class="jumbotron">
        <div class="container">
            <div class="row d-flex justify-content-center" id="app">
           
            </div>
            
            <div class="row d-flex justify-content-center">
                <p>
                    <a href="create.php" class="btn btn-success d-flex justify-content-center">Adicionar</a>
                </p>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Tipo 1</th>
                            <th>Tipo 2</th>
                            <th>Stat Total</th>
                            <th>ATK</th>
                            <th>DEF</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //passando os dados da tabela do db para a tabela no HTML
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = "SELECT Row,Name, Type_1, Type_2, STAT_TOTAL, ATK, DEF FROM pokemon";
                        $result = $pdo -> query($sql);

                        
                    
                      // foreach fara com que as variaveis passadas do db aparecam na tabela
                        foreach($result as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row["Row"] . '</td>';
                            echo '<td>'. $row['Name'] . '</td>';
                            echo '<td>'. $row['Type_1'] . '</td>';
                            echo '<td>'. $row['Type_2'] . '</td>';
                            echo '<td>'. $row['STAT_TOTAL'] . '</td>';
                            echo '<td>'. $row['ATK'] . '</td>';
                            echo '<td>'. $row['DEF'] . '</td>';
                            echo '<td width=400>';
                            //botoes para o crud
                            echo '<a class="btn btn-primary" href="read.php?Row='.$row['Row'].'">Listar</a>';
                            echo ' ';
                            echo '<a class="btn btn-warning" href="update.php?Row='.$row['Row'].'">Atualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?Row='.$row['Row'].'">Excluir</a>';
                            echo '</td>';
                            echo '<tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>                   
                </table>               
            </div>
        </div>
        </div>
    </body>
</html>
