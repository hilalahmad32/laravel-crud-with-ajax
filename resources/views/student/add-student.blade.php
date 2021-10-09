<!-- The Modal -->
<div class="modal fade" id="addStudent">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Student</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="" id="student">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="number" name="age" id="age" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" name="country" id="country" class="form-control form-control-lg">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="create" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>