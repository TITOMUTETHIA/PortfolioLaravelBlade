<header class="navbar">
    <div class="container navbar-inner">
        <!-- Brand Logo -->
        <a href="#hero" class="brand-logo" aria-label="Dinidu Dissanayake Homepage">
            <span class="brand-bracket">&lt;</span>Dinidu<span class="brand-dot">.dev</span><span class="brand-bracket"> /&gt;</span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav aria-label="Main Navigation">
            <ul class="nav-links">
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#education" class="nav-link">Education</a></li>
                <li><a href="#references" class="nav-link">References</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </nav>

        <!-- Right Action Button & Mobile Toggle -->
        <div class="nav-actions">
            <a href="{{ route('cv.download') }}" class="btn btn-secondary btn-sm btn-download-nav" download="Dinidu_Dissanayake_CV.pdf">
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>Download CV</span>
            </a>

            <button type="button" class="mobile-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>
</header>
