<?php

class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function generate($content_view, $template_view, $data = null, $more = null, $grades = null, $results = null, $gradeScore = null)
	{
        if(is_array($data)) {
            extract($data);
        }
		 if(is_array($more)) {
             extract($more);
         }
        if(is_array($grades)) {
            extract($grades);
        }
        if (is_array($results)) {
            extract($results);
        }
        if(is_array($gradeScore)){
            extract($gradeScore);
        }
		include 'app/views/'.$template_view;
	}
}