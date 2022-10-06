<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
    <style>
 body{
    color: #8e9194;
    background-color: #f4f6f9;
}
.avatar-xl img {
    width: 110px;
}
.rounded-circle {
    border-radius: 50% !important;
}
img {
    vertical-align: middle;
    border-style: none;
}
.text-muted {
    color: #aeb0b4 !important;
}
.text-muted {
    font-weight: 300;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #4d5154;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #eef0f3;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
    </style>
    <script src="../jquery.js"></script>
    <script src="../../../validation/validate.js"></script>
</head>
<body>
    <header class='header'></header>
<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <h2 class="h3 mb-4 page-title">Settings</h2>
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                </li>
            </ul>
            <form  onsubmit='return validate()' action='../../../../actions/updateStudentdetails.php' name="myform">
                <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h4 class="mb-1">Brown, Asher</h4>
                                <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at,
                                    pretium blandit sapien.
                                </p>
                            </div>
                            <div class="col">
                                <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                <p class="small mb-0 text-muted">(537) 315-1481</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Name</label>
                        <input type="text" id="firstname" class="form-control" name='firstname' placeholder="" />
                        <span class="errorField mx-2 text-danger"></span>
                    </div>
                    
                <div class="form-group  col-md-6">
                    <label for="inputEmail4">mobile number</label>
                    <input type="text" class="form-control" id="inputEmail4"  name='mNumber' placeholder="" />
                    <span class="errorField text-danger mx-2"></span>
                </div>
               
                <div class="form-row">
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputAddress5">Email</label>
                    <input type="text" class="form-control" id="inputAddress5" name='email' placeholder="" />
                    <span class="errorField text-danger mx-2"></span>
                </div>
                <hr class="my-4" />
             
                        <div class="form-group">
                            <label for="inputPassword4">Old Password</label>
                            <input type="password" class="form-control inputPassword5" name='password' />
                            <span class="errorField text-danger mx-2"></span>
                        </div>
                          <div class="form-row">
                </div>
              
                
                        <div class="form-group">
                            <label for="inputPassword5">New Password</label>
                            <input type="password" class="form-control inputPassword5" />
                            <span class="errorField text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">Confirm Password</label>
                            <input type="password" class="form-control" id="inputPassword6" />
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
            <hr>
            <form  onsubmit='return validate()' action='#' name="">
               
              
                <h1>Privacy controls</h1>
                        <div class="form-group">
                            <label for="inputPassword5">privacy controls</label>
                            <input type="password" class="form-control inputPassword5" />
                            <span class="errorField text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">privacy controls</label>
                            <input type="password" class="form-control" id="inputPassword6" />
                        </div>
                    </div>
               
                </div>
            </form>
            <hr>
            <form  onsubmit='return validate()' action='#' name="">
               
              
                <h1>Delete account</h1>
                        <div class="form-group">
                            <label for="inputPassword5">privacy controls</label>
                            <input type="password" class="form-control inputPassword5" />
                            <span class="errorField text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">privacy controls</label>
                            <input type="password" class="form-control" id="inputPassword6" />
                        </div>
                    </div>
               
                </div>
            </form>
        </div>
    </div>
</div>

</div>

<script >
$(document).ready(function(){


//dynamic header
$('.header').load('header.php')
  //dynamichero



})
</script>
</body>
</html>