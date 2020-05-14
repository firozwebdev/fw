@extends('layout.admin')

@section('content')

<div class="container" style="padding-top:50px;">
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">{{ $contact->first_name .' '.$contact->last_name}} 's Message Details</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" value="{{ $contact->first_name .' '.$contact->last_name}} ">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" value="{{ $contact->email }}">
              </div>
              <div class="form-group">
                <label for="">Country</label>
                <input type="text" class="form-control" id="" value="{{ $contact->country }}">
              </div>
              <?php
                  $servicesData = json_decode($contact->services);
                  

                  $services = '';
                  foreach ($servicesData as $service) { 
                      if ($services) $services .= ', ';
                      $services .= $service; 
                  }
                 
                 
              ?>
              

              <div class="form-group">
                <label for="">Services</label>
                
                <input type="text" class="form-control" id="" value="{{ $services }}">
              </div>
              <div class="form-group">
                <label for="">Details</label>
                <textarea class="form-control" cols="30" rows="10">{{ $contact->message }}</textarea>
              </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
             
              <a  class="btn btn-primary" href="{{ route('contacts.index') }}">Back</a>
            </div>
          </form>
        </div>
</div>
@endsection