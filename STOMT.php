<?php
/**
 * Created by STOMT.
 * User: philippzentner
 * Date: 10.10.17
 * Time: 17:57
 */

function STOMT($pagename,
               $widgetType = 'addTab',
               $position = 'right',
               $label = 'Quick Feedback',
               $colorText = '#ffffff',
               $colorBackground ='#000000',
               $colorHover = '#ccc') {


    // To keep it compatible with older PHP versions we make use of array() instead of []
    $config = array(
        'targetId' => $pagename,
        'position' => $position,
        'label' => $label,
        'colorText' => $colorText,
        'colorBackground' => $colorBackground,
        'colorHover' => $colorHover
    );

    echo "<script>
            // Include the STOMT JavaScript SDK
            (function(w, d, n, r, t, s){
            w.Stomt = w.Stomt||[];
            t = d.createElement(n);
            s = d.getElementsByTagName(n)[0];
            t.async=1;
            t.src=r;
            s.parentNode.insertBefore(t,s);
            })(window, document, 'script', 'https://www.stomt.com/widget.js');
            
            Stomt.push(['".$widgetType."', ".json_encode($config)."]);
            </script>";
}