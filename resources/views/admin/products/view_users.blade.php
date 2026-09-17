@extends('admin.layouts.app')

@section('content')

    <div class="mb-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">

        <div>
            <h1 class="h3 mb-1">View Users</h1>
            <p class="text-body-secondary mb-0">
                Manage all users in your store.
            </p>
        </div>

        <!-- Search -->
        <div class="input-group" style="max-width: 300px;">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>

            <input
                type="text"
                id="userSearch"
                class="form-control"
                placeholder="Search users..."
            >
        </div>

    </div>


    <div class="card">

        <div class="card-header">
            <strong>Users</strong>
        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover mb-0" id="usersTable">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($users as $user)

                            <tr>

                                <th scope="row">
                                    {{ $user->id }}
                                </th>

                                <td>
                                    {{ $user->name }}
                                </td>

                                <td>
                                    {{ $user->email }}
                                </td>

                                <td>
                                    @if ($user->usertype === 'admin')
                                        <span class="badge text-bg-primary">
                                            Admin
                                        </span>
                                    @else
                                        <span class="badge text-bg-secondary">
                                            User
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    <a
                                        href="{{ route('admin.delete.user', $user->id) }}"
                                        class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?')"
                                    >
                                        Delete
                                    </a>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <script>
        document.getElementById('userSearch').addEventListener('keyup', function () {

            let search = this.value.toLowerCase();

            let rows = document.querySelectorAll('#usersTable tbody tr');

            rows.forEach(function (row) {

                let name = row.cells[1].textContent.toLowerCase();
                let email = row.cells[2].textContent.toLowerCase();

                if (name.includes(search) || email.includes(search)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }

            });

        });
    </script>

@endsection