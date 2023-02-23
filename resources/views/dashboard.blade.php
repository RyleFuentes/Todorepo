<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

       

        
    </head>
    <body class="bg-black">
    
        <div class="container p-5 ">
            
           <div class="container  ">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
           @endif
           <h1 class="text-white">{{$user->FirstName, " "}} {{$user->Lastname}} </h1>
                <div class="container bg-info m-auto text-center p-3" style="width: 70%; border-radius: 20px">


                    <h1>Todo list</h1>

                    

                   <form method="post" action="{{ route('todo_insert') }}" class="form-group text-center ">
                    @csrf
                       <label for="list-item" class="form-group">New Todo</label>
                       <input type="text" name="listItem" class="form-control m-auto" style="width: 70%">
                       <button type="submit" class="btn btn-outline-light mt-3">SUBMIT</button>
                   </form>


                   <!-- You have to add @csrf to every form to make it work -->
                   @foreach ($user as $data)
                   <div class="container-fluid justify-content-center p-3" style="">
                       <p>Item: {{$data->content}} </p>

                       <form action="{{ route('delete', $data->list_id) }}" method="post">
                        @csrf
                    
                        <button type="submit" class="btn btn-success " style="margin-left: 10px">Done</button>
                        
                        </form>

                   </div>
                    @endforeach
                </div>

           </div>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
