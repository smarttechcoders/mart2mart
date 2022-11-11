<?php 
include 'lib/components/component_country_list.php';
class RenderersCountryList{
    public $component='';
    public function __construct()
    {
        
    }

    public function render($arr){
        // [COUNTRY_DATA]
        
        $component=  CountryList();
        $data = '';
        $i=1;
        foreach($arr as  $row)
        {
            if($row['status']){
                $status = '<span class="badge bg-success bg-gradient mb-2">Active</span>';
            }else{
                $status = '<span class="badge bg-warning bg-gradient mb-2">Dective</span>';
            }

            $data .= ' <tr>
            <td>'.$i++.'</td>
            <td>'.$row['country'].'</td>
            <td>'.$status.'</td>
            <td><a href="country.php?action=delete&id='.$row['country_id'].'" title ="Delete" onclick="return confirm(Are you sure you want to delete this item?);" class="btn btn-danger bg-gradient btn-sm"><i class="mdi mdi-trash-can d-block font-size-16"></i></a> </td>
            
        </tr>';
        }
        $component = str_replace("[COUNTRY_DATA]",$data  , $component);
        // for($i=0;)
        
     
        echo $component;
    }
   
    
}