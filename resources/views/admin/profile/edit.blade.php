<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'>
        <meta http-equiv="X-UA-Compatible"
        content = "IE=edge">
        <meta name="viewport" content="width=device-width",
        "initial-scale=1">
        <title>edit</title>
    </head>
    <body>
        edit画面
         <form action="{{ action('Admin\ProfileController@edit') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
          </form>
    </body>
</html>