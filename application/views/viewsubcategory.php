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
               All Sub Category
               <div class="page-title-subheading"><a href="<?php echo base_url(); ?>welcome/addsubcategory">
                <i class="metismenu-icon pe-7s-display2"></i>
                Add Sub Category
                </a>
                </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="main-card mb-3 card">
            <div class="card-body">
               <table class="mb-0 table" id="myTable">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Image</th>
                        <th width="20%">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $getSubCategory = $this->Manage_Model->getSubCategory('');
                        foreach ($getSubCategory as $data) {
                           $getCategory = $this->Manage_Model->getCategory($data['category_id']);           
                                         ?>
                     <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo empty($getCategory) ? '' : $getCategory[0]['category_name'] ?></td>
                        <td><?php echo $data['subcategory_name'] ?></td>
                        <td><img width="80" src="<?php echo base_url(); ?>assets/images/subcategory_image/<?php echo $data['image'] ?>"></td>
                        <td>
                        <a href="<?php echo base_url(); ?>welcome/addsubcategory/<?php echo $data['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                           /<a onclick="return deleteSubCategory('<?php echo $data['id'] ?>');" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger "><i class="fa fa-trash-alt"></i> </a></td>
                        </td>
                     </tr>
                     <?php  } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>