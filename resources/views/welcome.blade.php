 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>zip </title>
 </head>
 <body>

    <form action="{{ route('test2') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file" required>
        <button type="submit">submit</button>

    </form>

 </body>
 </html>
