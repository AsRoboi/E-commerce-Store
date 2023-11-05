<div class="modal fade" id="update_product" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="engine/_update_product.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <!-- <h5 class="modal-title">Modal title</h5> -->
          <h2 class="fw-bold mb-0">Product Update</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="id" required>
            <label for="floatingInput">Product ID</label>
            <div class="valid-feedback">
            </div>

          </div>
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="pname">
              <label for="floatingInput">Product Name</label>
              <div class="valid-feedback">
              </div>
            </div>
            <br>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputlname" placeholder="Last Name" name="brand">
              <label for="floatingInput">Brand</label>
              <div class="valid-feedback">
              </div>
            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputEmail" placeholder="Price" name="price">
              <label for="floatingInput">Price</label>
              <div class="valid-feedback">
              </div>

            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputpassword" placeholder="discount %" name="discount">
              <label for="floatingInput">Discount</label>

            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputpasswordV" placeholder="description" name="descr">
              <label for="floatingInput">Description</label>

            </div>
            <div class="mb-3">
              <input class="form-control" type="file" id="fileToUpload" name='fileToUpload'>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-dark">Update Product</button>
          </div>


      </form>
    </div>
  </div>
</div>
</div>