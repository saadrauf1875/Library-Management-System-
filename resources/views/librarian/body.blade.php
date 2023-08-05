  <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Books Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Books</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Books-Layouts</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                 
                        <!-- End Row -->

                        <!--Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Books Detals</h3>
                                    </div>

                                    <form action="{{url('/add_books')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
             
                                    <div class="card-body">
                                        <div class="form-row">
                                        <div class="form-group   mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Book Name:</label>
                                                <div class="col-md-4">
                                                <input type="text"  class="form-control" name="book_name" id="field" placeholder="Enter Book  Name:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group  mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Category Name:</label>
                                                <div class="col-md-4">
                                                <input type="text"  class="form-control" name="book_category" id="field" placeholder="Enter Book Category:" required>
                                                </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group col-md-12 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Book Author:</label>
                                                <div class="col-md-6">
                                                <input type="text"  class="form-control" name="book_author" id="field" placeholder="Enter Book Author:" required>
                                                </div>
                                                </div>
                                            </div>
                                       
                                            <div class="form-group col-md-12 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Rack No:</label>
                                                <div class="col-md-6">
                                                <input type="text"  class="form-control" name="rack_no" id="field" placeholder="Enter Rack No:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Book Edition:</label>
                                                <div class="col-md-6">
                                                <input type="text"  class="form-control" name="book_edition" id="field" placeholder="Enter  Book Edition:" required>
                                                </div>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-12 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Date Of Publication:</label>
                                                <div class="col-md-6">
                                                <input type="text"  class="form-control" name="date_of_publication" id="field" placeholder="Enter  Book Publishion Date:" required>
                                            </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Book Publisher:</label>
                                                <div class="col-md-6">
                                                <input type="text"  class="form-control" name="book_publisher" id="field" placeholder="Enter  Book Publisher:" required>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12 mb-0">
                                                <div class="form-group">
                                                <label class="col-md-3 form-label" for="example-email">Book Status:</label>
                                                <div class="col-md-6">
                                                <input type="text"  class="form-control" name="book_status" id="field" placeholder="Enter  Book Status:" required>
                                                </div>
                                                </div>
                                            </div>



                                       
                                        </div>
                                      
                                        
                                      
             
                                        <div class="form-footer mt-2">
                                            <a href="javascript:void(0)" class="btn btn-primary">Confirm  Details</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                              
                               
                            </div>
                           
                        </div>
                        <!--End Row-->

                        <!--Row -->
                   
                        <!--End Row-->
                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>