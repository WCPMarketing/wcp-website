// ===== WCP Chat Widget =====
// Self-contained: injects its own CSS and HTML. Only requires styles.css
// to already be loaded on the page (for --red, --dark, --font-display etc.)
// Add <script src="chatbot.js"></script> before </body> on any page.

(function () {
  'use strict';

  var FORMSPREE_ENDPOINT = 'https://formspree.io/f/xvkppvjl';
  var PHONE = '1-833-844-1977';
  var PHONE_HREF = 'tel:+18338441977';

  // Send events to Google Analytics (GA4) if it's loaded on the page.
  // Never throws — if gtag is blocked (ad blockers) or missing, this just does nothing.
  function trackEvent(eventName, params) {
    try {
      if (typeof window.gtag === 'function') {
        window.gtag('event', eventName, params || {});
      }
    } catch (e) { /* tracking should never break the chat experience */ }
  }

  // ---------- Content: menu options and their responses ----------
  var MENU = [
    { id: 'wireless', label: 'Business wireless plans' },
    { id: 'internet', label: 'Business internet plans' },
    { id: 'review', label: 'Get a free bill review' },
    { id: 'human', label: 'Talk to a person' }
  ];

  var RESPONSES = {
    wireless: {
      text: "Here's a quick overview of our business wireless plans:\n\n" +
            "**Small Business** (bring your own device) — from $65/mo per line\n" +
            "**5+ Lines Corporate** (pooled data) — from $38/mo per line\n" +
            "**10+ Lines Corporate** (pooled data, dedicated support) — from $30/mo per line\n\n" +
            "All plans include unlimited Canada-wide talk & text. Want the full breakdown, or would you like a specialist to help you pick?",
      links: [{ label: 'See full wireless plans', href: 'business-wireless.html' }],
      followUp: ['review', 'human', 'menu']
    },
    internet: {
      text: "Here's a quick overview of our business internet options:\n\n" +
            "**Business Internet** — from $64.99/mo (300 Mbps)\n" +
            "**Business Fibre** — from $79.99/mo (100 Mbps, symmetrical)\n" +
            "**Dedicated Fibre** — custom pricing, static IP included\n" +
            "**5G Business Internet** — from $70/mo, self-install in minutes\n\n" +
            "Want the full breakdown, or would you like a specialist to help you pick?",
      links: [{ label: 'See full internet plans', href: 'business-internet.html' }],
      followUp: ['review', 'human', 'menu']
    },
    menu: {
      text: "What can I help you with?",
      showMenu: true
    }
  };

  var GREETING = "Hi, I'm Bob! I'm here to help with Rogers business wireless, internet, and phone plans. What can I help you with?";

  // ---------- Inject styles ----------
  var style = document.createElement('style');
  style.textContent = [
    '@keyframes wcpPopIn{0%{transform:scale(0);opacity:0;}60%{transform:scale(1.12);opacity:1;}100%{transform:scale(1);}}',
    '@keyframes wcpPanelIn{0%{transform:translateY(16px) scale(0.97);opacity:0;}100%{transform:translateY(0) scale(1);opacity:1;}}',
    '.wcp-chat-panel.open{animation:wcpPanelIn 0.28s ease-out both;}',
    '@media (prefers-reduced-motion: reduce){.wcp-chat-launcher,.wcp-chat-panel.open{animation:none !important;}}',
    '.wcp-chat-launcher{position:fixed;bottom:22px;right:22px;width:58px;height:58px;border-radius:50%;background:var(--red,#B40E2A);color:#fff;border:none;cursor:pointer;box-shadow:0 8px 24px rgba(0,0,0,0.25);z-index:9999;display:flex;align-items:center;justify-content:center;transition:transform 0.2s ease;animation:wcpPopIn 0.5s cubic-bezier(.34,1.56,.64,1) both;}',
    '.wcp-chat-launcher:hover{transform:scale(1.06);}',
    '.wcp-chat-launcher svg{width:26px;height:26px;}',
    '.wcp-chat-panel{position:fixed;bottom:92px;right:22px;width:360px;max-width:calc(100vw - 32px);height:520px;max-height:calc(100vh - 140px);background:#fff;border-radius:16px;box-shadow:0 20px 60px rgba(0,0,0,0.25);z-index:9999;display:none;flex-direction:column;overflow:hidden;font-family:var(--font-body,Inter,sans-serif);}',
    '.wcp-chat-panel.open{display:flex;}',
    '.wcp-chat-header{background:var(--dark,#14161A);color:#fff;padding:16px 18px;display:flex;align-items:center;justify-content:space-between;flex:0 0 auto;}',
    '.wcp-chat-header-title{font-family:var(--font-display,Georgia,serif);font-size:16px;font-weight:600;}',
    '.wcp-chat-header-sub{font-size:11px;color:rgba(255,255,255,0.6);margin-top:2px;}',
    '.wcp-chat-close{background:none;border:none;color:#fff;cursor:pointer;padding:4px;opacity:0.7;}',
    '.wcp-chat-close:hover{opacity:1;}',
    '.wcp-chat-messages{flex:1 1 auto;overflow-y:auto;padding:16px;display:flex;flex-direction:column;gap:12px;background:var(--surface,#F6F6F4);}',
    '.wcp-msg{max-width:85%;padding:10px 13px;border-radius:12px;font-size:13.5px;line-height:1.5;white-space:pre-line;}',
    '.wcp-msg-bot{background:#fff;border:1px solid var(--border,#E3E3E3);color:var(--text,#222);align-self:flex-start;border-bottom-left-radius:4px;}',
    '.wcp-msg-user{background:var(--red,#B40E2A);color:#fff;align-self:flex-end;border-bottom-right-radius:4px;}',
    '.wcp-msg strong{font-weight:700;}',
    '.wcp-chat-options{display:flex;flex-direction:column;gap:8px;align-self:flex-start;max-width:90%;}',
    '.wcp-chat-btn{background:#fff;border:1px solid var(--red,#B40E2A);color:var(--red,#B40E2A);border-radius:20px;padding:8px 14px;font-size:13px;font-weight:600;cursor:pointer;text-align:left;transition:background 0.15s ease,color 0.15s ease;}',
    '.wcp-chat-btn:hover{background:var(--red,#B40E2A);color:#fff;}',
    '.wcp-chat-link{display:inline-block;margin-top:6px;font-size:13px;font-weight:600;color:var(--red,#B40E2A);border-bottom:1px solid currentColor;}',
    '.wcp-chat-footer{flex:0 0 auto;padding:12px 16px;border-top:1px solid var(--border,#E3E3E3);text-align:center;font-size:11.5px;color:var(--text-muted,#5B5B5B);background:#fff;}',
    '.wcp-chat-footer a{color:var(--red,#B40E2A);font-weight:600;}',
    '.wcp-lead-form{display:flex;flex-direction:column;gap:8px;align-self:stretch;background:#fff;border:1px solid var(--border,#E3E3E3);border-radius:12px;padding:12px;}',
    '.wcp-lead-form input{padding:9px 11px;border:1px solid var(--border,#E3E3E3);border-radius:6px;font-size:13px;font-family:inherit;}',
    '.wcp-lead-form input:focus{outline:2px solid var(--red,#B40E2A);outline-offset:1px;}',
    '.wcp-lead-form button{background:var(--red,#B40E2A);color:#fff;border:none;border-radius:6px;padding:9px;font-size:13px;font-weight:600;cursor:pointer;}',
    '.wcp-lead-form button:hover{background:var(--red-dark,#8F0B21);}',
    '@media (max-width:420px){.wcp-chat-panel{right:16px;left:16px;width:auto;bottom:84px;}.wcp-chat-launcher{right:16px;bottom:16px;}}'
  ].join('\n');
  document.head.appendChild(style);

  // ---------- Inject markup ----------
  var launcher = document.createElement('button');
  launcher.className = 'wcp-chat-launcher';
  launcher.setAttribute('aria-label', 'Chat with Bob');
  launcher.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>';

  var panel = document.createElement('div');
  panel.className = 'wcp-chat-panel';
  panel.innerHTML =
    '<div class="wcp-chat-header">' +
      '<div><div class="wcp-chat-header-title">Bob</div><div class="wcp-chat-header-sub">WCP Assistant · Rogers Authorized Dealer</div></div>' +
      '<button class="wcp-chat-close" aria-label="Close chat"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg></button>' +
    '</div>' +
    '<div class="wcp-chat-messages"></div>' +
    '<div class="wcp-chat-footer">Prefer to talk? Call <a href="' + PHONE_HREF + '">' + PHONE + '</a></div>';

  document.body.appendChild(launcher);
  document.body.appendChild(panel);

  var messagesEl = panel.querySelector('.wcp-chat-messages');
  var closeBtn = panel.querySelector('.wcp-chat-close');
  var started = false;

  function scrollToBottom() {
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function addBotMessage(text) {
    var el = document.createElement('div');
    el.className = 'wcp-msg wcp-msg-bot';
    el.innerHTML = escapeHtml(text).replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>').replace(/\n/g, '<br>');
    messagesEl.appendChild(el);
    scrollToBottom();
  }

  function addUserMessage(text) {
    var el = document.createElement('div');
    el.className = 'wcp-msg wcp-msg-user';
    el.textContent = text;
    messagesEl.appendChild(el);
    scrollToBottom();
  }

  function escapeHtml(str) {
    var div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
  }

  function clearOptions() {
    var existing = messagesEl.querySelector('.wcp-chat-options, .wcp-lead-form');
    if (existing) existing.remove();
  }

  function showMenuOptions() {
    clearOptions();
    var wrap = document.createElement('div');
    wrap.className = 'wcp-chat-options';
    MENU.forEach(function (item) {
      var btn = document.createElement('button');
      btn.className = 'wcp-chat-btn';
      btn.textContent = item.label;
      btn.addEventListener('click', function () { handleSelection(item.id, item.label); });
      wrap.appendChild(btn);
    });
    messagesEl.appendChild(wrap);
    scrollToBottom();
  }

  function showFollowUpOptions(ids) {
    clearOptions();
    var wrap = document.createElement('div');
    wrap.className = 'wcp-chat-options';
    ids.forEach(function (id) {
      var label = id === 'review' ? 'Get a free bill review'
        : id === 'human' ? 'Talk to a person'
        : 'Back to main menu';
      var btn = document.createElement('button');
      btn.className = 'wcp-chat-btn';
      btn.textContent = label;
      btn.addEventListener('click', function () { handleSelection(id, label); });
      wrap.appendChild(btn);
    });
    messagesEl.appendChild(wrap);
    scrollToBottom();
  }

  function showLeadForm() {
    clearOptions();
    var wrap = document.createElement('form');
    wrap.className = 'wcp-lead-form';
    wrap.innerHTML =
      '<input type="text" name="name" placeholder="Your name" required>' +
      '<input type="text" name="business_name" placeholder="Business name" required>' +
      '<input type="tel" name="phone" placeholder="Phone number" required>' +
      '<input type="email" name="email" placeholder="Email address" required>' +
      '<button type="submit">Send my info</button>';
    wrap.addEventListener('submit', function (e) {
      e.preventDefault();
      var formData = new FormData(wrap);
      formData.append('source', 'Website chat widget');
      var submitBtn = wrap.querySelector('button');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';
      fetch(FORMSPREE_ENDPOINT, {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      }).then(function (res) {
        if (res.ok) {
          clearOptions();
          trackEvent('bob_lead_submitted', { page_path: window.location.pathname });
          addBotMessage("Thanks! A WCP business specialist will reach out shortly. You can also call " + PHONE + " anytime.");
        } else {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send my info';
          addBotMessage("Something went wrong sending that — mind trying again, or just calling " + PHONE + "?");
        }
      }).catch(function () {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Send my info';
        addBotMessage("Something went wrong sending that — mind trying again, or just calling " + PHONE + "?");
      });
    });
    messagesEl.appendChild(wrap);
    scrollToBottom();
  }

  function handleSelection(id, label) {
    addUserMessage(label);
    clearOptions();
    trackEvent('bob_option_click', { option_id: id, option_label: label });

    if (id === 'menu') {
      addBotMessage(RESPONSES.menu.text);
      showMenuOptions();
      return;
    }

    if (id === 'review' || id === 'human') {
      addBotMessage(id === 'human'
        ? "Happy to connect you. Leave your info below and a WCP specialist will reach out — or call " + PHONE + " right now."
        : "Sure — leave your info below and we'll review your current bill and options.");
      showLeadForm();
      return;
    }

    var response = RESPONSES[id];
    if (!response) return;

    addBotMessage(response.text);

    if (response.links) {
      var linksWrap = document.createElement('div');
      response.links.forEach(function (link) {
        var a = document.createElement('a');
        a.className = 'wcp-chat-link';
        a.href = link.href;
        a.textContent = link.label;
        linksWrap.appendChild(a);
      });
      messagesEl.appendChild(linksWrap);
    }

    if (response.followUp) {
      showFollowUpOptions(response.followUp);
    }
  }

  function openPanel() {
    panel.classList.add('open');
    if (!started) {
      started = true;
      trackEvent('bob_opened', { page_path: window.location.pathname });
      addBotMessage(GREETING);
      showMenuOptions();
    }
  }

  function closePanel() {
    panel.classList.remove('open');
  }

  launcher.addEventListener('click', function () {
    if (panel.classList.contains('open')) { closePanel(); } else { openPanel(); }
  });
  closeBtn.addEventListener('click', closePanel);

  // Auto pop-open shortly after page load, but only once per browser session —
  // not every time the visitor navigates to a new page.
  var AUTO_OPEN_KEY = 'wcpBobAutoOpened';
  var alreadyAutoOpened = false;
  try {
    alreadyAutoOpened = window.sessionStorage.getItem(AUTO_OPEN_KEY) === '1';
  } catch (e) {
    // sessionStorage unavailable (e.g. privacy mode) — fall back to opening once per page
  }

  if (!alreadyAutoOpened) {
    window.setTimeout(function () {
      if (!panel.classList.contains('open')) {
        openPanel();
      }
      try { window.sessionStorage.setItem(AUTO_OPEN_KEY, '1'); } catch (e) {}
    }, 12000);
  }

})();
