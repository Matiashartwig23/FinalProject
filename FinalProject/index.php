<html>

<?php
    // PHP Section to initialize the database variables //
    $username = "root";
    $password = "";
    $database = "G2T";
    $server = "localhost";
    // Creates a connection //
    $connection = new mysqli($server, $username, $password, $database);

?>

<head>
    <!-- Imports for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Personal Imports -->
    <link rel="stylesheet" type="text/css" href="Assignment 3_G2T_NN.css">


    <title>Nathan's Contact List</title>
</head>

<body>
    <div class="container">
        <div class="row mx-auto justify-content-center text-center">
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="col-sm form-group">
                    <H1>Nathan's Contact List</H1>
                </div>
                <form method="post" action="insert.php">
                    <div class="col-sm form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="col-sm form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="col-sm form-group">
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number">
                    </div>
                    <div class="col-sm form-group">
                        <input type="text" class="form-control" name="msg" placeholder="Message">
                    </div>
                    <div class="col-sm form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <h2>Nathan's Contacts</h2>
                <table class="table table-responsive table-dark table-striped">
                    <thread>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thread>
                    <tbody>
                    <?php
                        /* This displays the user data queried from the database in a table */
                        // Creates the prepared statement //
                    
                        $query = $connection->prepare("SELECT * FROM contactlist");
                    
                        // Execute the statement //
                    
                        $query->execute();
                    
                        // get the result //
                    
                        $result = $query->get_result();
                    
                        // Itterate through the results //
                    
                        while ($row = $result->fetch_assoc()) {
                            echo("<tr><th scope='row'>" . $row['name'] . "</th>");
                            echo("<th>" . $row['email'] . "</th>");
                            echo("<th>" . $row['phonenumber'] . "</th>");
                            echo("<th>" . $row['msg'] . "</th></tr>");
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

