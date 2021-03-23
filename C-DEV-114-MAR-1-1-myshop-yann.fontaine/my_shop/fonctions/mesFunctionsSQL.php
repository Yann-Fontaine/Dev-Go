<?php
	function getDatabaseConnexion() {
		try {
            $pdo = new PDO('mysql:host=localhost;dbname=my_shop', 'root', '');
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	
	// récupere tous les users
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from users';
		$rows = $con->query($requete);
		return $rows;
	}

	//recupere un user
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from users where id = '".$id."' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];


		}
		return $con;
	}

	//met à jour le user
	function updateUser($id, $username, $email, $admin) {

		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE users set 
						username = '".$username."',
						email = '".$email."',
						admin='".$admin."'
						where id = '".$id."' ";
			$con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $e->getMessage();
	    }
	}

	// supprime
	function delete($tablename, $id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from ".$tablename." where id = '".$id."' ";
			$con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $e->getMessage();
	    }
	}

	function getUser() {
	    $user['id']="";
		$user['username'] = "";
		$user['password'] = "";
		$user['email'] = "";
		$user['admin'] = "";
		$user['created_at'] = "";
		return $user;
		
	}
	


 ?>