<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>QR Code</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="css/app.css">

    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <h1>QR CODE</h1>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Data</h5>
                            <form action="{{ route('frontend.qrcode.create') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Text</label>
                                    <textarea name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" placeholder="Input Text" required>{{ old('text', $text) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Process</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="visible-print text-center">
                                <div class="col-12">
                                    {!! QrCode::encoding('UTF-8')->size(300)->generate($text); !!}
                                    <p>Scan me to return to the original page.</p>
                                </div>
                                <a href="" class="btn btn-primary pull-right">Print</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
