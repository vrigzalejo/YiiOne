<!--<object width="480" height="385">
    <param name="movie"
           value="http://www.youtube.com/v/S6u7ylr0zIg?fs=1 ">
</
param>
<param name="allowFullScreen" value="true"></
param>
<param name="allowscriptaccess" value="always"></
param>
<embed src="http://www.youtube.com/v/S6u7ylr0zIg?fs=1"
       type="application/x-shockwave-flash" allowscriptaccess="always"
       allowfullscreen="true" width="480" height="385"></embed></object>-->

<object width="<?php echo !empty( $width ) ? $width : 480 ?>"
        height="<?php echo !empty( $height ) ? $height : 385 ?>">
    <param name="movie" value="http://www.youtube.com/v/<?php echo $id ?>?fs=1 "></param>
    <param name="allowFullScreen" value="true">
    </param>
    <param name="allowscriptaccess" value="always"></param>
    <embed src="http://www.youtube.com/v/<?php echo $id ?>?fs=1"
           type="application/x-shockwave-flash" allowscriptaccess="always"
           allowfullscreen="true" width="<?php echo !empty( $width ) ? $width
        : 480 ?>" height="<?php echo !empty( $height ) ? $height : 385 ?>"></embed>
</object>