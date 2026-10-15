<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="#hero" class="brand-logo" aria-label="Dinidu Dissanayake Homepage">
                    <span class="brand-bracket">&lt;</span>Dinidu<span class="brand-dot">.dev</span><span class="brand-bracket"> /&gt;</span>
                </a>
                <p class="footer-desc">
                    Aspiring Software Developer passionate about engineering modern, high-performance web applications with Laravel, React, and Node.js.
                </p>
            </div>

            <nav class="footer-nav" aria-label="Footer Navigation">
                <a href="#about" class="footer-link">About</a>
                <a href="#skills" class="footer-link">Skills</a>
                <a href="#projects" class="footer-link">Projects</a>
                <a href="#experience" class="footer-link">Experience</a>
                <a href="#education" class="footer-link">Education</a>
                <a href="#references" class="footer-link">References</a>
                <a href="#contact" class="footer-link">Contact</a>
                <a href="{{ route('cv.download') }}" class="footer-link" download="{{ $profile['cv_filename'] }}">Download CV</a>
            </nav>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; {{ date('Y') }} Dinidu Dissanayake. All rights reserved.
            </div>
            <div>
                Crafted with <strong style="color: var(--accent-cyan);">Laravel 12</strong> &amp; Blade Templates
            </div>
        </div>
    </div>

    <!-- Floating Back to Top Button -->
    <button type="button" class="back-to-top" aria-label="Scroll back to top">
        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</footer>
