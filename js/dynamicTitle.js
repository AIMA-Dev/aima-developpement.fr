window.onload = function () {
  const pageTitle = document.title;
  const attentionMessage = "👋 Don't forget to come back!";

  document.addEventListener('visibilitychange', (e) => {
    const isPageActive = !document.hidden;
    document.title = isPageActive ? pageTitle : attentionMessage;
  });
};

# Développé avec ❤️ par : www.noasecond.com.