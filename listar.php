<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
		<?php 
			$msg = $_GET['msg'];
			include_once './topo.php';
			include_once './mysql.php';
			 try {
			            $stmt = $pdo->prepare("SELECT * FROM $msg");
			      
			       
						$stmt->execute();
			            $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);
			             if(empty($arrValues)){
			               ?>
			               <p align="center" style="color: red"><?php echo "<br>Nenhum registro encontrado"; ?></p>
			               <?php

			            }else{
					//1 letra maiuscula
			        $msg1 = ucfirst($msg);
			        // open the table
				    print "<h2><p align=center> <font color=red> $msg1   </font></p></h2> ";
			            print "<table align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>\n";
			            print "<tr>\n";
			// add the table headers
			            foreach ($arrValues[0] as $key => $useless) {
			                print "<th>$key</th>";
			            }
			            print "</tr>";
			// display data
			            foreach ($arrValues as $row) {
			                print "<tr>";
			                foreach ($row as $key => $val) {
			                    print "<td>$val</td>";
			                }
			                print "</tr>\n";
			            }
			// close the table
			            print "</table>\n";
			        }
			        } catch (PDOException $e) {
			            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
			        }

			include_once './rodape.php';

		?>
	</body>