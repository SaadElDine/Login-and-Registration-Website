<html>
  <head>
    <style>
          body 
          {
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              margin: 0;
              background-image: url(back.jpg);
              color: while;
          }
          .w {
              text-align: center;
              font-size: 50px;
              width: 100%;
              height: 100%;
              background-image: url(back.jpg);
              background-size: cover;
              background-position: center;
              position: relative;
              color: white;
          }
      </style>
  </head>
  <body>
    <div class="w">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "users";
      
            $pass = $_POST["pswin"];
            $mail = $_POST["emailin"];
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
      
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
      
           
            $query = $conn->prepare("SELECT Username, Password FROM users WHERE Email = ?");
            $query->bind_param("s", $mail);
            $query->execute();
            $query->store_result();

            if ($query->num_rows > 0) {
                $query->bind_result($name, $hashed_password);
                $query->fetch();
                // Verify the entered password against the hashed password
                if (password_verify($pass, $hashed_password)) {
                    echo "<h2>Welcome, $name!</h2>";
                } else {
                    echo "Incorrect password. Please try again.";
                }
            } else {
                echo "Email not found. Please sign up first.";
            }

            $query->close();
            $conn->close();
        ?>
    </div>
  
  </body>
</html>



