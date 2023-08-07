<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS-activate</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Ваш баланс: {{ $balances[1] }}</h1> <br>

    <form id="number-form" action="/get-number" method="post">
        <input name="country" type="text" value="">
        <input name="service" type="text" value="">
        <button type="submit">КУПИТЬ НОМЕР</button>
    </form>  
    {{-- <a href="/get-number">КУПИТЬ ИНСТ НОМЕР</a> --}}
    @if(session('message'))
    <h1>{{"Ваш номер:".session('message')}}</h1>
        <ul>
        </ul>
    @else
        <div>Номер не куплен</div>
    @endif
    <div></div>

    <div class="table" id="country">
        <h1>Выберите страну</h1>
        <table>
            <thead>
                <tr>
                    <th style="width: 20%" >Номер страны</th>
                    <th style="text-align: left;" >Название</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                <tr>
                    <th style="width: 20%">{{ $country['id']  }}</th>
                    <td style="text-align: left;"><p> {{ $country['rus']  }}</p></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="table">
           <h1>Страна Россиия</h1>

            @foreach ($services as $key => $servis )
            <tr>
                <th style="width: 20%">Кл-во номеров {{$key}}:   {{ $servis }}</th> <br>
            </tr>
            @endforeach
        </div>
    </div>
</body>
</html>