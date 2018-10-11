<?php
    require 'banco.php';
    $Row = null;
    if(!empty($_GET['Row']))
    {
        $Row = $_REQUEST['Row'];
    }
    //se a row for nula voltara para a pagina principal, caso ela exista ira trazer todos os dados do pokemon selecionado.
    if(null==$Row)
    {
        header("Location: index.php");
    }
    else 
    {
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM pokemon where Row = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($Row));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();
    }
?>

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
            <div class = "container-fluid">
                <div class="row">
                    <span class = "stats"> Stats completos do Pokemon </span>
                    
                </div>
                
                  
                    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Número Pokedex</th>
      <th scope="col">Número Imagem</th>
      <th scope="col">Geração</th>
      <th scope="col">Estágio da Evolução</th>
      <th scope="col">Evolução</th>
      <th scope="col">ID da familia</th>
      <th scope="col">Cross Gen</th>
      <th scope="col">Tipo 1</th>
      <th scope="col">Tipo 2</th>
      <th scope="col">Tempo 1</th>
      <th scope="col">Tempo 2</th>
      <th scope="col">Stats Totais</th>
      <th scope="col">Ataque</th>
      <th scope="col">Defesa</th>
      <th scope="col">Stamina</th>
      <th scope="col">Lendário</th>
      <th scope="col">Adquirível</th>
      <th scope="col">Spawn</th>
      <th scope="col">Regional</th>
      <th scope="col">Raidable</th>
      <th scope="col">Hatchable</th>
      <th scope="col">Shiny</th>
      <th scope="col">Nest</th>
      <th scope="col">New</th>
      <th scope="col">Nao é possivel pegar</th>
      <th scope="col">Futura evolução</th>
      <th scope="col">CP 100% 40</th>
      <th scope="col">CP 100% 30</th>
      

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $data['Row'];?></th>
      <td><?php echo $data['Name'];?></td>
      <td><?php echo $data['Pokedex_Number'];?></td>
      <td><?php echo $data['Img_name'];?></td>
      <td><?php echo $data['Generation'];?></td>
      <td><?php echo $data['Evolution_Stage'];?></td>
      <td><?php echo $data['Evolved'];?></td>
      <td><?php echo $data['FamilyID'];?></td>
      <td><?php echo $data['Cross_Gen'];?></td>
      <td><?php echo $data['Type_1'];?></td>
      <td><?php echo $data['Type_2'];?></td>
      <td><?php echo $data['Weather_1'];?></td>
      <td><?php echo $data['Weather_2'];?></td>
      <td><?php echo $data['STAT_TOTAL'];?></td>
      <td><?php echo $data['ATK'];?></td>
      <td><?php echo $data['DEF'];?></td>
      <td><?php echo $data['STA'];?></td>
      <td><?php echo $data['Legendary'];?></td>
      <td><?php echo $data['Aquireable'];?></td>
      <td><?php echo $data['Spawns'];?></td>
      <td><?php echo $data['Regional'];?></td>
      <td><?php echo $data['Raidable'];?></td>
      <td><?php echo $data['Hatchable'];?></td>
      <td><?php echo $data['Shiny'];?></td>
      <td><?php echo $data['Nest'];?></td>
      <td><?php echo $data['New'];?></td>
      <td><?php echo $data['NotGettable'];?></td>
      <td><?php echo $data['Future_Evolve'];?></td>
      <td><?php echo $data['100_CP_40'];?></td>
      <td><?php echo $data['100_CP_39'];?></td>
    </tr>
  </tbody>
</table>

                  <div class="form-actions">
                        <a href="index.php" type="button" class="btn btn-primary">Voltar</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
