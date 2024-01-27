<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="tab.png" type="png/tab.png">
    <title>King of Curses</title>
    <link rel="icon" href="https://printler.com/media/photo/132923.jpg" type="png/tab.png">
</head>
<body>
    <div class="loading-screen" id="loadingScreen">
        <div class="spinner"></div>
        <p>Loading...</p>
    </div>
    <header>
        
        <h1><b>My Profile Page</b></h1>
    </header>
    <!-- Your website content goes here -->
    <div class="content" id="content">
        <!-- Your actual content -->
    </div>
  <main>
    <section>
            <img src="profilepic.jpg" alt="profile">
            <h2><b>Who am I?</b></h2>
            <ul id="whoAmI"></ul>
			<button onclick="showDateTime()" style="background-color: #8B0000; color: #FFFFFF; border: 2px solid #FFFFFF;">Time and Date Check</button>
            <div id="dateTime"></div>
        </section>
    <section id="aboutme" class="about-me">
	    <div class="about-me-content">
	    <h2>About Me</h2>
	<?php

    echo "Hello Everyone!!!<br>";
    echo "This is my very first php script and these are some information about me\n<br>";

    ?>

    <?php

    $name = "Marco Antonio Manlapaz";
    $age = 20;

    echo "Quick Information:\n<br>";
    echo "Name: $name\n<br>";
    echo "Age: $age\n<br>";

    ?>

    <?php

    $originalString = "Domain Expansion!";
    $modifiedString = strtoupper($originalString);

    echo "Strings\n<br>";
    echo "Original String: $originalString\n<br>";
    echo "Modified String: $modifiedString\n<br>";

    ?>

    <?php

    $marks = 85;
    $result = ($marks >= 60) ? "Pass" : "Fail";

    echo "Value Check\n<br>";
    echo "Marks: $marks\n<br>";
    echo "Result: $result\n<br>";

    ?>
    </section>

    <section>
            <img src="mypic.jpg" alt="Things I like">
            <button type="button" onclick="showSocialLinks()">Show My Social Links</button>
            <div id="socialLinks" style="display: none;">
                <p><b>Links to my social:</b></p>
                <ul>
                    <li><a href="https://www.facebook.com/manlapaz.marcoantonio" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/600px-Facebook_Logo_%282019%29.png" alt="Facebook"></a></i>
                    <li><a href="https://github.com/mmmanlapaz" target="_blank"><img src="https://github.githubassets.com/assets/GitHub-Mark-ea2971cee799.png" alt="Github"></a></li>
					<li><a href="https://www.instagram.com/ocraaam_z/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png" alt="Instagram"><a></li>
                </ul>
            </div>
        </section>
  </main>
    
    

    <script src="script.js"></script>
</body>
</html>