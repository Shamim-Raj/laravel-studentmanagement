
<x-app-layout> 
    <div class="container">
    <table class="table-bordered border-primary">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Mobile_No</th>
              <th scope="col">Password</th>
              <th scope="col">Address</th>
              <th scope="col">Class</th>
              <th scope="col">Status</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($students as $student )
             <tr>
                <td>{{$student->id ?? ""}}</td>
                <td>{{$student->name ?? ""}}</td>
                <td>{{$student->mobile_no ?? ""}}</td>
                <td>{{$student->password ?? ""}}</td>
                <td>{{$student->address ?? ""}}</td>
                <td>{{$student->class ?? ""}}</td>
                <td>{{$student->status ?? ""}}</td>
                <td><a href="{{url('edit', $student->id)}}"> <button class="bg-success">Edit</button></a></td>
                <td><a href="{{url('delete', $student->id)}}"> <button class="bg-danger">Delete</button></a></td>

             </tr>
          @endforeach
          </tbody>
    </table>
    <div class="button py-5" style="margin-left:44%;">
    <a href="{{url('admission')}}"> <button class="bg-primary">Add</button>
    </div>
</div>
</x-app-layout>