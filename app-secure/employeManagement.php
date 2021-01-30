 
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
    <link rel="icon" type="image/png" href="assets/img/nutz.jpg">
    <title>
        Dashboard FOR NUTZ
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
    <meta name="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
    <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg" />
    <meta property="og:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you."
    />
    <meta property="og:site_name" content="Creative Tim" />
    <?php include "head.php"; ?>
    <style>
        .col-lg-77 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media (min-width: 992px) {
            .col-lg-77 {
                /* flex: 0 0 58.333333%; */
                max-width: 98.333333%;
            }
            
        }
        
    </style>
</head>

<body class="sidebar-mini ">
    <div class="wrapper">
        <div class="navbar-minimize-fixed">
            <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
        </div>
        <?php include "aslide.php";?>
        <div class="main-panel">
        <?php include "nav.php";?>
            <div class="content">
                <div class="row">
                  
                <div class="col-lg-77">
                    <div class="card">
                        <div class="card-header">
                            <div class="tools float-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a button type="button" class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#pablo">Add user</a>
                                       
                                    </div>
                                    <!-- Classic Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="tim-icons icon-simple-remove"></i>
                            </button>
                            <h1 class="title title-up">Add User</h1>
                           
                          </div>
                          <div class="modal-body">
                          <label class="col-sm-2 col-form-label"></label>
                    
                      <div class="row">
                      <div class="col-md-5">
                          <div class="form-group">
                            <input type="text" id="email" class="form-control" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <input type="text" id="ph_number" class="form-control" placeholder="Phone Number">
                          </div>
                        </div>
                        
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="date" id="date" class="form-control" placeholder="Date">
                          </div>
                        </div>
                      </div>
                    
                          </div>
                          <div class="modal-footer">
                            <button type="button" id="add_user" class="btn btn-default">Add User</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--  End Modal -->
                            
                                </div>
                            </div>
                            <h5 class="card-title">Employee Table</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Job Position
                                            </th>
                                            
                                            <th class="text-right">
                                                Salary
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="photo">
                                                    <img src="assets\img/tania.jpg" alt="photo">
                                                </div>
                                            </td>
                                            <td>
                                                Tania Mike
                                            </td>
                                            <td>
                                                Develop
                                            </td>
                                            
                                            <td class="text-right">
                                                € 99,225
                                            </td>
                                            <td class="text-right">
                                               
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="photo">
                                                    <img src="assets\img/robi.jpg" alt="photo">
                                                </div>
                                            </td>
                                            <td>
                                                John Doe
                                            </td>
                                            <td>
                                                CEO
                                            </td>
                                           
                                            <td class="text-right">
                                                € 89,241
                                            </td>
                                            <td class="text-right">
                                                
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon btn-simple" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="photo">
                                                    <img src="assets\img/lora.jpg" alt="photo">
                                                </div>
                                            </td>
                                            <td>
                                                Alexa Mike
                                            </td>
                                            <td>
                                                Design
                                            </td>
                                           
                                            <td class="text-right">
                                                € 92,144
                                            </td>
                                            <td class="text-right">
                                               
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-simple" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="photo">
                                                    <img src="assets\img/jana.jpg" alt="photo">
                                                </div>
                                            </td>
                                            <td>
                                                Jana Monday
                                            </td>
                                            <td>
                                                Marketing
                                            </td>
                                           
                                            <td class="text-right">
                                                € 49,990
                                            </td>
                                            <td class="text-right">
                                               
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="photo">
                                                    <img src="assets\img/mike.jpg" alt="photo">
                                                </div>
                                            </td>
                                            <td>
                                                Paul Dickens
                                            </td>
                                            <td>
                                                Develop
                                            </td>
                                           
                                            <td class="text-right">
                                                € 69,201
                                            </td>
                                            <td class="text-right">
                                              
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="photo">
                                                    <img src="assets\img/emilyz.jpg" alt="photo">
                                                </div>
                                            </td>
                                            <td>
                                                Manuela Ric
                                            </td>
                                            <td>
                                                Manager
                                            </td>
                                            
                                            <td class="text-right">
                                                € 99,201
                                            </td>
                                            <td class="text-right">
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                  </button>
                                              
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <?php include "foot.php";?>
    <script>
        $("#add_user").click(function(a) {
    a.preventDefault();
    var email = $("#email").val();
    
    var phone_number = $("#ph_number").val();
   
    var date = $("#date").val();
    
    
    $.ajax({
            method: "POST",
            url: "<?php echo $backend_url; ?>adminreg",
            data: { email: email, phonenumber: phone_number,doj: date }
        })
        .done(function(msg) {
            alert("Data Saved: " + msg);
        });
});

</script>

</body>




</html>