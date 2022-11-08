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
            $data .= ' <tr>
            <td>'.$row['country_id'].'</td>
            <td>'.$row['country'].'</td>
            <td>'.$row['status'].'</td>
            <td><a href="country.php?action=edit&id='.$row['country_id'].'" title ="Delete" onclick="return confirm("Are you sure you want to delete this item?");" class="btn btn-danger btn-sm waves-effect waves-light"><i class="mdi mdi-trash-can d-block font-size-16"></i></a> </td>
            
        </tr>';
        }
        $component = str_replace("[COUNTRY_DATA]",$data  , $component);
        // for($i=0;)
        
     
        echo $component;
    }
   
    
}