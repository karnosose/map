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
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center">add city</h1>
            <hr>
            {!! Form::open(array('route' => 'admin.city')) !!}
            {{ Form::label('name', 'city name') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'enter city name...', 'required' )) }}
            {{ Form::label('country_id', 'country id') }}
            {{ Form::text('country_id', null, array('class' => 'form-control', 'placeholder' => '', 'required', 'id' => 'count_id' )) }}

            <div class="form-group">
                <label for="country">countries</label>
                <select name="country" id="country" class="form-control input-sm" >
                    @foreach($allcountries as $country)
                        <option value="{{$country->id}}">
                            {{ $country->title  }}
                        </option>
                    @endforeach

                </select>
            </div>
            {{ Form::submit('create', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top:20px')) }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="js/parsley.min.js"></script>
<script>
    $('#country').on('change', function (e) {

        var country_id = e.target.value;
        console.log(country_id);

        $('#count_id').val(country_id);

    });
</script>

</body>
</html>