<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi - Contacts</title>
    <style>
        header{
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            width: 100%;
            height: 10vh;
        }
        .navbar{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80%;
            width: 100%;
        }
        ul{
            height: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            width: 40%;
            list-style: none;
        }
        li{
            width: calc(100% / 4);
            text-align: center;
            box-shadow:
                0 10px 20px rgba(0,0,0,0.19), 
                0 6px 6px rgba(0,0,0,0.23);
            padding: 10px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: green;
            font-size: 16px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <ul>
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('info')}}">Info</a>
                </li>
                <li>
                    <a href="{{route('prices')}}">Prices</a>
                </li>
                <li>
                    <a href="{{route('contacts')}}">Contacts</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <h1>Contacts</h1>
    </main>
</body>
</html>