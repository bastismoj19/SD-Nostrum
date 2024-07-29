<!---Walter James Bastismo GROUP 3--->

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
                            <div class="tab-link active" onclick="openTab(event, 'tab1')">Iste natus</div>
                            <div class="tab-link" onclick="openTab(event, 'tab2')">Qui ratione</div>
                        </div>
                        <div class="tab-content" id="tab1">
                            <input type="text" placeholder="Adipiscing">
                            <input type="text" placeholder="Ex ea commodi">
                            <button>Vel illum qui</button>
                        </div>
                        <div class="tab-content" id="tab2" style="display: none;">
                            <input type="text" placeholder="FullName">
                            <input type="text" placeholder="CellPhone ">
                            <input type="text" placeholder="Ex ea commodi">
                            <button>Vel illum qui</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="assets/js/style.js"></script>
</html>