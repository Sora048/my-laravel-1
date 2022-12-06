<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title !== "" ? $title : 'Student System'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .logout {
            border: none;
            outline: none;
            background: none;
        }

        body {
            background-color: #5f5a5a;
        }
        
        header {
            text-align: center;
            padding: 1.5em;
        }

        header a {
            text-decoration: none;
        }

        header a h1 {
            font-weight: 700;
            color: #ffffff;
        }

        .navbar {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding: .5em;
        }

        a {
            text-decoration: none;
        }

        main {
            max-width: 430px;
            background-color: #ffffff;
            border-radius: 6px;

            /* x y blur -blur/+blur */
            box-shadow: 5px 5px 50px -5px;
            padding: 1.5em;
            margin: 0 auto;
        }

        main section {
            margin: 0 1em;
        }

        main section p {
            color: #808080;
            font-size: 12px;
        }

        .form-create {
            width: 100%;
        }

        .form-bg {
            width: 100%;
            border-radius: 5px;
            background-color: #cdcdcd;
            margin-bottom: 1.5em;
        }

        .error-message {
            color: #ff0000;
            padding: 5px;
        }

        .form-input {
            border-bottom: 2px #111 solid;
            padding: 1em 1em 0 1em;
            border-radius: 5px;
        }

        input::placeholder {
            font-style: italic;
        }

        input {
            border: none;
            outline: none;
            background-color: #cdcdcd;
            width: 100%;
        }

        main button {
            background: #800080;
            text-align: center;
            padding: .5em;
            border-radius: 5px;
            width: 100%;
            box-shadow: 1px 1px;
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
        }
        main button:hover{
            opacity: .75;
        }

        .table-section {
            max-width: 555px;
            margin: 0 auto;
            overflow:visible;
            position: relative;
        }

        table {
            width: 100%;
            font-size: .8rem;
        }
        
        thead {
            text-transform: uppercase;
        }

        .view_list {
            font-size: 10px;
            text-transform: uppercase;
        }
        .view_list:hover {
            opacity: .75;
        }
        
        .warning {
            background-color: red;
        }

        @media (min-width: 700px) {

        }
    </style>
</head>
<body>
    
