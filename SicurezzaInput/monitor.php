<?php


?>
<html>
<head>
<title>Login</title>

<?php require 'frontend/css/login/Style.php'; ?>

 </head>

	<body>
		<h1>Prove  ad oggetti</h1>
		
		<form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  >
	
				<div class="col-9 tenda">
    				<div class="titolo">inserimento dati sicuri</div>
    				
    				 <div class="col-6">	
                      <p>Funzioni</p> <div class="col-6">
                      				<input name="prova" type="TEXT" placeholder="Username"  >
                      				<input name="pwd" type="password" placeholder="Password"  >
                      				<input name="eta" type="TEXT" placeholder="Età"  >
                     			</div>
                     </div>
                      <div class="col-6">	
                      <p> Senza funzioni</p><div class="col-6">
                       					<input name="prova1" type="TEXT" placeholder="Username"  >
                       					<input name="pwd1" type="password" placeholder="Password"  >
                       					<input name="eta1" type="TEXT" placeholder="Età"  >
                     				</div>
                     </div>
                     
					<input type="submit" id="myBtn" value="Invia">
				</div>
		</form>
		<div class="col-9 tenda">
    				<div class="titolo">Risultato dell'inserimento</div>
    				
    	  			 <div class="col-6">
    					Funzione<br>
        				|<?php //Questa dovrebbe essere la parte monitor
        				//require 'CostruttoreBase.php';
        				if (isset($_POST['prova'])) {
        				    
        				    require 'backend/validitaform/ErroreInput.php';
        				    //Si potrebbe creare una classe che eredita Convalida
        				    //inizializza le variabili post e le stampa
        				    $nome = new Convalida($_POST['prova']);
        				    echo $nome->controllo_nome().'<br>';
        				    
        				    $pwd=new Convalida ($_POST['pwd']);
        				    echo $pwd->controllo_Pwd().'<br>';
        				    
        				    $eta=new Convalida ($_POST['eta']);
        				    echo $eta->controllo_Info(18,90).'<br>';
        				}
        				
        				
        				
        				 
        				?>|	
    				 </div>
    				 <div class="col-6">
    					Senza funzione<br>
        				|<?php 
        				
        				echo $_POST[prova1];
        				echo '<br>'.$_POST['pwd1'];
        				echo '<br>'.$_POST['eta1'];
        				?>|
    				</div>
    	</div>

</body>
</html> 
    				
    				