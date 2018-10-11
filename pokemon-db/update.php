<?php
    $row = null;
    if ( !empty($_GET['Row'])) 
              {
      $row = $_REQUEST['Row'];
              }
    
    if ( null==$row ) 
              {
      header("Location: index.php");
              }
    
    if ( !empty($_POST)) 
              {
      
      $nomeErro = null;
      
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
      
      //Validação
      $validacao = true;
      if (empty($nome)) 
                  {
                      $nomeErro = 'Por favor digite o nome!';
                      $validacao = false;
                  }
      
      // update data
      if ($validacao) 
                  {
                      $pdo = Banco::conectar();
                      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                      $sql = "UPDATE pessoa  set Name = ?, Pokedex_Number = ?, Img_name = ?, Generation = ?, Evolution_Stage = ?, Evolved = ?, FamilyID = ?, Cross_Gen = ?, Type_1 = ?, Type_2 = ?, Weather_1 = ?, Weather_2 = ?, STAT_TOTAL = ?, ATK = ?, DEF = ?, STA = ?, Legendary = ?, Aquireable = ?, Spawns = ?, Regional = ?, Hatchable = ?, Shiny = ?, Nest = ?, New = ?, NotGettable = ?, Future_Evolve = ?, 100_CP_39 = ?, 100_CP_40 = ? WHERE Row = ?";
                      $q = $pdo->prepare($sql);
                      $q->execute(array($nome,$num_pokedex,$img_name,$geracao,$evolucao,$Evolved,$IDfamilia,$cross_gen,$tipo1,$tipo2,$tempo1,$tempo2,$ataque,$defesa,$stamina,$legendary,$aquireable,$spawns,$regional,$raid,$quebravel,$shiny,$nest,$novo,$naocapturavel,$futuraevol,$cp39,$cp40));
                      Banco::desconectar();
                      header("Location: index.php");
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
            <div>
                <div class="row">
                    <span class="stats"> Alterar Pokemon </span>
  </div>
      </div>
          </div>
          <form>
          <div class="form-row" action="create.php" method="post">
                      <div class = "form-group col-md-4">
                            <label class="control-label">Nome</label>
                            
                                <input class = "form-control" name="Name" type="text" placeholder="Nome" >
                               
                            
                        </div>

                         <div class="form-group col-md-4">
                        
                            <label class="control-label">Número na Pokedex  </label>
                           
                                <input class =  "form-control" name="Pokedex_Number" type="text" placeholder="Endereço" >
                                
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Número da imagem</label>
                           
                                <input class = "form-control" name="Img_name" type="text" placeholder="Número da evolução" >
                               </div>
                        
                        </div>
                        
                        <div class="form-row">
                        <div class = "form-group col-md-4">
                            <label>Geração</label>
                            <input class = "form-control" name="Generation" type="text" placeholder="Geração">
                                
                        </div>
                        
                        
                        <div class= "form-group col-md-4">
                       
                            <label class="control-label">Estágio da Evolução</label>
                            
                                <input class = "form-control" name="Evolution_Stage" type="text" placeholder="Endereço">
                                
                        
                        </div>
                     
                        <div class= "form-group col-md-4">
                        
                            <label class="control-label">Estágio da Evolução</label>
                            
                                <input class = "form-control" name="Evolved" type="text" placeholder="Estágio" >
                                
                        </div>
                        </div>
                        
                        <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">ID da familia</label>
                                <input class = "form-control" name="FamilyID" type="text" placeholder="ID">
                               
                        
                        </div>

                         <div class= "form-group col-md-4">
                            <label class="control-label">Cross Gen</label>
                                <input class = "form-control" name="Cross_Gen" type="text" placeholder="Geração cross" >
                               
                        </div>
                        

                         <div class= "form-group col-md-4">
                            <label class="control-label">Tipo principal do Pokemon</label>
                                <input class = "form-control"  name="Type_1" type="text" placeholder="Tipo principal">
                                
                        </div>
                        </div>

                       <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">Tipo secundário do Pokemon </label>
                            
                                <input class = "form-control" name="Type_2" type="text" placeholder="tipo secundário">
                                
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Tempo onde o Pokemon mais gosta</label>
                            
                                <input class = "form-control" name="Weather_1" type="text" placeholder="Melhor tempo para pokemon">
                                
                        </div>
                        

                       <div class= "form-group col-md-4">
                            <label class="control-label">Tempo que o pokemon ainda gosta mas não é seu principal!</label>
                                <input class = "form-control" name="Weather_2" type="text" placeholder="Segundo melhor tempo pokemon">
                                
                        </div>
                        </div>

                        <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">Estatisticas totais</label>
                            
                                <input class = "form-control" name="STAT_TOTAL" type="text" placeholder="Estatisticas totais">
                               
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Ataque</label>
                           
                                <input class = "form-control" name="ATK" type="text" placeholder="Ataque" >
                                
                        </div>
                        

                        <div class= "form-group col-md-4">
                            <label class="control-label">Defesa</label>
                           
                                <input class = "form-control" name="DEF" type="text" placeholder="Defesa">
                                
                        </div>
                        </div>

                         <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">Stamina</label>
                           
                                <input class = "form-control" name="STA" type="text" placeholder="stamina" required="">
                                
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Pokemon Lendário</label>
                            
                                <input class = "form-control" name="Legendary" type="text" placeholder="Lendário">
                               
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Existe possibilidade de pegar o pokemon?</label>
                            
                                <input class = "form-control" name="Aquireable" type="text" placeholder="capturavel">
                               
                        </div>
                        </div>

                        <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">Spawna?</label>
                           
                                <input class = "form-control" name="Spawns" type="text" placeholder="Spawn">
                                
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">regional</label>
                            
                                <input class = "form-control" name="Regional" type="text" placeholder="Regional">
                                
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Raid</label>
                            
                                <input class = "form-control" name="Raidable" type="text" placeholder="Raid">
                                
                        </div>
                        </div>

                        <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">O pokemon pode ser chocado</label>
                            
                                <input class = "form-control" name="Hatchable" type="text" placeholder="O pokemon pode ser chocado" >
                               
                       
                        </div>

                       <div class= "form-group col-md-4">
                            <label class="control-label">Tipo Shiny</label>
                           
                                <input class = "form-control" name="Shiny" type="text" placeholder="Pokemon é Shiny ">
                                
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Nest</label>
                            
                                <input class = "form-control" name="Nest" type="text" placeholder="Nest" >
                                
                        </div>
                        </div>

                        <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">Pokemon é novo?</label>
                            
                                <input class = "form-control" name="New" type="text" placeholder="Pokemon é novo?">
                               
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">Não capturavel</label>
                            
                                <input class = "form-control" name="NotGettable" type="text" placeholder="Não capturavel">
                               
                        
                        </div>

                      <div class= "form-group col-md-4">
                            <label class="control-label">Futura Evolução</label>
                           
                                <input class = "form-control" name="Future_Evolve" type="text" placeholder="Futura Evolução">
                                
                        </div>
                        </div>

                        <div class="form-row">
                        <div class= "form-group col-md-4">
                            <label class="control-label">100% cp 40</label>
                            
                                <input class = "form-control" name="100_CP_40" type="text" placeholder="100% cp 40">
                              
                        
                        </div>

                        <div class= "form-group col-md-4">
                            <label class="control-label">100% cp 39</label>
                            
                                <input class = "form-control" name="100_CP_39" type="text" placeholder="100% cp 39">
                                
                        
                        </div>

                        <div class = "col-md-12 centralizar">
                          <button name="btn_submit" type="submit" class="btn btn-success centralizar">Atualizar</button>
                          <a href="index.php" type="btn" class="btn btn-warning">Voltar</a>
        </div>
    </body>
</html>




