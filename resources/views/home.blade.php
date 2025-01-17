@extends('master')
@section('title')
@section('content title')
@section('content')
<div class="row">
    <div class="col-md-7 mt-3 ps-5 ">
        <div class="card">
            <div class="card-header">
                <h6>Data Project</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>                                        
                        <th>Project Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h6>Add Project</h6>
                </div>
                <div class="card-body">
                    <form action="create.php" method="POST">
                        <label class="form-label">Project Name</label>
                        <input type="text" name="project_n" id="project_n" class="form-control is-invalid" required>
                        <label class="form-label">Description</label>
                        <textarea name="descrip_add" id="descrip_add" class="form-control"></textarea>
                        <label class="form-label">Project Picture</label>
                        <input type="file" class="form-control"><br>

                        <input class="btn btn-success" type="submit" value="Simpan">
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection