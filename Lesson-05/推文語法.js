//���˥���twitter ���S//
void(window.open('http://twitter.com/home/?status='.concat(encodeURIComponent(document.title)) .concat(' ') .concat (encodeURIComponent(location.href))));


//���˥���plurk �P��//
void(window.open('http://www.plurk.com/?qualifier=shares&status=' .concat(encodeURIComponent(location.href)) .concat(' ') .concat('(') .concat(encodeURIComponent(document.title)) .concat(')')));

//���˥���facebook �y��//
void(window.open('https://www.facebook.com/dialog/feed?app_id=90376669494&link='+encodeURIComponent(location.href)+'&name=test&description=test&redirect_uri='+encodeURIComponent(location.href)+'&display=popup&show_error=yes'));

//���˥��� LINE
void(window.open('https://social-plugins.line.me/lineit/share?url={encodeURIComponent(URL)}'));