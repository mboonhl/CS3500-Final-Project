

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 12</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="chapter12-project02.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
    <script type="text/javascript" src="deployJava.js"></script>
<script type="text/JavaScript" src="chapter12-project02.js"> </script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
<script type="text/javascript"> window.jQuery || document.write('<script src="/jquery-1.9.1.min.js"><\/script>'); </script>

</head>

<body>

<h1 id="demo"></h1>

<?php include 'art-header.inc.php' ?>

<div class="container">


   
   <div class="row">
      <div class="col-md-3">
      
<div class="panel panel-default">
  <div class="panel-heading">Account</div>
  <div class="panel-body">

  <ul class="nav nav-pills nav-stacked">
  <li><a href="#">Login</a></li>
  <li class="active"><a href="#">Register</a></li>

</ul>  
  
  
  </div>
</div>      
      

    
      
      </div>
      <div class="col-md-9">
          <script>
              var contentHeight;

              window.onload = function() {
                  // Adjust applet size if browser window height is large
                  contentHeight = document.getElementById("content").offsetHeight;
                  if (contentHeight <= getWindowHeight()) {
                      document.applets ["SweetHome3DOnline"].height = 600 + getWindowHeight() - contentHeight;
                  }
              }

              window.onresize = function() {
                  // Adjust applet size if browser window height is large
                  if (contentHeight <= getWindowHeight()) {
                      document.applets ["SweetHome3DOnline"].height = 600 + getWindowHeight() - contentHeight;
                  }
              }

              function getWindowHeight() {
                  if (typeof(window.innerHeight) == 'number') {
                      return window.innerHeight;
                  } else if (document.documentElement && document.documentElement.clientHeight) {
                      return document.documentElement.clientHeight;
                  } else if (document.body && document.body.clientHeight) {
                      return document.body.clientHeight;
                  } else {
                      return undefined;
                  }
              }
          </script>
          <script>
              var javaMinimumVersion = "1.6.0_10";
              var jars = "/online/additionalLanguages.zip,SweetHome3DApplet.jar,batik-svgpathparser-1.7.jar,jnlp.jar";



              if (navigator.platform.match("Win.*")) {
                  if (navigator.platform.match(".*64")) {
                      jars += ",windows/x64/java3d.jar";
                  } else {
                      jars += ",windows/i386/java3d.jar";
                  }
              } else if (navigator.platform.match("Mac.*")) {
                  if (navigator.userAgent.match(".*Mac OS X 10.5.*")) {
                      javaMinimumVersion = "1.5";
                  }
                  jars += ",macosx/java3d.jar";
              } else if (navigator.platform.match("Linux.*")) {
                  javaMinimumVersion = "1.6"; // OpenJDK doesn't give its subversion
                  if (navigator.platform.match(".*64")) {
                      jars += ",linux/x64/java3d.jar";
                  } else {
                      jars += ",linux/i386/java3d.jar";
                  }
              } else {
                  jars += ",java3d.jar";
              }

              var attributes = {codebase:"/lib",
                  code:"com.eteks.sweethome3d.applet.SweetHome3DApplet",
                  archive:jars,
                  width:"100%", height:"600",
                  name:"SweetHome3DOnline"};


              var parameters = {jnlp_embedded:

                  "PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxqbmxwIGhyZWY9IlN3ZWV0SG9tZTNEQXBwbGV0LmpubHAiPgogIDxpbmZvcm1hdGlvbj4KICAgIDx0aXRsZT5Td2VldCBIb21lIDNEIE9ubGluZTwvdGl0bGU+CiAgICA8dmVuZG9yPmVUZWtzPC92ZW5kb3I+CiAgICA8aG9tZXBhZ2UgaHJlZj0iaHR0cDovL3d3dy5zd2VldGhvbWUzZC5jb20vIi8+CiAgPC9pbmZvcm1hdGlvbj4KCiAgPHNlY3VyaXR5PgogICAgPGFsbC1wZXJtaXNzaW9ucy8+CiAgPC9zZWN1cml0eT4KCiAgPHJlc291cmNlcz4KICAgIDxqMnNlIHZlcnNpb249IjEuNSsiIG1heC1oZWFwLXNpemU9IjY0MG0iLz4KICAgIDxqYXIgaHJlZj0iL2xpYi9Td2VldEhvbWUzREFwcGxldC5qYXIiIG1haW49InRydWUiLz4KICAgIDxqYXIgaHJlZj0iL2xpYi9iYXRpay1zdmdwYXRocGFyc2VyLTEuNy5qYXIiLz4KICAgIDxwcm9wZXJ0eSBuYW1lPSJjb20uZXRla3Muc3dlZXRob21lM2QuZGVwbG95bWVudEluZm9ybWF0aW9uIiB2YWx1ZT0iT25saW5lIi8+CiAgICA8cHJvcGVydHkgbmFtZT0iam5scC5wYWNrRW5hYmxlZCIgdmFsdWU9ImZhbHNlIi8+CiAgPC9yZXNvdXJjZXM+CiAKICA8cmVzb3VyY2VzIG9zPSJXaW5kb3dzIiBhcmNoPSJ4ODYiPgogICAgPGphciBocmVmPSIvbGliL3dpbmRvd3MvaTM4Ni9qYXZhM2QuamFyIi8+CiAgPC9yZXNvdXJjZXM+CiAgPHJlc291cmNlcyBvcz0iV2luZG93cyIgYXJjaD0iYW1kNjQiPgogICAgPGphciBocmVmPSIvbGliL3dpbmRvd3MveDY0L2phdmEzZC5qYXIiLz4KICA8L3Jlc291cmNlcz4KCiAgPHJlc291cmNlcyBvcz0iTWFjIE9TIFgiPgogICAgPHByb3BlcnR5IG5hbWU9ImFwcGxlLmF3dC5ncmFwaGljcy5Vc2VRdWFydHoiIHZhbHVlPSJ0cnVlIi8+CiAgICA8cHJvcGVydHkgbmFtZT0iajNkLnJlbmQiIHZhbHVlPSJqb2dsIi8+CiAgICA8amFyIGhyZWY9Ii9saWIvbWFjb3N4L2phdmEzZC5qYXIiLz4KICA8L3Jlc291cmNlcz4KCiAgPHJlc291cmNlcyBvcz0iTGludXgiIGFyY2g9Ing4NiBpMzg2Ij4KICAgIDxqYXIgaHJlZj0iL2xpYi9saW51eC9pMzg2L2phdmEzZC5qYXIiLz4KICA8L3Jlc291cmNlcz4KICA8cmVzb3VyY2VzIG9zPSJMaW51eCIgYXJjaD0iYW1kNjQgeDg2XzY0Ij4KICAgIDxqYXIgaHJlZj0iL2xpYi9saW51eC94NjQvamF2YTNkLmphciIvPgogIDwvcmVzb3VyY2VzPgoKICA8cmVzb3VyY2VzIG9zPSJTdW5PUyI+CiAgICA8ZXh0ZW5zaW9uIGhyZWY9Imh0dHA6Ly9kb3dubG9hZC5qYXZhLm5ldC9tZWRpYS9qYXZhM2Qvd2Vic3RhcnQvcmVsZWFzZS9qYXZhM2QtMS41LWxhdGVzdC5qbmxwIi8+CiAgPC9yZXNvdXJjZXM+CgogIDxhcHBsZXQtZGVzYyBtYWluLWNsYXNzPSJjb20uZXRla3Muc3dlZXRob21lM2QuYXBwbGV0LlN3ZWV0SG9tZTNEQXBwbGV0IiAKICAgICAgICAgICAgICAgbmFtZT0iU3dlZXRIb21lM0RPbmxpbmUiIHdpZHRoPSI2MDAiIGhlaWdodD0iNjAwIi8+Cjwvam5scD4=",

                  java_arguments:"-Xmx640m -Dcom.eteks.sweethome3d.deploymentInformation=Online -Djnlp.packEnabled=false",
                  showMemoryStatus:"true",
                  userLanguage:"en",
                  furnitureCatalogURLs:"/online/furnitureCatalog.zip /online/additionalFurnitureCatalog.zip",
                  furnitureResourcesURLBase:"/models/",
                  texturesCatalogURLs:"/online/texturesCatalog.zip",
                  texturesResourcesURLBase:"/textures/",

                  listHomesURL:"",
                  readHomeURL:"",
                  writeHomeURL:"",

                  javaDisabled:'"><p align="center" style="margin:30px"><font color="#FF0000">Enable Java in the preferences of your browser<br>and/or install <a href="http://java.com">Java</a> to run Sweet Home 3D Online.</font></p><dummy att="'};
              deployJava.setInstallerType('kernel');
              deployJava.setAdditionalPackages('javax.swing,javax.imageio');
              if (deployJava.versionCheck("1.6.0_10+")) {
                  deployJava.runApplet(attributes, parameters, javaMinimumVersion);
              } else {

                  document.write("<p align='center' style='margin:30px; border:1px solid darkred; padding: 20px'><b>Please, install first <a href='http://java.com/'>Java</a> 6 or higher to run Sweet Home 3D Online.</b></p>");

              }
          </script>
      
<!--  -->
</div>  
</div> 
      

   


</div>  <!-- end container -->

<!-- <?php include 'art-footer.inc.php' ?> -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</script>

</body>
</html>
