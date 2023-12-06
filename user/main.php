<!DOCTYPE html>
<html>
<head>
    <title>تحديد الموقع باستخدام GPS</title>
</head>
<body>
    <h1>تحديد الموقع باستخدام GPS</h1>
    <p id="demo">انقر على الزر للحصول على موقعك</p>

    <button onclick="getLocation()">الحصول على الموقع</button>
    <button onclick="showIframe()">Show Iframe</button>


    <script>


        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                document.getElementById("demo").innerHTML = "متصفحك لا يدعم ميزة تحديد الموقع.";
            }
        }
          
      
        function showPosition(position) {
          var  latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
            
            
        

      
  
        // Define an array of locations with their coordinates
var locations = [
  { name: "اهرامات الجيزة", latitude: 29.98456356381652, longitude: 31.1321545705368 },
  { name: "القرية الفرعونية", latitude: 29.99732067800839, longitude: 31.21477810050422 },
  { name: "ميدان باب الشعرية ", latitude: 30.056195907272972, longitude: 31.258473986674982 },  // 30.056195907272972, 31.258473986674982
  { name: "ربع السلطان قايتباي", latitude: 30.047265309683397, longitude: 31.27668142454561 }, // 30.047265309683397, 31.27668142454561
  { name: "أبومازن السوري", latitude:  30.04849832278847, longitude: 31.37611809650331 }, // 30.04849832278847, 31.37611809650331
  { name: " بيت الست وسيلة التاريخي", latitude: 30.046950097408292, longitude:31.263572069278755 },
  { name: " ", latitude: 29.99732067800839, longitude: 31.21477810050422 },
  { name: "", latitude: 29.99732067800839, longitude: 31.21477810050422 },
  { name: " سور القاهرة الشمالي", latitude:30.055355414773583 , longitude: 31.266242493499785 },
  { name: " دار المحفوظات المصرية", latitude:30.03413061510636 , longitude: 31.270976427346145 },
  { name: "قصر الأمير بشتاك ", latitude: 30.05180126849913, longitude: 31.26313681605355 },
  { name: "باب النصر ", latitude:30.054424805344816 , longitude: 31.264962588421596 },
  { name: " باب الفتوح", latitude: 30.05555773290379, longitude: 31.26341763608723 },
  { name: "شارع المعز لدين الله الفاطمي ", latitude:30.050913760039684 , longitude:  31.261536420949874 },
  { name: " خان الخليلي", latitude:30.047785014684504 , longitude: 31.262242293073587   },
  { name: "منزل زينب خاتون ", latitude: 30.0450224527916, longitude:  31.26355136423297},
  { name: " حديقة الأزهر", latitude: 30.040857233131902, longitude: 31.26473919303764 },
  { name: "قلعة صلاح الدين الايوبي", latitude: 30.03066230075853, longitude: 31.259134968101254 } // 30.03066230075853, 31.259134968101254
  // Add more locations as needed
];

// Function to find the closest location to a given set of coordinates
function findClosestLocation(targetLatitude, targetLongitude, locations) {
  return locations.reduce(function (closest, current) {
    var distanceToClosest = calculateDistance(targetLatitude, targetLongitude, closest.latitude, closest.longitude);
    var distanceToCurrent = calculateDistance(targetLatitude, targetLongitude, current.latitude, current.longitude);

    return distanceToCurrent < distanceToClosest ? current : closest;
  });
}

// Function to calculate the distance between two sets of coordinates (using Haversine formula)
function calculateDistance(lat1, lon1, lat2, lon2) {
  var R = 6371; // Radius of the Earth in kilometers
  var dLat = (lat2 - lat1) * (Math.PI / 180);
  var dLon = (lon2 - lon1) * (Math.PI / 180);
  var a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  var distance = R * c; // Distance in kilometers
  return distance;
}

// Target coordinates for comparison (you can get these from user input, geolocation, etc.)
var targetLatitude =latitude ;
var targetLongitude = longitude;

if(latitude==29.98456356381652 && longitude == 31.1321545705368 ){

  function showIframe() {
    // Create an iframe element
    var iframe = document.createElement("iframe");

    // Set attributes for the iframe (replace with your iframe attributes)
    iframe.width = "600";
    iframe.height = "450";
    iframe.frameBorder = "0";
    iframe.style.border = "0";
    iframe.src = ""; // Replace with your iframe source URL
    iframe.allowFullscreen = true;

    // Append the iframe to the body or any other desired container
    document.body.appendChild(iframe);
  }

}

console.log(targetLatitude,targetLongitude);

 //29.98456356381652, 31.1321545705368
 // 29.99732067800839, 31.21477810050422

// Find the closest location
var closestLocation = findClosestLocation(targetLatitude, targetLongitude, locations);

// Display the result
document.write("The closest location to the target coordinates is:", closestLocation.name);



}

        


    </script>

</body>
</html>
