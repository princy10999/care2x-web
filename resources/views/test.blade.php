<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @charset "UTF-8";

        body {
            display: flex;
            align-items: center;
            font-family: 'Jost', sans-serif;
            font-weight: 400;
            justify-content: center;
            margin: 0;
            padding: 12vh 100px;
            font-weight: 300;
            color: #333;
        }

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 700;
}

         * {
            box-sizing: border-box;
        }

        .timeline {
            width: 100%;
            background: #fff;
            padding: 100px 50px;
            position: relative;
        }

        .timeline:before {
            content: "";
            position: absolute;
            left: calc(33% + 15px);
            top: 25%;
            bottom: 46%;
            width: 4px;
            background: #ddd;
        }

        /* .timeline:after {
            content: "";
            display: table;
            clear: both;
        } */

        .entry {
            clear: both;
            text-align: left;
            position: relative;
        }

        .entry .title {
            margin-bottom: 0.5em;
            float: left;
            width: 33%;
            padding-right: 30px;
            text-align: right;
            position: relative;
        }

        .title:before {
            content: "";
            position: absolute;
            width: 8px;
            height: 8px;
            border: 4px solid salmon;
            background-color: #fff;
            border-radius: 100%;
            top: 15%;
            right: -8px;
            z-index: 99;
        }


        .ot_pera {
            color: rgba(8, 50, 96, 0.5);
            font-size: 15px;
            font-weight: 400;
        }

        .ot_head {
            color: #083260;
            font-size: 15px;
            font-weight: 700;
        }

        .entry .body {
            margin: 0 0 3em;
            float: right;
            width: 66%;
            padding-left: 30px;
        }

        p:first-child {
            margin-top: 0;
        }


        .tl_pera {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="timeline">
        <div class="entry">
            <div class="title">
                <p class="tl_pera">06:10</p>
            </div>
            <div class="body">
                <p class="ot_head">Ready for Delivery</p>
                <p class="ot_pera">Your order is ready to deliver.</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <p class="tl_pera">11:30</p>
            </div>
            <div class="body">
                <p class="ot_head">Delivered</p>
               <p class="ot_pera">Your order is delivered</p>
            </div>
        </div>


        {{-- <div class="entry">
            <div class="title">
                <h3>2009 - 2010</h3>
                <p>Title, Company</p>
            </div>
            <div class="body">
                <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>
                <ul>
                    <li>Rerum sit libero possimus amet excepturi</li>
                    <li>Exercitationem enim dolores sunt praesentium dolorum praesentium</li>
                    <li>Modi aut dolores dignissimos sequi sit ut aliquid molestias deserunt illo</li>
                </ul>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>2006 - 2008</h3>
                <p>Title, Company</p>
            </div>
            <div class="body">
                <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>
                <ul>
                    <li>Rerum sit libero possimus amet excepturi</li>
                    <li>Exercitationem enim dolores sunt praesentium dolorum praesentium</li>
                    <li>Modi aut dolores dignissimos sequi sit ut aliquid molestias deserunt illo</li>
                </ul>
            </div>
        </div> --}}

    </div>
</body>

</html>
