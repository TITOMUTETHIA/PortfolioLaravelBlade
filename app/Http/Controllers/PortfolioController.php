<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class PortfolioController extends Controller
{
    /**
     * Display the developer portfolio homepage.
     */
    public function index()
    {
        $profile = [
            'name' => 'Tito Mutethia',
            'headline' => 'Software Developer',
            'subheadline' => 'Computer Systems Engineering | Full-Stack Web Development | IT support ',
            'location' => 'Naironi, Kenya',
            'city' => 'Nairobi',
            'email' => 'titomutethia@gmail.com',
            'phone' => '074 095 3711',
            'phone_intl' => '+254740953711',
            'github' => 'https://github.com/titomutethia',
            'status' => 'Available for Software Development Junior Roles',
            'avatar' => asset('images/profile.png'),
            'avatar_fallback' => asset('images/profile.jpg'),
            'cv_path' => asset('cv/Tito_Mutethia_CV.pdf'),
            'cv_filename' => 'Tito_Mutethia_CV.pdf',
            'summary' => 'Software developer with a focus on Laravel, C# and .NET MAUI application development.',
        ];

        $skills = [
            'languages' => [
                'title' => 'Programming Languages',
                'description' => 'Core programming foundations for algorithm design and application logic',
                'items' => [
                    ['name' => 'PHP', 'level' => 'Proficient', 'icon' => 'php', 'tag' => 'Backend & Laravel'],
                    ['name' => 'JavaScript', 'level' => 'Proficient', 'icon' => 'javascript', 'tag' => 'ES6+ / Web'],
                    ['name' => 'c#', 'level' => 'Intermediate', 'icon' => 'csharp', 'tag' => 'Frontend & Backend'],
                    ['name' => 'Python', 'level' => 'Intermediate', 'icon' => 'python', 'tag' => 'Scripting & Logic'],
                ],
            ],
            'frontend' => [
                'title' => 'Web & Frontend Technologies',
                'description' => 'Crafting responsive, accessible, and intuitive user experiences',
                'items' => [
                    ['name' => 'React.js', 'level' => 'Proficient', 'icon' => 'react', 'tag' => 'Components & State'],
                    ['name' => 'HTML5', 'level' => 'Advanced', 'icon' => 'html5', 'tag' => 'Semantic Markup'],
                    ['name' => 'CSS3', 'level' => 'Advanced', 'icon' => 'css3', 'tag' => 'Flexbox / Grid / Animations'],
                    ['name' => 'Blade Templating', 'level' => 'Proficient', 'icon' => 'blade', 'tag' => 'Laravel UI Engine'],
                    ['name' => 'Responsive UI/UX', 'level' => 'Proficient', 'icon' => 'uiux', 'tag' => 'Mobile-First Design'],
                ],
            ],
            'backend' => [
                'title' => 'Backend & API Development',
                'description' => 'Building scalable RESTful web services and business logic',
                'items' => [
                    ['name' => 'Laravel 12', 'level' => 'Proficient', 'icon' => 'laravel', 'tag' => 'MVC / Routing / Eloquent'],
                    ['name' => 'Node.js', 'level' => 'Proficient', 'icon' => 'nodejs', 'tag' => 'Async Runtime'],
                    ['name' => 'Express.js', 'level' => 'Proficient', 'icon' => 'express', 'tag' => 'Microservices & Routing'],
                    ['name' => 'REST/API Development', 'level' => 'Proficient', 'icon' => 'api', 'tag' => 'JSON Endpoints & Auth'],
                ],
            ],
            'databases' => [
                'title' => 'Database Management',
                'description' => 'Relational and document storage design, optimization, and queries',
                'items' => [
                    ['name' => 'MySQL', 'level' => 'Proficient', 'icon' => 'mysql', 'tag' => 'Relational & SQL Queries'],
                    ['name' => 'MongoDB', 'level' => 'Intermediate', 'icon' => 'mongodb', 'tag' => 'NoSQL & Document Store'],
                ],
            ],
            'tools' => [
                'title' => 'Developer Tools & Platforms',
                'description' => 'Version control, API testing, and daily engineering workflow',
                'items' => [
                    ['name' => 'GitHub', 'level' => 'Proficient', 'icon' => 'github', 'tag' => 'Version Control & PRs'],
                    ['name' => 'Git', 'level' => 'Proficient', 'icon' => 'git', 'tag' => 'Branching & Collaboration'],
                    ['name' => 'VS Code', 'level' => 'Advanced', 'icon' => 'vscode', 'tag' => 'Primary IDE & Extensions'],
                    ['name' => 'Postman', 'level' => 'Proficient', 'icon' => 'postman', 'tag' => 'API Testing & Debugging'],
                ],
            ],
            'soft' => [
                'title' => 'Professional & Problem-Solving Skills',
                'description' => 'Workplace qualities and collaboration strengths certified by CV',
                'items' => [
                    ['name' => 'Problem Solving', 'desc' => 'Analytical approach to debugging and structured coding', 'icon' => 'puzzle'],
                    ['name' => 'Teamwork & Collaboration', 'desc' => 'Effective team player in cross-functional environments', 'icon' => 'users'],
                    ['name' => 'Communication Skills', 'desc' => 'Clear technical and interpersonal verbal/written exchange', 'icon' => 'chat'],
                    ['name' => 'Time Management', 'desc' => 'Punctual milestone delivery and organized workflow', 'icon' => 'clock'],
                    ['name' => 'Analytical Thinking', 'desc' => 'Data-driven evaluation of requirements and edge-cases', 'icon' => 'lightbulb'],
                    ['name' => 'Quick Learning', 'desc' => 'Rapid adaptation to emerging frameworks and team conventions', 'icon' => 'bolt'],
                ],
            ],
        ];

        $projects = [
            [
                'id' => 'chatapp',
                'title' => 'ChatApp',
                'badge' => 'Priority Project',
                'category' => 'Real-time Chat Application',
                'description' => 'A modern real-time chat application built with Laravel and WebSocket technology. Features instant messaging, user authentication, and a sleek UI designed for seamless communication.',
                'technologies' => ['typescript', 'WebSocket', 'JavaScript', 'HTML5', 'CSS3'],
                'github_url' => 'https://github.com/TITOMUTETHIA/remix-of-purple-muse',
                'live_url' => null,
                'highlights' => [
                    'Real-time chat functionality with WebSocket integration',
                    'User authentication and secure session management',
                    'Clean and intuitive user interface with Blade templating',
                    'Responsive design for mobile and desktop users',
                ],
                'accent' => 'purple',
                'featured' => true,
            ],
            [
                'id' => 'eshop-mobile-client',
                'title' => 'eShop Mobile Client',
                'badge' => 'Priority Project',
                'category' => 'E-commerce Application',
                'description' => 'A responsive mobile client for an e-commerce platform, providing a seamless shopping experience with product browsing, cart management, and secure checkout.',
                'technologies' => ['c#'],
                'github_url' => 'https://github.com/TITOMUTETHIA/eshop-mobile-client.git',
                'live_url' => null,
                'highlights' => [
                    'Mobile-first design for optimal user experience on smartphones',
                    'Secure user authentication and session management',
                    'Integration with backend APIs for product data and order processing',
                    'Interactive shopping cart with real-time updates and notifications',
                ],
                'accent' => 'emerald',
                'featured' => true,
            ],
            [
                'id' => 'tip-calculator',
                'title' => 'Tip Calculator',
                'badge' => 'Priority Project',
                'category' => 'Mobile Application',
                'description' => 'A simple and intuitive tip calculator app designed to help users quickly determine the appropriate tip amount for their service providers.',
                'technologies' => ['c#'],

                'github_url' => null,
                'github_profile' => 'https://github.com/TITOMUTETHIA/TipCalculator.git',
                'live_url' => null,
                'highlights' => [
                    'Simple and intuitive user interface',
                    'Instant tip calculation based on bill amount and service quality',
                    'Support for multiple currency formats',
                    'Responsive design for mobile devices',
                ],
                'accent' => 'teal',
                'featured' => true,
            ],
            [
                'id' => 'portfolio-admin',
                'title' => 'Portfolio Admin Panel',
                'badge' => 'CV Highlight',
                'category' => 'Full-Stack Web Development',
                'description' => 'Developed a comprehensive admin panel for managing portfolio content, including projects, skills, and personal information. Built with React.js for the frontend and Node.js/Express.js for the backend, ensuring a seamless user experience and efficient data handling.',
                'technologies' => [ 'JavaScript', 'HTML5', 'CSS3', 'C#'],
                'github_url' => null,
                'github_profile' => 'https://github.com/TITOMUTETHIA/TitoPortfolioAdmin.git',
                'live_url' => null,
                'highlights' => [
                    'Dynamic content management for portfolio sections',
                    'Secure authentication and role-based access control',
                    'RESTful API integration for data retrieval and updates',
                    'Responsive design for desktop and mobile administration',
                ],
                'accent' => 'indigo',
                'featured' => false,
            ],
            [
                'id' => 'furniture-ecommerce',
                'title' => 'E-Commerce Furniture Website – Frontend',
                'badge' => 'CV Highlight',
                'category' => 'Frontend UI/UX Engineering',
                'description' => 'Engineered a modern, responsive e-commerce furniture store interface emphasizing aesthetic appeal and intuitive UI/UX. Includes product showcase grids, detailed specification views, interactive shopping cart, and fluid multi-device layouts.',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'UI/UX Design', 'Responsive Web'],
                'github_url' => null,
                'github_profile' => 'https://github.com/dinidu2002',
                'live_url' => null,
                'highlights' => [
                    'Aesthetic glassmorphism card layouts & hover effects',
                    'Dynamic product catalog with filtering concepts',
                    'Intuitive shopping cart drawer & state updates',
                    'Fully responsive across smartphones, tablets, and desktops',
                ],
                'accent' => 'sky',
                'featured' => false,
            ],
        ];

        $education = [
            [
                'degree' => 'Higher National Diploma (HND) in Information Technology',
                'institution' => 'Sri Lanka Institute of Advanced Technological Education (SLIATE)',
                'campus' => 'SLIATE – Kandy',
                'period' => '2023 / 2024 Batch',
                'status' => 'Ongoing / Advanced Level Qualification',
                'badge' => 'Current Tertiary Qualification',
                'details' => [
                    'In-depth study of Object-Oriented Programming (Java, PHP), Software Engineering, and Database Management Systems (MySQL).',
                    'Practical coursework covering Web Application Development, System Analysis & Design, and Computer Networking.',
                    'Rigorous academic projects strengthening software development lifecycle (SDLC) comprehension and industry-standard coding practices.',
                ],
            ],
            [
                'degree' => 'G.C.E. Advanced Level – Technology Stream',
                'institution' => 'Ministry of Education, Sri Lanka',
                'campus' => 'National Examination',
                'period' => '2022',
                'status' => 'Successfully Completed',
                'badge' => 'National High School Exam',
                'details' => [
                    'Engineering Technology — Grade B',
                    'Science for Technology — Grade C',
                    'Information & Communication Technology (ICT) — Grade S',
                ],
            ],
        ];

        $experience = [
            [
                'role' => 'School Leaver / Trainee',
                'company' => 'Regional Development Bank (RDB)',
                'duration' => '1 Year Experience',
                'badge' => '1 Year Professional Experience',
                'type' => 'Banking Operations & Customer Support',
                'responsibilities' => [
                    'Assisted branch staff with day-to-day banking procedures and administrative activities.',
                    'Provided attentive customer service and direct support to bank clients, answering queries courteously.',
                    'Assisted staff with documentation, data entry, record management, and ledger verification with high accuracy.',
                    'Handled diverse customer inquiries professionally and guided them to appropriate financial departments.',
                    'Cultivated strong interpersonal communication, teamwork, time-management, and conflict-resolution abilities in a busy environment.',
                    'Strictly maintained data confidentiality and customer privacy while handling sensitive documentation.',
                ],
            ],
        ];

        $references = [
            [
                'name' => 'V.G.S. Pradeepika',
                'title' => 'Senior Lecturer',
                'institution' => 'SLIATE – Kandy',
                'email' => 'pradeepika@sliate.ac.lk',
                'phone' => '071 803 5218',
            ],
            [
                'name' => 'D.K. Kumarihami',
                'title' => 'Head of IT Department',
                'institution' => 'SLIATE – Kandy',
                'email' => 'dilinikanachana@sliate.ac.lk',
                'phone' => '077 788 2155',
            ],
        ];

        return view('portfolio', compact(
            'profile',
            'skills',
            'projects',
            'education',
            'experience',
            'references'
        ));
    }

    /**
     * Download the CV PDF file.
     */
    public function downloadCv()
    {
        $filePath = public_path('cv/Dinidu_Dissanayake_CV.pdf');

        if (file_exists($filePath)) {
            return Response::download($filePath, 'Dinidu_Dissanayake_CV.pdf', [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="Dinidu_Dissanayake_CV.pdf"',
            ]);
        }

        return redirect()->route('home')->with('error', 'CV file is temporarily unavailable. Please contact directly via email.');
    }

    /**
     * Handle contact form submission.
     * Logs the inquiry and provides a direct, honest feedback response with mailto fallback.
     */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|min:10|max:3000',
        ]);

        // Securely record inquiry in Laravel log
        Log::info('Portfolio Contact Form Received', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message_length' => strlen($validated['message']),
            'ip' => $request->ip(),
            'timestamp' => now()->toIso8601String(),
        ]);

        $mailtoLink = 'mailto:dissanayakedinidu@gmail.com?subject=' . rawurlencode('[Portfolio Inquiry] ' . $validated['subject']) . '&body=' . rawurlencode("From: {$validated['name']} ({$validated['email']})\n\n{$validated['message']}");

        return redirect()->to(url()->previous() . '#contact')->with([
            'success' => "Thank you, {$validated['name']}! Your message has been logged. For an immediate direct response, you may also launch your email client with one click.",
            'direct_mailto' => $mailtoLink,
            'sender_name' => $validated['name'],
        ]);
    }
}
