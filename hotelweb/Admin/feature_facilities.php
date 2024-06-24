<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();


    if(isset($_GET['seen'])){
        $frm_data = filtration($_GET);

        if($frm_data['seen']=='all'){

            $q = "UPDATE `users_query` SET `seen`= ?";
            $values = [1];
            if(update($q, $values,'i')){
                alert('success','Mark all as read');
            }else{
                alert('error','Check1 back again');
            }
        }
        else{
            $q = "UPDATE `users_query` SET `seen`= ? WHERE `sr_no`= ?";
            $values = [1,$frm_data['seen']];
            if(update($q, $values,'ii')){
                alert('success','Mark as read');
            }else{
                alert('error','Check2 back again');
            }
        }
    }

    if(isset($_GET['del'])){
        $frm_data = filtration($_GET);

        if($frm_data['del']=='all'){

            // $q = "DELETE FROM `users_query`";
            
            // if(mysqli_query($con, $q)){
            //     alert('success','All Data Deleted !');
            // }else{
            //     alert('error','Delete1 back again !');
            // }
        }
        else{
            $q = "DELETE FROM `users_query` WHERE `sr_no`=?";
            $values = [$frm_data['del']];
            if(update($q, $values,'i')){
                alert('success','Data Deleted !');
            }else{
                alert('error','Delete 2 back again !');
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>
    <?php require('inc/links.php'); ?>
</head>
<body class ="bg-light">
<?php require('inc/header.php'); ?>

<div class="container-fluid " id="main-content" >
    <div class="row">
        <!-- ms-auto marging auto -->
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">

            <h3 class="mb-4">Features & Facilities</h3>

            <div class="card border-0 shadow-sm mb-4" >
                <div class="card-body">

                   <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                            <i class="bi bi-person-fill-add"></i>  Add
                        </button>
                    </div>


                    <div class="table-responsive-mb"   style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                              <tr class="bg-dark text-light rounded">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody id="features-data">
                             
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4" >
                <div class="card-body">

                   <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                            <i class="bi bi-person-fill-add"></i>  Add
                        </button>
                    </div>


                    <div class="table-responsive-mb"   style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                              <tr class="bg-dark text-light rounded">
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody id="facilities-data">
                             
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

            <!--Feature Modal -->
<div class="modal fade" id="feature-s" data-bs-keyboard="true" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- pass the id -->
   <div class="modal-dialog">
        <form id="feature_s_form">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" >Add Feature</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label fw-bold">Name </label>
                        <input type="text" name="feature_name" id ="feature_name_inp" class="form-control shadow-none" required >
                    </div>
                    
                </div>
                <div class="modal-footer">
                <button type="reset"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cansel</button>
                <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
                </div>
            </div>
        </form>

    </div>
</div>

  <!--Facilities Modal -->

<div class="modal fade" id="team-s" data-bs-keyboard="true" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="team_s_form">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" >Add Team Member</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label  class="form-label fw-bold">Name </label>
                        <input type="text" name="member_name" id ="member_name_inp" class="form-control shadow-none" required >
                    </div>
                    <div class=" mb-3">
                        <label  class="form-label fw-bold">Picture</label>
                        <input type="file" name="member_picture" id ="member_picture_inp" accept=".jpeg , .png ,.webp , .jpeg" class="form-control shadow-none" required >
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" onclick ="member_name.value='',member_picture='' " class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cansel</button>
                <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
                </div>
            </div>
        </form>

    </div>
</div>




<?php require('inc/scripts.php'); ?>
<script>
    let feature_s_form = document.getElementById('feature_s_form');

    feature_s_form.addEventListener('submit', function(e){
    e.preventDefault();
    add_feature();
    })


    function add_feature(){

        let data = new FormData();
        data.append('name', feature_s_form.elements['feature_name'].value);//.elements['feature_name'] like a get a id 
        
        data.append('add_feature','');

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/feature_facilities.php", true);

        xhr.onload = function(){

        
        var myModal = document.getElementById('feature-s')
        var modal = bootstrap.Modal.getInstance(myModal)
        modal.hide();

        if(this.responseText == 1){

            alert('success','Features has been Added !');
            feature_s_form.elements['feature_name'].value='';
            get_features();
        }
    
        else{
            alert('error','Something Wentwrong ?');
        }


        }

        xhr.send(data);

    }

    function get_features(){

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/feature_facilities.php", true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onload = function(){
            document.getElementById('features-data').innerHTML = this.responseText;//table-body id
        }

        xhr.send('get_features');
        }

    function rem_feature(val){

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/feature_facilities.php", true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onload = function(){
        if(this.responseText ==1){
            alert('success','Featured removed');
            get_features();
        }
        else if(this.resposeText == 'room_added'){
            alert('success','Featured Added in Room !');
        }
        else{
            alert('error','Something went wrong');
        }

        }

        xhr.send('rem_feature='+val);
     }


        window.onload = function (){
            get_features();
        }

</script>

</body>
</html>