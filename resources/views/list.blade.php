<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List Using Ajax</title>
    <link rel="stylesheet" href="{{asset('frontEnd/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/css/font-awesome.min.css')}}">
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">ToDo List<a href="#" class="pull-right" id="addNewItem" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></a></h3>
                </div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Cras justo odio</li>
                        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Dapibus ac facilisis in</li>
                        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Morbi leo risus</li>
                        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Porta ac consectetur ac</li>
                        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Vestibulum at eros</li>
                    </ul>
                </div>
                <!-- modal -->
                <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="title">Add Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <p> <input type="text" placeholder="add item here..." class="form-control" id="addItems"></p>
                                {{--{{csrf_field()}}--}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none">Delete</button>
                                <button type="button" class="btn btn-primary" id="saveChange" style="display: none">Save Changes</button>
                                <button type="button" class="btn btn-info" id="addButton">Add Item</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </div>
        </div>
    </div>
</div>
<script src="{{asset('frontEnd/js/jquery.min.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.ourItem').each(function () {
            $(this).click(function (event) {
                var text = $(this).text();
                $('#title').text("Edit Item");
                $('#addItems').val(text);
                $('#delete').show('400');
                $('#saveChange').show('400');
                $('#addButton').hide('400');
            });
        });
        $('#addNewItem').click(function (event) {
                $('#title').text("Add New Item");
                $('#addItems').val("");
                $('#delete').hide('400');
                $('#saveChange').hide('400');
                $('#addButton').show('400');
            });
        $('#addButton').click(function () {
            var add_items = $('#addItems').val();
            $.post('todo',
                {
                'datas': add_items,
                "_token": "{{ csrf_token() }}"
                // '_token': $('input[name=_token]').val()
                },
                function (data) {
                console.log(data);
            });
        });
    });
</script>
</body>
</html>