/**
 * CollegeAll Toast Notification Component
 * Zero-dependency, accessible, production-ready toast notifications.
 */
(function (root) {
    'use strict';

    var CONTAINER_ID = 'collegeall-toast-container';

    // SVG Icons for each notification type
    var ICONS = {
        success: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>',
        warning: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
        error: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>',
        info: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>',
        close: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>'
    };

    var DEFAULT_TITLES = {
        success: 'Success',
        warning: 'Attention',
        error: 'Error',
        info: 'Notice'
    };

    /**
     * Get or create the toast container element in the DOM.
     * @returns {HTMLElement}
     */
    function getContainer() {
        var container = document.getElementById(CONTAINER_ID);
        if (!container) {
            container = document.createElement('div');
            container.id = CONTAINER_ID;
            container.setAttribute('aria-live', 'polite');
            container.setAttribute('aria-atomic', 'true');
            if (document.body) {
                document.body.appendChild(container);
            } else {
                document.addEventListener('DOMContentLoaded', function () {
                    document.body.appendChild(container);
                });
            }
        }
        return container;
    }

    /**
     * Show a toast notification.
     *
     * @param {string} message - Notification text message.
     * @param {string} [type='info'] - 'success' | 'warning' | 'error' | 'info'.
     * @param {number} [duration=5000] - Duration in milliseconds before auto-dismissal.
     * @param {string} [customTitle] - Optional custom title text for the notification.
     * @returns {HTMLElement} The created toast element.
     */
    function showToast(message, type, duration, customTitle) {
        if (!message) return null;

        type = (type || 'info').toLowerCase();
        if (!ICONS[type]) {
            type = 'info';
        }
        if (typeof duration !== 'number') {
            duration = 5000;
        }

        var container = getContainer();

        var toast = document.createElement('div');
        toast.className = 'ca-toast ca-toast-' + type;
        toast.setAttribute('role', (type === 'error' || type === 'warning') ? 'alert' : 'status');

        // Icon
        var iconWrapper = document.createElement('div');
        iconWrapper.className = 'ca-toast-icon-wrapper';
        iconWrapper.innerHTML = ICONS[type];
        toast.appendChild(iconWrapper);

        // Body
        var body = document.createElement('div');
        body.className = 'ca-toast-body';

        var title = document.createElement('div');
        title.className = 'ca-toast-title';
        title.textContent = (customTitle && typeof customTitle === 'string') ? customTitle : DEFAULT_TITLES[type];
        body.appendChild(title);

        var msgEl = document.createElement('div');
        msgEl.className = 'ca-toast-message';
        // SAFE TEXT RENDERING: Use textContent to prevent XSS
        msgEl.textContent = String(message);
        body.appendChild(msgEl);

        toast.appendChild(body);

        // Close Button
        var closeBtn = document.createElement('button');
        closeBtn.className = 'ca-toast-close';
        closeBtn.type = 'button';
        closeBtn.setAttribute('aria-label', 'Close notification');
        closeBtn.innerHTML = ICONS.close;
        toast.appendChild(closeBtn);

        // Add to DOM
        container.appendChild(toast);

        // Trigger entrance animation
        requestAnimationFrame(function () {
            toast.classList.add('ca-toast-show');
        });

        var timerId = null;
        var isDismissed = false;

        function dismiss() {
            if (isDismissed) return;
            isDismissed = true;

            if (timerId) {
                clearTimeout(timerId);
                timerId = null;
            }

            toast.classList.remove('ca-toast-show');
            toast.classList.add('ca-toast-hide');

            setTimeout(function () {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 360);
        }

        closeBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            dismiss();
        });

        // Auto-dismissal after duration (default 5000ms)
        if (duration > 0) {
            timerId = setTimeout(dismiss, duration);

            // Pause auto-dismissal on hover
            toast.addEventListener('mouseenter', function () {
                if (timerId) {
                    clearTimeout(timerId);
                    timerId = null;
                }
            });
            toast.addEventListener('mouseleave', function () {
                if (!isDismissed && !timerId) {
                    timerId = setTimeout(dismiss, 2000);
                }
            });
        }

        return toast;
    }

    // Expose APIs globally
    root.showToast = showToast;
    root.Toast = {
        show: showToast,
        success: function (msg, dur, title) { return showToast(msg, 'success', dur, title); },
        warning: function (msg, dur, title) { return showToast(msg, 'warning', dur, title); },
        error: function (msg, dur, title) { return showToast(msg, 'error', dur, title); },
        info: function (msg, dur, title) { return showToast(msg, 'info', dur, title); }
    };

})(typeof window !== 'undefined' ? window : this);
