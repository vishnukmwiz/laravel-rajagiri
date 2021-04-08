@extends("theme")
@section("content")
        <div class="row">
            <div class="col">
                <h4>Create Faculty</h4>
                <form action="/facultyread" method="post">
                    {{ csrf_field() }}
                    <table class="table table-borderless">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="fname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td><input type="text" name="fdes" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>College</td>
                            <td><input type="text" name="fcol" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td><input type="text" name="fph" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-success">Create</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        @endsection