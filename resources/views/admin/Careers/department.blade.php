@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add List </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/department/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12 form-group">
                        <label>Department Name</label>
                        <input class="form-control" type="text" name="department_name" required>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-default" >Clear</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
{{-- Edit Company Modal --}}
<div class="modal fade" class="editbtn"id="editbtn" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Department Name </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12 form-group">
                        <label>Department Name</label>

                        <input class="form-control name"  type="text" name="department_name">
                            <input type="hidden" name="id" class="cId">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Department List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New Dapartment
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Dapartment Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                                @foreach ($department as $d)
                            <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->department_name}}</td>
                                <td>

                                 <button onclick='edit({{$d->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit" class="btn btn-success" ><i class="fa fa-pencil font-14"></i></button>

                                   <button onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" title="Delete"><a href="{{ url('/department/delete/'.$d->id) }}"> <span><i class="fa fa-trash font-14"></i></span></a></button>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
        </div>

</div>

<script>
        function edit(id) {
            var x =id;

            $.ajax({
                type:'GET',
                url:"{{url('/company-info')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.name').val(response.company_name);
                    $('.cId').val(response.id);
                    $('.mobile').val(response.company_mobile);
                    $('.emailAddress').val(response.company_email);
                    $('.website').val(response.company_website);
                    $('.address').val(response.company_address);
                    $('.vat').val(response.company_vat);
                    $('.vat').val(response.company_vat);

                },
                error:function(xhr,status,error){
                    console.log(error);

                }

          });
        }


    $(document).ready(function(){


    });

    </script>


@endsection
