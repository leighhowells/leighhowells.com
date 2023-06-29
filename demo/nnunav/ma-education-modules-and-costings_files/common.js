// Steve M - any JS that is needed across the entire site for various things goes in here, just comment what it is for

// Google Analytics function for tracking outbound links
function recordOutboundLink(link, category, action) {
  try {
    var pageTracker=_gat._getTracker("UA-6108689-1");
    pageTracker._trackEvent(category, action);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}
