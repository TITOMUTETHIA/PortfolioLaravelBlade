<section id="experience" class="section-padding" style="background: rgba(11, 25, 44, 0.45);">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span>Career History</span>
            </div>
            <h2 class="section-title">
                Work <span class="text-gradient">Experience</span>
            </h2>
            <p class="section-desc">
                Verified commercial work experience reflecting accountability, client service excellence, and strict data accuracy.
            </p>
        </div>

        <div class="timeline-list">
            @foreach($experience as $exp)
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="glass-card timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3 class="timeline-title">{{ $exp['role'] }}</h3>
                                <div class="timeline-sub">{{ $exp['company'] }}</div>
                            </div>
                            <span class="timeline-time-badge">
                                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $exp['duration'] }}</span>
                            </span>
                        </div>

                        <div class="timeline-body">
                            <span class="project-badge badge-blue" style="margin-bottom: 0.75rem; display: inline-block;">
                                {{ $exp['type'] }}
                            </span>

                            <ul>
                                @foreach($exp['responsibilities'] as $resp)
                                    <li>
                                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $resp }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Academic Technical Development Milestones -->
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="glass-card timeline-card">
                    <div class="timeline-header">
                        <div>
                            <h3 class="timeline-title">Full-Stack Project Development</h3>
                            <div class="timeline-sub">Kirinyaga University</div>
                        </div>
                        <span class="timeline-time-badge">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>2021-2025 </span>
                        </span>
                    </div>

                    <div class="timeline-body">
                        <span class="project-badge badge-cyan" style="margin-bottom: 0.75rem; display: inline-block;">
                            Software Engineering & Application Architecture
                        </span>

                        <ul>
                            <li>
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Engineered full-stack applications adhering to MVC patterns, clean database schemas, and RESTful routing standards.</span>
                            </li>
                            <li>
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Collaborated in lab programming assignments focusing on OOP, PHP/MySQL integration, JavaScript DOM manipulation, and Postman API testing.</span>
                            </li>
                            <li>
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Implemented Git version control workflows for code commits, branches, and structured project repository management.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
