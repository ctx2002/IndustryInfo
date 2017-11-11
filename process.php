<?php
require_once "bootstrap.php";
require_once "vendor/autoload.php";
use Softwarewisdom\Crawler\Text\Analyzer;

$text = <<<EOD
<!doctype html>

<!--
                                      ____
    __     __  _ _                    \   \
    \ \   / / | | |                    |   \
     \ \_/ /__| | | _____      __      /    \
      \   / _ \ | |/ _ \ \ /\ / /     /_/ /\ \
       | |  __/ | | (_) \ V  V /       / /  \ \
       |_|\___|_|_|\___/ \_/\_/       /_/    \_\


 -->


<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-US" lang="en-US">

<head id="www-yellow-co-nz">
    <!-- TIMER:0ms:base.html start -->
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        
            GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd Architectural Designers Invercargill Area | Yellow® NZ
        
    </title>

    



    

    <meta name="referrer" content="origin">

    
    <meta name="twitter:site" content="@yellownz" />
    <meta name="twitter:card" content="summary" />
    
        <meta property="og:url" content="https://yellow.co.nz/y/gm-designs" />
    
    
        <meta property="og:title" content="GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd Architectural Designers Invercargill Area | Yellow® NZ" />
        <meta name="twitter:title" content="GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd Architectural Designers Invercargill Area | Yellow® NZ" />
    
    
        <meta property="og:description" content="Architectural Designers in Invercargill Area: GM Designs & Consulting Civil & Structural Engineering Group Ltd. Commercial, CAD, Consulting, Design, Draughting, Inspections, Planning, Specifications, Housing, Offices, Decks" />
        <meta name="twitter:description" content="Architectural Designers in Invercargill Area: GM Designs & Consulting Civil & Structural Engineering Group Ltd. Commercial, CAD, Consulting, Design, Draughting, Inspections, Planning, Specifications, Housing, Offices, Decks" />
    
    
        <meta property="og:image" content="https://yellow.co.nz/static/images/yellow-logo.png" />
        <meta name="twitter:image" content="https://yellow.co.nz/static/images/yellow-logo.png"  />
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="https://yellow.co.nz/static/images/apple-touch-icon.png" />
    <meta name="google" content="nositelinkssearchbox" />

    
    <link rel="canonical" href="https://yellow.co.nz/y/gm-designs" />
    
    <link rel="shortcut icon" href="https://yellow.co.nz/static/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="https://yellow.co.nz/static/styles/css/yellow.min.css?r=Beryllium-7.11.9.hotfix.7.11.x.2" />
    <!--[if IE]><link rel="stylesheet" type="text/css" href="https://yellow.co.nz/static/styles/css/yellowIE.css?r=Beryllium-7.11.9.hotfix.7.11.x.2" /><![endif]-->
    
    
    



    
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','ypData','GTM-3TFC');</script>
        <!-- End Google Tag Manager -->
    

    

    

    

    
    
    <script>

    var slug_ylog = 'gm-designs';
    var catid_ga_ylog = '286';
    var categoryname_ylog = 'Architectural Designers';
    var listingid_ylog = '701247130';
    var listingpriority_ylog = 'standard';
    var pagetype52_ylog = 'Regular';
    var catid_ylog = '286';
    var pagetitle_ylog = 'GM Designs & Consulting Civil & Structural Engineering Group Ltd Invercargill Area';
    var products_ylog = '';
    var categoryname_ga_ylog = 'Architectural Designers';
    var listingtitle_ylog = 'GM Designs & Consulting Civil & Structural Engineering Group Ltd';
    var assetId_ylog = '';


    
    var dataLayer = new Object();
    dataLayer.gaID = 'UA-5159414-1';
    dataLayer.UAgaID = 'UA-35952421-1';
    dataLayer.hostname = 'yellow.co.nz';
    dataLayer.loginId = '0';
    dataLayer.username = '';
    dataLayer.pageType = 'BusinessDetailsPage_Regular';
    dataLayer.notificationid = '7';
    dataLayer.notificationname = 'Filter Refinements';
    dataLayer.eVars = { "Listing_Visit": ['Document_Button_Link', 'Slider_Scroll_Next', 'Carousel_Scroll_Next', 'Phone_Number_Click_Mobile', 'Slider_Scroll_Prev', 'Get_Directions_Tab', 'Map_Expand_Link', 'Review_Submit', 'Logo_Link', 'Address_Link', 'Review_Link', 'Customer_Google+', 'Get_Directions_Button', 'Review_Write', 'CC_Email', 'Report_Inappropriate_Image', 'Skype_ID', 'Carousel_Scroll_Prev', 'PDF_Download', 'Phone_Number_Click_Primary', 'Customer_Twitter', 'CC_Customer_Facebook', 'CC_Customer_Twitter', 'Overview_Nav', 'HS_Left_Link', 'Team_Phone_Call_Us_Hide', 'Review_Feedback', 'Email_Submit', 'Add_Photo', 'Phone_Call_Us_Hide', 'Print_Link', 'Watch_Video_Link', 'Review_Stars', 'Customer_Instagram', 'CC_Customer_YouTube', 'Send_Link', 'Add_Business', 'Phone_Number_Click_Secondary_No', 'Virtual_Tour', 'Logo', 'CC_Staff_Email', 'HS_Top_Link', 'CC_Customer_Instagram', 'Gallery_Thumb', 'CC_Print_Page', 'Customer_Facebook', 'Reviews_Nav', 'Website', 'Coupon_View_Link', 'Contact_Card', 'CC_Customer_LinkedIn', 'View_IMG_Link', 'Phone', 'Play_Video_Button', 'Team_Phone_Number_Click_Primary', 'Header_Log_In', 'Email_Submit_Friend', 'HS_Right_Link', 'Coupon_Image_Link', 'Team_Phone_Call_Us', 'View_Reviews', 'Team_Email_Link', 'Review_Nav', 'Get_Directions_Link', 'Photos_Videos_Nav', 'CC_Customer_Google+', 'Phone_Call_Us', 'More_Info_Link', 'Phone_Number_Click_Free_Call', 'Customer_LinkedIn', 'Listed_In', 'Share_This_Business', 'Website_Link', 'Nearby_Businesses_Tab', 'Review_First', 'View_Ad_Link', 'Customer_YouTube', 'Map_Icon_Link', 'Description_Link', 'Email_Link', 'Business_Name_Link', 'Phone_Number_Click_Fax', 'CC_Website', 'Document_Image_Link', 'CC_Skype_ID', 'GeoPin'] };
    

    dataLayer.listingId = listingid_ylog;
    dataLayer.categoryName = categoryname_ga_ylog;
    dataLayer.categoryID = catid_ga_ylog;
    dataLayer.RSPVersion = 'Underline - Status Quo';
    dataLayer.RSP_Source = 'Other';
    dataLayer.businessName = listingtitle_ylog;
    dataLayer.slug = slug_ylog;
    dataLayer.priority = listingpriority_ylog;
    dataLayer.reviewsUrl = '/listing/701247130/reviews';

</script>

    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};

        googletag.cmd = googletag.cmd || [];
        googletag.cmd.push(function () {
            googletag.defineSlot('/6936/yellow.co.nz_2017/FL_Details_Pages', [728, 90],
                'div-gpt-ad-1492662328284-0')
                .addService(googletag.pubads())
                .setTargeting('lp', '6663')
                .setTargeting('cp', '286');

            googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });
    </script>

    

    <!--[if lt IE 9]>
        <script>
            document.createElement('header');
            document.createElement('nav');
            document.createElement('section');
            document.createElement('article');
            document.createElement('aside');
            document.createElement('footer');
            document.createElement('section');
        </script>
    <![endif]-->

    <script type='text/javascript' src="https://yellow.co.nz/static/js/lib/short-scripts/google-tag.js" ></script>
    <!-- START Nielsen Online SiteCensus V6.0 -->
    <!-- COPYRIGHT 2012 Nielsen Online -->
    <script type="text/javascript" src="https://yellow.co.nz/static/js/lib/short-scripts/nelson.js "></script>
    <noscript>
     <div>
     <img src="//secure-nz.imrworldwide.com/cgi-bin/m?ci=nz-ypages&amp;cg=0&amp;cc=1&amp;ts=noscript"
     width="1" height="1" alt="" />
     </div>
    </noscript>
    <!-- END Nielsen Online SiteCensus V6.0 -->
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VgIPVV5VGwIIUFRQAwE="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(19),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(c){try{i("ierr",[c,s.now(),!0])}catch(u){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,s.now()])}var i=t("handle"),a=t(20),c=t("ee"),s=t("loader"),f=window.onerror,u=!1,d=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(p){"stack"in p&&(t(12),t(11),"addEventListener"in window&&t(6),s.xhrWrappable&&t(13),u=!0)}c.on("fn-start",function(t,e,n){u&&(d+=1)}),c.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),c.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),c.on("internal-error",function(t){i("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){C++,M=y.hash,this[u]=b.now()}function o(){C--,y.hash!==M&&i(0,!0);var t=b.now();this[l]=~~this[l]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+y,e])}function a(t,e){t.on(e,function(){this[e]=b.now()})}var c="-start",s="-end",f="-body",u="fn"+c,d="fn"+s,p="cb"+c,h="cb"+s,l="jsTime",m="fetch",v="addEventListener",w=window,y=w.location,b=t("loader");if(w[v]&&b.xhrWrappable){var g=t(9),x=t(10),E=t(8),O=t(6),R=t(12),P=t(7),T=t(13),S=t("ee"),N=S.get("tracer");t(14),b.features.spa=!0;var M,j=w[v],C=0;S.on(u,r),S.on(p,r),S.on(d,o),S.on(h,o),S.buffer([u,d,"xhr-done","xhr-resolved"]),O.buffer([u]),R.buffer(["setTimeout"+s,"clearTimeout"+c,u]),T.buffer([u,"new-xhr","send-xhr"+c]),P.buffer([m+c,m+"-done",m+f+c,m+f+s]),E.buffer(["newURL"]),g.buffer([u]),x.buffer(["propagate",p,h,"executor-err","resolve"+c]),N.buffer([u,"no-"+u]),a(T,"send-xhr"+c),a(S,"xhr-resolved"),a(S,"xhr-done"),a(P,m+c),a(P,m+"-done"),E.on("pushState-end",i),E.on("replaceState-end",i),j("hashchange",i,!0),j("load",i,!0),j("popstate",function(){i(0,C>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(12),c=t(11),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",h="-start",l="-end",m="fn"+h,v="fn"+l,w="bstTimer",y="pushState",b=t("loader");b.features.stn=!0,t(8);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=b.now())}),o.on(v,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,b.now()])}),a.on(m,function(t,e,n){this.bstStart=b.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,b.now(),this.bstType])}),c.on(m,function(){this.bstStart=b.now()}),c.on(v,function(t,e){i(w,[e,this.bstStart,b.now(),"requestAnimationFrame"])}),o.on(y+h,function(t){this.time=b.now(),this.startPath=location.pathname+location.hash}),o.on(y+l,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t(22)(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=r.apply(this,arguments);return o.emit(n+"start",arguments,t),t.then(function(e){return o.emit(n+"end",[null,e],t),e},function(e){throw o.emit(n+"end",[e],t),e})})}var o=t("ee").get("fetch"),i=t(19);e.exports=o;var a=window,c="fetch-",s=c+"body-",f=["arrayBuffer","blob","json","text","formData"],u=a.Request,d=a.Response,p=a.fetch,h="prototype";u&&d&&p&&(i(f,function(t,e){r(u[h],e,s),r(d[h],e,s)}),r(a,"fetch",c),o.on(c+"end",function(t,e){var n=this;e?e.clone().arrayBuffer().then(function(t){n.rxSize=t.byteLength,o.emit(c+"done",[null,e],n)}):o.emit(c+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t(22)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){var r=t("ee").get("mutation"),o=t(22)(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],10:[function(t,e,n){function r(t){var e=a.context(),n=c(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t(22),a=t("ee").get("promise"),c=i(a),s=t(19),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;s(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),c=f.resolve(i);return c}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),s(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=c(t[0],"resolve-",this),t[1]=c(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),c.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=c(t[0],"cb-",this),t[1]=c(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],11:[function(t,e,n){var r=t("ee").get("raf"),o=t(22)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],12:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(22)(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],13:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",c)}function i(t){b.push(t),l&&(x?x.then(a):v?v(a):(E=-E,O.data=E))}function a(){for(var t=0;t<b.length;t++)r([],b[t]);b.length&&(b=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t(22)(u),p=NREUM.o,h=p.XHR,l=p.MO,m=p.PR,v=p.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],b=[];e.exports=u;var g=window.XMLHttpRequest=function(t){var e=new h(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(h,g),g.prototype=h.prototype,d.inPlace(g.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),l){var x=m&&m.resolve();if(!v&&!m){var E=1,O=document.createTextNode(E);new l(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],14:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=a.now()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var s=t.getResponseHeader("X-NewRelic-App-Data");s&&(e.cat=s.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return l(r)}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(15),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,p=t("id"),h=t(18),l=t(17),m=window.XMLHttpRequest;a.features.xhr=!0,t(13),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=l(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<d;c++)e.addEventListener(u[c],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)})}},{}],15:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],16:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(19),c=t(20),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",h=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var l=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(h+"tracer",[f.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{s.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){l[e]=o(h+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],17:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],18:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],19:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],20:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],21:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],22:[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(20),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),c=l(n),s=c.length,f=0;f<s;f++)c[f].apply(a,r);var d=u[y[n]];return d&&d.push([b,n,r,a]),a}}function h(t,e){w[t]=l(t).concat(e)}function l(t){return w[t]||[]}function m(t){return d[t]=d[t]||o(n)}function v(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var w={},y={},b={on:h,emit:n,get:m,listeners:l,context:e,buffer:v,abort:a,aborted:!1};return b}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var c="nr@context",s=t("gos"),f=t(19),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!x++){var t=g.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(y,function(e,n){t[e]||(t[e]=n)}),s("mark",["onload",a()+g.offset],null,"api");var n=p.createElement("script");n.src="https://"+t.agent,e.parentNode.insertBefore(n,e)}}function o(){"complete"===p.readyState&&i()}function i(){s("mark",["domContent",a()+g.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(c=Math.max((new Date).getTime(),c))-g.offset}var c=(new Date).getTime(),s=t("handle"),f=t(19),u=t("ee"),d=window,p=d.document,h="addEventListener",l="attachEvent",m=d.XMLHttpRequest,v=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var w=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1044.min.js"},b=m&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),g=e.exports={offset:c,now:a,origin:w,features:{},xhrWrappable:b};t(16),p[h]?(p[h]("DOMContentLoaded",i,!1),d[h]("load",r,!1)):(p[l]("onreadystatechange",o),d[l]("onload",r)),s("mark",["firstbyte",c],null,"api");var x=0,E=t(21)},{}]},{},["loader",2,14,5,3,4]);</script></head>

<body class="businessdetailspage_regular businessdetailspage   ">

    
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-3TFC"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    

    <header>
        <!--nav top bar-->
        
            



<nav class="sticky navbar-container">
	<div class="navbar">
		<div class="gridContainer">

			
			<div class="yellow-sites">
				<ul>
                    <li class="yellow-logo-container">
                        <a href="/">
                            <img class="yellow-logo" src="/static/images/yolLogo.svg" alt="Yellow Logo">
                        </a>
                    </li>
                    
						
                    
				</ul>
			</div>
			

            
    			
    			<div class="yellow-nav-tools">
    				<ul>
    					<!--  -->

    					

    					
    					<li class="favourites-count zeroFav"><a href="/user/profile/shortlist/" data-ga="track" data-ga-cat="Shortlist" data-ga-act="Menu Clicks" data-ga-lab="Bookmark Clicks">
    						<div class="shortlist-icon shortlist-icon-header" data-ga="track" data-ga-cat="Shortlist" data-ga-act="Menu Clicks" data-ga-lab="Bookmark Clicks"> <span>-</span></div>
    					</a></li>
    					

                        
                            <!-- <div class="search-toggle-container">
                                <i class="icon-search icon-large"></i>

                            </div> -->
                            <li class="search-toggle">
                                <span class="icon-search"></span>
                            </li>
                        

						
							
								<li id="navLogin" data-ga-tag="true" data-ga-listingpriority="" class="nav-login">
									<a href="/user/login/?from=/" data-action="show-login" data-ga="track" data-ga-cat="SignIn" data-ga-act="Navigation" data-ga-lab="SignInHeader">
										<span> Log in </span>
										<input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
									</a>
								</li>
							
						
    				</ul>
    			</div>
                
            
		</div>

	</div>
	<div id="menu_ctn" class="gridContainer">
		<div id="navLoginPanel" class="logged-in-panel">
			
				
			
		</div>
	</div>
</nav>

        

        
        
            

<div class="bg-wrap">
    <div class="yellow-search-wrapper " id="yellowSearchSticky">
        
        <div class="search-header">
            <span class="close"></span>
        </div>
        <div class="yellow-search-container">
            <div class="yellow-search-form">
                <input type="hidden" id="region-by-ip" value="Auckland" />
                <form id="searchForm" method="POST" action="/search">
                    <div id="searchFields" class="search-fields-container">
                        <div class="search-what-container">
                            <span title="Clear field" class="clearField" id="clear_what" data-name="What"><i class="icon-remove-sign"></i></span>
                            <input autocomplete="off" type="text" id="searchWhatField" name="what" placeholder="I'm looking for..." tabindex="1" value="" onfocus="this.value = this.value;">
                            <p class="formErrorMessage" style="display:none">Please enter <strong>"what"</strong> you're searching for</p>
                            
                        </div>
                        <div class="search-where-container">
                            <span title="Clear field" class="clearField" id="clear_where" data-name="Where"><i class="icon-remove-sign"></i></span>
                            <input autocomplete="off" type="text" id="searchWhereField" name="where" placeholder="Town, suburb, city or region" tabindex="2" value="" onfocus="this.value = this.value;">
                        </div>
                    </div>
                    <div class="search-button-container" id="searchButton">
                        <button class="yellow large rounded" tabindex="3">
                            <span>Find</span>
                            <i class="icon-search icon-large"></i>
                        </button>
                    </div>

                    <div id="message_bar"></div>
                    

                    <input type="hidden" id="browser_lat" name="browser_lat" value="" style="display:none"/>
                    <input type="hidden" id="browser_lng" name="browser_lng" value="" style="display:none"/>
                    
                        <input type="hidden" id="favourites_to_sync" value="[]"/>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
        
        
    </header>

    


<script>
    (function (pageData) {
        pageData.noOfResults = 1;
        window.pageData = pageData;
    }(window.pageData || {}));
</script>



<div class="dlp-container no-hero-banner">

    <div class="row listing-fragments">

        <div class="primary-col">
            <div id="detailSectionPrimary">
                <div style="width:100%">
                    <section id="businessDetailsPrimary">
                        <div class="summary">
                          
                            
                              
                            
                          

                            <div class="block">
                                <h1 class="heading"><span itemprop="name">GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd</span></h1>
                                
                                    
                                    
<div class="rating-sml" title="No reviews">
	<div class="current-rating-result no-rating-result">
		<p>

		<a id="scroll_review_form" class="actionRateReview noReviews" href="#detailsRatingsReviews">


		Rate this business - be the first!
		</a>

		</p>
	</div> 
</div>


                                    
                                


                                <p class="inline-block hidden">
                                    <a href="#detailsRatingsReviews" class="button large actionRateReview" title="Write a review"><i class="icon-pencil"></i> Rate this business</a>
                               </p>
                               <div class="business-verification">
                                    
                                      
                                          <p class="verified"><a href="/listing/claim/701247130/?from=/y/gm-designs&next=/y/gm-designs" data-ga-id="Claim">Is this your business?</a></p>
                                      

                                      
                                    
                                </div>

                                <p class="action-share-business-container">
                                  <a href="#" data-listing-id="2069611" data-title="Share this business" data-slug="gm-designs" data-track-listing-id="701247130" class="action-share-business" title="Send to a friend"><i class="icon-share"></i> Share</a>
                                </p>

                                <p class="action-share-business-container bookmark">
                                    <a bookmark-business-btn
                                       bookmark-id=""
                                       bookmark-listing-id="2069611"
                                       bookmark-title="GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd"
                                       bookmark-address='21 The Crescent Invercargill'
                                       bookmark-description=''
                                       bookmark-note=""
                                       bookmark-flag=""
                                       bookmark-slug="gm-designs"
                                       
                                       bookmark-email="graeme@gmdesigns.co.nz"
                                       
                                       
                                       action="/services/save-bookmark"
                                       class="bookmarkIcon bookmarkIcon-unsaved"
                                       data-ga-id="Add_Business"
                                       data-track-listing-id="2069611"
                                       data-slug="gm-designs"
                                       data-listing-id="701247130"
                                       data-category-id="286"
                                       href="#">
                                        <span class="bookmarkIcon-saved-desc">Bookmarked</span>
                                        <span class="bookmarkIcon-unsaved-desc">Bookmark</span>
                                    </a>
                                </p>

                            <!-- Email Modal -->
                            
<div id="dialog-email-friend" class="ui-helper-hidden share-modal">
       <div id="emailCont" class="datatag" data-track-formid="email_friend">
            <div class="contentBlock">
                <div class="header">
                    <div class="closeBox">
                        <a title="Close this box" href="#" class="Closebtn share-modal-header-icon"><i class="icon-remove-sign"></i></a>
                    </div>
                    <i class="icon-share share-modal-header-icon"></i>
                    <div id="emailDialogTitle" class="h2">Share this business</div>
                </div>
                <div class="content">
                    <div class="share-modal-social">
                        <a href="#" class="button twitter twitter-share-button right" target="_blank"><i class="icon-twitter"></i>Share on Twitter</a>
                        <a href="#" class="button facebook fb-share-button" target="_blank"><i class="icon-facebook"></i> Share on Facebook</a>
                    </div>
                    <div class="share-modal-divider">Or</div>
                    <form method="POST" id="emailForm" action="/services/email-friend/"><input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
                        <input type="hidden" value="" name="previousPath" id="previousPath"/>
                        <input type="hidden" value="2069611" name="emailListingId" id="emailListingId"/>
                        <input type="hidden" value="gm-designs" name="emailListingSlug" id="emailListingSlug"/>
                        <div class="formItem formItemInputText">
                            <label for="fromName">Your name</label>
                            <input data-required="true" type="text" value="" name="fromName" id="fromName"/>
                        </div>
                        <div class="formItem formItemInputText">
                            <label for="fromAddress">Your email</label>
                            <input data-required="true" type="text" value="" name="fromAddress" id="fromAddress">
                        </div>
                        <div class="formItem">
                            <label for="copySelf1"><input type="checkbox" value="true" name="copySelf" id="copySelf1">Send yourself a copy?
                            <input type="hidden" value="on" name="_copySelf"/> </label>
                        </div>
                        <div class="formItem formItemInputText">
                            <label for="toAddress">To: <span class="share-modal-hint">Email</span></label>
                            <input data-required="true" type="text" value="" name="toAddress" id="toAddress"/>
                        </div>
                        <div class="formItem formItemInputText">
                            <label for="message">Add message: <span class="share-modal-hint">Optional</span><br></label>
                            <textarea name="message" id="message"></textarea>
                        </div>
                        <div class="formItem buttons">
                            <button id="cancelEmailPopup" class="Closebtn ghost-button button white cancel" type="button"><i class="icon-close"></i> Cancel</button>
                            <button id="sendEmailPopup" class="button success submit" type="submit" data-ga-id="Email_Submit_Friend" data-track-listing-id="2069611" data-slug="gm-designs" data-listing-id="2069611"><i class="icon-share-square-o"></i> Share</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

                            </div>
                        </div>

                        <!-- Included from SRP -->
                        <div class="item-actions">
                            <div class="button-group list-item-actions-primary">
                                
                                    
                                        <div class="action">
                                            <meta itemprop="telephone" content="03-218 8910"/>
                                            <a class="button standard action-call phone-list shownumbers" data-ga-id="Phone_Call_Us"><i class="icon-phone"></i> <span>Show number</span></a>
                                            <a style="display:none;" class="button standard action-call phone-list shownumbers hidenumbers" data-ga-id="Phone_Call_Us"><i class="icon-phone"></i> <span>Hide number</span></a>

                                            <div class="numbers-container">
                                                
                                                    <a href="javascript:void(0);" class="button hideOnMobile"><span class="label">Primary </span><span>03-218 8910</span></a>
                                                    <a href="tel:03-218 8910" class="button showOnMobile"><span class="label">Primary </span><span>03-218 8910</span></a>
                                                

                                                

                                                

                                                

                                                

                                                

                                                
                                            </div>

                                        </div>
                                    
                                

                                
                                    
                                    <div class="action">
                                        <a href="http://www.gmdesigns.co.nz" itemprop="url" target="_blank" class="button standard actionURL" data-ga-id="Website_Link"><i class="icon-globe"></i> <span>Website</span></a>
                                    </div>
                                    
                                

                                
                                    <meta itemprop="email" content="graeme@gmdesigns.co.nz"/>
                                    <div class="action">
                                      <a href="#" class="button standard action-email hideOnMobile emailBusiness" data-listing-id="2069611" data-slug="gm-designs" data-title="Contact GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd" data-category-id="286" data-track-listing-id="701247130" data-ga-id="Email_Link"><i class="icon-envelope"></i> <span>Email</span></a>
                                        <a class="button standard action-email showOnMobile inline-block" href="mailto:graeme@gmdesigns.co.nz" data-ga-id="Email_Link"><i class="icon-envelope"></i> <span>Email</span></a>
                                    </div>
                                

                                
                                    
                                        
                                            <div class="action"><a target="_blank" href='https://wises.co.nz/direction/{"text":"Current location"}/{"text":"GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd","location":{"lat":-46.4132368,"lng":168.3469924}}' class="button standard actionDirections" title="Directions" data-ga-id="Get_Directions_Link"><i class="icon-location-arrow"></i> <span>Directions</span></a></div>
                                        
                                    
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
                
<script type="text/javascript" src="//www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<div id="dialog-email-business" class="ui-helper-hidden">
        <div id="emailCont" class="datatag" data-track-formid="email_business">
            <div class="contentBlock">
                <div class="header">
                    <div class="closeBox">
                        <a title="Close this box" href="#" class="Closebtn share-modal-header-icon"><i class="icon-remove-sign"></i></a>
                    </div>                    
                    <div id="emailDialogTitle" class="h2">Contact GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd</div>
                </div>
                <div class="content">
                    <p><i class="icon-caret-right required"></i> = Required Information</p>
                    <form method="POST" id="emailForm" action="/services/email-business/"><input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
                        <input type="hidden" value="" name="previousPath" id="previousPath"/>
                        <input type="hidden" value="2069611" name="emailListingId" id="emailListingId"/>
                        <input type="hidden" name="teamMember" value="" id="teamMemberOrder"/>
                        <input data-required="true" type="hidden" value="Yellow" name="fromName" id="fromName"/>
                        <input type="text" value="" name="hash" id="hash"/>
                        <div id="hash_time"></div>

                        <div class="formItem formItemInputText">
                            <label for="fromAddress"><i class="icon-caret-right required"></i> Your email:</label>
                            <input data-required="true" type="text" value="" name="fromAddress" id="fromAddress">
                        </div>
                        <div class="formItem">
                            <label for="copySelf1"><input type="checkbox" value="true" name="copySelf" id="copySelf1">Send yourself a copy?
                            <input type="hidden" value="on" name="_copySelf"/> </label>
                        </div>
                        <div class="formItem formItemInputText">
                            <label for="message"><i class="icon-caret-right required"></i> Your Message:<br><span class="hint">(needs to be more than 20 characters, 500 left)</span></label>
                            <textarea data-required="true" data-length="20,500" name="message" id="message"></textarea>

                        </div>
                        <div class="formItem" id="recaptcha-item" style="display:none;">
                            <label for="message"><i class="icon-caret-right required"></i>Please enter the verification text below to send email</label>
                            <div id="recaptcha-div"></div>
                        </div>
                        <input type="hidden" name="recaptcha_challenge" value="" />
                        <input type="hidden" name="recaptcha_response" value="" />
                        <div class="formItem buttons">
                            <button id="sendEmailPopup_business" class="button success" type="submit" data-ga-id="Email_Submit" data-track-listing-id="2069611" data-slug="gm-designs" data-listing-id="2069611"><i class="icon-envelope"></i> Send email</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>

                


<div id="dialog-bookmark-business" class="ui-helper-hidden">
    <div id="bookmarkCont" class="datatag" data-track-formid="bookmark_business">
        <div class="contentBlock">
            <div class="header">
                <div class="closeBox">
                    <a title="Close this box" href="#" class="Closebtn"><i class="icon-remove-sign"></i></a>
                </div>
                <div id="bookmarkDialogTitle" class="h2">Edit Note</div>
            </div>
            <div class="content">
                <form form-bookmark-business method="POST" action="#"><input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
                    <div class="formItem formItemRadio">
                        <label for="input-bookmark-flag"><i class="icon-tag"></i> What do you want to do?</label>
                        <ul input-bookmark-flag data-required="false" style="margin-left: -30px;">
                            <li radio-value="review" class="radio-button">Review this</li>
                            <li radio-value="try" class="radio-button">Try this</li>
                        </ul>
                    </div>
                    <div class="formItem formItemInputText">
                        <label for="bookmark-note"><i class="icon-comment-alt"></i> Add a note (optional): </label>
                        <div placeholder-for-ie8 style="display:none;color:#8e8e8e;font-size:0.8125em;">For example: Must try this place, the reviews look good.</div>
                        <textarea input-bookmark-note data-required="false" rows=5
                                  placeholder="For example: Must try this place, the reviews look good."
                                  id="input-bookmark-note"
                                  name="bookmark-note"></textarea>
                    </div>
                    <div class="formItem">
                        <div class="buttonBlock">
                            <button btn-update-bookmark type="submit"
                                    class="success large loginbutton_forsavesearchfunction">
                                <i class="icon-ok"></i> Save
                            </button>
                            
                                <button btn-remove-bookmark class="button large cancel">
                                    <i class="icon-remove"></i> Remove bookmark
                                </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





            


            <!-- Advertising -->
            
                <!-- Priority = 7; indicates this is 'standard' listing -->
                
                    <section class="advertising banner-ad" style="width: 728px; max-height: 90px">
                        <!-- /6936/yellow.co.nz_2017/FL_Details_Pages -->
                        <div id='div-gpt-ad-1492662328284-0'>
                            <script>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1492662328284-0');
                                });
                            </script>
                        </div>
                    </section>
                
            

            

            

            

            

            

            

            
                
                    
                        <section id="card othersNearby" class="contentBlockToggleMobile card" id="detailsRelatedListings" data-track-listingid="701247130" data-track-catid="286" data-track-listingpriority="standard">
                            <div class="header">
                                <h2>Other Architectural Designers nearby</h2>
                                <p class="headerToolsRight">
                                    <a data-ga-id="Disruptive Ad Removal Click" href="/remove/">Business Owner: how do I remove these?</a>
                                </p>
                            </div>
                            <div class="content">
                                <ul class="brickList brickList50">
                                    
                                        
                                        <li class="ie8Left">
                                            <div class="h4"><a data-ga-id="Disruptive Ad Click" href="/y/designbase?src=Other&c=286
"><strong>Designbase Ltd</strong></a></div>
                                            <p>Contact: <a data-display="03 218 2429" class="display_mask" onClick="javascript:$(this).text($(this).attr('data-display'));" data-ga-id="Phone_Call_Us">Show Number</a></p>
                                            <p>Servicing this area</p>
                                        </li>
                                        
                                    
                                        
                                        <li class="ie8Right">
                                            <div class="h4"><a data-ga-id="Disruptive Ad Click" href="/y/archdraught-earn?src=Other&c=286
"><strong>ArchDraught Ltd</strong></a></div>
                                            <p>Contact: <a data-display="027 276 4664" class="display_mask" onClick="javascript:$(this).text($(this).attr('data-display'));" data-ga-id="Phone_Call_Us">Show Number</a></p>
                                            <p>Servicing this area</p>
                                        </li>
                                        
                                    
                                </ul>
                            </div>
                        </section>
                    
                
            


            
                
                    <section id="detailsRatingsReviews" class="navSection" style="position: relative;">
                        <div id="write-a-review" style="position: absolute; top: -290px;"></div>
                        <section class="card contentBlockToggleMobile write-a-review">
                            <div class="header">
                                <h2><strong>Reviews</strong> and ratings</h2>
                            </div>
                            <div class="content current-review">
                                
                                    
                                        
                                            <div class="user-image">
                                              <div class="lazy">
                                                
                                                  <img src="/static/images/avatar.svg" srcset="/static/images/lazy.png">
                                                
                                              </div>
                                              <div class="user-image-description center">
                                                  
                                                  
                                              </div>
                                            </div>
                                            <form class="form-refined form-full-width form-compact"
                                              id="write_review_form" method="POST"
                                              action="/review/add/"
                                              data-login-template="signup">
                                              <input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
                                              


<input type="hidden" name="listing_id" value="701247130">
<input type="hidden" name="add_review" value="1">

<div class="row-flybuys">
    <div class="row-field">
        <label for="rating" class="field-title show">Rating</label>
        <fieldset class="rating-stars" data-validation='["isNotEmpty"]' id="rating" name="rating">
            <legend class="access">Rating</legend>
            
                <label title="0.5 star out of 5"
                    class="half">
                    <input type="radio" name="rating" class="access" value="1">
                </label>
            
                <label title="1 star out of 5"
                    class="full">
                    <input type="radio" name="rating" class="access" value="2">
                </label>
            
                <label title="1.5 stars out of 5"
                    class="half">
                    <input type="radio" name="rating" class="access" value="3">
                </label>
            
                <label title="2 stars out of 5"
                    class="full">
                    <input type="radio" name="rating" class="access" value="4">
                </label>
            
                <label title="2.5 stars out of 5"
                    class="half">
                    <input type="radio" name="rating" class="access" value="5">
                </label>
            
                <label title="3 stars out of 5"
                    class="full">
                    <input type="radio" name="rating" class="access" value="6">
                </label>
            
                <label title="3.5 stars out of 5"
                    class="half">
                    <input type="radio" name="rating" class="access" value="7">
                </label>
            
                <label title="4 stars out of 5"
                    class="full">
                    <input type="radio" name="rating" class="access" value="8">
                </label>
            
                <label title="4.5 stars out of 5"
                    class="half">
                    <input type="radio" name="rating" class="access" value="9">
                </label>
            
                <label title="5 stars out of 5"
                    class="full">
                    <input type="radio" name="rating" class="access" value="10">
                </label>
            
        </fieldset>
        <h5 class="error-text hidden">Don't forget to rate us</h5>
    </div>
    <div class="flybuys">
        <div>
            <p class="flybuys-tagline">We reward you for sharing your experiences</p>
            <a href="/flybuys" alt="Click here for more info on Fly Buys" class="custom-link">
                <span class="flybuys-seal lazy lazy-bg"></span>
            </a>
        </div>
    </div>
</div>

<div class="row-field">
    <label for="comments" class="field-title">Your review</label>
    <textarea id="comments" name="comments" placeholder="Your review" data-validation='["isNotEmpty", "isMinLength"]' data-minlength="25" class="dynamic-title"></textarea>
    <h5 class="error-text hidden" data-error="isNotEmpty">Please enter your review</h5>
    <h5 class="error-text hidden" data-error="isMinLength">Reviews must contain at least 25 characters</h5>
</div>

<div class="row-field">
    <label for="images" class="field-title show">Photos</label>
    <input type="file" multiple
        name="images" id="images"
        placeholder="Images"
        class="image-upload"
        accept="image/gif, image/jpeg, image/png"
        data-max-files="4"
        data-title="Add photos to this review"
        data-validation>
</div>

<div class="row-field captcha">
    <label for="captcha" class="field-title show">Captcha</label>
    <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
<div class="g-recaptcha" data-sitekey="6LfMUhYUAAAAAFxuai1egbviaFuhl1q5Sfs8kz_C" data-callback="triggerCaptchaValidation" data-theme="clean" data-expired-callback="triggerCaptchaValidation" ></div>
<noscript>
  <div style="width: 302px; height: 352px;">
    <div style="width: 302px; height: 352px; position: relative;">
      <div style="width: 302px; height: 352px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LfMUhYUAAAAAFxuai1egbviaFuhl1q5Sfs8kz_C"
                frameborder="0" scrolling="no"
                style="width: 302px; height:352px; border-style: none;">
        </iframe>
      </div>
      <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="recaptcha_challenge_field"
                  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0px; padding: 0px; resize: none;" value="">
        </textarea>
        <input type='hidden' name='recaptcha_response_field' value='manual_challenge' />
      </div>
    </div>
  </div>
</noscript>

    <input type="hidden" class="exlude-from-submit captcha-input" value="" data-validation='["isNotEmpty"]' name="captcha" id="captcha">
    <h5 class="error-text hidden">Please complete the captcha</h5>
</div>

<div class="action-panel">
    <button type="button" class="button link-button-small cancel-review right" alt="Cancel review">Cancel</button>
    <button type="submit" class="button yellow-small standard right" alt="Submit your review">Submit</button>
</div>

                                            </form>
                                            <div class="share-review-popout">
                                              <div class="contentBlock">
                                                  <div class="header">
                                                      <div class="closeBox">
                                                        <a title="Close this box" href="#" class="closebtn share-modal-header-icon"><i class="icon-remove-sign"></i></a>
                                                      </div>
                                                      <i class="icon-share share-modal-header-icon"></i>
                                                      <div class="h2">Share</div>
                                                  </div>
                                                  <div class="content">
                                                    <form>
                                                        <div class="formItem formItemInputText">
                                                            <textarea class="comments" placeholder="Your comments"></textarea>
                                                        </div>
                                                        <div class="formItem formItemInputText url">
                                                            <input data-required="true" type="url" value="" name="fromName" id="fromName"/>
                                                        </div>
                                                    </form>
                                                    <div class="share-modal-social bottom">
                                                        <a href="#" class="button twitter twitter-share-button right" target="_blank" data-ga="track" data-ga-cat="Listing_Visit" data-ga-act="gm-designs_701247130_286" data-ga-lab="Share_Review_Twitter"><i class="icon-twitter"></i> Share on Twitter</a>
                                                        <a href="#" class="button facebook fb-share-button" target="_blank" data-ga="track" data-ga-cat="Listing_Visit" data-ga-act="gm-designs_701247130_286" data-ga-lab="Share_Review_Facebook"><i class="icon-facebook"></i> Share on Facebook</a>
                                                    </div>
                                                  </div>
                                              </div>
                                            </div>
                                        
                                    
                                
                            </div>

                            <div class="content">
                                <div class="userReviews">
                                    
                                        <ul></ul>
                                    
                                </div>
                            </div>
                        </section>
                    </section>
                
            

        </div>

        <div class="secondary-col">

            

            <section class="card">

                <p class="itemAddress">
                    


    
        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">21 The Crescent Invercargill</span>
            
                <span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
                    <span itemprop="name" content="New Zealand"></span>
                </span>
            
            
                <span itemprop="addressLocality" content="Invercargill, Invercargill Area"></span>
            
            <span itemprop="addressRegion" content="Southland Region"></span>
            
            
        </span>
    

                </p>
            </section>

            

            

            

            

            
                <section class="card">
                    
<div class="header">
    <h2><strong>Products</strong> and services</h2>
</div>

<div class="content">
    
    <dl class="dlCols dlCols33" style="padding-bottom: 2px;">
        <dt><strong>Markets Served</strong></dt>
        <dd>
            <ul class="inline inlineCommas">
                
                     <li>Commercial</li>
                
            </ul>
        </dd>
    </dl>
    
    <dl class="dlCols dlCols33" style="padding-bottom: 2px;">
        <dt><strong>Places</strong></dt>
        <dd>
            <ul class="inline inlineCommas">
                
                     <li>Decks</li>
                
            </ul>
        </dd>
    </dl>
    
    <dl class="dlCols dlCols33" style="padding-bottom: 2px;">
        <dt><strong>Properties</strong></dt>
        <dd>
            <ul class="inline inlineCommas">
                
                     <li>Housing</li>
                
                     <li>Offices</li>
                
            </ul>
        </dd>
    </dl>
    
    <dl class="dlCols dlCols33" style="padding-bottom: 2px;">
        <dt><strong>Services</strong></dt>
        <dd>
            <ul class="inline inlineCommas">
                
                     <li>CAD</li>
                
                     <li>Consulting</li>
                
                     <li>Design</li>
                
                     <li>Draughting</li>
                
                     <li>Inspections</li>
                
                     <li>Planning</li>
                
                     <li>Specifications</li>
                
            </ul>
        </dd>
    </dl>
    
</div>

                </section>
            

            

            
                
            

            

            

            

            

            

            
                
            

            

            

            

            <section id="detailsCategoriesKeywords" class="card">
                <div class="header">
                    <h2><strong>Categories</strong></h2>
                </div>
                <div class="content">
                    <dl class="dlCols dlCols33">
                        <dt>Listed in</dt>
                        <dd>
                            <ul class="inline inlineCommas">
                                
                                    
                                        <li><a data-ga-id="Listed_In" href="/y/gm-designs?src=Other&c=727

">Engineers - Consulting</a></li>
                                    
                                
                                    
                                        <li><a data-ga-id="Listed_In" href="/y/gm-designs?src=Other&c=285

">Architects</a></li>
                                    
                                
                                    
                                        <li><a data-ga-id="Listed_In" href="/y/gm-designs?src=Other&c=286

">Architectural Designers</a></li>
                                    
                                
                            </ul>
                        </dd>
                    </dl>
                </div>
            </section>
            <section class="contentBlockToggleMobile card" id="detailsReportError">
                <div class="header">
                    <h2><strong>Report</strong> errors</h2>
                </div>
                <div class="content">
                    <ul class="titleButtonPair">
                        <li><strong>Something wrong?</strong> <a href="/report-error/" class="button standard-small"><i class="icon-warning-sign"></i> Report</a></li>
                    </ul>
                </div>
            </section>

        </div>

    </div>

</div>



<!-- Contact Us Modal -->

<div id="contacts-modal" class="ui-helper-hidden">
    <div class="contentBlock" >
        <div class="header">
            <div class="closeBox ">
                <a title="Close this box" href="#" class="closeBtn"><i class="icon-remove-sign"></i></a>
            </div>
            <div class="h3">Contact us <a class="button print-button" href="#"><i class="icon-print"></i> Print this page</a></div>
        </div>
        <div class="content printableArea">
            <section class="listing">
                <h2><b>GM Designs &amp; Consulting Civil &amp; Structural Engineering Group Ltd</b></h2>

                <div>
                    <h4>
                        
                    </h4>
                </div>

                

                

			</section>
			 <section class="listing">
            	<h3>Address</h3>
            	<div class="contact-box">
            		<div class="label">Physical</div>
            		<div class="data">21 The Crescent Invercargill</div>
            	</div>

                

                 
                 <div class="contact-box">
            		<div class="label">E-mail</div>
            		<div class="data"><a class="link cc-email" href="mailto:graeme@gmdesigns.co.nz">graeme@gmdesigns.co.nz</a></div>
            	</div>
                

                
                 <div class="contact-box">
            		<div class="label">Website</div>
            		<div class="data"><a class="link cc-website" target='_blank' href="//www.gmdesigns.co.nz">www.gmdesigns.co.nz</a></div>
            	</div>
                

            </section>
            <section class="listing">
            	<h3>Contact numbers</h3>

                
                <div class="contact-box">
            		<div class="label">Primary</div>
            		<div class="data">03-218 8910</div>
            	</div>
                

                

                

                

                

                

                
            </section>

            

            
        </div>
    </div>
</div>





    
    
        <footer>
            <section id="footerLinkBlocks">
                <div class="moduleContainer">
<div class="box mobileToggle">
<div class="header">
<div class="h3">Our sites</div>
</div>
<div class="content">
<ul>
<li><a href="http://yellow.co.nz/">Yellow&reg;</a></li>
<li><a href="https://whitepages.co.nz/" target="_blank">White&reg;</a></li>
<li><a href="https://www.finda.co.nz/" target="_blank">Finda&reg;</a></li>
<li><a href="http://www.menus.co.nz/" target="_blank">Menus</a></li>
<li><a href="http://www.tourism.net.nz/" target="_blank">New Zealand Tourism Guide&reg;</a></li>
<li><a href="https://wises.co.nz/" target="_blank">Wises</a></li>
<li><a href="http://www.ypg.co.nz/" target="_blank">Yellow Pages&reg;</a></li>
<li><a href="http://ebook.ypgbooks.co.nz/" target="_blank">Yellow Pages&reg; eBook</a></li>
<li><a href="http://www.call018.co.nz/" target="_blank">Call 018</a></li>
</ul>
</div>
</div>
<div class="box mobileToggle">
<div class="header">
<div class="h3">Get in touch</div>
</div>
<div class="content">
<ul>
<li><a href="../../../../yellow-online-help">Website help</a></li>
<li><a class="add-business-modal" href="../../../../suggest-business/">Add a business</a></li>
<li><a href="../../../../report-error/">Report an error</a></li>
<li><a href="https://yellowbusiness.co.nz/careers/" target="_blank">Careers</a></li>
<li><a href="https://ypgbooks.co.nz/" target="_blank">Order or cancel directories</a></li>
<li><a href="../../../../yellow-emergency-services/">Find emergency services</a></li>
<li><a href="../../../../contact-us/">Contact us</a></li>
</ul>
</div>
</div>
<div class="box mobileToggle">
<div class="header">
<div class="h3">Advertisers</div>
</div>
<div class="content">
<p>Reach your target market more effectively through Yellow's comprehensive range of print and digital marketing solutions.</p>
<a class="button yellow fill" href="https://yellowbusiness.co.nz/" target="_blank">Yellow Business</a>
<ul>
<li><a href="../../../../onlineprofile/">Online Profile tips</a></li>
</ul>
</div>
</div>
<div class="box mobileToggle">
<div class="header">
<div class="h3">Our mobile apps</div>
</div>
<div class="content">
<ul id="mobileApps" class="imageList imageListTwoCol">
<li><a title="Download our mobile app from AppStore" href="https://itunes.apple.com/nz/app/yellow-nz/id325450909" target="_blank"><img src="https://yellow.co.nz/static/images/appLogoAppleAppstore.svg" alt="Download our app from the Apple App Store" /></a></li>
<li><a title="Download our mobile app from Google Play" href="https://play.google.com/store/apps/details?id=nz.co.yellow.android&amp;hl=en" target="_blank"><img src="https://yellow.co.nz/static/images/appLogoGooglePlay.svg" alt="Download our app from the Google Play" /></a></li>
</ul>
</div>
</div>
</div>
            </section>

            <section id="footerBar" class="sectionModule">
                <ul id="socialIcons" class="inlineList">
                    <li class="followus">Follow us: </li>
                    <li><a target="_blank" href="//www.facebook.com/yellownz" title="Follow us on Facebook" data-ga="track" data-ga-cat="Follow_Us" data-ga-act="Facebook" data-ga-lab="Facebook"><i class="icon-facebook "></i></a></li>
                    <li><a target="_blank" href="//twitter.com/yellownz" title="Follow us on Twitter" data-ga="track" data-ga-cat="Follow_Us" data-ga-act="Twitter" data-ga-lab="Twitter"><i class="icon-twitter "></i></a></li>
                    <li><a target="_blank" href="//www.youtube.com/user/yellowbiznz" title="Follow us on Youtube" data-ga="track" data-ga-cat="Follow_Us" data-ga-act="Youtube" data-ga-lab="Youtube"><i class="icon-youtube "></i></a></li>
                    <li><a target="_blank" href="//www.linkedin.com/company/yellow-new-zealand" title="Follow us on LinkedIn" data-ga="track" data-ga-cat="Follow_Us" data-ga-act="LinkedIn" data-ga-lab="LinkedIn"><i class="icon-linkedin "></i></a></li>
                </ul>
                <div id="copyInfo">
                    <div class="moduleContainer"><a href="../../../../"> <img class="yellowFingers" src="../../../../static/images/yolLogo.svg" alt="Yellow Fingers" /> </a>
<ul>
<li><a href="../../../../yellow-privacy-policy/">Privacy policy</a></li>
<li><a href="../../../../review-guidelines/">Review policy</a></li>
<li><a href="../../../../yellow-terms-and-conditions">Terms of use</a></li>
<li><a href="../../../../yellow-sitemap/">Sitemap</a></li>
<li>
<div id="shieldedButton">
<div class="shielded-logo-container">&nbsp;</div>
</div>
</li>
</ul>
<p>The Yellow name, and associated names and logos are trade marks of Yellow or its affiliates. All rights reserved</p>
</div>
<script type="text/javascript" src="https://d3f5l8ze0o4j2m.cloudfront.net/m87/k33spt.js"></script>
<script type="text/javascript">// <![CDATA[
(function () {
                window.onload = function(){
                    var frameName = new ds07o6pcmkorn({
                        openElementId: "#shieldedButton"
                    });
                    frameName.init();
                }
            })();
// ]]></script>
                </div>
            </section>
        </footer>
    
    

		

    
    <script src="//maps.googleapis.com/maps/api/js?client=gme-yellowpnz&callback=GMapLoaded"></script>
    

    <script>
        window.pageData = window.pageData || {};
        (function (pageData) {
            
                pageData.pageType = 'BusinessDetailsPage_Regular';
            
            
                pageData.yellowSurvey = 'https://www.research.net/r/N59MD8D';
            
            
                pageData.yellowSurveyProbability = '1.0';
            
            
                pageData.onsiteNotifications = [{"text": "Too much choice? Refine your search further by using the filters under the map.&nbsp;", "title": "Filter Refinements", "id": 7, "target_pages": "srp", "target_audience": ["consumer"]}];
            
        }(window.pageData));
    </script>

    
    <script src="https://yellow.co.nz/static/js/core.bundle.js?r=Beryllium-7.11.9.hotfix.7.11.x.2"></script>

    

<div id="fb-root"></div>
<script language="javascript">
    // Additional JS functions here
    window.fbAsyncInit = function() {
        FB.init({
            appId      : "211372249016511", // App ID
            channelUrl : "/https://yellow.co.nz/static/js/facebook-channel.html", // Channel File
            oauth      : true,
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });
    };
    // Load the SDK asynchronously
    jQuery.ajax({
        type: "GET",
        url: "//connect.facebook.net/en_US/all.js",
        success: function(){},
        dataType: "script",
        cache: true
    });

    
        window.pageData.facebookLogin = {
            fromGet: "/y/gm-designs",
            fromGet2: "",
            url: "/user/service/social-login/facebook/",
            fromPost: "/y/gm-designs",
            fromPost2: ""
        };
    
</script>
    

<script type="text/javascript">
    jQuery.ajax({
        type: "GET",
        url: "https://apis.google.com/js/client:plusone.js?onload=init_google_auth",
        success: function(){},
        dataType: "script",
        cache: true
    });

    
        var g_client_id = '665107142255.apps.googleusercontent.com';
        var g_scope = 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/plus.login';
        window.g_has_auth = false;

        
        window.___gcfg = { isSignedOut: true }; 

        window.pageData.googleLogin = {
            from : "/y/gm-designs",
            from2 : "",
            url: "/user/service/social-login/google/"
        };
        function init_google_auth() {
            gapi.auth.authorize({client_id: g_client_id, scope: g_scope, immediate: true}, function(response){
                if (response && response.access_token) {
                    window.g_has_auth = true;
                }
            });
        }
    
</script>


    

    
    <section class="contentBlock">
    <div class="flybuys-modal ui-helper-hidden">
        <div class="contentBlock">
            <div class="content">
                <img src="/static/images/fly-buys-logo-lg.png" width="160">
                <p>Enter your Fly Buys number to earn 3 points for this review.</p>
                <form method="POST" id="flybuys-form" action=""><input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
                    <div class="row" >

    <div>
        <input id="id_flybuys_0" maxlength="16" name="flybuys_0" placeholder="XXXX" readonly="" type="text" value="6014" />
<input id="id_flybuys_1" maxlength="4" name="flybuys_1" placeholder="XXXX" type="text" />
<input id="id_flybuys_2" maxlength="4" name="flybuys_2" placeholder="XXXX" type="text" />
<input id="id_flybuys_3" maxlength="4" name="flybuys_3" placeholder="XXXX" type="text" />
        <div>
            
        </div>
    </div>

<div>
                </form>
                <form method="POST" id="fly-ignore-form" action=""><input type='hidden' name='csrfmiddlewaretoken' value='NZ7ekp06PtuORixRxDGC4YUJg8RcRLLJ' />
                    <input type="hidden" value="" />
                </form>
                <div class="button-bar">
                    <button id="fly-submit" form="flybuys-form" data-fly-save type="Submit" class="success">Save</button>
                    <button id="fly-close" form="fly-ignore-form" type="Submit" class="white">No Thanks</button>
                </div>
            </div>
        </div>
    </div>
</section>


    <script type="text/javascript" src="//www.google.com/jsapi"></script>

    <script src="https://yellow.co.nz/static/js/dlp.bundle.js?r=Beryllium-7.11.9.hotfix.7.11.x.2"></script>

    
    

    


    
    <script type="text/javascript" type="text/javascript">
        (function() {
            Yellow.tracking.initialize({'var_name': 'data-ga-id', 'common': [{'k': 'data-slug', 'ctx': 'slug', 'v': 'gm-designs'}, {'k': 'data-listing-id', 'ctx': 'id', 'v': '2069611'}, {'k': 'data-track-listing-id', 'ctx': 'listingid', 'v': '701247130'}, {'k': 'data-category-id', 'ctx': 'category_id', 'v': '286'}], 'vars': [{'e': '#businessDetailsPrimary a.shownumbers', 'v': 'Phone_Call_Us'}, {'e': '#businessDetailsPrimary a.hidenumbers', 'v': 'Phone_Call_Us_Hide'}, {'e': '#businessDetailsPrimary a.action-share-business', 'v': 'Share_This_Business'}, {'e': "#businessDetailsPrimary div.numbers-container a.showOnMobile:contains('Primary')", 'v': 'Phone_Number_Click_Primary'}, {'e': "#businessDetailsPrimary div.numbers-container a.showOnMobile:contains('Mobile')", 'v': 'Phone_Number_Click_Mobile'}, {'e': "#businessDetailsPrimary div.numbers-container a.showOnMobile:contains('Free call')", 'v': 'Phone_Number_Click_Free_Call'}, {'e': "#businessDetailsPrimary div.numbers-container a.showOnMobile:contains('Fax')", 'v': 'Phone_Number_Click_Fax'}, {'e': "#businessDetailsPrimary div.numbers-container a.showOnMobile:contains('Secondary No')", 'v': 'Phone_Number_Click_Secondary_No'}, {'e': "#businessDetailsPrimary div.numbers-container a.showOnMobile:contains('Skype ID')", 'v': 'Skype_ID'}, {'e': '#businessDetailsPrimary span.interactionCount', 'v': 'View_Reviews'}, {'e': '#businessDetailsPrimary a.actionRateReview', 'v': 'Review_Stars'}, {'e': '#businessDetailsPrimary a.actionRateReview.noReviews', 'v': 'Review_First'}, {'e': '#businessDetailsPrimary .get-directions a', 'v': 'Get_Directions_Link'}, {'e': ".dlp-navigation a[href='#overview']", 'v': 'Overview_Nav'}, {'e': ".dlp-navigation a[href='#visuals']", 'v': 'Photos_Videos_Nav'}, {'e': ".dlp-navigation a[href='#detailsRatingsReviews']", 'v': 'Reviews_Nav'}, {'e': '.dlp-navigation a.contactUsBtn', 'v': 'Contact_Card'}, {'e': '#detailsTeamMembers a.shownumbers', 'v': 'Team_Phone_Call_Us'}, {'e': '#detailsTeamMembers a.hidenumbers', 'v': 'Team_Phone_Call_Us_Hide'}, {'e': "#detailsTeamMembers div.numbers-container a.showOnMobile:contains('Primary')", 'v': 'Team_Phone_Number_Click_Primary'}, {'e': '#detailsTeamMembers a.action-email', 'v': 'Team_Email_Link'}, {'e': '#detailsVirtualTour a', 'v': 'Virtual_Tour'}, {'e': '#detailsDocuments a', 'v': 'PDF_Download'}, {'e': '#socialLinks li.we_on_facebook a', 'v': 'Customer_Facebook'}, {'e': '#socialLinks li.we_on_twitter a', 'v': 'Customer_Twitter'}, {'e': '#socialLinks li.we_on_instagram a', 'v': 'Customer_Instagram'}, {'e': '#socialLinks li.we_on_google a', 'v': 'Customer_Google+'}, {'e': '#socialLinks li.we_on_linkedin a', 'v': 'Customer_LinkedIn'}, {'e': '#socialLinks li.we_on_youtube a', 'v': 'Customer_YouTube'}, {'e': '#contacts-modal a.print-button', 'v': 'CC_Print_Page'}, {'e': '#contacts-modal a.cc-email', 'v': 'CC_Email'}, {'e': '#contacts-modal a.cc-website', 'v': 'CC_Website'}, {'e': '#contacts-modal a.cc-skype-id', 'v': 'CC_Skype_ID'}, {'e': '#contacts-modal a.cc-staff-email', 'v': 'CC_Staff_Email'}, {'e': '#contacts-modal li.we_on_facebook a', 'v': 'CC_Customer_Facebook'}, {'e': '#contacts-modal li.we_on_twitter a', 'v': 'CC_Customer_Twitter'}, {'e': '#contacts-modal li.we_on_instagram a', 'v': 'CC_Customer_Instagram'}, {'e': '#contacts-modal li.we_on_google a', 'v': 'CC_Customer_Google+'}, {'e': '#contacts-modal li.we_on_linkedin a', 'v': 'CC_Customer_LinkedIn'}, {'e': '#contacts-modal li.we_on_youtube a', 'v': 'CC_Customer_YouTube'}]});
        })();
    </script>

    
    <script id="google_semantics" type="application/ld+json">null</script>


    

    <!-- Google Code for Remarketing Tag -->
    <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup -->
    <script type="text/javascript">
        /* <![CDATA[ /
        var google_conversion_id = 924106079;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        / ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/924106079/?value=0&guid=ON&script=0"/>
        </div>
    </noscript>

    <!-- START Nielsen Online SiteCensus V6.0 --><!-- COPYRIGHT 2010 Nielsen Online -->
    <noscript>
        <div><img src="//secure-nz.imrworldwide.com/cgi-bin/m?ci=nz-ypages&amp;cg=yellowpages&amp;cc=1&amp;ts=noscript" width="1" height="1" alt="" /></div>
    </noscript>
    <!-- END Nielsen Online SiteCensus V6.0 -->
    <!-- TIMER:37ms:base.html END -->

    <!-- https://browser-update.org/ -->
    <script defer type="text/javascript" src="https://yellow.co.nz/static/js/lib/short-scripts/browser-update.js "></script>

    <!-- Begin Hotjar Embed Code -->
    <script defer type="text/javascript" id="hotjarjs" src="https://yellow.co.nz/static/js/lib/short-scripts/hotjar.js"></script>
    <!-- End Hotjar Embed Code -->


<!-- PERFDATA^^{"timing_points": [["listing_view_initializing", "0ms"], ["listing_view_api_fetching_listing", "0ms"], ["listing_view_api_listing_fetch_complete", "144ms"], ["listing_view_related_listings_fetching", "144ms"], ["listing_view_related_listings_fetched", "619ms"], ["listing_view_related_listings_complete", "619ms"], ["listing_view_render_starting", "668ms"], ["listing_view_render_finished", "744ms"]]}^^ -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"4649912473","agent":"","transactionName":"ZQAHMhZWChVTVkBbX1xKIxMKVBAPXVsbS1VeCQoRO0ABBBxZXVAeRxEMChcNOwdWUWtBWUYAOhAFRRc=","applicationID":"1845240","errorBeacon":"bam.nr-data.net","applicationTime":753}</script></body>
</html>
EOD;

$an = new Analyzer();
$text = $an->process($text);
var_dump($text);