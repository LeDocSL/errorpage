<!DOCTYPE html>
<html>
  <head>
    <title>Error 502</title>
	<meta name="author" content="Kobayashi Networks">
	<link rel="icon" type="image/x-icon" href="https://www.cloudflare.com/favicon.ico"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" media="screen" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" media="screen" rel="stylesheet" />
  

    <style>
      *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,caption,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}html{font-size:16px;line-height:24px;width:100%;height:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;overflow-y:scroll;overflow-x:hidden}img{vertical-align:middle;max-width:100%;height:auto;border:0;-ms-interpolation-mode:bicubic}body{min-height:100%;-webkit-font-smoothing:subpixel-antialiased}.clearfix{clear:both;zoom:1}.clearfix:before,.clearfix:after{content:&quot;\0020&quot;;display:block;height:0;visibility:hidden}.clearfix:after{clear:both}

    </style>
    <style>
  .background {
    background:url(/images/error.png);
	background-repeat:no-repeat;
	background-attachment: fixed;
    background-position: center;
  }	 
	
  .plain.error-page-wrapper {
    font-family: 'Source Sans Pro', sans-serif;
    background-color:#6355bc;
    padding:0 5%;
    position:relative;
  }

  .plain.error-page-wrapper .content-container {
    -webkit-transition: left .5s ease-out, opacity .5s ease-out;
    -moz-transition: left .5s ease-out, opacity .5s ease-out;
    -ms-transition: left .5s ease-out, opacity .5s ease-out;
    -o-transition: left .5s ease-out, opacity .5s ease-out;
    transition: left .5s ease-out, opacity .5s ease-out;
    max-width:400px;
    position:relative;
    left:-30px;
    opacity:0;
  }

  .plain.error-page-wrapper .content-container.in {
    left: 0px;
    opacity:1;
  }

  .plain.error-page-wrapper .head-line {
    transition: color .2s linear;
    font-size:48px;
    line-height:60px;
    color:rgba(255,255,255,.2);
    letter-spacing: -1px;
    margin-bottom: 5px;
  }
  .plain.error-page-wrapper .subheader {
    transition: color .2s linear;
    font-size:36px;
    line-height:46px;
    color:#fff;
  }
  .plain.error-page-wrapper hr {
    height:1px;
    background-color: rgba(255,255,255,.2);
    border:none;
    width:250px;
    margin:35px 0;
  }
  .plain.error-page-wrapper .context {
    transition: color .2s linear;
    font-size:18px;
    line-height:27px;
    color:#fff;
  }
  .plain.error-page-wrapper .context p {
    margin:0;
  }
  .plain.error-page-wrapper .context p:nth-child(n+2) {
    margin-top:12px;
  }
  .plain.error-page-wrapper .buttons-container {
    margin-top: 45px;
    overflow: hidden;
  }
  .plain.error-page-wrapper .buttons-container a {
    transition: color .2s linear, border-color .2s linear;
    font-size:14px;
    text-transform: uppercase;
    text-decoration: none;
    color:#fff;
    border:2px solid white;
    border-radius: 99px;
    padding:8px 30px 9px;
    display: inline-block;
    float:left;
  }
  .plain.error-page-wrapper .buttons-container a:hover {
    background-color:rgba(255,255,255,.05);
  }
  .plain.error-page-wrapper .buttons-container a:first-child {
    margin-right:25px;
  }

  @media screen and (max-width: 485px) {
    .plain.error-page-wrapper .header {
      font-size:36px;
     }
    .plain.error-page-wrapper .subheader {
      font-size:27px;
      line-height:38px;
     }
    .plain.error-page-wrapper hr {
      width:185px;
      margin:25px 0;
     }

    .plain.error-page-wrapper .context {
      font-size:16px;
      line-height: 24px;
     }
    .plain.error-page-wrapper .buttons-container {
      margin-top:35px;
    }

    .plain.error-page-wrapper .buttons-container a {
      font-size:13px;
      padding:8px 0 7px;
      width:45%;
      text-align: center;
    }
    .plain.error-page-wrapper .buttons-container a:first-child {
      margin-right:10%;
    }
  }
</style>
    <style>

    .background-color {
      background-color: #6355BC !important;
    }


    .primary-text-color {
      color: #FFFFFF !important;
    }

    .secondary-text-color {
      color: #8277c9 !important;
    }




    .border-button {
      color: #FFFFFF !important;
      border-color: #FFFFFF !important;
    }
    .button {
      background-color: #FFFFFF !important;
      color:  !important;
    }


</style>
<script>
function reload() {
location.reload(); }
</script>
  </head>
  <body class="plain error-page-wrapper background-color background-image background">
    <div class="content-container">
	<div class="head-line secondary-text-color">
		502
	</div>
	<div class="subheader primary-text-color">
		Looks like we're having <br>
		some server issues.
	</div>
    <hr>
    <div class="clearfix"></div>
    <div class="context primary-text-color">

    <p>
      Go back to the previous page and try again.
      If you think something is broken, report a problem.
    </p>
	
	<p>::ALWAYS_ONLINE_NO_COPY_BOX::</p>
	
	<p>Errorcode: <?php echo mt_rand(4732974538754938745829758497598758978209752089758475948075802470897298
37814713847819374874831907843, 4732974538754938745829758497598758978209752089758475948075802470897298
378147138478193748748319078434787429789); ?></p>
	<p>
	Follow us on Social Media
	</p>
	
	<p>
	<a href="https://twitter.com/sittingoncloud"><img src="/images/twitter.png" title="Twitter" alt="Twitter"></a> <a href="https://www.youtube.com/channel/UC4kIxK8F6dPswP6-ufy-aeA"><img src="/images/youtube.png" title="YouTube" alt="YouTube"></a> <a href="https://discord.gg/x23SFbE"><img src="/images/discord.png" title="Discord" alt="Discord"></a> <a href="https://reddit.com/r/sittingonclouds"><img src="/images/reddit.png" title="Reddit" alt="Reddit"></a> <a href="https://steamcommunity.com/gid/103582791463765697"><img src="/images/steam.png" title="Steam Community" alt="Steam"></a> <a href="https://status.sittingonclouds.net/"><img src="/images/status.png" title="Statuspage" alt="Statuspage"></a> 
    </p>
	
    </div>
		
	<div class="buttons-container">
	    <a class="border-button" href="https://www.patreon.com/sittingonclouds" target="_blank">Support us via Patreon</a>
	</div>
</div>

    <script>
      function ErrorPage(e,t,n){this.$container=$(e),this.$contentContainer=this.$container.find(n=="sign"?".sign-container":".content-container"),this.pageType=t,this.templateName=n}ErrorPage.prototype.centerContent=function(){var e=this.$container.outerHeight(),t=this.$contentContainer.outerHeight(),n=(e-t)/2,r=this.templateName=="sign"?-100:0;this.$contentContainer.css("top",n+r)},ErrorPage.prototype.initialize=function(){var e=this;this.centerContent(),this.$container.on("resize",function(t){t.preventDefault(),t.stopPropagation(),e.centerContent()}),this.templateName=="plain"&&window.setTimeout(function(){e.$contentContainer.addClass("in")},500),this.templateName=="sign"&&$(".sign-container").animate({textIndent:0},{step:function(e){$(this).css({transform:"rotate("+e+"deg)","transform-origin":"top center"})},duration:1e3,easing:"easeOutBounce"})},ErrorPage.prototype.createTimeRangeTag=function(e,t){return"<time utime="+e+' simple_format="MMM DD, YYYY HH:mm">'+e+"</time> - <time utime="+t+' simple_format="MMM DD, YYYY HH:mm">'+t+"</time>."},ErrorPage.prototype.handleStatusFetchSuccess=function(e,t){if(e=="503")$("#replace-with-fetched-data").html(t.status.description);else if(!t.scheduled_maintenances.length)$("#replace-with-fetched-data").html("<em>(there are no active scheduled maintenances)</em>");else{var n=t.scheduled_maintenances[0];$("#replace-with-fetched-data").html(this.createTimeRangeTag(n.scheduled_for,n.scheduled_until)),$.fn.localizeTime()}},ErrorPage.prototype.handleStatusFetchFail=function(e){$("#replace-with-fetched-data").html("<em>(enter a valid StatusPage.io url)</em>")},ErrorPage.prototype.fetchStatus=function(e,t){if(!e||!t||t=="404")return;var n="",r=this;t=="503"?n=e+"/api/v2/status.json":n=e+"/api/v2/scheduled-maintenances/active.json",$.ajax({type:"GET",url:n}).success(function(e,n){r.handleStatusFetchSuccess(t,e)}).fail(function(e,n){r.handleStatusFetchFail(t)})};
      var ep = new ErrorPage('body', "502", "plain");
      ep.initialize();

      // hack to make sure content stays centered >_<
      $(window).on('resize', function() {
        $('body').trigger('resize')
      });

    </script>


  </body>
</html>
