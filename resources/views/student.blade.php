@extends("theme")
@section("content")
        <div class="row">
            <div class="col">
                <h2>Student</h2>
                <form action="/studentadd" method="post">
                {{ csrf_field() }}
                    <table class="table table-borderless">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="sname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Roll No.</td>
                            <td><input type="text" name="sroll" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Admission No.</td>
                            <td><input type="text" name="sadd" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Collage</td>
                            <td><input type="text" name="scol" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-success">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        @endsection
 