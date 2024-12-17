@extends('layouts.default')
@section("title","Register")
@section("content")
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

            @if(session()->has("success"))
            <div class="alert alert-success">
                {{session()->get("success")}}
            </div>
            @endif

            @if(session()->has("error"))
            <div class="alert alert-success">
                {{session()->get("error")}}
            </div>
            @endif


            <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card" style="border: 2px solid #333333; ">
            <h3 class ="card-header text-center">Register</h3>
        <form method="POST" action="{{route('register.post')}}" style=" background-color: #ADD8E6;   padding: 20px;
            border-radius: 5px;">  
        @csrf  
    
          <div class="form-group mb-3">      
              <label> Name:</label><br/> 
              <input type="text" class="form-control" name="name" > 
               @if($errors->has('name'))
              <span class="text-danger">
                {{$errors->first('name')}}
              </span>
              @endif
          </div>  
        <div class="form-group mb-3">      
        <label>Email:</label><br/> 
              <input type="email" class="form-control" name="email"/>
              @if($errors->has('email'))
              <span class="text-danger">
                {{$errors->first('email')}}
              </span>
              @endif 
          </div>  
        <div class="form-group">      
              <label>Password:</label><br/>
              <input type="password" class="form-control" name="password"/>
              @if($errors->has('password'))
              <span class="text-danger">
                {{$errors->first('password')}}
              </span>
              @endif
          </div>  
<div class="form-group">      
              <label>Qualifications:</label><br/>
              <input type="text" class="form-control" name="qualifications"/>
              @if($errors->has('qualifications'))
              <span class="text-danger">
                {{$errors->first('qualifications')}}
              </span>
              @endif
          </div>  
<br/>  
<button type="submit"  class="btn-btn" >Register</button> 
</form>  
</div> 
</div>
</div>


@endsection