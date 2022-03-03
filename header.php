<!-- ***** Header Area Start ***** -->
<style>
 ul li ul li{
  float:none;  
}
ul li ul{
  display:none;  
}
ul li:hover ul{
  display:block;  
} 
</style>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo" style="margin-left: -150px;">Cobra<em>Gym</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <!-- <li class="scroll-to-section"><a href="angajati.php">Angajati</a></li>
                            <li class="scroll-to-section"><a href="abonamente.php">Abonamente Active</a></li>
                            <li class="main-button"><a href="add_client.php">Inregistrare Client</a></li> -->
							<?php
								if (isset($_SESSION["userPrenume"])) 
								{
									echo "<li class=\"scroll-to-section\"><a href=\"clienti.php\">Clienti</a></li>";
									echo "<li class=\"scroll-to-section\"><a href=\"angajati.php\">Angajati</a></li>";
									echo "<li class=\"scroll-to-section\"><a href=\"sali.php\">Sali</a></li>";
									echo "<li class=\"scroll-to-section\" style=\"text-align: center;\"><a>Abonamente</a>
                                    <ul>
                                    <li class=\"scroll-to-section\"><a href=\"abonamente.php\">Abonamente active</a></li>           
                                    <li class=\"scroll-to-section\"><a href=\"abonamente_disponibile.php\">Toate Abonamentele</a></li>";
                                    
									if (strcmp($_SESSION["userFunctie"], "admin") == 0) 
									{
										echo "<li class=\"scroll-to-section\"><a href=\"achizitii.php\">Istoric Achizitii</a></li>";
									}
									
									echo "
									<li></li>
                                    </ul>
                                    </li>";
                                   
									echo sprintf("<li class=\"scroll-to-section\"><a>Autentificat ca %s %s</a></li>", $_SESSION["userPrenume"], $_SESSION["userNume"]);
									echo "<li class=\"scroll-to-section\"><a href=\"includes/logout.inc.php\">Iesire</a></li>";
								}
								else 
								{
									echo "<li class=\"scroll-to-section\"><a href=\"sali.php\">Sali</a></li>";
									echo "<li class=\"scroll-to-section\"><a href=\"abonamente_disponibile.php\">Abonamente</a></li>";
									echo "<li class=\"scroll-to-section\"><a href=\"login.php\">Autentificare</a></li>";
								}
							?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<!-- ***** Header Area End ***** -->