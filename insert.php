<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="m-5">
<h1>enviar imagenes</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data" class="mt-5 border">
        <div class="form-group col-md-4 mt-2">
            <input type="text" name="name" class="form-control" placeholder="nombre del producto">
        </div>

         <div class="form-group col-md-4">
            <label for="">Archivo </label>
            <input type="file" class="form-control" name="file" size="20">
         </div>
         <button type="submit" class="btn btn-primary m-2">Insert Image</button>
    </form>
</body>
</html>