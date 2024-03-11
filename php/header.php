<header>
        <nav>
            <span class="sidenav" id="mySideNav">
                <ul>
                    <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../info.php">Informatie</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../FAQ.php">FAQ</a></li>
                    <li><a href="../profile.php">My profile</a></li>
                </ul>
            </span>
        </nav>
        
        <div class="banner">
            <span class="hamburger sides" onclick="openNav()">
                <div></div>
                <div></div>
                <div></div>
            </span>
    
            <div class="name">
                <h2>SCHIZOFRENIE</h2>
            </div>
    
            <div class="sides">
                <?php if (isset($_SESSION['user'])) : ?>
                    <p>Welkom <?php echo $_SESSION['user'] ?></p>
                    <a href="http://www.schizo.com/php/logout.php">Log uit?</a>
                <?php else : ?>
                    <a href="http://www.schizo.com/php/login.php">Log In!</a> 
                <?php endif;?>
            </div>
        </div>
    </header>