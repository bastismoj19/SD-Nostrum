<!---Walter James Bastismo GROUP 3--->
<?php
    // Creates database automatically 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nostrum";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Read SQL file
    $sql = file_get_contents('assets/database/nostrum.sql');

    // Execute SQL script
    if ($conn->multi_query($sql)) {
        do {
            // Store first result set
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());
    }

    $conn->close();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nostrum</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/stylesheet.css">
        <link rel="icon" href="assets/img/device_black.png">
    </head>
    <body>
        <header>
            <img src="assets/img/nostrum.png" alt="">
            <div>
                <ul class="links">
                    <li><a href="">Lorem</a></li>
                    <li><a href="">Ipsum</a></li>
                    <li><a href="">Dolor</a></li>
                </ul>
            </div>
            <div class="search_container">
                <img class="search_icon" src="assets/img/search_icon.png" alt="">
                <input class="search_input" type="text" placeholder="Aperiam">
            </div>
        </header>

        <div class="body">
            <div class="body_container">
                <div class="body_content">
                    <h1>Sed ut perspiciatis unde omnis iste natus error sit</h1>
                    <p class="body_paragraph">Nemo enim ipsam voluptatem <br>quia voluptas sit</p>
                    <button class="body_button" onclick="CpList()">Voluptatibus</button>
                </div>
                <div>
                    <img class="device_black" src="assets/img/device_black.png" alt="">
                </div>
            </div>
        </div>

        <div class="body1">
            <div class="body1_content">
                <img class="body1_img" src="assets/img/wifi.png" alt="">
                <p class="body1_paragraph">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
            </div>
            <div class="body1_content">
                <img class="body1_img" src="assets/img/connect.png" alt="">
                <p class="body1_paragraph">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
            </div>
            <div class="body1_content">
                <img class="body1_img" src="assets/img/message.png" alt="">
                <p class="body1_paragraph">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</p>
            </div>
        </div>

        <div class="body2">
            <div>
                <div class="body2_container">
                    <img class="iphone7" src="assets/img/iphone7.png" alt="">
                    <div>
                        <h1>At vero eos et accusamus et iusto odio</h1>
                        <p class="body2_paragraph">Nam libero tempore, cum soluta nobis est eligendi optio <br>nihil impedit quo minus id quod maxime placeat facere.</p>
                        <button class="body2_button" onclick="IphoneList()">Vel illum qui</button>
                    </div>
                </div>
                <div style="display: flex; margin-top: 2rem; gap: 2rem;">
                    <div class="body2_container2">
                        <h1>Ut enim ad minima veniam</h1>
                        <div style="display: flex; gap: 2rem; margin-top: 1rem;">
                            <div>
                                <img style="height: 15rem;" src="assets/img/phone.png" alt="">
                            </div>
                            <div>
                                <div style="width: 18rem; align-items: center; margin-top: 10px;" class="body1_content">
                                    <img style="z-index: 999;" src="assets/img/wifi.png" alt="">
                                    <p class="body2_paragraph1">Nam libero tempore, cum soluta nobis est eligendi</p>
                                </div>
                                <div style="width: 18rem; align-items: center; margin-top: 10px;" class="body1_content">
                                    <img style="z-index: 999;" src="assets/img/connect.png" alt="">
                                    <p class="body2_paragraph1">Nam libero tempore, cum soluta nobis est eligendi</p>
                                </div>
                                <div style="width: 18rem; align-items: center; margin-top: 10px;" class="body1_content">
                                    <img style="z-index: 999;" src="assets/img/message.png" alt="">
                                    <p class="body2_paragraph1">Nam libero tempore, cum soluta nobis est eligendi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-container">
                        <div class="tab-header">
                            <div class="tab-link active" onclick="openTab(event, 'tab1')">Login</div>
                            <div class="tab-link" onclick="openTab(event, 'tab2')">Register</div>
                        </div>
                        <div class="tab-content" id="tab1">
                            <form action="assets/php/logindatabase.php" method="post">
                                <input type="email" name="gmail" class="gmail" placeholder="Gmail" required>
                                <input type="password" name="password" class="password" placeholder="Password" required>
                                <button type="submit" name="action" value="login">Login</button>
                            </form>
                        </div>
                        <div class="tab-content" id="tab2" style="display: none;">
                            <form action="assets/php/registerdatabase.php" method="post">
                                <input type="text" name="fullname" class="fullname" placeholder="Fullname" required>
                                <input type="password" name="password" class="password" placeholder="Password" required>
                                <input type="email" name="gmail" class="gmail" placeholder="Gmail" required>
                                <button type="submit" name="action" value="register">Register</button>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="assets/js/style.js"></script>
</html>