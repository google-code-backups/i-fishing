/**
 * Created with JetBrains WebStorm.
 * User: tsilvestri
 * Date: 5/21/12
 * Time: 5:19 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){
    // drop down selection listener
    $('.dropdown-menu').on('click', 'li', function(event){
        // check the pages to find the page that is visible and hide it
        $('.page').each(function(index) {
            if(this.className.indexOf('show', 0) > -1){
                $("#"+this.id).fadeOut(function(){
                    $("#"+this.id).removeClass("show").addClass("hide");
                    showPage(event.target.id);
                });
                // found the visible page now break out of the each loop.
                return;
            }
        });
   });

    // show the selected page
    function showPage(thisTarget){
        $("#"+thisTarget+"Page").fadeIn().removeClass("hide").addClass("show");
    }

});