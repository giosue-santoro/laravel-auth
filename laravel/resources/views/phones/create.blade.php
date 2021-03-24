<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Create</title>
  </head>

  <body>
    @php
     $method = 'POST';
    @endphp

    <div class="container">
        <form action="{{ route('phones.store') }}" method="post">
            @csrf
            @method($method)

            <div class="form-group">
                <label for="title">brand</label>
                <input class="form-control" type="text" name="brand" placeholder="brand" value="{{ isset($phone) ? $phone->brand : ''}}">
            </div>

            <div class="form-group">
                <label for="content">price</label>
                <input class="form-control" type="text" name="price" placeholder="price" value="{{ isset($phone) ? $phone->price : ''}}">
            </div>

            <input type="submit" value="Invia">
        </form>
    </div>


  </body>
</html>
