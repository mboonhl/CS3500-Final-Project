// (C) Copyrights 2008 eTeks - All rights reserved
// Tested with Windows   IE 7, Firefox 3
//             Mac OS X  Safari 3, Firefox 2, Opera 9.5, Netscape 7
//             Linux     Firefox 3

// Writes in current document a new page containing the header of the current page and its element identified by "print"
function displayPrinterFriendlyVersion() {
  document.write("<html><head>" + document.getElementsByTagName("head") [0].innerHTML 
                 + "<style type='text/css'>a:link, a:visited, a:active { color: #000070; text-decoration: none; }</style>"
                 + "</head><body><table width='100%'><tr><td bgcolor='#FFFFFF'>" 
				 + document.getElementById("print").innerHTML + "</td></tr></table></body></html>");
  document.close();
}

// Changes displayed Sweet Home 3D image depending on the platform
function setSweetHome3DImage() {
  var smallImage;
  var imageHyperlink;

  if (navigator.platform.match("Mac.*")) {
    smallImage = "/SweetHome3DMacOSXSmall.jpg";
    imageHyperlink = "/SweetHome3DMacOSX.png";
  } else if (navigator.platform.match("Linux.*")) {
    smallImage = "/SweetHome3DLinuxSmall.jpg";
    imageHyperlink = "/SweetHome3DLinux.png";
  } else if (navigator.platform.match("SunOS.*")) {
    smallImage = "/SweetHome3DSolarisSmall.jpg";
    imageHyperlink = "/SweetHome3DSolaris.png";
  } else {
    smallImage = "/SweetHome3DSmall.jpg";
    imageHyperlink = "/SweetHome3DWindows.png";
  }

  var lastSlashIndex = document.getElementById("smallImage").src.lastIndexOf('/');
  document.getElementById("smallImage").src = 
      document.getElementById("smallImage").src.substring(0, lastSlashIndex) + smallImage;
  lastSlashIndex = document.getElementById("imageHyperlink").href.lastIndexOf('/');
  document.getElementById("imageHyperlink").href =
      document.getElementById("imageHyperlink").href.substring(0, lastSlashIndex) + imageHyperlink;
}

function setSweetHome3DOnlineImage() {
  var smallImage;
  var imageHyperlink;

  if (navigator.platform.match("Mac.*")) {
    smallImage = "/SweetHome3DOnlineMacOSXSmall.jpg";
    imageHyperlink = "/SweetHome3DOnlineMacOSX.png";
  } else if (navigator.platform.match("Linux.*")) {
    smallImage = "/SweetHome3DOnlineLinuxSmall.jpg";
    imageHyperlink = "/SweetHome3DOnlineLinux.png";
  } else {
    smallImage = "/SweetHome3DOnlineWindowsSmall.jpg";
    imageHyperlink = "/SweetHome3DOnlineWindows.png";
  }

  var lastSlashIndex = document.getElementById("smallImage").src.lastIndexOf('/');
  document.getElementById("smallImage").src = 
      document.getElementById("smallImage").src.substring(0, lastSlashIndex) + smallImage;
  lastSlashIndex = document.getElementById("imageHyperlink").href.lastIndexOf('/');
  if (document.getElementById("imageHyperlink") != null) {
     document.getElementById("imageHyperlink").href =
         document.getElementById("imageHyperlink").href.substring(0, lastSlashIndex) + imageHyperlink;
  }
}

function setSearchValue(defaultSearchText, searchFieldId) {
  if ("" == document.getElementById(searchFieldId).value) {
    document.getElementById(searchFieldId).value = defaultSearchText;
  }
}

function eraseSearchValue(defaultSearchText, searchFieldId) {
  if (defaultSearchText == document.getElementById(searchFieldId).value) {
    document.getElementById(searchFieldId).value = "";
  }
}