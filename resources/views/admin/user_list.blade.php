<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartingly - Subscribers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
            border-radius: 2px;
            color: #000000;
            font-weight: 600;
            font-size: 14px;
        }
        * {
            border-radius: 2px !important;
        }
    </style>
</head>
<body>


<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="display-4">Subscribers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID.</th>
                    <th>Email</th>
                    <th>Subscribed at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subscribers as $subscriber)
                <tr>
                    <td>{{$subscriber->id}}.</td>
                    <td>{{$subscriber->email}}</td>
                    <td>{{date('F j Y', strtotime($subscriber->created_at))}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
