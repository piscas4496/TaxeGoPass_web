<template>
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div> 
        </div>
    <div class="product-status mg-b-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Agents List</h4>
                            <div class="add-product">  
                                <div class=" shadow-inner mg-tb-30"> 
                                <a class="Information Information-color mg-b-30" href="#" data-toggle="modal" data-target="#Addagent">Add agent</a> 
                            </div>
                        </div>
                        <div id="Addagent" class="modal modal-edu-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                       
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="col-md-12">
                                           <div class="form-group">
                                               <label class="control-label" for="noms">Noms</label>
                                               <input type="text" name="noms" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label class="control-label" for="genre">Genre</label>
                                               <input type="text" name="genre" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                             <label class="control-label" for="datenaiss">Date de naissance</label>
                                             <input type="date" name="datenaiss" class="form-control">
                                           </div>
                                           
                                           <div class="form-group">
                                               <label class="control-label" for="noms">Noms</label>
                                               <input type="text" name="noms" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label class="control-label" for="noms">Noms</label>
                                               <input type="text" name="noms" class="form-control" >
                                           </div>
                                    </div> 
                                    
                                        <div class="modal-footer footer-modal-admin info-md">
                                        <a data-dismiss="modal" class=" col-xs-3 info info-danger" href="#">Cancel</a>
                                        <a class="  col-xs-0 info info-success" href="#">Process</a></div>
                                                                
                                    </form>  
                                </div>
                                        
                         </div>
                    </div>
                            </div>
                            <table>
                                <tr>
                                   
                                    <th>Noms</th>
                                    <th>Genre</th>
                                    <th>Telephone</th>
                                    <th>Adresse mail</th>
                                    <th>Setting</th>
                                </tr>
                                <!-- <tr v-for="agent in agentsList"> -->
                                    
                                  
                                   
                                    
                                    <td>
               
                        <button data-toggle="modal" data-target="#EditAgent" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    
                        <div id="EditAgent" class="modal modal-edu-general fullwidth-popup-InformationproModal PrimaryModal-bgcolor fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                       
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="col-md-12">
                                           <div class="form-group">
                                               <label class="control-label" for="noms">Noms</label>
                                               <input type="text" name="noms" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label class="control-label" for="genre">Genre</label>
                                               <input type="text" name="genre" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                             <label class="control-label" for="datenaiss">Date de naissance</label>
                                             <input type="date" name="datenaiss" class="form-control">
                                           </div>
                                           
                                           <div class="form-group">
                                               <label class="control-label" for="noms">Noms</label>
                                               <input type="text" name="noms" class="form-control" >
                                           </div>
                                           <div class="form-group">
                                               <label class="control-label" for="noms">Noms</label>
                                               <input type="text" name="noms" class="form-control" >
                                           </div>
                                    </div> 
                                    
                                        <div class="modal-footer footer-modal-admin info-md">
                                        <a data-dismiss="modal" class=" col-xs-3 info info-danger" href="#">Cancel</a>
                                        <a class="  col-xs-0 info info-success" href="#">Update</a></div>
                                                                
                                    </form>  
                                </div>
                                        
                         </div>
             </div>
     </div>  
                                        
     <button data-toggle="tooltip" data-target="#Deleteagent"  title="Trash" class="pd-setting-ed alert alrt-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button> 
      
                                        
                                    </td>
                                <!-- </tr> -->
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Product Title 2</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>60</td>
                                    <td>$1020</td>
                                    <td>In Stock</td>
                                    <td>$17</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Product Title 3</td>
                                    <td>
                                        <button class="ds-setting">Disabled</button>
                                    </td>
                                    <td>70</td>
                                    <td>$1050</td>
                                    <td>Low Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Product Title 4</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>120</td>
                                    <td>$1440</td>
                                    <td>In Stock</td>
                                    <td>$12</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Product Title 5</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>30</td>
                                    <td>$540</td>
                                    <td>Out Of Stock</td>
                                    <td>$18</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Product Title 6</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>400</td>
                                    <td>$4000</td>
                                    <td>In Stock</td>
                                    <td>$10</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
</template>
