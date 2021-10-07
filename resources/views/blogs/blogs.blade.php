<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ route('blog.index') }}">Blogs</a>
                <a href="{{ route('blog.create') }}">Blog from</a>
            </div>

            <table style="width:50% ;" border="1">
                <thead>
                    <tr>
                        <td>Sn</td>
                        <td>name</td>
                        <td>Image</td>
                        <td>action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aData as $key => $item)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            @if ($item->image)
                            {{$item->image}}
                            <img src="{{asset('public/storege/images/'.$item->image)}}" alt="" srcset="">
                            @endif
                        </td>
                        <td>
                            <form action="{{route('blog.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


        </div>
    </body>
</html>
