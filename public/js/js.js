//get All IDs in Page
//$(document).ready(function () {
//    $('input,textarea,button,select,option,optgroup,fieldset,label,output').each(function () {
//        var i = $(this).attr('id');
//        console.log(i);
//    });
//});
/**
 * I think these are the main parts that I have to take care of to make a specific UI of the app
 */
/**
 * GLOBALL CSS IN JS
 */
/**
 * GLOBAL Customizations
 */
$(document).ready(function () {

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
    /*headeings*/
    $('h1:not(.i-not-head),h2:not(.i-not-head),h3:not(.i-not-head),h4:not(.i-not-head),h5:not(.i-not-head),h6:not(.i-not-head)').addClass('w3-text-theme')
    /*Colors*/
    /*Containers*/
    /*header&footer*/
    $('.header,header').addClass('w3-theme')
    $('.footer,footer').addClass('w3-theme-d5')
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
    /*Notes*/
    /*Quotes*/
    /*Alerts*/
    /*Tables*/
    /*Lists*/
    /*Images*/
    /*Inputs and form attr and form tag*/
    $('input:not([type="submit"],[type="checkbox"]),select,textarea').addClass('w3-input w3-border w3-hover-border-theme ')//cnsb-foc-outl-brown
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


function openTab(evt, idName, closeThis, tabLink) {
    var i, x, tablinks;
    x = document.getElementsByClassName(closeThis);
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName(tabLink);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-theme-action", "");
    }
    document.getElementById(idName).style.display = "block";
    evt.currentTarget.className += " w3-theme-action";
}

function openAllTabs(evt, thisOpen, tabLink) {
    var i, x, tablinks;
    x = document.getElementsByClassName(thisOpen);
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
    }
    tablinks = document.getElementsByClassName(tabLink);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-theme-action", "");
    }
    evt.currentTarget.className += " w3-theme-action";
}

function closeAndRmColor(nameId, rmColor) {
    let rmColors, nameIds;
    rmColors = document.getElementsByClassName(rmColor);
    for (i = 0; i < rmColors.length; i++) {
        rmColors[i].className = rmColors[i].className.replace(" w3-theme-action", "");
    }
    nameIds = document.getElementById(nameId);
    nameIds.style.display = 'none'
}

$('input#price').val($('i#price').html())
$('input#adjustedPrice').val($('input#price').val() - 20)

/**
 * Format of the Service Request Form page
 */
//$('p').addClass('w3-padding-16')
//
$('.section').addClass('w3-card-4 w3-section w3-container w3-padding hide w3-animate-zoom w3-block')
//
$("#service_type").on('change', function () {
    var selVal = $(this).val();
    if (selVal == 1 || selVal == 2 || selVal == 3 || selVal == 4) {
        $("#details-animals").show();
        $("#details-planting,#details-merchandise,#details-dismantling-workers,#details-upload-download-workers,#itinerary,#pay-and-post").hide();
    } else if (selVal == 5 || selVal == 6 || selVal == 7) {
        $("#details-planting").show();
        $("#details-animals,#details-merchandise,#details-dismantling-workers,#details-upload-download-workers,#itinerary,#pay-and-post").hide();
    } else if (selVal == 8 || selVal == 9 || selVal == 10) {
        $("#details-merchandise").show();
        $("#details-animals,#details-planting,#details-dismantling-workers,#details-upload-download-workers,#itinerary,#pay-and-post").hide();
    } else if (selVal == 11 || selVal == 12 || selVal == 13) {
        $("#details-dismantling-workers").show();
        $("#details-animals,#details-planting,#details-merchandise,#details-upload-download-workers,#itinerary,#pay-and-post").hide();
    } else if (selVal == 14 || selVal == 15 || selVal == 16) {
        $("#details-upload-download-workers").show();
        $("#details-animals,#details-planting,#details-merchandise,#details-dismantling-workers,#itinerary,#pay-and-post").hide();
    }
})
//
$('.steps-button').addClass('w3-btn w3-left w3-border')
//
$("#service_type").change(function () {
    $('.ad-title').text($('option:selected', $(this)).text());
});
//
$('.steps-button-3').on('click', function () {
    $('#itinerary').show()
})
//
$('.steps-button-location').on('click', function () {
    $('#location').show()
})
//
$('.steps-button-4').on('click', function () {
    $('#pay-and-post').show()
})