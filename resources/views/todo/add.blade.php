@extends('todo.main_master')

@section('content');
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add list</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{ route('store.list') }}" >
                        @csrf
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control input-default " placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" id="comment" name="description"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection