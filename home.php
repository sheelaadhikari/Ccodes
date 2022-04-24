<?php
$host = "mariadb";
$user = "testuser";
$pass = "testpassword";
$db = "mydb";
$connectQuery = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $selectQuery = "SELECT * FROM ads";
    $result = mysqli_query($connectQuery, $selectQuery);

    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }
}
?>















<!DOCTYPE html>
<html lang="en">

<head>

    <title>"buy and sell"</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">

    <link rel="stylesheet" href="./global.css">


</head>

<body>


    <nav>

        <div class="nav-bar">
            <div class="nav-left">

                <div class="first-bar">
                    <img src="./images/IMG_20220210_192018.jpg" alt="">
                </div>

                <div class="title-bar">
                    <h1>DoshroDeal</h1>
                </div>

            </div>
            <div class="nav-right">

                <div class="nav-item">
                    <a href="home.html"> Home</a>
                </div>

                <div class="nav-item">
                    <a href="about.html">About</a>

                </div>
                <div class="nav-item">
                    <a href="buyandsell.html"> Buy + Sell</a>
                </div>

                <div class="nav-item">
                    <a href="login.html"> Log in</a>
                </div>

            </div>


        </div>
    </nav>
    <div class="site-bar">
        <div class="image-site">
            <img src="./images/flea.jpg" alt="">
            <form class="form-control" placeholder="Search" name="Search" id="searchbox" method="get" action="contact.html">
                <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder=" Search" value autocomplete="on">

            </form>
        </div>
    </div>
    <div class="parag-wrapper">
        <p style="color: black;">With " DoshroDeal" you're working to save the money of needy people all across Nepal, giving people second chances and happy shopping. We’re saving more money now than at any point in our history, but our work isn’t done until every needy people
            gets the chance to know second hand shopping can svae their money who can't afford the first hand things. Last year, about 37000 peole had shop the things from our site. </p>

    </div>

    <hr>


    <div class="Latest-bar">
        Latest One
    </div>



    <section class="type-bar">

        <?php
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="child-bar">

                <div class="img-bar">
                    <img src="./images/kittle.jpeg" alt="">
                </div>
                <div class="description-bar">

                    <div class="pet-name">
                        <?php
                        echo $row['product_name'];
                        ?>

                    </div>










                    <div class="about-wrapper">


                    <div class="pet-name">
                        <?php
                        echo $row['description'];
                        ?>

                    </div>


                    

                    <div> 
                    
                    
                     
                    </div>
                        <!-- <div> 0.8 kg</div> -->
                    </div>











                </div>
                <div class="bottom-bar">
                    <div class="breed-bar">
                        <div>Copper</div>
                    </div>
                    <div class="price-bar">Price
                        <div> <?php
                                echo "Rs ".$row['price'];
                                ?></div>
                    </div>
                </div>
                <div class="buy-bar"><a href="login.html" style="color: white;">Buy Now</a></div>
            </div>



        <? } ?>








    </section>





















    <script src="index.js"></script>

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
<div style="background-color: black;">
    <div class="footer-bar">
        Join Our Pay Less Get More Culture
    </div>
    <p style="text-align: center; font-size: large; font: bolder; color: white; ">“Choose best Make it Last”</p>
    <a href="mailto: abc@example.com" class="d-flex justify-center" style="color: white;">thehaatbazar@gmail.com </a>


    <div class="footer-item">
        <div class="d-flex justify-center  align-center ">

            <a href="facebook.com" style="color: white; padding-right: 10px; ">Facebook</a>

            <a href="facebook.com" style="color: white; padding-right: 10px; ">Instragram</a>
            <a href="facebook.com" style="color: white; padding-right: 10px; ">Linkkedin</a>
            <a href="facebook.com" style="color: white; padding-right: 10px; ">Twitter</a>
        </div>

        <div class="d-flex justify-center  mg-t-10">


            <a href="contact.com" style="padding-right: 15px; color: white;" class="font-black">Contact </a>



            <a href="blog.com" style="padding-right: 15px; color: white;" class="font-black">Blog</a>

            <a href="medication.com" style="padding-right: 15px; color: white;" class="font-black">Terms and Condition</a>

            <a href="delivery.com" style="padding-right: 15px; color: white;" class="font-black">Delivery</a>
            <a href="delivery.com" style="padding-right: 15px; color: white;" class="font-black">Privacy Policy</a>
            <a href="delivery.com" style="padding-right: 15px; color: white;" class="font-black">Help & Support</a>
        </div>


    </div>
</div>




</html>