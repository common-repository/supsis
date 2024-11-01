<iframe
	id="supsis-iframe"
	style="
    overflow: hidden;
    height: calc(100vh - 101px);
    min-height: 620px;
    width: calc(100% + 20px);
    transform: translateX(-20px);
    box-shadow: 0 0 8px 0 #bfbfbf8f;
  "
	width="100%"
	sandbox="allow-forms allow-top-navigation allow-same-origin allow-popups allow-popups-to-escape-sandbox allow-scripts"
	allow="camera *;microphone *;fullscreen *; geolocation *;"
	src="<?php echo esc_url($iframeUrl) ?? ''; ?>"
></iframe>
