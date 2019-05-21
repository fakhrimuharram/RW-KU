
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href="css/login.css" rel="stylesheet" >
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<title> Admin RWku </title>


@section('content')
<div class="sidenav">
         <div class="login-main-text">
		 
            <h2>RW-ku<br> Admin portal</h2>
            <p>Login dahulu agar dapat mengakses.</p>
            <br><br><br>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
			<div class="logo">
			<img src="{{URL::asset('/img/vote.png')}}" alt="profile Pic" height="200" width="270">
			</div>
			<br><br>
               <form method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}
                  <div class="form-group">
                     <label>Email</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
				  
                  <div class="form-group row" id="ingatsaya">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Ingat Saya
                                    </label>
                                </div>
                            </div>
                        </div>


				<div class="text-center">
                  <button type="submit" class="btn btn-black">Login</button>
                
                 </div>
               </form>
            </div>
         </div>
      </div>
 

