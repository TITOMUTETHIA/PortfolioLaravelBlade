<section id="hero" class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <!-- Left Column: Introduction & Call-to-Actions -->
            <div class="hero-content">
                <div class="hero-status-pill">
                    <span class="status-dot"></span>
                    <span>{{ $profile['status'] }}</span>
                </div>

                <div class="hero-greeting">
                    <span>Hello, I'm</span>
                </div>

                <h1 class="hero-name">{{ $profile['name'] }}</h1>
                
                <h2 class="hero-headline">
                    <span class="text-gradient">{{ $profile['headline'] }}</span>
                </h2>

                <p class="hero-bio">
                    {{ $profile['summary'] }}
                </p>

                <!-- Primary Action Buttons -->
                <div class="hero-cta-group">
                    <a href="#projects" class="btn btn-primary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <span>View Projects</span>
                    </a>

                    <a href="#contact" class="btn btn-secondary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Contact Me</span>
                    </a>

                    <a href="{{ route('cv.download') }}" class="btn btn-outline" download="{{ $profile['cv_filename'] }}" target="_blank">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span>Download CV</span>
                    </a>
                </div>

                <!-- Verified Stats / Highlights from CV -->
                <div class="hero-meta-strip">
                    <div class="meta-stat">
                        <span class="meta-stat-num">HND<span>.IT</span></span>
                        <span class="meta-stat-label">SLIATE Kandy</span>
                    </div>

                    <div class="meta-stat">
                        <span class="meta-stat-num">1<span> Year</span></span>
                        <span class="meta-stat-label">Professional Experience</span>
                    </div>

                    <div class="meta-stat">
                        <span class="meta-stat-num">5<span>+</span></span>
                        <span class="meta-stat-label">Web Projects</span>
                    </div>

                    <div class="meta-stat">
                        <span class="meta-stat-num">4<span>+</span></span>
                        <span class="meta-stat-label">Core Languages</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Profile Visual Card -->
            <div class="hero-visual">
                <div class="avatar-wrapper">
                    <div class="avatar-glow"></div>
                    <div class="avatar-card">
                        <div class="avatar-image-box">
                            <img 
                                src="{{ $profile['avatar'] }}" 
                                alt="{{ $profile['name'] }} - Aspiring Software Developer" 
                                class="avatar-image"
                                onerror="this.onerror=null; this.src='{{ $profile['avatar_fallback'] }}';"
                            >
                        </div>
                        
                        <div class="avatar-badge-floating">
                            <div class="avatar-badge-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="avatar-badge-text">Tito Mutethia</div>
                                <div class="avatar-badge-sub">Full-Stack & Laravel Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
