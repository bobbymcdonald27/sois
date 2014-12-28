/**
 * Created by Kevin on 11/10/14.
 */
function showPic(whichpic) {
    var source = whichpic.dataset.image; //setting source = to href
    var placeholder = document.getElementById('placeholder');
    placeholder.src = source; //sets source = to href attribute
    var text = whichpic.getAttribute('title');
    var description = document.getElementById('description');
    description.firstChild.nodeValue = text;

}