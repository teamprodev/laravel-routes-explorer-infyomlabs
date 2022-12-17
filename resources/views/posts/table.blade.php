<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="posts-table">
            <thead>
            <tr>
                <th>Author Id</th>
                <th>Category Id</th>
                <th>Title</th>
                <th>Seo Title</th>
                <th>Excerpt</th>
                <th>Body</th>
                <th>Image</th>
                <th>Slug</th>
                <th>Meta Description</th>
                <th>Meta Keywords</th>
                <th>Status</th>
                <th>Featured</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->author_id }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->seo_title }}</td>
                    <td>{{ $post->excerpt }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->image }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->meta_description }}</td>
                    <td>{{ $post->meta_keywords }}</td>
                    <td>{{ $post->status }}</td>
                    <td>{{ $post->featured }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('posts.show', [$post->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('posts.edit', [$post->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $posts])
        </div>
    </div>
</div>
