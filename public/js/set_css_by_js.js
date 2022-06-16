/**
 * I think these are the main parts that I have to take care of to make a specific UI of the app
 */
$(document).ready(function () {
    /**
     * Miscellaneous customizations
     */
    $("#haveAccountBtn").click(function () {
        $(".signUp").fadeOut()
        $('.signIn').fadeIn(3333)
    });

    $("#notHaveAccountBtn").click(function () {
        $('.signIn').fadeOut()
        $(".signUp").fadeIn(3333)
    });
    $('body').addClass('w3-light-grey')
    $("#section-btn").click(function () { $("#section").toggle("slow", function () { }); });
    $("#msg-section").click(function () { $("#msg-box").toggle("slow", function () { }); });
    /*headeings*/
    $('h1:not(.i-not-head),h2:not(.i-not-head),h3:not(.i-not-head),h4:not(.i-not-head),h5:not(.i-not-head),h6:not(.i-not-head)').addClass('w3-text-theme')
    /*Colors*/
    /*Containers*/
    /*header&footer*/
    $('.header:not(.i-not-header),header:not(.i-not-header)').addClass('w3-theme')
    $('.footer:not(.i-not-footer),footer:not(.i-not-footer)').addClass('w3-theme-d5')
    /*Panels*/
    /*Borders*/
    /*Cards*/
    /*Defaults*/
    /*Fonts*/
    /*Google*/
    /*Text*/
    /*Round*/

    /*Padding*/
    /*Margins*/
    /*Display*/

    /*Buttons*/
    //$('.action-btn').addClass('w3-button')
    $('a:not(a.i-not-btn,button.i-not-btn,input.i-not-btn),button,input[type="submit"]').addClass('w3-bar-item w3-button')
    $('.serviceRequestBtn').addClass('w3-theme-l5')
    $('input[type="submit"],.inputAsSubmit').addClass('w3-theme w3-large w3-border-theme w3-bar-item w3-button w3-left w3-border')
    $('#delOrLogout').addClass('w3-red w3-large w3-border-red w3-bar-item w3-button w3-border')
    /*Notes*/
    /*Quotes*/
    /*Alerts*/
    /*Tables*/
    /*Lists*/
    /*Images*/
    /*Inputs and form attr and form tag*/
    $('input:not([type="submit"],[type="checkbox"]),select,textarea').addClass('w3-input w3-border w3-hover-border-theme')//cnsb-foc-outl-brown
    $('input[type="checkbox"],input[type="radio"]').removeClass('w3-input')
    $('input[type="checkbox"]').addClass('w3-check')
    $('input[type="radio"]').addClass('w3-radio')
    $('input[type="submit"]').addClass('w3-button w3-left w3-border')
    //
    $('label').addClass('w3-large w3-text-black')
    /*Badges*/
    $('.w3-badge').addClass('w3-right w3-small w3-theme-l5 w3-small')
    /*Tags*/
    /*Icons*/

    /*Responsive*/
    /*Layout*/
    /*Animations*/
    /*Effects*/
    $('.w3-ani-fad').addClass('w3-animate-fading')
    $('.w3-ani-opa').addClass('w3-animate-opacity')
    $('.w3-ani-t').addClass('w3-animate-top')
    $('.w3-ani-l').addClass('w3-animate-left')
    $('.w3-ani-r').addClass('w3-animate-right')
    $('.w3-ani-b').addClass('w3-animate-bottom')
    $('.w3-ani-z').addClass('w3-animate-zoom')
    $('.w3-ani-i').addClass('w3-animate-input')
    /*Bars*/
    /*Dropdowns*/
    /*Accordions*/
    /*Navigation*/
    /*Sidebar*/
    /*Tabs*/
    /*Pagination*/
    /*Progress Bars*/
    /*Slideshow*/
    /*Modal*/

    /*Tooltips*/
    /*Grid*/
    /*Code*/
    /*Filters*/
    /*Trends*/
    /*Case*/
    /*Material*/
    /*Validation*/
    /*Versions*/
    /*Mobile*/
    /**close metho
     * 
     */
    /**
     * migrate js from user page
     */

    // Accordion
    //function myFunction(id) {
    //    var x = document.getElementById(id);
    //    if (x.className.indexOf("w3-show") == -1) {
    //        x.className += " w3-show";
    //        x.previousElementSibling.className += " w3-theme-d1";
    //    } else {
    //        x.className = x.className.replace("w3-show", "");
    //        x.previousElementSibling.className =
    //            x.previousElementSibling.className.replace(" w3-theme-d1", "");
    //    }
    //}//

    //// Used to toggle the menu on smaller screens when clicking on the menu button
    //function openNav() {
    //    var x = document.getElementById("navDemo");
    //    if (x.className.indexOf("w3-show") == -1) {
    //        x.className += " w3-show";
    //    } else {
    //        x.className = x.className.replace(" w3-show", "");
    //    }
    //}

    $('body').on('change', '#select_box', function () {
        $('#show_only').val(this.value);
    });
});


