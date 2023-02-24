<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <title>Laravel</title>
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">


        
    </head>
    <body class="bg-white">
        <nav class="nav">
            <h1 class="text-black mb-3">{{$user->fname, " "}} {{$user->lname}} </h1>
           </nav>

           <a href="{{route('logout')}}" class="nav-link">Logout</a>
        <div class="container ">
            
           <div class="container  ">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
           @endif
           
          
                <div class="container bg-info m-auto text-center p-3" style="width: 70%; border-radius: 20px">


                    <h1>Todo list</h1>

                    

                   <form method="post" action="{{ route('todo_insert') }}" class="form-group text-center ">
                    @csrf
                       <label for="list-item" class="form-group">New Todo</label>
                       <input type="text" name="listItem" class="form-control m-auto" style="width: 70%">
                       <button type="submit" class="btn btn-outline-light mt-3">SUBMIT</button>
                   </form>

                   @foreach ($fetch as $data)
                    <div class="container " style="">
                            <div class="row">
                                <span class="alert alert-success text-start">{{$data->content}} </span>
                                
                            </div>
                            <div class="row">
                                <a href="{{route('delete', $data->list_id)}}"><i class="bi bi-trash3"></i></a>
                            </div>
                            
                    </div>
                    
                   @endforeach
                
                
           </div>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
