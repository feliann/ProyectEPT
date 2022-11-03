// Maps access token goes here
var key = 'pk.bac3cbaedf6a01fdff654f7b86f1e863';

//Agregar Mapa
let map = L.map('map').setView([-34.612918138033976, -58.43811578328029],12.3)
 
L.tileLayer('https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i{z}!2i{x}!3i{y}!4i256!2m3!1e0!2sm!3i349018013!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0',{
            attribution: '&copy; Powered by Google'
}).addTo(map);



// Agregar geocoder
 L.control.geocoder(key, {
  fullWidth: 650,
  expanded: true,
  markers: true,
  
}).addTo(map);

// Configurar PopUp
function popup(feature,layer){
  if(feature.properties && feature.properties.nombre){
      layer.bindPopup("<strong>Nombre: </strong>" + feature.properties.nombre + "<br/>"+"<strong>Pisos: </strong>" + feature.properties.pisos_16 + "<br/>"+"<strong>Precio: </strong>" + feature.properties.Precio + "<br/>");
     
  }
}

// Agregar capa en formato GeoJson
L.geoJson(grages).addTo(map);

var grages = L.geoJson(grages,{
  onEachFeature: popup 
}).addTo(map);

//Agregar Localizador del usuario con nombre de variable sim
var lc=L.control.locate().addTo(map);   

//On click event new marker
map.on('dblclick', function (e) {
  console.log(e)
  var newMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
  L.Routing.control({
    waypoints: [
      L.latLng(lc._event.latlng.lat, lc._event.latlng.lng),
      L.latLng(e.latlng.lat, e.latlng.lng)
    ]
  }).on('routesfound', function (e) {
    var routes = e.routes;
    console.log(routes);

    e.routes[0].coordinates.forEach(function (coord, index) {
      setTimeout(function () {
        marker.setLatLng([coord.lat, coord.lng]);
      }, 100 * index)
    })

  }).addTo(map);
});


