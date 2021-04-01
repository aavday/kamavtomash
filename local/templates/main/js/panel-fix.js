BX.ready(function () {
  var header = document.querySelector(".header"),
          BxPanel = BX.admin.panel,
          FxPanel = function () {
              if (window.pageYOffset >= BxPanel.DIV.clientHeight && BxPanel.isFixed() === false) {
                  header.style.top = 0;
              } else if (BxPanel.isFixed() === true) {
                  header.style.top = BxPanel.DIV.clientHeight + "px";
              } else {
                  header.style.top = BxPanel.DIV.clientHeight - window.pageYOffset + "px";
              }
          };
  if (!!header) {
      FxPanel();
      window.onscroll = FxPanel;
      BX.addCustomEvent('onTopPanelCollapse', BX.delegate(FxPanel, this));
      BX.addCustomEvent('onTopPanelFix', BX.delegate(FxPanel, this));
  }
});