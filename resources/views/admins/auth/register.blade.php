<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    {{-- link bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <h1>register</h1>
        <form action="#" method="post">
            @csrf
            <div>
                <label for="nama">nama</label>
                <input class="form-control" type="text" name="nama" />
            </div>
            <div>
                <label for="email">email</label>
                <input class="form-control" type="text" name="email" />
            </div>
            <div>
                <label for="alamat">alamat</label>
                <textarea class="form-control" name="alamat" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="password">password</label>
                <input class="form-control" type="password" name="password" />
            </div>
            <button class="btn btn-primary mt-3" type="submit">
                register
            </button>
            <a href="/login">login</a>
        </form>
    </div>
</body>

</html>