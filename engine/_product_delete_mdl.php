 
<div class="modal fade" id="product_delete" tabindex="-1" aria-labelledby="" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <form action="engine/_product_delete.php" method="POST"enctype="multipart/form-data">
      <div class="modal-header p-5 pb-4 border-bottom-0">

        <h2 class="fw-bold mb-0">Detele Product</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="id" >
            <label for="floatingInput">Product ID</label>
            <div class="valid-feedback"></div>

           </div>
            <br>

            
          
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-dark">Delete Product</button>
              </div>
          </div>
       </div>
          
      </form>
      </div>
    </div>
  </div>
</div>
      

