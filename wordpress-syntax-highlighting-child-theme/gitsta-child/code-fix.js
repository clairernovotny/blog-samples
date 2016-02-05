jQuery(function() {
    $ = jQuery;

    $("code").each(function() {
       var className = $(this).attr('class');
       if(!(className.lastIndexOf('language-', 0) === 0)) {
            // No language prepend
            $(this).attr('class', 'language-' + className);
        }
    });  
});