<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <div class="container">
<form action="{{url('store')}}" class="pt-5" method="POST">
    @csrf

    <label for="exampleFormControlInput1" class="form-label" >Name :</label>
    <input type="text" class="form-control name_input" id="exampleFormControlInput1" name="name" value="{{old('name')}}" >


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

    <label for="exampleFormControlInput1" class="form-label" >Mobile No :</label>
    <input type="text" class="form-control mobile_no_input" id="exampleFormControlInput1" name="mobile_no" value="{{ old('mobile_no') }}">
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
    <input type="password" class="form-control password_input" id="exampleFormControlInput1" name="password"  >
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
    <input type="text" class="form-control address_input" id="exampleFormControlInput1" name="address" value="{{old('address')}}" >
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
      <select class="form-select class_input" name="class" aria-label="Default select example" value="{{old('class')}}">
        <option selected disabled >-----Select Class------</option>
        <option value="Six" {{(old('class') ?? "")=="Six" ? "selected":""}}>Six</option>
        <option value="Seven" {{(old('class') ?? "")=="Seven" ? "selected":""}}>Seven</option>
        <option value="Eight" {{(old('class') ?? "")=="Eight" ? "selected":""}}>Eight</option>
        <option value="Nine" {{(old('class') ?? "")=="Nine" ? "selected":""}}>Nine</option>
        <option value="Ten" {{(old('class') ?? "")=="Ten" ? "selected":""}}>Ten</option>
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
   <input type="submit" class="form-control text-center bg-primary rounded  text-light border-0 fs-5" id="exampleFormControlInput1" value="Submit">
    </form>
</div>
{{-- <script src="js/bootstrap.min.js"></script> --}}
</body>
</html>