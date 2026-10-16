<section id="about" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>About Me</span>
            </div>
            <h2 class="section-title">
                Passionate About <span class="text-gradient">Building Multi-Platform Software</span> That Solves Problems
            </h2>
            <p class="section-desc">
                A dedicated, fast-learning developer with hands-on experience in full-stack web development.
            </p>
        </div>

        <div class="about-grid">
            <!-- Left: Professional Summary & Career Focus -->
            <div class="glass-card about-card">
                <h3 class="about-title">
                    <svg class="about-title-icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Professional Background & Objectives</span>
                </h3>

                <p class="about-p">
                    I am a Developer completed<strong>Bachelor's Degree in Computer Systems Engineering</strong> at the Kirinyaga University.
                </p>

                <p class="about-p">
                    My technical journey combines a strong theoretical foundation in computer systems and programming fundamentals with practical experience building modern web applications. Having developed projects utilizing <strong>Laravel, PHP, C# and MySQL</strong>, I enjoy crafting reliable backend APIs, structured relational databases, and clean, responsive user interfaces.
                </p>

                <p class="about-p">
                    Prior to committing fully to software engineering, I completed a 3-month attachment role at <strong>kenyatta University Teaching and Research Hospital</strong> and a short-term attachment at <strong>Centric Limited</strong>. This background provided valuable real-world exposure to becoming a laravel developer, rigorous administrative precision, IT support, cybersecurity, client communication, and customer confidentiality.
                </p>

                <div class="about-highlight-box">
                    <div class="about-highlight-text">
                        <strong>Career Goal:</strong> Actively seeking a Junior Developer role where I can apply my programming skills, collaborate with other developers, and build scalable real-world digital products.
                    </div>
                </div>
            </div>

            <!-- Right: Quick Facts Card -->
            <div class="glass-card info-card">
                <h3 class="about-title">
                    <svg class="about-title-icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Key Information</span>
                </h3>

                <div class="info-item">
                    <div class="info-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <div class="info-label">Full Name</div>
                        <div class="info-val">{{ $profile['name'] }}</div>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </div>
                    <div>
                        <div class="info-label">Current Academic Level</div>
                        <div class="info-val">Bachelor's Degree in Computer Systems Engineering</div>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <div class="info-label">Location</div>
                        <div class="info-val">{{ $profile['location'] }}</div>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <div class="info-label">Industry Experience</div>
                        <div class="info-val">3-month (Kenyatta University Teaching and Research Hospital) and Centric Limited</div>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <div class="info-label">Target Role</div>
                        <div class="info-val">Junior Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
