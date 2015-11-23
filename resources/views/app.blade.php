<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('custom-header')

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/styles/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/styles/main.css">
    </head>
    <body>

            <?php if(Session::exists('success')): ?>
                <div class="alert alert-success" role="alert">
                    <div class="container">
                    <?php echo Session::flash('success') ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(Session::exists('danger')): ?>
                <div class="alert alert-danger" role="alert">
                    <div class="container">
                    <?php echo Session::flash('danger') ?>
                    </div>
                </div>
            <?php endif; ?>
        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @yield('footer')
    </body>
</html>
