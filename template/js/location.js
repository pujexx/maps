

window.onload = function() {
    var startPos;
    navigator.geolocation.getCurrentPosition(function(position) {
        startPos = position;
        //latitude = startPos.coords.latitude;
        //  longitude = startPos.coords.longitude;
        console.log("latitude"+startPos.coords.latitude);
    //alert("latitude " +latitude+" Longitude "+ longitude);
    });
};