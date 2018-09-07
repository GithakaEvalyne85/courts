<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel plaints  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
   {{--  @if(\Session::has('success'))
  <div class="alert alert-success">
      <p>{{ \Session::get('success')}}</p>
  </div> 
  @endif  --}}
  <body>
    <div class="container">
     <center> <h2>Plaints Form</h2></center>
      <br/>
      <form method="post" action="{{ route('plaints')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">FullName:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>

        {{--  <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">La:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>  --}}
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="IDno">ID Number:</label>
              <input type="text" class="form-control" name="idno">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Telno">TelNumber </label>
              <input type="text" class="form-control" name="telno">
            </div>
          </div>
        <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Acc_name">Accused FullName:</label>
                <input type="text" class="form-control" name="acc_name">
              </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label for="Acc_residence">Accused Residence:</label>
                    <input type="text" class="form-control" name="acc_residence">
                  </div>
                </div>
              
                    <div class="row">
                        <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Casedescription">Case Description:</label>
                            <input type="text" class="form-control" name="casedescription">
                          </div>
                        </div>
                        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="filename">    
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Date : </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="date">   
         </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Case Type</lable>
                <select name="casetype">
                  <option value="Criminal">Criminal</option>
                  <option value="Civil">Civil</option>
                  <option value="Land">Land</option>  
                  {{--  <option value="Bangalore">Bangalore</option>    --}}
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>
