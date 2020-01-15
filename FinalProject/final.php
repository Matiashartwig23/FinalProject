<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <link rel="stylesheet" type="text/css" href="basiclayoutClean.css">
    <script src="words.js"></script>
    <title>Matias' site: Meet Me!</title>

</head>



<body>
    <div class="container blue">
        <!-- Here is my first red div -->
        <div class="col-sm red">
            <!-- Here is my first green div -->
            <div id="profile" class="col-sm green">
                <a
                    href="https://www.google.com/search?q=chonky+cats&safe=strict&rlz=1C1GCEA_enCA867CA867&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjq8937kqDmAhXtHzQIHYqFA3kQ_AUoAXoECA8QAw&biw=1440&bih=789">
                    <img src="https://i.redd.it/y00bqjyjs9g31.jpg" width="75%" class="center">
                </a>
            </div>
            <div class="green mx-auto text-center">
                <font size="50">The most important chart...</font>
            </div>
            <!--div class="col-sm green">
                <p>green2</p>
            </div-->
            <!--div class="col-sm green">
                <p>green3</p>
            </div-->
        </div>
        <!-- Here is my second red div -->
        <div class="col red">
            <!-- Here is my first black div -->
            <div class="row black mx-auto" style="width: 100%;">
                <div class="col-sm brown" style="max-width: 101%">
                    <p name="words">

                    </p>
                </div>
            </div>
            <div class="row black mx-auto" style="width: 100%;">
                <div class="col-sm brown" style="max-width: 100%">
                
                <?php
                 // This is the script for creating the data in the database //
        // PHP Section to initialize the database variables //
        $username = "root";
        $password = "";
        $database = "G2T";
        $server = "localhost";
        // Creates a connection //
        $connection = new mysqli($server, $username, $password, $database);
?>
<div class="col-lg-10 col-md-10 col-sm-10">
                <h2>Matias' Contacts</h2>
                <table class="table  table-lightbrown table-striped">
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
            
        </div>
        <!-- Here is my third red div -->
        <div class="row red" style="margin:0px;">
            <div class="col orange">
                <div id="name" class="col-sm">
                    <h5>How to talk to the one and only... Me.</h5>
                    <form method="post" action="insert.php">
                        Name:<br>
                        <input type="text" name="name" placeholder="Name Here">
                        <br>
                        Email:<br>
                        <input type="text" name="email" placeholder="Email Here">
                        <br>
                        Phone Number:<br>
                        <input type="text" name="phoneNumber" placeholder="Phone Number Here">
                        <br>
                        Message:<br>
                        <textarea type="text" name="msg" placeholder="Write message here."></textarea>
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
            <!-- Here is my second orange div -->
            <div class="col orange">
                <div class="col-sm">
                    <h5>Where to find me.</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.031983918503!2d-119.27046368438444!3d50.27266140804055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537dd8ecf63f177b%3A0xf46d59c65ff9313c!2sW.L.%20Seaton%20Secondary!5e0!3m2!1sen!2sca!4v1575428799788!5m2!1sen!2sca"
                        width="500" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>