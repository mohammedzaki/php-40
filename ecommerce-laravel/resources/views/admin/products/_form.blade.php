<div class="card-body">
    <div class="form-group">
        {{ Form::label('productName', 'Name', ['class' => 'awesome']) }}
        {{ Form::text('name', null, [
            'class' => 'form-control',
            'placeholder' => 'Enter Product Name',
            'id' => 'productName'
        ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('productPrice', 'Price', ['class' => 'awesome']) }}
        {{ Form::text('price', null, [
            'class' => 'form-control',
            'placeholder' => 'Enter Product Price',
            'id' => 'productPrice'
        ]) }}
    </div>
    <div class="form-group">
        {{ Form::label('categoryName', 'Category', ['class' => 'awesome']) }}
        {{ Form::select('category_id', $categories, null, [
            'class' => 'form-control',
            'placeholder' => 'Select Category Name',
            'id' => 'category_id'
        ]) }}
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>