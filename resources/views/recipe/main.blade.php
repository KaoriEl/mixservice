@extends('layouts.main')
@section('content')
    <div class="container">
        @section('custom_js')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script>
                function CBR_XML_Daily_Ru(rates) {
                    function trend(current, previous) {
                        if (current > previous) return ' ▲';
                        if (current < previous) return ' ▼';
                        return '';
                    }
                    var USDrate = rates.Valute.USD.Value.toFixed(4).replace('.', ',');
                    var USD = document.getElementById('USD');
                    USD.innerHTML = USD.innerHTML.replace('00,0000', USDrate);
                    USD.innerHTML += trend(rates.Valute.USD.Value, rates.Valute.USD.Previous);

                    var EURrate = rates.Valute.EUR.Value.toFixed(4).replace('.', ',');
                    var EUR = document.getElementById('EUR');
                    EUR.innerHTML = EUR.innerHTML.replace('00,0000', EURrate);
                    EUR.innerHTML += trend(rates.Valute.EUR.Value, rates.Valute.EUR.Previous);

                    var HKDRrate = rates.Valute.HKD.Value.toFixed(4).replace('.', ',');
                    var HKD = document.getElementById('HKD');
                    HKD.innerHTML = HKD.innerHTML.replace('00,0000', HKDRrate);
                    HKD.innerHTML += trend(rates.Valute.HKD.Value, rates.Valute.HKD.Previous);

                    var DKKRrate = rates.Valute.DKK.Value.toFixed(4).replace('.', ',');
                    var DKK = document.getElementById('DKK');
                    DKK.innerHTML = DKK.innerHTML.replace('00,0000', DKKRrate);
                    DKK.innerHTML += trend(rates.Valute.DKK.Value, rates.Valute.DKK.Previous);

                    var INRRrate = rates.Valute.INR.Value.toFixed(4).replace('.', ',');
                    var INR = document.getElementById('INR');
                    INR.innerHTML = INR.innerHTML.replace('00,0000', INRRrate);
                    INR.innerHTML += trend(rates.Valute.INR.Value, rates.Valute.INR.Previous);

                    var KGSRrate = rates.Valute.KGS.Value.toFixed(4).replace('.', ',');
                    var KGS = document.getElementById('KGS');
                    KGS.innerHTML = KGS.innerHTML.replace('00,0000', KGSRrate);
                    KGS.innerHTML += trend(rates.Valute.KGS.Value, rates.Valute.KGS.Previous);

                    var TMTRrate = rates.Valute.TMT.Value.toFixed(4).replace('.', ',');
                    var TMT = document.getElementById('TMT');
                    TMT.innerHTML = TMT.innerHTML.replace('00,0000', TMTRrate);
                    TMT.innerHTML += trend(rates.Valute.TMT.Value, rates.Valute.TMT.Previous);

                    var CZKRrate = rates.Valute.CZK.Value.toFixed(4).replace('.', ',');
                    var CZK = document.getElementById('CZK');
                    CZK.innerHTML = CZK.innerHTML.replace('00,0000', CZKRrate);
                    CZK.innerHTML += trend(rates.Valute.CZK.Value, rates.Valute.CZK.Previous);
                }
                </script>
            <link rel="dns-prefetch" href="https://www.cbr-xml-daily.ru/" />
            <script src="//www.cbr-xml-daily.ru/daily_jsonp.js" async></script>
        @endsection

            <div id="USD"><h3>Доллар США $ — 00,0000 руб.</h3></div>
            <div id="EUR"><h3>Евро € — 00,0000 руб.</h3></div>
            <div id="HKD"><h3>Гонконгский доллар  — 00,0000 руб.</h3></div>
            <div id="DKK"><h3>Датская крона  — 00,0000 руб.</h3></div>
            <div id="INR"><h3>Индийская рупия  — 00,0000 руб.</h3></div>
            <div id="KGS"><h3>Киргизский сом  — 00,0000 руб.</h3></div>
            <div id="TMT"><h3>Туркменский манат  — 00,0000 руб.</h3></div>
            <div id="CZK"><h3>Чешская крона  — 00,0000 руб.</h3></div>

@endsection
