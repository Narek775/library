<div class="container">
    <div class="row">
        <div class="col-md-7 offset-3 mt-4">
            <div class="card-body"><h3>Creat content</h3>
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


