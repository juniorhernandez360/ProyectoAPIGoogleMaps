function iniciarMap(){
  var coord = {lat:	14.71843495,lng: -90.64285308};
  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 18,
    center: coord
  });
  var marker = new google.maps.Marker({
    position: coord,
    map: map
  });
}