@extends("theme")
@section("content")
        <div class="row">
            <div class="col">
                <h2>Bus</h2>
                <form action="/busadd" method="post">
                {{ csrf_field() }}
                    <table class="table table-borderless">
                        <tr>
                            <td>Bus Number</td>
                            <td><input type="text" name="bno" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Driver Name</td>
                            <td><input type="text" name="dname" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Route</td>
                            <td><input type="text" name="brou" class="form-control"></td>
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