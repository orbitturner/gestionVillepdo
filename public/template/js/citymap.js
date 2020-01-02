// +======================={PROJECT - PRESENTATION}======================+
// |                                                                     |
// |Project Name    : gestionVillepdo - CMDB/ITIL                        |
// |Categorie       : Dynamic App Website                                |
// |FrameWorks      : Bootstrap 4 - MDB                                  |
// |Author          : OrbitTurner                                        |
// |Official Name   : Mohamed GUEYE                                      |
// |Version         : v.0.1.1                                            |
// |Created         : 18-DECEMBER-2019                                   |
// |Last update     : 02-JAN-2020                                        |
// |Partie          : CITYMAP JS                                         | 
// |LANGAGE UTILISE : ANGLAIS - FRANCAIS                                 |
// +=====================================================================+
// Pour tout aide concernant le code source contactez-moi!!

// Initialize and add the map
function initMap() {
    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('cityMap'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
//   $(document).ready(function() {

//   }  