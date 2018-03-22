<?php include 'header.php';
include 'validation.php';
include 'homesidenavbar.php'; ?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(19.047806, 72.889912),
    zoom:40,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> 
<script>$(window).on('resize', function() {
    var currCenter = map.getCenter();
    google.maps.event.trigger(map, 'resize');
    map.setCenter(currCenter);
})</script>
<div class="col-sm-9">
	<div class="main" id="contact">
    	<center>
            <h1>Contact Us</h1><br>
            <h2>VIVEKANAND EDUCATION SOCIETY'S POLYTECHNIC<br /></h2>
            <h3>Sindhi Society, Chembur, Mumbai-71<br /><br /></h3>
            <h4>Contact no. 25290486/25227638<br /><br /></h4>
            <b>Principal</b><br />
            Mr. Vikrant Bhaskarrao Joshi<br />
            Tel: 25227638 ext:- 203<br />
            Email: vespolytechnic@yahoo.com<br /><br />
            <b>Hostel</b><br />
            Mr. Sunil Madhnani.<br />
            Mobile : - 9820569938<br />
            <h2>Location On Map</h2><br />
            <div id="googleMap" class="img-responsive"></div><br /><br />
            <h2>Website Development Team</h2><br />
            <h4>Rushabh Doshi</h4>co2013.rushabh.doshi@ves.ac.in<br /><br />
            <h4>Mansi Khamkar</h4>co2013.mansi.khamkar@ves.ac.in<br /><br />
            <h4>Neel Vikmani</h4>co2013.neel.vikmani@ves.ac.in<br /><br />
            <h4>Kaustubh Thanekar</h4>co2013.kaustubh.thanekar@ves.ac.in<br />
		</center>
	</div>
</div>
</div>
<?php include 'footer.php'; ?>