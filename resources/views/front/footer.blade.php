   <!-- </div> -->
   </main>
   <footer class="footer has-background-link mt-6">
       <div class="container">
           <div class="columns is-centered is-multiline">
               <div class="column is-6">
                   <a href="/" class="columns is-centered">
                       
                       <div class="column is-narrow">
<center><p class="subtitle is-size-5 has-text-light">TELUSUR APP</p></center>
                           <p class="subtitle is-size-5 has-text-light">Web Pariwisata</p>
                       </div>
                   </a>
               </div>
               <div class="column is-8 has-text-centered py-0">
                   <p class="has-text-light is-size-5">Temukan Destinasi Favoritmu</p>
                   <hr>
                   <p class="has-text-light is-size-7">Dibuat oleh Rulz</p>
               </div>
           </div>
       </div>
   </footer>
   </div>
   <script type="text/javascript" src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
   
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script type="text/javascript">
       $(document).ready(function() {
           $('.slide-page').slick({
               infinite: true,
               slidesToShow: 1,
               slidesToScroll: 1,
               autoplay: true,
               dots: true
           });
       });
       var markers = [
           ['Aquaboom Waterpark', -1.2746100192521082, 116.85710771070723],
           ['Pantai Damba Enggang Borneo', -1.2732860512858726, 116.8687107027526],
           ['Pantai Wisata Lamaru', -1.2006727164296744, 116.99591139037713],
           ['Bekantan Watching', -1.2042768116325193, 116.83884123204865],
           ['Hutan Mangrove Margasari Kampoeng Baroe', -1.2358553437940138, 116.82579496725027],
           ['Pantai Melawai', -1.278513618788269, 116.81000212395928],
           ['KAWASAN KAMPUNG ATAS AIR BALIKPAPAN BARAT', -1.2338350641503488, 116.81643722211044]
       ];

       function initialize() {
           var mapCanvas = document.getElementById('map-canvas');
           var mapOptions = {
               mapTypeId: google.maps.MapTypeId.ROADMAP
           }
           var map = new google.maps.Map(mapCanvas, mapOptions)

           var infowindow = new google.maps.InfoWindow(),
               marker, i;
           var bounds = new google.maps.LatLngBounds(); // diluar looping
           for (i = 0; i < markers.length; i++) {
               pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
               bounds.extend(pos); // di dalam looping
               marker = new google.maps.Marker({
                   position: pos,
                   map: map
               });
               google.maps.event.addListener(marker, 'click', (function(marker, i) {
                   return function() {
                       infowindow.setContent(markers[i][0]);
                       infowindow.open(map, marker);
                   }
               })(marker, i));
               map.fitBounds(bounds); // setelah looping
           }

       }


       google.maps.event.addDomListener(window, 'load', initialize);
   </script>
   </body>

   </html>
