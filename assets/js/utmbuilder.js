//
// utmbuilder.js
// Site specific JS
//

'use strict';
// instantiate dataLayer
window.dataLayer = window.dataLayer || [];


// Check if local and Session storage is available
function storageAvailable(type) {
    var storage;
    try {
        storage = window[type];
        var x = '__storage_test__';
        storage.setItem(x, x);
        storage.removeItem(x);
        return true;
    }
    catch(e) {
        return e instanceof DOMException && (
            // everything except Firefox
            e.code === 22 ||
            // Firefox
            e.code === 1014 ||
            // test name field too, because code might not be present
            // everything except Firefox
            e.name === 'QuotaExceededError' ||
            // Firefox
            e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
            // acknowledge QuotaExceededError only if there's something already stored
            (storage && storage.length !== 0);
    }
}

//Set greeting message based on local time/date
function getGreeting() {
    var now = new Date();
    var hrs = now.getHours();
    var msg = "";
    var submsg = "";

    if (hrs >  0) msg = "Mornin' Sunshine!"; // REALLY early
    if (hrs >  6) msg = "Good morning";      // After 6am
    if (hrs > 12) msg = "Good afternoon";    // After 12pm
    if (hrs > 17) msg = "Good evening";      // After 5pm
    if (hrs > 22) msg = "Bit late, isn't it?";        // After 10pm

    if (hrs >  0) submsg = "Early bird gets the best UTM tags (and the best sunrises)"; // REALLY early
    if (hrs >  6) submsg = "It's a beautiful day in the universe for some UTM tagging";      // After 6am
    if (hrs > 17) submsg = "Astronauts say it's Beer o'clock, join us while you create your UTM tags";      // After 5pm
    if (hrs > 22) submsg = "Don't space out while you create your UTM tags!";        // After 10pm

    document.getElementById("greeting").innerHTML = msg;
    document.getElementById("subgreeting").innerHTML = submsg;
}

$("#input-channel").change(function() {
    $("#input-source").load("../../includes/utms/source.php?choice=" + $("#input-channel").val());
});

//instantiate ClipBoard
var clipboard = new ClipboardJS('.copy');

clipboard.on('success', function(e) {
  setTooltip(e.trigger, 'Copied!');
  hideTooltip(e.trigger);
  trackCopy();
});

clipboard.on('error', function(e) {
  setTooltip(e.trigger, 'Failed!');
  hideTooltip(e.trigger);
});

function setTooltip(btn, message) {
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
}

function hideTooltip(btn) {
  setTimeout(function() {
    $(btn).tooltip('hide');
  }, 2000);
}


//load more handling
$(document).ready(function(){

    // Load more data
    $('.load-more').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = Number($('#numrows').val());

        if(row==0){
            var rowperpageminus = allcount-(row+rowperpage);
        } else {
            var rowperpageminus = allcount-Number($('#row').val());
            alert(rowperpageminus);
        }

        var direction = $('#direction').val();
        var channelid = $('#channelid').val();
        row = row + rowperpage;

        if(row < allcount){
            $("#row").val(row);

            $.ajax({
                url: '../../application/utms/loadmore.php',
                type: 'post',
                data: {row:row, channelid:channelid, direction:direction},
                beforeSend:function(){
                    $(".load-more").text("Loading...");
                },
                success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".utm:last").after(response).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if(rowno >= allcount){

                            // Change the text and background
                            $('.load-more').text("Hide");
                           // $('.load-more').css("background","darkorchid");
                        }else{
                            $(".load-more").text("Load more");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {
                // When row is greater than allcount then remove all class='post' element after 3 element
                 $('.utm:nth-child('+rowperpageminus+')').nextAll('.utm').remove();


                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");
                //$('.load-more').css("background","#15a9ce");

            }, 2000);


        }

    });

});
