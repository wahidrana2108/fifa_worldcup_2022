<!-- player Entry start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center fw-bolder">Add New Player</legend>
            <div class="form-floating mb-3">
                <input name="product_title" type="text" class="form-control" placeholder="Enter Product Title" required>
                <label for="">Enter Player Name</label>
            </div>
            <div class="form-floating mb-3">
                <input name="product_price" type="number" class="form-control" id="" placeholder="Enter Age" required>
                <label for="">Enter Age</label>
            </div>
            <div class="form-floating mb-3">
                <select name="cat" class="form-select" id="" aria-label="" required>
                    <option selected disabled>Select Country</option>
                    <option value="">argentina</option>
                    <option value="">brasil</option>
                    <option value="">japan</option>
                </select>
                <label for="">Select Country</label>
            </div>
            <div class="form-floating mb-3">
                <select name="product_cat" class="form-select" aria-label="" required>
                    <option selected disabled>Preferred Position</option>

                </select>
                <label for="">Preferred Position</label>
            </div>
            <div class="form-floating mb-3">
                <input name="product_price" type="number" class="form-control" id="" placeholder="Enter Rating"
                    required>
                <label for="">Enter Rating</label>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Player Photo</label>
                <input name="p_img" type="file" class="form-control" id="" aria-describedby="" required>
            </div>
            <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- player Entry end -->