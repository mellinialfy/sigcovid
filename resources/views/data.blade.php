<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/logo-162x162.png" type="image/x-icon">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  <meta name="description" content="Peta Sebaran Covid19">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('/assets/web/assets/mobirise-icons2/mobirise2.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/datatables/data-tables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/theme/css/style.css') }}">
  <link rel="preload" as="style" href="{{ asset('/assets/mobirise/css/mbr-additional.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/mobirise/css/mbr-additional.css') }}" type="text/css">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


<!-- Leaflet (JS/CSS) -->
<link rel="stylesheet" href="http://leaflet.github.io/Leaflet.label/leaflet.label.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
  <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.css" />
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.Default.css" />
  <!-- Leaflet-KMZ -->
  <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


  <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->

  
  <!-- <style>
    html,
    body,
    #map {
        height: 400px;
        width: 100%;
        padding: 0;
        margin: 0;
        position: relative;
    }
</style> -->
  
</head>
<body>


@include('layouts.header')


<section class="header12 cid-rYFA9A565B mbr-parallax-background" id="header12-f" src="edit-2000x1333.jpg" >
  <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    
  </div>
  <div class="container">
    
    <div class="media-container">
      <div class="col-md-12 align-center">
        <h1 class="mbr-section-title pb-3 mbr-white mbr-fonts-style display-1">
        Data Sebaran Kasus Covid-19
      </h1>
      <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">
      Sampai dengan Tanggal {{ $tglnow }} di Bali
    </p>
    <div class="icons-media-container mbr-white">
        
        

      <div class="card col-12 col-md-6 col-lg-3">
        <div class="icon-block">
          <a href="#table1-b">
            <h2 class="mbr-section-title align-center pb-3 mbr-white mbr-fonts-style display-1"> {{ $totalpositif[0]->jml_positif }}</h2>
          </a>
        </div>
        <h5 class="mbr-fonts-style display-5">Positif</h5>
      </div>
      <div class="card col-12 col-md-6 col-lg-3">
        <div class="icon-block">
          <a href="#table1-b">
            <h2 class="mbr-section-title align-center pb-3 mbr-white mbr-fonts-style display-1" name="dirawat"> {{ $totaldirawat[0]->dirawat }}</h2>
          </a>
        </div>
        <h5 class="mbr-fonts-style display-5">Dalam Perawatan</h5>
      </div>
      <div class="card col-12 col-md-6 col-lg-3">
        <div class="icon-block">
          <a href="#table1-b">
            <h2 class="mbr-section-title align-center pb-3 mbr-white mbr-fonts-style display-1"> {{ $totalsembuh[0]->sembuh }}</h2>
          </a>
        </div>
        <h5 class="mbr-fonts-style display-5">Sembuh</h5>
      </div>
      <div class="card col-12 col-md-6 col-lg-3">
        <div class="icon-block">
          <a href="#table1-b">
            <h2 class="mbr-section-title align-center pb-3 mbr-white mbr-fonts-style display-1"> {{ $totalmeninggal[0]->meninggal }}</h2>
          </a>
        </div>
        <h5 class="mbr-fonts-style display-5">Meninggal</h5>
      </div>
    </div>
  </div>
</div>
</div>   
</section>



<section class="mbr-section contacts1 cid-rYFefgikfE" id="contacts1-d">

  <!--Container-->
  <div class="container">
    <div class="card">
      <!--Titles-->
      <div class="card-title col-12">
        <h2 class="align-center mbr-fonts-style pb-3 display-2">Peta Sebaran</h2>
        <div id="map" style="height: 400px"></div>
      </div>



    <div class="card-footer " style="background: white">
      <!-- <div class="map">
        <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJ06f8IHUv0i0RhM1WxCy2cig" allowfullscreen=""></iframe>
      </div> -->
      <!-- <div class="card-footer" style="background: white"> -->
              <div class="row">
                <div class="col-6">
                  Warna Awal
                  <input type="color" value="#FF0000" class="form-control" id="colorStart">
                </div>
                <div class="col-6">
                  Warna Akhir
                  <input type="color" value="#008000" class="form-control" id="colorEnd">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-12">
                  <button class="btn btn-success form-control" id="btnGenerateColor">Generate Warna</button>
                </div>
      
              </div>
            <!-- </div> -->
      
    </div>

  </div>
</div>
</section>


<section class="section-table cid-rYFdRyyvD9" id="table1-b">
  <div class="container container-table">
    <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Data Sebaran Covid19 di Bali</h2>
    <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
      pada tanggal {{$tglnow}}
    </h3>
    <!-- search -->
    <form action="/" method="GET">
              <div class="input-group">
                <label class="form-control-label mbr-fonts-style display-6">Kabupaten</label>
                <select name="carikabupaten" class="form-control" value="{{ old('carikabupaten') }}">
                            <option value="" selected="selected">Semua Kabupaten</option>
                            @foreach($kabupaten as $k)
                            <option value="{{$k->id_kabupaten}}">{{$k->nama_kabupaten}}</option>
                            @endforeach
                            
                        </select>
                      
                <!-- <input type="search" name="carikabupaten" class="form-control" value="{{ old('carikabupaten') }}"> -->
                <br>
                <label class="form-control-label mbr-fonts-style display-6">Tanggal Penyebaran</label>
                <input type="date" name="caritgl" required="required" class="form-control" value="{{ old('caritgl') }}">
                <input type="submit" value="CARI" class="btn btn-danger">
              </div>
            </form>
            <!-- endsearch -->
    <div class="table-wrapper">
        <div class="container scroll">
            <table class="table isSearch table-striped" cellspacing="0">
                
                <thead>
                    <tr class="table-heads">
                        <th class="head-item mbr-fonts-style display-7 sorting">KABUPATEN</th>
                        <th class="head-item mbr-fonts-style display-7 sorting">DIRAWAT</th>
                        <th class="head-item mbr-fonts-style display-7 sorting">SEMBUH</th>
                        <th class="head-item mbr-fonts-style display-7 sorting">MENINGGAL</th>
                        <th class="head-item mbr-fonts-style display-7">POSITIF</th>
                        <th class="head-item mbr-fonts-style display-7">WNA</th>
                        <th class="head-item mbr-fonts-style display-7">WNI</th>
                        <th class="head-item mbr-fonts-style display-7">IMPORTED CASE</th>
                        <th class="head-item mbr-fonts-style display-7">TRANSMISI LOKAL</th>
                        <th class="head-item mbr-fonts-style display-7">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($positif as $p)
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">
                        
                            {{ $p->kabupaten->nama_kabupaten }}
                           
                        </td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->dirawat }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->sembuh }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->meninggal }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->jml_positif }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->wna }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->wni }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->ic }}</td>
                        <td class="body-item mbr-fonts-style display-7">{{ $p->tl }}</td>
                        <td class="body-item mbr-fonts-style display-7">
                            <a href="/data/edit/{{ $p->id_positif }}">Edit</a>
                            <a href="/data/hapus/{{ $p->id_positif }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <!-- <span class="infoBefore">Sumber Data : Dinas Kesehatan Provinsi Bal</span>  -->
                <span class="inactive infoRows">Sumber Data : Dinas Kesehatan Provinsi Bali</span>
                <!-- <span class="infoAfter"></span>
                <span class="infoFilteredBefore"></span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"></span> -->
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>




@include('layouts.footer')




  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/popper/popper.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/dropdown/js/nav-dropdown.js"></script>
  <script src="../assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="../assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../assets/datatables/jquery.data-tables.min.js"></script>
  <script src="../assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="../assets/parallax/jarallax.min.js"></script>
  <script src="../assets/theme/js/script.js"></script>
  <script src="../assets/formoid/formoid.min.js"></script>


  <script src="../assets1/js/core/jquery.min.js"></script>
  <script src="../assets1/js/core/popper.min.js"></script>
  <script src="../assets1/js/core/bootstrap.min.js"></script>
  <script src="../assets1/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets1/js/plugins/chartjs.min.js"></script>
  <script src="../assets1/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets1/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../assets1/demo/demo.js"></script>
  
  







<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
<script src="https://pendataan.baliprov.go.id/assets/frontend/map/leaflet.markercluster-src.js"></script>
<script src="http://leaflet.github.io/Leaflet.label/leaflet.label.js" charset="utf-8"></script>
<!-- <script src="https://pendataan.baliprov.go.id/assets/frontend/map/leaflet.markercluster-src.js"></script> -->
<!-- <script type="text/javascript" class="init">
  
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  
</script> -->

<script>
  $(document).ready(function () {
    var dataMap=null;
    var dataColor=null;
    var colorMap=[
      "8f4426", //klungkung
      "f57b51", //tbn
      "e3c878", //gak berubah
      "ffd31d", //karangasem
      "b7472a", //jembrana
      "f27f68", //gianyar
      "eb9788", //dps
      "ffd5ab", //bulleng
      "fff2e5" //bangli
    ];
    var tanggal = $('#caritgl').val();
    // console.log(tanggal);
    $.ajax({
      async:false,
      url:'data/getDataMap',
      type:'get',
      dataType:'json',
      data:{date: tanggal},
      success: function(response){
        dataMap = response["dataMap"];
        dataColor = response["dataColor"];
      }
    });
    console.log(dataMap);

    // $.ajax({
    //   async:false,
    //   url:'data/getPositif',
    //   type:'get',
    //   dataType:'json',
    //   data:{date: tanggal},
    //   success: function(response){
    //     dataColor = response["dataColor"];
    //     // dataPos = response;
    //   }
    // });
    // console.log(dataColor);

    var map = L.map('map', {fullscreenControl:true,});
    
    $('#btnGenerateColor').on('click',function(e){
      var colorStart = $('#colorStart').val();
      var colorEnd = $('#colorEnd').val();
      $.ajax({
        async:false,
        url:'/create-pallete',
        type:'get',
        dataType:'json',
        data:{start: colorStart, end:colorEnd},
        success: function(response){
          colorMap = response;
          setMapColor();
        }
      });
      
    });

    // var map = L.map('map', {fullscreenControl:true,});
    map.setView(new L.LatLng(-8.374187,115.172922), 10);

    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
      // zoomAnimation:true,
            id: 'mapbox/streets-v11',
      opacity: 0.90, accessToken: 'pk.eyJ1Ijoid2lkaWFuYXB3IiwiYSI6ImNrNm95c2pydjFnbWczbHBibGNtMDNoZzMifQ.kHoE5-gMwNgEDCrJQ3fqkQ',
    });

    OpenTopoMap.addTo(map);
    var defStyle = {opacity:'1',color:'#000000',fillOpacity:'0',fillColor:'#CCCCCC'};
    var selStyle = {color:'#0000FF',opacity:'1',fillColor:'#00FF00',fillOpacity:'1'};
    setMapColor();
    // define variables
    var lastLayer;
    // var defStyle = {opacity:'1',color:'#000000',fillOpacity:'0',fillColor:'#CCCCCC'};
    // var selStyle = {color:'#0000FF',opacity:'1',fillColor:'#00FF00',fillOpacity:'1'};
    
    function setMapColor(){
      var markerIcon = L.icon({
        iconUrl: '/mar.png',
        iconSize: [30, 50],
      });
      var BADUNG,BULELENG,BANGLI,DENPASAR,GIANYAR,JEMBRANA,KARANGASEM,KLUNGKUNG,TABANAN;
      //bukan index
      dataColor.forEach(function(value,index){
        var colorKab = dataColor[index].nama_kabupaten.toUpperCase();
        // console.log(colorKab);
        if(colorKab == "BADUNG"){
          BADUNG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="BANGLI"){
          BANGLI = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        } else if(colorKab=="BULELENG"){
          BULELENG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="DENPASAR"){
          DENPASAR = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="GIANYAR"){
          GIANYAR = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab =="JEMBRANA"){
          JEMBRANA = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="KARANGASEM"){
          KARANGASEM = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="KLUNGKUNG"){
          KLUNGKUNG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab =="TABANAN"){
          TABANAN = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }

      });

      var invocation = new XMLHttpRequest();

    // Instantiate KMZ parser (async)
    var kmzParser = new L.KMZParser({
        onKMZLoaded: function (layer, name) {
          control.addOverlay(layer, name);
          var markers = L.markerClusterGroup();
          var layers = layer.getLayers()[0].getLayers();

            // fetching sub layer
          layers.forEach(function(layer, index){
          
          var kab  = layer.feature.properties.NAME_2;
          
console.log(kab);
kab = kab.toUpperCase();
                var kabLower = kab.toLowerCase();
          var prov = layer.feature.properties.NAME_1;
          var positif;
          
          //
          if(!Array.isArray(dataMap) || !dataMap.length == 0 ){
            // set sub layer default style positif covid
            if(kab == 'BADUNG'){
              layer.setStyle(BADUNG);
            }else if(kab == 'BANGLI'){
              layer.setStyle(BANGLI);
            }else if(kab == 'BULELENG'){
              layer.setStyle(BULELENG);
            }else if(kab == 'DENPASAR'){
              layer.setStyle(DENPASAR);
            }else if(kab == 'GIANYAR'){
              layer.setStyle(GIANYAR);
            }else if(kab == 'JEMBRANA'){
              layer.setStyle(JEMBRANA);
            }else if(kab == 'KARANGASEM'){
              layer.setStyle(KARANGASEM);
            }else if(kab == 'KLUNGKUNG'){
              layer.setStyle(KLUNGKUNG);
            }else if(kab == 'TABANAN'){
              layer.setStyle(TABANAN);
            } 


            
            // preparing data format
            var positif = '<table width="300">';
                positif +='  <tr>';
                positif +='    <th colspan="2">Keterangan</th>';
                positif +='  </tr>';
              
              
              positif +='  <tr>';
              positif +='    <td>Kabupaten</td>';
              positif +='    <td>: '+kab+'</td>';
              positif +='  </tr>';              

              
              positif +='  <tr style="color:red">';
              positif +='    <td>Positif</td>';
              positif +='    <td>: '+dataMap[index].jml_positif+'</td>';
              positif +='  </tr>';
              

              positif +='  <tr style="color:green">';
              positif +='    <td>Sembuh</td>';
              positif +='    <td>: '+dataMap[index].sembuh+'</td>';
              positif +='  </tr>'; 

              positif +='  <tr style="color:black">';
              positif +='    <td>Meninggal</td>';
              positif +='    <td>: '+dataMap[index].meninggal+'</td>';
              positif +='  </tr>';

          
              positif +='  <tr style="color:blue">';
              positif +='    <td>Dalam Perawatan</td>';
              positif +='    <td>: '+dataMap[index].dirawat+'</td>';
              positif +='  </tr>';               
              
              
            positif +='</table>';

// layer.bindPopup(positif);

//       var markerIcon = L.icon({
//   iconUrl: '/mar.png',
//   iconSize: [40, 40],
// });

//       var noHide = false;
    
            if(kab == 'BANGLI'){
              markers.addLayer( 
                L.marker([-8.254251, 115.366936] ,{
                  icon: markerIcon
                }).bindPopup(positif).addTo(map)
              );
            }
            else if(kab == 'GIANYAR'){
              markers.addLayer( 
                L.marker([-8.422739, 115.255700] ,{
                  icon: markerIcon
                }).bindPopup(positif).addTo(map)
              );

            }else if(kab == 'KLUNGKUNG'){
              markers.addLayer( 
                L.marker([-8.487338, 115.380029] ,{
                  icon: markerIcon
                }).bindPopup(positif).addTo(map)
              );

            }else{
              markers.addLayer( 
                L.marker(layer.getBounds().getCenter(),{
                  icon: markerIcon
                }).bindPopup(positif).addTo(map)
              );
            }

          }else{
            var positif = "Tidak ada Data pada tanggal tersebut"
            layer.setStyle(defStyle);
          }
          layer.bindPopup(positif);
        });
        map.addLayer(markers);
        layer.addTo(map);
        }
    });
  
    // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
    kmzParser.load('bali-kabupaten.kmz');
    // kmzParser.load('https://raruto.github.io/leaflet-kmz/examples/globe.kmz');

    var control = L.control.layers(null, null, {
        collapsed: true
    }).addTo(map);
    $('.leaflet-control-layers').hide();
    }
  });
</script>

</body>
</html>
