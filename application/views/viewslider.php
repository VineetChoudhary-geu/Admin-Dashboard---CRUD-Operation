 <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                    </div>

                    <div> View Slider
                    <div class="page-title-subheading"><a href="<?php echo base_url(); ?>welcome/addslider">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Add Slider
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">              
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">

                                <table class="mb-0 table"  id="myTable">

                                    <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image </th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                                
                                        <?php 
                                        
                                        $getSlider = $this->Manage_Model->getSlider('');

                                        foreach ($getSlider as $data) {
                                        ?>    
                                            <tr>
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['title']; ?></td>
                                                <td><?php echo $data['content']; ?></td>
                                        
                                                <td> <img src="<?php echo base_url(); ?>assets/images/slider_image/<?php echo $data['image']; ?>" width="200"></td>
                                              
                                                <td>
                                                <a href="<?php echo base_url(); ?>welcome/addslider/<?php echo $data['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                                                /<a onclick="return deleteSlider('<?php echo $data['id'] ?>');" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger "><i class="fa fa-trash-alt"></i> </a></td>
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
        </div>
    </div>

