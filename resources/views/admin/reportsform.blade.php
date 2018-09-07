@extends('layouts.adminLayout.admin_design');
@section('content')
<div id="content">
    <section class="container">
        <div="col-md-12">
            <h3 align ="center">Case Report</h3>
             {!! Form::open(['action'=>'','method'=>POST]) !!}
             <div class="form-group">
               {{ Form::label('title', 'Title')}}
               {{ Form::text('title','',['class'=> 'form-control','placeholder'=>'']) }}


            

        
        {{-- <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Case Number:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <text area for="IDno">Case Description:</label>
              <input type="text" class="form-control" name="idno">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Phone Number:</label>
              <input type="integer" class="form-control" name="number">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Casedsptn">Case Description:</label>
                <input type="text" class="form-control" name="casedscription">
              </div>
            </div>
        <div class="row">s
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
    </script> --}}



@end section
