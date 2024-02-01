//Click on language bar
function OnLangClick(language)
{
    //Set cookie for language for one year
    var exp = new Date();
    var oneYearFromNow = exp.getTime() + (365 * 24 * 60 * 60 * 1000);
    exp.setTime(oneYearFromNow);
    //Convert the date to the accepted GMT string format
    document.cookie = "page_language="+ language +"; expires=" + exp.toGMTString()+";path=/";
}

/*Place order script*/
function OnPlaceOrder()
{
    var formOrder=document.getElementById("OrderForm");
    formOrder.productid.value = "140116";
    var prod_qty=parseInt(formOrder.license.value);

    if(isNaN(prod_qty) || prod_qty==0)
    {
        alert("Please enter a licenses quantity.");
        formOrder.license.focus();
        return false;
    }

    if(prod_qty<0 || prod_qty>39)
    {
        formOrder.productid.value = "140117";
        
        if(prod_qty<50)
            formOrder.license.value = 50;
        
        if(prod_qty<0 || prod_qty>72)
        {
            formOrder.productid.value = "140118";
            
            if(prod_qty<100)
                formOrder.license.value = 100;

            if(prod_qty<0 || prod_qty>362)
            {
                formOrder.productid.value = "140119";
                formOrder.license.value = 1;
            }
        }
    }
    return true;
}

/*Open image in a separate window*/
function openImage(imgSrc, cx, cy)
{
	var window_width = cx+20;
	var window_height = cy+50;
	popupWin=window.open("","Image","toolbar=no, status=no, scrollbars=no, resizable=no, menubar=no, location=no, directories=no, width=" +window_width+ ", height=" +window_height, false);
	popupWin.document.open();
	popupWin.document.write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><title>Screenshot</title><link href=\"../css/common.css\" type=\"text/css\" rel=\"stylesheet\" /></head><body style=\"margin:10px; text-align:center;\"><img src=\"" + imgSrc + "\" width=\"" +cx+ "\" height=\"" +cy+ "\" /><p style=\"margin:10px; clear:both;\"><a href=\"javascript:window.close();\">Close this window</a></p></body></html>");
	popupWin.document.close();
}