<?php
  session_start();
  if ($_SESSION["usuario"] != '') {
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 02 - Team One</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<link rel="stylesheet" href="../Estilos/bloq.css">
</head>

<body>


  <div class="mosaico">
    <div id = "container">
        <section>
            <div class = "box-1">
                <img src ="../Pictures\Nintendo_logo_PNG6.png" width="180px" height="80px" class="logo_nintendo">
                    <div  class = "box-1-right" type="button">
                        <i class="fa-solid fa-user"></i>
                        <h1 style="font-size:23px"><?php echo $_SESSION["usuario"]?></h1>
                    </div>
            </div>  
            <img src="../Pictures\Wallpaper.png" width="85%" height="86%" class="first_background">
            <div class="singboard">     
                <h1>Prepárate para los mejores juegos de tu vida!!</h1>    
                <img src="../Pictures\Letrero.png" width="550px" height="250px" class="Letrero">
            </div>

            <div class = "introduction">
                <img src="../Pictures\Tunel.png" width="300px" height="380px" class="Tunel" id="Tunel">
                <video autoplay muted loop id="SS" class="SSV">
                    <source src="../Video\SuperSmash.mp4" type ="video/MP4">
                </video>

                <img src="../Pictures\Mario.png"  height="740px" class="Mario" id="Mario">

            </div>
        </section>
    </div>
  </div>


  <div class="contenedor">
  		

  		<div class="carousel">
              <!--  -->
  			<div class="carousel_contenedor1">
                  <h2 class="center-align titulo" style="padding: 10px 0px 10px 15px;">
                      ¡JUEGOS EXCELENTES!
                   </h2>
  				<button aria-label="Anterior" class="carousel__anterior">
  					<i class="fas fa-chevron-left"></i>
  				</button>

  				<div class="lista">
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/s/super-smash-bros-ultimate-switch/super-smash-bros-ultimate-switch-hero" alt="">
                          <h3  class="juegos">SSB Ultimate</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$99.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/m/mario-kart-8-deluxe-switch/hero" alt="">
                          <h3 class="juegos">Mario Kart 8</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$59.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/t/triangle-strategy-switch/hero" alt="">
                          <h3 class="juegos">TRIANGLE STRATEGY</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$59.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento">
                          <img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/p/pokemon-legends-arceus-switch/hero" alt="">
                          <h3 class="juegos">Pokémon legends: Arceus</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$59.99<br>Nintendo Switch</p>
  					</div>
  	
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/n/nintendo-switch-sports-switch/hero" alt="">
                       <h3 class="juegos">Nintendo Switch Sports</h3>
                       <div class="linea-division"></div>
                       <p class="desc">$49.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/m/mario-strikers-battle-league-switch/hero" alt="">
                          <h3 class="juegos">MS BattleLeague</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$49.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/m/metroid-dread-switch/hero" alt="">
                          <h3 class="juegos">Metroid Dread</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$49.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/p/pokemon-brilliant-diamond-switch/hero" alt="">
                          <h3 class="juegos">Pokémon Brillant Diamond</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$59.99<br>Nintendo Switch</p>
  					</div>
                      <div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/ncom/en_US/games/switch/p/pokemon-shining-pearl-switch/hero" alt="">
                          <h3 class="juegos">Pokémon Shining Pearl</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$49.99<br>Nintendo Switch</p>
  					</div>
                      <div class="carousel__elemento">
  						<img src="https://assets.nintendo.com/image/upload/ar_16:9,b_auto,c_pad,dpr_auto,f_auto,q_auto,w_auto:100/b_rgb:ffffff/v1/Nintendo%20Direct/2021/10-15-2021/aw7f2jh5/posters/ACNH-happy-home-paradise" alt="">
                          <h3 class="juegos">Animal Crossing</h3>
                          <div class="linea-division"></div>
                          <p class="desc">$49.99<br>Nintendo Switch</p>
  					</div>
  				</div>
  				<button aria-label="Siguiente" class="carousel__siguiente">
  					<i class="fas fa-chevron-right"></i>
  				</button>
  			</div>
  			<div role="tablist" class="carousel__indicadores"></div>
          </div>

  		<div class="carousel1">
              <!--  -->
  			<div class="carousel_contenedor1">
                  <h2 class="consolas" >
                      NUEVAS CONSOLAS
                   </h2>

  				<div class="lista1">
  					<div class="carousel__elemento1">
  						<div class="img"><img src="https://assets.nintendo.com/image/upload/ncom/en_US/switch/site-design-update/oled-model-promo" alt=""></div>
                          
                          <div class="linea-division1"></div>
                          <p class="desc">$799.99<br>Nintendo Switch OLED Model</p>
  					</div>
  					<div class="carousel__elemento1">
  						<div class="img"><img src="https://assets.nintendo.com/image/upload/ncom/en_US/switch/split-cta-system" alt=""></div>
                          
                          <div class="linea-division1"></div>
                          <p class="desc">$699.99<br>Nintendo Switch</p>
  					</div>
  					<div class="carousel__elemento1">
  						<div class="img"><img src="https://assets.nintendo.com/image/upload/ncom/en_US/switch/lite/split-cta-switch-lite" alt=""></div>
                          
                          <div class="linea-division1"></div>
                          <p class="desc">$509.99<br>Nintendo Switch Lite</p>
  					</div>
  					<div class="carousel__elemento1">
                          <div class="img"><img src="https://www.pdvg.it/wp-content/uploads/2020/09/Nintendo3ds-1024x576.jpg" alt=""></div>
                          
                          <div class="linea-division1"></div>
                          <p class="desc">$1099.99<br>Nintendo 3DS XL</p>
  					</div>
  				</div>
  				
  			</div>
  			<div role="tablist" class="carousel__indicadores1"></div>
  		</div>      
  </div>




  <div style="display: flex;justify-content: center;">
    <div class="column middle" style="">
    <h1 id="h1">Novedades</h1>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_5terre.jpg">
              <img src="../Imagenes/noticia1.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">¡La primera ola ya está disponible! Compite a través del Centro Cocotero y otras pistas de contenido descargable que fueron recientemente.<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="../Imagenes/noticia2.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Nintendo Switch Online + Paquete de expansión: Juegos de SEGA Genesis del mes de marzo.<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
              <img src="../Imagenes/noticia3.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">¡Escóndete en las sombras (o en la hierba alta) en estos juegos sigilosos!<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="../Imagenes/noticia4.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Nintendo Switch Online + Paquete de expansión: Juegos de SEGA Genesis del mes de marzo.<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="../Imagenes/noticia7.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">¡Nuevo contenido descargable! Expande tus horizontes con el contenido descargable Animal Crossing: New Horizons – Happy Home Paradise.<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="../Imagenes/noticia5.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Prepárate para el desafío y únete a la caza en MONSTER HUNTER RISE, el más reciente juego de muestra.<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
              <img src="../Imagenes/noticia6.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Nintendo Switch Online + Paquete de expansión: ¡ya está disponible The Legend of Zelda: Majora’s Mask!<br></br><a><strong>Leer más</strong></a></div>
          </div>
        </div>


    </div>
  </div>




    

  <div class="bg-img">
    <!--
     <div class="titulo">Queremos conocerte!</h1></div>-->
    
    <form action="/action_page.php" class="container">

      <h1>¡Dejanos tú opinión!</h1>

      <label for="name"><b>Nombre o Apodo</b></label>
      <input type="text"  name="name" required>

      <label for="psw"><b>País</b></label>
      <select id="country" name="country" >
              <option value="Perú">Perú</option>
             <option value="Afganistan">Afghanistan</option>
             <option value="Albania">Albania</option>
             <option value="Algeria">Algeria</option>
             <option value="American Samoa">American Samoa</option>
             <option value="Andorra">Andorra</option>
             <option value="Angola">Angola</option>
             <option value="Anguilla">Anguilla</option>
             <option value="Antigua & Barbuda">Antigua & Barbuda</option>
             <option value="Argentina">Argentina</option>
             <option value="Armenia">Armenia</option>
             <option value="Aruba">Aruba</option>
             <option value="Australia">Australia</option>
             <option value="Austria">Austria</option>
             <option value="Azerbaijan">Azerbaijan</option>
             <option value="Bahamas">Bahamas</option>
             <option value="Bahrain">Bahrain</option>
             <option value="Bangladesh">Bangladesh</option>
             <option value="Barbados">Barbados</option>
             <option value="Belarus">Belarus</option>
             <option value="Belgium">Belgium</option>
             <option value="Belize">Belize</option>
             <option value="Benin">Benin</option>
             <option value="Bermuda">Bermuda</option>
             <option value="Bhutan">Bhutan</option>
             <option value="Bolivia">Bolivia</option>
             <option value="Bonaire">Bonaire</option>
             <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
             <option value="Botswana">Botswana</option>
             <option value="Brazil">Brazil</option>
             <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
             <option value="Brunei">Brunei</option>
             <option value="Bulgaria">Bulgaria</option>
             <option value="Burkina Faso">Burkina Faso</option>
             <option value="Burundi">Burundi</option>
             <option value="Cambodia">Cambodia</option>
             <option value="Cameroon">Cameroon</option>
             <option value="Canada">Canada</option>
             <option value="Canary Islands">Canary Islands</option>
             <option value="Cape Verde">Cape Verde</option>
             <option value="Cayman Islands">Cayman Islands</option>
             <option value="Central African Republic">Central African Republic</option>
             <option value="Chad">Chad</option>
             <option value="Channel Islands">Channel Islands</option>
             <option value="Chile">Chile</option>
             <option value="China">China</option>
             <option value="Christmas Island">Christmas Island</option>
             <option value="Cocos Island">Cocos Island</option>
             <option value="Colombia">Colombia</option>
             <option value="Comoros">Comoros</option>
             <option value="Congo">Congo</option>
             <option value="Cook Islands">Cook Islands</option>
             <option value="Costa Rica">Costa Rica</option>
             <option value="Cote DIvoire">Cote DIvoire</option>
             <option value="Croatia">Croatia</option>
             <option value="Cuba">Cuba</option>
             <option value="Curaco">Curacao</option>
             <option value="Cyprus">Cyprus</option>
             <option value="Czech Republic">Czech Republic</option>
             <option value="Denmark">Denmark</option>
             <option value="Djibouti">Djibouti</option>
             <option value="Dominica">Dominica</option>
             <option value="Dominican Republic">Dominican Republic</option>
             <option value="East Timor">East Timor</option>
             <option value="Ecuador">Ecuador</option>
             <option value="Egypt">Egypt</option>
             <option value="El Salvador">El Salvador</option>
             <option value="Equatorial Guinea">Equatorial Guinea</option>
             <option value="Eritrea">Eritrea</option>
             <option value="Estonia">Estonia</option>
             <option value="Ethiopia">Ethiopia</option>
             <option value="Falkland Islands">Falkland Islands</option>
             <option value="Faroe Islands">Faroe Islands</option>
             <option value="Fiji">Fiji</option>
             <option value="Finland">Finland</option>
             <option value="France">France</option>
             <option value="French Guiana">French Guiana</option>
             <option value="French Polynesia">French Polynesia</option>
             <option value="French Southern Ter">French Southern Ter</option>
             <option value="Gabon">Gabon</option>
             <option value="Gambia">Gambia</option>
             <option value="Georgia">Georgia</option>
             <option value="Germany">Germany</option>
             <option value="Ghana">Ghana</option>
             <option value="Gibraltar">Gibraltar</option>
             <option value="Great Britain">Great Britain</option>
             <option value="Greece">Greece</option>
             <option value="Greenland">Greenland</option>
             <option value="Grenada">Grenada</option>
             <option value="Guadeloupe">Guadeloupe</option>
             <option value="Guam">Guam</option>
             <option value="Guatemala">Guatemala</option>
             <option value="Guinea">Guinea</option>
             <option value="Guyana">Guyana</option>
             <option value="Haiti">Haiti</option>
             <option value="Hawaii">Hawaii</option>
             <option value="Honduras">Honduras</option>
             <option value="Hong Kong">Hong Kong</option>
             <option value="Hungary">Hungary</option>
             <option value="Iceland">Iceland</option>
             <option value="Indonesia">Indonesia</option>
             <option value="India">India</option>
             <option value="Iran">Iran</option>
             <option value="Iraq">Iraq</option>
             <option value="Ireland">Ireland</option>
             <option value="Isle of Man">Isle of Man</option>
             <option value="Israel">Israel</option>
             <option value="Italy">Italy</option>
             <option value="Jamaica">Jamaica</option>
             <option value="Japan">Japan</option>
             <option value="Jordan">Jordan</option>
             <option value="Kazakhstan">Kazakhstan</option>
             <option value="Kenya">Kenya</option>
             <option value="Kiribati">Kiribati</option>
             <option value="Korea North">Korea North</option>
             <option value="Korea Sout">Korea South</option>
             <option value="Kuwait">Kuwait</option>
             <option value="Kyrgyzstan">Kyrgyzstan</option>
             <option value="Laos">Laos</option>
             <option value="Latvia">Latvia</option>
             <option value="Lebanon">Lebanon</option>
             <option value="Lesotho">Lesotho</option>
             <option value="Liberia">Liberia</option>
             <option value="Libya">Libya</option>
             <option value="Liechtenstein">Liechtenstein</option>
             <option value="Lithuania">Lithuania</option>
             <option value="Luxembourg">Luxembourg</option>
             <option value="Macau">Macau</option>
             <option value="Macedonia">Macedonia</option>
             <option value="Madagascar">Madagascar</option>
             <option value="Malaysia">Malaysia</option>
             <option value="Malawi">Malawi</option>
             <option value="Maldives">Maldives</option>
             <option value="Mali">Mali</option>
             <option value="Malta">Malta</option>
             <option value="Marshall Islands">Marshall Islands</option>
             <option value="Martinique">Martinique</option>
             <option value="Mauritania">Mauritania</option>
             <option value="Mauritius">Mauritius</option>
             <option value="Mayotte">Mayotte</option>
             <option value="Mexico">Mexico</option>
             <option value="Midway Islands">Midway Islands</option>
             <option value="Moldova">Moldova</option>
             <option value="Monaco">Monaco</option>
             <option value="Mongolia">Mongolia</option>
             <option value="Montserrat">Montserrat</option>
             <option value="Morocco">Morocco</option>
             <option value="Mozambique">Mozambique</option>
             <option value="Myanmar">Myanmar</option>
             <option value="Nambia">Nambia</option>
             <option value="Nauru">Nauru</option>
             <option value="Nepal">Nepal</option>
             <option value="Netherland Antilles">Netherland Antilles</option>
             <option value="Netherlands">Netherlands (Holland, Europe)</option>
             <option value="Nevis">Nevis</option>
             <option value="New Caledonia">New Caledonia</option>
             <option value="New Zealand">New Zealand</option>
             <option value="Nicaragua">Nicaragua</option>
             <option value="Niger">Niger</option>
             <option value="Nigeria">Nigeria</option>
             <option value="Niue">Niue</option>
             <option value="Norfolk Island">Norfolk Island</option>
             <option value="Norway">Norway</option>
             <option value="Oman">Oman</option>
             <option value="Pakistan">Pakistan</option>
             <option value="Palau Island">Palau Island</option>
             <option value="Palestine">Palestine</option>
             <option value="Panama">Panama</option>
             <option value="Papua New Guinea">Papua New Guinea</option>
             <option value="Paraguay">Paraguay</option>
             <option value="Perú">Perú</option>
             <option value="Phillipines">Philippines</option>
             <option value="Pitcairn Island">Pitcairn Island</option>
             <option value="Poland">Poland</option>
             <option value="Portugal">Portugal</option>
             <option value="Puerto Rico">Puerto Rico</option>
             <option value="Qatar">Qatar</option>
             <option value="Republic of Montenegro">Republic of Montenegro</option>
             <option value="Republic of Serbia">Republic of Serbia</option>
             <option value="Reunion">Reunion</option>
             <option value="Romania">Romania</option>
             <option value="Russia">Russia</option>
             <option value="Rwanda">Rwanda</option>
             <option value="St Barthelemy">St Barthelemy</option>
             <option value="St Eustatius">St Eustatius</option>
             <option value="St Helena">St Helena</option>
             <option value="St Kitts-Nevis">St Kitts-Nevis</option>
             <option value="St Lucia">St Lucia</option>
             <option value="St Maarten">St Maarten</option>
             <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
             <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
             <option value="Saipan">Saipan</option>
             <option value="Samoa">Samoa</option>
             <option value="Samoa American">Samoa American</option>
             <option value="San Marino">San Marino</option>
             <option value="Sao Tome & Principe">Sao Tome & Principe</option>
             <option value="Saudi Arabia">Saudi Arabia</option>
             <option value="Senegal">Senegal</option>
             <option value="Seychelles">Seychelles</option>
             <option value="Sierra Leone">Sierra Leone</option>
             <option value="Singapore">Singapore</option>
             <option value="Slovakia">Slovakia</option>
             <option value="Slovenia">Slovenia</option>
             <option value="Solomon Islands">Solomon Islands</option>
             <option value="Somalia">Somalia</option>
             <option value="South Africa">South Africa</option>
             <option value="Spain">Spain</option>
             <option value="Sri Lanka">Sri Lanka</option>
             <option value="Sudan">Sudan</option>
             <option value="Suriname">Suriname</option>
             <option value="Swaziland">Swaziland</option>
             <option value="Sweden">Sweden</option>
             <option value="Switzerland">Switzerland</option>
             <option value="Syria">Syria</option>
             <option value="Tahiti">Tahiti</option>
             <option value="Taiwan">Taiwan</option>
             <option value="Tajikistan">Tajikistan</option>
             <option value="Tanzania">Tanzania</option>
             <option value="Thailand">Thailand</option>
             <option value="Togo">Togo</option>
             <option value="Tokelau">Tokelau</option>
             <option value="Tonga">Tonga</option>
             <option value="Trinidad & Tobago">Trinidad & Tobago</option>
             <option value="Tunisia">Tunisia</option>
             <option value="Turkey">Turkey</option>
             <option value="Turkmenistan">Turkmenistan</option>
             <option value="Turks & Caicos Is">Turks & Caicos Is</option>
             <option value="Tuvalu">Tuvalu</option>
             <option value="Uganda">Uganda</option>
             <option value="United Kingdom">United Kingdom</option>
             <option value="Ukraine">Ukraine</option>
             <option value="United Arab Erimates">United Arab Emirates</option>
             <option value="United States of America">United States of America</option>
             <option value="Uraguay">Uruguay</option>
             <option value="Uzbekistan">Uzbekistan</option>
             <option value="Vanuatu">Vanuatu</option>
             <option value="Vatican City State">Vatican City State</option>
             <option value="Venezuela">Venezuela</option>
             <option value="Vietnam">Vietnam</option>
             <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
             <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
             <option value="Wake Island">Wake Island</option>
             <option value="Wallis & Futana Is">Wallis & Futana Is</option>
             <option value="Yemen">Yemen</option>
             <option value="Zaire">Zaire</option>
             <option value="Zambia">Zambia</option>
             <option value="Zimbabwe">Zimbabwe</option>
      </select>

      <label for="comentario"><b>Opinión</b></label>
      <input type="textarea" placeholder="Excelente!" name="comentario" required>

      <button type="submit" class="btn">Enviar</button>
    </form>
  </div>





  <div style="background:#202020;">
    <footer>
           
           <div class="contenedor-footer-all">
            
                <div class="contenedor-body">

                    <div class="Mas-informacion">
                        <h1>Mas informacion de la compañia</h1>

                        <p>Esta compania se dedica dar informacion sobre juegos y a la venta de  videojuegos, 
                            asi tambien como a noticias sobre el medio de los video juegos y 
                            actulidad en el mundo del software.</p>

                    </div>
                    <!--
                    <div class="Redes-Sociales">

                        <h1>Redes Sociales</h1>

                        <div class="row">
                            <img src="../iconos/facebook.png">
                            <label>Siguenos en Facebook</label>
                        </div>
                        <div class="row">
                            <img src="../iconos/twitter.png">
                            <label>Siguenos en Twitter</label>
                        </div>
                        <div class="row">
                            <img src="../iconos/instagram.png">
                            <label>Siguenos en Instagram</label>
                        </div>
                        <div class="row">
                            <img src="../iconos/youtube.png">
                            <label>Siguenos en Youtube</label>
                        </div>

                    </div>-->

                    <div class="Informacion-contacto">

                        <h1>Informacion Contactos</h1>

                        <div class="row2">
                            <img src="../iconos/celular.png">
                            <label>+51-992-682-292</label>
                        </div>

                        <div class="row2">
                            <img src="../iconos/contacto.png">
                             <label>empresa@gmail.com</label>
                        </div>

                    </div>

                </div>
            
            </div>
            
            <div class="contenedor-footer">
                   <div class="footer">
                        <div class="copyright">
                            © 2017 Todos los Derechos Reservados | <a href="">Nintendo</a>
                        </div>

                        <div class="informacion">
                            <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                        </div>
                    </div>

                </div>
            
    </footer>
  </div>




	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="../JS/bloq.js"></script>

</body>
</html>
<?php
  }
  else{
    header("Location: ../index.html", TRUE, 301);
  }

?>