<section id="projects" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span>Featured Work</span>
            </div>
            <h2 class="section-title">
                Featured <span class="text-gradient">Projects</span>
            </h2>
            <p class="section-desc">
                Real software solutions, management applications, and full-stack systems built with modern design principles and clean code.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="projects-filter-bar">
            <button type="button" class="filter-btn active" data-filter="all">All Projects</button>
            <button type="button" class="filter-btn" data-filter="Priority Project">Priority Projects</button>
            <button type="button" class="filter-btn" data-filter="Laravel">Laravel & PHP</button>
            <button type="button" class="filter-btn" data-filter="React">React & Node.js</button>
            <button type="button" class="filter-btn" data-filter="Frontend">Frontend UI</button>
        </div>

        <!-- Projects Grid -->
        <div class="projects-grid">
            @foreach($projects as $project)
                <div class="project-card-wrapper" data-category="{{ $project['badge'] }} {{ implode(' ', $project['technologies']) }} {{ $project['category'] }}">
                    <div class="glass-card project-card">
                        <!-- Card Header & Badge -->
                        <div class="project-card-header">
                            <div class="project-top-meta">
                                <span class="project-badge badge-{{ $project['accent'] }}">
                                    {{ $project['badge'] }}
                                </span>
                                <span class="project-category font-mono">
                                    {{ $project['category'] }}
                                </span>
                            </div>
                            <h3 class="project-title">{{ $project['title'] }}</h3>
                        </div>

                        <!-- Card Body & Details -->
                        <div class="project-body">
                            <p class="project-desc">
                                {{ $project['description'] }}
                            </p>

                            <!-- Key Highlights / Architecture Features -->
                            <ul class="project-highlights-list">
                                @foreach($project['highlights'] as $highlight)
                                    <li class="project-highlight-item">
                                        <span class="highlight-bullet">▹</span>
                                        <span>{{ $highlight }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Tech Stack Badges -->
                            <div class="project-tech-tags">
                                @foreach($project['technologies'] as $tech)
                                    <span class="tech-tag font-mono">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Card Footer Links -->
                        <div class="project-footer">
                            <div style="display: flex; gap: 0.65rem; align-items: center;">
                                @if(!empty($project['github_url']))
                                    <a href="{{ $project['github_url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" title="View Source on GitHub">
                                        <svg class="btn-icon" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                        </svg>
                                        <span>Repository</span>
                                    </a>
                                @elseif(!empty($project['github_profile']))
                                    <a href="{{ $project['github_profile'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" title="View Author GitHub Profile">
                                        <svg class="btn-icon" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                        </svg>
                                        <span>GitHub</span>
                                    </a>
                                @endif

                                @if(!empty($project['live_url']))
                                    <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
                                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                        <span>Live Demo</span>
                                    </a>
                                @endif
                            </div>

                            <span class="font-mono" style="font-size: 0.72rem; color: var(--text-dim);">
                                Verified Project
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
