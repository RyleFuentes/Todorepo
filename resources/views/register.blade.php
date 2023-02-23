<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container p-5">
        <div class="container m-auto" style="width: 50%">
            <form action="{{route('register.store')}}" class="form-group" method="post">
                <h1 class="text-center">Register</h1>
                @csrf
                <div class="form-group">
                    <label for="">First Name:</label>
                    <input type="text" class="form-control" name="fname">
                </div>

                <div class="form-group">
                    <label for="">Last Name:</label>
                    <input type="text" class="form-control" name="lname">
                </div>

                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="text" class="form-control" name="password">
                </div>

                <div class="form-group text-center">

                    <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
                </div>
            </form>

           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>