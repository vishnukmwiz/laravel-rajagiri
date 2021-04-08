@extends("theme")
@section("content")
        <div class="row">
            <div class="col">
                <h2>Books</h2>
                <form action="/bookadd" method="post">
                    {{ csrf_field() }}
                    <table class="table table-borderless">
                        <tr>
                            <td>Title</td>
                            <td><input type="text" name="btitle" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td><input type="text" name="bauth" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><input type="text" name="bdes" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Distributor</td>
                            <td><input type="text" name="bdis" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><input type="text" name="bpri" class="form-control"></td>
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