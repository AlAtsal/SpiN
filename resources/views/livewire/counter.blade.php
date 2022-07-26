<div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-tachometer-alt ml-2"></i>listings</h3><hr>
    <form action="{{ route('listings.index') }}" method="post">
        @csrf
        
        <input type="text" class="form-control col-md-4 float-left" name="search" id="search" placeholder="Search...">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listings as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ jdate($category->created_at)->format('%d %B %Y') }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('listings.edit', $category->id) }}"  class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger" data-action="{{ route('listings.destroy', $category->id) }}" data-toggle="modal" data-target="#deleteCategory" onclick="loadDeleteModal(`{{ $category->name }}`)">Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </form>
    {!! $listings->links() !!}
</div>