/**
 * The functions that contributed to building the site, often without any intervention from any library
 */
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

/**
 * set ads form
 */

$('.section').addClass('w3-white w3-card w3-container w3-section w3-padding w3-ani-z')
//
$("#service_type").on('change', function () {
    //
    var selVal = $(this).val();
    //
    if (selVal == 1) {
        //
        $("#details").show();
        $('#location').hide()
        $("p.rest_fields").hide();
        $("p#number,p#vehicle").show();
        $('.steps-button-3').on('click', function () {
            $('#itinerary').show()
        });
        $('.steps-button-4').on('click', function () {
            $('#post').show()
        });
    }
    //
    if (selVal == 2) {
        //
        $("#details").show();
        $('#location').hide()
        $("p.rest_fields").hide();
        $("p#weight,p#weight_unit,p#vehicle").show();
        $('.steps-button-3').on('click', function () {
            $('#itinerary').show()
        });
        $('.steps-button-4').on('click', function () {
            $('#post').show()
        });
    }
    //
    if (selVal == 3) {
        //
        $("#details").show();
        $('#itinerary').hide()
        $("p.rest_fields").hide();
        $("p#workers_contents").show();
        $('.steps-button-3').on('click', function () {
            $('#location').show()
        });
        $('.steps-button-4').on('click', function () {
            $('#post').show()
        });
    }
})
//
$('.steps-button').addClass('w3-btn w3-left w3-border w3-hover-theme')
//
$("#service_type").change(function () {
    $('.ad-title').text($('option:selected', $(this)).text());
});
//
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
}
//
$("#adsUrlBtn").click(function () { $("#adsUrlContainer").toggle("slow", function () { }); });
//
$("#adsMsgBoxBtn").click(function () { $("#adsMsgBoxContainer").toggle("slow", function () { }); });