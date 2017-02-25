@extends('../master.master');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Add Deal</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Heading</label>

                            <div class="col-md-6">
                                <input id="heading" type="text" class="form-control" name="heading" value="{{ old('heading') }}" required autofocus>

                                @if ($errors->has('heading'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('heading') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('current_cost') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Current Cost</label>

                            <div class="col-md-6">
                                <input id="current_cost" type="text" class="form-control" name="current_cost" value="{{ old('current_cost') }}" required autofocus>

                                @if ($errors->has('current_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('actual_cost') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Actual Cost</label>

                            <div class="col-md-6">
                                <input id="actual_cost" type="text" class="form-control" name="actual_cost" value="{{ old('actual_cost') }}" required autofocus>

                                @if ($errors->has('actual_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('actual_cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Detail</label>

                            <div class="col-md-6">
                                <textarea id="detail" type="text" class="form-control" name="detail" value="{{ old('detail') }}" required autofocus></textarea>

                                @if ($errors->has('detail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vendor') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Vendor</label>

                            <div class="col-md-6">
                                <input id="vendor" type="text" class="form-control" name="vendor" value="{{ old('vendor') }}" required autofocus>

                                @if ($errors->has('vendor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vendor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Link</label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" value="{{ old('link') }}" required autofocus>

                                @if ($errors->has('link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" accept="image/*">

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Add
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection