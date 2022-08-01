function initMap(){
    map = new google.maps.Map(document.getElementById("map"), {
        center:{lat: 46.8625, lng:103.8467},
        zoom: 6
    });
    coordinates = get_coordinate('Ulaanbaatar', map);
}

function get_coordinate(address, map){
    fetch("https://maps.googleapis.com/maps/api/geocode/json?address="+address+'&key=AIzaSyBV2kO5IGFuo2vqR3jaq-G10pu4pZJRAxo')
      .then(response => response.json())
      .then(
        data => {
        const coords ={
            lat : data.results[0].geometry.location.lat,
            lng : data.results[0].geometry.location.lng
        }
        const marker = new google.maps.Marker({
            position:coords,
            map:map,
        });
        const detailWindow = new google.maps.InfoWindow({
            content : '<h2>Detail</h2>'
        });
        marker.addListener("mouseover", ()=>{
            detailWindow.open(map, marker);
        });
      });
}