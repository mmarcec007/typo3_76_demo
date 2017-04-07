#-------------------------------------------------------------------------------
#	NAVIGATION: Main (Bootstrap NavBar)
#-------------------------------------------------------------------------------
lib.navigation.main = COA
lib.navigation.main {
	10 = HMENU
	10 {
		entryLevel = {$plugin.t3sbootstrap_configuration.navigation.navbar.entryLevel}
		excludeUidList = {$plugin.t3sbootstrap_configuration.navigation.navbar.excludeUidList}
		1 = TMENU
		1 {
			expAll = 1

			NO = 1
			NO {
				before.cObject = LOAD_REGISTER
				before.cObject{
					glyphicon.cObject=TEXT
					glyphicon.cObject.required = 1
					glyphicon.cObject.data.dataWrap = DB:pages:{field:uid}:tx_t3sbootstrap_glyphicon
					glyphicon.cObject.noTrimWrap = |<span class="glyphicon glyphicon-|"></span> |
					glyphicon.cObject.if.isFalse = {$plugin.t3sbootstrap_configuration.general.fontawesome}

					fontawesome.cObject=TEXT
					fontawesome.cObject.required = 1
					fontawesome.cObject.data.dataWrap = DB:pages:{field:uid}:tx_t3sbootstrap_fontawesome_icon
					fontawesome.cObject.noTrimWrap = | <i class="fa |"></i> |
					fontawesome.cObject.if.isTrue = {$plugin.t3sbootstrap_configuration.general.fontawesome}
				}
				ATagBeforeWrap = 1
				linkWrap = {register:glyphicon}{register:fontawesome}|
				allStdWrap.insertData = 1
				wrapItemAndSub = <li>|</li>
				stdWrap.htmlSpecialChars = 1
			    ATagParams = id="node_{elementUid}"
			    subst_elementUid = 1
			}

			ACT <.NO
			ACT.wrapItemAndSub = <li class="active">|</li>

			CUR <.ACT

			IFSUB <.NO
			IFSUB {
				wrapItemAndSub = <li class="dropdown main">|</li>

				ATagParams = class="dropdown-toggle" data-toggle="dropdown"
				ATagBeforeWrap = 1
				linkWrap = {register:glyphicon}{register:fontawesome} | <b class="caret"></b>
				allStdWrap.insertData = 1
			}

			ACTIFSUB < .IFSUB
			ACTIFSUB.wrapItemAndSub = <li class="dropdown main active">|</li>

			CURIFSUB < .ACTIFSUB
		}
		2 < .1
		2 {
			wrap = <ul class="dropdown-menu">|</ul>

			IFSUB <.NO
			IFSUB.wrapItemAndSub = <li class="dropdown-submenu">|</li>
			IFSUB.linkWrap = {register:glyphicon}{register:fontawesome} | <b class="caret hidden-xs"></b>

			ACTIFSUB < .IFSUB
			ACTIFSUB.wrapItemAndSub = <li class="dropdown-submenu active">|</li>

			CURIFSUB < .ACTIFSUB

			SPC = 1
			SPC {
				doNotLinkIt = 1
				doNotShowLink = 1
				after.dataWrap = <li class="dropdown-divider"></li>
			}
		}
		3 <.2
		4 <.2
		5 <.2
		6 <.2
		7 <.2
		8 <.2
	}

	20 < lib.loginLogout
	20.stdWrap.wrap = <li>|</li>
	20.if.isTrue = {$plugin.t3sbootstrap_configuration.extensions.login.enable}

	98 = RESTORE_REGISTER
	99 = RESTORE_REGISTER
}


#-------------------------------------------------------------------------------
#	NAVIGATION: NavBarRight - inside the NavBar (lib.navigation.main)
#-------------------------------------------------------------------------------
[globalVar = LIT:0 != {$plugin.t3sbootstrap_configuration.navigation.navbar-right.uidList}]
lib.navigation.navbar-right = COA
lib.navigation.navbar-right {
	wrap = <li class="dropdown">|</li>
	5 = TEXT
	5 {
		wrap = <a href="#" class="dropdown-toggle" data-toggle="dropdown">|</a>
		value = {$plugin.t3sbootstrap_configuration.navigation.navbar-right.label}
	}
	10 = HMENU
	10 {
		special = list
		special.value = {$plugin.t3sbootstrap_configuration.navigation.navbar-right.uidList}
		wrap = <ul class="dropdown-menu">|</ul>
		1 = TMENU
		1 {
			expAll = 1
			NO = 1
			NO {
				before.cObject = LOAD_REGISTER
				before.cObject{
						glyphicon.cObject=TEXT
						glyphicon.cObject.required = 1
						glyphicon.cObject.data.dataWrap = DB:pages:{field:uid}:tx_t3sbootstrap_glyphicon
						glyphicon.cObject.wrap = <span class="glyphicon glyphicon-|"></span>
						glyphicon.cObject.if.isFalse = {$plugin.t3sbootstrap_configuration.general.fontawesome}

						fontawesome.cObject=TEXT
						fontawesome.cObject.required = 1
						fontawesome.cObject.data.dataWrap = DB:pages:{field:uid}:tx_t3sbootstrap_fontawesome_icon
						fontawesome.cObject.noTrimWrap = | <i class="fa |"></i> |
						fontawesome.cObject.if.isTrue = {$plugin.t3sbootstrap_configuration.general.fontawesome}
				}
				ATagBeforeWrap = 1
				linkWrap = {register:glyphicon}{register:fontawesome}|
				allStdWrap.insertData = 1

				wrapItemAndSub = <li>|</li>
				stdWrap.htmlSpecialChars = 1
			}
			ACT <.NO
			ACT {
				wrapItemAndSub = <li class="active">|</li>
			}
		}
	}
	99 = RESTORE_REGISTER
}
[global]

#-------------------------------------------------------------------------------
#	NAVIGATION: Language menu - inside the NavBar (lib.navigation.main)
#-------------------------------------------------------------------------------
lib.navigation.languageswitch = COA
lib.navigation.languageswitch {
	wrap = <li class="dropdown">|</li>
	5 = TEXT
	5 {
		wrap = <a id="languageswitch" href="#" class="dropdown-toggle" data-toggle="dropdown">|</a>
		value = {$plugin.t3sbootstrap_configuration.navigation_lang.navBarLabel}<b class="caret"></b>
	}
	10 = HMENU
	10 {
		special = language
		special.value = {$plugin.t3sbootstrap_configuration.navigation_lang.languages}
		wrap = <ul id="languageMenu" class="dropdown-menu" aria-labelledby="languageswitch">|</ul>
		1 = TMENU
		1 {
			NO = 1
			NO {
				wrapItemAndSub = <li>|</li>
				stdWrap.cObject = TEXT
				stdWrap.cObject.value = {$plugin.t3sbootstrap_configuration.navigation_lang.labels}
			}
			ACT <.NO
			ACT {
				wrapItemAndSub = <li class="active">|</li>
			}
		}
	}
}

#-------------------------------------------------------------------------------
#	NAVIGATION: Bootstrap Breadcrumbs
#-------------------------------------------------------------------------------
lib.navigation.breadcrumb = COA
lib.navigation.breadcrumb {
	wrap = <ol class="breadcrumb">|</ol>
	5 = TEXT
	5 {
		value = {$plugin.t3sbootstrap_configuration.general.company.name}
		typolink {
			parameter = {$plugin.t3sbootstrap_configuration.pages.homepage.uid}
			target = _top
		}
		wrap = <li>|</li>
	}
	10 = HMENU
	10 {
		special = rootline
		special.range =	1
		1 = TMENU
		1 {
			NO = 1
			NO {
				wrapItemAndSub = <li>|</li>
				stdWrap.htmlSpecialChars = 1
			}
			CUR <.NO
			CUR {
				wrapItemAndSub = <li class="active">|</li>
				doNotLinkIt = 1
			}
		}
	}
	# Add news title on single view if tx_news is loaded
	20 = RECORDS
	20 {
		if.isTrue.data = GP:tx_news_pi1|news
		dontCheckPid = 1
		tables = tx_news_domain_model_news
		source.data = GP:tx_news_pi1|news
		source.intval = 1
		conf.tx_news_domain_model_news = TEXT
		conf.tx_news_domain_model_news {
			field = title
			htmlSpecialChars = 1
		}
		wrap =	<li>|</li>
		wrap.if.isTrue.data = GP:tx_news_pi1|news
	}
}

#-------------------------------------------------------------------------------
#	NAVIGATION: Sidebar Sub-Menu (if sub pages)
#-------------------------------------------------------------------------------
lib.navigation.sidebar = COA
lib.navigation.sidebar {
	10 = HMENU
	10 {
		special = directory
		special.value.data = leveluid:-1		
		excludeUidList = {$plugin.t3sbootstrap_configuration.navigation.sidebar-subMenu.excludeUidList}
		1 = TMENU
		1 {
			NO = 1
			NO {
				before.cObject = LOAD_REGISTER
				before.cObject{
						glyphicon.cObject=TEXT
						glyphicon.cObject.required = 1
						glyphicon.cObject.data.dataWrap = DB:pages:{field:uid}:tx_t3sbootstrap_glyphicon
						glyphicon.cObject.wrap = <span class="glyphicon glyphicon-|"></span>
						glyphicon.cObject.if.isFalse = {$plugin.t3sbootstrap_configuration.general.fontawesome}

						fontawesome.cObject=TEXT
						fontawesome.cObject.required = 1
						fontawesome.cObject.data.dataWrap = DB:pages:{field:uid}:tx_t3sbootstrap_fontawesome_icon
						fontawesome.cObject.noTrimWrap = | <i class="fa |"></i> |
						fontawesome.cObject.if.isTrue = {$plugin.t3sbootstrap_configuration.general.fontawesome}
				}
				ATagBeforeWrap = 1
				linkWrap = {register:glyphicon}{register:fontawesome}|
				allStdWrap.insertData = 1
				stdWrap.required = 1
				wrapItemAndSub = <li>|</li>
				stdWrap.htmlSpecialChars = 1
			}

			ACT <.NO
			ACT.wrapItemAndSub = <li class="active">|</li>
			ACT.ATagParams = class="active"
			ACT.ATagBeforeWrap = 1

			CUR <.ACT

			IFSUB <.NO
			IFSUB.wrapItemAndSub = <li class="has-sub inactive">|</li>
			
			ACTIFSUB < .NO
			ACTIFSUB.wrapItemAndSub = <li class="has-sub active">|</li>

			CURIFSUB < .ACTIFSUB

		}
		2 < .1
		2 {
			wrap = <ul class="nav sidebar-sub" style="display:none;">|</ul>

			NO.wrapItemAndSub = <li class="sidebar-sub-item">|</li>

			CUR <.NO
			CUR.wrapItemAndSub = <li class="sidebar-sub-item active">|</li>

			ACT <.NO
			ACT.wrapItemAndSub = <li class="sidebar-sub-item active">|</li>

			IFSUB <.NO
			IFSUB.wrapItemAndSub = <li class="sidebar-sub-item has-sub">|</li>

			ACTIFSUB < .IFSUB
			ACTIFSUB.wrapItemAndSub = <li class="sidebar-sub-item has-sub">|</li>

			CURIFSUB < .IFSUB
			CURIFSUB.wrapItemAndSub = <li class="sidebar-sub-item has-sub active">|</li>
		}
		3 < .2		
		3 {
			wrap = <ul class="nav sidebar-sub-sub">|</ul>
		}

	}
	99 = RESTORE_REGISTER
}
[treeLevel = 0]
	lib.navigation.sidebar >
[end]
[treeLevel = 2,3,4]
	lib.navigation.sidebar.10.special.value.data = leveluid:1
[end]

#-------------------------------------------------------------------------------
#	NAVIGATION: Footer
#-------------------------------------------------------------------------------
lib.navigation.footer = COA
lib.navigation.footer {
	10 = HMENU
	10 {
		special = list
		special.value = {$plugin.t3sbootstrap_configuration.navigation.footer.uidList}

		1 = TMENU
		1 {
			expAll = 1

			NO = 1
			NO {
				wrapItemAndSub = <li>|</li>
				stdWrap.htmlSpecialChars = 1
			}
		}
		if.isTrue = {$plugin.t3sbootstrap_configuration.navigation.footer.uidList}
	}
	20 < lib.printButton
	20 {
		stdWrap.wrap = <li>|</li>
		if.isTrue = {$plugin.t3sbootstrap_configuration.navigation.footer.printButton.enable}
	}
	wrap = <ul class="nav nav-pills pull-right navbar-nav">|</ul>
}


#-------------------------------------------------------------------------------
#	GENERAL: Navbar-brand (link: back home and title)
#-------------------------------------------------------------------------------
lib.navbar-brand = COA
lib.navbar-brand {
	10 = TEXT
	10 {
		value = <i class="fa fa-play-circle"></i> {$plugin.t3sbootstrap_configuration.general.company.name}
		typolink {
			parameter = {$plugin.t3sbootstrap_configuration.pages.homepage.uid}	
			ATagParams = class="navbar-brand"
			title = {$plugin.t3sbootstrap_configuration.general.company.name} 
		}
		if {
			value = pagets__t3sbootstrap_10
			equals.data = pagelayout
			negate = 1		
		}
	}	
	15 = TEXT
	15 {
		value = <i class="fa fa-play-circle"></i> {$plugin.t3sbootstrap_configuration.general.company.name}
		typolink {
			parameter = #page-top	
			ATagParams = class="navbar-brand page-top"
		}
		if {
			value = pagets__t3sbootstrap_10
			equals.data = pagelayout
		}
	}
}

[globalVar = LIT:1 == {$plugin.t3sbootstrap_configuration.navigation.navbar.titleEnable}]
	lib.navbar-brand {
		20 = TEXT
		20.data = leveltitle:1
		20.noTrimWrap = | <span class="navbar-title visible-xs-inline navbar-brand" style="padding-left:0;">{$plugin.t3sbootstrap_configuration.navigation.navbar.delimiter} |</span>|
		20.if.isTrue.data = leveltitle:1
	}
[global]
