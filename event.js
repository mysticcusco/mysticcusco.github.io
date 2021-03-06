(function(){
    new Clipboard('#copy-button');
})();

jQuery.noConflict();
jQuery(document).ready(function ($) {
    // map
    var map;

    // marcadores / lojas e pontos de distribuição no mapa
    var markers = [];

    // cluster var para agrupar marcadores próximos em zoom pequeno
    var mc;
    
    // bounds / função limites do mapa
    var bounds = new google.maps.LatLngBounds();
    
    /**
     * Função inicializar mapa
     */
    function initMap() {
        // localização inicial
        var myLatlng = new google.maps.LatLng(
            -13.531379,-71.952026
        );

        // opções mapa inicial
        var mapOptions = {
            zoom: 14, // zoom inicial mapa
            maxZoom: 21, // zoom máximo
            minZoom: 8, // zoom máximo
            center: myLatlng, // localização inicial
            draggable : true,
            scrollwheel: true,
            panControl: true,
            streetViewControl: false,
            scaleControl: true,
            mapTypeControl: false,
            gestureHandling: "greedy", // control de gestos con un solo dedo
            overviewMapControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP, //tipo de mapa
            styles:[
                  {
                    "featureType": "poi.business",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "featureType": "transit",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  }
                ]
        };

        // registra mapa na div #mapa como variável mapgoogle
        map = new google.maps.Map(document.getElementById("mapgoogle"), mapOptions);

        // Extrai informações do locais.json para criar marcadores
        $.getJSON(mapJsonFile, function (stores, textStatus) {
            // loop para criar marcadores no mapa usando
            // função addMarker()
            // para cada array em stores tem informações de um store
            $.each(stores, function (i, store) {                
                addMarker(store);
            });

            // cluster config
            // ajustes para exibição de ícone com marcadores agrupados
            var optionsCluster = {
                maxZoom: 12, // máximo zoom exibido cluster
                styles: [
                    {
                        textColor: '#ffffff', // cor texto cluster
                        url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m1.png', // imagem fundo do cluster
                        width: 53, // largura da imagem
                        height: 52 // altura da imagem
                    }
                ]
            };        

            // suporte a clusters adicionado ao map
            // map = variável do mapa
            // markers = array de marcadores
            // optionsCluster = options do cluster configurados acima
            
            // zoom para todos marcadores visíveis no ínicio
            // if (bounds.f.b != 1 && bounds.f.f != -1) {
            //     // map.fitBounds(bounds);
            // }
        });
    }

    /**
     * Função para registro de marcadores
     */
    function addMarker(markerinfo) {
        // titulo do marcador
        var title = markerinfo.name;
        if (title === null) { title = ''; }

        // endereco completo do marcador, deixa em branco se não há
        var address = markerinfo.location.full_address;
        if (address === null) { address = ''; }

        // telefone do marcador, deixar em branco se não há
        //var phone = markerinfo.phone;
        //if (phone === null) { phone = ''; }

        // pais do marcador
        var country = markerinfo.location.country.slug;
        
        // estado do marcador
        //var state = markerinfo.location.state.slug;

        // cidade do marcador
        //var city = markerinfo.location.city.slug;

        // setor do marcador
        //var district = markerinfo.location.district.slug;
        
        // tipo do marcador
        //var type = markerinfo.type.slug;

        // todas categorias em um array
        var categories = [
            country
        ];

        // posição lat e lng do marcador
        var position = new google.maps.LatLng(markerinfo.location.coordinates.lat, markerinfo.location.coordinates.lng);

        // imagens de marcadores personalizados
        //var image_point = "https://cdn.rawgit.com/rhcarlosweb/google-maps-markers/9cafdad0/assets/images/ponto.png";
        //var image_store = "https://cdn.rawgit.com/rhcarlosweb/google-maps-markers/9cafdad0/assets/images/loja.png";
        var gym = "img/gym.png";
        var gymex = "img/gymex.png";
        var nido = "img/nido.png";
        var stop = "img/stop.png";
        var stop1 = "img/stop1.png";
        var p1 = "pk/327.png";
        var p2 = "pk/399.png";
        var p3 = "pk/92.png";
        var p4 = "pk/95.png";
        var p5 = "pk/246.png";
        var p6 = "pk/133.png";
        var p61 = "pk/142.png";
        var p7 = "pk/1.png";
        var p8 = "pk/96.png";
        var p9 = "pk/138.png";
        var p10 = "pk/66.png";
        var p11 = "pk/124.png";
        var p12 = "pk/131.png";
        var p13 = "pk/66.png";
        var p14 = "pk/125.png";
        var p15 = "pk/1.png";
        var p16 = "pk/58.png";
        var p17 = "pk/104.png";
        var p18 = "pk/129.png";
        var p19 = "pk/102.png";
        var p20 = "pk/126.png";
        var p21 = "pk/113.png";
        var p22 = "pk/147.png";
        var p23 = "pk/121.png";
        var p24 = "pk/81.png";
        var p25 = "pk/60.png";
        var p26 = "pk/140.png";
        var p27 = "pk/27.png";
        var p28 = "pk/129.png";
        var p29 = "pk/37.png";
        var p30 = "pk/347.png";
        var p301 = "pk/347.png";
        var p31 = "pk/310.png";
        var p32 = "pk/73.png";
        var p33 = "img/pina.png";
        var p34 = "img/pina.png";
        var pcr = "img/raro.png";
        var cr = "img/raro.png";

        // imagem marcadores personalizados para cada tipo de local
        var icons = {
            gym: {icon: gym},
            gymex: {icon: gymex},
            nido: {icon: nido},
            stop: {icon: stop},
            stop1: {icon: stop1},
            p1: {icon: p1},
            p2: {icon: p2},
            p3: {icon: p3},
            p4: {icon: p4},
            p5: {icon: p5},
            p6: {icon: p6},
            p61: {icon: p61},
            p7: {icon: p7},
            p8: {icon: p8},
            p9: {icon: p9},
            p10: {icon: p10},
            p11: {icon: p11},
            p12: {icon: p12},
            p13: {icon: p13},
            p14: {icon: p14},
            p15: {icon: p15},
            p16: {icon: p16},
            p17: {icon: p17},
            p18: {icon: p18},
            p19: {icon: p19},
            p20: {icon: p20},
            p21: {icon: p21},
            p22: {icon: p22},
            p23: {icon: p23},
            p24: {icon: p24},
            p25: {icon: p25},
            p26: {icon: p26},
            p27: {icon: p27},
            p28: {icon: p28},
            p29: {icon: p29},
            p30: {icon: p30},
            p301: {icon: p301},
            p31: {icon: p31},
            p32: {icon: p32},
            p33: {icon: p33},
            p34: {icon: p34},
            pcr: {icon: pcr},
            cr: {icon: cr}
        };

        // registro de marcadores
        var marker = new google.maps.Marker({
            title: title, // titulo marcador
            position: position, // posicao marcador
            icon: icons[markerinfo.location.country.slug].icon, // usa icone certo para cada tipo de marcador
            map_icon_label: '<span class="label">Nuevos</span>',
            animation: google.maps.Animation.DROP, // animação drop marcador
            map: map, // registra marcador na variável map
            category: categories
        });
        
        // adiciona markers ao array
        markers.push(marker);

        // limite adicionado com posição de cada marcador
        bounds.extend(marker.position);

        var selectedInfoWindow;
        // registro de conteúdo na caixa de informações
        // do marcador
        var infowindow = new google.maps.InfoWindow({
            content: '<div class="title-map"><h5>' + title + '</h5></div>' + '<div class="endereco"><input style="border: 0;margin-right: 6px;" id="foo" value="' + address + '" readonly><button id="copy-button" class="" data-clipboard-target="#foo"><img width="15px" src="https://clipboardjs.com/assets/images/clippy.svg" alt="Copy to clipboard" title="Copy to clipboard"></button></div>'
        });

        // exibe marcador quando clicado
        //marker.addListener('click', function () {
            // zoom no marcador
            // map.setZoom(14);

            // centraliza mapa na posição do marcador
            // map.setCenter(marker.getPosition());
            // abre caixa informações marcador
            // infowindow.open(map, this);
            //infowindow.open(map, marker);
        //});
        
        // registro de conteúdo na caixa de informações
        // do marcador
        

        // Open the infowindow on marker click
        google.maps.event.addListener(marker, "click", function() {
            //Check if there some info window selected and if is opened then close it
            if (selectedInfoWindow != null && selectedInfoWindow.getMap() != null) {
                selectedInfoWindow.close();
                //If the clicked window is the selected window, deselect it and return
                if (selectedInfoWindow == infowindow) {
                    selectedinfowindow = null;
                    return;
                }
            }
            //If arrive here, that mean you should open the new info window 
            //because is different from the selected
            selectedInfoWindow = infowindow;
            selectedInfoWindow.open(map, marker);
        });




        // Exibe marcador quando hover
        // marker.addListener('mouseover', function() {
        //     infowindow.open(map, marker);
        // });
        // marker.addListener('mouseout', function() {
        //     infowindow.close();
        // });

    }

    /**
     * Form filtro
     */
    $('#buscar-locais').submit(function(event) {
        event.preventDefault();
        
        // valores filtros selecionado
        var countryValSel = [
            $('#pais').val(),
            //$('#estado').val(),
        ];

        // limite do mapa
        bounds = new google.maps.LatLngBounds();

        for (i = 0; i < markers.length; i++) {
            // addMarker(markers[i]);
            
            var mark = markers[i];

            // If is same category or category not picked
            // if ((typeof mark.category == 'object' && mark.category.indexOf(countryValSel) >= 0) || countryValSel.length === 0) {
            if (objectsMatch(mark.category, countryValSel) || countryValSel.length === 0) {
                mark.setVisible(true);
                bounds.extend(mark.getPosition());
            }
            // Categories don't match 
            else {                
                mark.setVisible(false);
            }

        }

        // zoom mapa aos marcadores selecionados com 
        // a categoria
        map.fitBounds(bounds);
    });

    // init map on load page
    $(window).load(function () {
        initMap();
    });


    /**
     * Função verifica se objetos são identicos
     */
    function objectsMatch(roll, filterObject) {
        var match = true;
        for (var prop in filterObject) {
            if (!roll.hasOwnProperty(prop) ||
                !filterObject.hasOwnProperty(prop)) continue;
            if (roll[prop] != filterObject[prop] &&
                filterObject[prop] !== ''
            ) {
                match = false;
            }
        }
        return match;
    }

});





// Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });



