
plugin.tx_simpleblog_list {
  view {
    templateRootPaths.0 = EXT:simple_blog/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_simpleblog_list.view.templateRootPath}
    partialRootPaths.0 = EXT:simple_blog/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_simpleblog_list.view.partialRootPath}
    layoutRootPaths.0 = EXT:simple_blog/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_simpleblog_list.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_simpleblog_list.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_simpleblog._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-simple-blog table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-simple-blog table th {
        font-weight:bold;
    }

    .tx-simple-blog table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
