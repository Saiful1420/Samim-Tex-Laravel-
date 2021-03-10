@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Requirements </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/careers/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
{{--
                    <div class="col-sm-12 form-group">
                        <label for="departmnent">Department</label>
                    <select class="form-control"  name="department_name">
                       @foreach ($department as $d)
                        <option value="{{$d->id}}">{{$d->department_name}}</option>
                       @endforeach
                        </select>
                    </div> --}}

                    <div class="col-sm-12 form-group">
                        <label>Requirements</label>
                        <input class="form-control" type="text" name="requirements" required>
                    </div>


                    </div>

                    <div class="modal-footer">
                            <button type="reset" class="btn btn-default" >Clear</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                </div>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Update Requirements Info </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/careers/update')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                        <div class="col-sm-12 form-group">
                                <label>Requirements</label>
                                <input class="form-control requirements" type="text" name="requirements">
                                <input type="hidden" class="cId" id="id" name="id">
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
                    <div class="ibox-title">Requirements List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New Requirements
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Requirements</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>


                                <?php $number=1; ?>
                @foreach ($career as $c )
                            <tr>
                            <td><?php echo $number++; ?></td>
                            <td>{{$c->requirements}}</td>

                                <td>
                                 <button onclick='edit({{$c->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit" class="btn btn-success" ><i class="fa fa-pencil font-14"></i></button>

                                <button onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" title="Delete"><a href="{{ url('/careers/delete/'.$c->id) }}"> <span><i class="fa fa-trash font-14"></i></span></a></button>
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
                url:"{{url('/careers/edit')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.requirements').val(response.requirements);
                    $('.cId').val(response.id);


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
