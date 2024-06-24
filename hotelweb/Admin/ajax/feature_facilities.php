<?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    //facilities 
    if(isset($_POST['add_feature'] ))
    {
        $frm_data = filtration($_POST);

        $q = "INSERT INTO `feature`(`name`) VALUES (?)";
        $values = [$frm_data['name']];
        $res = insert($q,$values,'s');
        echo $res;

    }

    if(isset($_POST['get_features']))
    {
        $res = selectAll('feature');
        $i =1;
        while($row = mysqli_fetch_assoc($res))
        {
            $path = ABOUT_IMG_PATH;
            echo <<<data
                <tr>
                <td>$i</td>
                <td>$row[name]</td>
                <td>
                 <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm shadow-none">
                    <i class="bi bi-trash3-fill"></i>   Delete
                  </button>
                </td>
                </tr>
            data;
            $i++;
        }
        
    }

    if(isset($_POST['rem_feature'])){

        $frm_data = filtration($_POST);
        $values = [$frm_data['rem_feature']];

        $q = "DELETE FROM `feature` WHERE `id`=?";
        $res = delete($q,$values ,'i');
        echo $res;

        
    }
?>