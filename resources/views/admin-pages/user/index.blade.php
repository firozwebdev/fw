@extends('layout.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-weight:bold">
                    
                    Users List
                    
                    
                   
                
                </div>
                

                <div class="card-body">
                    
                    <table id="userLoadData" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                              
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        
                    </table>
                 
                  
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
@section('scripts')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script>
    $(function() {
               $('#userLoadData').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('getAllUserData') }}',
               columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
         });



       
 </script>

@endsection
