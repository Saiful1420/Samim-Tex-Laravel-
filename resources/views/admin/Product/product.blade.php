@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Product </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/products/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12 form-group">
                        <label for="country">Product Catagory</label>
                        <select class="form-control" id="Catagory" name="catagory" required>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Kid's & Babie's </option>
                            <option value="4">Lingeries</option>

                        </select>
                    </div>


                    <div class="col-sm-12 form-group">
                        <label>Product Name</label>
                        <input class="form-control" type="text" name="product_name" required>
                    </div>


                     <div class="col-sm-12 form-group">
                  <label>Product Image</label>
                  <input class="form-control" type="file" name="image">
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
            <h5 class="modal-title" id="exampleModalLongTitle">Update Product Info </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form method="POST" action="{{url('/products/update')}}" enctype="multipart/form-data">
@csrf
            <div class="modal-body">
                    <div class="row">

                            <div class="col-sm-12 form-group">
                                <label for="catagory">Product Catagory</label>
                                <select class="form-control catagory" id="Catagory" name="catagory" required>
                                    <option value="1">Men</option>
                                    <option value="2">Women</option>
                                    <option value="3">Kid's & Babie's </option>
                                    <option value="4">Lingeries</option>

                                </select>
                                <input type="hidden" class="cId" id="id" name="id">
                            </div>


                            <div class="col-sm-12 form-group">
                                <label>Product Name</label>
                                <input class="form-control product_name " type="text" name="product_name" required>
                            </div>


                             <div class="col-sm-12 form-group">
                          <label>Product Image</label>
                          <input class="form-control image" type="file" name="image" >
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
                    <div class="ibox-title">Product List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                        New Product
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php $number=1 ?>

                             @foreach ($product as $p)

                            <tr>
                            <td>  {{$number++}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->product_name}}</td>
                            <td> <img src="{{asset($p->image)}}"  height="60px" width="100px"> </td>

                                <td>

            <button onclick='edit({{$p->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit" class="btn btn-success" ><i class="fa fa-pencil font-14"></i></button>

            <button onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" title="Delete"><a href="{{ url('/products/delete/'.$p->id) }}"> <span><i class="fa fa-trash font-14"></i></span></a></button>

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
                url:"{{url('/products/edit')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.catagory').val(response.catagory);
                    $('.cId').val(response.id);
                    $('.product_name').val(response.product_name);


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
