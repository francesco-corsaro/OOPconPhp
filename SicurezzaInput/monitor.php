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
                      				<input name="prova" type="TEXT" placeholder="Username"  required>
                      				<input name="pwd" type="password" placeholder="Password"  required>
                     			</div>
                     </div>
                      <div class="col-6">	
                      <p> Senza funzioni</p><div class="col-6">
                       					<input name="prova1" type="TEXT" placeholder="Username"  required>
                       					<input name="pwd1" type="password" placeholder="Password"  required>
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
        				    $nome = new Convalida($_POST['prova']);
        				    echo $nome->controllo_nome();
        				    /*$pwd=new Convalida ($_POST['pwd']);
        				   echo $pwd->controllo_Pwd();*/
        				    //echo $prv->pulisci_input();
        				}
        				
        				
        				
        				 
        				?>|	
    				 </div>
    				 <div class="col-6">
    					Senza funzione<br>
        				|<?php 
        				
        				echo $_POST[prova1];
        				echo '<br>'.$_POST['pwd1'];
        				?>|
    				</div>
    	</div>

</body>
</html> 
    				
    				