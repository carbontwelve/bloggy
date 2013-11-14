<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Quick Post</h3>
        </div>
        <div class="panel-body">
            {{ Form::open() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-default pull-right">Save Draft</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
