<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
</head>
<body>
    

<body>
    <div class="container">

<form action="{{url('update',$student->id)}}" class="pt-5" method="POST">
    @csrf

    <label for="exampleFormControlInput1" class="form-label" >Name :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$student->name}}">
    @error('name')
  
    <span class="text-danger">  {{  $message }}
    </span>
      <style>
    .name_input{
      border:2px solid red;
    }
    
      </style>
    
    @enderror
    <br>
    <label for="exampleFormControlInput1" class="form-label" value="{{$student->name}}" >Mobile No :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="mobile_no" value="{{$student->mobile_no}}">
    @error('mobile_no')
    <span class="text-danger">  {{  $message }}
    </span>
      <style>
    .mobile_no_input{
      border:2px solid red;
    }
      </style>
    @enderror
  <br>
    <label for="exampleFormControlInput1" class="form-label" >Password :</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="{{$student->password}}">
    @error('password')
    <span class="text-danger">  {{  $message }}
    </span>
      <style>
    .password_input{
      border:2px solid red;
    }
      </style>
    @enderror
  <br>
    <label for="exampleFormControlInput1" class="form-label">Address :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{$student->address}}">
    @error('address')
    <span class="text-danger">  {{  $message }}
    </span>
      <style>
    .address_input{
      border:2px solid red;
    }
      </style>
    @enderror
  <br>
    <label for="exampleFormControlInput1" class="form-label">Class :</label>
      <select class="form-select" name="class" aria-label="Default select example" value="">
        <option selected value="{{$student->class}}"> {{$student->class}} </option>
        <option value="Six">Six</option>
        <option value="Seven">Seven</option>
        <option value="Eight">Eight</option>
        <option value="Nine">Nine</option>
        <option value="Ten">Ten</option>
      </select>
      @error('class')
      <span class="text-danger">  {{  $message }}
      </span>
        <style>
      .class_input{
        border:2px solid red;
      }
        </style>
      @enderror
    <br>
    <br>
   <input type="submit" class="form-control text-center bg-primary rounded  text-light border-0 fs-5" id="exampleFormControlInput1" value="Update">
    </form>
</div>
{{-- <script src="js/bootstrap.min.js"></script> --}}
</body>
</html>