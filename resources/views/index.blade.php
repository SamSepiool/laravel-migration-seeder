<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;

            }
           

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                margin-bottom: 30px;
            }

            span{
                font-size: 18px;
            }

            .trip li{
                border: 1px solid lightblue;
                list-style: none;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            

            

           
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    TRIPS
                    
                </div>

                    @foreach ($trips as $trip)
                      <ul class="trip">
                        <li><h2>TRIP:{{$trip['id']}}</h2></li>
                        <li>
                            <span>DESTINATION==> </span> 
                            {{$trip['destination']}}
                        </li>
                        <li>
                            <span>DURATION==> </span> 
                            {{$trip['duration_days']}}
                        </li>
                        <li>
                            <span>DEPARTURE==> </span> 
                            {{$trip['departure_date']}}
                        </li>
                        <li>
                            <span>RETURN==> </span> 
                            {{$trip['return_date']}}
                        </li>
                        <li>
                            <span>AIRLINE==> </span> 
                            {{$trip['airline']}}
                        </li>
                        <li>
                            <span>FLIGHT-PRICE==> </span> 
                            {{$trip['flight_price']}} €
                        </li>
                        <li>
                            <span>HOTEL==> </span> 
                            {{$trip['hotel']}}
                        </li>
                        <li>
                            <span>HOTEL-PRICE==> </span> 
                            {{$trip['hotel_price']}} €
                        </li>
                        <li>
                            <span>TOTAL-PRICE==> </span> 
                            {{$trip['total_price']}} €
                        </li>
                      </ul>
                    @endforeach
       
               
            </div>
        </div>
    </body>
</html>
