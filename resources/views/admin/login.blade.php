<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href={{asset("assets/dist/css/main.css")}}>
   </head>
   <body>
      <section class="login-section" style="background-image: url('{{asset('assets/dist/img/login-bg.jpg')}}');">
         <div class="container">
            <div class="row">
               <div class="col-md-5 m-auto">
                  <form action="{{route('login-user')}}" class="form-wrapper" method="post">
                      @csrf
                     <div class="outer-logo">
                        <div class="logo">Super Admin</div>
                     </div>
                     <div class="form-group">
                        <input type="text" placeholder="Username" name="username" class="form-control" value="{{old('username')}}">
                        @error('username') <span class="bg-danger text-white mt-2 d-block rounded pl-2 pt-1 pb-1"> {{$message}}  </span> @enderror
                     </div>
                     <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control" value="{{old('password')}}">
                        @error('password') <span class="bg-danger text-white mt-2 d-block rounded pl-2 pt-1 pb-1"> {{$message}}  </span> @enderror
                     </div>
                     <button type="submit" name="signin" class="btn btn-primary d-block login-btn">Login</button>
                     @if (Session::has('success'))
                         <div class="alert alert-success">{{Session::get('success')}}</div>
                     @endif
                     @if (Session::has('fail'))
                         <div class="alert alert-danger mt-3">{{Session::get('fail')}}</div>
                     @endif
                  </form>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>