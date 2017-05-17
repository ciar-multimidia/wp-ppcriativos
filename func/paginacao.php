<?php
function paginacao($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
     global $paged;
     if(empty($paged)) $paged = 1;
	 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='paginacao'>\n<div class='paginacaoml'><span class='inicio'>Página ".$paged." de ".$pages."</span><br>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='current'><strong>&laquo;</strong></a>";
         if($paged > 3 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'><strong>1</strong></a> <span class='current'><strong>...</strong></span>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'><strong>".$i."</strong></span>":"<a href='".get_pagenum_link($i)."' class='inactive'><strong>".$i."</strong></a>";
             }
         }

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<span class='current'><strong>...</strong></span> <a href='".get_pagenum_link($pages)."'><strong>$pages</strong></a>";
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class='final'><strong>&rsaquo;&rsaquo;</strong></a>"; 
         echo "</div>\n</div>";
     }
}?>