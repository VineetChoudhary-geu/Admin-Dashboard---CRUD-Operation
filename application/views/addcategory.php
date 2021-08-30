<?php 
   $id=$this->uri->segment(3);
   $getCategory = '';

   if ($id != "") {
      $getCategory = $this->Manage_Model->getCategory($id);
   }
   
?>
<style type="text/css">
   legend{
   border-bottom: 1px solid #ccc;
   margin-bottom: 16px !important;
   font-size: 18px !important;
   padding: 0 !important;
   }
</style>
<div class="app-main__outer">
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div class="page-title-icon">
               <i class="pe-7s-users icon-gradient bg-mean-fruit">
               </i>
            </div>
            <div>
               Add Category
               <div class="page-title-subheading">Add New Category
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-2"></div>
      <div class="main-card mb-3 col-lg-8 card">
         <div class="card-body">
            <form method="post"  action="<?php echo base_url(); ?>Action_Controller/insertCategory" enctype="multipart/form-data">
               <input name="id" id="id" type="hidden"  value="<?php echo empty($getCategory) ? '' :  $getCategory[0]['id'] ?>">
               <legend class="col-form-label col-sm-12">Basic Information</legend>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Category Name </label>
                  <div class="col-sm-9">
                     <input name="category_name" id="category_name" placeholder="" type="text" class="form-control"  onchange="return getSlugCat();" value="<?php echo empty($getCategory) ? '' : $getCategory[0]['category_name']; ?>">
                  </div>
               </div>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Category Image</label>
                  <div class="col-sm-9">
                     <input name="image" id="image" placeholder="" type="file" class="form-control" >
                     <input name="image_old" id="image_old" placeholder="" type="hidden" class="form-control" value="<?php echo empty($getCategory) ? '' : $getCategory[0]['image']; ?>">
                     <?php if (empty($getCategory)?'':$getCategory[0]['image']!="") {
                        ?>
                     <img src="<?php echo base_url(); ?>assets/images/category_image/<?php echo $getCategory[0]['image']; ?>" width="200">
                     <?php } ?>
                  </div>
               </div>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Category Description </label>
                  <div class="col-sm-9">
                     <textarea name="description" id="description" type="text" class="form-control"><?php echo empty($getCategory) ? '' : $getCategory[0]['description']; ?></textarea>
                  </div>
               </div>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Meta Title </label>
                  <div class="col-sm-9">
                     <input name="meta_title" id="meta_title" placeholder="" type="text" class="form-control" value="<?php echo empty($getCategory) ? '' : $getCategory[0]['meta_title']; ?>">
                  </div>
               </div>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Slug</label>
                  <div class="col-sm-9">
                     <input name="slug" id="slug" placeholder="" type="text" class="form-control" value="<?php echo empty($getCategory) ? '' : $getCategory[0]['slug']; ?>">
                  </div>
               </div>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Meta Keywords </label>
                  <div class="col-sm-9">
                     <input name="meta_keyword" id="meta_keyword" placeholder="" type="text" class="form-control" value="<?php echo empty($getCategory) ? '' : $getCategory[0]['meta_keyword']; ?>">
                  </div>
               </div>
               <div class="position-relative row form-group">
                  <label for="name" class="col-sm-3 col-form-label">Meta Description </label>
                  <div class="col-sm-9">
                     <input name="meta_desc" id="meta_desc" placeholder="" type="text" class="form-control" value="<?php echo empty($getCategory) ? '' : $getCategory[0]['meta_desc']; ?>">
                  </div>
               </div>
               <div class="position-relative row form-check">
                  <div class="col-sm-10 offset-sm-2">
                     <input type="submit" class="btn btn-secondary"   value="Submit" >
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>