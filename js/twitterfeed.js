$(document).ready(function () { 
    $.getJSON('../twitterFeed/php/get-tweets.php', function(feeds) {
            var status = feeds[0].text;
            var theTime = feeds[0].created_at;

            $('#date').html($.timeago(theTime));
            $('#tweet').html(status);
    }); 
});