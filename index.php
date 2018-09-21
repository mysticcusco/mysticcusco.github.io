<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Pokemap Cusco, pokemon go, cusco peru</title>

      <link rel="shortcut icon" href="img/gymex.png">

      <script src="https://maps.googleapis.com/maps/api/js?q=London&key=AIzaSyCITNOv_bH1V2S5glrj97vQ9slxWH_u9Ps&sensor=false"></script>

      <style>

      #legend {

        font-family: Arial, sans-serif;

        background: #fff;

        padding: 10px;

        margin: 10px;

        border: 3px solid #000;

      }

      #legend h3 {

        margin-top: 0;

      }

      #legend img {

        vertical-align: middle;

      }

    </style>

    <script type="text/javascript">

	  const aioColors = document.querySelectorAll('.color span');



	aioColors.forEach(color => {

	  color.addEventListener('click', () => {

	    const selection = window.getSelection();

	    const range = document.createRange();

	    range.selectNodeContents(color);

	    selection.removeAllRanges();

	    selection.addRange(range);



	    try {

	      document.execCommand('copy');

	      selection.removeAllRanges();



	      const original = color.textContent;

	      color.textContent = 'Copied!';

	      color.classList.add('success');



	      setTimeout(() => {

	        color.textContent = original;

	        color.classList.remove('success');

	      }, 1200);

	    } catch(e) {

	      const errorMsg = document.querySelector('.error-msg');

	      errorMsg.classList.add('show');



	      setTimeout(() => {

	        errorMsg.classList.remove('show');

	      }, 1200);

	    }

	  });

	});

	</script>

    </head>

    <body>

      <div id="map" style="width: 100%; height: 100vh;"></div>



      <script type="text/javascript">

        var locations = [

          ['<div class="color"><h3>Kuntur Apuchin</h3><p>Gym de pase Ex Asegurado</p> <span>-13.537916,-71.904456</span></div>', -13.537916,-71.904456, 'img/gymex.png'],

          ['<div class="color"><h3>Ventana, Ovalo Pachacutec</h3> -13.531531,-71.968447 <p>Gym de pase Ex Asegurado</p></div>', -13.531531,-71.968447, 'img/gymex.png'],

          ['<div class="color"><h3>Gran Almirante, Correo</h3> -13.523571,-71.975001 <p>Gym de combate</p></div>', -13.523571,-71.975001, 'img/gym.png'],

          ['<div class="color"><h3>San Borja</h3> <p>Gym de combate <br> <input type="text" value="-13.515627,-71.978465"></p></div>', -13.515627,-71.978465, 'img/gym.png'],

          ['<div class="color"><h3>Inca Relics</h3> -13.508499,-71.983852 <p>Gym de pase Ex</p></div>', -13.508499,-71.983852, 'img/gymex.png'],

          ['<div class="color"><h3>Cristo Blanco</h3> -13.509662,-71.978142 <p>Gym de combate</p></div>', -13.509662,-71.978142, 'img/gym.png'],

          ['<div class="color"><h3>Qenqo</h3> -13.508968,-71.97057 <p>Centro hsitorico</p></div>', -13.508968,-71.97057, 'img/gym.png'],          

          ['<div class="color"><h3>CEMENTERIO SAN JERONIMO</h3> -13.541141,-71.886297 <p>Gym de combate</p></div>', -13.541141,-71.886297, 'img/gym.png'],          

          ['<div class="color"><h3>SAN JERONIMO</h3> -13.544468,-71.883372 <p>Gym de combate</p></div>', -13.544468,-71.883372, 'img/gym.png'],          

          ['<div class="color"><h3>ENTRADA SAN SEBASTIAN</h3> -13.53683,-71.906647 <p>Gym de combate</p></div>', -13.53683,-71.906647, 'img/gym.png'],          

          ['<div class="color"><h3>AEROPUERTO</h3> -13.537897,-71.943762 <p>Gym de combate</p></div>', -13.537897,-71.943762, 'img/gym.png'],          

          ['<div class="color"><h3>SAN SEBASTIAN</h3> -13.530095,-71.937757 <p>Gym de combate</p></div>', -13.530095,-71.937757, 'img/gym.png'],          

          ['<div class="color"><h3>MAGISTERIO</h3> -13.523904, -71.947851 <p>Gym de combate</p></div>', -13.523904, -71.947851, 'img/gym.png'],          

          ['<div class="color"><h3>INDEPENDIZADORES</h3> -13.533321,-71.955087 <p>Gym de combate</p></div>', -13.533321,-71.955087, 'img/gym.png'],          

          ['<div class="color"><h3>HOSPITAL</h3> -13.524331,-71.956753 <p>Gym de combate</p></div>', -13.524331,-71.956753, 'img/gym.png'],          

          ['<div class="color"><h3>MURAL</h3> -13.523132,-71.963421 <p>Gym de combate</p></div>', -13.523132,-71.963421, 'img/gym.png'],          

          ['<div class="color"><h3>ROSASPATA</h3> -13.517626,-71.966729 <p>Gym de combate</p></div>', -13.517626,-71.966729, 'img/gym.png'],          

          ['<div class="color"><h3>PLAZA TUPAC</h3> -13.523046,-71.966019 <p>Gym de combate</p></div>', -13.523046,-71.966019, 'img/gym.png'],          

          ['<div class="color"><h3>ESTADIO</h3> -13.524384,-71.966925 <p>Gym de combate</p></div>', -13.524384,-71.966925, 'img/gym.png'],          

          ['<div class="color"><h3>OVALO MONUMENTO</h3> -13.531336,-71.968818 <p>Gym de combate</p></div>', -13.531336,-71.968818, 'img/gym.png'],          

          ['<div class="color"><h3>CONDOR MINI</h3> -13.528027,-71.970935 <p>Gym de combate</p></div>', -13.528027,-71.970935, 'img/gym.png'],          

          ['<div class="color"><h3>PACCHA</h3> -13.524724,-71.972639 <p>Gym de combate</p></div>', -13.524724,-71.972639, 'img/gym.png'],          

          ['<div class="color"><h3>RIMACPAMPA</h3> -13.519618,-71.973553 <p>Gym de combate</p></div>', -13.519618,-71.973553, 'img/gym.png'],          

          ['<div class="color"><h3>QORICANCHA</h3> -13.519905,-71.975318 <p>Gym de combate</p></div>', -13.519905,-71.975318, 'img/gym.png'],          

          ['<div class="color"><h3>PALACIO</h3> -13.518827,-71.977659 <p>Gym de combate</p></div>', -13.518827,-71.977659, 'img/gym.png'],          

          ['<div class="color"><h3>SANTA CATALINA</h3> -13.51765,-71.977184 <p>Gym de combate</p></div>', -13.51765,-71.977184, 'img/gym.png'],          

          ['<div class="color"><h3>SAN BLAS</h3> -13.515173,-71.974229 <p>Gym de combate</p></div>', -13.515173,-71.974229, 'img/gym.png'],          

          ['<div class="color"><h3>PLAZA DE ARMAS</h3> -13.516701,-71.978699 <p>Gym de combate</p></div>', -13.516701,-71.978699, 'img/gym.png'],          

          ['<div class="color"><h3>BOLIVAR</h3> -13.518865,-71.981751 <p>Gym de combate</p></div>', -13.518865,-71.981751, 'img/gym.png'],          

          ['<div class="color"><h3>SAN FRANCISCO</h3> -13.51827,-71.981913 <p>Gym de combate</p></div>', -13.51827,-71.981913, 'img/gym.png'],          

          ['<div class="color"><h3>PARQUE DE LA MADRE</h3> -13.515549,-71.981726 <p>Gym de combate</p></div>', -13.515549,-71.981726, 'img/gym.png'],          

          ['<div class="color"><h3>POKENKANCHA</h3> -13.5292254,-71.9921605 <p>Gym de combate</p></div>', -13.5292254,-71.9921605, 'img/gym.png'],          

          ['<div class="color"><h3>TEMPLO SANTIAGO</h3> -13.5256466,-71.9835295 <p>Gym de combate</p></div>', -13.5256466,-71.9835295, 'img/gym.png'],          

          ['<div class="color"><h3>PUENTE GRAU</h3> -13.524260, -71.977949 <p>Gym de combate</p></div>', -13.524260, -71.977949, 'img/gym.png'],          

          ['<div class="color"><h3>TITANIC</h3> -13.545369, -71.986431 <p>Gym de combate</p></div>', -13.545369, -71.986431, 'img/gym.png'],          

          ['<div class="color"><h3>TORRECHAYOC</h3> -13.515072, -71.965449 <p>Gym de combate</p></div>', -13.515072, -71.965449, 'img/gymex.png'],          

          ['<div class="color"><h3>PARQUE SICUANI</h3> -13.528023, -71.961278 <p>Gym de combate</p></div>', -13.528023, -71.961278, 'img/gym.png'],          

          ['<div class="color"><h3>Parque Squeit</h3> -13.534478,-71.90354 <p>Gym de combate</p></div>', -13.534478,-71.90354, 'img/gym.png'],

          ['<div class="color"><h3>Iglesia Santa Rita</h3> -13.531338,-71.89932 <p>Gym de combate</p></div>', -13.531338,-71.89932, 'img/gymex.png'],          

          ['<div class="color"><h3>Bienvenido san Jeronimo</h3> -13.537134,-71.90617 <p>Gym de combate</p></div>', -13.537134,-71.90617, 'img/gym.png'],          

          ['<div class="color"><h3>Puente Marcavalle</h3> -13.527338,-71.94597 <p>Gym de combate</p></div>', -13.527338,-71.94597, 'img/gym.png'],          

          ['<div class="color"><h3>Consulado belgica</h3> -13.524288, -71.94825 <p>Gym de combate</p></div>', -13.524288, -71.94825, 'img/gym.png'],          

          ['<div class="color"><h3>Mural Hospital Regional</h3> -13.524091,-71.95546 <p>Gym de combate</p></div>', -13.524091,-71.95546, 'img/gym.png'],          

          ['<div class="color"><h3>Ing Electronica</h3> -13.521086,-71.95696 <p>Gym de combate</p></div>', -13.521086,-71.95696, 'img/gym.png'],          

          ['<div class="color"><h3>Parroquia sra. de gracia</h3> -13.51572,-71.951355 <p>Gym de combate</p></div>', -13.51572,-71.951355, 'img/gym.png'],          

          ['<div class="color"><h3>Occhullo grande</h3> -13.5186205,-71.96092 <p>Gym de combate</p></div>', -13.5186205,-71.96092, 'img/gym.png'],          

          ['<div class="color"><h3>Parroquia Trinidad</h3> -13.520994,-71.96251 <p>Gym de combate</p></div>', -13.520994,-71.96251, 'img/gym.png'],          

          ['<div class="color"><h3>Mariscal Gamarra</h3> -13.521944,-71.962776 <p>Gym de combate</p></div>', -13.521944,-71.962776, 'img/gym.png'],          

          ['<div class="color"><h3>Loza Tio</h3> -13.533534,-71.96237 <p>Gym de pase Ex</p></div>', -13.533534,-71.96237, 'img/gymex.png'],          

          ['<div class="color"><h3>Mercado Tio</h3> -13.531607,-71.96028 <p>Gym de combate</p></div>', -13.531607,-71.96028, 'img/gym.png'],          

          ['<div class="color"><h3>Museo Natural</h3> -13.517639,-71.97872 <p>Gym de combate</p></div>', -13.517639,-71.97872, 'img/gym.png'],          

          ['<div class="color"><h3>Fuente san Blas</h3> -13.515146,-71.97412 <p>Gym de combate</p></div>', -13.515146,-71.97412, 'img/gym.png'],          

          ['<div class="color"><h3>Ticatica</h3> -13.507595, -72.005813 <p>Gym de combate</p></div>', -13.507595, -72.005813, 'img/gym.png'],

          ['<div class="color"><h3>Villa miraflores</h3> -13.543509,-71.89695 <p>Gym de combate</p></div>', -13.543509,-71.89695, 'img/gym.png'],          

          ['<div class="color"><h3>san jeronimo</h3> -13.543271,-71.88688 <p>Gym de combate</p></div>', -13.543271,-71.88688, 'img/gym.png'],
          ['<div class="color"><h3>Gruta santa rosa</h3> -13.532766493198729, -71.92102940443777 <p>Gym de combate</p></div>', -13.532766493198729, -71.92102940443777, 'img/gym.png'],
          ['<div class="color"><h3>A tupac amaru</h3> -13.531997397145448, -71.9258347097015 <p>Gym de combate</p></div>', -13.531997397145448, -71.9258347097015, 'img/gym.png'],
          ['<div class="color"><h3>Guacamayo Gigante</h3> -13.529567832902222, -71.95719061078722 <p>Gym de combate</p></div>', -13.529567832902222, -71.95719061078722, 'img/gym.png'],
          ['<div class="color"><h3>Parque infaltil Kantuta</h3> -13.54543,-71.895195 <p>Gym de combate</p></div>', -13.54543,-71.895195, 'img/gym.png'],
          ['<div class="color"><h3>Plaza Santiago</h3> -13.525391, -71.983358 <p>Gym de combate</p></div>', -13.525391, -71.983358, 'img/gymex.png'],
          ['<div class="color"><h3>Mapa del sistema vial</h3> -13.533694,-71.91184199999999 <p>Gym de combate</p></div>', -13.533694,-71.91184199999999, 'img/gymex.png'],
          ['<div class="color"><h3>MUNIPALACIO HINDU LARAPA</h3> -13.533029,-71.904533 <p>Gym de combate</p></div>', -13.533029,-71.904533, 'img/gymex.png'],
          ['<div class="color"><h3>Portal san jeronimo</h3> -13.546024,-71.89034 <p>Gym de combate</p></div>', -13.546024,-71.89034, 'img/gym.png'],
          ['<div class="color"><h3>Juegops recreativos kenedi A</h3> -13.531379,-71.952026 <p>Gym de combate</p></div>', -13.531379,-71.952026, 'img/gym.png'],
          ['<div class="color"><h3>Condor apuchin</h3> -13.528293,-71.93991 <p>Gym de combate</p></div>', -13.528293,-71.93991, 'img/gym.png'],
          ['<div class="color"><h3>Templo de agua Tambomachay</h3> -13.479283,-71.966842 <p>Gym de combate</p></div>', -13.479283,-71.966842, 'img/gym.png'],
          ['<div class="color"><h3>Loza de ttio 4to</h3> -13.533958,-71.958724 <p>Gym de combate</p></div>', -13.533958,-71.958724, 'img/gym.png'],
          ['<div class="color"><h3>Nido Corphish</h3> -13.522688, -71.966554 <p>Plaza Tupac Amaru</p> </div>', -13.522688, -71.966554, 'pokes/341.png']
        ];



        var map = new google.maps.Map(document.getElementById('map'), {

          zoom: 15,

          center: new google.maps.LatLng(-13.525154, -71.950126),

          mapTypeId: google.maps.MapTypeId.ROADMAP,

          draggable : true,

          scrollwheel: true,

          panControl: true,

          streetViewControl: false,

          scaleControl: true,

          mapTypeControl: false,

          overviewMapControl: true,

          gestureHandling: "greedy", //a one finger use

          styles: [{

            "featureType": "water",

            "elementType": "geometry",

            "stylers": [{ 

              "color": "#46bcec",

              "width": "30px" }],

          }],

        });





        var infowindow = new google.maps.InfoWindow();



        var marker, i;



        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({

            position: new google.maps.LatLng(locations[i][1], locations[i][2]),

            map: map,

            title: 'PEPSized Coffee',

            icon: locations[i][3],

            type: 'library',

          });



          google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {

              infowindow.setContent(locations[i][0]);

              infowindow.open(map, marker);

            }

          })(marker, i));



          map.setOptions({ minZoom:13, maxZoom: 18 });



          

        }



        function toggleBounce() {

          if (marker.getAnimation() !== null) {

            marker.setAnimation(null);

          } else {

            marker.setAnimation(google.maps.Animation.BOUNCE);

          }

        }

      </script>



      

    </body>

    </html>