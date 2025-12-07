<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinoseppo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <h1>Kinoseppo elokuvateatterit</h1>
                <nav>
                    <ul>
                        <li><a href="#elokuvat">Elokuvat</a></li>
                        <li><a href="#toimipisteet">Toimipisteet</a></li>
                        <li><a href="#yhteystiedot">Yhteystiedot</a></li>

                    </ul>
                </nav>
            </div>
            <div class="intro">
                <p>
                    Kinoseppo on moderni ja viihtyisä elokuvateatteriketju, joka tarjoaa unohtumattomia elokuvaelämyksiä ympäri Suomen. Kinosepon teattereissa yhdistyvät laadukas kuva ja ääni, mukavat istuimet sekä lämmin palvelu. Ohjelmistosta löytyy niin tuoreimmat ensi-illat, kotimaiset suosikit kuin klassikotkin, ja jokainen sali on suunniteltu tekemään elokuvakäynnistä erityisen nautinnollisen. Tiloissamme on myös mahdollista järjestää yksityistilaisuuksia. Ota yhteyttä meihin lisätietoja varten. <br> Kinoseppo – enemmän kuin elokuva.
                </p>
            </div>
        </div>
    </header>

    <main>

        <!-- Elokuvat-osio -->
        <section id="elokuvat" class="branch-section">
            <h2>Ohjelmistossa nyt</h2>

            <div class="branch-grid">

                <div class="branch-card">
                    <h3>Swordfightin' in the Rain</h3>
                    <p class="movie-description">
                        Musikaali aikansa eläneestä miekkasoturista, jonka oppilaasta kasvaa häntä suurempi sankari.<br><br>
                        Ohjaaja: Richard Richburg
                    </p>
                </div>

                <div class="branch-card">
                    <h3>A Fish Called Amanda</h3>
                    <p class="movie-description">
                        Rikos-komedia pieleen menneestä kalan kidnappauksesta ja sitä seuraavasta sekasotkusta.<br><br>
                        Ohjaaja: Bronislava Mazánková
                    </p>
                </div>

                <div class="branch-card">
                    <h3>Nobody's Wife Min-hee</h3>
                    <p class="movie-description">
                        Korealainen indie-elokuva arjen hitaudesta, rutiinien tärkeydestä ja parisuhteista.<br><br>
                        Ohjaaja: Lee Jong Wook
                    </p>
                </div>

                <div class="branch-card">
                    <h3>Viimeinen aivosolu</h3>
                    <p class="movie-description">
                        Hypertaiteellista vääntöä animoidussa scifi-seikkailussa. Lentäviä valaita taattu.<br><br>
                        Ohjaaja: Chikayo Takeda
                    </p>
                </div>
            </div>

            <h2 id="tulossa">Tulossa</h2>

            <div class="branch-grid">

                <div class="branch-card coming-soon">
                    <h3>Me and the Bad Bitch I Pulled by Being Autistic</h3>
                    <p class="movie-description">
                        Draama epäsovinnaisesta romanssista, yhteiskunnan oletuksista ja oman äänen löytämisestä.<br><br>
                        Ohjaaja: Seweryna Olszewska
                    </p>
                    <p class="branch-opening">
                        Ensi-ilta: 23.12.2025
                    </p>
                </div>

                <div class="branch-card coming-soon">
                    <h3>Muotineuroosi</h3>
                    <p class="movie-description">
                        Romanttinen komedia muotialalta potkut saaneesta taiteilijanerosta, joka saa töitä pienen kotikaupunkinsa ala-asteen kuvisopettajana.<br><br>
                        Ohjaaja: Hannele Hongisto
                    </p>
                    <p class="branch-opening">
                        Ensi-ilta: 5.1.2026
                    </p>
                </div>

            </div>

        </section>

        <!-- Toimipisteet – TÄMÄ ON SINUN OSUUTESI -->
        <section id="toimipisteet" class="branch-section">
            <h2>Elokuvateatterit ympäri Suomen</h2>

            <div class="branch-grid">

                <div class="branch-card">
                    <h3>Kinoseppo Turku – Kupittaa</h3>
                    <p class="branch-address">
                        Kupittaankatu 10<br>
                        20520 Turku
                    </p>
                    <p class="branch-hours">
                        Ma–To: 12:00–22:00<br>
                        Pe–La: 12:00–24:00<br>
                        Su: 12:00–21:00
                    </p>
                </div>

                <div class="branch-card">
                    <h3>Kinoseppo Helsinki – Kamppi</h3>
                    <p class="branch-address">
                        Kampinkatu 3<br>
                        00100 Helsinki
                    </p>
                    <p class="branch-hours">
                        Ma–To: 11:00–22:30<br>
                        Pe–La: 11:00–00:30<br>
                        Su: 11:00–21:30
                    </p>
                </div>

                <div class="branch-card">
                    <h3>Kinoseppo Tampere – Keskusta</h3>
                    <p class="branch-address">
                        Hämeenkatu 25<br>
                        33100 Tampere
                    </p>
                    <p class="branch-hours">
                        Ma–To: 12:00–22:00<br>
                        Pe–La: 12:00–23:30<br>
                        Su: 12:00–21:00
                    </p>
                </div>

                <div class="branch-card coming-soon">
                    <h3>Kinoseppo Oulu – Ranta</h3>
                    <p class="branch-address">
                        Rantabulevardi 8<br>
                        90100 Oulu
                    </p>
                    <p class="branch-opening">
                        Avautuu 20.12.<br>
                        Ensiesityksessä talven suurimmat uutuudet.
                    </p>
                </div>

            </div>
        </section>

        <!-- Yhteystiedot-osio, ryhmän täydennettäväksi -->
        <section id="yhteystiedot" class="branch-section">

            <?php 

                $form = false;
                $formSent = false;

                if (isset($_POST['openForm'])) {
                    $form = true;
                }

                if (isset($_POST['submit'])) {
                    $formSent = true;                    
                    $form = false;
                }

                if (!$form) { ?>

                    <h2>Yhteystiedot</h2>

                    <div class="branch-grid">
                        
                        <div class="branch-card">
                            <h3>Asiakaspalvelu & lipunmyynti</h3>
                            <p class="branch-address">
                                asiakaspalvelu@kinoseppo.fi<br>
                                020 - 123 4000
                            </p>
                        </div>

                        <div class="branch-card">
                            <h3>Ryhmä- ja yritysvaraukset</h3>
                            <p class="branch-address">
                                <b>Laura Vanhala, Ryhmämyyntivastaava</b><br>
                                laura.vanhala@kinoseppo.fi<br>
                                020 - 123 4101
                            </p>
                        </div>

                        <div class="branch-card">
                            <h3>Erikoistapahtumat</h3>
                            <p class="branch-address">
                                <b>Aleksi Hiltunen, Tapahtumakoordinaattori</b><br>
                                aleksihiltunen@kinoseppo.fi<br>
                                020 - 123 4102
                            </p>
                        </div>

                        <div class="branch-card">
                            <h3>Kinoseppo Turku</h3>
                            <p class="branch-address">
                                <b>Johanna Lehto, Teatteripäällikkö</b><br>
                                johanna.lehto@kinoseppo.fi<br>
                                020 - 123 4201
                            </p>
                        </div>
                        
                        <div class="branch-card">
                            <h3>Kinoseppo - Helsinki</h3>
                            <p class="branch-address">
                                <b>Mikko Rantanen, Teatteripäällikkö</b><br>
                                mikko.rantanen@kinoseppo.fi<br>
                                020 - 123 4302
                            </p>
                        </div>
                        
                        <div class="branch-card">
                            <h3>Kinoseppo Tampere</h3>
                            <p class="branch-address">                    
                                <b>Sara Rissanen, Teatteripäällikkö</b><br>
                                sara.rissanen@kinoseppo.fi<br>
                                020 - 123 4401
                            </p>
                        </div>
                        
                        <div class="branch-card">
                            <h3>Tekniikka & AV</h3>
                            <p class="branch-address">                                
                                <b>Eero Niemi, AV-tekniikkavastaava</b><br>
                                eero.niemi@kinoseppo.fi<br>
                                020 - 123 4601
                            </p>
                        </div>
                                        
                        <div class="branch-card">
                            <h3>Markkinointi ja PR</h3>
                            <p class="branch-address">                                
                                <b>Noora Mäkinen, Markkinointipäällikkö</b><br>
                                noora.makinen@kinoseppo.fi<br>
                                020 - 123 4701
                            </p>
                        </div>
                                        
                        <div class="branch-card">
                            <h3>Laskutus</h3>
                            <p class="branch-address">                                
                                laskutus@kinoseppo.fi<br>
                                020 - 123 4800
                            </p>
                        </div>  

                    </div>  

                        <?php if ($formSent) { ?>
                            <div id="notification" class="notification">
                                ✅ Kiitos viestistäsi! Otamme sinuun yhteyttä pian.
                            </div>
                        <?php } ?>
                    
                        <div class="branch-button">
                            <form action="#yhteystiedot" method="POST">
                                <button type="submit" name="openForm">Ota yhteyttä lomakkeella</button>
                            </form>
                        </div>  

                    </div>

            <?php } else { ?>

                        <h2>Yhteydenotto</h2>

                        <div class="branch-form">
                            <form action="#yhteystiedot" method="POST">
                                <div class="form-row">
                                    <label for="name">Nimi:</label>
                                    <input id="name" type="text" name="name" required>
                                </div>
                                <div class="form-row">
                                    <label for="email">Sähköposti:</label>
                                    <input id="email" type="email" name="email" required>
                                </div>
                                <div class="form-row">
                                    <label for="phone">Puhelin:</label>
                                    <input id="phone" type="text" name="phone" required>
                                </div>
                                <div class="form-row">
                                    <select name="topic">
                                        <option value="">Valitse yhteydenoton aihe</option>
                                        <option value="general">Yleinen kysymys</option>
                                        <option value="group">Ryhmä- ja yritysvaraukset</option>
                                        <option value="event">Erikoistapahtumat</option>
                                        <option value="feedback">Palaute</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <textarea name="message" rows="4" placeholder="Kirjoita viestisi tähän" required></textarea>
                                </div>
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="privacy" required>
                                        Hyväksyn, että minulle otetaan yhteyttä sähköpostitse / puhelimella
                                    </label>
                                </div>
                                <div class="form-row">
                                    <button type="submit" name="submit">Lähetä</button>
                                </div>
                            </form>
                        </div>  


            <?php } ?>
        </section>

    </main>
</body>
</html>
