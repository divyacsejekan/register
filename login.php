<html>
	<body>
        <?php
            
                $password=$_POST["password"];
                $email=$_POST["email"];
                $user = "root";
                $pass = "root";
                try{
                $dbh = new PDO('mysql:host=localhost;dbname=register', $user, $pass);
                 
                    $sql = "SELECT passwd FROM user_reg where email='$email'";
                    $s=$dbh->prepare($sql);
                    $s->execute();
                    $s->setFetchMode(PDO::FETCH_ASSOC);
                    $r=$s->fetch();
                    if($password==$r['passwd'])
                    {
                        header("location: welcome.html");
                    }
                    else
                    {
                        echo "wrong email or password";
                    }
                      
                } catch (PDOException $e) 
                {
                    die("Could not connect to the database $dbname :" . $e->getMessage());
                }    
                $dbh=null;
            

            ?>
