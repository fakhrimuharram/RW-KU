<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href="css/login.css" rel="stylesheet" >
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title> Admin RWku </title>

<div class="sidenav">
         <div class="login-main-text">
		 
            <h2>RW-ku<br> Admin portal</h2>
            <p>Login dahulu agar dapat mengakses.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
			<div class="logo">
			<img src="{{URL::asset('/img/vote.png')}}" alt="profile Pic" height="200" width="270">
			</div>
			<br><br>
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
				  

				<div class="text-center">
                  <button type="submit" class="btn btn-black">Login</button>
                 </div>
               </form>
            </div>
         </div>
      </div>