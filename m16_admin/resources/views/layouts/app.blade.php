{{--// resources/views/layouts/app.blade.php--}}

<!DOCTYPE html>
<html>

<head>
    <title>M16 Admin Page</title>
    <meta name="description" content="M16 Admin Page">

    <!-- Bootstrap CSS -->
    {{--<link rel="stylesheet" href="../resources/assets/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" />--}}
    {{--<link rel="stylesheet" href="../resources/assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" />--}}

    <!-- Bootstrap JS -->
    {{--<script type="text/javascript" src="../resources/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js" />--}}


            <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>