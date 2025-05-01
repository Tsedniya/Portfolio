<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsedniya</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav>
        <a href="#" class="logo"><span>Tsedniya</span></a>
        <i class='bx bx-menu' id="menu"></i>
        <ul class="links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#contact" class="contact-btn"> Contact </a>
    </nav>
    <?php 
    require 'home.php'; 
    require 'about.php'; 
    require 'contact.php'; 
    require 'experience';
    ?>

    <footer>
        <div class="col-left">
            <div class="col-box">
                <span><i class='bx bxs-location-plus'></i></span>
                <span>Addis Ababa</span>
            </div>
            <div class="col-box">
                <span><i class='bx bxs-phone'></i></span>
                <span>0904157273</span>
            </div>
            <div class="col-box">
                <span><i class='bx bxs-envelope'></i></span>
                <span><a href="mailto:Ktsedniya@gmail.com">Ktsedniya@gmail.com</a></span>
            </div>
        </div>
    
        <div class="col-right">
            <span>About My Services</span>
            <p>Building responsive and user-friendly websites using HTML, CSS, and JavaScript. I focus on clean coding practices and SEO optimization to ensure your site performs well. Crafting interactive user interfaces that are not only visually appealing but also functionally robust.</p>
            <div class="social-icons">
                <a href="https://t.me/simply_tsedi" target="_blank"><i class='bx bxl-telegram'></i></a>
                <a href="https://www.linkedin.com/in/tsedniya-frezewed/" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
                <a href="https://github.com/Tsedniya" target="_blank"><i class='bx bxl-github'></i></a>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>