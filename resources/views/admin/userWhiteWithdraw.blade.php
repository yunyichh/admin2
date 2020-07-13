
<head>
    <meta charset="UTF-8">
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
        <form method="post" action="{{ $shold_url }}">
            {{ $text_lable }}
            <input type="text" name="threshold">
            <input type="submit" value="{{ $text_submit }}">
        </form>
    </ul>
</div>


