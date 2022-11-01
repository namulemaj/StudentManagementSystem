<!DOCTYPE html>
<html lang="en">
<head>
  <title>StudentManagement System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Bugema new Course</h1>
  <div class="float-right mr-5">
    <a href-'' class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Course></a>
  </div>
</div>
  
<div class="container-fluid">

    <div class="row">

    @include('sidebar')
    <div class="col-10">
    
    <table class="table" id='myTable'>
        
    <thead>
          <tr>
              <td>Course_Code</td>
              <td>Course_Name</td>
              <td>Teacher_Name</td>
              <td>Credit_Hours</td>
              <td>Teaching_Day</td>

              <td>Edit</td>
              <td>Delete</td>

            </tr>

     </thead>
      <tbody>

        @foreach($courses as $c )
        <tr>
              <td>{{$c->Course_Code}}</td>
              <td>{{$c->Course_Name}}</td>
              <td>{{$c->Teacher_Name}}</td>
              <td>{{$c->Credit_Hours}}</td>
              <td>{{$c->Teaching_Day}}</td>
              <td>
              <a href="javascript:void(0)" class='btn btn-warning showEditModal'>Edit</a></td>

                                <td>
            <form action="course/{{$c->Course_Code}}" method='POST'>

             @method('DELETE')
             @csrf
               <button class="btn btn-danger">Delete</button>
           </form>
                                </td>
               
        </tr>
        @endforeach
      </tbody>
 </table>
        </div>
    </div>
 
</div>





<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Course</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    
            <form action="" method='POST' Course_Code='form'>
            @csrf
             <div class="form-group">
                <l<div class="form-group">
                <label for="">Course_Name</label>
                <input type="text" class="form-control" name='Course_Name' Course_Code='Course_Name'></input>
             </div>
             <div class="form-group">
             <label for="">Teacher_Name</label>
                <input type="text" class="form-control" name='Teacher_Name' Course_Code='Teacher_Name'></input>
             </div>
             <div class="form-group">
                <label for="">Credit_Hours</label>
                <input type="text" class="form-control" name='Credit_Hours' Course_Code='Credit_Hours'></input>
             </div>
             <div class="form-group">
                <label for="">Teaching_Day</label>
                <input type="text" class="form-control" name='Teaching_Day' Course_Code='Teaching_Day'></input>
             </div>


             <div class="form-group">
    
                <input type="submit" class="form-control btn btn-success"  id='Submit' value="Add course" class="btn btn-success"></input>
             </div>

            </form>

      </div>
    </div>
  </div>
</div>


<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );


    $('.showEditModal').click(function(e){

        Teaching_Day = e.target.parentElement.previousElementSibling.innerText
        Credit_Hours = e.target.parentElement.previousElementSibling.previousElementSibling.innerText
        Teacher_Name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        Course_Name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        Course_Code = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText


$('#Course_Name').val(Course_Name);
$('#Credit_Hours').val(Credit_Hours);
$('#Teacher_Name').val(Teacher_Name);
$('#Teaching_Day').val(Teaching_Day);
$('#submit').val("Edit Course");
$('.modal-title').text('Edit Course')
$('form').attr('action','course/'+id)
$('form').append('<input type="hidden" name="_method" value="PUT">')
        $('#myModal').modal('show');
    })
</script>

</body>
</html>
