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
                      Funzioni <input name="prova" type="TEXT" placeholder="Username"  required>
                     </div>
                      <div class="col-6">	
                       Senza funzioni<input name="prova1" type="TEXT" placeholder="Username"  required>
                     </div>
                     
					<input type="submit" id="myBtn" value="Invia">
				</div>
		</form>
		<div class="col-9 tenda">
    				<div class="titolo">Risultato dell'inserimento</div>
    				
    	  			 <div class="col-6">
    					Funzione<br>
        				|<?php 
        				require 'CostruttoreBase.php';
        				$prv = new Convalida($_POST['prova']);
        				echo $prv->pulisci_input();
        				
        				
        				 
        				?>|	
    				 </div>
    				 <div class="col-6">
    					Senza funzione<br>
        				|<?php 
        				
        				echo $_POST[prova1];
        				?>|
    				</div>
    	</div>

</body>
</html> 
    				
    				