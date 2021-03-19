@extends('layouts.backend.master')
@section('title','Color')
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
<div class="card-header"><h3 class="text-primary">Manage Color</h3></div>
<div class="card-body">
<table class="table table-bordered">
<tr>
<th>SL</th>
<th>Name</th>
<th>Hex Code</th>
<th>Actions</th>
</tr>
<tbody id="colorTableBody"></tbody>
</table>

</div>
</div>
</div>
<div class="col-md-4">
    <div class="panel">
        <div class="card-header">
            <h3 class="text-primary">Add New Color</h3>
        </div>
        <div class="card-body">
            <form  id="addNewColorForm">
                <div class="form-group">
                    <label for="">Color Name : </label>
                    <input type="text" class="form-control error" placeholder="Size name" id="name" name="name" style="border: 12x solid red">
                    <span id="colorName"></span>
                </div>
                  <div class="form-group">
                    <label for="">Hex Code : </label>
                    <input type="text" class="form-control error" placeholder="Size hex" id="hex" name="hex" style="border: 12x solid red">
                    <span id="hexName"></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-success">Add New Color</button>
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
                <form action="" id="updateColorForm">
                    <div class="form-group">
                        <label for="">Size Name : </label>
                        <input type="text" class="form-control" id="updateName" name="updateName">
                        <br>
                         <input type="text" class="form-control" id="updateHex" name="updateHex">
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
@endsection

@push('script')
<script>

    function table_data_row(data) {
            var	rows = '';
            var i = 0;
            $.each( data, function( key, value ) {
                value.id
                rows = rows + '<tr>';
                rows = rows + '<td>'+ ++i +'</td>';
                rows = rows + '<td>'+value.name+'</td>';
                   rows = rows + '<td>'+value.hex+'</td>';
                rows = rows + '<td data-id="'+value.id+'" class="text-center">';
                rows = rows + '<a class="btn btn-sm btn-info text-light" id="editRow" data-id="'+value.id+'" data-toggle="modal" data-target="#editModal">Edit</a> ';
                rows = rows + '<a class="btn btn-sm btn-danger text-light"  id="deleteRow" data-id="'+value.id+'" >Delete</a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            });
            $("#colorTableBody").html(rows);
    }
    function getAllColors(){
        axios.get("{{ route('color.get') }}")
        .then(function(response){
            table_data_row(response.data);
           // console.log(response.data);
        })
        .catch(function(e){
            console.log(e);
        })
    }
    getAllColors();

    //store
    //store
$('#addNewColorForm').validate({
        rules: {
            name: {
                required: true
            },
            hex: {
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


     $('body').on('submit','#addNewColorForm',function(e){
        e.preventDefault();
        axios.post("{{ route('color.store') }}", {
            name: $('#name').val(),
            hex : $('#hex').val()
        })
        .then(function (response) {
            if(response.data === 'EXISTS'){
              setSwalMessage('warning','Warning!','Duplicate Data!');
            }else if(response.data == 'INSERTED'){
                setSwalMessage();
                getAllColors();
                $('#name').val('');
                $('#hex').val('')
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
                    .delete("{{ route('color.destroy') }}", {params: {id:id}})
                    .then((response) => {
                        if(response.data === 'DELETED'){
                            setSwalMessage('success','Delete!','Data Delete Successfully!');
                            getAllColors();
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
            .get("{{ route('color.edit') }}",{params : {id :id}})
            .then((response)=>{
                $('#updateName').val(response.data[0].name);
                $('#updateHex').val(response.data[0].hex);
                $('#updateId').val(id);
            })
        });

        //update
        $('body').on('submit','#updateColorForm',function(e){
            e.preventDefault();
            axios.put("{{ route('color.update') }}", {
         name : $('#updateName').val(), id : $('#updateId').val(), hex : $('#updateHex').val()
            })
            .then(function (response) {
                if(response.data === 'UPDATED'){
                    jQuery('#editRowModal').modal('hide');
                    setSwalMessage('success','Updated!','Data Updated Successfully!');
                   getAllColors();
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
