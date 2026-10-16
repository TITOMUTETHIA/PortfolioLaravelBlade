<section id="education" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
                <span>Academic Qualifications</span>
            </div>
            <h2 class="section-title">
                Formal <span class="text-gradient">Education</span>
            </h2>
            <p class="section-desc">
                Academic foundations bridging rigorous technical secondary education with higher specialized information technology studies.
            </p>
        </div>

        <div class="timeline-list">
            <!-- 1. HND in Information Technology -->
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="glass-card timeline-card">
                    <div class="timeline-header">
                        <div>
                            <span class="project-badge badge-cyan" style="margin-bottom: 0.5rem; display: inline-block;">
                                {{ $education[0]['badge'] }}
                            </span>
                            <h3 class="timeline-title">{{ $education[0]['degree'] }}</h3>
                            <div class="timeline-sub">{{ $education[0]['institution'] }} ({{ $education[0]['campus'] }})</div>
                        </div>
                        <span class="timeline-time-badge">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $education[0]['period'] }}</span>
                        </span>
                    </div>

                    <div class="timeline-body">
                        <ul>
                            @foreach($education[0]['details'] as $detail)
                                <li>
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $detail }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 2. G.C.E. Advanced Level -->
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="glass-card timeline-card">
                    <div class="timeline-header">
                        <div>
                            <span class="project-badge badge-blue" style="margin-bottom: 0.5rem; display: inline-block;">
                                {{ $education[1]['badge'] }}
                            </span>
                            <h3 class="timeline-title">{{ $education[1]['degree'] }}</h3>
                            <div class="timeline-sub">{{ $education[1]['institution'] }}</div>
                        </div>
                        <span class="timeline-time-badge">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $education[1]['period'] }}</span>
                        </span>
                    </div>

                    <div class="timeline-body">
                        <p style="font-size: 0.92rem; color: var(--text-muted); margin-bottom: 0.75rem;">
                            Completed Advanced Level in the Technology stream with solid performances across engineering, applied science, and computing:
                        </p>

                        <div class="exam-results-grid">
                            <div class="exam-result-box">
                                <span class="exam-subject">English</span>
                                <span class="exam-grade">B</span>
                            </div>
                            <div class="exam-result-box">
                                <span class="exam-subject">Bussiness Studies</span>
                                <span class="exam-grade">A</span>
                            </div>
                            <div class="exam-result-box">
                                <span class="exam-subject">Mathematics</span>
                                <span class="exam-grade">B-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
