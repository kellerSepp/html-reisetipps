< ?php

function redirectTohttps() {

if($_SERVER[‘HTTPS’]!=”on”) {

$redirect= “https://”.$_SERVER[‘HTTP_HOST’].$_SERVER[‘REQUEST_URI’];

header(“Location:$redirect”); } }

?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Refresh" content="0;URL=https://www.kellerseb.infinityfreeapp.com/"/>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="http://kellerseb.infinityfreeapp.com/src/style.css?id=1234"> -->
        <link rel="stylesheet" href="/src/style.css?2021-07-4:23 59 59">
        

        <!-- <meta http-equiv=“Pragma” content=”no-cache”>
        <meta http-equiv=“Expires” content=”-1″>
        <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”> -->
    </head>
    <body ontouchstart="">

        <nav class="header-nav">
            <a href="index.html">
                <img src="src/img/logo.svg" alt="Das Logo von Reisetipps">
            </a>
            

            <div class="mobile-nav">
                <div class="mobile-nav-dropdown clearfix">
                    <div class="mobile-nav-button"><span>&#9776;</span></div>
                    <div class="mobile-nav-content">
                        <div>
                            <div>
                                <ul>
                                    <li class="active"><a href="index.html">Startseite</a></li>
                                    <li><a href="locations/europa.html">Europa</a></li>
                                    <li><a href="locations/afrika.html">Afrika</a></li>
                                    <li><a href="locations/asien.html">Asien</a></li>
                                    <li><a href="locations/amerika.html">Amerika</a></li>
                                    <li><a href="locations/australien.html">Australien</a></li>
                                </ul>
                            </div>
                            <div class="mobile-about">
                                <ul>
                                    <li><a href="about/kontakt.html">Kontakt</a></li>
                                    <li><a href="about/karriere.html">Karriere</a></li>
                                    <!-- <li><a href="about/datenschutz.html">Datenschutz</a></li>
                                    <li><a href="about/agb.html">AGB</a></li>
                                    <li><a href="about/impressum.html">Impressum</a></li> -->

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-nav">                
                <div class="desktop-locations">
                    <ul>
                        <li class="active"><a href="index.html">Startseite</a></li>
                        <li><a href="locations/europa.html">Europa</a></li>
                        <li><a href="locations/afrika.html">Afrika</a></li>
                        <li><a href="locations/asien.html">Asien</a></li>
                        <li><a href="locations/amerika.html">Amerika</a></li>
                        <li><a href="locations/australien.html">Australien</a></li>
                    </ul>
                </div>
                <div class="desktop-about">
                    <ul>
                        <li><a href="about/kontakt.html">Kontakt</a></li>
                        <li><a href="about/karriere.html">Karriere</a></li>
                        <!-- <li><a href="about/datenschutz.html">Datenschutz</a></li>
                        <li><a href="about/agb.html">AGB</a></li>
                        <li><a href="about/impressum.html">Impressum</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- === Main Section === -->
        <section class="main-content">
            <article>
                <h1>Reisetipps aus aller Welt</h1>
                <p>
                    The Earth is the only world known so far to harbor life. There is nowhere else, at least in the near future, to which our species could migrate. Visit, yes. Settle, not yet. Like it or not, for the moment the Earth is where we make our stand.
                </p>
                <img src="src/img/header.jpg" alt="Ein Campingmobil am Straßenrand">
                <p>
                    The Earth is a very small stage in a vast cosmic arena. Think of the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner, how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.
                </p>
                <p>
                    Our posturings, our imagined self-importance, the delusion that we have some privileged position in the Universe, are challenged by this point of pale light. Our planet is a lonely speck in the great enveloping cosmic dark. In our obscurity, in all this vastness, there is no hint that help will come from elsewhere to save us from ourselves.
                </p>
            </article>
            
            <aside>
                <h1>Weiterführende Links</h1>
                <div>
                    <h2>Reiseveranstalter</h2>
                    <ul>
                        <li>Inhiking</li>
                        <li>Touringity</li>
                        <li>Treckaway</li>
                        <li>Walkam</li>
                        <li>Worstology</li>
                    </ul>
                </div>
                <div>
                    <h2>Reiseversicherungen</h2>
                    <ul>
                        <li>Carelack</li>
                        <li>Concernam</li>
                        <li>Nuhealth</li>
                        <li>Regretist</li>
                        <li>Sympathyaway</li>
                    </ul>
                </div>
                <div>
                    <h2>Gepäck und Zubehör</h2>
                    <ul>
                        <li>An'ting</li>
                        <li>Gobaggage</li>
                        <li>Packingbro</li>
                        <li>Stuffable</li>
                        <li>Thingscast</li>
                    </ul>
                </div>           
            </aside>
        </section>


        <footer class="global-footer">
            <ul>
                <li><a href="/about/impressum.html">Impressum</a></li>
                <li><a href="/about/agb.html">AGB</a></li>
                <li><a href="/about/datenschutz.html">Datenschutz</a></li>
            </ul>
        </footer>

    </body>
</html>