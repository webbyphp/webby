<!-- Default App Profiler View -->
<!-- Placed in: app/Views/errors/profiling/default-view.php -->

<style>
    :root {
        --profiler-primary: #6366f1;
        --profiler-bg: #1e293b;
        --profiler-surface: #334155;
        --profiler-text: #f1f5f9;
        --profiler-text-dim: #94a3b8;
        --profiler-border: #475569;
        --profiler-success: #10b981;
        --profiler-warning: #f59e0b;
        --profiler-error: #ef4444;
        --profiler-shadow: rgba(0, 0, 0, 0.3);
    }

    /* Toggle Button Styles */
    #app-profiler-toggle {
        position: fixed;
        z-index: 999998 !important;
        background: linear-gradient(135deg, var(--profiler-primary), #8b5cf6);
        color: white;
        border: none;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        cursor: pointer;
        box-shadow: 0 4px 12px var(--profiler-shadow);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: all 0.3s ease;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    /* Position based on config */
    #app-profiler-toggle.bottom-right {
        bottom: 20px;
        right: 20px;
    }

    #app-profiler-toggle.bottom-left {
        bottom: 20px;
        left: 20px;
    }

    #app-profiler-toggle.top-right {
        top: 20px;
        right: 20px;
    }

    #app-profiler-toggle.top-left {
        top: 20px;
        left: 20px;
    }

    #app-profiler-toggle.bottom,
    #app-profiler-toggle.top {
        right: 20px;
    }

    #app-profiler-toggle.bottom {
        bottom: 20px;
    }

    #app-profiler-toggle.top {
        top: 20px;
    }

    #app-profiler-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 16px var(--profiler-shadow);
    }

    #app-profiler-toggle:active {
        transform: scale(0.95);
    }

    /* Wrapper Styles */
    #app-profiler-wrapper {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        font-size: 14px;
        line-height: 1.5;
    }

    /* Panel Styles */
    .app-profiler-panel {
        position: fixed;
        background: var(--profiler-bg);
        color: var(--profiler-text);
        box-shadow: -4px 0 20px var(--profiler-shadow);
        z-index: 999999;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease;
    }

    /* Panel positioning based on config */
    .app-profiler-panel.bottom,
    .app-profiler-panel.bottom-left,
    .app-profiler-panel.bottom-right {
        bottom: 0;
        transform: translateY(100%);
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .app-profiler-panel.top,
    .app-profiler-panel.top-left,
    .app-profiler-panel.top-right {
        top: 0;
        transform: translateY(-100%);
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
    }

    .app-profiler-panel.bottom,
    .app-profiler-panel.top {
        left: 0;
        right: 0;
        width: 100%;
        max-width: 100%;
        max-height: 70vh;
    }

    .app-profiler-panel.bottom-right,
    .app-profiler-panel.top-right {
        right: 0;
        width: 100%;
        max-width: 900px;
        max-height: 80vh;
    }

    .app-profiler-panel.bottom-left,
    .app-profiler-panel.top-left {
        left: 0;
        width: 100%;
        max-width: 900px;
        max-height: 80vh;
    }

    /* Show state */
    .app-profiler-visible.bottom .app-profiler-panel,
    .app-profiler-visible.bottom-left .app-profiler-panel,
    .app-profiler-visible.bottom-right .app-profiler-panel {
        transform: translateY(0);
    }

    .app-profiler-visible.top .app-profiler-panel,
    .app-profiler-visible.top-left .app-profiler-panel,
    .app-profiler-visible.top-right .app-profiler-panel {
        transform: translateY(0);
    }

    /* Header Styles */
    .app-profiler-header {
        background: var(--profiler-surface);
        padding: 16px 20px;
        border-bottom: 1px solid var(--profiler-border);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .app-profiler-header.top-position {
        border-top: none;
        border-bottom: 1px solid var(--profiler-border);
    }

    .app-profiler-header.bottom-position {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .app-profiler-title {
        font-size: 18px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .app-profiler-stats {
        display: flex;
        gap: 20px;
        font-size: 13px;
    }

    .app-profiler-stat {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .app-profiler-stat-label {
        color: var(--profiler-text-dim);
    }

    .app-profiler-stat-value {
        font-weight: 600;
        color: var(--profiler-success);
    }

    /* Close Button */
    .app-profiler-close {
        background: transparent;
        border: none;
        color: var(--profiler-text-dim);
        cursor: pointer;
        font-size: 24px;
        padding: 4px 8px;
        transition: color 0.2s;
        line-height: 1;
    }

    .app-profiler-close:hover {
        color: var(--profiler-text);
    }

    /* Content Styles */
    .app-profiler-content {
        overflow-y: auto;
        padding: 20px;
        flex: 1;
    }

    /* Section Styles */
    .app-profiler-section {
        background: var(--profiler-surface);
        border-radius: 8px;
        margin-bottom: 16px;
        overflow: hidden;
        border: 1px solid var(--profiler-border);
    }

    .app-profiler-section-header {
        padding: 12px 16px;
        background: rgba(99, 102, 241, 0.1);
        border-bottom: 1px solid var(--profiler-border);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.2s;
    }

    .app-profiler-section-header:hover {
        background: rgba(99, 102, 241, 0.15);
    }

    .app-profiler-section-title {
        font-weight: 600;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .app-profiler-section-badge {
        background: var(--profiler-primary);
        color: white;
        padding: 2px 8px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
    }

    .app-profiler-section-body {
        padding: 16px;
        display: none;
    }

    .app-profiler-section.expanded .app-profiler-section-body {
        display: block;
    }

    .app-profiler-section.expanded .app-profiler-toggle-icon {
        transform: rotate(180deg);
    }

    .app-profiler-toggle-icon {
        transition: transform 0.3s;
        color: var(--profiler-text-dim);
    }

    /* Table Styles */
    .app-profiler-table {
        width: 100%;
        border-collapse: collapse;
    }

    .app-profiler-table th {
        text-align: left;
        padding: 8px 12px;
        background: rgba(99, 102, 241, 0.1);
        font-weight: 600;
        font-size: 13px;
        color: var(--profiler-primary);
    }

    .app-profiler-table td {
        padding: 8px 12px;
        border-bottom: 1px solid var(--profiler-border);
        font-size: 13px;
    }

    .app-profiler-table tr:last-child td {
        border-bottom: none;
    }

    .app-profiler-table tr:hover {
        background: rgba(99, 102, 241, 0.05);
    }

    /* Code Styles */
    .app-profiler-code {
        background: #0f172a;
        padding: 12px;
        border-radius: 6px;
        font-family: 'Monaco', 'Courier New', monospace;
        font-size: 12px;
        overflow-x: auto;
        color: #e2e8f0;
        line-height: 1.6;
    }

    .app-profiler-code b {
        color: #60a5fa;
        font-weight: bold;
    }

    /* Query Time Colors */
    .app-profiler-query-time {
        color: var(--profiler-success);
        font-weight: 600;
    }

    .app-profiler-query-slow {
        color: var(--profiler-warning);
        font-weight: 600;
    }

    .app-profiler-query-very-slow {
        color: var(--profiler-error);
        font-weight: 600;
    }

    /* Empty State */
    .app-profiler-empty {
        color: var(--profiler-text-dim);
        font-style: italic;
        padding: 20px;
        text-align: center;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .app-profiler-panel {
            max-width: 100% !important;
            max-height: 90vh !important;
        }

        .app-profiler-stats {
            flex-direction: column;
            gap: 8px;
        }

        #app-profiler-toggle {
            width: 48px;
            height: 48px;
            font-size: 20px;
        }
    }

    /* Scrollbar Styles */
    .app-profiler-content::-webkit-scrollbar {
        width: 8px;
    }

    .app-profiler-content::-webkit-scrollbar-track {
        background: var(--profiler-bg);
    }

    .app-profiler-content::-webkit-scrollbar-thumb {
        background: var(--profiler-border);
        border-radius: 4px;
    }

    .app-profiler-content::-webkit-scrollbar-thumb:hover {
        background: var(--profiler-text-dim);
    }
</style>

<script>
    (function() {
        'use strict';

        const STORAGE_KEY = 'app_profiler_state';
        const COOKIE_NAME = 'app_profiler_state';
        const COOKIE_EXPIRY_DAYS = 365;

        // Helper functions for state persistence
        function saveState(isOpen) {
            // Try localStorage first
            try {
                localStorage.setItem(STORAGE_KEY, isOpen ? 'open' : 'closed');
            } catch (e) {
                // Fallback to cookie
                setCookie(COOKIE_NAME, isOpen ? 'open' : 'closed', COOKIE_EXPIRY_DAYS);
            }
        }

        function loadState() {
            // Try localStorage first
            try {
                const state = localStorage.getItem(STORAGE_KEY);
                if (state) return state === 'open';
            } catch (e) {
                // Fallback to cookie
                const state = getCookie(COOKIE_NAME);
                if (state) return state === 'open';
            }
            return false; // Default to closed
        }

        function setCookie(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "; expires=" + date.toUTCString();
            document.cookie = name + "=" + value + expires + "; path=/; SameSite=Lax";
        }

        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Initialize profiler
        function initProfiler() {
            const toggle = document.getElementById('app-profiler-toggle');
            const wrapper = document.getElementById('app-profiler-wrapper');
            const sections = document.querySelectorAll('.app-profiler-section-header');
            const closeBtn = document.querySelector('.app-profiler-close');

            if (!toggle || !wrapper) {
                console.warn('App Profiler: Toggle button or wrapper not found');
                return;
            }

            // Load saved state
            const wasOpen = loadState();
            if (wasOpen) {
                wrapper.classList.add('app-profiler-visible');
            }

            // Toggle profiler visibility
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const isOpen = wrapper.classList.toggle('app-profiler-visible');
                saveState(isOpen);
            });

            // Close button
            if (closeBtn) {
                closeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    wrapper.classList.remove('app-profiler-visible');
                    saveState(false);
                });
            }

            // Toggle sections
            sections.forEach(function(section) {
                section.addEventListener('click', function() {
                    this.parentElement.classList.toggle('expanded');
                });
            });

            // Auto-expand first section if profiler is open
            if (wasOpen) {
                const firstSection = document.querySelector('.app-profiler-section');
                if (firstSection) {
                    firstSection.classList.add('expanded');
                }
            }

            // Keyboard shortcut: Ctrl/Cmd + Shift + P
            document.addEventListener('keydown', function(e) {
                if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'P') {
                    e.preventDefault();
                    const isOpen = wrapper.classList.toggle('app-profiler-visible');
                    saveState(isOpen);
                }
            });
        }

        // Initialize when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initProfiler);
        } else {
            initProfiler();
        }
    })();
</script>

<?php
// Helper functions
function getProfilerHeader($elapsed, $memory): string
{
    return <<<HTML
<div class="app-profiler-header">
    <div class="app-profiler-title">
        <span>⚡</span>
        <span>App Profiler</span>
    </div>
    <div class="app-profiler-stats">
        <div class="app-profiler-stat">
            <span class="app-profiler-stat-label">Time:</span>
            <span class="app-profiler-stat-value">{$elapsed}s</span>
        </div>
        <div class="app-profiler-stat">
            <span class="app-profiler-stat-label">Memory:</span>
            <span class="app-profiler-stat-value">{$memory}MB</span>
        </div>
    </div>
    <button class="app-profiler-close" title="Close Profiler (Ctrl+Shift+P)">×</button>
</div>
HTML;
}

function compileSection(string $title, $content, string $icon, int $count = 0): string
{
    $badge = $count > 0 ? '<span class="app-profiler-section-badge">' . $count . '</span>' : '';

    $output = '<div class="app-profiler-section">';
    $output .= '<div class="app-profiler-section-header">';
    $output .= '<div class="app-profiler-section-title">';
    $output .= "<span>{$icon}</span> {$title} {$badge}";
    $output .= '</div>';
    $output .= '<span class="app-profiler-toggle-icon">▼</span>';
    $output .= '</div>';
    $output .= '<div class="app-profiler-section-body">';

    if (is_array($content)) {
        if (count($content) > 0) {
            $output .= '<table class="app-profiler-table">';
            $output .= '<tbody>';
            foreach ($content as $key => $val) {
                $key = htmlspecialchars((string)$key, ENT_QUOTES, 'UTF-8');
                $val = htmlspecialchars((string)$val, ENT_QUOTES, 'UTF-8');
                $output .= "<tr><td>{$key}</td><td>{$val}</td></tr>";
            }
            $output .= '</tbody></table>';
        } else {
            $output .= '<div class="app-profiler-empty">No ' . strtolower($title) . ' data</div>';
        }
    } elseif (is_string($content)) {
        if (!empty($content)) {
            $output .= '<div class="app-profiler-code">' . $content . '</div>';
        } else {
            $output .= '<div class="app-profiler-empty">No ' . strtolower($title) . ' data</div>';
        }
    }

    $output .= '</div></div>';
    return $output;
}

function compileQueries(string|array $queries): string
{

    $output = '<div class="app-profiler-section">';
    $output .= '<div class="app-profiler-section-header">';
    $output .= '<div class="app-profiler-section-title">';
    $output .= '<span>🗄️</span> Database Queries';

    $count = !is_string($queries) ? count($queries) : 0;

    if ($count > 0 && isset($queries[$count - 1]) && is_array($queries[$count - 1])) {
        $count--; // Exclude total time row
    }

    $output .= '<span class="app-profiler-section-badge">' . $count . '</span>';
    $output .= '</div>';
    $output .= '<span class="app-profiler-toggle-icon">▼</span>';
    $output .= '</div>';
    $output .= '<div class="app-profiler-section-body">';

    if (is_array($queries) && count($queries) > 0) {
        $output .= '<table class="app-profiler-table">';
        $output .= '<thead><tr><th>Query</th><th>Time</th></tr></thead><tbody>';

        foreach ($queries as $queryData) {
            if (is_array($queryData)) {
                foreach ($queryData as $time => $query) {
                    $timeFloat = (float)$time;
                    $timeClass = 'app-profiler-query-time';

                    if ($timeFloat > 0.1) {
                        $timeClass = 'app-profiler-query-very-slow';
                    } elseif ($timeFloat > 0.05) {
                        $timeClass = 'app-profiler-query-slow';
                    }

                    $output .= "<tr>";
                    $output .= "<td><div class='app-profiler-code'>{$query}</div></td>";
                    $output .= "<td class='{$timeClass}'>{$time}s</td>";
                    $output .= "</tr>";
                }
            }
        }

        $output .= '</tbody></table>';
    } else {
        $output .= '<div class="app-profiler-empty">No queries executed</div>';
    }

    $output .= '</div></div>';
    return $output;
}

// Calculate stats
$elapsed = ci()->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end');
$memory = function_exists('memory_get_usage') ? round(memory_get_usage() / 1024 / 1024, 2) : 0;

// Determine position class
$positionClass = isset($profiler_bar_location) ? $profiler_bar_location : 'bottom';
?>

<!-- Toggle Button -->
<button id="app-profiler-toggle" class="<?php echo $positionClass; ?>" title="Toggle Profiler (Ctrl+Shift+P)">⚡</button>

<!-- Profiler Wrapper -->
<div id="app-profiler-wrapper" class="<?php echo $positionClass; ?>">
    <div class="app-profiler-panel <?php echo $positionClass; ?>">

        <?php echo getProfilerHeader($elapsed, $memory); ?>

        <div class="app-profiler-content">

            <?php if (isset($sections['console']) && is_array($sections['console'])): ?>
                <?php
                $consoleCount = ($sections['console']['log_count'] ?? 0) + ($sections['console']['memory_count'] ?? 0);
                echo compileSection('Console', $sections['console']['console'] ?? [], '📋', $consoleCount);
                ?>
            <?php endif; ?>

            <?php if (isset($sections['benchmarks']) && is_array($sections['benchmarks'])): ?>
                <?php echo compileSection('Benchmarks', $sections['benchmarks'], '⏱️', count($sections['benchmarks'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['queries'])): ?>
                <?php echo compileQueries($sections['queries']); ?>
            <?php endif; ?>

            <?php if (isset($sections['eloquent']) && is_array($sections['eloquent'])): ?>
                <?php echo compileQueries($sections['eloquent']); ?>
            <?php endif; ?>

            <?php if (isset($sections['get']) && is_array($sections['get'])): ?>
                <?php echo compileSection('GET Data', $sections['get'], '📥', count($sections['get'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['post']) && is_array($sections['post'])): ?>
                <?php echo compileSection('POST Data', $sections['post'], '📤', count($sections['post'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['uri_string'])): ?>
                <?php echo compileSection('URI String', $sections['uri_string'], '🔗'); ?>
            <?php endif; ?>

            <?php if (isset($sections['controller_info'])): ?>
                <?php echo compileSection('Controller Info', $sections['controller_info'], '🎮'); ?>
            <?php endif; ?>

            <?php if (isset($sections['headers']) && is_array($sections['headers'])): ?>
                <?php echo compileSection('HTTP Headers', $sections['headers'], '📡', count($sections['headers'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['userdata']) && is_array($sections['userdata'])): ?>
                <?php echo compileSection('Session Data', $sections['userdata'], '🔐', count($sections['userdata'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['view_data']) && is_array($sections['view_data'])): ?>
                <?php echo compileSection('View Data', $sections['view_data'], '👁️', count($sections['view_data'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['config']) && is_array($sections['config'])): ?>
                <?php echo compileSection('Config', $sections['config'], '⚙️', count($sections['config'])); ?>
            <?php endif; ?>

            <?php if (isset($sections['files']) && is_array($sections['files'])): ?>
                <?php
                $output = '<div class="app-profiler-section">';
                $output .= '<div class="app-profiler-section-header">';
                $output .= '<div class="app-profiler-section-title">';
                $output .= '<span>📁</span> Loaded Files';
                $output .= '<span class="app-profiler-section-badge">' . count($sections['files']) . '</span>';
                $output .= '</div>';
                $output .= '<span class="app-profiler-toggle-icon">▼</span>';
                $output .= '</div>';
                $output .= '<div class="app-profiler-section-body">';
                $output .= '<table class="app-profiler-table"><tbody>';
                foreach ($sections['files'] as $file) {
                    $fileName = basename($file);
                    $filePath = str_replace(FCPATH, '', $file);
                    $output .= "<tr><td><strong>{$fileName}</strong><br><span style='color: var(--profiler-text-dim); font-size: 11px;'>{$filePath}</span></td></tr>";
                }
                $output .= '</tbody></table>';
                $output .= '</div></div>';
                echo $output;
                ?>
            <?php endif; ?>

        </div>
    </div>
</div>