@extends('layouts.app')


@section('title', 'Create Category')

@section('content')
    <div class="page-wrapper">

        <header class="page-header">
            <div class="header-icon">
                <i class="bi bi-grid"></i>
            </div>

            <div>
                <h1 class="page-title">Create Category</h1>
                <p class="page-subtitle">
                    Create and manage your content categories.
                </p>
            </div>
        </header>

        <main class="form-card">

            <div class="card-heading">
                <h2>Category Information</h2>
                <p>Enter the category details and choose its publication status.</p>
            </div>

            <form id="categoryForm" action="{{ Route('admin.category.store') }}" method="POST">

                @csrf

                <div class="form-body">
                    <div class="row g-4">

                        <!-- Post / Category Name -->
                        <div class="col-12">
                            <label for="postName" class="form-label">
                                Category Name <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control @error('CategoryName') is-invalid @enderror "
                                name="CategoryName" placeholder="Enter category name" maxlength="100"
                                value="{{ old('CategoryName') }}">

                            <div class="field-hint">
                                Choose a clear and descriptive name.
                            </div>

                            @error('CategoryName')
                                <div class="text-danger field-hint">
                                    {{  $message }}
                                </div>
                            @enderror

                        </div>

                        <!-- Description -->
                        <div class="col-12">
                            <label for="description" class="form-label">
                                Description
                            </label>

                            <textarea class="form-control @error('description') is-invalid @enderror " id="description"
                                name="description" placeholder="Write a description..."
                                maxlength="1000">{{ old('description') }}</textarea>

                            <div class="field-hint text-end">
                                <span id="charCount">0</span>/1000
                            </div>
                            @error('description')
                                <div class="text-danger field-hint">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="col-12">

                            <span class="status-label">Status</span>

                            <div class="status-wrapper">

                                <label class="status-option">
                                    <input type="radio" name="status" value="Enable" checked>

                                    <span class="status-dot dot-active"></span>
                                    <span>Active</span>
                                </label>

                                <label class="status-option">
                                    <input type="radio" name="status" value="Disable">

                                    <span class="status-dot dot-inactive"></span>
                                    <span>Inactive</span>
                                </label>

                            </div>

                            <div class="status-help" id="statusHelp">
                                <i class="bi bi-info-circle me-1"></i>
                                This category is enabled and available for use.
                            </div>

                        </div>

                    </div>
                </div>

                <div class="form-footer">

                    <button type="reset" class="btn-custom btn-cancel">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset
                    </button>

                    <button type="submit" class="btn-custom btn-submit">
                        <i class="bi bi-plus-lg"></i>
                        Create Category
                    </button>

                </div>

            </form>

        </main>
    </div>

@endsection
