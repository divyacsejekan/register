
        <?php
			$name=$_POST["name"];
			$email=$_POST["email"];
			$password=$_POST["password"];

            try {
                $user = "root";
                $pass = "root";
                $dbh = new PDO('mysql:host=localhost;dbname=register', $user, $pass);
                
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $que="INSERT INTO user_reg (cname, email, passwd) VALUES ('$name','$email','$password')";
                
                $stmt=$dbh->prepare($que);
                $stmt->execute();
                } 
                catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
                }

                $dbh = null; 
                // next page
                header('Location: login.html');
            
        
		?>




