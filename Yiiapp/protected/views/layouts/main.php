<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <?php Yii::app()->clientScript->registerMetaTag('5f56bda4ed5053da', 'yandex-verification');?>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getAssetsUrl() ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!--[if IE 7]>
	<script type="text/javascript" src="<?php echo $this->getAssetsUrl() ?>/js/badbrowse.js"></script>
	<![endif]-->
        <script type="text/javascript" src="http://vk.com/js/api/share.js?11" charset="windows-1251"></script>
        <?php if($_SERVER['HTTP_HOST'] == 'myrents.com.ua'){?>
	<script type="text/javascript">
	    var _gaq = _gaq || [];
	    _gaq.push(['_setAccount', 'UA-4048716-42']);
	    _gaq.push(['_trackPageview']);
	    _gaq.push (['_addOrganic', 'yandex.ru', 'query']);
	    _gaq.push (['_addOrganic', 'images.yandex.ru', 'text']);
	    _gaq.push (['_addOrganic', 'blogs.yandex.ru', 'text']);
	    _gaq.push (['_addOrganic', 'video.yandex.ru', 'text']);
	    _gaq.push (['_addOrganic', 'mail.ru', 'q']);
	    _gaq.push (['_addOrganic', 'go.mail.ru', 'q']);
	    _gaq.push (['_addOrganic', 'google.com.ua', 'q']);
	    _gaq.push (['_addOrganic', 'images.google.ru', 'q']);
	    _gaq.push (['_addOrganic', 'maps.google.ru', 'q']);
	    _gaq.push (['_addOrganic', 'rambler.ru', 'words']);
	    _gaq.push (['_addOrganic', 'nova.rambler.ru', 'query']);
	    _gaq.push (['_addOrganic', 'nova.rambler.ru', 'words']);
	    _gaq.push (['_addOrganic', 'gogo.ru', 'q']);
	    _gaq.push (['_addOrganic', 'nigma.ru', 's']);
	    _gaq.push (['_addOrganic', 'search.qip.ru', 'query']);
	    _gaq.push (['_addOrganic', 'webalta.ru', 'q']);
	    _gaq.push (['_addOrganic', 'sm.aport.ru', 'r']);
	    _gaq.push (['_addOrganic', 'meta.ua', 'q']);
	    _gaq.push (['_addOrganic', 'search.bigmir.net', 'z']);
	    _gaq.push (['_addOrganic', 'search.i.ua', 'q']);
	    _gaq.push (['_addOrganic', 'index.online.ua', 'q']);
	    _gaq.push (['_addOrganic', 'web20.a.ua', 'query']);
	    _gaq.push (['_addOrganic', 'search.ukr.net', 'search_query']);
	    _gaq.push (['_addOrganic', 'search.com.ua', 'q']);
	    _gaq.push (['_addOrganic', 'search.ua', 'q']);
	    _gaq.push (['_addOrganic', 'poisk.ru', 'text']);
	    _gaq.push (['_addOrganic', 'go.km.ru', 'sq']);
	    _gaq.push (['_addOrganic', 'liveinternet.ru', 'ask']);
	    _gaq.push (['_addOrganic', 'gde.ru', 'keywords']);
	    _gaq.push (['_addOrganic', 'affiliates.quintura.com', 'request']);
	    _gaq.push (['_addOrganic', 'akavita.by', 'z']);
	    _gaq.push (['_addOrganic', 'search.tut.by', 'query']);
	    _gaq.push (['_addOrganic', 'all.by', 'query']);
	    _gaq.push (['_trackPageview']);
	    _gaq.push(['_trackPageLoadTime']);
	    (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	    })();
	</script>
<?php } ?>
        	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
                <?php if($this->user->role == 'admin' || $this->user->role == 'moderator'){?>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->getAssetsUrl() ?>/css/admin_panel.css" />
        <?php } ?>
    </head>



    <body>
        
        <a href="/news/" id="news_bth"></a>
        
        <?php if($this->user->role == 'admin' || $this->user->role == 'moderator'){?>
        <div id="admin_nav">
            <div>
            <ul>
                <li><?php echo CHtml::link('Админ панель', '/admin/', array('target'=>'_blank'))?></li>
                <li><?php echo CHtml::link('Комментарии <sub>'.$this->countComments().'</sub>', '/admin/comments/', array('target'=>'_blank'))?></li>
                <?php if(Yii::app()->controller->id=='rent'){ ?><li><?php echo CHtml::link('Редактировать аренду', '/rent/'.$_GET['id'].'/edit/', array('target'=>'_blank'))?></li><?php } ?>
                <li><?php echo CHtml::link('Новых объявлений <sub>'.$this->countRents().'</sub>', '/admin/rents/', array('target'=>'_blank'))?></li>
                <li><?php echo CHtml::link('Выход', '/logout/')?></li>
            </ul>
                <div class="hello"><a href="/user/<?php echo $this->user->id?>/"><span class="avatar_panel" style="background-image: url('<?php echo Yii::app()->params['USERPHOTOSDIR'] . 'little/' . $this->user->image ?>')"></span></a><div><?php echo $this->user->firstname?> <?php echo $this->user->lastname?><br/><small>Статус: <?php echo $this->user->role?></small></div></div>
            </div>
        </div>

        <?php }?>
        
        
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        <script type="text/javascript">


            $(function(){


		if($.browser.msie && $.browser.version == '6.0') badbrowser("<?php echo $this->getAssetsUrl() ?>");

                $('div.globalcontainer').append("<a id='btn_help' href='/help/' style='display:none'><?php echo Yii::t('default', 'Help'); ?></a>");

            });
        </script>

        <div class="globalcontainer">
            <div class="head"><a href="/" class="logo"></a>
                <div class="headmenu" id="mainmenu" style="z-index:10;">
                    <ul>			<?php $isGuest = Yii::app()->user->isGuest; ?>
                       

<li><div class="menu_h_border">
<a class="mlink" href="/members"><?php echo Yii::t('default','usermenu.members');?></a>
</div></li>

			<?php $this->widget('ext.widgets.menu.UserMenuWidget.UserMenuWidget', array('visible' => !$isGuest)); ?>
			<?php $this->widget('ext.widgets.menu.UserUpsWidget.UserUpsWidget', array('visible' => !$isGuest)); ?>
			<?php $this->widget('ext.widgets.menu.CurrencySwitcherWidget.CurrencySwitcherWidget'); ?>	    
			<?php $this->widget('ext.widgets.menu.LangSwitcherWidget.LangSwitcherWidget'); ?>	    
			<?php $this->widget('application.extensions.login.XLoginPortlet', array('visible' => Yii::app()->user->isGuest,)); ?>
                    </ul>
                </div>


		<?php if (!Yii::app()->user->isGuest && !$this->user->active) { ?>

                
                <script>
                $(function(){
                $( "#dialog_noactive_user" ).dialog({
                title: '<?php echo Yii::t('default', 'popup.window.no.active.user.title'); ?>',
                minHeight: 0,
                modal: true,
                autoOpen: false,
                resizable: false,
                width: 500,
                draggable: false
            });
            });
            </script>
            

    		<a class="listyourspace btn_border abutton blue" href="javascript:void(0)" onclick="$(function(){ $('#dialog_noactive_user').dialog('open')});"><span><b><i><?php echo Yii::t('default', 'rent/sell') ?></i></b></span></a>
		<?php } else { ?>
    		<a class="listyourspace btn_border abutton blue" href="/rent/list"><span><b><i><?php echo Yii::t('default', 'rent/sell') ?></i></b></span></a>
		<?php } ?>
            </div>
            <div id="insideblock"><?php echo $content; ?></div>
            <!-- mainmenu -->

 
<table border="0" width="90%" id="indexLinks" style="margin-top: 40px;">
    <tr>


        <td valign="top"><span class="flt_l" style="line-height:21px;"><?php echo Yii::t('default','mr.social')?>:&nbsp;&nbsp;&nbsp;</span>
                        <a class="fb" target="_blank" href="https://www.facebook.com/pages/MyRentscomua/353381128066953"></a>
            <a class="vk" target="_blank" href="http://vk.com/myrents"></a>
            
            <a href="/staticpage/about_us/"><?php echo Yii::t('default', 'footer.nav.about_us') ?></a>
            <a href="/staticpage/term_of_use/"><?php echo Yii::t('default', 'footer.nav.term_of_use') ?></a>
            <a class="support fancybox.ajax" href="/support/"><?php echo Yii::t('default','Support')?></a>
            <a href="/help/"><?php echo Yii::t('default','Instruction')?></a>
            <a href="/partners/"><?php echo Yii::t('default','Partners')?></a>
        </td>
    </tr>
</table>
	</div>
                <?php if($_SERVER['HTTP_HOST'] == 'myrents.com.ua'){?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
		    try {
			w.yaCounter15526384 = new Ya.Metrika({id:15526384, enableAll: true, webvisor:true});
		    } catch(e) {}
		});
	
		var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
	
		if (w.opera == "[object Opera]") {
		    d.addEventListener("DOMContentLoaded", f);
		} else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/15526384" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php } ?>
            <?php if (!Yii::app()->user->isGuest && !$this->user->active) { ?><div id="dialog_noactive_user">
                <div><center><b class='stl_2'><?php echo Yii::t('default', 'popup.window.no.active.user.content'); ?></b><br/><b class='stl_2-2'><?php echo Yii::t('default', 'popup.window.no.active.user.text'); ?></b></center></div>
            </div><?php } ?>

    </body>
</html>