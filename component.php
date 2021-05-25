<?php

function inputElement($icon,$placeholder,$name,$value){
    switch ($name){
        case 'book_id':
            $ele = "

	        <div class=\"input-group mb-2\">
                       <div class=\"input-group-prepend\">
                          <div class=\"input-group-text bg-warning \">$icon</div>
                       </div>
                       <input type=\"text\" name='$name' value = '$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\" readonly>
               </div>

               ";
            echo $ele;
            break;

        default :
            $ele = "

	        <div class=\"input-group mb-2\">
                       <div class=\"input-group-prepend\">
                          <div class=\"input-group-text bg-warning \">$icon</div>
                       </div>
                       <input type=\"text\" name='$name' value = '$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
               </div>

               ";
            echo $ele;
    }

}


function buttonElement($btnid,$styleclass,$text,$name,$attr){
	$btn="

	<button name = '$name' '$attr' class = '$styleclass' id = '$btnid'>$text</buttton>



	";
	echo $btn;
}