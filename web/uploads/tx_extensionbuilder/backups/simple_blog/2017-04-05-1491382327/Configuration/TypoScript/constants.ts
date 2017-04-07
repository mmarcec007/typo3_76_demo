
plugin.tx_simpleblog_list {
  view {
    # cat=plugin.tx_simpleblog_list/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:simple_blog/Resources/Private/Templates/
    # cat=plugin.tx_simpleblog_list/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:simple_blog/Resources/Private/Partials/
    # cat=plugin.tx_simpleblog_list/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:simple_blog/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_simpleblog_list//a; type=string; label=Default storage PID
    storagePid =
  }
}

module.tx_simpleblog_list {
  view {
    # cat=module.tx_simpleblog_list/file; type=string; label=Path to template root (BE)
    templateRootPath = EXT:simple_blog/Resources/Private/Backend/Templates/
    # cat=module.tx_simpleblog_list/file; type=string; label=Path to template partials (BE)
    partialRootPath = EXT:simple_blog/Resources/Private/Backend/Partials/
    # cat=module.tx_simpleblog_list/file; type=string; label=Path to template layouts (BE)
    layoutRootPath = EXT:simple_blog/Resources/Private/Backend/Layouts/
  }
  persistence {
    # cat=module.tx_simpleblog_list//a; type=string; label=Default storage PID
    storagePid =
  }
}
