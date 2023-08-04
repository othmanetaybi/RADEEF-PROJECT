<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RADEEF</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="main1">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="index.php" id="cl"  >Home</a></li>
                <li>
                    <a href="#"  class="active">
                    RÉCLAMATIONS
                    </a>

                </li>
                <li><a href="FOURNISSEURS.php" id="cl" >FOURNISSEURS</a></li>
                <li><a href="index1arab.php" id="cl" ><i class="fas fa-language" style="font-size: 20px;margin-top: 10px;">&nbsp;</i>ARABE</a></li>
            </ul>
        </nav>

    </header>

    <footer class="contact">
        <div class="contact-heading">
            <h1>RECLAMATION</h1>
            <p style="font-family: 'Kanit', sans-serif;">Demande d'Information et Réclamation</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Nom et Prenom"/>
            <input type="text" name="CN" placeholder="Contrat d'Abonnement"/>
            <input type="tel" name="tele" placeholder="Téléphone"/>
            <input type="email" name="email" placeholder="E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
    <div class="w-100 bg-viridian-500 text-white-50 pt-1">
        <div class="container">
            <div class="row py-5">
                <div class="col text-center">
                    <div class="widget">
                        <div class="text-uppercase pb-3 mb-4">
                            <a href="/" class="text-white-75 text-hover-white font-weight-400 mx-3">ACCUEIL </a>
                            <a href="https://www.radeef.ma/presentation" class="text-white-75 text-hover-white font-weight-400 mx-3">RADEEF </a>
                            <a href="https://clients.radeef.ma:8443/ael/#/login" target="_blank" class="text-white-75 text-hover-white font-weight-400 mx-3">AGENCE EN LIGNE</a>
                            <a href="https://www.fatourati.ma/FatLite/ma/Radeef/formulaire?cid=01&amp;fid=1014" target="_blank" class="text-white-75 text-hover-white font-weight-400 mx-3">PAIEMENT EN LIGNE</a>
                            <a href="https://www.radeef.ma/reclamation" class="text-white-75 text-hover-white font-weight-400 mx-3">RÉCLAMATIONS</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.facebook.com/Radeef-%D8%A7%D9%84%D9%88%D9%83%D8%A7%D9%84%D8%A9-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%82%D9%84%D8%A9-%D8%A7%D9%84%D8%AC%D9%85%D8%A7%D8%B9%D9%8A%D8%A9-%D9%84%D8%AA%D9%88%D8%B2%D9%8A%D8%B9-%D8%A7%D9%84%D9%85%D8%A7%D8%A1-%D9%88%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A1-%D8%A8%D9%81%D8%A7%D8%B3-100712798521144" target="_blank" class="d-flex align-items-center justify-content-center text-white-25 text-hover-white" data-width="36px" data-height="36px" style="font-size: 25px; width: 36px; height: 36px;"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCRIqvTacwFNh3QR294WEoqQ" target="_blank" class="d-flex align-items-center justify-content-center text-white-25 text-hover-white" data-width="36px" data-height="36px" style="font-size: 25px; width: 36px; height: 36px;"><i class="fab fa-youtube-square"></i></a>
                        </div>
                        <div data-height="5px" style="height: 5px;"></div>
                    </div>
                </div>
            </div>
         </div>
        <div class="footer-bottom py-1">
			<div class="container footer-bottom-container">
					<div class="row py-3">
						<div class="col text-center direction-rtl">
						     <p> RADEEF 2022  © Tous droits réservés  By <a href="https://www.linkedin.com/in/othman-taybi-617856199/" target="_blank">RADEEF</a></p>
						</div>
			        </div>
            </div>
        </div>
</div>
</body>
</html>