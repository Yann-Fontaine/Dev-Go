<?php

function afficherTableau($rows, $headers) { ?>

		<table style="width: 100%">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=formulaireUtilisateur.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>

			    <?php endfor; ?>
			    </tr>
                <tr>
                    <td>
                        <form method="post">
                            <button type="submit" name="deleteUser" value="<?php echo $row['id']; ?>">DELETE</button>
                            <button type="button"><a href="modifier-user.php?id=<?php echo $row['id']?>">Modifier</a></button>
                        </form>

                    </td>
                </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "id";
	$headers[] = "username";
	$headers[] = "password";
	$headers[] = "email";
	$headers[] = "admin";
	$headers[] = "created_at";
	return $headers;
}


?>





 