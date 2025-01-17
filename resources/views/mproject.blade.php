@extends('master')
@section('title')
@section('content title', 'Edit')
@section('content')

    <div class="col-md-10 mt-3 ps-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="text-center">Edit</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <form class="mt-5 w-50">
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"required></textarea>
                <label for="floatingTextarea2">Critics and Suggestion</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection