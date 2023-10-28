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

      $name = $_POST["usrnm"];
      $pass = $_POST["psw"];
      $mail = $_POST["email"];
      $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Check if the email is unique
      $check_email_query = "SELECT * FROM users WHERE Email = '$mail'";
      $result = $conn->query($check_email_query);

      if ($result->num_rows > 0) {
        echo "Email address is already in use. Please choose a different one!";
      } else {
        $sql = "INSERT INTO users (Username, Password, Email) VALUES ('$name', '$hashed_password', '$mail')";

        if ($conn->query($sql) === TRUE) {
          echo "<h2>Welcome, $name!</h2>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }

      $conn->close();
      ?>

    </div>
  
  </body>
</html>