<div class="container-fluid">
    <div class="container-fluid">
        

            <div class="card">
                <div class="card-body">
                    <?php foreach ($view_products as $row) :?>
                        <div class="card-header">
                            <h5>Edit products</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <form class="form-horizontal" method="post" action="<?= base_url('products/products_update_data'); ?>">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label"> Product Name <span class="text-danger">*</span></label>
                               <input type="text" id="name" class="form-control" name="name"value="<?=$row->name?>">
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Description<span class="text-danger">*</span> </label>
                               <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="description" required><?=$row->description?></textarea>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Image <span class="text-danger">*</span> </label>
                               <input type="file" name="image" parsley-trigger="change" class="form-control" id="image" value="<?=$row->image?>" placeholder="Product Image" required>
                           </div>
                          

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">Price <span class="text-danger">*</span> </label>
                               <input type="text" name="price" parsley-trigger="change" class="form-control" id="price" value="<?=$row->price?>" placeholder="Price  " required>
                           </div>
                       </div>

                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Update products" class="btn btn-primary " style="margin: 10px;">Update</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>

               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
       <?php endforeach; ?>
   </div>
   <!-- [ Main Content ] end -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



   <script>
       CKEDITOR.replace('description', {

           format_tags: 'p;h1;h2;h3;h4;h5;h6'

       });
   </script>