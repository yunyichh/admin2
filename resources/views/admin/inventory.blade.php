<head>
    <style>
        /*html, body {*/
            /*background-color: #fff;*/
            /*color: #636b6f;*/
            /*font-family: 'Nunito', sans-serif;*/
            /*font-weight: 200;*/
            /*height: 100vh;*/
            /*margin: 0;*/
        /*}*/

        .full-page ul {
            width: 100%;
        }

        .full-page li {
            list-style: none;
            float: left;
        }

    </style>
</head>

<div class="full-page">
    <ul>
        <li>
            <button><a href="{{ $refresh_href }}">{{ $refresh }}</a></button>
        </li>
        <li>
            <button><a href="{{ $conf_step_href }}">{{ $conf_step }}</a></button>
        </li>
        <li>
            <button><a href="{{$conf_jackpot_href }}">{{ $conf_jackpot }}</a></button>
        </li>
        <li>
            <button><a href="{{ $conf_inventory_href }}">{{ $conf_inventory }}</a></button>
        </li>
        <li>
            <button><a href="{{ $conf_inventory2_href }}">{{ $conf_inventory2 }}</a></button>
        </li>
    </ul>
</div>


