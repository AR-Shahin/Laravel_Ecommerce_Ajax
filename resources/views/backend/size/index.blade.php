@extends('layouts.backend.master')
@section('title','Size')
@push('css')
<style>
    em{
        color: red;
    }
    .is-invalid{
        border : 1px solid red;
    }
    .is-valid{
        border : 1px solid green;
    }
</style>
@endpush
@section('master_content')
<div class="row">
<div class="col-md-8">
<div class="card">
<div class="card-header"><h3 class="text-primary">Manage Size</h3></div>
<div class="card-body">
<table class="table table-bordered">
<tr>
<th>SL</th>
<th>Name</th>
<th>Actions</th>
</tr>
<tbody id="sizeTableBody"></tbody>
</table>

</div>
</div>
</div>
<div class="col-md-4">
    <div class="panel">
        <div class="card-header">
            <h3 class="text-primary">Add New Size</h3>
        </div>
        <div class="card-body">
            <form  id="addNewSizeForm">
                <div class="form-group">
                    <label for="">Size Name : </label>
                    <input type="text" class="form-control error" placeholder="Size name" id="name" name="name" style="border: 12x solid red">
                    <span id="sizeName"></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-success">Add New Size</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editRowModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Size</h4>
            </div>
            <div class="modal-body">
                <form action="" id="updateSizeForm">
                    <div class="form-group">
                        <label for="">Size Name : </label>
                        <input type="text" class="form-control" id="updateName" name="updateName">
                        <input type="hidden" name="updateId" id="updateId">
                        <span id="sizeName"></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-success">Update Size</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@push('script')
<script>
 let id = "{{ route('size.destroy') }}";
function table_data_row(data) {
            var	rows = '';
            var i = 0;
            $.each( data, function( key, value ) {
                value.id
                rows = rows + '<tr>';
                rows = rows + '<td>'+ ++i +'</td>';
                rows = rows + '<td>'+value.name+'</td>';
                rows = rows + '<td data-id="'+value.id+'" class="text-center">';
                rows = rows + '<a class="btn btn-sm btn-info text-light" id="editRow" data-id="'+value.id+'" data-toggle="modal" data-target="#editModal">Edit</a> ';
                rows = rows + '<a class="btn btn-sm btn-danger text-light"  id="deleteRow" data-id="'+value.id+'" >Delete</a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            });
            $("#sizeTableBody").html(rows);
        }
    //get data for table
    function getDataForTable(){
        axios.get("{{ route('size.get') }}")
        .then(function (response) {
            table_data_row(response.data)
        })
        .catch(function (error) {
            console.log(error);
        });
    }
    getDataForTable();

//store
$('#addNewSizeForm').validate({
        rules: {
            name: {
                required: true
            }
        },
        errorElement: 'em',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        }
    });

    $('body').on('submit','#addNewSizeForm',function(e){
        e.preventDefault();
        axios.post("{{ route('size.store') }}", {
            name: $('#name').val()
        })
        .then(function (response) {
            if(response.data === 'EXISTS'){
              setSwalMessage('warning','Warning!','Duplicate Data!');
            }else if(response.data == 'INSERTED'){
                setSwalMessage();
                getDataForTable();
                $('#name').val('');
            }
            //console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    });

    //delele
    $('body').on('click','#deleteRow',function (e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    var id = $(this).attr('data-id');
                    axios
                    .delete("{{ route('size.destroy') }}", {params: {id:id}})
                    .then((response) => {
                        if(response.data === 'DELETED'){
                            setSwalMessage('success','Delete!','Data Delete Successfully!');
                            getDataForTable();
                        }
                    }, (error) => {
                        // error callback
                    })

            } else if (
                    /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your file is safe :)',
                    'error'
                )
            }
        })
        });

        //edit
        $(document).on('click','#editRow',function(){
            jQuery('#editRowModal').modal('show');
            let id = $(this).attr('data-id');
            axios
            .get("{{ route('size.edit') }}",{params : {id :id}})
            .then((response)=>{
                $('#updateName').val(response.data[0].name);
                $('#updateId').val(id);
            })
        });

        //update
        $('body').on('submit','#updateSizeForm',function(e){
            e.preventDefault();
            axios.put("{{ route('size.update') }}", {
         name : $('#updateName').val(), id : $('#updateId').val()
            })
            .then(function (response) {
                if(response.data === 'UPDATED'){
                    jQuery('#editRowModal').modal('hide');
                    setSwalMessage('success','Updated!','Data Updated Successfully!');
                    getDataForTable();
                }else if(response.data === 'NOT_UPDATED'){
                    setSwalMessage('warning','Warning!','Duplicate Data not allowed!');
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        })
</script>
@endpush

