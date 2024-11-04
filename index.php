<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, afbeelding, titel, subtekst, url, readme, tags FROM projecten";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<!--


--------------------------------------------

		Realisatie: Milan Gorissen

		
		Waarom bekijk je de code 👀

--------------------------------------------


-->
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ik ben Milan</title>
    <meta name="description" content="Bekijk het portfolio van Milan – een gedreven IT-specialist met brede technologische expertise en passie voor innovatie.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="favicon.png">

<!--

<script src="snowstorm.js"></script>
<script>
snowStorm.snowColor = '#8c8c89';
snowStorm.flakesMaxActive = 60;
snowStorm.useTwinkleEffect = true;
snowStorm.autoStart = true;
snowStorm.excludeMobile = false;
snowStorm.followMouse = false;
</script>

-->

    <style>
        hr {
            border: 0;
            height: 2.5px;
            width: 50%;
            background: #ccc;
            margin: 20px auto;
            display: block;
            position: relative;
            margin-top: 3.5rem;
        }

        html {
            scroll-behavior: smooth;
        }
        body {
            overflow-y: scroll;
        }
        ::-webkit-scrollbar {
            width: 12px;
        }
        ::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #687781;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #5c6870;
        }
        body {
            scrollbar-width: thin;
            scrollbar-color: #687781 #f0f0f0;
        }
        @media (max-width: 768px) {
            .hidden-on-mobile {
                display: none;
            }
        }
        @media (min-width: 768px) {
            .hidden-on-desktop {
                display: none;
            }
        }
    </style>
</head>
    <noscript><strong>Helaas, het lijkt erop dat JavaScript momenteel is uitgeschakeld in uw browser. Zonder JavaScript is deze site als een café zonder koffie het mist de essentie! ☕️ Om door te gaan en het volledige menu te ervaren, schakelt u JavaScript in. Bedankt voor uw begrip!</strong></noscript>
<div class="black-overlay"></div>
<body style="background-color: #f4f4f9; color: #333; display: flex; justify-content: center; align-items: flex-start; min-height: 100vh; margin: 0; font-family: 'Inter', sans-serif; padding: 20px;">

<header style="background: #ffffff; padding: 35px; text-align: center; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px;">
    <div class="container">
        <!--<img class="hidden-on-desktop" style="margin-bottom: -65px;" src="favicon.png" alt="Nerd" width="150" height="150"> -->
        <h3 class="hidden-on-desktop" style="font-weight: 200; margin-bottom: -65px; font-size: 1.5rem; color: black; ;">Ik ben</h3>
        <h1 style="font-weight: 200; font-size: 5rem; color: black; margin-bottom: 1.5rem;">Milan Gorissen</h1>
        
        <h3 style="font-weight: 200; font-size: 2rem; color: black; margin: 1rem 0;">Contact.</h3>

        <div class="contact-info">
            <a style="color: black; text-decoration: none; display: block; font-size: 1rem; margin-bottom: 0.5rem;" href="mailto:info@ikbenmilan.nl">info@ikbenmilan.nl</a>
            <a style="color: black; text-decoration: none; display: block; font-size: 1rem; margin-bottom: 0.5rem;" href="tel:+31612345678">+31 6 3860 6494</a>
        </div>
        
        <div style="display: flex; justify-content: center; gap: 15px; margin: 1.5rem 0;">
            <a href="https://github.com/LuxeGamingYT" target="_blank" class="icon github" style="text-decoration: none;">
                <i style="font-size: 30px; color: #211F1F; transition: transform 0.3s ease;" class="fab fa-github"></i>
            </a>
            <a href="https://discord.com/users/148371036419653633" target="_blank" class="icon discord" style="text-decoration: none;">
                <i style="font-size: 30px; color: #7289DA; transition: transform 0.3s ease;" class="fab fa-discord"></i>
            </a>
            <a href="https://www.linkedin.com/in/milan-gorissen/" target="_blank" class="icon linkedin" style="text-decoration: none;">
                <i style="font-size: 30px; color: #0077B5; transition: transform 0.3s ease;" class="fab fa-linkedin"></i>
            </a>
        </div>

        <hr>
        <div style="text-align: left; margin-bottom: 1.5rem;">
        <h3 class="hidden-on-mobile" style="text-align: center; font-weight: 200; font-size: 2rem; color: black; margin-bottom: 1.5rem; margin-top: 2rem; margin-top: 2rem;">Skills.</h3>
            <div class="hidden-on-mobile" style="position: relative; padding-top: 1rem;">
                <span style="font-size: 1.25rem; font-weight: 600; display: inline-block; text-transform: uppercase; color: black;">
                    Backend development
                </span>
                <br>
                <span style="font-size: 0.875rem; color: #4a5568;">Ik kan volledig functionele webapplicaties en API's ontwikkelen met behulp van backend-frameworks, databases, WebSockets en nog veel meer.</span>
                <br>
                <div style="overflow: hidden; margin: 1.5rem 0; height: 0.5rem; background: #28A745; border-radius: 0.25rem;">
                    <div style ="width: 100%; background: #28A745; height: 100%; border-radius: 0.25rem;"></div>
                </div>
            <div style="position: relative; padding-top: 1rem;">
                <span style="font-size: 1.25rem; font-weight: 600; display: inline-block; text-transform: uppercase; color: black;">
                    Frontend development
                </span>
                <br>
                <span style="font-size: 0.875rem; color: #4a5568;">Ik kan volledig functionele front-endpagina's maken met behulp van HTML5, CSS.</span>
                <br>
                <div style="overflow: hidden; margin: 1.5rem 0; height: 0.5rem; background: #4A90E2; border-radius: 0.25rem;">
                    <div style ="width: 100%; background: #4A90E2; height: 100%; border-radius: 0.25rem;"></div>
                </div>
            <div style="position: relative; padding-top: 1rem;">
                <span style="font-size: 1.25rem; font-weight: 600; display: inline-block; text-transform: uppercase; color: black;">
                    infrastructuren
                </span>
                <br>
                <span style="font-size: 0.875rem; color: #4a5568;">Ik kan infrastructuren opzetten en beheren, implementatie automatiseren en prestaties nauwkeurig monitoren.</span>
                <br>
                <div style="overflow: hidden; margin: 1.5rem 0; height: 0.5rem; background: #6C757D; border-radius: 0.25rem;">
                    <div style ="width: 100%; background: #6C757D; height: 100%; border-radius: 0.25rem;"></div>
                </div>
            </div>
        </div>

        <hr>
        <h3 style="display: flex; justify-content: center; align-items: flex-start; font-weight: 200; font-size: 2rem; color: black; margin-bottom: 1.5rem; margin-bottom: 1.5rem; margin-top: 2rem;">Projecten.</h3>
        
        <style>
        .project-widget a {
            margin-left: 1.5rem;
        }
        </style>
            <div class="project-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 20px;">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $afbeelding = $row['afbeelding'];
                        $titel = $row['titel'];
                        $subtekst = $row['subtekst'];
                        $url = $row['url'];
                        $readme = $row['readme'];
                        $tags = explode(',', $row['tags']);
                        $projectId = 'project' . $row['id'];
                        ?>
                        <div class="project-widget" style="background: #ffffff; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0 , 0.1); overflow: hidden; flex: 1 1 calc(50% - 20px); max-width: calc(50% - 20px); box-sizing: border-box;">
                            <img src="<?php echo $afbeelding; ?>" alt="<?php echo $titel; ?>" style="width: 100%; height: auto ;">
                            <h3 style="padding-left: 1.5rem; font-weight: 600; font-size: 1.5rem; color: black; margin-bottom: 0.5rem;"><?php echo $titel; ?></h3>
                            <p style="padding-left: 1.5rem; font-size: 1rem; color: #4a5568;"><?php echo $subtekst; ?></p>
                            <?php if ($url): ?>
                                <a href="<?php echo $url; ?>" target="_blank" style="display: inline-block; background-color: #4CAF50; color: white; font-size: 14px; font-weight: 500; margin-top: 0.5rem; padding: 5px 14px; text-align: center; text-decoration: none; border-radius: 25px; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#39a168';" onmouseout="this.style.backgroundColor='#4CAF50';">View</a>
                            <?php endif; ?>
                            <br>
                            <a href="javascript:void(0);" onclick="toggleText('<?php echo $projectId; ?>')" style="display: inline-block; background-color: #4399e0; color: white; font-size: 14px; font-weight: 500; margin-top: 0.5rem; padding: 5px 14px; text-align: center; text-decoration: none; border-radius: 25px; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#2b6db1';" onmouseout="this.style.backgroundColor='#4399e0';">Read more</a>
                            <div id="<?php echo $projectId; ?>" style="display: none; opacity: 0; transition: opacity 0.5s; padding-left: 1.5rem; padding-right: 1.5rem; margin-top: 10px;">
                                <p style="font-size: 1rem; color: #4a5568;"><?php echo $readme; ?></p>
                            </div>
                            
                            <div style="padding-left: 1.5rem; padding-bottom: 2rem; display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
                                <?php foreach ($tags as $tag): ?>
                                    <span style="background-color: #f3f4f6; padding: 5px 10px; border-radius : 10px; font-size: 0.875rem; color: #4a5568;"><?php echo $tag; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "No projects found.";
                }
                ?>
            </div>
        <hr>
        <h3 style="display: flex; justify-content: center; align-items: flex-start; font-weight: 200; font-size: 2rem; color: black; margin-bottom: 1.5rem; margin-top: 2rem;">Hobbies.</h3>
            <div class="hidden-on-mobile" style="position: relative; padding-top: 1rem;">
                <span style="font-size: 1.25rem; font-weight: 600; display: inline-block; text-transform: uppercase; color: black;">
                    Zwemmen 💦
                </span>
                <br>
                <span style="font-size: 0.875rem; color: #4a5568;">Ik zwem graag, minstens één keer per week. Het houdt me fit en helpt me te ontspannen. Ook is het een geweldige manier om mijn uithoudingsvermogen te verbeteren!</span>
                <br>
                <div style="overflow: hidden; margin: 1.5rem 0; height: 0.5rem; background: #27c9fd; border-radius: 0.25rem;">
                    <div style ="width: 100%; background: #27c9fd; height: 100%; border-radius: 0.25rem;"></div>
                </div>
            <div style="position: relative; padding-top: 1rem;">
            <div class="hidden-on-mobile" style="position: relative; padding-top: 1rem;">
                <span style="font-size: 1.25rem; font-weight: 600; display: inline-block; text-transform: uppercase; color: black;">
                    Muziek 🎧
                </span>
                <br>
                <span style="font-size: 0.875rem; color: #4a5568;">Ik luister bijna elke dag naar muziek, wat me helpt te ontspannen en mijn gedachten te ordenen. Mijn muzieksmaak is breed en varieert veel, waardoor er altijd iets is om mijn stemming te matchen.</span>
                <br>
                <div style="overflow: hidden; margin: 1.5rem 0; height: 0.5rem; background: #1ABC9C; border-radius: 0.25rem;">
                    <div style ="width: 100%; background: #1ABC9C; height: 100%; border-radius: 0.25rem;"></div>
                </div>
            <div style="position: relative; padding-top: 1rem;">
            <div class="hidden-on-mobile" style="position: relative; padding-top: 1rem;">
                <span style="font-size: 1.25rem; font-weight: 600; display: inline-block; text-transform: uppercase; color: black;">
                    Filosoferen 🧠
                </span>
                <br>
                <span style="font-size: 0.875rem; color: #4a5568;">Ik neem regelmatig de tijd om te filosoferen, wat me helpt dieper na te denken over persoonlijke groei en mijn waarden. Vragen zoals "Wat is mijn doel?" prikkelen mijn gedachten en leiden tot nieuwe inzichten die ik kan toepassen in mijn dagelijks leven.</span>
                <br>
                <div style="overflow: hidden; margin: 1.5rem 0; height: 0.5rem; background: #2C3E50; border-radius: 0.25rem;">
                    <div style ="width: 100%; background: #2C3E50; height: 100%; border-radius: 0.25rem;"></div>
                </div>
            <div style="position: relative; padding-top: 1rem;">
    </div>
<footer style="display: flex; flex-direction: column; align-items: center; padding-top: 1.5rem;">
    <h4 style="font-weight: 700; margin: 0;">© <?php echo date('Y'); ?> IkBenMilan.nl. Alle rechten voorbehouden.</h4>
    <p style="font-weight: 300; text-align: center; margin: 0; padding-top: 0.5rem;">
        Alle inhoud op deze website, inclusief teksten, afbeeldingen en ontwerpen, zijn eigendom van IkBenMilan.nl en mogen niet worden gekopieerd of gereproduceerd zonder uitdrukkelijke schriftelijke toestemming.
    </p>
</footer>
</header>
<script>
function toggleText(moreTextId) {
    var moreText = document.getElementById(moreTextId);
    
    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block";
        setTimeout(function() {
            moreText.style.opacity = 1;
        }, 10);
    } else {
        moreText.style.opacity = 0;
        setTimeout(function() {
            moreText.style.display = "none";
        }, 500);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var moreTextElements = document.querySelectorAll("[id^='project']");
    moreTextElements.forEach(function(element) {
        element.style.display = "none";
        element.style.opacity = 0;
    });
});
</script>
</body>
</html>