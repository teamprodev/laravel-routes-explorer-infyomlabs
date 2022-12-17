<!-- Author Id Field -->
<div class="col-sm-12">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $post->author_id }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $post->category_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Seo Title Field -->
<div class="col-sm-12">
    {!! Form::label('seo_title', 'Seo Title:') !!}
    <p>{{ $post->seo_title }}</p>
</div>

<!-- Excerpt Field -->
<div class="col-sm-12">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    <p>{{ $post->excerpt }}</p>
</div>

<!-- Body Field -->
<div class="col-sm-12">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $post->body }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $post->image }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $post->slug }}</p>
</div>

<!-- Meta Description Field -->
<div class="col-sm-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    <p>{{ $post->meta_description }}</p>
</div>

<!-- Meta Keywords Field -->
<div class="col-sm-12">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    <p>{{ $post->meta_keywords }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $post->status }}</p>
</div>

<!-- Featured Field -->
<div class="col-sm-12">
    {!! Form::label('featured', 'Featured:') !!}
    <p>{{ $post->featured }}</p>
</div>

