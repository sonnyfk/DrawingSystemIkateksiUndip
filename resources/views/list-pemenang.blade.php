<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/css.css') }}">

    <title>JKTMX</title>
  </head>
  <body>


  <div class="site-wrapper">

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
    <h1 class="cover-heading fontdesc">Pemenang Doorprize</h1>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NAMA</th>
            <th scope="col">NOPEG</th>
            <th scope="col">PERUSAHAAN</th>
          </tr>
        </thead>
        <tbody>
          <?php $index = 0;?>
          @foreach($data as $subs)

          <?php dd($subs);  $index++; ?>
          <tr>
            <th scope="row">{{ $index }}</th>
            <td>{{ $subs->employeeID }}</td>
            <td>{{ $subs->fullName }}</td>
            <td>{{ $subs->company }}</td>
          </tr>
          @endforeach          
        </tbody>
      </table>
      

      </p>
    </div>

  </div>

</div>

</div>


    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>