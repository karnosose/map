<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>map</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <h1>countries and cities</h1>
    <div class="col-lg-4">
        {!! Form::open(array('url' =>'', 'files' =>true)) !!}

        <div class="form-group">
            <label for="country">countries</label>
            <select name="country" id="country" class="form-control input-sm">
                @foreach($countries as $country)
                    <option value="{{$country->id}}">
                        {{ $country->title  }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">cities</label>
            <select name="city" id="city" class="form-control input-sm">

            </select>
        </div>

        {!! Form::close() !!}
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
</script>
<script>
    $('#country').on('change', function (e) {

        var count_id = e.target.value;
        $.get('/ajax-city?count_id=' + count_id, function (data) {
            $('#city').empty();
            $.each(data, function (index, value) {
                $('#city').append('<option value=' + value.id + '>' + value.name + '</option>');
            });
        });
    });
</script>
</body>
</html>