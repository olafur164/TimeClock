<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/styles/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/styles/main.css">
</head>
<body>

    <div class="wrapper">

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <div class="container">
                    <?php echo Session::get('success') ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(Session::has('danger')): ?>
                <div class="alert alert-danger" role="alert">
                    <div class="container">
                    <?php echo Session::get('danger') ?>
                    </div>
                </div>
            <?php endif; ?>

                @if (count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <div class="container">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                </div>
                @endif
        <div class="clock">
            <div id="Date"></div>
          <ul class="dateandtime">
              <li id="hours"></li>
              <li id="point">:</li>
              <li id="min"></li>
              <li id="point">:</li>
              <li id="sec"></li>
          </ul>
        </div>
        <ul>
            <li class="inserted">Number:</li>
            <li class="number"></li>
        </ul>
        <div class="time-clock compact">
            <div class="stampIn">
                <ol>
                    <li class="digits">
                        <p><strong>1</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>2</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>3</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>4</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>5</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>6</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>7</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>8</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>9</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong>0</strong></p>
                    </li>
                    <li class="digits">
                        <p><strong><i class="fa fa-refresh"></i></strong><sub>Hreinsa</sub></p>
                    </li>
                    <li class="digits">
                        <p><strong><i class="fa fa-remove"></i></strong><sub>Stroka út</sub></p>
                    </li>
                    <form action="" method="POST" role="form">
                        <input type="hidden" name="userlogin" id="login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="button">
                        <li class="digits-log">
                            <p><strong><i class="fa fa-sign-in"></i></strong><sub>Skrásetja</sub></p>
                        </li>
                        </button>
                    </form>
                </ol>
            </div>
        </div>
        <div class="panel">
            <!--
            <div class="list user-log">
                <label for="">Innskráning/Útskráning</label>
                <hr>
                <button class="btn btn-default">Innskráning</button>
                <button class="btn btn-default">Útskráning</button>
            </div>
            <hr>
            !-->
            <div class="list user-actions">
                <label for="">Starfsmenn</label>
                <hr>
                <a href="#TimeRecord"><button class="btn btn-default">Sjá tímaskráningu</button></a>
                <a href="#WeekPlan"><button class="btn btn-default">Sjá vikuplan</button></a>
                <a href="#PutOnTab"><button class="btn btn-default">Skrifa á mig gos</button></a>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="assets/scripts/clock.js"></script>
    <script src="assets/scripts/stampIn.js"></script>
    <script>
    setTimeout(fade_out, 3000);

    function fade_out() {
      $(".alert").fadeOut().empty();
    }
    </script>
</body>
</html>