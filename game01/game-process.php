<?php 
require_once('db-config.php');
 ?>

<?php 


			if(isset($_POST)){
				$bm_company = $_POST['companyName'];
				$bm_region = $_POST['chosenRegion'];
				$bm_city = $_POST['chosenCity'];
				$bm_user = $_POST['username'];
                				
				$sql = "INSERT INTO game_accounts (bm_company,bm_region,bm_city,bm_user) VALUES (?,?,?,?)";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$bm_company, $bm_region, $bm_city, $bm_user]);

				if($result){
					//echo "<script type='text/javascript'>alert('$messageAlert');</script>";
					//echo 'Successfully Added to Database!';
				}
				else{
					echo 'Error in Connection!';
				}
			//echo $firstname , " " , $middlename , " " , $lastname;
			}
			else{
				echo "Error";
			}

?>




