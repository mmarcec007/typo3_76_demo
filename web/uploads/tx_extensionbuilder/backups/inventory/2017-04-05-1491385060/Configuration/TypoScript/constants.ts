
plugin.tx_inventory_inventory {
  view {
    # cat=plugin.tx_inventory_inventory/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:inventory/Resources/Private/Templates/
    # cat=plugin.tx_inventory_inventory/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:inventory/Resources/Private/Partials/
    # cat=plugin.tx_inventory_inventory/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:inventory/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_inventory_inventory//a; type=string; label=Default storage PID
    storagePid =
  }
}
