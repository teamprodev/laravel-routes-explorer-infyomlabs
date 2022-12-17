<!-- Author Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_id', 'Author Id:') !!}
    {!! Form::number('author_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Seo Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_title', 'Seo Title:') !!}
    {!! Form::text('seo_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Excerpt Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Keywords Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    {!! Form::textarea('meta_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Featured Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('featured', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('featured', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('featured', 'Featured', ['class' => 'form-check-label']) !!}
    </div>
</div>