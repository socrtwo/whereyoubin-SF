function openMail(url) {
    var dwidth = 605;
    var dheight = 605;
    var leftVal = (screen.width / 2) - (dwidth/2);
    var topVal = (screen.height / 2) - (dheight/2);
    window.open('mailto:?subject=See Where I have Traveled in the World So Far&body=Check out this neat site which allows you to color the countries where you have visited in the world.  See my map here: '+ escape(url));
}

function openFacebook(url) {
    var dwidth = 605;
    var dheight = 605;
    var leftVal = (screen.width / 2) - (dwidth/2);
    var topVal = (screen.height / 2) - (dheight/2);
    window.open('http://www.facebook.com/sharer.php?u='+url, 'FacebookWindow','fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=no,directories=no,location=no,width='+dwidth+',height='+dheight+',left='+leftVal+',top='+topVal, true);
}

function openTwitter(url) {
    var dwidth = 605;
    var dheight = 605;
    var leftVal = (screen.width / 2) - (dwidth/2);
    var topVal = (screen.height / 2) - (dheight/2);
    window.open('http://twitter.com/home/?status='+url, 'TwitterWindow','fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=no,directories=no,location=no,width='+dwidth+',height='+dheight+',left='+leftVal+',top='+topVal, true);
}


//http://twitter.com/home/?status=Check+out+PHP%3A+Keep+HTML+Tags+Paired+@+http://takien.com/php-keep-html-tags-paired/