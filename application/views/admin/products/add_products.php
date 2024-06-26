   <!-- [ Main Content ] end -->
   <div class="container-fluid">
       <div class="container-fluid">
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title fw-semibold mb-4"> Products</h5>

                   <form class="form-horizontal" method="post" action="<?= base_url('products/products_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                       

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label"> Product Name <span class="text-danger">*</span></label>
                               <input type="text" id="name" class="form-control" name="name">

                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Description<span class="text-danger">*</span> </label>
                               <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="description" required></textarea>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Image <span class="text-danger">*</span> </label>
                               <input type="file" name="image" parsley-trigger="change" class="form-control" id="image" placeholder="Product Image" required>
                           </div>
                          

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Price <span class="text-danger">*</span> </label>
                               <input type="text" name="price" parsley-trigger="change" class="form-control" id="price" placeholder="Price  " required>
                           </div>
                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add products" class="btn btn-primary " style="margin: 10px;">Add</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>

               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
   </div>
   <!-- [ Main Content ] end -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



   <script>
       CKEDITOR.replace('description', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>