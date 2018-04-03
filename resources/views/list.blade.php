<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List Using Ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Add Item <a href="#" class="pull-right" id="addNewItem" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></a></h3>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
    });
</script>
</body>
</html>