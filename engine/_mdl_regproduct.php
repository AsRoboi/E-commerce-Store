<!-- Modal Product-->
<div class="modal fade" id="mdl_regproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="engine/_regproduct.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add product to E-Market</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="pname" required>
            <label for="floatingInput">Product Name</label>
            <div class="valid-feedback"></div>

          </div>
          <br>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputlname" placeholder="Last Name" name="brand" required>
            <label for="floatingInput">Brand</label>
            <div class="valid-feedback">
            </div>
          </div>
          <br>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputEmail" placeholder="Price" name="price" required>
            <label for="floatingInput">Price</label>
            <div class="valid-feedback">
            </div>

          </div>
          <br>
          <div class="col-md-5">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category1" name="category" required="">
              <option value="3">Choose...</option>
              <option>Phone Accessories</option>
              <option>Computer Accessories</option>
              <option>Mobile Phones</option>

            </select>
            <div class="invalid-feedback">
              Please select a valid category
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
          <button type="submit" class="btn btn-outline-dark">Add Product</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--  
<div class="modal fade" id="mdl_regproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <form action="engine/_regproduct.php" method="POST"enctype="multipart/form-data">
      <div class="modal-header p-5 pb-4 border-bottom-0">

        <h2 class="fw-bold mb-0">Product Registration</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="pname" required>
            <label for="floatingInput">Product Name</label>
            <div class="valid-feedback">

            </div>
            <br>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInputlname" placeholder="Last Name" name="brand" required>
              <label for="floatingInput">Brand</label>
              <div class="valid-feedback">

              </div>
              <br>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputEmail" placeholder="Price" name="price" required>
                <label for="floatingInput">Price</label>
                <div class="valid-feedback">


              </div>
                <br>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputpassword" placeholder="discount %" name="discount" >
                  <label for="floatingInput">Discount</label>

                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputpasswordV" placeholder="description" name="descr" >
                  <label for="floatingInput">Description</label>

                </div>
                <div class="mb-3">
                        <input class="form-control" type="file" id="fileToUpload" name='fileToUpload'>
                </div>
                

          
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-dark">Add Product</button></div>

          
        </form>
      </div>
    </div>
  </div>
</div>
      
 -->