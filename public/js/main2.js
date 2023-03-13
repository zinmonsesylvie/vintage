function FindNext(){
    var str = document.getElementById ("findField").value;
    if (str == "") {
        alert ("Please enter some text to search!");
        return;
    }

    var supported = false;
    var found = false;
    if (window.find) {        // Firefox, Google Chrome, Safari
        supported = true;
            // if some content is selected, the start position of the search
            // will be the end position of the selection
        found = window.find (str);
    }
    else {
        if (document.selection && document.selection.createRange) { // Internet Explorer, Opera before version 10.5
            var textRange = document.selection.createRange ();
            if (textRange.findText) {   // Internet Explorer
                supported = true;
                    // if some content is selected, the start position of the search
                    // will be the position after the start position of the selection
                if (textRange.text.length > 0) {
                    textRange.collapse (true);
                    textRange.move ("character", 1);
                }

                found = textRange.findText (str);
                if (found) {
                    textRange.select ();
                }
            }
        }
    }

    if (supported) {
        if (!found) {
            alert ("The following text was not found:\n" + str);
        }
    }
    else {
        alert ("Your browser does not support this example!");
    }
}
console.log("azertyuiolm")
