@extends('layouts.app')


@section('title', 'Home - Admin')

@section('content')




    <div class="container-fluid px-4">
        <div class="mb-4">
            <h4 class="page-title mb-1">Dashboard</h4>
            <p class="text-muted mb-0 small">Overview of your store</p>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card stat-card shadow-sm h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-primary bg-opacity-10 text-primary"><i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <div class="text-muted small mb-1">Users</div>
                            <div class="fs-4 fw-bold">1,248</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card stat-card shadow-sm h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-success bg-opacity-10 text-success"><i class="bi bi-cart-check-fill"></i>
                        </div>
                        <div>
                            <div class="text-muted small mb-1">Orders</div>
                            <div class="fs-4 fw-bold">356</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card stat-card shadow-sm h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-warning bg-opacity-10 text-warning"><i class="bi bi-currency-dollar"></i>
                        </div>
                        <div>
                            <div class="text-muted small mb-1">Revenue</div>
                            <div class="fs-4 fw-bold">$48.2K</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card stat-card shadow-sm h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-info bg-opacity-10 text-info"><i class="bi bi-box-seam-fill"></i></div>
                        <div>
                            <div class="text-muted small mb-1">Products</div>
                            <div class="fs-4 fw-bold">89</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center py-3">
                <span>All Posts</span>
                <span class="badge bg-primary rounded-pill" id="categoryCount">
                    {{ $posts->total() }}
                </span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">ID</th>
                                <th>Post Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th class="pe-4 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="categoriesBody">











                            @foreach ($posts as $post)


                                <tr>
                                    <td class="ps-4"> {{ $post->id }} </td>

                                    <td><strong> {{ $post->PostName }} </strong></td>

                                    <td><code> {{ \Illuminate\Support\Str::limit($post->description, 25) }} </code></td>

                                    <td> {{ $post->cat_id ?? 0 }} </td>

                                    <td>
                                        @if ($post->status == 'Enable')
                                            <span class="badge bg-success"> Active </span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td class="pe-4 text-end">

                                        <!-- Status -->
                                        <form action="{{ Route('admin.home.status', $post->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-success me-1">
                                                <i class="bi bi-toggle-on"></i>
                                            </button>

                                        </form>

                                        <!-- <button class="btn btn-sm btn-outline-primary me-1">
                                                    <i class="bi bi-pencil"></i>
                                                </button>

                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button> -->



                                    </td>

                                </tr>




                            @endforeach






                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </main>


@endsection
