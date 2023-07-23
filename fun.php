<?php
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Print_blocline
function Print_blocline_View($id,$text,$formId=null,$flag=null,$fileName=null){
    global $PageId ;


    $defId = 'def_'.$id;
    $lineId = 'line_'.$id;

    $newText = $text ;

    if(isset($_SESSION[$PageId][$fileName])){
        $newText = $text . $_SESSION[$PageId][$formId];
        if($_SESSION[$PageId][$fileName] != null){
            $newText .= $_SESSION[$PageId][$fileName].'_'.$flag;
        }else{
            $newText .= $flag;
        }

    }




    $viewType = 'hidden'; #text / hidden
    echo '<p class="blocline">';
    echo '<span class="'.$lineId.'">'.$newText.'</span>';
    echo '<input type="'.$viewType.'" value="'.$newText.'" id="'.$lineId.'">';
    echo '<input type="'.$viewType.'" value="'.$text.'" id="'.$defId.'">';
    echo '<a href="#" class="float-end copyThisText"  thisid="'.$lineId.'" ><i class="fa-sharp fa-regular fa-copy"></i></a>';
    echo '</p>';
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Print_blocline
function Print_blocline($id,$text,$formId=null,$flag=null){
    global $PageId ;

    $defId = 'def_'.$id;
    $lineId = 'line_'.$id;


    if(isset($_SESSION[$PageId][$formId]) and $formId != null){
        $newText = $text . $_SESSION[$PageId][$formId];
    }else{
        $newText = $text ;
    }

    if($flag != null){
        $newText = $newText.$flag ;
    }


    $viewType = 'hidden'; #text / hidden
    echo '<p class="blocline">';
    echo '<span class="'.$lineId.'">'.$newText.'</span>';
    echo '<input type="'.$viewType.'" value="'.$newText.'" id="'.$lineId.'">';
    echo '<input type="'.$viewType.'" value="'.$text.'" id="'.$defId.'">';
    echo '<a href="#" class="float-end copyThisText"  thisid="'.$lineId.'" ><i class="fa-sharp fa-regular fa-copy"></i></a>';
    echo '</p>';
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     OpenForm
function formOpen($PageId,$title,$sendArr=array()){
    echo  '<section id="blogx" class="blog mb-3">';
    echo  '<div class="container" data-aos="fade-up"><div class="row">';
    echo  '<div class="col-lg-12"><div class="comments"><div class="reply-form">';
    echo  '<h4>'.$title.'</h4>';
    echo  '<form action="#" method="post" id="'.$PageId.'" >';
    echo '<div class="row">';
}

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     formClosed
function formClosed($PageId){
    echo '</div>';
    echo '<div class="row"><div class="col-lg-12"><div class="float-end">';
    echo ' <button type="submit" name="save" class="btn btn-secondary">Save</button> ';
    if(isset($_SESSION[$PageId])){
        echo '<button type="submit" name="delete" class="btn btn-danger">Delete</button>';
    }
    echo '</div></div></div>';
    echo  '</form></div></div></div></div></div></section>';

    if(isset($_POST['save'])){
        $_SESSION[$PageId] = $_POST ;
        header("Refresh:0");
    }

    if(isset($_POST['delete'])){
        unset($_SESSION[$PageId]);
        header("Refresh:0");
    }
}
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     PrintFiled
function PrintFiled($id,$placeholder){
    global $PageId ;
    $Name = 'form_'.$id ;

    $Value = '';
    if(isset($_SESSION[$PageId][$Name])){
        $Value = $_SESSION[$PageId][$Name];
    }
    echo '<div class="col-md-6 form-group">';
    echo '<input id="form_'.$id.'" name="'.$Name.'" class="form-control" value="'.$Value.'" placeholder="'.$placeholder.'">';
    echo '</div>';
}
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


