<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="customers-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>City</th>
                <th>Zip</th>
                <th>Updated Date</th>
                <th>Registered Date</th>
                <th>Removed Date</th>
                <th>Active</th>
                <th>Manager</th>
                <th>Site</th>
                <th>Image</th>
                <th>Shift Start</th>
                <th>Shift End</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->title }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->zip }}</td>
                    <td>{{ $customer->updated_date }}</td>
                    <td>{{ $customer->registered_date }}</td>
                    <td>{{ $customer->removed_date }}</td>
                    <td>{{ $customer->active }}</td>
                    <td>{{ $customer->manager }}</td>
                    <td>{{ $customer->site }}</td>
                    <td>{{ $customer->image }}</td>
                    <td>{{ $customer->shift_start }}</td>
                    <td>{{ $customer->shift_end }}</td>
                    <td>{{ $customer->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('customers.show', [$customer->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('customers.edit', [$customer->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $customers])
        </div>
    </div>
</div>
