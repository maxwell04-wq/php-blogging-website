<div style="text-align: center">
    <a href="{{ url('/editBlog', [$_id]) }}" data-toggle="tooltip" data-original-title="Edit" class="fas fa-edit" style="color: white; margin-left: 10px; text-decoration:none"></a>
    <a href="javascript:void(0)" data-id="{{ $_id }}" data-collection="{{ $collection_id }}" data-toggle="tooltip" data-original-title="Delete" class="fa-solid fa-trash delete" style="color: white; margin-left: 10px; text-decoration:none"></a>
    <a href="{{ url('/blogResult', [$_id]) }}" target="_blank" data-toggle="tooltip" data-original-title="show" class="fa-solid fa-eye" style="color: white; margin-left: 10px; text-decoration:none"></a>
</div>

<!-- Modal -->
<div style="color: black" class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="delete_id"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="liveToastBtn" class="btn btn-danger confirmDelete">Delete</button>
            </div>
        </div>
    </div>
</div>
</div>