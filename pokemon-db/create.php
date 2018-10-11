<?php
    require 'banco.php';
    if(isset($_POST['btn_submit'])){
        $nome = $_POST['Name'];
        $num_pokedex = $_POST['Pokedex_Number'];
        $img_name = $_POST['Img_name'];
        $geracao = $_POST['Generation'];
        $evolucao = $_POST['Evolution_Stage'];
        $Evolved = $_POST['Evolved'];
        $IDfamilia = $_POST['FamilyID'];
        $cross_gen = $_POST['Cross_Gen'];
        $tipo1 = $_POST['Type_1'];
        $tipo2 = $_POST['Type_2'];
        $tempo1 = $_POST['Weather_1'];
        $tempo2 = $_POST['Weather_2'];
        $stats = $_POST['STAT_TOTAL'];
        $ataque = $_POST['ATK'];
        $defesa = $_POST['DEF'];
        $stamina = $_POST['STA'];
        $legendary = $_POST['Legendary'];
        $aquireable = $_POST['Aquireable'];
        $spawns = $_POST['Spawns'];
        $regional = $_POST['Regional'];
        $raid = $_POST['Raidable'];
        $quebravel = $_POST['Hatchable'];
        $shiny = $_POST['Shiny'];
        $nest = $_POST['Nest'];
        $novo = $_POST['New'];
        $naocapturavel = $_POST['NotGettable'];
        $futuraevol = $_POST['Future_Evolve'];
        $cp39 = $_POST['100_CP_39'];
        $cp40 = $_POST['100_CP_40'];
    }
    //se o nome nao estiver vazio sera criado um novo pokemon
    //todos os atributos se conectam usando os name dos fields no html
    if(!empty($nome)){
       try{
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO pokemon (Name,Pokedex_Number,Img_name, Generation, Evolution_Stage, FamilyID, Cross_gen, Type_1, Type_2, Weather_1, Weather_2, STAT_TOTAL, ATK, DEF, STA, Legendary, Aquireable, Spawns, Regional, Raidable, Hatchable, Shiny, Nest, New, NotGettable, Future_Evolve, 100_CP_40, 100_CP_39) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$num_pokedex, $img_name, $geracao, $evolucao, $IDfamilia, $cross_gen, $tipo1, $tipo2, $tempo1, $tempo2, $stats, $ataque, $defesa, $stamina,
            $legendary, $aquireable, $spawns, $regional, $raid, $quebravel, $shiny, $nest, $novo, $naocapturavel, $futuraevol,
            $cp39, $cp40));
            Banco::desconectar();
            header("Location: index.php");
        }
        catch (PDOException $e){
            print "Erro!:"  . $e->getMessage() . "<br/>";
            die();
        }
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
        <div class="container">
            <div clas="span10 offset1">
                <div class="row">
                    <h3 class="well"> Adicionar Pokemon </h3>
  </div>
      </div>
          </div>
                    <form class="form-horizontal form-row" action="create.php" method="post">
                      <div class = "col-md-6">
                            <label class="control-label">Nome</label>
                            <div class="controls">
                                <input size= "50" name="Name" type="text" placeholder="Nome" >
                               
                            </div>
                        </div>

                         <div class = "col-md-6">
                        
                            <label class="control-label">Número na Pokedex</label>
                            <div class="controls">
                                <input size="80" name="Pokedex_Number" type="text" placeholder="Endereço" >
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Número da imagem</label>
                            <div class="controls">
                                <input size="80" name="Img_name" type="text" placeholder="Número da evolução" >
                               
                        </div>
                        </div>
                        
                        <div class = "col-md-6">
                        <div class="control-group">
                            <label class="control-label">Geração</label>
                            <div class="controls">
                            <input size="80" name="Generation" type="text" placeholder="Geração">
                                
                        </div>
                        </div>
                        
                        <div class = "col-md-6">
                        <div class="control-group">
                            <label class="control-label">Estágio da Evolução</label>
                            <div class="controls">
                                <input size="80" name="Evolution_Stage" type="text" placeholder="Endereço">
                                
                        </div>
                        </div>
                     
                        <div class = "col-md-6">
                        <div class="control-group">
                            <label class="control-label">Estágio da Evolução</label>
                            <div class="controls">
                                <input size="80" name="Evolved" type="text" placeholder="Endereço" >
                                
                        </div>
                        </div>
                        

                        <div class="control-group>
                            <label class="control-label">ID da familia</label>
                            <div class="controls">
                                <input size="80" name="FamilyID" type="text" placeholder="Id da familia do Pokemon">
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Cross Gen</label>
                            <div class="controls">
                                <input size="80" name="Cross_Gen" type="text" placeholder="Id da familia do Pokemon" >
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Tipo principal do Pokemon</label>
                            <div class="controls">
                                <input size="80" name="Type_1" type="text" placeholder="Tipo principal">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Tipo secundário do Pokemon </label>
                            <div class="controls">
                                <input size="80" name="Type_2" type="text" placeholder="tipo secundário">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Tempo onde o Pokemon mais gosta</label>
                            <div class="controls">
                                <input size="80" name="Weather_1" type="text" placeholder="Tempo Primário">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Tempo que o pokemon ainda gosta mas não é seu principal!</label>
                            <div class="controls">
                                <input size="80" name="Weather_2" type="text" placeholder="Tempo Secundário">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Estatisticas totais</label>
                            <div class="controls">
                                <input size="80" name="STAT_TOTAL" type="text" placeholder="Estatisticas totais">
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Ataque</label>
                            <div class="controls">
                                <input size="80" name="ATK" type="text" placeholder="Ataque" >
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Defesa</label>
                            <div class="controls">
                                <input size="80" name="DEF" type="text" placeholder="Defesa">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Stamina</label>
                            <div class="controls">
                                <input size="80" name="STA" type="text" placeholder="stamina" required="">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Pokemon Lendário</label>
                            <div class="controls">
                                <input size="80" name="Legendary" type="text" placeholder="Lendário">
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Existe possibilidade de pegar o pokemon?</label>
                            <div class="controls">
                                <input size="80" name="Aquireable" type="text" placeholder="capturavel">
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Spawna?</label>
                            <div class="controls">
                                <input size="80" name="Spawns" type="text" placeholder="Spawn">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">regional</label>
                            <div class="controls">
                                <input size="80" name="Regional" type="text" placeholder="Regional">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Raid</label>
                            <div class="controls">
                                <input size="80" name="Raidable" type="text" placeholder="Endereço">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">O pokemon pode ser chocado</label>
                            <div class="controls">
                                <input size="80" name="Hatchable" type="text" placeholder="O pokemon pode ser chocado" >
                               
                        </div>
                        </div>

                        <div class="control-group ">
                            <label class="control-label">Tipo Shiny</label>
                            <div class="controls">
                                <input size="80" name="Shiny" type="text" placeholder="Pokemon é Shiny ">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nest</label>
                            <div class="controls">
                                <input size="80" name="Nest" type="text" placeholder="Nest" >
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Pokemon é novo?</label>
                            <div class="controls">
                                <input size="80" name="New" type="text" placeholder="Pokemon é novo?">
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Não capturavel</label>
                            <div class="controls">
                                <input size="80" name="NotGettable" type="text" placeholder="Não capturavel">
                               
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Futura Evolução</label>
                            <div class="controls">
                                <input size="80" name="Future_Evolve" type="text" placeholder="Futura Evolução">
                                
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">100% cp 40</label>
                            <div class="controls">
                                <input size="80" name="100_CP_40" type="text" placeholder="100% cp 40">
                              
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">100% cp 39</label>
                            <div class="controls">
                                <input size="80" name="100_CP_39" type="text" placeholder="100% cp 39">
                                
                        </div>
                        </div>

      
                        <div class="form-actions">
                            <br/>
                
                            <button name="btn_submit" type="submit" class="btn btn-success">Adicionar</button>
                            <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                        
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>



