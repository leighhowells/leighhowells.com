        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script>
          function initialize() {
            var map_canvas = document.getElementById('map_canvas');
            var map_options = {
              center: new google.maps.LatLng(44.5403, -78.5463),
              zoom: 8,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(map_canvas, map_options)
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <section class="col-xs-12 col-sm-12 contact-details">
            <div class="container">

             <h1>Contact us</h1>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <a href="tel:+4412345678901" class="tel">+44 (0)1234567 <strong>8901</strong></a>
                        <div class="enquiries">
                            <h3>Undergraduate enquiries</h3>
                            <a href="mailto:undergrad@ed.ac.uk" class="email">undergrad@ed.ac.uk</a>
                        </div>
                        <div class="enquiries">
                            <h3>Postgraduate enquiries</h3>
                            <a href="mailto:postgrad@ed.ac.uk" class="email">postgrad@ed.ac.uk</a>
                        </div>
                        <div >
                            <h4>Address</h4>
                                <dl class="address"> 
                                   <dt>Building</dt>
                                   <dd>Building name</dd> 
                                   <dt>Street</dt>
                                   <dd>Street name</dd> 
                                   <dt>City</dt>
                                   <dd>Edinburgh</dd> 
                                   <dt>Post Code</dt>
                                   <dd>ED5 5ED</dd> 
                                </dl>
                        </div>
                    </div>
                
                    <div id="map_canvas" class="col-sm-12 col-md-7"></div>

                </div>
            </div>   
        </section>