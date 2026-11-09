@extends('layouts.app')


@section('title', 'Admin - Categories')

@section('content')


    <div class="container-fluid px-4">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">

            <div>
                <h4 class="page-title mb-1">Categories</h4>
                <p class="text-muted mb-0 small">Manage posts categories</p>
            </div>




            <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                                                                                                                                                                    <i class="bi bi-plus-lg me-1"></i> Create Category
                                                                                                                                                                </button> -->
            <a href="{{ Route('admin.category.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Create Category
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center py-3">
                <span>All Categories</span>

                <span class="badge bg-primary rounded-pill" id="categoryCount">
                    {{ $categories->total() }}
                </span>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">ID</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <!-- <th>Image</th> -->
                                <th>Post Name</th>
                                <th>Create</th>
                                <th>Status</th>
                                <th class="pe-4 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="categoriesBody">





                            @foreach ($categories as $category)
                                <tr>
                                    <td class="ps-4">{{ $category->id }}</td>
                                    <td> <strong>{{ $category->CategoryName }}</strong></td>
                                    <td><code>{{ \Illuminate\Support\Str::limit($category->description, 25) }}</code></td>
                                    <!-- <td> <img src="{{ $category->image }}" alt="Failed to load"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    style="width: 55px; height: 55px; border-radius: 10px;"> </td> -->
                                    <td>
                                        <strong> {{ $category->posts->first()?->PostName ?? 'No post' }}
                                        </strong>

                                    </td>

                                    <td> <strong> {{ $category->created_at->format('j F Y, g:i a') }} </strong> </td>

                                    <td>
                                        @if ($category->status == 'Enable')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td class="pe-4 text-end">

                                        <!-- Status -->
                                        <form action="{{ route('admin.category.status', $category->id) }}" class="d-inline"
                                            method="post">

                                            @csrf

                                            <button type="submit" class="btn btn-sm btn-outline-success me-1">
                                                <i class="bi bi-toggle-on"></i>
                                            </button>


                                        </form>

                                        <form action="{{ route('admin.category.edit', $category->id) }}" method="GET"
                                            class="d-inline">

                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                        </form>


                                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>



                                    </td>
                                </tr>
                            @endforeach












                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- {{ $categories->links() }} -->
        <div class=" mt-4">
            {{ $categories->links() }}
        </div>





    </div>
@endsection
