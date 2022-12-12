
<section>
<div class="container">
    <div class="row">
        <h1>Create Post</h1>
        <form action="{{ route('posts.create') }}" class="form" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Image</label>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
                </form>

            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content" cols="3" rows="5"></textarea>
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>
</section>



