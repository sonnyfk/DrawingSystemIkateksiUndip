<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/css.css') }}">
    <title>JKTMX - Random System</title>
  </head>
  <body>
    <div class="site-wrapper">
    {{ csrf_field() }}

        <div class="site-wrapper-inner">
            <div class="container">
                <div class="masthead clearfix">
                    <div class="container inner">
                        <nav>
                            <ul class="nav masthead-nav">
                                <li><a href="{{ url('/') }}">Doorprize</a></li>
                                <li><a href="{{ url('list/pemenang') }}">List Pemenang</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                <h1 class="cover-heading fontjudul">DOORPRIZE</h1>
                <!-- Jumlah Pegawai GA Group : {{ $count }} Pegawai -->
                    <p><span id="timespan"></span></p>
                    <p><input type="hidden" id="urut"></span></p>
                    <p><span id="Company"></span></p>
                    <p><span id="Nama"></span></p>



                        <!-- <input type="submit" id="submit" value="Start" onclick="countdown()">
                        <input type="submit" id="submit" value="Stop" onclick="cdpause()"> -->
                            <?php //dd($arrs);?>
                            <script src="jquery.min.js"></script>
                                <script type="text/javascript">
	                                var t, count, urut;
                                    var myArrs = <?php echo $arrs; ?>;
	                                function cddisplay() {
                                        document.getElementById('timespan').innerHTML = count;
                                        document.getElementById('urut').value = urut;
                            		    
        	                        }
	                                function countdown() {

                                        document.getElementById('Company').innerHTML ="";
                                    document.getElementById('Nama').innerHTML = "";
		                            // starts countdown
		                                cddisplay();
		                                if (acak === 0) {
			                            // time is up
		                                } else {                                                                    
                                        acak++;
                                        
                                        count = myArrs[urut]['employeeID'];
                                        urut++;
                                        if (urut == jumlah) urut = 0;
                                        t = setTimeout(countdown, 50);
		                                }
	                                }
	                                function cdpause() {
                                        
                                        urutN = document.getElementById('urut').value;


                                    document.getElementById('Pemenang').value = document.getElementById('timespan').innerHTML;
                                    document.getElementById('Company').innerHTML = myArrs[urutN]['company'];
                                    document.getElementById('Nama').innerHTML = myArrs[urutN]['fullName'];



                                    // pauses countdown
                                    clearTimeout(t);
	                                }
                                    acak = 1;
                                    urut = 0;
                                    count = "";
                                    jumlah = <?php  echo $count; ?>;
                                    cddisplay();
                            </script>                                               

      <p class="lead fontnopeg"></p>
      <p class="lead fontdesc"></p>
      <p class="lead fontdesc"></p>

      <button type="submit" class="btn btn-lg btn-success" value="Start" id="submit" onclick="countdown()">GO</button>
        &nbsp; <button type="submit" class="btn btn-lg btn-danger" id="submit" value="Stop" onclick="cdpause()">STOP</button>

      <form action="{{ url('submit/pemenang') }}" method="POST">  
      {{ csrf_field() }}    

      <input type="hidden" name="Pemenang" class="form-control" id="Pemenang" placeholder="" value="">      
        
      <button type="submit" class="btn btn-lg btn-danger">Submit Pemenang</button>      
      </form>
      


        


    </div>
  </div>
</div>
</div>


    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>