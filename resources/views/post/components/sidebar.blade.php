{{--Task 1: Add the code for sidebar--}}

<div id="wrapper" class="toggled">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="{{ Request::path() === '/' ? 'current_page_item' : ''  }}" id="sidebar-brand">
                <a href="/">Blogs</a>
            </li>
            <li class="{{ Request::path() === 'createBlog' ? 'current_page_item' : '' }}" id="sidebar-brand">
                <a href="{{ url('createBlog') }}">Create Blog</a>
            </li>

        </ul>
    </div>
</div>