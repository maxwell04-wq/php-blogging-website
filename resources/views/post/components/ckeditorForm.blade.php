<div id="wrapper" class="toggled">
    <div class="d-flex flex-column">
        <div class="container">
            <form name="myForm" method="POST" id="formEditor" onsubmit="return validateForm()">
                @csrf
                <h3 class="my-3"><center>Create A Blog</center></h3>
                
                <!-- Blog name -->
                <strong>Blog Name</strong>
                <div class="pb-3">
                    <input type="text" id="blog_name" name="blog_name" class="form-control"
                        placeholder="Enter the name of your blog here." maxlength="32">
                </div>
                
                <!--Blog content-->
                <strong>Content:</strong>
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="editor" name="editor" placeholder="Write the blog content here." maxlength="32" rows="5"></textarea>
                </div>
                
                <!--Buttons-->
                <p>
                    <!--Draft-->
                    <button id="btn-submit" class="btn btn-danger mt-2" formaction="/storeBlog/draft/new"
                        type="submit" name="draft">Draft</button>
                    <!--Publish-->
                    <button id="btn-submit" class="btn btn-success mt-2" formaction="/storeBlog/publish/new"
                        type="submit" name="publish">Publish</button>
                </p>
            </form>
        </div>
    </div>
</div>

{{-- validateForm function --}}
<script>
function validateForm() 
{
    var x = document.forms["myForm"]["blog_name"].value;
    if (x == "") 
    {
        alert("Enter the blog name.");
        return false;
    }
}
</script>