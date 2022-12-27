@extends('post.layout')
@include('post.header')
@extends('post.components.sidebar')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <div id="wrapper" class="toggled">
        <div class="d-flex flex-column">
            <br>
            <div class="text-center" style="margin-top: 5px">
                <h2>Blog List</h2>
            </div>
        </div>

        @include('post.components.showTable')

        <script type="text/javascript">

            var msg = "{{ Session::get(' alert ') }}";
            var exist = "{{ Session::has(' alert ') }}";
            if (exist) {
                Toastify({
                    text: msg,
                    duration: 3000
                }).showToast(msg);
            }

            $(document).ready(function() {
                $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ URL('showTableData') }}",
                    columns: [
                        {
                            data: 'blog_name',
                            name: 'blog_name'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at',
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false
                        }
                    ]
                });
            });
        </script>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@endsection