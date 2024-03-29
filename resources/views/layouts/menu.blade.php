<!-- need to remove -->
<li class="nav-item">
    {{-- <a class="nav-link"> --}}
        <a href="{{ route('project.index') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>project</p>
        </a>
    {{-- </a> --}}
</li>
{{-- @if (in_array('Admin', array_column(Auth::user()->roles->toArray(), 'name')))
    <li class="nav-item">
        <select id="countryDropdown" class="form-control select2bs4" id="country">

            @foreach (getCountryList() as $country)

                <option value="{{ $country->id }}" data-codeselect="{{ $country->country_code }}"
                    {{ $country->id == session('country')->id ? 'selected' : '' }}>{{ $country->name }}</option>

            @endforeach
        </select>
    </li>
@endif

<li class="nav-item">
    <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>


@if (in_array('Admin', array_column(Auth::user()->roles->toArray(), 'name')))
    <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>User</p>
        </a>
    </li>
@endif

 <li class="nav-item">
    <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('category') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>Category</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('topic.index') }}" class="nav-link {{ Request::is('topic') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>Topic</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('course.index') }}" class="nav-link {{ Request::is('course') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>Course</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('blogs.index') }}" class="nav-link {{ Request::is('blogs') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>Blog</p>
    </a>
</li>
@if (in_array('Admin', array_column(Auth::user()->roles->toArray(), 'name')))
    <li class="nav-item">
        <a href="{{ route('tag.index') }}" class="nav-link {{ Request::is('tag') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Tag</p>
        </a>
    </li>
@endif
@if (in_array('Admin', array_column(Auth::user()->roles->toArray(), 'name')))
    <li class="nav-item">
        <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Role</p>
        </a>
    </li>
@endif
@if (in_array('Admin', array_column(Auth::user()->roles->toArray(), 'name')))
    <li class="nav-item">
        <a href="{{ route('permission.index') }}" class="nav-link {{ Request::is('permission') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Permission</p>
        </a>
    </li>
@endif
@if (in_array('Admin', array_column(Auth::user()->roles->toArray(), 'name')))
    <li class="nav-item">
        <a href="{{ route('module.index') }}" class="nav-link {{ Request::is('module') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Module</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('jobs.index') }}" class="nav-link {{ Request::is('jobs') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Jobs</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('failed_jobs.index') }}" class="nav-link {{ Request::is('failed_jobs') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Failed_Jobs</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('url_redirect.index') }}"
            class="nav-link {{ Request::is('url_redirect') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>URL Redirect</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-trash text-danger"></i>
            <p>
                Trash <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" style="display:none;">
            <li class="nav-item">
                <a href="{{ route('trashedUser') }}" class="nav-link">
                    <p>User List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedCategory') }}" class="nav-link">
                    <p>Categories List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedTopic') }}" class="nav-link">
                    <p>Topics List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedTopicDetail') }}" class="nav-link">
                    <p>TopicDetail List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedCourse') }}" class="nav-link">
                    <p>Courses List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedCoursedetail') }}" class="nav-link">
                    <p>CourseDetail List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedBlog') }}" class="nav-link">
                    <p>Blogs List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedBlogDetail') }}" class="nav-link">
                    <p>BlogDetail List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedTag') }}" class="nav-link">
                    <p>Tags List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedRole') }}" class="nav-link">
                    <p>Role List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedPermission') }}" class="nav-link">
                    <p>Permission List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('trashedModule') }}" class="nav-link">
                    <p>Module List</p>
                </a>
            </li>
        </ul>
@endif   --}}
